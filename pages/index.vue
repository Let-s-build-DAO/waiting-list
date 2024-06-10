<template>
  <div>
    <Nav />
  </div>
  <section class="banner-container section-padding-x">
    <div class="flex">
      <div class="w-full">
        <div class="inline-block title relative">
          <img
            src="../assets/images/ic-hrt.svg"
            class="absolute right-[-10px] top-[-20px]"
            alt=""
          />
          Above <span class="stanger">&</span> Beyond.
        </div>

        <div class="mt-10 relative">
          <nuxt-link to="/contact">
            <button class="btn-primary">Grow your business</button>
          </nuxt-link>
        </div>

        <section class="mt-10 relative">
          <div class="vid-mock">
            <video class="video" autoplay loop muted webkit-playsinline playsinline>
              <source src="../assets/images/bg-vuche.mp4" type="video/mp4">
            </video>
          </div>
        </section>

        <section class="mt-10 relative">
          <div class="grid grid-cols-1 md:grid-cols-4 gap-2 relative">
            <nuxt-link to="/branding-and-design">
              <div class="card-container">
                <div class="overlay">
                  <h4 class="text-[#FFFFFF]">Branding and Design</h4>
                </div>
                <img src="../assets/images/img-branding-min.jpg" alt="" />
              </div>
            </nuxt-link>

            <nuxt-link to="/seo-and-content">
              <div class="card-container">
                <div class="overlay">
                  <h4 class="text-[#FFFFFF]">SEO and Content Marketing</h4>
                </div>
                <img src="../assets/images/img-seo-min.jpg" alt="" />
              </div>
            </nuxt-link>

            <nuxt-link to="/social-media-management">
              <div class="card-container">
                <div class="overlay">
                  <h4 class="text-[#FFFFFF]">Social Media Management</h4>
                </div>
                <img src="../assets/images/img-social-media-min.jpg" alt="" />
              </div>
            </nuxt-link>

            <nuxt-link to="/motion-and-film">
              <div class="card-container">
                <div class="overlay">
                  <h4 class="text-[#FFFFFF]">Motion Design and Film</h4>
                </div>
                <img src="../assets/images/img-mo-design-min.jpg" alt="" />
              </div>
            </nuxt-link>
          </div>
        </section>

        <div class="section-padding-y-top relative">
          <div class="flex">
            <h1>
              We are really good at growing companies
              <span class="stanger-italics">and</span> ideas
              <span class="stanger-italics">with</span> creative
              <span class="abstract">content design</span> 
              <span class="stanger-italics"> & </span> 
              <span class="abstract">marketing</span>.
            </h1>
            <img src="../assets/images/ctv-purple.svg" class="absolute right-[30%] bottom-[-35%]" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-padding-x section-padding-y bg-[#1E1F21] text-[#FFFFFF]">
    <div class="w-full md:w-10/12">
      <h1>
        Increase profits <span class="stanger-italics">and</span> engagement <span class="stanger-italics">with</span> Vuche!
      </h1>
      <div class="big-paragraph mt-4">
        We are a creative agency (experience design studio) on a mission to connect brands to your customers with engaging content that drives growth and increases revenue — branding, design, website development, animation, marketing, and everything in between.
      </div>
      <div class="mt-10">
        <div class="small-paragraph">
          Trusted by:
        </div>
        <div class="mt-4">
          <div class="flex flex-wrap gap-8">
            <img src="../assets/images/kudicast-logo-w.svg" alt="">
            <img src="../assets/images/hh-logo-w.svg" alt="">
            <img src="../assets/images/flitaa-logo-w.svg" alt="">
            <img src="../assets/images/chigisoft-logo-w.svg" alt="">
            <img src="../assets/images/paxity-w.svg" alt="">
            <img src="../assets/images/ic-pointograph.svg" alt="">
            <img src="../assets/images/suba-w.svg" alt="">
          </div>
        </div>
      </div>

      <div class="mt-10">
        <nuxt-link to="/about">
          <button class="btn-primary-w text-[#1E1F21]">
            About us
          </button>
        </nuxt-link>
      </div>
    </div>
  </section>

  <section class="section-padding-x section-padding-y">
    <div>
      <h1>
        Our <span class="stanger-italics">ROI</span> generating work.
      </h1>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-2 relative mt-8">
      <div class="card-container cursor-pointer" v-for="project in projects" :key="project.id" @click="openModalWithProjectInfo(project)">
        <div class="overlay2">
          <div class="absolute bottom-[46px]">
            <h4 class="text-[#FFFFFF]">
              {{ project.title }}
            </h4>
            <div class="flex flex-wrap gap-2 mt-4">
              <div class="project-tag" v-for="service in project.services" :key="service">
                {{ service }}
              </div>
            </div>

            <div class="mt-6">
              <button class="btn-link text-[#FFFFFF]">
                View project
              </button>
            </div>
          </div>
        </div>
        <img :src="project.imageUrl" :alt="project.title" />
      </div>
    </div>

    <div class="mt-10">
      <nuxt-link to="/work">
        <button class="btn-primary">
          … More work
        </button>
      </nuxt-link>
    </div>

  </section>

  <section class="section-padding-x section-padding-y-bottom">
    <h1>
      What amazing <span class="stanger-italics">brands</span> are saying about us…
    </h1>

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

    <div class="mt-10">
      <nuxt-link to="/contact">
      <button class="btn-primary">
        Grow your business
      </button>
      </nuxt-link>

    </div>
  </section>


  <section class="section-padding-x section-padding-y-bottom">
   <Discovery />
  </section>
  <div>
    <Footer />
  </div>

  <div v-if="isModalVisible">
    <ModalsWorks :isVisible="isModalVisible" :projectInfo="selectedProjectInfo" @update:isVisible="isModalVisible = $event" />
  </div>
</template>

<script setup lang="ts">
const isModalVisible = ref(false);
const selectedProjectInfo = ref({});

const projects = [
  {
    id: 1,
    title: 'Landpay ads video',
    services: ['Video content', 'Motion graphics'],
    imageUrl: '/images/bg-landpay-min.jpg',
    iframe: "https://www.youtube.com/embed/ZRu2i3a7H8g",
    modalImage: '',
    modalText: "We scripted, recorded and edited the Landpay video ad for the Landpay App.",
    modalText1: "UX/UI Design for the Landpay app.",
  },
  {
    id: 2,
    title: 'MDX',
    services: ['Web design', 'Digital marketing'],
    imageUrl: '/images/bg-mdx-min.jpg',
    modalImage: '/images/mdx-port.svg',
    modalText: "UX/UI Design",
    modalText1: "Website design, content and SEO.",
  },
  {
    id: 3, 
    title: 'RCCG, HOP Calgary',
    services: ['Web design', 'UX/UI Design', 'SEO and Content'],
    imageUrl: '/images/bg-hop-min.jpg',
    modalImage: '/images/bg-hop-min.jpg',
    modalText: "We redesigned the entire web experience at rccghop.ca.",
    modalText1: "Content design and SEO.",
  },
];

const openModalWithProjectInfo = (project) => {
  selectedProjectInfo.value = project;
  isModalVisible.value = true;
};
</script>

<style scoped>
.vid-mock {
  border-radius: 16px;
  background: rgba(0, 0, 0, 1);
  background-size: cover;
  height: auto;
  width: 100%;
}

@media (max-width: 821px) {
}
</style>
