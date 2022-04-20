<style scoped>
.ts-menu-wrapper {
  background: #fff;
}
::v-deep .v-text-field__slot input {
  cursor: pointer;
}
.ts-room-item {
  width: 320px;
  text-align: center;
  font-size: 16px;
  padding: 10px 0;
}
</style>

<template>
  <div>
    <v-text-field
      readonly
      hide-details
      :value="TsRoomsSelected"
      solo
      append-icon="mdi-menu-down"
      v-click-outside="outSideRoomsMenu"
      @click="roomsMenu = !roomsMenu"
      @click:append="roomsMenu = roomsMenu"
    />
    <MenuDialog :showMenu="roomsMenu">
      <template #data>
        <v-list class="ts-room-item">
          <v-list-item
            v-for="(item, index) in TsRoomsDisplay"
            :key="item"
            link
            @click="ChangeSeleted(item, index)"
          >
            <v-list-item-title>{{ item }}</v-list-item-title>
          </v-list-item>
        </v-list>
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
    children: {
      defualt: 0,
    },
  },
  data() {
    return {
      TsRooms: [1, 2, 3, 4],
      TsRoomsDisplay: [
        `1 ${this.$t("HOTELS.Rooms")}`,
        `2 ${this.$t("HOTELS.Rooms")}`,
        `3 ${this.$t("HOTELS.Rooms")}`,
        `4 ${this.$t("HOTELS.Rooms")}`,
      ],
      TsRoomsSelected: `1 ${this.$t("HOTELS.Rooms")}`,
      roomsMenu: false,
    };
  },
  methods: {
    outSideRoomsMenu() {
      this.roomsMenu = false;
    },
    ChangeSeleted(item, index) {
      this.TsRoomsSelected = item;
      this.$emit("Rooms", this.TsRooms[index]);
    },
  },
};
</script>
