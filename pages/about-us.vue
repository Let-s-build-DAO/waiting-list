<template>
  <div>
    <Nav />
  </div>

  <div>
    <div class="block md:flex section-border-bottom">
      <div class="w-full md:w-7/12 relative">
        <div class="section-padding-small section-border-right h-full">
          <p>
            <span class="text-[#D50F0F]">••</span> Our Company
          </p>
          <div class="title text-[#1C1844] mt-5">
            … Unmatched Engineering Solutions for Africa’s advancement.
          </div>
        </div>

        <div class="relative md:absolute bottom-0 md:bottom-5 section-padding-small">
          <nuxt-link to="/contact" class="flex text-[#D50F0F] pt-sans-pro-demi items-center">
            Contact us <img src="../assets/images/right-arrow-red.svg" class="ml-2" alt="">
          </nuxt-link>
        </div>
      </div>

      <div class="w-full md:w-5/12">
        <div class="section-padding-small">
          <div class="bg-banner">
            <img src="../assets/images/bg-about-us.jpg" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="block md:flex section-border-bottom">
      <div class="w-full md:w-1/2 section-border-right">
        <div class="grid grid-cols-1 md:grid-cols-2 h-full">
          <div class="bg-[#D95959] section-padding-small">
            <h2 class="text-[#FFFFFF]">
              Our solid track record spans over twenty-seven (27) years
            </h2>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2 section-border-right">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 h-full section-padding-small mb-12">
          <div class="">
            <p>
              Our core philosophy revolves around establishing a true partnership with our clients. We go beyond the traditional role of service providers, aiming to be your reliable ally in achieving your business goals. Our unwavering commitment is to drive your success by offering cost-effective, efficient, and reliable solutions.
            </p>
          </div>
          <div class="">
            <p>
              With a team of seasoned professionals and a wealth of industry expertise, we are equipped to handle diverse projects across multiple sectors. Whether it’s engineering design, procurement management, construction execution, installation services, or commissioning processes, we have the skills and experience to deliver exceptional results.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="section-padding-small section-border-bottom">
      <div class="bg-banner">
        <video width="100%" height="100" autoplay muted loop>
          <source src="../assets/images/tusore_2.mp4" type="video/mp4">
        </video>
      </div>
    </div>


    <div class="section-border-bottom">
      <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="section-border-right section-padding-small">
          <p>
            When you choose TUSORE LIMITED, you gain a partner who is invested in your success. We are committed to open communication, transparency, and delivering projects on time and within budget. Our collaborative approach fosters a strong working relationship, enabling us to overcome challenges together and achieve remarkable outcomes.
          </p>
        </div>
        <div class="section-padding-small">
          <p>
            We invite you to explore our comprehensive range of services and discover how TUSORE LIMITED can add value to your projects. Join us in forging a successful partnership, where innovation, reliability, and cost-effectiveness converge to drive your business forward.
          </p>

          <div class="mt-8">
            <nuxt-link to="/services" class="flex text-[#D50F0F] pt-sans-pro-demi items-center">
              Explore our services <img src="../assets/images/right-arrow-red.svg" class="ml-2" alt="">
            </nuxt-link>
          </div>
        </div>
      </div>
    </div>
    <div>
      <Footer />
    </div>
  </div>
</template>

<script></script>

<style scoped>
.banner-container {
  padding: 20px;
}
</style>
