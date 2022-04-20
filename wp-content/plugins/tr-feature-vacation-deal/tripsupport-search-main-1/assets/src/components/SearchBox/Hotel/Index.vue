<style lang="scss" scoped>
.ts-field-wrapper {
  display: flex;
  align-items: center;
}
// .ts-origin {
//   position: relative;
//   flex: 0 0 70%;
//   padding-right: 16px;
//    @media only screen and (max-width: 600px) {
//     padding-right: 0;
//   }
// }
// .ts-date-picker {
//   flex: 0 0 30%;
// }

.item {
  display: flex;
  width: 100%;
  align-items: center;
  padding: 8px;
  max-height: 64px;
  &.indent-1 {
    padding-left: 16px;
  }
  &-icon {
    margin-right: 8px;
    display: flex;
  }
  &-text {
    color: var(--primary-base);
  }
  svg {
    width: 20px;
    fill: var(--primary-base);
  }
  &:hover,
  &.active {
    background: rgb(249, 250, 251);
  }
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
    <div class="ts-header-component">
      <v-spacer></v-spacer>
      <div class="ts-other-components">
        <div class="ts-passengers-component">
          <Passengers v-model="Travellers" :rooms="rooms" />
        </div>
        <div class="ts-airfare-component">
          <Rooms v-model="rooms" />
        </div>
      </div>
    </div>
    <div class="ts-field-wrapper">
      <div class="ts-inputs-wrapper">
        <div class="ts-origin">
          <Autocomplete
            @click="onFocus"
            ref="destinationAutocomplete"
            @search="onDestinationSearch"
            @select="onSelectDestination"
            :selectedText="destinationSelectedText"
            v-model="destination"
            :items="destinationItems"
            :placeholder="$t('HOTELS.Destination_To')"
          >
            <template #item="{ item, active }">
              <div class="item" :class="{ active: active }">
                <span class="item-icon">
                  <!-- <svg
                  width="20"
                  height="16"
                  viewBox="0 0 20 16"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M2.4735 5.04564C2.4735 4.71369 2.75618 4.31535 3.10954 4.31535C3.4629 4.31535 4.947 5.04564 5.58304 5.04564H6.21908C6.85512 5.04564 8.40989 4.31535 8.69258 4.31535C8.97527 4.31535 9.32862 4.6473 9.32862 5.04564C9.32862 5.44398 8.69258 6.50622 8.69258 7.23651H11.1661C11.1661 6.50622 10.53 5.44398 10.53 5.04564C10.53 4.6473 10.8127 4.31535 11.1661 4.31535C11.5194 4.31535 13.0035 5.04564 13.6396 5.04564H14.2756C14.9117 5.04564 16.4664 4.31535 16.7491 4.31535C17.0318 4.31535 17.3852 4.6473 17.3852 5.04564C17.3852 5.44398 16.7491 6.50622 16.7491 7.23651H18.5866V0.73029C18.5866 0.33195 18.3039 0 17.9505 0H1.83746C1.4841 0 1.27208 0.33195 1.27208 0.73029V7.23651H3.10954C3.10954 6.50622 2.4735 5.44398 2.4735 5.04564Z"
                  />
                  <path
                    d="M19.1519 10.1577H0.636042C0.282686 10.1577 0 10.4896 0 10.888V12.3485C0 12.7469 0.282686 13.0788 0.636042 13.0788V15.2697C0.636042 15.668 0.918728 16 1.27208 16H2.54417C2.89753 16 3.18021 15.668 3.18021 15.2697V14.5394H16.8198V15.2697C16.8198 15.668 17.1025 16 17.4558 16H18.7279C19.0813 16 19.364 15.668 19.364 15.2697V13.0788C19.7173 13.0788 20 12.7469 20 12.3485V10.888C20 10.2905 19.5053 10.1577 19.1519 10.1577Z"
                  />
                </svg> -->
                  <svg
                    width="20"
                    height="20"
                    viewBox="0 0 48 48"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="20" height="20" fill="white" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M24 8C27.1826 8 30.2348 9.26476 32.4853 11.516C34.7357 13.7673 36 16.8207 36 20.0045C36 24.4062 34.5333 25.8734 26.5333 38.5449C26.275 38.9877 25.9051 39.355 25.4606 39.6103C25.0161 39.8657 24.5125 40 24 40C23.4875 40 22.9839 39.8657 22.5394 39.6103C22.0949 39.355 21.725 38.9877 21.4667 38.5449C13.4667 25.8734 12 24.4062 12 20.0045C12 16.8207 13.2643 13.7673 15.5147 11.516C17.7652 9.26476 20.8174 8 24 8V8ZM24 24.5396C25.1316 24.5396 26.2168 24.0899 27.017 23.2894C27.8171 22.489 28.2667 21.4033 28.2667 20.2713C28.2667 19.1393 27.8171 18.0536 27.017 17.2532C26.2168 16.4527 25.1316 16.003 24 16.003C22.8684 16.003 21.7832 16.4527 20.983 17.2532C20.1829 18.0536 19.7333 19.1393 19.7333 20.2713C19.7333 21.4033 20.1829 22.489 20.983 23.2894C21.7832 24.0899 22.8684 24.5396 24 24.5396Z"
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
          ref="datePicker"
          @RangeSelectedDate="getRangeDate"
          @clearDate="clearDate"
          :lastDate="lastDate"
          :endDate="endDate"
          :placeHolder="{
            origin: 'Check-in',
            destination: 'Check-out',
          }"
        />
      </div>
    </div>
    <div class="ts-action-wrapper">
      <v-spacer></v-spacer>
      <div class="ts-button">
        <SearchButton
          :buttonText="`${$t('HOTELS.Search_Hotels')}`"
          @search="save"
        />
      </div>
    </div>
    <!-- <Toast v-model="showDialog" :toast="toast" /> -->

    <v-dialog
      v-if="isMobile"
      v-model="dialog"
      attach
      fullscreen
      transition="fade-transition"
    >
      <div class="header">
        <span class="header-title">{{ $t("HOTELS.Destination_To") }}</span>
        <span @click="closeDialog" class="close-dialog">
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
        <div class="ts-destination">
          <Autocomplete
            ref="destinationAutocompleteMobile"
            @search="onDestinationSearch"
            @select="onSelectDestination"
            :selectedText="destinationSelectedText"
            v-model="destination"
            :items="destinationItems"
            :placeholder="$t('HOTELS.Destination_To')"
          >
          </Autocomplete>
        </div>

        <div class="results">
          <div v-for="(item, index) in destinationItems" :key="index">
            <div class="item" @click="onSelectDestination(item)">
              <span class="item-icon">
                <svg
                  width="20"
                  height="20"
                  viewBox="0 0 48 48"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <rect width="20" height="20" fill="white" />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M24 8C27.1826 8 30.2348 9.26476 32.4853 11.516C34.7357 13.7673 36 16.8207 36 20.0045C36 24.4062 34.5333 25.8734 26.5333 38.5449C26.275 38.9877 25.9051 39.355 25.4606 39.6103C25.0161 39.8657 24.5125 40 24 40C23.4875 40 22.9839 39.8657 22.5394 39.6103C22.0949 39.355 21.725 38.9877 21.4667 38.5449C13.4667 25.8734 12 24.4062 12 20.0045C12 16.8207 13.2643 13.7673 15.5147 11.516C17.7652 9.26476 20.8174 8 24 8V8ZM24 24.5396C25.1316 24.5396 26.2168 24.0899 27.017 23.2894C27.8171 22.489 28.2667 21.4033 28.2667 20.2713C28.2667 19.1393 27.8171 18.0536 27.017 17.2532C26.2168 16.4527 25.1316 16.003 24 16.003C22.8684 16.003 21.7832 16.4527 20.983 17.2532C20.1829 18.0536 19.7333 19.1393 19.7333 20.2713C19.7333 21.4033 20.1829 22.489 20.983 23.2894C21.7832 24.0899 22.8684 24.5396 24 24.5396Z"
                  />
                </svg>
              </span>
              <span class="item-text">
                {{ item.name }}, {{ item.secondaryName }}
              </span>
            </div>
          </div>
        </div>
      </div>
    </v-dialog>
  </section>
</template>

<script>
import moment from "moment";
import Passengers from "./Travellers.vue";
import Rooms from "./Rooms.vue";

export default {
  components: {
    Passengers,
    Rooms,
  },
  data() {
    return {
      dialog: false,
      destinationItems: [],
      destination: null,
      toast: {
        toastText: "",
        color: "red",
      },
      showDialog: false,
      EntryMenu: false,
      ExitMenu: false,
      To: null,
      EntryDate: null,
      ExitDate: null,
      lastDate: null,
      originalEntryDate: null,
      originalExitDate: null,
      items: [],
      rooms: 1,
      timeout: null,
      Travellers: [{ adults: 2, children: 0, childrenAges: [] }],
      name: "hotel",
      getHotelSearch: null,
      localData: {},
    };
  },
  watch: {
    getHotelSearch: {
      handler: function (val) {
        this.To = val;
        this.searchRequest(val).then((res) => {
          this.items = res;
        });
        if (
          !this.isMobile &&
          val.name &&
          this.$refs.hotelAutocomplete.showMenu == true
        ) {
          this.$refs.HotelDatePicker.showDatepicker();
        }
        if (
          this.isMobile &&
          val.name &&
          this.$refs.hotelAutocomplete.openMobileDialog == true
        ) {
          this.$refs.HotelDatePicker.$children[0].open = true;
        }
      },
    },
  },
  mounted() {
    // this.axios
    //   .get(
    //     `https://hotelapi.tripsupport.ca/api/Resource/SearchDestinations?name=a&page=1`
    //   )
    //   .then((response) => {
    //     this.items = response.data.data;
    //   });
    let history = localStorage.getItem("hotels");
    if (history) {
      history = JSON.parse(history);
      this.destination = history.destination;
      this.EntryDate = history.EntryDate;
      this.ExitDate = history.ExitDate;
      this.lastDate = history.lastDate;
    }
    // let getlastHotelSearch = localStorage.getItem("lastHotelSearch");
    // if (!getlastHotelSearch) {
    //   return;
    // }
    // this.localData = JSON.parse(getlastHotelSearch);
    // this.To = this.localData.To;
    // if (this.localData.date) {
    //   this.lastDate = this.localData.date;
    //   this.EntryDate = this.changeFormat(this.localData.date.startDate);
    //   this.ExitDate = this.changeFormat(this.localData.date.endDate);
    //   this.originalEntryDate = moment(this.localData.date.startDate)._d;
    //   this.originalExitDate = moment(this.localData.date.endDate)._d;
    // }
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
    dateValidation() {
      let startValidation = moment(this.originalEntryDate);
      let endValidation = moment(this.originalExitDate);
      let diff = moment.duration(endValidation.diff(startValidation)).asDays();
      if (diff > 30) {
        return false;
      }
      return true;
    },
    disabledButton() {
      if (
        !this.destination ||
        !this.EntryDate ||
        !this.ExitDate ||
        !this.checkZero ||
        !this.dateValidation
      ) {
        return true;
      }
    },
    destinationSelectedText() {
      if (this.destination) {
        return `${this.destination.name}, ${this.destination.secondaryName}`;
      }
    },
    endDate() {
      return moment().add(1, "y").format("YYYY-MM-DD");
    },
  },
  methods: {
    closeDialog() {
      this.dialog = false;
    },
    onFocus() {
      if (!this.isMobile) return;
      this.dialog = true;
      this.$refs.destinationAutocomplete.$el.querySelector("input").blur();
      setTimeout(() => {
        this.$refs.destinationAutocompleteMobile.$el
          .querySelector("input")
          .focus();
      }, 10);
    },
    async onDestinationSearch(search) {
      let res = await this.searchRequest(search);
      this.destinationItems = res;
      console.log(this.destinationItems);
    },
    onSelectDestination(item) {
      this.$forceUpdate();
      this.destination = item;
      this.$refs.datePicker.showDatepicker();
      this.dialog = false;
    },
    clearDate() {
      this.EntryDate = null;
      this.ExitDate = null;
    },
    searchRequest(value) {
      return new Promise((resolve) => {
        clearTimeout(this.timeout);
        this.timeout = setTimeout(() => {
          if (value && !value.name) {
            this.axios
              .get(
                `https://hotelapi.tripsupport.ca/api/Resource/SearchDestinations?name=${value.trim()}&page=1`
              )
              .then((response) => {
                resolve(response.data.data);
              });
          }
        }, 500);
      });
    },
    changeFormat(val) {
      return moment(val).format("D MMM YYYY");
    },
    getRooms(val) {
      this.rooms = val;
    },
    numberOfTravellers(val) {
      this.Travellers = val;
    },
    getRangeDate(e) {
      this.lastDate = e;
      this.originalEntryDate = e.startDate;
      this.originalExitDate = e.endDate;
      this.EntryDate = this.changeFormat(e.startDate);
      this.ExitDate = this.changeFormat(e.endDate);
      if (!this.dateValidation) {
        this.toast.toastText = `Maximum Length of stay allowed is 30 days`;
        this.showDialog = true;
      }
    },
    save() {
      if (!this.destination) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText: "Please Enter Destination",
        };
        this.$gtag.event("Validation", {
          event_category: "Hotels",
          event_label: "User entered an invalid Destination",
        });
        return;
      }
      if (!this.EntryDate || !this.ExitDate) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText: "Please Enter departure date",
        };
        if (!this.EntryDate) {
          this.$gtag.event("Validation", {
            event_category: "Hotels",
            event_label: "User entered an invalid Departure",
          });
        }
        if (!this.ExitDate) {
          this.$gtag.event("Validation", {
            event_category: "Hotels",
            event_label: "User entered an invalid Return",
          });
        }
        return;
      }

      if (this.Travellers.some((x) => x.adults < 1)) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText: "AdultCount should not be zero",
        };
        this.$gtag.event("Validation", {
          event_category: "Hotels",
          event_label: "User entered an invalid AdultCount",
        });
        return;
      }
      if (!this.dateValidation) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText: "Maximum Length of stay allowed is 30 days",
        };
        this.$gtag.event("Validation", {
          event_category: "Hotels",
          event_label: "User entered an invalid Maximum Length of stay allowed",
        });
        return;
      }
      let customUrl = {
        To: JSON.stringify(this.destination),
        EntryDate: this.EntryDate,
        ExitDate: this.ExitDate,
        Rooms: this.rooms,
        travellersForm: {
          travellers: this.Travellers,
        },
      };
      let searchObject = {
        destination: this.destination,
        EntryDate: this.EntryDate,
        ExitDate: this.ExitDate,
        Rooms: this.rooms,
        travellers: this.Travellers,
        lastDate: this.lastDate,
      };
      localStorage.setItem("hotels", JSON.stringify(searchObject));
      let customUrlStringify = JSON.stringify(customUrl);
      this.$gtag.event("Search", {
        event_category: "Hotels",
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
