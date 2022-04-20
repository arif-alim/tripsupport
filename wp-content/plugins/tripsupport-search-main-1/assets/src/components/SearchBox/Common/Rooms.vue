<style scoped>
section {
  position: relative;
}
.ts-menu {
  top: 24px;
  right: 0;
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
  white-space: nowrap;
}
.wrapper {
  padding: 24px;
  width: 300px;
}
.ts-counter-wrapper {
  display: flex;
  justify-content: space-between;
}
.ts-counter-wrapper:not(:last-child) {
  margin-bottom: 16px;
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
.ts-counter-buttons-wrapper {
  display: flex;
  align-items: center;
}
.ts-counter {
  padding: 0 20px;
  font-size: 20px;
  font-weight: 400;
  color: #66678f;
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
@media only screen and (max-width: 768px) {
  .ts-passenger-count {
    padding: 0 8px 0 0;
    white-space: nowrap;
  }
  .ts-menu {
    right: -110px;
  }
}
</style>

<template>
  <section>
    <div class="ts-passengers-activation">
      <div class="ts-icon-passenger">
        <svg
          width="20"
          height="16"
          viewBox="0 0 20 16"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
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
      </div>
      <div class="ts-passenger-count" @click="roomsMenu = !roomsMenu">
        {{ ` ${TsRoomsSelected} ${$t('HOTELS.Rooms')}` }}
      </div>
      <svg
        @click="roomsMenu = !roomsMenu"
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
    <MenuDialog :showMenu="roomsMenu">
      <template #data>
        <div class="wrapper" v-click-outside="outSideRoomsMenu">
          <div class="ts-counter-wrapper">
            <div class="ts-title">
              <div class="ts-section-title">
                <b>{{ $t('HOTELS.Rooms') }}</b>
              </div>
              <div class="ts-section-rules">
                Maximum 4
              </div>
            </div>
            <div class="ts-counter-buttons-wrapper">
              <button
                @click="minus"
                class="ts-counter-buttons"
                :disabled="TsRoomsSelected == 1"
              >
                -
              </button>
              <div class="ts-counter">
                <b>{{ TsRoomsSelected }}</b>
              </div>
              <button
                @click="addPlus"
                class="ts-counter-buttons"
                :disabled="TsRoomsSelected >= 4"
              >
                +
              </button>
            </div>
          </div>
        </div>
        <div class="ts-done">
          <button @click="done">
            {{ $t('Done') }}
          </button>
        </div>
      </template>
    </MenuDialog>
  </section>
</template>

<script>
import MenuDialog from '../Common/MenuDialog.vue';
export default {
  components: {
    MenuDialog,
  },
  props: {
    children: {
      defualt: 0,
    },
  },
  data() {
    return {
      TsRoomsSelected: 1,
      roomsMenu: false,
    };
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
    this.TsRoomsSelected = parsetGetLocalStorage.Rooms;
    this.$emit('Rooms', this.TsRoomsSelected);
  },
  methods: {
    outSideRoomsMenu() {
      this.roomsMenu = false;
    },
    addPlus() {
      this.TsRoomsSelected++;
      this.$emit('Rooms', this.TsRoomsSelected);
    },
    minus() {
      this.TsRoomsSelected--;
      this.$emit('Rooms', this.TsRoomsSelected);
    },
    done() {
      this.roomsMenu = false;
      this.$emit('Rooms', this.TsRoomsSelected);
    },
  },
};
</script>
