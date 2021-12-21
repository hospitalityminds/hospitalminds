<?php

session_start();

if(isset($_SESSION['is_adminlogin'])){
  $email = $_SESSION['email'];
}
else{
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
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());
    gtag("config", "UA-78744332-1");
  </script>
  <link rel="icon" href="img/favicon.ico" type="image/gif" sizes="16x16">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Hospitality Minds | India's Leading Hotel Consultants | Hotel Marketing agency</title>
  <meta name="description"
    content="Hospitality Minds offers a complete range of hospitality IT solutions, Online Reputation Management, Revenue Management, Social Media Marketing, Sales Support and OTA Management services for hotels and resorts in India" />
  <meta name="keywords"
    content="ota management company for hotels,ota management company in india,ota listing company,top marketing company for hotels in india,revenue management for hotels,revenue management company in india,hotel marketing company,hotel consultant in india,hotel consultant in Mumbai,hospitality consultant in india,best hotel marketing company in india,best revenue manager in india,best revenue manager in mumbai,top revenue management companies in world for hotels, Revenue management company in World, Top Revenue Management Company for Hotels, Hospitality Minds, Revenue Management, social media marketing company in mumbai, social media marketing company in india, hotels sales Support, social media marketing company for hotels in mumbai, social media marketing company for hotels in india, hospitalityminds, hotel consultants in mumbai, hotel consultants in india, OTA management company, hospitality management companies in india, OTA consultants in india, OTA consultants in mumbai, Revenue management in india, Revenue management in mumbai, hotel marketing company, hotel marketing company in india, hotel marketing company in mumbai." />
  <script src="https://kit.fontawesome.com/470d8ad497.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

  <link rel="stylesheet" href="css/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <style>


#popUpMain{
    position: fixed;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.2);
    z-index: 10001;
    padding: 20px;
    display: none;
}

#cancel{
  position: absolute;
    top: 20px;
    right: 30px;
    font-size: 20px;
    cursor: pointer;
}

.active{
  display: block!important;
}

.disable{
  display: none!important;
}

#popup{
    width: 100%;
    max-width: 40%;
    height: 500px;
    padding: 1% 1%;
    /* background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), transparent center center no-repeat; */
    background-color: var(--title-color);
    background-size: cover;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

#popup{
   display: flex;
    flex-direction: column;
    justify-content: center;
    border-radius: 20px;
}

#popup h1{
    font-size: 30px;
    font-family: 'Merriweather', serif;
    font-weight: 700;
    padding:20px 0 30px;
}

#popup form{
    margin: 0 auto;
    width: 95%;
}

#popup form input{
    width: 100%;
    padding: 15px 15px;
    margin-bottom: 20px;
    border:none;
    background: #f0f0f0;
    outline: none;
    font-size: 14px;
    font-weight: 600;
}

#popup form input::placeholder{
    font-size: 15px;
    font-weight: 600;
    font-family: 'Poppins', sans-serif;
    color: var(--bold-color);
}


#popup form .submit{
   margin-top: 10px;
    width: auto;
    padding: 10px 40px;
    border: none;
    background: var(--main-color);
    color: var(--title-color);
    font-weight: 700;
    text-transform: uppercase;
    border-radius: 50px;
    border:2px solid var(--main-color);
    transition: .3s ease-in;
}

#popup form .submit:hover{
  background: transparent;
  color: var(--main-color);
}





@media (max-width: 550px){
    #popup{
        max-width: 95%;
        height: 450px;
    }

    .button-container .submitId{
      padding:6px 18px;
      font-size: 14px;
    }
}

   </style>
	    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
</head>
<body>




    <div id="popUpMain">
      <div id="popup">
        <i class="fas fa-times" id="cancel"></i>
         <h1>Please Enter Details to view <br> the Offers.</h1>
          <form action="business-detail.php" method="POST">
            <input type="text" name="name" required  placeholder="Full Name">
            <input type="email" name="email" required placeholder="Email">
            <input type="text" name="mobile" required placeholder="Mobile no">
            <input type="text" name="bname" required placeholder="Business name">

            <input type="submit" name="submit" value="submit" class="submit">
          </form>
      </div>
   </div>



 <!-- NAVBAR -->
 <nav class="nav1 navbar navbar-expand-lg sticky-top navbar-light">
    <a class="navbar-brand" href="index.php"><img src="img/Hospitality.png" class="img-fluid"
        style="width: 180px; height: 60px; margin: 0px 30px;" alt="" /></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link a2" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <h6 class="nav-link a2" id="offers">Pricing & Offers</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link a2" href="covid-19.html">Post Covid 19</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link a2" href="services.html" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Services
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="revenuemanagement.html">Revenue Management</a>
            <a class="dropdown-item" href="socialmedia.html">Digital Marketing</a>
            <a class="dropdown-item" href="website.html">Website Development</a>
            <a class="dropdown-item" href="salessupport.html">Sales support</a>
            <a class="dropdown-item" href="onlinereputationmanagement.html">Online Reputation Management</a>
            <a class="dropdown-item" href="hotelaudit.html">Hotel Audit</a>
            <a class="dropdown-item" href="graphicdesign.html">Graphic Design</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link a2" href="expertise.html">Expertise</a>
        </li>
        <li class="nav-item">
          <a class="nav-link a2" href="portfolio.html">Portfolio</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link a2" href="career.html">Career</a>
        </li> -->
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
<div class="hospitality-introduction">
    <div class="homepage-introduction">
      <h2 class="main-description">
        Welcome To <span class="span1">Hospitality Minds</span>
      </h2>
      <h2 class="main-description">
        India's Leading <br />

        <span class="typewrite" data-period="1000"
          data-type='[ "Revenue Management Company", "Digital Marketing Company", "Website Development Company"]'>
          <span class="wrap"></span>
        </span>
        <br />
        for Hotels
      </h2>
    </div>
  </div>



  <section class="intro-2">
    <div class="growth-guaranteed text-center">
      <div>
        <div class="hm">
          <img src="img/we.jpg" width="255px" style="border-radius: 50%;" alt="" />
          <h3 style="font-size: 30px; color: #832161;">Hospitality Minds</h3>
        </div>
        <div>
          <h2><strong style="font-size: 70px; color: #e7298f;">+</strong></h2>
        </div>
        <div class="hotel">
          <img src="img/hotels.jpg" width="255px" style="border-radius: 50%;" alt="" />
          <h3 style="font-size: 30px; color: #832161;">Hotels</h3>
        </div>
        <div>
          <h2 style="font-weight: 900;">
            <strong style="font-size: 70px; color: #e7298f;">=</strong>
          </h2>
        </div>
        <div class="growth">
          <img src="img/sales.jpg" width="255px" style="border-radius: 50%;" alt="" />
          <h3 style="font-size: 30px; color: #832161;">Growth Guaranteed</h3>
        </div>
      </div>
    </div>
  </section>


  <section class="post-covid-19">
    <div class="container">
      <h3 class="title">Post Covid 19 Services</h3>
      <div class="flexbox-content">
        <h4 class="para">Revive Your Hotel Business and Standout from Competition.</h4>
        <div class="button-container">
          <h4><a href="tel: 9967333442"><i class="fas fa-phone-alt"></i> Call Now</a></h4>
          <h4><a href="covid-19.html">Learn More</a></h4>
        </div>
      </div>

    </div>
  </section>



  <section class="born-for-hotels text-center">
    <h3 class="title">
      Born For Hotels!
    </h3>
    <div class="container">
      <div class="row">
        <div class="par1">
          <p class="para">
            <b> Hospitality Minds</b> is a <a href="http://hospitalityminds.com/socialmedia.html">Hotel Marketing
              company</a> initiated in venturing into the mid-market segment
            hotels in
            the Indian hospitality perspective. Hospitality Minds Being one of the Top 10 Hospitality consulting firms
            in India today offers its services to major hotels across the country in various destinations like Mumbai,
            Darjeeling, Gangtok, Igatpuri, Shirdi, Mahabaleshwar, Gurgoan, Kashmir, Himachal Pradesh and Goa.
            Hospitality Minds is one of the <a href="http://hospitalityminds.com/revenuemanagement.html">best Revenue
              Management company</a> , & Hotel digital marketing agency for
            Hotels, Resorts, Restaurants and Bars. A Hotel marketing agency for all your Hotel needs.
            Hospitality Minds is a luxury hotel marketing agency that increases your sales plus makes builds your brand. Let us market your hotel and notice a visible growth in your business.
          </p>
          <p class="para">
            We believe in
            customer satisfaction with a dedicated team of enthusiastic individuals who believe in innovating different
            ways to plan, execute and deliver beyond set standards to solve the issues of hotels and drive your business
            forward. Hotels must adapt to new marketing strategies and a Hotel branding agency does just that to help
            your hotel attract more guests.
          </p>
          <p class="para">
            Our motto is to be a leading player in the hospitality industry providing exemplary service and strategy to
            grow the business of our hotels. Our services is all that hotel needs to be independent and grow business
            from all the channels.
          </p>
        </div>
      </div>
    </div>
  </section>




  <!-- ****************************    Our services start   *********************************** -->

  <section class="services">
      <div class="container">

         <h1 class="title">Our Services</h1>
             <div class="course-grid">

                 <div class="course-block">
                     <div class="course-img-container">
                         <img src="img/homepage-services/revenue-management-bg.jpg" alt="Hospitality Minds">
                     </div>

                     <h1 class="course-title">Revenue Management</h1>

                     <div class="course-content-container">
                         <i class="fas fa-quote-right"></i>
                         <p class="para">We are specialized in Revenue Management Services and
                        provide hoteliers with valuable revenue management solutions
                        for the effective growth of the hotel.</p>

                        <div class="course-social-container">
                           <a href="https://www.facebook.com/hospitalitymindsindia/" target="_blank"><i class="fab fa-facebook"></i></a>
                           <a href="https://www.instagram.com/hospitalityminds/" target="_blank">
                          <i class="fab fa-instagram"></i></a>
                           <a href="https://wa.me/919967333442" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </div>
                     </div>
                 </div>
                 <!-- **  course-block-end ** -->

                  <div class="course-block">
                     <div class="course-img-container dm">
                         <img src="img/homepage-services/digital-marketing-bg.jpg" alt="Hospitality Minds">
                     </div>

                     <h1 class="course-title">Digital Marketing</h1>

                     <div class="course-content-container">
                         <i class="fas fa-quote-right"></i>
                         <p class="para">Social media is mandatory for business marketing strategy.
                  What happens on social media stays on Google forever.</p>

                        <div class="course-social-container">
                           <a href="https://www.facebook.com/hospitalitymindsindia/" target="_blank"><i class="fab fa-facebook"></i></a>
                           <a href="https://www.instagram.com/hospitalityminds/" target="_blank">
                          <i class="fab fa-instagram"></i></a>
                           <a href="https://wa.me/919967333442" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </div>
                     </div>
                 </div>
                 <!-- **  course-block-end ** -->

                  <div class="course-block">
                     <div class="course-img-container wd">
                         <img src="img/homepage-services/website-development-bg.jpg" alt="Hospitality Minds">
                     </div>

                     <h1 class="course-title">Website Development</h1>

                     <div class="course-content-container">
                         <i class="fas fa-quote-right"></i>
                         <p class="para">There are three responses to a piece of design - Yes, No,
                  and WOW! Wow is the one to aim for.</p>

                        <div class="course-social-container">
                           <a href="https://www.facebook.com/hospitalitymindsindia/" target="_blank"><i class="fab fa-facebook"></i></a>
                           <a href="https://www.instagram.com/hospitalityminds/" target="_blank">
                          <i class="fab fa-instagram"></i></a>
                           <a href="https://wa.me/919967333442" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </div>
                     </div>
                 </div>
                 <!-- **  course-block-end ** -->

                  <div class="course-block">
                     <div class="course-img-container ss">
                         <img src="img/homepage-services/sales-support-bg.jpg" alt="Hospitality Minds">
                     </div>

                     <h1 class="course-title">Sales Support</h1>

                     <div class="course-content-container">
                         <i class="fas fa-quote-right"></i>
                         <p class="para">Creating your sales vision, converting them to goals and
                  developing strategies is what we do every day.</p>

                        <div class="course-social-container">
                           <a href="https://www.facebook.com/hospitalitymindsindia/" target="_blank"><i class="fab fa-facebook"></i></a>
                           <a href="https://www.instagram.com/hospitalityminds/" target="_blank">
                          <i class="fab fa-instagram"></i></a>
                           <a href="https://wa.me/919967333442" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </div>
                     </div>
                 </div>
                 <!-- **  course-block-end ** -->

                  <div class="course-block">
                     <div class="course-img-container orm">
                         <img src="img/homepage-services/orm-bg.jpg" alt="Hospitality Minds">
                     </div>

                     <h1 class="course-title">Online Reputation Management</h1>

                     <div class="course-content-container">
                         <i class="fas fa-quote-right"></i>
                         <p class="para">Our ORM team validates all the feedback from guest be it
                  Positive or Negative review and gives an appropriate reply
                  which will give good image of a Hotel in the mind of
                  clients.</p>

                        <div class="course-social-container">
                           <a href="https://www.facebook.com/hospitalitymindsindia/" target="_blank"><i class="fab fa-facebook"></i></a>
                           <a href="https://www.instagram.com/hospitalityminds/" target="_blank">
                          <i class="fab fa-instagram"></i></a>
                           <a href="https://wa.me/919967333442" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </div>
                     </div>
                 </div>
                 <!-- **  course-block-end ** -->

                  <div class="course-block">
                     <div class="course-img-container ha">
                         <img src="img/homepage-services/hotel-audit-bg.jpg" alt="Hospitality Minds">
                     </div>

                     <h1 class="course-title">Hotel Audit</h1>

                     <div class="course-content-container">
                         <i class="fas fa-quote-right"></i>
                         <p class="para"> If you're looking for change in services, sales or anything,
                  we're here for you.</p>

                        <div class="course-social-container">
                           <a href="https://www.facebook.com/hospitalitymindsindia/" target="_blank"><i class="fab fa-facebook"></i></a>
                           <a href="https://www.instagram.com/hospitalityminds/" target="_blank">
                          <i class="fab fa-instagram"></i></a>
                           <a href="https://wa.me/919967333442" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </div>
                     </div>
                 </div>
                 <!-- **  course-block-end ** -->


                  <div class="course-block">
                     <div class="course-img-container gd">
                         <img src="img/homepage-services/graphic-design-bg.jpg" alt="Hospitality Minds">
                     </div>

                     <h1 class="course-title">Graphic Design</h1>

                     <div class="course-content-container">
                         <i class="fas fa-quote-right"></i>
                         <p class="para">Our graphic designing team has a great taste and experience
                  in making banners and offer images for hotels. We have
                  created great offer banners for our hotels.</p>

                        <div class="course-social-container">
                           <a href="https://www.facebook.com/hospitalitymindsindia/" target="_blank"><i class="fab fa-facebook"></i></a>
                           <a href="https://www.instagram.com/hospitalityminds/" target="_blank">
                          <i class="fab fa-instagram"></i></a>
                           <a href="https://wa.me/919967333442" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </div>
                     </div>
                 </div>
                 <!-- **  course-block-end ** -->

                  <div class="course-block">
                     <div class="course-img-container hp">
                         <img src="img/homepage-services/hotel-photography.jpg" alt="Hospitality Minds">
                     </div>

                     <h1 class="course-title">Hotel Photography</h1>

                     <div class="course-content-container">
                         <i class="fas fa-quote-right"></i>
                         <p class="para"> Photography plays an important role for hotels all around
                  the world. Excellent hotel photography will help boost hotel
                  sales in the first place.</p>

                        <div class="course-social-container">
                           <a href="https://www.facebook.com/hospitalitymindsindia/" target="_blank"><i class="fab fa-facebook"></i></a>
                           <a href="https://www.instagram.com/hospitalityminds/" target="_blank">
                          <i class="fab fa-instagram"></i></a>
                           <a href="https://wa.me/919967333442" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </div>
                     </div>
                 </div>
                 <!-- **  course-block-end ** -->

                  <div class="course-block">
                     <div class="course-img-container st">
                         <img src="img/homepage-services/staff-training.jpg" alt="Hospitality Minds">
                     </div>

                     <h1 class="course-title">Staff Training</h1>

                     <div class="course-content-container">
                         <i class="fas fa-quote-right"></i>
                         <p class="para"> We also provide staff training services for our clients who
                  need it. Staff training is essential for the smooth
                  functioning of the hotel.</p>

                        <div class="course-social-container">
                           <a href="https://www.facebook.com/hospitalitymindsindia/" target="_blank"><i class="fab fa-facebook"></i></a>
                           <a href="https://www.instagram.com/hospitalityminds/" target="_blank">
                          <i class="fab fa-instagram"></i></a>
                           <a href="https://wa.me/919967333442" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </div>
                     </div>
                 </div>
                 <!-- **  course-block-end ** -->
      </div>
  </section>

  <!-- *******    Our services end   ******* -->



  <section class="testimonials">
    <div class="container-fluid">
      <h2 class="title">Testimonials</h2>
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="carousel-caption bg-colour-1 d-none d-md-block">
              <img src="img/portfolio/mogul-palace.png" style="height: 100px;" alt="" />
              <br /><br />
              <h3 class="title">Junaid Ahmad</h3>
              <h5>General Manager - Hotel Mogul Palace</h5>
              <p class="para">
                We are working with Hospitality minds since their inception,
                they possess everything that a hotelier requires, A team of
                young people, and very passionate about their roles and
                responsibilities. Our online revenue has increased besides
                this they also helped me to build my corporate and offline
                segment.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-caption bg-colour-2 d-none d-md-block">
              <img src="img/portfolio/Gorbandh-Logo.jpg" style="height: 100px;" alt="" />
              <br /><br />
              <h3 class="title">Manish Galundia</h3>
              <h5>Managing Director - Hotel Gorbandh, Udaipur</h5>
              <p class="para">
                We have been associated with hospitality minds since the past
                8 months and are pleased with how their revenue management
                team works. They are quick to respond and solve every query
                with utmost sincerity. They pay attention to every detail and
                are quick to take actions on the same.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-caption bg-colour-3 d-none d-md-block">
              <img src="img/portfolio/garden-hotel.png" style="height: 100px;" alt="" />
              <br /><br />
              <h3 class="title">Jagdish</h3>
              <h5>Garden Hotel</h5>
              <p class="para">
                All things bright and beautiful. All things wise and wonderful.
                But the team of Hospitality Minds top it all Great job guys.
                Happy to be associated with you since the last three years.
                Keep up the good work.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-caption bg-colour-4 d-none d-md-block">
              <img src="img/portfolio/grandview.png" style="height: 100px;" alt="" />
              <br /><br />
              <h3 class="title">Mrs. Radhika Chadha</h3>
              <h5>Grand View Hotel, Dalhouise</h5>
              <p class="para">
                Hospitality minds has been managing our social media marketing
                for over 3 years. We have been completely satisfied with their
                services. Nilesh, Krati, Pawan, Rupesh have all been extremely
                creative and reliable. Thank you so much for a job well done.
                You guys are the best! Keep up the hard work!
              </p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true">
              <i class="fas fa-chevron-left"></i>
          </span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true">
              <i class="fas fa-chevron-right"></i>
          </span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>

  <section class="who-we-are">
    <div class="container">
      <div class="row">
        <div class="col-md-6 who-we-are-content">
          <h2 class="title">Who We Are ?</h2>
          <p class="para">
            We are one of the best hotel branding agency in India. Our motto is to be a leading player in the
            hospitality industry. A Hospitality Digital Agency, providing exemplary service and strategy to grow the
            business of our hotels. Our services is all that hotel needs to be independent and grow business from all
            the channels.
          </p>
          <h4>Born For Hotels</h4>
        </div>
        <div class="col-md-6 ">
          <div id="carouselExampleCaptions1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="who-we-are-image"></div>
              </div>
              <div class="carousel-item">
                <div class="who-we-are-image1"></div>
              </div>
              <div class="carousel-item">
                <div class="who-we-are-image2"></div>
              </div>
              <div class="carousel-item">
                <div class="who-we-are-image3"></div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions1" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true">
                  <i class="fas fa-chevron-left"></i>
              </span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions1" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true">
                   <i class="fas fa-chevron-right"></i>
              </span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- start testimonial -->

  <!-- contact form -->
  <section class="page-contact-form">
    <h2>Interested to grow your business?</h2>
    <p>
      Please Fill-up the form to notify you that you're interested & we will
      get back to you asap. Thanks 😀
    </p>
    <div class="container-fluid">
      <form action="home-mail.php" method="post">
        <div class="row">
          <div class="form-group col-md-3">
            <!-- <label for="formGroupExampleInput">Example label</label> -->
            <input type="text" name="name" class="form-control" autocomplete="off" id="formGroupExampleInput" placeholder="Name" />
          </div>
          <div class="form-group col-md-3">
            <!-- <label for="formGroupExampleInput2">Another label</label> -->
            <input type="email" name="email" class="form-control" autocomplete="off" id="formGroupExampleInput2" placeholder="Email" />
          </div>
          <div class="form-group col-md-3">
            <!-- <label for="formGroupExampleInput2">Another label</label> -->
            <input type="phone" name="phone" class="form-control" autocomplete="off" id="formGroupExampleInput2" placeholder="Phone" />
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn">
              Submit
            </button>
          </div>
        </div>
      </form>
    </div>
  </section>



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
              <b>ADDRESS :</b> 603, Thawar Apartments,<br />
              Carter Road, Above Canara Bank, Borivali East,<br />
              Mumbai-400066.
            </p>
          </div>
          <div class="col-md-3 website-links">
            <h3>Quick Links</h3>
            <div class="row">
              <div class="col-md-6">
                <p><a href="index.html">Home</a></p>
                <!-- <p><a href="services.html">Services</a></p> -->
                <p><a href="expertise.html">Expertise</a></p>
                <p><a href="portfolio.html">Portfolio</a></p>
                <p><a href="policies.html">Policies</a>
                </p>
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

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="./js/parallax.min.js"></script>

  <script src="./js/app.js"></script>





   <script>

        document.querySelector('#offers').addEventListener("click",function(){
              let javar = '<?=$email?>';

              if(javar != ""){
                location.href='pricing_packages.php'
              }
              else{
                  document.querySelector('#popUpMain').classList.add("active");
              }
       });

   </script>

   <script>

        document.querySelector('#cancel').addEventListener("click",function(){
        document.querySelector('#popUpMain').classList.remove("active");
      });

   </script>





<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ba9c352b156da713cb3c5f5/1fd980ev0';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

  <script src="https://unpkg.com/typewriter-effect@2.3.1/dist/core.js"></script>
  <!--End of Tawk.to Script-->
  <script src="js/owl.carousel.min.js"></script>

</body>

</html>
