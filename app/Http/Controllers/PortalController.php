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

require '../vendor/autoload.php';
use Aws;
use Mailgun\Mailgun;



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

            $client = new Clients();

            $client->user_id = Auth::id();
            $client->first_name = $request->input('first_name');

            if ($request->input('middle_name') != null) {
                  $client->middle_name = $request->input('middle_name');
            }

            $client->last_name;

            if ($request->input('suffix') != null) {
                 $client->suffix = $request->input('suffix');
            }


             if ($request->input('website_url') != null) {
                     $client->website_url = $request->input('website_url');
            }
        
            $client->business_type = $request->input('business_typess');
            $client->business_activity = $request->input('business_activity');
            $client->business_services = $request->input('business_services');
            $client->business_solutions = $request->input('business_solutions');
            $client->business_ideal_clients = $request->input('business_ideal_clients');
            $client->business_environment = $request->input('business_environment');
            $client->business_issues = $request->input('business_issues');
            $client->business_goal_and_timeframe = $request->input('business_goal_and_timeframe');


            $client->business_services_desired_startup->nullable();

             if ($request->input('business_services_desired_startup') != null) {
                
                $client->business_services_desired_planning_marketing= $request->input('business_services_desired_startup') ;
            }

      
             if ($request->input('business_services_desired_web_development_design') != null) {
                 $client->business_services_desired_web_development_design = $request->input('business_services_desired_web_development_design');
            }


            if ($request->input('business_services_desired_web_seo') != null) {
                $client->business_services_desired_web_seo = $request->input('business_services_desired_web_seo');
            }

      

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
            'ssn'  => 'required|numeric',
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
            'dependents_num' => '',
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
            'filenames.*' => 'mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf',
            'direct_deposit' => 'required',
            'direct_deposit_information_change' => '',
            'bank_routing_number' =>'',
            'bank_account_number' => '',
            'paper_file_or_E-file' => 'required',
            'reason_for_paper_filing' => 'required',
            'receive_your_completed_return' => 'required',

        ]);


    

        if (auth()->attempt($attributes)) {



        // taxpayer
            $taxpayer = new Taxpayer();

            $taxpayer->user_id = Auth::id();

            $taxpayer->tax_year = $request->input('tax_year');
            $taxpayer->date = date('d-m-Y');
            $taxpayer->first_name = $request->input('first_name');

            if ($request->input('middle_name') != null) {
                  $taxpayer->middle_name = $request->input('middle_name');
            }

         
            $taxpayer->last_name = $request->input('last_name');

             if ($request->input('suffix') != null) {
                  $taxpayer->suffix = $request->input('suffix');
            }

      
            $taxpayer->ssn = $request->input('ssn');
            $taxpayer->date_of_birth = $request->input('date_of_birth');
            $taxpayer->occupation = $request->input('occupation');
            $taxpayer->email_address = $request->input('email_address');

             if ($request->input('work_phone') != null) {
                 $taxpayer->work_phone = $request->input('work_phone');
            }

       

             if ($request->input('mobile_phone') != null) {
                $taxpayer->mobile_phone = $request->input('mobile_phone');
            }

            $taxpayer->address = $request->input('address');

             if ($request->input('address_2') != null) {
                $taxpayer->address_2 = $request->input('address_2');
            }

            $taxpayer->city = $request->input('city');
            $taxpayer->state = $request->input('state');
            $taxpayer->zip = $request->input('zip');


        // spouse


             if ($request->input('spouse_first_name') != null) {
                
     
            $taxpayer->spouse_first_name = $request->input('spouse_first_name');
           
             if ($request->input('spouse_middle_name') != null) {
                 $taxpayer->spouse_middle_name = $request->input('spouse_middle_name');
            }

            $taxpayer->spouse_last_name = $request->input('spouse_last_name');

        
             if ($request->input('spouse_suffix') != null) {
                    $taxpayer->spouse_suffix = $request->input('spouse_suffix');
            }

            $taxpayer->spouse_ssn = $request->input('spouse_ssn');
            $taxpayer->spouse_date_of_birth = $request->input('spouse_date_of_birth');
            $taxpayer->spouse_occupation = $request->input('spouse_occupation');
            $taxpayer->spouse_email_address = $request->input('spouse_email_address');

            if ($request->input('spouse_work_phone') != null) {
                $taxpayer->spouse_work_phone = $request->input('spouse_work_phone');
            }
         
            if ($request->input('spouse_mobile_phone') != null) {
                $taxpayer->spouse_mobile_phone = $request->input('spouse_mobile_phone');
            }
      

        }

     

        // payment 

           $taxpayer->filing_status = $request->input('filing_status');
           $taxpayer->direct_deposit = $request->input('direct_deposit');

           if ($request->input('direct_deposit_information_change') != null) {

                $taxpayer->direct_deposit_information_change = $request->input('direct_deposit_information_change');
               
           }
           
           $taxpayer->bank_routing_number = $request->input('bank_routing_number');
           $taxpayer->bank_account_number = $request->input('bank_account_number');
           $taxpayer->paper_file_or_E_file = $request->input('paper_file_or_E-file');
           $taxpayer->reason_for_paper_filing = $request->input('reason_for_paper_filing');
           $taxpayer->receive_your_completed_return = $request->input('receive_your_completed_return');


        // dependents


        $dependents_num = $request->input('dependents_num');


        if ($dependents_num > 0) {
 
            $dependents_first_name = $request->input('dependents_first_name');
            $dependents_middle_name = $request->input('dependents_middle_name');
            $dependents_last_name = $request->input('dependents_last_name');
            $dependents_suffix = $request->input('dependents_suffix');
            $dependents_ssn = $request->input('dependents_ssn');
            $dependents_date_of_birth = $request->input('dependents_date_of_birth');
            $dependents_relationship = $request->input('dependents_relationship');
            $dependents_child_care = $request->input('dependents_child_care');
            $dependents_college_tuition = $request->input('dependents_college_tuition');
            $dependents_health_insurance = $request->input('dependents_health_insurance');




            if ($dependents_health_insurance == "false") {


                $dependents_months_insured = array();
            
                $months_insured_january = $request->input('months_insured_january');
                $months_insured_febuary = $request->input('months_insured_febuary');
                $months_insured_march = $request->input('months_insured_march');
                $months_insured_april = $request->input('months_insured_april');
                $months_insured_may = $request->input('months_insured_may');
                $months_insured_june = $request->input('months_insured_june');
                $months_insured_july = $request->input('months_insured_july');
                $months_insured_august = $request->input('months_insured_august');
                $months_insured_september = $request->input('months_insured_september');
                $months_insured_october = $request->input('months_insured_october');   
                $months_insured_november = $request->input('months_insured_november');   
                $months_insured_december = $request->input('months_insured_december'); 



                for ($i=0; $i < $dependents_num; $i++) { 

                    $dependents_months_insured[$i] = "";


                    if (isset($months_insured_january)) {
                
                        for ($x=0; $x <sizeof($months_insured_january) ; $x++) { 

                            if (str_contains($months_insured_january[$x], $i)) {

                                $dependents_months_insured[$i] =  $dependents_months_insured[$i] .',january'; 
                            }
                        

                        }
                    }


                     if (isset($months_insured_febuary)) {

                        for ($x=0; $x <sizeof($months_insured_febuary) ; $x++) { 

                            if (str_contains($months_insured_febuary[$x], $i)) {

                                $dependents_months_insured[$i] =  $dependents_months_insured[$i] .',febuary'; 
                            }
                    

                        }
                    }


                     if (isset($months_insured_march)) {
                     
                        for ($x=0; $x <sizeof($months_insured_march) ; $x++) { 

                            if (str_contains($months_insured_march[$x], $i)) {

                                $dependents_months_insured[$i] =  $dependents_months_insured[$i] .',march'; 
                            }

                    

                        }
                    }


                     if (isset($months_insured_april)) {
                        for ($x=0; $x <sizeof($months_insured_april) ; $x++) { 

                            if (str_contains($months_insured_april[$x], $i)) {

                                $dependents_months_insured[$i] =  $dependents_months_insured[$i] .',april'; 
                            }

                        }
                    }


                     if (isset($months_insured_may)) {
                     
                        for ($x=0; $x <sizeof($months_insured_may) ; $x++) { 

                            if (str_contains($months_insured_may[$x], $i)) {

                                $dependents_months_insured[$i] =  $dependents_months_insured[$i] .',may'; 
                            }

                        }
                    }


                     if (isset($months_insured_june)) {

                        for ($x=0; $x <sizeof($months_insured_june) ; $x++) { 

                            if (str_contains($months_insured_june[$x], $i)) {

                                $dependents_months_insured[$i] =  $dependents_months_insured[$i] .',june'; 
                            }

                        }
                    }



                     if (isset($months_insured_july)) { 

                        for ($x=0; $x <sizeof($months_insured_july) ; $x++) { 

                            if (str_contains($months_insured_july[$x], $i)) {

                                $dependents_months_insured[$i] =  $dependents_months_insured[$i] .',july'; 
                            }

                        }
                    }



                     if (isset($months_insured_august)) {
                     
                        for ($x=0; $x <sizeof($months_insured_august) ; $x++) { 

                            if (str_contains($months_insured_august[$x], $i)) {

                                $dependents_months_insured[$i] =  $dependents_months_insured[$i] .',august'; 
                            }
                        }
                    }



                     if (isset($months_insured_september)) {

                        for ($x=0; $x <sizeof($months_insured_september) ; $x++) { 

                            if (str_contains($months_insured_september[$x], $i)) {

                                $dependents_months_insured[$i] =  $dependents_months_insured[$i] .',september'; 
                            }   

                        }
                    }



                     if (isset($months_insured_october)) {

                        for ($x=0; $x <sizeof($months_insured_october) ; $x++) { 

                            if (str_contains($months_insured_october[$x], $i)) {

                                $dependents_months_insured[$i] =  $dependents_months_insured[$i] .',october'; 
                            }

                        }
                    }



                     if (isset($months_insured_november)) {
                     
                        for ($x=0; $x <sizeof($months_insured_november) ; $x++) { 

                            if (str_contains($months_insured_november[$x], $i)) {

                                $dependents_months_insured[$i] =  $dependents_months_insured[$i] .',november'; 
                            }

                        }

                    }



                     if (isset($months_insured_december)) {

                        for ($x=0; $x <sizeof($months_insured_december) ; $x++) { 

                            if (str_contains($months_insured_december[$x], $i)) {

                                $dependents_months_insured[$i] =  $dependents_months_insured[$i] .',december'; 
                            }
                    

                        }
                    }
           
                    $dependents = new Dependents();

                    $dependents->user_id = Auth::id();
                    $dependents->first_name =  $dependents_first_name[$i];

                    if (isset($dependents_middle_name[$i])) {
                         $dependents->middle_name = $dependents_middle_name[$i];
                    }
                    
                    $dependents->last_name =  $dependents_last_name[$i];

                    if (isset($dependents->suffix[$i])) {
                         $dependents->middle_name = $dependents_suffix[$i];
                    }


                    $dependents->ssn = $dependents_ssn[$i];
                    $dependents->date_of_birth = $dependents_date_of_birth[$i];
                    $dependents->relationship =  $dependents_relationship[$i];
                    $dependents->child_care = $dependents_child_care[$i];
                    $dependents->college_tuition = $dependents_college_tuition[$i];
                    $dependents->health_insurance = $dependents_health_insurance[$i];

                    if (isset($dependents_months_insured[$i])) {
                          $dependents->months_insured = $dependents_months_insured[$i];
                    }

                    $dependents->save();


  
                }



            }else{




                for ($i=0; $i <sizeof($dependents_num); $i++) { 
                    
                    $dependents = new Dependents();

                    $dependents->user_id = Auth::id();
                    $dependents->first_name =  $dependents_first_name[$i];

                    if (isset($dependents_middle_name[$i])) {
                         $dependents->middle_name = $dependents_middle_name[$i];
                    }
                    
                    $dependents->last_name =  $dependents_last_name[$i];

                    if (isset($dependents->suffix[$i])) {
                         $dependents->middle_name = $dependents_suffix[$i];
                    }


                    $dependents->ssn = $dependents_ssn[$i];
                    $dependents->date_of_birth = $dependents_date_of_birth[$i];
                    $dependents->relationship =  $dependents_relationship[$i];
                    $dependents->child_care = $dependents_child_care[$i];
                    $dependents->college_tuition = $dependents_college_tuition[$i];
                    $dependents->health_insurance = $dependents_health_insurance[$i];


                    $dependents->save();

                }

            }
        }
 


        // questionnaires 


            $estimated_taxes_paid = $request->input('estimated_taxes_paid');
            $estimated_taxes_paid_date= $request->input('estimated_taxes_paid_date');
            $estimated_taxes_paid_and_date = "";
   
            if (isset($estimated_taxes_paid)) {

                $estimated_taxes_paid_and_date = "";
                
                for ($i=0; $i <sizeof($estimated_taxes_paid) ; $i++) { 
                    
                    if (isset($estimated_taxes_paid_date)) {
                        
                         $estimated_taxes_paid_and_date = $estimated_taxes_paid_and_date .",".$estimated_taxes_paid[$i] .",". $estimated_taxes_paid_date[$i];
                    }
                }
            }

            $questionnaires = new Questionnaires();

            $questionnaires->user_id = Auth::id();

            $questionnaires->someone_claim_you_or_your_spouse_as_dependent = $request->input('someone_claim_you_or_your_spouse_as_dependent');
           

            $questionnaires->received_correspondence_irs_prior_year_tax_returns = $request->input('received_correspondence_irs_prior_year_tax_returns');

            $questionnaires->refer_name = $request->input('refer_name');
       
            $questionnaires->purchase_motor_vehicle = $request->input('purchase_motor_vehicle');
            
            $questionnaires->attend_school_fulltime_student = $request->input('attend_school_fulltime_student');
            
            $questionnaires->purchase_supplies_used_as_educator = $request->input('purchase_supplies_used_as_educator');
         
            $questionnaires->purchase_install_energy_efficient_home_item = $request->input('purchase_install_energy_efficient_home_item');
          
            $questionnaires->paid_estimated_tax_payments = $request->input('paid_estimated_tax_payments');
  
            $questionnaires->estimated_taxes_paid_and_date = $estimated_taxes_paid_and_date;

            $questionnaires->save();





            // file upload


            $filenames= $request->file('filenames');

               if (isset($filenames)) {


                    $s3=" ";
                    $s3 = new Aws\S3\S3Client([
                        'version'  => 'latest',
                        'region'   => 'us-east-1',
                    ]);
 

                    for ($i=0; $i <count($filenames) ; $i++) { 

                        //  $s3->putObject(array(
                        // 'Bucket' => 'emg-business-consultants',
                        // 'Key'    => 'client-documents/'. $filenames[$i]->getClientOriginalName(),
                        // 'Body'   => fopen($filenames[$i]->path(), 'r')
                        // ));

                         $documentation = new Documentations();

                         $documentation->user_id = Auth::id();
                         $documentation->filenames = 'client-documents/'.$filenames[$i]->getClientOriginalName();

                         $documentation->save();
                     

                    }

            }


            $request->session()->regenerate();
            
            return redirect('/TaxPortal');
        }

        return redirect()->back()->withErrors();
    }
        
    
}
