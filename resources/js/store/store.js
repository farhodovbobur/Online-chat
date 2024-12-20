import {defineStore} from "pinia";
import {ref} from "vue";
import axios from "axios";

export const chatStore = defineStore("chat", () => {
    const auth = ref({});

    return {
        auth
    }
});

export const funcStore = defineStore("func", () => {
    const fileLink = (file) => `/assets/images/client/${file}`;

    return {
        fileLink
    }
});