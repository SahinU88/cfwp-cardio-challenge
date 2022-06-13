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
