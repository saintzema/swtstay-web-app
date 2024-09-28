<div>
    {{-- success message --}}
    @if (session()->has('success'))
        <x-success-alert message="{{ session('success') }}" />
    @endif
    <livewire:user.partials.add-team />
    <x-setting-layout>

        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 mt-7 md:space-x-4">
            <div class="w-full md:w-1/2">
                <h3 class="text-xl font-bold mb-1">Team Members</h3>
                <p class="text-gray-400 font-extralight text-sm">Streamline roles, and add new team members</p>
            </div>
            <div
                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">

                <button type="button" x-data x-on:click="$dispatch('open-add-team-modal')"
                    class="flex items-center justify-center text-white bg-primary-500 hover:bg-primary-600 focus:ring-4 focus:ring-primary-300 font-light transition-colors ease-in-out rounded-xl text-sm px-4 py-3  focus:outline-none">
                    <svg class="size-5 mr-2" fill="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    Add Staff
                </button>
            </div>
        </div>

            <section class="p-3 sm:p-5 px-2 py-6 rounded-xl border bg-white mt-5">
        <div class="mx-auto max-w-full">
            <div class="relative overflow-hidden">
                {{-- <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 px-1">
                    <div class="w-full md:w-1/2">
                        <h3 class="text-2xl font-bold mb-1">Recent bookings</h3>
                        <p class="text-gray-400 font-extralight text-sm  mb-6">Here’s a list of recent bookings</p>
                    </div>
                    <div
                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <button type="button"
                            class="flex items-center justify-center text-white bg-primary-500 hover:bg-primary-600 focus:ring-4 focus:ring-primary-300 font-light transition-colors ease-in-out rounded-xl text-sm px-4 py-3  focus:outline-none">
                            <svg class="size-5 mr-2" fill="currentColor" viewbox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Create booking
                        </button>
                    </div>
                </div> --}}
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 ">
                        <thead class="text-xs text-gray-700 border-b">
                            <tr>
                                <th scope="col" class="px-4 py-3">Name</th>
                                <th scope="col" class="px-4 py-3">Email Address</th>
                                <th scope="col" class="px-4 py-3">Role</th>
                                <th scope="col" class="px-4 py-3">Branch</th>
                                <th scope="col" class="px-4 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($hotelStaffs as $staff)


                            <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $staff->user->first_name }} {{ $staff->user->first_name }}</th>
                            <td class="px-4 py-3">{{ $staff->user->email }}</td>
                            <td class="px-4 py-3">{{ $staff->role }}</td>
                            <td class="px-4 py-3">{{ $staff->branch->name }}</td>
                            <td class="px-4 py-3">
                                <button type="button" class="p-2 hover:bg-gray-100 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                         @endforeach
                        </tbody>
                    </table>
                    @if ($hotelStaffs->count() == 0)
                       <div class="h-96 flex items-center justify-center text-center">
                            <div class="text-center">
                                <img src="{{ asset('assets/Illustration.svg') }}" class="mx-auto mb-4" alt=""
                                    srcset="">
                                <p class="font-medium mb-2">Nothing to show yet</p>
                                <span class="text-sm text-gray-300">You’ve not added a new role. When you do, it’ll appear here.</span>
                            </div>
                        </div>
                    @endif
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
        {{-- @dd($hotelStaffs) --}}
    </section>

    </x-setting-layout>
</div>
