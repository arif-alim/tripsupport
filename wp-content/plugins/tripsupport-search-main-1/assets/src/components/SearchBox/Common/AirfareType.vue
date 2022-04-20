<style scoped lang="scss">
section {
  position: relative;
}
.ts-menu {
  top: 24px;
}
.ts-arifare-activation {
  display: flex;
  align-items: center;
  cursor: pointer;
}
.ts-arifare-count {
  font-size: 0.845rem;
  color: var(--primary-base);
  font-weight: 600;
}
.ts-airfare-item {
  height: 36px;
  display: flex;
  align-items: center;
  padding: 0 16px;
  font-size: 13px;
  color: rgb(17, 24, 39);
  cursor: pointer;
  &.active,
  &:hover {
    background: rgb(243, 244, 246);
  }
}
.svg-chevron {
  width: 20px;
  fill: var(--primary-base);
}
.ts-airfare-wrapper {
  width: 250px;
  @media only screen and (max-width: 600px) {
    width: 190px;
  }
}
.ts-content-wrapper {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
</style>
<template>
  <section>
    <div class="ts-arifare-activation">
      <div class="ts-icon-passenger">
        <!-- <svg
          width="20"
          height="20"
          viewBox="0 0 20 20"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M6.00952 11.6286C5.86652 11.6299 5.72481 11.6557 5.59048 11.7048L2.25714 3.80952H1.90476C1.39959 3.80952 0.915104 3.60884 0.557892 3.25163C0.20068 2.89442 0 2.40994 0 1.90476C0 1.39959 0.20068 0.915104 0.557892 0.557892C0.915104 0.20068 1.39959 0 1.90476 0H4.57143L7.79048 7.61905H13.3333C13.8385 7.61905 14.323 7.81973 14.6802 8.17694C15.0374 8.53415 15.2381 9.01863 15.2381 9.52381C15.2381 10.029 15.0374 10.5135 14.6802 10.8707C14.323 11.2279 13.8385 11.4286 13.3333 11.4286H9.39048L9.48571 11.6286H6.00952ZM18.0952 14.2857H17.9524L17.4762 18.0952H18.0952C18.6004 18.0952 19.0849 17.8946 19.4421 17.5373C19.7993 17.1801 20 16.6957 20 16.1905C20 15.6853 19.7993 15.2008 19.4421 14.8436C19.0849 14.4864 18.6004 14.2857 18.0952 14.2857ZM15.8095 12.381H6.88571C6.73188 12.381 6.57955 12.4113 6.43743 12.4701C6.2953 12.529 6.16617 12.6153 6.05739 12.7241C5.94861 12.8328 5.86233 12.962 5.80346 13.1041C5.74459 13.2462 5.71429 13.3985 5.71429 13.5524V18.819C5.71303 18.9737 5.7424 19.127 5.80071 19.2703C5.85901 19.4135 5.9451 19.5437 6.054 19.6535C6.16291 19.7633 6.29247 19.8505 6.43522 19.9099C6.57797 19.9694 6.73107 20 6.88571 20H15.1524C15.4393 20.0001 15.7164 19.8957 15.9319 19.7065C16.1475 19.5172 16.2868 19.2559 16.3238 18.9714L16.981 13.7048C17.0012 13.5389 16.986 13.3707 16.9363 13.2111C16.8867 13.0516 16.8038 12.9044 16.6931 12.7793C16.5824 12.6542 16.4464 12.554 16.294 12.4853C16.1417 12.4166 15.9766 12.3811 15.8095 12.381Z"
            fill="#66678F"
          />
        </svg> -->
      </div>
      <div class="ts-arifare-count" @click="airfareTypeMenu = !airfareTypeMenu">
        {{ airfareType }}
      </div>
      <svg
        @click="airfareTypeMenu = !airfareTypeMenu"
        class="svg-chevron"
        viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          fill-rule="evenodd"
          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
          clip-rule="evenodd"
        ></path>
      </svg>
    </div>
    <MenuDialog :showMenu="airfareTypeMenu" :fullHeight="false">
      <template #data>
        <div class="ts-airfare-wrapper" v-click-outside="onClickOutside">
          <div
            class="ts-airfare-item"
            :class="{ active: airfareType == item }"
            v-for="(item, index) in typeItems"
            :key="index"
            @click="change(item)"
          >
            <div class="ts-content-wrapper">
              <div>
                <!--  <span class="ts-airfare-svg">
                 <svg
                    width="18"
                    height="18"
                    viewBox="0 0 18 18"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.00952 11.6286C5.86652 11.6299 5.72481 11.6557 5.59048 11.7048L2.25714 3.80952H1.90476C1.39959 3.80952 0.915104 3.60884 0.557892 3.25163C0.20068 2.89442 0 2.40994 0 1.90476C0 1.39959 0.20068 0.915104 0.557892 0.557892C0.915104 0.20068 1.39959 0 1.90476 0H4.57143L7.79048 7.61905H13.3333C13.8385 7.61905 14.323 7.81973 14.6802 8.17694C15.0374 8.53415 15.2381 9.01863 15.2381 9.52381C15.2381 10.029 15.0374 10.5135 14.6802 10.8707C14.323 11.2279 13.8385 11.4286 13.3333 11.4286H9.39048L9.48571 11.6286H6.00952ZM18.0952 14.2857H17.9524L17.4762 18.0952H18.0952C18.6004 18.0952 19.0849 17.8946 19.4421 17.5373C19.7993 17.1801 20 16.6957 20 16.1905C20 15.6853 19.7993 15.2008 19.4421 14.8436C19.0849 14.4864 18.6004 14.2857 18.0952 14.2857ZM15.8095 12.381H6.88571C6.73188 12.381 6.57955 12.4113 6.43743 12.4701C6.2953 12.529 6.16617 12.6153 6.05739 12.7241C5.94861 12.8328 5.86233 12.962 5.80346 13.1041C5.74459 13.2462 5.71429 13.3985 5.71429 13.5524V18.819C5.71303 18.9737 5.7424 19.127 5.80071 19.2703C5.85901 19.4135 5.9451 19.5437 6.054 19.6535C6.16291 19.7633 6.29247 19.8505 6.43522 19.9099C6.57797 19.9694 6.73107 20 6.88571 20H15.1524C15.4393 20.0001 15.7164 19.8957 15.9319 19.7065C16.1475 19.5172 16.2868 19.2559 16.3238 18.9714L16.981 13.7048C17.0012 13.5389 16.986 13.3707 16.9363 13.2111C16.8867 13.0516 16.8038 12.9044 16.6931 12.7793C16.5824 12.6542 16.4464 12.554 16.294 12.4853C16.1417 12.4166 15.9766 12.3811 15.8095 12.381Z"
                    />
                  </svg>
                </span> -->
                <span class="ts-airfare-name">
                  {{ item }}
                </span>
              </div>
              <!-- <div>
                <svg
                  v-if="airfareType == item"
                  width="6"
                  height="10"
                  viewBox="0 0 6 10"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M0.250695 8.61155C0.101068 8.75343 0.0112855 8.95149 0.000993118 9.16241C-0.00929922 9.37333 0.0607372 9.57992 0.195777 9.73698C0.262494 9.81459 0.343204 9.87769 0.433283 9.92264C0.523361 9.96759 0.621038 9.99351 0.720717 9.99893C0.820395 10.0043 0.920115 9.98915 1.01417 9.9542C1.10821 9.91925 1.19474 9.86525 1.2688 9.79528L5.7493 5.55861C5.82846 5.48355 5.89168 5.39196 5.93486 5.28975C5.97805 5.18755 6.00024 5.07701 6 4.96527C5.99976 4.85354 5.9771 4.7431 5.93348 4.6411C5.88986 4.5391 5.82625 4.44781 5.74677 4.37312L1.30682 0.203585C1.23253 0.133696 1.14577 0.0798388 1.05152 0.0451078C0.957266 0.0103769 0.85738 -0.00454521 0.757596 0.00120068C0.657813 0.00694656 0.560098 0.033247 0.470063 0.0785904C0.380029 0.123933 0.299449 0.187425 0.232952 0.265421C0.0984339 0.423044 0.0291311 0.629972 0.0402159 0.840902C0.0513006 1.05183 0.141869 1.24958 0.292095 1.39084L3.82378 4.70703C3.85904 4.74017 3.88724 4.78069 3.90654 4.82597C3.92585 4.87125 3.93582 4.92027 3.93582 4.96984C3.93582 5.01941 3.92585 5.06843 3.90654 5.11371C3.88724 5.15898 3.85904 5.19951 3.82378 5.23264L0.250695 8.61155Z"
                    fill="#66678F"
                  />
                </svg>
              </div> -->
            </div>
          </div>
        </div>
      </template>
    </MenuDialog>
  </section>
</template>

<script>
import MenuDialog from "./MenuDialog.vue";
export default {
  components: {
    MenuDialog,
  },
  data() {
    return {
      airfareTypeMenu: false,
      typeItems: [
        `${this.$t("Economy")}`,
        `${this.$t("Premium_Economy")}`,
        `${this.$t("Business")}`,
        `${this.$t("First")}`,
      ],
      airfareType: `${this.$t("Economy")}`,
    };
  },
  mounted() {
    if (this.$parent.name == "flight") {
      let lastFlightRoundTripSearch = localStorage.getItem("flights.roundTrip");
      if (!lastFlightRoundTripSearch) {
        return;
      }
      let parsedlastFlightRoundTripSearch = JSON.parse(
        lastFlightRoundTripSearch
      );
      this.airfareType = `${this.$t(
        `${parsedlastFlightRoundTripSearch.class}`
      )}`;
    }
    if (this.$parent.name == "FlightHotel") {
      let getFlightLastSearch = localStorage.getItem("lastFlightHotelSearch");
      if (!getFlightLastSearch) {
        return;
      }
      let parsedGetFlightLastSearch = JSON.parse(getFlightLastSearch);
      this.airfareType = `${this.$t(
        `${parsedGetFlightLastSearch.FlightType}`
      )}`;
    }
    this.$store.commit("getAirType", this.airfareType);
  },
  methods: {
    onClickOutside() {
      this.airfareTypeMenu = false;
    },
    change(item) {
      this.airfareType = item;
      this.$store.commit("getAirType", this.airfareType);
      this.airfareTypeMenu = false;
    },
  },
};
</script>
