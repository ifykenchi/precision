<x-dashlayout>
    <div class="wrapper">
        <x-sidebar></x-sidebar>
        <div class="main p-3">
            <x-header>
                <x-slot:heading>
                    Products
                </x-slot:heading>
            </x-header>

            <div class="container d-flex flex-column justify-content-center">
                <h2 class="text-center mt-5" style="font-size: 24px;">Edit location</h2>
                <p class="text-center mt-2" style="font-size: 16px;">Set available delivery location and price</p>

                <div class="d-flex justify-content-center mt-5 mb-5">
                    <form class="w-100" style="max-width: 427px">
                        <div class="mb-3">
                            <label for="location" class="form-label" style="font-size: 14px;">Location</label>
                            <input type="text" class="form-control" id="location"
                                placeholder="Enter delivery location" aria-label="delivery location">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label" style="font-size: 14px;">Price</label>
                            <input type="text" class="form-control" id="price" placeholder="Set price"
                                aria-label="price">
                        </div>

                        <div class="d-flex gap-2 my-5">
                            <button type="submit" class="btn btn-danger ms-auto"
                                style="border-color: #FF5252E5; background-color: #FF5252E5;">Delete</button>
                            <button type="submit" class="btn btn-dark px-4">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-dashlayout>
