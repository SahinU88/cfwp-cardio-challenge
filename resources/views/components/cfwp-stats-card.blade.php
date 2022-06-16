<div class="px-4 py-5 bg-gray-50 shadow rounded-lg overflow-hidden sm:p-6">
    <dt class="text-sm font-medium text-gray-500 truncate">{{ $title }}</dt>
    <dd class="pb-6 flex items-baseline sm:pb-7">
        <p class="mt-1 text-3xl font-semibold text-gray-900">{{ number_format($value/ 1000, 2, ',', '.') }}</p>
        <p class="ml-2 text-sm font-semibold">km</p>
    </dd>
</div>
