<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-white bg-[#DE3F4D] hover:bg-[#DA2C43] focus:ring-4 focus:outline-none focus:ring-[#eea7b2] font-medium rounded-md px-8 py-2 text-center cursor-pointer ml-0']) }}>
    {{ $slot }}
</button>
