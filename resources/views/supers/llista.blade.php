@extends('layouts.app')

@section('content')

@if (session('status'))
<div>
    {{session('status')}}
</div>
@endif

<?php

// foreach ($planetes as $planeta) {
//     echo $planeta->name . "<br>";
// }

?>

<h1>Llista Superheroes</h1>
<td><a href="{{url('supers/new') }}">Nou</a></td>
<table border="1" cellspacing="0">

    <tr>
        <th><center>ID</center></th>
        <th><center>Real Name</center></th>
        <th><center>Hero Name</center></th>
        <th><center>Genere</center></th>
        <th><center>Planeta</center></th>
        <th><center>Operacions</center></th>
    </tr>
    @foreach ($superheros as $superhero)
    <tr>
        <td><center>{{ $superhero->id}}</center></td>
        <td><center>{{$superhero->realname}}</center></td>
        <td>{{$superhero->heroname}}</td>
        <td>{{$superhero->gender}}</td>
        <td>{{$superhero->planet->name}}</td>
        <td><a href="{{url('supers/delete', $superhero->id) }}">Esborrar ||
            </a><a href="{{url('supers/update', $superhero->id) }}">Actualitzar</a></td>
    </tr>
    @endforeach

</table>
<br>

{{ $superheros->links() }}

@endsection

  </body>
</html>