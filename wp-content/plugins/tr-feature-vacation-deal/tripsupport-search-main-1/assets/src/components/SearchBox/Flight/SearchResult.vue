<style lang="scss" scoped>
.item {
  display: flex;
  width: 100%;
  align-items: center;
  padding: 8px;
  max-height: 64px;
  &-icon {
    margin-right: 8px;
    display: flex;
    svg {
      width: 20px;
      fill: rgb(92, 114, 156);
    }
  }
  &-text {
    color: #ababc4;
    display: flex;
    flex-direction: column;
    font-size: 13.5px;
    span:first-child {
      font-weight: 700;
      color: var(--primary-base);
    }
    span:last-child {
      color: rgb(68, 93, 143);
      font-weight: 300;
      opacity: 0.7;
    }
  }
  //   svg {
  //     fill: #ababc4;
  //   }
  &:hover,
  &.active {
    background: rgb(249, 250, 251);
    // .item-text {
    //   color: #0c0d25;
    // }
    // svg {
    //   fill: #007aff;
    // }
  }
}
</style>
<template>
  <div @click="$emit('click')" class="item" :class="{ active: active }">
    <span class="item-icon">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path
          fill-rule="evenodd"
          d="M3.64 14.26l2.86.95 4.02-4.02-8-4.59 1.16-1.16c.1-.1.26-.14.41-.1l9.3 2.98c1.58-1.58 3.15-3.2 4.77-4.75.31-.33.7-.58 1.16-.73.45-.16.87-.27 1.25-.34.55-.05.98.4.93.93-.07.38-.18.8-.34 1.25-.15.46-.4.85-.73 1.16l-4.75 4.78 2.97 9.29c.05.15 0 .29-.1.41l-1.17 1.16-4.57-8.02L8.8 17.5l.95 2.84L8.6 21.5l-2.48-3.62L2.5 15.4l1.14-1.14z"
          clip-rule="evenodd"
        ></path>
      </svg>
    </span>
    <div class="item-text">
      <span> {{ item.an }} ({{ item.ac }}) </span>
      <span>
        {{ item.cn }}
      </span>
    </div>
  </div>
</template>
<script>
export default {
  props: ["item", "active"],
};
</script>