<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvaController extends Controller
{
    //
    //
	public function prova1() {
	   echo "Hola";

	 // o també pode posar:
	 //  return "Hola";
	}

	public function prova2($numero) {
	   echo "Hola<br>";
	   echo "Has passat el número ".$numero;	 
	}

	public function prova3($numero)
	{
		// crida una vista:
	    return view('prova');
	}

	public function prova4($numero) {
		// 3 formes per passar valors a les vistes
		return view('provaParam')->with('numero',$numero);
		//return view('provaParam',['numero'=>$numero]);
		// return view('provaParam',compact('numero'));
	}

	public function prova5($numero) {
		$dies = ['dilluns','dimarts','dimecres','dijous','divendres','dissabte','diumenge'];
		// 3 formes per passar valors a les vistes
		
		// return view('provaParams2')->with('numero',$numero)->with('dies',$dies);
		
		// return view('provaParams2',['numero'=>$numero, 'dies'=>$dies]);
		
		return view('provaParams',compact('numero','dies'));

	}
}