@extends('layouts.app')

@section('content')

@if (session('status'))
<div>
  {{ session('status')}}
</div>
@endif



<?php

// foreach ($planetes as $planeta) {
//     echo $planeta->name . "<br>";
// }

?>

<h1>Llista planetes</h1>
<td><a href="{{url('planets/new') }}">Nou</a></td>
<table border="1" cellspacing="0">

    <tr>
        <th>Codi</th>
        <th>Nom</th>
        <th>Operacions</th>
    </tr>
    @foreach ($planetes as $planeta)
    <tr>
        <td>{{ $planeta->id}}</td>
        <td>{{$planeta->name}}</td>
        <td><a href="{{url('planets/delete', $planeta->id) }}">Esborrar ||
            </a><a href="{{url('planets/update', $planeta->id) }}">Actualitzar</a></td>
    </tr>
    @endforeach

</table>
<br>


{{ $planetes->links() }}

@endsection