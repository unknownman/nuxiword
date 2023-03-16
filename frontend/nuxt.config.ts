import { defineNuxtConfig } from 'nuxt/config'

// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
    modules: [
        '@unocss/nuxt',
        '@vueuse/nuxt',

    ],
    runtimeConfig: {
        public: {
            wpUrl: process.env.WP_URL,
        },
        // wpUrl: process.env.WP_URL,
    },
})
