<template>
  <div>
    <h1 class="font-normal text-3xl text-gray leading-none mb-8">Renderless Components</h1>

    <div class="card md:w-1/2 mt-8">
      <label class="form-label mb-2">Stacked Tag Input</label>
      <stacked-tag-input v-model="tags"></stacked-tag-input>
    </div>

    <div class="card md:w-1/2 mt-8">
      <label class="form-label mb-2">Inline Tag Input</label>
      <inline-tag-input v-model="tags"></inline-tag-input>
    </div>

    <div class="card md:w-1/2 mt-8">
      <label class="form-label mb-2">Original Tag Input</label>
      <tag-input v-model="tags"></tag-input>
    </div>
  </div>
</template>

<script>
import TagInput from "./utilities/tags/TagInput.vue";
import RenderlessTagInput from "./utilities/tags/RenderlessTagInput.vue";
import InlineTagInput from "./utilities/tags/InlineTagInput.vue";
import StackedTagInput from "./utilities/tags/StackedTagInput.vue";

export default {
  components: {
    TagInput,
    RenderlessTagInput,
    InlineTagInput,
    StackedTagInput
  },
  data() {
    return {
      tags: ["awesome", "excellent", "amazing"]
    };
  }
};
</script>

