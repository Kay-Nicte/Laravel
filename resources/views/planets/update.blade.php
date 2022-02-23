@extends('plantillas.principal')

@section('content')

Actualitzar Planeta</br><br>

<form method="POST" action="{{ url('planets/showUpdate', $planet->id)}}">
    @csrf
    
    <input type="text" name="name" value="{{$planet ->name}}">
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