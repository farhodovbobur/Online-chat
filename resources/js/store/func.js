import {defineStore} from "pinia";

export const funcStore = defineStore("func", () => {
    const fileLink = (file) => `/assets/images/client/${file}`;

    return {
        fileLink
    }
});