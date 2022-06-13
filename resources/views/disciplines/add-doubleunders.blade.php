<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Double Unders</h3>
                <ul class="list-disc mt-1 ml-4 text-sm leading-5 text-gray-600 italic">
                    <li>Minimum repetition for a single session: 500reps</li>
                    <li>Conversion: 250reps = 1km</li>
                </ul>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{ route('disciplines.store', 'doubleUnders') }}" method="POST">
                @csrf
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="repetition" class="block text-sm font-medium leading-5 text-gray-700">
                                    Repetition
                                </label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <input
                                        id="repetition"
                                        name="repetition"
                                        type="number"
                                        min="500"
                                        step="1"
                                        placeholder="500"
                                        required
                                        class="form-input block w-full pl-4 pr-12 sm:text-sm sm:leading-5"
                                    />
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm sm:leading-5">km</span>
                                    </div>
                                </div>

                                @error('repetition', 'doubleUnders')
                                <p class="mt-3 text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-white text-right sm:px-6">
                        <span class="inline-flex rounded-md shadow-sm">
                            <x-button>Add entry</x-button>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
