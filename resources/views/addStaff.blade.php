<x-dashlayout>
    <div class="main p-3">
        <div class="container">
            <h2 class="text-center mt-4">Add Staff</h2>
            <p class="text-center mt-2">Input details to set up staff profile.</p>

            <div class="d-flex flex-column align-items-center mt-4">
                <img class="rounded" src="{{ asset('images/placeholder.png') }}" alt=""
                    style="width: 200px; height: 200px;">
                <aside class="text-center">Click to upload product photo</aside>
            </div>

            <div class="d-flex justify-content-center mt-5 mb-5">
                <form class="row w-100" style="max-width: 900px">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="firstname" class="form-label" style="font-size: 14px;">First
                                name</label>
                            <input type="text" class="form-control" id="firstname" placeholder="Enter first name"
                                aria-label="first name">
                        </div>
                        <div class="mb-3">
                            <label for="phonenumber" class="form-label" style="font-size: 14px;">Phone number</label>
                            <input type="text" class="form-control" id="phonenumber" placeholder="Enter phone number"
                                aria-label="phone number">
                        </div>
                        <div class="mb-3">
                            <label for="salary" class="form-label" style="font-size: 14px;">Salary</label>
                            <input type="text" class="form-control" id="salary" placeholder="Input salary"
                                aria-label="salary">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="lastname" class="form-label" style="font-size: 14px;">Last
                                name</label>
                            <input type="text" class="form-control" id="lastname" placeholder="Enter last name"
                                aria-label="last name">
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label" style="font-size: 14px;">Position</label>
                            <select class="form-select" id="position" aria-label="Default select example">
                                <option selected>Select position</option>
                                <option value="1">Manager</option>
                                <option value="2">Staff</option>
                                <option value="3">Staff</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="dateInput" class="form-label">Employment date</label>
                            <input type="date" class="form-control" id="dateInput" name="date"
                                placeholder="set employment date">
                        </div>

                        <div class="d-flex gap-2 my-5">
                            <button type="submit" class="rounded-pill btn btn-light ms-auto"
                                style="border-color: black;">Cancel</button>
                            <button type="submit" class="rounded-pill btn btn-dark px-4">Add Staff</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-dashlayout>
