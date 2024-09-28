<div class="flex-1 overflow-y-auto p-6">

    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 px-4 mb-3">
        <div class="w-full md:w-1/2">
            <h2 class="text-3xl font-bold mb-1">Settings</h2>
        </div>
    </div>

    <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200">
        <ul class="flex flex-wrap -mb-px">
            <li class="me-2">
                <a href="{{ route('admin.settings.profile') }}" wire:navigate
                    class="inline-block p-4  rounded-t-lg {{ request()->url() === route('admin.settings.profile') ? 'text-primary-500 border-b-2 border-primary-500' : 'hover:text-gray-600 hover:border-gray-300 border-b-2 border-transparent' }}">
                    Profile
                </a>
            </li>
            {{-- @if (Auth::user()->hotelOwner) --}}
                <li class="me-2">
                    <a href="{{ route('user.settings.staff') }}" wire:navigate
                        class="inline-block p-4  rounded-t-lg {{ request()->url() === route('user.settings.staff') ? 'text-primary-500 border-b-2 border-primary-500' : 'hover:text-gray-600 hover:border-gray-300 border-b-2 border-transparent' }}">
                        Hotel Staffs
                    </a>
                </li>
                {{-- <li class="me-2">
                    <a href="{{ route('user.settings.preference') }}" wire:navigate
                        class="inline-block p-4  rounded-t-lg {{ request()->url() === route('user.settings.preference') ? 'text-primary-500 border-b-2 border-primary-500' : 'hover:text-gray-600 hover:border-gray-300 border-b-2 border-transparent' }} ">
                        Preferences
                    </a>
                </li> --}}
                <li class="me-2">
                    <a href="{{ route('user.settings.contact') }}" wire:navigate
                        class="inline-block p-4  rounded-t-lg {{ request()->url() === route('user.settings.contact') ? 'text-primary-500 border-b-2 border-primary-500' : 'hover:text-gray-600 hover:border-gray-300 border-b-2 border-transparent' }} ">
                        Contact
                    </a>
                </li>
                <li class="me-2">
                    <a href="{{ route('user.settings.account') }}" wire:navigate
                        class="inline-block p-4  rounded-t-lg {{ request()->url() === route('user.settings.account') ? 'text-primary-500 border-b-2 border-primary-500' : 'hover:text-gray-600 hover:border-gray-300 border-b-2 border-transparent' }} ">
                        Accounts
                    </a>
                </li>
            {{-- @endif --}}
                <li class="me-2">
                    <a href="{{ route('user.settings.security') }}" wire:navigate
                        class="inline-block p-4  rounded-t-lg {{ request()->url() === route('user.settings.security') ? 'text-primary-500 border-b-2 border-primary-500' : 'hover:text-gray-600 hover:border-gray-300 border-b-2 border-transparent' }} ">
                        Security
                    </a>
                </li>
            {{-- @if (Auth::user()->hotelOwner)
                <li class="me-2">
                    <a href="{{ route('user.settings.api-key') }}" wire:navigate
                        class="inline-block p-4  rounded-t-lg {{ request()->url() === route('user.settings.api-key') ? 'text-primary-500 border-b-2 border-primary-500' : 'hover:text-gray-600 hover:border-gray-300 border-b-2 border-transparent' }} ">
                        Api Keys
                    </a>
                </li>
            @endif --}}
        </ul>
    </div>
    {{ $slot }}
</div>
