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
