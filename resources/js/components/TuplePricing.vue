<template>
  <div class="flex flex-col max-w-sm bg-white rounded-lg shadow-lg">
    <header class="flex justify-between items-center px-4 py-6">
      <div>
        <img src="/images/laracasts-logo.svg" alt="Laracasts" />
      </div>

      <div>
        <button class="block hover:text-gray-900">
          <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
            <path
              d="M3 6a1 1 0 011-1h16a1 1 0 110 2H4a1 1 0 01-1-1zM3 12a1 1 0 011-1h16a1 1 0 110 2H4a1 1 0 01-1-1zM4 17a1 1 0 100 2h7a1 1 0 100-2H4z"
            />
          </svg>
        </button>
      </div>
    </header>

    <main class="pt-6 px-4">
      <h1 class="max-w-xs text-center text-2xl font-bold leading-snug text-gray-900">
        <span class="relative text-white">
          <span
            aria-hidden
            class="absolute inset-0 bg-indigo-600"
            style="transform: skewY(-0.5deg) scaleX(1.05);"
          ></span>
          <span class="relative text-white">Pays for itself</span>
        </span> with one great pairing session
      </h1>

      <p
        class="mt-4 text-gray-700 text-center"
      >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo inventore nihil laudantium, enim magni iusto qui doloribus dolore ducimus dicta reprehenderit a atque cum id, repellat expedita, optio dolorem. Odio.</p>

      <div class="mt-10 p-4 bg-indigo-600 rounded-lg shadow-md">
        <div class="pt-2 pb-3 border-b border-indigo-500">
          <h2 class="text-lg text-white text-center">Developer Teams</h2>
          <div class="mt-2 flex items-center justify-center">
            <div class="text-7xl font-bold tracking-tighter text-white">$25</div>

            <div class="ml-4 text-sm text-white font-medium">
              per user
              <br />per month
            </div>
          </div>
        </div>

        <div>
          <ul class="py-6 text-sm text-white font-medium">
            <li class="flex items-center">
              <svg
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 26 26"
                class="text-white h-5 w-5"
              >
                <path
                  d="M 6 1 C 3.253906 1 1 3.253906 1 6 L 1 20 C 1 22.746094 3.253906 25 6 25 L 20 25 C 22.746094 25 25 22.746094 25 20 L 25 6 C 25 3.253906 22.746094 1 20 1 Z M 6 3 L 20 3 C 21.65625 3 23 4.34375 23 6 L 23 20 C 23 21.65625 21.65625 23 20 23 L 6 23 C 4.34375 23 3 21.65625 3 20 L 3 6 C 3 4.34375 4.34375 3 6 3 Z M 17.1875 7.0625 C 17.039063 7.085938 16.914063 7.164063 16.8125 7.3125 L 11.90625 14.59375 L 9.59375 12.3125 C 9.394531 12.011719 9.011719 11.988281 8.8125 12.1875 L 7.90625 13.09375 C 7.707031 13.394531 7.707031 13.800781 7.90625 14 L 11.40625 17.5 C 11.605469 17.601563 11.886719 17.8125 12.1875 17.8125 C 12.386719 17.8125 12.707031 17.707031 12.90625 17.40625 L 18.90625 8.59375 C 19.105469 8.292969 18.992188 8.011719 18.59375 7.8125 L 17.59375 7.09375 C 17.492188 7.042969 17.335938 7.039063 17.1875 7.0625 Z"
                />
              </svg>
              <span class="ml-3">Unlimited paring sessions</span>
            </li>

            <li class="flex items-center mt-3">
              <svg
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 26 26"
                class="text-white h-5 w-5"
              >
                <path
                  d="M 6 1 C 3.253906 1 1 3.253906 1 6 L 1 20 C 1 22.746094 3.253906 25 6 25 L 20 25 C 22.746094 25 25 22.746094 25 20 L 25 6 C 25 3.253906 22.746094 1 20 1 Z M 6 3 L 20 3 C 21.65625 3 23 4.34375 23 6 L 23 20 C 23 21.65625 21.65625 23 20 23 L 6 23 C 4.34375 23 3 21.65625 3 20 L 3 6 C 3 4.34375 4.34375 3 6 3 Z M 17.1875 7.0625 C 17.039063 7.085938 16.914063 7.164063 16.8125 7.3125 L 11.90625 14.59375 L 9.59375 12.3125 C 9.394531 12.011719 9.011719 11.988281 8.8125 12.1875 L 7.90625 13.09375 C 7.707031 13.394531 7.707031 13.800781 7.90625 14 L 11.40625 17.5 C 11.605469 17.601563 11.886719 17.8125 12.1875 17.8125 C 12.386719 17.8125 12.707031 17.707031 12.90625 17.40625 L 18.90625 8.59375 C 19.105469 8.292969 18.992188 8.011719 18.59375 7.8125 L 17.59375 7.09375 C 17.492188 7.042969 17.335938 7.039063 17.1875 7.0625 Z"
                />
              </svg>
              <span class="ml-3">Pair with external collaborators for free</span>
            </li>
          </ul>

          <div>
            <a
              href="#"
              class="block w-full py-3 text-center rounded bg-indigo-500 text-sm font-semibold text-white border-t border-indigo-400"
            >Start two-week free trial</a>
          </div>
        </div>
      </div>

      <div class="mt-4 p-4 bg-gray-200 rounded-lg shadow-lg">
        <div class="pt-2 pb-6 border-b border-gray-500">
          <h2 class="text-lg text-gray-800 text-center">Customized</h2>
          <p
            class="mt-2 text-sm text-center font-medium font-gray-700"
          >Need a custom plan? We're flexible!</p>
        </div>

        <div>
          <ul class="py-6 text-sm text-gray-800 font-medium">
            <li class="flex items-center">
              <svg
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 26 26"
                class="text-gray-700 h-5 w-5"
              >
                <path
                  d="M 6 1 C 3.253906 1 1 3.253906 1 6 L 1 20 C 1 22.746094 3.253906 25 6 25 L 20 25 C 22.746094 25 25 22.746094 25 20 L 25 6 C 25 3.253906 22.746094 1 20 1 Z M 6 3 L 20 3 C 21.65625 3 23 4.34375 23 6 L 23 20 C 23 21.65625 21.65625 23 20 23 L 6 23 C 4.34375 23 3 21.65625 3 20 L 3 6 C 3 4.34375 4.34375 3 6 3 Z M 17.1875 7.0625 C 17.039063 7.085938 16.914063 7.164063 16.8125 7.3125 L 11.90625 14.59375 L 9.59375 12.3125 C 9.394531 12.011719 9.011719 11.988281 8.8125 12.1875 L 7.90625 13.09375 C 7.707031 13.394531 7.707031 13.800781 7.90625 14 L 11.40625 17.5 C 11.605469 17.601563 11.886719 17.8125 12.1875 17.8125 C 12.386719 17.8125 12.707031 17.707031 12.90625 17.40625 L 18.90625 8.59375 C 19.105469 8.292969 18.992188 8.011719 18.59375 7.8125 L 17.59375 7.09375 C 17.492188 7.042969 17.335938 7.039063 17.1875 7.0625 Z"
                />
              </svg>
              <span class="ml-3">Volume discounts</span>
            </li>

            <li class="flex items-center mt-3">
              <svg
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 26 26"
                class="text-gray-700 h-5 w-5"
              >
                <path
                  d="M 6 1 C 3.253906 1 1 3.253906 1 6 L 1 20 C 1 22.746094 3.253906 25 6 25 L 20 25 C 22.746094 25 25 22.746094 25 20 L 25 6 C 25 3.253906 22.746094 1 20 1 Z M 6 3 L 20 3 C 21.65625 3 23 4.34375 23 6 L 23 20 C 23 21.65625 21.65625 23 20 23 L 6 23 C 4.34375 23 3 21.65625 3 20 L 3 6 C 3 4.34375 4.34375 3 6 3 Z M 17.1875 7.0625 C 17.039063 7.085938 16.914063 7.164063 16.8125 7.3125 L 11.90625 14.59375 L 9.59375 12.3125 C 9.394531 12.011719 9.011719 11.988281 8.8125 12.1875 L 7.90625 13.09375 C 7.707031 13.394531 7.707031 13.800781 7.90625 14 L 11.40625 17.5 C 11.605469 17.601563 11.886719 17.8125 12.1875 17.8125 C 12.386719 17.8125 12.707031 17.707031 12.90625 17.40625 L 18.90625 8.59375 C 19.105469 8.292969 18.992188 8.011719 18.59375 7.8125 L 17.59375 7.09375 C 17.492188 7.042969 17.335938 7.039063 17.1875 7.0625 Z"
                />
              </svg>
              <span class="ml-3">Sporadic usage discount</span>
            </li>

            <li class="flex items-center mt-3">
              <svg
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 26 26"
                class="text-gray-700 h-5 w-5"
              >
                <path
                  d="M 6 1 C 3.253906 1 1 3.253906 1 6 L 1 20 C 1 22.746094 3.253906 25 6 25 L 20 25 C 22.746094 25 25 22.746094 25 20 L 25 6 C 25 3.253906 22.746094 1 20 1 Z M 6 3 L 20 3 C 21.65625 3 23 4.34375 23 6 L 23 20 C 23 21.65625 21.65625 23 20 23 L 6 23 C 4.34375 23 3 21.65625 3 20 L 3 6 C 3 4.34375 4.34375 3 6 3 Z M 17.1875 7.0625 C 17.039063 7.085938 16.914063 7.164063 16.8125 7.3125 L 11.90625 14.59375 L 9.59375 12.3125 C 9.394531 12.011719 9.011719 11.988281 8.8125 12.1875 L 7.90625 13.09375 C 7.707031 13.394531 7.707031 13.800781 7.90625 14 L 11.40625 17.5 C 11.605469 17.601563 11.886719 17.8125 12.1875 17.8125 C 12.386719 17.8125 12.707031 17.707031 12.90625 17.40625 L 18.90625 8.59375 C 19.105469 8.292969 18.992188 8.011719 18.59375 7.8125 L 17.59375 7.09375 C 17.492188 7.042969 17.335938 7.039063 17.1875 7.0625 Z"
                />
              </svg>
              <span class="ml-3">SSO Support</span>
            </li>
          </ul>

          <div>
            <a
              href="#"
              class="block w-full py-3 text-center rounded bg-gray-800 text-sm font-semibold text-white"
            >Contact a Co-Founder</a>
          </div>
        </div>
      </div>
    </main>

    <section class="mt-16">
      <div class="px-4">
        <h2 class="text-2xl font-bold text-center text-gray-900">Your tuple license explained</h2>
        <p
          class="text-center text-gray-700"
        >Here's what you need to know about your Tuple license, based on the questions we get asked the most</p>
      </div>

      <dl class="mt-4">
        <div class="px-4 py-6 border-b-2 border-gray-300">
          <dt class="flex items-center">
            <span
              class="text-gray-900 font-semibold"
            >Will I lose my data if I downgrade from the Unlimited plan to the Free plan?</span>

            <button class="ml-4 block">
              <svg
                class="icon rotate-90 h-5 w-5"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
                <path
                  class="text-gray-900"
                  vector-effect="non-scaling-effect"
                  d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"
                />
              </svg>
            </button>
          </dt>
          <dd class="hidden">This text should not be visible.</dd>
        </div>

        <div class="px-4 py-6 border-b-2 border-gray-300">
          <dt class="flex items-center">
            <span
              class="text-gray-900 font-semibold"
            >How much does it cost to have guests on my Tuple team?</span>

            <button class="ml-4 block">
              <svg
                class="icon rotate-90 h-5 w-5"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
                <path
                  class="text-gray-900"
                  vector-effect="non-scaling-effect"
                  d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"
                />
              </svg>
            </button>
          </dt>

          <dd class="hidden">This text should not be visible.</dd>
        </div>

        <div class="px-4 py-6 border-b-2 bg-gray-100 shadow-lg border-gray-300">
          <dt class="flex items-center">
            <span
              class="text-gray-900 font-semibold"
            >We need to add new users to our team. How will that be billed?</span>

            <button class="ml-4 block">
              <svg
                class="icon rotate-270 h-5 w-5"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
                <path
                  class="text-gray-900"
                  vector-effect="non-scaling-effect"
                  d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"
                />
              </svg>
            </button>
          </dt>

          <dd
            class="text-sm text-gray-700"
          >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem aliquid nemo nam ex necessitatibus officia in, aut sequi facilis veritatis rerum odio illo quisquam accusamus? Animi maxime rerum qui mollitia.</dd>
        </div>

        <div class="px-4 py-6 border-b-2 border-gray-300">
          <dt class="flex items-center">
            <span
              class="text-gray-900 font-semibold"
            >Can I mix free members and unlimited members together?</span>

            <button class="ml-4 block">
              <svg
                class="icon rotate-90 h-5 w-5"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
                <path
                  class="text-gray-900"
                  vector-effect="non-scaling-effect"
                  d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"
                />
              </svg>
            </button>
          </dt>

          <dd
            class="hidden"
          >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem aliquid nemo nam ex necessitatibus officia in, aut sequi facilis veritatis rerum odio illo quisquam accusamus? Animi maxime rerum qui mollitia.</dd>
        </div>

        <div class="px-4 py-6 border-b-2 border-gray-300">
          <dt class="flex items-center">
            <span
              class="text-gray-900 font-semibold"
            >How much does it cost to have guests on my Tuple Team?</span>

            <button class="ml-4 block">
              <svg
                class="icon rotate-90 h-5 w-5"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
                <path
                  class="text-gray-900"
                  vector-effect="non-scaling-effect"
                  d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"
                />
              </svg>
            </button>
          </dt>

          <dd
            class="hidden"
          >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem aliquid nemo nam ex necessitatibus officia in, aut sequi facilis veritatis rerum odio illo quisquam accusamus? Animi maxime rerum qui mollitia.</dd>
        </div>
      </dl>
    </section>

    <aside class="pt-24 pb-6">
      <div class="px-4 pt-12 pb-56 bg-indigo-700">
        <h2 class="text-2xl font-bold text-white leading-snug">This is what our customers are saying</h2>

        <p
          class="mt-4 text-indigo-200"
        >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident dolore modi doloribus nemo, non ipsam ipsa porro! Quam, magnam quod!</p>
      </div>

      <div class="-mt-48 px-4">
        <figure class="px-4 pt-5 pb-6 bg-white rounded-lg shadow-lg">
          <blockquote class="text-sm text-gray-800 font-medium">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed, pariatur.</p>

            <p class="mt-4">
              <a href="#" class="text-indigo-700">http://tuple.app</a> is blazing and very well-maintained.
            </p>

            <p
              class="mt-4"
            >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa eum doloremque nobis ut ea. Illum voluptatem temporibus omnis labore facilis!</p>
          </blockquote>

          <figcaption class="mt-6 flex">
            <div class="mt-6 flex items-center">
              <div class="flex-shrink-0">
                <img
                  class="w-10 h-10 rounded-full"
                  src="https://randomuser.me/api/portraits/men/19.jpg"
                  alt="avatar"
                />
              </div>

              <div class="text-sm ml-6">
                <p>
                  <a href="#" class="font-semibold text-indigo-700">Darth Vader</a>
                </p>

                <p class="text-gray-700">Sith Lord</p>
              </div>
            </div>
          </figcaption>
        </figure>

        <div class="mt-6 flex justify-center">
          <button>
            <svg class="h-2 w-2 text-gray-500" fill="currentColor" viewBox="0 0 8 8">
              <circle cx="4" cy="4" r="3" />
            </svg>
          </button>
          <button>
            <svg class="ml-1 h-2 w-2 text-gray-500" fill="currentColor" viewBox="0 0 8 8">
              <circle cx="4" cy="4" r="3" />
            </svg>
          </button>
          <button>
            <svg class="ml-1 h-2 w-2 text-gray-500" fill="currentColor" viewBox="0 0 8 8">
              <circle cx="4" cy="4" r="3" />
            </svg>
          </button>
          <button>
            <svg class="ml-1 h-2 w-2 text-gray-700" fill="currentColor" viewBox="0 0 8 8">
              <circle cx="4" cy="4" r="3" />
            </svg>
          </button>
        </div>
      </div>
    </aside>

    <section class="px-4 pt-6">
      <h2
        class="text-2xl font-bold leading-snug text-center text-gray-900"
      >We have a unique refund policy</h2>

      <p
        class="mt-4 text-center text-gray-700"
      >Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur deserunt laboriosam fuga nostrum unde maiores delectus itaque, totam mollitia eaque.</p>

      <div class="flex mt-6">
        <a
          href="#"
          class="flex-grow px-4 py-3 text-sm font-semibold text-center bg-indigo-600 text-white"
        >Start two-week free trial</a>
        <a
          href="#"
          class="ml-4 flex-grow px-4 py-3 text-sm font-semibold text-center bg-gray-100 text-black"
        >Learn more</a>
      </div>
    </section>

    <footer class="px-4 py-8 text-center text-gray-700">
      <p>&copy; Tuple, Inc.</p>
    </footer>
  </div>
</template>

<script>
export default {};
</script>