<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function postSignUp(Request $request)
    {
        $email = $request['email'];
        $name = $request['name'];
        $location = $request['location'];
        $gender = $request['gender'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->name = $name;
        $user->location = $location;
        $user->gender = $gender;
        $user->password = $password;

        $user->save();

        return redirect()->back();
    }

    public function postSignIn(Request $request)
    {
        # code...   
    }
}
