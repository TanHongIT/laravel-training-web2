<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Flight;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $obj = new User();
        $users = $obj->all();
       
        return view('users.listUser',['users'=>$users]);
    }
}
