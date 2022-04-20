<style scoped lang="scss">
ul {
  display: flex;
  list-style-type: none;
  padding-left: 0 !important;
  margin: 0;
}
li {
  cursor: pointer;
  font-weight: 600;
  margin-right: 16px;
  padding: 8px 12px;
  border: 1px solid rgb(229, 231, 235);
  border-radius: 24px;
  color: rgb(0, 36, 107);
  white-space: nowrap;
  font-size: 0.845rem;
  &.active {
    background: var(--primary-base);
    border-color: var(--primary-base);
    color: #ffffff;
  }
  // &:hover {
  //   background: #66678f;
  // }
}

// @media only screen and (max-width: 600px) {
//   ul {
//     display: flex;
//     margin-bottom: 20px;
//   }
// }
// @media only screen and (max-width: 320px) {
//   li {
//     padding: 6px 10px;
//     font-size: 12px;
//   }
// }
</style>

<template>
  <div>
    <ul>
      <li
        @click="activeNav('RoundTrip')"
        :class="{ active: activeItem == 'RoundTrip' }"
      >
        {{ $t("Round_Trip") }}
      </li>
      <li
        @click="activeNav('OneWay')"
        :class="{ active: activeItem == 'OneWay' }"
      >
        {{ $t("One_Way") }}
      </li>
      <li
        @click="activeNav('MultiCity')"
        :class="{ active: activeItem == 'MultiCity' }"
      >
        {{ $t("Multi_City") }}
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      activeItem: "RoundTrip",
    };
  },
  methods: {
    activeNav(menuItem) {
      this.activeItem = menuItem;
      this.setServiceAnalytics();
      this.$emit("activeItem", menuItem);
    },
    setServiceAnalytics() {
      switch (this.activeItem) {
        case "RoundTrip":
          this.$gtag.event("Services", {
            event_category: "Flight Runway",
            event_label: "User Click Flight Runway",
          });
          break;
        case "OneWay":
          this.$gtag.event("Services", {
            event_category: "Flight One Way",
            event_label: "User Click Flight One Way",
          });
          break;
        case "MultiCity":
          this.$gtag.event("Services", {
            event_category: "Flight Multi City",
            event_label: "User Click Flight Multi City",
          });
          break;
      }
    },
  },
};
</script>
