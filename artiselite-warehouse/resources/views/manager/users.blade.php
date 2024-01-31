<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col mt-6">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden border border-gray-200 0 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="py-4 px-4 text-sm font-normal text-left rtl:text-right text-gray-500">
                                            <button class="flex items-center gap-x-3 focus:outline-none">
                                                <span>ID</span>
                                            </button>
                                        </th>

                                        <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                            Name
                                        </th>

                                        <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                            Email
                                        </th>

                                        <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                            Role
                                        </th>

                                        <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                            Edit
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($users as $user)
                                    <tr>
                                        <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                            <div>
                                                <h2 class="font-medium text-gray-800">{{ $user->id }}</h2>
                                            </div>
                                        </td>
                                        <td class="px-12 py-3.5 text-sm font-medium whitespace-nowrap">
                                            <div>
                                                <h2 class="font-medium text-gray-800">{{ $user->name }}</h2>
                                            </div>
                                        </td>
                                        <td class="px-12 py-3.5 text-sm font-medium whitespace-nowrap">
                                            <div>
                                                <h2 class="font-medium text-gray-800">{{ $user->email }}</h2>
                                            </div>
                                        </td>
                                        @if ($user->role_id == 1)
                                        <td class="px-12 py-3.5 text-sm font-medium whitespace-nowrap">
                                            <div class="inline px-3 py-1 text-sm font-normal rounded-full text-emerald-500 gap-x-2 bg-emerald-100/60">
                                                Manager
                                            </div>
                                        </td>
                                        @else
                                        <td class="px-12 py-3.5 text-sm font-medium whitespace-nowrap">
                                            <div class="inline px-3 py-1 text-sm font-normal rounded-full text-blue-500 gap-x-2 bg-blue-100/60">
                                                Operator
                                            </div>
                                        </td>
                                        @endif
                                        <td class="px-12 py-3.5 text-sm whitespace-nowrap">
                                            <button class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 hover:bg-gray-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
