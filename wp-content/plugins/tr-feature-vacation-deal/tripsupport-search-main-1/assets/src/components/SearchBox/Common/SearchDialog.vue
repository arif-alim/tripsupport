<style scoped>
.ts-dialog-search-wrappper {
  background: #fff;
  padding: 40px 20px;
  width: 100%;
}
.ts-dialog-title-wrapper {
  display: flex;
  justify-content: flex-start;
  align-items: center;
}
.ts-dialog-close {
  margin-right: 5px;
}
.ts-dialog-title {
  font-size: 20px;
}
.ts-origin {
  width: 100vw;
}
.ts-input-wrapper {
  position: relative;
}
.ts-input {
  height: 48px;
  border: 1px solid rgba(171, 171, 196, 0.6);
  padding: 0 10px;
  border-radius: 6px;
  background: #ffffff;
  outline: none;
  margin-right: 16px;
  margin-top: 12px;
  padding-left: 32px;
  color: #66678f;
  font-size: 14px;
  font-weight: 500;
  width: 90vw;
}
.ts-input::placeholder {
  color: #66678f;
  font-size: 14px;
  font-weight: 500;
}
.ts-svg {
  margin-right: 16px;
  margin-top: 45px;
  cursor: pointer;
}
.ts-airplane-icon {
  position: absolute;
  left: 9px;
  bottom: 13px;
}
.ts-dropdown-wrapper {
  padding: 10px 0;
  width: 90vw;
  max-height: 400px;
  overflow: auto;
}
.ts-dropdown-item {
  display: flex;
  justify-content: space-between;
  align-items: center;
  cursor: pointer;
  padding: 0 8px;
}
.ts-dropdown-item:not(:last-child) {
  margin-bottom: 10px;
}
.ts-dropdown-item:hover {
  background: rgba(0, 122, 255, 0.02);
}
.ts-dropdown-item:hover .ts-dropdown-city-name {
  color: #0c0d25;
}
.ts-dropdown-item:hover .ts-dropdown-city-name span svg {
  fill: #007aff;
}

.ts-dropdown-city-name {
  font-size: 16px;
  font-weight: 500;
  color: #ababc4;
  display: flex;
  align-items: center;
}
.ts-dropdown-city-name span svg {
  fill: #ababc4;
  margin-right: 5px;
  margin-bottom: -5px;
}
.ts-dropdown-ariport-name {
  font-size: 12px;
  color: #ababc4;
  margin-left: 30px;
  margin-top: 5px;
}
.ts-dropdown-airport {
  font-size: 12px;
  color: #666;
}
.active {
  background: rgba(0, 122, 255, 0.02);
}
.active .ts-dropdown-city-name {
  color: #0c0d25;
}
.active .ts-dropdown-city-name span svg {
  fill: #007aff;
}

.ts-svg svg {
  fill: #ababc4;
}
.ts-menu {
  top: 70px;
}
.indent-1 {
  padding-left: 24px;
}
.is-city .ts-dropdown-city-name {
  font-weight: 300;
}
</style>

<template>
  <section>
    <v-dialog
      v-model="dialog"
      fullscreen
      hide-overlay
      transition="dialog-bottom-transition"
      scrollable
      ref="dialog"
      attach
    >
      <div class="ts-dialog-search-wrappper">
        <div class="ts-dialog-title-wrapper">
          <div class="ts-dialog-close">
            <v-icon @click="close">mdi-close</v-icon>
          </div>
          <div class="ts-dialog-title">
            {{ title }}
          </div>
        </div>
        <slot>
          <div class="ts-origin">
            <div class="ts-input-wrapper">
              <input
                @keyup="search"
                v-bind:value="display"
                v-on:input="
                  (display = $event.target.value),
                    (itemSearch = $event.target.value)
                "
                autofocus="true"
                type="text"
                class="ts-input modal-input"
                :placeholder="`${title}`"
                @focus="$event.target.select()"
                v-click-outside="onClickOutside"
                ref="input"
              />
              <div class="ts-airplane-icon">
                <svg
                  width="18"
                  height="18"
                  viewBox="0 0 18 18"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  v-if="mode == 'hotel'"
                >
                  <path
                    d="M2.4735 5.04564C2.4735 4.71369 2.75618 4.31535 3.10954 4.31535C3.4629 4.31535 4.947 5.04564 5.58304 5.04564H6.21908C6.85512 5.04564 8.40989 4.31535 8.69258 4.31535C8.97527 4.31535 9.32862 4.6473 9.32862 5.04564C9.32862 5.44398 8.69258 6.50622 8.69258 7.23651H11.1661C11.1661 6.50622 10.53 5.44398 10.53 5.04564C10.53 4.6473 10.8127 4.31535 11.1661 4.31535C11.5194 4.31535 13.0035 5.04564 13.6396 5.04564H14.2756C14.9117 5.04564 16.4664 4.31535 16.7491 4.31535C17.0318 4.31535 17.3852 4.6473 17.3852 5.04564C17.3852 5.44398 16.7491 6.50622 16.7491 7.23651H18.5866V0.73029C18.5866 0.33195 18.3039 0 17.9505 0H1.83746C1.4841 0 1.27208 0.33195 1.27208 0.73029V7.23651H3.10954C3.10954 6.50622 2.4735 5.44398 2.4735 5.04564Z"
                    fill="#66678F"
                  />
                  <path
                    d="M19.1519 10.1577H0.636042C0.282686 10.1577 0 10.4896 0 10.888V12.3485C0 12.7469 0.282686 13.0788 0.636042 13.0788V15.2697C0.636042 15.668 0.918728 16 1.27208 16H2.54417C2.89753 16 3.18021 15.668 3.18021 15.2697V14.5394H16.8198V15.2697C16.8198 15.668 17.1025 16 17.4558 16H18.7279C19.0813 16 19.364 15.668 19.364 15.2697V13.0788C19.7173 13.0788 20 12.7469 20 12.3485V10.888C20 10.2905 19.5053 10.1577 19.1519 10.1577Z"
                    fill="#66678F"
                  />
                </svg>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="18"
                  height="18"
                  viewBox="0 0 18 18"
                  fill="none"
                  v-else-if="mode == 'thingsToDo'"
                >
                  <path
                    fill="#66678F"
                    d="M16 18H0L1.17073 15.5918H7.80488L12.4878 12.7196L15.6098 14.3609L16 18Z"
                  ></path>
                  <path
                    fill="#66678F"
                    d="M4.00229 2.83424L2.24136 8.39775L3.90244 11.0784L2.73171 14.7712H5.60417L4.53023 13.9042L6.47129 11.39L5.91184 9.31134L7.57851 10.3393L8.05793 14.2074L10.4217 13.0272L9.58714 12.3803L9.51423 9.65607L6.7279 6.60424L7.12576 5.70575L9.05691 7.0199L12.4878 6.15466L12.0976 5.33404L9.38669 4.79618L6.45351 2.46948L6.59705 1.84693L7.22942 1.98691C7.22942 1.98691 7.6565 0.266458 6.29929 0.0414007C6.29929 0.0414007 4.82368 -0.561511 4.00229 2.83424Z"
                  ></path>
                  <path
                    fill="#66678F"
                    d="M12.0976 6.97529L10.5366 7.3856L10.9268 11.899H11.7073L12.0976 6.97529Z"
                  ></path>
                  <path
                    fill="#66678F"
                    d="M3.17505 2.48671C3.17505 2.48671 1.52947 2.01402 1.06631 3.29945C0.60315 4.58514 0.0873984 5.82703 0.0873984 5.82703L1.76575 6.82837L3.17505 2.48671Z"
                  ></path>
                </svg>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="18"
                  height="18"
                  viewBox="0 0 18 18"
                  fill="none"
                  v-else
                >
                  <path
                    d="M16.808 3.19729C16.5399 3.46359 15.2015 4.93888 13.9124 6.21937C13.9124 17.0109 14.2682 16.2008 12.4569 18L11.0211 11.9598L9.55414 10.5026C5.66686 14.3632 6.25266 11.3737 6.25266 15.0695C6.25636 15.8766 5.91536 16.4075 5.42637 16.8932L4.06597 13.8389L0.990894 12.4876C2.00029 11.4859 2.55178 11.6669 4.93967 11.6669C5.75236 10.0003 6.75696 9.28595 7.54295 8.50496L6.07896 7.05087L0 5.62688C1.71529 3.92299 0.663795 4.23739 11.8395 4.23739C13.1355 2.95009 14.5277 1.4671 14.7969 1.1997C15.5714 0.430509 17.5986 -0.235987 17.9174 0.0806108C18.2361 0.397209 17.5825 2.428 16.808 3.19729ZM15.4406 7.44417L14.6307 8.24686V10.6048C16.3815 8.84986 16.827 8.82816 15.4406 7.44417ZM10.6281 2.6519C9.26034 1.2867 9.36394 1.5691 7.41295 3.50889H9.77544L10.6281 2.6519Z"
                    fill="#66678F"
                  />
                </svg>
              </div>
            </div>
            <div class="ts-dropdown-wrapper" v-if="items.length">
              <div
                class="ts-dropdown-item"
                v-for="(item, index) in items"
                :key="index"
                @click="selectItem(item, index)"
                :class="{
                  active: itemSearch == item || index == activeItem,
                  'indent-1 is-city': item.type == 'City',
                }"
              >
                <slot
                  name="item"
                  :item="item"
                  :active="itemSearch == item || index == activeItem"
                >
                  <div>
                    <div class="ts-dropdown-city-name">
                      <span>
                        <svg
                          width="20"
                          height="16"
                          viewBox="0 0 20 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                          v-if="mode == 'hotel'"
                        >
                          <path
                            d="M2.4735 5.04564C2.4735 4.71369 2.75618 4.31535 3.10954 4.31535C3.4629 4.31535 4.947 5.04564 5.58304 5.04564H6.21908C6.85512 5.04564 8.40989 4.31535 8.69258 4.31535C8.97527 4.31535 9.32862 4.6473 9.32862 5.04564C9.32862 5.44398 8.69258 6.50622 8.69258 7.23651H11.1661C11.1661 6.50622 10.53 5.44398 10.53 5.04564C10.53 4.6473 10.8127 4.31535 11.1661 4.31535C11.5194 4.31535 13.0035 5.04564 13.6396 5.04564H14.2756C14.9117 5.04564 16.4664 4.31535 16.7491 4.31535C17.0318 4.31535 17.3852 4.6473 17.3852 5.04564C17.3852 5.44398 16.7491 6.50622 16.7491 7.23651H18.5866V0.73029C18.5866 0.33195 18.3039 0 17.9505 0H1.83746C1.4841 0 1.27208 0.33195 1.27208 0.73029V7.23651H3.10954C3.10954 6.50622 2.4735 5.44398 2.4735 5.04564Z"
                          />
                          <path
                            d="M19.1519 10.1577H0.636042C0.282686 10.1577 0 10.4896 0 10.888V12.3485C0 12.7469 0.282686 13.0788 0.636042 13.0788V15.2697C0.636042 15.668 0.918728 16 1.27208 16H2.54417C2.89753 16 3.18021 15.668 3.18021 15.2697V14.5394H16.8198V15.2697C16.8198 15.668 17.1025 16 17.4558 16H18.7279C19.0813 16 19.364 15.668 19.364 15.2697V13.0788C19.7173 13.0788 20 12.7469 20 12.3485V10.888C20 10.2905 19.5053 10.1577 19.1519 10.1577Z"
                          />
                        </svg>
                        <svg
                          fill="none"
                          height="18"
                          viewBox="0 0 16 18"
                          width="16"
                          xmlns="http://www.w3.org/2000/svg"
                          v-else-if="mode == 'thingsToDo'"
                        >
                          <path
                            d="M16 18H0L1.17073 15.5918H7.80488L12.4878 12.7196L15.6098 14.3609L16 18Z"
                          ></path>
                          <path
                            d="M4.00229 2.83424L2.24136 8.39775L3.90244 11.0784L2.73171 14.7712H5.60417L4.53023 13.9042L6.47129 11.39L5.91184 9.31134L7.57851 10.3393L8.05793 14.2074L10.4217 13.0272L9.58714 12.3803L9.51423 9.65607L6.7279 6.60424L7.12576 5.70575L9.05691 7.0199L12.4878 6.15466L12.0976 5.33404L9.38669 4.79618L6.45351 2.46948L6.59705 1.84693L7.22942 1.98691C7.22942 1.98691 7.6565 0.266458 6.29929 0.0414007C6.29929 0.0414007 4.82368 -0.561511 4.00229 2.83424Z"
                          ></path>
                          <path
                            d="M12.0976 6.97529L10.5366 7.3856L10.9268 11.899H11.7073L12.0976 6.97529Z"
                          ></path>
                          <path
                            d="M3.17505 2.48671C3.17505 2.48671 1.52947 2.01402 1.06631 3.29945C0.60315 4.58514 0.0873984 5.82703 0.0873984 5.82703L1.76575 6.82837L3.17505 2.48671Z"
                          ></path>
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="18"
                          height="18"
                          viewBox="0 0 12 10"
                          fill="none"
                          v-else-if="item.type == 'City'"
                        >
                          <path
                            d="M10.293 5.005L7.61099 2.323C7.52241 2.23482 7.47007 2.11665 7.46429 1.99178C7.45851 1.86692 7.49971 1.74442 7.57977 1.64842C7.65983 1.55243 7.77294 1.4899 7.89681 1.47316C8.02068 1.45643 8.14633 1.4867 8.24899 1.558L8.31799 1.615L11.884 5.18501L11.934 5.255L11.961 5.311L11.984 5.379L11.989 5.399C11.9965 5.43417 12.0002 5.47005 12 5.506L11.995 5.432L11.998 5.46301V5.54801L11.983 5.634L11.963 5.697L11.923 5.773L11.868 5.84301L8.31799 9.39501C8.2298 9.48359 8.11163 9.53593 7.98677 9.54171C7.8619 9.54749 7.7394 9.50629 7.64341 9.42623C7.54741 9.34617 7.48489 9.23306 7.46815 9.10919C7.45142 8.98532 7.48168 8.85967 7.55299 8.757L7.61099 8.68701L10.293 6.006H5.99999C2.47799 6.006 0.114991 4.03 0.00399113 1.213L-8.58307e-06 1.005C-8.58307e-06 0.872397 0.0526695 0.74522 0.146438 0.651451C0.240206 0.557683 0.367383 0.505005 0.499991 0.505005C0.6326 0.505005 0.759777 0.557683 0.853545 0.651451C0.947313 0.74522 0.999991 0.872397 0.999991 1.005C0.999991 3.278 2.80699 4.909 5.73799 5L5.99999 5.005H10.293L7.61099 2.323L10.293 5.005Z"
                            fill="#007AFF"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="18"
                          height="18"
                          viewBox="0 0 18 18"
                          fill="none"
                          v-else
                        >
                          <path
                            d="M16.808 3.19729C16.5399 3.46359 15.2015 4.93888 13.9124 6.21937C13.9124 17.0109 14.2682 16.2008 12.4569 18L11.0211 11.9598L9.55414 10.5026C5.66686 14.3632 6.25266 11.3737 6.25266 15.0695C6.25636 15.8766 5.91536 16.4075 5.42637 16.8932L4.06597 13.8389L0.990894 12.4876C2.00029 11.4859 2.55178 11.6669 4.93967 11.6669C5.75236 10.0003 6.75696 9.28595 7.54295 8.50496L6.07896 7.05087L0 5.62688C1.71529 3.92299 0.663795 4.23739 11.8395 4.23739C13.1355 2.95009 14.5277 1.4671 14.7969 1.1997C15.5714 0.430509 17.5986 -0.235987 17.9174 0.0806108C18.2361 0.397209 17.5825 2.428 16.808 3.19729ZM15.4406 7.44417L14.6307 8.24686V10.6048C16.3815 8.84986 16.827 8.82816 15.4406 7.44417ZM10.6281 2.6519C9.26034 1.2867 9.36394 1.5691 7.41295 3.50889H9.77544L10.6281 2.6519Z"
                          />
                        </svg>
                      </span>
                      <span v-if="mode == 'flight'">
                        {{ item.ct }}({{ item.ac }})
                      </span>
                      <span
                        v-else-if="
                          mode == 'vacation' ||
                          mode == 'vacationDestination' ||
                          mode == 'hotelFlightDestination' ||
                          mode == 'hotel' ||
                          mode == 'thingsToDo'
                        "
                      >
                        {{ item.name }}
                      </span>

                      <span v-else-if="mode == 'hotelFlightOrigin'">
                        {{ item.cityName }}
                      </span>
                    </div>
                    <div class="ts-dropdown-ariport-name">
                      <span v-if="mode == 'flight'">
                        {{ item.an }}
                      </span>
                      <span
                        v-else-if="
                          mode == 'hotel' ||
                          mode == 'hotelFlightDestination' ||
                          mode == 'thingsToDo'
                        "
                      >
                        {{ item.secondaryName }}
                      </span>
                      <span v-else-if="mode == 'hotelFlightOrigin'">
                        {{ item.name }}
                      </span>
                    </div>
                  </div>
                  <div class="ts-dropdown-airport" v-if="mode == 'flight'">
                    {{ item.cc }}
                  </div>
                  <div
                    class="ts-dropdown-airport"
                    v-else-if="mode == 'hotelFlightOrigin'"
                  >
                    {{ item.countryCode }}
                  </div>
                </slot>
              </div>
            </div>
            <div class="ts-dropdown-wrapper" v-else-if="itemSearch.length">
              <slot name="no-result">
                <span class="pl-3"> Not Found </span>
              </slot>
            </div>
          </div>
        </slot>
      </div>
    </v-dialog>
  </section>
</template>

<script>
export default {
  props: {
    value: false,
    items: {},
    title: {},
    mode: {
      default: "flight",
    },
  },
  // computed: {
  //   fullName: {
  //     // getter
  //     get: function () {
  //       return this.value;
  //     },
  //     // setter
  //     set: function (newValue) {
  //       this.$emit('input',newValue)
  //     },
  //   },
  // },
  data() {
    return {
      dialog: this.value,
      showMenu: false,
      itemSearch: "",
      display: null,
      activeItem: 0,
    };
  },
  watch: {
    value: {
      handler(val) {
        setTimeout(() => {
          this.dialog = this.value;
        }, 1);
        // if (val) {
        //   this.$nextTick(() => {
        //     this.$refs.input.focus();
        //     this.$refs.input.click();
        //   });
        // }
      },
    },
    dialog() {
      if (!this.dialog) {
        setTimeout(() => {
          this.$emit("close");
        }, 1);
      } else {
        setTimeout(() => {
          this.$nextTick(() => {
            this.$refs.input.focus();
            this.$refs.input.click();

            // document.querySelector(".modal-input").focus();
            this.$vuetify.goTo(0);
          });
        }, 1);
      }
    },
  },
  methods: {
    onClickOutside() {
      this.showMenu = false;
    },
    search() {
      this.showMenu = true;
      this.$emit("getDataSearch", {
        searchItem: this.itemSearch,
        display: this.display,
      });
    },
    close() {
      this.dialog = false;
      // this.fillInputOnClose();
      this.$forceUpdate();
    },
    fillInputOnClose() {
      if (
        this.items.length &&
        this.itemSearch &&
        typeof this.itemSearch == "string"
      ) {
        this.itemSearch = this.items[0];
        this.displayItemSearch(this.itemSearch);
        this.$emit("getDataSearch", {
          searchItem: this.itemSearch,
          display: this.display,
        });
      }
    },
    displayItemSearch(item) {
      // if (this.mode == "flight") {
      //   this.display = item.ac + "-" + item.ct + "-" + item.an;
      // } else if (
      //   this.mode == "vacation" ||
      //   this.mode == "hotel" ||
      //   this.mode == "thingsToDo"
      // ) {
      //   this.display = item.name;
      // } else if (this.mode == "hotelFlightOrigin") {
      //   this.display = item.cityCode + "-" + item.cityName + "-" + item.name;
      // } else if (this.mode == "hotelFlightDestination") {
      //   this.display = item.name + "-" + item.secondaryName;
      // }
      if (this.mode == "flight") {
        this.display = `${item.ac}-${item.an}, ${item.cn}`;
      } else if (
        this.mode == "hotel" ||
        this.mode == "thingsToDo" ||
        this.mode == "hotelFlightDestination"
      ) {
        this.display = `${item.name}, ${item.secondaryName}`;
      } else if (this.mode == "vacation") {
        this.display = `${item.name}`;
      } else if (this.mode == "vacationDestination") {
        if (item.countryName) {
          this.display = `${item.name}, ${item.countryName}`;
        } else {
          this.display = `${item.name}`;
        }
      } else if (this.mode == "hotelFlightOrigin") {
        this.display = item.code + "-" + item.name + "," + item.countryName;
      }
    },
    selectItem(item, index) {
      this.activeItem = index;
      this.displayItemSearch(item);
      this.itemSearch = item;
      this.dialog = false;
      this.$emit("getDataSearch", {
        searchItem: this.itemSearch,
        display: this.display,
      });
      this.$refs.input.blur();
    },
  },
};
</script>
