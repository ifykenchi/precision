<x-dashlayout>
    <div class="wrapper">
        <x-sidebar></x-sidebar>

        <div class="main p-3">
            <x-header>
                <x-slot:heading>
                    Transactions
                </x-slot:heading>
            </x-header>

            <div class="d-flex justify-content-center mx-3 mt-4">
                <div class="p-1 rounded-pill" style="background: #D9D9D9;">
                    <button type="button" class="btn btn-light rounded-pill me-2">Sale</button>
                    <button type="button" class="btn btn-light rounded-pill"
                        style="background: #D9D9D9; border-color: #D9D9D9;">Reports</button>
                </div>
            </div>

            <div class="text-center mt-4">
                <h2 style="font-size: 32px;">Sale</h2>
                <aside>Input details to record a sale.</aside>
            </div>

            <div class="d-flex justify-content-center mt-5 mb-5">
                <form class="row w-100" style="max-width: 900px">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="registered" class="form-label" style="font-size: 14px;">Is this a registered
                                customer?</label>
                            <select class="form-select" id="registered" aria-label="is customer registered">
                                <option selected>Select answer</option>
                                <option value="1">Manager</option>
                                <option value="2">Staff</option>
                                <option value="3">Staff</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label" style="font-size: 14px;">Product category</label>
                            <select class="form-select" id="category" aria-label="product category">
                                <option selected>Select category</option>
                                <option value="1">Manager</option>
                                <option value="2">Staff</option>
                                <option value="3">Staff</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="firstname" class="form-label" style="font-size: 14px;">First
                                name</label>
                            <div class="d-flex align-items-center">
                                <input type="text" class="form-control" id="firstname" placeholder="Enter first name"
                                    aria-label="first name">
                                <span class="mx-2">X</span>
                                <input type="text" class="form-control" id="firstname" placeholder="Enter first name"
                                    aria-label="first name">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="customPrice" class="form-label" style="font-size: 14px;">Is this custom
                                price?</label>
                            <select class="form-select" id="customPrice" aria-label="is this custom price">
                                <option selected>Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="branch" class="form-label" style="font-size: 14px;">Branch</label>
                            <select class="form-select" id="branch" aria-label="select branch">
                                <option selected>Select branch</option>
                                <option value="1">Manager</option>
                                <option value="2">Staff</option>
                                <option value="3">Staff</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="customername" class="form-label" style="font-size: 14px;">Customer name</label>
                            <input type="text" class="form-control" id="customername" placeholder="Enter name"
                                aria-label="customer name">
                        </div>
                        <div class="mb-3">
                            <label for="productType" class="form-label" style="font-size: 14px;">Product type</label>
                            <select class="form-select" id="productType" aria-label="product type">
                                <option selected>Select type</option>
                                <option value="1">Manager</option>
                                <option value="2">Staff</option>
                                <option value="3">Staff</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label" style="font-size: 14px;">Quantity</label>
                            <input type="text" class="form-control" id="quantity" placeholder="Input quantity"
                                aria-label="quantity">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label" style="font-size: 14px;">Price</label>
                            <input type="text" class="form-control" id="price" placeholder=""
                                aria-label="price">
                        </div>
                    </div>

                    <div class="mb-3 mt-3 d-flex flex-column" style="background-color: #D9D9D9;">
                        <label for="fileUpload" class="btn w-100 p-5">
                            <i class="bi bi-upload"></i> Click to upload file (optional)
                        </label>
                        <input type="file" id="fileUpload" class="d-none">
                        <span id="fileName" class="text-center"></span>
                    </div>

                    <div class="d-flex gap-2 mt-3 mb-5">
                        <button type="submit" class="rounded-pill btn btn-light ms-auto"
                            style="border-color: black;">Cancel</button>
                        <button type="submit" class="rounded-pill btn btn-dark px-4">Record</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-dashlayout>
