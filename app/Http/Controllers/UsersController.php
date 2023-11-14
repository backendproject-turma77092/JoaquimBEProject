<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

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
            'ourUser',
        ));
        }
        public function createUser(Request $request){

            if(isset($request->id)){
                $request->validate([
                    'name' => 'required|string',
                    'phone' => 'string',

                ]);
                User::where('id', $request->id)
                    ->update([
                    'name' => $request->name,
                    'phone' => $request->phone,
                ]);
                return redirect()->route('user.all')->with('message','Utilizador atualizado');

            }else{
                $request->validate([
                    'name' => 'required|string',
                    'email' => 'required|email|unique:users',
                    'password' => 'required|min:4',
                    'phone' => 'required|string',
                ]);
                User::insert([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'phone' => $request->phone,

                ]);

                return redirect()->route('user.all')->with('message','Utilizador criado!');
            }

        }
        public function deleteUser($id)
        {
            DB::beginTransaction();

            try {
                $ourUser = User::findOrFail($id);

                if ($ourUser) {
                    $ourUser->purchases()->delete();


                    $ourUser->delete();

                    DB::commit();

                    return redirect()->route('user.all')->with('message', 'Utilizador apagado!');
                }
            } catch (\Exception $e) {

                DB::rollBack();

                return redirect()->route('user.all')->with('error', 'Erro ao excluir o utilizador.');
            }

            return redirect()->route('user.all')->with('error', 'Utilizador não encontrado.');
        }

     protected function getUsers (){
        $users = User::all();
        return $users;
     }

};


