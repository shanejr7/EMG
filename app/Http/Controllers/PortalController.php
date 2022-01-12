<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Notification;
use App\Models\Clients;
use App\Models\Taxpayer;
use App\Models\Dependents;
use App\Models\Questionnaires;
use App\Models\Documentations;





class PortalController extends Controller
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

        return view('/emg-main/web/MalexHTML/App/dist/dashboard',['notifications' => Notification::where('user_id','=',Auth::id())->get()]);
    }



    /**
     * Show account .
     *
     * @return \Illuminate\View\View
     */
    public function createAccount()
    {
        return view('/emg-main/web/MalexHTML/App/dist/account',['notifications' => Notification::where('user_id','=',Auth::id())->get()]);
    }



    /**
     * Show business portal.
     *
     * @return \Illuminate\View\View
     */
    public function createClientPortal()
    {

        return view('/emg-main/web/MalexHTML/App/dist/client-portal',['notifications' => Notification::where('user_id','=',Auth::id())->get()],['client' => Clients::where('user_id','=',Auth::id())->first()]);
    }



    /**
     * Show tax portal .
     *
     * @return \Illuminate\View\View
     */
    public function createTaxPortal()
    {
        return view('/emg-main/web/MalexHTML/App/dist/tax-portal',['notifications' => Notification::where('user_id','=',Auth::id())->get()],['taxpayer' => Taxpayer::where('user_id','=',Auth::id())->first()]);
    }



    /**
     * Remove user notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function removeUserNotification(Notification $notification)
    {


     
        if ($notification->where('user_id','=',Auth::id())->where('id','=',$notification->id)->delete())
        {
            
            return redirect('/dashboard');
        }

           return redirect()->back()->withErrors();
    }


    /**
     * validated user account form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function accountUpdateSubmission(Request $request, string $attribute)
    {

    

        $attributes = '';

        $email = $request->input('email');
        $name = $request->input('name');




        if ($email && $attribute == 'email') {



            $attributes =  $request->validate([
            'email'=> 'required|email',

        ]);

        }else if($attribute == 'email'){

                $attributes =  $request->validate([
            'email'=> 'required|email',

        ]);

        }


        

        if ($name  && $attribute == 'name') {

            $attributes =  $request->validate([
            'name'=> 'required',

        ]);


        }else if($attribute == 'name'){

            $attributes =  $request->validate([
            'name'=> 'required',

        ]);



        }

        if ($attributes) {

              $user = auth()->user();


            if ($attribute == 'email') {


                $user->email = $attributes['email'];

                $user->save();
                

            }else if($attribute == 'name'){


                $user->name = $attributes['name'];

                $user->save();

            }


            $request->session()->regenerate();
            
            return redirect('/account');
        }


        return redirect()->back()->withErrors();
    }


    /**
     * validated client business form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function clientFormSubmission(Request $request)
    {

        $attributes =  $request->validate([
            'first_name' => 'required',
            'middle_name' => '',
            'last_name' => 'required',
            'suffix' => '',
            'business_type' =>'required',
            'business_activity' =>'required',
            'business_services' =>'required',
            'business_solutions' =>'required',
            'business_ideal_clients' =>'required',
            'business_environment' =>'required',
            'business_issues' =>'required',
            'business_goal_and_timeframe' =>'required',
            'website_url' =>'',
            'business_services_desired_startup' => '',
            'business_services_desired_planning_marketing' =>'',
            'business_services_desired_web_development_design' =>'',
            'business_services_desired_web_seo' => '',

        ]);



        if ($attributes) {

            Clients::create($attributes);
      

            $request->session()->regenerate();

            
            return redirect('/ClientPortal');
        }

    
        return redirect()->back()->withErrors();
    }


    /**
     * validated user tax form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function taxFormSubmission(Request $request)
    {

         // $dependents_first_name= $request->input('dependents_first_name');

         // $estimated_taxes_paid = $request->input('estimated_taxes_paid');
         // $estimated_taxes_paid_date= $request->input('estimated_taxes_paid_date');
          // $filenames= $request->hasFile('filenames');



        // date is automatically inserted
            // $date= $request->input('date');
            //          dd(date("m-d-Y"));
       
        // loop through depedents
            // store user_id with dependent row
            // increment id row++
            // concat months to each selected dependent
            // january,...,... months_insured months_insured_january[]....

        // loop through files uploaded
            // store user_id with filenames[] 
            // path to s3 bucket
            // increment id row++;

        // concat estimated taxes and dates 20.00,11/21/21,...,...
            //estimated_taxes_paid
            //estimated_taxes_paid_date[]
            //estimated_taxes_date[]


        // create payment other than direct deposit

        // register email mailgun

        // forgot password mailgun

        // tax submission mailgun

        // client information mailgun

        // if time is available finish application with admin page

        // upload new migration

 
 
        $attributes =  $request->validate([
            'tax_year' => 'required',
            'date' => '',
            'first_name'=> 'required|email',
            'last_name' => 'required',
            'middle_name' => '',
            'suffix' => '',
            'ssn'  => 'required',
            'date_of_birth'  => 'required',
            'occupation'  => 'required',
            'email_address'  => 'required',
            'work_phone'  => '',
            'mobile_phone'  => '',
            'address'  => 'required',
            'address_2' => '',
            'city'  => 'required',
            'state'  => 'required',
            'zip'  => 'required',
            'spouse_first_name' => '',
            'spouse_middle_name' => '',
            'spouse_last_name' => '',
            'spouse_suffix' => '',
            'spouse_ssn' => '',
            'spouse_date_of_birth' => '',
            'spouse_occupation' => '',
            'spouse_email_address' => '',
            'spouse_work_phone' => '',
            'spouse_mobile_phone' => '',
            'filing_status'  => 'required',
            'dependents_first_name.*' => 'required',
            'dependents_middle_name.*' => '',
            'dependents_last_name.*' => 'required',
            'dependents_suffix.*' => '',
            'dependents_ssn.*' => 'required',
            'dependents_date_of_birth.*' => 'required',
            'dependents_relationship.*' => 'required',
            'dependents_child_care.*' => 'required',
            'dependents_college_tuition.*' => 'required',
            'dependents_health_insurance' => '', 
            'someone_claim_you_or_your_spouse_as_dependent' => 'required',
            'received_correspondence_irs_prior_year_tax_returns' => 'required',
            'refer_name' => 'required',
            'purchase_motor_vehicle' => 'required',
            'attend_school_fulltime_student' => 'required',
            'purchase_supplies_used_as_educator' => 'required',
            'purchase_install_energy_efficient_home_item' => 'required',
            'paid_estimated_tax_payments' => 'required',
            'purchase_motor_vehicle' => 'required',
            'attend_school_fulltime_student' => 'required',
            'purchase_supplies_used_as_educator' => 'required',
            'purchase_install_energy_efficient_home_item' => 'required',
            'paid_estimated_tax_payments' => 'required',
            'estimated_taxes_paid.*' => '',
            'estimated_taxes_paid_date.*' => '',
            'filenames.*' => '',
            'direct_deposit' => 'required',
            'direct_deposit_information_change' => '',
            'bank_routing_number' =>'',
            'bank_account_number' => '',
            'paper_file_or_E-file' => 'required',
            'reason_for_paper_filing' => 'required',
            'receive_your_completed_return' => 'required',

        ]);


    

        if (auth()->attempt($attributes) && auth()->attempt($attributes1)) {

            $request->session()->regenerate();
            
            return redirect('/TaxPortal');
        }

        return redirect()->back()->withErrors();
    }
        
    
}
