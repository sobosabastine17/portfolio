 <nav
      x-data="{ open: false, activeSection: 'home' }"
      x-init="
    window.addEventListener('scroll', () => {
      const sections = ['home', 'about', 'skills','resume', 'projects', 'services', 'contact'];
      const scrollY = window.scrollY + 150;
      for (const id of sections) {
        const section = document.getElementById(id);
        if (section && scrollY >= section.offsetTop && scrollY < section.offsetTop + section.offsetHeight) {
          activeSection = id;
        }
      }
    });
  "
      class="fixed w-full top-0 left-0 z-50 bg-[#111111] text-white border-b border-gray-800 shadow-md transition-all duration-500"
    >
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
          <!-- Logo -->
          <a
            href="#"
            class="text-xl md:text-3xl font-extrabold text-[#7a00cc] tracking-wide "
          >
            Sobo Sabastine
          </a>

          <!-- Desktop Navigation -->
          <div
            class="hidden md:flex items-center space-x-8 text-md font-medium"
          >
            <template
              x-for="link in ['Home', 'About', 'Skills', 'Resume', 'Projects', 'Services', 'Contact']"
              :key="link"
            >
              <a
                :href="'#' + link.toLowerCase()"
                class="relative group transition-all duration-300"
              >
                <span
                  :class="activeSection === link.toLowerCase() ? 'text-[#7a00cc]' : 'text-white'"
                  class="transition duration-300"
                  x-text="link"
                ></span>
                <!-- Underline effect -->
                <span
                  class="absolute left-0 -bottom-1 h-[2px] bg-[#7a00cc] transition-all duration-300"
                  :class="activeSection === link.toLowerCase() ? 'w-full' : 'w-0 group-hover:w-full'"
                ></span>
              </a>
            </template>
          </div>

          <!-- Resume Button (Desktop) -->
          <div class="hidden md:flex">
            <a
              href="assets/sabastine_CV.pdf"
              target="_blank"
              class="bg-[#7a00cc] hover:bg-[#e60047] text-white px-5 py-2 rounded-lg font-semibold shadow-lg transform hover:scale-105 transition-all duration-300"
            >
              Resume(CV)
            </a>
          </div>

          <!-- Mobile Menu Button -->
          <div class="md:hidden flex items-center">
            <button @click="open = !open" class="focus:outline-none">
              <!-- Menu Icon -->
              <svg
                x-show="!open"
                xmlns="http://www.w3.org/2000/svg"
                class="w-7 h-7"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 8h16M4 16h16"
                />
              </svg>
              <!-- Close Icon -->
              <svg
                x-show="open"
                x-cloak
                xmlns="http://www.w3.org/2000/svg"
                class="w-7 h-7"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M6 18L18 6M6 6l12 12"
                />
              </svg>
            </button>
          </div>
        </div>
      </div>

      <!-- Mobile Navigation Dropdown -->
      <div
        x-show="open"
        x-transition:enter="transition ease-out duration-500"
        x-transition:enter-start="opacity-0 -translate-y-5"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-400"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-5"
        class="md:hidden bg-[#111111] px-6 py-6 space-y-5 text-center text-base font-medium"
      >
        <template
          x-for="link in ['Home', 'About', 'Skills', 'Resume', 'Projects', 'Services', 'Contact']"
          :key="link"
        >
          <a
            :href="'#' + link.toLowerCase()"
            :class="activeSection === link.toLowerCase() ? 'text-[#7a00cc]' : 'text-white'"
            class="block hover:text-[#7a00cc] transition duration-300"
            x-text="link"
          ></a>
        </template>

        <!-- Resume Button (Mobile) -->
        <a
          href="assets/sabastine_CV.pdf"
          target="_blank"
          class="inline-block bg-[#7a00cc] hover:bg-[#e60047] text-white py-2 px-4 rounded-md transition duration-300 shadow-md"
        >
          Resume(CV)
        </a>
      </div>
    </nav>