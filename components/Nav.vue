<template>
  <div class="flex nav">
    <div class="w-8/12 md:w-7/12">
      <div class="nav-padding-left h-full">
        <nuxt-link to="/">
          <img src="../assets/images/tusore-logo.svg" alt="" />
        </nuxt-link>
      </div>
    </div>

    <div class="block md:hidden menu flex items-center" >
      <div @click="showMenu">
        <img src="../assets/images/ic-navbar.svg" alt="">
      </div>
      <a href="https://www.linkedin.com/company/tusore-limited/" target="_blank" class="bg-[#1C1844] h-full flex px-6 ml-6 justify-center">
        <div class="m-auto">
          <img src="../assets/images/ic_linkedin.svg" alt="" />
        </div>
      </a>
    </div>
    <div
      class="w-4/12 md:w-5/12"
      :class="showMobileMenu ? 'open-menu-cover' : 'closed-menu'"
    >
      <div class="block md:flex justify-between open-menu items-center h-full pl-6 pr-6 md:pr-0 mr-6 md:mr-0 menu-open-restyle">
        <div class="mt-8 md:mt-0">
          <nuxt-link to="/" class="nav-item"> Home </nuxt-link>
        </div>
        <div class="mt-8 md:mt-0">
          <nuxt-link to="/about-us" class="nav-item"> About us </nuxt-link>
        </div>
        <div class="mt-8 md:mt-0">
          <nuxt-link to="/services" class="nav-item"> Services </nuxt-link>
        </div>
        <div class="mt-8 md:mt-0">
          <nuxt-link to="/projects" class="nav-item"> Projects </nuxt-link>
        </div>
        <div class="flex h-full">
          <nuxt-link to="/contact" class="w-full md:w-auto">
            <div class="contact-btn text-[#FFFFFF]">
              <div class="">Contact us</div>
            </div>
          </nuxt-link>

          <a href="https://www.linkedin.com/company/tusore-limited/" target="_blank" class="hidden md:block">
            <div class="bg-[#1C1844] h-full flex px-3 justify-center">
              <nuxt-link to="/" class="m-auto">
                <img src="../assets/images/ic_linkedin.svg" alt="" />
              </nuxt-link>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
const showMobileMenu = ref(false);

const showMenu = () => {
  showMobileMenu.value = !showMobileMenu.value;
};
</script>

<style scoped>
.nav {
  border-bottom: 1px solid #101010;
}
.nav-padding-left {
  padding: 32px 20px;
  border-right: 1px solid #101010;
}
.contact-btn {
  padding: 32px 40px;
  background-color: #d50f0f;
}
.nav-item.router-link-active {
  color: #d50f0f;
}
.nav-item.router-link-active:hover {
  color: #d50f0f;
}

@media screen and (max-width: 768px) {
  .menu-open-restyle {
    padding-top: 60px;
    padding-bottom: 60px;
  }
  .nav {
    position: relative;
    width: 100%;
    left: 0;
  }
  .open-menu {
    height: auto;
    width: 100%;
    overflow: hidden;
    background: #FFFFFF;
  }
  .open-menu-cover {
    opacity: 1;
    width: 100%;
    height: 100%;
    position: fixed;
    overflow: hidden;
    z-index: 999;
    background: rgba(16, 16, 16, 0.5);
  }
  .closed-menu {
    opacity: 0;
    height: 0;
    padding: 0;
  }
  .menu {
    position: absolute;
    right: 0;
    top: 0;
    z-index: 9999;
    height: 100%;
  }
  .contact-btn {
    padding: 16px 20px;
    margin-top: 32px;
    width: 100%;
  }
}
</style>
