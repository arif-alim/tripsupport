<style scoped>
.ts-menu {
  width: 98%;
  top: 84px;
}
::-webkit-scrollbar {
  width: 5px;
}
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px #cdcdda;
}
::-webkit-scrollbar-thumb {
  background: #8f90ad;
}
::-webkit-scrollbar-thumb:hover {
  background: #8f90ad;
}
.ts-field-wrapper {
  display: flex;
  align-items: center;
}
.ts-date-picker {
  flex: 0 0 30%;
}
.ts-search-field-wrapper {
  flex: 0 0 70%;
  display: flex;
  padding-right: 5px;
}
.ts-origin .ts-input,
.ts-destination .ts-input {
  width: 100%;
}
.ts-origin,
.ts-destination {
  position: relative;
  width: 50%;
  padding-right: 10px;
}
label {
  font-size: 12px;
  color: #66678f;
  margin-bottom: 0 !important;
}
.ts-input {
  height: 48px;
  border: 1px solid rgba(171, 171, 196, 0.6);
  padding: 0 10px;
  border-radius: 6px;
  background: #ffffff;
  outline: none;
  margin-right: 16px;
  margin-top: 12px;
  padding-left: 32px;
  color: #66678f;
  font-size: 14px;
  font-weight: 500;
}
.ts-input::placeholder {
  color: #66678f;
  font-size: 14px;
  font-weight: 500;
}
.ts-airplane-icon {
  position: absolute;
  left: 9px;
  bottom: 13px;
}
.ts-action-wrapper {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  padding-top: 37px;
  padding-bottom: 32px;
}
.ts-dropdown-wrapper {
  padding: 10px 0;
}
.ts-dropdown-item {
  display: flex;
  align-items: center;
  justify-content: space-between;
  cursor: pointer;
  padding: 0 8px;
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
.ts-header-component {
  padding: 32px 0 24px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.ts-title-component {
  font-size: 18px;
  font-weight: 400;
  color: #0c0d25;
}
.ts-other-components {
  display: flex;
  align-items: center;
}
.ts-passengers-component {
  padding-right: 24px;
}
@media only screen and (max-width: 768px) {
  ::v-deep .ts-airfare-component .ts-menu {
    right: 0;
  }
  .ts-origin .ts-input {
    margin-top: 0;
  }
  .ts-origin,
  .ts-destination {
    width: 100%;
    padding-right: 0;
  }
  ::v-deep .ts-passenger-count {
    font-size: 12px;
    padding: 0 8px 0 0;
  }
  ::v-deep .ts-icon-passenger {
    display: none;
  }
  ::v-deep .ts-rooms-component .ts-menu {
    right: -120px;
  }
  .ts-header-component {
    display: block;
    padding: 20px 0 16px;
  }
  .ts-title-component {
    margin-bottom: 20px;
  }
  .ts-passengers-component {
    padding-right: 10px;
  }
  .ts-field-wrapper {
    display: block;
    position: relative;
  }
  .ts-action-wrapper {
    display: block;
    padding-top: 16px;
    padding-bottom: 24px;
  }

  label {
    display: none;
  }
  .ts-dropdown-wrapper {
    width: 100%;
  }
  .ts-search-field-wrapper {
    flex: unset;
    display: block;
    width: 100%;
    padding-right: 0;
  }
}
</style>
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
</style>
<template>
  <section>
    <div class="ts-header-component">
      <div class="ts-title-component">Build a Trip</div>
      <div class="ts-other-components">
        <div class="ts-passengers-component">
          <Passengers @numberOfTravellers="numberOfTravellers" :Rooms="Rooms" />
        </div>
        <div class="ts-passengers-component ts-rooms-component">
          <Rooms @Rooms="getRooms" />
        </div>
        <div class="ts-airfare-component">
          <AirfareType @class="getClass" />
        </div>
      </div>
    </div>
    <div class="ts-field-wrapper">
      <div class="ts-search-field-wrapper">
        <div class="ts-origin">
          <Autocomplete
            ref="flightSearchAutocomplete"
            v-model="getOriginSearch"
            :items="originItems"
            :placeholder="$t('Departing_From')"
            :localStorage="localData.From"
            :userLocation="userLocation"
            :from="true"
            mode="hotelFlightOrigin"
          >
            <template #item="{ item, active }">
              <div class="item" :class="{ active: active }">
                <span class="item-icon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="18"
                    height="18"
                    viewBox="0 0 18 18"
                    fill="none"
                  >
                    <path
                      d="M16.808 3.19729C16.5399 3.46359 15.2015 4.93888 13.9124 6.21937C13.9124 17.0109 14.2682 16.2008 12.4569 18L11.0211 11.9598L9.55414 10.5026C5.66686 14.3632 6.25266 11.3737 6.25266 15.0695C6.25636 15.8766 5.91536 16.4075 5.42637 16.8932L4.06597 13.8389L0.990894 12.4876C2.00029 11.4859 2.55178 11.6669 4.93967 11.6669C5.75236 10.0003 6.75696 9.28595 7.54295 8.50496L6.07896 7.05087L0 5.62688C1.71529 3.92299 0.663795 4.23739 11.8395 4.23739C13.1355 2.95009 14.5277 1.4671 14.7969 1.1997C15.5714 0.430509 17.5986 -0.235987 17.9174 0.0806108C18.2361 0.397209 17.5825 2.428 16.808 3.19729ZM15.4406 7.44417L14.6307 8.24686V10.6048C16.3815 8.84986 16.827 8.82816 15.4406 7.44417ZM10.6281 2.6519C9.26034 1.2867 9.36394 1.5691 7.41295 3.50889H9.77544L10.6281 2.6519Z"
                    />
                  </svg>
                </span>
                <span class="item-text"
                  >{{ item.code }}-{{ item.name }}, {{ item.countryName }}</span
                >
              </div>
            </template>
          </Autocomplete>
        </div>
        <div class="ts-destination">
          <Autocomplete
            ref="flightDestinationAutocomplete"
            v-model="getDestinationSearch"
            :items="destinationItems"
            :placeholder="$t('Going_To')"
            :localStorage="localData.To"
            mode="hotelFlightDestination"
          >
            <template #item="{ item, active }">
              <div class="item" :class="{ active: active }">
                <span class="item-icon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="18"
                    height="18"
                    viewBox="0 0 18 18"
                    fill="none"
                  >
                    <path
                      d="M16.808 3.19729C16.5399 3.46359 15.2015 4.93888 13.9124 6.21937C13.9124 17.0109 14.2682 16.2008 12.4569 18L11.0211 11.9598L9.55414 10.5026C5.66686 14.3632 6.25266 11.3737 6.25266 15.0695C6.25636 15.8766 5.91536 16.4075 5.42637 16.8932L4.06597 13.8389L0.990894 12.4876C2.00029 11.4859 2.55178 11.6669 4.93967 11.6669C5.75236 10.0003 6.75696 9.28595 7.54295 8.50496L6.07896 7.05087L0 5.62688C1.71529 3.92299 0.663795 4.23739 11.8395 4.23739C13.1355 2.95009 14.5277 1.4671 14.7969 1.1997C15.5714 0.430509 17.5986 -0.235987 17.9174 0.0806108C18.2361 0.397209 17.5825 2.428 16.808 3.19729ZM15.4406 7.44417L14.6307 8.24686V10.6048C16.3815 8.84986 16.827 8.82816 15.4406 7.44417ZM10.6281 2.6519C9.26034 1.2867 9.36394 1.5691 7.41295 3.50889H9.77544L10.6281 2.6519Z"
                    />
                  </svg>
                </span>
                <span class="item-text"
                  >{{ item.name }}, {{ item.secondaryName }}</span
                >
              </div>
            </template>
          </Autocomplete>
        </div>
      </div>
      <div class="ts-date-picker">
        <NewDatePicker
          ref="flightHotelDatePicker"
          @RangeSelectedDate="getRangeDate"
          @clearDate="clearDate"
          :lastDate="lastDate"
          @dateValidation="dateValidation = $event"
          :haveValidation="true"
          :placeHolder="{
            origin: 'Departure Date',
            destination: 'Return Date',
          }"
        />
      </div>
    </div>
    <div class="ts-action-wrapper">
      <div class="ts-button">
        <SearchButton
          @search="save"
          :buttonText="`Search Hotels`"
          :activeButton="disabledButton"
        />
      </div>
    </div>
    <Toast v-model="showDialog" :toast="toast" />
  </section>
</template>

<script>
import moment from "moment";
import AirfareType from "./../Common/AirfareType.vue";
import Passengers from "./../Common/HotelPassengers.vue";
import Rooms from "./../Common/Rooms.vue";

export default {
  components: {
    Passengers,
    Rooms,
    AirfareType,
  },
  data() {
    return {
      toast: {
        toastText: "",
        color: "red",
      },
      showDialog: false,
      origin: null,
      destination: null,
      departDate: null,
      returnDate: null,
      lastDate: null,
      originalDepartDate: null,
      originalReturnDate: null,
      DirectFlights: false,
      dateValidation: true,
      originTimeout: null,
      destinationTimeout: null,
      originItems: [],
      destinationItems: [],
      Travellers: [{ adults: 2, children: 0, childrenAges: [] }],
      Rooms: 1,
      name: "FlightHotel",
      class: null,
      getOriginSearch: null,
      getDestinationSearch: null,
      localData: {},
      userLocation: {},
    };
  },
  async mounted() {
    // this.axios
    //   .get(
    //     `https://flighthotelapi.tripsupport.com/api/Resource/FindAirports?term=a`
    //   )
    //   .then((res) => {
    //     this.originItems = res.data.data;
    //   });

    // this.axios
    //   .get(
    //     `https://flighthotelapi.tripsupport.com/api/Resource/SearchDestinations?name=a&page=1`
    //   )
    //   .then((res) => {
    //     this.destinationItems = res.data.data;
    //   });
    try {
      let { data } = await this.axios.get(
        `https://tripsupport.ca/wp-json/trip-support-endpoints/v1/user/geolocation`
      );
      let { data: res } = await this.axios.get(
        `https://flighthotelapi.tripsupport.com/api/Resource/FindAirports?term=${data.data.city.toLowerCase()}`
      );
      if (res.data && res.data.length) {
        this.userLocation = res.data[0];
        this.$cookie.set(
          "userLocation",
          JSON.stringify({
            ct: this.userLocation.ct,
            ac: this.userLocation.ac,
            cc: this.userLocation.cc,
          })
        );
      } else {
        this.userLocation = {};
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

    let getlastFlightHotelSearch = localStorage.getItem(
      "lastFlightHotelSearch"
    );
    if (!getlastFlightHotelSearch) {
      return;
    }
    this.localData = JSON.parse(getlastFlightHotelSearch);
    this.origin = this.localData.From;
    this.destination = this.localData.To;
    if (this.localData.date) {
      this.lastDate = this.localData.date;
      this.departDate = this.changeFormat(this.localData.date.startDate);
      this.returnDate = this.changeFormat(this.localData.date.endDate);
      this.originalDepartDate = moment(this.localData.date.startDate)._d;
      this.originalReturnDate = moment(this.localData.date.endDate)._d;
    }
  },
  watch: {
    getOriginSearch: {
      handler: function (val) {
        this.origin = val;
        this.searchFlight(val).then((res) => {
          this.originItems = res;
        });
        if (val && typeof val == "object" && !this.isMobile) {
          setTimeout(() => {
            this.$refs.flightDestinationAutocomplete.$el
              .querySelector("input")
              .focus();
          }, 1);
        }
        if (
          this.isMobile &&
          val.name &&
          this.$refs.flightSearchAutocomplete.openMobileDialog == true
        ) {
          this.$refs.flightDestinationAutocomplete.openMobileDialog = true;
        } else {
          this.$refs.flightDestinationAutocomplete.openMobileDialog = false;
        }
      },
    },
    getDestinationSearch: {
      handler: function (val) {
        this.destination = val;
        this.searchDestination(val).then((res) => {
          this.destinationItems = res;
        });
        if (
          !this.isMobile &&
          val.name &&
          this.$refs.flightDestinationAutocomplete.showMenu == true
        ) {
          this.$refs.flightHotelDatePicker.showDatepicker();
        }
        if (
          this.isMobile &&
          val.name &&
          this.$refs.flightDestinationAutocomplete.openMobileDialog == true
        ) {
          this.$refs.flightHotelDatePicker.$children[0].open = true;
        }
      },
    },
  },
  computed: {
    isMobile() {
      return window.innerWidth < 600;
    },
    checkZero() {
      let adultsArray = [];
      this.Travellers.forEach((item) => {
        adultsArray.push(item.adults);
      });
      let checkZero = adultsArray.every((item) => {
        return item > 0;
      });
      return checkZero;
    },
    disabledButton() {
      if (
        !this.origin ||
        !this.origin.code ||
        !this.destination ||
        !this.destination.id ||
        !this.departDate ||
        !this.returnDate ||
        !this.checkZero ||
        !this.dateValidation
      ) {
        return true;
      }
    },
  },
  methods: {
    clearDate() {
      this.departDate = null;
      this.returnDate = null;
    },
    searchFlight(value) {
      return new Promise((resolve) => {
        clearTimeout(this.timeout);
        this.timeout = setTimeout(() => {
          if (value && !value.name) {
            this.axios
              .get(
                `https://flighthotelapi.tripsupport.com/api/Resource/FindAirports?term=${value.trim()}`
              )
              .then((response) => {
                resolve(response.data.data);
              });
          }
        }, 500);
      });
    },
    searchDestination(value) {
      return new Promise((resolve) => {
        clearTimeout(this.destinationTimeout);
        this.destinationTimeout = setTimeout(() => {
          if (value && !value.name) {
            this.axios
              .get(
                `https://flighthotelapi.tripsupport.com/api/Resource/SearchDestinations?name=${value.trim()}&page=1`
              )
              .then((response) => {
                resolve(response.data.data);
              });
          }
        }, 500);
      });
    },
    numberOfTravellers(val) {
      this.Travellers = val;
    },
    getClass(val) {
      this.class = val;
    },
    getRangeDate(e) {
      this.lastDate = e;
      this.originalDepartDate = e.startDate;
      this.originalReturnDate = e.endDate;
      this.departDate = this.changeFormat(e.startDate);
      this.returnDate = this.changeFormat(e.endDate);
    },
    changeFormat(val) {
      return moment(val).format("D MMM YYYY");
    },
    getRooms(val) {
      this.Rooms = val;
    },
    save() {
      if (
        !this.origin ||
        !this.origin.code ||
        !this.destination ||
        !this.destination.id
      ) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText: "Please Enter Departing From and Going To",
        };
        if (!this.origin || !this.origin.code) {
          this.$gtag.event("Validation", {
            event_category: "Flight-Hotel",
            event_label: "User entered an invalid Departing From",
          });
        }
        if (!this.destination || !this.destination.id) {
          this.$gtag.event("Validation", {
            event_category: "Flight-Hotel",
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
            event_category: "Flight-Hotel",
            event_label: "User entered an invalid Departure",
          });
        }
        if (!this.returnDate) {
          this.$gtag.event("Validation", {
            event_category: "Flight-Hotel",
            event_label: "User entered an invalid Return",
          });
        }
        return;
      }
      if (!this.checkZero) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText: "AdultCount should not be zero",
        };
        this.$gtag.event("Validation", {
          event_category: "Flight-Hotel",
          event_label: "User entered an invalid AdultCount",
        });
        return;
      }
      if (!this.dateValidation) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText: "Maximum Length of stay allowed is 20 days",
        };
        this.$gtag.event("Validation", {
          event_category: "Flight-Hotel",
          event_label: "User entered an invalid Maximum Length of stay allowed",
        });
        return;
      }
      let customUrl = {
        From: JSON.stringify(this.origin),
        To: JSON.stringify(this.destination),
        EntryDate: this.departDate,
        ExitDate: this.returnDate,
        PartEntryDate: this.departDate,
        PartExitDate: this.returnDate,
        Rooms: this.Rooms,
        DirectFlights: this.DirectFlights,
        FlightType: this.$store.state.airfaireType,
        travellersForm: {
          travellers: this.Travellers,
        },
      };
      let customLocal = {
        From: this.origin,
        To: this.destination,
        EntryDate: this.departDate,
        ExitDate: this.returnDate,
        PartEntryDate: this.departDate,
        PartExitDate: this.returnDate,
        Rooms: this.Rooms,
        DirectFlights: this.DirectFlights,
        FlightType: this.$store.state.airfaireType,
        date: this.lastDate,
        travellersForm: {
          travellers: this.Travellers,
        },
      };
      let customUrlStringify = JSON.stringify(customUrl);
      localStorage.setItem("hotelFlightEntryDate", this.originalDepartDate);
      localStorage.setItem("hotelFlightExitDate", this.originalReturnDate);
      localStorage.setItem("hotelFlightPartEntryDate", this.originalDepartDate);
      localStorage.setItem("hotelFlightPartExitDate", this.originalReturnDate);
      localStorage.setItem("hotelFlightFrom", JSON.stringify(this.origin));
      localStorage.setItem("hotelFlightRooms", this.Rooms);
      localStorage.setItem(
        "hotelFlightTravellers",
        JSON.stringify(customLocal.travellersForm)
      );
      localStorage.setItem(
        "hotelFlightDestination",
        JSON.stringify(this.destination)
      );
      localStorage.setItem(
        "lastFlightHotelSearch",
        JSON.stringify(customLocal)
      );

      this.$gtag.event("Search", {
        event_category: "Flight-Hotel",
        event_label: "User submit new search",
      });
      customUrlStringify = encodeURIComponent(customUrlStringify);
      let host = location.host;
      let portocol = location.protocol;
      if (host.startsWith("localhost")) {
        host = "tripsupport.ca";
        portocol = "https:";
      }
      let href = `${portocol}//secure.${host}/hotel/search/${customUrlStringify}`;
      window.open(href, "_self");
    },
  },
};
</script>
