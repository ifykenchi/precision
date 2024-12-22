<x-layout>
    <div class="container-fluid m-0 p-0">
        <div class="row justify-content-between">
            <div class="container col-lg-6 d-flex flex-column align-items-center">
                <a href="" class="logo">LOGO</a>

                <div class="signup my-4">
                    <div class="mb-4" style="color: gray; font-size: 14px">
                        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                    </div>

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <!-- Password -->
                        <div>
                            <x-input-label for="password" :value="__('Password')" />

                            <input id="password" class="form-control rounded-pill" type="password" name="password"
                                required autocomplete="current-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: red; font-size: 12px" />
                        </div>

                        <x-primary-button class="mt-4">
                            {{ __('Confirm') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>

            <x-image></x-image>
        </div>
    </div>
</x-layout>
