@extends('layouts.master')

@section('content')



    <h3>Informação da empresa</h3>

    <ul>
        <li>Nome: {{ $info['name'] }}</li>
        <li>Morada: {{ $info['address'] }}</li>
        <li>Email: {{ $info['email'] }}</li>
    </ul>

@endsection
