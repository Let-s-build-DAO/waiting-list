export default defineNuxtConfig({
  typescript: {
    strict: true,
  },
  app: {
    head: {
      title: 'Lets Build DAO',
      link: [
        { rel: 'icon', type: 'image/x-icon', href: '/favicon.png' },
        {
          rel: 'preconnect',
          href: 'https://fonts.googleapis.com'
        },
        {
          rel: 'preconnect',
          href: 'https://fonts.gstatic.com',
          crossorigin: ''
        },
        {
          rel: 'stylesheet',
          href: 'https://fonts.googleapis.com/css2?family=Bangers&display=swap'
        }
  
      ],
      meta: [

      ],
      script: [
      ]
    },
  },
  css: ['@/assets/css/style.css', '@/assets/css/main.css'],
  modules: [
    'nuxt-snackbar',
    '@nuxtjs/tailwindcss',
    '@pinia/nuxt',
    '@vueuse/nuxt',
  ],
  devtools: {
    enabled: true,
  },
  runtimeConfig: {
    public: {
      TOKEN: process.env.TOKEN,
    },
  },
});
