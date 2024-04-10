<template>
  <div>
    <form action="" class="form-container text-[#1E1F21]" @submit.prevent="activeLink">
      <h5>
        1/2
      </h5>
      <div class="grid grid-cols-1 gap-6 mt-4">
        <div>
          <div class="vuche-floating-label-content">
            <input class="vuche-form-input" placeholder="Full Name" v-model="data.name" id="name" required>
            <label class="vuche-floating-label">Full Name</label>
          </div>
        </div>
        <div>
          <div class="vuche-floating-label-content">
            <input class="vuche-form-input" placeholder="Email" v-model="data.email" id="email" required>
            <label class="vuche-floating-label">Email</label>
          </div>
        </div>
        <div>
          <div class="vuche-floating-label-content">
            <input class="vuche-form-input" placeholder="Phone number" v-model="data.tel" id="name" required>
            <label class="vuche-floating-label">Phone Number</label>
          </div>
        </div>
        <div>
          <div class="vuche-floating-label-content">
            <input class="vuche-form-input" placeholder="Name of Business/Brand *" v-model="data.business" id="name" required>
            <label class="vuche-floating-label">Name of Business/Brand *</label>
          </div>
        </div>
        <div>
          <div class="vuche-floating-label-content">
            <input class="vuche-form-input" placeholder="What is your domain name?" v-model="data.domain" id="domain" required>
            <label class="vuche-floating-label">What is your domain name?</label>
          </div>
          <div class="small-paragraph mt-2">
            If you don’t have one, what domain name would you prefer? (A domain name is the unique identifier for your website e.g www.chigisoft.com)
          </div>
        </div>

        <div>
          <p class="scandia-medium">
            What are the specific features your website should have based on your business objectives?
          </p>

          <div class="small-paragraph mt-1">
            N.B: You can Tick multiple options
          </div>

          <div class="mt-3">
            <input type="checkbox" id="professionalPortfolio" name="features" value="professionalPortfolio" v-model="data.features">
            <label for="professionalPortfolio" class="small-paragraph ml-1 mt-3">It should contain professional/business portfolio details</label><br>
        
            <input type="checkbox" id="digitalProducts" name="features" value="digitalProducts" v-model="data.features">
            <label for="digitalProducts" class="small-paragraph ml-1 mt-3">People should be able to buy digital products on it</label><br>
        
            <input type="checkbox" id="blog" name="features" value="blog" v-model="data.features">
            <label for="blog" class="small-paragraph ml-1 mt-3">It should have a blog where posts are made regularly</label><br>
        
            <input type="checkbox" id="emailCollection" name="features" value="emailCollection" v-model="data.features">
            <label for="emailCollection" class="small-paragraph ml-1 mt-3">It should be able to collect e-mails and send bulk emails</label><br>
        
            <input type="checkbox" id="onlineCourses" name="features" value="onlineCourses" v-model="data.features">
            <label for="onlineCourses" class="small-paragraph ml-1 mt-3">It should be able to host online courses for sale</label><br>
        
            <input type="checkbox" id="coachingAccess" name="features" value="coachingAccess" v-model="data.features">
            <label for="coachingAccess" class="small-paragraph ml-1 mt-3">It should have restricted coaching and mentorship access for selected individuals</label><br>
        
            <input type="checkbox" id="showcaseWorks" name="features" value="showcaseWorks" v-model="data.features">
            <label for="showcaseWorks" class="small-paragraph ml-1 mt-3">It should showcase past works, events, testimonials, and impacts</label><br>
        
            <input type="checkbox" id="contactDetails" name="features" value="contactDetails" v-model="data.features">
            <label for="contactDetails" class="small-paragraph ml-1 mt-3">It should have direct contact details</label><br>
        
            <input type="checkbox" id="instantMessaging" name="features" value="instantMessaging" v-model="data.features">
            <label for="instantMessaging" class="small-paragraph ml-1 mt-3">It should have instant-response, WhatsApp chat or messenger chat functionality</label><br>
        
            <input type="checkbox" id="appointmentScheduling" name="features" value="appointmentScheduling" v-model="data.features">
            <label for="appointmentScheduling" class="small-paragraph ml-1 mt-3">It should have appointment scheduling functionality</label><br>
        
            <input type="checkbox" id="membershipFeature" name="features" value="membershipFeature" v-model="data.features">
            <label for="membershipFeature" class="small-paragraph ml-1 mt-3">It should have a membership feature where people can register/login</label><br>
        
            <input type="checkbox" id="vendorListing" name="features" value="vendorListing" v-model="data.features">
            <label for="vendorListing" class="small-paragraph ml-1 mt-3">It should have a place where vendors can list their products and have their public profiles</label><br>
        
            <input type="checkbox" id="dataVisualizations" name="features" value="dataVisualizations" v-model="data.features">
            <label for="dataVisualizations" class="small-paragraph ml-1 mt-3">It should be able to display dynamic charts, tables, and other data visualizations in real-time</label><br>
        </div>
        
        </div>
      </div>
      <div>

      </div>

      <div class="mt-4">
        <textarea name="" class="vuche-form-input" id="" cols="10" rows="2" placeholder="Describe more features …" v-model="data.moreFeatures" required></textarea>
      </div>

      <div class="mt-8 relative">
        <button type="submit" class="btn-primary text-[#1E1F21]">Next: Success metrics</button>
      </div>
    </form>
  </div>
</template>

<script setup>
const emit = defineEmits(['close', 'change_active_link']);

const changeActiveLink = (link) => {
  emit('change_active_link', link, 'first_name')
}
const data = reactive({
  name:'',
  email:'',
  tel:'',
  business: '',
  domain: '',
  features: [],
  moreFeatures: '',
});

const activeLink = () => {
  const selectedFeatures = data.features
    .filter(feature => feature !== '')
    .map(feature => {
      const label = document.querySelector(`label[for="${feature}"]`);
      return label ? label.textContent.trim() : '';
    });
  console.log('Selected features:', selectedFeatures);

  emit('change_active_link', 2)
  emit('first_name', {
    name: data.name,
    email: data.email,
    tel: data.tel,
    business: data.business,
    domain: data.domain,
    features: selectedFeatures,
    moreFeatures: data.moreFeatures
  })
}
</script>