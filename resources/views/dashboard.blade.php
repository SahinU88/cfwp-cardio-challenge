<x-app-layout :options="['teams' => $teams]">
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>

    @include('shared.dashboard-notifications')

    @if (Auth::user()->team)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-cfwp-team-leaderboard :teams="$teams" />
        </div>
    </div>
    @endif

    @if ($weeklyChallenge)
    <div class="py-12">
        <div class="max-w-7xl mx-auto mb-4 sm:px-6 lg:px-8">
            <x-cfwp-weekly-challenge :challenge="$weeklyChallenge['burpeeMile']" />
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-cfwp-weekly-challenge :challenge="$weeklyChallenge['rowMarathon']" />
        </div>
    </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-cfwp-user-stats />
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-cfwp-team-stats />
        </div>
    </div>
</x-app-layout>
