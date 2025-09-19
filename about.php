<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");								
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="Property Gateway - Real Estate Consultancy in Gurugram">
<meta name="keywords" content="real estate, property consultant, gurugram properties, buy property, commercial, residential">
<meta name="author" content="Property Gateway">

<link rel="shortcut icon" href="images/favicon.ico">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Muli:400,500,600,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700&display=swap" rel="stylesheet">

<!-- Css Links -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">

<title>About Us - Property Gateway</title>
</head>

<body>
<div id="page-wrapper">
    <div class="row"> 
        <!-- Header -->
        <?php include("include/header.php");?>
        <!-- Header End -->

        <!-- Banner -->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg'); background-size:cover; background-position:center;">
            <div class="container text-center text-white py-5">
                <h1 class="display-4 font-weight-bold">About Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center bg-transparent">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Banner End -->

        <!-- About Section -->
        <div class="full-row bg-light py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h2 class="mb-4">Welcome to <span class="text-secondary">Property Gateway</span></h2>
                        <p class="lead">
                            Property Gateway, a unit of Croprerty Real Estate Consultancy based in Gurugram, is a modern real estate advisory firm backed by trust, credibility, and years of expertise. 
                            While Property Gateway is a newly established venture, it is built on the strong foundation of <b>Property Solution</b>, an experienced company serving clients for more than 7–8 years. 
                            Under the leadership of <b>Mr. Mohinder Papreja – Managing Director</b>, we are committed to delivering honest, transparent, and customer-first real estate services.
                        </p>
                    </div>
                    <div class="col-lg-5 text-center">
                        <img src="images/about/image1.jpg" class="img-fluid rounded shadow" alt="About Property Gateway">
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- Vision & Mission -->
        <div class="full-row py-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6 mb-4">
                        <div class="p-4 bg-white shadow rounded h-100">
                            <!-- <i class="flaticon-target display-4 text-secondary mb-3"></i> -->
                            <h4>Our Vision</h4>
                            <p>To be recognized as a trusted property partner, helping people find the right property, secure the best deal, and settle with peace of mind.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="p-4 bg-white shadow rounded h-100">
                            <!-- <i class="flaticon-handshake display-4 text-secondary mb-3"></i> -->
                            <h4>Our Mission</h4>
                            <ul class="list-unstyled">
                                <li>✔ Provide end-to-end property solutions</li>
                                <li>✔ Ensure honesty, transparency & trust in every deal</li>
                                <li>✔ Deliver a customer-first approach in real estate services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vision & Mission End -->

        <!-- Why Choose Us -->
        <div class="full-row bg-light py-5">
            <div class="container">
                <h3 class="text-center mb-5">Why Choose <span class="text-secondary">Property Gateway?</span></h3>
                <div class="row text-center">
                    <div class="col-md-3 mb-4">
                        <i class="flaticon-building text-secondary display-4 mb-3"></i>
                        <h5>Experienced Foundation</h5>
                        <p>Backed by 7–8 years of expertise through Property Solution.</p>
                    </div>
                    <div class="col-md-3 mb-4">
                        <i class="flaticon-document text-secondary display-4 mb-3"></i>
                        <h5>Transparent Process</h5>
                        <p>Professional and ethical dealings in every transaction.</p>
                    </div>
                    <div class="col-md-3 mb-4">
                        <i class="flaticon-map text-secondary display-4 mb-3"></i>
                        <h5>Local Knowledge</h5>
                        <p>Strong presence and property network across Gurugram.</p>
                    </div>
                    <div class="col-md-3 mb-4">
                        <i class="flaticon-contract text-secondary display-4 mb-3"></i>
                        <h5>Hassle-Free Documentation</h5>
                        <p>Simplified legalities and paperwork for peace of mind.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Why Choose Us End -->

        <!-- Services -->
        <div class="full-row py-5">
            <div class="container">
                <h3 class="text-center mb-5">What We Do</h3>
                <div class="row text-center">
                    <div class="col-md-3 mb-4">
                        <!-- <i class="flaticon-house text-secondary display-4 mb-3"></i> -->
                        <h5>Residential</h5>
                        <p>Plots, Villas, Floors & Apartments.</p>
                    </div>
                    <div class="col-md-3 mb-4">
                        <!-- <i class="flaticon-skyscraper text-secondary display-4 mb-3"></i> -->
                        <h5>Commercial</h5>
                        <p>Office Spaces, Shops, Showrooms & Warehouses.</p>
                    </div>
                    <div class="col-md-3 mb-4">
                        <!-- <i class="flaticon-luxury text-secondary display-4 mb-3"></i> -->
                        <h5>Luxury</h5>
                        <p>Premium properties & exclusive developments.</p>
                    </div>
                    <div class="col-md-3 mb-4">
                        <!-- <i class="flaticon-growth text-secondary display-4 mb-3"></i> -->
                        <h5>Investments</h5>
                        <p>Builder floors, land parcels & growth projects.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- Core Values -->
        <div class="full-row bg-light py-5">
            <div class="container text-center">
                <h3 class="mb-5">Our Core Values</h3>
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <!-- <i class="flaticon-trust text-secondary display-4 mb-3"></i> -->
                        <h5>Integrity</h5>
                        <p>Transparency in every transaction.</p>
                    </div>
                    <div class="col-md-3 mb-4">
                        <!-- <i class="flaticon-loyalty text-secondary display-4 mb-3"></i> -->
                        <h5>Commitment</h5>
                        <p>Client satisfaction is our top priority.</p>
                    </div>
                    <div class="col-md-3 mb-4">
                        <!-- <i class="flaticon-idea text-secondary display-4 mb-3"></i> -->
                        <h5>Innovation</h5>
                        <p>Modern solutions for evolving property needs.</p>
                    </div>
                    <div class="col-md-3 mb-4">
                        <!-- <i class="flaticon-handshake text-secondary display-4 mb-3"></i> -->
                        <h5>Trust</h5>
                        <p>Building long-term relationships with clients.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Core Values End -->

        <!-- Footer -->
        <?php include("include/footer.php");?>
        <!-- Footer End -->

        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
    </div>
</div>

<!-- JS -->
<script src="js/jquery.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/custom.js"></script>

</body>
</html>
