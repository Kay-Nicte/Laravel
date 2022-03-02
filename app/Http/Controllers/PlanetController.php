<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;

class PlanetController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');
    }
    
    public function index()
    {
        $user = auth()->user();
        echo $user->email;
        echo("<br>");

        $planetes = Planet::simplePaginate(5);
        return view("planets.llista", compact('planetes'));


        $planetes = Planet::all();
        /*foreach($planetes as $planeta) {
            echo $planeta->name."<br>";
        }*/
        return view("planets.llista", compact('planetes'));
        // ['planetes'=>$planetes]
    }

    public function delete(Planet $planet)
    {
        //Recuperar un objecte
        //$planet = Planet::findOrFail($id);
        try {
            $planet->delete();
            return redirect('planets')
                ->with('status', 'Planeta esborrat!');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('planets')
                ->with('status', 'No es pot esborrar.');
            // echo "No es pot esborrar";

            // echo $e->getMessage();
        }

        $planet->delete();
    }

    public function add()
    {
        echo "vull afegir!!!!!!";
    }

    public function show()
    {
        return view('planets.new');
    }

    public function store(Request $request)
    {
        #Validació del camps
        $request->validate([
            'nom' => 'required | min:3',
        ]);

        $planeta = new Planet;
        $planeta->name = $request->nom;
        $planeta->save();

        return redirect('planets')
            ->with('status', 'Planeta creat!');
    }

    public function showUpdate(Planet $planet)
    {
        return view('planets.update', compact('planet'));

        #Recuperar un objecte
        //  $planet = Planet::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name' => 'required',
        ]);

        // Opcio 1
        $planet = Planet::findOrFail($id);
        $planet->update($request->all());

        // Opcio 2
        // $planet->name = $request->name;
        // $planet->save();

        return redirect()->route('planets.index')
            ->with('success', 'Planet actualitzat correctament');
    }
}
