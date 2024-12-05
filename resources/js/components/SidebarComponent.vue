<template>
  <nav id="sidebar" class="sidebar-wrapper sidebar-dark">
    <div class="sidebar-content">
      <div class="sidebar-brand  text-center">
        <img :src="func.fileLink('07.jpg')" class="size-20 rounded-full shadow dark:shadow-gray-700 mx-auto" alt="">
        <a href="/">
          <h5 class="mt-3 font-medium text-xl mb-0">{{ store.auth.first_name }} {{ store.auth.last_name }}</h5>
          <p class="mb-0">@{{ store.auth.username }}</p>
        </a>
      </div>

      <ul class="sidebar-menu border-t border-white/10" data-simplebar style="height: calc(100% - 70px);">
        <li>
          <a href=""><i class="mdi mdi-account-edit me-2"></i>Profile</a>
        </li>

        <li>
          <a href=""><i class="mdi mdi-cog me-2"></i>Settings</a>
        </li>

        <li>
          <a href=""><i class="mdi mdi-logout me-2"></i>Logout</a>
        </li>
        
      </ul>
    </div>
  </nav>
</template>

<script setup>
  import {funcStore, chatStore} from "../store/store.js";

  const store = chatStore()
  const func = funcStore();
</script>

<style scoped>

</style>