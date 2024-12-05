import './bootstrap';

import './hously/easy_background.js';
import './hously/plugins.init.js';
import './hously/jsvectormap.init.js'
import './hously/app.js';


import { createApp } from 'vue';
import { createPinia } from 'pinia'
import App from "./App.vue";

const pinia = createPinia()


const app = createApp({});
app.component('app', App).use(pinia).mount('#app');
