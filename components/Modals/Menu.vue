<template>
  <div>
    <div class="modal-container relative" @click.self="closeMenu">
      <div class="modal-left">
        <div class="flex justify-between items-center">
          <div>
            <div class="flex items-center gap-2 md:gap-4 lg:gap-5">.</div>
          </div>

          <div>
            <p
              class="closee flex items-center cursor-pointer text-[#FFFFFF]"
              @click="closeMenu"
            >
            Close
              <img src="~/assets/images/ic-closee.svg" class="ml-1" alt="" />
            </p>
          </div>
        </div>

        <div class="flex justify-center mo-padding">
          <div class="w-full">
            <div class="block md:flex lg:flex gap-14 items-end relative">
              <div class="w-full md:w-1/2 lg:w-8/12">
                <div>
                  <div class="mt-6 md:mt-10 lg:mt-10">
                    <h1 class="menu">
                      <nuxt-link to="/">
                        Home
                      </nuxt-link>
                    </h1>
                  </div>
                  <div class="mt-6 md:mt-10 lg:mt-10">
                    <h1 class="menu">
                      <nuxt-link to="/about">
                        About Us
                      </nuxt-link>
                    </h1>
                  </div>
                  <div class="mt-6 md:mt-10 lg:mt-10">
                    <h1 class="menu">
                      <nuxt-link to="/work">
                        Our Works
                      </nuxt-link>
                    </h1>
                  </div>
                  <div class="mt-6 md:mt-10 lg:mt-10">
                    <h1 class="menu">
                      <nuxt-link to="/contact">
                        Contact
                      </nuxt-link>
                    </h1>
                  </div>
                </div>

                <div class="block md:flex justify-between items-end">
                  <div class="mt-10 block md:flex lg:flex items-center gap-5">
                    <div class="flex">
                      <div class="soc-border">
                        <a
                          href="https://dribbble.com/vuche"
                          target="blank"
                          class="social-icons socials-logo flex justify-center"
                        >
                          <img
                            src="~/assets/images/ic-dribbble.svg"
                            alt=""
                          />
                        </a>
                      </div>
          
                      <div class="soc-border">
                        <a
                          href="https://www.instagram.com/vuchestudio/"
                          target="blank"
                          class="social-icons socials-logo flex justify-center"
                        >
                          <img
                            src="~/assets/images/ic-instagram.svg"
                            alt=""
                          />
                        </a>
                      </div>
          
                      <div class="soc-border">
                        <a
                          href="https://twitter.com/VucheStudio"
                          target="blank"
                          class="social-icons socials-logo flex justify-center"
                        >
                          <img
                            src="~/assets/images/ic-x-ft.svg"
                            alt=""
                          />
                        </a>
                      </div>
          
                      <div class="soc-border">
                        <a
                          href="https://chigisoft.com/blog"
                          target="blank"
                          class="social-icons socials-logo flex justify-center"
                        >
                          <img src="@/assets/images/ic-whatsapp.svg" alt="" />
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="mt-5 md:mt-0">
                    <div>
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
const emit = defineEmits(["close"]);
const closeMenu = () => {
  emit("close");
};
</script>

<style scoped>
.menu a {
  color: #1E1F21;
  transition: 0.3s ease-in-out;
}
.menu .router-link-active {
  color: #FBB56C;
  transition: 0.3s ease-in-out;
}
.menu:hover a {
  color: #FBB56C;
  margin-left: 20px;
  transition: 0.3s ease-in-out;
}
</style>
