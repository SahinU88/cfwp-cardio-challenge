<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add your entry') }}
        </h2>
    </x-slot>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="p-6">
                    @include('disciplines.add-walking')
                </div>
                <div class="p-6">
                    @include('disciplines.add-swimming')
                </div>
                <div class="p-6">
                    @include('disciplines.add-skierg')
                </div>
                <div class="p-6">
                    @include('disciplines.add-rowing')
                </div>
                <div class="p-6">
                    @include('disciplines.add-handstandwalk')
                </div>
                <div class="p-6">
                    @include('disciplines.add-doubleunders')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
