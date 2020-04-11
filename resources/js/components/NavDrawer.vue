<template>
  <div>
    <div ref="nav" class="mb-24 md:mb-0">
      <div
        class="md:px-8 fixed md:relative bg-white w-full top-0 bg-white md:bg-transparent shadow md:shadow-none"
      >
        <nav class="relative flex flex-wrap items-center justify-between md:py-4">
          <div class="relative z-10 flex-shrink-0 pl-4 py-2 md:hidden">
            <img src="/images/logo.svg" />
          </div>

          <h3 class="text-xl font-normal md:hidden">Advanced Vue Component Design</h3>
          <div class="flex-shrink-0 pr-4 md:hidden">
            <button
              ref="openButton"
              @click="open"
              type="button"
              class="block text-gray-900 focus:outline-none focus:text-black"
              aria-label="Menu"
            >
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M3 6C3 5.44772 3.44772 5 4 5H20C20.5523 5 21 5.44772 21 6C21 6.55228 20.5523 7 20 7H4C3.44772 7 3 6.55228 3 6Z"
                />
                <path
                  d="M3 12C3 11.4477 3.44772 11 4 11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H4C3.44772 13 3 12.5523 3 12Z"
                />
                <path
                  d="M4 17C3.44772 17 3 17.4477 3 18C3 18.5523 3.44772 19 4 19H20C20.5523 19 21 18.5523 21 18C21 17.4477 20.5523 17 20 17H4Z"
                />
              </svg>
            </button>
          </div>

          <aside class="w-128 pt-8 hidden md:block md:bg-transparent">
            <section class="mb-10 px-8">
              <h5 class="uppercase text-xl font-bold mb-5 text-base">The Components</h5>

              <ul>
                <li class="text-lg mt-4 leading-loose">
                  <router-link class="text-black" to="/" exact>Controlled Component</router-link>
                </li>
                <li class="text-lg mt-4 leading-loose">
                  <router-link class="text-black" to="/render-function">Render Function</router-link>
                </li>
                <li class="text-lg mt-4 leading-loose">
                  <router-link class="text-black" to="/data-provider">Data Provider Component</router-link>
                </li>
                <li class="text-lg mt-4 leading-loose">
                  <router-link class="text-black" to="/renderless-components">Renderless Components</router-link>
                </li>
                <li class="text-lg mt-4 leading-loose">
                  <router-link class="text-black" to="/compound-components">Compound Components</router-link>
                </li>
                <li class="text-lg mt-4 leading-loose">
                  <router-link
                    class="text-black"
                    to="/search-select-component"
                  >Search Select Components</router-link>
                </li>
              </ul>
            </section>

            <section class="mb-10 px-8">
              <h5 class="uppercase text-xl font-bold mb-5 text-base">Tailwind UI</h5>

              <ul>
                <li class="text-lg mt-4 leading-loose">
                  <router-link class="text-black" to="/blog-section">Blog Section</router-link>
                </li>
                <li class="text-lg mt-4 leading-loose">
                  <router-link class="text-black" to="/tuple-pricing">Tuple Pricing</router-link>
                </li>
              </ul>
            </section>
          </aside>
        </nav>
      </div>
      <div class="md:hidden">
        <!-- Off-canvas menu background overlay -->
        <transition
          enter-class="opacity-0"
          enter-active-class="ease-out transition-medium"
          enter-to-class="opacity-100"
          leave-class="opacity-100"
          leave-active-class="ease-out transition-medium"
          leave-to-class="opacity-0"
          appear
        >
          <div v-show="isOpen" class="z-10 fixed inset-0 transition-opacity">
            <div @click="close" class="absolute inset-0 bg-black opacity-50" tabindex="-1"></div>
          </div>
        </transition>

        <!-- Off-canvas menu -->
        <transition
          enter-class="translate-x-full"
          enter-active-class="ease-out transition-slow"
          enter-to-class="translate-x-0"
          leave-class="translate-x-0"
          leave-active-class="ease-in transition-medium"
          leave-to-class="translate-x-full"
          appear
        >
          <div
            v-show="isOpen"
            class="z-10 fixed inset-y-0 right-0 max-w-xs w-full bg-white transition-transform overflow-y-auto"
          >
            <div class="relative z-10 bg-white">
              <div :class="isOpen ? 'block' : 'hidden'" class="absolute top-0 right-0 p-4">
                <button
                  ref="closeButton"
                  @click="close"
                  type="button"
                  class="text-gray-600 focus:outline-none focus:text-gray-900"
                  aria-label="Close"
                >
                  <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                    <path
                      d="M18.2929 19.7071C18.6834 20.0976 19.3166 20.0976 19.7071 19.7071C20.0976 19.3166 20.0976 18.6834 19.7071 18.2929L13.4142 12L19.7071 5.70711C20.0976 5.31658 20.0976 4.68342 19.7071 4.29289C19.3166 3.90237 18.6834 3.90237 18.2929 4.29289L12 10.5858L5.70711 4.29289C5.31658 3.90237 4.68342 3.90237 4.29289 4.29289C3.90237 4.68342 3.90237 5.31658 4.29289 5.70711L10.5858 12L4.29289 18.2929C3.90237 18.6834 3.90237 19.3166 4.29289 19.7071C4.68342 20.0976 5.31658 20.0976 5.70711 19.7071L12 13.4142L18.2929 19.7071Z"
                    />
                  </svg>
                </button>
              </div>

              <div class="px-4 pt-4 pb-6">
                <img class="py-4" src="/images/logo.svg" alt />
                <h3
                  class="mt-8 block text-xl font-bold text-black uppercase tracking-wider"
                >Products</h3>

                <router-link
                  class="mt-4 block font-medium text-gray-900 hover:text-gray-700"
                  to="/"
                  exact
                >Controlled Component</router-link>

                <router-link
                  class="mt-4 block font-medium text-gray-900 hover:text-gray-700"
                  to="/render-function"
                >Render Function</router-link>

                <router-link
                  class="mt-4 block font-medium text-gray-900 hover:text-gray-700"
                  to="/data-provider"
                >Data Provider Component</router-link>

                <router-link
                  class="mt-4 block font-medium text-gray-900 hover:text-gray-700"
                  to="/renderless-components"
                >Renderless Components</router-link>

                <router-link
                  class="mt-4 block font-medium text-gray-900 hover:text-gray-700"
                  to="/compound-components"
                >Compound Components</router-link>

                <router-link
                  class="mt-4 block font-medium text-gray-900 hover:text-gray-700"
                  to="/search-select-component"
                >Search Select Components</router-link>
              </div>

              <div class="border-t-2 border-gray-200 px-4">
                <h3
                  class="mt-8 block text-xl font-bold text-black uppercase tracking-wider"
                >Tailwind UI</h3>

                <router-link
                  class="mt-4 block font-medium text-gray-900 hover:text-gray-700"
                  to="/blog-section"
                >Blog Section</router-link>

                <router-link
                  class="mt-4 block font-medium text-gray-900 hover:text-gray-700"
                  to="/tuple-pricing"
                >Tuple Pricing</router-link>
              </div>
            </div>
          </div>
        </transition>
      </div>
    </div>
  </div>
</template>

<script>
import { throttle } from "lodash";

export default {
  data() {
    return {
      isOpen: false,
      isVisible: false
    };
  },
  //   mounted() {
  //     let navBar = this.$refs["nav"];
  //     let originalOffsetTop = navBar.offsetTop;

  //     window.addEventListener(
  //       "scroll",
  //       throttle(
  //         function() {
  //           if (window.scrollY >= originalOffsetTop) {
  //             navBar.classList.add("is-fixed-to-top");
  //           } else navBar.classList.remove("is-fixed-to-top");
  //         },
  //         { passive: true }
  //       ),
  //       300
  //     );
  //   },
  methods: {
    open() {
      this.isOpen = true;
      this.$nextTick(() => {
        this.$refs.closeButton.focus();
      });
    },
    close() {
      this.isOpen = false;
      this.$nextTick(() => {
        this.$refs.openButton.focus();
      });
    }
  },
  watch: {
    isOpen: {
      immediate: true,
      handler(isOpen) {
        if (isOpen) {
          document.body.style.setProperty("overflow", "hidden");
        } else {
          document.body.style.removeProperty("overflow");
        }
      }
    }
  }
};
</script>
