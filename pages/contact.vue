<template>
  <div>
    <Nav />
  </div>

  <div class="banner-container">
    <div class="flex justify-center">
      <div class="w-full md:w-10/12">
        <div class="block md:flex">
          <div class="w-full md:w-1/2 px-5 md:px-0">
            <div class="w-full md:w-7/12">

              <div class="mb-6 md:mb-12">
                <img src="../assets/images/img-contact.svg" alt="">
              </div>
              <h1>
                <span class="abstract">Reach out</span> to us. We are <span class="stanger-italics">closer</span> than you think.
              </h1>

              <div class="mt-6">
                <h6>
                  Calgary AB, CA🇨🇦<br />
                  <a href="mailto:hi@vuche.studio">hi@vuche.studio</a>
                </h6>
    
                <h4 class="mt-2">
                  <a href="tel:+18257344811">+1 825-734-4811</a>
                </h4>
              </div>
            </div>
          </div>

          <div class="w-full md:w-1/2 text-[#FFFFFF] mt-5 md:mt-0">
            <form action="" class="form-container" @submit.prevent="submitForm">
              <div class="grid grid-cols-1 gap-6">
                <div>
                  <div class="vuche-floating-label-content">
                    <input class="vuche-form-input" placeholder="Your name" id="name" v-model="data.name" required>
                    <label class="vuche-floating-label">Your name</label>
                  </div>
                  <!-- <input type="text" class="vuche-form-input" placeholder="Your name" v-model="data.name" required> -->
                </div>
                <div>
                  <div class="vuche-floating-label-content">
                    <input type="email" class="vuche-form-input" id="email" placeholder="Email" v-model="data.email" required>
                    <label class="vuche-floating-label">Email</label>
                  </div>
                  <!-- <input type="email" class="vuche-form-input" placeholder="Email" v-model="data.email" required> -->
                </div>

                <div>
                  <!-- <vue-tel-input
                    v-model="phoneNumber"
                    defaultCountry="NG"
                    @input="onInput"
                    mode="international"
                  ></vue-tel-input> -->
                </div>

                <div>
                  <div class="vuche-floating-label-content">
                    <input type="tel" class="vuche-form-input" id="email" placeholder="Phone number" v-model="data.phoneNumber" required>
                    <label class="vuche-floating-label">Phone number</label>
                  </div>
                </div>
              </div>
  
              <div class="small-paragraph">
                I need …
              </div>
  
              <div>
                <div class="flex flex-wrap gap-5">
                  <div class="">
                    <div class="relative h-full items-center inline-block">
                      <label>
                        <input
                          v-model="services.branding"
                          type="checkbox"
                          class="check-input"
                          name="radio2"
                          value="Branding"
                        />
                        <div class="cont2 h-full check-con">
                          <p class="small-paragraph">Branding</p>
                        </div>
                      </label>
                    </div>
                  </div>
      
                  <div class="">
                    <div class="relative h-full items-center inline-block">
                      <label>
                        <input
                          v-model="services.promo"
                          type="checkbox"
                          class="check-input"
                          name="radio2"
                          value="Marketing/promo"
                        />
                        <div class="cont2 h-full check-con">
                          <p class="small-paragraph">Marketing/promo</p>
                        </div>
                      </label>
                    </div>
                  </div>
      
                  <div class="">
                    <div class="relative h-full items-center inline-block">
                      <label>
                        <input
                          v-model="services.websiteDesign"
                          type="checkbox"
                          class="check-input"
                          name="radio2"
                          value="Website Design"
                        />
                        <div class="cont2 h-full check-con">
                          <p class="small-paragraph">Website Design</p>
                        </div>
                      </label>
                    </div>
                  </div>
      
                  <div class="">
                    <div class="relative h-full items-center inline-block">
                      <label>
                        <input
                          v-model="services.marketing"
                          type="checkbox"
                          class="check-input"
                          name="radio2"
                          value="Marketing"
                        />
                        <div class="cont2 h-full check-con">
                          <p class="small-paragraph">Marketing</p>
                        </div>
                      </label>
                    </div>
                  </div>
      
                  <div class="">
                    <div class="relative h-full items-center inline-block">
                      <label>
                        <input
                          v-model="services.motionDesign"
                          type="checkbox"
                          class="check-input"
                          name="radio2"
                          value="2D/3D Motion Design"
                        />
                        <div class="cont2 h-full check-con">
                          <p class="small-paragraph">2D/3D Motion Design</p>
                        </div>
                      </label>
                    </div>
                  </div>
      
                  <div class="">
                    <div class="relative h-full items-center inline-block">
                      <label>
                        <input
                          v-model="services.productDesign"
                          type="checkbox"
                          class="check-input"
                          name="radio2"
                          value="Product Design"
                        />
                        <div class="cont2 h-full check-con">
                          <p class="small-paragraph">Product Design</p>
                        </div>
                      </label>
                    </div>
                  </div>
      
                  <div class="">
                    <div class="relative h-full items-center inline-block">
                      <label>
                        <input
                          v-model="services.seo"
                          type="checkbox"
                          class="check-input"
                          name="radio2"
                          value="SEO"
                        />
                        <div class="cont2 h-full check-con">
                          <p class="small-paragraph">SEO</p>
                        </div>
                      </label>
                    </div>
                  </div>
      
                  <div class="">
                    <div class="relative h-full items-center inline-block">
                      <label>
                        <input
                          v-model="services.more"
                          type="checkbox"
                          class="check-input"
                          name="radio2"
                          value="… More"
                        />
                        <div class="cont2 h-full check-con">
                          <p class="small-paragraph">… More</p>
                        </div>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="mt-4">
                <textarea name="" class="vuche-form-input" id="" cols="10" rows="2" v-model="data.message" placeholder="Describe the result you want …" required></textarea>
              </div>
  
              <div class="mt-8 relative">
                <button type="submit" class="btn-primary text-[#1E1F21]">Talk to us now!</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
// import { VueTelInput } from 'vue3-tel-input';
// import 'vue3-tel-input/dist/vue3-tel-input.css';
// const phoneNumber = ref('');

// const onInput = (phone, phoneObject) => {
//   if (phoneObject?.number) {
//     phoneNumber.value = phoneObject.number;
//   }
// };


const data = reactive({
  name: '',
  email: '',
  phoneNumber: '',
  message: '',
});

const services = reactive({
  branding: false,
  marketing: false,
  promo: false,
  websiteDesign: false,
  motionDesign: false,
  productDesign: false,
  seo: false,
  more: false,
});

function submitForm() {
  const selectedServices = Object.entries(services)
    .filter(([key, value]) => value)
    .map(([key, value]) => {
      switch (key) {
        case 'branding':
          return 'Branding';
        case 'marketing':
          return 'Marketing';
        case 'promo':
          return 'Marketing/Promo';
        case 'websiteDesign':
          return 'Website Design';
        case 'motionDesign':
          return '2D/3D Motion Design';
        case 'productDesign':
          return 'Product Design';
        case 'seo':
          return 'SEO';
        case 'more':
          return 'More';
        default:
          return '';
      }
    });

  const formData = {
    name: data.name,
    email: data.email,
    phoneNumber: data.phoneNumber,
    message: data.message,
    services: selectedServices
  };

  const searchParams = new URLSearchParams();
  for (const key in formData) {
    if (Array.isArray(formData[key])) {
      // Handle array (like services) specifically
      searchParams.append(key, JSON.stringify(formData[key]));
    } else {
      searchParams.append(key, formData[key]);
    }
  }

  fetch("/contact.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded;charset=UTF-8",
    },
    body: searchParams.toString(),
  })
    .then((res) => {
      if (res.ok) {
        res.json().then(json => console.log(json));
        const firstName = data.name.split(' ')[0];
        window.location.href = '/success?firstName=' + encodeURIComponent(firstName);
      } else {
        throw new Error("Failed to send message");
      }
    })
    .catch((e) => {
      console.error(e);
      alert("Message not sent");
    });
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
