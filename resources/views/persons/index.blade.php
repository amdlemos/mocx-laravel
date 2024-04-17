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
                        <!-- <th scope="col" class="p-4"> -->
                        <!--     <div class="flex items-center"> -->
                        <!--         <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> -->
                        <!--         <label for="checkbox-all-search" class="sr-only">checkbox</label> -->
                        <!--     </div> -->
                        <!-- </th> -->
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
                            <!-- <td class="w-4 p-4"> -->
                            <!--     <div class="flex items-center"> -->
                            <!--         <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> -->
                            <!--         <label for="checkbox-table-search-1" class="sr-only">checkbox</label> -->
                            <!--     </div> -->
                            <!-- </td> -->
                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <!-- <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt=""> -->
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
                                <!-- Modal toggle -->
                                <a href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            <!-- Edit user modal -->
                <!-- <div id="editUserModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"> -->
                <!--     <div class="relative w-full max-w-2xl max-h-full"> -->
                <!--         <!-- Modal content --> -->
                <!--         <form class="relative bg-white rounded-lg shadow dark:bg-gray-700"> -->
                <!--             <!-- Modal header --> -->
                <!--             <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600"> -->
                <!--                 <h3 class="text-xl font-semibold text-gray-900 dark:text-white"> -->
                <!--                     Edit user -->
                <!--                 </h3> -->
                <!--                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editUserModal"> -->
                <!--                 <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"> -->
                <!--                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/> -->
                <!--                 </svg> -->
                <!--                 <span class="sr-only">Close modal</span> -->
                <!--             </button> -->
                <!--             </div> -->
                <!--             <!-- Modal body --> -->
                <!--             <div class="p-6 space-y-6"> -->
                <!--                 <div class="grid grid-cols-6 gap-6"> -->
                <!--                     <div class="col-span-6 sm:col-span-3"> -->
                <!--                         <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label> -->
                <!--                         <input type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie" required=""> -->
                <!--                     </div> -->
                <!--                     <div class="col-span-6 sm:col-span-3"> -->
                <!--                         <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label> -->
                <!--                         <input type="text" name="last-name" id="last-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Green" required=""> -->
                <!--                     </div> -->
                <!--                     <div class="col-span-6 sm:col-span-3"> -->
                <!--                         <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label> -->
                <!--                         <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example@company.com" required=""> -->
                <!--                     </div> -->
                <!--                     <div class="col-span-6 sm:col-span-3"> -->
                <!--                         <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label> -->
                <!--                         <input type="number" name="phone-number" id="phone-number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g. +(12)3456 789" required=""> -->
                <!--                     </div> -->
                <!--                     <div class="col-span-6 sm:col-span-3"> -->
                <!--                         <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label> -->
                <!--                         <input type="text" name="department" id="department" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Development" required=""> -->
                <!--                     </div> -->
                <!--                     <div class="col-span-6 sm:col-span-3"> -->
                <!--                         <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label> -->
                <!--                         <input type="number" name="company" id="company" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123456" required=""> -->
                <!--                     </div> -->
                <!--                     <div class="col-span-6 sm:col-span-3"> -->
                <!--                         <label for="current-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current Password</label> -->
                <!--                         <input type="password" name="current-password" id="current-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required=""> -->
                <!--                     </div> -->
                <!--                     <div class="col-span-6 sm:col-span-3"> -->
                <!--                         <label for="new-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Password</label> -->
                <!--                         <input type="password" name="new-password" id="new-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required=""> -->
                <!--                     </div> -->
                <!--                 </div> -->
                <!--             </div> -->
                <!--             <!-- Modal footer --> -->
                <!--             <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600"> -->
                <!--                 <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save all</button> -->
                <!--             </div> -->
                <!--         </form> -->
                <!--     </div> -->
                <!-- </div> -->
        </div>
    </div>
</x-app-layout>
