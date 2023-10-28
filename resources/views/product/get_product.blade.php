@extends('layouts.master')


@section('title')
    <h2>Change product details</h2>
@endsection

@section('content')
<form method="POST" action="{{ route('product.create') }}">
    <input type="hidden" name="id" value="{{ $ourProduct->id }}">

        @csrf
        <input type="hidden" name="id" value="{{ $ourProduct->id }}" id="">


        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome</label>
            <input type="text" name="name" value="" class="form-control"
                id="exampleFormControlInput1" placeholder="Nome" required>
            @error('name')
                <div class="alert alert-danger"> Coloque um nome válido</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">preço</label>
            <input type="text" name="price" value="{{ $ourProduct->price }}" class="form-control"
                id="exampleFormControlInput1" placeholder="Nome" required>
            @error('name')
                <div class="alert alert-danger"> Coloque um telefone válido</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">type</label>
            <input type="text" name="type" value="{{ $ourProduct->type }}" class="form-control"
                id="exampleFormControlInput1" placeholder="Nome" required>
            @error('name')
                <div class="alert alert-danger"> Coloque um telefone válido</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">quantity</label>
            <input type="text" name="quantity" value="{{ $ourProduct->quantity }}" class="form-control"
                id="exampleFormControlInput1" placeholder="Nome" required>
            @error('name')
                <div class="alert alert-danger"> Coloque um telefone válido</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">note</label>
            <input type="text" name="note" value="{{ $ourProduct->note }}" class="form-control"
                id="exampleFormControlInput1" placeholder="Nome" required>
            @error('name')
                <div class="alert alert-danger"> Coloque um telefone válido</div>
            @enderror
        </div>

        </div>
        <button class="btn btn-primary" type="submit">Submeter</button>
    </form>
@endsection
