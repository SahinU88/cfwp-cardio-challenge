<div class="bg-gray-50 shadow rounded-lg">
    <div class="px-4 py-5 sm:p-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900" id="update-weekly-challenge-label">
            Weekly Challenge: <span class="font-bold">{{ $challenge->name }}</span>
        </h3>
        <div class="mt-2 sm:flex sm:items-start sm:justify-between">
            <div class="max-w-xl text-sm text-gray-500">
                <p id="update-weekly-challenge">{{ $challenge->description }}</p>
                @if (! Auth::user()->didCompleteChallenge($challenge))
                    <p class="mt-2 italic">If you did complete the challenge, just toggle the switch!</p>
                @else
                    <p class="mt-2 font-bold italic text-cfwp-green-accent">Nice job, you completed this weeks challenge already!</p>
                @endif
            </div>
            <div class="mt-5 sm:mt-0 sm:ml-6 sm:flex-shrink-0 sm:flex sm:items-center">
                <form action="{{ route('challenges.store', $challenge) }}" method="POST" x-data="{ completed: {{ Auth::user()->didCompleteChallenge($challenge) ? 'true' : 'false' }} }">
                    @csrf
                    <input class="hidden" type="checkbox" name="completed" x-model="completed" />
                    <button type="submit"
                            @class([
                                'bg-gray-200' => ! Auth::user()->didCompleteChallenge($challenge),
                                'bg-cfwp-purple-accent' => Auth::user()->didCompleteChallenge($challenge),
                                'relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500',
                            ])
                            x-on:click="completed = ! completed"
                        >
                        <span
                            @class([
                                'translate-x-0' => ! Auth::user()->didCompleteChallenge($challenge),
                                'translate-x-5' => Auth::user()->didCompleteChallenge($challenge),
                                'inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200',
                            ])
                        ></span>
                    </button>
                </form>
            </div>
        </div>
    </div>
  </div>
