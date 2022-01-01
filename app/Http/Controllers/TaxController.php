<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;




class TaxController extends Controller
{
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
     * Show the form to login to account.
     *
     * @return \Illuminate\View\View
     */
    public function createLogin()
    {
        return view('/emg-main/web/MalexHTML/App/dist/login');
    }


      /**
     * Show dashboard account.
     *
     * @return \Illuminate\View\View
     */
    public function createDashboard()
    {
        return view('/emg-main/web/MalexHTML/App/dist/dashboard');
    }
        
    
}
