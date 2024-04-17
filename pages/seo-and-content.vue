<template>
  <div>
    <Nav />
  </div>
  <section class="banner-container section-padding-x">
    <div class="flex">
      <div class="w-full">
        <p>
          <nuxt-link to="/">Home</nuxt-link> » <span class="scandia-medium">SEO & Content</span>
        </p>

        <div class="mt-4">
          <h2 class="w-full md:w-8/12">
            Want to <span class="stanger-italics">rank</span> on Google’s first page <span class="stanger-italics">and</span> increase sales?
          </h2>
          <div class="mt-8 relative">
            <nuxt-link to="/contact">
            <button class="btn-primary">Talk to us now!</button>
            </nuxt-link>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-padding-x">
    <div class="bg-seo">
      <div class="block md:flex items-center">
        <div class="w-full md:w-1/2 text-[#FFFFFF]">
          <h2>
            Get more traffic, make more sales!
          </h2>
  
          <div class="mt-3">
            <div class="big-paragraph">
              Our Content and SEO experts optimize your website and general online presence to get your business ranking on Google’s first page for rich keywords.
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/2 text-[#FFFFFF] mt-5 md:mt-0">
          <form action="" class="form-container" @submit.prevent="submitForm">
            <div class="grid grid-cols-1 gap-8">
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
  </section>


  <section class="section-padding-x section-padding-y">
    <div class="w-full md:w-9/12 relative">
      <h2>
        Increase your <span class="abstract">business visibility</span> with premium SEO and content <span class="stanger-italics">management</span> services. Starting from <span class="abstract">$199/month.</span>
      </h2>
    </div>

    <div class="flex flex-wrap gap-6 padding-80">
      <div class="seo-service-tag">
        SEO Audit
      </div>
      <div class="seo-service-tag">
        SEO Keyword Research
      </div>
      <div class="seo-service-tag">
        Content strategy
      </div>
      <div class="seo-service-tag">
        Google My Business Profile Management
      </div>
      <div class="seo-service-tag">
        Graphic designs
      </div>
      <div class="seo-service-tag">
        Email campaigns
      </div>
      <div class="seo-service-tag">
        Email marketing
      </div>
      <div class="seo-service-tag">
        Blog setup and management
      </div>
      <div class="seo-service-tag">
        Copywriting
      </div>
      <div class="seo-service-tag">
        Sales funnel/page development
      </div>
      <div class="seo-service-tag">
        Advertising
      </div>
      <div class="seo-service-tag">
        Website development
      </div>
      <div class="seo-service-tag">
        Social media management
      </div>
    </div>
    <div class="mt-10 relative">
      <nuxt-link to="/contact">
        <button class="btn-primary">Grow your business</button>
      </nuxt-link>
    </div>
  </section>

  <section class="section-padding-x section-padding-y-bottom">
    <div class="w-full md:w-9/12">
      <h2>
        Request a one off graphic design for {{ grapicsDesign }}. Share your brief by clicking the button below:
      </h2>

      <div class="mt-10 relative">
        <nuxt-link to="/contact">
          <button class="btn-primary">Request graphic design</button>
        </nuxt-link>
      </div>
    </div>
  </section>
  
  <section class="section-padding-x section-padding-y-bottom">
    <Dicovery />
  </section>
  <div>
    <Footer />
  </div>
</template>

<script setup lang="ts">
useHead({
  title: "SEO and Content | Vuche Studio'",
});
import useLocation from "~/composables/useLocation";
import type { UserIP } from "~/typings/global";
const grapicsDesign = ref("");
const webDesign = ref("");
const togglePrices = () => {
  if (userLocation.value?.countryName === "Nigeria") {
    grapicsDesign.value = "₦10,000";
    webDesign.value = "₦150,000";
  } else if (userLocation.value?.countryName === "United States of America") {
    grapicsDesign.value = "$19";
    webDesign.value = "$399";
  } else if (userLocation.value?.countryName === "Canada") {
    grapicsDesign.value = "C$19";
    webDesign.value = "C$399";
  } else {
    grapicsDesign.value = "$19";
    webDesign.value = "$399";
  }
};

const userLocation = ref<UserIP>();
const { fetchUserLocation } = useLocation();

onMounted(async () => {
  const location = await fetchUserLocation();
  userLocation.value = location;
  togglePrices();
});
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
.bg-seo {
  background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url(../assets/images/img-seo-min.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  border-radius: 16px;
  padding: 80px;
}


@media (max-width: 821px) {
  .bg-seo {
    padding: 20px;
  }
}
</style>
