<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }

    public function signup(){
        return view('signup');
    }

    public function registration(Request $request)
    {
        $users = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => md5($request->get('password')),
        ]);

        $users->save();
        $request->session()->put('user_registered');
        toastr()->success('Congratulations! You are successfully registered');
        return redirect('/')
            ->with('success', 'Registration Success');
    }

    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $checkuser = User::where(['email' => $email, 'password' => md5($password)])->first();
        if($checkuser != ''){
            $request->session()->put('userid', $checkuser->id);
            $request->session()->put('username', $checkuser->name);
            toastr()->success('Logged in Successfully');
            return redirect('home');
        }else {
            toastr()->error('Invalid Email or Password');
            return redirect('/');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }



}
