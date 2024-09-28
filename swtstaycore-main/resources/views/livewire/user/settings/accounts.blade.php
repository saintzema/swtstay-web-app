<div>
    {{-- success message --}}
    @if (session()->has('success'))
        <x-success-alert message="{{ session('success') }}" />
    @endif
    {{-- modal to add bank --}}
    <livewire:user.partials.add-bank>
    <x-setting-layout>
        <div class="border rounded-xl mt-7 max-w-4xl p-8">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 mt-7 md:space-x-4">

                    <div class="w-full md:w-4/5 md:mr-5">
                        <h3 class="text-xl font-bold mb-5">Payout account</h3>
                        <p class="text-gray-400 font-extralight text-sm">Your earnings will be paid into the listed account. Please ensure your account details are accurate and up-to-date Add new account</p>
                    </div>
                    <div
                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">

                        <button type="button" x-data x-on:click="$dispatch('open-add-bank-modal')"
                            class="flex items-center justify-center text-primary-500 hover:text-white hover:bg-primary-500 border border-primary-500 focus:ring-4 focus:ring-primary-300 font-light transition-colors ease-in-out rounded-xl text-sm px-4 py-3  focus:outline-none">
                            <svg class="size-5 mr-2" fill="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Add Bank Account
                        </button>
                    </div>
                </div>
        </div>
    </x-setting-layout>
</div>
