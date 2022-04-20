<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Example Component</div>

          <div class="card-body">I'm an example component.</div>
        </div>
      </div>
    </div>
    <p class="red-color">vdjbvdf</p>
    <test></test>
    <v-text-field label="hello" solo></v-text-field>
    <v-checkbox label="helooooo"> </v-checkbox>
    <!-- <SearchBox /> -->
  </div>
</template>

<script>
import test from "./test.vue";
export default {
  mounted() {
    // alert("component loaded");
  },
  components: {
    test,
  },
};
</script>

<style>
.red-color {
  color: red !important;
}
</style>
