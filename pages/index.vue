<template>
  <div>
    <Nav />
  </div>

  <div>
    <div class="banner-container">
      <div class="bg-banner">
        <img src="../assets/images/bg-hero-min.jpg" alt="">
      </div>
    </div>

    <div class="contact-section">
      <div class="block md:flex">
        <div class="w-full md:w-8/12">
          <div class="section-border-right section-padding-small h-full">
            <h1 class="text-[#1C1844]">
              Providing unmatched Engineering Solutions and Consulting Services to make your business more successful.
            </h1>
          </div>
        </div>
        <div class="w-full md:w-4/12">
          <div class="section-padding-small h-full">
            <p>
              Get Technology & Knowledge-enhanced Engineering, and Telecommunication Services in one go…
            </p>

            <div class="flex mt-6">
              <div class="w-full">
                <nuxt-link to="/contact">
                  <button class="btn-xlg-responsive bg-[#101010] text-[#FFFFFF] w-full">
                    Contact us
                  </button>
                </nuxt-link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="banner-container">
      <div class="bg-about">
        <div class="flex justify-end">
          <div class="w-full md:w-5/12">
            <div class="regular-card bg-[#FFFFFF]">
              <h2 class="text-[#1C1844]">
                Who we are
              </h2>
              <p class="mt-6">
                TUSORE LIMITED is an indigenous Engineering, Procurement, Construction, Installation, & Commissioning company that have delivered turnkey projects over the past <span class="pt-sans-pro-bold">twenty-seven (27) years</span>.
                <br /><br />
                At the heart of our strategy lies our commitment to function as your trusted business partner, in the most cost effective, efficient and reliable manner to drive your success.
              </p>

              <div class="mt-6">
                <nuxt-link to="/about-us" class="flex text-[#D50F0F] pt-sans-pro-demi items-center">
                  Learn more <img src="../assets/images/right-arrow-red.svg" class="ml-2" alt="">
                </nuxt-link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- empty section -->
    <div class="contact-section">
      <div class="block md:flex">
        <div class="w-full md:w-3/12 section-border-right section-padding-small">
          
        </div>
        <div class="w-full md:w-9/12">
          <div class="block md:flex">
            <div class="w-full md:w-5/12 section-border-right section-padding-small">
          
            </div>
            <div class="w-full md:w-7/12 section-border-right section-padding-small">
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-border-bottom">
      <div class="block md:flex">
        <div class="w-full md:w-3/12 section-border-right section-padding-small relative bg-[#F7F7F7] res-border-bottom">
          <h1 class="text-[#1C1844]">
            Our <br />Services
          </h1>

          <div class="relative md:absolute bottom-0 md:bottom-5 section-padding-small hidden md:block">
            <nuxt-link to="/services" class="flex text-[#D50F0F] pt-sans-pro-demi items-center">
              See all <img src="../assets/images/right-arrow-red.svg" class="ml-2" alt="">
            </nuxt-link>
          </div>
        </div>
        <div class="w-full md:w-9/12">
          <div class="block md:flex section-border-bottom">
            <div class="w-full md:w-5/12 section-border-right section-padding-small">
              <div class="bg-services-1 h-[400px] flex">
                <div class="mt-auto">
                  <h2 class="text-[#FFFFFF]">
                    Onshore Pipeline Laying ( Laying of Oil & Gas Pipeline, Pipeline Fabrication/Construction).
                  </h2>
                </div>
              </div>
            </div>
            <div class="w-full md:w-7/12 section-border-right section-padding-small">
              <div class="bg-services-2 h-[400px] flex">
                <div class="mt-auto">
                  <h2 class="text-[#FFFFFF]">
                    Major Construction Services (Installation & Upgrade of Onshore & Offshore Production & Process Facilities.
                  </h2>
                </div>
              </div>
            </div>
          </div>

          <!--  -->
          <div class="block md:flex">
            <div class="w-full md:w-7/12 section-border-right section-padding-small">
              <div class="bg-services-3 h-[400px] flex">
                <div class="mt-auto">
                  <h2 class="text-[#FFFFFF]">
                    Major Mechanical and Civil Engineering Construction.
                  </h2>
                </div>
              </div>
            </div>
            <div class="w-full md:w-5/12 section-border-right section-padding-small">
              <div class="bg-services-4 h-[400px] flex">
                <div class="mt-auto">
                  <h2 class="text-[#FFFFFF]">
                    Telecommunications Engineering
                  </h2>
                </div>
              </div>
            </div>
          </div>

          <div class="relative md:absolute bottom-0 md:bottom-5 section-padding-small block md:hidden">
            <nuxt-link to="/services" class="flex text-[#D50F0F] pt-sans-pro-demi items-center">
              See all <img src="../assets/images/right-arrow-red.svg" class="ml-2" alt="">
            </nuxt-link>
          </div>
        </div>
      </div>
    </div>

    <div class="">
      <div class="block md:flex">
        <div class="w-full md:w-3/12 section-border-right section-padding-small">
          
        </div>
        <div class="w-full md:w-9/12">
          <div class="block md:flex">
            <div class="w-full md:w-7/12 section-border-right section-padding-small">
          
            </div>
            <div class="w-full md:w-5/12 section-border-right section-padding-small">
              
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="contact-section section-padding-small">
      <h1 class="text-[#1C1844]">
        Our Clients
      </h1>

      <div class="grid grid-cols-3 md:grid-cols-7 gap-6 mt-5">
        <div class="logo-container">
          <img src="../assets/images/agpc.png" alt="">
        </div>
        <div class="logo-container">
          <img src="../assets/images/img_total.png" alt="">
        </div>
        <div class="logo-container">
          <img src="../assets/images/img_agip.png" alt="">
        </div>
        <div class="logo-container">
          <img src="../assets/images/img_shell.png" alt="">
        </div>
        <div class="logo-container">
          <img src="../assets/images/img_aviat.png" alt="">
        </div>
        <div class="logo-container">
          <img src="../assets/images/img_airtel.png" alt="">
        </div>
        <div class="logo-container">
          <img src="../assets/images/img_bp.png" alt="">
        </div>
        <div class="logo-container">
          <img src="../assets/images/img_nlng.png" alt="">
        </div>
        <div class="logo-container">
          <img src="../assets/images/img_seplat.png" alt="">
        </div>
        <div class="logo-container">
          <img src="../assets/images/img_mobil.png" alt="">
        </div>
        <div class="logo-container">
          <img src="../assets/images/img_belema.png" alt="">
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
.logo-container {
  padding: 20px;
  background: #F7F7F7;
  display: flex;
  justify-content: center;
}
.logo-container img {
  object-fit: contain
}
.regular-card {
  padding: 80px;
}
.bg-banner {
  width: 100%;
}
@media (max-width:821px) {
  .regular-card {
    padding: 20px;
  }
  .res-border-bottom {
    border-bottom: 1px solid #101010;
  }
}
</style>
