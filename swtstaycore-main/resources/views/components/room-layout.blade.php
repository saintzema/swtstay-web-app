<div class="flex-1 overflow-y-auto p-6">

    @if (!Auth::user()->hotelStaff)
        {{-- add room component will be here --}}
        <livewire:user.partials.add-room />
    @endif

    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4">
        <div class="w-full md:w-1/2">
            <h3 class="text-2xl font-bold mb-1">Manage Rooms</h3>
            <p class="text-gray-400 font-extralight text-sm">Manage rooms, set availability, and add new ones</p>
        </div>
        <div
            class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">

            <button type="button" x-data x-on:click="$dispatch('open-add-room-drawer')"
                class="flex items-center justify-center text-white bg-primary-500 hover:bg-primary-600 focus:ring-4 focus:ring-primary-300 font-light transition-colors ease-in-out rounded-xl text-sm px-4 py-3  focus:outline-none">
                <svg class="size-5 mr-2" fill="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                </svg>
                Add Room
            </button>
        </div>
    </div>

    <div class="mt-4">
        <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400">
            <li class="me-2">
                <a href="{{ route('user.room') }}" wire:navigate class="inline-block px-5 py-1.5 {{ request()->url() === route('user.room') ? 'border-primary-500 text-primary-500 ' : 'hover:text-gray-900 hover:bg-gray-100'}} rounded-full border">All Rooms</a>
            </li>
            <li class="me-2">
                <a href="{{ route('user.room.available') }}" wire:navigate  class="inline-block px-5 py-1.5 {{ request()->url() === route('user.room.available') ? 'border-primary-500 text-primary-500 ' : 'hover:text-gray-900 hover:bg-gray-100'}} rounded-full border">Available Rooms</a>
            </li>
            <li class="me-2">
                <a href="{{ route('user.room.occupied') }}" wire:navigate class="inline-block px-5 py-1.5 {{ request()->url() === route('user.room.occupied') ? 'border-primary-500 text-primary-500 ' : 'hover:text-gray-900 hover:bg-gray-100'}} rounded-full border">Occupied Rooms</a>
            </li>
        </ul>
    </div>



     {{ $slot}}

</div>
