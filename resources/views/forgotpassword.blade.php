<x-layout>
    <div class="container-fluid m-0 p-0">
        <div class="row justify-content-between">
            <div class="container col-lg-6 d-flex flex-column align-items-center justify-content-center">

                <div class="signup my-4">

                    <form class="stretch">

                        <h1 class="header mb-4">LOGO</h1>

                        <p class="text-center mb-4">Please enter your email address and we will email the instructions to
                            change your password
                        </p>

                        <div class="mb-5">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control rounded-pill" id="email">
                        </div>

                        <button type="submit" class="btn btn-dark btn-lg rounded-pill w-100 mb-3">Send</button>

                        <button type="submit" class="btn btn-outline-secondary btn-lg rounded-pill w-100">Go
                            back</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 overflow-hidden">
                <img src="{{ asset('images/placeholder.png') }}" alt="placeholder image"
                    class="img-fluid min-vh-100 w-100 object-fit-cover">
            </div>
        </div>
    </div>
</x-layout>
