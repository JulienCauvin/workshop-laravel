
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="font-semibold text-xl text-gray-800 leading-tight">Coucou ! 👋</h1>

                <br />

                <a class="text-pink-500 background-transparent font-bold uppercase px-3 py-1 text-xs outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" href="{{ route('users.create') }}">
                    Créer un nouvel utilisateur
                </a>

                <br />
                <br />

                <table>
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Nom</td>
                            <td>Email</td>
                            <td>Dernière modification</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->updated_at?->toDateTimeString() }}</td>
                                <td>
                                    <a href="{{ route('users.show', $user) }}">Voir</a> |
                                    <a href="{{ route('users.edit', $user) }}">Modifier</a> |
                                    <form action="{{ route('users.destroy', $user) }}" method="post" style="display: inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <br />

                Total d'utilisateurs = {{ $users->count() }}
            </div>
        </div>
    </div>

</x-app-layout>
