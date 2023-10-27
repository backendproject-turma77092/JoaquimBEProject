@extends('layouts.master')


@section('title')
    <h2>Change user details</h2>
@endsection

@section('content')
    <form method="POST" action="{{ route('user.create') }}">
        @csrf
        <input type="hidden" name="id" value="{{ $ourUser->id }}" id="">
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
            <input type="text" name="phone" value="{{ $ourUser->phone }}" class="form-control"
                id="exampleFormControlInput1" placeholder="Nome" required>
            @error('name')
                <div class="alert alert-danger"> Coloque um telefone válido</div>
            @enderror
        </div>




        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input disabled type="email" name="email" value="{{ $ourUser->email }}" class="form-control"
                id="exampleFormControlInput1" placeholder="name@example.com" required>
            @error('email')
                <div class="alert alert-danger"> Coloque um email válido</div>
            @enderror


        </div>
        <button class="btn btn-primary" type="submit">Submeter</button>
    </form>
@endsection
