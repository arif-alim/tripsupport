<style scoped lang="scss">

// @media only screen and (max-width: 600px) {
//   .ts-passengers-component {
//     padding-right: 8px;
//   }
//   .ts-header-component {
//     display: block;
//     padding: 16px 0 20px;
//   }
//   ::v-deep .ts-icon-passenger {
//     display: none;
//   }
// }
// @media (min-width: 992px) and (max-width: 1366px) {
//   ::v-deep .ts-header-component .ts-menu {
//     right: 0;
//   }
// }
</style>

<template>
  <div>
    <div class="ts-header-component">
      <div class="ts-title-component">
        <FlightNav @activeItem="activeItem = $event" />
      </div>
      <div class="ts-other-components">
        <div class="ts-passengers-component">
          <Passengers :activePassengers="activeItem" />
        </div>
        <div class="ts-airfare-component">
          <AirfareType />
        </div>
      </div>
    </div>
    <keep-alive>
      <component :is="activeComponents" />
    </keep-alive>
  </div>
</template>

<script>
import FlightNav from "./FlightNav.vue";
import RoundTrip from "./RoundTrip/index.vue";
import OneWay from "./OneWay/index.vue";
import MultiCity from "./MultiCity/index.vue";
import Passengers from "./../Common/Passengers.vue";
import AirfareType from "./../Common/AirfareType.vue";
export default {
  components: {
    FlightNav,
    Passengers,
    AirfareType,
    MultiCity,
  },
  data() {
    return {
      activeItem: "RoundTrip",
      name: "flight",
    };
  },
  computed: {
    activeComponents() {
      switch (this.activeItem) {
        case "RoundTrip":
          return RoundTrip;
          break;
        case "OneWay":
          return OneWay;
          break;
        case "MultiCity":
          return MultiCity;
          break;
      }
    },
  },
};
</script>

<style></style>
