<style lang="scss" scoped>
.ts-search-field-wrapper {
  width: 100%;
  display: flex;
  @media only screen and (max-width: 600px) {
    flex-direction: column;
  }
}

.ts-origin,
.ts-destination {
  position: relative;
  width: 100%;
}
.header {
  border-bottom: 1px solid rgb(229, 231, 235);
  display: flex;
  justify-content: space-between;
  padding: 16px;
  margin-bottom: 16px;
  .header-title {
    font-weight: 600;
    font-size: 15px;
    color: rgb(17, 24, 39);
  }
  .close-dialog {
    svg {
      width: 24px;
      fill: #000;
    }
  }
}
.search-content {
  padding: 16px;
}
</style>
<template>
  <div class="ts-search-field-wrapper">
    <div class="ts-origin">
      <Autocomplete
        @click="onFocus"
        ref="originAutocomplete"
        v-model="getOriginSearch"
        :items="originItems"
        :placeholder="$t('Departing_From')"
        :localStorage="localData.origin"
        :displaySearchWord="displayOrigin"
        :from="true"
        :userLocation="userLocation"
      >
        <template #item="{ item, active }">
          <SearchResult :item="item" :active="active" />
        </template>
      </Autocomplete>
    </div>
    <SwapIcon @click="displacement"></SwapIcon>
    <div class="ts-destination">
      <Autocomplete
        @click="onFocus"
        ref="destinationAutocomplete"
        v-model="getDestinationSearch"
        :items="destinationItems"
        :placeholder="$t('Going_To')"
        :localStorage="localData.destination"
        :displaySearchWord="displayDestination"
        :userLocation="userLocation"
      >
        <template #item="{ item, active }">
          <SearchResult :item="item" :active="active" />
        </template>
      </Autocomplete>
    </div>

    <v-dialog
      v-if="isMobile"
      v-model="dialog"
      attach
      fullscreen
      transition="fade-transition"
    >
      <div class="header">
        <span class="header-title">{{ dialogHeaderLabel }}</span>
        <span @click="dialog = false" class="close-dialog">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path
              fillrule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              cliprule="evenodd"
            ></path>
          </svg>
        </span>
      </div>
      <div class="search-content">
        <div class="ts-origin">
          <Autocomplete
            @focus="resultMode = 'origin'"
            ref="originAutocomplete"
            v-model="getOriginSearch"
            :items="originItems"
            :placeholder="$t('Departing_From')"
            :localStorage="localData.origin"
            :displaySearchWord="displayOrigin"
            :from="true"
            :userLocation="userLocation"
          >
          </Autocomplete>
        </div>
        <SwapIcon @click="displacement"></SwapIcon>
        <div class="ts-destination">
          <Autocomplete
            @focus="resultMode = 'dist'"
            ref="destinationAutocomplete"
            v-model="getDestinationSearch"
            :items="destinationItems"
            :placeholder="$t('Going_To')"
            :localStorage="localData.destination"
            :displaySearchWord="displayDestination"
            :userLocation="userLocation"
          >
          </Autocomplete>
        </div>

        <div class="results">
          <div v-for="(item, index) in searchResult" :key="index">
            <SearchResult
              @click="onSelect(item)"
              :item="item"
              :active="false"
            />
          </div>
        </div>
      </div>
    </v-dialog>
  </div>
</template>
<script>
import moment from "moment";
import SwapIcon from "../../Common/SwapIcon.vue";
import SearchResult from "../SearchResult.vue";
export default {
  components: {
    SwapIcon,
    SearchResult,
  },
  data() {
    return {
      name: "flight",
      resultMode: "origin",
      toast: {
        toastText: "",
        color: "red",
      },
      dialog: false,
      a: true,
      showDialog: false,
      origin: null,
      displayOrigin: null,
      destination: null,
      displayDestination: null,
      getOriginSearch: null,
      getDestinationSearch: null,
      IsFlexiSearch: false,
      ns: false,
      departDate: null,
      returnDate: null,
      lastDate: null,
      originItems: [],
      destinationItems: [],
      localData: {},
      userLocation: {},
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
        if (val && typeof val == "object") {
          setTimeout(() => {
            this.$refs.destinationAutocomplete.$el
              .querySelector("input")
              .focus();
          }, 1);
        }
      },
      // immediate: true,
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
        if (this.isMobile && val.ct) {
          this.dialog = false;
        }
        this.searchRequest(val).then((res) => {
          this.destinationItems = res;
        });
      },
      // immediate: true,
    },
    origin: {
      deep: true,
      handler() {
        this.$emit("onOriginChange", this.origin);
      },
    },
    destination: {
      deep: true,
      handler() {
        this.$emit("onDestinationChange", this.destination);
      },
    },
  },
  computed: {
    disabledButton() {
      let adult = this.$store.state.adult;
      if (
        !this.origin ||
        !this.origin.ct ||
        !this.destination ||
        !this.destination.ct ||
        !this.departDate ||
        !this.returnDate ||
        adult == 0
      ) {
        return true;
      }
    },
    isMobile() {
      return window.innerWidth < 600;
    },
    dialogHeaderLabel() {
      return this.resultMode == "origin"
        ? this.$t("Going_To")
        : this.$t("Departing_From");
    },
    searchResult() {
      return this.resultMode == "origin"
        ? this.originItems
        : this.destinationItems;
    },
  },
  async mounted() {
    try {
      // this.searchRequest("a").then((res) => {
      //   this.originItems = res;
      // });
      // this.searchRequest("a").then((res) => {
      //   this.destinationItems = res;
      // });
      let { data } = await this.axios.get(
        `https://tripsupport.ca/wp-json/trip-support-endpoints/v1/user/geolocation`
      );
      let { data: res } = await this.axios.get(
        `https://search.tripsupport.ca/api/searchairports?searchvalue=${data.data.city.toLowerCase()}`
      );
      if (res.length) {
        this.userLocation = res[0];
        this.$cookie.set(
          "userLocation",
          JSON.stringify({
            ct: this.userLocation.ct,
            ac: this.userLocation.ac,
            cc: this.userLocation.cc,
          })
        );
      } else {
        this.userLocation = res;
        this.$cookie.set(
          "userLocation",
          JSON.stringify({
            ct: "Toronto",
            ac: "YTO",
            cc: "CA",
          })
        );
      }
    } catch (e) {
      console.log(e);
    }
    let getFlightLastSearch = localStorage.getItem("lastFlightRoundTripSearch");
    if (!getFlightLastSearch) {
      return;
    }

    this.localData = JSON.parse(getFlightLastSearch);
    this.displayOrigin =
      this.localData.origin.ac +
      "-" +
      this.localData.origin.ct +
      "-" +
      this.localData.origin.an;
    this.origin = this.localData.origin;
    this.displayDestination =
      this.localData.destination.ac +
      "-" +
      this.localData.destination.ct +
      "-" +
      this.localData.destination.an;
    this.destination = this.localData.destination;
    if (this.localData.date) {
      this.lastDate = this.localData.date;
      this.departDate = this.changeFormat(this.localData.date.startDate);
      this.returnDate = this.changeFormat(this.localData.date.endDate);
    }
  },
  methods: {
    onFocus() {
      this.dialog = true;
    },
    onSelect(item) {
      if (this.resultMode == "origin") {
        this.origin = item;
        this.displayOrigin =
          this.origin.ac + "-" + this.origin.ct + "-" + this.origin.an;
      } else {
        this.destination = item;
        this.displayDestination =
          this.destination.ac +
          "-" +
          this.destination.ct +
          "-" +
          this.destination.an;
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
    changeFormat(val) {
      return moment(val).format("D MMM YYYY");
    },
    getRangeDate(e) {
      this.lastDate = e;
      this.departDate = this.changeFormat(e.startDate);
      this.returnDate = this.changeFormat(e.endDate);
    },
    clearDate() {
      this.departDate = null;
      this.returnDate = null;
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
      if (
        !this.origin ||
        !this.origin.ct ||
        !this.destination ||
        !this.destination.ct
      ) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText: "Please Enter Departing From and Going To",
        };
        if (!this.origin || !this.origin.ct) {
          this.$gtag.event("Validation", {
            event_category: "Flight Runway",
            event_label: "User entered an invalid Departing From",
          });
        }
        if (!this.destination || !this.destination.ct) {
          this.$gtag.event("Validation", {
            event_category: "Flight Runway",
            event_label: "User entered an invalid Going To",
          });
        }
        return;
      }
      if (!this.departDate || !this.returnDate) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText: "Please Enter departure date",
        };
        if (!this.departDate) {
          this.$gtag.event("Validation", {
            event_category: "Flight Runway",
            event_label: "User entered an invalid Departure",
          });
        }
        if (!this.returnDate) {
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
        origin: this.origin,
        destination: this.destination,
        date: this.lastDate,
        class: this.$store.state.airfaireType,
        adult: this.$store.state.adult,
        infant: this.$store.state.infant,
        child: this.$store.state.child,
      };
      localStorage.setItem(
        "lastFlightRoundTripSearch",
        JSON.stringify(searchObject)
      );
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
      let href = `https://secure.tripsupport${url}/flight/roundtrip;tripType=roundtrip;destination=${this.destination.ac};origin=${this.origin.ac};IsFlexiSearch=${this.IsFlexiSearch};ns=${this.ns};departDate=${this.departDate};returnDate=${this.returnDate};adult=${this.adult};child=${this.child};infant=${this.infant};class=${this.class};multiOrigin=;multiDestination=;multidate=;${lang}`;
      window.open(href, "_self");
    },
  },
};
</script>