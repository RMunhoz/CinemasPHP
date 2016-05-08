<?php

namespace CinemaPHP\Http\Controllers;

use Illuminate\Http\Request;

use CinemaPHP\Http\Requests;
use CinemaPHP\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function contacto()
    {
		return view('contacto');
    }

    public function reviews()
    {
    	return view('reviews');
    }

    public function admin()
    {
        return view('admin.index');
    }
}
