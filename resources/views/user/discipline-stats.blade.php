<div>
    <h3 class="text-lg leading-6 font-medium text-gray-900">Your stats for this week</h3>
    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
        <x-cfwp-stats-card title="Jogging, Hiking, Walking" :value="Auth::user()->getTotalWalkingForWeek()" />
        <x-cfwp-stats-card title="Biking" :value="Auth::user()->getTotalBikingForWeek()" />
        <x-cfwp-stats-card title="Swimming" :value="Auth::user()->getTotalSwimmingForWeek()" />
    </dl>
    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
        <x-cfwp-stats-card title="SkiErg" :value="Auth::user()->getTotalSkiErgForWeek()" />
        <x-cfwp-stats-card title="Rowing" :value="Auth::user()->getTotalRowingForWeek()" />
        <x-cfwp-stats-card title="Handstandwalk" :value="Auth::user()->getTotalHandstandWalkForWeek()" />
    </dl>
    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
        <x-cfwp-stats-card title="Double Unders" :value="Auth::user()->getTotalDoubleUndersForWeek()" />
        <x-cfwp-stats-card title="Burpees" :value="Auth::user()->getTotalBurpeesForWeek()" />
    </dl>
</div>
