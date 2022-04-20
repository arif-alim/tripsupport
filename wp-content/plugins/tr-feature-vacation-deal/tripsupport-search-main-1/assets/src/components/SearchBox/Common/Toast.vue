<style scoped>
.v-snack {
  z-index: 1001 !important;
}
</style>

<template>
  <div>
    <v-snackbar
      v-model="snackbar"
      :timeout="toast.timeout"
      :color="toast.color"
      v-on:input="$emit('input', snackbar)"
    >
      {{ toast.toastText }}
    </v-snackbar>
  </div>
</template>
<script>
export default {
  props: {
    toast: {
      default: {
        timeout: '4000',
      },
      require: true,
    },
    value: {
      require: true,
    },
  },
  watch: {
    value: function(val) {
      this.snackbar = val;
    },
  },
  data() {
    return {
      snackbar: this.value,
    };
  },
};
</script>
