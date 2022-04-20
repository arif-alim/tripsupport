<style scoped>
.ts-field-wrapper {
  display: flex;
  align-items: center;
}
.ts-origin {
  position: relative;
  flex: 0 0 70%;
}
.ts-date-picker {
  flex: 0 0 30%;
}
.ts-airplane-icon {
  position: absolute;
  left: 16px;
  bottom: 11px;
}
.ts-action-wrapper {
  display: flex;
  justify-content: flex-end;
  padding-top: 37px;
  padding-bottom: 32px;
}
.ts-header-component {
  padding: 32px 0 24px;
  font-size: 18px;
  font-weight: 400;
  color: #0c0d25;
}
@media only screen and (max-width: 768px) {
  ::v-deep .ts-icon-passenger {
    display: none;
  }
  .ts-passengers-component {
    padding-right: 8px;
  }
  .ts-header-component {
    display: block;
    padding: 20px 0 16px;
    font-size: 16px;
    margin-bottom: 20px;
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
    <div class="ts-header-component">Search Stays</div>
    <div class="ts-field-wrapper">
      <div class="ts-origin">
        <Autocomplete
          ref="thingsToDoAutocomplete"
          v-model="getHotelSearch"
          :items="items"
          :placeholder="$t('HOTELS.Destination_To')"
          :localStorage="localData.To"
          mode="thingsToDo"
        >
          <template #item="{ item, active }">
            <div class="item" :class="{ active: active }">
              <span class="item-icon">
                <!-- <svg
                  fill="none"
                  height="18"
                  viewBox="0 0 16 18"
                  width="16"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M16 18H0L1.17073 15.5918H7.80488L12.4878 12.7196L15.6098 14.3609L16 18Z"
                  ></path>
                  <path
                    d="M4.00229 2.83424L2.24136 8.39775L3.90244 11.0784L2.73171 14.7712H5.60417L4.53023 13.9042L6.47129 11.39L5.91184 9.31134L7.57851 10.3393L8.05793 14.2074L10.4217 13.0272L9.58714 12.3803L9.51423 9.65607L6.7279 6.60424L7.12576 5.70575L9.05691 7.0199L12.4878 6.15466L12.0976 5.33404L9.38669 4.79618L6.45351 2.46948L6.59705 1.84693L7.22942 1.98691C7.22942 1.98691 7.6565 0.266458 6.29929 0.0414007C6.29929 0.0414007 4.82368 -0.561511 4.00229 2.83424Z"
                  ></path>
                  <path
                    d="M12.0976 6.97529L10.5366 7.3856L10.9268 11.899H11.7073L12.0976 6.97529Z"
                  ></path>
                  <path
                    d="M3.17505 2.48671C3.17505 2.48671 1.52947 2.01402 1.06631 3.29945C0.60315 4.58514 0.0873984 5.82703 0.0873984 5.82703L1.76575 6.82837L3.17505 2.48671Z"
                  ></path>
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
      <div class="ts-date-picker">
        <NewDatePicker
          ref="thingsToDoDatePicker"
          @RangeSelectedDate="getRangeDate"
          @clearDate="clearDate"
          :lastDate="lastDate"
          @dateValidation="dateValidation = $event"
          :haveValidation="true"
          :placeHolder="{
            origin: 'From',
            destination: 'To',
          }"
        />
      </div>
    </div>
    <div class="ts-action-wrapper">
      <SearchButton
        :buttonText="`Search Things To Do`"
        @search="save"
        :activeButton="disabledButton"
      />
    </div>
    <Toast v-model="showDialog" :toast="toast" />
  </section>
</template>

<script>
import moment from "moment";

export default {
  data() {
    return {
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
      Rooms: 1,
      dateValidation: true,
      timeout: null,
      Travellers: [{ adults: 2, children: 0, childrenAges: [] }],
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
          this.$refs.thingsToDoAutocomplete.showMenu == true
        ) {
          this.$refs.thingsToDoDatePicker.showDatepicker();
        }
        if (
          this.isMobile &&
          val.name &&
          this.$refs.thingsToDoAutocomplete.openMobileDialog == true
        ) {
          this.$refs.thingsToDoDatePicker.$children[0].open = true;
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
    let getlastThingsToDoSearch = localStorage.getItem("lastThingsToDoSearch");
    if (!getlastThingsToDoSearch) {
      return;
    }
    this.localData = JSON.parse(getlastThingsToDoSearch);
    this.To = this.localData.To;
    if (this.localData.date) {
      this.lastDate = this.localData.date;
      this.EntryDate = this.changeFormat(this.localData.date.startDate);
      this.ExitDate = this.changeFormat(this.localData.date.endDate);
      this.originalEntryDate = moment(this.localData.date.startDate)._d;
      this.originalExitDate = moment(this.localData.date.endDate)._d;
    }
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
        !this.To ||
        !this.To.id ||
        !this.EntryDate ||
        !this.ExitDate ||
        !this.checkZero ||
        !this.dateValidation
      ) {
        return true;
      }
    },
  },
  methods: {
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
    clearDate() {
      this.EntryDate = null;
      this.ExitDate = null;
    },
    changeFormat(val) {
      return moment(val).format("YYYY-MM-DD");
    },
    getRangeDate(e) {
      this.lastDate = e;
      this.originalEntryDate = e.startDate;
      this.originalExitDate = e.endDate;
      this.EntryDate = this.changeFormat(e.startDate);
      this.ExitDate = this.changeFormat(e.endDate);
    },
    save() {
      if (!this.To || !this.To.id) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText: "Please Enter Destination",
        };
        this.$gtag.event("Validation", {
          event_category: "ThingToDo",
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
            event_category: "ThingToDo",
            event_label: "User entered an invalid Departure",
          });
        }
        if (!this.ExitDate) {
          this.$gtag.event("Validation", {
            event_category: "ThingToDo",
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
          event_category: "ThingToDo",
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
          event_category: "ThingToDo",
          event_label: "User entered an invalid Maximum Length of stay allowed",
        });
        return;
      }
      let customUrl = {
        To: JSON.stringify(this.To),
        EntryDate: this.EntryDate,
        ExitDate: this.ExitDate,
        travellersForm: {
          travellers: [],
        },
      };
      let customLocal = {
        To: this.To,
        EntryDate: this.EntryDate,
        ExitDate: this.ExitDate,
        travellersForm: {
          travellers: [],
        },
        date: this.lastDate,
      };
      let customUrlStringify = JSON.stringify(customUrl);
      localStorage.setItem("lastThingsToDoSearch", JSON.stringify(customLocal));
      this.$gtag.event("Search", {
        event_category: "ThingToDo",
        event_label: "User submit new search",
      });
      customUrlStringify = encodeURIComponent(customUrlStringify);
      let host = location.host;
      let portocol = location.protocol;
      if (host.startsWith("localhost")) {
        host = "tripsupport.ca";
        portocol = "https:";
      }
      let href = `${portocol}//secure.${host}/thingtodo/search/${customUrlStringify}`;
      window.open(href, "_self");
    },
  },
};
</script>
