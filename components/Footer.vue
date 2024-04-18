<template>
  <div class="section-padding-x section-padding-y bg-[#1E1F21]">
    <div class="fixed right-[5%] top-[80%]">
      <img src="../assets/images/ic-call.svg" class="cursor-pointer" @click="openModal" alt="">
    </div>

    <div class="block md:flex gap-8">
      <div class="w-full md:w-1/2">
        <div class="title text-[#FFFFFF]">
          Work <br /><span class="stanger-italics">With</span> Us
        </div>
      </div>
      <div class="w-full md:w-1/2 mt-5 md:mt-0">
        <div class="block md:flex gap-8 items-center">
          <div class="w-full md:w-8/12">
            <input type="text" class="vuche-input" placeholder="Your name">
          </div>
          <div class="mt-5 md:mt-0">
            <nuxt-link to="/contact">
              <button class="btn-primary-w">Get started</button>
            </nuxt-link>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 text-[#FFFFFF] mt-10 gap-10">
          <div>
            <h6>
              Calgary AB, CA🇨🇦<br />
              <a href="mailto:hi@vuche.studio">hi@vuche.studio</a>
            </h6>

            <h4 class="mt-2">
              <a href="tel:+18257344811">+1 825-734-4811</a>
            </h4>
          </div>
          <div v-if="userLocation?.countryName === 'Nigeria'">
            <h6>
              Port Harcourt RV, NG🇳🇬<br />
              <a href="mailto:hi@vuche.studio">hi@vuche.studio</a>
            </h6>

            <h4 class="mt-2">
              <a href="tel:+2349156192063">+234 915-619-2063</a>
            </h4>
          </div>
        </div>

        <div class="mt-10 block md:flex lg:flex items-center gap-5">
          <div class="flex">
            <div class="soc-border">
              <a
                href="https://dribbble.com/vuche"
                target="blank"
                class="social-icons socials-logo flex justify-center"
              >
                <img
                  src="~/assets/images/ic-dribbble.svg"
                  alt=""
                />
              </a>
            </div>

            <div class="soc-border">
              <a
                href="https://www.instagram.com/vuchestudio/"
                target="blank"
                class="social-icons socials-logo flex justify-center"
              >
                <img
                  src="~/assets/images/ic-instagram.svg"
                  alt=""
                />
              </a>
            </div>

            <div class="soc-border">
              <a
                href="https://twitter.com/VucheStudio"
                target="blank"
                class="social-icons socials-logo flex justify-center"
              >
                <img
                  src="~/assets/images/ic-x-ft.svg"
                  alt=""
                />
              </a>
            </div>

            <div class="soc-border">
              <a
                href="https://wa.link/cjo7no"
                target="blank"
                class="social-icons socials-logo flex justify-center"
              >
                <img src="@/assets/images/ic-whatsapp.svg" alt="" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 padding-80 gap-8 text-[#FFFFFF]">
      <div>
        <h5>
          Design
        </h5>

        <p class="mt-4 c-white-0">
          Graphic design
        </p>
        <p class="mt-4 c-white-0">
          Content creation & design
        </p>
        <p class="mt-4 c-white-0">
          Product design (UX/UI/IxD)
        </p>
        <p class="mt-4 c-white-0">
          Website design.
        </p>
      </div>

      <div>
        <h5>
          Marketing
        </h5>

        <p class="mt-4 c-white-0">
          Content marketing
        </p>
        <p class="mt-4 c-white-0">
          Digital marketing/ads
        </p>
        <p class="mt-4 c-white-0">
          Influencer marketing
        </p>
        <p class="mt-4 c-white-0">
          Social media.
        </p>
      </div>


      <div>
        <h5>
          Motion Design and Film
        </h5>

        <p class="mt-4 c-white-0">
          2D & 3D Animation
        </p>
        <p class="mt-4 c-white-0">
          Video edits and post production
        </p>
        <p class="mt-4 c-white-0">
          Animation films and ads.
        </p>
      </div>


      <div>
        <h5>
          Branding
        </h5>

        <p class="mt-4 c-white-0">
          Brand design
        </p>
        <p class="mt-4 c-white-0">
          Brand management
        </p>
        <p class="mt-4 c-white-0">
          Corporate brand comms.
        </p>
      </div>
    </div>

    <div class="padding-80 text-[#FFFFFF]">
      <div class="block md:flex justify-between">
        <div class="big-subheader">
          © {{ new Date().getFullYear() }} VUCHE STUDIO • <nuxt-link to="/terms">TERMS</nuxt-link> • <nuxt-link to="/privacy">PRIVACY POLICY</nuxt-link>
        </div>

        <div class="small-paragraph flex items-center mt-6 md:mt-0">
          <a href="#" @click.prevent="openNewTab">
            A CHIGISOFT CREATION
          </a>
        </div>
      </div>
    </div>
  </div>

  <div v-if="modal">
    <ModalsCall @close="modal = false" />
  </div>
</template>

<script setup lang="ts">
import useLocation from "~/composables/useLocation";
import type { UserIP } from "~/typings/global";
const userLocation = ref<UserIP>();
const { fetchUserLocation } = useLocation();

onMounted(async () => {
  const location = await fetchUserLocation();
  userLocation.value = location;
});
const modal = ref(false);
const openModal = () => {
  modal.value = !modal.value;
}
const openNewTab = () => {
  const pageTitle = 'Vuche studio'; // Replace 'Your Page Name' with the actual name of your page
  const queryParams = new URLSearchParams({ pageName: pageTitle }).toString();
  const newTab = window.open('https://chigisoft.ca/edge?' + queryParams, '_blank');
  newTab?.focus();
};
</script>

<style scoped>

</style>