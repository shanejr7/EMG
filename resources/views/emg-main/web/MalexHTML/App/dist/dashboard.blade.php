<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/style.css">
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
                 
                                <h3 class="large title">EMG Business Consulting</h3>
                           
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

                                       <!--  <li class="nav-item">
                                            <div style="margin-top: 2px;">
                                            <a style="color: black;" href="/#contacts">Settings</a>
                                        </div>
                                        </li> -->
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
                            <a class="nav-link  active " style="width: 12em; background-color: transparent; border-style: none;" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Notifications <span class="badge badge-dark">2</span></a>
                        </li>

                        <li class="nav-item btn btn-primary">
                            <a class="nav-link  " style="width: 12em; background-color: transparent; border-style: none;" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Account</a>
                        </li>

                        <li class="nav-item btn btn-primary">
                            <a class="nav-link  " style="width: 12em; background-color: transparent; border-style: none;" id="business-tab" data-toggle="tab" href="#business" role="tab" aria-controls="contact" aria-selected="false">Business Portal</a>
                        </li>

                        <li class="nav-item btn btn-primary">
                            <a class="nav-link  " style="width: 12em; background-color: transparent;  border-style: none;" id="taxpayer-tab" data-toggle="tab" href="#taxpayer" role="tab" aria-controls="taxpayer" aria-selected="false">Taxpayer Portal</a>
                        </li>

                    </ul>
        
            </div>
 
        </div>

 
            <div id="page-content" class="spacer " style="margin-top:1em;">
                <div class="wrapper">
                    <div class="content">
                        <div id="single">
                            <h4 style="color:red">(Attention)PLEASE READ THIS NOTICE REGARDING THIS SOFTWARE AND APPLICATION. THIS IS A LIVE DEMO TEST AND ANY DATA THAT IS SUBMITTED MAY BE LOST OR NOT PROCESSED. BY LOGIN AND REGISTER YOU AGREE TO THESE TERMS DURING LIVE BETA TESTING(Attention)</h4>
                            <div class="row gutter-width-md">

                                <div class="tab-content" id="myTabContent">
  
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 " style="margin-top:2em;">
                           
                                            <div class="row">
  
                                                <div class="col-sm-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">New Client Information Document</h5>
                                                            <p class="card-text">View our business portal for more information.</p>
                                                            <a href="#" class="btn btn-primary">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Tax Season Is Approaching</h5>
                                                            <p class="card-text">Would you like to get started on your tax preparation.</p>
                                                            <a href="#" class="btn btn-primary">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <nav class="text-center" aria-label="..." style="margin-top: 1em;">
                                                <ul class="pagination pagination-lg">
                                                    <li class="page-item active" aria-current="page">
                                                        <span class="page-link">1
                                                            <span class="sr-only">(current)</span>
                                                        </span>
                                                    </li>

                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>

                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>

                                                </ul>
                                            </nav>
 
                         
                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 "style="margin-top:1.34em;">
                                   
                                            <div class="card card-body">
                                                <form method="POST" action="/profile-update">

                                                    @csrf

                                                    <div class="form-row" style="margin-bottom:4em">

                                                        <div class="form-group col-md-5">
                                                            <label for="inputEmail">Email</label>
                                                            <input type="email" class="form-control" id="inputEmail" placeholder="{{ Auth::user()->email }}" name="email">
                                                        </div>

                                                        <div class="form-group col-md-4">
                                                            <label for="inputName">Name</label>
                                                            <input type="name" class="form-control" id="inputName" placeholder="{{{ isset(Auth::user()->name) ? Auth::user()->name : 'name' }}}" name="name">
                                                        </div>


                                                        <div class="form-group col-md-5">
                                                            <label for="inputPassword">Password</label>
                                                            <input type="password" id="inputPassword" class="form-control " aria-describedby="passwordHelpInline" placeholder="password is hidden" name="password">
                                                        </div>


                                                    </div>

  
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input id="disabledFieldsetCheck" disabled class="form-check-input" type="checkbox" name="email_verified_at">
                                                            <label class="form-check-label" for="gridCheck" style="font-size:16px">
                                                        Verified email
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary">Update</button>

                                                </form>
                                            </div>
                             

                                        </div>
                                    </div>



                                    <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="business-tab">
      
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 " style="margin-top:3em;">

                                            <form method="POST" action="/business-information-update">

                                                @csrf

                                                <div class="row form-group">
                                                            
                                                    <div class="col-lg-3 form-group">
                                                        <label for="inputFirstNameBusinessForm">First name</label>       
                                                        <input id="inputFirstNameBusinessForm" type="text" class="form-control" placeholder="First name" name="first_name">
                                                    </div>

                                                    <div class="col-lg-3 form-group">
                                                        <label for="inputMiddleNameBusinessForm">Middle name</label>
                                                        <input id="inputMiddleNameBusinessForm" type="text" class="form-control" placeholder="Middle name" name="middle_name">
                                                    </div>
        
                                                    <div class="col-lg-3 form-group">
                                                        <label for="inputLastNameBusinessForm">Last name</label>
                                                        <input id="inputLastNameBusinessForm" type="text" class="form-control" placeholder="Last name" name="last_name">
                                                    </div>

                                                    <div class="col-lg-2 form-group">
                                                        <label for="inputSuffixBusinessForm">Suffix</label>
                                                        <input id="inputSuffixBusinessForm" type="text" class="form-control" placeholder="Suffix" name="suffix">
                                                    </div>

                                                </div>

                                                <div class="row form-group">
                                                    <p class="col-lg-12 input-group ">

                                                        <span class="form-group">
                                                            <label class="form-label-secondary" for="textareaBusiness">Business</label> 
                                                            <textarea id="textareaBusiness" placeholder="What type of business do you have?" name="business_type"></textarea>
                                                        </span>

                                                        <span class="form-group">
                                                            <label class="form-label-secondary" for="textareaActivity">Activity</label>
                                                            <textarea id="textareaActivity" placeholder="Is your business active, or are you just getting started?" name="business_activity"></textarea>
                                                        </span>

                                                        <span class="form-group">
                                                            <label class="form-label-secondary" for="textareaServices">Services</label>
                                                            <textarea id="textareaServices" placeholder="What type of services do you offer?" name="business_services"></textarea>
                                                        </span>


                                                        <span class="form-group">
                                                            <label class="form-label-secondary" for="textareaSolutions">Solutions</label>
                                                            <textarea id="textareaSolutions" placeholder="What are the core problems your business solves (i.e., what is your niche?)" name="business_solutions"></textarea>
                                                        </span>

                                                        <span class="form-group">
                                                            <label class="form-label-secondary" for="textareaIdentity">Identity</label>
                                                            <textarea id="textareaIdentity" placeholder="Who are your ideal and potential clients? (for example: men, women, disabled, etc.)" name="business_ideal_clients"></textarea>
                                                        </span>

                                                        <span class="form-group">
                                                            <label class="form-label-secondary" for="textareaEnvironmnet">Environment</label>
                                                            <textarea id="textareaEnvironmnet" placeholder="In what capacity are you wanting to work with clients or customers? (online, offline, publicly, private coaching)" name="business_environment"></textarea>
                                                        </span>

                                                        <span class="form-group">
                                                            <label class="form-label-secondary" for="textareaPrevention">Prevention</label>
                                                            <textarea id="textareaPrevention" placeholder="What is currently holding you back from having the business you want?" name="business_issues"></textarea>
                                                        </span>

                                                        <span class="form-group">
                                                            <label class="form-label-secondary" for="textareaMilestones">Milestones</label>
                                                            <textarea id="textareaMilestones" placeholder="What would you like to accomplish and what is your timeframe?" name="business_goal_and_timeframe"></textarea>
                                                        </span>
                                                    </p>

                                                </div>

                                                <p class="input-group gutter-width-30">
                                                    <span class="gutter-width">
                                                        <label class="form-label-secondary" for="textWebUrl">Website (if you have one)https://</label>
                                                        <input id="textWebUrl" type="text" placeholder="https://www.my-website.com" name="website_url">
                                                    </span>
                                                </p>

                                                <p>Please indicate types of services desired:</p>

                                                <p>
                                                    <input type="checkbox" id="checkbox-input" name="business_services_desired_startup">
                                                    <label for="checkbox-input">Business Startup</label>
                                                </p>

                                                <p class="form-check form-crop-ba">
                                                    <input type="checkbox" class="form-check-input" id="checkbox-input-2" name="business_services_desired_tax_preparation">
                                                    <label class="form-label-secondary" for="checkbox-input-2">Tax Preparation</label>
                                                </p>

                                                <p class="form-check form-crop-ba">
                                                    <input type="checkbox" class="form-check-input" id="checkbox-input-3" name="business_services_desired_planning_marketing">
                                                    <label class="form-label-secondary" for="checkbox-input-3">Business Planning & Marketing</label>
                                                </p>

                                                <p class="form-check form-crop-ba">
                                                    <input type="checkbox" class="form-check-input" id="checkbox-input-4" name="business_services_desired_web_development_design">
                                                    <label class="form-label-secondary" for="checkbox-input-4">Web Design & Development</label>
                                                </p>

                                                <p class="form-check form-crop-ba">
                                                    <input type="checkbox" class="form-check-input" id="checkbox-input-5" name="business_services_desired_web_seo">
                                                    <label class="form-label-secondary" for="checkbox-input-5">Web Search Engine Optimization</label>
                                                </p>

                                                <button type="submit" class="btn btn-primary">Submit</button>

                                            </form>
                                        </div>
                                    </div>




                                    <div class="tab-pane fade" id="taxpayer" role="tabpanel" aria-labelledby="taxpayer-tab">
     
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 " style="margin-top:3em;">
                                            <form method="POST" action="/taxpayer-submission" id="dependentsForm" enctype="multipart/form-data">

                                                @csrf

                                                <div id="pageOne" class="form-group">

                                                    <h5>Lets get stared with filing your taxes!</h5>

                                                    @error('tax_year')
                                                        <p class="alert" style="color: red;">error{{$message}}</p>
                                                    @enderror
                                                    @error('date')
                                                        <p class="alert" style="color: red;">error{{$message}}</p>
                                                    @enderror
                                                    @error('first_name')
                                                        <p class="alert" style="color: red;">error{{$message}}</p>
                                                    @enderror
                                                    @error('middle_name')
                                                        <p class="alert" style="color: red;">error{{$message}}</p>
                                                    @enderror
                                                    @error('last_name')
                                                        <p class="alert" style="color: red;">error{{$message}}</p>
                                                    @enderror
                                                    @error('suffix')
                                                        <p class="alert" style="color: red;">error{{$message}}</p>
                                                    @enderror
                                                    @error('home_phone')
                                                        <p class="alert" style="color: red;">error{{$message}}</p>
                                                    @enderror
                                                    @error('work_phone')
                                                        <p class="alert" style="color: red;">error{{$message}}</p>
                                                    @enderror
                                                    @error('mobile_phone')
                                                        <p class="alert" style="color: red;">error{{$message}}</p>
                                                    @enderror
                                                    @error('ssn')
                                                        <p class="alert" style="color: red;">error{{$message}}</p>
                                                    @enderror
                                                    @error('date_of_birth')
                                                        <p class="alert" style="color: red;">error{{$message}}</p>
                                                    @enderror
                                                    @error('occupation')
                                                        <p class="alert" style="color: red;">error{{$message}}</p>
                                                    @enderror

                                                <p class="input-group gutter-width-30">

                                                    <span class="gutter-width col-lg-4 form-group">
                                                        <label for="inputTaxYear" style="margin-top:4px;">Tax year</label> 
                                                        <input id="inputTaxYear" type="number" min="<?php echo date("Y")-21 ?>" max="<?php echo date("Y") ?>" step="1" value="<?php echo date("Y") ?>"  name="tax_year" >
                                                    </span>

                                                    <span class="gutter-width col-lg-4 form-group">
                                                        <label for="inputDate">Date</label> 
                                                        <input id="inputDate" type="date" value="<?php echo date("m-d-Y") ?>" name="date" >
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

                                                    <label for="inputHousePhone" class="col-sm-2 col-form-label">House Phone</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="inputHousePhone" name="home_phone">
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

                                                <h5>Spouse's information only if available..</h5>


                                                @error('spouse_first_name')
                                                    <p class="alert" style="color: red;">error{{$message}}</p>
                                                @enderror
                                                @error('spouse_middle_name')
                                                    <p class="alert" style="color: red;">error{{$message}}</p>
                                                @enderror
                                                @error('spouse_last_name')
                                                    <p class="alert" style="color: red;">error{{$message}}</p>
                                                @enderror
                                                @error('spouse_suffix')
                                                    <p class="alert" style="color: red;">error{{$message}}</p>
                                                @enderror
                                                @error('spouse_home_phone')
                                                    <p class="alert" style="color: red;">error{{$message}}</p>
                                                @enderror
                                                @error('spouse_work_phone')
                                                    <p class="alert" style="color: red;">error{{$message}}</p>
                                                @enderror
                                                @error('spouse_mobile_phone')
                                                    <p class="alert" style="color: red;">error{{$message}}</p>
                                                @enderror
                                                @error('spouse_ssn')
                                                    <p class="alert" style="color: red;">error{{$message}}</p>
                                                @enderror
                                                @error('spouse_date_of_birth')
                                                    <p class="alert" style="color: red;">error{{$message}}</p>
                                                @enderror
                                                @error('spouse_occupation')
                                                    <p class="alert" style="color: red;">error{{$message}}</p>
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
                                                <label for="inputSpouseHomePhone" class="col-sm-2 col-form-label">House Phone</label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" id="inputSpouseHomePhone" name="spouse_home_phone">
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

                                               <h5>Fill out only if info has changed.</h5>


                                                @error('filing_status')
                                                    <p class="alert" style="color: red;">error{{$message}}</p>
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

                                          
                                            <h5>Note: Dependents cannot claim themselves as a dependent on their own return.</h5>


                                            <div class="form-group">
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Dependent(s)</label>
                                            <select class="form-control my-1 mr-sm-2" id="dependentsNum">
                                                <option value="0">0</option>
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

                                            <h5 style="margin-bottom:4em;">If you are a new client, you will need to provide previous year tax returns. For new Partnerships or Sub S corporations you will need to provide previous year returns and K-1’s.</h5>


                                            @error('someone_claim_you_or_your_spouse_as_dependent')
                                                <p class="alert" style="color: red;">error{{$message}}</p>
                                            @enderror
                                            @error('received_correspondence_irs_prior_year_tax_returns')
                                                <p class="alert" style="color: red;">error{{$message}}</p>
                                            @enderror
                                            @error('refer_name')
                                                <p class="alert" style="color: red;">error{{$message}}</p>
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
 
                                            <h5>Last year, did you (or your spouse):</h5> 

                                            @error('purchase_motor_vehicle')
                                                <p class="alert" style="color: red;">error{{$message}}</p>
                                            @enderror
                                            @error('attend_school_fulltime_student')
                                                <p class="alert" style="color: red;">error{{$message}}</p>
                                            @enderror
                                            @error('purchase_supplies_used_as_educator')
                                                <p class="alert" style="color: red;">error{{$message}}</p>
                                            @enderror
                                            @error('purchase_install_energy_efficient_home_item')
                                                <p class="alert" style="color: red;">error{{$message}}</p>
                                            @enderror
                                            @error('paid_estimated_tax_payment')
                                                <p class="alert" style="color: red;">error{{$message}}</p>
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
                                                        <input id="tag-input1" type="text" name="estimated_taxes_paid_and_date_1">
                                                    </span>

                                                    <span class="gutter-width col-lg-4 form-group">
                                                        <label for="tag-date1">Date</label> 
                                                        <input id="tag-date1" type="date" name="paid_taxes_date_1">
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

                                            <h5>Documentation included</h5>


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
                                                        <button class="btn btn-primary" type="button">Add</button>
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


                                            <h5 style="margin-top: 3em; margin-bottom:4em;">You're almost finshed!</h5>

                                            @error('address')
                                                <p class="alert" style="color: red;">error{{$message}}</p>
                                            @enderror
                                            @error('City')
                                                <p class="alert" style="color: red;">error{{$message}}</p>
                                            @enderror
                                            @error('state"')
                                                <p class="alert" style="color: red;">error{{$message}}</p>
                                            @enderror
                                            @error('zip')
                                                <p class="alert" style="color: red;">error{{$message}}</p>
                                            @enderror
                                            @error('paid_estimated_tax_payment')
                                                <p class="alert" style="color: red;">error{{$message}}</p>
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
                                                            <label style="margin-top:4px" for="routingNumber">Bank: Routing #:</label> 
                                                            <input id="routingNumber" type="text" placeholder="Routing #" maxlength="9" name="bank_routing_number" >
                                                        </span>

                                                        <span class="gutter-width col-lg-4 form-group">
                                                            <label for="accountNumber">Account #:</label> 
                                                            <input id="accountNumber" type="text" placeholder="Account #" maxlength="17" name="bank_account_number" >
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


                                            <div class="row form-group">
                                                <p class="col-lg-6">
                                                    <textarea placeholder="Please provide reason for paper filing: "></textarea name="reason_for_paper_filing" >
                                                </p>
                                            </div>


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

                                            <h5 style="margin-top: 3em; margin-bottom:4em;">We appreciate the opportunity to advise you regarding tax matters and preparing your 2021 tax return.</h5>
                                        </div>



                                    </div>

                                </form>

                                    <!-- FIND -->

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

        <div id="modals">
            <div class="modal fade" id="menu-modal" tabindex="-1" role="dialog" aria-labelledby="menu-modal" aria-hidden="true">
                <div class="modal-dialog modal-full" role="document">
                    <div class="wrapper">
                        <div class="modal-content">
                            <div class="modal-header modal-header-top">
                                <div class="header-content d-flex justify-content-between w-100">
                                    <div class="header-left align-self-center">
                                        <div class="header-logo">
                                            <a class="logo logo-secondary transform-scale-h" title="Logo" href="index.html">
                                                <img src="assets/img/logo/logo-light.svg" alt="Logo">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="header-right d-flex justify-content-end">
                                        <div class="d-flex align-items-center">
                                            <div class="search-toggle">
                                                <button type="button" class="btn btn-lg btn-outline-tertiary btn-round p-0 min-w-auto" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></button>
                                            </div>

                                            <div class="menu-close-toggle">
                                                <button type="button" class="btn btn-lg btn-outline-tertiary btn-round p-0 min-w-auto" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-body modal-body-centered">
                                <div class="d-flex flex-column flex-sm-row flex-md-row flex-lg-row flex-xl-row justify-content-between align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center w-100">
                                    <div class="modal-text order-1 order-sm-0 order-md-0 order-lg-0 order-xl-0">
                                        <p>575 Crescent Avenue <br>PA 18951 <br>United Kingdom</p>

                                        <p>
                                            <a href="tel:+43253312523">+432 533 12 523</a><br>
                                            <a href="mailto:info@domain.com">info@domain.com</a>
                                        </p>
                                    </div>

                                    <div class="animated fadeinright d-flex justify-content-end w-100 order-0 order-sm-1 order-md-1 order-lg-1 order-xl-1">
                                        <nav class="menu-primary">
                                            <ul class="nav">

                                                <li class="nav-item">
                                                     <form method="POST" action="/logout">
                                                        @csrf
                                                        <button class="text-white" style="border:none; background: transparent;font-size: 25px;"  type="submit">Logout</button>

                                                    </form>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <div class="d-flex flex-column flex-sm-row flex-md-row flex-lg-row flex-xl-row justify-content-between w-100">
                                    <div class="modal-text">
                                        <p>© <script>document.write( new Date().getFullYear() );</script> Business Consulting Agency HTML Template By Adveits</p>
                                    </div>

                                    <nav class="languages">
                                        <ul class="nav">
                                            <li class="lang-item current-lang">
                                                <a title="En" href="index.html">En</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- #menu-modal -->

            <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-labelledby="search-modal" aria-hidden="true">
                <div class="modal-dialog modal-full" role="document">
                    <div class="wrapper">
                        <div class="modal-content">
                            <div class="modal-header modal-header-top">
                                <div class="header-content d-flex justify-content-between w-100">
                                    <div class="header-left align-self-center">
                                        <div class="header-logo">
                                            <a class="logo logo-secondary transform-scale-h" title="Logo" href="index.html">
                                                <img src="assets/img/logo/logo-light.svg" alt="Logo">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="header-right d-flex justify-content-end">
                                        <div class="d-flex align-items-center">
                                            <div class="search-close-toggle">
                                                <button type="button" class="btn btn-lg btn-outline-tertiary btn-round p-0 min-w-auto" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-body modal-body-centered">
                                <form class="search-form" role="search" method="get" action="search-results.html">
                                    <div class="search input-group">
                                        <input class="form-control form-control-lg" type="text" placeholder="Search" name="s">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-link border-0 p-0 min-w-auto"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="modal-footer">
                                <div class="d-flex flex-column flex-sm-row flex-md-row flex-lg-row flex-xl-row justify-content-between w-100">
                                    <div class="modal-text">
                                        <p>© <script>document.write( new Date().getFullYear() );</script> Business Consulting Agency HTML Template By Adveits</p>
                                    </div>

                                    <nav class="languages">
                                        <ul class="nav">
                                            <li class="lang-item current-lang">
                                                <a title="En" href="index.html">En</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- #search-modal -->
        </div><!-- #modals -->

        <!-- JS -->
        <script src="assets/js/main.min.js"></script>
        <script src="assets/js/dependents.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
</html>