@extends('layouts.light-app')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{ route('users.index') }}"><- Retour</a>

                <h1>Je suis {{ $user->name }} ! tu veux me modifier ? 🤔</h1>

                <form action="{{ route('users.update', $user) }}" method="post">
                    @method('put')
                    @csrf
                    <label for="name">Nom :
                        <input
                            id="name"
                            type="text"
                            name="name"
                            value="{{ old('name', $user->name) }}"
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
                            value="{{ old('email', $user->email) }}"
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
