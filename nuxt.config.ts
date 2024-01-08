// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  // extends: ['github:jeremy202/Dumo-starter-kit',],
  typescript: {
    strict: true,
  },
  app: {
    head: {
      title: 'Hushhomes Academy',
      link: [
        // {
        //   rel: 'stylesheet',
        //   href: 'https://cdn.jsdelivr.net/gh/jeremy202/Dumo-starter-kit/assets/css/style.css',
        // },
        { rel:'icon', type:'image/x-icon', href:'/images/favicon.png' },
        { rel: 'stylesheet', href: 'https://use.typekit.net/aox4oht.css' },
        { rel:'stylesheet', href:'https://use.typekit.net/zvm2dli.css' }
      ],
      meta: [
        { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      ],
    },
  },
  css: ['@/assets/css/style.css', '@/assets/css/main.css'],
  modules: [
    'nuxt-snackbar',
    '@nuxtjs/tailwindcss',
    '@pinia/nuxt',
    '@vueuse/nuxt'
  ],
  // snackbar: {
  //   top: true,
  //   right: true,
  //   duration: 2000,
  //   success: '#24b57a',
  //   error: '#c33434',
  // },
  runtimeConfig: {
    public: {
      apiBaseUrl: '',
    },
  },
  imports: {
    dirs: ['store'], // auto import from store directory
    autoImport: true
  },
  devtools: {
    enabled: true,
  },
})

