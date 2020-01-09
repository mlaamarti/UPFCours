<!-- Get Header -->
@extends('layouts.header')
@section('title', 'Tous vers l\'excellence et l\'innovation')


<!-- Get Sidebar -->
@extends('includes.sidebar')


<!-- main contant -->
<div class="admin-content">

    <!-- Get Sidebar -->
    @include('includes.nav')

    <div class="admin-content-inner">
        <div class="uk-child-width-1-4@m uk-child-width-1-1 uk-child-width-1-2@s uk-grid-match " uk-grid>
            <div>
                <div class="uk-background-cover uk-light dashboard-card" data-src="{{asset('images/admin/cards-bg.jpg')}}" uk-img>
                    <i class="far fa-user icon-xxlarge uk-visible@m"></i>
                    <h3> 32 Users </h3>
                    <p> pro detracto disputando reformidans at</p>
                    <a href="#"> View All </a>
                </div>
            </div>
            <div>
                <div class="uk-background-cover uk-light dashboard-card" data-src="{{asset('images/admin/cards-bg.jpg')}}" uk-img>
                    <i class="fas fa-play icon-xxlarge uk-visible@m"></i>
                    <h3> 32 Course </h3>
                    <p> pro detracto disputando reformidans at</p>
                    <a href="#"> View All </a>
                </div>
            </div>
            <div>
                <div class="uk-background-cover uk-light dashboard-card" data-src="{{asset('images/admin/cards-bg.jpg')}}" uk-img>
                    <i class="fas fa-book-open icon-xxlarge uk-visible@m"></i>
                    <h3> 120 Books </h3>
                    <p>  pro detracto disputando reformidans at </p>
                    <a href="#"> View All </a>
                </div>
            </div>
            <div>
                <div class="uk-background-cover uk-light dashboard-card" data-src="{{asset('images/admin/cards-bg.jpg')}}" uk-img>
                    <i class="fas fa-code icon-xxlarge uk-visible@m"></i>
                    <h3> 10 Script </h3>
                    <p>  pro detracto disputando reformidans at </p>
                    <a href="#"> View All </a>
                </div>
            </div>
        </div>

        <div uk-grid>
            <div class="uk-width-1-2@m">
                <div class="uk-card-small uk-card-default">
                    <div class="uk-card-header uk-text-bold">
                        <i class="fas fa-users uk-margin-small-right"></i> Latest  Regsiter users
                    </div>
                    <div class="uk-card-body uk-padding-remove-top">
                        <div class="uk-child-width-1-4@m uk-child-width-1-2 uk-grid-collapse uk-flex-center"  uk-scrollspy="target: > div; cls:uk-animation-scale-up; delay: 100" uk-grid>
                            <div>
                                <a href="admin-profile.html" class="uk-link-reset">
                                    <div class="uk-padding-remove   uk-text-center">
                                        <img alt="Image" class="uk-width-2-3 uk-margin-top uk-margin-small-bottom uk-border-circle uk-align-center uk-box-shadow-large" src="images/avatures/avature-4.png">
                                        <h5 class="uk-margin-remove-bottom uk-margin-remove-top ">Quen smith</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-width-1-2@m">
                <div class="uk-card-small uk-card-default">
                    <div class="uk-card-header uk-text-bold">
                        <i class="fas fa-users uk-margin-small-right"></i> Latest  Formateur Register
                    </div>
                    <div class="uk-card-body uk-padding-remove-top">
                        <div class="uk-child-width-1-4@m uk-child-width-1-2 uk-grid-collapse uk-flex-center"  uk-scrollspy="target: > div; cls:uk-animation-scale-up; delay: 100" uk-grid>
                            <div>
                                <a href="admin-profile.html" class="uk-link-reset">
                                    <div class="uk-padding-remove   uk-text-center">
                                        <img alt="Image" class="uk-width-2-3 uk-margin-top uk-margin-small-bottom uk-border-circle uk-align-center uk-box-shadow-large" src="images/avatures/avature-2.png">
                                        <h5 class="uk-margin-remove-bottom uk-margin-remove-top ">Quen smith</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
</body>
