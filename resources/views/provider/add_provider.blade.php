@extends('layouts.master')

@section('title')
    <h2>Adicionar Fornecedor</h2>
@endsection

@section('content')
    <form method="POST" action="{{ route('provider.create') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome</label>
            <input type="text" name="name" value="" class="form-control" id="exampleFormControlInput1"
                placeholder="Nome" required>
            @error('name')
                <div class="alert alert-danger"> Coloque um nome válido</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">telefone</label>
            <input type="number" name="phone" value="" class="form-control" id="exampleFormControlInput1"
                placeholder="Coloque o numero de telefone válido">
            @error('phone')
                <div class="alert alert-danger"> Coloque um phone válido</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Produtos que fornece</label>
            <input type="text" name="description" value="" class="form-control" id="exampleFormControlInput1"
                placeholder="Coloque o tipo de produtos que fornece">
            @error('description')
                <div class="alert alert-danger"> Coloque o tipo de produtos que fornece</div>
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">Submeter</button>
    </form>
@endsection
