<x-layout>
    <div class="container-fluid m-0 p-0">
        <div class="row justify-content-between">
            <div class="container col-lg-6 d-flex flex-column align-items-center">
                <a href="" class="logo">LOGO</a>

                <div class="container w-75 py-5">

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <input id="email" class="form-control rounded-pill" type="email" name="email"
                                value="{{ old('email') }}" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: red; font-size: 12px" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <input id="password" class="form-control rounded-pill" type="password" name="password"
                                required autocomplete="current-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: red; font-size: 12px" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                    name="remember">
                                <span
                                    class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <x-primary-button class="mt-4">
                            {{ __('Log in') }}
                        </x-primary-button>

                        <div class="d-flex mt-2 justify-content-center">
                            @if (Route::has('password.request'))
                                <a class="text-dark text-decoration-none" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                    </form>

                </div>
            </div>

            <x-image></x-image>
        </div>
    </div>
</x-layout>
