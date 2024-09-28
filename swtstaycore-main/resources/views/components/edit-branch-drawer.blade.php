{{-- @props(['autoShow' => false, ]) --}}

<div x-data="{ show: false }"
    x-show="show"
    {{-- x-init="if ({{ $autoShow ? 'true' : 'false' }}) { document.body.classList.add('overflow-hidden') }" --}}
    x-on:open-edit-branch-drawer.window="show = true;  document.body.classList.add('overflow-hidden')"
    x-on:close-edit-branch-drawer.window="show = false; document.body.classList.remove('overflow-hidden')"
    {{-- x-on:keydown.escape.window="show = false"  --}}
    style="display: none;" class="fixed z-50 inset-0 flex justify-end"
    x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0 translate-x-4"
    x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-200 transform"
    x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 translate-x-4">

    {{-- gray backdrop --}}
    <div class="fixed inset-0 bg-gray-950/10 backdrop-blur-sm"></div>

    {{-- drawer content --}}
    <div class="shadow-md bg-gray-100/95 backdrop-blur-sm p-2 w-full max-w-lg h-full fixed right-0">
        <div class="overflow-y-auto shadow-lg bg-white rounded h-full">
            {{-- drawer head --}}
            <div class="sticky top-0 flex bg-white z-10 justify-between items-center rounded-t-3xl border-b sm:mb-5 px-5 py-5">
                <div class="">
                    <h3 class="text-lg font-semibold text-gray-900">Edit Branch</h3>
                    <p class="text-gray-400 font-light">You can update the following information</p>
                </div>
                @if (Auth::user()->hotelOwner->is_branch_added)
                    <button type="button" x-on:click="$dispatch('close-edit-branch-drawer')"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                @endif

            </div>
            {{-- drawer body --}}
            <div class="overflow-y-auto px-4 py-3 scrollbar-show">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
