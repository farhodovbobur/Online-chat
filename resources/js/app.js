import './bootstrap';

import './hously/easy_background.js';
import './hously/plugins.init.js';
import './hously/jsvectormap.init.js'
import './hously/app.js';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import App from "./App.vue";
import { createApp } from 'vue';

// const appElement = document.getElementById('chatApp');
//
// if (appElement) {
//     const auth = JSON.parse(appElement.dataset.auth || '{}');
//     const partner = JSON.parse(appElement.dataset.partner || '{}');
//
//     createApp(App, { auth, partner }).mount('#chatApp');
// }

createApp(App).mount('#chatApp');
