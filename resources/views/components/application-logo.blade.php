@props(['color' => 'black'])

@php
$color = ($color ?? false) ? 'black' : $color;
@endphp

<img
    {{ $attributes->merge(['class' => 'w-auto']) }}
    src="{{ asset('/images/cfwp-' . $color . '.png') }}" alt="CrossFit Westpack Cardio Challenge"
>
