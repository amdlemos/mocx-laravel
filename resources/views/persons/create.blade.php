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

</x-app-layout>
