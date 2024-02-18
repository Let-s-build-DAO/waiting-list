<template>
  <div class="padding-top-80">
    <div class="contact-section section-padding-small">
      <div class="block md:flex">
        <div class="w-full md:w-8/12">
          <div class="block md:flex">
            <div class="w-full md:w-4/12">
              <img src="../assets/images/tusore-logo.svg" alt="">
            </div>
            <div class="w-full md:w-8/12 mt-6 md:mt-0">
              <p class="pt-sans-pro-demi">
                Our Offices
              </p>

              <div class="grid grid-cols-1 md:grid-cols-2 mt-4 gap-6 md:gap-10">
                <div>
                  <div class="small-paragraph">
                    <span class="text-[#D50F0F]">••</span> Port Harcourt
                    <!-- <br />
                    <a href="tel:2348025402930">Phone: 0802 540 2930.</a> -->
                    <br />
                    <a href="mailto:nfo@tusore.com">E-mail: info@tusore.com</a>
                  </div>
                </div>
                <div>
                  <div class="small-paragraph">
                    <span class="text-[#D50F0F]">••</span> Lagos
                    <!-- <br />
                    <a href="tel:2348091015011">Phone: 0809 101 5011.</a> -->
                    <br />
                    <a href="mailto:nfo@tusore.com">E-mail: info@tusore.com</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section-border-bottom section-padding-small">
      <div class="block md:flex justify-between">
        <div class="small-paragraph">
          © {{ new Date().getFullYear() }} TUSORE LTD | All rights reserved.
        </div>

        <div class="small-paragraph flex items-center mt-6 md:mt-0">
          <img src="../assets/images/globe-c.svg" class="mr-2" alt="">
          <a href="#" @click.prevent="openNewTab">
            Chigisoft
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';

const openNewTab = () => {
  const pageTitle = 'Tusore'; // Replace 'Your Page Name' with the actual name of your page
  const queryParams = new URLSearchParams({ pageName: pageTitle }).toString();
  const newTab = window.open('https://chigisoft.com/edge?' + queryParams, '_blank');
  newTab?.focus();
};
</script>