<div>
   {{-- USE THIS TO SHOW STATUS --}}
    @if (session()->has('status'))
        <x-success-alert message="{{ session('status') }}" />
        <div class="p-3 mb-4 bg-green-200 border-2 border-green-300 rounded-lg text-sm text-green-500 flex">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            {{ session('status') }}
        </div>
    @endif

    {{-- SHOW THE VERIFY EMAIL COMPONET IF THE EMAIL IS NOT VERIFIED --}}
    @if (is_null(Auth::user()->email_verified_at))
        <div class="px-5 py-6 bg-orange-100 rounded-lg border border-orange-300 md:flex justify-between mb-6">
            <div class="md:mr-5">
                <h6 class="text-orange-500 text-sm mb-1">Verify Your Email Address to Get Started</h6>
                <p class="text-xs">To complete your account setup and start managing your hotels, please
                    check your email for verification link. If you did not receive the email click here to request another
                </p>
            </div>
            <form wire:submit.prevent="resendVerification({{ Auth::user()->id }})" wire:loading.attr='disabled'>
                <button class="px-6 py-3 mt-1 text-white text-xs rounded-xl bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-700 font-medium transition-all ease-in-out w-40 text-center" type="submit">
                    Verify email
                    <span wire:loading wire:target="resendVerification({{ Auth::user()->id }})">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 animate-spin">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>
                    </span>
                </button>
            </form>

        </div>
    @endif
</div>
