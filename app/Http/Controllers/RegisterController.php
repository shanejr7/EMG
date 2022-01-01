<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Route;
use Illuminate\Support\Facades\Auth;
use App\Providers\AppServiceProvider;
use App\Models\User;


class RegisterController extends Controller
{

     /**
     * construct middleware to guest
     *
     *
     */

    public function __construct(){
        $this->middleware('guest');
    }

    /**
     * Show the form to register a new account.
     *
     * @return \Illuminate\View\View
     */

    public function createRegister()
    {
        return view('/emg-main/web/MalexHTML/App/dist/registration');
    }


       /**
     * register validated user to dashboard.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {

        // return $request->all();

        $attributes =  $request->validate([
            'email'=> 'required|email|max:255',
            'password' => 'required|min:7|max:255'
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        // $request->session()->regenerate();

        return redirect('/dashboard');

    }
}
