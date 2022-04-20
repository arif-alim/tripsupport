<style lang="scss" scoped>
.ts-checkbox {
  display: flex;
  align-items: center;
  cursor: pointer;
  &-icon {
    margin-right: 8px;
    display: flex;
    border: 2px solid transparent;
    padding: 2px;
    border-radius: 6px;
    svg {
      width: 18px;
      height: 18px;
      fill: #ccc;
    }
  }
  &.active {
    svg {
      fill: var(--primary-base);
    }
    &.is-focused {
      .ts-checkbox-icon {
        border-color: #1d4ed8;
        svg {
          fill: #1d4ed8;
        }
      }
    }
  }
  &-label {
    font-weight: 500;
    color: rgb(55, 65, 81);
    font-size: 0.845rem;
  }
}
</style>
<template>
  <div
    class="ts-checkbox"
    :class="{ active: model, 'is-focused': isFocused }"
    @click="toggle"
    v-click-outside="onClickOutside"
  >
    <!-- <v-checkbox :ripple="false" color="#00246b" :label="label" v-model="model"></v-checkbox> -->
    <div class="ts-checkbox-icon">
      <svg v-if="model" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path
          d="M19 0h-14c-2.762 0-5 2.239-5 5v14c0 2.761 2.238 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-8.959 17l-4.5-4.319 1.395-1.435 3.08 2.937 7.021-7.183 1.422 1.409-8.418 8.591z"
        />
      </svg>
      <svg v-else xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path
          d="M5 2c-1.654 0-3 1.346-3 3v14c0 1.654 1.346 3 3 3h14c1.654 0 3-1.346 3-3v-14c0-1.654-1.346-3-3-3h-14zm19 3v14c0 2.761-2.238 5-5 5h-14c-2.762 0-5-2.239-5-5v-14c0-2.761 2.238-5 5-5h14c2.762 0 5 2.239 5 5z"
        />
      </svg>
    </div>
    <div class="ts-checkbox-label">
      {{ label }}
    </div>
  </div>
</template>

<script>
export default {
  props: ["label", "value"],
  data() {
    return {
      isFocused: false,
    };
  },
  computed: {
    model: {
      get() {
        return this.value;
      },
      set(val) {
        this.$emit("input", val);
      },
    },
  },
  watch: {
    model: function () {
      this.$emit("input", this.model);
    },
  },
  methods: {
    toggle() {
      if (!this.model) {
        this.isFocused = true;
      }
      this.model = !this.model;
    },
    onClick() {
      // this.isFocused = true;
    },
    onClickOutside() {
      this.isFocused = false;
    },
  },
};
</script>