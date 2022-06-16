<div>
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h2 class="text-xl font-semibold text-gray-900">Leaderboard</h2>
            <p class="mt-2 text-sm text-gray-700">Current standings. The current week will be applied <span class="font-bold">on Sunday 12am</span>.</p>
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
                                <th class="w-10 py-3.5 pl-4 pr-1"></th>
                                <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Team</th>
                                <th class="px-3 py-3.5 text-right text-sm font-semibold text-gray-900">Total kilometers</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach ($teams as $team)
                            <tr
                                @class([
                                    'cursor-pointer text-gray-900 hover:bg-gray-50' => Auth::user()->team->id != $team->id,
                                    'cursor-pointer bg-gray-800 text-cfwp-yellow' => Auth::user()->team->id == $team->id
                                ])
                                @click="$store.teamsPanel.showTeam({{ $loop->index }})"
                            >
                                <td class="w-10 whitespace-nowrap py-4 pl-4 pr-1 text-center text-sm font-medium">{{ $loop->iteration }}</td>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-6">{{ $team->name }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-right text-sm">{{ number_format($team->getTotalUntilLastWeek(), 2, ',', '.') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
