<x-dashlayout>
    <div class="wrapper">
        <x-sidebar></x-sidebar>

        <div class="main p-3">
            <x-header>
                <x-slot:heading>
                    Products
                </x-slot:heading>
            </x-header>

            <div class="text-center mt-4">
                <h2 style="font-size: 32px;">Add Products</h2>
                <aside>Input details to setup your product.</aside>
            </div>

            <div class="d-flex justify-content-center align-items-center">
                <div class="container row gap-4 mt-5 justify-content-center mb-4">
                    <div class="col-8 flex-grow-1" style="max-width: 300px;">
                        <img class="rounded" src="{{ asset('images/placeholder.png') }}" alt=""
                            style="width: 240px; height: 240px;">
                        <aside class="">Click to upload product photo</aside>
                    </div>

                    <div class="col-4 flex-grow-1" style="max-width: 427px;">
                        <form>
                            <div class="mb-3">
                                <label for="productname" class="form-label" style="font-size: 14px;">Product
                                    name</label>
                                <input type="text" class="form-control" id="productname"
                                    placeholder="Enter product name" aria-label="product name">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label" style="font-size: 14px;">Price</label>
                                <input type="text" class="form-control" id="price"
                                    placeholder="Set product price" aria-label="price">
                            </div>
                            <div class="mb-3">
                                <label for="dimension" class="form-label" style="font-size: 14px;">Dimension</label>
                                <select class="form-select" id="dimension" aria-label="Default select example">
                                    <option selected>Has dimension?</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="discount" class="form-label" style="font-size: 14px;">Discount</label>
                                <select class="form-select" id="discount" aria-label="Default select example">
                                    <option selected>Do you want a discount</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                        </form>
                    </div>

                    <div id="discountform" class="container row mt-1 mb-4" style="max-width: 790px;">
                        <div class="col-6">
                            <div class="d-flex gap-2 mb-3">
                                <h3 style="font-size: 18px; line-height: 27px; font-weight: 500;">Discount 1
                                </h3>
                                <i class="bi bi-trash3-fill" style="color: #FF5252; height: 20px; width: 20px;"></i>
                            </div>

                            <div class="mb-3">
                                <label for="discountqty" class="form-label" style="font-size: 14px;">Discount
                                    quantity</label>
                                <input type="text" class="form-control" id="discountqty"
                                    placeholder="Input discount quantity" aria-label="discount quantity">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex">
                                <button type="submit" class="btn btn-dark mb-3 ms-auto">
                                    <i class="bi bi-plus"></i>
                                    Add discount
                                </button>
                            </div>

                            <div class="mb-3">
                                <label for="discountprice" class="form-label" style="font-size: 14px;">Discount
                                    price</label>
                                <input type="text" class="form-control" id="discountprice"
                                    placeholder="Enter new price" aria-label="discount price">
                            </div>


                        </div>
                    </div>

                    <div class="d-flex gap-2 mt-3 mb-5" style="max-width: 760px">
                        <button type="submit" class="btn btn-light ms-auto"
                            style="border-color: black;">Cancel</button>
                        <button type="submit" class="btn btn-dark px-4">Save</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-dashlayout>
