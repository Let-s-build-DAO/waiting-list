export default defineNuxtConfig({
  typescript: {
    strict: true,
  },
  app: {
    head: {
      title: 'Vuche Studio',
      link: [
        { rel: 'icon', type: 'image/x-icon', href: '/favicon.png' },
        { rel: 'stylesheet', href: 'https://use.typekit.net/aox4oht.css' },
      ],
      meta: [
        { charset: 'utf-8' },
        { name: 'viewport', content: 'width=device-width, initial-scale=1' },
        {
          hid: 'description',
          name: 'description',
          content:
            'We are a creative agency (experience design studio) on a mission to connect brands to your customers with engaging content that drives growth and increases revenue — branding, design, website development, animation, marketing, and everything in between.',
        },
        { hid: 'robots', name: 'robots', content: 'index, follow' },
        {
          hid: 'keywords',
          name: 'keywords',
          content:
            'marketing',
        },
        { hid: 'theme-color', name: 'theme-color', content: 'ffffff' },
        { content: 'website', property: 'og:type' },
        { content: 'en_US', property: 'og:locale' },
        {
          content: 'https://vuchestudio.com/assets/images/og_image.jpg',
          property: 'og:image',
        },
        { content: 'image/png', property: 'og:image:type' },
        { content: '1200', property: 'og:image:width' },
        { content: '630', property: 'og:image:height' },
        {
          content: 'Vuche Studio',
          property: 'og:site_name',
        },
        {
          content: 'We are really good at growing companies and ideas with creative content design & marketing.',
          property: 'og:description',
        },
        // { content: 'https://www.facebook.com/tusore', property: 'og:see_also' },
        // {
        //   hid: 'facebook:description',
        //   name: 'facebook:description',
        //   content: `TUSORE LIMITED is an indigenous Engineering, Procurement, Construction, Installation, & Commissioning company that have delivered turnkey projects over the past twenty-seven (27) years.`,
        // },
      ],
      script: [
        {
          hid: 'tawkto', // A unique identifier for this script block
          src: 'https://embed.tawk.to/63da6062474251287910dd75/1go6gh0p6',
          defer: true,
          charset: 'UTF-8',
          crossorigin: 'anonymous'
        }
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
});
