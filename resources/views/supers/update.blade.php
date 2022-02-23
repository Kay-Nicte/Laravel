@extends('plantillas.principal')

@section('content')

Actualitzar Superhero</br><br>

<form method="POST" action="{{ url('supers/showUpdate', $superhero->id)}}">
    @csrf
    
    Real Name: <input type="text" name="realname" value="{{$superhero ->realname}}">
    Hero Name: <input type="text" name="heroname" value="{{$superhero ->heroname}}">
    Gènere: <input type="text" name="gender" value="{{$superhero ->gender}}">
    <!-- Planeta: <input type="text" name="name" value="{{$superhero -> planet -> name}}"> -->

    <input type="submit" value="Desar">
</form>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)

        <li>{{$error}} </li>

        @endforeach
    </ul>
</div>
@endif

@endsection