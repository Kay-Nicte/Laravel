<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superpower;

class SuperpowerController extends Controller
{
    //
    public function index()
    {

        $superpowers = Superpower::simplePaginate(5);
        return view("superpowers.llista", compact('superpowers'));


        $superpowers = Superpower::all();
        /*foreach($superpowers as $superpoder) {
            echo $superpoder->name."<br>";
        }*/
        return view("superpowers.llista", compact('superpowers'));
        // ['superpowers'=>$superpowers]
    }

    public function delete($id)
    {
        echo "vull esborrar!!!!!!" . $id;
        //Recuperar un objecte
        $superpoder = Superpower::findOrFail($id);
        try {
            $superpoder->delete();
            return redirect('superpoders')
                ->with('status', 'Superpoder esborrat!');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('superpoders')
                ->with('status', 'No es pot esborrar.');
            // echo "No es pot esborrar";

            // echo $e->getMessage();
        }

        $superpoder->delete();
        echo "Esborrat!!!" . $id;
    }

    public function add()
    {
        echo "vull afegir!!!!!!";
    }

    public function show()
    {
        return view('superpowers.new');
    }

    public function store(Request $request)
    {
        #Validació del camps
        $request->validate([
            'description' => 'required | min:3',
        ]);

        $superpoder = new Superpower;
        $superpoder->description = $request->description;
        $superpoder->save();

        return redirect('superpoders')
            ->with('status', 'Superpoder creat!');
    }

    public function showUpdate(Superpower $superpoder)
    {
        return view('superpowers.update', compact('superpoder'));
        #Recuperar un objecte
        //  $superpoder = Superpower::findOrFail($id);


    }

    public function update(Request $request, Superpower $superpoder)
    {
        //
        $request->validate([
            'name' => 'required',
        ]);

        // Opcio 1
        //$superpoder = Superpower::findOrFail($id);
        //$superpoder->update($request->all());

        // Opcio 2
        $superpoder->description = $request->name;
        $superpoder->save();

        return redirect()->route('superpowers.index')
            ->with('success', 'Superpoder actualitzat correctament');
    }
}