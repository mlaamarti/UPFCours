@extends('layouts.header')
@section('title', 'Tous vers l\'excellence et l\'innovation')

<!-- PreLoader -->
<div id="spinneroverlay">
    <div class="spinner"></div>
</div>
<!-- Nav for  mobile  -->
<div class="tm-mobile-header uk-hidden@m">
    <nav class="uk-navbar-container uk-navbar" uk-navbar="">
        <div class="uk-navbar-left">
            <a class="uk-hidden@m uk-logo" href="/" style="left: 0;">  UPFCours </a>
        </div>
        <div class="uk-navbar-right">
            <a class="uk-navbar-toggle" href="#tm-mobile" uk-toggle>
                <div class="uk-navbar-toggle-icon">
                    <i class="far fa-bars icon-large uk-text-black"></i>
                </div>
            </a>
        </div>
    </nav>
    <!-- model mobile menu -->
    <div id="tm-mobile" class="uk-modal-full uk-modal" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-text-center uk-flex" uk-height-viewport>
            <button class="uk-modal-close-full uk-close uk-icon" type="button" uk-close></button>
            <div class="uk-margin-auto-vertical uk-width-1-1">
                <div class="uk-child-width-1-1" uk-grid>
                    <div>
                        <div class="uk-panel widget-text" id="widget-text-1">
                            <div class="textwidget">
                                <p class="uk-text-center"><a class="uk-button uk-button-success uk-button-large" href="cours/"> Me Connecter </a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar   -->
<div class="tm-header uk-visible@m tm-header-transparent uk-margin-top">
    <div uk-sticky media="768" animation="uk-animation-slide-top" cls-active="uk-navbar-sticky uk-nav-dark" sel-target=".uk-navbar-container" top=".tm-header ~ [class*=&quot;uk-section&quot;], .tm-header ~ * > [class*=&quot;uk-section&quot;]" cls-inactive="uk-navbar-transparent   uk-dark" class="uk-sticky uk-navbar-container">
        <div class="uk-container  uk-position-relative">
            <nav class="uk-navbar uk-navbar-transparent">
                <!-- logo -->
                <div class="uk-navbar-left">
                    <a href="/" class="uk-logo"><i class="fas fa-graduation-cap"></i> UPFCours</a>
                </div>
                <!-- right navbar  -->
                <div class="uk-navbar-right">
                    <a class="el-content uk-button uk-button-success uk-circle" href="cours/">Me Connecter </a>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="uk-section-default" tm-header-transparent="dark" tm-header-transparent-placeholder="">
    <div data-src="{{asset('images/backgrounds/homeBack.jpg')}}" uk-img class="uk-background-norepeat uk-background-center-center uk-background-fixe uk-section uk-section-large uk-padding-remove-top uk-flex uk-flex-middle uk-background-cover" uk-height-viewport="offset-top: true" style="box-sizing: border-box; min-height: calc(100vh - 0px);">
        <div class="uk-width-1-1 uk-margin-xlarge-top">
            <div class="uk-container">
                <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
                    <div class="uk-width-1-1@m uk-first-column uk-margin-large-top">
                        <h2 class="uk-margin-remove-vertical uk-text-white  uk-h1 uk-scrollspy-inview uk-animation-slide-top-small">
                            Tous vers l'excellence et l'innovation
                        </h2>
                        <p class="uk-scrollspy-inview uk-light uk-animation-slide-top-small uk-text-medium uk-text-large  uk-text-light">
                            UPFCours est une nouvelle expérience vers l'apprentissage. <br> Utilisez votre intelligence et approfondez vos compétences.</p>
                        <a class="el-content uk-button uk-button-success uk-button-large  uk-circle" href="cours/">Démarrer MAINTENANT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-section uk-section-muted" style="background: #eef5fd;">
    <div class="uk-container uk-align-center" uk-scrollspy="cls:uk-animation-fade">
        <div uk-grid>
            <div class="uk-width-2-3@m uk-padding-large uk-padding-remove-bottom">
                <img src="{{asset('images/backgrounds/home-labtop.png')}}" alt="">
            </div>
            <div class="uk-width-1-3@m uk-position-relative">
                <img src="{{asset('images/oncomputer-gray.png')}}" class="uk-visible@m" style="position: absolute; width: 80%;left: -36%; bottom: 0;" alt="">
                <h2 uk-scrollspy="cls:uk-animation-slide-right-medium"> Flexible </h2>
                <p class="uk-text-bold" uk-scrollspy="cls:uk-animation-scale-up">Pour vous accompagner où vous êtes et quand vous le voulez. UPFCours est disponible également sur mobile avec une interface responsive.</p>
                <p class="uk-text-bold" uk-scrollspy="cls:uk-animation-scale-up"> Votre expérience est notre responsabilité.</p>
            </div>
        </div>
    </div>
</div>
<div class="uk-section-default uk-section-large">
    <div class="uk-container-small uk-padding-small uk-margin-auto">
        <h2 class="uk-h1 uk-text-center" uk-scrollspy="cls:uk-animation-fade"> Notre équipe </h2>
        <p class="uk-text-center uk-text-medium uk-margin uk-width-xlarge uk-margin-large-bottom uk-margin-auto uk-animation-slide-bottom-medium">   Notre équipe solide et expérimente se sont réunis pour donner naissance à ce site  </p>
        <div class="uk-grid-large uk-text-center" uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div ; delay: 300;repeat:true" uk-grid>
            <div class="uk-width-1-3@m">
                <img src="{{asset('images/backgrounds/haitam.jpg')}}" class="uk-border-circle uk-box-shadow-large" alt="">
                <h3 class="uk-margin uk-margin-remove-adjacent uk-margin-remove-bottom">Haitam HLALI</h3>
                <div class="uk-text-meta"][l[l][l
                     [
                     ;]
                >Content Writer, Designer and Developer</div>
            </div>
            <div class="uk-width-1-3@m">
                <img src="{{asset('images/backgrounds/laamarti.jpg')}}" class="uk-border-circle uk-box-shadow-large" alt="">
                <h3 class="uk-margin uk-margin-remove-adjacent uk-margin-remove-bottom">Mohamed LAAMARTI</h3>
                <div class="uk-text-meta">Web Marketing, Full Stack Developer</div>
            </div>
            <div class="uk-width-1-3@m">
                <img src="{{asset('images/backgrounds/ahmed.jpg')}}" class="uk-border-circle uk-box-shadow-large" alt="">
                <h3 class="uk-margin uk-margin-remove-adjacent uk-margin-remove-bottom">Ahmed BAZZIT</h3>
                <div class="uk-text-meta">Full Stack Developer, analytic</div>
            </div>
            <div class="uk-width-1-3@m">
                <img src="{{asset('images/backgrounds/hamza.jpg')}}" class="uk-border-circle uk-box-shadow-large" alt="">
                <h3 class="uk-margin uk-margin-remove-adjacent uk-margin-remove-bottom">Hamza OUELGHIWACH</h3>
                <div class="uk-text-meta">Web Developer</div>
            </div>
            <div class="uk-width-1-3@m">
                <img src="{{asset('images/backgrounds/aissam.jpg')}}" class="uk-border-circle uk-box-shadow-large" alt="">
                <h3 class="uk-margin uk-margin-remove-adjacent uk-margin-remove-bottom">Aissam MONCEF</h3>
                <div class="uk-text-meta">Web Developer</div>
            </div>
            <div class="uk-width-1-3@m">
                <img src="{{asset('images/backgrounds/saadia.jpg')}}" class="uk-border-circle uk-box-shadow-large" alt="">
                <h3 class="uk-margin uk-margin-remove-adjacent uk-margin-remove-bottom">Saadia ELGAFIF</h3>
                <div class="uk-text-meta">Designer and Developer</div>
            </div>
        </div>
    </div>
</div>
<div class="uk-section-default uk-section" style="    background: #f3cd3e;">
    <div class="uk-container">
        <div class="uk-flex-middle" uk-grid>
            <div class="uk-width-1-2@m">
                <h1 class="uk-text-bold uk-text-white"> Conçu pour vous aider à conserver les connaissances efficacement</h1>
                <p class="uk-text-white uk-text-medium">
                    Une plateforme facile où votre progrès est enregistré afin que vous poursuivez vos cours facilement.
                </p>
            </div>
            <div class="uk-width-1-2@m">
                <img src="{{asset('images/backgrounds/home-feature.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
<img src="{{asset('images/backgrounds/diver-1.png')}}" style="position: absolute; margin-top: -66px;" alt="">
<div class="uk-section-grey uk-section">
    <div class="uk-container">
        <div class="uk-flex-middle" uk-grid>
            <div class="uk-width-1-2@m">
                <h1 class="uk-text-bold uk-margin-small-bottom"> Expérimenter le meilleur  </h1>
                <p class="uk-text-medium uk-text-white uk-margin-remove-top ">
                    Cette plateforme a priorisé le fait de mettre les cours en disposition des etudiants et rendres la communications entre eux et leurs formateurs possible.</p>
                <a class="el-content uk-button uk-button-primary uk-button-large" href="cours/">
                    Démarrer MAINTENANT              </a>
            </div>
            <div class="uk-width-1-2@m uk-flex-first">
                <img src="{{asset('images/backgrounds/home-feature-5.png')}}" alt="">
            </div>
        </div>
        <div uk-grid class="uk-child-width-1-2@m uk-text-white">
            <div>
                <div class="uk-grid-small" uk-grid>
                    <div class="uk-width-1-5">
                        <img src="{{asset('images/icons/TV Show_50px.png')}}" class="img-small" alt="Image">
                    </div>
                    <div class="uk-width-3-4">
                        <h3> Apprentissage vidéo </h3>
                        <p>Vous êtes pluôt orienté image ? consulter nos cours disponible en video sur la plateforme. </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-grid-small" uk-grid>
                    <div class="uk-width-1-5">
                        <img src="{{asset('images/icons/Book Shelf_50px.png')}}" class="img-small" alt="Image">
                    </div>
                    <div class="uk-width-3-4">
                        <h3> Livres électroniques </h3>
                        <p>Notre plateforme vous donne accès à toute une bibliothèque électronique avec une grande variété de livresType a message </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-grid-small" uk-grid>
                    <div class="uk-width-1-5">
                        <img src="{{asset('images/icons/Code_50px.png')}}" class="img-small" alt="Image">
                    </div>
                    <div class="uk-width-3-4">
                        <h3> Code source </h3>
                        <p>Des codes sources et des exemples qui peuvent vous aider pour vos futures programmes sont disponibles avec des commentaires explicatifsType a message </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-grid-small" uk-grid>
                    <div class="uk-width-1-5">
                        <img src="{{asset('images/icons/Discussion Forum_50px.png')}}" class="img-small" alt="Image">
                    </div>
                    <div class="uk-width-3-4">
                        <h3> Discussions </h3>
                        <p>Exprimez-vous sans aucune restriction que le respect mutuel dans une zone paisible et instantanée</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<div class="uk-section  uk-section-default">
    <div class="uk-container uk-align-center uk-margin-remove-bottom uk-position-relative">
        <p class="uk-postion-absoult uk-margin-remove uk-position-bottom-right" style="bottom: 8px;right: 60px;" uk-tooltip="title: Visit Our Site; pos: top-center"> Sponsorisé Par <a href="/"  class="uk-text-bold uk-link-reset"> UPFCours </a></p>
        <div class="uk-margin-small" uk-grid>
            <div class="uk-width-1-2@m uk-width-1-2@s uk-first-column">
                <p class="uk-text-small"><i class="far fa-copyright"></i> 2019 <span class="uk-text-bold">UPFCours</span> . Tous les droits sont réservés.</p>
            </div>
            <div class="uk-width-1-3@m uk-width-1-2@s">
                <a href="https://www.youtube.com/channel/UCYiUbe7WNPHH_JQGf_I_TnA" class="uk-icon-button uk-link-reset" uk-tooltip="title: Our Youtube Chanal; pos: top-center"><i class="fab fa-youtube" style=" color: #fb7575  !important;"></i></a>
                <a href="https://www.facebook.com/upf.ac.ma" class="uk-icon-button uk-link-reset" uk-tooltip="title: Our Facebook; pos: top-center"><i class="fab fa-Facebook" style=" color: #9160ec  !important;"></i></a>
                <a href="https://www.instagram.com › universite-privee-de-fes " class="uk-icon-button uk-link-reset" uk-tooltip="title: Our Instagram; pos: top-center"><i class="fab fa-Instagram" style=" color: #dc2d2d  !important;"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- button scrollTop -->
<button id="scrollTop" class="uk-animation-slide-bottom-medium">
    <a href="#" class="uk-text-white" uk-totop uk-scroll></a>
</button>
<script>
    // Preloader
    var spinneroverlay = document.getElementById("spinneroverlay");
    window.addEventListener('load', function(){
        spinneroverlay.style.display = 'none';
    });
    //scrollTop
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("scrollTop").style.display = "block";
        } else {
            document.getElementById("scrollTop").style.display = "none";
        }
    }
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
</body>
</html>
