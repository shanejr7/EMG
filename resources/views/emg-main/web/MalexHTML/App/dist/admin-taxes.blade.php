<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/style.min.css">
        <title>Admin | EMG - Business Consulting Agency</title>

        <!-- Useful meta tags -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="robots" content="index, follow, noodp">
        <meta name="googlebot" content="index, follow">
        <meta name="google" content="notranslate">
        <meta name="format-detection" content="telephone=no">

        <!-- Favicon -->
        <!-- <link rel="icon" type="image/png" href="assets/img/favicon/favicon-16x16.ico" sizes="16x16"> -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      
   
    </head>
    <body class="single-post title-opacity-true header-absolute-true header-fixed-true">
       <!--  <div class="loading">
            <div class="wrapper h-100">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="loading-content">
                        <div class="logo logo-primary">
                            <img class="animated zoomin" src="assets/img/logo/logo-dark.svg" alt="Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div> --><!-- .loading -->

        <header id="header-custom-true" class="site-header " >
            <div class="wrapper">
                <div class="header-content d-flex justify-content-between">
                    <div class="header-left align-self-center">
                     <div class="header-logo">
                 
                                <h3 class="large title">EMG Business Consulting LLC</h3>
                           
                        </div>
                    </div>

                <div class="header-right d-flex justify-content-end">
                        <div class="d-flex align-items-center">
                            <div class="menu">
                                <nav class="menu-primary">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <h3 id="color">Administration</h3>
                                        </li>

                                        <li class="nav-item">
                                            <form method="POST" action="/logout">
                                                @csrf
                                                <button style="border:none; background: transparent;"  type="submit">Logout</button>

                                            </form>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                         <!--    <div class="search-toggle adv-light">
                                <button type="button" class="btn btn-lg btn-outline-tertiary btn-round p-0 min-w-auto" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></button>
                            </div> -->

                           <div class="menu-toggle adv-light mr-0">
                                <button type="button" class="btn btn-lg btn-outline-custom btn-round p-0 min-w-auto" data-toggle="modal" data-target="#menu-modal"><i class="fas fa-bars"></i></button>
                            </div>

                            <div class="menu-toggle adv-dark">
                                <button type="button" class="btn btn-lg btn-secondary btn-hover-main-secondary btn-round p-0 min-w-auto" data-toggle="modal" data-target="#menu-modal"><i class="fas fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- .site-header -->

        <main id="main" class="site-main ">
            <div id="page-title" class="page-title-ml" style="margin-bottom:1em;">
                <div class="wrapper">
                   <!--  <div class="title">
                        
                        <h4 class="large"> @auth
                        <h4 class="large">Welcome, {{auth()->user()->email}}</h4>
                        @endauth</h4>
                    
                     
                    </div> -->

                    <div class="title-opacity">
                        <div class="title-opacity-text">EMG</div>
                    </div>
                </div>
            </div>
            <!-- #page-title -->

            <div id="page-content" class="row" style="margin-left: 4px; background-color: orange;">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                        <li class="nav-item btn btn-primary" >
                            <a class="nav-link" style="width: 12em; background-color: transparent; border-style: none;" id="home-tab"  href="/adminNotifications" role="tab" aria-controls="home" aria-selected="true">Notifications <span class="badge badge-dark">{{count($notifications)}}</span></a>
                        </li>

                        <li class="nav-item btn btn-primary">
                            <a class="nav-link" style="width: 12em; background-color: transparent; border-style: none;" id="profile-tab"  href="/adminAccount" role="tab" aria-controls="profile" aria-selected="false">Account</a>
                        </li>

                         <li class="nav-item btn btn-primary">
                            <a class="nav-link " style="width: 12em; background-color: transparent; border-style: none;" id="client-tab" href="/adminClients" role="tab" aria-controls="client" aria-selected="false">Client Information</a>
                        </li>

                        <li class="nav-item btn btn-primary">
                            <a class="nav-link active" style="width: 12em; background-color: transparent;  border-style: none;" id="taxPortal-tab" href="/adminTaxes" role="tab" aria-controls="taxPortal" aria-selected="false">Tax Submissions</a>
                        </li>

                    </ul>
        
            </div>
 
        </div>

 
            <div id="page-content" class="spacer " style="margin-top:1em;">
                <div class="wrapper">
                    <div class="content">
                        <div id="single">

                            <div class="row gutter-width-md">

                                <div class="tab-content" id="myTabContent">
  
                                   

                                    <div class="tab-pane active" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 "style="margin-top:1.34em;">
                                        @if(isset($taxpayer) && sizeof($taxpayer) > 0)
                                          @foreach ($taxpayer as $taxpayers)

                                            <table class="table">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Tax year</th>
                                                    <th scope="col">Date submitted</th>
                                                    <th scope="col">First name</th>
                                                    <th scope="col">Middle name</th>
                                                    <th scope="col">Last name</th>
                                                    <th scope="col">Suffix</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                <th scope="row">{{$taxpayers->user_id}}</th>
                                                @if($taxpayers->tax_submission_status == null)
                                                <td style="color:orange">New submission</td>
                                                @endif
                                                @if($taxpayers->tax_submission_status != null)
                                                <td style="color:orange">{{$taxpayers->tax_submission_status}}</td>
                                                @endif
                                                <td>{{$taxpayers->tax_year}}</td>
                                                <td>{{$taxpayers->date}}</td>
                                                <td>{{$taxpayers->first_name}}</td>
                                                <td>{{$taxpayers->middle_name}}</td>
                                                <td>{{$taxpayers->last_name}}</td>
                                                <td>{{$taxpayers->suffix}}</td>
                                                </tr>
                                                </tbody>
                                                </table>


                                            <table class="table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">SSN</th>
                                                    <th scope="col">Date of Birth</th>
                                                    <th scope="col">Occupation</th>
                                                    <th scope="col">Email address</th>
                                                    <th scope="col">Work phone</th>
                                                    <th scope="col">Mobile phone</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                <th scope="row">{{$taxpayers->ssn}}</th>
                                                <td>{{$taxpayers->date_of_birth}}</td>
                                                <td>{{$taxpayers->occupation}}</td>
                                                <td>{{$taxpayers->email_address}}</td>
                                                <td>{{$taxpayers->work_phone}}</td>
                                                <td>{{$taxpayers->mobile_phone}}</td>
                                          
                                                </tr>
                                                </tbody>
                                                </table>



                                                 <table class="table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Address 2</th>
                                                    <th scope="col">City</th>
                                                    <th scope="col">State</th>
                                                    <th scope="col">Zip</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                <th scope="row">{{$taxpayers->address}}</th>
                                                <td>{{$taxpayers->address_2}}</td>
                                                <td>{{$taxpayers->city}}</td>
                                                <td>{{$taxpayers->state}}</td>
                                                <td>{{$taxpayers->zip}}</td>
                                                </tr>
                                                </tbody>
                                                </table>



                                                @if(isset($taxpayers->spouse_first_name))
                                                 <table class="table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Spouse first name</th>
                                                    <th scope="col">Middle name</th>
                                                    <th scope="col">Last name</th>
                                                    <th scope="col">Suffix</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                <th scope="row">{{$taxpayers->spouse_first_name}}</th>
                                                <td>{{$taxpayers->spouse_middle_name}}</td>
                                                <td>{{$taxpayers->spouse_last_name}}</td>
                                                <td>{{$taxpayers->spouse_suffix}}</td>
                                                </tr>
                                                </tbody>
                                                </table>


                                                 <table class="table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Spouse SSN</th>
                                                    <th scope="col">Date of Birth</th>
                                                    <th scope="col">Occupation</th>
                                                    <th scope="col">Email address</th>
                                                    <th scope="col">Work phone</th>
                                                    <th scope="col">Mobile phone</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                <th scope="row">{{$taxpayers->spouse_ssn}}</th>
                                                <td>{{$taxpayers->spouse_date_of_birth}}</td>
                                                <td>{{$taxpayers->spouse_occupation}}</td>
                                                <td>{{$taxpayers->spouse_email_address}}</td>
                                                <td>{{$taxpayers->spouse_work_phone}}</td>
                                                <td>{{$taxpayers->spouse_mobile_phone}}</td>
                                          
                                                </tr>
                                                </tbody>
                                                </table>
                                                @endif



                                                @if(isset($dependents))
                                                      @foreach ($dependents as $dependent)
                                                        @if($dependent->user_id == $taxpayers->user_id)


                                                <table class="table">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Dependents first name</th>
                                                    <th scope="col">Middle name</th>
                                                    <th scope="col">Last name</th>
                                                    <th scope="col">Suffix</th>
                            
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                <td>{{$dependent->first_name}}</td>
                                                <td>{{$dependent->middle_name}}</td>
                                                <td>{{$dependent->last_name}}</td>
                                                <td>{{$dependent->suffix}}</td>
                                          
                                                </tr>
                                                </tbody>
                                                </table>

                                                <table class="table">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Dependents SSN</th>
                                                    <th scope="col">Date of Birth</th>
                                                    <th scope="col">Relationship</th>
                                                    <th scope="col">Child care</th>
                                                    <th scope="col">College tuition</th>
                                                    <th scope="col">Health insurance</th>
                            
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                <td>{{$dependent->ssn}}</td>
                                                <td>{{$dependent->date_of_birth}}</td>
                                                <td>{{$dependent->relationship}}</td>
                                                @if($dependent->child_care == 0)
                                                <td>no</td>
                                                @endif
                                                @if($dependent->child_care ==1)
                                                  <td>yes</td>
                                                @endif

                                                @if($dependent->college_tuition == 0)
                                                <td>no</td>
                                                @endif
                                                @if($dependent->college_tuition == 1)
                                                <td>yes</td>
                                                @endif

                                                @if($dependent->health_insurance == 0)
                                                <td>no</td>
                                                @endif
                                                @if($dependent->health_insurance ==1)
                                                <td>yes</td>
                                                @endif
                                              
                    
                                                </tr>
                                                </tbody>
                                                </table>

                                                @if(isset($dependent->months_insured))
                                                  <table class="table">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Dependents months insured</th>
                            
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                <td>{{$dependent->months_insured}}</td>
                                         
                                                </tr>
                                                </tbody>
                                                </table>
                                                @endif

                                            @endif
                                        @endforeach

                                    @endif


                                    @if(isset($questionnaires))

                                      @for ($i = 0; $i <  sizeof($questionnaires); $i++)
                                             
                                          @if($questionnaires[$i]['user_id'] == $taxpayers->user_id)

                                                <table class="table">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Claimed as dependent</th>
                                                    <th scope="col">Received correspondence irs prior year tax returns</th>
                                                    <th scope="col">Refer name</th>
                                                    <th scope="col">Purchase motor vehicle</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    @if($questionnaires[$i]['someone_claim_you_or_your_spouse_as_dependent'] == false)
                                                    <th scope="row">no</th>
                                                    @endif
                                                     @if($questionnaires[$i]['someone_claim_you_or_your_spouse_as_dependent'] == true)
                                                    <th scope="row">yes</th>
                                                    @endif

                                                    @if($questionnaires[$i]['received_correspondence_irs_prior_year_tax_returns'] == false)
                                                       <td>no</td>
                                                    @endif
                                                    @if($questionnaires[$i]['received_correspondence_irs_prior_year_tax_returns'] == true)
                                                        <td>yes</td>
                                                    @endif
                                  
                                                <td>{{$questionnaires[$i]['refer_name']}}</td>
                                                 @if($questionnaires[$i]['purchase_motor_vehicle'] == false)
                                                       <td>no</td>
                                                    @endif
                                                    @if($questionnaires[$i]['purchase_motor_vehicle'] == true)
                                                        <td>yes</td>
                                                    @endif
                                                </tr>
                                                </tbody>
                                                </table>


                                                  <table class="table">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Attend school fulltime student</th>
                                                    <th scope="col">Purchase supplies used as educator</th>
                                                    <th scope="col">Purchase install energy efficient home item</th>
                                                    <th scope="col">Paid estimated tax payments</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    @if($questionnaires[$i]['attend_school_fulltime_student'] == false)
                                                    <th scope="row">no</th>
                                                    @endif
                                                     @if($questionnaires[$i]['attend_school_fulltime_student'] == true)
                                                    <th scope="row">yes</th>
                                                    @endif

                                                    @if($questionnaires[$i]['purchase_supplies_used_as_educator'] == false)
                                                       <td>no</td>
                                                    @endif
                                                    @if($questionnaires[$i]['purchase_supplies_used_as_educator'] == true)
                                                        <td>yes</td>
                                                    @endif
                        
                                                    @if($questionnaires[$i]['purchase_install_energy_efficient_home_item'] == false)
                                                       <td>no</td>
                                                    @endif
                                                    @if($questionnaires[$i]['purchase_install_energy_efficient_home_item'] == true)
                                                        <td>yes</td>
                                                    @endif

                                                     @if($questionnaires[$i]['paid_estimated_tax_payments'] == false)
                                                       <td>no</td>
                                                    @endif
                                                    @if($questionnaires[$i]['paid_estimated_tax_payments'] == true)
                                                        <td>yes</td>
                                                    @endif
                                                </tr>
                                                </tbody>
                                                </table>

                                                @if(isset($questionnaires[$i]['estimated_taxes_paid_and_date']))
                                                <table class="table">
                                                <thead class="thead-light">
                                                <tr>
                                                <th scope="col">Estimated taxes paid and date</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                <th scope="row">{{$questionnaires[$i]['estimated_taxes_paid_and_date']}}</th>
                                                </tr>
                                                </tbody>
                                                </table>
                                                @endif

                                            @endif
                                            @endfor
                                    @endif


                                    @if(isset($documentations))
                                     <table class="table">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th scope="col" style="color:orange;">Documentation</th>
                                              
                                                </tr>
                                                </thead>
                                               
                                        </table>


                                      @for ($i = 0; $i < sizeof($documentations); $i++)
                                         @if($documentations[$i]['user_id'] == $taxpayers->user_id)
                                         <p>
                                            <?php
                                      
                                             $cmd = $s3->getCommand('GetObject', 
                                                                    ['Bucket' => 'emg-business-consultants',
                                                                    'Key'=> ''.trim($documentations[$i]['filenames']).'',
                                                                    'ResponseContentDisposition' => 'attachment; filename="'.trim($documentations[$i]['filenames']).'"',
                                                                    ]);

                                            $request = $s3->createPresignedRequest($cmd, '+20 minutes');
                                            $presignedUrl = (string)$request->getUri();

                                            echo '<div class="col-md-4">';

          
                                            echo '<div class="contain">';


                                            echo  '<img src="'.$presignedUrl.'" class="" alt="tax image">'; 

                                            echo "</div>";

                                            echo "</div>";

                                         
                                            ?>
                                        
                                        </p>

                                        @endif
                                     
                                        @endfor
                                    @endif
                             
                        


                                                  <table class="table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Filing status</th>
                                                    <th scope="col">Direct deposit</th>
                                                    <th scope="col">Direct deposit change</th>
                                                    <th scope="col">Bank routing #</th>
                                                    <th scope="col">Bank account #</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                <th scope="row">{{$taxpayers->filing_status}}</th>
                                                @if($taxpayers->direct_deposit ==1)
                                                      <td>yes</td>
                                                @endif
                                                 @if($taxpayers->direct_deposit ==0)
                                                      <td>no</td>
                                                @endif

                                                @if($taxpayers->direct_deposit_information_change ==1)
                                                      <td>yes</td>
                                                @endif
                                                 @if($taxpayers->direct_deposit_information_change ==0)
                                                      <td>n/a</td>
                                                @endif
                                            
                                                <td>{{$taxpayers->bank_routing_number}}</td>
                                                <td>{{$taxpayers->bank_account_number}}</td>
                                                </tr>
                                                </tbody>
                                                </table>


                                                 <table class="table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Card holder name</th>
                                                    <th scope="col">Card #</th>
                                                    <th scope="col">Card expiration date</th>
                                                    <th scope="col">Card CVV</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                <th scope="row">{{$taxpayers->card_holder_name}}</th>
                                            
                                                <td>{{$taxpayers->card_number}}</td>
                                                <td>{{$taxpayers->card_expiration_date}}</td>
                                                <td>{{$taxpayers->card_cvv}}</td>
                                                </tr>
                                                </tbody>
                                                </table>



                                                 <table class="table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">File tax return as</th>
                                                    <th scope="col">Send tax return as</th>
                                                    <th scope="col">Tax return amount</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                <th scope="row">{{$taxpayers->paper_file_or_E_file}}</th>
                                                <td>{{$taxpayers->receive_your_completed_return}}</td>
                                                @if(isset($taxpayers->tax_submission_return_amount))
                                                <td>{{$taxpayers->tax_submission_return_amount}}</td>
                                                </tr>
                                                @endif
                                                 @if($taxpayers->tax_submission_return_amount == null)
                                                <td>n/a</td>
                                                </tr>
                                                @endif
                                                </tbody>
                                                </table>

                                                @if($taxpayers->tax_submission_return_amount == null)
                                                <form method="POST" action="/submitReturn">
                                                    
                                                    @csrf
                                                    <input type="hidden" name="user_id" value="{{$taxpayers->user_id}}">
                                                    <p class="input-group gutter-width-30">
                                                    <span class="gutter-width">
                                                        <input type="text" placeholder="Tax refund amount" name="amount" required>
                                                    </span>

                                                     <span class="gutter-width">
                                                        <input type="text" placeholder="Filing fee" name="tax_service_deduction_amount" required>
                                                    </span>
                                                
                                                    </p>

                                                    <button class="btn btn-primary" type="submit">submit</button>
                                                </form>
                                                @endif
                                          @endforeach
                                        @endif

                                           @if(sizeof($taxpayer) == 0)
                                             <h3 style="color:orange; margin-top: 8em;">There are no tax submissions at the moment..</h3>

                                           @endif
                             

                                        </div>
                                    </div>

                                </div>
                   
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- #page-content -->

        </main><!-- .site-main -->

        <!-- .site-footer -->
        @include('/emg-main/web/MalexHTML/App/dist/components/footer')

          <!-- modal -->
        @include('/emg-main/web/MalexHTML/App/dist/components/modal-dashboard')

        <!-- JS -->
        <script src="assets/js/main.min.js"></script>
    </body>
</html>