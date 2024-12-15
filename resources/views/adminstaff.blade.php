<x-dashlayout>
    <div class="wrapper">
        <x-sidebar></x-sidebar>

        <div class="main p-3">
            <x-header>
                <x-slot:heading>
                    Staff
                </x-slot:heading>
            </x-header>

            <div class="subheader mt-5 mx-3 d-flex justify-content-between">
                <p class="fw-bold" style="color: #434141;">12 Members</p>

                <div>
                    <button type="button" class="btn btn-light me-3 rounded-pill" style="border-color: #D9D9D9;">
                        <i class="bi bi-funnel h8"></i>
                        <span style="font-size: 16px;">filter</span>
                    </button>
                    <button type="button" class="btn btn-dark">
                        <i class="bi bi-plus-lg"></i>
                        <span class="fw-bold" style="font-size: 18px;">Add Staff</span>
                    </button>
                </div>
            </div>

            <x-staff admin="added"></x-staff>
        </div>
    </div>
</x-dashlayout>
