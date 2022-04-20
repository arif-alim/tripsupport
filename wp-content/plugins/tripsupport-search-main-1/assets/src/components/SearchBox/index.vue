<style scoped lang="scss">
.plugin-wrapper {
  box-shadow: rgb(0 0 0 / 0%) 0px 0px 0px 0px, rgb(0 0 0 / 0%) 0px 0px 0px 0px,
    rgb(0 0 0 / 10%) 0px 20px 25px -5px, rgb(0 0 0 / 10%) 0px 8px 10px -6px;
  border-radius: 0.75rem;
  background: #fff;
  max-width: 1280px;
}
.content-wrapper {
  padding: 12px 24px;
  @media only screen and (max-width: 600px) {
    padding: 12px 20px;
  }
}
// @media only screen and (max-width: 600px) {
//   .search-box {
//     padding: 0 0;
//     box-shadow: unset;
//     border-bottom: 2px solid rgba(171, 171, 196, 0.2);
//   }
// }
</style>

<template>
  <section class="plugin-wrapper">
    <NavigationSearchBox @input="onTabChange" v-model="activeItem" />
    <div class="content-wrapper">
      <keep-alive>
        <component :is="activeComponents" />
      </keep-alive>
    </div>
  </section>
</template>

<script>
import Flight from "./Flight/Index.vue";
import Hotel from "./Hotel/Index.vue";
import Vacation from "./Vacation/Index.vue";
import NavigationSearchBox from "./NavigationSearchBox.vue";
import FlightHotel from "./FlightHotel/Index.vue";
import ThingsToDo from "./ThingsToDo/Index.vue";
export default {
  components: {
    NavigationSearchBox,
  },
  data() {
    return {
      activeItem: "flight",
      activeComponents: Flight,
    };
  },
  mounted() {
    let targetLocation = [
      "flight",
      "vacation",
      "hotel",
      "flight-hotel",
      "things-to-do",
    ];
    let selectedTab = this.$route.query.selectedTab;
    targetLocation.forEach((element) => {
      if (location.href.includes(`${element}`)) {
        this.activeItem = element;
      }
    });
    if (selectedTab && targetLocation.includes(selectedTab)) {
      this.activeItem = selectedTab;
    }
    this.onTabChange(this.activeItem);
  },
  methods: {
    onTabChange(activeItem) {
      this.activeItem = activeItem;
      let query = this.$route.query;
      let new_query = Object.assign({}, query, {
        selectedTab: this.activeItem,
      });
      if (JSON.stringify(new_query) != JSON.stringify(query)) {
        this.$router.push({
          query: new_query,
        });
      }
      switch (this.activeItem) {
        case "flight":
          this.activeComponents = Flight;
          break;
        case "vacation":
          this.activeComponents = Vacation;
          break;
        case "hotel":
          this.activeComponents = Hotel;
          break;
        case "flight-hotel":
          this.activeComponents = FlightHotel;
          break;
        case "things-to-do":
          this.activeComponents = ThingsToDo;
          break;
      }
    },
  },
};
</script>
