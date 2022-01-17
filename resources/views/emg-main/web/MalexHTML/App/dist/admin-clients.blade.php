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
                 
                                <h3 class="large title">EMG Business Consulting</h3>
                           
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

                      <!--   <li class="nav-item btn btn-primary" >
                            <a class="nav-link" style="width: 12em; background-color: transparent; border-style: none;" id="home-tab"  href="/admin" role="tab" aria-controls="home" aria-selected="true">Notifications <span class="badge badge-dark">{{count($notifications)}}</span></a>
                        </li> -->

                        <li class="nav-item btn btn-primary">
                            <a class="nav-link" style="width: 12em; background-color: transparent; border-style: none;" id="profile-tab"  href="/adminAccount" role="tab" aria-controls="profile" aria-selected="false">Account</a>
                        </li>

                         <li class="nav-item btn btn-primary">
                            <a class="nav-link active" style="width: 12em; background-color: transparent; border-style: none;" id="client-tab" href="/adminClients" role="tab" aria-controls="client" aria-selected="false">Client Inormation</a>
                        </li>

                        <li class="nav-item btn btn-primary">
                            <a class="nav-link" style="width: 12em; background-color: transparent;  border-style: none;" id="taxPortal-tab" href="/adminTaxes" role="tab" aria-controls="taxPortal" aria-selected="false">Tax Submissions</a>
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


                                        @error('email')
                                        <p class="alert" style="color: red;">{{$message}}</p>
                                        @enderror
                                         @error('name')
                                        <p class="alert" style="color: red;">{{$message}}</p>
                                        @enderror

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 "style="margin-top:1.34em;">
                                   
                                           @if(sizeof($client) >0)
                                           @foreach($client as $client)
                                        <h2 class="text-center" style="color:orange"><span style="color: black;">Client Business Portfolio:</span> Shane M Johnson</h2>
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
                                            href="{{{$client->website_url}}}">Website url : {{{$client->website_url}}}</a>

                                        </nav>
                                        @endif

                                        <h1>services desired: </h1>

                                      
                                        @if($client->business_type)
                                        <p>  
                                                    <input type="checkbox" id="checkbox-input" name="business_services_desired_startup" checked disabled>
                                                    <label for="checkbox-input" id="color">Business Startup</label>
                                        </p>
                                        @endif


                                        @if(!$client->business_type)
                                                
                                        @endif

                                  

                                    
                                            @if($client->business_type)
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

                                      

                                          @endforeach      
                               
                                    @endif


                                    @if(sizeof($client) == 0)
                                    <h3 style="color:orange; margin-top: 8em;">There are no clients at the moment..</h3>

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