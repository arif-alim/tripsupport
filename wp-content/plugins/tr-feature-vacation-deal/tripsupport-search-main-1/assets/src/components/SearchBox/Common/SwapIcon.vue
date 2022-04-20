<style lang="scss" scoped>
.ts-swap-icon {
  display: flex;
  align-items: center;
  margin: 0 -4px;
  z-index: 99;
  @media only screen and (max-width: 600px) {
    margin: -4px 4px;
    justify-content: flex-end;
  }
  span {
    width: 32px;
    height: 32px;
    padding: 5px;
    display: flex;
    background: #fff;
    border: 1px solid var(--primary-base);
    border-radius: 100%;
    cursor: pointer;
    z-index: 99;
    @media only screen and (max-width: 600px) {
      transform: rotate(90deg);
    }
  }
  svg {
    width: 100%;
    stroke: var(--primary-base);
  }
}
</style>

<template>
  <div class="ts-swap-icon">
    <span @click="$emit('click')">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"
        ></path>
      </svg>
    </span>
  </div>
</template>