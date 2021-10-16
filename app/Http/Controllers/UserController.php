<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
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

    public  function  edit(User $user) {
        return view('user.partials.edit',compact('user'));
    }

    public function  update(UserUpdateRequest  $request, User $user) {
        $user->document_number = $request->document_number;
        $user->user_name = $request->user_name;
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->save();
        return response()->json([
            'code' => 200,
            'message_title' => 'Usuario actualizado',
            'messsage_description' => 'Se actualizó los datos del usuario'
        ]);
    }

    public  function  destroy(User $user) {
            $user->state = !$user->state;
            $user->save();
            $title = $user->state ? 'Habilitado' : 'Inhabilitado';
            $description = $user->state ? 'Se ha habilitado al usuario' : 'Se ha inhabilitado al usuario';
        return response()->json([
            'code' => 200,
            'message_title' => $title,
            'messsage_description' => $description
        ]);
    }

    public  function  reset(User $user) {
        $user->password = bcrypt($user->document_number);
        $user->require_change_password = 1;
        $user->save();
        return response()->json([
            'code' => 200,
            'message_title' => 'Reset realizado',
            'messsage_description' => "Nueva contraseña: $user->document_number"
        ]);
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
            'message_title' => 'Usuario creado',
            'messsage_description' => 'Se ha creado el usuario sin problemas'
        ]);
    }
}
