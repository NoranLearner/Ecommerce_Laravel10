<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;

class LoginController extends Controller
{

    public function getLogin(){
        return view('dashboard.auth.login');
    }

    public function postLogin(AdminLoginRequest $request){

        // return $request;

        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            // notify()->success('تم الدخول بنجاح  ');
            return redirect() -> route('admin.dashboard');
        }

        // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');

        return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);

    }

    private function getGuard()
    {
        return auth('admin');
    }

    public function logout(){

        $guard = $this->getGuard();

        $guard -> logout();

        return redirect()->route('admin.getLogin');

    }

}
