<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ViewErrorBag;

class TypesController extends Controller

{
    public function index()
    {
        return view('types.index', ['types'=>Type::all()]);
    }

    public function create()
    {
        return view('types.create');
    }

    public function store(Request $requests)
    {
        Type::create([
            'name' => $requests->name,
        ]);

        return redirect('/types');
    }

    public function edit($id)
    {
        //find é o método que faz select * from products where id= ?
        $type = Type::find($id);
        //retornamos a view passando a TUPLA de produto consultado
        return view('types.edit', ['type' => $type]);
    }
    public function update(Request $request)
    {
        $product = Type::find($request->id);
        //método update faz um update product set name = ? etc...
        $product->update([
            'name' => $request->name,
         ]);
        return redirect('/types');
    }

    public function destroy($id)
    {
        //select * from product where id = ?
        $type = Type::find($id);
        //deleta o produto no banco
        $type->delete();
        return redirect('/types');
    }
    

}

