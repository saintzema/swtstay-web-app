<div>
    {{-- success message --}}
    @if (session()->has('success'))
        <x-success-alert message="{{ session('success') }}" />
    @endif
    {{-- @if (!Auth::user()->hotelStaff)
        add room component will be here
        <livewire:user.partials.add-room />
    @endif --}}
    <x-room-layout>
        <div class="container mx-auto py-8">
            <form class="flex items-center justify-center mb-4" wire:submit.prevent>
                <div class="relative w-full md:w-1/2">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" width="15" height="15" viewBox="0 0 24 24"
                            fill="urrentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.5 21.75C5.85 21.75 1.25 17.15 1.25 11.5C1.25 5.85 5.85 1.25 11.5 1.25C17.15 1.25 21.75 5.85 21.75 11.5C21.75 17.15 17.15 21.75 11.5 21.75ZM11.5 2.75C6.67 2.75 2.75 6.68 2.75 11.5C2.75 16.32 6.67 20.25 11.5 20.25C16.33 20.25 20.25 16.32 20.25 11.5C20.25 6.68 16.33 2.75 11.5 2.75Z" />
                            <path
                                d="M21.9999 22.7499C21.8099 22.7499 21.6199 22.6799 21.4699 22.5299L19.4699 20.5299C19.1799 20.2399 19.1799 19.7599 19.4699 19.4699C19.7599 19.1799 20.2399 19.1799 20.5299 19.4699L22.5299 21.4699C22.8199 21.7599 22.8199 22.2399 22.5299 22.5299C22.3799 22.6799 22.1899 22.7499 21.9999 22.7499Z" />
                        </svg>
                    </div>
                    <input type="text" id="simple-search" wire:model.live="search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 px-2 py-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Search through available rooms">
                </div>
            </form>
            <!-- Repeated block for each room -->
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
                                            <span
                                                class="inline-block bg-gray-200 p-1 rounded-full mr-2 text-xs">{{ $facility }}</span>
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
                                <input type="checkbox" value="" class="sr-only peer" disabled
                                    {{ $room->availability ? 'checked' : '' }}>
                                <div
                                    class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary-500">
                                </div>
                                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Available</span>
                            </label>
                        </div>
                    </div>
                </div>
            @empty
                <div class="h-96 flex items-center justify-center text-center">
                    <div class="text-center">
                        <img src="{{ asset('assets/Illustration.svg') }}" class="mx-auto mb-4" alt=""
                            srcset="">
                        <p class="font-medium mb-2">Nothing to show yet</p>
                        <span class="text-sm text-gray-300">There's currently no available room. Available rooms will
                            appear here.</span>
                    </div>
                </div>
            @endforelse

            <!-- Repeat ends -->
        </div>
    </x-room-layout>
</div>
