<?php

namespace CinemaPHP\Http\Controllers;

use Illuminate\Http\Request;

use CinemaPHP\User;
use CinemaPHP\Http\Requests;
use CinemaPHP\Http\Controllers\Controller;

class UsersController extends Controller
{
	private $userModel;

	public function __construct(User $user)
	{
		$this->userModel = $user;
	}

    public function index()
    {
    	$users = User::all();
    	return view('user.index', compact('users'));
    }

    public function create()
    {
    	return view('user.create');
    }

    public function store(Request $request)
    {
    	$input = $request->all();
    	$input['password'] = bcrypt($input['password']);
    	$user = $this->userModel->fill($input);
    	$user->save();
    	return redirect()->route('user.index');
    }
}
