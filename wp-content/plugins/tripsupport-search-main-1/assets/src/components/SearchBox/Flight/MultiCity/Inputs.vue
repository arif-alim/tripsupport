<style lang="scss" scoped>
section {
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
  <section>
    <div class="ts-inputs-wrapper">
      <div class="ts-origin">
        <Autocomplete
          ref="originAutocomplete"
          @click="onFocus('origin')"
          @search="onOriginSearch"
          @select="onSelectOrigin"
          :selectedText="originSelectedText"
          v-model="origin"
          :items="originItems"
          :highlightOnSelect="!isMobile"
          :placeholder="$t('Departing_From')"
        >
          <template #item="{ item, active }">
            <SearchResult :item="item" :active="active" />
          </template>
        </Autocomplete>
      </div>
      <SwapIcon @click="displacement"></SwapIcon>
      <div class="ts-destination">
        <Autocomplete
          ref="destinationAutocomplete"
          @click="onFocus('destination')"
          @search="onDestinationSearch"
          @select="onSelectDestination"
          :selectedText="destinationSelectedText"
          v-model="destination"
          :items="destinationItems"
          :highlightOnSelect="!isMobile"
          :placeholder="$t('Going_To')"
        >
          <template #item="{ item, active }">
            <SearchResult :item="item" :active="active" />
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
        :singleDatePicker="this.singleDatePicker"
        :startDate="startDate"
        :title="this.singleDatePicker ? 'Departure' : 'Departure / Return'"
        :placeHolder="{
          origin: 'Departure Date',
          destination: 'Return Date',
        }"
      />
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
            ref="originAutocompleteMobile"
            @search="onOriginSearch"
            @select="onSelectOrigin"
            :selectedText="originSelectedText"
            v-model="origin"
            :items="originItems"
            :placeholder="$t('Departing_From')"
          >
          </Autocomplete>
        </div>
        <SwapIcon @click="displacement"></SwapIcon>
        <div class="ts-destination">
          <Autocomplete
            ref="destinationAutocompleteMobile"
            @focus="resultMode = 'dist'"
            @search="onDestinationSearch"
            @select="onSelectDestination"
            :selectedText="destinationSelectedText"
            v-model="destination"
            :items="destinationItems"
            :placeholder="$t('Going_To')"
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
  </section>
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
  props: {
    value: {},
    singleDatePicker: { default: true },
    userLocation: { default: false },
    startDate: {
      default: () => {
        return new Date();
      },
    },
  },
  data() {
    return {
      dialog: false,
      resultMode: "origin",
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
      getOriginSearch: null,
      getDestinationSearch: null,
      firstTime: true,
    };
  },
  watch: {
    value: {
      handler: function () {
        console.log(this.value);
        this.origin = this.value.origin;
        this.destination = this.value.destination;
        if (this.value.departureDate) {
          this.lastDate = {
            startDate: moment(this.value.departureDate, "D MMM YYYY"),
            endDate: this.value.returnDate
              ? moment(this.value.returnDate, "D MMM YYYY")
              : null,
          };
        }
        console.log(this.lastDate);
      },
      deep: true,
    },
    dialog: {
      handler: function () {
        if (this.dialog) {
          document.getElementsByTagName("body")[0].classList.add("noscroll");
          setTimeout(() => {
            document.getElementsByClassName(
              "v-dialog--active"
            )[0].scrollTop = 0;
          }, 100);
        }
        if (!this.dialog) {
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
    originSelectedText() {
      if (this.origin) {
        return `${this.origin.ac}-${this.origin.an}, ${this.origin.cn}`;
      }
    },
    destinationSelectedText() {
      if (this.destination) {
        return `${this.destination.ac}-${this.destination.an}, ${this.destination.cn}`;
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
  async mounted() {
    // if (this.userLocation) {
    //   this.setUserLocation();
    // }
    this.firstTime = false;
  },
  methods: {
    onFocus(mode) {
      this.$emit("onFocus", mode);
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
          this.$refs.destinationAutocomplete.$el.querySelector("input").blur();
          this.$refs.destinationAutocompleteMobile.$el
            .querySelector("input")
            .focus();
        }
      }, 10);
    },

    async onOriginSearch(search) {
      let res = await this.searchRequest(search);
      this.originItems = res;
    },
    async onDestinationSearch(search) {
      let res = await this.searchRequest(search);
      this.destinationItems = res;
    },
    onSelectOrigin(item) {
      this.value.origin = item;
      this.$emit("input", this.value);
      if (this.isMobile) {
        this.$refs.destinationAutocompleteMobile.$el
          .querySelector("input")
          .focus();
        this.$refs.originAutocompleteMobile.$el.querySelector("input").blur();
      } else {
        this.$refs.destinationAutocomplete.$el.querySelector("input").focus();
      }
    },
    onSelectDestination(item) {
      this.value.destination = item;
      this.$emit("input", this.value);
      this.$refs.destinationAutocompleteMobile.$el
        .querySelector("input")
        .blur();
      this.$refs.datePicker.showDatepicker();
      this.dialog = false;
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
      this.value.departureDate = null;
      this.value.returnDate = null;
      this.$emit("input", this.value);
    },
    displacement() {
      const origin = this.origin;
      const destination = this.destination;
      this.destination = origin;
      this.origin = destination;
      this.value.destination = origin;
      this.value.origin = destination;
      this.$emit("input", this.value);
    },

    getRangeDate(e) {
      this.lastDate = e;
      this.value.departureDate = this.changeFormat(e.startDate);
      this.value.returnDate = this.changeFormat(e.endDate);
      this.$emit("input", this.value);
    },
    changeFormat(val) {
      return moment(val).format("D MMM YYYY");
    },
    onSelect(item) {
      if (this.resultMode == "origin") {
        this.onSelectOrigin(item);
      } else {
        this.onSelectDestination(item);
      }
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
