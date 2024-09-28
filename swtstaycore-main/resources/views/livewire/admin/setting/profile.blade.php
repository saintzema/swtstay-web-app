<div>
    {{-- success message --}}
    @if (session()->has('success'))
        <x-success-alert message="{{ session('success') }}" />
    @endif
    <x-admin.setting-layout>
                <div class="border rounded-xl mt-7 max-w-4xl p-16">
            <form wire:submit='save'>
                <div class="grid grid-cols-4">

                    {{-- Profile Picture --}}
                    <div class="flex items-start space-x-4">
                        <div class="relative">
                            <img src="https://via.placeholder.com/500" alt="Profile Picture"
                                class="h-40 w-40 rounded-full">
                            <div class="absolute bottom-2 right-1 bg-white rounded-full p-1">
                                <button class="bg-primary-50 border border-primary-100/30 rounded-full p-2 text-white">
                                    <svg width="24" height="24" viewBox="0 0 24 24" class="size-3" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H11C11.41 1.25 11.75 1.59 11.75 2C11.75 2.41 11.41 2.75 11 2.75H9C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V13C21.25 12.59 21.59 12.25 22 12.25C22.41 12.25 22.75 12.59 22.75 13V15C22.75 20.43 20.43 22.75 15 22.75Z"
                                            fill="#2B56C7" />
                                        <path
                                            d="M8.49984 17.6905C7.88984 17.6905 7.32984 17.4705 6.91984 17.0705C6.42984 16.5805 6.21984 15.8705 6.32984 15.1205L6.75984 12.1105C6.83984 11.5305 7.21984 10.7805 7.62984 10.3705L15.5098 2.49055C17.4998 0.500547 19.5198 0.500547 21.5098 2.49055C22.5998 3.58055 23.0898 4.69055 22.9898 5.80055C22.8998 6.70055 22.4198 7.58055 21.5098 8.48055L13.6298 16.3605C13.2198 16.7705 12.4698 17.1505 11.8898 17.2305L8.87984 17.6605C8.74984 17.6905 8.61984 17.6905 8.49984 17.6905ZM16.5698 3.55055L8.68984 11.4305C8.49984 11.6205 8.27984 12.0605 8.23984 12.3205L7.80984 15.3305C7.76984 15.6205 7.82984 15.8605 7.97984 16.0105C8.12984 16.1605 8.36984 16.2205 8.65984 16.1805L11.6698 15.7505C11.9298 15.7105 12.3798 15.4905 12.5598 15.3005L20.4398 7.42055C21.0898 6.77055 21.4298 6.19055 21.4798 5.65055C21.5398 5.00055 21.1998 4.31055 20.4398 3.54055C18.8398 1.94055 17.7398 2.39055 16.5698 3.55055Z"
                                            fill="#2B56C7" />
                                        <path
                                            d="M19.8501 9.83027C19.7801 9.83027 19.7101 9.82027 19.6501 9.80027C17.0201 9.06027 14.9301 6.97027 14.1901 4.34027C14.0801 3.94027 14.3101 3.53027 14.7101 3.41027C15.1101 3.30027 15.5201 3.53027 15.6301 3.93027C16.2301 6.06027 17.9201 7.75027 20.0501 8.35027C20.4501 8.46027 20.6801 8.88027 20.5701 9.28027C20.4801 9.62027 20.1801 9.83027 19.8501 9.83027Z"
                                            fill="#2B56C7" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- display the form --}}
                    <div class="col-span-3 flex flex-col justify-between">
                        <!-- Ensure the container is a flex column and space is distributed between items -->
                        <div class="flex-1 space-y-4">
                            <h2 class="pb-0 text-sm font-semibold">Basic Information</h2>
                            <hr class="mt-0">
                            <div class="grid grid-cols-2 space-x-3">
                                <!-- First Name -->
                                <div>
                                    <label for="firstName" class="block text-sm font-medium text-gray-700">First
                                        name</label>
                                    <input type="text" id="firstName" name="firstName" wire:model='firstName'
                                        class="mt-1 border transition-all ease-in-out border-gray-100 bg-transparent text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                                </div>
                                <!-- Last Name -->
                                <div>
                                    <label for="lastName" class="block text-sm font-medium text-gray-700">Last
                                        name</label>
                                    <input type="text" id="lastName" name="lastName" wire:model='lastName'
                                        class="mt-1 border transition-all ease-in-out bg-transparent border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="mt-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email
                                    address</label>
                                <div class="relative">
                                    <input type="email" wire:model='email'
                                        class="border transition-all ease-in-out bg-transparent border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                        disabled />
                                    <span
                                        class="absolute end-2.5 bottom-2 bg-green-50 text-green-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-light rounded-xl text-xs px-4 py-1">Verified</span>
                                </div>
                            </div>
                            <!-- Phone Number -->
                            <div class="mt-4">
                                <label for="phone" class="block text-sm font-medium text-gray-700">Phone
                                    number</label>
                                <input type="tel" id="phone" name="phone" wire:model='phone'
                                    class="mt-1 border transition-all ease-in-out bg-transparent border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                            </div>
                        </div>
                        <!-- Button at the bottom and to the end -->
                        <div class="flex justify-end mt-6">
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-normal rounded-md text-white bg-primary-500 hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <span wire:loading wire:transition wire:target="save">
                                    <svg aria-hidden="true" role="status"
                                        class="inline w-4 h-4 me-3 text-gray-200 animate-spin" viewBox="0 0 100 101"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                            fill="currentColor" />
                                        <path
                                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                            fill="#1C64F2" />
                                    </svg>
                                </span>
                                Save changes
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </x-admin.setting-layout>
</div>
