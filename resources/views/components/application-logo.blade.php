@props(['color'])

@php
$color = ($black ?? false) ? 'black' : $color;
@endphp

<img
    {{ $attributes->merge(['class' => 'h-24 w-auto']) }}
    src="{{ asset('/images/cfwp-' . $color . '.png') }}" alt="CrossFit Westpack Cardio Challenge"
>
