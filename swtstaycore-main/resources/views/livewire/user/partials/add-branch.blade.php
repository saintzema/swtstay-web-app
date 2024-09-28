<x-add-branch-drawer :autoShow="Auth::user()->hotelOwner->is_branch_added ? false : true">
    <form wire:submit="submit">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
            <!-- Country -->
            <div>
                <label for="country" class="block text-sm font-normal text-gray-700">Country</label>
                <select id="country" wire:model.live="country"
                    class="mt-1 border transition-all ease-in-out border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                    <option value="">Select Country</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
                @error('country')
                    <span class="text-red-500 text-sm font-extralight italic">{{ $message }}</span>
                @enderror
            </div>

            <!-- State -->
            <div>
                <label for="state" class="block text-sm font-normal text-gray-700">State
                    <span wire:loading wire:target="country">
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
                </label>
                <select id="state" wire:model.live="state"
                    class="mt-1 border transition-all ease-in-out border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                    {{ is_null($country) ? 'disabled' : '' }}>
                    <option value="">Select State</option>
                    @foreach ($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                    @endforeach
                </select>
                @error('state')
                    <span class="text-red-500 text-sm font-extralight italic">{{ $message }}</span>
                @enderror
            </div>

            <!-- City -->
            <div>
                <label for="city" class="block text-sm font-normal text-gray-700">City
                    <span wire:loading wire:target="state">
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
                </label>
                <select id="city" wire:model="city"
                    class="mt-1 border transition-all ease-in-out border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                    {{ is_null($state) ? 'disabled' : '' }}>
                    <option value="">Select City</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
                @error('city')
                    <span class="text-red-500 text-sm font-extralight italic">{{ $message }}</span>
                @enderror
            </div>

            <!-- Zip Code -->
            <div>
                <label for="zip_code" class="block text-sm font-normal text-gray-700">Zip Code
                    <span><i>(optional)</i></span></label>
                <input type="text" id="zip_code" wire:model="zip_code"
                    class="mt-1 border transition-all ease-in-out border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                @error('zip_code')
                    <span class="text-red-500 text-sm font-extralight italic">{{ $message }}</span>
                @enderror
            </div>

            <!-- Phone -->
            <div>
                <label for="phone" class="block text-sm font-normal text-gray-700">Phone</label>
                <input type="text" id="phone" wire:model="phone"
                    class="mt-1 border transition-all ease-in-out border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                @error('phone')
                    <span class="text-red-500 text-sm font-extralight italic">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-normal text-gray-700">Email</label>
                <input type="email" id="email" wire:model="email"
                    class="mt-1 border transition-all ease-in-out border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                @error('email')
                    <span class="text-red-500 text-sm font-extralight italic">{{ $message }}</span>
                @enderror
            </div>

            <!-- Address -->
            <div class="md:col-span-2">
                <label for="address" class="block text-sm font-normal text-gray-700">StreetAddress</label>
                <textarea id="address" wire:model="address" rows="2"
                    class="resize-none mt-1 border transition-all ease-in-out border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"></textarea>
                @error('address')
                    <span class="text-red-500 text-sm font-extralight italic">{{ $message }}</span>
                @enderror
            </div>

            <div x-data="{
                currentAmenity: @entangle('currentAmenity').defer,
                amenities: @entangle('amenities'),
                addAmenity() {
                    let amenities = this.currentAmenity.split(',').map(a => a.trim()).filter(a => a !== '');
                    amenities.forEach((amenity) => {
                        if (!this.amenities.includes(amenity)) {
                            // Optimistically update the UI
                            this.amenities.push(amenity);
                            // Send the amenity to the server
                            $wire.addAmenity(amenity);
                        }
                    });
                    this.currentAmenity = '';
                },
                removeAmenity(index) {
                    this.amenities.splice(index, 1);
                    $wire.removeAmenity(index);
                }
            }" class="md:col-span-2">
                <div class="mb-4">
                    <label for="amenities" class="flex mb-2 text-sm font-normal text-gray-900 select-none items-center">
                        Amenities
                    </label>
                    <hr class="my-2">
                    <input type="text" placeholder="Add amenities..." x-model="currentAmenity"
                        @keyup.comma.prevent="addAmenity()" {{-- @keydown.enter.prevent="addAmenity()" --}}
                        class="mt-1 border transition-all ease-in-out border-gray-100 text-gray-500 text-sm font-light hover:shadow-sm shadow-primary-500/10  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" />
                </div>
                <div class="flex flex-wrap">
                    <template x-for="(amenity, index) in amenities" :key="index">
                        <span class="bg-option text-gray-500 text-sm font-extralight mr-2 px-2.5 py-1 rounded mb-2">
                            <span x-text="amenity"></span>
                            <button type="button" @click="removeAmenity(index)"
                                class="ml-2 text-gray-600 hover:text-red-900">
                                &times;
                            </button>
                        </span>
                    </template>
                </div>
                <hr class="my-2">
            </div>
             @error('amenities')
                    <span class="text-red-500 text-sm font-extralight italic">{{ $message }}</span>
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
    {{-- </div> --}}
</x-add-branch-drawer>
