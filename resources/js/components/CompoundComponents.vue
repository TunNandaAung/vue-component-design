<template>
  <div>
    <h1 class="font-normal text-3xl text-gray leading-none mb-8">Compound Components</h1>
    <div class="md:w-1/2">
      <accordion-list>
        <accordion-item :item-id="1">
          <template slot="header">Item A</template>
          <template
            slot="content"
          >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec finibus auctor massa, vitae posuere sem tincidunt eget. Duis non vestibulum diam. Pellentesque eleifend interdum mollis. Donec porttitor dui enim. Maecenas a semper sem. Nunc molestie turpis vitae sem auctor, non venenatis velit ultricies.</template>
        </accordion-item>
        <accordion-item :item-id="2">
          <template slot="header">Item B</template>
          <template
            slot="content"
          >Vestibulum nec urna non nisi viverra vehicula ut sed metus. Cras scelerisque condimentum nunc ut mattis. Curabitur euismod sagittis efficitur. Cras vel orci consectetur, ullamcorper magna vitae, sodales mauris. Aliquam tempus volutpat mi. Nunc vitae molestie ante. In sed varius tortor.</template>
        </accordion-item>
        <accordion-item :item-id="3">
          <template slot="header">Item C</template>
          <template
            slot="content"
          >Sed porttitor mattis egestas. Duis nec rhoncus ligula. Etiam pellentesque mattis mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas vel dapibus nulla. Phasellus lobortis nibh et faucibus tincidunt. Phasellus non iaculis turpis, vitae gravida lacus.</template>
        </accordion-item>
      </accordion-list>
    </div>

    <div class="md:w-1/2 card mt-8">
      <h1 class="text-2xl font-bold mb-6">Your Contacts</h1>

      <sortable-list v-model="contacts">
        <div class="contact-list" slot-scope="{ items: contacts }">
          <sortable-item v-for="contact in contacts" :key="contact.id">
            <div class="contact-list-item">
              <div class="contact-list-contact">
                <img :src="contact.avatar" class="contact-list-avatar" alt />
                <div>
                  <div class="contact-list-name">{{ contact.name }}</div>
                  <div class="contact-list-email">{{ contact.email }}</div>
                </div>
              </div>
              <sortable-handle>
                <svg
                  class="contact-list-handle"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                >
                  <path
                    fill-rule="evenodd"
                    d="M14 4h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1zM8 4h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1zm6 6h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1zm-6 0h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1zm6 6h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1zm-6 0h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1z"
                  />
                </svg>
              </sortable-handle>
            </div>
          </sortable-item>
        </div>
      </sortable-list>
    </div>
  </div>
</template>

<script>
import AccordionList from "./utilities/accordion/AccordionList";
import AccordionItem from "./utilities/accordion/AccordionItem";
import SortableList from "./utilities/sortable/SortableList";
import SortableItem from "./utilities/sortable/SortableItem";
import SortableHandle from "./utilities/sortable/SortableHandle";

export default {
  components: {
    AccordionList,
    AccordionItem,
    SortableList,
    SortableItem,
    SortableHandle
  },

  created() {},

  data() {
    return {
      contacts: [
        {
          id: 1,
          name: "Alfreda Ferreira",
          email: "alfreda.ferreira@example.com",
          avatar: "https://randomuser.me/api/portraits/med/women/6.jpg"
        },
        {
          id: 2,
          name: "Leevi Wirtanen",
          email: "leevi.wirtanen@example.com",
          avatar: "https://randomuser.me/api/portraits/med/men/19.jpg"
        },
        {
          id: 3,
          name: "Kaitlin Sutton",
          email: "kaitlin.sutton@example.com",
          avatar: "https://randomuser.me/api/portraits/med/women/2.jpg"
        },
        {
          id: 4,
          name: "Alice Wilson",
          email: "alice.wilson@example.com",
          avatar: "https://randomuser.me/api/portraits/med/women/62.jpg"
        },
        {
          id: 5,
          name: "Etienne Roy",
          email: "etienne.roy@example.com",
          avatar: "https://randomuser.me/api/portraits/med/men/4.jpg"
        }
      ]
    };
  }
};
</script>

<style>
</style>