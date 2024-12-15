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
                    <button type="button" class="btn btn-light rounded-pill me-2"
                        style="background: #D9D9D9; border-color: #D9D9D9;">Sale</button>
                    <button type="button" class="btn btn-light rounded-pill">Reports</button>
                </div>
            </div>

            <div class="text-center mt-4">
                <h2 style="font-size: 32px;">Expense</h2>
                <aside>Input details to record an expense.</aside>
            </div>

            <div class="d-flex justify-content-center mt-5 mb-5">
                <form class="w-100" style="max-width: 427px">
                    <div class="mb-3">
                        <label for="expenseName" class="form-label" style="font-size: 14px;">Expense name</label>
                        <input type="text" class="form-control" id="expenseName" placeholder="Enter name"
                            aria-label="expense name">
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label" style="font-size: 14px;">Amount</label>
                        <input type="text" class="form-control" id="amount" placeholder="Enter amount"
                            aria-label="amount">
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

                    <div class="d-flex gap-2 my-5 justify-content-center">
                        <button type="submit" class="btn btn-light" style="border-color: black;">Cancel</button>
                        <button type="submit" class="btn btn-dark px-4">Record</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-dashlayout>
