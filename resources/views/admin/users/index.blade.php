<x-app-layout>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div>
            <x-link-blue>Novo</x-link-blue>
        </div>

        <x-title-header name="header">
            Usuários
        </x-title-header>

        <x-alerts/>

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nome
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ação
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $user->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $user->email }}
                        </td>
                        <td class="px-6 py-4 {{ $user->status === 'inativo' ? 'text-red-500' : 'text-emerald-600' }}">
                            {{ $user->status }}
                        </td>
                        <td class="px-6 py-4">
                            <x-link-green href="{{ route('users.edit', $user) }}">Acessar</x-link-green>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <div class="p-3">
            {{ $users->links() }}
        </div>
    </div>

</x-app-layout>
