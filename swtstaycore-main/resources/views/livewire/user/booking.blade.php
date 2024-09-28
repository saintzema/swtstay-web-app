<div class="flex-1 overflow-y-auto p-6">

    {{-- create booking drawer --}}
    <livewire:user.partials.create-booking>
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 mt-7 md:space-x-4">
            <div class="w-full md:w-1/2">
                <h2 class="text-2xl font-bold mb-1">Recent bookings</h2>
                <p class="text-gray-400 font-extralight text-sm">Here's a list of recent bookings
                    locations</p>
            </div>
            <div
                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">

                <button type="button" x-data x-on:click="$dispatch('open-add-booking-drawer')"
                    class="flex items-center justify-center text-white bg-primary-500 hover:bg-primary-600 focus:ring-4 focus:ring-primary-300 font-light transition-colors ease-in-out rounded-xl text-sm px-4 py-3  focus:outline-none">
                    <svg class="size-5 mr-2" fill="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    Create booking
                </button>
            </div>
        </div>

        <section class="p-3 sm:p-5 px-2 py-6 rounded-lg bg-white mt-5">
            <div class="mx-auto max-w-full">
                <div class="relative overflow-hidden">
                    <div
                        class="flex flex-col md:flex-row py-3 items-center justify-between space-y-3 md:space-y-0 md:space-x-4 px-1">
                        <div class="w-full md:w-1/2">
                            <form class="flex items-center" wire:submit.prevent>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500" width="15" height="15"
                                            viewBox="0 0 24 24" fill="urrentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.5 21.75C5.85 21.75 1.25 17.15 1.25 11.5C1.25 5.85 5.85 1.25 11.5 1.25C17.15 1.25 21.75 5.85 21.75 11.5C21.75 17.15 17.15 21.75 11.5 21.75ZM11.5 2.75C6.67 2.75 2.75 6.68 2.75 11.5C2.75 16.32 6.67 20.25 11.5 20.25C16.33 20.25 20.25 16.32 20.25 11.5C20.25 6.68 16.33 2.75 11.5 2.75Z" />
                                            <path
                                                d="M21.9999 22.7499C21.8099 22.7499 21.6199 22.6799 21.4699 22.5299L19.4699 20.5299C19.1799 20.2399 19.1799 19.7599 19.4699 19.4699C19.7599 19.1799 20.2399 19.1799 20.5299 19.4699L22.5299 21.4699C22.8199 21.7599 22.8199 22.2399 22.5299 22.5299C22.3799 22.6799 22.1899 22.7499 21.9999 22.7499Z" />
                                        </svg>
                                    </div>
                                    <input type="text" id="simple-search" wire:model.live="search"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 px-2 py-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Search through booking">
                                </div>
                            </form>
                        </div>
                        <div
                            class="w-full md:w-auto flex flex-col md:flex-row py-3 space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">

                            <button type="button" wire:click="$refresh" data-tooltip-target="refesh"
                                class="flex rounded-full items-center bg-transparent justify-center text-primary-500 transition-colors ease-in-out px-4 py-2 font-light text-sm text-center">
                                <span wire:loading.remove>
                                    <svg class="inline w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                    </svg>
                                </span>
                                <span wire:loading>
                                    <svg class="inline w-4 h-4 mr-1 animate-spin" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                    </svg>
                                </span>
                                <div id="refesh" role="tooltip"
                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    Refresh table
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </button>
                            <select id="filter" wire:model.live="filterByDate"
                                class="flex rounded-xl border items-center border-primary-500 text-primary-500 transition-colors ease-in-out px-8 py-3 font-light text-sm focus:ring-0 focus:border-primary-500 focus:outline-none">
                                <option value="">Filter by date</option>
                                <option value="today">Today</option>
                                <option value="week">This Week</option>
                                <option value="month">This Month</option>
                                <option value="year">This Year</option>
                            </select>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 ">
                            <thead class="text-xs text-gray-700 border-b border-t">
                                <tr>
                                    <th scope="col" class="px-4 py-3">Name</th>
                                    <th scope="col" class="px-4 py-3">Check-in</th>
                                    <th scope="col" class="px-4 py-3">Check-out</th>
                                    <th scope="col" class="px-4 py-3">Room type</th>
                                    <th scope="col" class="px-4 py-3">Amount</th>
                                    <th scope="col" class="px-4 py-3">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                {{-- <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Apple iMac 27&#34;</th>
                            <td class="px-4 py-3">PC</td>
                            <td class="px-4 py-3">Apple</td>
                            <td class="px-4 py-3">300</td>
                            <td class="px-4 py-3">$2999</td>
                            <td class="px-4 py-3 flex items-center justify-end">
                                <button id="apple-imac-27-dropdown-button" data-dropdown-toggle="apple-imac-27-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none  dark:hover:text-gray-100" type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                    </svg>
                                </button>
                                <div id="apple-imac-27-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="apple-imac-27-dropdown-button">
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr> --}}
                            </tbody>
                        </table>
                        <div class="h-96 flex items-center justify-center text-center">
                            <div class="text-center">
                                <img src="{{ asset('assets/Illustration.svg') }}" class="mx-auto mb-4" alt=""
                                    srcset="">
                                <p class="font-medium mb-2">Nothing to show yet</p>
                                <span class="text-sm text-gray-300">Client’s haven’t made a booking. Once they make a
                                    booking, it’ll appear here.</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 flex flex-col md:flex-row items-center justify-between">
                        <span class="text-sm text-gray-700 mb-2 md:mb-0">Showing <span class="font-semibold">10</span>
                            items</span>
                        <div class="flex items-center space-x-1">
                            <button
                                class="px-3 py-1 bg-gray-200  text-gray-700 rounded-lg hover:bg-gray-300">Prev</button>
                            <button class="px-3 py-1 border border-primary-500 text-primary-500 rounded-lg">1</button>
                            <button
                                class="px-3 py-1 border border-gray-100 text-gray-700 rounded-lg hover:bg-gray-300">2</button>
                            <button
                                class="px-3 py-1 border border-gray-100 text-gray-700 rounded-lg hover:bg-gray-300">3</button>
                            <button
                                class="px-3 py-1 border border-gray-100 text-gray-700 rounded-lg hover:bg-gray-300">4</button>
                            <button
                                class="px-3 py-1 border border-gray-100 text-gray-700 rounded-lg hover:bg-gray-300">5</button>
                            <button
                                class="px-3 py-1 border border-gray-100 text-gray-700 rounded-lg hover:bg-gray-300">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
