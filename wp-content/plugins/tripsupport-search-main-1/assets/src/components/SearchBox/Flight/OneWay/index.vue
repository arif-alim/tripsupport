
<style lang="scss" scoped>
.item {
  display: flex;
  width: 100%;
  align-items: center;
  &-icon {
    margin-right: 8px;
    display: flex;
  }
  &-text {
    color: #ababc4;
  }
  svg {
    fill: #ababc4;
  }
  &:hover,
  &.active {
    .item-text {
      color: #0c0d25;
    }
    svg {
      fill: #007aff;
    }
  }
}
.ts-field-wrapper {
  display: flex;
  align-items: center;
}

.ts-origin .ts-input,
.ts-destination .ts-input {
  width: 95%;
}
.ts-origin,
.ts-destination {
  position: relative;
  width: 100%;
}
.ts-svg {
  margin-right: 16px;
  margin-top: 45px;
  cursor: pointer;
}
.ts-airplane-icon {
  position: absolute;
  left: 9px;
  bottom: 13px;
}

.ts-svg svg {
  fill: #ababc4;
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
      <Inputs @onFocus="onFocus" v-model="model" :userLocation="true"></Inputs>
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
      model: {
        origin: null,
        destination: null,
        departureDate: null,
        returnDate: null,
        isFlexiSearch: false,
        ns: false,
      },
      name: "flight",
      toast: {
        toastText: "",
        color: "red",
      },
      showDialog: false,
      origin: null,
      displayOrigin: null,
      destination: null,
      displayDestination: null,
      IsFlexiSearch: false,
      departDate: null,
      lastDate: null,
      originItems: [],
      destinationItems: [],
      adult: 1,
      infant: 0,
      child: 0,
      class: null,
      ns: false,
      getOriginSearch: null,
      getDestinationSearch: null,
      localData: {},
      userLocation: {},
      firstTime: true,
    };
  },
  watch: {
    getOriginSearch: {
      handler: function (val) {
        this.origin = val;
        if (
          this.isMobile &&
          val.ct &&
          this.$refs.originAutocomplete.openMobileDialog == true
        ) {
          this.$refs.destinationAutocomplete.openMobileDialog = true;
        } else {
          this.$refs.destinationAutocomplete.openMobileDialog = false;
        }
        this.searchRequest(val).then((res) => {
          this.originItems = res;
        });
        if (val && typeof val == "object" && !this.isMobile) {
          this.$refs.destinationAutocomplete.$el.querySelector("input").focus();
        }
      },
    },
    getDestinationSearch: {
      handler: function (val) {
        this.destination = val;
        if (
          !this.isMobile &&
          val.ct &&
          this.$refs.destinationAutocomplete.showMenu == true
        ) {
          this.$refs.datePicker.showDatepicker();
        }
        if (
          this.isMobile &&
          val.ct &&
          this.$refs.destinationAutocomplete.openMobileDialog == true
        ) {
          this.$refs.datePicker.$children[0].open = true;
        }
        this.searchRequest(val).then((res) => {
          this.destinationItems = res;
        });
      },
    },
  },
  async mounted() {
    let history = localStorage.getItem("flights.oneWay");
    if (history) {
      this.model = JSON.parse(history);
    } else {
      this.setUserLocation();
    }
    // this.searchRequest("a").then((res) => {
    //   this.originItems = res;
    // });
    // this.searchRequest("a").then((res) => {
    //   this.destinationItems = res;
    // });
  },
  computed: {
    isMobile() {
      return window.innerWidth < 600;
    },
    disabledButton() {
      let adult = this.$store.state.adult;
      if (
        !this.origin ||
        !this.origin.ct ||
        !this.destination ||
        !this.destination.ct ||
        !this.departDate ||
        adult == 0
      ) {
        return true;
      }
    },
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
    searchRequest(value) {
      return new Promise((resolve) => {
        if (value && !value.ct) {
          this.axios
            .get(
              `https://search.tripsupport.ca/api/searchairports?searchvalue=${value.trim()}`
            )
            .then((response) => {
              resolve(response.data);
            });
        }
      });
    },
    clearDate() {
      this.departDate = null;
    },
    displacement() {
      this.displayOrigin =
        this.origin.ac + "-" + this.origin.ct + "-" + this.origin.an;
      this.displayDestination =
        this.destination.ac +
        "-" +
        this.destination.ct +
        "-" +
        this.destination.an;
      let origin = this.origin;
      let displayOrigin = this.displayOrigin;
      let destination = this.destination;
      let displayDestination = this.displayDestination;

      this.origin = destination;
      this.displayOrigin = displayDestination;
      this.destination = origin;
      this.displayDestination = displayOrigin;
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
            event_category: "Flight One Way",
            event_label: "User entered an invalid Departing From",
          });
        }
        if (!this.model.destination) {
          this.$gtag.event("Validation", {
            event_category: "Flight One Way",
            event_label: "User entered an invalid Going To",
          });
        }
        return;
      }
      if (!this.model.departureDate) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText: "Please Enter departure date",
        };
        this.$gtag.event("Validation", {
          event_category: "Flight One Way",
          event_label: "User entered an invalid Departure",
        });

        return;
      }
      if (this.adult == 0) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText: "AdultCount should not be zero",
        };
        this.$gtag.event("Validation", {
          event_category: "Flight One Way",
          event_label: "User entered an invalid Traveller",
        });
        return;
      }
      let searchObject = {
        origin: this.model.origin,
        destination: this.model.destination,
        departureDate: this.model.departureDate,
        class: this.$store.state.airfaireType,
        adult: this.$store.state.adult,
        infant: this.$store.state.infant,
        child: this.$store.state.child,
        isFlexiSearch: this.model.isFlexiSearch,
        ns: this.model.ns,
      };
      localStorage.setItem("flights.oneWay", JSON.stringify(searchObject));
      this.$gtag.event("Search", {
        event_category: "Flight One Way",
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
      let href = `https://secure.tripsupport${url}/flight/oneway;tripType=oneway;destination=${searchObject.destination.ac};origin=${searchObject.origin.ac};IsFlexiSearch=${searchObject.isFlexiSearch};ns=${searchObject.ns};departDate=${searchObject.departureDate};returnDate=;adult=${searchObject.adult};child=${searchObject.child};infant=${searchObject.infant};class=${searchObject.class};multiOrigin=;multiDestination=;multidate=;${lang}`;
      window.open(href, "_self");
    },
    getRangeDate(e) {
      this.lastDate = e;
      this.departDate = this.changeFormat(e.startDate);
    },
    changeFormat(val) {
      return moment(val).format("D MMM YYYY");
    },
    onOriginChange(e) {
      this.origin = e;
    },
    onDestinationChange(e) {
      if (!e.cn) return;
      if (JSON.stringify(e) !== JSON.stringify(this.destination)) {
        if (!this.firstTime) {
          this.$refs.datePicker.showDatepicker();
        }
      }
      this.destination = e;
    },
  },
};
</script>
