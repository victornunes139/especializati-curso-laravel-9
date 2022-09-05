@extends('layouts.app')


@section('title', 'Listagem dos Usuários')

@section('content')
    <h1>
        Listagem dos usuário
        (<a href="{{ route('users.create') }}">+</a>)
    </h1>

    <form action="{{ route('users.index') }}" method="GET">
        <input type="text" name="search" placeholder="Pesquisar">
        <button>Pesquisar</button>
    </form>


    @foreach ($users as $user)
        <li>
            {{ $user->name }} -
            {{ $user->email }}
            | <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
            | <a href="{{ route('users.edit', $user->id) }}">Editar</a>
        </li>
    @endforeach
@endsection

























