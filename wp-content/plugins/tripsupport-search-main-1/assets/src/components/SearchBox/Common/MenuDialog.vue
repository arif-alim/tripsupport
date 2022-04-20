<style scoped lang="scss">
.ts-menu {
  box-shadow: rgb(0 0 0 / 0%) 0px 0px 0px 0px, rgb(0 0 0 / 0%) 0px 0px 0px 0px,
    rgb(0 0 0 / 10%) 0px 10px 15px -3px, rgb(0 0 0 / 10%) 0px 4px 6px -4px;
  border-radius: 0.25rem;
  padding: 8px 0;
  position: absolute;
  top: 100%;
  z-index: 9999;
  max-height: 360px;
  overflow: auto;
  &.right-align {
    right: 0;
  }
  &.full-height {
    @media only screen and (max-width: 600px) {
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      max-height: initial;
      overflow: auto;
    }
  }
}
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.2s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>

<template>
  <Transition name="fade">
    <section
      v-if="showMenu"
      class="ts-menu"
      :class="{ 'full-height': fullHeight, 'right-align': right }"
      :style="{ backgroundColor: backgroundColor }"
    >
      <slot name="data"></slot>
    </section>
  </Transition>
</template>

<script>
export default {
  props: {
    showMenu: {
      default: false,
    },
    backgroundColor: {
      default: "#fff",
    },
    fullHeight: {
      default: true,
    },
  },
  data() {
    return {
      right: false,
    };
  },
  watch: {
    showMenu: () => {},
  },
  mounted() {
    if (window.innerWidth - this.$parent.$el.offsetLeft < 400) {
      this.right = true;
    }
  },
};
</script>
