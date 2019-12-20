<template>
  <div>
    <h1 class="font-normal text-3xl text-gray leading-none mb-8">Data Provider Component</h1>

    <fetch-json url="/api/contact">
      <contact-list
        slot-scope="{ response: contacts,loading }"
        :loading="loading"
        :contacts="contacts"
      ></contact-list>
    </fetch-json>
  </div>
</template>

<script>
import ContactList from "./utilities/ContactList";
import FetchJson from "./utilities/FetchJson";

export default {
  components: {
    ContactList,
    FetchJson
  }
};
</script>

<style>
</style>