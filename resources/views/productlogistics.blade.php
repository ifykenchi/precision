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
                    <button type="button" class="btn btn-light rounded-pill me-2"
                        style="background: #D9D9D9; border-color: #D9D9D9;">Products</button>
                    <button type="button" class="btn btn-light rounded-pill">Logistics</button>
                </div>
            </div>

            <div class="subheader mt-4 mx-3 d-flex justify-content-between">
                <p class="fw-bold" style="color: #434141;">6 locations</p>

                <div>
                    <button type="button" class="btn btn-light me-3 rounded-pill" style="border-color: #D9D9D9;">
                        <i class="bi bi-funnel h8"></i>
                        <span style="font-size: 16px;">filter</span>
                    </button>
                    <button type="button" class="btn btn-dark">
                        <i class="bi bi-plus-lg"></i>
                        <span class="fw-bold" style="font-size: 18px;">Add location</span>
                    </button>
                </div>
            </div>

            <div class="mt-5 ms-3">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col" class="h5 pb-5">State</th>
                            <th scope="col" class="h5 pb-5">Price</th>
                            <th scope="col" class="h5 pb-5">Status</th>
                            <th scope="col" class="h5 pb-5">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-4">Enugu</td>
                            <td class="py-4">#5000</td>
                            <td class="py-4"><span class="py-1 px-2 rounded-pill"
                                    style="background-color: #19F022;">Enabled</span></td>
                            <td class="py-4">
                                <button type="button" class="btn btn-outline-dark py-1">Edit</button>
                            </td>
                        </tr>

                        <tr>
                            <td class="py-4">Lagos</td>
                            <td class="py-4">#5000</td>
                            <td class="py-4"><span class="py-1 px-2 rounded-pill"
                                    style="background-color: #19F022;">Enabled</span></td>
                            <td class="py-4">
                                <button type="button" class="btn btn-outline-dark py-1">Edit</button>
                            </td>
                        </tr>

                        <tr>
                            <td class="py-4">Abuja</td>
                            <td class="py-4">#5000</td>
                            <td class="py-4"><span class="py-1 px-2 rounded-pill"
                                    style="background-color: #19F022;">Enabled</span></td>
                            <td class="py-4">
                                <button type="button" class="btn btn-outline-dark py-1">Edit</button>
                            </td>
                        </tr>

                        <tr>
                            <td class="py-4">Port Harcourt</td>
                            <td class="py-4">#5000</td>
                            <td class="py-4"><span class="py-1 px-2 rounded-pill"
                                    style="background-color: #FF525299;">Disabled</span></td>
                            <td class="py-4">
                                <button type="button" class="btn btn-outline-dark py-1">Edit</button>
                            </td>
                        </tr>

                        <tr>
                            <td class="py-4">Delta</td>
                            <td class="py-4">#5000</td>
                            <td class="py-4"><span class="py-1 px-2 rounded-pill"
                                    style="background-color: #19F022;">Enabled</span></td>
                            <td class="py-4">
                                <button type="button" class="btn btn-outline-dark py-1">Edit</button>
                            </td>
                        </tr>

                        <tr>
                            <td class="py-4">Anambra</td>
                            <td class="py-4">#5000</td>
                            <td class="py-4"><span class="py-1 px-2 rounded-pill"
                                    style="background-color: #FF525299;">Disabled</span></td>
                            <td class="py-4">
                                <button type="button" class="btn btn-outline-dark py-1">Edit</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-dashlayout>
