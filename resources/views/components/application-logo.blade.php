@props(['color' => 'black'])

<img
    {{ $attributes->merge(['class' => 'w-auto']) }}
    src="{{ asset('/images/cfwp-' . $color . '.png') }}" alt="CrossFit Westpack Cardio Challenge"
>
