<div>
    {{-- hotel  --}}
<div x-data="{
        currentIndex: 0,
        images: {{ json_encode($images) }},
        prev() {
            this.currentIndex = this.currentIndex > 0 ? this.currentIndex - 1 : this.images.length - 1;
        },
        next() {
            this.currentIndex = this.currentIndex < this.images.length - 1 ? this.currentIndex + 1 : 0;
        },
        goTo(index) {
            this.currentIndex = index;
        }
    }"
    class="relative w-full max-w-lg mx-auto overflow-hidden">

    <!-- Images -->
    <div class="flex transition-transform duration-500 ease-in-out" :style="`transform: translateX(-${currentIndex * 100}%)`">
        <template x-for="(image, index) in images" :key="index">
            <div class="w-full flex-shrink-0">
                <img :src="image" alt="Hotel Image" class="w-full h-full object-cover">
            </div>
        </template>
    </div>

    <!-- Previous Button -->
    <button @click="prev" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-white p-2 text-gray-600 rounded-full shadow-lg">
        &#10094;
    </button>

    <!-- Next Button -->
    <button @click="next" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-white p-2 text-gray-600 rounded-full shadow-lg">
        &#10095;
    </button>

    <!-- Indicators -->
    <div class="absolute bottom-0 left-0 right-0 flex justify-center space-x-2 p-4">
        <template x-for="(image, index) in images" :key="index">
            <button @click="goTo(index)" :class="{'bg-gray-800': currentIndex === index, 'bg-gray-400': currentIndex !== index}" class="w-3 h-3 rounded-full"></button>
        </template>
    </div>
</div>
<h1 class="text-xl font-semibold mb-1">Hotel Information</h1>
</div>
