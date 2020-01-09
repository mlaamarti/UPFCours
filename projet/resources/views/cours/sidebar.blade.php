
<!-- sidebar -->
    <div class="admin-side" id="admin-side">
        <a href="/formateur/home" class="admin-logo"><i class="fas fa-graduation-cap"></i> UPFCours</a>
        <ul data-simplebar>
            <li>
                <a href="/formateur/home" @if(Route::currentRouteName() == 'home') class="active" @endif> <i class="fas fa-tachometer-alt"></i> Dashboard</a>
            </li>
            <li>
                <a href="/formateur/cours" @if(Route::currentRouteName() == 'cours') class="active" @endif> <i class="fas fa-play"></i> Courses    </a>
            </li>
            <li>
                <a href="/formateur/books" @if(Route::currentRouteName() == 'books') class="active" @endif> <i class="fas fa-book-open"></i> Books    </a>
            </li>
            <li>
                <a href="/formateur/scripts" @if(Route::currentRouteName() == 'scripts') class="active" @endif> <i class="fas fa-code"></i> Scripts    </a>
            </li>

            <li><hr></li>

            <li>
                <div class="uk-card uk-card-default uk-width-1-1@s">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto">
                                <img class="uk-border-circle" src="{{asset('images/avatures/avature-2.png')}}" style="width: 30px !important;height:30px !important ;">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom" style="font-size: 14px !important; ">laamarti mohamed</h3>
                                <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="log_out">
                <button onclick="window.location.href = '/formateur/logout';" class="uk-button uk-button-default"><i class="fas fa-sign-out-alt uk-margin-small-right"></i> Logut</button>
            </li>
        </ul>
    </div>
    <!-- mobile  header -->
    <div class="admin-mobile-headder uk-hidden@m">
        <span uk-toggle="target: #admin-side; cls: admin-side-active" class="uk-padding-small uk-text-white uk-float-right"><i class="fas fa-bars"></i></span>
        <a class="uk-logo" href="/formateur/home"> <i class="fas fa-graduation-cap"> </i> UPFCours</a>
    </div>
