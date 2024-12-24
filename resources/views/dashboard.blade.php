<x-dashlayout>
    <div class="wrapper">
        <x-sidebar></x-sidebar>

        <div class="main p-3">
            <x-header>
                <x-slot:heading>
                    Welcome!
                </x-slot:heading>
            </x-header>

            <div class="mt-5 m-3">
                <div class="row gap-3 gap-lg-0">
                    <div class="col-lg-8">
                        <div class="d-flex gap-3" style="min-height: 200px">
                            <div class="card w-100 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Morem ipsum</h5>
                                </div>
                            </div>
                            <div class="card w-100 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Morem ipsum</h5>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5">
                            <table class="table table-hover">
                                <thead>
                                    <h4 class="pb-3" style="border-bottom: solid #00000020 1px">Dorem ipsum</h4>

                                    <tr>
                                        <th class="pb-2 pt-3 h5">ipsum</th>
                                        <th class="pb-2 pt-3 h5">Dorem</th>
                                        <th class="pb-2 pt-3 h5">Stock</th>
                                        <th class="pb-2 pt-3 h5">Sales</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pb-2 pt-4">ipsum</td>
                                        <td class="pb-2 pt-4">Dorem</td>
                                        <td class="pb-2 pt-4">Stock</td>
                                        <td class="pb-2 pt-4">Sales</td>
                                    </tr>

                                    <tr>
                                        <td class="pb-2 pt-4">ipsum</td>
                                        <td class="pb-2 pt-4">Dorem</td>
                                        <td class="pb-2 pt-4">Stock</td>
                                        <td class="pb-2 pt-4">Sales</td>
                                    </tr>

                                    <tr>
                                        <td class="pb-2 pt-4">ipsum</td>
                                        <td class="pb-2 pt-4">Dorem</td>
                                        <td class="pb-2 pt-4">Stock</td>
                                        <td class="pb-2 pt-4">Sales</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-4 vh-100 px-4">
                        <div class="card w-100 h-75 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Morem ipsum</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashlayout>
