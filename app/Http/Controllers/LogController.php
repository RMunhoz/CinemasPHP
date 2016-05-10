<?php

namespace CinemaPHP\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Session;
use CinemaPHP\Http\Requests;
use CinemaPHP\Http\Requests\LoginRequest;
use CinemaPHP\Http\Controllers\Controller;

class LogController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])){
            return redirect()->route('admin');
        }
        Session::flash('message-error', 'Dados incorretos');
        return redirect()->route('index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
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
