@extends('layouts.light-app')

@section('content')
    <a href="{{ route('users.index') }}"><- Retour</a>

    <h1>Un nouveau copain ? 🤩</h1>

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <label for="name">Nom :
            <input
                id="name"
                type="text"
                name="name"
                value="{{ old('name') }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            @error('name')
            <span class="alert alert-danger">{{ $message }}</span>
            @enderror
        </label>

        <br/>

        <label for="email">Email :
            <input
                id="email"
                type="text"
                name="email"
                value="{{ old('email') }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            @error('email')
            <span class="alert alert-danger">{{ $message }}</span>
            @enderror
        </label>

        <br/>

        <button type="sudmit">
            OK
        </button>
    </form>
@endsection
