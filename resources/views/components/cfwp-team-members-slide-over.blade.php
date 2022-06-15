<div x-data x-show="$store.teamsPanel.open" class="relative z-10" @keydown.window.escape="$store.teamsPanel.closePanel()">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed inset-0 overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <div class="fixed inset-y-0 right-0 flex max-w-full sm:pl-16">
                <div class="pointer-events-auto w-screen max-w-xl"
                    x-show="$store.teamsPanel.open"
                    x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                    x-transition:enter-start="translate-x-full"
                    x-transition:enter-end="translate-x-0"
                    x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                    x-transition:leave-start="translate-x-0"
                    x-transition:leave-end="translate-x-full"
                    @click.away="$store.teamsPanel.closePanel()"
                >
                    <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                        <div class="p-6">
                            <div class="flex items-start justify-between">
                                <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Teams</h2>
                                <div class="ml-3 flex h-7 items-center">
                                    <button type="button"
                                        class="rounded-md bg-white text-gray-400 hover:text-gray-500 focus:ring-2 focus:ring-indigo-500"
                                        @click="$store.teamsPanel.closePanel()"
                                    >
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-gray-200 overflow-x-auto hiddenScrollbar">
                            <div class="px-6">
                                <nav class="-mb-px flex space-x-6">
                                    @foreach ($teams as $team)
                                    <a
                                        href="#"
                                        class="whitespace-nowrap px-1 pb-4 ml-2 border-b-2 font-medium text-sm"
                                        :class="$store.teamsPanel.activeTeamIndex == {{ $loop->index }} ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                        @click="$store.teamsPanel.showTeam({{$loop->index}})"
                                    >
                                        {{ $team->name }}
                                    </a>
                                    @endforeach
                                </nav>
                            </div>
                        </div>
                        @foreach ($teams as $team)
                        <ul x-show="$store.teamsPanel.activeTeamIndex == {{ $loop->index }}" class="flex-1 divide-y divide-gray-200 overflow-y-auto">
                            @foreach ($team->users as $user)
                            <li>
                                <div class="group relative flex items-center py-6 px-5">
                                    <div class="-m-1 block flex-1 p-1">
                                        <div class="absolute inset-0"></div>
                                        <div class="relative flex min-w-0 flex-1 items-center">
                                            <span class="relative inline-block flex-shrink-0">
                                                <div>{{ substr($user->name, 0, 1) }}</div>
                                            </span>
                                            <div class="ml-4 truncate">
                                                <p class="truncate text-sm font-medium text-gray-900">{{ $user->name }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
