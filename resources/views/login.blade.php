<x-layout>
    <div class="container-fluid m-0 p-0">
        <div class="row justify-content-between">
            <div class="container col-lg-6 d-flex flex-column align-items-center">
                <a href="" class="logo mb-1">LOGO</a>

                <x-form longform='added'>
                    <x-slot:heading>
                        Log In
                    </x-slot:heading>

                    <x-slot:button>
                        Login
                    </x-slot:button>

                    <x-slot:usercheck>
                        <a href="" class="text-dark text-decoration-none">
                            Forgot password?
                        </a>
                    </x-slot:usercheck>
                </x-form>
            </div>

            <div class="col-lg-6 overflow-hidden">
                <img src="{{ asset('images/placeholder.png') }}" alt="placeholder image"
                    class="img-fluid min-vh-100 w-100 object-fit-cover">
            </div>
        </div>
    </div>
</x-layout>
