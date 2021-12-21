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
    <div class="blog-banner samples-banner">
        <h2 class="title">Stand Alone</h2>
    </div>



  <div class="samples">
      <div class="container">

        <!-- ***************  Website development   **************** -->

            <div class="section-flex">
                <div class="section-left">
                    <div class="section-content">
                        <h3 class="section-title">Website <span>Development</span></h3>
                        <p class="section-para">
                            Get your Hotel Website designed by the expert of Hotels. We architect your website in such a way that it really stands out from the competition – Your website will get the top most ranking guaranteed. There is so much we offer to make it the most engaging website. We provide Top ranking to your website, Most User friendly website, Lowest Load Time, With Java Effects, 24 x 7 assistance, SEO friendly Website.
                        </p>

                        <div class="section-content-list">
                            <div class="section-list-title">List of promenient hotels we have created webiste: </div>
                            
                            <p><i class="fas fa-chevron-right"></i> <a href="">Friends Resort</a></p>
                            <p><i class="fas fa-chevron-right"></i> <a href="">Natures Dreamland</a></p>
                            <p><i class="fas fa-chevron-right"></i> <a href="">Gulf Hotel, Colaba</a> </p>
                        </div>    
                        
                        <div class="button-container">
                            <a href="contact.html">Call now</a>
                        </div>
                    </div>
                </div>

                <div class="section-right">
                    <div class="img-container">
                        <div class="img-inner-container">
                        <img src="img/website-design.jpg" alt="Hospitality Minds">
                        </div>
                    </div>
                </div>
            </div>



            <!-- ***************  Digital Marketing   **************** -->

             <div class="section-flex">
                <div class="section-left ">
                    <div class="img-container">
                        <div class="img-inner-container">
                            <img src="img/homepage-services/digital-marketing-bg.jpg" alt="Hospitality Minds">
                        </div>
                    </div>
                </div>

                <div class="section-right">
                    <div class="section-content">
                        <h3 class="section-title">Digital <span>Marketing</span></h3>
                        <p class="section-para">
                            Get your hotel in Digital world in the most aggressive way & reach out to millions of guests. Our 360-degree marketing process is so effective that your page becomes engaging and your hotel generates business from it. 
                            We provide Unique and crafted Creatives, Target & Result Oriented Campaigns.
                        </p>

                        <div class="section-content-list">
                            <div class="section-list-title">Examples of prominent hotels where we handle offline sales: </div>
                            
                            <p><i class="fas fa-chevron-right"></i> <a href="">Pinetree Resorts</a></p>
                            <p><i class="fas fa-chevron-right"></i> <a href="">Rainforest Igatpuri</a></p>
                            <p><i class="fas fa-chevron-right"></i> <a href="">Green Velvet Lonavala</a> </p>
                        </div>    
                        
                        <div class="button-container">
                            <a href="contact.html">Call now</a>
                        </div>
                    </div>
                </div>
            </div>


             <!-- ***************  Graphic and Logo designing   **************** -->

            <div class="section-flex">
                <div class="section-left">
                    <div class="section-content">
                        <h3 class="section-title">Graphic <span>Designing</span></h3>
                        <p class="section-para">
                            Our graphic designing team has a great taste and experience in making banners and offer images for hotels.
                            We make logo which is at part with your brand. Uniqueness is what we believe in at core of any work.
                            We provide 3 designs to choose from, Stationery designs (Visiting Card + Letter head).  
                        </p>
                        
                        <div class="button-container">
                            <a href="contact.html">Call now</a>
                        </div>
                    </div>
                </div>

                <div class="section-right">
                    <div class="img-container">
                        <div class="img-inner-container">
                        <img src="img/homepage-services/graphic-design-bg.jpg" alt="Hospitality Minds">
                        </div>
                    </div>
                </div>
            </div>


            <div class="section-flex">
                <div class="section-left ">
                    <div class="img-container">
                        <div class="img-inner-container">
                            <img src="img/samples/offline-sales.jpg" alt="Hospitality Minds">
                        </div>
                    </div>
                </div>

                <div class="section-right">
                    <div class="section-content">
                        <h3 class="section-title">OFFLINE <span>SALES</span></h3>
                        <p class="section-para">
                            Are you facing issues of less calls / low walk-in business / Low restaurant sales. We will turn around your business with our expertise and with indepth analytics readings we will suggest you most appropriate solution for your problems. we provide Increase in walk-in business, Increase in calls, Increase in more footfalls, Cross sell of Banquets / Wedding queries, Niche marketing.
                        </p>

                        <div class="section-content-list">
                            <div class="section-list-title">Examples of prominent hotels where we handle offline sales: </div>
                            
                            <p><i class="fas fa-chevron-right"></i> <a href="">Pinetree Resorts</a></p>
                            <p><i class="fas fa-chevron-right"></i> <a href="">Rainforest Igatpuri</a></p>
                            <p><i class="fas fa-chevron-right"></i> <a href="">Green Velvet Lonavala</a> </p>
                        </div>    
                        
                        <div class="button-container">
                            <a href="contact.html">Call now</a>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="section-flex">
                <div class="section-left">
                    <div class="section-content">
                        <h3 class="section-title">PRE-<span>OPENING</span></h3>
                        <p class="section-para">
                            Hospitality Minds will help your hotel start in the most aggressive way.  Right from the hotel name to room categories - Design – Business – Competition analysis – Online research everything will be done under one roof. If you are also planning to take any hotel on rent do call us and get all the insights of your hotel and market potential within 48 hrs. 
                        </p>

                        <div class="section-content-list">
                            <div class="section-list-title">List of promenient hotels we have helped pre-open: </div>
                            
                            <p><i class="fas fa-chevron-right"></i> <a href="">Hotel Colaba Suites</a></p>
                            <p><i class="fas fa-chevron-right"></i> <a href="">Bodh Valley Resort Igatpuri</a></p>
                            <p><i class="fas fa-chevron-right"></i> <a href="">Pine tree Heritage Wing</a> </p>
                        </div>    
                        
                        <div class="button-container">
                            <a href="contact.html">Call now</a>
                        </div>
                    </div>
                </div>

                <div class="section-right">
                    <div class="img-container">
                        <div class="img-inner-container">
                        <img src="img/samples/revenue-managment.png" alt="Hospitality Minds">
                        </div>
                    </div>
                </div>
            </div>


            <div class="section-flex">
                <div class="section-left ">
                    <div class="img-container">
                        <div class="img-inner-container">
                            <img src="img/samples/photography.jpg" alt="Hospitality Minds">
                        </div>
                    </div>
                </div>

                <div class="section-right">
                    <div class="section-content">
                        <h3 class="section-title">HOTEL <span>PHOTOGRAPHY</span></h3>
                        <p class="section-para">
                            Do you know what is the most impactful thing you can do for your hotel? Its photography we have seen business transformation for hotels by doing fresh & professional photography. We provide Complete Room setup for photography,
                            HD images, 1 complete video
                        </p>

                        <div class="section-content-list">
                            <div class="section-list-title">Examples of prominent hotels where we have conducted photography sessions:</div>
                            
                            <p><i class="fas fa-chevron-right"></i> <a href="">Manas Lifestyle Resorts</a></p>
                            <p><i class="fas fa-chevron-right"></i> <a href="">Rainforest Spa Resort Igatpuri</a></p>
                            <p><i class="fas fa-chevron-right"></i> <a href="">Pacific Residency</a> </p>
                        </div>    
                        
                        <div class="button-container">
                            <a href="contact.html">Call now</a>
                        </div>
                    </div>
                </div>
            </div>

             <div class="section-flex">
                <div class="section-left">
                    <div class="section-content">
                        <h3 class="section-title">STAFF <span>TRAINING</span></h3>
                        <p class="section-para">
                            We have seen many times that Front office managers resist in delighting the guest and don’t attempt to please them or take efforts to get reviews. Your worries end here. We assure & guarantee you that within 3 months you will see a positive change in your staff and positive reviews will flourish. Our training modules and one to one counselling to each department which Touch bases with guest like front office – F & B will surely be transformed by our training and regular guidance. We provide More business, 100% guest happiness, Guaranteed more reviews on OTA’s and TripAdvisor, Appreciations & Rewards to staff and Change your staff in positive way.
                        </p>

                        <div class="section-content-list">
                            <div class="section-list-title">Examples of prominent hotels where we have trained the staff: </div>
                            
                            <p><i class="fas fa-chevron-right"></i> <a href=""> Hotel Grand Mumbai</a></p>
                            <p><i class="fas fa-chevron-right"></i> <a href="">Hotel Sai Jashan</a></p>
                            <p><i class="fas fa-chevron-right"></i> <a href="">Gulf Hotel Colaba</a> </p>
                        </div>    
                        
                        <div class="button-container">
                            <a href="contact.html">Call now</a>
                        </div>
                    </div>
                </div>

                <div class="section-right">
                    <div class="img-container">
                        <div class="img-inner-container">
                        <img src="img/samples/staff-training.jpg" alt="Hospitality Minds">
                        </div>
                    </div>
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
              <b>Email :</b><a href="mailto: bdm@hospitalityminds.com" style="text-decoration: none; color: aliceblue;">
                bdm@hospitalityminds.com</a>
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

    
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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