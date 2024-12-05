<template>

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
        <a href=""><i class="mdi mdi-chart-bell-curve-cumulative me-2"></i>Dashboard</a>
      </li>

      <li>
        <a href=""><i class="mdi mdi-home-city me-2"></i>Explore Properties</a>
      </li>

      <li>
        <a href=""><i class="mdi mdi-home-heart me-2"></i>Favorite Properties</a>
      </li>

      <li>
        <a href=""><i class="mdi mdi-home-plus me-2"></i>Add Properties</a>
      </li>

      <li>
        <a href=""><i class="mdi mdi-chat-outline me-2"></i>Chat</a>
      </li>

      <li class="sidebar-dropdown">
        <a href="javascript:void(0)"><i class="mdi mdi-account-edit me-2"></i>User Profile</a>
        <div class="sidebar-submenu">
          <ul>
            <li><a href="">Profile</a></li>
            <li><a href="">Profile Settings</a></li>
          </ul>
        </div>
      </li>

      <li class="sidebar-dropdown">
        <a href="javascript:void(0)"><i class="mdi mdi-post-outline me-2"></i>Blog</a>
        <div class="sidebar-submenu">
          <ul>
            <li><a href="">Blogs</a></li>
            <li><a href="">Blog Detail</a></li>
          </ul>
        </div>
      </li>

      <li class="sidebar-dropdown">
        <a href="javascript:void(0)"><i class="mdi mdi-file-document-outline me-2"></i>Pages</a>
        <div class="sidebar-submenu">
          <ul>
            <li><a href="starter.html">Starter</a></li>
            <li><a href="faqs.html">FAQs</a></li>
            <li><a href="pricing.html">Pricing</a></li>
            <li><a href="review.html">Review</a></li>
            <li><a href="privacy.html">Privacy Policy</a></li>
            <li><a href="terms.html">Term & Condition</a></li>
          </ul>
        </div>
      </li>

      <li class="sidebar-dropdown">
        <a href="javascript:void(0)"><i class="mdi mdi-login me-2"></i>Authentication</a>
        <div class="sidebar-submenu">
          <ul>
            <li><a href="login.html">Login</a></li>
            <li><a href="signup.html">Signup</a></li>
            <li><a href="signup-success.html">Signup Success</a></li>
            <li><a href="reset-password.html">Reset Password</a></li>
            <li><a href="lock-screen.html">Lockscreen</a></li>
          </ul>
        </div>
      </li>

      <li class="sidebar-dropdown">
        <a href="javascript:void(0)"><i class="mdi mdi-layers me-2"></i>Miscellaneous</a>
        <div class="sidebar-submenu">
          <ul>
            <li><a href="comingsoon.html">Comingsoon</a></li>
            <li><a href="maintenance.html">Maintenance</a></li>
            <li><a href="error.html">Error</a></li>
            <li><a href="thankyou.html">Thank You</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>

</template>

<script setup>
  import {funcStore, chatStore} from "../store/store.js";

  const store = chatStore()
  const func = funcStore();
</script>

<style scoped>

</style>