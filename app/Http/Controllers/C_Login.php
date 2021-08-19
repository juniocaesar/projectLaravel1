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
        $request->validate([
            'username' => 'required | max:16',
            'password' => 'required | max:60'
        ]);
        dd($request);
        // $req_username = $request->input('username');
        // $req_password = $request->input('password');
        // $m_user = new M_User();
        // $result = $m_user->getCredential($req_username, $req_password);
        // $isExist = count($result) > 0;
        // if ($isExist) {

        // }
    }
}
