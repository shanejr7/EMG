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
                            <a class="nav-link" style="width: 12em; background-color: transparent; border-style: none;" id="home-tab"  href="/dashboard" role="tab" aria-controls="home" aria-selected="true">Notifications <span class="badge badge-dark">{{count($notifications)}}</span></a>
                        </li>

                        <li class="nav-item btn btn-primary">
                            <a class="nav-link active" style="width: 12em; background-color: transparent; border-style: none;" id="profile-tab"  href="/account" role="tab" aria-controls="profile" aria-selected="false">Account</a>
                        </li>

                         <li class="nav-item btn btn-primary">
                            <a class="nav-link " style="width: 12em; background-color: transparent; border-style: none;" id="client-tab" href="/ClientPortal" role="tab" aria-controls="client" aria-selected="false">Client Portal</a>
                        </li>

                        <li class="nav-item btn btn-primary">
                            <a class="nav-link" style="width: 12em; background-color: transparent;  border-style: none;" id="taxPortal-tab" href="/TaxPortal" role="tab" aria-controls="taxPortal" aria-selected="false">Tax Portal</a>
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
                                   
                                            <div class="card card-body">
                                              

                                                    <div class="form-row" style="margin-bottom:4em">

                                                        <div class="form-group">
                                                          <form method="POST" action="/account-update/{{$email = 'email'}}">

                                                    @csrf

                                                        <div class="form-group col-md-12">
                                                            <label for="inputEmail">Email</label>
                                                            <input type="email" class="form-control" id="inputEmail" placeholder="{{ Auth::user()->email }}" name="email">

                                                        </div>


                                                    <div class="form-group col-md-6">
                                                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                                </div>

                                            </form>
                                        </div>

                                          <div class="form-group">
                                               <form method="POST" action="/account-update/{{$name = 'name'}}">

                                                    @csrf

                                                        <div class="form-group col-md-12">
                                                            <label for="inputName">Name</label>
                                                            <input type="name" class="form-control" id="inputName" placeholder="{{{ isset(Auth::user()->name) ? Auth::user()->name : 'name' }}}" name="name">
                                                        </div>
                                                           <div class="form-group col-md-6">
                                                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                                </div>

                                            </form>
                                        </div>


                                                    </div>

  
                                                   <!--  <div class="form-group">
                                                        <div class="form-check">
                                                            <input id="disabledFieldsetCheck" disabled class="form-check-input" type="checkbox" name="email_verified_at">
                                                            <label class="form-check-label" for="gridCheck" style="font-size:25px">
                                                        Verified email
                                                            </label>
                                                        </div>
                                                    </div> -->

                                                 

                                       
                                            </div>
                             

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