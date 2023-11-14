@extends('layouts.master')

@section('title')
    <h2>Adicionar Fornecedor</h2>
@endsection

@section('content')
    <form method="POST" action="{{ route('provider.create') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name"
                placeholder="Digite o nome" required>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Telefone</label>
            <input type="number" name="phone" value="{{ old('phone') }}" class="form-control" id="phone"
                placeholder="Digite o número de telefone válido">
            @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Produtos que Fornece</label>
            <input type="text" name="description" value="{{ old('description') }}" class="form-control" id="description"
                placeholder="Digite o tipo de produtos que fornece">
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">Submeter</button>
    </form>
@endsection
