<template>
  <div>
    <form action="" class="form-container text-[#1E1F21]" @submit.prevent="activeLink">
      <h5>
        2/2
      </h5>
      <div class="grid grid-cols-1 gap-4 mt-4">
        <div>
          <p class="scandia-medium">
            Can you briefly describe the categories of people your website will be serving?
          </p>
          <div class="mt-2">
            <textarea name="" class="vuche-form-input" id="" cols="10" rows="2" v-model="form.targetAudience" placeholder="Your target audience" required></textarea>
          </div>
        </div>
        <div>
          <p class="scandia-medium">
            What are the key actions users must take on your website to help you achieve your business objectives?
          </p>
          <div class="small-paragraph mt-2">
            How do you intend for the website to contribute to your business goals? Please share with us.
          </div>
          <div class="mt-2">
            <textarea name="" class="vuche-form-input" id="" cols="10" rows="2" v-model="form.successMetrics" placeholder="Enter your success metrics" required></textarea>
          </div>
        </div>

        <div>
          <p class="scandia-medium">
            Do you have a preferred way you want your website to be built?
          </p>
          <div class="small-paragraph mt-2">
            You may skip this if you are not sure.
          </div>
          <div class="mt-2">
            <select name="ways" id="means" class="vuche-form-input" v-model="form.preference">
              <option value="" disabled selected>Choose</option>
              <option value="wordpress">WordPress - Cheaper and easier to self manage</option>
              <option value="webflow">Webflow - Moderate and easy to self manage</option>
              <option value="custom">Custom build - Most secure, a bit pricy, fastest to load.</option>
              <option value="notSure">Not sure</option>
            </select>
          </div>
        </div>

        <div>
          <p class="scandia-medium">
            What is the most important thing to you about building this website?
          </p>
          <div class="mt-2">
            <textarea name="" class="vuche-form-input" id="" cols="10" rows="2" v-model="form.goal" placeholder="Your main goal of building this website" required></textarea>
          </div>
        </div>

        <!-- <div class="block md:flex justify-between">
          <p>
            Estimated cost (starting from):
          </p>
          <p class="scandia-medium">
            C$1,200
          </p>
        </div> -->
      </div>

      <div class="mt-8 relative">
        <button type="submit" class="btn-primary text-[#1E1F21]">Submit</button>
        <button class="btn-alt text-[#1E1F21] ml-3" @click="changeActiveLink(1)">Go back</button>
      </div>
    </form>
  </div>
</template>

<script setup>
import { defineProps, defineEmits, reactive, ref } from 'vue';

const props = defineProps({
  contactInfo: {
    type: Object,
  },
});

const emit = defineEmits(['close', 'change_active_link']);

const form = reactive({
  targetAudience: '',
  successMetrics: '',
  preference: '',
  goal: '',
});

const changeActiveLink = (link) => {
  emit('change_active_link', link);
};

const activeLink = () => {
  const formData = {
    ...props.contactInfo,
    targetAudience: form.targetAudience,
    successMetrics: form.successMetrics,
    preference: form.preference,
    goal: form.goal,
  };
  const searchParams = Object.keys(formData)
    .map((key) => {
      return encodeURIComponent(key) + '=' + encodeURIComponent(formData[key]);
    })
    .join('&');

  fetch('/email.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8',
    },
    body: searchParams,
  })
    .then((res) => {
      if (res.ok) {
        console.log(res.json());
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
};
</script>