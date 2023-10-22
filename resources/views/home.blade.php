@extends('layouts.master')

@section('content')

    <ul>
        <a href="{{ route('user.add') }}">
            <li>Adicionar Utilizadores</li>
        </a>
        <a href="{{ route('user.all') }}">
            <li>Todos os Utilizadores</li>
        </a>
    </ul>

@endsection
