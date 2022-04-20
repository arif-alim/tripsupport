<style lang="scss" scoped>
.ts-field-wrapper {
  display: flex;
  align-items: center;
}
.ts-search-field-wrapper {
  flex: 0 0 70%;
  display: flex;
}
.ts-duration-wrapper {
  flex: 0 0 30%;
  display: flex;
  align-items: center;
  @media only screen and (max-width: 600px) {
    flex: 0 0 100%;
    flex-direction: column;
    width: 100%;
  }
}
.ts-date-picker,
.ts-duration {
  flex: 1;
  @media only screen and (max-width: 600px) {
    width: 100%;
    margin-top: 16px;
  }
}
.ts-date-picker {
  margin-right: 16px;
  @media only screen and (max-width: 600px) {
    margin-right: 0;
  }
}
.ts-duration ::v-deep .ts-menu {
  right: 0;
  @media only screen and (max-width: 600px) {
    top: 100%;
  }
}
.ts-origin,
.ts-destination {
  position: relative;
  width: 100%;
}
.ts-airplane-icon {
  position: absolute;
  left: 9px;
  bottom: 13px;
}
.ts-destination {
  @media only screen and (max-width: 600px) {
    margin-top: 16px;
  }
}
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
  overflow: hidden;
  overflow-y: auto;
  height: calc(100% - 61px - 16px);
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
      <!-- <div class="ts-title-component">Book your vacation now, pay later!</div> -->
      <v-spacer></v-spacer>
      <div class="ts-other-components">
        <div class="ts-passengers-component">
          <Travellers @NumberOfPassangers="passanger" :rooms="NumberOfRooms" />
        </div>
        <div class="ts-airfare-component">
          <Rooms
            @NumberOfRooms="rooms"
            :children="Children"
            :error="roomsError"
          />
        </div>
      </div>
    </div>
    <div class="ts-field-wrapper">
      <div class="ts-inputs-wrapper">
        <div class="ts-origin mr-4">
          <Autocomplete
            ref="originAutocomplete"
            @click="onFocus('origin')"
            @search="onOriginSearch"
            @select="onSelectOrigin"
            :selectedText="originSelectedText"
            v-model="origin"
            :items="originItems"
            :placeholder="$t('VACATION.Departing_From')"
          >
            <template #item="{ item, active }">
              <div class="item" :class="{ active: active }">
                <span class="item-icon">
                  <svg
                    v-if="item.type == 'Hotel'"
                    data-v-5e95d8a3=""
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                  >
                    <path
                      data-v-5e95d8a3=""
                      fill-rule="evenodd"
                      d="M21.61 21.41l-.47-1.1a.49.49 0 00-.16-.2.4.4 0 00-.23-.06h-.84V7.4a.4.4 0 00-.12-.28.38.38 0 00-.29-.13h-3.75V2.41a.4.4 0 00-.12-.28.38.38 0 00-.29-.13H4.5a.38.38 0 00-.3.13.4.4 0 00-.11.28v17.64h-.84a.4.4 0 00-.23.07.49.49 0 00-.16.18l-.47 1.11a.44.44 0 00-.03.2c0 .08.03.14.07.2a.38.38 0 00.33.2h18.48a.38.38 0 00.33-.2.36.36 0 00.07-.2c0-.06 0-.13-.03-.2zM9.09 17h-2.5v-2.5h2.5V17zm0-5h-2.5V9.5h2.5V12zm0-5h-2.5V4.5h2.5V7zm4.16 12.77h-2.5V14.5h2.5v5.27zm0-7.77h-2.5V9.5h2.5V12zm0-5h-2.5V4.5h2.5V7zm4.16 10h-2.5v-2.5h2.5V17zm0-5h-2.5V9.5h2.5V12z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                  <svg
                    v-else
                    data-v-59635880=""
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                  >
                    <path
                      data-v-59635880=""
                      fill-rule="evenodd"
                      d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </span>
                <span class="item-text">{{ item.name }}</span>
              </div>
            </template>
          </Autocomplete>
        </div>
        <div class="ts-destination">
          <Autocomplete
            @click="onFocus('destination')"
            ref="destinationAutocomplete"
            @search="onDestinationSearch"
            @select="onSelectDestination"
            :selectedText="destinationSelectedText"
            v-model="destination"
            :items="destinationItems"
            :placeholder="$t('VACATION.Going_To')"
          >
            <!-- :class="{ active: active, 'indent-1': item.type == 'City' }" -->
            <template #item="{ item, active }">
              <div
                class="item"
                :class="{ active: active, 'indent-1': item.type == 'City' }"
              >
                <span class="item-icon">
                  <svg
                    v-if="item.type == 'Hotel'"
                    data-v-5e95d8a3=""
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                  >
                    <path
                      data-v-5e95d8a3=""
                      fill-rule="evenodd"
                      d="M21.61 21.41l-.47-1.1a.49.49 0 00-.16-.2.4.4 0 00-.23-.06h-.84V7.4a.4.4 0 00-.12-.28.38.38 0 00-.29-.13h-3.75V2.41a.4.4 0 00-.12-.28.38.38 0 00-.29-.13H4.5a.38.38 0 00-.3.13.4.4 0 00-.11.28v17.64h-.84a.4.4 0 00-.23.07.49.49 0 00-.16.18l-.47 1.11a.44.44 0 00-.03.2c0 .08.03.14.07.2a.38.38 0 00.33.2h18.48a.38.38 0 00.33-.2.36.36 0 00.07-.2c0-.06 0-.13-.03-.2zM9.09 17h-2.5v-2.5h2.5V17zm0-5h-2.5V9.5h2.5V12zm0-5h-2.5V4.5h2.5V7zm4.16 12.77h-2.5V14.5h2.5v5.27zm0-7.77h-2.5V9.5h2.5V12zm0-5h-2.5V4.5h2.5V7zm4.16 10h-2.5v-2.5h2.5V17zm0-5h-2.5V9.5h2.5V12z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                  <svg
                    v-else
                    data-v-59635880=""
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                  >
                    <path
                      data-v-59635880=""
                      fill-rule="evenodd"
                      d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </span>
                <span class="item-text">
                  <template v-if="item.countryName">
                    {{ item.name }}, {{ item.countryName }}
                  </template>
                  <template v-else>{{ item.name }}</template>
                </span>
              </div>
            </template>
            <template #no-result>
              <span class="pl-3">
                {{ $t("VACATION.not_found") }}
              </span>
            </template>
          </Autocomplete>
        </div>
      </div>
      <div class="ts-duration-wrapper">
        <div class="ts-date-picker">
          <NewDatePicker
            ref="datePicker"
            @RangeSelectedDate="getRangeDate"
            @clearDate="clearDate"
            :singleDatePicker="true"
            :lastDate="lastDate"
            title="Departure"
            :placeHolder="{
              origin: 'Departure Date',
            }"
          />
        </div>
        <div class="ts-duration">
          <Duration
            :value="Durations"
            :availableDurations="destination && destination.durations"
            @Durations="getDurations"
          />
        </div>
      </div>
    </div>
    <div class="ts-action-wrapper">
      <div class="ts-checkbox-wrapper">
        <div>
          <Checkbox
            v-model="AllInclusive"
            label="All-Inclusive Only"
          ></Checkbox>
        </div>
      </div>
      <div class="ts-button">
        <SearchButton
          :buttonText="`${$t('VACATION.Search_Vacations')}`"
          @search="save"
        />
      </div>
    </div>
    <!-- <Toast v-model="showDialog" :toast="toast" /> -->
    <!-- <v-dialog
      v-if="isMobile"
      v-model="dialog"
      attach
      fullscreen
      transition="fade-transition"
    > -->
    <v-bottom-sheet fullscreen v-if="isMobile" v-model="dialog">
      <v-sheet class="text-center" height="100vh">
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
          <div class="ts-origin mr-4">
            <Autocomplete
              @focus="resultMode = 'origin'"
              ref="originAutocompleteMobile"
              @search="onOriginSearch"
              @select="onSelectOrigin"
              :selectedText="originSelectedText"
              v-model="origin"
              :items="originItems"
              :placeholder="$t('VACATION.Departing_From')"
            >
            </Autocomplete>
          </div>
          <div class="ts-destination">
            <Autocomplete
              @focus="resultMode = 'dist'"
              ref="destinationAutocompleteMobile"
              @search="onDestinationSearch"
              @select="onSelectDestination"
              :selectedText="destinationSelectedText"
              v-model="destination"
              :items="destinationItems"
              :placeholder="$t('VACATION.Going_To')"
            >
              <template #no-result>
                <span class="pl-3">
                  {{ $t("VACATION.not_found") }}
                </span>
              </template>
            </Autocomplete>
          </div>

          <div class="results">
            <div v-for="(item, index) in searchResult" :key="index">
              <div
                @click="onSelect(item)"
                class="item"
                v-if="resultMode == 'origin'"
              >
                <span class="item-icon">
                  <svg
                    v-if="item.type == 'Hotel'"
                    data-v-5e95d8a3=""
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                  >
                    <path
                      data-v-5e95d8a3=""
                      fill-rule="evenodd"
                      d="M21.61 21.41l-.47-1.1a.49.49 0 00-.16-.2.4.4 0 00-.23-.06h-.84V7.4a.4.4 0 00-.12-.28.38.38 0 00-.29-.13h-3.75V2.41a.4.4 0 00-.12-.28.38.38 0 00-.29-.13H4.5a.38.38 0 00-.3.13.4.4 0 00-.11.28v17.64h-.84a.4.4 0 00-.23.07.49.49 0 00-.16.18l-.47 1.11a.44.44 0 00-.03.2c0 .08.03.14.07.2a.38.38 0 00.33.2h18.48a.38.38 0 00.33-.2.36.36 0 00.07-.2c0-.06 0-.13-.03-.2zM9.09 17h-2.5v-2.5h2.5V17zm0-5h-2.5V9.5h2.5V12zm0-5h-2.5V4.5h2.5V7zm4.16 12.77h-2.5V14.5h2.5v5.27zm0-7.77h-2.5V9.5h2.5V12zm0-5h-2.5V4.5h2.5V7zm4.16 10h-2.5v-2.5h2.5V17zm0-5h-2.5V9.5h2.5V12z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                  <svg
                    v-else
                    data-v-59635880=""
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                  >
                    <path
                      data-v-59635880=""
                      fill-rule="evenodd"
                      d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </span>
                <span class="item-text">{{ item.name }}</span>
              </div>
              <div
                @click="onSelect(item)"
                v-else
                class="item"
                :class="{ 'indent-1': item.type == 'City' }"
              >
                <span class="item-icon">
                  <svg
                    v-if="item.type == 'Hotel'"
                    data-v-5e95d8a3=""
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                  >
                    <path
                      data-v-5e95d8a3=""
                      fill-rule="evenodd"
                      d="M21.61 21.41l-.47-1.1a.49.49 0 00-.16-.2.4.4 0 00-.23-.06h-.84V7.4a.4.4 0 00-.12-.28.38.38 0 00-.29-.13h-3.75V2.41a.4.4 0 00-.12-.28.38.38 0 00-.29-.13H4.5a.38.38 0 00-.3.13.4.4 0 00-.11.28v17.64h-.84a.4.4 0 00-.23.07.49.49 0 00-.16.18l-.47 1.11a.44.44 0 00-.03.2c0 .08.03.14.07.2a.38.38 0 00.33.2h18.48a.38.38 0 00.33-.2.36.36 0 00.07-.2c0-.06 0-.13-.03-.2zM9.09 17h-2.5v-2.5h2.5V17zm0-5h-2.5V9.5h2.5V12zm0-5h-2.5V4.5h2.5V7zm4.16 12.77h-2.5V14.5h2.5v5.27zm0-7.77h-2.5V9.5h2.5V12zm0-5h-2.5V4.5h2.5V7zm4.16 10h-2.5v-2.5h2.5V17zm0-5h-2.5V9.5h2.5V12z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                  <svg
                    v-else
                    data-v-59635880=""
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                  >
                    <path
                      data-v-59635880=""
                      fill-rule="evenodd"
                      d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </span>
                <span class="item-text">
                  <template v-if="item.countryName">
                    {{ item.name }}, {{ item.countryName }}
                  </template>
                  <template v-else>{{ item.name }}</template>
                </span>
              </div>
            </div>
          </div>
        </div>
      </v-sheet>
    </v-bottom-sheet>
    <!-- </v-dialog> -->
  </section>
</template>

<script>
import Rooms from "./Rooms.vue";
import Travellers from "./Travellers.vue";
import Duration from "./Duration.vue";
import Passengers from "./../Common/Passengers.vue";
import AirfareType from "./../Common/AirfareType.vue";
import SwapIcon from "./../Common/SwapIcon.vue";
import Checkbox from "./../Common/Checkbox.vue";
import moment from "moment";

export default {
  components: {
    Rooms,
    Travellers,
    Duration,
    Passengers,
    SwapIcon,
    AirfareType,
    Checkbox,
  },
  data() {
    return {
      allOriginItems: [],
      allDestinationItems: [],
      origin: null,
      originItems: [],
      destination: null,
      destinationItems: [],
      toast: {
        toastText: "",
        color: "red",
      },
      resultMode: "origin",
      dialog: false,
      showDialog: false,
      From: {},
      To: {},
      AllInclusive: false,
      FromsItems: [],
      FromsItemsDisplay: [],
      toItems: [],
      toItemsDisplay: [],
      NumberOfRooms: 1,
      NumberOfPassangers: 2,
      Adults: 2,
      ChildrenAges: [],
      DepartureDate: null,
      lastDate: null,
      Children: 0,
      Durations: "7,8",
      roomsError: false,
      selectedMultiple: [],
      previousSelectionTravellers: {},
      getFromSearch: {},
      firstTime: true,
      getToSearch: {},
      localData: {},
      userLocation: {},
    };
  },
  async mounted() {
    try {
      let { data } = await this.axios.get(
        `https://tripsupport.ca/wp-json/trip-support-endpoints/v1/user/geolocation`
      );

      let response = await this.axios.get(
        `https://vacationapi.tripsupport.ca/api/Resource/GetDepartures`
      );
      this.allOriginItems = response.data.data;
      this.originItems = this.allOriginItems.slice(0, 20);
      this.FromsItems = response.data.data;
      this.FromsItemsDisplay = response.data.data;
      let history = localStorage.getItem("vacations");
      if (history) {
        history = JSON.parse(history);
        this.origin = history.origin;
        this.destination = history.destination;
        this.AllInclusive = history.AllInclusive;
        this.Durations = history.Durations;
        this.lastDate = history.lastDate;
        this.DepartureDate = history.DepartureDate;
      } else {
        this.origin = {
          name: "Toronto",
          codes: "YYZ",
        };
        this.allDestinationItems = await this.getDestinationItems(
          this.origin.codes
        );
        this.destinationItems = this.allDestinationItems.slice(0, 20);
      }

      // let userLocation = data.data.city.toLowerCase();
      // this.querySearch(userLocation, this.FromsItems).then((res) => {
      //   if (res.length) {
      //     this.userLocation = res[0];
      //     this.$cookie.set(
      //       "userLocation",
      //       JSON.stringify({
      //         ct: res[0].name,
      //         ac: res[0].codes,
      //       })
      //     );
      //     this.From = res[0];
      //   } else {
      //     this.userLocation = res;
      //     this.$cookie.set(
      //       "userLocation",
      //       JSON.stringify({
      //         ct: "Toronto",
      //         ac: "YYZ",
      //       })
      //     );
      //     this.From = { codes: "YYZ", name: "Toronto" };
      //   }
      // });
    } catch (e) {
      console.log(e);
    }

    // let getLastVacationBooking = localStorage.getItem("vacation");
    // if (!getLastVacationBooking) {
    //   this.previousSelectionTravellers = {
    //     adults: 2,
    //     children: 0,
    //     childrenAges: [],
    //   };
    //   return;
    // }
    // this.localData = JSON.parse(getLastVacationBooking);
    // this.From = this.localData.From;
    // this.To = this.localData.To;
    // this.NumberOfRooms = this.localData.NumberOfRooms;
    // if (this.localData.date) {
    //   this.lastDate = this.localData.date;
    //   this.DepartureDate = this.changeFormat(this.localData.date.startDate);
    // }
    // if (this.localData.multiple.length) {
    //   this.selectedMultiple = this.localData.multiple;
    // }
    // if (this.localData.TravellersData) {
    //   let childAgesArray = [];
    //   this.localData.TravellersData.childrenAges.forEach((element) => {
    //     childAgesArray.push(element.child);
    //   });
    //   this.Adults = this.localData.TravellersData.adults;
    //   this.Children = this.localData.TravellersData.children;
    //   this.ChildrenAges = childAgesArray;
    // }
  },
  destroyed() {
    window.removeEventListener("resize", this.onKeyboardOpen);
  },
  watch: {
    getFromSearch: {
      handler: function (val) {
        this.From = val;
        this.querySearch(val, this.FromsItems).then((res) => {
          this.FromsItemsDisplay = res;
        });
        if (val.codes) {
          this.changeDestination(val.codes).then((res) => {
            this.toItems = res;
            this.toItemsDisplay = res.slice(0, 50);
            if (!this.isMobile && !this.firstTime) {
              this.$refs.FromAutocomplete.showMenu = false;
              this.$refs.ToAutocomplete.$el.querySelector("input").focus();
            }
            this.firstTime = false;
          });
        }
        if (
          this.isMobile &&
          val.name &&
          this.$refs.FromAutocomplete.openMobileDialog == true
        ) {
          setTimeout(() => {
            // this.$refs.ToAutocomplete.openMobileDialog = true;
          }, 1);
        } else {
          this.$refs.ToAutocomplete.openMobileDialog = false;
        }
      },
    },
    getToSearch: {
      handler: function (val) {
        this.To = val;
        // if (typeof val == "object") return;
        if (val == "") {
          this.toItemsDisplay = this.toItems.slice(0, 50);
          return;
        }
        this.querySearch(val, this.toItems).then((res) => {
          this.toItemsDisplay = res;
        });
        if (
          !this.isMobile &&
          val.name &&
          this.$refs.ToAutocomplete.showMenu == true
        ) {
          this.$refs.vacationDatePicker.showDatepicker();
        }
        if (
          this.isMobile &&
          val.name &&
          this.$refs.ToAutocomplete.openMobileDialog == true
        ) {
          // this.$refs.vacationDatePicker.showDatepicker();
        }
      },
    },
    dialog: {
      handler: function () {
        if (this.dialog) {
          window.addEventListener("resize", this.onKeyboardOpen);
          document.getElementsByTagName("body")[0].classList.add("noscroll");
          // setTimeout(() => {
          //   document.getElementsByClassName(
          //     "v-dialog--active"
          //   )[0].scrollTop = 0;
          // }, 100);
        }
        if (!this.dialog) {
          window.removeEventListener("resize", this.onKeyboardOpen);
          document.querySelector("html").focus();
          document.getElementsByTagName("body")[0].classList.remove("noscroll");
        }
      },
    },
  },
  computed: {
    isMobile() {
      return window.innerWidth < 600;
    },
    disabledButton() {
      let checkAvailableRoom = this.Adults / this.NumberOfRooms;
      let getError = false;
      this.ChildrenAges.forEach((element) => {
        if (element == 0 || element == null || element > 17) {
          getError = true;
        }
      });
      if (
        !this.origin ||
        !this.destination ||
        !this.DepartureDate ||
        (this.Children > 0 && this.NumberOfRooms > 1) ||
        !Number.isInteger(checkAvailableRoom) ||
        this.NumberOfPassangers > 6 ||
        this.Adults == 0 ||
        getError
      ) {
        return true;
      }
    },
    dialogHeaderLabel() {
      return this.resultMode == "origin"
        ? this.$t("Departing_From")
        : this.$t("Going_To");
    },
    searchResult() {
      return this.resultMode == "origin"
        ? this.originItems
        : this.destinationItems;
    },
    originSelectedText() {
      if (this.origin) {
        return `${this.origin.name}`;
      }
    },
    destinationSelectedText() {
      if (this.destination) {
        if (this.destination.countryName) {
          return `${this.destination.name}, ${this.destination.countryName}`;
        } else {
          return `${this.destination.name}`;
        }
      }
    },
  },
  methods: {
    onKeyboardOpen() {
      document.getElementsByClassName("search-content")[0].scrollTop = 0;
    },
    onFocus(mode) {
      if (!this.isMobile) return;
      this.dialog = true;
      if (mode == "origin") {
        this.$refs.originAutocomplete.$el.querySelector("input").blur();
      } else {
        this.$refs.destinationAutocomplete.$el.querySelector("input").blur();
      }
      setTimeout(() => {
        if (mode == "origin") {
          this.$refs.originAutocompleteMobile.$el
            .querySelector("input")
            .focus();
        } else {
          this.$refs.destinationAutocompleteMobile.$el
            .querySelector("input")
            .focus();
        }
      }, 10);
    },
    async onOriginSearch(search) {
      let res = await this.searchItems(search, this.allOriginItems);
      this.originItems = res;
    },
    async onDestinationSearch(search) {
      let res = await this.searchItems(search, this.allDestinationItems);
      this.destinationItems = res;
    },
    async onSelectOrigin(item) {
      this.origin = item;
      this.allDestinationItems = await this.getDestinationItems(item.codes);
      this.destinationItems = this.allDestinationItems.slice(0, 20);
      if (this.isMobile) {
        this.$refs.destinationAutocompleteMobile.$el
          .querySelector("input")
          .focus();
      } else {
        this.$refs.destinationAutocomplete.$el.querySelector("input").focus();
      }
    },
    onSelectDestination(item) {
      this.destination = item;
      this.dialog = false;
      this.$refs.datePicker.showDatepicker();
    },

    clearDate() {
      this.DepartureDate = null;
    },
    displacement() {
      const From = this.From;
      const To = this.To;
      this.To = From;
      this.From = To;
    },
    getDestinationItems(value) {
      return new Promise((resolve) => {
        if (value && !value.name) {
          this.axios
            .get(
              `https://vacationapi.tripsupport.ca/api/Resource/GetDestinations?codes=${value}`
            )
            .then((response) => {
              resolve(response.data.data);
            });
        }
      });
    },
    searchItems(value, arr) {
      return new Promise((resolve) => {
        if (value.length) {
          let items = arr
            .filter((e) => {
              let searchWord = value.toLowerCase().trim();
              return (
                e.name.toLowerCase().indexOf(searchWord) >= 0 ||
                (e.countryName &&
                  e.countryName.toLowerCase().indexOf(searchWord) >= 0)
              );
            })
            .slice(0, 20);
          resolve(items);
        } else {
          resolve(arr.slice(0, 20));
        }
      });
    },
    getRangeDate(e) {
      this.lastDate = e;
      this.DepartureDate = this.changeFormat(e.startDate);
    },
    save() {
      // let destination = [];
      // debugger
      // if (!this.selectedMultiple.length) {
      //   destination.push(this.origin.ids);
      // } else {
      //   this.selectedMultiple.map((items) => {
      //     destination.push(items.id);
      //   });
      // }
      if (!this.origin || !this.destination) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText: "Please Enter Departing From and Going To",
        };
        if (!this.origin) {
          this.$gtag.event("Validation", {
            event_category: "Vacation",
            event_label: "User entered an invalid Departing From",
          });
        }
        if (!this.destination) {
          this.$gtag.event("Validation", {
            event_category: "Vacation",
            event_label: "User entered an invalid Going To",
          });
        }
        return;
      }
      if (!this.DepartureDate) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText: "Please Enter departure date",
        };
        this.$gtag.event("Validation", {
          event_category: "Vacation",
          event_label: "User entered an invalid Departure",
        });
        return;
      }
      if (this.Children > 0 && this.NumberOfRooms > 1) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText:
            "Sorry, the adult occupancy must be consistent for all rooms in an online booking.",
        };
        this.$gtag.event("Validation", {
          event_category: "Vacation",
          event_label:
            "User entered Rooms do not match the number of passengers",
        });
        return;
      }
      let checkAvailableRoom = this.Adults / this.NumberOfRooms;
      if (!Number.isInteger(checkAvailableRoom)) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText:
            "Sorry, the adult occupancy must be consistent for all rooms in an online booking.",
        };
        this.$gtag.event("Validation", {
          event_category: "Vacation",
          event_label:
            "User entered Rooms do not match the number of passengers",
        });
        return;
      }
      if (this.NumberOfPassangers > 6) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText:
            "Sorry, you can only book a maximum of 6 passengers in an online booking.",
        };
        this.$gtag.event("Validation", {
          event_category: "Vacation",
          event_label: "User entered more than 6 passengers",
        });
        return;
      }
      if (this.Adults == 0) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText: "AdultCount should not be zero",
        };
        this.$gtag.event("Validation", {
          event_category: "Vacation",
          event_label: "User entered an invalid Traveller",
        });
        return;
      }
      let getError = false;
      this.ChildrenAges.forEach((element) => {
        if (element == 0 || element == null || element > 17) {
          getError = true;
        }
      });
      if (getError) {
        this.showDialog = true;
        this.toast = {
          color: "#cb3839",
          toastText:
            "Age should not be zero or empty or The maximum age must be 17 years old",
        };
        this.$gtag.event("Validation", {
          event_category: "Vacation",
          event_label:
            "User entered zero or empty or more than 17 years for children ages",
        });
        return;
      }
      let searchObject = {
        origin: this.origin,
        destination: this.destination,
        DepartureDate: this.DepartureDate,
        Durations: this.Durations,
        AllInclusive: this.AllInclusive,
        NumberOfRooms: this.NumberOfRooms,
        NumberOfAdults: this.Adults,
        NumberOfChildren: this.Children,
        lastDate: this.lastDate,
        ChildrenAges: JSON.stringify(this.ChildrenAges),
      };
      // let newLocalStorage = {
      //   From: this.From,
      //   To: this.To,
      //   NumberOfPassangers: this.NumberOfPassangers,
      //   NumberOfRooms: this.NumberOfRooms,
      //   DepartureDate: this.DepartureDate,
      //   AllInclusive: this.AllInclusive,
      //   ChildrenAges: this.ChildrenAges,
      //   Durations: this.Durations,
      //   multiple: this.selectedMultiple,
      //   date: this.lastDate,
      //   TravellersData: this.previousSelectionTravellers,
      // };
      localStorage.setItem("vacations", JSON.stringify(searchObject));
      localStorage.setItem("adultsFilter", JSON.stringify(this.Adults));
      localStorage.setItem("childrenFilter", JSON.stringify(this.ChildrenAges));
      this.$gtag.event("Search", {
        event_category: "Vacation",
        event_label: "User submit new search",
      });
      let url = location.href;
      url = url.substring(url.indexOf(".")).split("/")[0];
      if (url == "http:") {
        url = ".ca";
      }
      let href = `https://secure.tripsupport${url}/vacation?From=${searchObject.origin.codes}&To=${searchObject.destination.ids}&DepartureDate=${searchObject.DepartureDate}&Durations=${searchObject.Durations}&AllInclusive=${searchObject.AllInclusive}&NumberOfRooms=${searchObject.NumberOfRooms}&NumberOfAdults=${searchObject.NumberOfAdults}&ChildrenAges=${searchObject.ChildrenAges}`;
      window.open(href, "_self");
    },
    onSelect(item) {
      if (this.resultMode == "origin") {
        this.onSelectOrigin(item);
      } else {
        this.onSelectDestination(item);
      }
    },
    changeFormat(val) {
      let date = moment(val).format("D MMM YYYY");
      return date;
    },
    rooms(val) {
      this.NumberOfRooms = val;
      let checkAvailableRoom = this.Adults / this.NumberOfRooms;
      if (!Number.isInteger(checkAvailableRoom)) {
        this.roomsError = true;
      } else {
        this.roomsError = false;
      }
    },
    passanger(val, ChildrenAges, Children, Adults) {
      let childAgesArray = [];
      ChildrenAges.forEach((element) => {
        childAgesArray.push(element.child);
      });
      this.NumberOfPassangers = val;
      this.ChildrenAges = childAgesArray;
      this.Children = Children;
      this.Adults = Adults;
      this.previousSelectionTravellers = {
        adults: Adults,
        children: Children,
        childrenAges: ChildrenAges,
      };
      let checkAvailableRoom = this.Adults / this.NumberOfRooms;
      if (!Number.isInteger(checkAvailableRoom)) {
        this.roomsError = true;
      } else {
        this.roomsError = false;
      }
    },
    getDurations(val) {
      this.Durations = val;
    },
  },
};
</script>
