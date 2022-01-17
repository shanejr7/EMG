   <div id="modals">
            <div class="modal fade" id="menu-modal" tabindex="-1" role="dialog" aria-labelledby="menu-modal" aria-hidden="true">
                <div class="modal-dialog modal-full" role="document">
                    <div class="wrapper">
                        <div class="modal-content">
                            <div class="modal-header modal-header-top">
                                <div class="header-content d-flex justify-content-between w-100">
                                    <div class="header-left align-self-center">
                                        <div class="header-logo">
                                            <a class="logo logo-secondary transform-scale-h" title="Logo" href="/">
                                                 <img style="width:200px;" src="assets/img/logo/IMG_1324.jpg" alt="Logo">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="header-right d-flex justify-content-end">
                                        <div class="d-flex align-items-center">
                                            <!-- <div class="search-toggle">
                                                <button type="button" class="btn btn-lg btn-outline-tertiary btn-round p-0 min-w-auto" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></button>
                                            </div> -->

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
                                     <!--    <p>po box</p> -->

                                        <p>
                                            <a href="tel:+214 892 9129">+214 892 9129</a><br>
                                            <a href="mailto:egreen@emgbusinessconsulting.com">egreen@emgbusinessconsulting.com</a>
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
                                        <p>© <script>document.write( new Date().getFullYear() );</script> EMG Business Consulting LLC</p>
                                    </div>

                                    <nav class="languages">
                                        <ul class="nav">
                                            <li class="lang-item current-lang">
                                                <a title="En" href="/">En</a>
                                            </li>

                                           <!--  <li class="lang-item">
                                                <a title="Ru" href="index.html">Ru</a>
                                            </li> -->
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