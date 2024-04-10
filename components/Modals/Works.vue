<template>
  <div>
    <div class="modal-container relative" @click.self="closeModal">
      <div class="modal-left2">
        <div class="flex justify-between items-center">
          <div>
            <div class="flex items-center gap-2 md:gap-4 lg:gap-5">.</div>
          </div>

          <div>
            <p
              class="closee flex items-center cursor-pointer text-[#FFFFFF]"
              @click="closeModal"
            >
            Close
              <img src="~/assets/images/ic-closee.svg" class="ml-1" alt="" />
            </p>
          </div>
        </div>
        <div v-if="isVisible" class="modal">
          <h5>{{ projectInfo.title }}</h5>
          <div class="flex flex-wrap mt-4 gap-3">
            <div v-for="(service, index) in projectInfo.services" :key="index" class="project-tag-b">
              {{ service }}
            </div>
          </div>

          <div class="w-full md:w-10/12">
            <div class="flex">
              <div class="w-full">
                <iframe v-if="projectInfo.iframe" class="modal-img" :src="projectInfo.iframe" title="Understanding how LandPay Works (A detailed Expo on Features to improve user Experience)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <img v-else :src="projectInfo.modalImage" class="modal-img" alt="Modal Image" />
              </div>
            </div>
  
            <div class="flex mt-10">
              <div class="w-full md:w-2/12">
                <h5>
                  What we do…
                </h5>
              </div>
              <div class="w-full md:w-10/12 ml-8">
                <p>
                  {{ projectInfo.modalText}}
                </p>
                <p class="mt-3">
                  {{ projectInfo.modalText1}}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
  isVisible: Boolean,
  projectInfo: Object
});

const emit = defineEmits(['update:isVisible']);

const closeModal = () => {
  emit('update:isVisible', false);
};
</script>

<style scoped>
.modal-img {
  border-radius: 16px;
  height: 312px;
  width: 100%;
  object-fit: cover;
  margin-top: 24px;
}
</style>
