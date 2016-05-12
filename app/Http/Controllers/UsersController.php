<?php

namespace CinemaPHP\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;

use CinemaPHP\User;
use CinemaPHP\Http\Requests;
use CinemaPHP\Http\Requests\UserCreateRequest;
use CinemaPHP\Http\Requests\UserUpdateRequest;
use CinemaPHP\Http\Controllers\Controller;

class UsersController extends Controller
{
	private $userModel;

	public function __construct(User $user)
	{  
        $this->middleware('auth');
        $this->middleware('admin');
        $this->beforeFilter('@find',['only'=>['edit','update', 'destroy']]);
		//$this->userModel = $user;
	}

    public function find(Route $route)
    {
        $this->user = User::find($route->getParameter('user'));
    }

    public function index()
    {
    	//$users = User::all();
    	//$users = $this->userModel->all();
        //Exibe somente os dados já excluidos
        //$users = $this->userModel->onlyTrashed()->paginate(4);
        $users = User::paginate(4);
    	return view('user.index', compact('users'));
    }

    public function create()
    {
    	return view('user.create');
    }

    public function store(UserCreateRequest $request)
    {
    	$input = $request->all();
    	//$input['password'] = bcrypt($input['password']);
    	$user = User::fill($input);
    	$user->save();
    	Session::flash('message', 'Usuario criado com sucesso!');
    	return redirect()->route('user.index');
    }

    public function edit($id)
    {
    	//$user = $this->userModel->find($id);
    	return view('user.edit', ['user'=>$this->user]);
    }

    public function update(UserUpdateRequest $request, $id)
    {
    	//$user = User::find($id);
    	$this->user->fill($request->all());
    	$this->user->save();
    	Session::flash('message', 'Usuario editado com sucesso!');
    	return redirect()->route('user.index');	
    }

    public function show($id)
    {
        //
    }

    public function destroy($id)
    {
    	User::find($id)->delete();
        //$this->user->delete();
        Session::flash('message', 'Usuario deletado com sucesso!');
    	return redirect()->route('user');	
    }
}
