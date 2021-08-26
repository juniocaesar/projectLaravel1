<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_User;
use Illuminate\Support\Arr;

class C_Login extends Controller {

    public function loginView(){
        return view('V_Login');
    }

    public function loginAuth(Request $request){

        $response = redirect('/login')->with('error','Username atau password salah!');

        $request->validate([
            'username' => 'required | max:16',
            'password' => 'required | max:60'
        ]);

        $requestedUsername = $request -> username;
        $requestedPassword = $request -> password;
        $mUser = new M_User();
        $userData = $mUser -> getCredential($requestedUsername, $requestedPassword);
        $isValid = count($userData) == 1;

        if ($isValid) {
            $response = redirect('/dashboard/super_admin')->with('success','Berhasil Login');
        }
        return $response;
    }
}
