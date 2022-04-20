<style scoped lang="scss">
.ts-button {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 385px;
  max-width: 100%;
  height: 38px;
  color: #fff;
  background: rgb(23, 55, 119);
  border-radius: 9999px;
  font-size: 0.845rem;
  font-weight: 500;
  padding: 8px 12px;
  outline: none;
  cursor: pointer;
  border: none;
}

.ts-button svg {
  margin-right: 8px;
  width: 20px;
  fill: #fff;
}
.active {
  background: var(--primary-base);
  color: #fff;
}
.ts-button:disabled {
  opacity: 0.5;
  pointer-events: none;
}
@media only screen and (max-width: 600px) {
  .ts-button {
    width: 100%;
  }
}
</style>

<template>
  <div>
    <button @click="$emit('search')" class="ts-button" :disabled="disabled">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path
          fill-rule="evenodd"
          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
          clip-rule="evenodd"
        ></path>
      </svg>
      <span> {{ buttonText }} </span>
    </button>
  </div>
</template>

<script>
export default {
  props: ["buttonText", "disabled"],
};
</script>
