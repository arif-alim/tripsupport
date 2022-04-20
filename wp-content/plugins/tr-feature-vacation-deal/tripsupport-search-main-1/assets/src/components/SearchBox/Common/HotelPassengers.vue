<style scoped>
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
  padding: 0 12px 0 8px;
  font-size: 14px;
  color: #66678f;
}
.wrapper {
  padding: 24px;
  width: 300px;
}
.ts-counter-rooms {
  font-size: 18px;
  font-weight: 400;
  color: #0c0d25;
  margin-bottom: 16px;
}
.ts-counter-wrapper {
  display: flex;
  justify-content: space-between;
}
.ts-counter-wrapper:not(:last-child) {
  margin-bottom: 16px;
}
.ts-child-wrapper:not(:last-child) {
  padding-bottom: 16px;
}
.ts-section-title {
  color: #0c0d25;
  font-size: 16px;
  margin-bottom: 5px;
  font-weight: 400;
}
.ts-section-rules {
  color: #66678f;
  font-size: 14px;
  font-weight: 400;
}
/* .ts-counter-child {
  margin-bottom: 15px;
} */
.ts-select-wrapper {
  width: 200px;
  padding: 5px 0;
}
.ts-select-item {
  vertical-align: middle;
  padding: 10px 5px;
  cursor: pointer;
}
.ts-svg svg {
  fill: #ababc4;
  margin-right: 8px;
}
.active {
  background: rgba(0, 122, 255, 0.02);
  color: #0c0d25;
}
.active .ts-svg svg {
  fill: #007aff;
}
.ts-counter-buttons-wrapper {
  display: flex;
  align-items: center;
  position: relative;
}
.ts-counter-buttons-wrapper .ts-menu {
  top: 43px;
  right: 0;
  overflow-x: hidden;
  overflow-y: auto;
  max-height: 300px;
}
.ts-counter-input {
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 110px;
  height: 40px;
  padding-left: 15px;
  cursor: pointer;
}
.ts-counter-input:focus,
.ts-counter-input:hover {
  outline: 2px solid #045ab6;
}
.ts-counter {
  padding: 0 20px;
  font-size: 20px;
  font-weight: 400;
  color: #66678f;
  white-space: nowrap;
  width: 50px;
}
.ts-counter-buttons {
  display: flex;
  justify-content: center;
  align-items: center;
  color: #ababc4;
  border-radius: 100%;
  border: 2px solid #ababc4;
  background: #fff;
  width: 32px;
  height: 32px;
  font-size: 25px;
  outline: none;
  cursor: pointer;
}
.ts-counter-buttons:disabled {
  color: #ccc;
  border-color: #ccc;
}
.ts-done {
  margin: 0 24px;
  padding: 16px 0 24px;
  border-top: 1px dashed #dddde7;
}
.ts-done button {
  width: 100%;
  background: #ed1b2e;
  height: 42px;
  border-radius: 4px;
  font-size: 14px;
  font-weight: 400;
  color: #fff;
  outline: none;
}
.ts-done button:disabled {
  background: #f9f9f9;
  color: #212121;
}
.passengers-error {
  text-align: center;
  color: #ed1b2e;
  padding-top: 20px;
}
@media only screen and (max-width: 600px) {
  .ts-passengers-activation {
    min-width: 86px;
  }
  .ts-passenger-count {
    font-size: 12px;
    padding: 0 8px 0 0;
    white-space: nowrap;
  }
}
</style>

<template>
  <section>
    <div class="ts-passengers-activation">
      <div class="ts-icon-passenger">
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
      </div>
      <div class="ts-passenger-count" @click="travellersMenu = !travellersMenu">
        {{ `${numberOfTravellers} ${$t('HOTELS.Travellers')}` }}
      </div>
      <svg
        @click="travellersMenu = !travellersMenu"
        width="11"
        height="6"
        viewBox="0 0 11 6"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M1.52729 0.250695C1.37123 0.101068 1.15336 0.0112855 0.921349 0.000993118C0.689341 -0.00929922 0.462091 0.0607372 0.289327 0.195777C0.203946 0.262494 0.134545 0.343204 0.0850987 0.433283C0.0356526 0.523361 0.00713361 0.621038 0.00117599 0.720717C-0.00478163 0.820395 0.011939 0.920115 0.0503799 1.01417C0.0888209 1.10821 0.148227 1.19474 0.225194 1.2688L4.88553 5.7493C4.9681 5.82846 5.06885 5.89168 5.18127 5.93486C5.2937 5.97805 5.41529 6.00024 5.5382 6C5.6611 5.99976 5.78258 5.9771 5.89479 5.93348C6.00699 5.88986 6.10741 5.82625 6.18957 5.74677L10.7761 1.30682C10.8529 1.23253 10.9122 1.14577 10.9504 1.05152C10.9886 0.957266 11.005 0.85738 10.9987 0.757596C10.9924 0.657813 10.9634 0.560098 10.9136 0.470063C10.8637 0.380029 10.7938 0.299449 10.708 0.232952C10.5347 0.0984339 10.307 0.0291311 10.075 0.0402159C9.84299 0.0513006 9.62547 0.141869 9.47007 0.292095L5.82226 3.82378C5.78581 3.85904 5.74124 3.88724 5.69143 3.90654C5.64163 3.92585 5.58771 3.93582 5.53318 3.93582C5.47865 3.93582 5.42473 3.92585 5.37492 3.90654C5.32512 3.88724 5.28054 3.85904 5.24409 3.82378L1.52729 0.250695Z"
          fill="#ABABC4"
        />
      </svg>
    </div>
    <MenuDialog :showMenu="travellersMenu">
      <template #data>
        <div v-click-outside="outSideTravellersMenu">
          <div v-if="!checkZero" class="passengers-error">
            Adult count should not be zero
          </div>
          <div class="wrapper" v-for="(item, index) in travellers" :key="index">
            <div class="ts-counter-rooms">
              {{ $t('HOTELS.Room') }} {{ index + 1 }}
            </div>
            <div class="ts-counter-wrapper">
              <div class="ts-title">
                <div class="ts-section-title">
                  {{ $t('HOTELS.Adults') }}
                </div>
                <div class="ts-section-rules">
                  Maximum 10
                </div>
              </div>
              <div class="ts-counter-buttons-wrapper">
                <button
                  @click="
                    item.adults--;
                    emitDate();
                  "
                  class="ts-counter-buttons"
                  :disabled="item.adults == 0"
                >
                  -
                </button>
                <div class="ts-counter">
                  <b>{{ item.adults }}</b>
                </div>
                <button
                  @click="
                    item.adults++;
                    emitDate();
                  "
                  class="ts-counter-buttons"
                  :disabled="item.adults >= 10"
                >
                  +
                </button>
              </div>
            </div>
            <div class="ts-counter-wrapper">
              <div class="ts-title">
                <div class="ts-section-title">
                  {{ $t('HOTELS.Children') }}
                </div>
                <div class="ts-section-rules">
                  Maximum 4
                </div>
              </div>
              <div class="ts-counter-buttons-wrapper">
                <button
                  @click="
                    item.children--;
                    addChild(item);
                    emitDate();
                  "
                  class="ts-counter-buttons"
                  :disabled="item.children == 0"
                >
                  -
                </button>
                <div class="ts-counter">
                  <b>{{ item.children }}</b>
                </div>
                <button
                  @click="
                    item.children++;
                    addChild(item);
                    emitDate();
                  "
                  class="ts-counter-buttons"
                  :disabled="item.children >= 4"
                >
                  +
                </button>
              </div>
            </div>
            <div
              class="ts-child-wrapper"
              v-for="(child, index) in item.childrenAges"
              :key="index"
            >
              <div class="ts-counter-wrapper">
                <div class="ts-title">
                  <div class="ts-section-title">
                    {{ $t('HOTELS.Child') }} {{ index + 1 }}
                    {{ $t('HOTELS.Age') }}
                  </div>
                  <div class="ts-section-rules">
                    Maximum 11
                  </div>
                </div>
                <div class="ts-counter-buttons-wrapper">
                  <input
                    :value="child.displayAge"
                    readonly
                    class="ts-counter-input"
                    @click="openSelectModal(child)"
                    v-click-outside="
                      () => {
                        child.openAgeMenu = false;
                      }
                    "
                  />
                  <MenuDialog :showMenu="child.openAgeMenu">
                    <template #data>
                      <div class="ts-select-wrapper">
                        <div
                          class="ts-select-item"
                          v-for="(childItem, ind) in selectItems"
                          :key="ind"
                          @click="getChildItem(childItem, child, ind)"
                          :class="{ active: child.displayAge == childItem }"
                        >
                          <span class="ts-svg">
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
                          </span>
                          {{ childItem }}
                        </div>
                      </div>
                    </template>
                  </MenuDialog>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="ts-done">
          <button @click="done" :disabled="!checkZero">
            {{ $t('HOTELS.Done') }}
          </button>
        </div>
      </template>
    </MenuDialog>
  </section>
</template>

<script>
import MenuDialog from './MenuDialog.vue';
export default {
  components: {
    MenuDialog,
  },
  props: {
    Rooms: {},
  },
  data() {
    return {
      travellers: [],
      numberOfRooms: 1,
      travellersMenu: false,
      selectItems: [
        '<1',
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
    Rooms: {
      handler: function(value) {
        this.numberOfRooms = value;
        let travellers = this.travellers.length + 1;
        while (travellers <= value) {
          this.travellers.push({ adults: 0, children: 0, childrenAges: [] });
          travellers++;
        }
        if (this.travellers.length > value) {
          this.travellers.pop();
        }
      },
      deep: true,
    },
    travellers: {
      handler: function(value) {
        this.$emit('numberOfTravellers', value);
      },
      deep: true,
    },
  },
  created() {
    this.travellers.push({ adults: 2, children: 0, childrenAges: [] });
  },
  computed: {
    numberOfTravellers() {
      let array = [];
      this.travellers.map((items) => {
        array.push(items.adults, items.children);
      });
      return array.reduce((a, b) => {
        if (b == undefined) {
          return a + 0;
        } else if (a == undefined) {
          return 0 + b;
        } else if (a == undefined && b == undefined) {
          return 0;
        } else {
          return a + b;
        }
      }, 0);
    },
    checkZero() {
      let adultsArray = [];
      this.travellers.forEach((item) => {
        adultsArray.push(item.adults);
      });
      let checkZero = adultsArray.every((item) => {
        return item > 0;
      });
      return checkZero;
    },
  },
  mounted() {
    let localStorageName;
    if (this.$parent.name == 'hotel') {
      localStorageName = 'lastHotelSearch';
    } else {
      localStorageName = 'lastFlightHotelSearch';
    }
    let getLocalStorage = localStorage.getItem(`${localStorageName}`);
    if (!getLocalStorage) {
      return;
    }
    let parsetGetLocalStorage = JSON.parse(getLocalStorage);
    this.travellers = parsetGetLocalStorage.travellersForm.travellers;
    this.$emit('numberOfTravellers', this.travellers);
  },
  methods: {
    openSelectModal(item) {
      item.openAgeMenu = true;
    },
    getChildItem(selected, items, ind) {
      items.age = ind;
      items.displayAge = selected;
      items.openAgeMenu = false;
      this.emitDate();
    },
    outSideTravellersMenu() {
      this.travellersMenu = false;
    },
    emitDate() {
      this.$emit('numberOfTravellers', this.travellers);
    },
    addChild(value) {
      value.childrenAges = [];
      let child = 1;
      while (child <= value.children) {
        value.childrenAges.push({
          age: 0,
          openAgeMenu: false,
          displayAge: 1,
        });
        child++;
      }
    },
    done() {
      this.travellersMenu = false;
      this.$emit('numberOfTravellers', this.travellers);
    },
  },
};
</script>
