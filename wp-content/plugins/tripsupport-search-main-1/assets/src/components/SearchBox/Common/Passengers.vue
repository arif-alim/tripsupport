<style scoped lang="scss">
.ts-passengers {
  position: relative;
  height: 40px;
  display: flex;
}

.ts-menu {
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

.svg-chevron {
  width: 20px;
  fill: var(--primary-base);
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
</style>

<template>
  <section class="ts-passengers">
    <div class="ts-passengers-activation">
      <div class="ts-icon-passenger"></div>
      <div class="ts-passenger-count" @click="travellerMenu = !travellerMenu">
        {{ `${getPassenger} ${$t("Travellers")}` }}
      </div>
      <svg
        @click="travellerMenu = !travellerMenu"
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
    <MenuDialog :showMenu="travellerMenu">
      <template #data>
        <div class="passenger-menu" v-click-outside="onClickOutside">
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
          <div class="passenger-menu-content">
            <div class="passenger-menu-counter-wrapper">
              <div class="ts-label">
                <span class="ts-section-title">
                  {{ $t("Adults") }}
                </span>
                <span class="ts-section-subtitle">Age +12</span>
              </div>
              <div class="ts-counter-buttons-wrapper">
                <span
                  @click="adultMinus"
                  class="ts-counter-buttons minus"
                  :disabled="adult == 0"
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
                  <b>{{ adult }}</b>
                </div>
                <span
                  @click="adultPlus"
                  class="ts-counter-buttons plus"
                  :disabled="adult == 9 || adult + child == 9"
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
                <span class="ts-section-title">
                  {{ $t("Child") }}
                </span>
                <span class="ts-section-subtitle">Age 2-11</span>
              </div>
              <div class="ts-counter-buttons-wrapper">
                <span
                  @click="childrenMinus"
                  class="ts-counter-buttons minus"
                  :disabled="child <= 0"
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
                  <b>{{ child }}</b>
                </div>
                <span
                  @click="childrenPlus"
                  class="ts-counter-buttons plus"
                  :disabled="child == 9 || adult + child == 9"
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
                <span class="ts-section-title">
                  {{ $t("Infant") }}
                </span>
                <span class="ts-section-subtitle">Age under 2</span>
              </div>
              <div class="ts-counter-buttons-wrapper">
                <span
                  @click="infantMinus"
                  class="ts-counter-buttons minus"
                  :disabled="infant == 0"
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
                  <b>{{ infant }}</b>
                </div>

                <span
                  @click="infantPlus"
                  class="ts-counter-buttons plus"
                  :disabled="infant == 8 || adult <= infant"
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
import MenuDialog from "./MenuDialog.vue";
export default {
  components: {
    MenuDialog,
  },
  props: ["activePassengers"],
  data() {
    return {
      travellerMenu: false,
      adult: 1,
      infant: 0,
      child: 0,
      passenger: null,
      disabled: false,
    };
  },
  computed: {
    getPassenger() {
      return this.child + this.adult + this.infant;
    },
  },
  mounted() {
    if (isNaN(this.getPassenger)) {
      localStorage.clear();
    }
    let getFlightLastSearch = localStorage.getItem("flights.roundTrip");
    if (!getFlightLastSearch) {
      return;
    }
    let parsedGetFlightLastSearch = JSON.parse(getFlightLastSearch);
    if (
      isNaN(parsedGetFlightLastSearch.adult) ||
      isNaN(parsedGetFlightLastSearch.infant) ||
      isNaN(parsedGetFlightLastSearch.child)
    ) {
      localStorage.clear();
    }
    this.adult = parsedGetFlightLastSearch.adult;
    this.infant = parsedGetFlightLastSearch.infant;
    this.child = parsedGetFlightLastSearch.child;

    this.$store.commit("getPassengers", {
      adult: this.adult,
      infant: this.infant,
      child: this.child,
    });
  },
  methods: {
    onClickOutside() {
      this.travellerMenu = false;
    },
    adultPlus() {
      if (this.adult >= 0 && this.adult + this.child < 8) {
        this.adult = this.adult + 1;
        this.passenger = this.adult + this.child + this.infant;
      }
      this.$store.commit("getPassengers", {
        adult: this.adult,
        infant: this.infant,
        child: this.child,
      });
    },
    adultMinus() {
      if (this.adult > 0) {
        this.adult = this.adult - 1;
        if (this.adult < this.infant) {
          this.infant = this.adult;
          this.passenger = this.adult + this.child + this.infant;
        }
      }
      this.$store.commit("getPassengers", {
        adult: this.adult,
        infant: this.infant,
        child: this.child,
      });
    },
    childrenMinus() {
      if (this.child > 0) {
        this.child = this.child - 1;
        this.passenger = this.adult + this.child + this.infant;
        this.$store.commit("getPassengers", {
          adult: this.adult,
          infant: this.infant,
          child: this.child,
        });
      }
    },
    childrenPlus() {
      if (this.child >= 0 && this.adult + this.child < 8) {
        this.child = this.child + 1;
        this.passenger = this.adult + this.child + this.infant;
      }
      this.$store.commit("getPassengers", {
        adult: this.adult,
        infant: this.infant,
        child: this.child,
      });
    },
    infantMinus() {
      if (this.infant > 0) {
        this.infant = this.infant - 1;
        this.passenger = this.adult + this.child + this.infant;
      }
      this.$store.commit("getPassengers", {
        adult: this.adult,
        infant: this.infant,
        child: this.child,
      });
    },
    infantPlus() {
      if (this.infant >= 0) {
        if (this.adult > this.infant) {
          this.infant = this.infant + 1;
          this.passenger = this.adult + this.child + this.infant;
        }
      }
      this.$store.commit("getPassengers", {
        adult: this.adult,
        infant: this.infant,
        child: this.child,
      });
    },
    done() {
      this.travellerMenu = false;
      this.$store.commit("getPassengers", {
        adult: this.adult,
        infant: this.infant,
        child: this.child,
      });
    },
  },
};
</script>
