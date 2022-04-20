<style scoped lang="scss">
section {
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
input[type="text"] {
  height: 48px;
  border: 1px solid var(--primary-base);
  /* padding: 0 10px; */
  border-radius: 6px;
  background: #ffffff;
  outline: none;
  font-size: 14px;
  font-weight: 500;
  color: #66678f;
  width: 100%;
  padding-left: 40px;
  cursor: pointer;
}
.ts-display-input {
  position: relative;
}
.ts-svg-input {
  position: absolute;
  left: 15px;
  bottom: 14px;
  width: 17px;
  height: 17px;
  display: flex;
  svg {
    width: 17px;
    fill: var(--primary-base);
  }
}
.suffix {
  position: absolute;
  right: 15px;
  bottom: 16px;
  width: 11px;
  height: 11px;
  display: flex;
  align-items: center;
}
.ts-dropdown-wrapper {
  width: 100%;
}

.ts-dropdown-item svg {
  fill: #ababc4;
  margin-right: 12px;
}
.ts-dropdown-item {
  padding: 0 8px;
  display: flex;
  align-items: center;
  cursor: pointer;
  height: 30px;
  &.active {
    background: #f3f4f6;
  }
}
.ts-name {
  font-size: 14px;
  font-weight: 400;
  color: #66678f;
}

.active svg {
  fill: #007aff;
}
.ts-menu {
  right: 0;
  left: 0;
}
</style>

<template>
  <section>
    <div class="ts-display-input">
      <label class="ts-label">{{ $t("VACATION.Duration") }}</label>
      <input
        type="text"
        :placeholder="`${$t('VACATION.Duration')}`"
        v-click-outside="outSideMenu"
        :value="TsDurationSelected.text"
        @click="durationMenu = !durationMenu"
        readonly
      />
      <div class="suffix">
        <svg
          data-v-5d6e1902=""
          width="11"
          height="6"
          viewBox="0 0 11 6"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            data-v-5d6e1902=""
            d="M1.52729 0.250695C1.37123 0.101068 1.15336 0.0112855 0.921349 0.000993118C0.689341 -0.00929922 0.462091 0.0607372 0.289327 0.195777C0.203946 0.262494 0.134545 0.343204 0.0850987 0.433283C0.0356526 0.523361 0.00713361 0.621038 0.00117599 0.720717C-0.00478163 0.820395 0.011939 0.920115 0.0503799 1.01417C0.0888209 1.10821 0.148227 1.19474 0.225194 1.2688L4.88553 5.7493C4.9681 5.82846 5.06885 5.89168 5.18127 5.93486C5.2937 5.97805 5.41529 6.00024 5.5382 6C5.6611 5.99976 5.78258 5.9771 5.89479 5.93348C6.00699 5.88986 6.10741 5.82625 6.18957 5.74677L10.7761 1.30682C10.8529 1.23253 10.9122 1.14577 10.9504 1.05152C10.9886 0.957266 11.005 0.85738 10.9987 0.757596C10.9924 0.657813 10.9634 0.560098 10.9136 0.470063C10.8637 0.380029 10.7938 0.299449 10.708 0.232952C10.5347 0.0984339 10.307 0.0291311 10.075 0.0402159C9.84299 0.0513006 9.62547 0.141869 9.47007 0.292095L5.82226 3.82378C5.78581 3.85904 5.74124 3.88724 5.69143 3.90654C5.64163 3.92585 5.58771 3.93582 5.53318 3.93582C5.47865 3.93582 5.42473 3.92585 5.37492 3.90654C5.32512 3.88724 5.28054 3.85904 5.24409 3.82378L1.52729 0.250695Z"
            fill="#ABABC4"
          ></path>
        </svg>
      </div>
      <div class="ts-svg-input">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 20 20"
          fill="currentColor"
        >
          <path
            fill-rule="evenodd"
            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
            clip-rule="evenodd"
          ></path>
        </svg>
      </div>
    </div>
    <MenuDialog :showMenu="durationMenu" :fullHeight="false">
      <template #data>
        <div class="ts-dropdown-wrapper">
          <div
            class="ts-dropdown-item"
            v-for="(item, index) in durations"
            :key="index"
            @click="changeSelected(item, index)"
            :class="{ active: TsDurationSelected.value == item.value }"
          >
            <div>
              <!-- <span>
                <svg
                  width="12"
                  height="16"
                  viewBox="0 0 12 16"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M7.2 11.781C7.2031 11.6485 7.25113 11.5205 7.33692 11.4161C7.42272 11.3117 7.54167 11.2366 7.676 11.2019C9.06314 10.8176 10.2581 9.96945 11.0414 8.81332C11.8247 7.65718 12.1438 6.27068 11.94 4.90849C11.7362 3.54629 11.0232 2.29987 9.93199 1.39816C8.84079 0.496448 7.44465 0 6 0C4.55535 0 3.15921 0.496448 2.06801 1.39816C0.976813 2.29987 0.26383 3.54629 0.060023 4.90849C-0.143784 6.27068 0.17527 7.65718 0.958581 8.81332C1.74189 9.96945 2.93686 10.8176 4.324 11.2019C4.45833 11.2366 4.57728 11.3117 4.66308 11.4161C4.74887 11.5205 4.7969 11.6485 4.8 11.781V14.8571C4.8 15.1602 4.92643 15.4509 5.15147 15.6652C5.37652 15.8796 5.68174 16 6 16C6.31826 16 6.62348 15.8796 6.84853 15.6652C7.07357 15.4509 7.2 15.1602 7.2 14.8571V11.781Z"
                  />
                </svg>
              </span> -->
              <span class="ts-name">
                {{ item.text }}
              </span>
            </div>
            <!-- <div>
              <svg
                v-if="TsDurationSelected.value == item.value"
                width="6"
                height="10"
                viewBox="0 0 6 10"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M0.250695 8.61155C0.101068 8.75343 0.0112855 8.95149 0.000993118 9.16241C-0.00929922 9.37333 0.0607372 9.57992 0.195777 9.73698C0.262494 9.81459 0.343204 9.87769 0.433283 9.92264C0.523361 9.96759 0.621038 9.99351 0.720717 9.99893C0.820395 10.0043 0.920115 9.98915 1.01417 9.9542C1.10821 9.91925 1.19474 9.86525 1.2688 9.79528L5.7493 5.55861C5.82846 5.48355 5.89168 5.39196 5.93486 5.28975C5.97805 5.18755 6.00024 5.07701 6 4.96527C5.99976 4.85354 5.9771 4.7431 5.93348 4.6411C5.88986 4.5391 5.82625 4.44781 5.74677 4.37312L1.30682 0.203585C1.23253 0.133696 1.14577 0.0798388 1.05152 0.0451078C0.957266 0.0103769 0.85738 -0.00454521 0.757596 0.00120068C0.657813 0.00694656 0.560098 0.033247 0.470063 0.0785904C0.380029 0.123933 0.299449 0.187425 0.232952 0.265421C0.0984339 0.423044 0.0291311 0.629972 0.0402159 0.840902C0.0513006 1.05183 0.141869 1.24958 0.292095 1.39084L3.82378 4.70703C3.85904 4.74017 3.88724 4.78069 3.90654 4.82597C3.92585 4.87125 3.93582 4.92027 3.93582 4.96984C3.93582 5.01941 3.92585 5.06843 3.90654 5.11371C3.88724 5.15898 3.85904 5.19951 3.82378 5.23264L0.250695 8.61155Z"
                  fill="#66678F"
                />
              </svg>
            </div> -->
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
  props: ["availableDurations", "value"],
  watch: {
    availableDurations() {
      let custom_index = this.displayDuration.findIndex(
        (x) => x.value == "7,8"
      );
      this.changeSelected(
        this.displayDuration[custom_index >= 0 ? custom_index : 0]
      );
    },
    value: {
      handler() {
        if (this.value) {
          if (this.availableDurations) {
            let item = this.availableDurations.find(
              (x) => x.value == this.value
            );
            this.TsDurationSelected = item;
          } else {
            let item = this.displayDuration.find((x) => x.value == this.value);
            this.TsDurationSelected = item;
          }
        }
      },
      deep: true,
    },
  },
  computed: {
    durations() {
      if (!this.availableDurations) {
        let custom_index = this.displayDuration.findIndex(
          (x) => x.value == "7,8"
        );
        this.changeSelected(
          this.displayDuration[custom_index >= 0 ? custom_index : 0]
        );
        return this.displayDuration;
      } else {
        let res = this.availableDurations.map((item) => {
          return { text: `${item} ${this.$t("VACATION.days")}`, value: item };
        });
        if (
          this.availableDurations.includes(17) ||
          this.availableDurations.includes(18) ||
          this.availableDurations.includes(19) ||
          this.availableDurations.includes(20) ||
          this.availableDurations.includes(21) ||
          this.availableDurations.includes(22)
        ) {
          res.unshift({
            text: `17 ${this.$t("VACATION.to")} 22  ${this.$t(
              "VACATION.days"
            )}`,
            value: "17,18,19,20,21,22",
          });
        }
        if (
          this.availableDurations.includes(11) ||
          this.availableDurations.includes(12) ||
          this.availableDurations.includes(13) ||
          this.availableDurations.includes(14) ||
          this.availableDurations.includes(15) ||
          this.availableDurations.includes(16)
        ) {
          res.unshift({
            text: `11 ${this.$t("VACATION.to")} 16  ${this.$t(
              "VACATION.days"
            )}`,
            value: "11,12,13,14,15,16",
          });
        }
        if (
          this.availableDurations.includes(14) ||
          this.availableDurations.includes(15)
        ) {
          res.unshift({
            text: `14 ${this.$t("VACATION.or")} 15  ${this.$t(
              "VACATION.days"
            )}`,
            value: "14,15",
          });
        }
        if (
          this.availableDurations.includes(5) ||
          this.availableDurations.includes(6) ||
          this.availableDurations.includes(7) ||
          this.availableDurations.includes(8) ||
          this.availableDurations.includes(9) ||
          this.availableDurations.includes(10)
        ) {
          res.unshift({
            text: `5 ${this.$t("VACATION.to")} 10  ${this.$t("VACATION.days")}`,
            value: "5,6,7,8,9,10",
          });
        }
        if (
          this.availableDurations.includes(7) ||
          this.availableDurations.includes(8)
        ) {
          res.unshift({
            text: `7 ${this.$t("VACATION.or")} 8  ${this.$t("VACATION.days")}`,
            value: "7,8",
          });
        }
        if (
          this.availableDurations.includes(3) ||
          this.availableDurations.includes(4)
        ) {
          res.unshift({
            text: `3 ${this.$t("VACATION.or")} 4  ${this.$t("VACATION.days")}`,
            value: "3,4",
          });
        }
        return res;
      }
    },
  },
  data() {
    return {
      displayDuration: [
        {
          text: `3 ${this.$t("VACATION.or")} 4  ${this.$t("VACATION.days")}`,
          value: "3,4",
        },
        {
          text: `7 ${this.$t("VACATION.or")} 8  ${this.$t("VACATION.days")}`,
          value: "7,8",
        },
        {
          text: `5 ${this.$t("VACATION.to")} 10  ${this.$t("VACATION.days")}`,
          value: "5,6,7,8,9,10",
        },
        {
          text: `14 ${this.$t("VACATION.or")} 15  ${this.$t("VACATION.days")}`,
          value: "14,15",
        },
        {
          text: `11 ${this.$t("VACATION.to")} 16  ${this.$t("VACATION.days")}`,
          value: "11,12,13,14,15,16",
        },
        {
          text: `17 ${this.$t("VACATION.to")} 22  ${this.$t("VACATION.days")}`,
          value: "17,18,19,20,21,22",
        },
        { text: `1 ${this.$t("VACATION.day")}`, value: "1" },
        { text: `2  ${this.$t("VACATION.days")}`, value: "2" },
        { text: `3  ${this.$t("VACATION.days")}`, value: "3" },
        { text: `4  ${this.$t("VACATION.days")}`, value: "4" },
        { text: `5  ${this.$t("VACATION.days")}`, value: "5" },
        { text: `7  ${this.$t("VACATION.days")}`, value: "7" },
        { text: `8  ${this.$t("VACATION.days")}`, value: "8" },
        { text: `9  ${this.$t("VACATION.days")}`, value: "9" },
        { text: `10  ${this.$t("VACATION.days")}`, value: "10" },
        { text: `11  ${this.$t("VACATION.days")}`, value: "11" },
        { text: `12  ${this.$t("VACATION.days")}`, value: "12" },
        { text: `13  ${this.$t("VACATION.days")}`, value: "13" },
        { text: `14  ${this.$t("VACATION.days")}`, value: "14" },
        { text: `15  ${this.$t("VACATION.days")}`, value: "15" },
        { text: `16  ${this.$t("VACATION.days")}`, value: "16" },
        { text: `21  ${this.$t("VACATION.days")}`, value: "21" },
        { text: `28  ${this.$t("VACATION.days")}`, value: "28" },
      ],
      TsDurationSelected: {
        text: `7 ${this.$t("VACATION.or")} 8  ${this.$t("VACATION.days")}`,
        value: "7,8",
      },
      durationMenu: false,
    };
  },
  methods: {
    outSideMenu() {
      this.durationMenu = false;
    },
    changeSelected(item) {
      this.TsDurationSelected = item;
      this.$emit("Durations", item.value);
    },
  },
};
</script>
