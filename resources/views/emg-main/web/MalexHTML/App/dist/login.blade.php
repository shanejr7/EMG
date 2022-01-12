<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/style.min.css">
        <title>Login | EMG - Business Consulting Agency</title>

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
    </head>
    <body class="page title-opacity-true header-absolute-true header-fixed-true">
     <!--    <div class="loading">
            <div class="wrapper h-100">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="loading-content">
                        <div class="logo logo-primary">
                            <img class="animated zoomin" src="assets/img/logo/logo-dark.svg" alt="Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>.loading --> 

        <!-- .site-header -->
        @include('/emg-main/web/MalexHTML/App/dist/components/header-login-register') 

        <main id="main" class="site-main content-no-spacing" style="margin-bottom:10em;">
            <div class="content">
                <div class="clearfix">
                    <section id="page-title" class="page-title text-center">
                        <div class="wrapper">
                            <div class="title" style="margin-bottom: 4em;margin-top:2;">
                                <h1 class="large" id="color" >Login</h1>
                            </div>

                            <div class="title-opacity">
                                <div class="title-opacity-text">EMG</div>
                            </div>
<!-- 
                            <div class="description spacer p-top-lg">
                                <p>A business consulting agency is involved in the planning, implementation, and education of businesses. We work directly with business owners on developing a business plan, identifying marketing needs and developing the necessary skills for business ownership.</p>
                            </div> -->

                            <div class="row">
                                <div class="col-lg-4">
                                </div>

                                <div class="col-lg-4">

                                    <form class="px-3 py-3" method="POST" action="/auth/login">

                                        @csrf

                                        <div class="form-group">
                                        <label for="DropdownFormEmail1">Email address</label>
                                        <input type="email" class="form-control" id="DropdownFormEmail1" placeholder="email@example.com" name="email" required>
                                         @error('email')
                                        <p class="alert" style="color: red;">{{$message}}</p>
                                        @enderror
                                        </div>
                                        <div class="form-group">
                                        <label for="DropdownFormPassword1">Password</label>
                                        <input type="password" class="form-control" id="DropdownFormPassword1" placeholder="Password" name="password" required>
                                        @error('password')
                                        <p class="alert" style="color: red">{{$message}}</p>
                                        @enderror
                                        </div>
                                      <!--   <div class="form-group">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                                <label class="form-check-label" for="dropdownCheck">Remember me
                                                </label>
                                            </div>
                                        </div> -->
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/registration">New around here? Sign up</a>
                                  <!--   <a class="dropdown-item" href="#">Forgot password?</a> -->

                                </div>
                            </div>

                        </div>
                    </section><!-- #page-title -->

                    <section id="price-plans" class="block spacer p-top-xl">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-3">
                                                </div>   
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <div class="description spacer p-top-lg text-center" style="font-weight:bold; color: black;">
                                                        <p>"A business consulting agency is involved in the planning, implementation, and education of businesses. We work directly with business owners on developing a business plan, identifying marketing needs and developing the necessary skills for business ownership."</p>
                                                    </div>
                                                </div>
                                            </div>
                    </section>

<!-- 
                    <div id="video" class="block spacer p-top-xl">
                        <div class="wrapper">
                            <div class="embed">
                                <div class="embed-image-overlay">
                                    <a class="embed-click swipebox" href="https://www.youtube.com/watch?v=lSNmfy_KOJg">
                                        <div class="embed-center">
                                            <div class="embed-play">
                                                <i class="fas fa-play"></i>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="embed-image">
                                        <div class="img object-fit">
                                            <div class="object-fit-cover">
                                                <img src="assets/img/placeholder/1920x800.jpg" alt="Video">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="embed-bg"></div>
                                </div>
                            </div>
                        </div>
                    </div> --><!-- #video -->

                  <!--   <section id="how-it-works" class="block bg-white before-block">
                        <div class="wrapper">
                            <div class="row no-gutters process-height">
                                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                    <div class="process pl-0">
                                        <div class="process-content">
                                            <h6 class="process-small-t-head">How it Works?</h6>

                                            <div class="process-description">
                                                <h2>We Guarantee a Stable Work Process</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                    <div class="process process-color-1">
                                        <div class="process-content">
                                            <h4 class="process-t-head">Business Analysis</h4>
                                            <p class="process-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
                                        </div>

                                        <div class="process-number">01</div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                    <div class="process process-color-2">
                                        <div class="process-content">
                                            <h4 class="process-t-head">Business Planning</h4>
                                            <p class="process-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
                                        </div>

                                        <div class="process-number">02</div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                    <div class="process process-color-3">
                                        <div class="process-content">
                                            <h4 class="process-t-head">Business Growth</h4>
                                            <p class="process-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
                                        </div>

                                        <div class="process-number">03</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> --><!-- #how-it-works -->

                 <!--    <section id="price-plans" class="block spacer p-top-xl">
                        <div class="wrapper">
                            <div class="title">
                                <h6 class="text-primary text-uppercase">Price Plans</h6>
                            </div>

                            <div class="title-opacity">
                                <div class="title-opacity-text">Plans</div>
                            </div>

                            <div class="description">
                                <h2>Choose the Best Plan for You</h2>
                            </div>

                            <div class="row gutter-width-md with-pb-md spacer p-top-lg">
                                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                    <div class="price-table">
                                        <div class="price-table-header">
                                            <h4 class="price-table-t-head">Basic Plan</h4>
                                            <p class="price-table-description">This is Basic Plan</p>
                                        </div>

                                        <div class="price-table-price">
                                            <p><span class="currency">$</span><span class="price">79</span><span class="period">/ Monthly</span></p>
                                        </div>

                                        <ul class="price-table-list-group list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Branding
                                                <i class="text-primary fas fa-check i-small"></i>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                20 hours of consultation
                                                <i class="text-primary fas fa-check i-small"></i>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                15 hours if theory
                                                <i class="text-primary fas fa-check i-small"></i>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Skype video call
                                                <i class="text-primary fas fa-check i-small"></i>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Support 24/7
                                                <i class="text-primary fas fa-check i-small"></i>
                                            </li>
                                        </ul>

                                        <div class="price-table-footer">
                                            <a href="#" class="btn btn-outline-secondary" data-toggle="modal" data-target="#plans-modal" data-whatever="Basic Plan">Choose Plan</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                    <div class="price-table">
                                        <div class="price-table-header">
                                            <h4 class="price-table-t-head">Standart Plan</h4>
                                            <p class="price-table-description">This is Standart Plan</p>
                                        </div>

                                        <div class="price-table-price">
                                            <p><span class="currency">$</span><span class="price">129</span><span class="period">/ Monthly</span></p>
                                        </div>

                                        <ul class="price-table-list-group list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Branding
                                                <i class="text-primary fas fa-check i-small"></i>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                20 hours of consultation
                                                <i class="text-primary fas fa-check i-small"></i>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                15 hours if theory
                                                <i class="text-primary fas fa-check i-small"></i>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Skype video call
                                                <i class="text-primary fas fa-check i-small"></i>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Support 24/7
                                                <i class="text-primary fas fa-check i-small"></i>
                                            </li>
                                        </ul>

                                        <div class="price-table-footer">
                                            <a href="#" class="btn btn-outline-secondary" data-toggle="modal" data-target="#plans-modal" data-whatever="Standart Plan">Choose Plan</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                    <div class="price-table">
                                        <div class="price-table-badge">
                                            <p>Popular</p>
                                        </div>

                                        <div class="price-table-header">
                                            <h4 class="price-table-t-head">Premium Plan</h4>
                                            <p class="price-table-description">This is Premium Plan</p>
                                        </div>

                                        <div class="price-table-price">
                                            <p><span class="currency">$</span><span class="price">259</span><span class="period">/ Monthly</span></p>
                                        </div>

                                        <ul class="price-table-list-group list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Branding
                                                <i class="text-primary fas fa-check i-small"></i>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                20 hours of consultation
                                                <i class="text-primary fas fa-check i-small"></i>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                15 hours if theory
                                                <i class="text-primary fas fa-check i-small"></i>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Skype video call
                                                <i class="text-primary fas fa-check i-small"></i>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Support 24/7
                                                <i class="text-primary fas fa-check i-small"></i>
                                            </li>
                                        </ul>

                                        <div class="price-table-footer">
                                            <a href="#" class="btn btn-outline-secondary" data-toggle="modal" data-target="#plans-modal" data-whatever="Premium Plan">Choose Plan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> --><!-- #price-plans -->

                 <!--  <div class="block bg-white spacer  m-top-xl">
                        <div>
                            <img style="  overflow: hidden;bottom: 0;width: 100%;" src="assets/img/placeholder/skyline_1.jpg" alt="skyline">
                        </div>
                      
                    </div>  --><!-- #banner -->
                </div>
            </div>
        </main><!-- .site-main -->

        <!-- .site-footer -->
        @include('/emg-main/web/MalexHTML/App/dist/components/footer') 

        <!-- #modals -->
        @include('/emg-main/web/MalexHTML/App/dist/components/modal-register-login') 

        <!-- JS -->
        <script src="assets/js/main.min.js"></script>
    </body>
</html>