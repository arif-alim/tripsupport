<style lang="scss" scoped>
.ts-field-wrapper {
  display: flex;
  align-items: center;
  @media only screen and (max-width: 600px) {
    flex-direction: column;
  }
}
.ts-inputs-wrapper {
  display: flex;
  flex: 0 0 70%;
  padding-right: 16px;
  @media only screen and (max-width: 600px) {
    flex: 0 0 100%;
    width: 100%;
    padding-right: 0;
    flex-direction: column;
  }
}
.ts-date-picker {
  flex: 0 0 30%;
  @media only screen and (max-width: 600px) {
    width: 100%;
    flex: 0 0 100%;
    margin-top: 16px;
  }
}
.ts-origin,
.ts-destination {
  position: relative;
  width: 100%;
}
.ts-error {
  margin: 24px 0;
  p {
    font-weight: 500;
  }
}
</style>
<template>
  <section>
    <div v-if="showDialog" class="ts-error">
      <p>
        {{ toast.toastText }}
      </p>
    </div>
    <div class="ts-field-wrapper">
      <Inputs
        v-model="model"
        :userLocation="true"
        :singleDatePicker="false"
        @onFocus="onFocus"
      ></Inputs>
    </div>
    <div class="ts-action-wrapper">
      <div class="ts-checkbox-wrapper">
        <div>
          <Checkbox v-model="model.isFlexiSearch" label="Flexible Search" />
        </div>
        <div class="non-stop-checkbox">
          <Checkbox v-model="model.ns" label="Non-stop flights only" />
        </div>
      </div>
      <div class="ts-button">
        <SearchButton @search="save" :buttonText="`${$t('Search_Flights')}`" />
      </div>
    </div>
    <!-- <Toast v-model="showDialog" :toast="toast" /> -->
  </section>
</template>

<script>
import moment from "moment";
import Checkbox from "../../Common/Checkbox.vue";
import Inputs from "../MultiCity/Inputs.vue";
export default {
  components: {
    Checkbox,
    Inputs,
  },
  data() {
    return {
      name: "flight",
      model: {
        origin: null,
        destination: null,
        departureDate: null,
        returnDate: null,
        isFlexiSearch: false,
        ns: false,
      },
      toast: {
        toastText: "",
        color: "#e11d48",
      },
      showDialog: false,
      origin: null,
      displayOrigin: null,
      destination: null,
      displayDestination: null,
      getOriginSearch: null,
      getDestinationSearch: null,
      departDate: null,
      returnDate: null,
      lastDate: null,
      changeOrigin: false,
      originItems: [],
      destinationItems: [],
      adult: 1,
      infant: 0,
      child: 0,
      class: this.$store.commit("getAirType", `${this.$t("Economy")}`),
      localData: {},
      userLocation: {},
      firstTime: true,
    };
  },
  computed: {
    disabledButton() {
      let adult = this.$store.state.adult;
      if (
        !this.model.origin ||
        !this.model.destination ||
        !this.model.departureDate ||
        !this.model.returnDate ||
        adult == 0
      ) {
        return true;
      }
    },
    isMobile() {
      return window.innerWidth < 600;
    },
  },
  async mounted() {
    try {
      let history = localStorage.getItem("flights.roundTrip");
      if (history) {
        this.model = JSON.parse(history);
      } else {
        this.setUserLocation();
      }
    } catch (e) {
      console.log(e);
    }
  },
  methods: {
    async setUserLocation() {
      try {
        let defaultLocation = {
          ac: "YTO",
          an: "Toronto All airports",
          cc: "CA",
          cn: "Canada",
          ct: "Toronto",
        };
        let { data } = await this.axios.get(
          `https://tripsupport.ca/wp-json/trip-support-endpoints/v1/user/geolocation`
        );
        let { data: res } = await this.axios.get(
          `https://search.tripsupport.ca/api/searchairports?searchvalue=${data.data.city.toLowerCase()}`
        );
        this.$cookie.set("userLocation", JSON.stringify(defaultLocation));
        if (this.changeOrigin) return;
        if (res.length) {
          defaultLocation = res[0];
          this.model.origin = res[0];
        }
        this.model.origin = defaultLocation;
      } catch (e) {
        console.log(e);
      }
    },
    onFocus(mode) {
      if (mode == "origin") {
        this.changeOrigin = true;
      }
    },
    save() {
      this.class = this.$store.state.airfaireType;
      this.adult = this.$store.state.adult;
      this.infant = this.$store.state.infant;
      this.child = this.$store.state.child;
      if (!this.model.origin || !this.model.destination) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText: "Please Enter Departing From and Going To",
        };
        if (!this.model.origin) {
          this.$gtag.event("Validation", {
            event_category: "Flight Runway",
            event_label: "User entered an invalid Departing From",
          });
        }
        if (!this.model.destination) {
          this.$gtag.event("Validation", {
            event_category: "Flight Runway",
            event_label: "User entered an invalid Going To",
          });
        }
        return;
      }
      if (!this.model.departureDate || !this.model.returnDate) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText: "Please Enter departure date",
        };
        if (!this.model.departureDate) {
          this.$gtag.event("Validation", {
            event_category: "Flight Runway",
            event_label: "User entered an invalid Departure",
          });
        }
        if (!this.model.returnDate) {
          this.$gtag.event("Validation", {
            event_category: "Flight Runway",
            event_label: "User entered an invalid Return",
          });
        }
        return;
      }
      if (this.adult == 0) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText: "AdultCount should not be zero",
        };
        this.$gtag.event("Validation", {
          event_category: "Flight Runway",
          event_label: "User entered an invalid Traveller",
        });
        return;
      }
      let searchObject = {
        origin: this.model.origin,
        destination: this.model.destination,
        departureDate: this.model.departureDate,
        returnDate: this.model.returnDate,
        class: this.$store.state.airfaireType,
        adult: this.$store.state.adult,
        infant: this.$store.state.infant,
        child: this.$store.state.child,
        isFlexiSearch: this.model.isFlexiSearch,
        ns: this.model.ns,
      };
      localStorage.setItem("flights.roundTrip", JSON.stringify(searchObject));
      this.$gtag.event("Search", {
        event_category: "Flight Runway",
        event_label: "User submit new search",
      });
      let url = location.href;
      let lang = "lg=";
      if (this.$i18n.locale == "fr") {
        lang = lang + "fr-FR";
      } else {
        lang = lang + "en-EN";
      }
      url = url.substring(url.indexOf(".")).split("/")[0];
      if (url == "http:") {
        url = ".ca";
      }
      let href = `https://secure.tripsupport${url}/flight/roundtrip;tripType=roundtrip;destination=${searchObject.destination.ac};origin=${searchObject.origin.ac};IsFlexiSearch=${searchObject.isFlexiSearch};ns=${searchObject.ns};departDate=${searchObject.departureDate};returnDate=${searchObject.returnDate};adult=${searchObject.adult};child=${searchObject.child};infant=${searchObject.infant};class=${searchObject.class};multiOrigin=;multiDestination=;multidate=;${lang}`;
      window.open(href, "_self");
    },
  },
};
</script>
