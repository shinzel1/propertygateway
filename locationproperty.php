<?php  
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");

$cityName =  isset($_REQUEST['id']) ? $_REQUEST['id'] : "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="Properties in <?php echo $cityName; ?> - PropertyGateway">
<meta name="keywords" content="Properties, <?php echo $cityName; ?>, Real Estate, Buy, Rent">
<meta name="author" content="Property Gateway">
<link rel="shortcut icon" href="images/favicon.ico">

<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

<title>Properties in <?php echo $cityName; ?> - PropertyGateway</title>
</head>
<body>

<div id="page-wrapper">
    <div class="row"> 
        <!-- Header -->
        <?php include("include/header.php");?>
        <!-- End Header -->
        
        <!-- Banner -->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0">
                            <b><?php echo $cityName ? "Properties in $cityName" : "City Properties"; ?></b>
                        </h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active"><?php echo $cityName; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner -->
        
        <!-- Property Grid -->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <?php 
                            if($cityName != ""){
                                $query = mysqli_query($con,"SELECT property.*, user.uname,user.utype,user.uimage 
                                                             FROM property 
                                                             JOIN user ON property.uid=user.uid 
                                                             WHERE property.location='$cityName'");
                                if(mysqli_num_rows($query) > 0){
                                    while($row=mysqli_fetch_array($query)){
                            ?>
                            <div class="col-md-6">
                                <div class="featured-thumb hover-zoomer mb-4">
                                    <div class="overlay-black overflow-hidden position-relative"> 
                                        <img src="admin/property/<?php echo $row['18'];?>" alt="pimage">
                                        <div class="sale bg-success text-white">For <?php echo $row['5'];?></div>
                                        <div class="price text-primary text-capitalize">
                                            $<?php echo $row['13'];?> 
                                            <span class="text-white"><?php echo $row['12'];?> Sqft</span>
                                        </div>
                                    </div>
                                    <div class="featured-thumb-data shadow-one">
                                        <div class="p-4">
                                            <h5 class="text-secondary hover-text-success mb-2 text-capitalize">
                                                <a href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a>
                                            </h5>
                                            <span class="location text-capitalize">
                                                <i class="fas fa-map-marker-alt text-success"></i> <?php echo $cityName; ?>
                                            </span>
                                        </div>
                                        <div class="px-4 pb-4 d-inline-block w-100">
                                            <div class="float-left text-capitalize">
                                                <i class="fas fa-user text-success mr-1"></i> By : <?php echo $row['uname'];?>
                                            </div>
                                            <div class="float-right">
                                                <i class="far fa-calendar-alt text-success mr-1"></i> 
                                                <?php echo date('d-m-Y', strtotime($row['date']));?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                    } 
                                } else {
                                    echo "<h4 class='text-center col-12'>No properties available in $cityName.</h4>";
                                }
                            } else {
                                echo "<h4 class='text-center col-12'>Invalid City Selection.</h4>";
                            }
                            ?>
                        </div>
                    </div>
                    
                    <!-- Sidebar -->
                    <div class="col-lg-4">
                        <div class="sidebar-widget">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 my-4">Instalment Calculator</h4>
                            <form class="d-inline-block w-100" action="calc.php" method="post">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend"><div class="input-group-text">$</div></div>
                                    <input type="text" class="form-control" name="amount" placeholder="Property Price">
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend"><div class="input-group-text"><i class="far fa-calendar-alt"></i></div></div>
                                    <input type="text" class="form-control" name="month" placeholder="Duration Year">
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend"><div class="input-group-text">%</div></div>
                                    <input type="text" class="form-control" name="interest" placeholder="Interest Rate">
                                </div>
                                <button type="submit" name="calc" class="btn btn-danger mt-3">Calculate Instalment</button>
                            </form>
                        </div>
                        
                        <div class="sidebar-widget mt-5">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Recently Added Property</h4>
                            <ul class="property_list_widget">
                                <?php 
                                $recent = mysqli_query($con,"SELECT * FROM property ORDER BY date DESC LIMIT 6");
                                while($row=mysqli_fetch_array($recent)){
                                ?>
                                <li>
                                    <img src="admin/property/<?php echo $row['18'];?>" alt="pimage">
                                    <h6 class="text-secondary hover-text-success text-capitalize">
                                        <a href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a>
                                    </h6>
                                    <span class="font-14"><i class="fas fa-map-marker-alt icon-success"></i> <?php echo $row['14'];?></span>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <!-- End Sidebar -->
                </div>
            </div>
        </div>
        <!-- End Property Grid -->

        <!-- Footer -->
        <?php include("include/footer.php");?>
        <!-- End Footer -->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
    </div>
</div>

<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>
