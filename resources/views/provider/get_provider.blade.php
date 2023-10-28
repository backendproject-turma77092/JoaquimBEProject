@extends('layouts.master')


@section('title')
    <h2>Change Provider details</h2>
@endsection

@section('content')
    <form method="POST" action="{{ route('provider.create') }}">
        @csrf
        <input type="hidden" name="id" value="{{ $ourProvider->id }}" id="">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome</label>
            <input type="text" name="name" value="" class="form-control"
                id="exampleFormControlInput1" placeholder="Nome" required>
            @error('name')
                <div class="alert alert-danger"> Coloque um nome válido</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">phone</label>
            <input type="text" name="phone" value="{{ $ourProvider->phone }}" class="form-control"
                id="exampleFormControlInput1" placeholder="Nome" required>
            @error('name')
                <div class="alert alert-danger"> Coloque um telefone válido</div>
            @enderror
        </div>




        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Descrição</label>
            <input  type="text" name="email" value="{{ $ourProvider->description }}" class="form-control"
                id="exampleFormControlInput1" placeholder="name@example.com" >
            @error('descrição')
                <div class="alert alert-danger"> Coloque um descrição válido</div>
            @enderror


        </div>
        <button class="btn btn-primary" type="submit">Submeter</button>
    </form>
@endsection
