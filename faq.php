<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta name="description" content="Frequently Asked Questions - Property Gateway">
<meta name="keywords" content="FAQ, real estate help, propertygateway.co.in">
<meta name="author" content="Property Gateway">
<link rel="shortcut icon" href="images/favicon.ico">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

<title>FAQ - Property Gateway</title>
</head>
<body>

<div id="page-wrapper">
    <div class="row"> 
        <!-- Header -->
        <?php include("include/header.php"); ?>
        <!-- End Header -->

        <!-- Banner -->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Frequently Asked Questions</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">FAQ</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner -->

        <!-- FAQ Section -->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">Your Questions, Answered</h2>
                        <div class="accordion" id="faqAccordion">

                            <!-- FAQ Item 1 -->
                            <div class="card mb-3">
                                <div class="card-header" id="faq1">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-secondary" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true">
                                            How can I list my property on PropertyGateway.co.in?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse1" class="collapse show" aria-labelledby="faq1" data-parent="#faqAccordion">
                                    <div class="card-body">
                                        You can register an account, go to the "Add Property" section in your dashboard, fill in property details, upload photos, and submit. Our team will review and publish your listing.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ Item 2 -->
                            <div class="card mb-3">
                                <div class="card-header" id="faq2">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed text-secondary" type="button" data-toggle="collapse" data-target="#collapse2">
                                            Does Property Gateway charge for property listings?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse2" class="collapse" aria-labelledby="faq2" data-parent="#faqAccordion">
                                    <div class="card-body">
                                        Basic property listings are free. However, we offer premium plans for featured placements, higher visibility, and faster lead generation.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ Item 3 -->
                            <div class="card mb-3">
                                <div class="card-header" id="faq3">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed text-secondary" type="button" data-toggle="collapse" data-target="#collapse3">
                                            Is my personal information secure?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse3" class="collapse" aria-labelledby="faq3" data-parent="#faqAccordion">
                                    <div class="card-body">
                                        Yes. We follow strict data protection and privacy policies. Your personal data is never shared with third parties without consent.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ Item 4 -->
                            <div class="card mb-3">
                                <div class="card-header" id="faq4">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed text-secondary" type="button" data-toggle="collapse" data-target="#collapse4">
                                            How do I contact Property Gateway support?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse4" class="collapse" aria-labelledby="faq4" data-parent="#faqAccordion">
                                    <div class="card-body">
                                        You can reach us through our <a href="contact.php">Contact Page</a>, email at support@propertygateway.co.in, or call our customer service helpline.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ Item 5 -->
                            <div class="card mb-3">
                                <div class="card-header" id="faq5">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed text-secondary" type="button" data-toggle="collapse" data-target="#collapse5">
                                            Can I search for rental and sale properties separately?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse5" class="collapse" aria-labelledby="faq5" data-parent="#faqAccordion">
                                    <div class="card-body">
                                        Yes. You can filter properties by type, sale or rent status, budget, city, and many more options using our advanced search tool.
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end accordion -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End FAQ Section -->

        <!-- Footer -->
        <?php include("include/footer.php"); ?>
        <!-- End Footer -->

        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>

<!-- JS -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
