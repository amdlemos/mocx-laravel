<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('persons.store') }}">
            @csrf
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nome')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- CPF -->
            <div>
                <x-input-label for="cpf" :value="__('CPF')" />
                <x-text-input
                    id="cpf"
                    class="block mt-1 w-full"
                    type="text"
                    name="cpf"
                    :value="old('cpf')"
                    autofocus autocomplete="cpf" />
                <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
            </div>

            <!-- Data Nascimento-->
            <div>
                <x-input-label for="birthday" :value="__('Nascimento')" />
                <input
                    id="birthday"
                    class="block mt-1 w-full shadown-sm border-gray-300 rounded-md"
                    type="date"
                    name="birthday"
                    :value="old('birthday')"
                    required autofocus autocomplete="birthday" />
                <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
            </div>

            <x-primary-button class="mt-4">{{ __('Salvar') }}</x-primary-button>

        </form>

        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            @foreach ($persons as $person)
                <div class="p-6 flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-800">{{ $person->name }}</span>
                                <small class="ml-2 text-sm text-gray-600">{{ $person->created_at->format('j M Y, g:i a') }}</small>
                                @unless ($person->created_at->eq($person->updated_at))
                                    <small class="text-sm text-gray-600"> &middot; {{ __('edited')}}</small>
                                @endunless
                            </div>
                        </div>
                        <p class="mt-4 text-lg text-gray-900">{{ $person->name }}</p>
                        <p class="mt-4 text-lg text-gray-900">{{ $person->cpf }}</p>
                        <p class="mt-4 text-lg text-gray-900">{{ $person->birthday }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
