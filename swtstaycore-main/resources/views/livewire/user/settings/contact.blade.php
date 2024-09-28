<div>
    {{-- success message --}}
    @if (session()->has('success'))
        <x-success-alert message="{{ session('success') }}" />
    @endif
    <x-setting-layout>
        <div class="border rounded-xl mt-7 max-w-4xl p-8">
            <form wire:submit='updatePassword'>
                <div class="flex space-x-4">

                    <div class="w-full md:w-4/5">
                        <h3 class="text-xl font-bold mb-1">Social media</h3>
                        <p class="text-gray-400 font-extralight text-sm">Connect your hotel's social media accounts to enhance your online presence and engage with guests</p>
                    </div>

                    {{-- display the form --}}
                    <div class="w-full justify-between">
                        <div class="flex-1 space-y-4">
                            <div>
                                <label for="instagram" class="block text-sm font-medium text-gray-700">Instagram</label>
                                <input type="text" wire:model='instagram' placeholder="@username"
                                        class="border transition-all ease-in-out bg-transparent border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" />
                            </div>
                            <div>
                                <label for="facebook" class="block text-sm font-medium text-gray-700">Facebook</label>
                                <input type="text" wire:model='facebook' placeholder="@username"
                                        class="border transition-all ease-in-out bg-transparent border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" />
                            </div>
                            <div>
                                <label for="tiktok" class="block text-sm font-medium text-gray-700">Tiktok</label>
                                <input type="text" wire:model='tiktok' placeholder="@username"
                                        class="border transition-all ease-in-out bg-transparent border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" />
                            </div>
                            <div>
                                <label for="twitter-x" class="block text-sm font-medium text-gray-700">X (Twitter)</label>
                                <input type="text" wire:model='twitter-x' placeholder="@username"
                                        class="border transition-all ease-in-out bg-transparent border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" />
                            </div>
                            <div>
                                <label for="tiktok" class="block text-sm font-medium text-gray-700">LinkedIn</label>
                                <input type="text" wire:model='tiktok' placeholder="/username"
                                        class="border transition-all ease-in-out bg-transparent border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" />
                            </div>
                        </div>
                        <!-- Button at the bottom and to the end -->
                        <div class="flex justify-end mt-6">
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-normal rounded-md text-white bg-primary-500 hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <span wire:loading wire:transition wire:target="updatePassword">
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
    </x-setting-layout>
</div>
