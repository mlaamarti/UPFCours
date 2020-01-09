<nav class="uk-navbar">
    <!-- navbar -->
    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
            <li class="uk-active">
                <a href="/formateur/home">Dashboard</a>
            </li>
        </ul>
    </div>
    <!-- right navbar  -->
    <div class="uk-navbar-right">
        <!-- User profile -->
        <a href="#">
            <img src="{{asset('images/avatures/avature-2.png')}}" alt="" class="uk-border-circle user-profile-tiny">
        </a>
        <div uk-dropdown="pos: top-right ;mode : click ;animation: uk-animation-slide-bottom-small" class="uk-dropdown uk-padding-small angle-top-right uk-dropdown-bottom-right" >
            <p class="uk-margin-remove-bottom uk-margin-small-top uk-text-bold"> laamarti moahmed </p>
            <ul class="uk-nav uk-dropdown-nav">
                <li>
                    <a href="/formateur/profile"> <i class="fas fa-user uk-margin-small-right"></i> Profile</a>
                </li>
                <li>
                    <a href="/formateur/logout"> <i class="fas fa-sign-out-alt uk-margin-small-right"></i> Log out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
