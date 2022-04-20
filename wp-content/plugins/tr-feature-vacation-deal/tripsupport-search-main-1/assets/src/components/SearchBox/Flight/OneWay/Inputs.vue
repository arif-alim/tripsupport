<style lang="scss" scoped>
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
        @search="onOriginSearch"
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
      dialog: false,
      resultMode: "origin",
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
    // this.searchRequest("a").then((res) => {
    //   this.originItems = res;
    // });
    // this.searchRequest("a").then((res) => {
    //   this.destinationItems = res;
    // });
    try {
      let { data } = await this.axios.get(
        `https://tripsupport.ca/wp-json/trip-support-endpoints/v1/user/geolocation`
      );
      let { data: res } = await this.axios.get(
        `https://search.tripsupport.ca/api/searchairports?searchvalue=${data.data.city.toLowerCase()}`
      );
      this.userLocation = res[0];
      if (res.length) {
        this.userLocation = res[0];
        let locationSearch = res[0];
        this.$cookie.set(
          "userLocation",
          JSON.stringify({
            ct: locationSearch.ct,
            ac: locationSearch.ac,
            cc: locationSearch.cc,
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
        this.origin = {
          ac: "YTO",
          an: "Toronto All airports",
          cc: "CA",
          cn: "CA",
          ct: "Toronto",
        };
        this.displayOrigin =
          "YTO" + "-" + "Toronto" + "-" + "Toronto All airports";
      }
    } catch (e) {
      console.log(e);
    }

    let getLastSearch = localStorage.getItem("lastFlightOneWaySearch");
    if (!getLastSearch) {
      return;
    }
    this.localData = JSON.parse(getLastSearch);
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
    }
    this.firstTime = false;
  },
  computed: {
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
    onFocus() {
      this.dialog = true;
    },
    onOriginSearch(search) {
      console.log(search);
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
            event_category: "Flight One Way",
            event_label: "User entered an invalid Departing From",
          });
        }
        if (!this.destination || !this.destination.ct) {
          this.$gtag.event("Validation", {
            event_category: "Flight One Way",
            event_label: "User entered an invalid Going To",
          });
        }
        return;
      }
      if (!this.departDate) {
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
        origin: this.origin,
        destination: this.destination,
        date: this.lastDate,
        class: this.$store.state.airfaireType,
        adult: this.$store.state.adult,
        infant: this.$store.state.infant,
        child: this.$store.state.child,
      };
      localStorage.setItem(
        "lastFlightOneWaySearch",
        JSON.stringify(searchObject)
      );
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
      let href = `https://secure.tripsupport${url}/flight/oneway;tripType=oneway;destination=${this.destination.ac};origin=${this.origin.ac};IsFlexiSearch=${this.IsFlexiSearch};ns=${this.ns};departDate=${this.departDate};returnDate=;adult=${this.adult};child=${this.child};infant=${this.infant};class=${this.class};multiOrigin=;multiDestination=;multidate=;${lang}`;
      window.open(href, "_self");
    },
    onSelect(item) {
      if (this.resultMode == "origin") {
        this.origin = item;
      } else {
        this.destination = item;
      }
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