<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editora;

class EditoraController extends Controller
{
    public function index() {
        $editoras = Editora::all();
        $total = Editora::all()->count();
        return view('list-editoras', compact('editoras', 'total'));
    }

    public function create() {
        return view('include-editora');
    }

    public function store(Request $request) {

       
        $editora = $request->data['campo'];
        $product_editora = new Editora;
        $product_editora->name = $editora;
        $product_editora->save();

        $resposta['success'] = true;

        echo json_encode($resposta);

    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $product_editora = Editora::findOrFail($id);
        return view('alter-editora', compact('product_editora'));
    }

    public function update(Request $request, $id) {
        $product_editora = Editora::findOrFail($id); 
        $product_editora->name = $request->name;
        $product_editora->save();
        return redirect()->route('editora.index')->with('message', 'Editora alterado com sucesso!');
    }

    public function destroy(Request $request) {

        $id = $request->data['id'];

        $autor = Editora::findOrFail($id);
        $autor->delete();
        

        $resposta['success'] = true;
        $resposta['mensagem'] = "Excluido com sucesso";

        echo json_encode($resposta);

    }

}
