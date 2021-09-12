<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Filters\UserFilter;
use App\User;

class UserController extends Controller
{
    //

    public function index(UserFilter $filter) {
        
        if($filter->request->ajax()) {
            $users = User::filter($filter)->paginate(15);
            return view('user.partials.user-table',compact('users',$users));
        }

        return view('user.index');
    }
}
