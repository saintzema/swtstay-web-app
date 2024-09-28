<div class="flex-1 overflow-y-auto p-6">
    {{-- add branch drawer will only show when the user just registered --}}
    <livewire:user.partials.add-branch />
    {{-- update hotel drower --}}
    <livewire:user.partials.update-hotel :hotel="$hotel" />
    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 px-4 mb-3">
        <div class="w-full md:w-1/2">
            <h2 class="text-2xl font-bold mb-1">Manage Hotel Branches</h2>
            <p class="text-gray-400 font-extralight text-sm">Manage and oversee your hotel branches, add new branch
                locations</p>
        </div>
    </div>
    {{-- hotel information --}}
    <div class="block sm:flex px-5 py-5 justify-start bg-white max-w-screen-md rounded-xl shadow-lg">
        <div x-data="{
            currentIndex: 0,
            images: {{ json_encode($images) }},
            prev() {
                this.currentIndex = this.currentIndex > 0 ? this.currentIndex - 1 : this.images.length - 1;
            },
            next() {
                this.currentIndex = this.currentIndex < this.images.length - 1 ? this.currentIndex + 1 : 0;
            },
            goTo(index) {
                this.currentIndex = index;
            }
        }" class="relative w-64 overflow-hidden rounded-xl">

            <!-- Image Slider -->
            <div class="flex transition-transform duration-500 ease-in-out"
                :style="`transform: translateX(-${currentIndex * 100}%)`">
                <template x-for="(image, index) in images" :key="index">
                    <div class="w-full flex-shrink-0">
                        <img :src="image" alt="Hotel Image"
                            class="w-64 h-40 object-cover rounded-lg shadow-md">
                    </div>
                </template>
            </div>

            <!-- Previous Button -->
            <button @click="prev"
                class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-200/80 p-2 text-gray-700 hover:bg-gray-300 rounded-full shadow-lg">
                &#10094;
            </button>

            <!-- Next Button -->
            <button @click="next"
                class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-200/80 p-2 text-gray-700 hover:bg-gray-300 rounded-full shadow-lg">
                &#10095;
            </button>

            <!-- Image Indicators -->
            <div class="absolute bottom-2 left-0 right-0 flex justify-center space-x-2 p-2">
                <template x-for="(image, index) in images" :key="index">
                    <button @click="goTo(index)"
                        :class="{ 'bg-gray-800': currentIndex === index, 'bg-gray-400': currentIndex !== index }"
                        class="w-3 h-3 rounded-full transition-all"></button>
                </template>
            </div>
        </div>

        <!-- Hotel Information -->
        <div class="ml-6 w-full">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-bold text-gray-900">Hotel Information</h1>
                <button type="button" x-data x-on:click="$dispatch('open-edit-hotel-drawer')"
                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-gray-100 rounded-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-50">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                    </svg>
                </button>
            </div>

            <hr class="my-3 border-gray-300">

            <p class="text-lg font-semibold text-gray-800">{{ $hotel->name }}</p>

            <!-- Price Information -->
            <div class="flex items-center justify-start space-y-0 my-1">
                <!-- Min Price Section -->
                <div class="flex items-center space-x-2">
                    <span class="text-sm font-medium text-gray-700">Min Price:</span>
                    <span class="text-green-600 font-semibold text-lg">₦{{ $hotel->min_price }}</span>
                </div>

                <!-- Arrow -->
                <div class="flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mx-2 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>
                </div>

                <!-- Max Price Section -->
                <div class="flex items-center space-x-2 m-0">
                    <span class="text-sm font-medium text-gray-700">Max Price:</span>
                    <span class="text-red-600 font-semibold text-lg">₦{{ $hotel->max_price }}</span>
                </div>
            </div>

            <!-- Verification Status -->
            <div class="mt-3">
                <span
                    class="inline-block px-3 py-1 rounded-full text-sm font-medium {{ $hotel->verified ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600' }}">
                    {{ $hotel->verified ? 'Verified' : 'Not Verified' }}
                </span>
            </div>
        </div>
    </div>
    {{-- branch list --}}
    <section class="p-3 sm:p-5 px-5 py-6 rounded-lg bg-white mt-5">
        <div class="mx-auto max-w-full">
            <div class="relative overflow-hidden">
                <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/2">
                        <h3 class="text-xl mb-1">Branch List</h3>
                        <p class="text-gray-400 font-extralight text-sm  mb-6">Here’s a list all branch, you can only
                            have maximun 2 branches</p>
                    </div>
                    <div
                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">

                        <button type="button" x-data x-on:click="$dispatch('open-add-branch-drawer')"
                            class="flex items-center justify-center text-white bg-primary-500 hover:bg-primary-600 focus:ring-4 focus:ring-primary-300 font-light transition-colors ease-in-out rounded-xl text-sm px-4 py-3  focus:outline-none">
                            <svg class="size-5 mr-2" fill="currentColor" viewbox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Add New Branch
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 ">
                        <thead class="text-xs text-gray-700 border-b border-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-3">Name</th>
                                <th scope="col" class="px-4 py-3">location</th>
                                <th scope="col" class="px-4 py-3">Address</th>
                                <th scope="col" class="px-4 py-3">Status</th>
                                <th scope="col" class="px-4 py-3">Rooms</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($hotel->branches as $branch)
                                <tr class="hover:bg-gray-50 hover:shadow-lg cursor-pointer"
                                    @click="$wire.branchDetail({{ $branch->id }})">
                                    <th class="px-4 py-3 font-medium text-gray-900 flex items-center">
                                        <a href="{{ route('user.branch.detail', Crypt::encryptString($branch->id)) }}"
                                            class="flex items-center" wire:navigate>
                                            {{ $branch->name }}
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="ml-1 size-3">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                            </svg>
                                        </a>
                                    </th>
                                    <td scope="row" class="px-4 py-3 whitespace-nowrap">{{ $branch->city }},
                                        {{ $branch->state }}</td>
                                    <td scope="row" class="px-4 py-3">{{ $branch->address }}</td>
                                    <td class="px-4 py-3">{{ $branch->status }}</td>
                                    <td class="px-4 py-3">{{ $branch->rooms->count() }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if ($hotel->branches->count() == 0)
                        <div class="h-96 flex items-center justify-center text-center">
                            <div class="text-center">
                                <img src="{{ asset('assets/Illustration.svg') }}" class="mx-auto mb-4"
                                    alt="" srcset="">
                                <p class="font-medium mb-2">Nothing to show yet</p>
                                <span class="text-sm text-gray-300">All branches will appear here.</span>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>

</div>
