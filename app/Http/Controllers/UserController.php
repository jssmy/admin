<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use Illuminate\Http\Request;
use App\Http\Filters\UserFilter;
use App\User;

class UserController extends Controller
{
    //

    public function index(UserFilter $filter) {
        if($filter->request->ajax()) {
            $users = User::filter($filter)->with('user_created')->paginate(15);
            return view('user.partials.user-table',compact('users',$users));
        }

        return view('user.index');
    }

    public  function  edit() {

    }

    public function  update() {

    }

    public  function  destroy() {

    }

    public  function  create() {
        return view('user.partials.create');
    }

    public  function store(UserStoreRequest  $request) {
        User::create([
            'document_number'=> $request->document_number,
            'user_name' => $request->user_name,
            'name' => $request->name,
            'last_name' => $request->last_name,
            'password' => bcrypt($request->password),
            'user_created_id' => auth()->id()
        ]);

        return response()->json([
            'code' => 200,
            'message' => 'Operación exitosa'
        ]);
    }
}
