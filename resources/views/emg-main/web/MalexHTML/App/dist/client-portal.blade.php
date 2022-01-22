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
                            <a class="nav-link  active" style="width: 12em; background-color: transparent; border-style: none;" id="client-tab" href="/ClientPortal" role="tab" aria-controls="client" aria-selected="false">Client Portal</a>
                        </li>

                        <li class="nav-item btn btn-primary">
                            <a class="nav-link " style="width: 12em; background-color: transparent;  border-style: none;" id="taxPortal-tab" href="/TaxPortal" role="tab" aria-controls="taxPortal" aria-selected="false">Tax Portal</a>
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
  
                                    <div class="tab-pane active" id="business" role="tabpanel" aria-labelledby="business-tab">
      
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 " style="margin-top:3em;">

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
                                         @error('business_type')
                                        <p class="alert" style="color: red;">{{$message}}</p>
                                        @enderror
                                         @error('business_activity')
                                        <p class="alert" style="color: red;">{{$message}}</p>
                                        @enderror
                                        @error('business_services')
                                        <p class="alert" style="color: red;">{{$message}}</p>
                                        @enderror
                                        @error('business_solutions')
                                        <p class="alert" style="color: red;">{{$message}}</p>
                                        @enderror
                                        @error('business_ideal_clients')
                                        <p class="alert" style="color: red;">{{$message}}</p>
                                        @enderror
                                        @error('business_environment')
                                        <p class="alert" style="color: red;">{{$message}}</p>
                                        @enderror
                                        @error('business_issues')
                                        <p class="alert" style="color: red;">{{$message}}</p>
                                        @enderror
                                        @error('business_goal_and_timeframe')
                                        <p class="alert" style="color: red;">{{$message}}</p>
                                        @enderror
                                        @error('website_url')
                                        <p class="alert" style="color: red;">{{$message}}</p>
                                        @enderror

<!-- after submission -->


@if(isset($client))
                                        <h2 class="text-center" style="color:orange"><span style="color: black;">Client Business Portfolio:</span>
                                        {{$client->first_name}} {{$client->last_name}} </h2>
                                        <blockquote  class="blockquote text-center">
                                            <h3 class="mb-0">Business type</h3>
                                            <footer class="blockquote-footer" id="color" style="font-size: 25px; font-weight: bolder;">{{{$client->business_type}}}</footer>
                                        </blockquote>
                                        <blockquote class="blockquote text-center">
                                            <h3 class="mb-0">Business activity</h3>
                                            <footer class="blockquote-footer" id="color" style="font-size: 25px; font-weight: bolder;">{{{$client->business_activity}}} </footer>
                                        </blockquote>
                                        <blockquote class="blockquote text-center">
                                            <h3 class="mb-0">Business services</h3>
                                            <footer class="blockquote-footer" id="color" style="font-size: 25px; font-weight: bolder;">{{{$client->business_services}}}</footer>
                                        </blockquote>
                                        <blockquote class="blockquote text-center">
                                            <h3 class="mb-0">Business solutions</h3>
                                            <footer class="blockquote-footer" id="color" style="font-size: 25px; font-weight: bolder;">{{{$client->business_solutions}}}</footer>
                                        </blockquote>
                                        <blockquote class="blockquote text-center">
                                            <h3 class="mb-0">Business identity</h3>
                                            <footer class="blockquote-footer" id="color" style="font-size: 25px; font-weight: bolder;">      {{{$client->business_ideal_clients}}}</footer>
                                        </blockquote>
                                        <blockquote class="blockquote text-center">
                                            <h3 class="mb-0">Business environment</h3>
                                            <footer class="blockquote-footer" id="color" style="font-size: 25px; font-weight: bolder;">
                                             {{{$client->business_environment}}}</footer>
                                        </blockquote>
                                        <blockquote class="blockquote text-center">
                                            <h3 class="mb-0">Business prevention</h3>
                                            <footer class="blockquote-footer" id="color" style="font-size: 25px; font-weight: bolder;">         {{{$client->business_issues}}}</footer>
                                        </blockquote>
                                        <blockquote class="blockquote text-center">
                                            <h3 class="mb-0">Business milestones</h3>
                                        <footer class="blockquote-footer" id="color" style="font-size: 25px; font-weight: bolder;">{{{$client->business_goal_and_timeframe }}}</footer>
                                        </blockquote>


                                        @if($client->website_url)
                                        <nav class="nav">

                                            <a style="font-size: 35px;" class="nav-link active text-center" 
                                            href="{{{$client->website_url}}}" target="_blank">Website url : {{{$client->website_url}}}</a>

                                        </nav>
                                        @endif

                                        <h1>services desired: </h1>

                                      
                                        @if($client->business_services_desired_startup)
                                        <p>  
                                                    <input type="checkbox" id="checkbox-input" name="business_services_desired_startup" checked disabled>
                                                    <label for="checkbox-input" id="color">Business Startup</label>
                                        </p>
                                        @endif



                                  

                                    
                                            @if($client->business_services_desired_tax_preparation)
                                       <p class="form-check form-crop-ba">
                                                    <input type="checkbox" class="form-check-input" id="checkbox-input-2" name="business_services_desired_tax_preparation" checked disabled>
                                                    <label id="color" class="form-label-secondary" for="checkbox-input-2">Tax Preparation</label>
                                                </p>
                                            @endif
                                            
                                         




                                         @if($client->business_services_desired_planning_marketing)
                                         <p class="form-check form-crop-ba">
                                                    <input type="checkbox" class="form-check-input" id="checkbox-input-3" name="business_services_desired_planning_marketing" checked disabled>
                                                    <label id="color" class="form-label-secondary" for="checkbox-input-3">Business Planning & Marketing</label>
                                                </p>
                                        @endif

                                     


                                         @if($client->business_services_desired_web_development_design)
                                              <p class="form-check form-crop-ba">
                                                    <input type="checkbox" class="form-check-input" id="checkbox-input-4" name="business_services_desired_web_development_design" checked disabled>
                                                    <label id="color" class="form-label-secondary" for="checkbox-input-4">Web Design & Development</label>
                                                </p>
                                        @endif

                                        


                                         @if($client->business_services_desired_web_seo)

                                          <p class="form-check form-crop-ba">
                                                    <input type="checkbox" class="form-check-input" id="checkbox-input-5" name="business_services_desired_web_seo" checked disabled>
                                                    <label id="color" class="form-label-secondary" for="checkbox-input-5">Web Search Engine Optimization</label>
                                                </p>

                                        @endif

                                      

                                                
                               
  @endif

<!-- remove button to delete portfolio -->
  <!-- end of submission -->

  @if($client == null)

                                                <form method="POST" action="/client-business-information">

                                                @csrf

                                                <div class="row form-group">
                                                            
                                                    <div class="col-lg-3 form-group">
                                                        <label for="inputFirstNameBusinessForm">First name</label>       
                                                        <input id="inputFirstNameBusinessForm" type="text" class="form-control" placeholder="{{{ isset($client->first_name) ? $client->first_name : 'First name' }}}" name="first_name">
                                                    </div>

                                                    <div class="col-lg-3 form-group">
                                                        <label for="inputMiddleNameBusinessForm">Middle name</label>
                                                        <input id="inputMiddleNameBusinessForm" type="text" class="form-control" placeholder="{{{ isset($client->middle_name) ? $client->middle_name : 'Middle name' }}}" name="middle_name">
                                                    </div>
        
                                                    <div class="col-lg-3 form-group">
                                                        <label for="inputLastNameBusinessForm">Last name</label>
                                                        <input id="inputLastNameBusinessForm" type="text" class="form-control" placeholder="{{{ isset($client->last_name) ? $client->last_name : 'Last name' }}}" name="last_name">
                                                    </div>

                                                    <div class="col-lg-2 form-group">
                                                        <label for="inputSuffixBusinessForm">Suffix</label>
                                                        <input id="inputSuffixBusinessForm" type="text" class="form-control" placeholder="{{{ isset($client->suffix) ? $client->suffix : 'Suffix' }}}" name="suffix">
                                                    </div>

                                                </div>

                                                <div class="row form-group">
                                                    <p class="col-lg-12 input-group ">

                                                        <span class="form-group">
                                                            <label class="form-label-secondary" for="textareaBusiness">Business</label> 
                                                            <textarea id="textareaBusiness" placeholder="{{{ isset($client->business_type) ? $client->business_type : 'What type of business do you have?' }}}" name="business_type"></textarea>
                                                        </span>

                                                        <span class="form-group">
                                                            <label class="form-label-secondary" for="textareaActivity">Activity</label>
                                                            <textarea id="textareaActivity" placeholder="{{{ isset($client->business_activity) ? $client->business_activity : 'Is your business active, or are you just getting started?' }}}" name="business_activity"></textarea>
                                                        </span>

                                                        <span class="form-group">
                                                            <label class="form-label-secondary" for="textareaServices">Services</label>
                                                            <textarea id="textareaServices" placeholder="{{{ isset($client->business_services) ? $client->business_services : 'What type of services do you offer?' }}}" name="business_services"></textarea>
                                                        </span>


                                                        <span class="form-group">
                                                            <label class="form-label-secondary" for="textareaSolutions">Solutions</label>
                                                            <textarea id="textareaSolutions" placeholder="{{{ isset($client->business_solutions) ? $client->business_solutions : 'What are the core problems your business solves (i.e., what is your niche?)' }}}" name="business_solutions"></textarea>
                                                        </span>

                                                        <span class="form-group">
                                                            <label class="form-label-secondary" for="textareaIdentity">Identity</label>
                                                            <textarea id="textareaIdentity" placeholder="{{{ isset($client->business_ideal_clients) ? $client->business_ideal_clients : 'Who are your ideal and potential clients? (for example: men, women, disabled, etc.)' }}}" name="business_ideal_clients"></textarea>
                                                        </span>

                                                        <span class="form-group">
                                                            <label class="form-label-secondary" for="textareaEnvironmnet">Environment</label>
                                                            <textarea id="textareaEnvironmnet" placeholder="{{{ isset($client->business_environment) ? $client->business_environment : 'In what capacity are you wanting to work with clients or customers? (online, offline, publicly, private coaching)' }}}" name="business_environment"></textarea>
                                                        </span>

                                                        <span class="form-group">
                                                            <label class="form-label-secondary" for="textareaPrevention">Prevention</label>
                                                            <textarea id="textareaPrevention" placeholder="{{{ isset($client->business_issues) ? $client->business_issues : 'What is currently holding you back from having the business you want?' }}}" name="business_issues"></textarea>
                                                        </span>

                                                        <span class="form-group">
                                                            <label class="form-label-secondary" for="textareaMilestones">Milestones</label>
                                                            <textarea id="textareaMilestones" placeholder="{{{ isset($client->business_goal_and_timeframe) ? $client->business_goal_and_timeframe: 'What would you like to accomplish and what is your timeframe?' }}}" name="business_goal_and_timeframe"></textarea>
                                                        </span>
                                                    </p>

                                                </div>

                                                <p class="input-group gutter-width-30">
                                                    <span class="gutter-width">
                                                        <label class="form-label-secondary" for="textWebUrl">Website (if you have one)https://</label>
                                                        <input id="textWebUrl" type="text" placeholder="{{{ isset($client->website_url) ? $client->website_url : 'https://www.my-website.com' }}}" name="website_url">
                                                    </span>
                                                </p>

                                                <p>Please indicate types of services desired:</p>

                                                <p>
                                                    <input type="checkbox" id="checkbox-input" name="business_services_desired_startup">
                                                    <label for="checkbox-input">Business Startup</label>
                                                </p>

                                                <p class="form-check form-crop-ba">
                                                    <input type="checkbox" class="form-check-input" id="checkbox-input-2" name="business_services_desired_tax_preparation" >
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