<div>
    <h3 class="text-lg leading-6 font-medium text-gray-900">Your team stats for this week</h3>
    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
        <x-cfwp-stats-card title="Jogging, Hiking, Walking" :value="Auth::user()->team->getTotalCurrentWeekFor('Walking')" />
        <x-cfwp-stats-card title="Biking" :value="Auth::user()->team->getTotalCurrentWeekFor('Biking')" />
        <x-cfwp-stats-card title="Swimming" :value="Auth::user()->team->getTotalCurrentWeekFor('Swimming')" />
    </dl>
    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
        <x-cfwp-stats-card title="SkiErg" :value="Auth::user()->team->getTotalCurrentWeekFor('SkiErg')" />
        <x-cfwp-stats-card title="Rowing" :value="Auth::user()->team->getTotalCurrentWeekFor('Rowing')" />
        <x-cfwp-stats-card title="Handstandwalk" :value="Auth::user()->team->getTotalCurrentWeekFor('HandstandWalk')" />
    </dl>
    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
        <x-cfwp-stats-card title="Double Unders" :value="Auth::user()->team->getTotalCurrentWeekFor('DoubleUnders')" />
        <x-cfwp-stats-card title="Burpees" :value="Auth::user()->team->getTotalCurrentWeekFor('Burpees')" />
    </dl>
</div>
