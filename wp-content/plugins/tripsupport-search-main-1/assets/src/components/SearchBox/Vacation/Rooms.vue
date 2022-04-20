<style scoped lang="scss">
.get-error .ts-passenger-count {
  color: #ed1b2e;
}
.get-error .ts-icon-passenger svg {
  fill: #ed1b2e;
}
.ts-icon-passenger svg {
  fill: #66678f;
}
section {
  position: relative;
}
.ts-menu {
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
.svg-chevron {
  width: 20px;
  fill: var(--primary-base);
}
</style>

<template>
  <section :class="{ 'get-error': getError }">
    <div class="ts-passengers-activation" @click="roomsMenu = !roomsMenu">
      <div class="ts-passenger-count">
        {{ ` ${TsRoomsSelected} ${$t("VACATION.Rooms")}` }}
      </div>
      <svg
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
    <MenuDialog :showMenu="roomsMenu">
      <template #data>
        <div class="passenger-menu" v-click-outside="outSideRoomsMenu">
          <div class="passenger-menu-header">
            <h3>Rooms</h3>
            <p>Select the number of rooms</p>
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
          <div v-if="getError" class="ts-error">
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
              Sorry, the adult occupancy must be consistent for all rooms in an
              online booking.
            </p>
          </div>
          <div class="passenger-menu-content">
            <div class="passenger-menu-counter-wrapper">
              <div class="ts-label">
                <div class="ts-section-title">
                  <b>{{ $t("VACATION.Rooms") }}</b>
                </div>
                <div class="ts-section-subtitle">Maximum 6</div>
              </div>
              <div class="ts-counter-buttons-wrapper">
                <span
                  @click="minus"
                  class="ts-counter-buttons minus"
                  :disabled="TsRoomsSelected == 1"
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
                  <b>{{ TsRoomsSelected }}</b>
                </div>
                <span
                  @click="addPlus"
                  class="ts-counter-buttons plus"
                  :disabled="TsRoomsSelected >= 6"
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
import MenuDialog from "../Common/MenuDialog.vue";

export default {
  components: {
    MenuDialog,
  },
  props: {
    children: {
      defualt: 0,
    },
    error: {
      default: false,
    },
  },
  data() {
    return {
      TsRoomsSelected: 1,
      roomsMenu: false,
    };
  },
  computed: {
    getError() {
      if (this.children > 0 && this.TsRoomsSelected > 1) {
        return true;
      }
      if (this.error) {
        return true;
      }
    },
  },
  mounted() {
    let getLastVacationBooking = localStorage.getItem("vacations");
    if (!getLastVacationBooking) {
      return;
    }
    let parsedGetLastVacationBooking = JSON.parse(getLastVacationBooking);
    if (isNaN(parsedGetLastVacationBooking.NumberOfRooms)) {
      localStorage.clear();
    }
    this.TsRoomsSelected = parsedGetLastVacationBooking.NumberOfRooms;
    this.$emit("NumberOfRooms", this.TsRoomsSelected);
  },
  methods: {
    onClickOutside() {
      this.roomsMenu = false;
    },
    outSideRoomsMenu() {
      this.roomsMenu = false;
      this.$emit("NumberOfRooms", this.TsRoomsSelected);
    },
    addPlus() {
      this.TsRoomsSelected++;
      this.$emit("NumberOfRooms", this.TsRoomsSelected);
    },
    minus() {
      this.TsRoomsSelected--;
      this.$emit("NumberOfRooms", this.TsRoomsSelected);
    },
    done() {
      this.roomsMenu = false;
      this.$emit("NumberOfRooms", this.TsRoomsSelected);
    },
  },
};
</script>
