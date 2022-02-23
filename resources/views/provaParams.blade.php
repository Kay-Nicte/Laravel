<!-- <html>
<head></head>
<body>
Hola,
Sóc una vista de prova amb paràmetres.<br>
<?php
	// echo "Numero: ".$numero."<br>";
	// foreach($dies as $dia) {
	// 	echo $dia." ";

	// }
?>
</body>
</html> -->

<html>
<head></head>
<body>
Hola,
Sóc una vista de prova amb paràmetres.<br>
Numero: {{ $numero }} <br>
@foreach($dies as $dia)
  {{$dia}} 
@endforeach

</body>
</html>