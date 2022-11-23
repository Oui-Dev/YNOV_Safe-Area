<template>
  <div v-if="paginator.links.length > 3">
    <div class="flex flex-wrap gap-1 p-1 justify-end">
      <template v-for="(link, key) in paginator.links" :key="`link-${key}`">
        <Link class="px-4 py-3 text-sm leading-4 border rounded" :href="link.url" v-html="link.label"
          :class="{ 'bg-safearea-red text-white': link.active, 'hover:text-safearea-red': !link.active, 'hidden md:block': isDisplayed(key, link), 'disabled': isDisabled(key) }" />
      </template>
    </div>
  </div>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { createApp } from "vue";

const app = createApp({
});

app.component("Link", Link);


const props = defineProps({
  paginator: {
    type: Object,
    required: true,
  },
});


const isDisplayed = (key, link) => {
  return key > 0 && key < props.paginator.last_page + 1 && !link.active;
}
const isDisabled = (key) => {
  return (props.paginator.current_page - 1 == 0 && key == 0) || (props.paginator.current_page == props.paginator.last_page && key == props.paginator.last_page + 1);
}


</script>

<style lang="scss" scoped>
.disabled {
  @apply cursor-not-allowed pointer-events-none bg-gray-200 text-gray-500;
}
</style>