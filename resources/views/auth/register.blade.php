<x-layout>
    <div class="container-fluid m-0 p-0">
        <div class="row justify-content-between">
            <div class="container col-lg-6 d-flex flex-column align-items-center">
                <a href="" class="logo">LOGO</a>

                <div class="signup my-4">
                    <form method="POST" action="{{ route('register') }}" class="stretch">
                        @csrf

                        <h1 class="header mb-4">Log In</h1>

                        <!-- Name -->
                        <div class="mb-3">
                            <x-input-label for="name" :value="__('Name')" />
                            <input id="name" class="form-control rounded-pill" type="text" name="name"
                                value="{{ old('name') }}" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" style="color: red; font-size: 12px" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <input id="email" class="form-control rounded-pill" type="email" name="email"
                                value="{{ old('email') }}" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: red; font-size: 12px" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <input id="password" class="form-control rounded-pill" type="password" name="password"
                                required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: red; font-size: 12px" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <input id="password_confirmation" class="form-control rounded-pill" type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" style="color: red; font-size: 12px" />
                        </div>

                        <x-primary-button class="mt-4">
                            {{ __('Register') }}
                        </x-primary-button>

                        <div class="d-flex mt-2 justify-content-center">
                            <a class="text-dark text-decoration-none" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <x-image></x-image>
        </div>
    </div>
</x-layout>
