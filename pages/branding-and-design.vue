<template>
  <div>
    <Nav />
  </div>
  <section class="banner-container section-padding-x">
    <div class="flex">
      <div class="w-full">
        <p>
          <nuxt-link to="/">Home</nuxt-link> » <span class="scandia-medium">Branding & Design</span>
        </p>
        <h1 class="mt-3">
          Branding <span class="stanger-italics">and</span> design services.
        </h1>

        <div class="mt-10 relative bg-fine section-padding-y section-padding-x">
          <div class="big-paragraph w-full md:w-5/12 text-[#FFFFFF]">
            we connect <span class="scandia-medium"><i>you</i></span> to your customers with design experiences that drive growth and increase revenue.
          </div>
        </div>

        <div class="section-padding-y-top">
          <h2 class="w-full md:w-9/12">
            Give your brand a <span class="stanger-italics">facelift</span> with modern logo and brand templates.
          </h2>
          <div class="mt-10 relative">
            <a href="#pricing">
              <button class="btn-primary">Explore pricing</button>
            </a>
          </div>
        </div>

        <div class="padding-80 grid grid-cols-1 md:grid-cols-3 gap-8">
          <div>
            <img src="../assets/images/img-harb-road-min.jpg" class="br-16" alt="">
          </div>
          <div>
            <img src="../assets/images/img-hbs-min.jpg" class="br-16" alt="">
          </div>
          <div>
            <img src="../assets/images/img-ludothe-min.jpg" class="br-16" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-padding-y section-padding-x" id="pricing">
    <h2 class="w-full md:w-9/12">
      Affordable branding pricing<span class="stanger-italics"> created </span>just for you!
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
      <div class="pricing-card">
        <h6 class="text-[#4B4B4D]">
          Basic
        </h6>

        <h1 class="mt-2">
          {{ basic }}
        </h1>

        <div class="mt-6">
          <div class="flex gap-2">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              Logo
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              Business card design
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              Letterhead
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              Basic brand guidelines
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              2 free graphic design templates
            </p>
          </div>
        </div>

        <div class="mt-8">
          <div class="w-full">
            <nuxt-link to="/contact">
              <button class="btn-alt w-full">
                Get this plan
              </button>
            </nuxt-link>
          </div>
        </div>
      </div>
      <div class="pricing-card">
        <h6 class="text-[#4B4B4D]">
          Pro
        </h6>

        <h1 class="mt-2">
          {{ pro }}
        </h1>

        <div class="mt-6">
          <div class="flex gap-2">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              All in Basic
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              Logo animations
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              10 Social media templates
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              Full brand guideline
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              Stationery designs
            </p>
          </div>
        </div>

        <div class="mt-8">
          <div class="w-full">
            <nuxt-link to="/contact">
              <button class="btn-alt w-full">
                Get this plan
              </button>
            </nuxt-link>
          </div>
        </div>
      </div>
      <div class="pricing-card">
        <h6 class="text-[#4B4B4D]">
          Pro X
        </h6>

        <h1 class="mt-2">
          {{ proX }}
        </h1>

        <div class="mt-6">
          <div class="flex gap-2">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              All in Pro.
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              Brand bible
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              Online profile branding
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              Free one page website
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              1 year quarterly brand audit
            </p>
          </div>
        </div>

        <div class="mt-8">
          <div class="w-full">
            <nuxt-link to="/contact">
              <button class="btn-alt w-full">
                Get this plan
              </button>
            </nuxt-link>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-padding-x">
    <div class="w-full md:w-9/12">
      <h2>
        Get monthly graphic designs delivered to you when you need it (for social media, events e.t.c)
      </h2>

      <div class="mt-10 relative">
        <a href="#design">
          <button class="btn-primary">Get design subscription</button>
        </a>
      </div>
    </div>
  </section>

  <section class="section-padding-y section-padding-x" id="design" >
    <h2 class="w-full md:w-9/12">
      Get graphics<span class="stanger-italics"> designs </span>on demand.
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
      <div class="pricing-card">
        <h6 class="text-[#4B4B4D]">
          Basic
        </h6>

        <div class="flex items-center mt-2">
          <h1>
            {{ basicG }}
          </h1>

          <p class="scandia-medium ml-2">
            /Month
          </p>
        </div>

        <div class="mt-6">
          <div class="flex gap-2">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              5 Designs
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              24 - 48 hours turn-around time
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              1 request per 24 hours
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              Original files
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              Extra requests
            </p>
          </div>
        </div>

        <div class="mt-8">
          <div class="w-full">

            <nuxt-link to="/contact">
              <button class="btn-alt w-full">
                Get this plan
              </button>
            </nuxt-link>
          </div>
        </div>
      </div>
      <div class="pricing-card">
        <h6 class="text-[#4B4B4D]">
          Pro
        </h6>

        <div class="flex items-center mt-2">
          <h1>
            {{ proG }}
          </h1>

          <p class="scandia-medium ml-2">
            /Month
          </p>
        </div>

        <div class="mt-6">
          <div class="flex gap-2">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              10 Designs
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              24 hours turn-around time
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              1 request per 24 hours
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              Premium assets
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              Extra requests ($10 per request)
            </p>
          </div>
        </div>

        <div class="mt-8">
          <div class="w-full">
            <nuxt-link to="/contact">
              <button class="btn-alt w-full">
                Get this plan
              </button>
            </nuxt-link>
          </div>
        </div>
      </div>
      <div class="pricing-card">
        <h6 class="text-[#4B4B4D]">
          Pro X
        </h6>

        <div class="flex items-center mt-2">
          <h1>
            {{ proXG }}
          </h1>

          <p class="scandia-medium ml-2">
            /Month
          </p>
        </div>

        <div class="mt-6">
          <div class="flex gap-2">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              Unlimited designs
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              24 hours turn-around time
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              3 requests per 24 hours
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              Original files
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              Extra requests
            </p>
          </div>
        </div>

        <div class="mt-8">
          <div class="w-full">
            <nuxt-link to="/contact">
              <button class="btn-alt w-full">
                Get this plan
              </button>
            </nuxt-link>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-padding-x section-padding-y-bottom">
    <div class="w-full md:w-9/12">
      <h2>
        Request a one off graphic design for {{ reqPrice }}. Share your brief by clicking the button below:
      </h2>

      <div class="mt-10 relative">
        <nuxt-link to="/contact">
          <button class="btn-primary">Request graphic design</button>
        </nuxt-link>
      </div>
    </div>
  </section>
  <div>
    <Footer />
  </div>
</template>

<script setup lang="ts">
useHead({
  title: "Branding and Design | Vuche Studio'",
});
import useLocation from "~/composables/useLocation";
import type { UserIP } from "~/typings/global";
const basic = ref("");
const pro = ref("");
const proX = ref("");
const basicG = ref("");
const proG = ref("");
const proXG = ref("");
const reqPrice = ref("");
const togglePrices = () => {
  if (userLocation.value?.countryName === "Nigeria") {
    basic.value = "₦150,000";
    pro.value = "₦300,000";
    proX.value = "₦950,000";
    basicG.value = "₦50,000";
    proG.value = "₦100,000";
    proXG.value = "₦500,000";
    reqPrice.value = "₦10,000";
  } else if (userLocation.value?.countryName === "United States of America") {
    basic.value = "$199";
    pro.value = "$399";
    proX.value = "$999";
    basicG.value = "$87";
    proG.value = "$169";
    proXG.value = "$697";
    reqPrice.value = "$19";
  } else if (userLocation.value?.countryName === "Canada") {
    basic.value = "C$199";
    pro.value = "C$399";
    proX.value = "C$999";
    basicG.value = "C$87";
    proG.value = "C$169";
    proXG.value = "C$697";
    reqPrice.value = "C$19";
  } else {
    basic.value = "$199";
    pro.value = "$399";
    proX.value = "$999";
    basicG.value = "$87";
    proG.value = "$169";
    proXG.value = "$697";
    reqPrice.value = "$19";
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

<style scoped>
.bg-fine {
  background: linear-gradient(rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url(../assets/images/bg-br-design-min.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  border-radius: 16px;
}

@media (max-width: 821px) {
}
</style>
