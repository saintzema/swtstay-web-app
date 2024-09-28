<div class="flex-1 overflow-y-auto p-6">
    {{-- success message --}}
    @if (session()->has('success'))
        <x-success-alert message="{{ session('success') }}" />
    @endif
    {{-- add room component will be here --}}
    <livewire:user.partials.add-room :branchId="$branch->id"/>
    {{-- edit branch component will be here --}}
    <livewire:user.partials.edit-branch  :branch="$branch"/>
    {{-- add staff componenet will be here --}}
    <livewire:user.partials.add-team :branchId="$branch->id"/>
    {{-- Breadcrumb --}}
    <nav class="flex justify-between border-b pb-3" aria-label="Breadcrumb">
        <ol class="inline-flex items-center mb-3 sm:mb-0">
            <li>
                <span
                    class="inline-flex items-center px-3 py-2 text-sm font-normal text-center text-gray-900  rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-100">
                    Management
                </span>
            </li>
            <span class="mx-2 text-gray-400">/</span>
            <li>
                <a href="{{ route('user.hotel') }}" wire:navigate
                    class="inline-flex items-center px-3 py-2 text-sm font-normal text-center text-gray-900 hover:text-primary-500">
                    Hotel
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-3 ml-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m19.5 4.5-15 15m0 0h11.25m-11.25 0V8.25" />
                    </svg>
                </a>
            </li>

            <span class="mx-2 text-gray-400">/</span>
            <li aria-current="page">
                <div class="flex items-center">
                    <button id="dropdownDatabase" data-dropdown-toggle="dropdown-database"
                        class="inline-flex items-center px-3 py-2 text-sm font-normal text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-900 dark:hover:bg-gray-800 dark:text-white dark:focus:ring-gray-700">
                        <svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm9-10v.4A3.6 3.6 0 0 1 8.4 9H6.61A3.6 3.6 0 0 0 3 12.605M14.458 3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" />
                        </svg>
                        {{ $branch->name }}
                        <svg class="w-2.5 h-2.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="dropdown-database"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                            @foreach ($all_branches as $item)
                                <li>
                                    <a href="{{ route('user.branch.detail', Crypt::encryptString($item->id)) }}"
                                        wire:navigate
                                        class="block px-4 py-2 hover:bg-gray-100 line-clamp-1">{{ $item->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </li>
        </ol>
        <div>
            <button type="button" x-data x-on:click="$dispatch('open-edit-branch-drawer')"
                class="inline-flex items-center px-3 py-2 text-sm font-normal text-center text-gray-600 bg-gray-200 rounded-lg hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-gray-300 dark:focus:ring-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                </svg>
                Edit Branch
            </button>
        </div>
    </nav>

    {{-- hotel branch room details --}}
    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab"
            data-tabs-toggle="#default-styled-tab-content"
            data-tabs-active-classes="text-primary-500 hover:text-primary-500 dark:text-purple-500 dark:hover:text-purple-500 border-primary-500 dark:border-purple-500"
            data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
            role="tablist">
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg"
                    data-tabs-target="#All-Rooms-Tab" type="button" role="tab" aria-controls="room"
                    aria-selected="false">All Rooms</button>
            </li>
            <li class="me-2" role="presentation">
                <button
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                    id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab"
                    aria-controls="dashboard" aria-selected="false">Analytics</button>
            </li>
            <li class="me-2" role="presentation">
                <button
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                    data-tabs-target="#branch-staffs-tab" type="button" role="tab"
                    aria-controls="staff" aria-selected="false">Staffs</button>
            </li>
        </ul>
    </div>
    <div id="default-styled-tab-content">
        <div class="hidden p-4 rounded-lg bg-gray-50" id="All-Rooms-Tab" role="tabpanel"
            aria-labelledby="room-tab">
            @forelse ($rooms as $room)
                            <div class="bg-transparent rounded-lg hover:shadow-sm-light border border-option overflow-hidden mb-6">
                <div class="px-2 py-2 flex flex-col sm:flex-row justify-between items-center">
                    <div class="flex items-center mb-4 sm:mb-0">
                        <div class="flex-shrink-0">
                            <img class="w-28 h-28 rounded" src="{{ $room->images['0'] }}" alt="Neil image">
                        </div>
                        <div class="md:ml-5 md:mr-10">
                            <h4 class="text-sm font-semibold">Room Number/Name: {{ $room->room_number }}</h4>
                            <div class="flex items-center my-1">
                                @if (!empty($room->facilities))
                                    @foreach (collect(json_decode($room->facilities))->take(4) as $facility)
                                        <span class="inline-block bg-gray-200 p-1 rounded-full mr-2 text-xs">{{ $facility }}</span>
                                    @endforeach
                                @else
                                    <span class="inline-block text-xs text-gray-500">No facilities available</span>
                                @endif
                            </div>
                            <p class="text-xs text-gray-600">{{ $room->description }}</p>
                            <span class="text-lg font-semibold text-green-600 mr-4">NGN{{ $room->price }}</span>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row">
                        <label class="inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer" disabled {{ $room->availability? 'checked' : ''}} >
                            <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary-500"></div>
                            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Available</span>
                        </label>
                    </div>
                </div>
            </div>
            @empty
                {{-- A list of room will aparear here --}}
                <div class="block items-center justify-center text-center">
                    <div class="text-center space-y-2">
                        <img src="{{ asset('assets/Illustration.svg') }}" class="mx-auto" alt="" srcset="">
                        <p class="font-medium">Nothing to show yet</p>
                        <span class="text-sm text-gray-300">All rooms added to ths branch will appear here</span>
                        <button type="button" x-data x-on:click="$dispatch('open-add-room-drawer')"
                            class="flex items-center justify-center mx-auto text-white bg-primary-500 hover:bg-primary-600 font-light transition-colors ease-in-out rounded-xl text-sm px-4 py-3 ">
                            <svg class="size-5 mr-2" fill="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Add Room
                        </button>
                    </div>
                </div>
            @endforelse

        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard" role="tabpanel"
            aria-labelledby="dashboard-tab">
            <div class="h-96 flex items-center justify-center text-center">
                <div class="text-center">
                    <img src="{{ asset('assets/Illustration.svg') }}" class="mx-auto mb-4"
                        alt="" srcset="">
                    <p class="font-medium mb-2">Nothing to show yet</p>
                    {{-- <span class="text-sm text-gray-300">All Rooms added to ths branch will appear here</span> --}}
                </div>
            </div>
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="branch-staffs-tab" role="tabpanel"
            aria-labelledby="staff-tab">
                        <section class="p-3 sm:p-5 px-2 py-6 rounded-xl border bg-white mt-5">
        <div class="mx-auto max-w-full">
            <div class="relative overflow-hidden">
                <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 py-3 px-1">
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
                                        placeholder="Search through staffs">
                                </div>
                            </form>
                        </div>
                    <div
                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <button type="button" x-data x-on:click="$dispatch('open-add-team-modal')"
                            class="flex items-center justify-center text-white bg-primary-500 hover:bg-primary-600 focus:ring-4 focus:ring-primary-300 font-light transition-colors ease-in-out rounded-xl text-sm px-4 py-3  focus:outline-none">
                            <svg class="size-5 mr-2" fill="currentColor" viewbox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Add Staff
                        </button>
                    </div>
                </div>
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
                            @foreach ($staffs as $staff)


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
                    @if ($staffs->count() == 0)
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
            {{-- <div class="h-96 flex items-center justify-center text-center">
                <div class="text-center">
                    <img src="{{ asset('assets/Illustration.svg') }}" class="mx-auto mb-4"
                        alt="" srcset="">
                    <p class="font-medium mb-2">Nothing to show yet</p>
                </div>
            </div> --}}
        </div>
    </div>

</div>
