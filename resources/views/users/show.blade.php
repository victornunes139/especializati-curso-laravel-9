@extends('layouts.app')

@section('title', 'Listagem dos Usuário')

@section('content')
    <h1>Listagem de usuário {{ $user->name }}</h1>

    <uL>
        <li>
            {{ $user->name }}
        </li>
        <li>
            {{ $user->email }}
        </li>
        <li>
            {{ $user->created_at }}
        </li>
    </uL>
@endsection




















