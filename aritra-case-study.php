<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aritra Case Study</title>

    <!-- boostrap css links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- bootstrap javascript links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- css links -->
    <link rel="stylesheet" href="case-study.css">

    <!-- swipper slider cdn links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- font awesome cdn links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- favicon icon -->
    <link rel="icon" href="./cast-study-img/favicon.ico" sizes="32x32">

    <!--Aos animation cdn links -->
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->

    <!-- goggle font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;0,900;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">


    <style>
     ul{
        padding-left:0! important;
    }
.case_study_section {
    background: url(./cast-study-img/banner-web-seo.webp);
    width: 100%;
    background-size: cover;
    padding: 30px 0px;
}

.case-banner img {
    max-width: 350px;
}

.case_study_content h1{
    color: #3a3a3a;
    font-weight: 700;
    font-size: 37px;
    text-align: left;
    margin: 0 0 10px 0;
}

p {
    font-weight: 400;
    font-size: 1.1em;
    line-height: 1.7;
    text-rendering: optimizeLegibility;
    color: #212121;
    font-family: 'Source Sans Pro',sans-serif;
    text-align: justify;
}

.case_study_content button{
    text-transform: uppercase;
    position: relative;
    font-weight: 700;
    font-size: 15px;
    overflow: hidden;
    position: relative;
    border-radius: 4px;
    padding: 17px 55px;
    background-color: #067cb8;
}

.case_study_content button:after {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    height: 300px;
    width: 300px;
    transition: all .5s ease-in-out;
    transform: translateX(-25px) translateY(-20%) scale(.1);
    border-radius: 50%;
    z-index: 1!important;
    background: rgb(255 255 255 / 15%);
}

.case_study_content button:hover::after{
    transform: translateX(-7%) translateY(-35%) rotate(45deg);
    transition: all .5s ease-in-out;
}

.project_overview_content h2{
    font-size: 35px;
    border-bottom: 2px solid #000;
    padding-bottom: 8px;
    width: fit-content;
    color: #233f4f;
    font-weight: 700;
}

.project_overview_img img {
    height: 260px;
    object-fit: cover;
    object-position: top;
    border: 1px dashed #8080804d;
    padding: 15px;
    border-radius: 30px 5px 10px 5px;
}

.project_table table tr, .project_table table tr td {
    color: #212121;
    border: 1px solid #0003;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: 600;
}

.project_table h3{
    background:#067cb8;
    color: #fff;
    text-align: center;
    border-radius: 10px 10px 0px 0px;
    font-size: 23px;
    padding: 10px 0px;
    margin-bottom: 0;
    font-weight: 600;
}

.trusted_container {
    background: #ededed;
    border-radius: 0px 20px;
    padding: 30px 30px;
    border: 1px dashed #80808059;
}
    </style>
</head>
<body>
     <style>
.container1 {
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
}

.team-banner {
    position: relative;
    width: 100%;
    height: 300px;
    overflow: hidden;
}

.team-banner-wrapper {
    width: 100%;
    background-image: url("/assets/media/images/new/aritra-bg.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.banner-background {
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(
        to right,
        rgba(0, 0, 0, 0.1),
        rgba(0, 0, 0, 0.3)
    );
}

.network-overlay {
    position: absolute;
    right: 0;
    top: 0;
    width: 40%;
    height: 100%;
    background: url('path-to-network-dots.png');
    background-size: cover;
    opacity: 0.8;
}

.banner-content {
    position: relative;
    margin-top: 35px;
    z-index: 1;
    padding: 60px 0;
    color: white;
    max-width: 600px;
}

.banner-title {
    font-size: 48px;
    text-align: left! important;
    font-weight: bold;
    margin-bottom: 7px! important;
    color: white;
}

.banner-subtitle {
    font-size: 18px;
    line-height: 1.6;
    color: white;
}

/* Responsive design */
@media (max-width: 1200px) {
    .container {
        padding: 0 20px;
    }
}

@media (max-width: 768px) {
    .banner-title {
        font-size: 36px;
    }

    .banner-subtitle {
        font-size: 16px;
    }
}
</style>

<div class="team-banner-wrapper">
    <div class="container1">
        <div class="team-banner">

            <!-- Network graphic overlay -->
            <div class="network-overlay"></div>

            <!-- Content -->
            <div class="banner-content">
                <h1 class="banner-title">Aritra Case Study</h1>
                <p class="banner-subtitle">We help you succeed online with proven SEO methods.</p>
            </div>
        </div>
    </div>
</div>

   <!---------------------------------------------------> 

    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="project_overview_content">
                        <h2>Project Overview</h2>
                        <p class="mt-4">Before contacting Acme Infolabs Pvt Ltd, they were striving to expand their business all across the ---- but couldn’t get success. This is where they need an SEO marketing firm to promote their business and increase the online presence in Asia marketing  </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="project_overview_img">
                        <img src="./cast-study-img/project-overview-img.png" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-11 col-md-12 mx-auto">
                    <div class="project_table">
                        <h3>Our Recent result</h3>
                        <table class="w-100">
                          <tr>
                            <td>IVF and Hypnosis center in Delhi</td>
                            <td>1</td>
                          </tr>
                          <tr>
                            <td>IVF and Hypnosis in Delhi</td>
                            <td>1</td>
                          </tr>
                          <tr>
                            <td>Assured Asthma Treatment in Hypnosis</td>
                            <td>1</td>
                          </tr>
                          <tr>
                            <td>Assured Thyroid Treatment in Hypnosis</td>
                            <td>1</td>
                          </tr>
                          <tr>
                            <td>past life regression Delhi</td>
                            <td>3</td>
                          </tr>
                          <tr>
                            <td>Past life regression therapy in Delhi</td>
                            <td>3</td>
                          </tr>
                          <tr>
                            <td>Inner Skills For Work And Life</td>
                            <td>2</td>
                          </tr>
                          <tr>
                            <td>inner skills for work and life training</td>
                            <td>1</td>
                          </tr>
                        </table>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="project_overview_content">
                        <h2>Organic Presence</h2>
                        <p class="mt-4">The biggest problem was competing with organic positioning on highly competitive keywords and most of the keywords were not on page 1 of google.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="project_overview_img">
                        <img src="./cast-study-img/organic-presence-img.png" alt="" class="w-100 h-100">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <div class="row align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6">
                    <div class="project_overview_img">
                        <img src="./cast-study-img/quality-traffic-img.png" alt="" class="w-100 h-100">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="project_overview_content">
                        <h2>Quality Traffic</h2>
                        <p class="mt-4">Traffic & in-fact quality traffic was the 2nd major problem when we took over the work. Bounce rates, page speed, Avg. session duration are the other associated areas where they want to improve the website. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 project_overview_content">
                    <h2 class="text-center mx-auto">SEO - Friendly Website </h2>
                    <p class="text-center">They were not SEO – Friendly, so we needed to start work on the website from scratch. Also, there was no content on the website.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5 mb-5">
        <div class="container trusted_container">
            <div class="row">
                <div class="col-12 project_overview_content">
                    <h2 class="text-center mx-auto border-0 ">Trusted by Companies</h2>
                    <p class="text-center mb-0">We take pride in having served 10,000+ clients in a variety of Industries. We have worked with companies of all sizes , and we are also familiar with the market conditions across a wide range of Industries. Our broad spectrum of knowledge and experience comes because of the work we have done. Here are some of the significant clients we have worked with </p>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
