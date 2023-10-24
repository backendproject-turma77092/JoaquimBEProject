
@extends('layouts.master')



@section('content')

    <li>Todos Utilizadores</li>

    @foreach ( $users as $item)
<ul>
  <li>{{$item->id}} - {{$item->name}}      </li>
</ul>
    @endforeach

    @endsection
