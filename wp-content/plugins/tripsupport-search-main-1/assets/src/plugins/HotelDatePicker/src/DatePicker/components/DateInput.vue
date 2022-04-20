<template>
  <div
    class="vhd__datepicker__input"
    @click="toggleDatepicker"
    @keyup.enter.stop.prevent="toggleDatepicker"
    data-qa="vhd__datepickerInput"
    :class="inputClass"
    :tabindex="tabIndex"
  >
    {{ inputDate ? inputDate : title }}
  </div>
</template>

<script>
export default {
  props: {
    isOpen: {
      type: Boolean,
      required: true,
    },
    inputDate: {
      type: String,
      default: null,
    },
    inputDateType: {
      type: String,
      default: 'check-in',
    },
    title: {
      type: String,
    },
    singleDaySelection: {
      type: Boolean,
      default: false,
    },
    toggleDatepicker: {
      type: Function,
      required: true,
    },
    i18n: {
      type: Object,
      required: true,
    },
  },
  computed: {
    inputClass() {
      return {
        'vhd__datepicker__input--is-active':
          this.isOpen && this.inputDate == null,
        'vhd__datepicker__input--single-date': this.singleDaySelection,
      };
    },
    tabIndex() {
      return this.inputDateType === 'check-in' ? 0 : -1;
    },
  },
};
</script>
