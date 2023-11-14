@extends('layouts.master')

@section('content')
    <h2>Adicionar Produto</h2>
    <form method="POST" action="{{ route('product.create') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Nome" value="{{ old('name') }}" required>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" name="type" class="form-control" id="type" placeholder="Tipo" value="{{ old('type') }}" required>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Preço</label>
            <input type="number" name="price" class="form-control" id="price" placeholder="Preço" value="{{ old('price') }}" required>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantidade</label>
            <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Quantidade" value="{{ old('quantity') }}" required>
            @error('quantity')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="note" class="form-label">Nota</label>
            <input type="text" name="note" class="form-control" id="note" placeholder="Nota" value="{{ old('note') }}" required>
            @error('note')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        @if(isset($providers) && !empty($providers))
            <div class="mb-3">
                <label for="provider_id" class="form-label">Fornecedor</label>
                <select name="provider_id" class="form-control" id="provider_id" required>
                    <option value="">Selecione um fornecedor</option>
                    @foreach($providers as $provider)
                        <option value="{{ $provider->id }}">{{ $provider->name }}</option>
                    @endforeach
                </select>
                @error('provider_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        @endif

        <button class="btn btn-primary" type="submit">Submeter</button>
    </form>
@endsection
