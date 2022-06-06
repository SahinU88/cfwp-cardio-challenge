<x-guest-layout>
    <div class="min-h-full flex">
        <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div>
                    <img class="h-24 w-auto" src="{{ asset('/images/cfwp-black.png') }}" alt="CrossFit Westpack Cardio Challenge">
                    <h2 class="mt-6 text-3xl font-extrabold text-gray-900">Jetzt registrieren</h2>
                    <p class="mt-2 text-sm text-gray-600">
                        Die Cardio-Challenge ist zurück!
                    </p>
                </div>

                <div class="mt-8">

                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <div class="mt-6">
                        <form action="{{ route('register') }}" method="POST" class="space-y-6">
                            @csrf

                            <div>
                                <x-label for="name" class="block text-sm font-medium text-gray-700" :value="__('Name')" />
                                <div class="mt-1">
                                    <x-input id="name" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" type="text" name="name" :value="old('name')" required />
                                </div>
                            </div>

                            <div>
                                <x-label for="email" class="block text-sm font-medium text-gray-700" :value="__('Email')" />
                                <div class="mt-1">
                                    <x-input id="email" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" type="email" name="email" :value="old('email')" required />
                                </div>
                            </div>

                            <div class="space-y-1">
                                <x-label for="password" class="block text-sm font-medium text-gray-700" :value="__('Password')" />
                                <div class="mt-1">
                                    <x-input id="password" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="new-password" />
                                </div>
                            </div>

                            <div class="space-y-1">
                                <x-label for="password_confirmation" class="block text-sm font-medium text-gray-700" :value="__('Confirm Password')" />
                                <div class="mt-1">
                                    <x-input id="password_confirmation" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                    type="password"
                                                    name="password_confirmation"
                                                    required />
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:block relative w-0 flex-1 overflow-hidden">
            @php
                $images = ['00001', '00002', '00003', '00004', '00005', '00006', '00007', '00008', '00009', '00010', '00011', '00012', '00013'];
                $imageIndex = array_rand($images);
            @endphp
            <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('/images/landingpage/cfwpcc-' . $images[$imageIndex] . '.jpeg') }}" alt="">
        </div>
  </div>
</x-guest-layout>
