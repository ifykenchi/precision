<x-dashlayout>
    <div class="wrapper">
        <x-sidebar></x-sidebar>

        <div class="main p-3">
            <x-header>
                <x-slot:heading>
                    Products
                </x-slot:heading>
            </x-header>

            <div class="d-flex justify-content-center mx-3 mt-4">
                <div class="p-1 rounded-pill" style="background: #D9D9D9;">
                    <button type="button" class="btn btn-light rounded-pill me-2">Products</button>
                    <button type="button" class="btn btn-light rounded-pill"
                        style="background: #D9D9D9; border-color: #D9D9D9;">Logistics</button>
                </div>
            </div>

            <div class="subheader mt-4 mx-3 d-flex justify-content-between">
                <p class="fw-bold" style="color: #434141;">6 Products</p>

                <div>
                    <button type="button" class="btn btn-light me-3 rounded-pill" style="border-color: #D9D9D9;">
                        <i class="bi bi-funnel h8"></i>
                        <span style="font-size: 16px;">filter</span>
                    </button>
                    <button type="button" class="btn btn-dark">
                        <i class="bi bi-plus-lg"></i>
                        <span class="fw-bold" style="font-size: 18px;">Add Product</span>
                    </button>
                </div>
            </div>

            <div class="products mt-4 mb-4 mx-3">
                <div class="row mb-4">
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('images/placeholder.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Product name</h5>
                                <p class="card-text">#3000</p>
                                <button type="button" class="btn btn-light rounded-pill w-100"
                                    style="border-color: #D9D9D9;">
                                    <span style="font-size: 16px;">Edit</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('images/placeholder.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Product name</h5>
                                <p class="card-text">#3000</p>
                                <button type="button" class="btn btn-light rounded-pill w-100"
                                    style="border-color: #D9D9D9;">
                                    <span style="font-size: 16px;">Edit</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('images/placeholder.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Product name</h5>
                                <p class="card-text">#3000</p>
                                <button type="button" class="btn btn-light rounded-pill w-100"
                                    style="border-color: #D9D9D9;">
                                    <span style="font-size: 16px;">Edit</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('images/placeholder.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Product name</h5>
                                <p class="card-text">#3000</p>
                                <button type="button" class="btn btn-light rounded-pill w-100"
                                    style="border-color: #D9D9D9;">
                                    <span style="font-size: 16px;">Edit</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('images/placeholder.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Product name</h5>
                                <p class="card-text">#3000</p>
                                <button type="button" class="btn btn-light rounded-pill w-100"
                                    style="border-color: #D9D9D9;">
                                    <span style="font-size: 16px;">Edit</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('images/placeholder.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Product name</h5>
                                <p class="card-text">#3000</p>
                                <button type="button" class="btn btn-light rounded-pill w-100"
                                    style="border-color: #D9D9D9;">
                                    <span style="font-size: 16px;">Edit</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashlayout>
