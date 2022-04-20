<style  lang="scss">
.ts-hotel-date-picker {
  position: relative;
  border: 1px solid var(--primary-base);
  border-radius: 6px;
  height: 50px;
  .vhd__datepicker__inner {
    padding: 0;
  }
  .vhd__datepicker__months {
    width: 35.5em;
    padding: 16px;
    @media only screen and (max-width: 600px) {
      width: auto;
    }
  }
  .vhd__datepicker__wrapper {
    // height: 48px;
    // border: 1px solid rgba(171, 171, 196, 0.6);
    // border-radius: 6px;
    width: 100%;
    // margin-top: 11px;
    // background: transparent url(../../../assets/images/svg/calendar-icon.svg)
    //   no-repeat 10px center / 1em;
    // background: none;
    background: none;
  }
  .vhd__datepicker__month-name {
    left: 0;
  }
  .vhd__datepicker__dummy-wrapper {
    border: unset;
    overflow: hidden;
  }
  .vhd__datepicker {
    z-index: 1001;
    border-radius: 6px;
  }
  .vhd__hide-on-desktop {
    .vhd__datepicker__input {
      text-align: center !important;
    }
  }
  .vhd__datepicker__input {
    color: #66678f;
    font-size: 14px;
    font-weight: 500;
    text-align: left !important;
    padding-left: 34px;
  }
  .ts-label {
    text-align: left;
    font-size: 12px;
    color: var(--primary-base);
    position: absolute;
    background: #fff;
    top: -10px;
    left: 10px;
    padding: 0 4px;
    margin: 0;
  }

  .vhd__datepicker__input:first-child {
    // width: 60%;
    background: transparent url(../../../assets/images/svg/calendar-icon.svg)
      no-repeat 10px center / 17px;
    position: relative;
  }
  .vhd__datepicker__input:last-child {
    &:before {
      content: "";
      height: 24px;
      width: 1px;
      background: var(--primary-base);
      display: block;
      position: absolute;
      left: -4px;
      top: 11px;
    }
    position: relative;
    background: transparent url(../../../assets/images/svg/calendar-icon.svg)
      no-repeat 10px center / 17px;
    // width: 50%;
  }
  .vhd__datepicker__month-day,
  .vhd__datepicker__month-day-wrapper,
  .vhd__datepicker__month-button {
    border: unset !important;
  }
  .vhd__datepicker__month-button {
    background: transparent url(../../../assets/images/svg/arrow-right.svg)
      no-repeat 50%/8px;
  }
  .vhd__datepicker__dummy-wrapper--is-active {
    border: unset;
  }

  .vhd__datepicker__month-day-wrapper {
    padding-top: calc(100% - 1px) !important;
  }
  .vhd__datepicker__month-day--selected {
    background: rgba(102, 103, 143, 0.08) !important;
    color: #66678f !important;
  }

  .vhd__datepicker__month-day--first-day-selected,
  .vhd__datepicker__month-day--last-day-selected {
    background: rgb(26, 86, 219) !important;
    border-radius: 50%;
    color: #ffffff !important;
  }
  .vhd__datepicker__month-day {
    color: #0c0d25;
  }
  .vhd__datepicker__month-day--disabled {
    background: unset;
    color: #ababc4;
  }
  .vhd__square .vhd__datepicker__month-day {
    margin: 0 0 0 0 !important;
  }
  .vhd__datepicker__month-day--allowed-checkout:hover,
  .vhd__datepicker__month-day--valid:hover {
    background: rgb(26, 86, 219);
    border-radius: 50%;
    color: #ffffff !important;
  }
  .vhd__hide-up-to-tablet {
    display: block;
  }
  .vhd__datepicker__week-row {
    box-shadow: unset;
  }
  .vhd__datepicker__month-day--selected {
    background: rgb(229, 231, 235) !important;
    color: rgb(17, 24, 39) !important;
  }
}

// @media only screen and (max-width: 768px) {
//   .ts-label {
//     display: none;
//   }
//   .vhd__datepicker__month {
//     padding-top: 4em;
//   }
// }
</style>

<template>
  <div class="ts-hotel-date-picker">
    <label class="ts-label">{{ title }}</label>
    <!--  -->
    <HotelDatePicker
      ref="datePicker"
      format="ddd M/D"
      :hoveringTooltip="false"
      :startingDateValue="startingDateValue"
      :endingDateValue="endingDateValue"
      :closeDatepickerOnClickOutside="false"
      :positionRight="true"
      :singleDaySelection="singleDatePicker"
      :showSingleMonth="singleDatePicker"
      :startDate="startDate"
      :endDate="endDate"
      @day-clicked="checkIn"
      @period-selected="updateValues"
      @clear-selection="removeDate"
      :checkInTitle="placeHolder.origin"
      :checkOutTitle="placeHolder.destination"
    />
    <Toast v-model="showDialog" :toast="toast" />
  </div>
</template>
<script>
import Toast from "./Toast.vue";
import moment from "moment";
export default {
  props: {
    lastDate: {},
    singleDatePicker: {
      default: false,
    },
    startDate: {},
    endDate: {},
    title: {
      default: "Departure / Return ",
    },
    placeHolder: {
      type: Object,
      default: {
        origin: "Departure Date",
        destination: "Return Date",
      },
    },
    numberOfStay: {
      default: 20,
    },
    haveValidation: {
      default: false,
    },
  },
  components: {
    Toast,
  },
  data() {
    return {
      date: null,
      dateRange: {
        startDate: "",
        endDate: "",
      },
      toast: {
        toastText: "",
        color: "red",
      },
      showDialog: false,
      show: true,
      startingDateValue: null,
      endingDateValue: null,
      startDateCalendar: new Date(),
      storageDateSelected: [],
    };
  },
  watch: {
    lastDate: {
      handler: function (val) {
        if (val) {
          this.dateRange = val;
          if (!this.singleDatePicker) {
            this.startingDateValue = new Date(val.startDate);
            this.endingDateValue = new Date(val.endDate);
          } else {
            this.startingDateValue = new Date(val.startDate);
          }
        }
      },
      deep: true,
      immediate: true,
    },
    startDate: {
      handler: function (val) {
        this.startDateCalendar = val;
      },
    },
  },
  mounted() {
    document
      .querySelector(".vhd__datepicker__clear-button svg path")
      .setAttribute("stroke", "#66678F");
    // this.showDatepicker();
  },
  methods: {
    checkIn(date) {
      if (this.singleDatePicker) {
        this.dateRange.startDate = date;
        this.$emit("RangeSelectedDate", this.dateRange);
      } else {
        this.storageDateSelected.push(date);
        let storage = this.storageDateSelected.slice(-2);
        if (storage[1]) {
          this.storageDateSelected = [];
        }
        if (storage[0] && !storage[1]) {
          this.showDialog = true;
          this.toast = {
            color: "#17a2b8 ",
            toastText: "Please select return date",
            timeout: "2500",
          };
        }
      }
    },
    updateValues(Event, startDate, endDate) {
      let startValidation = moment(startDate);
      let endValidation = moment(endDate);
      let diff = moment.duration(endValidation.diff(startValidation)).asDays();
      if (this.haveValidation) {
        let dateValidationPassed = true;
        if (diff > this.numberOfStay) {
          this.showDialog = true;
          this.toast = {
            color: "#cb3839",
            toastText: `Maximum Length of stay allowed is ${this.numberOfStay} days`,
          };
          dateValidationPassed = false;
        }
        this.$emit("dateValidation", dateValidationPassed);
      }
      this.dateRange.startDate = startDate;
      this.dateRange.endDate = endDate;
      this.$emit("RangeSelectedDate", this.dateRange);
    },
    showDatepicker() {
      setTimeout(() => {
        this.$refs.datePicker.showDatepicker();
      }, 1);
    },
    removeDate() {
      this.$emit("clearDate");
    },
  },
};
</script>
