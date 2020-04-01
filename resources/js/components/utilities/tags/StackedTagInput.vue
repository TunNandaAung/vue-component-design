<template>
  <renderless-tag-input
    :tags="tags"
    @update="(newTags) => $emit('update', newTags)"
    :remove-on-backspace="false"
  >
    <div
      class="stacked-tag-input"
      slot-scope="{ tags, addTag, removeButtonEvents, inputProps, inputEvents }"
    >
      <div class="stacked-tag-input-form">
        <input class="form-input" placeholder="Add tag..." v-bind="inputProps" v-on="inputEvents" />
        <button class="btn btn-indigo" @click="addTag">Add Tag</button>
      </div>
      <transition-group tag="ul" name="slide-up" class="stacked-tag-list" appear>
        <li v-for="tag in tags" :key="tag">
          {{ tag }}
          <button
            type="button"
            class="stacked-tag-link"
            v-on="removeButtonEvents(tag)"
          >Remove</button>
        </li>
      </transition-group>
    </div>
  </renderless-tag-input>
</template>

<script>
import RenderlessTagInput from "./RenderlessTagInput.vue";

export default {
  components: {
    RenderlessTagInput
  },
  model: {
    prop: "tags",
    event: "update"
  },
  props: {
    tags: { required: true }
  },
  data() {
    return {};
  },
  methods: {}
};
</script>

<style>
.slide-up-enter {
  transform: translateY(10px);
  opacity: 0;
}

.slide-up-enter-active,
.slide-up-leave-active {
  transition: all 0.2s ease;
}

.slide-up-leave-to {
  transform: translateY(-10px);
  opacity: 0;
}
</style>