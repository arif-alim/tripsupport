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
  overflow: unset;
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
  &-counter-wrapper {
    display: flex;
    height: 50px;
    align-items: center;
    justify-content: space-between;
    margin: 24px 0;
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
    <div class="ts-passengers-activation">
      <!-- <div class="ts-icon-passenger">
        <svg
          width="20"
          height="18"
          viewBox="0 0 20 18"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M16.6109 12.9433C18.1982 13.5218 20 14.1828 20 16.8408V17.5715C20 17.6851 19.9561 17.7941 19.878 17.8745C19.7999 17.9548 19.6939 18 19.5834 18H16.4485C16.4188 18.0001 16.3894 17.9937 16.3623 17.9811C16.3352 17.9686 16.311 17.9503 16.2914 17.9273C16.2718 17.9044 16.2571 17.8774 16.2485 17.8482C16.2398 17.819 16.2374 17.7882 16.2412 17.7579C16.2495 17.6968 16.2537 17.6336 16.2537 17.5715V16.2859C16.2537 12.3412 13.6156 11.0631 11.5878 10.2917C11.5617 10.2817 11.5379 10.2664 11.5176 10.2467C11.4974 10.227 11.4813 10.2033 11.4701 10.1771C11.3826 9.9724 11.3105 9.76109 11.2545 9.54503C11.2464 9.51315 11.2454 9.47979 11.2517 9.44749C11.2581 9.41518 11.2715 9.38478 11.2909 9.35862C12.24 8.03266 12.7352 6.42056 12.6991 4.77439C12.7001 4.73409 12.7122 4.69491 12.734 4.66137C12.7557 4.62783 12.7862 4.60127 12.822 4.58476C13.2452 4.3894 13.7037 4.28792 14.1676 4.28693C14.598 4.27404 15.0262 4.35502 15.424 4.52455C15.8217 4.69407 16.1801 4.9483 16.4756 5.27051C16.771 5.59273 16.9968 5.97562 17.1381 6.39402C17.2793 6.81242 17.3329 7.25684 17.2952 7.69805C17.3539 8.36765 17.2756 9.04247 17.0654 9.67906C16.8552 10.3156 16.5176 10.8999 16.0746 11.3942C15.9658 11.7551 15.9493 12.1389 16.0267 12.5083C16.0391 12.6058 16.0789 12.6974 16.1412 12.7719L16.6099 12.9433H16.6109ZM15.0008 16.2859V17.5715C15.0008 17.628 14.9899 17.684 14.9688 17.7362C14.9476 17.7884 14.9167 17.8358 14.8777 17.8756C14.8386 17.9155 14.7923 17.9469 14.7414 17.9683C14.6905 17.9896 14.636 18.0004 14.5811 18H0.416602C0.306112 18 0.200148 17.9548 0.12202 17.8745C0.043892 17.7941 0 17.6851 0 17.5715V16.2901C0 12.8962 2.30277 12.0584 4.33266 11.3192C4.54512 11.242 4.75759 11.1638 4.96797 11.0835C5.02317 11.0599 5.10545 10.9603 5.16898 10.7406C5.30927 10.1872 5.28497 9.60312 5.0992 9.064C4.31287 8.1748 3.54007 7.06811 3.54007 4.3255C3.49239 3.76646 3.56025 3.20338 3.73917 2.67324C3.9181 2.14309 4.20405 1.6579 4.57824 1.24952C4.95243 0.841139 5.40638 0.518822 5.91028 0.303745C6.41418 0.0886674 6.95662 -0.0143036 7.50195 0.00159726C8.0471 -0.0142715 8.58934 0.0886478 9.09309 0.303598C9.59683 0.518548 10.0507 0.840667 10.4248 1.24881C10.799 1.65695 11.085 2.14188 11.264 2.67176C11.4431 3.20164 11.5112 3.76449 11.4638 4.32335C11.4638 7.06811 10.691 8.17158 9.90158 9.06722C9.71828 9.60502 9.69436 10.1867 9.83284 10.7385C9.89637 10.9603 9.97865 11.0599 10.0349 11.0813L10.6504 11.3095C12.6907 12.0562 15.0008 12.9026 15.0008 16.2859Z"
            fill="#66678F"
          />
        </svg>
      </div> -->
      <div class="ts-passenger-count" @click="travellersMenu = !travellersMenu">
        {{ `${NumberOfPassanger} ${$t("VACATION.Travellers")}` }}
      </div>

      <svg
        @click="travellersMenu = !travellersMenu"
        class="svg-chevron"
        viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          fill-rule="evenodd"
          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
          clip-rule="evenodd"
        ></path>
      </svg>
    </div>
    <MenuDialog :showMenu="travellersMenu">
      <template #data>
        <div class="passenger-menu" v-click-outside="outSideTravellersMenu">
          <div class="passenger-menu-header">
            <h3>Travellers</h3>
            <p>Please choose the number of travellers</p>
            <div @click="onClickOutside" class="passenger-menu-header-close">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path
                  fillrule="evenodd"
                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                  cliprule="evenodd"
                ></path>
              </svg>
            </div>
          </div>
          <div class="ts-error" v-if="getRoomsError">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              aria-hidden="true"
            >
              <path
                fill-rule="evenodd"
                d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                clip-rule="evenodd"
              ></path>
            </svg>
            <p>Sorry, You cannot book children with multiple rooms</p>
          </div>
          <div class="ts-error" v-if="getErrorPassengers">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              aria-hidden="true"
            >
              <path
                fill-rule="evenodd"
                d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                clip-rule="evenodd"
              ></path>
            </svg>
            <p>
              Sorry, you can only book a maximum of 6 passengers in an online
              booking.
            </p>
          </div>
          <div class="passenger-menu-content">
            <div class="passenger-menu-counter-wrapper">
              <div class="ts-label">
                <div class="ts-section-title">
                  <b>
                    {{ $t("VACATION.adults") }}
                  </b>
                </div>
                <div class="ts-section-subtitle">Maximum 6</div>
              </div>
              <div class="ts-counter-buttons-wrapper">
                <span
                  @click="addultsMinus"
                  class="ts-counter-buttons minus"
                  :disabled="Adults == 0"
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
                  <b>{{ Adults }}</b>
                </div>
                <span
                  @click="addultsPLus"
                  class="ts-counter-buttons plus"
                  :disabled="Adults >= 6 || getErrorPassengers"
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
                  :disabled="Children == 0"
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
                  <b>{{ Children }}</b>
                </div>
                <span
                  @click="childrenPLus"
                  class="ts-counter-buttons plus"
                  :disabled="Children >= 4 || getErrorPassengers"
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
              v-for="(item, index) in childAge"
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
                        <!-- <span class="ts-svg">
                          <svg
                            fill="none"
                            height="18"
                            viewBox="0 0 20 18"
                            width="20"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M16.6109 12.9433C18.1982 13.5218 20 14.1828 20 16.8408V17.5715C20 17.6851 19.9561 17.7941 19.878 17.8745C19.7999 17.9548 19.6939 18 19.5834 18H16.4485C16.4188 18.0001 16.3894 17.9937 16.3623 17.9811C16.3352 17.9686 16.311 17.9503 16.2914 17.9273C16.2718 17.9044 16.2571 17.8774 16.2485 17.8482C16.2398 17.819 16.2374 17.7882 16.2412 17.7579C16.2495 17.6968 16.2537 17.6336 16.2537 17.5715V16.2859C16.2537 12.3412 13.6156 11.0631 11.5878 10.2917C11.5617 10.2817 11.5379 10.2664 11.5176 10.2467C11.4974 10.227 11.4813 10.2033 11.4701 10.1771C11.3826 9.9724 11.3105 9.76109 11.2545 9.54503C11.2464 9.51315 11.2454 9.47979 11.2517 9.44749C11.2581 9.41518 11.2715 9.38478 11.2909 9.35862C12.24 8.03266 12.7352 6.42056 12.6991 4.77439C12.7001 4.73409 12.7122 4.69491 12.734 4.66137C12.7557 4.62783 12.7862 4.60127 12.822 4.58476C13.2452 4.3894 13.7037 4.28792 14.1676 4.28693C14.598 4.27404 15.0262 4.35502 15.424 4.52455C15.8217 4.69407 16.1801 4.9483 16.4756 5.27051C16.771 5.59273 16.9968 5.97562 17.1381 6.39402C17.2793 6.81242 17.3329 7.25684 17.2952 7.69805C17.3539 8.36765 17.2756 9.04247 17.0654 9.67906C16.8552 10.3156 16.5176 10.8999 16.0746 11.3942C15.9658 11.7551 15.9493 12.1389 16.0267 12.5083C16.0391 12.6058 16.0789 12.6974 16.1412 12.7719L16.6099 12.9433H16.6109ZM15.0008 16.2859V17.5715C15.0008 17.628 14.9899 17.684 14.9688 17.7362C14.9476 17.7884 14.9167 17.8358 14.8777 17.8756C14.8386 17.9155 14.7923 17.9469 14.7414 17.9683C14.6905 17.9896 14.636 18.0004 14.5811 18H0.416602C0.306112 18 0.200148 17.9548 0.12202 17.8745C0.043892 17.7941 0 17.6851 0 17.5715V16.2901C0 12.8962 2.30277 12.0584 4.33266 11.3192C4.54512 11.242 4.75759 11.1638 4.96797 11.0835C5.02317 11.0599 5.10545 10.9603 5.16898 10.7406C5.30927 10.1872 5.28497 9.60312 5.0992 9.064C4.31287 8.1748 3.54007 7.06811 3.54007 4.3255C3.49239 3.76646 3.56025 3.20338 3.73917 2.67324C3.9181 2.14309 4.20405 1.6579 4.57824 1.24952C4.95243 0.841139 5.40638 0.518822 5.91028 0.303745C6.41418 0.0886674 6.95662 -0.0143036 7.50195 0.00159726C8.0471 -0.0142715 8.58934 0.0886478 9.09309 0.303598C9.59683 0.518548 10.0507 0.840667 10.4248 1.24881C10.799 1.65695 11.085 2.14188 11.264 2.67176C11.4431 3.20164 11.5112 3.76449 11.4638 4.32335C11.4638 7.06811 10.691 8.17158 9.90158 9.06722C9.71828 9.60502 9.69436 10.1867 9.83284 10.7385C9.89637 10.9603 9.97865 11.0599 10.0349 11.0813L10.6504 11.3095C12.6907 12.0562 15.0008 12.9026 15.0008 16.2859Z"
                            ></path>
                          </svg>
                        </span> -->
                        {{ childItem }}
                      </div>
                    </template>
                  </MenuDialog>
                </div>
              </div>
              <div class="ts-children-age-error" v-if="item.child > 17">
                The maximum age must be 17 years old
              </div>
              <div class="ts-children-age-error" v-if="item.child < 1">
                Age should not be zero or empty
              </div>
            </div>
          </div>
          <v-spacer></v-spacer>
          <div class="passenger-menu-done">
            <v-btn @click="onClickOutside" block rounded>Done</v-btn>
          </div>
        </div>
      </template>
    </MenuDialog>
  </section>
</template>

<script>
import MenuDialog from "../Common/MenuDialog.vue";
export default {
  components: {
    MenuDialog,
  },
  props: ["rooms"],
  data() {
    return {
      Adults: 2,
      Children: 0,
      travellersMenu: false,
      childAge: [],
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
  computed: {
    NumberOfPassanger() {
      return parseInt(this.Adults) + parseInt(this.Children);
    },
    getErrorPassengers() {
      return this.NumberOfPassanger > 6;
    },
    getRoomsError() {
      return parseInt(this.Children) > 0 && this.rooms > 1;
    },
    getChildAgeError() {
      let getError = false;
      this.childAge.forEach((element) => {
        if (element.child == 0 || element.child == null || element.child > 17) {
          getError = true;
        }
      });
      return getError;
    },
  },
  mounted() {
    // let getLastVacationBooking = localStorage.getItem("vacations");
    // if (!getLastVacationBooking) {
    //   return;
    // }
    // let parsedGetLastVacationBooking = JSON.parse(getLastVacationBooking);
    // this.Adults = parsedGetLastVacationBooking.NumberOfAdults;
    // this.Children = parsedGetLastVacationBooking.NumberOfChildren;
    // this.childAge = JSON.parse(parsedGetLastVacationBooking.ChildrenAges);
    // this.$emit(
    //   "NumberOfPassangers",
    //   this.NumberOfPassanger,
    //   this.childAge,
    //   this.Children,
    //   this.Adults
    // );
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
      items.child = selectedItem;
      items.displayChild = selected;
      this.triggerData();
    },
    openSelectModal(item) {
      item.openChildMenu = true;
    },
    outSideTravellersMenu() {
      this.travellersMenu = false;
      this.$emit(
        "NumberOfPassangers",
        this.NumberOfPassanger,
        this.childAge,
        this.Children,
        this.Adults
      );
    },
    triggerData() {
      this.$emit(
        "NumberOfPassangers",
        this.NumberOfPassanger,
        this.childAge,
        this.Children,
        this.Adults
      );
    },
    addultsPLus() {
      this.Adults++;
      this.$emit(
        "NumberOfPassangers",
        this.NumberOfPassanger,
        this.childAge,
        this.Children,
        this.Adults
      );
    },
    addultsMinus() {
      this.Adults--;
      this.$emit(
        "NumberOfPassangers",
        this.NumberOfPassanger,
        this.childAge,
        this.Children,
        this.Adults
      );
    },
    childrenPLus() {
      this.Children++;
      this.childAge.push({ child: 1, openChildMenu: false, displayChild: 1 });
      this.$emit(
        "NumberOfPassangers",
        this.NumberOfPassanger,
        this.childAge,
        this.Children,
        this.Adults
      );
    },
    childrenMinus() {
      this.Children--;
      this.childAge.pop();
      this.$emit(
        "NumberOfPassangers",
        this.NumberOfPassanger,
        this.childAge,
        this.Children,
        this.Adults
      );
    },
    done() {
      this.travellersMenu = false;
      this.$emit(
        "NumberOfPassangers",
        this.NumberOfPassanger,
        this.childAge,
        this.Children,
        this.Adults
      );
    },
  },
};
</script>
