<?php

session_start();

if(isset($_SESSION['is_adminlogin'])){
  $email = $_SESSION['email'];
}
else{
  echo "<script>location.href='index.php'</script>";
}

?> 


<!DOCTYPE html>
<html lang="en">

<head>

  <script type="text/javascript">

    if (screen.width <= 699) {

      window.location = "http://m.hospitalityminds.com/";

    }

  </script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-78744332-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-78744332-1');
  </script>
  <link rel="icon" href="img/favicon.ico" type="image/gif" sizes="16x16">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospitality Minds | Hotel Audit | Improve Hotel’s Sales</title>
  <meta name="description"
    content="We at Hospitality Minds conduct an Audit for your hotel where we look for point to enhance your hotel ambience which create a positive impression on the guests">
  <meta name="keywords"
    content="top revenue management companies in world for hotels, Revenue management company in World, Top Revenue Management Company for Hotels, business potential, Hotel Advisory, understanding the market trends, investments at right place, Quality staff, Source of business, Setting up online reputation, pre-opening services, Hotel Saviour, hotel going through tough times, expertise to protect hotel, sales, marketing, guest relationship, hotel consultants in mumbai, hotel consultants in india, hotel advisory, hotel advisory in mumbai, hotel advisory in india, ota consultants in mumbai, ota consultants in india, guest relationship management company">
  <script src="https://kit.fontawesome.com/470d8ad497.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
 <!-- NAVBAR -->
 <nav class="nav1 navbar navbar-expand-lg sticky-top navbar-light">
  <a class="navbar-brand" href="index.php"><img src="img/Hospitality.png" class="img-fluid"
      style="width:180px; height:60px;margin:0px 30px" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active ">
        <a class="nav-link a2" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link a2" href="pricing_packages.php">Pricing & Offers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link a2" href="covid-19.html">Post Covid 19</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link  a2" href="services.html" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item " href="revenuemanagement.html">Revenue Management</a>
          <a class="dropdown-item" href="socialmedia.html">Digital Marketing</a>
          <a class="dropdown-item " href="website.html">Website Design</a>
          <a class="dropdown-item " href="salessupport.html">Sales support</a>
          <a class="dropdown-item " href="onlinereputationmanagement.html">Online Reputation
            Management</a>
          <a class="dropdown-item " href="hotelaudit.html">Hotel Audit</a>
          <a class="dropdown-item " href="graphicdesign.html">Graphic Design</a>

        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link a2" href="expertise.html">Expertise</a>
      </li>
      <li class="nav-item">
        <a class="nav-link a2" href="portfolio.html">Portfolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link a2" href="international-hotel.html">International Hotel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link a2" href="hotel-lease-sell.html">Hotel Lease/Sell</a>
      </li>
      <li class="nav-item">
        <a class="nav-link a2" href="contact.html">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>

<!-- END NAVBAR -->
      <div class="blog-banner packages-banner">
        <h2 class="title">Packages</h2>
      </div>



  <div class="packages">
    <div class="container">
      <h1 class="title">Packages</h1>

        <div class="package-grid">

          <div class="package-block">
              <h1 class="package-title">RevEdge</h1>
              <a href="contact.html" class="pricing-button" >Enquiry Now</a>
              <hr>
              <div class="package-service-list">

                <h3><span>Revenue Management</span></h3>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Listings on OTA’s</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Setup on all OTA</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Assistance to front office team</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Hourly Portals Listing</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Maintain Parity on all OTA’s</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Rank Enhancement on all OTA’s</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Payment assistance of OTA’s</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Reply to all OTA Reviews & Meta Sites review within 7 days</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Once in a month call/meeting with Owner for future POA</h6>
                  </div>

                  
                 <h3><span>Digital Marketing</span></h3>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>GMB setup</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Photography Paid (if asked)</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>FB and Instagram page setup</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>4 post monthly.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Claim tripadvisor</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>SEO & Mobile friendly 4-page website.</h6>
                  </div>

                   <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>SEO Audit once in 6 months</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Google Ads – Expert Mode (Paid)</h6>
                  </div>


                <h3><span>ORM – Reputation Management.</span></h3>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Reply to OTA reviews within 78 hrs.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Remove Negative remove if its biased.</h6>
                  </div>

                  
              </div>

              <a href="tel:+91 9967333442" class="pricing-button" > Call Now</a>
          </div>   <!-- Block end -->






          <!-- ***************************  Rev Nuture start  ************************************ -->

          <div class="package-block">
              <h1 class="package-title">RevNurture</h1>
              <a href="contact.html" class="pricing-button" >Enquiry Now</a>
              
              <hr>
              <div class="package-service-list">

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Listings on OTA’s</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Setup on all OTA</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Assistance to front office team</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Hourly Portals Listing</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Maintain Parity on all OTA’s</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Rank Enhancement on all OTA’s</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Payment assistance of OTA’s</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Reply to all OTA Reviews within 72 hrs.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Once in 15 days’ call/ meeting with owner to discuss the POA</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Hotel Audit once in 3 months for Free</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Fresh Content on all OTA’s</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Regular performance track & growth from each OTA’s</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Assistance to direct booking engine and payment gateway</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Dynamic Pricing on all OTA’s based on occupancy.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Monthly report and Plan of action for coming months</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Get the Tagging in Filters of OTA’s </h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Training to Housekeeping and front office team for better reviews.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Review replies to 1st page of all OTA’s & Meta Sites.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Daily comp set price check for 3 hotels</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Meeting with OTA’s once in a month for the hotel.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>TripAdvisor Ranking Growth Guaranteed</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Live Website chat</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Assistance in Offline Business Growth</h6>
                  </div>


                
              <h3><span>Digital Marketing</span></h3>


                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>GMB Setup with 10 reviews organically </h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Photography Paid (if asked)</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>FB and Instagram page setup</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>3 post weekly</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Claim Tripadvisor and reply to top 5 reviews.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>SEO and Mobile friendly 6-page website.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>SEO audit once in 2 months.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Google Ads – Expert Mode (Paid)</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Post update on Social Media + Google.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Youtube marketing</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>1 Video in a month.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Review reply within 78 hrs.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Website Audit once in 3 months</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Off Page SEO</h6>
                  </div>



                  <h3><span>ORM – Reputation Management</span></h3>


                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Reply to OTA reviews within 48 hrs </h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Remove Negative remove if its biased.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Once in a week ORM report</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Training to team to get reviews</h6>
                  </div>
    
              </div>
               <a href="tel:+91 9967333442" class="pricing-button" > Call Now</a>
          </div>   <!-- Block end -->


   

          <!-- ********************************  RevElite start ***************************************** -->

          <div class="package-block">
              <h1 class="package-title">RevElite</h1>
              <a href="contact.html" class="pricing-button" >Enquiry Now</a>
              <!-- <button class="enquriy-button btn"><a href="tel:+91 9967333442"> Enquire Now</a> </button> -->
              
              <hr>
              <div class="package-service-list">
                 
                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Listings on OTA’s</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Setup on all OTA</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Assistance to front office team</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Hourly Portals Listing</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Maintain Parity on all OTA’s</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Rank Enhancement on all OTA’s</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Payment assistance of OTA’s</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Reply to all OTA Reviews within 48 hrs.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Once in a week call with owner to discuss POA & roadblocks.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Hotel Audit once in a month for Free</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Fresh Content on all OTA’s</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Regular performance track & growth from each OTA’s</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Assistance to direct booking engine and payment gateway</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Dynamic Pricing on all OTA’s based on occupancy.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Detailed 20 Page report in each aspects of Services with plan of action. </h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Get the Tagging in Filters of OTA’s </h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Training to Housekeeping and front office team for better reviews.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Review replies to 2 pages of all OTA’s and Meta Sites.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Daily comp set price check for 5 hotels</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Weekly Review with OTA market manager once in a week</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Publish blogs on the website and other meta sites.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Close monitor on reviews of Meta Sites.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Look & Push for awards and certificates.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>TripAdvisor Ranking Growth Guaranteed</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Live Website chat</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Preparing the database of all the guests stayed at the Hotel.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>One to one meetings with HODs to discuss the roadblocks</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Assistance in Offline Business Growth</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Assistance to grow corporate business</h6>
                  </div>



                  <h3><span>Digital Marketing</span></h3>


                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>GMB Setup with 30 reviews organically </h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Photography Paid (if asked)</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>FB and Instagram page setup</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>6 post weekly</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Claim Tripadvisor and reply to top 10 reviews.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>SEO and Mobile friendly 8+page website.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>SEO audit once in a Months</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Google Ads – Expert Mode (Paid) with detailed reporting</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Post update on Social Media + Google.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Youtube marketing</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>2 Video in a month.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Review reply within 48 hrs.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Website Audit with changes once in a month.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Off Page SEO</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Banners for Restaurant and Hoardings – 2 in a month.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>E-Mailers</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>LinkedIn Business Profile</h6>
                  </div>




                  <h3><span>ORM – Reputation Management</span></h3>


                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Reply to OTA reviews within 24 hrs </h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Remove Negative remove if its biased.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Twice in a week ORM report with competition analysis.</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Training to team to get reviews</h6>
                  </div>

                  <div class="package-service-item">
                    <i class="far fa-check-circle"></i>
                    <h6>Detailed Monthly report on Online reputation with reviews & POA.</h6>
                  </div>

              </div>
               <a href="tel:+91 9967333442" class="pricing-button" > Call Now</a>
          </div>   <!-- Block end -->
        </div> 


        <div class="pricing-container">
          <h4>Channel Manager for 1 Star and 2-star Hotel – INR 1000/- Per Month Supplementary.</h4>
          <h4>For Premium Hotel – INR 3000/- Per month.</h4>
        </div>
    
     </div>     
  </div>
 


<div class="mini-section">
    <div class="container">

      <div class="row">
        <div class="col-lg-6">
          <a href="samples.php">
            <div class="row-block">
              <div class="row-block-img-container">
                  <img src="img/samples/stand-small.jpg" alt="Hospitality Minds">
              </div>
              <div class="row-block-content">
                <h3>Stand-Alone</h3>
              </div>
            </div>
          </a>
        </div>

        <div class="col-lg-6">
          <a href="#">
            <div class="row-block">
              <div class="row-block-img-container">
                  <img src="img/samples/o-banner.png" alt="Hospitality Minds">
              </div>
              <div class="row-block-content">
                <h3>Offers</h3>
              </div>
            </div>
          </a>
        </div>
      </div>
      
    </div>
</div>      

   <!-- **************************   Footer start   ******************************* -->

  <section>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <img src="img/HM.png" class="img-fluid" alt="revenue management company in india" /> <br /><br />

            <div class="social-media-links">
                <p class="social-link">
                  <a href="https://www.facebook.com/hospitalitymindsindia/"><i class="fab fa-facebook"></i></a>
                </p>
                <p class="social-link">
                  <a href="https://www.instagram.com/hospitalityminds/"><i class="fab fa-instagram"></i></a>
                </p>
                <p class="social-link">
                  <a href="https://wa.me/919967333442"><i class="fab fa-whatsapp"></i></a>
                </p>
                <p class="social-link">
                  <a href="https://www.linkedin.com/company/hospitality-minds-india/"><i
                      class="fab fa-linkedin-in"></i></a>
                </p>
            </div>
          </div>


          <div class="col-md-3">
            <h3>Hospitality Minds</h3>
            <!-- <p> <img src="img/Hospitality.png" alt=""></p><br> -->
            <!-- <p><b>Born for Hotels</b></p> -->
            <p>
              <b>ADDRESS :</b> 116, Hari Om Plaza, <br />
              MG road, before Omkareshwar temple, Borivali(East). <br />
              Mumbai-400066.
            </p>
          </div>
          <div class="col-md-3 website-links">
            <h3>Quick Links</h3>
            <div class="row">
              <div class="col-md-6">
                <p><a href="index.php">Home</a></p>
                <!-- <p><a href="services.html">Services</a></p> -->
                <p><a href="expertise.html">Expertise</a></p>
                <p><a href="portfolio.html">Portfolio</a></p>
              </div>
              <div class="col-md-6">
                <p><a href="career.html">Career</a></p>
                <p>
                  <a target="_blank" href="blog.html">Blog</a>
                </p>
                <p><a href="contact.html">Contact Us</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h3>Contact Us</h3>
            <p>
              
              <a href="tel: +91 9967333442" style="text-decoration: none; color: aliceblue;">
                +91 9967333442</a>  
            </p>
            <p>
              <b>Email :</b>
              <a href="mailto: nilesh@hospitalityminds.com" style="text-decoration: none; color: aliceblue;">
                nilesh@hospitalityminds.com</a>
            </p>
          </div>
        </div>

      </div>

        <p class="footer-bottom">
            &copy; <script>  document.write(new Date().getFullYear()); </script> . All Rights Reserved. Made with ❤️ by <a href="index.php" style="color: #ffffff; text-decoration: none;">Hospitality Minds</a>
        </p>
    </div>
  </section>



  <!-- ************************   Social float start  ************************* -->


    <div class="social-float">
        <div class="social-float-flex">
            <a href="https://wa.me/919967333442" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.instagram.com/hospitalityminds/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/hospitalitymindsindia/" target="_blank"><i class="fab fa-facebook-square"></i></a>
            <a href="tel: +91 9967333442"><i class="fas fa-phone-alt"></i></a>
        </div>
    </div>

    
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="./js/parallax.min.js"></script>
  <script src="./js/app.js"></script>
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ba9c352b156da713cb3c5f5/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>