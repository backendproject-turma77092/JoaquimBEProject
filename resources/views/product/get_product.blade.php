@extends('layouts.master')

@section('title')
    <h2>Mudar os detalhes do produto</h2>
@endsection

@section('content')
    @isset($ourProduct)
        <form method="POST" action="{{ route('product.update', ['id' => $ourProduct->id]) }}">
            @csrf
            <input type="hidden" name="id" value="{{ $ourProduct->id }}">

            <div class="container">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nome</label>
                    <input type="text" name="name" value="{{ old('name', $ourProduct->name) }}" class="form-control"
                        id="exampleFormControlInput1" placeholder="Nome" required>
                    @error('name')
                        <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Preço</label>
                    <input type="text" name="price" value="{{ old('price', $ourProduct->price) }}" class="form-control"
                        id="exampleFormControlInput1" placeholder="Preço" required>
                    @error('price')
                        <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tipo</label>
                    <input type="text" name="type" value="{{ old('type', $ourProduct->type) }}" class="form-control"
                        id="exampleFormControlInput1" placeholder="Tipo" required>
                    @error('type')
                        <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Quantidade</label>
                    <input type="text" name="quantity" value="{{ old('quantity', $ourProduct->quantity) }}" class="form-control"
                        id="exampleFormControlInput1" placeholder="Quantidade" required>
                    @error('quantity')
                        <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nota</label>
                    <input type="text" name="note" value="{{ old('note', $ourProduct->note) }}" class="form-control"
                        id="exampleFormControlInput1" placeholder="Nota" required>
                    @error('note')
                        <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror
                </div>

            </div>
            <button class="btn btn-primary" type="submit">Submeter</button>
        </form>
    @else
        <p>Produto não encontrado.</p>
    @endisset
@endsection
