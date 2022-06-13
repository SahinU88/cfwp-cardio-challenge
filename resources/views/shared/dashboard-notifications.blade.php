@if (session('walking'))
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-notification :type="'walking'" :distance="session('walking')->distance" :points="session('walking')->points" />
    </div>
</div>
@endif

@if (session('swimming'))
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-notification :type="'swimming'" :distance="session('swimming')->distance" :points="session('swimming')->points" />
    </div>
</div>
@endif

@if (session('skiErg'))
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-notification :type="'skiErg'" :distance="session('skiErg')->distance" :points="session('skiErg')->points" />
    </div>
</div>
@endif

@if (session('rowing'))
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-notification :type="'rowing'" :distance="session('rowing')->distance" :points="session('rowing')->points" />
    </div>
</div>
@endif

@if (session('handstandWalk'))
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-notification :type="'handstandWalk'" :distance="session('handstandWalk')->distance" :points="session('handstandWalk')->points" />
    </div>
</div>
@endif

@if (session('doubleUnders'))
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-notification :type="'doubleUnders'" :distance="session('doubleUnders')->distance" :points="session('doubleUnders')->points" />
    </div>
</div>
@endif

@if (session('burpees'))
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-notification :type="'burpees'" :distance="session('burpees')->distance" :points="session('burpees')->points" />
    </div>
</div>
@endif

@if (session('biking'))
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-notification :type="'biking'" :distance="session('biking')->distance" :points="session('biking')->points" />
    </div>
</div>
@endif
