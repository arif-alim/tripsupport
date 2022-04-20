<style scoped>
.ts-menu {
  max-height: unset;
  overflow: unset;
}
.ts-parent {
  position: relative;
  width: 48%;
}
.ts-select {
  position: relative;
}
.ts-select-item {
  width: 100%;
  height: 40px;
  border: 1px solid gray;
  outline: none;
  padding: 0 10px;
  border-radius: 4px;
}
.ts-select .ts-arrow-down {
  position: absolute;
  right: 0;
  top: 8px;
}
/* .ts-content-wrapper .ts-menu {
  max-height: unset;
  overflow: unset;
} */
.ts-traveller-wrapper {
  background: #fff;
  padding: 10px;
  width: 320px;
}
.ts-content-wrapper {
  display: flex;
  flex-direction: column;
}
.ts-child-wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
.ts-child-item {
  width: 48%;
}

.ts-room-title {
  font-size: 16px;
  color: #000;
  font-weight: 600;
  margin-bottom: 10px;
}
label {
  font-size: 12px;
  color: #343a40;
  font-weight: 400;
  margin-bottom: 1px;
}
.ts-menu-list {
  width: 140px;
}
.done {
  color: #fff !important;
  text-transform: capitalize !important;
  height: 38px !important;
  font-size: 16px !important;
  font-weight: 500 !important;
}
::v-deep .select .v-input__slot {
  min-height: 30px !important;
  max-height: 40px !important;
  padding: 0 0 0 20px !important;
}
::v-deep .select .v-input__append-inner {
  margin-top: 8px !important;
}
::v-deep .v-text-field__slot input {
  cursor: pointer;
}
::v-deep .v-input__control {
  height: 60px !important;
}
::v-deep .vs__dropdown-toggle {
  height: 40px !important;
}
@media screen and (max-width: 600px) {
  .ts-menu {
    right: 0;
  }
  .ts-traveller-wrapper {
    /* width: 320px; */
  }
}
</style>

<template>
  <div>
    <v-text-field
      readonly
      hide-details
      solo
      :value="`${numberOfTravellers} ${$t('HOTELS.Travellers')}`"
      link
      append-icon="mdi-menu-down"
      @click="travellersMenu = true"
      @click:append="travellersMenu = true"
    >
    </v-text-field>
    <MenuDialog :showMenu="travellersMenu">
      <template #data>
        <div
          class="ts-traveller-wrapper"
          v-click-outside="outSideTravellersMenu"
        >
          <div
            class="ts-content-wrapper"
            v-for="(item, index) in travellers"
            :key="index"
          >
            <span class="ts-room-title"
              >{{ $t("HOTELS.Room") }} {{ index + 1 }}</span
            >
            <div class="d-flex">
              <div class="ts-parent">
                <label>{{ $t("HOTELS.Adults") }}</label>
                <div class="ts-select">
                  <v-icon class="ts-arrow-down">
                    mdi-menu-down
                  </v-icon>
                  <select
                    v-model="item.adults"
                    @change="emitDate"
                    class="ts-select-item"
                  >
                    <option
                      :value="adultItem"
                      v-for="(adultItem, index) in AdultsItems"
                      :key="index"
                      >{{ adultItem }}</option
                    >
                  </select>
                </div>
              </div>
              <div class="ts-parent ml-4">
                <label>{{ $t("HOTELS.Children") }}</label>
                <div class="ts-select">
                  <v-icon class="ts-arrow-down">
                    mdi-menu-down
                  </v-icon>
                  <select
                    v-model="item.children"
                    @change="
                      emitDate();
                      addChild(item);
                    "
                    class="ts-select-item"
                  >
                    <option
                      :value="ChildItem"
                      v-for="(ChildItem, index) in ChildrenItems"
                      :key="index"
                      >{{ ChildItem }}</option
                    >
                  </select>
                </div>
              </div>
            </div>
            <div class="ts-child-wrapper">
              <div
                class="ts-child-item "
                v-for="(child, index) in item.childrenAges"
                :key="index"
              >
                <label>
                  {{ $t("HOTELS.Child") }} {{ index + 1 }}
                  {{ $t("HOTELS.Age") }}</label
                >
                <div class="ts-select">
                  <v-icon class="ts-arrow-down">
                    mdi-menu-down
                  </v-icon>
                  <select
                    v-model="child.age"
                    @change="emitDate"
                    class="ts-select-item"
                  >
                    <option
                      :value="subChildItem"
                      v-for="(subChildItem, index) in ChildAgeItems"
                      :key="index"
                      >{{ subChildItem }}</option
                    >
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <v-btn class="done" color="#cc1012" block @click="done">{{
          $t("HOTELS.Done")
        }}</v-btn>
      </template>
    </MenuDialog>
  </div>
</template>

<script>
import MenuDialog from "../Common/MenuDialog.vue";
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
      AdultsItems: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
      ChildrenItems: [0, 1, 2, 3, 4],
      numberOfRooms: 1,
      travellersMenu: false,
      ChildAgeItems: ["<1", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
    };
  },
  watch: {
    Rooms: {
      handler: function(value) {
        this.travellers = [];
        this.numberOfRooms = value;
        let travellers = 1;
        while (travellers <= value) {
          this.travellers.push({});
          travellers++;
        }
      },
      deep: true,
    },
  },
  created() {
    this.travellers.push({});
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
  },
  methods: {
    outSideTravellersMenu() {
      this.travellersMenu = false;
    },
    emitDate() {
      this.$emit("numberOfTravellers", this.travellers);
    },
    addChild(value) {
      value.childrenAges = [];
      let child = 1;
      while (child <= value.children) {
        value.childrenAges.push({});
        child++;
      }
    },
    done() {
      this.travellersMenu = false;
      this.$emit("numberOfTravellers", this.travellers);
    },
  },
};
</script>
