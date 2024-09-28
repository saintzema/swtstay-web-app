<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
    <div class="w-full md:mt-0 sm:max-w-xl xl:p-0 text-center flex flex-col items-center justify-center">
        <div class="flex justify-center items-center w-full">
            <img src="{{ asset('assets/otp_gig_image.gif') }}" alt="" class="max-w-44 h-auto">
        </div>
        <h2 class="text-3xl font-semibold mb-4 select-none">You’re all set!</h2>
        <p class="text-sm">
            Congratulations! You’ve successfully created your account. Next, let's set up your hotel information to unlock our powerful tools.
             Once completed, you’ll be able to manage your hotels, track performance, and enhance guest satisfaction.
        </p>
         <a href="{{ route('hotel.setup') }}" wire:navigate
            class="border border-primary-500 hover:bg-primary-500 hover:text-white transition-all ease-in-out text-primary-500 px-5 py-2.5 rounded-lg font-medium text-center text-sm mt-5">
            Proceed to setup
        </a>
    </div>
</div>

