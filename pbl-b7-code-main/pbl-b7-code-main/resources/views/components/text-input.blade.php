@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'form-control bg-transparent border-2']) }}>
