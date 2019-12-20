<template>
  <div class="card md:w-1/2 items-center rounded-lg">
    <h1 class="text-2xl font-bold mb-6">Your Contacts</h1>

    <div v-if="loading" class="text-xl font-bold">Loading ...</div>
    <div v-else>
      <div v-for="contact in contacts" :key="contact.id" class="flex items-center py-6">
        <img :src="contact.picture.medium" class="h-12 w-12 rounded-full block mr-2" alt />
        <div>
          <div class="font-bold">{{ contact.name.first }} {{ contact.name.last }}</div>
          <div class="text-grey-dark">{{ contact.email }}</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    contacts: null,
    loading: false
  }
};
</script>
