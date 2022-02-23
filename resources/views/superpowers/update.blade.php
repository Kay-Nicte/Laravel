@extends('plantillas.principal')

@section('content')

Actualitzar Superpower</br><br>

<form method="POST" action="{{ url('superpowers/showUpdate', $superpoder->id)}}">
    @csrf
    
    <input type="text" name="name" value="{{$superpoder ->description}}">
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