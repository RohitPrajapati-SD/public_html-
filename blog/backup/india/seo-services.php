<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PW3G7QS');</script>
<!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best SEO Services Company In New Delhi & Noida</title>
    <meta name="description" content="Get ahead of your competitors with our top-notch SEO services in New Delhi & Noida. We provide tailored and comprehensive strategies to help you achieve search engine rankings, organic traffic and conversions. Let us help you reach the top!" />

    <!-- boostrap css links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- bootstrap javascript links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- css links -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/common.css">

    <!-- swipper slider cdn links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- font awesome cdn links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- favicon icon -->
    <link rel="icon" href="./images/favicon.ico" sizes="32x32">

    <!--Aos animation cdn links -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- goggle font -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,600&display=swap" rel="stylesheet">

</head>
<body>
    <!-- header section start -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
              <a class="navbar-brand" href="seo-services.html">
                <img src="/assets/media/images/logo/logo.webp" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" href="#about-us">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#seo-result">SEO Results</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#packages">Packages</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#testimonials">Testimonials</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link btn_main btn_main_1" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                        Free SEO Audit
                    </a>

                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <!-- header section end -->

<?php 

if(isset($_POST['sub']))

   {

      $name=addslashes($_POST['name']);
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $website=$_POST['website'];
      $subject=$_POST['subject'];
   
        

$cd="Free SEO Consultation Form- Inquiry from Google Ads, <br>Name = ".$name."<br> Email = ".$email." <br> Mobile = ".$phone." <br> Website = ".$website." <br> description = ".$subject;

$to = "acmeinfolabs@gmail.com,info@acmeinfolabs.com";

$subject = "This Lead is from Google | Acmeinfolabs.com/ Landing page";
$txt = $cd;


$headers ="MIME-Version: 1.0";
            $headers='From: info@acmeinfolabs.com' . "\r\n";
            $headers='Reply-To: '.$email."\r\n" .
             $headers.="Content-type: text/html;charset=utf-8";
             $headers.="X-Priority: 3";
            $headers.="X-Mailer: smail-PHP ".phpversion()."";

mail($to,$subject,$txt,$headers);

 $abc=str_replace(" ", "%20", $abc);
echo "<script>location.href='https://www.acmeinfolabs.com/india/thankyou'; </script>";
// header("Location: thankyou.php"); 
 exit;

}
       
//ends here.. 
?>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <!-- lets talk form section start -->
            <section class="mt-4 mb-4" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="main_heading">
                      <h3>Get Free Audit of Your Website!</h3>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="talk_form_box">
                      <form action="" method="post">
                        <div class="talk_main_heading d-flex justify-content-between">
                          <h4>Get in touch</h4>
                          <img src="./images/contact_mail.svg" alt="">
                        </div>
                        <div class="row mt-3">
                          <div class="col-md-6 col-sm-6">
                            <div class="mb-3">
                              <label class="form-label">Your Name</label>
                             <input type="text" name="name" placeholder="Enter Your Name">
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6">
                            <div class="mb-3">
                              <label class="form-label">Email Address*</label>
                              <input type="text" placeholder="Enter Your Email Address" name="email" required>
                            </div>
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-md-6 col-sm-6">
                            <div class="mb-3">
                              <label class="form-label">Contact Number*</label>
                              <input type="number" placeholder="Enter Your Number" name="phone" required>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6">
                            <div class="mb-3">
                              <label class="form-label">Website Url*</label>
                              <input type="url" placeholder="Enter Your Website Url" name="website" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="mb-3">
                            <label class="form-label">Requirement Description*</label>
                            <input type="text" placeholder="Enter Your Message" name="subject" required>
                          </div>
                        </div>
                        <button name="sub" class="border-0 btn_main mx-auto d-block mt-3">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          <!-- lets talk form section end -->
        </div>
      </div>
    </div>


    <!-- home section start -->
    <section class="pt-5 home_section">
      <div class="hero_animation">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
        <div class="container pt-4">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="home_content d-flex gap-3">
                      <!-- <div class="social_media">
                        <ul class="list-unstyled">
                          <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                          <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                          <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                      </div> -->
                        <div data-aos="fade-up"
                        data-aos-duration="3000">
                          <h1 class="text-white">Best SEO Services In <span> New Delhi & Noida</span></h1>
                          <h4 class="mt-3 mb-3 text-white">Get Your Website On No. 1 Page Of Google</h4>
                          <p>We are well known for our quality work and Top Ranks. Since last 10 Years we are working with clients across the globe and generating traffic that converts. We will do free audit and consultation for you and help you in ranking your website on Google. It will help in scaling up your business and will generate sales and profits.</p>
                          <a href="tel:+91-9560 494 030" class="btn_main text-decoration-none">Connect with us</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                  <!-- <div class="home_img">
                    <img src="./images/home-img.png" alt="" class="w-75 mx-auto d-block">
                  </div> -->
                  <div class="talk_form_box">
<form action="" method="post">
<div class="talk_main_heading d-flex justify-content-between">
<h4>Enquiry Now</h4>
<img src="./images/contact_mail.svg" alt="">
</div>
<div class="row mt-3">
<div class="col-md-6 col-sm-6">
<div class="mb-3">
<label class="form-label">Your Name</label>
<input type="text" placeholder="Enter Your Name" name="name">
</div>
</div>
<div class="col-md-6 col-sm-6">
<div class="mb-3">
<label class="form-label">Email Address*</label>
<input type="email" placeholder="Enter Your Email Address" name="email" required="">
</div>
</div>
</div>
<div class="row mt-3">
<div class="col-md-6 col-sm-6">
<div class="mb-3">
<label class="form-label">Contact Number*</label>
<input type="number" placeholder="Enter Your Number" name="phone" required="">
</div>
</div>
<div class="col-md-6 col-sm-6">
<div class="mb-3">
<label class="form-label">Website Url*</label>
<input type="text" placeholder="Enter Your Website Url" name="subject" required="">
</div>
</div>
</div>
<button name="submit" class="border-0 btn_main mx-auto d-block mt-3">Submit</button>
</form>
</div>
                rgb(3, 4, 5)
            </div>
        </div>
    </section>
    <!-- home section end -->


    <!-- seo types section start -->
    <section class="our_companies_section pt-5 pb-5" id="about-us">
      <div class="container mt-5 mb-5">
        <div class="row">
          <div class="col-xl-4 col-xl-4 mb-3 mb-xl-0" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <div class="seo_type_content main_heading">
              <h5 class="text-start">Our Services</h5>
              <h2 class="text-start mb-3">Types of SEO Services</h2>
              <p>The websites with large number of pages needs to be promoted in unique way. Normal SEO is for small and medium websites.</p>
              <a href="tel:+91-9560 494 030" class="btn_main text-decoration-none">Contact Us</a>
            </div>
          </div>
          <div class="col-xl-8">
            <div class="row">
              <div class="col-md-4 mt-3 mt-md-0" data-aos="fade-up" data-aos-duration="1500">
                <div class="seo_boxes">
                  <img src="https://www.acmeinfolabs.com/assets/media/images/slider/layers/local-seo.webp" class="w-100">
                  <h4 class="mt-3">Local SEO</h4>
                  <p class="mb-0">Find Clients in your local area. Suitable for Small businesses who deliver goods and services nearby. Google Profile SEO included.</p><br>
                </div>
              </div>
              <div class="col-md-4 mt-3 mt-md-0" data-aos="fade-up" data-aos-duration="2000">
                <div class="seo_boxes">
                  <img src="https://www.acmeinfolabs.com/assets/media/images/slider/layers/national-seo.webp" class="w-100">
                  <h4 class="mt-3">National SEO</h4>
                  <p class="mb-0">Find Customers in whole country. Suitable for growing businesses who aim to expand and can server a larger audience.</p><br>
                </div>
              </div>
              <div class="col-md-4 mt-3 mt-md-0" data-aos="fade-up" data-aos-duration="3000">
                <div class="seo_boxes">
                  <img src="https://www.acmeinfolabs.com/assets/media/images/slider/layers/ecommerce-seo.webp" class="w-100">
                  <h4 class="mt-3">Ecommerce SEO</h4>
                  <p class="mb-0">Sell your products/Services through your E-Commerce store. We promote your products online in such a way that you get new sales online.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- seo types section end -->



    <!-- over companies section start -->
    <section class="pt-5 pb-5" data-aos="fade-down"
    data-aos-easing="linear"
    data-aos-duration="1000">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="main_heading">
            <h3>Trusted By Companies All Over The World</h3>
            </div>
          </div>
          <!-- Slider main container -->
          <div class="swiper mySwiper companies_logo mt-4 mb-4">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="./images/Blesket-Canada-logo.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="./images/cochiseheart-logo.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="./images/drRoadworthy-logo.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="./images/felixhospital.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="./images/Gutaderme.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="./images/ISSC-CANADA.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="./images/jbvoice.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="./images/kyrgyzguidedtour.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="./images/Martial.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="./images/motherlaps.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="./images/rege.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="./images/riyanfood.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="./images/RomperJill.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="./images/Sinema-Films.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="./images/supreme-automotive.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="./images/trexperienceperu.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="./images/vgoodco.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="./images/visaplan.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- over companies section end -->



    <!-- Why We Are Best! section start -->
    <section class="whybest_section pt-5 pb-5">
      <div class="container mb-4">
        <div class="row">
          <div class="col-12">
            <div class="main_heading">
              
              <h3 class="text-white">Why We Are Best!</h3>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-6 mt-3" data-aos="fade-up" data-aos-duration="1000">
            <div class="rating_boxes">
              <div>
                <img src="./images/trustpiolt.png" alt="" class="w-100">
              </div>
              <h5 class="d-flex align-items-center text-white gap-1">
                4.5 Star Rating on
                <span>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </span></h5>
              <p class="d-flex"><i class="fa-solid fa-check"></i> 10 Years Experience in Digital marketing</p>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-6 mt-3" data-aos="fade-up" data-aos-duration="1500">
            <div class="rating_boxes">
              <div>
                <img src="./images/facebook.png" alt="" class="w-100">
              </div>
              <h5 class="d-flex align-items-center text-white gap-1">
                4.8 Star Rating on
                <span>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </span></h5>
              <p class="d-flex"><i class="fa-solid fa-check"></i> Expert team of SEO enthusiasts</p>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-6 mt-3" data-aos="fade-up" data-aos-duration="2000">
            <div class="rating_boxes">
              <div>
                <img src="./images/glassdoor.png" alt="" class="w-100">
              </div>
              <h5 class="d-flex align-items-center text-white gap-1">
                5 Star Rating on
                <span>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </span></h5>
              <p class="d-flex"><i class="fa-solid fa-check"></i> Top 10 Rank Assured</p>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-6 mt-3" data-aos="fade-up" data-aos-duration="2500">
            <div class="rating_boxes">
              <div>
                <img src="./images/gmb.png" alt="" class="w-100">
              </div>
              <h5 class="d-flex align-items-center text-white gap-1">
                4.7 Star Rating on
                <span>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </span></h5>
              <p class="d-flex"><i class="fa-solid fa-check"></i> Have clients in more than 20 countries</p>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-6 mt-3" data-aos="fade-up" data-aos-duration="3000">
            <div class="rating_boxes">
              <div>
                <img src="./images/10seocom.png" alt="" class="w-100">
              </div>
              <h5 class="d-flex align-items-center text-white gap-1">
                4.5 Star Rating on
                <span>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </span></h5>
              <p class="d-flex"><i class="fa-solid fa-check"></i> Customised Strategies for Each client</p>
            </div>
          </div>
           <div class="col-xl-4 col-md-6 col-sm-6 mt-3" data-aos="fade-up" data-aos-duration="3000">
            <div class="rating_boxes">
              <div>
                <img src="./images/Business-Connect-Magazine-Logo-2-1.png" alt="" class="w-100 py-3">
              </div>
              <h5 class="d-flex align-items-center text-white gap-1">
                4.6 Star Rating on
                <span>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </span></h5>
              <p class="d-flex"><i class="fa-solid fa-check"></i> Featured as "Agency of the Year" in business connect</p>
            </div>
          </div>
          <div class="col-12 text-center rating_goggle mt-5">
            <h5 class="d-flex align-items-center justify-content-center gap-1">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i></h5>
            <h6 class="text-white">Acme Infolabs is rated 4.5 / 5 average from 200 reviews on Google, Clutch!</h6>
          </div>
        </div>
      </div>
    </section>
    <!-- Why We Are Best! section end -->


    <!-- We help your business section start -->
    <section class="help_business_section mt-5 pt-5" data-aos="flip-left"
    data-aos-easing="ease-out-cubic"
    data-aos-duration="2000">
      <div class="container our_companies_section">
        <div class="row">
          <div class="help_business_box text-center">
            <h3>We help your business to maximize its online exposure with our comprehensive market <br> research and SEO strategy. Book a Free 1-1 consultation with our top SEO experts</h3>
            <!-- <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi eveniet sit dignissimos, <br> vero ab fuga iste rem nobis voluptates! Reiciendis rem sequi nemo!</p> -->
            <button class="border-0 btn_main mx-auto d-block" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Get Free SEO consultation</button>
          </div>
        </div>
      </div>
    </section>
    <!-- We help your business section end -->


    <!-- seo packges section start -->
    <section class="mt-5" id="packages">
      <div class="container">
        <div class="row">
            <div class="col-12">
              <div class="main_heading text-center">
                <h>Our SEO Packages</h3>
              </div>
            </div>
          <div class="col-xl-4 col-md-6" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <div class="seo_packages_box">
                <div class="seo_bg">
                  <h3>Silver</h3>
                  <!-- <h4><i class="fa-solid fa-indian-rupee-sign"></i> 10999 <span>/ Monthly</span></h4>-->
                </div>
                <ul class="list-unstyled ">
                  <li class="text-center"><h5>Number of Keywords 20</h5></li>
                  <li><i class="fa-solid fa-check"></i> Web Analysis</li>
                  <li><i class="fa-solid fa-check"></i> Competition Analysis</li>
                  <li><i class="fa-solid fa-check"></i> Well-commented Code</li>
                  <li><i class="fa-solid fa-check"></i> Content Duplicity Check</li>
                  <li><i class="fa-solid fa-check"></i> Search Engine Optimization Strategy</li>
                  <li><i class="fa-solid fa-check"></i> Initial Ranking report</li>
                  <li><i class="fa-solid fa-check"></i> On Page Optimization</li>
                  <li><i class="fa-solid fa-check"></i> Off Page Optimization</li>
                  <li><i class="fa-solid fa-check"></i> Report Status</li>
                  <div class="button_online d-flex mb-2 mt-4">
                    <a href="#" class="btn_main text-decoration-none mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Talk to a Consultant</a>
                  </div>
                </ul>
            </div>
          </div>
          <div class="col-xl-4 col-md-6" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
            <div class="seo_packages_box">
                <div class="seo_bg">
                  <h3>Gold</h3>
                  <!-- <h4><i class="fa-solid fa-indian-rupee-sign"></i> 12999 <span>/ Monthly</span></h4> -->
                </div>
                <ul class="list-unstyled ">
                  <li class="text-center"><h5>Number of Keywords 30</h5></li>
                  <li><i class="fa-solid fa-check"></i> Web Analysis</li>
                  <li><i class="fa-solid fa-check"></i> Competition Analysis</li>
                  <li><i class="fa-solid fa-check"></i> Well-commented Code</li>
                  <li><i class="fa-solid fa-check"></i> Content Duplicity Check</li>
                  <li><i class="fa-solid fa-check"></i> Search Engine Optimization Strategy</li>
                  <li><i class="fa-solid fa-check"></i> Initial Ranking report</li>
                  <li><i class="fa-solid fa-check"></i> On Page Optimization</li>
                  <li><i class="fa-solid fa-check"></i> Off Page Optimization</li>
                  <li><i class="fa-solid fa-check"></i> Report Status</li>
                  <div class="button_online d-flex mb-2 mt-4">
                    <a href="#" class="btn_main text-decoration-none mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Talk to a Consultant</a>
                  </div>
                </ul>
            </div>
          </div>
          <div class="col-xl-4 col-md-6" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <div class="seo_packages_box">
                <div class="seo_bg">
                  <h3>Platinum</h3>
                  <!-- <h4><i class="fa-solid fa-indian-rupee-sign"></i> 26999 <span>/ Monthly</span></h4> -->
                </div>
                <ul class="list-unstyled ">
                  <li class="text-center"><h5>Number of Keywords 50</h5></li>
                  <li><i class="fa-solid fa-check"></i> Web Analysis</li>
                  <li><i class="fa-solid fa-check"></i> Competition Analysis</li>
                  <li><i class="fa-solid fa-check"></i> Well-commented Code</li>
                  <li><i class="fa-solid fa-check"></i> Content Duplicity Check</li>
                  <li><i class="fa-solid fa-check"></i> Search Engine Optimization Strategy</li>
                  <li><i class="fa-solid fa-check"></i> Initial Ranking report</li>
                  <li><i class="fa-solid fa-check"></i> On Page Optimization</li>
                  <li><i class="fa-solid fa-check"></i> Off Page Optimization</li>
                  <li><i class="fa-solid fa-check"></i> Report Status</li>
                  <div class="button_online d-flex mb-2 mt-4">
                    <a href="#" class="btn_main text-decoration-none mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Talk to a Consultant</a>
                  </div>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- seo packges section end -->


    <!-- gallery section start -->
    <!-- <section class="mt-5 help_business_section">
      <div class="container our_companies_section">
        <div class="main_heading">
          <h3>Recent Keywords On First Page</h3>
        </div>
        <div class="swiper gallery_slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="gallery_img" onclick="show('gallery_img-1')">
                <img src="./images/Adelaide-recent-keyword.jpg">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="gallery_img" onclick="show('gallery_img-2')">
                <img src="./images/Car-suspension-Services-West-End.jpg" alt="">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="gallery_img" onclick="show('gallery_img-3')">
                <img src="./images/everafterentairntment.jpg" alt="">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="gallery_img" onclick="show('gallery_img-4')">
                <img src="./images/Pest-control-Adelaide.jpg" alt="">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="gallery_img" onclick="show('gallery_img-5')">
                <img src="./images/rafting- in-Kyrgyzstan.jpg" alt="">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="gallery_img" onclick="show('gallery_img-6')">
                <img src="./images/recent-img-shaynestree.jpg" alt="">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="gallery_img" onclick="show('gallery_img-7')">
                <img src="./images/safety-certificates-in-south-bank-keyword.jpg" alt="">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="gallery_img" onclick="show('gallery_img-8')">
                <img src="./images/Supreme-Automotive.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="swiper-button-next btn_gallery"></div>
          <div class="swiper-button-prev btn_gallery"></div>
        </div>
      </div>
    </section> -->

      <!-- This is what will be included inside the popup -->
        <!-- <div class="popup" id="gallery_img-1">
          <img src="./images/Adelaide-recent-keyword.jpg">
          <a href="avascript:void(0)" onclick="hide('gallery_img-1')"><i class="fa-solid fa-xmark"></i></a>
        </div>
        <div class="popup" id="gallery_img-2">
          <img src="./images/Car-suspension-Services-West-End.jpg" alt="">
          <a href="avascript:void(0)" onclick="hide('gallery_img-2')"><i class="fa-solid fa-xmark"></i></a>
        </div>
        <div class="popup" id="gallery_img-3">
          <img src="./images/everafterentairntment.jpg" alt="">
          <a href="avascript:void(0)" onclick="hide('gallery_img-3')"><i class="fa-solid fa-xmark"></i></a>
        </div>
        <div class="popup" id="gallery_img-4">
          <img src="./images/Pest-control-Adelaide.jpg" alt="">
          <a href="avascript:void(0)" onclick="hide('gallery_img-4')"><i class="fa-solid fa-xmark"></i></a>
        </div>
        <div class="popup" id="gallery_img-5">
          <img src="./images/rafting- in-Kyrgyzstan.jpg" alt="">
          <a href="avascript:void(0)" onclick="hide('gallery_img-5')"><i class="fa-solid fa-xmark"></i></a>
        </div>
        <div class="popup" id="gallery_img-6">
          <img src="./images/recent-img-shaynestree.jpg" alt="">
          <a href="avascript:void(0)" onclick="hide('gallery_img-6')"><i class="fa-solid fa-xmark"></i></a>
        </div>
        <div class="popup" id="gallery_img-7">
          <img src="./images/safety-certificates-in-south-bank-keyword.jpg" alt="">
          <a href="avascript:void(0)" onclick="hide('gallery_img-7')"><i class="fa-solid fa-xmark"></i></a>
        </div>
        <div class="popup" id="gallery_img-8">
          <img src="./images/Supreme-Automotive.jpg" alt="">
          <a href="avascript:void(0)" onclick="hide('gallery_img-8')"><i class="fa-solid fa-xmark"></i></a> -->
        </div>
    <!-- gallery section end -->


    <!-- Our Recent Projects section start -->
    <section class="mt-5" id="seo-result" data-aos="flip-up">
      <div class="main_heading">
        <h3>Our Recent Projects</h3>
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner container">
          <div class="carousel-item active">
            <div class="row main_our_project_row">
              <div class="col-md-6 p-0">
                <div class="project_table">
                  <h3>romperjill.com</h3>
                  <table class="w-100">
                    <tr>
                      <th>Keywords</th>
                      <th>Google.com USA</th>
                    </tr>
                    <tr>
                      <td>black overalls womens shorts</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>buy Black Short Overalls</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>Buy Black Distressed Overalls</td>
                      <td>6</td>
                    </tr>
                    <tr>
                      <td>Womens classic denim overalls</td>
                      <td>7</td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="col-md-6 p-0">
                <div class="our_project_img">
                  <img src="/images/romperjill.webp" alt="" width="100%">
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row main_our_project_row">
              <div class="col-md-6 p-0">
                <div class="project_table">
                  <h3>cochiseheart.org</h3>
                  <table class="w-100">
                    <tr>
                      <th>Keywords</th>
                      <th>Google.com USA</th>
                    </tr>
                    <tr>
                      <td>heart stent surgery sierra vista az</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>heart doctor sierra vista</td>
                      <td>6</td>
                    </tr>
                    <tr>
                      <td>vascular care specialist sierra vista az</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>best cardiologist sierra vista az</td>
                      <td>1</td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="col-md-6 p-0">
                <div class="our_project_img">
                  <img src="/images/cochiseheart.webp" alt="" width="100%">
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row main_our_project_row">
              <div class="col-md-6 p-0">
                <div class="project_table">
                  <h3>aritra.net</h3>
                  <table class="w-100">
                    <tr>
                      <th>Keywords</th>
                      <th>Google.co.in</th>
                    </tr>
                    <tr>
                      <td>past life regression therapy</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>past life regression</td>
                      <td>6</td>
                    </tr>
                    <tr>
                      <td>hypnotherapist in delhi</td>
                      <td>8</td>
                    </tr>
                    <tr>
                      <td>stress management in delhi</td>
                      <td>5</td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="col-md-6 p-0">
                <div class="our_project_img">
                  <img src="/images/aritra.webp" alt="" width="100%">
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row main_our_project_row">
              <div class="col-md-6 p-0">
                <div class="project_table">
                  <h3>blesket.com</h3>
                  <table class="w-100">
                    <tr>
                      <th>Keywords</th>
                      <th>Google.com Canada</th>
                    </tr>
                    <tr>
                      <td>Platinum pens Canada</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>Conklin pens canada</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>Visconti pens Canada</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>Monteverde pens Canada</td>
                      <td>3</td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="col-md-6 p-0">
                <div class="our_project_img">
                  <img src="/images/blesket-canada.webp" alt="" width="100%">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Our Recent Projects section end -->


    <!-- testimonial section start -->
    <section class="our_companies_section pt-5 mt-5 pb-5" id="testimonials" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
      <div class="container">
        <div class="col-12">
          <div class="main_heading">
            <h5>Our Happy Clients</h5>
            <h3>What our customer says</h3>
          </div>
        </div>
    <div class="swiper mySwiper-2">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="row px-4 align-items-center">
            <div class="col-xl-9 mx-auto">
              <div class="testimonial_content">
                <div class="testimonial_name d-flex gap-3">
                  <div><img src="/images/double_quote.svg" alt=""></div>
                  <div>
                    <h5>Akash Thakur</h5>
                    <p>Manager</p>
                  </div>
                </div>
                <p class="mt-3">The environment of the company is very good, the employees are very friendly here. My working experience here is best as it is the best SEO company in India.</p>
              </div>
            </div>
            <!-- <div class="col-xl-4 col-3">
              <div class="testimonial_img">
                <img src="./images/client-1.jpg" alt="">
              </div>
            </div> -->
          </div>
        </div>
        <div class="swiper-slide">
          <div class="row px-4 align-items-center">
            <div class="col-xl-9 mx-auto">
              <div class="testimonial_content">
                <div class="testimonial_name d-flex gap-3">
                  <div><img src="./images/double_quote.svg" alt=""></div>
                  <div>
                    <h5>Doctors IEA</h5>
                    <p>Manager</p>
                  </div>
                </div>
                <p class="mt-3">Acme Infolabs is very professional and quality oriented Digital Marketing Services
                                Company based in Delhi India. I appreciate their support towards Digital Marketing
                                my website. The SEO results have improved our web ranking on our desired keywords
                                and I would recommend using them.</p>
              </div>
            </div>
            <!-- <div class="col-xl-4 col-3">
              <div class="testimonial_img">
                <img src="./images/client-1.jpg" alt="">
              </div>
            </div> -->
          </div>
        </div>
        <div class="swiper-slide">
          <div class="row px-4 align-items-center">
            <div class="col-xl-9 mx-auto">
              <div class="testimonial_content">
                <div class="testimonial_name d-flex gap-3">
                  <div><img src="./images/double_quote.svg" alt=""></div>
                  <div>
                    <h5>Sandeep Kumar Singh</h5>
                    <p>Manager</p>
                  </div>
                </div>
                <p class="mt-3">They are knowledgeable, flexible and highly proficient in offering fantastic SEO services. The team provide valuable suggestions and made changes in my website as per the latest trends and provide me out of the box business results. Highly recommended.</p>
              </div>
            </div>
            <!-- <div class="col-xl-4 col-3">
              <div class="testimonial_img">
                <img src="./images/client-1.jpg" alt="">
              </div>
            </div> -->
          </div>
        </div>
        <div class="swiper-slide">
          <div class="row px-4 align-items-center">
            <div class="col-xl-9 mx-auto">
              <div class="testimonial_content">
                <div class="testimonial_name d-flex gap-3">
                  <div><img src="./images/double_quote.svg" alt=""></div>
                  <div>
                    <h5>John Amanda</h5>
                    <p>Manager</p>
                  </div>
                </div>
                <p class="mt-3">I have been in touch with SEO Company in India for 1 year and I am very much convinced with everything. These guys have done for my business digital marketing. Good job team and I will always recommend you.</p>
              </div>
            </div>
            <!-- <div class="col-xl-4 col-3">
              <div class="testimonial_img">
                <img src="./images/client-1.jpg" alt="">
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
    </section>
    <!-- testimonial section end -->

<?php 

if(isset($_POST['submit']))

   {

      $name=addslashes($_POST['name']);
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $subject=$_POST['subject'];
   
        

$cd="Free SEO Consultation Form- Inquiry from Google Ads, <br>Name = ".$name."<br> Email = ".$email." <br> Mobile = ".$phone." <br> Subject = ".$subject;

$to = "acmeinfolabs@gmail.com,info@acmeinfolabs.com";

$subject = "This Lead is from Google | Acmeinfolabs.com/ Landing page";
$txt = $cd;


$headers ="MIME-Version: 1.0";
            $headers='From: info@acmeinfolabs.com' . "\r\n";
            $headers='Reply-To: '.$email."\r\n" .
             $headers.="Content-type: text/html;charset=utf-8";
             $headers.="X-Priority: 3";
            $headers.="X-Mailer: smail-PHP ".phpversion()."";

mail($to,$subject,$txt,$headers);

 $abc=str_replace(" ", "%20", $abc);
//echo "<div style='display:none;'>".send_sms($ab,$txt)."</div>";
 echo "<script> location.href='https://www.acmeinfolabs.com/india/thankyou'; </script>";
// header("Location: thankyou.php"); 
 exit;

}
       
//ends here.. 
?>
    <!-- lets talk form section start -->
    <section class="mt-5" id="contact" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
    <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="main_heading">
              <h3></h3>
            </div>
          </div>
        
            </div>
            <div class="ht-60"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
<h2 class="text-center blue m-20">FIND US ON MAP</h2>
 <div class="ht-60"></div>
<div class="mapouter">
<div class="gmap_canvas"><iframe width="1080" height="450" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7011.883681802287!2d77.37138384006269!3d28.51139748062438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce9d73ae483cb%3A0x3378bd0f34c63837!2sAcme%20Infolabs%20%7C%20SEO%20Agency%20in%20Noida!5e0!3m2!1sen!2sin!4v1680760471670!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
<style>
.ht-60 {
    height: 60px;
}
                            .mapouter {
                                position: relative;
                                text-align: right;
                               
                                max-width: 1080px;
                                width: 100%;
                            }

                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                
                                max-width: 1080px;
                                width: 100%;
                            }
                        </style>
</div>
</div>
          </div>
        </div>
      </div>
    </section>
    <!-- lets talk form section end -->

    <div class="whatshapp_img">
      <a href="https://api.whatsapp.com/send?phone=919560494030&amp;text=I am interested in your SEO Services" class="btn-whatsapp-pulse btn-whatsapp-pulse-border">
        <i class="fab fa-whatsapp"></i>
      </a>
    </div>
    <!-- footer section start -->
    <footer class="mt-5 py-4">
      <div class="container">
        <div class="row">
          <div class="copy_right_text">
            <p class="text-center text-white mb-0">Copyright © 2023 Acme Infolabs Pvt. Ltd. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer section end -->


<script>
  $ = function(id) {
  return document.getElementById(id);
}

var show = function(id) {
   $(id).style.display ='block';
}
var hide = function(id) {
   $(id).style.display ='none';
}
</script>

    <script>
      var swiper = new Swiper(".mySwiper-2", {
        autoplay:true,
        spaceBetween: 80,
      });
    </script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        autoplay:true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          320: {
            slidesPerView: 2,
            spaceBetweenSlides: 0
        },
          425: {
            slidesPerView: 2,
            spaceBetweenSlides: 0
        },
          440: {
            slidesPerView: 2,
            spaceBetweenSlides: 30
        },
          768: {
            slidesPerView: 3,
            spaceBetweenSlides: 30
        },
        992: {
            slidesPerView: 4,
            spaceBetweenSlides: 30
        },
        1200: {
            slidesPerView: 6,
            spaceBetweenSlides: 40
        }
    }
      });
    </script>


<!-- gallery slider -->
<script>
  var swiper = new Swiper(".gallery_slider", {
    slidesPerView: 5,
    spaceBetween: 30,
    autoplay:true,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
          320: {
            slidesPerView: 1,
            spaceBetweenSlides: 0
        },
          425: {
            slidesPerView: 1,
            spaceBetweenSlides: 0
        },
          440: {
            slidesPerView: 1,
            spaceBetweenSlides: 30
        },
          768: {
            slidesPerView: 3,
            spaceBetweenSlides: 30
        },
        992: {
            slidesPerView: 4,
            spaceBetweenSlides: 30
        },
        1200: {
            slidesPerView: 5,
            spaceBetweenSlides: 40
        },
        1600: {
            slidesPerView: 5,
            spaceBetweenSlides: 40
        }
    }
  });
</script>
<script>
  AOS.init();
</script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PW3G7QS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>
</html>