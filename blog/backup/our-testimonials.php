<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Testimonials | Acme Infolabs</title>
<meta name="description" content="Acme Infolabs is one of the  Company In Noida. Call us: 9560494030"/>
<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
<link rel="canonical" href="https://www.acmeinfolabs.com/seo-company-in-noida" />
<meta property="og:locale" content="en_US">
<meta property="og:type" content="article">
<meta property="og:title" content="Best Company in Noida ">
</script>
 
    
    <!-- head source -->
    <?php include('parts/header/head-source.php'); ?>

</head>

<body>
    <style>
        input {
            opacity: 0;
        }
    </style>
    <!--[iflt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- header -->
    <?php include('parts/header/header.php'); ?>

    <!-- Hero -->
    <div class="inner-bnr-div text-center bnr-4">
        <div class="row">
            <div class="container-fluid">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="inner-bnr-info">
                        <h1>Our Testimonials</h1>
                      
                        <div class="ht-30"></div>
                            <a href="https://www.acmeinfolabs.com/" class="btn_a_link"><button class="btn-a-btn btn-dark text-center"><span>Get Started Now </span></button></a>
                    </div>
                    <div class="inner-sld-img m_none">
                    <img src="/assets/media/images/testimonials.jpg" class="Fade-Zoom" loading="lazy" alt="testimonials">
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="ht-60"></div>
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
</div></section>
<div class="ht-60"></div>
<section>
<div class="container ak-testimonial">
<div class="row">

    <div class="col-lg-6 mb-5">
<div class="card ak-card">

<div class="embed-responsive embed-responsive-16by9">
<iframe width="560" height="315" src="https://www.youtube.com/embed/ZmWgUybk0qM?si=_xvDBPOtaCAqd1pj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> allowfullscreen&gt;
</div>
</div>
</div>
<div class="col-lg-6">
<div class="card ak-card">

<div class="embed-responsive embed-responsive-16by9">
<iframe width="560" height="315" src="https://www.youtube.com/embed/KD8Nv30itHM?si=e0Wm55Ge-5SvKeV_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> allowfullscreen&gt;
</div>
</div>
</div>

<div class="col-lg-6 mb-5">
<div class="card ak-card">

<div class="embed-responsive embed-responsive-16by9">
<iframe width="560" height="315" src="https://www.youtube.com/embed/H1MM2LjFCGk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe> allowfullscreen&gt;
</div>
</div>
</div>
<div class="col-lg-6">
<div class="card ak-card">

<div class="embed-responsive embed-responsive-16by9">
<iframe width="560" height="315" src="https://www.youtube.com/embed/3sduAnfFpPo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe> allowfullscreen&gt;
</div>
</div>
</div>


<div class="col-lg-6 mb-5">
<div class="card ak-card">

<div class="embed-responsive embed-responsive-16by9">
<iframe width="560" height="315" src="https://www.youtube.com/embed/-QcToUwubVA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe> allowfullscreen&gt;
</div>
</div>
</div>
<div class="col-lg-6">
<div class="card ak-card">

<div class="embed-responsive embed-responsive-16by9">
<iframe width="560" height="315" src="https://www.youtube.com/embed/_vryQORFbWE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe> allowfullscreen&gt;
</div>
</div>
</div>



</div>
</section>
</div>

    
    
    <div class="mc-l-blogs c-spc">
        <div class="mc-l-blogs c-spc">
        <div class="container">
        <h3 class="text-center blue">Our Latest Blogs</h3>

        <?php

            $number = 5;
            $wordpress_header = "blog/wp-blog-header.php";

            // Include wordpress header   
            if (file_exists($wordpress_header))
            {
            include ($wordpress_header);

            // the query
            $the_query = new WP_Query( array(
              'category_name' => 'all',
               'posts_per_page' => 3,
            )); 
        }
        else
        {
            echo "Unable to connect to Wordpress header file.";
            die();
        } 
        ?>
        <?php echo '<div class="row ft_blog">'; ?>
        <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php echo '<li class="col-lg-4 col-md-4 c-h-effect">'; ?>
        <?php echo '<div class="c-c-class"><a href="';
        the_permalink();
        echo '">'; ?>
        <?php the_post_thumbnail(); ?>
        <?php the_title(); ?>
        <?php echo '</a>'; ?>
        <?php the_excerpt(); ?>
        <?php echo '</div>'; ?>


        <?php endwhile; ?>
        

        <?php else : ?>
        <?php endif; ?>
        <?php echo '</li>'; ?>
        <?php echo '</div>'; ?>
    </div>
            <a href="/blog" class="btn_a_link"><button class="btn-a-btn btn-dark"><span>VIEW ALL BLOG</span></button></a>
    </div>
    </div>

    <div class="ht-60"></div>

    <div class="container-fluid" style="background: #b2bbff;">
    <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
        <div class="testimonials text-center">
        <div class="ht-100"></div>
        <img class="c-meet-cl" src="assets/media/images/about/icon/meeting-point.webp" alt="contact digital marketing company in delhi - acmeinfolabs">
        <h3>BRANCH ADDRESS</h3>
        <div>
            <span>B-138, Logix Technova, Noida Sector-132, Noida-201304</span>
        </div>
        <div class="ht-60"></div>
        </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1753.016749295707!2d77.37829480804062!3d28.508639852596353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce8826931d419%3A0x3f229bc2b2adfdd8!2sLogix%20Technova%2C%20Block%20B%2C%20Sector%20132%2C%20Noida%2C%20Uttar%20Pradesh%20201304%2C%20India!5e0!3m2!1sen!2sus!4v1618898551372!5m2!1sen!2sus" style="margin-bottom: -6px; border: none;" width="1080" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    </div>
    </div>

    <!-- footer -->
    <?php include('parts/footer/footer.php'); ?>

</body>

</html>