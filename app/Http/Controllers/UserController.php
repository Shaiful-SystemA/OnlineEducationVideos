<?php
namespace App\Http\Controllers;

use App\UserEducation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



Class UserController extends Controller
{


    public function postSignUp(Request $request)
    {

        $this->validate($request,[
            'email' => 'required|email|unique:UserEducation',
            'user_name'=>'required|max:120',
            'password' => 'required|min:4'
        ]);

        $email = $request['email'];
        $user_name = $request['user_name'];
        $password = bcrypt($request['password']);


        $UserEducation = new UserEducation();
        $UserEducation->email = $email;
        $UserEducation->user_name = $user_name;
        $UserEducation->password = $password;


        $UserEducation->save();

        Auth::login($user_name);

        return redirect()->back();

    }

    public function getDashBoard()
    {
        return view('dashboard');
    }

    public function postSignIn(Request $request)
    {

       if (Auth::attempt(['email' => $request['email'], 'password' =>$request['password']])){
           return redirect()->route('dashboard');
       }

       return redirect()->back();


    }


}