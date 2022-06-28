@extends('layouts.light-app')

@section('content')
    <a href="{{ route('users.index') }}"><- Retour</a>

    <h1>Hello, moi c'est {{ $user->name }} et voici mes posts ! 🥰</h1>

    <table>
        <thead>
        <tr>
            <td>ID</td>
            <td>Titre</td>
            <td>Dernière modification</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($user->posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $user->updated_at?->toDateTimeString() }}</td>
                <td>
                    <a href="#">Voir</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
