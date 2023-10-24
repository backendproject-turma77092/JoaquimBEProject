<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

// public function pode ser usada no web.php route, private não pode

class UsersController extends Controller
{

    public function allUsers(){

        $users= $this ->getUsers();



    return view('users.all_users', compact('users'));
    }

    public function AddUser(){
    return view('users.add_user');
    }

    public function getUser($id){
        $ourUser = DB::table('users')->where('id', $id)->first();
        return view('users.get_user', compact(
            'ourUser'
        ));
        }

     protected function getUsers (){
        $users = DB::table('users')
        ->get();
        return $users;
     }

};


