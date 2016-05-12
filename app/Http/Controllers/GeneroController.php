<?php

namespace CinemaPHP\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use CinemaPHP\Genre;
use CinemaPHP\Http\Requests;
use CinemaPHP\Http\Requests\GenreRequest;
use CinemaPHP\Http\Controllers\Controller;

class GeneroController extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }
    public function find(Route $route){
        $this->genre = Genre::find($route->getParameter('genero'));
    }
    
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $genres = Genre::all();
            return response()->json($genres);
        }
        return view('genero.index');
    }

    public function create()
    {
        return view('genero.create');
    }

    public function store(GenreRequest $request)
    {
        if($request->ajax()){
            Genre::create($request->all());
            return response()->json([
                "mensaje" => "creado"
            ]);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return response()->json($this->genre);
    }

    public function update(Request $request, $id)
    {
        $this->genre->fill($request->all());
        $this->genre->save();
        return response()->json(["mensaje" => "listo"]);
    }

    public function destroy($id)
    {
        $this->genre->delete();
        return response()->json(["mensaje"=>"borrado"]);
    }
}