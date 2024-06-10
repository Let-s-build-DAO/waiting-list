<template>
  <div>
    <Nav />
  </div>
  <section class="banner-container section-padding-x">
    <div class="flex">
      <div class="w-full">
        <p>
          <nuxt-link to="/">Home</nuxt-link> » <span class="scandia-medium">Social Media</span>
        </p>

        <div class="mt-4">
          <h1 class="w-full md:w-10/12">
            Increase your sales <span class="stanger-italics">with</span> strategic <span class="stanger-italics">and</span> intentional Social Media management and digital marketing.
          </h1>
          <div class="mt-8 relative">
            <div class="vid-mock">
              <video class="video" autoplay muted>
                <source src="../assets/images/bg-vuche.mp4" type="video/mp4">
              </video>
            </div>
          </div>
        </div>
        <div class="padding-80">
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <div>
              <div class="big-paragraph">
                “Vuche Studio (Chigisoft) seamlessly integrated our ideas with their creative expertise, resulting in a website that perfectly encapsulates the essence of our church.”.
              </div>
              <div class="flex items-center mt-8">
                <div>
                  <img src="../assets/images/ic-hop-x.svg" alt="">
                </div>
                <div class="ml-4">
                  <p>
                    Bayo A.
                  </p>
                  <div class="small-paragraph text-[#4B4B4D]">
                    Head of I.T, RCCG HOP, Calgary
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="big-paragraph">
                “The Vuche team have grown our social media and online visibility by over 400% since they took over. I recommend their design and email marketing services”.
              </div>
              <div class="flex items-center mt-8">
                <div>
                  <img src="../assets/images/ic-hhs.png" alt="">
                </div>
                <div class="ml-4">
                  <p>
                    Caleb A.
                  </p>
                  <div class="small-paragraph text-[#4B4B4D]">
                    CEO, Hushhomes
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="big-paragraph">
                “We engaged the Vuche team for the Product design of our new platform — WIP Global. The user feedback on the intuitiveness and aesthetics of app means we took the right decision”.
              </div>
              <div class="flex items-center mt-8">
                <div>
                  <img src="../assets/images/ic-wip-global-app.svg" alt="">
                </div>
                <div class="ml-4">
                  <p>
                    Precious C.
                  </p>
                  <div class="small-paragraph text-[#4B4B4D]">
                    Tech Lead, WIP Global
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-padding-y-bottom section-padding-x">
    <h2 class="w-full md:w-9/12">
      Select a plan<span class="stanger-italics"> that </span>suits your needs.
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
      <div class="pricing-card">
        <h6 class="text-[#4B4B4D]">
          Starter
        </h6>

        <div class="flex items-center mt-2">
          <h1>
            {{ starter }}
          </h1>

          <p class="scandia-medium ml-2">
            /Month
          </p>
        </div>

        <div class="mt-6">
          <div class="flex gap-2">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              1 Social media platform
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              3 posts per week
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              2 free graphic designs/week
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              No post engagement
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              No videos/animation
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
          Growth
        </h6>

        <div class="flex items-center mt-2">
          <h1>
            {{ growth }}
          </h1>

          <p class="scandia-medium ml-2">
            /Month
          </p>
        </div>

        <div class="mt-6">
          <div class="flex gap-2">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              2 Social media platform
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              5 posts per week
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              4 free graphic designs/week
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              Partial post engagement
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              1 video/animation
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
            {{ pro }}
          </h1>

          <p class="scandia-medium ml-2">
            /Month
          </p>
        </div>

        <div class="mt-6">
          <div class="flex gap-2">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              4 Social media platform
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              10 posts per week
            </p>
          </div>
          <div class="flex gap-2 mt-4">
            <img src="../assets/images/ic-pointer.svg" alt="">
            <p>
              10 free graphic designs/week
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
              3 video/animation
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
    <div class="w-full md:w-9/12 relative">
      <h2>
        Get unlimited social media management and digital marketing services for <span class="abstract">{{ unlimited }}/month.</span>
      </h2>
      <div class="mt-10">
        <nuxt-link to="/contact">
          <button class="btn-primary flex items-center gap-4">
            <img src="../assets/images/phone-dark.svg" alt="">
            Need help picking a plan?
          </button>
        </nuxt-link>
      </div>
    </div>
  </section>

  <section class="section-padding-x section-padding-y-bottom">
    <Discovery />
  </section>

  <div>
    <Footer />
  </div>
</template>

<script setup lang="ts">
useHead({
  title: "Social Media Management | Vuche Studio'",
});
import useLocation from "~/composables/useLocation";
import type { UserIP } from "~/typings/global";
const starter = ref("");
const growth = ref("");
const pro = ref("");
const unlimited = ref("");
const togglePrices = () => {
  if (userLocation.value?.countryName === "Nigeria") {
    starter.value = "₦120,000";
    growth.value = "₦165,000";
    pro.value = "₦299,000";
    unlimited.value = "₦600,000";
  } else if (userLocation.value?.countryName === "United States of America") {
    starter.value = "$167";
    growth.value = "$397";
    pro.value = "$497";
    unlimited.value = "$1,997";
  } else if (userLocation.value?.countryName === "Canada") {
    starter.value = "C$167";
    growth.value = "C$397";
    pro.value = "C$497";
    unlimited.value = "C$1,997";
  } else {
    starter.value = "$167";
    growth.value = "$397";
    pro.value = "$497";
    unlimited.value = "1,997";
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
.vid-mock {
  border-radius: 16px;
  background: rgba(0, 0, 0, 1);
  height: auto;
  width: 100%;
}

@media (max-width: 821px) {
}
</style>
