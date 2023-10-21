<x-guest-layout>

    <x-slot name="header">
        {{ __('Forgot Password') }}
    </x-slot>
    <x-auth.card>
        {{-- <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot> --}}

        <div class="card-content card-body">
            <div class="mb-4 text-sm text-gray-600">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            <x-auth.session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth.validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-form.label for="email" :value="__('Email')" />

                    <x-form.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button.button class="btn btn-sm btn-primary glow position-relative px-1 py-1">
                        {{ __('Email Password Reset Link') }}
                    </x-button.button>
                </div>
            </form>
        </div>
    </x-auth.card>
</x-guest-layout>
