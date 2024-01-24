<template>
  <div>
    <Nav />
  </div>

  <div class="section-padding-small mt-20">
    <div class="flex justify-center">
      <div class="w-full md:w-6/12">
        <h1 class="text-center">
          Contact Us
        </h1>

        <form @submit.prevent="submitForm" class="mt-10">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <input type="text" placeholder="First Name *" v-model="forms.firstName" class="tus-input" required>
            </div>
            <div>
              <input type="text" placeholder="Last Name *" v-model="forms.lastName" class="tus-input" required>
            </div>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 mt-6 gap-6">
            <div>
              <input type="text" placeholder="Company Name *" v-model="forms.companyName" class="tus-input" required>
            </div>
            <div>
              <input type="text" placeholder="Email *" v-model="forms.email" class="tus-input" required>
            </div>
          </div>
          <div class="grid grid-cols-1 mt-6">
            <div>
              <input type="text" placeholder="Subject *" v-model="forms.subject" class="tus-input" required>
            </div>
          </div>
          <div class="grid grid-cols-1 mt-6">
            <div>
              <textarea type="text" placeholder="How can we help you? *" v-model="forms.message" class="tus-input"></textarea>
            </div>
          </div>

          <div class="grid grid-cols-1 mt-6">
            <div>
              <button type="submit" class="btn-xlg-responsive">
                Send Message
              </button>
            </div>
          </div>


        </form>
      </div>
    </div>
  </div>
  <div>
    <Footer />
  </div>
</template>

<script setup lang="ts">
const forms = reactive({
  firstName: "",
  lastName: "",
  companyName: "",
  email: "",
  subject: "",
  message: "",
});

function submitForm(): void {
  const formData: Record<string, any> = {
    firstName: forms.firstName,
    lastName: forms.lastName,
    companyName: forms.companyName,
    email: forms.email,
    subject: forms.subject,
    message: forms.message,
  };

  // console.log("data to be sent", formData);

  const searchParams = new URLSearchParams();
  for (const key in formData) {
    searchParams.append(key, formData[key]);
  }

  // make the call
  fetch("/email.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded;charset=UTF-8",
    },
    body: searchParams.toString(),
  })
    .then((res) => {
      if (res.ok) {
        console.log(res.json());
        alert("Message sent successfully")
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
.tus-input {
  border: 1px solid #101010;
  padding: 16px;
  width: 100%;
  outline: none;
}
.tus-input::placeholder {
  color: #101010;
}

.btn-xlg-responsive {
  padding: 23px 18px;
  background: #101010;
  width: 100%;
  color: #fff;
}
@media (max-width:768px) {
  .banner-section {
    padding-top: 184px;
    padding-bottom: 100px;
  }
}
</style>
