<header class="relative bg-white dark:bg-darker">
    <div class="flex items-center justify-between p-2 border-b dark:border-blue-800">
         <!-- Brand -->
        <a href="#"
                class="inline-block text-2xl font-bold tracking-wider text-red-400 uppercase dark:text-light"
                >
                Laravel Learn
        </a>
        <!-- User avatar button -->
        <div class="relative z-40" x-data="{ open: false }">
            <button
                    @click="open = !open; $nextTick(() => { if(open){ $refs.userMenu.focus() } })"
                        type="button"
                        aria-haspopup="true"
                        :aria-expanded="open ? 'true' : 'false'"
                        class="transition-opacity duration-200 rounded-full dark:opacity-75 dark:hover:opacity-100 focus:outline-none focus:ring dark:focus:opacity-100"
                    >
                    <span class="sr-only">User menu</span>
                    <img class="w-14 h-14 rounded-full" src="https://external-preview.redd.it/cP4D8gGpqH9-L6R7FID6FWmIzm0xyOFzu6amsiZ6BJU.jpg?auto=webp&s=267d33b568bf63b891c2a037c0c3c20ab0b7ca64" alt="Ahmed Kamel" />
            </button>
                <!-- User dropdown menu -->
            <div x-show="open"
                x-ref="userMenu"
                x-transition:enter="transition-all transform ease-out"
                x-transition:enter-start="translate-y-1/2 opacity-0"
                x-transition:enter-end="translate-y-0 opacity-100"
                x-transition:leave="transition-all transform ease-in"
                x-transition:leave-start="translate-y-0 opacity-100"
                x-transition:leave-end="translate-y-1/2 opacity-0"
                @click.away="open = false"
                @keydown.escape="open = false"
                class="absolute right-0 w-48 py-1 bg-white rounded-md shadow-lg top-12 ring-1 ring-black ring-opacity-5 dark:bg-dark focus:outline-none"
                tabindex="-1"
                role="menu"
                                aria-orientation="vertical"
                                aria-label="User menu"
                            >
                            <a href="#"
                                role="menuitem"
                                class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-blue-600"
                                >
                                Your Profile
                            </a>
                            <a href="#"
                                role="menuitem"
                                class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-blue-600"
                                >
                                Settings
                            </a>
                            <a href="#"
                                role="menuitem"
                                class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-blue-600"
                                >
                                Logout
                            </a>
        </div>
    </div>
</header>