<x-layout>
    <div class="container-fluid m-0 p-0">
        <div class="row justify-content-between">
            <div class="container col-lg-6 d-flex flex-column align-items-center">
                <a href="" class="logo">LOGO</a>

                <div class="container p-5">

                    <div class="mb-4" style="color: gray; font-size: 14px">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="mb-3">
                            <x-input-label for="email" :value="__('Email')" />
                            <input id="email" class="form-control rounded-pill" type="email" name="email"
                                value="{{ old('email') }}" required autofocus />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: red; font-size: 12px" />
                        </div>

                        <x-primary-button class="mt-4">
                            {{ __('Email Password Reset Link') }}
                        </x-primary-button>
                    </form>

                </div>
            </div>

            <x-image></x-image>
        </div>
    </div>
</x-layout>
