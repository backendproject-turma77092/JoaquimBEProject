@extends('layouts.master')

@section('title')
    <h2>Alterar os detalhes do Fornecedor</h2>
@endsection

@section('content')
    <form method="POST" action="{{ route('provider.create') }}">
        @csrf
        <input type="hidden" name="id" value="{{ $ourProvider->id }}">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome</label>
            <input type="text" name="name" value="{{ $ourProvider->name }}" class="form-control"
                id="exampleFormControlInput1" placeholder="Nome" required>
            @error('name')
                <div class="alert alert-danger">Coloque um nome válido</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">telefone</label>
            <input type="number" name="phone" value="{{ $ourProvider->phone }}" class="form-control"
                id="exampleFormControlInput1" placeholder="Telefone" required>
            @error('phone')
                <div class="alert alert-danger">Coloque um telefone válido</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Produtos</label>
            <input type="text" name="description" value="{{ $ourProvider->description }}" class="form-control"
                id="exampleFormControlInput1" placeholder="Descrição">
            @error('description')
                <div class="alert alert-danger">Coloque produtos válidos</div>
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">Submeter</button>
    </form>
@endsection
