<x-edit-hotel-drawer>
    <form" class="space-y-6">
        <div>
            <label for="name" class="block mb-2 text-sm font-semibold text-gray-900 select-none">
                Hotel Name
            </label>
            <input type="text" wire:model="hotel_name" placeholder="Name of hotel"
                class="mt-1 border transition-all ease-in-out border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
            @error('hotel_name')
                <span class="text-red-500 text-xs font-extralight">{{ $message }}</span>
            @enderror
        </div>

        <div class="grid grid-cols-2 space-x-3">
            <div>
                <label for="min_price" class="flex mb-2 text-sm font-semibold text-gray-900 select-none items-center">
                    Min price (₦)
                    <button data-popover-target="minPrice" data-popover-placement="right" class="ml-2" type="button">
                        <svg class="w-4 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                clip-rule="evenodd"></path>
                        </svg><span class="sr-only">Show information</span>
                    </button>
                    <div data-popover id="minPrice" role="tooltip"
                        class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0">
                        <div
                            class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                            <h3 class="font-semibold text-gray-900">Minimum price</h3>
                        </div>
                        <div class="px-3 py-2">
                            <p>The minimum price for a room or suite that is available in your hotel.
                                <span>You can also updated this in your dashboard</span>
                            </p>
                        </div>
                        <div data-popper-arrow></div>
                    </div>
                </label>
                <input type="number" wire:model.blur="min_price" placeholder="e.g 50,000"
                    class="mt-1 border transition-all ease-in-out border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                @error('min_price')
                    <span class="text-red-500 text-xs font-extralight">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="max_price" class="block mb-2 text-sm font-semibold text-gray-900 select-none">
                    Max price (₦)
                    <button data-popover-target="maxPrice" data-popover-placement="right" class="ml-2" type="button">
                        <svg class="w-4 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                clip-rule="evenodd"></path>
                        </svg><span class="sr-only">Show information</span>
                    </button>
                    <div data-popover id="maxPrice" role="tooltip"
                        class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0">
                        <div
                            class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                            <h3 class="font-semibold text-gray-900">Maximum price</h3>
                        </div>
                        <div class="px-3 py-2">
                            <p>The maximum price for a room or suite that is available in your hotel.
                                <span>You can also updated this in your dashboard</span>
                            </p>
                        </div>
                        <div data-popper-arrow></div>
                    </div>
                </label>
                </label>
                <input type="number" wire:model="max_price" placeholder="e.g 500,000"
                    class="mt-1 border transition-all ease-in-out border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                @error('max_price')
                    <span class="text-red-500 text-xs font-extralight">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div>
            <label for="description" class="block mb-2 text-sm font-semibold text-gray-900 select-none">Hotel
                Description</label>
            <textarea wire:model='description' name="" id="" rows="3"
                placeholder="e.g We are a 5 star rated hotel" draggable="false"
                class="resize-none mt-1 border transition-all ease-in-out border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"></textarea>
            @error('description')
                <span class="text-red-500 text-xs font-extralight">{{ $message }}</span>
            @enderror
        </div>

        <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
            x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-cancel="uploading = false"
            x-on:livewire-upload-error="uploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress" class="max-w-2xl mx-auto mt-10">

            <label for="last_name" class="block mb-2 text-sm font-semibold text-gray-900 select-none">Upload a picture
                of the hotel (5 max)</label>

            <div class="border-dashed border-2 border-primary-100 bg-option rounded-lg p-6 text-center cursor-pointer"
                x-on:click="$refs.fileInput.click()">
                <div class="flex items-center justify-center text-gray-900 text-sm text-center">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.9398 7.24988C14.7498 7.24988 14.5598 7.17988 14.4098 7.02988L12.3798 4.99988L10.3498 7.02988C10.0598 7.31988 9.57977 7.31988 9.28977 7.02988C8.99977 6.73988 8.99977 6.25988 9.28977 5.96988L11.8498 3.40988C12.1398 3.11988 12.6198 3.11988 12.9098 3.40988L15.4698 5.96988C15.7598 6.25988 15.7598 6.73988 15.4698 7.02988C15.3198 7.17988 15.1298 7.24988 14.9398 7.24988Z" />
                        <path
                            d="M12.3799 14.93C11.9699 14.93 11.6299 14.59 11.6299 14.18V4.01001C11.6299 3.60001 11.9699 3.26001 12.3799 3.26001C12.7899 3.26001 13.1299 3.60001 13.1299 4.01001V14.18C13.1299 14.6 12.7899 14.93 12.3799 14.93Z"
                            fill="#121212" />
                        <path
                            d="M12.5 20.75C7.35 20.75 3.75 17.15 3.75 12C3.75 11.59 4.09 11.25 4.5 11.25C4.91 11.25 5.25 11.59 5.25 12C5.25 16.27 8.23 19.25 12.5 19.25C16.77 19.25 19.75 16.27 19.75 12C19.75 11.59 20.09 11.25 20.5 11.25C20.91 11.25 21.25 11.59 21.25 12C21.25 17.15 17.65 20.75 12.5 20.75Z" />
                    </svg>
                    <span class="ml-2">Upload image</span>
                </div>
                <input type="file" wire:model="imageFiles" x-ref="fileInput" max="5" maxlength="5"
                    class="hidden" multiple>
            </div>

            <div x-show="uploading" class="mt-3">
                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                    <div class="bg-primary-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                        x-bind:style="{ width: progress + '%' }" x-text="`${progress}%`">
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-5 gap-2 mt-3">
                @if ($imageFiles)
                    @foreach ($imageFiles as $key => $image)
                        <div class="relative w-full h-20">
                            <img src="{{ $image->temporaryUrl() }}" alt="Preview"
                                class="w-full h-full object-cover rounded">
                            <button type="button" wire:click='removeImage({{ $key }})'
                                class="absolute top-1 right-1 text-red-500 rounded-full p-1">&times;</button>
                        </div>
                    @endforeach
                @endif
            </div>
            @error('imageFiles')
                <span class="text-red-500 text-xs font-extralight">{{ $message }}</span>
            @enderror
            @error('imageFiles.*')
                <span class="text-red-500 text-xs font-extralight">{{ $message }}</span>
            @enderror
        </div>
        <!-- Submit Button -->
        <div class="mt-6">
            <button type="submit"
                class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-normal rounded-md text-white bg-primary-500 hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <span wire:loading wire:target="submit">
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
                <span wire:loading.remove wire:target="submit">
                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
                Submit
            </button>
        </div>
    </form>
</x-edit-hotel-drawer>
