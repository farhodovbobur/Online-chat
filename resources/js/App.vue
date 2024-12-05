<template>
  <div class="page-wrapper toggled">

    <SidebarComponent />

    <!-- Start Page Content -->
    <main class="page-content bg-gray-50 dark:bg-slate-800 min-h-screen flex flex-col">

      <TopHeaderComponent />

      <div class="container-fluid relative pt-10 pl-4 pr-10">
        <div>
          <!-- Start Content -->
          <div class="grid md:grid-cols-12 grid-cols-1 mt-6 gap-2">
            <div class="xl:col-span-3 lg:col-span-5 md:col-span-5">
              <UsersComponent :auth="props.auth" @select-user="openChat"/>
            </div>

            <div class="xl:col-span-9 lg:col-span-7 md:col-span-7">
              <ChatComponent :user="selectedUser" :auth="auth" v-if="selectedUser"/>
            </div>
          </div>
        </div>
        <!-- End Content -->
      </div><!--end container-->
    </main>
    <!--End page-content" -->
  </div>

</template>

<script setup>
import {onMounted, ref} from "vue";
import {chatStore} from "./store/store.js";

import UsersComponent from "./components/UsersComponent.vue";
import ChatComponent from "./components/ChatComponent.vue";
import TopHeaderComponent from "./components/TopHeaderComponent.vue";
import SidebarComponent from "./components/SidebarComponent.vue";


const props = defineProps({
  auth: {
    type: Object,
    required: true
  }
});

const store = chatStore()


const selectedUser = ref(null);

const openChat = (user) => {
  selectedUser.value = user;
};


onMounted(async () => {
  store.auth = props.auth
})

</script>

<style scoped>

</style>