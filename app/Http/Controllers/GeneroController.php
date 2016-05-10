<?php

namespace CinemaPHP\Http\Controllers;

use Illuminate\Http\Request;

use CinemaPHP\Genre;
use CinemaPHP\Http\Requests;
use CinemaPHP\Http\Controllers\Controller;

class GeneroController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return view('genero.create');
    }

    public function store(Request $request)
    {
        if($request->ajax()){
            Genre::create($request->all());
            return response()->json([
                "messagem" => "Criado com sucesso"
            ]);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
