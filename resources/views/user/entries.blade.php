<x-app-layout>
    <x-slot name="header">
        {{ __('Your entries') }}
    </x-slot>

    @include('shared.dashboard-notifications')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-cfwp-user-entries />
        </div>
    </div>
</x-app-layout>
