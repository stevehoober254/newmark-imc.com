<header>
    <div class="main-nav" id="navbar">
        <div class="container">
            <div class="top-header">
                <div class="d-flex justify-content-between">
                    <div class="header-left">
                    </div>
                    <div class="header-right d-flex justify-content-between">
                        <div>
                            <div class="padding-right">
                                <div class="d-flex justify-content-start">
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <a>
                                                <span class="fa-2x margin-right-half-half">
                                                    <i class="fa fa-phone main-color " data-fa-transform="shrink-8"
                                                        data-fa-mask="fas fa-circle"></i>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="company-contacts margin-right-half">
                                            <span>Phone Number:</span>
                                            <br>
                                            <span class="text-bold-1">+254 740 386 468</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <div>
                                            <a>
                                                <span class="fa-2x margin-right-half-half">
                                                    <i class="fa fa-envelope-open main-color "
                                                        data-fa-transform="shrink-8" data-fa-mask="fas fa-circle"></i>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="company-contacts">
                                            <span>Contact Mail:</span>
                                            <br>
                                            <span class="text-bold-1">hello@newmark-imc.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="social-icons">
                            <a href="https://www.youtube.com/channel/UCU8v_ZA8yrHssHyOqSyuq7g" target="_blank">
                                <span class="fa-2x">
                                    <i class="fab fa-fw fa-youtube main-color " data-fa-transform="shrink-8"
                                        data-fa-mask="fas fa-circle"></i>
                                </span>
                            </a>
                            <a href="https://twitter.com/NEWMARKWORLD" target="_blank">
                                <span class="fa-2x">
                                    <i class="fab fa-fw fa-twitter main-color " data-fa-transform="shrink-8"
                                        data-fa-mask="fas fa-circle"></i>
                                </span>
                            </a>
                            <a href="https://www.facebook.com/newmarkgroup/" target="_blank">
                                <span class="fa-2x">
                                    <i class="fab fa-fw fa-facebook-f main-color " data-fa-transform="shrink-8"
                                        data-fa-mask="fas fa-circle"></i>
                                </span>
                            </a>
                            <a href="https://www.linkedin.com/company/newmark-group-ltd/" target="_blank">
                                <span class="fa-2x">
                                    <i class="fab fa-fw fa-linkedin main-color " data-fa-transform="shrink-8"
                                        data-fa-mask="fas fa-circle"></i>
                                </span>
                            </a>
                            <a href="https://www.instagram.com/newmarkgroupltd/" target="_blank">
                                <span class="fa-2x">
                                    <i class="fab fa-fw fa-instagram main-color " data-fa-transform="shrink-8"
                                        data-fa-mask="fas fa-circle"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <nav id="navbarmain" class="navigation mt-3">
                <div class="nav-header">
                    <a class="nav-logo" href="{{ route('index') }}">
                        <img src="{{ asset('img/newmark-logo.png') }}" class="white-logo" alt="">
                    </a>
                    <div class="nav-toggle"></div>
                </div>
                <div class="nav-menus-wrapper">
                    <ul class="nav-menu align-to-right text-uppercase">
                        <li><a href="{{ route('index') }}">HOME</a>
                        </li>
                        <li>
                            <a class="" href="{{ route('about.us') }}">About us</a>
                        </li>
                        <li>
                            <a class="" href="{{ route('our-ceo') }}">our ceo</a>
                        </li>
                        <li>
                            <a class="main-color-theme text-bold" href="{{ route('careers') }}">#Careers</a>
                        </li>
                        <li>
                            <a href="#">Thought leadership</a>
                            <ul class="nav-dropdown">
                                <li>
                                    <a href="https://influencexxi.newmark-imc.com/" target="_blank">Influence
                                        XXI</a>
                                </li>
                                <li>
                                    <a href="{{ route('index') }}#insights">Insights</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('contact.us') }}">CONTACT us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="nav-stripe"></div>
    </div>
</header>
