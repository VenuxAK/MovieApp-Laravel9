<header class="header">
    <div class="header__wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header__content">
                        <!-- header logo -->
                        <a href="/" class="header__logo">
                            <img src="/assets/img/logo.svg" alt="">
                        </a>
                        <!-- end header logo -->

                        <!-- header nav -->
                        <ul class="header__nav">
                            <li class="header__nav-item">
                                <a href="/" class="header__nav-link">HOME</a>
                            </li>

                            <li class="header__nav-item">
                                <a href="/movies" class="header__nav-link">Movies</a>
                            </li>

                            <li class="header__nav-item">
                                <a href="#" class="header__nav-link">Upcomming Movies</a>
                            </li>

                            <li class="header__nav-item">
                                <a href="/advanced-search" class="header__nav-link">Advanced Search</a>
                            </li>

                            <!-- dropdown -->
                            <li class="dropdown header__nav-item">
                                <a class="dropdown-toggle header__nav-link header__nav-link--more" href="#"
                                    role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="icon ion-ios-more"></i></a>

                                <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">
                                    {{-- <li><a href="/pricing-plan">Pricing Plan</a></li> --}}
                                    <li><a href="/faq">FAQ</a></li>
                                    <li><a href="/signin">Sign In</a></li>
                                    <li><a href="/signup">Sign Up</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                </ul>
                            </li>
                            <!-- end dropdown -->
                        </ul>
                        <!-- end header nav -->

                        <!-- header auth -->
                        <div class="header__auth">
                            <button class="header__search-btn" type="button">
                                <i class="icon ion-ios-search"></i>
                            </button>

                            @if (0)
                            <a href="/signin" class="header__sign-in">
                                <i class="icon ion-ios-log-in"></i>
                                <span>sign in</span>
                            </a>
                            @else
                            <a href="/username" class="header__sign-in">
                                <i class="icon ion-ios-log-in"></i>
                                <span>Profile</span>
                            </a>
                            @endif
                        </div>
                        <!-- end header auth -->

                        <!-- header menu btn -->
                        <button class="header__btn" type="button">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- end header menu btn -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- header search -->
    <form action="#" class="header__search">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header__search-content">
                        <input type="text" placeholder="Search for a movie, TV Series that you are looking for">

                        <button type="button">search</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- end header search -->
</header>
