<template>
  <div>
    <h1
      class="font-normal text-3xl text-gray leading-none mb-8"
    >Component Created with Render Function</h1>
    <hello-world></hello-world>
  </div>
</template>

 <script>
import HelloWorld from "./utilities/HelloWorld";

export default {
  components: {
    HelloWorld
  }
};
</script>

