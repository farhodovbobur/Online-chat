<template>
  <ChatComponent />
</template>

<script setup>
  import { ref } from "vue";
  import ChatComponent from "./components/ChatComponent.vue";

  const props = defineProps(['auth']);

</script>