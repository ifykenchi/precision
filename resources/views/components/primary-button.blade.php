<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-dark btn-lg rounded-pill w-100']) }}>
    {{ $slot }}
</button>
