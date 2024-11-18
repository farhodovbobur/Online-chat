<template>
  <!-- Start Content -->
  <div class="grid md:grid-cols-12 grid-cols-1 mt-6 gap-2">

    <div class="xl:col-span-3 lg:col-span-5 md:col-span-5">
      <UsersComponent :auth="props.auth" @select-user="openChat"/>
    </div>

    <div class="xl:col-span-9 lg:col-span-7 md:col-span-7">
      <ChatComponent :user="selectedUser" :auth="auth" v-if="selectedUser"/>
    </div>
  </div>
  <!-- End Content -->

</template>

<script setup>

  import UsersComponent from "./components/UsersComponent.vue";
  import ChatComponent from "./components/ChatComponent.vue";
  import {ref} from "vue";

  const props = defineProps({
    auth: {
      type: Object,
      required: true
    }
  });

  const selectedUser = ref(null);

  const openChat = (user) => {
    selectedUser.value = user;
  };

</script>

<style scoped>

</style>