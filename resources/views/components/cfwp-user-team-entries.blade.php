<div>
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h2 class="text-xl font-semibold text-gray-900">Team entries for the current week</h2>
            <p class="mt-2 text-sm text-gray-700">The values are displayed in km.</p>
        </div>
        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <a href="{{ route('disciplines.create') }}" type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                Log entry
            </a>
        </div>
    </div>
    <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Member</th>
                                <th class="px-3 py-3.5 text-right text-sm font-semibold text-gray-900">Jogging, Hiking, Walking</th>
                                <th class="px-3 py-3.5 text-right text-sm font-semibold text-gray-900">Biking</th>
                                <th class="px-3 py-3.5 text-right text-sm font-semibold text-gray-900">Swimming</th>
                                <th class="px-3 py-3.5 text-right text-sm font-semibold text-gray-900">SkiErg</th>
                                <th class="px-3 py-3.5 text-right text-sm font-semibold text-gray-900">Rowing</th>
                                <th class="px-3 py-3.5 text-right text-sm font-semibold text-gray-900">Handstand walk</th>
                                <th class="px-3 py-3.5 text-right text-sm font-semibold text-gray-900">Double unders</th>
                                <th class="px-3 py-3.5 text-right text-sm font-semibold text-gray-900">Burpees</th>
                            </tr>
                        </thead>
                        <tfoot class="bg-gray-50">
                            <tr>
                                <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Totals</th>
                                <th class="px-3 py-3.5 text-right text-sm font-semibold text-gray-900">{{ number_format(Auth::user()->team->getTotalCurrentWeekFor('Walking')/ 1000, 2, ',', '.') }}</th>
                                <th class="px-3 py-3.5 text-right text-sm font-semibold text-gray-900">{{ number_format(Auth::user()->team->getTotalCurrentWeekFor('Biking')/ 1000, 2, ',', '.') }}</th></th>
                                <th class="px-3 py-3.5 text-right text-sm font-semibold text-gray-900">{{ number_format(Auth::user()->team->getTotalCurrentWeekFor('Swimming')/ 1000, 2, ',', '.') }}</th></th>
                                <th class="px-3 py-3.5 text-right text-sm font-semibold text-gray-900">{{ number_format(Auth::user()->team->getTotalCurrentWeekFor('SkiErg')/ 1000, 2, ',', '.') }}</th></th>
                                <th class="px-3 py-3.5 text-right text-sm font-semibold text-gray-900">{{ number_format(Auth::user()->team->getTotalCurrentWeekFor('Rowing')/ 1000, 2, ',', '.') }}</th></th>
                                <th class="px-3 py-3.5 text-right text-sm font-semibold text-gray-900">{{ number_format(Auth::user()->team->getTotalCurrentWeekFor('HandstandWalk')/ 1000, 2, ',', '.') }}</th></th>
                                <th class="px-3 py-3.5 text-right text-sm font-semibold text-gray-900">{{ number_format(Auth::user()->team->getTotalCurrentWeekFor('DoubleUnders')/ 1000, 2, ',', '.') }}</th></th>
                                <th class="px-3 py-3.5 text-right text-sm font-semibold text-gray-900">{{ number_format(Auth::user()->team->getTotalCurrentWeekFor('Burpees')/ 1000, 2, ',', '.') }}</th></th>
                            </tr>
                        </tfoot>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach (Auth::user()->team->users as $member)
                            <tr @class(['bg-gray-100' => $loop->even])>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{ $member->name }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-right text-sm text-gray-900">{{ number_format($member->getTotalWalkingForWeek()/ 1000, 2, ',', '.') }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-right text-sm text-gray-900">{{ number_format($member->getTotalBikingForWeek()/ 1000, 2, ',', '.') }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-right text-sm text-gray-900">{{ number_format($member->getTotalSwimmingForWeek()/ 1000, 2, ',', '.') }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-right text-sm text-gray-900">{{ number_format($member->getTotalSkiErgForWeek()/ 1000, 2, ',', '.') }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-right text-sm text-gray-900">{{ number_format($member->getTotalRowingForWeek()/ 1000, 2, ',', '.') }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-right text-sm text-gray-900">{{ number_format($member->getTotalHandstandWalkForWeek()/ 1000, 2, ',', '.') }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-right text-sm text-gray-900">{{ number_format($member->getTotalDoubleUndersForWeek()/ 1000, 2, ',', '.') }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-right text-sm text-gray-900">{{ number_format($member->getTotalBurpeesForWeek()/ 1000, 2, ',', '.') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
