<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/style.min.css">
        <title>Dashboard | EMG - Business Consulting Agency</title>

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
        <style type="text/css">
    
            #pageTwo, #pageThree, #pageFour, #pageFive, #pageSix, #pageSeven{
                display:none;
            }
        </style>


<script>

 


</script>
   
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
                                            <h3 id="color">Dashboard</h3>
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
                            <a class="nav-link" style="width: 12em; background-color: transparent; border-style: none;" id="home-tab" href="/dashboard" role="tab" aria-controls="home" aria-selected="true">Notifications <span class="badge badge-dark">{{count($notifications)}}</span></a>
                        </li>

                        <li class="nav-item btn btn-primary">
                            <a class="nav-link" style="width: 12em; background-color: transparent; border-style: none;" id="profile-tab"  href="/account" role="tab" aria-controls="profile" aria-selected="false">Account</a>
                        </li>

                        <li class="nav-item btn btn-primary">
                            <a class="nav-link" style="width: 12em; background-color: transparent; border-style: none;" id="business-tab"  href="/ClientPortal" role="tab" aria-controls="contact" aria-selected="false">Client Portal</a>
                        </li>

                        <li class="nav-item btn btn-primary">
                            <a class="nav-link  active" style="width: 12em; background-color: transparent;  border-style: none;" id="taxPortal-tab" href="/TaxPortal" role="tab" aria-controls="taxPortal" aria-selected="false">Tax Portal</a>
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


                                    <div class="tab-pane active" id="taxpayer" role="tabpanel" aria-labelledby="taxpayer-tab">
     
                                    @if($taxpayer == null)
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 " style="margin-top:3em;">
                                            <form method="POST" action="/tax-submission" id="dependentsForm" enctype="multipart/form-data">

                                                @csrf

                                                <div id="pageOne" class="form-group">

                                                    <h3>Lets get stared with filing your taxes!</h3>

                                                    @error('tax_year')
                                                        <p class="alert" style="color: red;">{{$message}}</p>
                                                    @enderror
                                                    @error('date')
                                                        <p class="alert" style="color: red;">{{$message}}</p>
                                                    @enderror
                                                    @error('first_name')
                                                        <p class="alert" style="color: red;">{{$message}}</p>
                                                    @enderror
                                                    @error('middle_name')
                                                        <p class="alert" style="color: red;">{{$message}}</p>
                                                    @enderror
                                                    @error('last_name')
                                                        <p class="alert" style="color: red;">{{$message}}</p>
                                                    @enderror
                                                    @error('suffix')
                                                        <p class="alert" style="color: red;">{{$message}}</p>
                                                    @enderror
                                                    @error('work_phone')
                                                        <p class="alert" style="color: red;">{{$message}}</p>
                                                    @enderror
                                                    @error('mobile_phone')
                                                        <p class="alert" style="color: red;">{{$message}}</p>
                                                    @enderror
                                                    @error('ssn')
                                                        <p class="alert" style="color: red;">{{$message}}</p>
                                                    @enderror
                                                    @error('date_of_birth')
                                                        <p class="alert" style="color: red;">{{$message}}</p>
                                                    @enderror
                                                    @error('occupation')
                                                        <p class="alert" style="color: red;">{{$message}}</p>
                                                    @enderror

                                                <p class="input-group gutter-width-30">

                                                    <span class="gutter-width col-lg-4 form-group">
                                                        <label for="inputTaxYear" style="margin-top:4px;">Tax year</label> 
                                                        <input id="inputTaxYear" type="number" min="<?php echo date("Y")-21 ?>" max="<?php echo date("Y") ?>" step="1"  name="tax_year" >
                                                    </span>

                                                    <span class="gutter-width col-lg-4 form-group">
                                                        <label for="inputDate">Date</label> 
                                                        <input id="inputDate" type="date" value="<?php echo date("m-d-Y") ?>" name="date">
                                                    </span>

                                                </p>


                                                  <div class="row form-group">
                                                            
                                                    <div class="col-lg-3 form-group">
                                                        <label for="inputFirstName">First name</label>       
                                                        <input id="inputFirstName" type="text" class="form-control" placeholder="First name" name="first_name" >
                                                    </div>

                                                    <div class="col-lg-3 form-group">
                                                        <label for="inputMiddleName">Middle name</label>
                                                        <input id="inputMiddleName" type="text" class="form-control" placeholder="Middle name" name="middle_name">
                                                    </div>
        
                                                    <div class="col-lg-3 form-group">
                                                        <label for="inputLastName">Last name</label>
                                                        <input id="inputLastName" type="text" class="form-control" placeholder="Last name" name="last_name" >
                                                    </div>

                                                    <div class="col-lg-2 form-group">
                                                        <label for="inputSuffix">Suffix</label>
                                                        <input id="inputSuffix" type="text" class="form-control" placeholder="Suffix" name="suffix">
                                                    </div>

                                                      </div>



                                                <div class="form-group row">

                                                    <label for="inputWorkPhone" class="col-sm-2 col-form-label">Work Phone</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="inputWorkPhone" name="work_phone">
                                                    </div>
                                                </div>


                                                <div class="form-group row">
    
                                                    <label for="inputMobilePhone" class="col-sm-2 col-form-label">Cell Phone</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="inputMobilePhone" name="mobile_phone">
                                                    </div>
                                                </div>



                                                <div class="row form-group">

                                                    <p class="input-group gutter-width-30">

                                                        <span class="gutter-width col-lg-4 form-group" >
                                                            <label style="margin-top:4px" for="ssn1">SSN</label> 
                                                            <input type="text" id="ssn1"  placeholder="***-**-****" maxlength="12" name="ssn">
                                                        </span >

                                                        <span class="gutter-width col-lg-4 form-group">
                                                            <label for="inputDOB">Date of Birth</label> 
                                                            <input id="inputDOB" type="date" name="date_of_birth">
                                                        </span >

                                                        <span class="gutter-width col-lg-4 form-group">
                                                            <label style="margin-top:4px"  for="inputOccupation">Occupation</label> 
                                                            <input id="inputOccupation" type="text" placeholder="Job title" name="occupation" >
                                                        </span>
                                                    
                                                    </p>

                                                </div>
                                            </div>


  
                                            <div id="pageTwo" class="form-group">

                                                <h3>Spouse's information only if available..</h3>


                                                @error('spouse_first_name')
                                                    <p class="alert" style="color: red;">{{$message}}</p>
                                                @enderror
                                                @error('spouse_middle_name')
                                                    <p class="alert" style="color: red;">{{$message}}</p>
                                                @enderror
                                                @error('spouse_last_name')
                                                    <p class="alert" style="color: red;">{{$message}}</p>
                                                @enderror
                                                @error('spouse_suffix')
                                                    <p class="alert" style="color: red;">{{$message}}</p>
                                                @enderror
                                                @error('spouse_work_phone')
                                                    <p class="alert" style="color: red;">{{$message}}</p>
                                                @enderror
                                                @error('spouse_mobile_phone')
                                                    <p class="alert" style="color: red;">{{$message}}</p>
                                                @enderror
                                                @error('spouse_ssn')
                                                    <p class="alert" style="color: red;">{{$message}}</p>
                                                @enderror
                                                @error('spouse_date_of_birth')
                                                    <p class="alert" style="color: red;">{{$message}}</p>
                                                @enderror
                                                @error('spouse_occupation')
                                                    <p class="alert" style="color: red;">{{$message}}</p>
                                                @enderror

                                                <div class="row form-group">
                                                            
                                                    <div class="col-lg-3 form-group">
                                                        <label for="inputSpouseFirstName">First name</label>       
                                                        <input id="inputSpouseFirstName" type="text" class="form-control" placeholder="First name" name="spouse_first_name">
                                                    </div>

                                                    <div class="col-lg-3 form-group">
                                                        <label for="inputSpouseMiddleName">Middle name</label>
                                                        <input id="inputSpouseMiddleName" type="text" class="form-control" placeholder="Middle name" name="spouse_middle_name">
                                                    </div>
        
                                                    <div class="col-lg-3 form-group">
                                                        <label for="inputSpouseLastName">Last name</label>
                                                        <input id="inputSpouseLastName" type="text" class="form-control" placeholder="Last name" name="spouse_last_name">
                                                    </div>

                                                    <div class="col-lg-2 form-group">
                                                        <label for="inputSpouseSuffix">Suffix</label>
                                                        <input id="inputSpouseSuffix" type="text" class="form-control" placeholder="Suffix" name="spouse_suffix">
                                                    </div>
                                                </div>



                                            <div class="form-group row">
                                                <label for="inputSpouseWorkPhone" class="col-sm-2 col-form-label">Work Phone</label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" id="inputSpouseWorkPhone" name="spouse_work_phone">
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label for="inputSpouseMobilePhone" class="col-sm-2 col-form-label">Cell Phone</label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" id="inputSpouseMobilePhone" name="spouse_mobile_phone">
                                                 </div>
                                            </div>

                                            <div class="row form-group">

                                                    <p class="input-group gutter-width-30">

                                                    <span class="gutter-width col-lg-4 form-group" >
                                                        <label style="margin-top:4px" for="ssn2">SSN</label> 
                                                        <input type="text" id="ssn2"  placeholder="***-**-****" maxlength="12" name="spouse_ssn">
                                                    </span>

                                                    <span class="gutter-width col-lg-4 form-group">
                                                        <label for="spouseDOB">Date of Birth</label> 
                                                        <input id="spouseDOB" type="date" name="spouse_date_of_birth">
                                                    </span>

                                                        <span class="gutter-width col-lg-4 form-group">
                                                        <label style="margin-top:4px"  for="inputSpouseOccupation">Occupation</label> 
                                                        <input id="inputSpouseOccupation" type="text" placeholder="Job title" name="spouse_occupation">
                                                    </span>
                                                    
                                                </p>
                                            </div>

                                        </div>


                                        <div id="pageThree"  style="margin-bottom: 4em;">

                                               <h3>Fill out only if info has changed.</h3>


                                                @error('filing_status')
                                                    <p class="alert" style="color: red;">{$message}}</p>
                                                @enderror

                                                @error('dependents_first_name.*')
                                                    <p class="alert" style="color: red;">{{$message}}</p>
                                                @enderror
                                                 @error('dependents_middle_name.*')
                                                    <p class="alert" style="color: red;">{{$message}}</p>
                                                @enderror
                                                 @error('dependents_last_name.*')
                                                    <p class="alert" style="color: red;">{{$message}}</p>
                                                @enderror
                                                 @error('dependents_suffix.*')
                                                    <p class="alert" style="color: red;">{{$message}}</p>
                                                @enderror
                                                 @error('dependents_ssn.*')
                                                    <p class="alert" style="color: red;">{{$message}}</p>
                                                @enderror

                                                 @error('dependents_date_of_birth.*')
                                                    <p class="alert" style="color: red;">{{$message}}</p>
                                                @enderror
                                                 @error('dependents_relationship.*')
                                                    <p class="alert" style="color: red;">{{$message}}</p>
                                                @enderror
                                                 @error('dependents_child_care.*')
                                                    <p class="alert" style="color: red;">{{$message}}</p>
                                                @enderror
                                                 @error('dependents_college_tuition.*')
                                                    <p class="alert" style="color: red;">{{$message}}</p>
                                                @enderror
                                                 @error('dependents_health_insurance')
                                                    <p class="alert" style="color: red;">{{$message}}</p>
                                                @enderror


                                                                                    
                                           <div class="form-group">
    
                                                <label for="filingStatus">Filing Status:</label>
                                                <select class="form-control" id="filingStatus" name="filing_status">
                                                    <option>Single</option>
                                                    <option>Married Filing Jointly</option>
                                                    <option>Head of Household </option>
                                                    <option>Qualifying Widow/er</option>
                                                </select >
                                            </div>

                                          
                                            <h3>Note: Dependents cannot claim themselves as a dependent on their own return.</h3>


                                            <div class="form-group">
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Dependent(s)</label>
                                            <select class="form-control my-1 mr-sm-2" name="dependents_num" id="dependentsNum">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                            </div>



                                            <div class="dependents childCare collegeTuition"></div>


                                            <div class="healthInsurance" style="margin-top: 3em;"></div>


                                            <div class="insuredDependents" style="margin-top:2em;"></div>

                                        </div>



                                        <div id="pageFour" class="form-group">

                                            <h3 style="margin-bottom:4em;">If you are a new client, you will need to provide previous year tax returns. For new Partnerships or Sub S corporations you will need to provide previous year returns and K-1’s.</h3>


                                            @error('someone_claim_you_or_your_spouse_as_dependent')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror
                                            @error('received_correspondence_irs_prior_year_tax_returns')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror
                                            @error('refer_name')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror


                                          <div class="row form-group">


                                            <div class="col-lg-4 form-group">

                                            <fieldset class="form-group">
                                                <div class="row">
                                                    <legend class="col-form-label col-sm-12 pt-0">Could someone else claim you/your spouse as a dependent?</legend>
                                                    <div class="col-sm-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="someone_claim_you_or_your_spouse_as_dependent" id="gridRadios1" value="true" >
                                                            <label class="form-check-label" for="gridRadios1">Yes</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="someone_claim_you_or_your_spouse_as_dependent" id="gridRadios2" value="false">
                                                            <label class="form-check-label" for="gridRadios2">No</label>
                                                        </div>
       
                                                    </div>
                                                </div>
                                            </fieldset>

                                        </div>


                                          <div class="col-lg-4 form-group">

                                            <fieldset class="form-group">
                                                <div class="row">
                                                    <legend class="col-form-label col-sm-12 pt-0">Have you received any correspondence from the IRS regarding prior year tax returns?</legend>
                                                    <div class="col-sm-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="received_correspondence_irs_prior_year_tax_returns" id="gridRadios3" value="true" >
                                                            <label class="form-check-label" for="gridRadios3">Yes</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="received_correspondence_irs_prior_year_tax_returns" id="gridRadios4" value="false">
                                                            <label class="form-check-label" for="gridRadios4">No</label>
                                                        </div>
       
                                                    </div>
                                                </div>
                                            </fieldset>

                                        </div>


                                        </div>

                                         <div class="row form-group col-lg-12">

                                                    <p class="input-group gutter-width-30"  >

                                                        <span class="gutter-width col-lg-4 form-group" >
                                                            <label style="margin-top:4px" for="inputReferName">If you are new to our practice, who may we thank for referring you?</label> 
                                                            <input type="text" name="refer_name" id="inputReferName" >
                                                        </span>
                                                    
                                                    </p>

                                                </div>

                                        </div>



                                        <div id="pageFive" class="form-group">
 
                                            <h3>Last year, did you (or your spouse):</h3> 

                                            @error('purchase_motor_vehicle')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror
                                            @error('attend_school_fulltime_student')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror
                                            @error('purchase_supplies_used_as_educator')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror
                                            @error('purchase_install_energy_efficient_home_item')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror
                                            @error('paid_estimated_tax_payments')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror
                                             @error('estimated_taxes_paid.*')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror
                                             @error('estimated_taxes_paid_date.*')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror
                                              @error('filenames.*')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror

                                         
                                            <div class="row form-group"> 

                                                <div class="col-lg-4 form-group"> 

                                                    <fieldset class="form-group">
                                                        <div class="row">
                                                            <legend class="col-form-label col-sm-12 pt-0">Purchase a motor vehicle?</legend>
                                                            <div class="col-sm-10">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="purchase_motor_vehicle" id="gridRadios5" value="true" >
                                                                    <label class="form-check-label" for="gridRadios5">Yes</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="purchase_motor_vehicle" id="gridRadios6" value="false">
                                                                    <label class="form-check-label" for="gridRadios6">No</label>
                                                                </div>
       
                                                            </div>

                                                        </div>
                                                    </fieldset>

                                                </div>



                                                <div class="col-lg-4 form-group"> 

                                                    <fieldset class="form-group">
                                                        <div class="row">
                                                            <legend class="col-form-label col-sm-12 pt-0">Attend school as a full-time student?</legend>
                                                                <div class="col-sm-10">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="attend_school_fulltime_student" id="gridRadios8" value="true" >
                                                                        <label class="form-check-label" for="gridRadios8">Yes</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="attend_school_fulltime_student" id="gridRadios9" value="false">
                                                                        <label class="form-check-label" for="gridRadios9">No</label>
                                                                    </div>
       
                                                                </div>
                                                        </div>
                                                    </fieldset>
                                     
                                                </div>



                                                <div class="col-lg-4 form-group"> 

                                                    <fieldset class="form-group">
                                                        <div class="row">
                                                            <legend class="col-form-label col-sm-12 pt-0"> Purchase supplies used as an educator? (teacher, teacher's aide, counselor) </legend>
                                                            <div class="col-sm-10">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="purchase_supplies_used_as_educator" id="gridRadios9" value="true" >
                                                                    <label class="form-check-label" for="gridRadios9">Yes</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="purchase_supplies_used_as_educator" id="gridRadios10" value="false">
                                                                    <label class="form-check-label" for="gridRadios10">No</label>
                                                                </div>
       
                                                            </div>
                                                        </div>
                                                    </fieldset> 
                                          
                                                </div>



                                                <div class="col-lg-4 form-group"> 

                                                    <fieldset class="form-group">
                                                        <div class="row">
                                                            <legend class="col-form-label col-sm-12 pt-0">Purchase and install energy-efficient home item? (windows, A/C, insulation)? </legend>
                                                            <div class="col-sm-10">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="purchase_install_energy_efficient_home_item" id="gridRadios11" value="true">
                                                                    <label class="form-check-label" for="gridRadios11">Yes</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="purchase_install_energy_efficient_home_item" id="gridRadios12" value="false">
                                                                    <label class="form-check-label" for="gridRadios12">No</label>
                                                                </div>
       
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                </div>




                                                <div class="col-lg-4 form-group"> 


                                                    <fieldset class="form-group">
                                                        <div class="row">
                                                            <legend class="col-form-label col-sm-12 pt-0"> Paid estimated tax payments? If so, list all dates and amounts: </legend>
                                                            <div class="col-sm-10">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="paid_estimated_tax_payments" id="gridRadios13" value="true" >
                                                                    <label class="form-check-label" for="gridRadios13">Yes</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="paid_estimated_tax_payments" id="gridRadios14" value="false">
                                                                    <label class="form-check-label" for="gridRadios14">No</label>
                                                                </div>
       
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                </div>

                                            </div>
                                           

                                            <div class="row form-group" id="paidEstimatedTaxes">
                                                <p class="input-group gutter-width-30" id="taxPaymentID_1">

                                                    <span class="gutter-width col-lg-4 form-group" >
                                                        <label  for="tag-input1" style="margin-top:4px;">Paid tax estimate (1)</label> 
                                                        <input id="tag-input1" type="text" name="estimated_taxes_paid[]">
                                                    </span>

                                                    <span class="gutter-width col-lg-4 form-group">
                                                        <label for="tag-date1">Date</label> 
                                                        <input id="tag-date1" type="date" name="estimated_taxes_paid_date[]">
                                                    </span>
                                                    
                                                </p>
 
                                            </div>

                                         <div class="col-lg-4 form-group" id="paidEstimatedTaxesButton" style="display:inline-block;">
                                                 <a id="addTaxPayment" class="btn btn-primary btn-sm">Add tax payment</a>

                                             </div>

                                             <div class="col-lg-4 form-group" id="removeEstimatedTaxesButton" style="display:inline-block;">
                                                 <a id="removeTaxPayment" class="btn btn-warning btn-sm">Remove tax payment</a>
                                             </div>
                                            
                                        </div>




                                        <div id="pageSix" >

                                            <h3>Documentation included</h3>

                                            @error('filenames.*')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror
                                            <div class="row">
                                                
                                                <div class="col-lg-4" style="margin-bottom:3em;">

                                                    <ul>
                                                        <li>Salary/Wages (W2)</li>
                                                        <li>Self-Employment Expenses </li>
                                                        <li>Interest (1099-INT) </li>
                                                        <li>Social Security Benefits (SS-1099) </li>
                                                    </ul>
                                                    

                                                </div>


                                                 <div class="col-lg-4" style="margin-bottom:3em;">

                                                    <ul>
                                                        <li>Rental Property Income </li>
                                                        <li>Self Employed/Business Income</li>
                                                        <li>Child Care Expenses</li>
                                                        <li>Medical Expenses</li>
                                                    </ul>
                                                    
                                                    
                                                </div>



                                                 <div class="col-lg-4" style="margin-bottom:3em;">

                                                    <ul>
                                                        <li>Independent Contractor (1099-MISC) </li>
                                                        <li>Charitable Contributions </li>
                                                        <li>HSA (1099-SA)</li>
                                                        <li>Student Loan Interest (1098-E) </li>

                                                    </ul>
                                                    
                                                    
                                                </div>

                                                <div class="col-lg-4" style="margin-bottom:3em;">

                                                    <ul>
                                                        <li>Dividends (1099-DIV)</li>
                                                        <li>Unemployment (1099-G)</li>
                                                        <li>Prior Year’s Tax Return (New Clients Only)</li>
                                                        <li>State Return</li>
                                                    </ul>
                                                    
                                                    
                                                </div>


                                                 <div class="col-lg-4" style="margin-bottom:3em;">

                                                    <ul>
                                                        <li>Stocks/Bonds (1099-B)</li>
                                                        <li>Estimated Tax Payments Made</li>
                                                        <li>Real Estate Taxes Paid </li>
                                                        <li>Education Expenses (1098-T)</li>
                                                    </ul>
                                                    
                                                </div>


                                                 <div class="col-lg-4" style="margin-bottom:3em;">

                                                    <ul>
                                                        <li>Mortgage Statement (1098) </li>
                                                        <li>IRA Distributions (1099-R)</li>
                                                        <li>Partnership/S-Corp - K1</li>
                                                        <li>Lottery/Gambling Winnings</li>
                                                    </ul>
                                                    
                                                </div>



                                            </div>

                                            <div style="margin-bottom: 4em;">
                                                <div class="input-group removeButton control-group lst increment" >
                                                    <input type="file" name="filenames[]" class="myfrm form-control">
                                                    <div class="input-group-btn"> 
                                                        <button class="addBtn btn btn-primary" type="button">Add</button>
                                                    </div>
                                                </div>
                                                <div class="clone hide">
                                                    <div class="removeButton control-group lst input-group" style="margin-top:10px">
                                                        <input type="file" name="filenames[]" class="myfrm form-control">
                                                        <div class="input-group-btn"> 
                                                            <button class="btn btn-warning" type="button"> Remove</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
  
                              
                                        </div>





                                        <div id="pageSeven" class="form-group">


                                            <h3 style="margin-top: 3em; margin-bottom:4em;">You're almost finshed - we just need a little more info..</h3>

                                            @error('address')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror
                                            @error('city')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror
                                            @error('state"')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror
                                            @error('zip')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror
                                            @error('direct_deposit')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror
                                            @error('bank_routing_number')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror
                                            @error('bank_account_number')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror
                                             @error('card_holder_name')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror
                                            @error('card_number')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror
                                            @error('card_expiration_date')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror
                                            @error('card_cvv')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror
                                            @error('paper_file_or_E-file')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror
                                            @error('receive_your_completed_return')
                                                <p class="alert" style="color: red;">{{$message}}</p>
                                            @enderror

                                          
                                        
                                    
                                            <div class="form-group">
                                                <label for="inputAddress">Address</label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" >
                                            </div>
  
                                            <div class="form-group">
                                                <label for="inputAddress2">Address 2</label>
                                                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address_2">
                                            </div>

                                            <div class="form-row" style="margin-bottom: 4em;">
                                                <div class="form-group col-md-6">
                                                    <label for="inputCity">City</label>
                                                    <input type="text" class="form-control" id="inputCity" name="city" >
                                                </div>
    
                                                <div class="form-group col-md-4">
                                                    <label for="inputState">State</label>
                                                    <select id="inputState" class="form-control" name="state" >
                                                        <option selected>Choose...</option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AK">Alaska</option>
                                                        <option value="AZ">Arizona</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="CA">California</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="CT">Connecticut</option>
                                                        <option value="DE">Delaware</option>
                                                        <option value="DC">District Of Columbia</option>
                                                        <option value="FL">Florida</option>
                                                        <option value="GA">Georgia</option>
                                                        <option value="HI">Hawaii</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IN">Indiana</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="ME">Maine</option>
                                                        <option value="MD">Maryland</option>
                                                        <option value="MA">Massachusetts</option>
                                                        <option value="MI">Michigan</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="MT">Montana</option>
                                                        <option value="NE">Nebraska</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="NH">New Hampshire</option>
                                                        <option value="NJ">New Jersey</option>
                                                        <option value="NM">New Mexico</option>
                                                        <option value="NY">New York</option>
                                                        <option value="NC">North Carolina</option>
                                                        <option value="ND">North Dakota</option>
                                                        <option value="OH">Ohio</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="PA">Pennsylvania</option>
                                                        <option value="RI">Rhode Island</option>
                                                        <option value="SC">South Carolina</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="UT">Utah</option>
                                                        <option value="VT">Vermont</option>
                                                        <option value="VA">Virginia</option>
                                                        <option value="WA">Washington</option>
                                                        <option value="WV">West Virginia</option>
                                                        <option value="WI">Wisconsin</option>
                                                        <option value="WY">Wyoming</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-2">
                                                    <label for="inputZip">Zip</label>
                                                    <input type="text" class="form-control" id="inputZip" name="zip" >
                                                </div>
                                            </div>
 

                                              <h3>Payment info - we will not charge your account until you approve the tax amount and the charge amount.. </h3>

                                            <fieldset class="form-group">
                                                <div class="row">
                                                    <legend class="col-form-label col-sm-2 pt-0">If you are due a refund, would you like direct deposit?</legend>
                                                    <div class="col-sm-10">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="direct_deposit" id="gridRadios15" value="true" >
                                                            <label class="form-check-label" for="gridRadios15">Yes</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="direct_deposit" id="gridRadios16" value="false">
                                                            <label class="form-check-label" for="gridRadios16">No</label>
                                                        </div>
       
                                                    </div>
                                                </div>
                                            </fieldset>


                                                <div class="row form-group" id="newBankingInfo">

                                                    <div class="form-check form-check-inline">

                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="true" name="direct_deposit_information_change">
                                                        <label class="form-check-label" for="inlineCheckbox1"> Check Box if Direct Deposit Information is the same as last year. If not, please provide new information below</label>
                                                    </div>
                                                    </div>


 
                                                    <div class="row form-group" id="bankingInfo">

                                                        <p class="input-group gutter-width-30">

                                                        <span class="gutter-width col-lg-4 form-group" >
                                                            <label for="routingNumber">Bank: Routing #:</label> 
                                                            <input id="routingNumber" type="text" placeholder="Routing #" maxlength="9" name="bank_routing_number" >
                                                        </span>

                                                        <span class="gutter-width col-lg-4 form-group">
                                                            <label for="accountNumber">Account #:</label> 
                                                            <input id="accountNumber" type="text" placeholder="Account #" maxlength="17" name="bank_account_number" >
                                                        </span>

                                                        </p>
                                                    </div>


                                                     <div class="row form-group" id="cardInfo">

                                                        <p class="input-group gutter-width-30">

                                                        <span class="gutter-width col-lg-3 form-group" >
                                                            <label for="cardName">Card holder name:</label> 
                                                            <input id="cardName" type="text" placeholder="" name="card_holder_name">
                                                        </span>

                                                        <span class="gutter-width col-lg-3 form-group">
                                                            <label for="cardNumber">Card number:</label> 
                                                            <input id="cardNumber" type="text" placeholder="" name="card_number">
                                                        </span>

                                                         <span class="gutter-width col-lg-3 form-group">
                                                            <label for="cardExpiration">Card expiration date:</label> 
                                                            <input id="cardExpiration" type="text" placeholder="" name="card_expiration_date">
                                                        </span>

                                                         <span class="gutter-width col-lg-3 form-group">
                                                            <label for="cardCVV">Card CVV:</label> 
                                                            <input id="cardCVV" type="text" placeholder="" name="card_cvv">
                                                        </span>

                                                        </p>
                                                    </div>

 
                                              <fieldset class="form-group">
                                                <div class="row">
                                                    <legend class="col-form-label col-sm-2 pt-0">How would you like to file the return?</legend>
                                                    <div class="col-sm-10">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="paper_file_or_E-file" id="gridRadios17" value="Electronically file the return" >
                                                            <label class="form-check-label" for="gridRadios17">Electronically file the return</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="paper_file_or_E-file" id="gridRadios18" value="Paper file">
                                                            <label class="form-check-label" for="gridRadios18">Paper file</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </fieldset>


                                          <!--   <div class="row form-group">
                                                <p class="col-lg-6">
                                                    <textarea placeholder="Please provide reason for paper filing: "></textarea name="reason_for_paper_filing" >
                                                </p>
                                            </div> -->


                                            <fieldset class="form-group">
                                                <div class="row">
                                                    <legend class="col-form-label col-sm-2 pt-0">How do you want to receive your completed return?</legend>
                                                    <div class="col-sm-10">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="receive_your_completed_return" id="gridRadios19" value="Pick up at the office">
                                                            <label class="form-check-label" for="gridRadios19">Pick up at the office</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="receive_your_completed_return" id="gridRadios20" value="Emailed (Password Protected)">
                                                            <label class="form-check-label" for="gridRadios20">Emailed (Password Protected)</label>
                                                        </div>
                                                         <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="receive_your_completed_return" id="gridRadios21" value="Electronic Dropbox (Sharefile)">
                                                            <label class="form-check-label" for="gridRadios21">Electronic Dropbox (Sharefile)</label>
                                                        </div>
                                                         <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="receive_your_completed_return" id="gridRadios22" value="Mail (Additional fee for mailing)">
                                                            <label class="form-check-label" for="gridRadios22">Mail (Additional fee for mailing)</label>
                                                        </div>
       
                                                    </div>
                                                </div>
                                            </fieldset>


                                            <button type="submit" class="btn btn-primary">submit</button>

                                            <h3 style="margin-top: 3em; margin-bottom:4em;">We appreciate the opportunity to advise you regarding tax matters and preparing your 2021 tax return.</h3>
                                        </div>



                                    </div>

                                </form>

                                        <nav class="text-center" aria-label="navBtn" style="margin-top: 1em;">

                                            <ul class="pagination pagination-lg">

                                                <li class="nav-item page-item active">
                                                    <a  onclick="pageOne()" class="page-link" href="#pageOne" id="navBtn1">1</a></li>

                                                <li class="nav-item page-item"><a onclick="pageTwo()"  class="page-link" href="#pageTwo" id="navBtn2">2</a></li>

                                                <li class="nav-item page-item"><a onclick="pageThree()"  class="page-link" href="#pageThree" id="navBtn3">3</a></li>

                                                <li class="nav-item page-item"><a onclick="pageFour()"  class="page-link" href="#pageFour" id="navBtn4">4</a></li>

                                                <li class="nav-item page-item"><a onclick="pageFive()"  class="page-link" href="#pageFive" id="navBtn5">5</a></li>

                                                <li class="nav-item page-item navBtn"><a onclick="pageSix()"  class="page-link" href="#pageSix" id="navBtn6">6</a></li>

                                                <li class="nav-item page-item navBtn"><a onclick="pageSeven()"  class="page-link" href="#pageSeven" id="navBtn7">7</a></li>

                                            </ul>
                                        </nav>                

                                        </div>
                                    @endif
                                    @if($taxpayer != null)

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center" style="margin-top:3em;">

                                            @if($taxpayer->tax_submission_status == null)
                                            <h3 >Your tax request has been sent !</h3>
                                            @endif


                                                @if($taxpayer->tax_submission_status == null)
                                                <h3  style="color:orange; margin-top: 3em;">{{$taxpayer->first_name}} we will keep you updated via email.</h3>
                                                @endif

                                                @if($taxpayer->tax_submission_status == "Awaiting tax return approval")
                                                <h3 style="color:black;">{{$taxpayer->first_name}} we have your refund amount ready.</h3>
                                                <h3 style="color:orange">{{$taxpayer->tax_submission_status}}..</h3>

                                                @if($taxpayer->tax_submission_status != "Approved")

                                                @if($taxpayer->tax_submission_return_amount != null)
                                                <h3 id="color">Tax refund amount : {{$taxpayer->tax_submission_return_amount}}</h3>
                                                <h3 id="color">Filing fee : {{$taxpayer->tax_service_deduction_amount}}</h3>
                                                @endif

                                                <form method="POST" action="/taxApprove">
                                                    @csrf

                                                    <button type="submit" class="btn btn-primary">request tax refund</button>
                                                </form>
                                                @endif
                                                @endif

                                                @if($taxpayer->tax_submission_status == "Approved")
                                                <h3 class="text-center" style="color:black;">{{$taxpayer->first_name}} your refund amount is being sent.</h3>

                                                <h3 id="color">Tax refund amount : {{$taxpayer->tax_submission_return_amount}}</h3>
                                                <h3 id="color">Filing fee : {{$taxpayer->tax_service_deduction_amount}}</h3>

                                                @endif

                                        <br>
                                        <br>
                                        <br>

                                                 <h4 style="color:orange;">Thanks for filing taxes with us!</h4>
                                                  <h4 style="color:orange; "><a href="/#contacts" id="color">contact: egreen@emgbusinessconsulting.com</a></h4>

                                        </div>

                                    @endif
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
        <script src="assets/js/dependents.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
</html>