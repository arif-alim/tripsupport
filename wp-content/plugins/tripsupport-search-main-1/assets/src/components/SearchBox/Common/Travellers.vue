<style scoped>
section {
  position: relative;
}
.wrapper {
  padding: 20px;
  background: #fff;
  text-align: center;
  width: 320px;
}
.counter-wrapper {
  display: flex;
  align-items: center;
  width: 100%;
  height: 42px;
  border: 1px solid #e1e1e1;
  margin: 10px 0;
}
.counter {
  width: 60%;
  background: #fff;
  margin: 0 auto;
  text-align: center;
}
.counter-buttons {
  background: #e1e1e1;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0;
  padding: 0;
  height: 100%;
  width: 42px;
  cursor: pointer;
  font-size: 24px;
  font-weight: 700;
  outline: 0;
  box-shadow: none;
}
.counter-buttons:disabled {
  color: #a2a2a2;
}

.done {
  color: #fff !important;
  text-transform: capitalize !important;
  height: 38px !important;
  font-size: 16px !important;
  font-weight: 500 !important;
  cursor: pointer !important;
}
::v-deep .v-input__slot {
  padding: 0 5px 0 20px !important;
}
::v-deep .v-text-field__slot input {
  color: #000 !important;
  font-weight: bold !important;
}
::v-deep .v-text-field__slot input {
  cursor: pointer;
}
</style>

<template>
  <section>
    <v-text-field
      readonly
      hide-details
      :value="` ${getPassenger} ${$t('Travellers')}`"
      solo
      class="calendar"
      append-icon="mdi-menu-down"
      @click="travellerMenu = true"
      @click:append="travellerMenu = true"
    >
    </v-text-field>
    <MenuDialog :showMenu="travellerMenu">
      <template #data>
        <div class="wrapper" v-click-outside="onClickOutside">
          <h3>
            {{ $t("Travellers") }}
            <span v-if="adult == 8 || child == 8 || infant == 8"
              >({{ $t("Max") }} 8)</span
            >
          </h3>
          <div class="counter-wrapper">
            <button
              @click="adultMinus"
              class="counter-buttons"
              :disabled="adult == 0"
            >
              -
            </button>
            <div class="counter">
              <b>{{ adult }}</b> {{ $t("Adults") }}
            </div>
            <button
              @click="adultPlus"
              class="counter-buttons"
              :disabled="adult == 8 || adult + child == 8"
            >
              +
            </button>
          </div>
          <div class="counter-wrapper">
            <button
              @click="childrenMinus"
              class="counter-buttons"
              :disabled="child <= 0"
            >
              -
            </button>
            <div class="counter">
              <b>{{ child }}</b> {{ $t("Child") }} (2-11)
            </div>
            <button
              @click="childrenPlus"
              class="counter-buttons"
              :disabled="child == 8 || adult + child == 8"
            >
              +
            </button>
          </div>
          <div class="counter-wrapper">
            <button
              @click="infantMinus"
              class="counter-buttons"
              :disabled="infant == 0"
            >
              -
            </button>
            <div class="counter">
              <b>{{ infant }}</b> {{ $t("Infant") }} (0-2)
            </div>
            <button
              @click="infantPlus"
              class="counter-buttons"
              :disabled="infant == 8 || adult <= infant"
            >
              +
            </button>
          </div>
          <v-btn class="done" color="#cc1012" block @click="done">{{
            $t("Done")
          }}</v-btn>
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
  methods: {
    onClickOutside() {
      this.travellerMenu = false;
    },
    adultPlus() {
      if (this.adult >= 0 && this.adult + this.child < 8) {
        this.adult = this.adult + 1;
        this.passenger = this.adult + this.child + this.infant;
      }
      this.$emit("Travellers", this.adult, this.infant, this.child);
    },
    adultMinus() {
      if (this.adult > 0) {
        this.adult = this.adult - 1;
        if (this.adult < this.infant) {
          this.infant = this.adult;
          this.passenger = this.adult + this.child + this.infant;
        }
      }
      this.$emit("Travellers", this.adult, this.infant, this.child);
    },
    childrenMinus() {
      if (this.child > 0) {
        this.child = this.child - 1;
        this.passenger = this.adult + this.child + this.infant;
        this.$emit("Travellers", this.adult, this.infant, this.child);
      }
    },
    childrenPlus() {
      if (this.child >= 0 && this.adult + this.child < 8) {
        this.child = this.child + 1;
        this.passenger = this.adult + this.child + this.infant;
      }
      this.$emit("Travellers", this.adult, this.infant, this.child);
    },
    infantMinus() {
      if (this.infant > 0) {
        this.infant = this.infant - 1;
        this.passenger = this.adult + this.child + this.infant;
      }
      this.$emit("Travellers", this.adult, this.infant, this.child);
    },
    infantPlus() {
      if (this.infant >= 0) {
        if (this.adult > this.infant) {
          this.infant = this.infant + 1;
          this.passenger = this.adult + this.child + this.infant;
        }
      }
      this.$emit("Travellers", this.adult, this.infant, this.child);
    },
    done() {
      this.travellerMenu = false;
      this.$emit("Travellers", this.adult, this.infant, this.child);
    },
  },
};
</script>
