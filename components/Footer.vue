<template>
  <div class="padding-x padding-y bg-[#F6F8F9] relative z-[9999999]">
    <div class="block md:flex">
      <div class="w-full md:w-4/12">
        <div class="w-full md:w-8/12 flex justify-center md:justify-start">
          <img src="../assets/images/ic-acad-logo.svg" alt="" />
        </div>
      </div>

      <div class="w-full md:w-4/12 mt-5 md:mt-0">
        <div class="flex justify-center text-center">
          <div class="w-full md:w-10/12">
            <p class="mt-4">
              #6, Ochokwu Street, behind Globus Bank, Off Okpanam road, GRA
              Asaba.
            </p>

            <div class="mt-6">
              <a href="tel:2348132794689">
                <div class="flex items-center justify-center">
                  <div>
                    <img src="../assets/images/ic-phone.svg" alt="" />
                  </div>
                  <div class="ml-1">+2348132794689</div>
                </div>
              </a>
            </div>
            <div class="mt-2">
              <a href="mailto:info@hushhomesng.com">
                <div class="flex items-center justify-center">
                  <div>
                    <img src="../assets/images/ic-email.svg" alt="" />
                  </div>
                  <div class="ml-1">info@hushhomesng.com</div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="w-full md:w-4/12 mt-5 md:mt-0">
        <div class="flex justify-center md:justify-end">
          <div class="flex mt-8">
            <!-- <div>
                <img src="../assets/images/ic-linkedin.svg" alt="">
              </div>
              <div class="ml-2">
                <img src="../assets/images/ic-x.svg" alt="">
              </div> -->
            <div>
              <a href="https://www.facebook.com/hushhomes1" target="_blank">
                <img src="../assets/images/ic-fb.svg" alt="" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-20">
      <hr />
    </div>

    <div class="flex justify-center text-center mt-10">
      <div class="small-paragraph">
        Copyright © {{ new Date().getFullYear() }} Hushhomes. All rights
        reserved. <span class="underline"><a href="https://hushhomesng.com/privacy-policy" target="_blank">Privacy Policy</a></span>. Dev:
        <span
          ><a href="https://chigisoft.com" class="ml-1 inline-flex"
            >Chigisoft
            <img
              src="../assets/images/chigisoft-icon.svg"
              class="ml-2"
              alt="" /></a
        ></span>
      </div>
    </div>
  </div>
</template>
