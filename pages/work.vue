<template>
  <div>
    <Nav />
  </div>
  <section class="banner-container section-padding-x">
    <div class="flex">
      <div class="w-full">
        <p>
          Our work
        </p>
       <h1>
        Powerful branding and <span class="stanger-italics">business growth</span> portfolio.
       </h1>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 relative padding-80">
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

    <div class="flex mt-10">
      <div class="w-full">
        <img src="../assets/images/bg-fine-min.jpg" class="br-16" alt="">
      </div>
    </div>

    <div class="mt-10">
      <button class="btn-primary">
        Grow your business
      </button>
    </div>
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
    iframe: "",
    modalImage: '/images/mdx-port.svg',
    modalText: "UX/UI Design",
    modalText1: "Website design, content and SEO.",
  },
  {
    id: 3, 
    title: 'RCCG, HOP Calgary',
    services: ['Web design', 'UX/UI Design', 'SEO and Content'],
    imageUrl: '/images/bg-hop-min.jpg',
    iframe: "",
    modalImage: '/images/bg-hop-min.jpg',
    modalText: "We redesigned the entire web experience at rccghop.ca.",
    modalText1: "Content design and SEO.",
  },
  {
    id: 4,
    title: 'Hush Homes',
    services: ['Web design', 'Digital marketing', 'Content management'],
    imageUrl: '/images/bg-hush-min.jpg',
    iframe: "",
    modalImage: '/images/bg-hush-min.jpg',
    modalText: "Website design",
    modalText1: "Social media management",
  },
  {
    id: 5,
    title: 'The Blessedblessing',
    services: ['UX/UI design', 'Mobile app'],
    imageUrl: '/images/bg-tbb-min.jpg',
    iframe: "",
    modalImage: '/images/bg-tbb-min.jpg',
    modalText: "Website design.",
    modalText1: "SEO and content management.",
  },
  {
    id: 6, 
    title: 'Patara',
    services: ['UX/UI Design', 'Mobile app'],
    imageUrl: '/images/bg-patara-min.jpg',
    iframe: "",
    modalImage: '/images/bg-patara-min.jpg',
    modalText: "Work in progress…",
    modalText1: "",
  },
];

const openModalWithProjectInfo = (project) => {
  selectedProjectInfo.value = project;
  isModalVisible.value = true;
};
</script>

<style scoped>
.banner-container {
  padding-top: 200px;
  padding-bottom: 120px;
}

@media (max-width: 821px) {

}
</style>
