<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form
            method="POST"
            class="max-w-sm mx-auto"
            action="{{ route('persons.update', $person) }}">
            @csrf
            @method('patch')
            <!-- Name -->
            <div class="mb-5">
                <x-input-label
                    for="name"
                    :value="__('Nome')"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                />
                <x-text-input
                    id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    type="text"
                    name="name"
                    maxlength="100"
                    minlenght="3"
                    :value="old('name', $person->name)"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- CPF -->
            <div class="mb-5">
                <x-input-label
                    for="cpf"
                    :value="__('CPF')"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                />
                <x-text-input
                    id="cpf"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    type="text"
                    :value="old('cpf', $person->cpf)"
                    name="cpf"
                    maxlength="14"
                    minlenght="11"
                    autofocus autocomplete="cpf" />
                <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
            </div>

            <!-- Data Nascimento-->
            <div class="mb-5">
                <x-input-label
                    for="birthday"
                    :value="__('Data de Nascimento')"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                />
                <div class="relative max-w-sm">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <x-text-input
                        datepicker
                        datepicker-format="yyyy/mm/dd"
                        datepicker-autohide
                        id="birthday"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date"
                        type="text"
                        :value="old('birthday', $person->birthday)"
                        name="birthday"
                        required autofocus autocomplete="birthday" />
                    <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
                </div>
            </div>
            <div>

            </div>

            <x-primary-button class="mt-4">{{ __('Salvar') }}</x-primary-button>

        </form>

</x-app-layout>
