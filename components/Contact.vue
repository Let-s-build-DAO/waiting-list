<template>
  <div class="w-custom">
    <form @submit.prevent="submitForm" action="" class="hush-forms">
      <h5 class="text-[#FFFFFF]">
        Get this property!
      </h5>

      <div class="mt-8">
        <div>
          <select class="hush-inputs" v-model="forms.option">
            <option value="0" disabled selected>Request call?</option>
            <option value="1">Yes</option>
            <option value="2">No</option>
          </select>
        </div>
      </div>

      <div class="mt-4">
        <input type="text" class="hush-inputs" placeholder="Full name*" v-model="forms.name">
      </div>
      <div class="mt-4">
        <input type="number" class="hush-inputs" placeholder="Phone number*" v-model="forms.phone">
      </div>
      <div class="mt-4">
        <input type="email" class="hush-inputs" placeholder="Email" v-model="forms.email">
      </div>
      <div class="mt-4">
        <textarea class="hush-inputs" cols="30" rows="3" placeholder="Any questions?*" v-model="forms.message"></textarea>
      </div>

      <div class="flex mt-6">
        <button type="submit" class="s-btnl-primary bg-[#8CC53F] text-[#FFFFFF]">SUBMIT</button>
      </div>
    </form>
  </div>
</template>

<script setup lang="ts">
const forms = reactive({
  name: "",
  email: "",
  option: "0",
  phone: "",
  message: "",
});

function submitForm(): void {
  const formData: Record<string, any> = {
    name: forms.name,
    email: forms.email,
    phone: forms.phone,
    option: forms.option,
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
        window.location.href = '/success';
      } else {
        throw new Error("Failed to send message");
      }
    })
    .catch((e) => {
      console.error(e);
      alert("Message not sent");
    });
}
watch([() => forms.name,], () => {
  localStorage.setItem("stored-input", JSON.stringify(forms.name,));
});
</script>

<style scoped>
.w-custom {
  width: 70%;
}
@media (max-width:821px) {
  .w-custom {
    width: 100%;
  }
}
.hush-forms {
  background: #262626;
  border-radius: 16px;
  padding: 40px 32px;
}
.hush-inputs {
  padding: 16px 20px;
  width: 100%;
  font-size: 16px;
  color: rgba(38, 38, 38, 1);
  appearance: none;
  position: relative;
  background-color: rgba(231, 232, 233, 1);
  transition: border-color 0.25s ease-in-out;
  line-height: 1.1;
  box-shadow: 0 1px 0 rgba(161, 161, 161, 1);
}

.hush-inputs:focus {
  outline: 0;
  box-shadow: 0;
  color: #1e1f21;
}
</style>