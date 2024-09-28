@props(['message'])
<div x-data="{ showToast: true }" x-init="setTimeout(() => showToast = false, 1000)" x-show="showToast" id="toast-default"
    class="fixed z-50 inset-0 overflow-hidden" role="alert"
    x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-4"
    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 translate-y-4" x-cloak>
    {{-- backdrop --}}
    <div x-on:click="showToast = false" class="fixed inset-0 bg-gray-950/10 backdrop-blur-sm z-[-1]"></div>
    {{-- toast --}}
    <div class="bg-gray-100/95 backdrop-blur-sm w-full max-w-md p-1 mt-4 rounded-xl shadow m-auto">
        <div class="flex items-center bg-white border text-sm text-green-500 p-4 rounded-xl shadow w-full">
            {{ $message }}
            <button x-on:click="showToast = false" type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-green-400/25 text-green-400 hover:text-gray-900 rounded-lg  p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>

    </div>

</div>
