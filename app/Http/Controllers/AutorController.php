<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autor;

class AutorController extends Controller
{


    public function index() {
        $autores = Autor::all();
        $total = Autor::all()->count();
        return view('list-autores', compact('autores', 'total'));
    }

    public function create() {
        return view('include-autor');
    }


    public function store(Request $request) {

       
        $autor = $request->data['campo'];
        $product_autor = new Autor;
        $product_autor->name = $autor;
        $product_autor->save();

        $resposta['success'] = true;

        echo json_encode($resposta);

    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $product_autor = Autor::findOrFail($id);
        return view('alter-autor', compact('product_autor'));
    }

    public function update(Request $request, $id) {
        $product_autor = Autor::findOrFail($id); 
        $product_autor->name = $request->name;
        $product_autor->save();
        return redirect()->route('autor.index')->with('message', 'Autor alterado com sucesso!');
    }

    public function destroy($id) {
        $product_autor = Autor::findOrFail($id);
        $product_autor->delete();
        return redirect()->route('autor.index')->with('message', 'Autor excluído com sucesso!');
    }


}
