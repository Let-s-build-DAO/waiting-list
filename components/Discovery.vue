<template>
  <div>
    <h1>
      Get premium website <span class="stanger-italics">design</span> starting from {{ websitePrice }}.
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
      <div>
        <img src="../assets/images/web-1.png" alt="">
      </div>
      <div>
        <img src="../assets/images/web-2.png" alt="">
      </div>
      <div>
        <img src="../assets/images/www-bg.png" alt="">
      </div>
    </div>

    <div class="mt-10">
      <nuxt-link to="/website-discovery">
        <button class="btn-primary flex items-center gap-4">
          <img src="../assets/images/phone-dark.svg" alt="">
          Talk to an expert
        </button>
      </nuxt-link>
    </div>
  </div>
</template>

<script setup lang="ts">
import useLocation from "~/composables/useLocation";
import type { UserIP } from "~/typings/global";
const websitePrice = ref("");
const togglePrices = () => {
  if (userLocation.value?.countryName === "Nigeria") {
    websitePrice.value = "₦150,000";
  } else if (userLocation.value?.countryName === "United States of America") {
    websitePrice.value = "$399";
  } else if (userLocation.value?.countryName === "Canada") {
    websitePrice.value = "C$399";
  } else {
    websitePrice.value = "$399";
  }
};

const userLocation = ref<UserIP>();
const { fetchUserLocation } = useLocation();

onMounted(async () => {
  const location = await fetchUserLocation();
  userLocation.value = location;
  togglePrices();
});
</script>
