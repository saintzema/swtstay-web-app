<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
    <div class="w-full md:mt-0 sm:max-w-xl xl:p-0 text-center flex flex-col items-center justify-center">
        <div class="flex justify-center items-center w-full">
            <img src="{{ asset('assets/otp_gig_image.gif') }}" alt="" class="max-w-44 h-auto">
        </div>
        <h2 class="text-4xl font-semibold mb-4 select-none">Weldone {{ Auth::user()->first_name }}</h2>
        <p class="text-sm">
            Congratulations! On successfully seting up your hotel information. now you can proceed to you dashboard and manage your hotel's main branch, track performance, receive online bookings and enhance guest satisfaction.
        </p>
         <a href="{{ route('index') }}" wire:navigate
            class="border border-primary-500 hover:bg-primary-500 hover:text-white transition-all ease-in-out text-primary-500 px-5 py-2.5 rounded-lg font-medium text-center text-sm mt-5">
            Proceed to dashboard
        </a>
    </div>
</div>
