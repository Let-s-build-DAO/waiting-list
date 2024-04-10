<template>
  <div class="fixed-nav">
    <img src="../assets/images/header-border.svg" class="w-screen" alt="">
    <div class="nav-padding">
      <div class="nav-bottom flex justify-between items-center">
        <div class="flex items-center gap-10">
          <nuxt-link to="/">
            <div>
              <img src="../assets/images/vuche-logo.svg" alt="" />
            </div>
          </nuxt-link>
        </div>

        <div class="flex items-center gap-6">
          <div>
            <nuxt-link to="/contact">
              <button type="submit" class="btn-wwu flex items-center gap-2">
                <img src="../assets/images/ic-work-w.svg" alt="">
                WORK WITH US
              </button>
            </nuxt-link>
          </div>
          <div class="cursor-pointer">
            <img src="../assets/images/ic-nav-menu-b.svg" @click="menuOpen" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div v-if="showMenu">
    <ModalsMenu @close="showMenu = false" />
  </div>
</template>

<script setup lang="ts">
const showMenu = ref(false);
const menuOpen = () => {
  showMenu.value = !showMenu.value;
};
</script>

<style>
.nav-dropdown {
  flex-direction: column;
  top: 100%;
}
.dropdown-content {
  display: none;
  width: 170px;
  z-index: 1000;
  position: absolute;
  left: 65%;
  transform: translateX(-70%);
  padding: 0 24px 24px 24px;
}

.dropdown-item {
  padding-top: 24px;
  white-space: nowrap;
}

.coming-soon {
  background: #f07d22;
  border-radius: 25px;
  padding: 6px 8px;
  font-size: 10px;
  color: #ffffff;
  display: inline-flex;
  margin-top: 2px;
}

.nav-dropdown:hover .dropdown-content {
  display: flex;
}
.fixed-nav {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 999;
  background-color: #ffffff;
}
.nav-padding {
  padding: 24px 80px 24px 80px;
}
.nav-item.router-link-active {
  color: var(--c-default);
  font-variation-settings: "slnt" 0, "wght" 500;
}
.nav-item.router-link-active:hover {
  color: var(--c-default);
}
.nav-item {
  color: var(--c-default-lite);
  font-size: 16px;
  font-variation-settings: "slnt" 0, "wght" 400;
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
}
@media (max-width: 821px) {
  .nav-padding {
    padding: 24px 18px;
  }
  .open-mobile {
    padding: 20px 24px 80px 24px;
    width: 100%;
    display: flex;
    height: 100vh;
    text-align: center;
    justify-content: center;
    margin-left: 50%;
    margin-top: 0;
    transform: translateX(-50%);
  }
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
