<x-app-layout>
    <x-slot name="header">
        Log your entry
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
                    @include('disciplines.add-biking')
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
                <div class="p-6">
                    @include('disciplines.add-burpees')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
