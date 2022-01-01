<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
     /**
     * construct middleware to guest
     *
     *
     */

    public function __construct(){
        $this->middleware('auth');
    }


    public function create(){
        return view();
    }

       /**
     * log out auth user & destroy session.
     *
     * @param void
     * 
     */

    public function destroy(){

        auth()->logout();

        return redirect('/login');

    }
}
