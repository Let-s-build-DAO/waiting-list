export default defineNuxtConfig({
  typescript: {
    strict: true,
  },
  app: {
    head: {
      title: 'Tusore',
      link: [
        { rel: 'icon', type: 'image/x-icon', href: '/favicon.png' },
        { rel: 'stylesheet', href: 'https://use.typekit.net/lsk7sna.css' },
      ],
      meta: [
        { charset: 'utf-8' },
        { name: 'viewport', content: 'width=device-width, initial-scale=1' },
        {
          hid: 'description',
          name: 'description',
          content:
            'Providing unmatched Engineering Solutions and Consulting Services to make your business more successful.',
        },
        { hid: 'robots', name: 'robots', content: 'index, follow' },
        {
          hid: 'keywords',
          name: 'keywords',
          content:
            'construction',
        },
        { hid: 'theme-color', name: 'theme-color', content: 'ffffff' },
        { content: 'website', property: 'og:type' },
        { content: 'en_US', property: 'og:locale' },
        {
          content: 'https://tusore.com/assets/images/og_image.jpg',
          property: 'og:image',
        },
        { content: 'image/png', property: 'og:image:type' },
        { content: '1200', property: 'og:image:width' },
        { content: '630', property: 'og:image:height' },
        {
          content: 'Tusore',
          property: 'og:site_name',
        },
        {
          content: 'Get Technology & Knowledge-enhanced Engineering, and Telecommunication Services in one go…',
          property: 'og:description',
        },
        { content: 'https://www.facebook.com/tusore', property: 'og:see_also' },
        {
          hid: 'facebook:description',
          name: 'facebook:description',
          content: `TUSORE LIMITED is an indigenous Engineering, Procurement, Construction, Installation, & Commissioning company that have delivered turnkey projects over the past twenty-seven (27) years.`,
        },
      ],
    },
  },
  css: ['@/assets/css/style.css', '@/assets/css/main.css'],
  modules: [
    'nuxt-snackbar',
    '@nuxtjs/tailwindcss',
    '@pinia/nuxt',
    '@vueuse/nuxt',
    '@dargmuesli/nuxt-cookie-control',
  ],
  devtools: {
    enabled: true,
  },
  cookieControl: {
    colors: {
      checkboxActiveBackground: '#00A34A',
    },
    closeModalOnClickOutside: true,
    cookies: {
      necessary: [
        {
          description: {
            en: 'We use our own cookies and third-party cookies so that we can display this website correctly and better understand how this website is used, with a view to improving the services we offer. A decision on cookie usage permissions can be changed anytime using the cookie button that will appear after a selection has been made on this banner.',
          },
          name: {
            en: 'Necessary Cookie',
          },
          targetCookieIds: ['NEC'],
        },
      ],
      optional: [],
    },
    isCookieIdVisible: false,
    isIframeBlocked: true,
    locales: ['en', 'de'],
    localeTexts: {
      de: {
        iframeBlocked: 'Bitte funktionale Cookies aktivieren:',
      },
    },
  },
});
