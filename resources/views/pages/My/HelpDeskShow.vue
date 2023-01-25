<template>
  <p>{{ ticket.reference }}</p>
  <p>{{ ticket.title }}</p>
  <p>{{ ticket.description }}</p>
  <p>{{ ticket.type }}</p>
  <p>{{ ticket.status }}</p>
  <p>{{ ticket.created_at }}</p>
    <Link :href="route('my.auth.helpDesk.list')">&lt;Back</Link>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
const props = defineProps({
  ticket: {
    type: Object,
    required: true,
  },
});
console.log(props.ticket);
</script>

<style>

</style>