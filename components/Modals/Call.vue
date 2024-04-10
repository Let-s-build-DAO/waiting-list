<template>
  <div class="modal" @click.self="closeMenu">
    <div class="modal-content">
      <span class="close" @click="closeMenu">&times;</span>
      <p class="big-paragraph">Tap to call</p>
      <ul class="mt-3">
        <li><a href="tel:+18257344811"><h5>+1 825-734-4811</h5></a></li>
      </ul>
    </div>
  </div>
</template>

<script setup lang="ts">
const emit = defineEmits(["close"]);
const closeMenu = () => {
  emit("close");
};
</script>

<style scoped>
/* Styles for your modal */
.modal {
  position: fixed;
  z-index: 9999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.4);
  display: flex;
  justify-content: center;
  align-items: center;
}

.modal-content {
  border: 2px solid #000000;
  background-color: #fefefe;
  padding: 30px;
  border-radius: 10px;
  position: absolute;
  right: 2%;
  bottom: 22%;
}

.close {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 20px;
  cursor: pointer;
}
</style>
