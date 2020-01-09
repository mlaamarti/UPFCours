<!-- Get Header -->
@extends('layouts.header')
@section('title', 'Home')


<!-- Get Sidebar -->
@extends('includes.formateur.sidebar')


<!-- main contant -->
<div class="admin-content">

    <!-- Get Sidebar -->
@include('includes.formateur.nav')

    <div class="admin-content-inner">
        <div class="uk-child-width-1-4@m uk-child-width-1-1 uk-child-width-1-2@s uk-grid-match " uk-grid>
            <div>
                <div class="uk-background-cover uk-light dashboard-card" data-src="../assets/images/admin/cards-bg.jpg" uk-img>
                    <i class="far fa-user icon-xxlarge uk-visible@m"></i>
                    <h3> 32 Students </h3>
                    <p> pro detracto disputando reformidans at</p>
                    <a href="#"> View All </a>
                </div>
            </div>
            <div>
                <div class="uk-background-cover uk-light dashboard-card" data-src="../assets/images/admin/cards-bg.jpg" uk-img>
                    <i class="fas fa-play icon-xxlarge uk-visible@m"></i>
                    <h3> 32 Courses </h3>
                    <p> pro detracto disputando reformidans at</p>
                    <a href="#"> View All </a>
                </div>
            </div>
            <div>
                <div class="uk-background-cover uk-light dashboard-card" data-src="../assets/images/admin/cards-bg.jpg" uk-img>
                    <i class="fas fa-book-open icon-xxlarge uk-visible@m"></i>
                    <h3> 120 Books </h3>
                    <p>  pro detracto disputando reformidans at </p>
                    <a href="#"> View All </a>
                </div>
            </div>
            <div>
                <div class="uk-background-cover uk-light dashboard-card" data-src="../assets/images/admin/cards-bg.jpg" uk-img>
                    <i class="fas fa-code icon-xxlarge uk-visible@m"></i>
                    <h3> 10 Script </h3>
                    <p>  pro detracto disputando reformidans at </p>
                    <a href="#"> View All </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
