<nav class="sticky bg-white/35 backdrop-blur-md border-b border-gray-200 px-4 py-2.5 left-0 right-0 top-0 z-50">
    <div class="flex flex-wrap justify-between items-center">
        {{-- search section --}}
        <div class="flex justify-start items-center">
            <button data-drawer-target="drawer-navigation" data-drawer-toggle="drawer-navigation"
                aria-controls="drawer-navigation"
                class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <svg aria-hidden="true" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Toggle sidebar</span>
            </button>
            <div class="hidden md:block md:pl-2">
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-2 pointer-events-none">
                        <svg width="23" height="23" viewBox="0 0 24 24" class="ml-2" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15 11.997C15 12.1959 14.921 12.3867 14.7803 12.5274C14.6397 12.668 14.4489 12.747 14.25 12.747C14.0511 12.747 13.8603 12.668 13.7197 12.5274C13.579 12.3867 13.5 12.1959 13.5 11.997C13.5 11.7981 13.579 11.6074 13.7197 11.4667C13.8603 11.3261 14.0511 11.247 14.25 11.247C14.4489 11.247 14.6397 11.3261 14.7803 11.4667C14.921 11.6074 15 11.7981 15 11.997ZM11.397 3.01504C11.2882 2.9933 11.176 2.99595 11.0684 3.02281C10.9608 3.04967 10.8604 3.10007 10.7746 3.17037C10.6889 3.24067 10.6197 3.32912 10.5722 3.42936C10.5247 3.52959 10.5001 3.63912 10.5 3.75004V20.2455C10.5001 20.3565 10.5247 20.466 10.5722 20.5662C10.6197 20.6664 10.6889 20.7549 10.7746 20.8252C10.8604 20.8955 10.9608 20.9459 11.0684 20.9728C11.176 20.9996 11.2882 21.0023 11.397 20.9805L18.897 19.4805C19.067 19.4466 19.2199 19.3548 19.3298 19.2208C19.4398 19.0868 19.4999 18.9189 19.5 18.7455V5.25004C19.4999 5.07672 19.4398 4.90878 19.3298 4.77479C19.2199 4.64079 19.067 4.54901 18.897 4.51504L11.397 3.01504ZM12 19.3305V4.66504L18 5.86504V18.1305L12 19.3305ZM9 19.4955V17.9955H6V6.00004H9V4.50004H5.25C5.05109 4.50004 4.86032 4.57905 4.71967 4.71971C4.57902 4.86036 4.5 5.05112 4.5 5.25004V18.7455C4.5 18.9444 4.57902 19.1352 4.71967 19.2759C4.86032 19.4165 5.05109 19.4955 5.25 19.4955H9Z" />
                        </svg>
                    </div>
                    @if (auth()->user()->hotelOwner)
                        <div class="bg-gray-50 rounded-xl border border-gray-300 text-gray-900 text-sm pl-10 p-2.5">
                            {{ auth()->user()->hotelOwner->hotel->name }}
                        </div>
                    @else
                        <div class="bg-gray-50 rounded-xl border border-gray-300 text-gray-900 text-sm pl-10 p-2.5">
                            {{ auth()->user()->hotelStaff->branch->hotel->name }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
        {{-- notification & user section --}}
        <div class="flex items-center lg:order-2">

            <!-- Notifications -->
            <button type="button"
                class="p-2 mr-1 text-gray-500 rounded-lg hover:text-gray-900 bg-blue-50 hover:bg-blue-100">
                <span class="sr-only">View notifications</span>
                <!-- Bell icon -->
                <div class="relative">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.02 2.91016C8.71003 2.91016 6.02003 5.60016 6.02003 8.91016V11.8002C6.02003 12.4102 5.76003 13.3402 5.45003 13.8602L4.30003 15.7702C3.59003 16.9502 4.08003 18.2602 5.38003 18.7002C9.69003 20.1402 14.34 20.1402 18.65 18.7002C19.86 18.3002 20.39 16.8702 19.73 15.7702L18.58 13.8602C18.28 13.3402 18.02 12.4102 18.02 11.8002V8.91016C18.02 5.61016 15.32 2.91016 12.02 2.91016Z"
                            stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" />
                        <path
                            d="M13.87 3.19994C13.56 3.10994 13.24 3.03994 12.91 2.99994C11.95 2.87994 11.03 2.94994 10.17 3.19994C10.46 2.45994 11.18 1.93994 12.02 1.93994C12.86 1.93994 13.58 2.45994 13.87 3.19994Z"
                            stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M15.02 19.0601C15.02 20.7101 13.67 22.0601 12.02 22.0601C11.2 22.0601 10.44 21.7201 9.90002 21.1801C9.36002 20.6401 9.02002 19.8801 9.02002 19.0601"
                            stroke="#121212" stroke-width="1.5" stroke-miterlimit="10" />
                    </svg>
                    <span
                        class="absolute top-0 right-0 block h-2.5 w-2.5 bg-red-500 rounded-full ring-2 ring-white"></span>
                </div>

            </button>
            <div class="w-px h-4 bg-gray-300 mx-3"></div>
            <div class="flex lg:mr-4 items-center space-x-2 focus:ring-4 cursor-pointer focus:ring-gray-300"
                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                <img class="w-10 h-10 rounded-full" src="https://via.placeholder.com/40" alt="User profile picture">
                <div class="hidden sm:block">
                    <div class="text-sm font-medium text-gray-900">{{ Auth::user()->first_name }}
                        {{ Auth::user()->last_name }}</div>
                    <div class="text-xs text-gray-500">Admin</div>
                </div>
            </div>
            <!-- Dropdown menu -->
            <div class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                id="dropdown">
                <div class="py-3 px-4">
                    <span class="block text-sm font-semibold text-gray-900 dark:text-white">
                        {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                    </span>
                    <span class="block text-sm text-gray-900 truncate dark:text-white">{{ Auth::user()->email }}</span>
                </div>
                <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
                    <li>
                        <a href="{{ route('user.settings.profile') }}" wire:navigate
                            class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">My
                            profile</a>
                    </li>
                </ul>
                <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
                    <li>
                        <a href="#"
                            class="flex justify-between items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                            <span class="flex items-center">
                                Premium &nbsp;<small><i>coming soon</i></small>
                            </span>
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
                <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
                    <li>
                        <a href="#" x-on:click="$wire.logout()"
                            class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                            out</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
