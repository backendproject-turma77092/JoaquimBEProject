@extends('layouts.master')


@section('title')
    <h2>Add customer</h2>
@endsection

@section('content')




    <form method="POST" action="{{ route('user.create') }}">
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
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" name="email" value="" class="form-control" id="exampleFormControlInput1"
                placeholder="name@example.com" required>
            @error('email')
                <div class="alert alert-danger"> Coloque um email válido</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input id="password" type="password" name="password" value="" class="form-control" id="exampleFormControlInput1"
                placeholder="password" required>
            @error('password')
                <div class="alert alert-danger"> Coloque uma password com pelo menos 8 caracteres</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
            <input id="confirm_password" type="password" name="password_confirmation" value="" class="form-control"
                id="exampleFormControlInput1" placeholder="password" required>
            @error('password_confirmation')
                <div class="alert alert-danger">A password não condiz</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">phone</label>
            <input type="text" name="phone" value="" class="form-control" id="exampleFormControlInput1"
                placeholder="phone" required>
            @error('phone')
                <div class="alert alert-danger"> Coloque um telefone válido</div>
            @enderror
        </div>






        <button class="btn btn-primary" type="submit">Submeter</button>
    </form>


    <script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;


    </script>
@endsection
