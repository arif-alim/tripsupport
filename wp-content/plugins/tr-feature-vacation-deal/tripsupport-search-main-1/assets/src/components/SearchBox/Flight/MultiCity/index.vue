<style lang="scss" scoped>
.header {
  display: flex;
  height: 30px;
  align-items: center;
  justify-content: space-between;
  padding: 0 12px;
  background: rgb(249, 250, 251);
  margin-bottom: 12px;
  &-title {
    font-size: 0.9125rem;
    font-weight: 600;
  }
  &-close {
    color: rgb(200, 30, 30);
    font-size: 0.845rem;
    font-weight: 700;
    display: flex;
    align-items: center;
    cursor: pointer;
    svg {
      margin-right: 2px;
      fill: rgb(238, 64, 64);
    }
  }
}
.ts-menu {
  top: 82px;
}
.ts-fields-wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
.ts-block-wrapper {
  flex: 0 0 100%;
  + .ts-block-wrapper {
    margin-top: 20px;
  }
}
.ts-remove-icon {
  cursor: pointer;
  position: absolute;
  right: -5px;
  bottom: 10px;
}
.ts-input-wrapper {
  position: relative;
  flex: 0 0 35%;
  padding-right: 16px;
}
.ts-date-picker {
  flex: 0 0 25%;
}
.ts-label {
  font-size: 12px;
  color: #66678f;
  display: flex;
  justify-content: flex-start;
  margin-bottom: 0 !important;
}
.ts-input {
  height: 48px;
  border: 1px solid rgba(171, 171, 196, 0.6);
  padding: 0 10px 0 36px;
  border-radius: 6px;
  background: #ffffff;
  outline: none;
  margin-right: 16px;
  margin-top: 16px;
  color: #66678f;
  font-size: 14px;
  font-weight: 500;
}
.ts-input::placeholder {
  color: #66678f;
  font-size: 14px;
  font-weight: 500;
}
.ts-svg {
  margin-right: 16px;
  margin-top: 40px;
}
.ts-airplane-icon {
  position: absolute;
  left: 9px;
  bottom: 13px;
}
.ts-dropdown-wrapper {
  padding: 10px 0;
  width: 352px;
}
.ts-dropdown-item {
  display: flex;
  justify-content: space-between;
  align-items: center;
  cursor: pointer;
  padding: 0 8px;
}
.ts-dropdown-item:not(:last-child) {
  margin-bottom: 10px;
}
.ts-dropdown-item:hover {
  background: rgba(0, 122, 255, 0.02);
}
.ts-dropdown-item:hover .ts-dropdown-city-name {
  color: #0c0d25;
}
.ts-dropdown-item:hover .ts-dropdown-city-name span svg {
  fill: #007aff;
}
.ts-dropdown-city-name {
  font-size: 16px;
  font-weight: 500;
  color: #ababc4;
  display: flex;
  align-items: center;
}
.ts-dropdown-city-name span svg {
  fill: #ababc4;
  margin-right: 5px;
  margin-bottom: -5px;
}
.ts-dropdown-ariport-name {
  font-size: 12px;
  color: #ababc4;
  margin-left: 30px;
  margin-top: 5px;
}
.ts-dropdown-airport {
  font-size: 12px;
  color: #666;
}
.active {
  background: rgba(0, 122, 255, 0.02);
}
.active .ts-dropdown-city-name {
  color: #0c0d25;
}
.active .ts-dropdown-city-name span svg {
  fill: #007aff;
}

.ts-svg svg {
  fill: #ababc4;
}

.add-more-wrapper {
  display: flex;
  justify-content: flex-end;
  width: 100%;
}
.ts-add-more {
  display: flex;
  align-items: center;
  padding: 8px 16px;
  font-size: 0.845rem;
  color: var(--primary-base);
  background: rgba(102, 103, 143, 0.1);
  border-radius: 4px;
  margin-right: 12px;
  font-weight: 700;
  cursor: pointer;
  margin-top: 8px;
  &:disabled {
    opacity: 0.5;
  }
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
    <div class="ts-fields-wrapper">
      <div
        class="ts-block-wrapper"
        v-for="(trip, index) in tripsSearchData"
        :key="index"
      >
        <div class="header">
          <span class="header-title">Flight {{ index + 1 }}</span>
          <span class="header-close" @click="remove(index)" v-if="index > 0">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              width="16px"
            >
              <path
                fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"
              ></path>
            </svg>
            Remove
          </span>
        </div>
        <Inputs
          v-model="tripsSearchData[index]"
          :startDate="getStartDate(index)"
          :userLocation="index == 0"
          @onFocus="onFocus"
        ></Inputs>
      </div>
      <div class="add-more-wrapper">
        <button
          class="ts-add-more"
          v-if="tripsSearchData.length < 4"
          @click="addNewTrips"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
            width="16px"
            fill="currentColor"
          >
            <path
              fill-rule="evenodd"
              d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
              clip-rule="evenodd"
            ></path>
          </svg>
          Add Trip
        </button>
      </div>
      <div class="ts-action-wrapper">
        <div class="ts-checkbox-wrapper">
          <div>
            <Checkbox v-model="IsFlexiSearch" label="Flexible Search" />
          </div>
          <div class="non-stop-checkbox">
            <Checkbox v-model="ns" label="Non-stop flights only" />
          </div>
        </div>
        <div class="ts-button">
          <div>
            <SearchButton
              @search="save"
              :buttonText="`${$t('Search_Flights')}`"
            />
          </div>
        </div>
      </div>
      <!-- <Toast v-model="showDialog" :toast="toast" /> -->
    </div>
  </section>
</template>
<script>
import moment from "moment";
import Checkbox from "../../Common/Checkbox.vue";
import Inputs from "./Inputs.vue";
let freez_model = {
  origin: null,
  destination: null,
  departureDate: null,
  returnDate: null,
};
export default {
  components: {
    Checkbox,
    Inputs,
  },
  data() {
    return {
      name: "flight",
      tripsSearchData: [],
      IsFlexiSearch: false,
      ns: false,
      showDialog: false,
      startDate: moment().add(5, "d"),
      toast: {
        toastText: "",
        color: "#e11d48",
      },
    };
  },
  created() {
    this.tripsSearchData.push(Object.assign({}, freez_model));
    this.tripsSearchData.push(Object.assign({}, freez_model));
  },
  mounted() {
    let history = localStorage.getItem("flights.multiCity");
    if (history) {
      history = JSON.parse(history);
      this.tripsSearchData = history.data;
      this.ns = history.ns;
      this.IsFlexiSearch = history.IsFlexiSearch;
      // this.getUserLocation();
      // return;
    } else {
      this.setUserLocation();
    }
    // let parsedGetLastSearch = JSON.parse(getLastSearch);
    // if (parsedGetLastSearch.date) {
    //   localStorage.clear();
    // }
    // this.tripsSearchData = parsedGetLastSearch;
  },
  computed: {
    disabledButton() {
      let adult = this.$store.state.adult;
      if (
        this.validation("origin") ||
        this.validation("destination") ||
        this.validation("date") ||
        adult == 0
      ) {
        return true;
      }
    },
    isMobile() {
      return window.innerWidth <= 600;
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
        if (this.changeOrigin) return;
        this.$cookie.set("userLocation", JSON.stringify(defaultLocation));
        if (res.length) {
          defaultLocation = res[0];
          this.tripsSearchData[0].origin = res[0];
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
    focusInput(e) {
      if (!this.isMobile) {
        e.target.select();
      }
    },
    getStartDate(index) {
      if (index == 0 || !this.tripsSearchData[index - 1].departureDate) {
        return new Date();
      } else {
        return moment(
          this.tripsSearchData[index - 1].departureDate,
          "D MMM YYYY"
        );
      }
    },
    fillInput(trip) {
      if (trip.originItems.length && trip.origin.length && !trip.origin.ct) {
        trip.origin = trip.originItems[0];
        trip.displayOrigin =
          trip.originItems[0].ac +
          "-" +
          trip.originItems[0].an +
          ", " +
          trip.originItems[0].cn;
        trip.openOriginDialog = false;
      }
      if (
        trip.DestinationItems.length &&
        trip.destination.length &&
        !trip.destination.ct
      ) {
        trip.destination = trip.DestinationItems[0];
        trip.displayDestination =
          trip.DestinationItems[0].ac +
          "-" +
          trip.DestinationItems[0].an +
          ", " +
          trip.DestinationItems[0].cn;
        trip.openDestinationDialog = false;
      }
    },
    async getUserLocation() {
      let { data } = await this.axios.get(
        `https://tripsupport.ca/wp-json/trip-support-endpoints/v1/user/geolocation`
      );
      let { data: res } = await this.axios.get(
        `https://search.tripsupport.ca/api/searchairports?searchvalue=${data.data.city.toLowerCase()}`
      );
      if (res.length) {
        let locationSearch = res[0];
        this.$cookie.set(
          "userLocation",
          JSON.stringify({
            ct: locationSearch.ct,
            ac: locationSearch.ac,
            cc: locationSearch.cc,
          })
        );
        this.tripsSearchData[0].origin = locationSearch;
        this.tripsSearchData[0].displayOrigin =
          locationSearch.ac +
          "-" +
          locationSearch.an +
          ", " +
          locationSearch.cn;
      } else {
        this.$cookie.set(
          "userLocation",
          JSON.stringify({
            ct: "Toronto",
            ac: "YTO",
            cc: "CA",
          })
        );
        this.tripsSearchData[0].origin = {
          ac: "YTO",
          an: "Toronto All airports",
          cc: "CA",
          cn: "CA",
          ct: "Toronto",
        };
        this.tripsSearchData[0].displayOrigin =
          "YTO" + "-" + "Toronto" + "-" + "Toronto All airports";
      }
    },
    addNewTrips() {
      this.tripsSearchData.push(Object.assign({}, freez_model));
    },
    getMobileDataOriginSearch(item, trip) {
      trip.origin = item.searchItem;
      trip.displayOrigin = item.display;
      if (!item.searchItem.ct) {
        this.searchRequest(item.searchItem, (cb) => {
          trip.originItems = cb;
        });
      }
    },
    getMobileDataDestinationSearch(item, trip) {
      trip.destination = item.searchItem;
      trip.displayDestination = item.display;
      if (!item.searchItem.ct) {
        this.searchRequest(item.searchItem, (cb) => {
          trip.DestinationItems = cb;
        });
      }
    },
    searchOrigin(key, trip, e) {
      let search = (trip.origin ? trip.origin : "") + e.key;
      this.searchRequest(search, (cb) => {
        trip.originItems = cb;
      });
      if (this.isMobile) {
        trip.openOriginDialog = false;
      } else {
        trip.openOriginDialog = true;
      }
      if (e.key == "ArrowDown") {
        if (trip.arrowCounterOrigin < trip.originItems.length) {
          trip.arrowCounterOrigin = trip.arrowCounterOrigin + 1;
        }
      } else if (e.key == "ArrowUp") {
        if (trip.arrowCounterOrigin > 0) {
          trip.arrowCounterOrigin = trip.arrowCounterOrigin - 1;
        }
      } else if (e.key == "Enter" || e.key == "Tab") {
        if (trip.arrowCounterOrigin == 0 && trip.originItems[0]) {
          trip.origin = trip.originItems[0];
          trip.displayOrigin =
            trip.originItems[0].ac +
            "-" +
            trip.originItems[0].an +
            ", " +
            trip.originItems[0].cn;
        } else if (trip.arrowCounterOrigin > 0) {
          let item = trip.originItems[trip.arrowCounterOrigin];
          trip.origin = item;
          trip.displayOrigin = item.ac + "-" + item.an + ", " + item.cn;
          trip.arrowCounterOrigin = -1;
        }
        trip.openOriginDialog = false;
      }
    },
    searchDestination(key, trip, e) {
      let search = (trip.destination ? trip.destination : "") + e.key;
      this.searchRequest(search, (cb) => {
        trip.DestinationItems = cb;
      });
      if (this.isMobile) {
        trip.openDestinationDialog = false;
      } else {
        trip.openDestinationDialog = true;
      }
      if (e.key == "ArrowDown") {
        if (trip.arrowCounterDestination < trip.DestinationItems.length) {
          trip.arrowCounterDestination = trip.arrowCounterDestination + 1;
        }
      } else if (e.key == "ArrowUp") {
        if (trip.arrowCounterDestination > 0) {
          trip.arrowCounterDestination = trip.arrowCounterDestination - 1;
        }
      } else if (e.key == "Enter" || e.key == "Tab") {
        if (trip.arrowCounterDestination == 0 && trip.DestinationItems[0]) {
          trip.destination = trip.DestinationItems[0];
          trip.displayDestination =
            trip.DestinationItems[0].ac +
            "-" +
            trip.DestinationItems[0].an +
            ", " +
            trip.DestinationItems[0].cn;
        } else if (trip.arrowCounterDestination > 0) {
          let item = trip.DestinationItems[trip.arrowCounterDestination];
          trip.destination = item;
          trip.displayDestination = item.ac + "-" + item.an + ", " + item.cn;
          trip.arrowCounterDestination = -1;
        }
        trip.openDestinationDialog = false;
      }
    },
    searchRequest(value, callback) {
      if (value) {
        this.axios
          .get(
            `https://search.tripsupport.ca/api/searchairports?searchvalue=${value.trim()}`
          )
          .then((response) => {
            callback(response.data);
          });
      }
    },
    getOrigin(item, trip) {
      trip.origin = item;
      trip.displayOrigin = item.ac + "-" + item.an + ", " + item.cn;
      trip.openOriginDialog = false;
    },
    getDestination(item, trip) {
      trip.destination = item;
      trip.displayDestination = item.ac + "-" + item.an + ", " + item.cn;
      trip.openDestinationDialog = false;
    },
    openOrigin(item) {
      if (this.isMobile) {
        item.openOriginDialog = false;
        item.openOriginMobile = !item.openOriginMobile;
      } else {
        item.openOriginDialog = true;
      }
    },
    openDestination(item) {
      if (this.isMobile) {
        item.openDestinationDialog = false;
        item.openDestinationMobile = !item.openDestinationMobile;
      } else {
        item.openDestinationDialog = true;
      }
    },
    getRangeDate(date, trip) {
      trip.lastDate = date;
      trip.departureDate = this.changeFormat(date.startDate);
    },
    clearDate(item) {
      item.departureDate = null;
    },
    changeFormat(val) {
      return moment(val).format("D MMM YYYY");
    },
    remove(index) {
      this.tripsSearchData.splice(index, 1);
    },
    getMultipleData(items) {
      let result = [];
      for (let item of items) {
        let splitCharacter = item.ac + "-" + item.an;
        result.push(splitCharacter);
      }
      return result;
    },
    generateQuery() {
      let airfaireType = this.$store.state.airfaireType;
      let adult = this.$store.state.adult;
      let infant = this.$store.state.infant;
      let child = this.$store.state.child;
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
      let getOrigin = this.tripsSearchData.map((items) => {
        return items.origin;
      });
      let getDestination = this.tripsSearchData.map((items) => {
        return items.destination;
      });
      let getDepartureDate = this.tripsSearchData.map((items) => {
        return items.departureDate;
      });
      let urlQuery = `https://secure.tripsupport${url}/flight/multicity;tripType=multicity;`;
      let FirstDestination = `destination=${getDestination[0].ac}-${getDestination[0].ct}-${getDestination[0].an};`;
      let FirstOrigin = `origin=${getOrigin[0].ac}-${getOrigin[0].ct}-${getOrigin[0].an};`;
      let FirstDepartDate = `departDate=${getDepartureDate[0]};`;
      let multiOrigin = `multiOrigin=${this.getMultipleData(getOrigin)};`;
      let multiDestination = `multiDestination=${this.getMultipleData(
        getDestination
      )};`;
      let multidate = `multidate=${getDepartureDate};`;
      let QueryAdult = `adult=${adult};`;
      let QueryChild = `child=${child};`;
      let QueryInfant = `infant=${infant};`;
      let QueryAirfaireType = `class=${airfaireType};`;
      let IsFlexiSearch = `IsFlexiSearch=${this.IsFlexiSearch};`;
      let ns = `ns=${this.ns};`;

      let href = `${urlQuery}${FirstOrigin}${FirstDestination}${IsFlexiSearch}${ns}${FirstDepartDate}returnDate=;${QueryAdult}${QueryChild}${QueryInfant}${QueryAirfaireType}${multiOrigin}${multiDestination}${multidate}${lang}`;
      href = href.replace(/\(/g, "%28").replace(/\)/g, "%29");
      window.open(href, "_self");
    },
    validation(mode) {
      debugger;
      if (mode == "origin") {
        return this.tripsSearchData.every((item) => {
          return item.origin;
        });
      } else if (mode == "destination") {
        return this.tripsSearchData.every((item) => {
          return item.destination;
        });
      } else if (mode == "date") {
        return this.tripsSearchData.every((item) => {
          return item.departureDate;
        });
      }
    },
    setLocalStorage() {
      let LocalData = {
        IsFlexiSearch: this.IsFlexiSearch,
        ns: this.ns,
        data: this.tripsSearchData,
      };
      localStorage.setItem("flights.multiCity", JSON.stringify(LocalData));
    },
    validationFields() {
      if (!this.validation("origin")) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText: "Please Enter Departing From ",
        };
        this.$gtag.event("Validation", {
          event_category: "Flight Multi City",
          event_label: "User entered an invalid Departing From",
        });
        return;
      }
      if (!this.validation("destination")) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText: "Please Enter Departing Going To ",
        };
        this.$gtag.event("Validation", {
          event_category: "Flight Multi City",
          event_label: "User entered an invalid Going To",
        });
        return;
      }
      if (!this.validation("date")) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText: "Please Enter departure date",
        };
        this.$gtag.event("Validation", {
          event_category: "Flight Multi City",
          event_label: "User entered an invalid Departure",
        });
        return;
      }
      if (this.$store.state.adultt == 0) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText: "AdultCount should not be zero",
        };
        this.$gtag.event("Validation", {
          event_category: "Flight Multi City",
          event_label: "User entered an invalid Traveller",
        });
        return;
      }
      this.$gtag.event("Search", {
        event_category: "Flight Multi City",
        event_label: "User submit new search",
      });
      this.generateQuery();
    },
    save() {
      this.validationFields();
      this.setLocalStorage();
    },
    calcStartDate(index) {
      if (
        index > 0 &&
        this.tripsSearchData[index - 1] &&
        this.tripsSearchData[index - 1].departureDate
      ) {
        return moment(
          this.tripsSearchData[index - 1].departureDate,
          "D MMM YYYY"
        ).format("YYYY/MM/DD");
      }
      return moment().format("YYYY/MM/DD");
    },
  },
};
</script>
