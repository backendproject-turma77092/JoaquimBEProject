@extends('layouts.master')

@section('content')

@if (session('message'))
<div class="alert alert-success">
    {{session('message')}}
</div>
@endif


    <div class="container">
        <h1>Fornecedores</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">telefone</th>
                    <th scope="col">produtos fornecidos</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($provider as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <a href="{{ route('provider.get', $item->id) }}" class="btn btn-info">Editar</a>
                            <a href="{{ route('provider.delete', $item->id) }}" class="btn btn-danger">Apagar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
