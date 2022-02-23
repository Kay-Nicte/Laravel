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

<h1>Llista Superpowers</h1>
<td><a href="{{url('superpowers/new') }}">Nou</a></td>
<table border="1" cellspacing="0">

    <tr>
        <th>Codi</th>
        <th>Nom</th>
        <th>Operacions</th>
    </tr>
    @foreach ($superpowers as $superpower)
    <tr>
        <td>{{ $superpower->id}}</td>
        <td>{{$superpower->description}}</td>
        <td><a href="{{url('superpowers/delete', $superpower->id) }}">Esborrar ||
            </a><a href="{{url('superpowers/update', $superpower->id) }}">Actualitzar</a></td>
    </tr>
    @endforeach

</table>
<br>


{{ $superpowers->links() }}

@endsection

  </body>
</html>