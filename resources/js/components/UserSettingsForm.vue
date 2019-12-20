<template>
  <div>
    <h1 class="font-normal text-3xl text-gray leading-none mb-8">Controlled Component</h1>

    <div>
      <form class="card md:w-1/2 items-center rounded-lg" @submit.prevent="submit">
        <h1 class="text-2xl font-bold mb-6">Your Settings</h1>
        <label class="block mb-6">
          <span class="form-label mb-2">Email Address</span>
          <input v-model="email" class="form-input" placeholder="you@example.com" />
        </label>
        <div class="mb-8">
          <span class="form-label mb-2">Newsletter</span>
          <div class="flex justify-between items-center">
            <button
              type="button"
              class="text-blue-dark hover:underline"
              @click="showAnnouncement = true"
            >
              Show Announcement Modal
              <announcement-modal :show="showAnnouncement" @close="showAnnouncement = false"></announcement-modal>
            </button>
            <toggle-input v-model="receiveNewsletter"></toggle-input>
          </div>
        </div>
        <div class="text-right">
          <button type="button" class="btn btn-blue">Update Settings</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import ToggleInput from "./utilities/ToggleInput.vue";
import AnnouncementModal from "./utilities/AnnouncementModal.vue";
export default {
  components: {
    ToggleInput,
    AnnouncementModal
  },
  data() {
    return {
      email: "jane@example.com",
      receiveNewsletter: false,
      showAnnouncement: false
    };
  },
  methods: {
    submit() {
      console.log("Submitting preferences...", {
        email: this.email,
        receiveNewsletter: this.receiveNewsletter
      });
    }
  }
};
</script>
