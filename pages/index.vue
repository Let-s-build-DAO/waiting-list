<template>
  <div class="flex h-screen overflow-auto py-10 px-5 md:px-20 dao-bg">
    <div class="floating-logo">
      <img src="../assets/images/lbdao-logo.svg" class="lbdao-logo" alt="">
    </div>
    <div class="flex justify-center m-auto">
      <div class="w-full md:w-9/12">
        <h1 class="bangers-regular text-center text-[#000000]">
          Be the First to Own a <span class="text-color">Lazy NFT</span> Join the Waitlist Today!
        </h1>
        <div class="flex justify-center mt-10">
          <button class="button-default button-slanted cursor-pointer" @click="showModal">
            <span class="button-slanted-content">JOIN The WAITLIST</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div v-if="isVisible" class="modal-overlay">
    <div class="modal-content">
      <div class="flex justify-center">
        <h2 class="bangers-regular text-center text-[#000000] w-full md:w-9/12">
          Be the First to Own a <span class="text-color">Lazy NFT</span> Join the Waitlist Today!
        </h2>
      </div>
      <form @submit.prevent="joinWaitlist">
        <div class="grid grid-cols-1 gap-5 mt-8">
          <div>
            <input type="text" v-model="firstName" placeholder="First Name" class="dao-input" required>
          </div>
          <div>
            <input type="text" v-model="lastName" placeholder="Last Name" class="dao-input" required>
          </div>
          <div>
            <input type="email" v-model="email" placeholder="Email Address" class="dao-input" required>
          </div>
        </div>

        <div class="flex justify-center mt-6">
          <button type="submit" class="button-default button-slanted cursor-pointer">
            <span v-if="!isLoading" class="button-slanted-content">JOIN The WAITLIST</span>
            <span v-if="isLoading">loading...</span>
          </button>
        </div>
      </form>
      <button @click="showModal" class="btn-close">
        Close
      </button>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import axios from 'axios';
import { useRuntimeConfig } from '#app';

const config = useRuntimeConfig();
const isVisible = ref(false);
const firstName = ref('');
const lastName = ref('');
const email = ref('');
const isLoading = ref(false);
const showModal = () => {
  isVisible.value = !isVisible.value;
};

const joinWaitlist = async () => {
  try {
    isLoading.value = true;
    const response = await axios.post('https://connect.mailerlite.com/api/subscribers', {
      firstName: firstName.value,
      lastName: lastName.value,
      email: email.value,
    }, {
      headers: {
        'Authorization': `Bearer ${config.public.TOKEN}`,
      },
    });
    console.log(response.data);
    alert('Successfully joined the waitlist!');
    showModal(); // Close the modal after successful submission
  } catch (error) {
    console.error('There was an error joining the waitlist:', error);
    alert('Failed to join the waitlist. Please try again later.');
  }
};
</script>

<style scoped>
.lbdao-logo {
  height: 58px;
  width: auto;
}
.dao-bg {
  background: url(../assets/images/dao-bg.png);
  background-size: cover;
}
.text-color {
  background: linear-gradient(rgba(83, 32, 140, 1), rgba(95, 139, 214, 1), rgba(7, 157, 232, 1)); 
  -webkit-text-fill-color: transparent; 
  -webkit-background-clip: text; 
}
.floating-logo {
  position: absolute;
  top: 20px;
  left: 50%;
  transform: translateX(-50%);
}
.dao-input {
  width: 100%;
  background-color: rgba(202, 202, 202, 0.2);
  padding: 16px;
  border-radius: 10px;
}

.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 1000;
}

.modal-content {
  background: rgba(243, 243, 243, 1);
  padding: 30px 20px;
  border-radius: 24px;
  text-align: center;
  width: 40%;
  position: relative;
}
.btn-close {
  position: absolute;
  top: -10px;
  right: -10px;
  background: #FFFFFF;
  padding: 10px;
  border-radius: 12px;
  box-shadow: 0 1px 0 rgba(30, 31, 33, 0.8);
  font-family: "Bangers", system-ui;
  font-weight: 400;
  font-style: normal;
}
@media (max-width: 821px) {
  .modal-content {
    background: rgba(243, 243, 243, 1);
    padding: 30px 20px;
    border-radius: 24px;
    text-align: center;
    width: 90%;
    position: relative;
  }
}
</style>
