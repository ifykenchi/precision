@props(['longform' => false])

<div class="signup my-4">

    <form class="stretch">

        <h1 class="header mb-4">{{ $heading }}</h1>

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="email" class="form-control rounded-pill" id="username">
        </div>
        <div class="{{ $longform ? 'd-none' : '' }} mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control rounded-pill" id="email">
        </div>
        <div class="mb-5">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control rounded-pill" id="password">
        </div>
        <button type="submit" class="btn btn-dark btn-lg rounded-pill w-100">{{ $button }}</button>
    </form>

    <div class="mt-2 d-flex">
        {{ $usercheck }}
    </div>
</div>
