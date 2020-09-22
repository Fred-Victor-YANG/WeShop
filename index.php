<?php
session_start ();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>WESHOP - Charger avec smart force</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link href="css/css.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="css/aos.css">

        <link rel="stylesheet" href="css/ionicons.min.css">

        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/jquery.timepicker.css">

        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="static/iconfont.css">
        <link rel="stylesheet" href="static/chat.css">
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

        <link rel="stylesheet" href="css/Devis_InnerHTML.css">
    </head>

    <body>
        <!--???-->
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <img src="images/title.png" class="Accueil">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu">Menu</span>
                </button>

                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="index.html" class="nav-link">Accueil</a></li>
                        <li class="nav-item"><a href="presentation.html" class="nav-link">Présentation</a></li>
                        <li class="nav-item"><a href="produits.html" class="nav-link">Produits</a></li>
                        <li class="nav-item"><a class="nav-link" href="QRShop.html">QRshop</a></li>
                        <li class="nav-item"><a href="NosClients.html" class="nav-link">NosClients</a></li>
                        <!--<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>-->
                        <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                        <li class="nav-item cta"><a href="#devis" class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>DEVIS</span></a></li>
                    </ul>
                </div>

            </div>
        </nav>
        <!-- END nav-->

        <!--banner,?????-->
        <div class="hero-wrap">
            <div class="overlay"></div>
            <div class="container-fluid">
                <div class="slider-text d-md-flex align-items-center" data-scrollax-parent="true">

                    <div class="one-forth ftco-animate align-self-md-center" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-4"> La caisse enregistreuse
                            <span class="wrap"></span>
                            </strong>
                        </h1>
                        <h1 class="mb-4">
                            <strong class="typewrite" data-period="4000" data-type='[ "facilite votre vie", "économise votre temps", "augmente vos CA" ]'>
                                <span class="wrap"></span>
                            </strong>
                        </h1>
                        <p class="mb-md-5 mb-sm-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Votre bon assistant de gestion !</p>
                        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            <a href="#devis" class="btn btn-primary px-4 py-3 mt-3">DEMANDER UN DEVIS</a>
                            <a href="#" class="btn btn-primary btn-outline-primary px-4 py-3 mt-3">Nos Produits</a>
                        </p>
                    </div>
                    <div class="one-half align-self-md-end align-self-sm-center">
                        <div class="slider-carousel owl-carousel">
                            <div class="item">
                                <img src="images/dashboard_full_3.png" class="img-fluid img"alt="">
                            </div>
                            <div class="item">
                                <img src="images/dashboard_full_4.png" class="img-fluid img"alt="">
                            </div>
                            <div class="item">
                                <img src="images/dashboard_full_5.png" class="img-fluid img"alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--banner????-->
        <!--???-->
        <section class="ftco-section ftco-section-2">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="heading-white">Nous fournissons un excellent service</h3>
                    </div>
                </div>
            </div>
        </section>
        <!--?????-->

        <!--??????-->
        <section class="ftco-section ftco-services">
            <div class="mt-5">
                <div class="row d-flex no-gutters">
                    <div class="col-md-6 img ftco-animate" style="background-image: url(images/about.jpg);">
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="services-wrap">
                            <div class="heading-section mb-5 ftco-animate">
                                <h2 class="mb-2">Pourquoi nous choisir</h2>
                                <span class="subheading">Experts en logiciel de caisse enregistreuse</span>
                            </div>
                            <div class="list-services d-flex ftco-animate">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span><img  class="icon" src="images/nf515.png"></span>
                                </div>
                                <div class="text">
                                    <h3>Notre logiciel</h3>
                                    <p>Logiciel légal & fiable & pratique. Il conforme à la loi des finances 2016 et au certifiée NF525, obligatoire à partir du 1er janvier 2018.</p>
                                </div>
                            </div>
                            <div class="list-services d-flex ftco-animate">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span><img class="icon" src="images/client.png"></span>
                                </div>
                                <div class="text">
                                    <h3>Notre équipements</h3>
                                    <p>Peut être utilisé sur les caisses, les téléphones mobiles, les tablettes et autres appareils. Prise en charge des systèmes Windows et Linux.</p>
                                </div>
                            </div>
                            <div class="list-services d-flex ftco-animate">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span><img class="icon" src="images/service.png"></span>
                                </div>
                                <div class="text">
                                    <h3>Notre service</h3>
                                    <p>À votre service 6 jours par semaine. Nous mettons à votre disposition un service après-vente multilingue en français, anglais, chinois et coréen.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--????????-->
        <!--???-->
        <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <div class="row">
                            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <strong class="number" data-number="2">0</strong>
                                        <span>agences</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <strong class="number" data-number="1500">0</strong>
                                        <span>collaborateurs</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <strong class="number" data-number="6">0</strong>
                                        <span>ans d’expérience</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <strong class="number" data-number="10000">0</strong>
                                        <span>clients en France</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--???????-->

        <!--??????-->
        <section class="ftco-section">
            <div class="container-fluid">
                <div class="row justify-content-center mb-5 pb-5">
                    <div class="col-md-7 text-center heading-section ftco-animate">
                        <h2 class="mb-2">LE MATÉRIEL</h2>
                        <span class="subheading">Chez Weshop, nous vous fournissons les meilleurs caisses</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 ftco-animate">
                        <div class="work-entry">
                            <a data-toggle="modal" data-target="#product1" class="img" style="background-image: url(images/work1.png);">
                                <div class="text d-flex justify-content-center align-items-center">
                                    <div class="p-3">
                                        <h3>Tablette</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <div class="work-entry">
                            <a data-toggle="modal" data-target="#product2" class="img" style="background-image: url(images/work2.png);">
                                <div class="text d-flex justify-content-center align-items-center">
                                    <div class="p-3">
                                        <h3>Caisse traditionnelle</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <div class="work-entry">
                            <a data-toggle="modal" data-target="#product3" class="img" style="background-image: url(images/work3.png);">
                                <div class="text d-flex justify-content-center align-items-center">
                                    <div class="p-3">
                                        <h3>Télécommande portable</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--??????-->

        <!--Devis??-->
        <section class="ftco-section bg-light" id="devis">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-3">DEVIS CAISSE ENREGISTREUSE EN LIGNE</h2>
                    <span class="subheading">Recevez votre devis en logiciel et matériel de caisse gratuitement</span>
                </div>
            </div>
            <section class="ftco-section ftco-counter img" style="background-image: url(images/bg_1.jpg); background-size:cover;" data-stellar-background-ratio="0.5">
                <div class="row" style="text-align:center; margin-left:20px; margin-right:20px">
                    <div class="colForm col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="pricing-table">
                            <h3>Principaux produits</h3>
                            <HR>
                            <form>
                                <div class="form-group">
                                    <div>
                                        <input type="radio" id="radio1" name="radio">
                                        <label class="circle" for="radio1"> Caisse et logiciel</label>
                                        <HR>
                                    </div>
                                    <div>
                                        <input type="radio" id="radio2" name="radio">
                                        <label class="circle" for="radio2"> Tablette et logiciel</label>
                                        <HR>
                                    </div>
                                    <div>
                                        <input type="radio" id="radio3" name="radio">
                                        <label class="circle" for="radio3"> Logiciel</label>
                                        <HR>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- END COL -->
                    <div class="colForm col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="pricing-table">
                            <h3>Autres produits</h3>
                            <HR>
                            <form id="contact-form" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <input name="checkbox" value="checkbox6" type="checkbox" id="checkbox6">
                                    <label class="circle" for="checkbox6"> Smartphone</label>
                                    <HR>
                                    <input name="checkbox" value="checkbox7" type="checkbox" id="checkbox7">
                                    <label class="circle" for="checkbox7"> Imprimante</label>
                                    <HR>
                                    <input name="checkbox" value="checkbox8" type="checkbox" id="checkbox8">
                                    <label class="circle" for="checkbox8"> Tiroir</label>
                                    <HR>
                                    <input name="checkbox" value="checkbox9" type="checkbox" id="checkbox9">
                                    <label class="circle" for="checkbox9"> Balance</label>
                                    <HR>
                                    <input name="checkbox" value="checkbox10" type="checkbox" id="checkbox10">
                                    <label class="circle" for="checkbox10"> Scanneur</label>
                                    <HR>
                                    <input name="checkbox" value="checkbox11" type="checkbox" id="checkbox11">
                                    <label class="circle" for="checkbox11"> Ecran de client</label>
                                    <HR>
                                    <input name="checkbox" value="checkbox12" type="checkbox" id="checkbox12">
                                    <label class="circle" for="checkbox12"> Conseillez-moi</label>

                                </div>

                            </form>
                        </div>
                        </br>
                        </br>
                    </div><!-- END COL -->

                    <div class="colForm col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="pricing-table">
                            <h3>Votre Informations</h3>
                            <HR>
                            <div class="row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" name="societe" class="form-control" id="first-name" placeholder="Nom de la société *" required="required">
                                </div>
                            </div>
                            </br>
                            <div class="row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Mail *" required="required">
                                </div>
                            </div>
                            </br>
                            <div class="row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-10">
                                    <input type="tel" name="Tel" class="form-control" id="telephone" placeholder="Tel *" required="required">
                                </div>
                            </div>
                            </br>
                            <div class="row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" name="codePostale" class="form-control" id="codePostale" placeholder="Code postale" required="required">
                                </div>
                            </div>
                            </br>
                            <div class="row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" name="addresse" class="form-control" id="addresse" placeholder="Addresse" required="required">
                                </div>
                            </div>
                            </br>
                            <div class="row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-10">
                                    <textarea rows="3" name="message" class="form-control" id="description" placeholder="Votre message"></textarea>
                                </div>
                            </div>
                            <div class="actions">
                                </br>
                                <input type="submit" value="OBTENIR LE DEVIS" name="submit" id="submitButton" class="btn btn-primary px-4 py-2" title="Submit Your Message!" />
                            </div>
                            </br>
                            </br>
                        </div>
                    </div>
                    </br>
                    </br>
                </div><!-- END COL -->
            </section>
        </section>
        <!--Devis????-->

        <!--blog????-->
        <!--        <section class="ftco-section">
                    <div class="container">
                        <div class="row justify-content-center mb-5 pb-3">
                            <div class="col-md-7 text-center heading-section ftco-animate">
                                <h2 class="mb-2">Latest Blog</h2>
                                <span class="subheading">Read our blog</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 ftco-animate">
                                <div class="blog-entry">
                                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                                    </a>
                                    <div class="text py-4">
                                        <div class="meta mb-3">
                                            <div><a href="#">August 12, 2018</a></div>
                                            <div><a href="#">Admin</a></div>
                                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                        </div>
                                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ftco-animate">
                                <div class="blog-entry" data-aos-delay="100">
                                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                                    </a>
                                    <div class="text py-4">
                                        <div class="meta mb-3">
                                            <div><a href="#">August 12, 2018</a></div>
                                            <div><a href="#">Admin</a></div>
                                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                        </div>
                                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ftco-animate">
                                <div class="blog-entry" data-aos-delay="200">
                                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                                    </a>
                                    <div class="text py-4">
                                        <div class="meta mb-3">
                                            <div><a href="#">August 12, 2018</a></div>
                                            <div><a href="#">Admin</a></div>
                                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                        </div>
                                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>-->
        <!--blog??????-->

        <footer class="ftco-footer ftco-bg-dark ftco-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-3">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">WESHOP</h2>
                            <p>Weshop est un fournisseur pour les caisses enregistreuses tactiles. Weshop met à votre disposition des équipements et des logiciels de caisse complets, aussi des équipements de réseau( routeur, téléphone portable).</p>
                        </div>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
                            <li class="ftco-animate"><a href="#"><span class="icon-wechat"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-youtube"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-message"></span></a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <div class="ftco-footer-widget mb-4 ml-md-5">
                            <h2 class="ftco-heading-2">Quick Links</h2>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-2 d-block">About</a></li>
                                <li><a href="#" class="py-2 d-block">Features</a></li>
                                <li><a href="#" class="py-2 d-block">Projects</a></li>
                                <li><a href="#" class="py-2 d-block">Blog</a></li>
                                <li><a href="#" class="py-2 d-block">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 pr-md-4">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Recent Blog</h2>
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                                        <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                                        <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Contact Info</h2>
                            <div class="block-23 mb-3">
                                <ul>
                                    <li><span class="icon icon-map-marker"></span><span class="text">8 avenue Henri Barbusse, 93000 Bobigny, 93000</span></li>
                                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+33 1 48 46 12 88</span></a></li>
                                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">contact@weshop.fr</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">

                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés | Pour plus d’informations voir SARL WESHOP
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen">
            <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
            </svg>
        </div>

        <!-- ??????devis??Modal -->
        <!--        <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalRequestLabel">Request a Quote</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="#">
                                    <div class="form-group">
                                         <label for="appointment_name" class="text-black">Full Name</label>
                                        <input type="text" class="form-control" id="appointment_name" placeholder="Full Name">
                                    </div>
                                    <div class="form-group">
                                         <label for="appointment_email" class="text-black">Email</label>
                                        <input type="text" class="form-control" id="appointment_email" placeholder="Email">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                 <label for="appointment_date" class="text-black">Date</label>
                                                <input type="text" class="form-control" id="appointment_date" placeholder="Date">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                 <label for="appointment_time" class="text-black">Time</label>
                                                <input type="text" class="form-control" id="appointment_time" placeholder="Time">
                                            </div>
                                        </div>
                                    </div>
        
        
                                    <div class="form-group">
                                         <label for="appointment_message" class="text-black">Message</label>
                                        <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Get a Quote" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
        
                        </div>
                    </div>
                </div>-->
        <!--??????devis??Modal????-->

        <!--?????-->
        <div class="livechat-girl animated"> <img class="girl" src="images/en_3.png">
            <div class="livechat-hint rd-notice-tooltip rd-notice-type-success rd-notice-position-left single-line show_hint">
                <div class="rd-notice-content">Bonjour, je peut vous aider?</div>
            </div>
            <div class="animated-circles">
                <div class="circle c-1"></div>
                <div class="circle c-2"></div>
                <div class="circle c-3"></div>
            </div>
        </div>
        <!--???????-->

        <!--?????JS-->
        <script type="text/javascript">
            (function ($) {
                setInterval(function () {
                    if ($(".animated-circles").hasClass("animated")) {
                        $(".animated-circles").removeClass("animated");
                    } else {
                        $(".animated-circles").addClass('animated');
                    }
                }, 3000);
                var wait = setInterval(function () {
                    $(".livechat-hint").removeClass("show_hint").addClass("hide_hint");
                    clearInterval(wait);
                }, 4500);
                $(".livechat-girl").hover(function () {
                    clearInterval(wait);
                    $(".livechat-hint").removeClass("hide_hint").addClass("show_hint");
                }, function () {
                    $(".livechat-hint").removeClass("show_hint").addClass("hide_hint");
                }).click(function () {
                    $(".chatBox").toggle(100);
                    $(".chatBox-head-two").toggle();
                    $(".chatBox-kuang").fadeToggle();
                    $(".livechat-girl").css("display", "none");
                });
            })(jQuery);
        </script>
        <!--?????JS??-->

        <!--???????-->
        <div class="modal fade" id="product1" tabindex="-1" role="dialog" aria-labelledby="modalLabel" style="display:none">
            <!-- ?style?????lg max-height?1200px-->
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modalLabel">Caisse</h4></div>
                    <div id="_modalDialog_body" class="modal-body">
                        <!--  ????div????????????? -->
                        <div class="row">
                            <div class="col-md-8">
                                <img src="images/work-1.jpg" class="img_produit" alt="work1">
                            </div>
                            <div class="col-md-4">
                                <h2>Introduction:</h2>
                                <h4>Tablette</h4>
                                <p><li>Sans ventilation, non bruyant et basse consommation</p>
                                    <p><li>Données 100% sécuritaire, 100% conservées  </p>
                                    <p><li>Durable, Ultralégère</p>
                                    <p><li>Prix très abordable </p>
                                    <p><li>Garantie jusqu’à illimité(selon le forfait)</p>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <!--                        <button type="submit" class="btn btn-primary">??</button>-->
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="product2" tabindex="-1" role="dialog" aria-labelledby="modalLabel" style="display:none">
            <!-- ?style?????lg max-height?1200px-->
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modalLabel">Caisse</h4></div>
                    <div id="_modalDialog_body" class="modal-body">
                        <!--  ????div????????????? -->
                        <div class="row">
                            <div class="col-md-8">
                                <img src="images/work-2.jpg" class="img_produit" alt="work2">
                            </div>
                            <div class="col-md-4">
                                <h2>Introduction:</h2>
                                <h4>Caisse traditionnelle</h4>
                                <p><li>Un écran et un PC réunis dans un seul appareil</p>
                                    <p><li>Adapté aux différentes activités commerciales</p>
                                    <p><li>Non bruyant et basse consommation</p>
                                    <p><li>Très bon rapport Qualité/Prix</p>
                                    <p><li>1 ans de garantie</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!--                        <button type="submit" class="btn btn-primary">??</button>-->
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="product3" tabindex="-1" role="dialog" aria-labelledby="modalLabel" style="display:none">
            <!-- ?style?????lg max-height?1200px-->
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modalLabel">Caisse</h4></div>
                    <div id="_modalDialog_body" class="modal-body">
                        <!--  ????div????????????? -->
                        <div class="row">
                            <div class="col-md-8">
                                <img src="images/work-3.jpg" class="img_produit" alt="work3">
                            </div>
                            <div class="col-md-4">
                                <h2>Introduction:</h2>
                                <h4>Télécommande portable</h4>
                                <p><li>Connecté aux caisses enregistreuses</p>
                                    <p><li>Économiser le temps de commande</p>
                                    <p><li>Prix très attractif</p>
                                    <p><li>1 ans de garantie</p>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <!--                        <button type="submit" class="btn btn-primary">??</button>-->
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
        <!--?????????-->

        <!-- ????? -->
        <div class="chatContainer" style="z-index: 100;">
            <div class="chat-message-num"></div>
            <div class="chatBox" ref="chatBox" style="display: none">
                <div class="chatBox-head">
                    <div class="chatBox-head-two">
                        <div class="chat-people">
                            <div class="ChatInfoHead">
                                <img src="static/icon01.png" alt="??"/>
                            </div>
                        </div>
                        <div class="chat-close"><span style="font-weight: bolder;">&times;</span></div>
                    </div>
                </div>
                <div class="chatBox-info">
                    <div class="chatBox-kuang" ref="chatBoxkuang">
                        <div class="chatBox-content">
                            <div class="chatBox-content-demo" id="chatBox-content-demo">

                                <div class="clearfloat">
                                    <div class="author-name">
                                        <small class="chat-date" id="systime">2020-9-4 15:33:33</small>
                                    </div>
                                    <div class="left">
                                        <div class="chat-avatars"><img src="static/icon01.png" alt="??"/></div>
                                        <div class="chat-message">
                                            Bonjour, je peut vous aider?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chatBox-send">
                            <!-- <div class="div-textarea"></div> -->
                            <div>
                                <input class="div-textarea" id="message" style="border: 0px;">
                            </div>
                            <div>
                                <button id="chat-biaoqing" class="btn-default-styles">
                                    <i class="iconfont icon-biaoqing"></i>
                                </button>
                                <label id="chat-tuxiang" title="????" for="inputImage" class="btn-default-styles">
                                    <input type="file" onchange="selectImg(this)" accept="image/jpg,image/jpeg,image/png"
                                           name="file" id="inputImage" class="hidden">
                                    <i class="iconfont icon-tuxiang"></i>
                                </label>
                                <button id="chat-fasong" class="btn-default-styles"><i class="iconfont icon-fasong"></i></button>
                            </div>
                            <div class="biaoqing-photo">
                                <ul>
                                    <li><span class="emoji-picker-image" style="background-position: -9px -18px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -40px -18px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -71px -18px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -102px -18px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -133px -18px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -164px -18px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -9px -52px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -40px -52px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -71px -52px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -102px -52px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -133px -52px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -164px -52px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -9px -86px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -40px -86px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -71px -86px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -102px -86px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -133px -86px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -164px -86px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -9px -120px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -40px -120px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -71px -120px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -102px -120px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -133px -120px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -164px -120px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -9px -154px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -40px -154px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -71px -154px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -102px -154px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -133px -154px;"></span></li>
                                    <li><span class="emoji-picker-image" style="background-position: -164px -154px;"></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ????????????? -->

        <!-- ??????????????????? -->
        <?php
        if ($_SESSION["connection"] == "online") {
        echo "<script>
        var conseilleur = 1;
        console.log ('customer service online');
        </script>";
        }
        else if ($_SESSION["connection"] == "offline"){
        echo "<script>
        var conseilleur = 0;
        console.log ('customer service offline');
        </script>";
        }
        else {
        echo "<script>
        var conseilleur = -1;
        console.log ('session not working');
        </script>";
        }
        ?>
        <!-- ???????????? -->

        <!--??????-->
        <script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
        <!--????IP-->
        <script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>
        <script type="text/javascript">
                                        console.log(returnCitySN["cip"] + ',' + returnCitySN["cname"]);
                                        var ip_client = returnCitySN["cip"];
        </script>
        <script>
            $(function () {
                var wsurl = 'ws://192.168.1.100:8090';
                var websocket;
                var i = 0;
                if (window.WebSocket) {
                    websocket = new WebSocket(wsurl);
                    //????
                    websocket.onopen = function (event) {
                        console.log("Connected to WebSocket server.");
                        if (conseilleur == 1) {
                            $('.chatBox-content-demo').append(reply('Bonjour, avez-vous des question ?'));
                        }
                    }
                    //????
                    websocket.onmessage = function (event) {
                        var msg = JSON.parse(event.data); //?????json????
                        console.log(msg);
                        var type = msg.type; // ????
                        var umsg = msg.message; //????
                        var uname = msg.name; //???
                        i++;
                        if (type == 'usermsg') {
                            if (uname == 'weshop') {
                                $('.chatBox-content-demo').append(reply(umsg));
                            }
                        }
                        if (type == 'system') {
                            console.log(umsg);
                        }
                        $('#message').val('');
                        window.location.hash = '#' + i;
                    }

                    //????
                    websocket.onerror = function (event) {
                        i++;
                        console.log("Connected to WebSocket server error");
                        $('.chatBox-content-demo').append(reply('Connect to the server error.'));
                        window.location.hash = '#' + i;
                    }

                    //????
                    websocket.onclose = function (event) {
                        i++;
                        console.log('websocket Connection Closed. ');
                        $('.chatBox-content-demo').append(reply('Connection Closed.'));
                        window.location.hash = '#' + i;
                    }

                    function send() {
                        //var name = $('#name').val();
                        var name = ip_client;
                        var message = $('#message').val();
                        var msg = {
                            message: message,
                            name: name
                        };
                        try {
                            websocket.send(JSON.stringify(msg));
                            repeatClientMsg(message);
                            document.getElementById('message').value = "";
                        } catch (ex) {
                            console.log(ex);
                        }
                    }

                    //??enter?????
                    $(window).keydown(function (event) {
                        if (event.keyCode == 13) {
                            if (conseilleur == 1) {
                                send();
                            } else {
                                var textContent = $("#message").val();
                                repeatClientMsg(textContent);
                                $("#message").val('');
                                if (textContent != "") {
                                    //????????
                                    $(document).ready(function () {
                                        $("#chatBox-content-demo").scrollTop($("#chatBox-content-demo")[0].scrollHeight);
                                    });
                                    document.getElementById('timenow').innerHTML = timenow();
                                    if (textContent.indexOf("balabala1") != "-1" || textContent.indexOf("1") != "-1") {
                                        var re = "<a href=\"#devis\">Rua~</a>";
                                        reply(re);
                                    } else if (textContent.indexOf("balabala2") != "-1" || textContent.indexOf("2") != "-1") {
                                        var re = "RuaRua~";
                                        reply(re);
                                    } else if (textContent.indexOf("balabala3") != "-1" || textContent.indexOf("3") != "-1") {
                                        var re = "RuaRuaRua~";
                                        reply(re);
                                    } else if (textContent.indexOf("balabala4") != "-1" || textContent.indexOf("4") != "-1") {
                                        var re = "RuaRuaRuaRua~";
                                        reply(re);
                                    } else {
                                        var re = 'Questions susceptibles de vous intéresser: <br> <a href="javascript:void(0);" onclick=setTimeout("replyNum(1)",600)>1.balabala1</a><br> <a href="javascript:void(0);" onclick=setTimeout("replyNum(2)",600)>2.balabala2 </a><br><a href="javascript:void(0);" onclick=setTimeout("replyNum(3)",600)>3.balabala3</a><br> <a href="javascript:void(0);" onclick=setTimeout("replyNum(4)",600)>4.balabala4</a>';
                                        reply(re);
                                    }
                                }
                            }
                        }
                    });

                    //?????????
                    $("#chat-fasong").click(function () {
                        if (conseilleur == 1) {
                            send();
                        } else {
                            var textContent = $("#message").val();
                            repeatClientMsg(textContent);
                            document.getElementById("message").value = '';
                            if (textContent != "") {
                                //????????
                                $(document).ready(function () {
                                    $("#chatBox-content-demo").scrollTop($("#chatBox-content-demo")[0].scrollHeight);
                                });
                                document.getElementById('timenow').innerHTML = timenow();
                                if (textContent.indexOf("balabala1") != "-1" || textContent.indexOf("1") != "-1") {
                                    var re = "<a href=\"#devis\">Rua~</a>";
                                    reply(re);
                                } else if (textContent.indexOf("balabala2") != "-1" || textContent.indexOf("2") != "-1") {
                                    var re = "RuaRua~";
                                    reply(re);
                                } else if (textContent.indexOf("balabala3") != "-1" || textContent.indexOf("3") != "-1") {
                                    var re = "RuaRuaRua~";
                                    reply(re);
                                } else if (textContent.indexOf("balabala4") != "-1" || textContent.indexOf("4") != "-1") {
                                    var re = "RuaRuaRuaRua~";
                                    reply(re);
                                } else {
                                    var re = "Questions susceptibles de vous intéresser: <br> <a href=\"javascript:void(0);\" onclick=setTimeout(\"replyNum(1)\",600)>1.balabala1</a><br> <a href=\"javascript:void(0);\" onclick=setTimeout(\"replyNum(2)\",600)>2.balabala2 </a><br><a href=\"javascript:void(0);\" onclick=setTimeout(\"replyNum(3)\",600)>3.balabala3</a><br> <a href=\"javascript:void(0);\" onclick=setTimeout(\"replyNum(4)\",600)>4.balabala4</a>";
                                    reply(re);
                                }

                            }
                        }
                    });
                } else {
                    alert('???????web socket');
                }
            });
        </script>   
        <!--??????????-->

        <!--?????????JS??-->
        <script>
            function timenow() {
                var myDate = new Date();
                var times = myDate.toLocaleString( );
                return times
            }

            document.getElementById('systime').innerHTML = timenow();
            screenFuc();
            function screenFuc() {
                var topHeight = $(".chatBox-head").innerHeight();//??????
                //????768px??,??change
                var winWidth = $(window).innerWidth();
                if (winWidth <= 768) {
                    var totalHeight = $(window).height(); //??????
                    //??????
                    $(".chatBox-info").css("height", totalHeight - topHeight);
                    $(".chatBox-content-demo").css("height", totalHeight - topHeight - 55);
                    // $(".chatBox-list").css("height", totalHeight - topHeight-200);
                    $(".chatBox-kuang").css("height", totalHeight - topHeight);
                    $(".div-textarea").css("width", winWidth - 106);
                } else {
                    $(".chatBox-info").css("height", 495);
                    $(".chatBox-content").css("height", 448);
                    $(".chatBox-content-demo").css("height", 448);
                    $(".chatBox-list").css("height", 495);
                    $(".chatBox-kuang").css("height", 495);
                    // !import????????
                    $(".div-textarea").css("width", 245);

                }
            }
            (window.onresize = function () {
                screenFuc();
            })();
            //?????????
            var totalNum = $(".chat-message-num").html();
            if (totalNum == "") {
                $(".chat-message-num").css("padding", 0);
            }
            $(".message-num").each(function () {
                var wdNum = $(this).html();
                if (wdNum == "") {
                    $(this).css("padding", 0);
                }
            });


            $(".chat-close").click(function () {
                $(".chatBox").toggle(100);
                $(".chatBox-head-two").toggle();
                $(".chatBox-kuang").fadeToggle();
                $(".livechat-girl").css("display", "block");
            })


            function repeatClientMsg(ques) {
                if (ques != "") {
                    $(".chatBox-content-demo").append("<div class=\"clearfloat\">" +
                            "<div class=\"author-name\"><small class=\"chat-date\" id=\"timenow\"></small> </div> " +
                            "<div class=\"right\"> <div class=\"chat-message\"> " + ques + " </div> " +
                            "<div class=\"chat-avatars\"><img src=\"static/icon00.png\" alt=\"??\" /></div> </div> </div>");
                }
                $(document).ready(function () {
                    $("#chatBox-content-demo").scrollTop($("#chatBox-content-demo")[0].scrollHeight);
                });
            }

            function replyNum(num) {
                if (num == 1) {
                    repeatClientMsg("balabala1");
                    var re = "1.??????";
                    reply(re);
                } else if (num == 2) {
                    repeatClientMsg("balabala2");
                    var re = "2.????????????";
                    reply(re);
                } else if (num == 3) {
                    repeatClientMsg("balabala3");
                    var re = "3.??????????????????";
                    reply(re);
                } else if (num == 4) {
                    repeatClientMsg("balabala4");
                    var re = "4.????????????????????????";
                    reply(re);
                }
            }


            //      ????
            $("#chat-biaoqing").click(function () {
                $(".biaoqing-photo").toggle();
            });
            $(document).click(function () {
                $(".biaoqing-photo").css("display", "none");
            });
            $("#chat-biaoqing").click(function (event) {
                event.stopPropagation();//????
            });

            $(".emoji-picker-image").each(function () {
                $(this).click(function () {
                    var bq = $(this).parent().html();
                    console.log(bq)
                    $(".chatBox-content-demo").append("<div class=\"clearfloat\">" +
                            "<div class=\"author-name\"><small class=\"chat-date\" id=\"timenow\"></small> </div> " +
                            "<div class=\"right\"> <div class=\"chat-message\"> " + bq + " </div> " +
                            "<div class=\"chat-avatars\"><img src=\"static/icon00.png\" alt=\"??\" /></div> </div> </div>");
                    //????????
                    $(".biaoqing-photo").toggle();
                    //????????
                    $(document).ready(function () {
                        $("#chatBox-content-demo").scrollTop($("#chatBox-content-demo")[0].scrollHeight);
                    });
                    document.getElementById('timenow').innerHTML = timenow();
                })
            });
            //????
            function reply(textContent) {
                if (textContent != "") {
                    $(".chatBox-content-demo").append("<div class=\"clearfloat\">" +
                            "<div class=\"author-name\"><small class=\"chat-date\" id=\"timenow\"></small> </div> " +
                            "<div class=\"left\"><div class=\"chat-avatars\"><img src=\"static/icon01.png\" alt=\"??\" /></div>  " +
                            "<div class=\"chat-message\"> " + textContent + " </div> </div> </div>");
                    //????????
                    $(document).ready(function () {
                        $("#chatBox-content-demo").scrollTop($("#chatBox-content-demo")[0].scrollHeight);
                    });
                    document.getElementById('timenow').innerHTML = timenow();
                }
            }
            //      ????
            function selectImg(pic) {
                if (!pic.files || !pic.files[0]) {
                    return;
                }
                var reader = new FileReader();
                reader.onload = function (evt) {
                    var images = evt.target.result;
                    $(".chatBox-content-demo").append("<div class=\"clearfloat\">" +
                            "<div class=\"author-name\"><small class=\"chat-date\" id=\"timenow\"></small> </div> " +
                            "<div class=\"right\"> <div class=\"chat-message\"><img src=" + images + "></div> " +
                            "<div class=\"chat-avatars\"><img src=\"static/icon01.png\" alt=\"??\" /></div> </div> </div>");
                    //????????
                    $(document).ready(function () {
                        $("#chatBox-content-demo").scrollTop($("#chatBox-content-demo")[0].scrollHeight);
                    });
                    document.getElementById('timenow').innerHTML = timenow();
                };
                reader.readAsDataURL(pic.files[0]);
            }
        </script>
        <!--?????????JS????-->


        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.animateNumber.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/jquery.timepicker.min.js"></script>
        <script src="js/scrollax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="js/google-map.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
