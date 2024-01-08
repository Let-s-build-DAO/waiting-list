<template>
  <div class="fixed-nav">
    <div class="nav-padding">
      <div class="nav-bottom flex justify-between items-center">
        <div class="flex items-center gap-10">
          <nuxt-link to="/">
            <div>
              <img src="@/assets/images/ic-acad-logo.svg" alt="" />
            </div>
          </nuxt-link>
        </div>
        <div class="gap-10 hidden md:hidden lg:flex items-center">
          <div>
            <div
              :class="{
                'opacity-100': $route.path === '/',
                'opacity-0': $route.path !== '/',
              }"
            >
              <img src="../assets/images/ic-menu-indicator.svg" alt="" />
            </div>
            <nuxt-link to="/" class="nav-item"> HOME </nuxt-link>
          </div>

          <div>
            <div
              :class="
                $route.path.includes('/about') ? 'opacity-100' : 'opacity-0'
              "
            >
              <img src="../assets/images/ic-menu-indicator.svg" alt="" />
            </div>
            <nuxt-link to="/" class="nav-item"> ABOUT US </nuxt-link>
          </div>

          <div>
            <div
              :class="
                $route.path.includes('/services') ? 'opacity-100' : 'opacity-0'
              "
            >
              <img src="../assets/images/ic-menu-indicator.svg" alt="" />
            </div>
            <nuxt-link to="/" class="nav-item"> FACULTY </nuxt-link>
          </div>

          <div>
            <div
              :class="
                $route.path.includes('/deals') ? 'opacity-100' : 'opacity-0'
              "
            >
              <img src="../assets/images/ic-menu-indicator.svg" alt="" />
            </div>
            <nuxt-link to="/" class="nav-item"> CONTACT </nuxt-link>
          </div>

          <div>
            <a href="https://app.hushhomesng.com" target="_blank">
              <button
                type="submit"
                class="s-btnl-primary bg-[#3C6F55] text-[#FFFFFF]"
              >
                SIGN UP
              </button>
            </a>
          </div>
        </div>

        <div class="open relative z-[999999]" @click="showMenu">
          <img src="../assets/images/ic-nav.svg" alt="" />
        </div>
      </div>
    </div>
  </div>

  <!-- Your mobile menu content -->
  <div
    v-if="showMobileMenu"
    class="bg-[#4A4A4A80] fixed h-screen w-full z-[999999999]"
  >
    <div class="bg-[#FFFFFF] z-[9998] open-mobile">
      <div class="open absolute top-5 right-4" @click="showMenu">
        <img src="../assets/images/ic-nav.svg" alt="" />
      </div>
      <div class="gap-6 block md:flex mt-20">J
        <div class="mt-6">
          <nuxt-link to="/" class="nav-item"> HOME </nuxt-link>
        </div>
        <div class="mt-6">
          <nuxt-link to="/" class="nav-item"> ABOUT US </nuxt-link>
        </div>
        <div class="mt-6">
          <nuxt-link to="/" class="nav-item"> FACULTY </nuxt-link>
        </div>
        <div class="mt-6">
          <nuxt-link to="/" class="nav-item"> CONTACT </nuxt-link>
        </div>
        <div class="mt-6">
          <a href="https://app.hushhomesng.com" target="_blank">
            <button
              type="submit"
              class="s-btnl-primary bg-[#3C6F55] text-[#FFFFFF]"
            >
              SIGN UP
            </button>
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

<style>
.fixed-nav {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 999;
  background-color: #ffffff;
}
.nav-padding {
  padding: 25px 160px 25px 160px;
}
.img-dropdown {
  height: 40px;
  max-width: 40px;
}
.flier {
  width: 100%;
  background: rgba(232, 232, 232, 1);
  padding: 16px 160px;
}
.nav-item.router-link-active {
  color: rgba(30, 31, 33, 1);
}
.nav-item.router-link-active:hover {
  color: rgba(30, 31, 33, 1);
}
.open-mobile {
  padding: 20px 24px 80px 24px;
  width: 100%;
  display: flex;
  text-align: center;
  justify-content: center;
  margin-left: 50%;
  margin-top: 37px;
  transform: translateX(-50%);
  border-radius: 16px 16px 0 0;
}
@media (max-width: 821px) {
  .nav-padding {
    padding: 24px 18px;
  }
  .open-mobile {
    padding: 20px 24px 80px 24px;
    width: 90%;
    display: flex;
    text-align: center;
    justify-content: center;
    margin-left: 50%;
    margin-top: 37px;
    transform: translateX(-50%);
    border-radius: 16px 16px 0 0;
  }
}

.nav-item {
  color: rgba(30, 31, 33, 0.6);
  font-size: 14px;
  font-family: paralucent, sans-serif;
  font-weight: 500;
  font-style: normal;
}

.open {
  display: none;
}

@media screen and (max-width: 768px) {
  .open-menu {
    opacity: 1;
    height: 150px;
  }

  .closed-menu {
    opacity: 0;
    height: 0;
    padding: 0;
  }

  .open {
    display: block;
    text-align: right;
    padding: 0 10px 10px 0;
  }
}
</style>
