<template>
  <div>
    <transition name="slide-fade" mode="out-in">
      <slot></slot>
    </transition>
  </div>
</template>

<script>
export default {};
</script>

<style>
.slide-fade-enter {
  transform: translateX(10px);
  opacity: 0;
}

.slide-fade-leave-to {
  transform: translateX(-10px);
  opacity: 0;
}

.slide-fade-enter-active,
.slide-fade-leave-active {
  transition: all 0.2s ease;
}
</style>