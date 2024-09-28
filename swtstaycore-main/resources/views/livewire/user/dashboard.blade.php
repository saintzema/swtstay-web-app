<div class="flex-1 overflow-y-auto p-6">
    {{-- success message --}}
    @if (session()->has('success'))
        <x-success-alert message="{{ session('success') }}" />
    @endif

    {{-- verify email modal --}}
    <livewire:auth.verify-email />

    {{-- create booking drawer --}}
    <livewire:user.partials.create-booking>

    @if (Auth::user()->hotelOwner)
        {{-- add branch drawer  will only show when the user just registered --}}
        <livewire:user.partials.add-branch />
        {{-- admin dashboard stats --}}
        <div class="px-4 py-6 rounded-lg bg-white sm:px-6 md:px-5 lg:px-5">
            <h2 class="text-2xl sm:text-3xl font-extrabold mb-2">Dashboard</h2>
            <p class="text-gray-400 font-extralight text-xs sm:text-sm mb-4">Here’s an overview of your property’s performance</p>
            <!-- stats -->
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-4">
                <!-- 1 -->
                <div class="p-4 sm:p-6 bg-option flex rounded-xl">
                    <div class="rounded-xl bg-primary-500 p-3 sm:p-4 mr-3 sm:mr-4 flex items-center justify-center">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.41 2.3335H9.59001C5.18001 2.3335 4.08334 3.51183 4.08334 8.2135V21.3502C4.08334 24.4535 5.78668 25.1885 7.85168 22.9718L7.86334 22.9602C8.82001 21.9452 10.2783 22.0268 11.1067 23.1352L12.285 24.7102C13.23 25.9585 14.7583 25.9585 15.7033 24.7102L16.8817 23.1352C17.7217 22.0152 19.18 21.9335 20.1367 22.9602C22.2133 25.1768 23.905 24.4418 23.905 21.3385V8.2135C23.9167 3.51183 22.82 2.3335 18.41 2.3335ZM17.5 13.7085H10.5C10.0217 13.7085 9.62501 13.3118 9.62501 12.8335C9.62501 12.3552 10.0217 11.9585 10.5 11.9585H17.5C17.9783 11.9585 18.375 12.3552 18.375 12.8335C18.375 13.3118 17.9783 13.7085 17.5 13.7085ZM18.6667 9.04183H9.33334C8.85501 9.04183 8.45834 8.64516 8.45834 8.16683C8.45834 7.6885 8.85501 7.29183 9.33334 7.29183H18.6667C19.145 7.29183 19.5417 7.6885 19.5417 8.16683C19.5417 8.64516 19.145 9.04183 18.6667 9.04183Z"
                                fill="#F8F8F8" />
                        </svg>
                    </div>
                    <div>
                        <div class="font-semibold text-xs sm:text-sm">Overall bookings</div>
                        <div class="font-bold text-xl sm:text-2xl mt-1">0</div>
                    </div>
                </div>

                <!-- 2 -->
                <div class="p-4 sm:p-6 bg-option flex rounded-xl">
                    <div class="rounded-xl bg-primary-500 p-3 sm:p-4 mr-3 sm:mr-4 flex items-center justify-center">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15.5762 3.57479C15.4318 3.51623 15.2771 3.48719 15.1213 3.48937C14.9655 3.49156 14.8117 3.52493 14.6691 3.58752C14.5264 3.65011 14.3977 3.74065 14.2905 3.85379C14.1834 3.96693 14.1 4.10039 14.0453 4.24628C13.9906 4.39217 13.9657 4.54754 13.972 4.70323C13.9783 4.85891 14.0158 5.01175 14.0821 5.15273C14.1485 5.29371 14.2424 5.41997 14.3583 5.52406C14.4743 5.62815 14.6099 5.70796 14.7572 5.75879L15.1667 5.91279V9.60879L3.19317 12.8755C2.9213 12.9504 2.6858 13.1214 2.53024 13.3566C2.37468 13.5918 2.30959 13.8754 2.34702 14.155C2.38446 14.4345 2.52187 14.691 2.73384 14.877C2.94581 15.063 3.21799 15.166 3.5 15.1668V22.1668C3.5 22.7856 3.74583 23.3791 4.18342 23.8167C4.621 24.2543 5.2145 24.5001 5.83334 24.5001H22.1667C22.7855 24.5001 23.379 24.2543 23.8166 23.8167C24.2542 23.3791 24.5 22.7856 24.5 22.1668V9.33345C24.7731 9.33318 25.0375 9.23709 25.247 9.06194C25.4566 8.88678 25.5981 8.64365 25.6468 8.37491C25.6955 8.10617 25.6484 7.82886 25.5137 7.59128C25.379 7.3537 25.1651 7.17092 24.9095 7.07479L15.5762 3.57479ZM22.1667 8.53779L17.5 6.78779V22.1668H22.1667V8.53779ZM11.6667 18.6668V22.1668H15.1667V12.0285L5.83334 14.5718V22.1668H9.33334V18.6668C9.33334 18.3574 9.45625 18.0606 9.67504 17.8418C9.89384 17.623 10.1906 17.5001 10.5 17.5001C10.8094 17.5001 11.1062 17.623 11.325 17.8418C11.5438 18.0606 11.6667 18.3574 11.6667 18.6668ZM18.0833 12.8335C18.0833 12.524 18.2063 12.2273 18.425 12.0085C18.6438 11.7897 18.9406 11.6668 19.25 11.6668H20.4167C20.7261 11.6668 21.0228 11.7897 21.2416 12.0085C21.4604 12.2273 21.5833 12.524 21.5833 12.8335C21.5833 13.1429 21.4604 13.4396 21.2416 13.6584C21.0228 13.8772 20.7261 14.0001 20.4167 14.0001H19.25C18.9406 14.0001 18.6438 13.8772 18.425 13.6584C18.2063 13.4396 18.0833 13.1429 18.0833 12.8335ZM19.25 16.3335C18.9406 16.3335 18.6438 16.4564 18.425 16.6752C18.2063 16.894 18.0833 17.1907 18.0833 17.5001C18.0833 17.8095 18.2063 18.1063 18.425 18.3251C18.6438 18.5439 18.9406 18.6668 19.25 18.6668H20.4167C20.7261 18.6668 21.0228 18.5439 21.2416 18.3251C21.4604 18.1063 21.5833 17.8095 21.5833 17.5001C21.5833 17.1907 21.4604 16.894 21.2416 16.6752C21.0228 16.4564 20.7261 16.3335 20.4167 16.3335H19.25Z"
                                fill="#F8F8F8" />
                        </svg>
                    </div>
                    <div>
                        <div class="font-semibold text-xs sm:text-sm">Total Branches</div>
                        <div class="font-bold text-xl sm:text-2xl mt-1">{{ $branches }}</div>
                    </div>
                </div>

                <!-- 3 -->
                <div class="p-4 sm:p-6 bg-option flex rounded-xl">
                    <div class="rounded-xl bg-primary-500 p-3 sm:p-4 mr-3 sm:mr-4 flex items-center justify-center">
                        <svg fill="none" class="text-white" width="28" height="28"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999">
                            <g>
                                <g>
                                    <path d="M494.565,208.205c-6.121,0-11.251,3.141-14.387,7.894l-24.288-36.256v-50.833c0-29.541-24.435-53.028-53.974-53.028
                                        H110.082c-29.539,0-53.974,23.488-53.974,53.027v50.833l-24.338,36.256c-3.136-4.753-8.317-7.894-14.438-7.894
                                        C7.65,208.203,0,216.054,0,225.738v155.883c-0.001,9.685,7.648,16.991,17.333,16.991h13.058v19.872
                                        c0,9.684,7.851,17.534,17.534,17.534s17.534-7.851,17.534-17.534v-19.872h381.078v19.872c0,9.684,7.851,17.534,17.534,17.534
                                        s17.534-7.851,17.534-17.534v-19.872h13.058c9.684,0,17.334-7.306,17.334-16.99V225.739
                                        C511.999,216.055,504.249,208.205,494.565,208.205z M91.177,129.008c0-10.203,8.703-17.959,18.905-17.959h291.832
                                        c10.203,0,18.905,7.756,18.905,17.959v38.151h-15.37c0.103-0.767,0.174-1.543,0.174-2.338c0-9.684-7.851-17.534-17.534-17.534
                                        H123.908c-9.684,0-17.534,7.851-17.534,17.534c0,0.795,0.071,1.571,0.174,2.338H91.177V129.008z M83.855,201.941
                                        c0.866,0.132,1.744,0.286,2.647,0.286h341.79l14.329,21.041H69.376L83.855,201.941z M476.93,363.543H35.067V258.337H476.93
                                        V363.543z" fill="#F8F8F8" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <div class="font-semibold text-xs sm:text-sm">Total Rooms</div>
                        <div class="font-bold text-xl sm:text-2xl mt-1">{{ $rooms }}</div>
                    </div>
                </div>

                <!-- 4 -->
                <div class="p-4 sm:p-6 bg-option flex rounded-xl">
                    <div class="rounded-xl bg-primary-500 p-3 sm:p-4 mr-3 sm:mr-4 flex items-center justify-center">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.6862 13.5568C10.6512 13.5568 10.6279 13.5568 10.5929 13.5568C10.5345 13.5452 10.4529 13.5452 10.3829 13.5568C6.99952 13.4518 4.44452 10.7918 4.44452 7.5135C4.44452 4.17683 7.16285 1.4585 10.4995 1.4585C13.8362 1.4585 16.5545 4.17683 16.5545 7.5135C16.5429 10.7918 13.9762 13.4518 10.7212 13.5568C10.7095 13.5568 10.6979 13.5568 10.6862 13.5568ZM10.4995 3.2085C8.13119 3.2085 6.19452 5.14516 6.19452 7.5135C6.19452 9.84683 8.01452 11.7252 10.3362 11.8068C10.4062 11.7952 10.5579 11.7952 10.7095 11.8068C12.9962 11.7018 14.7929 9.8235 14.8045 7.5135C14.8045 5.14516 12.8679 3.2085 10.4995 3.2085Z"
                                fill="#F8F8F8" />
                            <path
                                d="M19.2962 13.7082C19.2612 13.7082 19.2262 13.7082 19.1912 13.6965C18.7129 13.7432 18.2229 13.4048 18.1762 12.9265C18.1295 12.4482 18.4212 12.0165 18.8995 11.9582C19.0395 11.9465 19.1912 11.9465 19.3195 11.9465C21.0229 11.8532 22.3529 10.4532 22.3529 8.73817C22.3529 6.96484 20.9179 5.52984 19.1445 5.52984C18.6662 5.5415 18.2695 5.14484 18.2695 4.6665C18.2695 4.18817 18.6662 3.7915 19.1445 3.7915C21.8745 3.7915 24.1029 6.01984 24.1029 8.74984C24.1029 11.4332 22.0029 13.6032 19.3312 13.7082C19.3195 13.7082 19.3079 13.7082 19.2962 13.7082Z"
                                fill="#F8F8F8" />
                            <path
                                d="M10.6979 26.3082C8.41121 26.3082 6.11288 25.7248 4.37454 24.5582C2.75288 23.4848 1.86621 22.0148 1.86621 20.4165C1.86621 18.8182 2.75288 17.3365 4.37454 16.2515C7.87454 13.9298 13.5445 13.9298 17.0212 16.2515C18.6312 17.3248 19.5295 18.7948 19.5295 20.3932C19.5295 21.9915 18.6429 23.4732 17.0212 24.5582C15.2712 25.7248 12.9845 26.3082 10.6979 26.3082ZM5.34288 17.7215C4.22288 18.4682 3.61621 19.4248 3.61621 20.4282C3.61621 21.4198 4.23454 22.3765 5.34288 23.1115C8.24788 25.0598 13.1479 25.0598 16.0529 23.1115C17.1729 22.3648 17.7795 21.4082 17.7795 20.4048C17.7795 19.4132 17.1612 18.4565 16.0529 17.7215C13.1479 15.7848 8.24788 15.7848 5.34288 17.7215Z"
                                fill="#F8F8F8" />
                            <path
                                d="M21.3962 24.2084C20.9879 24.2084 20.6262 23.9284 20.5445 23.5084C20.4512 23.03 20.7545 22.575 21.2212 22.47C21.9562 22.3184 22.6329 22.0267 23.1579 21.6184C23.8229 21.1167 24.1845 20.4867 24.1845 19.8217C24.1845 19.1567 23.8229 18.5267 23.1695 18.0367C22.6562 17.64 22.0145 17.36 21.2562 17.185C20.7895 17.08 20.4862 16.6134 20.5912 16.135C20.6962 15.6684 21.1629 15.365 21.6412 15.47C22.6445 15.6917 23.5195 16.0884 24.2312 16.6367C25.3162 17.4534 25.9345 18.6084 25.9345 19.8217C25.9345 21.035 25.3045 22.19 24.2195 23.0184C23.4962 23.5784 22.5862 23.9867 21.5829 24.185C21.5129 24.2084 21.4545 24.2084 21.3962 24.2084Z"
                                fill="#F8F8F8" />
                        </svg>
                    </div>
                    <div>
                        <div class="font-semibold text-xs sm:text-sm">Staffs</div>
                        <div class="font-bold text-xl sm:text-2xl mt-1">{{ $staffs }}</div>
                    </div>
                </div>
            </div>
        </div>
        {{-- chart data --}}
        <div class="px-5 py-6 rounded-lg bg-white mt-5">
            <livewire:user.partials.stats />
        </div>
     @endif



    {{-- Recent booking --}}
    <section class="p-3 sm:p-5 px-5 py-6 rounded-lg bg-white mt-5">
        <div class="mx-auto max-w-full">
            <div class="relative overflow-hidden">
                <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/2">
                        <h3 class="text-2xl font-bold mb-1">Recent bookings</h3>
                        <p class="text-gray-400 font-extralight text-sm  mb-6">Here’s a list of recent bookings</p>
                    </div>
                    <div
                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <a href="{{ route('user.booking') }}" wire:navigate
                            class="flex rounded-xl border items-center border-primary-500 bg-transparent justify-center hover:bg-primary-500 text-primary-500 hover:text-white transition-colors ease-in-out px-8 py-3 font-light text-sm text-center">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="size-4 mr-2"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    d="M13 11.2502C12.9355 11.2502 12.8748 11.228 12.8236 11.1767C12.7288 11.0819 12.7288 10.9185 12.8236 10.8238L21.0236 2.62379C21.1183 2.52905 21.2817 2.52905 21.3764 2.62379C21.4712 2.71853 21.4712 2.88194 21.3764 2.97668L13.1764 11.1767C13.1252 11.228 13.0645 11.2502 13 11.2502Z" />
                                <path
                                    d="M22 7.55C21.59 7.55 21.25 7.21 21.25 6.8V2.75H17.2C16.79 2.75 16.45 2.41 16.45 2C16.45 1.59 16.79 1.25 17.2 1.25H22C22.41 1.25 22.75 1.59 22.75 2V6.8C22.75 7.21 22.41 7.55 22 7.55Z" />
                                <path
                                    d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H11C11.41 1.25 11.75 1.59 11.75 2C11.75 2.41 11.41 2.75 11 2.75H9C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V13C21.25 12.59 21.59 12.25 22 12.25C22.41 12.25 22.75 12.59 22.75 13V15C22.75 20.43 20.43 22.75 15 22.75Z" />
                            </svg>
                            See All
                        </a>
                        <button type="button" x-data x-on:click="$dispatch('open-add-booking-drawer')"
                            class="flex items-center justify-center text-white bg-primary-500 hover:bg-primary-600 focus:ring-4 focus:ring-primary-300 font-light transition-colors ease-in-out rounded-xl text-sm px-4 py-3  focus:outline-none">
                            <svg class="size-5 mr-2" fill="currentColor" viewbox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Create booking
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 ">
                        <thead class="text-xs text-gray-700 border-b border-gray-50">
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
                        <button class="px-3 py-1 bg-gray-200  text-gray-700 rounded-lg hover:bg-gray-300">Prev</button>
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
