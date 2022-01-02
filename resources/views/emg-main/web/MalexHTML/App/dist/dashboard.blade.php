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
                           <!--  <a class="logo logo-primary" title="Logo" href="#"> -->
                                <h3 class="large title">EMG Business Consulting</h3>
                                <!-- <img src="assets/img/logo/IMG_1326.jpg" style="transform: scale(5);" alt="Logo"> -->
                           <!--  </a> -->
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

                                        <li class="nav-item">
                                            <div style="margin-top: 2px;">
                                            <a style="color: black;" href="/#contacts">Settings</a>
                                        </div>
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

            <div id="page-content" class="spacer ">
                <div class="wrapper">
                    <div class="content">
                        <div id="single">
                            <div class="row gutter-width-md">
                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 single-content">
   <div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <!-- <a style="font-size: 25px;" class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</a> -->
     <!--  <a style="font-size: 25px;" class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">New client information</a> -->
     <!--  <a style="font-size: 25px;" class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a> -->
      <!-- <a style="font-size: 25px;" class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a> -->
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">

      <!-- <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div> -->

      <div class="tab-pane fade " id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"><form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form></div>

   <!--    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
        <div id="comments" class="comments-area m-top-xl">
                                        <div class="comment-title">
                                            <h3 style="color:green;">1 Comment</h3>
                                        </div>

                                        <ul class="comment-list list-unstyled style-default">
                                            <li class="comment">
                                                <div class="comment-wrapper">
                                                    <div class="comment-details">
                                                        <div class="comment-content">
                                                            <div class="comment-content-left">
                                                                <div class="comment-img">
                                                                    <img src="assets/img/placeholder/110x110.jpg" alt="Rosie Ford">
                                                                </div>
                                                            </div>

                                                            <div class="comment-content-right">
                                                                <h5 class="comment-author after">
                                                                    <a style="color:blue" title="Rosie Ford" href="news-single-post.html">Rosie Ford</a>
                                                                </h5>

                                                                <div class="comment-time">
                                                                    <p>29 February, <script>document.write( new Date().getFullYear() );</script> 3:23 pm</p>
                                                                </div>

                                                                <div class="comment-description">
                                                                    <p style="color: black;">No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally.</p>
                                                                </div>

                                                                <div class="comment-reply">
                                                                    <a title="Reply" class="btn btn-sm btn-link btn-icon p-0 border-0 min-w-auto link-no-space text-uppercase scroll-to-id" href="#reply-title">
                                                                        <i class="malex-icon-arrow-right i-large"></i>
                                                                        <span class="btn-text">Reply</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="block spacer m-top-xl">
                                            <div id="respond" class="comment-respond">
                                                <h3 id="reply-title" class="comment-reply-title">Leave a Reply <a rel="nofollow" id="cancel-comment-reply-link" class="btn btn-link border-0 p-0 min-w-auto link-no-space" href="news-single-post.html" style="display:none">Cancel Reply</a></h3>

                                                <form action="form.php" method="post" id="commentform" class="comment-form">
                                                    <div class="form-group form-group-sm">
                                                        <p class="comment-notes">Your email address will not be published. Required fields are marked <span class="required">*</span></p>
                                                    </div>

                                                    <div class="form-group form-group-xs">
                                                        <textarea id="comment" class="form-control form-control-lg" name="comment" cols="45" rows="6" placeholder="Comment *" required="required"></textarea>
                                                    </div>

                                                    <div class="form-group form-group-xs">
                                                        <input id="comment-author" class="form-control form-control-lg" name="comment-author" type="text" placeholder="Name *" required="required">
                                                    </div>

                                                    <div class="form-group form-group-xs">
                                                        <input id="comment-email" class="form-control form-control-lg" name="comment-email" type="email" placeholder="Email *" required="required">
                                                    </div>

                                                    <div class="form-group form-group-sm">
                                                        <input id="comment-url" class="form-control form-control-lg" name="comment-url" placeholder="Website" type="url">
                                                    </div>

                                                    <div class="form-group form-group-sm">
                                                        <p class="comment-form-cookies-consent custom-control custom-checkbox">
                                                            <input id="wp-comment-cookies-consent" class="custom-control-input" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                                                            <label class="custom-control-label" for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                                                        </p>
                                                    </div>

                                                    <div class="form-submit">
                                                        <input name="submit" type="submit" class="btn btn-outline-secondary" value="Post Comment">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div></div> -->
     <!--  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div> -->
    </div>
  </div>
</div>
<!-- <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
New Client Information <span class="badge badge-light">1</span>
</button>


<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <div class="block  m-top-xl">
                                            <div id="respond" class="comment-respond">
                                                <h3 id="reply-title" class="comment-reply-title">Leave a Reply <a rel="nofollow" id="cancel-comment-reply-link" class="btn btn-link border-0 p-0 min-w-auto link-no-space" href="news-single-post.html" style="display:none">Cancel Reply</a></h3>

                                                <form action="form.php" method="post" id="commentform" class="comment-form">
                                                    <div class="form-group form-group-sm">
                                                        <p class="comment-notes">Your email address will not be published. Required fields are marked <span class="required">*</span></p>
                                                    </div>

                                                    <div class="form-group form-group-xs">
                                                        <textarea id="comment" class="form-control form-control-lg" name="comment" cols="45" rows="6" placeholder="Comment *" required="required"></textarea>
                                                    </div>

                                                    <div class="form-group form-group-xs">
                                                        <input id="comment-author" class="form-control form-control-lg" name="comment-author" type="text" placeholder="Name *" required="required">
                                                    </div>

                                                    <div class="form-group form-group-xs">
                                                        <input id="comment-email" class="form-control form-control-lg" name="comment-email" type="email" placeholder="Email *" required="required">
                                                    </div>

                                                    <div class="form-group form-group-sm">
                                                        <input id="comment-url" class="form-control form-control-lg" name="comment-url" placeholder="Website" type="url">
                                                    </div>

                                                    <div class="form-group form-group-sm">
                                                        <p class="comment-form-cookies-consent custom-control custom-checkbox">
                                                            <input id="wp-comment-cookies-consent" class="custom-control-input" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                                                            <label class="custom-control-label" for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                                                        </p>
                                                    </div>

                                                    <div class="form-submit">
                                                        <input name="submit" type="submit" class="btn btn-outline-secondary" value="Post Comment">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

  </div>
</div> -->
                                   <!--  <div class="meta">
                                        <p>
                                            <span><a href="news.html">By admin</a></span>
                                            <span>-</span>
                                            <span>Comments (1)</span>
                                            <span>-</span>
                                            <span class="category"><a title="Business" href="news.html">Business</a></span>
                                        </p>
                                    </div> -->
<!-- 
                                    <div class="title">
                                        <h2>Assessing the Maturity of Your Data Management in Industry</h2>
                                    </div>

                                    <div class="description clearfix">
                                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>

                                        <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>

                                        <blockquote>
                                            <p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
                                        </blockquote>

                                        <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>
                                    </div> -->

                                   <!--  <div class="tags">
                                        <p>
                                            <a title="Strategy" href="news.html">Strategy</a>
                                            <a title="Sales" href="news.html">Sales</a>
                                            <a title="Business" href="news.html">Business</a>
                                        </p>
                                    </div> -->

                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <aside id="aside" class="widget-area">
                                        <!-- <div class="widget widget_search">
                                            <form class="search-form" role="search" method="get" action="search-results.html">
                                                <div class="search input-group">
                                                    <input class="form-control form-control-lg" type="text" placeholder="Search" name="s">

                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-link border-0 p-0 min-w-auto"><i class="fas fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div> -->

                                        <div class="widget widget_categories">
                                            <h6 class="widget-title"><button type="button" class="btn btn-primary">
  Notifications <span class="badge badge-light">1</span>
</button></h6>

                                         <!--    <ul>
                                                <li class="cat-item">
                                                    <a title="Strategy" href="news.html">Strategy</a>
                                                </li>

                                                <li class="cat-item">
                                                    <a title="Sales" href="news.html">Sales</a>
                                                </li>

                                                <li class="cat-item">
                                                    <a title="Marketing" href="news.html">Marketing</a>
                                                </li>

                                                <li class="cat-item">
                                                    <a title="Business" href="news.html">Business</a>
                                                </li>
                                            </ul> -->
                                        </div>

                                       <!--  <div class="widget widget_recent_entries">
                                            <h6 class="widget-title">Recent posts</h6>

                                            <ul class="list-unstyled items">
                                                <li class="item">
                                                    <div class="row gutter-width-xs">
                                                        <div class="col-3">
                                                            <a href="news-single-post.html">
                                                                <div class="img object-fit overflow-hidden">
                                                                    <div class="object-fit-cover transform-scale-h">
                                                                        <img src="assets/img/placeholder/91x91.jpg" alt="5 Tips for Sustainable Business Success">
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="col-9 align-self-center">
                                                            <p class="item-t-head"><a title="5 Tips for Sustainable Business Success" href="news-single-post.html">5 Tips for Sustainable Business Success</a></p>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="item">
                                                    <div class="row gutter-width-xs">
                                                        <div class="col-3">
                                                            <a href="news-single-post.html">
                                                                <div class="img object-fit overflow-hidden">
                                                                    <div class="object-fit-cover transform-scale-h">
                                                                        <img src="assets/img/placeholder/91x91.jpg" alt="Assessing the Maturity of Your Data Management in Industry">
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="col-9 align-self-center">
                                                            <p class="item-t-head"><a title="Assessing the Maturity of Your Data Management in Industry" href="news-single-post.html">Assessing the Maturity of Your Data Management in Industry</a></p>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="item">
                                                    <div class="row gutter-width-xs">
                                                        <div class="col-3">
                                                            <a href="news-single-post.html">
                                                                <div class="img object-fit overflow-hidden">
                                                                    <div class="object-fit-cover transform-scale-h">
                                                                        <img src="assets/img/placeholder/91x91.jpg" alt="How to Build Your Sustainable Susiness Strategy">
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="col-9 align-self-center">
                                                            <p class="item-t-head"><a title="How to Build Your Sustainable Susiness Strategy" href="news-single-post.html">How to Build Your Sustainable Susiness Strategy</a></p>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="item">
                                                    <div class="row gutter-width-xs">
                                                        <div class="col-3">
                                                            <a href="news-single-post.html">
                                                                <div class="img object-fit overflow-hidden">
                                                                    <div class="object-fit-cover transform-scale-h">
                                                                        <img src="assets/img/placeholder/91x91.jpg" alt="5 Tips for Sustainable Business Success">
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="col-9 align-self-center">
                                                            <p class="item-t-head"><a title="5 Tips for Sustainable Business Success" href="news-single-post.html">5 Tips for Sustainable Business Success</a></p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> -->
<!-- 
                                        <div class="widget widget_recent_comments">
                                            <h6 class="widget-title">Recent Comments</h6>

                                            <ul id="recentcomments">
                                                <li class="recentcomments">
                                                    <span class="comment-author-link">Tommy Andersen</span> on
                                                    <a title="Tommy Andersen" href="news-single-post.html#comments">Lorem ipsum dolor sit amet, consectetur adipiscing elit…</a>
                                                </li>

                                                <li class="recentcomments">
                                                    <span class="comment-author-link">Rosie Ford</span> on
                                                    <a title="Rosie Ford" href="news-single-post.html#comments">Lorem ipsum dolor sit amet, consectetur adipiscing elit…</a>
                                                </li>

                                                <li class="recentcomments">
                                                    <span class="comment-author-link">Arthur Hopin</span> on
                                                    <a title="Arthur Hopin" href="news-single-post.html#comments">Lorem ipsum dolor sit amet, consectetur adipiscing elit…</a>
                                                </li>
                                            </ul>
                                        </div> -->

                                        <div class="widget widget_tag_cloud">
                                            <h6 class="widget-title">Tags</h6>

                                            <div class="tagcloud">
                                                <a title="Strategy" href="news.html" class="tag-cloud-link">Strategy</a>
                                                <a title="Marketing" href="news.html" class="tag-cloud-link">Marketing</a>
                                                <a title="Business" href="news.html" class="tag-cloud-link">Business</a>
                                            </div>
                                        </div>
                                    </aside>
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

                                                <li class="nav-item">
                                                    <a style="margin-top: 2px; font-size: 25px;" href="#">Settings</a>
                                                </li>

                                              <!--   <li class="nav-item">
                                                    <a title="Services" href="index.html#services">Services</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a title="About Us" href="index.html#about-us">About Us</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a title="Teams" href="index.html#team-members">Team</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a title="Pricing" href="index.html#price-plans">Pricing</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a title="Testimonials" href="index.html#testimonials">Testimonials</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a title="News" href="news.html">News</a>
                                                </li> -->

                                               <!--  <li class="nav-item">
                                                    <a title="Contacts" href="index.html#contacts">Contacts</a>
                                                </li> -->
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
    </body>
</html>