import './bootstrap';

import './hously/easy_background.js';
import './hously/plugins.init.js';
import './hously/jsvectormap.init.js'
import './hously/app.js';


import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


import { createApp } from 'vue';
import App from './App.vue';

createApp(App).mount('#chatApp');