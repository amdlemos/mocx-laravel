<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Registro adicionado com sucesso!</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"></p>
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b bg-white dark:bg-gray-900">
                <x-nav-link
                    :href="route('persons.create')" :active="request()->routeIs('persons.create')"
                    data-modal-hide="default-modal" type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Novo
                </x-nav-link>
                <x-nav-link
                    :href="route('persons.index')" :active="request()->routeIs('persons.index')"
                    data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Cancelar
                </x-nav-link>
            </div>
        </div>
    </div>



</x-app-layout>
