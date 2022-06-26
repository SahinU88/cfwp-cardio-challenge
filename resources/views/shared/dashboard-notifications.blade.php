@if (session('challengeUpdated'))
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"><div class="rounded-md bg-green-50 p-4">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                @if (session('challengeCompleted') == true)
                    <p class="text-sm font-medium text-green-800">Weekly challenge completed! Great, depending on how many teammates complete the challenge your team will get some extra points! 💪</p>
                @else
                    <p class="text-sm font-medium text-green-800">Weekly challenge updated.</p>
                @endif
            </div>
        </div>
    </div>
    </div>
</div>
@endif

@if (session('walking'))
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-cfwp-notification :type="'walking'" :discipline="session('walking')" />
    </div>
</div>
@endif

@if (session('swimming'))
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-cfwp-notification :type="'swimming'" :discipline="session('swimming')" />
    </div>
</div>
@endif

@if (session('skiErg'))
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-cfwp-notification :type="'skiErg'" :discipline="session('skiErg')" />
    </div>
</div>
@endif

@if (session('rowing'))
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-cfwp-notification :type="'rowing'" :discipline="session('rowing')" />
    </div>
</div>
@endif

@if (session('handstandWalk'))
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-cfwp-notification :type="'handstandWalk'" :discipline="session('handstandWalk')" />
    </div>
</div>
@endif

@if (session('doubleUnders'))
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-cfwp-notification :type="'doubleUnders'" :discipline="session('doubleUnders')" />
    </div>
</div>
@endif

@if (session('burpees'))
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-cfwp-notification :type="'burpees'" :discipline="session('burpees')" />
    </div>
</div>
@endif

@if (session('biking'))
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-cfwp-notification :type="'biking'" :discipline="session('biking')" />
    </div>
</div>
@endif
