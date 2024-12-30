<?php 

if(isset($_POST['sub']))

   {

      $name=addslashes($_POST['name']);
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $website=$_POST['website'];
      $subject=$_POST['subject'];
   
        

$cd="Free SEO Consultation Form- Inquiry from Google Ads, <br>Name = ".$name."<br> Email = ".$email." <br> Mobile = ".$phone." <br> Website = ".$website." <br> Subject = ".$subject;

$to = "udai@acmeinfolabs.com,acmeinfolabs@gmail.com";

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
header("Location: services-thank-you.php"); exit;

}
       
//ends here.. 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Award Winning & Affordable  SEO Service Agency in India </title>
    <meta name="description" content="We are an award-winning & affordable SEO service agency in India. Our team of SEO experts provide the best costumer service experience to our clients and help them achieve peak rankings on Google."/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px)" href="small-device.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <style>
        /* Custom style */
        .accordion-button::after {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='%23333' xmlns='http://www.w3.org/2000/svg'%3e%3cpath fill-rule='evenodd' d='M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z' clip-rule='evenodd'/%3e%3c/svg%3e");
            transform: scale(.7) !important;
        }

        .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='%23333' xmlns='http://www.w3.org/2000/svg'%3e%3cpath fill-rule='evenodd' d='M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z' clip-rule='evenodd'/%3e%3c/svg%3e");
        }
        
    </style>
    <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "eqf4l1qjr9");
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PW3G7QS');</script>
<!-- End Google Tag Manager -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-870338955');
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-870338955"></script>


</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PW3G7QS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <!--navbar start-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="images/logo.png" style="width: 250px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll ">
            <ul class="navbar-nav ml-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
                <li class="nav-item active">
                    <a class="nav-link" href="#get-your-website">About Us<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#recent-keywords">SEO Results</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#pricing-table" tabindex="-1" aria-disabled="true">Packages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#our_testimonial" tabindex="-1" aria-disabled="true">Testimonials
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#getfree" tabindex="-1" aria-disabled="true"><button> GET YOUR FREE
                            SEO AUDIT</button>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
  
 <div class="sliderimg">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 ">
                        <div class="content-wrap">
                            <h1 class="h1-title">BEST SEO SERVICES IN INDIA</h1>
                            <h3 class="h3-title" id="get-your-website">Get your Website on No. 1 page of Google</h3>
                            <p class="p-para">
                                We are well known for our quality work and Top Ranks. Since last 10 Years we are working
                                with clients across the globe and generating traffic that converts. We will do free
                                audit and consultation for you and help you in ranking your website on Google.It will
                                help in scaling up your business and will generate sales and profits.
                            </p>
                            <!--<a href="#"><button>Contact us</button></a>-->
                            <p class="p-para-p">Connect with us today!</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4" id="freeseoconsultation">
                        <div class="form-wrap">
                            <div class="contact_fr">
                                <h3 style="color:white;font-size: 24px;">Free SEO Consultation</h3>
                                  <form action="" Method = "POST" >
                                    <label for="fname"></label>
                                    <input type="text" id="fname" name="name" placeholder="Name">

                                    <label for="email"></label>
                                    <input type="email" placeholder="Email" name="email" required>

                                    <label for="phone"></label>
                                    <input type="tel" id="phone" name="phone" placeholder="Phone Number"
                                        required><br>

                                    <label for="email"></label>
                                    <input type="url" id="subject" name="website" class="form-control"
                                        placeholder="Website">

                                    <label for="subject"></label>
                                    <textarea id="subject" name="subject" placeholder="Your message..."></textarea>
                                    <input type="submit" value="Submit" name="sub">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--slider image end-->
    <!--contact section start-->
    <section class="ak_contact ft_sec_pd acme-height">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="about_hr">
                        <h2 class="text-center">Trusted by over <span style="font-size: 35px;color: #ab5882;
                            font-weight: 700;">500+ Companies</span> worldwide...next can be you</h2>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-2 mb-3">
                        <div class="companies-logo">
                            <div class="card">
                                <img src="images/logos/ISSC-CANADA-logo.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <div class="companies-logo">
                            <div class="card">
                                <img src="images/logos/kyrgyzguidedtours-logo.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <div class="companies-logo">
                            <div class="card">
                                <img src="images/logos/vgoodco-logo.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <div class="companies-logo">
                            <div class="card">
                                <img src="images/logos/cochiseheart-logo.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <div class="companies-logo">
                            <div class="card">
                                <img src="images/logos/Supreme-Automotive-logo.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <div class="companies-logo">
                            <div class="card">
                                <img src="images/logos/trexperienceperu-logo.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <div class="companies-logo">
                            <div class="card">
                                <img src="images/logos/motherlaps.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <div class="companies-logo">
                            <div class="card">
                                <img src="images/logos/felixhospital.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <div class="companies-logo">
                            <div class="card">
                                <img src="images/logos/Martial Arts.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <div class="companies-logo">
                            <div class="card">
                                <img src="images/logos/Gutaderme.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <div class="companies-logo">
                            <div class="card">
                                <img src="images/logos/rege.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <div class="companies-logo">
                            <div class="card">
                                <img src="images/logos/riyanfood.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <div class="companies-logo">
                            <div class="card">
                                <img src="images/logos/visaplan.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <div class="companies-logo">
                            <div class="card">
                                <img src="images/logos/drRoadworthy-logo.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <div class="companies-logo">
                            <div class="card">
                                <img src="images/logos/Blesket-Canada-logo.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <div class="companies-logo">
                            <div class="card">
                                <img src="images/logos/Sinema-Films-logo.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <div class="companies-logo">
                            <div class="card">
                                <img src="images/logos/jbvoice-logo.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <div class="companies-logo">
                            <div class="card">
                                <img src="images/logos/RomperJill-logo.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact section end-->
    <!--what we offer start-->
    <section class="feature ft_sec_pd acme-height" id="feature">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="para-wrap">
                        <h2 class="text-center">Types of SEO Packages we have:</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card-deck">
                        <div class="card" id="card-border">
                            <img src="https://www.acmeinfolabs.com/assets/media/images/slider/layers/local-seo.webp"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title-1">Local SEO</h5>
                                <!--<p class="card-text-2">We help you succeed online with proven SEO methods.</p>-->
                                <p class="card-text-3"><small class="text-seo">Find Clients in your local area. Suitable
                                        for Small businesses who deliver goods and services nearby. Google Profile SEO
                                        included.</small></p>
                            </div>
                        </div>
                        <div class="card" id="card-border">
                            <img src="https://www.acmeinfolabs.com/assets/media/images/slider/layers/national-seo.webp"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title-1">National SEO</h5>
                                <!--<p class="card-text-2">We help you succeed online with proven SEO methods.</p>-->
                                <p class="card-text-3"><small class="text-seo">Find Customers in whole country. Suitable
                                        for growing businesses who aim to expand and can server a larger
                                        audience.</small></p>
                            </div>
                        </div>
                        <div class="card" id="card-border">
                            <img src="https://www.acmeinfolabs.com/assets/media/images/slider/layers/ecommerce-seo.webp"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title-1">Ecommerce SEO</h5>
                                <!--<p class="card-text-2">We help you succeed online with proven SEO methods.</p>-->
                                <p class="card-text-3"><small class="text-seo">Sell your products/Services through your
                                        E-Commerce store. We promote your products online in such a way that you get new
                                        sales online.</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--what we offer end-->
    <!-- we are best start -->
    <section class="acme-best" style="background-color: #f3f6f9;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="para-wrap">
                        <h1 class="text-center">Why we are best!</h1>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="inr-pg-content acme-height" style="background-color: #f3f6f9;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12" style="border-right: 3px solid #8c8d8c;">
                    <div class="container">
                        <!-- aftab's new row-->
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <span class="ft_icons-seo">
                                    <h5>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-half-full"></span>
                                        &nbsp;4.5 Star Rating on </h5>
                                </span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <span class="targeticons">
                                    <img src="images/target-icons/trustpiolt1.png" loading="lazy"
                                        alt="Acme Infolabs the Top SEO company in India, seo agency in Delhi"
                                        style="width: 80%;margin-top: -10px;margin-left: 20px;">
                                </span>
                            </div>
                        </div>
                        <!-- aftab's new row-->
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <span class="ft_icons-seo">
                                    <h5>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-half-full"></span>
                                        &nbsp;4.8 Star Rating on </h5>
                                </span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <span class="targeticons">
                                    <img src="images/target-icons/facebook1.png" loading="lazy"
                                        alt="Acme Infolabs the Top SEO company in India, seo agency in Delhi"
                                        style="width: 80%;margin-top: -10px;margin-left: 20px;">
                                </span>
                            </div>
                        </div>
                        <!-- aftab's new row-->
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <span class="ft_icons-seo">
                                    <h5>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        &nbsp;5 Star Rating on </h5>
                                </span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <span class="targeticons">
                                    <img src="images/target-icons/glassdoor1.png" loading="lazy"
                                        alt="Acme Infolabs the Top SEO company in India, seo agency in Delhi"
                                    style="width: 80%;margin-top: -10px;margin-left: 20px;">
                                </span>
                            </div>
                        </div>
                        <!-- aftab's new row-->
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <span class="ft_icons-seo">
                                    <h5>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-half-full"></span>
                                        &nbsp;4.7 Star Rating on </h5>
                                </span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <span class="targeticons">
                                    <img src="images/target-icons/gmb1.png" loading="lazy"
                                        alt="Acme Infolabs the Top SEO company in India, seo agency in Delhi"
                                     style="width: 80%;margin-top: -10px;margin-left: 20px;">
                                </span>
                            </div>
                        </div>
                        <!-- aftab's new row-->
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <span class="ft_icons-seo">
                                    <h5>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-half-full"></span>
                                        &nbsp;4.5 Star Rating on </h5>
                                </span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <span class="targeticons">
                                    <img src="images/target-icons/10seocom.png" loading="lazy"
                                        alt="Acme Infolabs the Top SEO company in India, seo agency in Delhi"
                                        style="width: 80%;margin-top: -10px;margin-left: 20px;">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="ft_icons-seo">
                        <ul>
                            <li><span class="ft_inline">
                                    <p><i class="fa fa-check" aria-hidden="true">&nbsp;</i>10 Years Experience in
                                        Digital marketing</p>
                                </span>
                            </li>
                            <li><span class="ft_inline">
                                    <p><i class="fa fa-check" aria-hidden="true">&nbsp;</i>Expert team of SEO
                                        enthusiasts</p>
                                </span>
                            </li>
                            <li><span class="ft_inline">
                                    <p><i class="fa fa-check" aria-hidden="true">&nbsp;</i>Top 10 Rank Assured</p>
                                </span>
                            </li>
                            <li><span class="ft_inline">
                                    <p><i class="fa fa-check" aria-hidden="true">&nbsp;</i>Have clients in more than
                                        20 countries</p>
                                </span>
                            </li>
                            <li><span class="ft_inline">
                                    <p><i class="fa fa-check" aria-hidden="true">&nbsp;</i>Customised Strategies for
                                        Each client</p>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="half-half-image-text">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="content">
                            <h1 class="Featured">Featured as <span
                                    style="font-size: 25px;color: orange; font-weight: 600;">"Agency of the Year"</span>
                                in </h1>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="img">
                            <img src="images/target-icons/Business-Connect1.png" loading="lazy"
                                alt="Acme Infolabs the Top SEO company in India, seo agency in Delhi"
                                style="width: 300px;margin-top: -39px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- we are best end -->

    <!--our offer-->
    <section class="best-services ft_sec_pd acme-height">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="jumbotron">
                        <!-- ` -->
                        <p class="best-para">We help your business to maximize its online exposure with our
                            comprehensive market research and SEO strategy. Book a Free 1-1 consultation with our top
                            SEO experts</p>
                        <a href="#freeseoconsultation" title="Acmeinfolabs"><button class="btn" style="padding: 14px 40px;font-weight: 600;">GET FREE SEO CONSULTATION</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our offer-->
    <!--our recent project-->
    <section class="acme-best" style="background-color: #f3f6f9;" id="recent-keywords">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="para-wrap">
                        <h1 class="text-center">Recent Keywords on First Page</h1>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="inr-pg-content acme-height" style="background-color: #f3f6f9;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slider-wrap">
                        <div class="slider">
                            <ul class="lb-album">
                                <li><a href="#image-1"> <img src="images/Bongo in Adelaide-recent-keyword.jpg"
                                            alt="image01"> <span>Keywords</span> </a>
                                    <div class="lb-overlay" id="image-1"> <a href="#page" class="lb-close">x </a> <img
                                            src="images/Bongo in Adelaide-recent-keyword.jpg" alt="image01" />
                                        <!-- <div>
                              <h3>pointe <span>/point/</span></h3>
                              <p>Dance performed on the tips of the toes</p>
                            </div> -->
                                    </div>
                                </li>
                                <li><a href="#image-2"> <img src="images/Car-suspension-Services-West-End.jpg"
                                            alt="image02"> <span>Keywords</span> </a>
                                    <div class="lb-overlay" id="image-2"> <a href="#page" class="lb-close">x </a> <img
                                            src="images/Car-suspension-Services-West-End.jpg" alt="image01" />
                                        <!-- <div>
                              <h3>pointe <span>/point/</span></h3>
                              <p>Dance performed on the tips of the toes</p>
                            </div> -->
                                    </div>
                                </li>
                                <li><a href="#image-3"> <img src="images/everafterentairntment.jpg" alt="image01">
                                        <span>Keywords</span> </a>
                                    <div class="lb-overlay" id="image-3"> <a href="#page" class="lb-close">x </a> <img
                                            src="images/everafterentairntment.jpg" alt="image03" />
                                        <!-- <div>
                              <h3>Megan <span>Fox</span></h3>
                              <p>Dance performed on the tips of the toes</p>
                            </div> -->
                                    </div>
                                </li>
                                <li><a href="#image-4"> <img src="images/Pest-control-Adelaide.jpg" alt="image04">
                                        <span>Keywords</span> </a>
                                    <div class="lb-overlay" id="image-4"> <a href="#page" class="lb-close">x </a> <img
                                            src="images/Pest-control-Adelaide.jpg" alt="image04" />
                                        <!-- <div>
                              <h3>Parineeti <span>Chopra</span></h3>
                              <p>Dance performed on the tips of the toes</p>
                            </div> -->
                                    </div>
                                </li>
                                <li><a href="#image-5"> <img src="images/rafting- in-Kyrgyzstan.jpg" alt="image05">
                                        <span>Keywords</span> </a>
                                    <div class="lb-overlay" id="image-5"> <a href="#page" class="lb-close">x </a> <img
                                            src="images/rafting- in-Kyrgyzstan.jpg" alt="image01" />
                                        <!-- <div>
                              <h3>Deepika <span>Padukone</span></h3>
                              <p>Dance performed on the tips of the toes</p>
                            </div> -->
                                    </div>
                                </li>

                                <li><a href="#image-6"> <img src="images/recent-img-shaynestree.jpg" alt="image01">
                                        <span>Keywords</span> </a>
                                    <div class="lb-overlay" id="image-6"> <a href="#page" class="lb-close">x </a> <img
                                            src="images/recent-img-shaynestree.jpg" alt="image06" />
                                        <!-- <div>
                              <h3>pointe <span>/point/</span></h3>
                              <p>Dance performed on the tips of the toes</p>
                            </div> -->
                                    </div>
                                </li>
                                <li><a href="#image-7"> <img src="images/safety-certificates-in-south-bank-keyword.jpg"
                                            alt="image07"> <span>Keywords</span> </a>
                                    <div class="lb-overlay" id="image-7"> <a href="#page" class="lb-close">x </a> <img
                                            src="images/safety-certificates-in-south-bank-keyword.jpg" alt="image07" />
                                        <!-- <div>
                              <h3>pointe <span>/point/</span></h3>
                              <p>Dance performed on the tips of the toes</p>
                            </div> -->
                                    </div>
                                </li>
                                <li><a href="#image-8"> <img src="images/Supreme Automotive.jpg" alt="image01">
                                        <span>Keywords</span> </a>
                                    <div class="lb-overlay" id="image-8"> <a href="#page" class="lb-close">x </a> <img
                                            src="images/Supreme Automotive.jpg" alt="image03" />
                                        <!--<div>-->
                                        <!--    <h3>Megan <span>Fox</span></h3>-->
                                        <!--    <p>Dance performed on the tips of the toes</p>-->
                                        <!--</div>-->
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="slider-arrow sa-left">&lt;</a> <a href="#"
                            class="slider-arrow sa-right">&gt;</a>
                    </div>
                    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
                    <script src="js/jquery.lbslider.js"></script>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!--our recent project end-->

    <!--our price-->
    <!--our price-->
    <section class="our-price ft_sec_pd" id="pricing-table">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="para-wrap">
                        <h1 class="text-price">Our SEO Packages</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="pricing-table">
                    <div class="ptable-item">
                        <div class="ptable-single">
                            <div class="ptable-header">
                                <div class="ptable-title">
                                    <h2>Silver</h2>
                                </div>
                                <div class="ptable-price">
                                    <h2><small>INR </small> 15,999<span style="font-size:20px;">/Monthly</span></h2>
                                </div>
                            </div>
                            <div class="ptable-body">
                                <div class="ptable-description">
                                    <ul>
                                        <h4>Number of Keywords 20</h4>
                                        <li>Web Analysis</li>
                                        <li>Competition Analysis</li>
                                        <li>Well-commented Code</li>
                                        <li>Content Duplicity Check</li>
                                        <li>Search Engine Optimization Strategy</li>
                                        <li>Initial Ranking report</li>

                                        <div class="accordion" id="myAccordion">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button type="button" class="accordion-button collapsed"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne">On Page
                                                        Optimization</button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse"
                                                    data-bs-parent="#myAccordion">
                                                    <div class="card-body">
                                                        <li>Website Structure Optimization</li>
                                                        <li>Canonicalization</li>
                                                        <li>Content Optimization</li>
                                                        <li>Image Optimization</li>
                                                        <li>HTML Code Optimization</li>
                                                        <li>HTML Site Map Creation</li>
                                                        <li>Google XML Site Map Creation & Regular Updation</li>
                                                        <li>Google Analytics Set up</li>
                                                        <li>Robots .txt optimization</li>
                                                        <li>RSS Feed generation</li>
                                                        <li>Page speed Optimization</li>
                                                        <li>Google Mobile Optimization</li>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button type="button" class="accordion-button collapsed"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree">Off
                                                        Page Optimization</button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    data-bs-parent="#myAccordion">
                                                    <div class="card-body">
                                                        <li>Social Bookmarking and Community Advertising (40)</li>
                                                        <li>Social Networking Profile (5)</li>
                                                        <li>PDF Content Creation (2)</li>
                                                        <li>PDF Submission (2)</li>
                                                        <li>PDF Live URL Bookmarking (20)</li>
                                                        <li>Article Content Creation (2)</li>
                                                        <li>Article Submission (2)</li>
                                                        <li>Article Live URL Bookmarking (10)</li>
                                                        <li>Blog Content Creation (5)</li>
                                                        <li>Blog Submission (5)</li>
                                                        <li>Blog Live URL Bookmarking (25)</li>
                                                        <li>Press Release Creation (1) </li>
                                                        <li>Press Release Submission (1)</li>
                                                        <li>Press Release Live URL Bookmarking (10)</li>
                                                        <li>Forum Posting (5)</li>
                                                        <li>Classified ad Creation & Posting (5)</li>
                                                        <li>RSS Feeds Submission</li>
                                                        <li>Web 2.0</li>
                                                        <li>Video Promotion (Video Provided by Client)</li>
                                                        <li>Manual Search Engine Submission</li>
                                                        <li>Manual Relevant directory Submission (15)</li>
                                                        <li>Local/ Niche Directory submission (10)</li>
                                                        <li>Link Exchange (7)</li>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingfour">
                                                    <button type="button" class="accordion-button collapsed"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsefour">Report
                                                        Status</button>
                                                </h2>
                                                <div id="collapsefour" class="accordion-collapse collapse"
                                                    data-bs-parent="#myAccordion">
                                                    <div class="card-body">
                                                        <li>Search Engine Ranking Reports</li>
                                                        <li>Monthly Work Status report (Detailed)</li>
                                                        <li>Client Support</li>
                                                        <li>Traffic Status report</li>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="ptable-footer">
                                <div class="ptable-action-one">
                                    <a href="https://checkout.stripe.com/c/pay/cs_live_a15pCzNHMkearW6R0ehepUqhc04tfTn9Jpiu3hzCeKDp5nSSbmsK5PI0F5#fidkdWxOYHwnPyd1blppbHNgWjA0TFVrXGZCVzFIXGx3cDxjfW5fT2RLM2xwb1BOd11OU3RRNEtwTmo1cGBTdGhdb393M18yNWl1ME9AM1R3MlNIbW9pYXd0X2lvdDw9aEtDVTJpVn9kZFRqNTV8SXBXbnNtYycpJ3VpbGtuQH11anZgYUxhJz8nNTViYjdNYG41YFxENDAzNDFBJyknd2BjYHd3YHdKd2xibGsnPydtcXF1dj8qKmZtYGZuanBxK3Zxd2x1YCtmamgqJ3gl"
                                        target="_blank">Buy Online</a>
                                </div>
                            </div>
                            <div class="ptable-footer">
                                <div class="ptable-action-one">
                                    <a href="#getfreeseoaudit">Talk to a Consultant</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ptable-item featured-item">
                        <div class="ptable-single">
                            <div class="ptable-header">
                                <!-- <div class="ptable-status">
                            <span>Hot</span>
                          </div> -->
                                <div class="ptable-title">
                                    <h2 style="color: #2a293e;">Gold</h2>
                                </div>
                                <div class="ptable-price">
                                    <h2><small style="color: #2a293e;">INR</small>
                                            <span style="color: #2a293e;font-weight:500;">19,999</span><span style="font-size:20px;color: #2a293e;">/Monthly</span></h2>
                                </div>
                            </div>
                            <div class="ptable-body">
                                <div class="ptable-description">
                                    <ul>
                                        <h4>Number of Keywords 30</h4>
                                        <li>Web Analysis</li>
                                        <li>Competition Analysis</li>
                                        <li>Well-commented Code</li>
                                        <li>Content Duplicity Check</li>
                                        <li>Search Engine Optimization Strategy</li>
                                        <li>Initial Ranking report</li>
                                        <div class="accordion" id="myAccordion">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingsix">
                                                    <button type="button" class="accordion-button collapsed"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsesix">On Page
                                                        Optimization</button>
                                                </h2>
                                                <div id="collapsesix" class="accordion-collapse collapse"
                                                    data-bs-parent="#myAccordion">
                                                    <div class="card-body">
                                                        <li>Website Structure Optimization</li>
                                                        <li>Canonicalization</li>
                                                        <li>Content Optimization</li>
                                                        <li>Image Optimization</li>
                                                        <li>HTML Code Optimization</li>
                                                        <li>HTML Site Map Creation</li>
                                                        <li>Google XML Site Map Creation & Regular Updation</li>
                                                        <li>Google Analytics Set up</li>
                                                        <li>Robots .txt optimization</li>
                                                        <li>RSS Feed generation</li>
                                                        <li>Page speed Optimization</li>
                                                        <li>Google Mobile Optimization</li>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingeight">
                                                    <button type="button" class="accordion-button collapsed"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseeight">Off
                                                        Page Optimization</button>
                                                </h2>
                                                <div id="collapseeight" class="accordion-collapse collapse"
                                                    data-bs-parent="#myAccordion">
                                                    <div class="card-body">
                                                        <li>Social Bookmarking and Community Advertising (50)</li>
                                                        <li>Social Networking Profile (10)</li>
                                                        <li>PDF Content Creation (3)</li>
                                                        <li>PDF Submission (3)</li>
                                                        <li>PDF Live URL Bookmarking (30)</li>
                                                        <li>Article Content Creation (4)</li>
                                                        <li>Article Submission (4)</li>
                                                        <li>Article Live URL Bookmarking (20)</li>
                                                        <li>Blog Content Creation (7)</li>
                                                        <li>Blog Submission (7)</li>
                                                        <li>Blog Live URL Bookmarking (40)</li>
                                                        <li>Press Release Creation (3) </li>
                                                        <li>Press Release Submission (3)</li>
                                                        <li>Press Release Live URL Bookmarking (30)</li>
                                                        <li>Forum Posting (10)</li>
                                                        <li>Classified ad Creation & Posting (10)</li>
                                                        <li>RSS Feeds Submission</li>
                                                        <li>Web 2.0</li>
                                                        <li>Video Promotion (Video Provided by Client)</li>
                                                        <li>Manual Search Engine Submission</li>
                                                        <li>Manual Relevant directory Submission (20)</li>
                                                        <li>Local/ Niche Directory submission (15)</li>
                                                        <li>Link Exchange (10)</li>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingnine">
                                                    <button type="button" class="accordion-button collapsed"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsenine">Report
                                                        Status</button>
                                                </h2>
                                                <div id="collapsenine" class="accordion-collapse collapse"
                                                    data-bs-parent="#myAccordion">
                                                    <div class="card-body">
                                                        <li>Search Engine Ranking Reports</li>
                                                        <li>Monthly Work Status report (Detailed)</li>
                                                        <li>Client Support</li>
                                                        <li>Traffic Status report</li>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="ptable-footer">
                                <div class="ptable-action-one-two">
                                    <a href="https://checkout.stripe.com/c/pay/cs_live_a1BnlNwKilfyY99rVqXEDbtW9cLTjRI7NLZfAFgY2OaF5UVobpTdwosVem#fidkdWxOYHwnPyd1blppbHNgWjA0TFVrXGZCVzFIXGx3cDxjfW5fT2RLM2xwb1BOd11OU3RRNEtwTmo1cGBTdGhdb393M18yNWl1ME9AM1R3MlNIbW9pYXd0X2lvdDw9aEtDVTJpVn9kZFRqNTV8SXBXbnNtYycpJ3VpbGtuQH11anZgYUxhJz8nNTViMnJnZDZOPURmYjU1Y198Jyknd2BjYHd3YHdKd2xibGsnPydtcXF1dj8qKmZtYGZuanBxK3Zxd2x1YCtmamgqJ3gl"
                                        target="_blank">Buy Online</a>
                                </div>
                            </div>
                            <div class="ptable-footer">
                                <div class="ptable-action-one-two">
                                    <a href="#getfreeseoaudit">Talk to a Consultant</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ptable-item">
                        <div class="ptable-single">
                            <div class="ptable-header">
                                <div class="ptable-title">
                                    <h2>Platinum</h2>
                                </div>
                                <div class="ptable-price">
                                    <h2><small>USD </small>24,999<span style="font-size:20px;">/Monthly</span></h2>
                                </div>
                            </div>
                            <div class="ptable-body">
                                <div class="ptable-description">
                                    <ul>
                                        <h4>Number of Keywords 50</h4>
                                        <li>Web Analysis</li>
                                        <li>Competition Analysis</li>
                                        <li>Well-commented Code</li>
                                        <li>Content Duplicity Check</li>
                                        <li>Search Engine Optimization Strategy</li>
                                        <li>Initial Ranking report</li>
                                        <div class="accordion" id="myAccordion">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingeleven">
                                                    <button type="button" class="accordion-button collapsed"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseeleven">On
                                                        Page Optimization</button>
                                                </h2>
                                                <div id="collapseeleven" class="accordion-collapse collapse"
                                                    data-bs-parent="#myAccordion">
                                                    <div class="card-body">
                                                        <li>Website Structure Optimization</li>
                                                        <li>Canonicalization</li>
                                                        <li>Content Optimization</li>
                                                        <li>Image Optimization</li>
                                                        <li>HTML Code Optimization</li>
                                                        <li>HTML Site Map Creation</li>
                                                        <li>Google XML Site Map Creation & Regular Updation</li>
                                                        <li>Google Analytics Set up</li>
                                                        <li>Robots .txt optimization</li>
                                                        <li>RSS Feed generation</li>
                                                        <li>Page speed Optimization</li>
                                                        <li>Google Mobile Optimization</li>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingfourteen">
                                                    <button type="button" class="accordion-button collapsed"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsefourteen">Off
                                                        Page Optimization</button>
                                                </h2>
                                                <div id="collapsefourteen" class="accordion-collapse collapse"
                                                    data-bs-parent="#myAccordion">
                                                    <div class="card-body">
                                                        <li>Social Bookmarking and Community Advertising (70)</li>
                                                        <li>Social Networking Profile (15)</li>
                                                        <li>PDF Content Creation (4)</li>
                                                        <li>PDF Submission (4)</li>
                                                        <li>PDF Live URL Bookmarking (40)</li>
                                                        <li>Article Content Creation (5)</li>
                                                        <li>Article Submission (5)</li>
                                                        <li>Article Live URL Bookmarking (50)</li>
                                                        <li>Blog Content Creation (10)</li>
                                                        <li>Blog Submission (10)</li>
                                                        <li>Blog Live URL Bookmarking (50)</li>
                                                        <li>Press Release Creation (5) </li>
                                                        <li>Press Release Submission (5)</li>
                                                        <li>Press Release Live URL Bookmarking (50)</li>
                                                        <li>Forum Posting (15)</li>
                                                        <li>Classified ad Creation & Posting (20)</li>
                                                        <li>RSS Feeds Submission</li>
                                                        <li>Web 2.0</li>
                                                        <li>Video Promotion (Video Provided by Client)</li>
                                                        <li>Manual Search Engine Submission</li>
                                                        <li>Manual Relevant directory Submission (25)</li>
                                                        <li>Local/ Niche Directory submission (20)</li>
                                                        <li>Link Exchange (15)</li>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingfifteen">
                                                    <button type="button" class="accordion-button collapsed"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapsefifteen">Report Status</button>
                                                </h2>
                                                <div id="collapsefifteen" class="accordion-collapse collapse"
                                                    data-bs-parent="#myAccordion">
                                                    <div class="card-body">
                                                        <li>Search Engine Ranking Reports</li>
                                                        <li>Monthly Work Status report (Detailed)</li>
                                                        <li>Client Support</li>
                                                        <li>Traffic Status report</li>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="ptable-footer">
                                <div class="ptable-action-one">
                                    <a href="https://checkout.stripe.com/c/pay/cs_live_a1GX5LGeeNEqOkJ1L5V8I7RqurtG0rZiA783wqAJzcTToSCXj3SrnHlg3N#fidkdWxOYHwnPyd1blppbHNgWjA0TFVrXGZCVzFIXGx3cDxjfW5fT2RLM2xwb1BOd11OU3RRNEtwTmo1cGBTdGhdb393M18yNWl1ME9AM1R3MlNIbW9pYXd0X2lvdDw9aEtDVTJpVn9kZFRqNTV8SXBXbnNtYycpJ3VpbGtuQH11anZgYUxhJz8nZks3ZExrMlNGZExuNmFgPX0yJyknd2BjYHd3YHdKd2xibGsnPydtcXF1dj8qKmZtYGZuanBxK3Zxd2x1YCtmamgqJ3gl"
                                        target="_blank">Buy Online</a>
                                </div>
                            </div>
                            <div class="ptable-footer">
                                <div class="ptable-action-one">
                                    <a href="#getfreeseoaudit">Talk to a Consultant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--our testimonial start-->
    <section class="our_testimonial ft_sec_pd acme-height" id="our_testimonial">
        <div class="container ak-testimonial">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="client-text">
                        <div class="para-wrap">
                            <h1 class="tt-text">Meet our happy clients and find out why our Agency is your first
                                preferred choice…</h1>
                        </div>
                        <p class="tt-para"></p>
                    </div>
                </div>
            </div>
    </section>
    <section>
        <div class="container ak-testimonial">
            <div class="row">
                <div class="col-lg-3 mb-5">
                    <div class="card ak-card">
                        <!--<div class="card-body">Basic card</div>-->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/_vryQORFbWE"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe> allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card ak-card">
                        <!--<div class="card-body">Basic card</div>-->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/-QcToUwubVA"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe> allowfullscreen></iframe>
                        </div>
                    </div>
                    </div>
                  
                <div class="col-lg-3 mb-5">
                    <div class="card ak-card">
                        <!--<div class="card-body">Basic card</div>-->
                        <div class="embed-responsive embed-responsive-16by9">
                           <iframe width="560" height="315" src="https://www.youtube.com/embed/3sduAnfFpPo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card ak-card">
                        <!--<div class="card-body">Basic card</div>-->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/H1MM2LjFCGk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> allowfullscreen></iframe>
                        </div>
                    </div>
                    


                </div>
                            
            </div>
        </div>
        </div>
    </section>
    <!--our testimonial end-->

    <!--free section end-->
    <div class="section-getfree acme-height" id="getfreeseoaudit" style="padding-bottom: 50px!important;">
 <div class="col-lg-4 col-md-4" id="" style="margin: 0 auto;
">
<div class="container">
<div class="row text-center">
<div class="col-lg-12">
<div class="para-wrap">
<h1 class="text-price" style="color: #fff!important;font-size: 35px!important;">Talk to Consultant</h1>
</div>
</div>
</div>
</div>
<div class="form-wrap">
<div class="contact_fr">
<h3 style="color:white;font-size: 24px;"></h3>
<form action="" method="POST">
<label for="fname"></label>
<input type="text" id="fname" name="name" placeholder="Name">
<label for="email"></label>
<input type="email" placeholder="Email" name="email" required="">
<label for="phone"></label>
<input type="tel" id="phone" name="phone" placeholder="Phone Number" required=""><br>
<label for="email"></label>
<input type="url" id="subject" name="website" class="form-control" placeholder="Website">
<label for="subject"></label>
<textarea id="subject" name="subject" placeholder="Your message..."></textarea>
<input type="submit" value="Submit" name="sub">
</form>
</div>
</div>
</div>
</div>
                                    </div>
                                    
                                    
                                    <!--Grid column-->
                                </div>
                              <!--Grid column-->
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--our offer-->
    <section class="best-services ft_sec_pd acme-height">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="jumbotron">
                        <!-- ` -->
                        <p class="best-para">We help your business to maximize its online exposure with our
                            comprehensive market research and SEO strategy. Book a Free 1-1 consultation with our top
                            SEO experts</p>
                            <a href="#freeseoconsultation" title="Acmeinfolabs"><button class="btn" style="padding: 14px 40px;font-weight: 600;">GET FREE SEO CONSULTATION</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our offer-->
    <!--footer start-->
    <section class="ak_footer ft_sec_pd">
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="footer_text">
                            <p class="text-center" style="padding-top: 12px;">Copyright © 2023 Acme Infolabs Pvt.
                                Ltd. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
            <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        </footer>
    </section>
    <!--footer end-->
    <div class="WhatsAppBlock" style="height:50px;position: fixed;bottom: 4%;right: 2%;z-index: 4;">
        <a href="https://api.whatsapp.com/send?phone=919560494030&amp;text=Tell Me About  More Services"
            class="whatsapp-icon" title="Acme Infolabs" target="_blank">
            <img src="https://img.icons8.com/color/48/000000/whatsapp--v6.png" style="width:67px;margin-top:-150px"
                class="whatsap">
        </a>
    </div>

    <!--<div class="icon-bar">
        <a href="tel:9999761122" class="phone" target="_blank"><i class="fa fa-phone"></i></a>
    </div>-->
    <!--what we offer end-->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script>
        //Top button javascript start

        //Get the button:
        mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }

        //Top button javascript end

        // start lbslider here//
        (function ($) {
            $.fn.lbSlider = function (options) {
                var options = $.extend({
                    leftBtn: '.leftBtn',
                    rightBtn: '.rightBtn',
                    visible: 4,
                    autoPlay: true, // true or false
                    autoPlayDelay: 2, // delay in seconds
                    autoPlayDirection: 'right-to-left' //autoplay direction
                }, options);
                var make = function () {
                    $(this).css('overflow', 'hidden');

                    var thisWidth = $(this).width();
                    var mod = thisWidth % options.visible;
                    if (mod) {
                        $(this).width(thisWidth -
                            mod); // to prevent bugs while scrolling to the end of slider
                    }

                    var el = $(this).children('ul');
                    el.css({
                        position: 'relative',
                        left: '0'
                    });
                    var leftBtn = $(options.leftBtn),
                        rightBtn = $(options.rightBtn);

                    var sliderFirst = el.children('li').slice(0, options.visible);
                    var tmp = '';
                    sliderFirst.each(function () {
                        tmp = tmp + '<li>' + $(this).html() + '</li>';
                    });
                    sliderFirst = tmp;
                    var sliderLast = el.children('li').slice(-options.visible);
                    tmp = '';
                    sliderLast.each(function () {
                        tmp = tmp + '<li>' + $(this).html() + '</li>';
                    });
                    sliderLast = tmp;

                    var elRealQuant = el.children('li').length;
                    el.append(sliderFirst);
                    el.prepend(sliderLast);
                    var elWidth = el.width() / options.visible;
                    el.children('li').css({
                        float: 'left',
                        width: elWidth
                    });
                    var elQuant = el.children('li').length;
                    el.width(elWidth * elQuant);
                    el.css('left', '-' + elWidth * options.visible + 'px');

                    function disableButtons() {
                        leftBtn.addClass('inactive');
                        rightBtn.addClass('inactive');
                    }

                    function enableButtons() {
                        leftBtn.removeClass('inactive');
                        rightBtn.removeClass('inactive');
                    }

                    leftBtn.click(function (event) {
                        event.preventDefault();
                        if (!$(this).hasClass('inactive')) {
                            disableButtons();
                            el.animate({
                                    left: '+=' + elWidth + 'px'
                                }, 300,
                                function () {
                                    if ($(this).css('left') == '0px') {
                                        $(this).css('left', '-' + elWidth * elRealQuant + 'px');
                                    }
                                    enableButtons();
                                }
                            );
                        }
                        return false;
                    });

                    rightBtn.click(function (event) {
                        event.preventDefault();
                        if (!$(this).hasClass('inactive')) {
                            disableButtons();
                            el.animate({
                                    left: '-=' + elWidth + 'px'
                                }, 1000,
                                function () {
                                    if ($(this).css('left') == '-' + (elWidth * (options
                                            .visible + elRealQuant)) + 'px') {
                                        $(this).css('left', '-' + elWidth * options.visible +
                                            'px');
                                    }
                                    enableButtons();
                                }
                            );
                        }
                        return false;
                    });

                    if (options.autoPlay) {
                        function aPlay() {
                            var direction = (options.autoPlayDirection);
                            if (direction === 'left-to-right')
                                leftBtn.click();
                            else if (direction === 'right-to-left')
                                rightBtn.click();
                            else
                                leftBtn.click();
                            delId = setTimeout(aPlay, options.autoPlayDelay * 1000);
                        }
                        var delId = setTimeout(aPlay, options.autoPlayDelay * 1000);
                        el.hover(
                            function () {
                                clearTimeout(delId);
                            },
                            function () {
                                delId = setTimeout(aPlay, options.autoPlayDelay * 1000);
                            }
                        );
                    }
                };
                return this.each(make);
            };
        })(jQuery);

        // add this in body bottom part //

        jQuery('.slider').lbSlider({
            leftBtn: '.sa-left',
            rightBtn: '.sa-right',
            visible: 4,
            autoPlay: true,
            autoPlayDelay: 2,
            autoMode: 'loop',
            startOnLoad: true,
        });
    </script>
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTVDTJN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

</html>