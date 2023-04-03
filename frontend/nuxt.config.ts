import { defineNuxtConfig } from 'nuxt/config'

// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
    modules: [
        '@unocss/nuxt',
        'nuxt-icon',
        'nuxt-gtag',
        'nuxt-headlessui'
    ],
    gtag: {
        id: 'G-XXXXXXXXXX'
    },
    headlessui: {
        prefix: 'Hui'
    },
    runtimeConfig: {
        public: {
            wpUrl: process.env.WP_URL,
        },
        // wpUrl: process.env.WP_URL,
    },
    vite: {
        server: {
            hmr: {
                clientPort: 24678,
                port: 24678
            },
        }
    }
})
