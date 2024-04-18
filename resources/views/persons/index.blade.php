<x-app-layout>
    <div class="max-w-4xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <!-- Botão Novo -->
            <div class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white dark:bg-gray-900">
                <div>
                    <div class="inline-flex items-center mx-10 text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                        <x-nav-link :href="route('persons.create')" :active="request()->routeIs('persons.create')">
                            {{ __('Novo') }}
                        </x-nav-link>
                    </div>
                </div>
            </div>

            <!-- Tabela de Dados -->
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nome
                        </th>
                        <th scope="col" class="px-6 py-3">
                            CPF
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Data de Nascimento
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($persons as $person)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="ps-3">
                                    <div class="text-base font-semibold">{{$person->name}}</div>
                                    <div class="font-normal text-gray-500">{{$person->cpf}}</div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                {{$person->cpf}}
                            </td>
                            <td class="px-6 py-4">
                                {{$person->birthday}}
                            </td>
                            <td class="px-6 py-4">
                                <!-- Edit Button -->
                                <div class="inline-flex items-center mx-10 text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                                    <x-nav-link :href="route('persons.edit', $person)" :active="request()->routeIs('persons.edit')">
                                        {{ __('Editar') }}
                                    </x-nav-link>
                                </div>
                                <!-- <a href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a> -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
