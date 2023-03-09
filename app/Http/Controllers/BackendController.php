<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Admin;
use Session;
Session_start();

class BackendController extends Controller
{
    function dashboard(){
        return view('backend.welcome');
    }
    function login(){
        return view('backend.login');
    }
    function show_dashboard(Request $request){
        $admin_email = $request->email;
        $admin_password = md5($request->password);
        $result = Admin::where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();

        if($result){
            Session::put('admin_id', $result->admin_id);
            Session::put('admin_name', $result->admin_name);
            return Redirect::to('/dashboard');
        }else{
            Session::put('message', 'Email or Password Invalid');
            return Redirect::to('/login');
        }
    }
}
