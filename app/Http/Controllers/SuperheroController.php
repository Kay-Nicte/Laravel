<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;

class SuperheroController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $superheros = Superhero::simplePaginate(5);
        return view("supers.llista", compact('superheros'));
    }

    public function showHero(Superhero $superhero)
    {
        //
        return view(
            'supers.show',
            compact('superhero')
        );
    }

    public function delete($id)
    {
        echo "vull esborrar!!!!!!" . $id;
        //Recuperar un objecte
        $superhero = Superhero::findOrFail($id);
        try {
            $superhero->delete();
            return redirect('supers')
                ->with('status', 'Superheroi esborrat!');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('supers')
                ->with('status', 'No es pot esborrar.');
            // echo "No es pot esborrar";

            // echo $e->getMessage();
        }

        $superhero->delete();
        echo "Esborrat!!!" . $id;
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
            'realname' => 'required | min:3',
        ]);

        $superhero = new Superhero;
        $superhero->name = $request->nom;
        $superhero->save();

        return redirect('supers')
            ->with('status', 'Superheroi creat!');
    }

    public function showUpdate($id)
    {

        #Recuperar un objecte
        $superhero = Superhero::findOrFail($id);

        return view('supers.update', compact('superhero'));
    }

    public function update(Request $request, Superhero $superhero)
    {
        //
        $request->validate([
            'realname' => 'required',
        ]);

        // Opcio 1
        // $superheroi = Superhero::findOrFail($id);
        //$superheroi->update($request->all());

        // Opcio 2
        $superhero->realname = $request->realname;
        $superhero->heroname = $request->heroname;
        $superhero->gender = $request->gender;
        $superhero->save();

        return redirect()->route('supers.index')
            ->with('success', 'Superheroi actualitzat correctament');
    }
}
