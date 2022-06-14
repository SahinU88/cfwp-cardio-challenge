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
