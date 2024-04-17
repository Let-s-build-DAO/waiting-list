<template>
  <div>
    <Nav />
  </div>

  <div class="banner-container">
    <div class="flex justify-center">
      <div class="w-full">
        <img src="../assets/images/img-thanks.svg" class="w-full object-cover" alt="">
      </div>
    </div>

    <div class="flex section-padding-x mt-11">
      <div class="w-full md:w-9/12">
        <h1>
          Thank you for reaching us, {{ firstName }}!
        </h1>

        <h6 class="mt-4">
          We will contact you shortly! You can also let us know when you can have a discovery meeting by clicking the button below —
        </h6>

        <div class="block md:flex items-center gap-5 mt-10">
          <div>
            <a href="https://calendly.com/vuchestudio" target="_blank">
              <button class="btn-primary">Book meeting</button>
            </a>
          </div>

          <div class="mt-4 md:mt-0">
            <nuxt-link to="/work">
              <p class="scandia-medium underline">
                Have you seen our work?
              </p>
            </nuxt-link>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
useHead({
  title: "Success | Vuche Studio'",
});
const firstName = ref('');

onMounted(() => {
  const urlParams = new URLSearchParams(window.location.search);
  firstName.value = urlParams.get('firstName') || '';
});
</script>

<style scoped>
.banner-container {
  padding-top: 200px;
  padding-bottom: 120px;
  padding-left: 20px;
  padding-right: 20px;
}
@media (max-width: 821px) {
}
</style>
