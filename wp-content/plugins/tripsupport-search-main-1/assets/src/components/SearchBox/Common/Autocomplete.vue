<style scoped lang="scss">
.ts-menu {
  width: 103%;
  top: 100%;
}
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
.input-wrapper {
  position: relative;
}
.ts-label {
  text-align: left;
  font-size: 12px;
  color: var(--primary-base);
  position: absolute;
  background: #fff;
  top: -10px;
  left: 10px;
  padding: 0 4px;
  margin: 0;
}
.ts-autocomplete {
  height: 50px;
  border: 1px solid var(--primary-base);
  padding: 0 10px 0 32px;
  border-radius: 6px;
  background: #ffffff;
  outline: none;
  color: #66678f;
  font-size: 14px;
  font-weight: 500;
  width: 100%;
}
.ts-autocomplete::placeholder {
  color: #66678f;
  font-size: 14px;
  font-weight: 500;
}
.ts-svg-icon {
  position: absolute;
  left: 10px;
  bottom: 16px;
  width: 18px;
  height: 18px;
  display: flex;
  svg {
    width: 18px;
    fill: var(--primary-base);
  }
}
.ts-dropdown-wrapper {
  // padding: 10px 0;
  width: 100%;
}
.ts-dropdown-item {
  display: flex;
  justify-content: space-between;
  align-items: center;
  cursor: pointer;
  // padding: 0 8px;
}
// .ts-dropdown-item:not(:last-child) {
//   margin-bottom: 10px;
// }
// .ts-dropdown-item:hover {
//   background: rgba(0, 122, 255, 0.02);
// }
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
// .active {
//   background: rgba(0, 122, 255, 0.02);
// }
// .active .ts-dropdown-city-name {
//   color: #0c0d25;
// }
.indent-1 {
  padding-left: 16px;
}
.active .ts-dropdown-city-name span svg {
  fill: #007aff;
}
.prefix-icon {
  display: flex;
  align-items: center;
  margin-right: 6px;
}
@media only screen and (max-width: 768px) {
  // .ts-menu {
  //   width: 100%;
  // }
  // .ts-autocomplete {
  //   width: 100%;
  // }
}
</style>

<template>
  <div class="input-wrapper" v-click-outside="onClickOutside">
    <label class="ts-label">{{ placeholder }}</label>
    <input
      class="ts-autocomplete"
      ref="input"
      @keydown="onKyeDown"
      @input="onSearch"
      @focus="focusInput"
      @click="onClick"
    />
    <div class="ts-svg-icon">
      <slot name="icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <path
            fill-rule="evenodd"
            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
            clip-rule="evenodd"
          ></path>
        </svg>
      </slot>
    </div>
    <template>
      <DropdownDialog :showMenu="showMenu" v-if="items.length || search.length">
        <template #data>
          <div class="ts-dropdown-wrapper" v-if="items.length">
            <div
              class="ts-dropdown-item"
              v-for="(item, index) in items"
              :key="index"
              @click="selectItem(item)"
              :class="{
                active: search == item || index == arrowCounter,
              }"
            >
              <slot
                name="item"
                ref="dropdown"
                :item="item"
                :active="search == item || index == arrowCounter"
              >
              </slot>
            </div>
          </div>
          <div
            class="ts-dropdown-wrapper"
            v-else-if="!hideNoData && search.length"
          >
            <slot name="no-result">
              <span class="pl-3"> Not Found </span>
            </slot>
          </div>
        </template>
      </DropdownDialog>
    </template>
  </div>
</template>

<script>
export default {
  props: {
    value: {},
    items: {},
    placeholder: {
      type: String,
    },
    localStorage: {
      type: Object,
    },
    mode: {
      type: String,
      default: "flight",
    },
    selectedText: {
      default: "",
      type: String,
    },
    highlightOnSelect: {
      default: true,
    },
    userLocation: {},
    from: {
      tyoe: Boolean,
      default: false,
    },
  },
  data() {
    return {
      showMenu: false,
      search: "",
      displaySearch: null,
      arrowCounter: 0,
      openMobileDialog: false,
      selectedItem: null,
    };
  },
  watch: {
    selectedText: {
      handler: function (val) {
        this.$refs.input.value = val;
      },
    },
    localStorage: {
      handler: function (val) {
        this.getLocalStorage(val);
      },
    },
    // userLocation: {
    //   handler: function (val) {
    //     if (Object.keys(val).length && this.from) {
    //       if (!this.localStorage) {
    //         this.search = val;
    //         this.displayItemSearch(val);
    //         this.$emit("input", this.search);
    //       }
    //     }
    //     if (Object.keys(val).length == 0 && this.from) {
    //       if (!this.localStorage) {
    //         this.userLocationObject();
    //         this.$emit("input", this.search);
    //       }
    //     }
    //   },
    // },
  },
  computed: {
    isMobile() {
      return window.innerWidth < 600;
    },
    hideNoData() {
      return this.$attrs["hide-no-data"] == undefined ? false : true;
    },
  },
  mounted() {
    this.$refs.input.value = this.selectedText;
  },
  methods: {
    focusInput(e) {
      this.$emit("focus");
      if (this.highlightOnSelect) {
        e.target.select();
      }
      this.openResult();
    },
    onClick() {
      this.$emit("click");
      this.openResult();
    },
    // getLocalStorage(value) {
    //   if (!value) {
    //     return;
    //   }
    //   this.search = value;
    //   this.displayItemSearch(value);
    //   this.$emit("input", this.search);
    // },
    openResult() {
      if (this.isMobile) {
        // this.openMobileDialog = true;
        // this.showMenu = false;
      } else {
        this.showMenu = true;
      }
    },
    // getDataSearchFromMobile(items) {
    //   // this.showMenu = false;
    //   this.search = items.searchItem;
    //   this.displaySearch = items.display;
    //   this.$emit("input", this.search);
    //   this.$refs.input.blur();
    // },
    onClickOutside() {
      if (this.isMobile) return;
      if (this.items.length && this.showMenu) {
        let item = this.items[0];
        if (JSON.stringify(this.selectedItem) !== JSON.stringify(item)) {
          this.selectItem(item);
        }
        this.showMenu = false;
      }
    },
    onSearch(search) {
      // this.displaySearch = keySearch;
      // this.search = keySearch;
      this.$emit("search", search.target.value);
    },
    fixScrolling() {
      let element =
        document.querySelectorAll(".ts-dropdown-item")[this.arrowCounter];
      element.scrollIntoView({
        behavior: "smooth",
        block: "nearest",
        inline: "start",
      });
    },
    onKyeDown(e) {
      if (this.isMobile) {
        this.showMenu = false;
      } else {
        this.showMenu = true;
      }
      if (e.key == "Enter" || e.key == "Tab") {
        let item = this.items[this.arrowCounter];
        this.selectItem(item);
        this.arrowCounter = 0;
        // if (this.arrowCounter == 0 && this.items[0]) {
        //   this.search = this.items[0];
        //   this.displayItemSearch(this.items[0]);
        //   this.$emit("input", this.search);
        // } else if (this.arrowCounter > 0) {
        //   this.search = item;
        //   this.displayItemSearch(item);
        // }
        setTimeout(() => {
          this.showMenu = false;
        }, 1);
      }
      if (e.key == "ArrowDown") {
        if (this.arrowCounter < this.items.length) {
          this.arrowCounter = this.arrowCounter + 1;
          this.fixScrolling();
        }
      } else if (e.key == "ArrowUp") {
        if (this.arrowCounter > 0) {
          this.arrowCounter = this.arrowCounter - 1;
          this.fixScrolling();
        }
      }
    },
    userLocationObject() {
      if (this.from) {
        if (this.mode == "flight") {
          this.search = {
            ac: "YTO",
            an: "Toronto All airports",
            cc: "CA",
            cn: "CA",
            ct: "Toronto",
          };
          this.displayItemSearch(this.search);
        } else if (this.mode == "vacation") {
          this.search = { codes: "YYZ", name: "Toronto" };
          this.displayItemSearch(this.search);
        }
      }
    },
    displayItemSearch(item) {
      if (this.mode == "flight") {
        this.displaySearch = `${item.ac}-${item.an}, ${item.cn}`;
      } else if (
        this.mode == "hotel" ||
        this.mode == "thingsToDo" ||
        this.mode == "hotelFlightDestination"
      ) {
        this.displaySearch = `${item.name}, ${item.secondaryName}`;
      } else if (this.mode == "vacation") {
        this.displaySearch = `${item.name}`;
      } else if (this.mode == "vacationDestination") {
        if (item.countryName) {
          this.displaySearch = `${item.name}, ${item.countryName}`;
        } else {
          this.displaySearch = `${item.name}`;
        }
      } else if (this.mode == "hotelFlightOrigin") {
        this.displaySearch =
          item.code + "-" + item.name + "," + item.countryName;
      }
    },
    selectItem(item) {
      this.$refs.input.value = this.selectedText;
      setTimeout(() => {
        this.selectedItem = item;
        this.$emit("input", item);
        this.$emit("select", item);
        this.showMenu = false;
      }, 10);
      // this.search = item;
      // this.displayItemSearch(item);
    },
    fillInput() {},
    closeModal() {
      this.openMobileDialog = false;
      this.$forceUpdate();
    },
    closeDialog() {
      console.log("object");
      this.openMobileDialog = false;
      console.log(this.$refs.dialog);
      // this.$refs.dialog.$destroy();
      this.$refs.input.blur();
    },
  },
};
</script>
