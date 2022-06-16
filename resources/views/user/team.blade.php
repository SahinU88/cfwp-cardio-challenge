<x-app-layout>
    <x-slot name="header">
        {{ Auth::user()->team->name }}
    </x-slot>

    @include('shared.dashboard-notifications')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-cfwp-user-team-entries />
        </div>
    </div>
</x-app-layout>
