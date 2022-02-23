Nou Superheroi

<form method="POST" action="{{ url('supers/store') }}">
    @csrf

    <input type="text" name="realname" value="{{old('realname')}}">
    <input type="text" name="heroname" value="{{old('heroname')}}">
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