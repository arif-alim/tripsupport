<style scoped lang="scss">
::-webkit-scrollbar {
  width: 5px;
}
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px #cdcdda;
}
::-webkit-scrollbar-thumb {
  background: #8f90ad;
}
::-webkit-scrollbar-thumb:hover {
  background: #8f90ad;
}
section {
  position: relative;
}
.ts-menu {
  top: 24px;
  max-height: unset;
  // overflow: unset;
}
.ts-passengers-activation {
  display: flex;
  align-items: center;
  cursor: pointer;
}
.ts-passenger-count {
  font-size: 0.845rem;
  color: var(--primary-base);
}
.passenger-menu {
  width: 380px;
  max-width: 100%;
  padding: 0 24px;
  @media screen and (max-width: 600px) {
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
  }

  &-done {
    // display: none;
    margin-bottom: 18px;
    @media screen and (max-width: 600px) {
      display: block;
      margin-bottom: 80px;
    }
    .v-btn {
      background: var(--primary-base) !important;
      color: #fff;
    }
  }
  &-header {
    padding: 12px 0;
    border-bottom: 1px solid rgb(229, 231, 235);
    position: relative;
    h3 {
      margin: 0;
      font-weight: 500;
      font-size: 1.125rem;
    }
    p {
      font-weight: 300;
      font-size: 0.75rem;
      margin: 4px 0 0;
    }
    &-close {
      display: none;
      @media screen and (max-width: 600px) {
        display: inline-block;
        position: absolute;
        right: 0;
        top: 16px;
      }
      svg {
        width: 20px;
        fill: #000;
      }
    }
  }
  &-content-title {
    font-weight: 700;
    background: #f3f4f6;
    padding: 0 4px;
    border-radius: 4px;
  }
  &-counter-wrapper {
    display: flex;
    height: 50px;
    align-items: center;
    justify-content: space-between;
    margin: 12px 0;
    .ts-label {
      display: flex;
      flex-direction: column;
      .ts-section-title {
        font-weight: 500;
        font-size: 0.9125rem;
        color: rgb(17, 24, 39);
      }
      .ts-section-subtitle {
        font-weight: 400;
        font-size: 0.75rem;
        color: rgb(107, 114, 128);
      }
    }
    .ts-counter-buttons-wrapper {
      display: flex;
      .ts-counter,
      .ts-counter-buttons {
        width: 46px;
        height: 42px;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid rgb(209, 213, 219);
        border-radius: 0;
      }

      svg {
        width: 20px;
      }
      .minus {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        svg {
          fill: rgb(244, 63, 94);
        }
      }
      .plus {
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        svg {
          fill: rgb(16, 185, 129);
        }
      }
      .ts-counter-buttons {
        cursor: pointer;
        &[disabled="disabled"] {
          pointer-events: none;
          svg {
            fill: gray;
          }
        }
      }
      .ts-counter {
        width: 58px;
        border-left: none;
        border-right: none;
      }
    }
  }
}
.ts-select-wrapper {
  width: 150px;
  border-radius: 0.375rem;
  border: 1px solid rgb(209, 213, 219);
  height: 42px;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  cursor: pointer;
  input {
    width: 100%;
    text-align: center;
    cursor: pointer;
  }
  .ts-menu {
    height: 200px;
    width: 100%;
    top: calc(100% + 2px);
    overflow-y: auto;
  }
  .ts-select-wrapper {
    flex-direction: column;
    justify-content: flex-start;
  }
  .ts-select-item {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 30px;
    cursor: pointer;
    &.active,
    &:hover {
      background: rgb(243, 244, 246);
    }
  }
}
.svg-chevron {
  width: 20px;
  fill: var(--primary-base);
}
</style>

<template>
  <section>
    <div class="passenger-menu-counter-wrapper">
      <div class="ts-label">
        <div class="ts-section-title">
          <b>
            {{ $t("VACATION.adults") }}
          </b>
        </div>
        <div class="ts-section-subtitle">Maximum 10</div>
      </div>
      <div class="ts-counter-buttons-wrapper">
        <span
          @click="addultsMinus"
          class="ts-counter-buttons minus"
          :disabled="model.adults == 0"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
            fill="currentColor"
          >
            <path
              fill-rule="evenodd"
              d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </span>
        <div class="ts-counter">
          <b>{{ model.adults }}</b>
        </div>
        <span
          @click="addultsPLus"
          class="ts-counter-buttons plus"
          :disabled="model.adults >= 10"
        >
          <svg
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </span>
      </div>
    </div>
    <div class="passenger-menu-counter-wrapper">
      <div class="ts-label">
        <div class="ts-section-title">
          <b>
            {{ $t("VACATION.children") }}
          </b>
        </div>
        <div class="ts-section-subtitle">Maximum 4</div>
      </div>
      <div class="ts-counter-buttons-wrapper">
        <span
          @click="childrenMinus"
          class="ts-counter-buttons minus"
          :disabled="model.children == 0"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
            fill="currentColor"
          >
            <path
              fill-rule="evenodd"
              d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </span>
        <div class="ts-counter">
          <b>{{ model.children }}</b>
        </div>
        <span
          @click="childrenPLus"
          class="ts-counter-buttons plus"
          :disabled="model.children >= 4"
        >
          <svg
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </span>
      </div>
    </div>
    <div
      v-for="(item, index) in model.childrenAges"
      :key="index"
      class="ts-counter-child"
    >
      <div class="passenger-menu-counter-wrapper">
        <div class="ts-label">
          <div class="ts-section-title">
            <b>
              {{ $t("VACATION.Child_age") }}
            </b>
          </div>
          <div class="ts-section-subtitle">Maximum 17</div>
        </div>
        <div class="ts-select-wrapper">
          <input
            :value="item.displayChild"
            readonly
            class="ts-select"
            @click="openSelectModal(item)"
            v-click-outside="
              () => {
                item.openChildMenu = false;
              }
            "
          />
          <MenuDialog :showMenu="item.openChildMenu" :fullHeight="false">
            <template #data>
              <div
                class="ts-select-item"
                v-for="(childItem, ind) in selectItems"
                :key="ind"
                @click="getChildItem(childItem, item)"
                :class="{ active: item.displayChild == childItem }"
              >
                {{ childItem }}
              </div>
            </template>
          </MenuDialog>
        </div>
      </div>
      <div class="ts-children-age-error" v-if="item.age > 17">
        The maximum age must be 17 years old
      </div>
      <div class="ts-children-age-error" v-if="item.age < 1">
        Age should not be zero or empty
      </div>
    </div>
  </section>
</template>


<script>
import MenuDialog from "../Common/MenuDialog.vue";
export default {
  components: {
    MenuDialog,
  },
  props: ["rooms", "value"],
  data() {
    return {
      model: { adults: 0, children: 0, childrenAges: [] },
      travellersMenu: false,
      selectItems: [
        "<1",
        1,
        2,
        3,
        4,
        5,
        6,
        7,
        8,
        9,
        10,
        11,
        12,
        13,
        14,
        15,
        16,
        17,
      ],
    };
  },
  watch: {
    value: {
      handler: function () {
        if (this.value) {
          this.model = Object.assign(this.model, this.value);
        }
      },
      deep: true,
    },
  },
  computed: {
    getRoomsError() {
      return parseInt(this.children) > 0 && this.rooms > 1;
    },
    getChildAgeError() {
      let getError = false;
      this.childAge.forEach((element) => {
        if (element.age == 0 || element.age == null || element.age > 17) {
          getError = true;
        }
      });
      return getError;
    },
  },
  mounted() {
    // let getLastVacationBooking = localStorage.getItem("hotels");
    // if (!getLastVacationBooking) {
    //   return;
    // }
    // let parsedGetLastVacationBooking = JSON.parse(getLastVacationBooking);
    // this.adults = parsedGetLastVacationBooking.TravellersData.adults;
    // this.children = parsedGetLastVacationBooking.TravellersData.children;
    // this.childAge = parsedGetLastVacationBooking.TravellersData.childrenAges;
    // this.$emit(
    //   "NumberOfPassangers",
    //   this.NumberOfPassanger,
    //   this.childAge,
    //   this.children,
    //   this.adults
    // );
    if (this.value) {
      this.model = Object.assign(this.model, this.value);
    }
  },
  methods: {
    onClickOutside() {
      this.travellersMenu = false;
    },
    getChildItem(selected, items) {
      let selectedItem;
      if (selected == "<1") {
        selectedItem = 1;
      } else {
        selectedItem = selected;
      }
      items.age = selectedItem;
      items.displayChild = selected;
      this.triggerData();
    },
    openSelectModal(item) {
      item.openChildMenu = true;
    },
    outSideTravellersMenu() {
      this.travellersMenu = false;
      this.emit();
    },
    triggerData() {
      this.emit();
    },
    addultsPLus() {
      this.model.adults++;
      this.emit();
    },
    addultsMinus() {
      this.model.adults--;
      this.emit();
    },
    childrenPLus() {
      this.model.children++;
      this.model.childrenAges.push({
        age: 1,
        openChildMenu: false,
        displayChild: 1,
      });
      this.emit();
    },
    childrenMinus() {
      this.model.children--;
      this.model.childrenAges.pop();
      this.emit();
    },
    done() {
      this.travellersMenu = false;
      this.emit();
    },
    emit() {
      this.$emit("input", this.model);
    },
  },
};
</script>
