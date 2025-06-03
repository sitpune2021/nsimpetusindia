   <header>
        <div class="header-area header-transparent">
            <div class="main-header  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="{{ url('/') }}"><img src="assets/img/logo/logo.png" alt="" style="width: 100px;"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li class="{{ Request::is('/' . '*') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                                            <li class=" {{ Request::is('about' . '*') ? 'active' : '' }} "><a href="{{ url('about') }}">About</a></li>
                                            <li class=" {{ Request::is('services' . '*') ? 'active' : '' }} "><a href="{{ url('services') }}">Services</a></li>
                                            <li class=" {{ Request::is('contact' . '*') ? 'active' : '' }} "><a href="{{ url('/contact') }}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="#" class="btn header-btn">+91 97700332020</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>