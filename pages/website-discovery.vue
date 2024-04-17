<template>
  <div>
    <Nav />
  </div>

  <div class="banner-container">
    <div class="flex justify-center">
      <div class="w-full md:w-10/12">
        <div class="block md:flex">
          <div class="w-full md:w-1/2 px-5 md:px-0">
            <div class="w-full md:w-8/12">

              
              <h1>
                Website <span class="stanger-italics">discovery</span> form.
              </h1>

              <div class="mt-6">
                <p>
                  Shape your website’s success. Your answers fuel the creation of a powerful content structure. Let’s build a functional masterpiece together!
                </p>
              </div>


              <div class="mt-6 md:mt-12">
                <img src="../assets/images/img-contact.svg" alt="">
              </div>
            </div>
          </div>

          <div class="w-full md:w-1/2 text-[#FFFFFF] mt-5 md:mt-0">

            <div v-show="activeLink === 1" class="relative">
              <DiscoveryOne @change_active_link="changeActiveLink"
              :contact-info="contactInfo"
              @first_name="addContactInfo" />
            </div>

            <div v-show="activeLink === 2" class="relative">
              <DiscoveryTwo @change_active_link="changeActiveLink"
              :contact-info="contactInfo"
              @first_name="addContactInfo" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { defineEmits, ref, reactive } from 'vue'
useHead({
  title: "Website Discovery | Vuche Studio'",
});
const activeLink = ref(1)

const changeActiveLink = (link: number) => {
  console.log('active link', link)
  activeLink.value = link
}

interface ContactInfo {
  name: string
  email: string
  tel: string
  business: string
  domain: string
  features: string
  moreFeatures: string
  targetAudience: any
  successMetrics: any
  preference: string
  goal: string
  // est: string,
}

const contactInfo = reactive<ContactInfo>({
  name: '',
  email: '',
  tel: '',
  business: '',
  domain: '',
  features: '',
  moreFeatures: '',
  targetAudience: null,
  successMetrics: null,
  preference: '',
  goal: '',
  // est: '',
})

const addContactInfo = (info: Partial<ContactInfo>) => {
  contactInfo.name = info.name || contactInfo.name
  contactInfo.email = info.email || contactInfo.email
  contactInfo.tel = info.tel || contactInfo.tel
  contactInfo.business = info.business || contactInfo.business
  contactInfo.domain = info.domain || contactInfo.domain
  contactInfo.features = info.features || contactInfo.features
  contactInfo.moreFeatures = info.moreFeatures || contactInfo.moreFeatures
  contactInfo.targetAudience = info.targetAudience || contactInfo.targetAudience
  contactInfo.successMetrics = info.successMetrics || contactInfo.successMetrics
  contactInfo.preference = info.preference || contactInfo.preference
  contactInfo.goal = info.goal || contactInfo.goal
  // contactInfo.est = info.est || contactInfo.est
}
</script>

<style scoped>
.banner-container {
  padding-top: 200px;
  padding-bottom: 120px;
}
@media (max-width: 821px) {
}
</style>
