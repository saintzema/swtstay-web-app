<div
    x-data="{ uploading: false, progress: 0 }"
    x-on:livewire-upload-start="uploading = true"
    x-on:livewire-upload-finish="uploading = false"
    x-on:livewire-upload-cancel="uploading = false"
    x-on:livewire-upload-error="uploading = false"
    x-on:livewire-upload-progress="progress = $event.detail.progress"
 class="max-w-2xl mx-auto mt-10">

    <div class="border-dashed border-2 border-primary-100 bg-option rounded-lg p-6 text-center cursor-pointer"
        x-on:click="$refs.fileInput.click()">
        <div class="flex items-center justify-center text-gray-900 text-sm text-center">
            <svg width="25" height="24" viewBox="0 0 25 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.9398 7.24988C14.7498 7.24988 14.5598 7.17988 14.4098 7.02988L12.3798 4.99988L10.3498 7.02988C10.0598 7.31988 9.57977 7.31988 9.28977 7.02988C8.99977 6.73988 8.99977 6.25988 9.28977 5.96988L11.8498 3.40988C12.1398 3.11988 12.6198 3.11988 12.9098 3.40988L15.4698 5.96988C15.7598 6.25988 15.7598 6.73988 15.4698 7.02988C15.3198 7.17988 15.1298 7.24988 14.9398 7.24988Z" />
                <path d="M12.3799 14.93C11.9699 14.93 11.6299 14.59 11.6299 14.18V4.01001C11.6299 3.60001 11.9699 3.26001 12.3799 3.26001C12.7899 3.26001 13.1299 3.60001 13.1299 4.01001V14.18C13.1299 14.6 12.7899 14.93 12.3799 14.93Z" fill="#121212"/>
                <path d="M12.5 20.75C7.35 20.75 3.75 17.15 3.75 12C3.75 11.59 4.09 11.25 4.5 11.25C4.91 11.25 5.25 11.59 5.25 12C5.25 16.27 8.23 19.25 12.5 19.25C16.77 19.25 19.75 16.27 19.75 12C19.75 11.59 20.09 11.25 20.5 11.25C20.91 11.25 21.25 11.59 21.25 12C21.25 17.15 17.65 20.75 12.5 20.75Z" />
            </svg>
            <span class="ml-2">Upload image</span>
        </div>
        <input type="file" wire:model="images" x-ref="fileInput" max="5" maxlength="5" class="hidden" multiple>
    </div>

    <div x-show="uploading" class="mt-3">
        <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
            <div class="bg-primary-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                 x-bind:style="{ width: progress + '%' }" x-text="`${progress}%`">
            </div>
        </div>
    </div>

<div class="grid grid-cols-5 gap-2 mt-3">
        @if ($images)
            @foreach ($images as $key => $image)
                <div class="relative w-full h-20">
                    <img src="{{ $image->temporaryUrl() }}" alt="Preview" class="w-full h-full object-cover rounded">
                    <button type="button" wire:click='removeImage({{ $key }})'
                        class="absolute top-1 right-1 text-red-500 rounded-full p-1">&times;</button>
                </div>
            @endforeach
        @endif
    </div>
</div>
