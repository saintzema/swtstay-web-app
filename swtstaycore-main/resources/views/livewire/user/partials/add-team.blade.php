<x-add-team-modal>
    <form class="space-y-4" wire:submit='save'>

        <div class="grid grid-cols-2 space-x-4">
            <div>
                <label for="firstName" class="block text-sm font-normal text-gray-700">first name</label>
                <input type="text" id="firstName" wire:model="firstName"
                    class="mt-1 border transition-all ease-in-out border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                @error('firstName')
                    <span class="text-red-500 text-xs font-extralight italic"><small>{{ $message }}</small></span>
                @enderror
            </div>

            <div>
                <label for="lastName" class="block text-sm font-normal text-gray-700">last name</label>
                <input type="text" id="lastName" wire:model="lastName"
                    class="mt-1 border transition-all ease-in-out border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                @error('lastName')
                    <span class="text-red-500 text-xs font-extralight italic"><small>{{ $message }}</small></span>
                @enderror
            </div>
        </div>

        <div>
            <label for="emailAddress" class="block text-sm font-normal text-gray-700">Email address</label>
            <input type="email" id="emailAddress" wire:model="emailAddress"
                class="mt-1 border transition-all ease-in-out border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
            @error('emailAddress')
                <span class="text-red-500 text-xs font-extralight italic"><small>{{ $message }}</small></span>
            @enderror
        </div>

        {{-- bed typs --}}
        <div>
            <label for="role" class="block text-sm font-normal text-gray-700">Role</label>
            <select id="role" wire:model="role"
                class="mt-1 border transition-all ease-in-out border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                <option value="">Select a role</option>
                @foreach (App\Enums\TeamRole::cases() as $role)
                    <option value="{{ $role->value }}">{{ $role->value }}</option>
                @endforeach
            </select>
            @error('role')
                <span class="text-red-500 text-xs font-extralight italic"><small>{{ $message }}</small></span>
            @enderror
        </div>

        <!-- branches -->
        <div>
            <label for="branchId" class="block text-sm font-normal text-gray-700">Which branch are you adding
                staff</label>
            <select id="branchId" wire:model="branchId"
                class="mt-1 border transition-all ease-in-out border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                <option value="">Select branch</option>
                @foreach ($branches as $branch)
                    <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                @endforeach
            </select>
            @error('branchId')
                <span class="text-red-500 text-xs font-extralight italic"><small>{{ $message }}</small></span>
            @enderror
        </div>
        <div class="relative w-full" x-data="{ show: false }">
            <h2 class="text-sm font-normal text-gray-700">Set password</h2>
            <p class="text-xs font-light text-gray-500 my-2">Create a password to grant access permission for this role
            </p>
            <hr>
            <label for="password" class="block text-sm font-normal text-gray-700 mt-2">Password</label>
            <div class="relative">
                <input :type="show ? 'text' : 'password'" name="password" id="password" wire:model='password'
                    placeholder="••••••••"
                    class="mt-1 border transition-all ease-in-out border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                    >
                <button type="button" @click="show = !show"
                    class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500 dark:text-gray-400">
                    <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                    </svg>
                    <svg x-show="show" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 4.5c-4.638 0-8.573 3.007-9.963 7.178a1.012 1.012 0 0 0 0 .639C3.423 16.49 7.36 19.5 12 19.5c4.638 0 8.573-3.007 9.963-7.178a1.012 1.012 0 0 0 0-.639C20.577 7.51 16.64 4.5 12 4.5Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.752 19.485a0.375 0.375 0 0 1-.53 0 0.375 0.375 0 0 1 0-.53l14.016-14.016a0.375 0.375 0 0 1 .53 0 0.375 0.375 0 0 1 0 .53l-14.016 14.016Z" />
                    </svg>
                </button>
            </div>
            @error('password')
                <span class="text-red-500 text-xs font-extralight italic"><small>{{ $message }}</small></span>
            @enderror
        </div>
        <div class="flex justify-end mt-6">
            <button type="submit"
                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-normal rounded-md text-white bg-primary-500 hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <span wire:loading wire:transition wire:target="save">
                    <svg aria-hidden="true" role="status" class="inline w-4 h-4 me-3 text-gray-200 animate-spin"
                        viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                            fill="currentColor" />
                        <path
                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                            fill="#1C64F2" />
                    </svg>
                </span>
                Send Invite
            </button>
        </div>
    </form>
</x-add-team-modal>
