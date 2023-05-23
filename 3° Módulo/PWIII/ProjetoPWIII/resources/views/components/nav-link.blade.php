@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-[#E35B66] text-sm font-medium leading-5 text-[#E35B66] focus:outline-none focus:border-[#E35B66] transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-200 hover:text-[#DE3F4D] hover:border-[#DE3F4D] focus:outline-none focus:text-[#E35B66] focus:border-[#E35B66] transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
