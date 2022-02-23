Nou Superpower

<form method="POST" action="{{ url('planets/store') }}">
    @csrf

    <input type="text" name="nom" value="{{old('nom')}}">
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