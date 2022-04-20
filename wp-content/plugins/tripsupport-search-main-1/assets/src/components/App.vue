<style scoped>
::v-deep .v-application--wrap {
  min-height: unset !important;
}
.v-application {
  line-height: unset !important;
  font-family: "Inter var", system-ui, ui-sans-serif;
}
.theme--light.v-application {
  background: transparent !important;
}
</style>

<template>
  <v-app class="ts-font">
    <SearchBox />
  </v-app>
</template>

<script>
import SearchBox from "../components/SearchBox/index.vue";
export default {
  components: {
    SearchBox,
  },
  mounted() {
  
  },
};
</script>
