<template>
  <div>
    <Nav />
  </div>
  <section class="banner-container section-padding-x">
    <div class="flex">
      <div class="w-full">
        <p>
          <nuxt-link to="/">Home</nuxt-link> » <span class="scandia-medium">Motion & Film</span>
        </p>

        <div class="mt-4">
          <h1 class="w-full md:w-10/12">
            Get <span class="stanger-italics">interactive</span> videos to introduce your brand. From full animation <span class="stanger-italics">to</span> film.
          </h1>
          <div class="mt-8 relative">
            <div class="vid-mock">
              <video class="video" autoplay muted>
                <source src="../assets/images/bg-vuche.mp4" type="video/mp4">
              </video>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-padding-x section-padding-y-bottom">
    <div class="flex flex-wrap gap-6">
      <div class="seo-service-tag">
        2D & 3D Animation
      </div>
      <div class="seo-service-tag">
        Video edits and post production
      </div>
      <div class="seo-service-tag">
        Animation films and ads.
      </div>
      <div class="seo-service-tag">
        Online course recording and editting
      </div>
    </div>

    <div class="mt-10">
      <button class="btn-primary flex items-center gap-4">
        <img src="../assets/images/phone-dark.svg" alt="">
        Talk to an expert
      </button>
    </div>
  </section>

  <div>
    <Footer />
  </div>
</template>

<script setup lang="ts">
useHead({
  title: "Motion and Film | Vuche Studio'",
});
</script>

<style scoped>
.banner-container {
  padding-top: 200px;
  padding-bottom: 120px;
}
.vid-mock {
  border-radius: 16px;
  background: rgba(0, 0, 0, 1);
  height: auto;
  width: 100%;
}

@media (max-width: 821px) {
}
</style>
