<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <style>
    body{
        font-family: 'Source Sans Pro', sans-serif! important;
    }
    li{
        font-family: 'Source Sans Pro', sans-serif! important;
    }
        /* Navigation styles */
          .body1 {
            line-height: 1.6;
            font-weight: 600;
        }
        .navbar {
            background-color: #f8f9fa;
            padding: 1rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        ul{
            margin:0! important;
        }
        li {
            display: flex;
            align-items: center;
        }
        .me {
            padding: 0 15px;
        }
        .me:hover {
            background-color: #EFEFEF;
            border-radius: 10px;
            padding: 0 15px;
        }
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }
        .nav-logo {
            margin-right: 50px;
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            text-decoration: none;
        }
        .nav-menu {
            margin-top: 20px;
            display: flex;
            list-style-type: none;
        }
        .nav-item {
            position: relative;
        }
        .nav-new {
            display: flex;
            align-items: center;
        }
        .nav-link {
            color: #333;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            padding-right: 15px;
            transition: color 0.3s ease;
            position: relative;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .nav-link a{
            color: #333;
        }
        .nav-link a:hover{
            color: #007bff;
        }
        .nav-link:hover {
            color: #007bff;
        }
        .fa-angle-down{
            font-size: 15px;
        }
        .nav-link i {
            font-size: 14px;
            transition: transform 0.3s ease;
        }
        .nav-link.active {
            color: #007bff;
        }
        .dropdown-menu {
            display: none;
            position: absolute;
            border: none;
            top: 100%;
            left: 0;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            padding: 30px! important;
            z-index: 10000;
        }
        .dropdown-menu ul {
            display: none;
            position: absolute;
            border: none;
            top: 100%;
            left: 0;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            padding: 30px! important;
            z-index: 10000;
        }
        .nav-item:hover .dropdown-menu {
            display: block;
        }
        .dropdown-item {
            display: flex;
            align-items: center;
            font-size: 19px;
            font-weight: bold;
            text-decoration: none;
        }
        .dropdown-item:hover {
            color: #007bff;
            background-color: transparent;
        }
    .mobile-menu-btn {
        display: none;
        background: none;
        border: none;
        font-size: 2rem;
        cursor: pointer;
        transition: transform 0.3s ease;
    }
    .mobile-menu-btn.active {
        transform: rotate(45deg);
    }

    /* Responsive design */
    @media (max-width: 768px) {
        .nav-container {
            flex-wrap: wrap;
        }

        .mobile-menu-btn {
            display: block;
            order: 2;
        }

        .nav-new {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .nav-menu {
            display: none;
            flex-direction: column;
            width: 100%;
            order: 3;
        }

        .nav-menu.active {
            display: flex;
        }

        .nav-item {
            margin: 0.5rem 0;
            width: 100%;
        }

        .dropdown-menu {
            position: static;
            box-shadow: none;
            padding-left: 1rem;
            display: none;
            width: 100%;
        }

        .dropdown-item {
            display: flex;
            align-items: center;
            font-size: 19px;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-link i {
            font-size: 14px;
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .dropdown-item:hover {
            color: #007bff;
            background-color: transparent;
        }

        .nav-link {
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 0.5rem 0;
        }

        .nav-item:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu.active {
            display: block;
        }

        .nav-logo {
            display: block;
        }
        .she{
            display:flex;
            gap:5rem;
        }
        
    }

    @media (max-width: 768px) {
        .rm-txt a {
            display: none !important;
        }
    .seo-submenu {
    left: 0! important;
    top: 180px! important; /* Align with parent */

    }
}
    </style>
    <style>
    .has-submenu {
    position: relative;
}

.has-submenu::before {
    content: '';
    position: absolute;
    top: 0;
    right: -10px;
    width: 10px;
    height: 100%;
}
.seo-submenu {
    display: none;
    position: absolute;
    left: 100%;
    top: 0; /* Align with parent */
    background: white;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    min-width: 200px;
    padding: 30px;
    border-radius: 20px;
    /* Add margin to prevent gap */
    margin-left: 20px;
}

/* Show submenu on hover */
.has-submenu:hover > .seo-submenu {
    display: block;
}

/* Add arrow for items with submenus */
.has-submenu > .dropdown-item::after {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
}

/* Create invisible hover bridge */
.has-submenu::after {
    content: '';
    position: absolute;
    width: 20px;
    height: 100%;
    top: 0;
    right: -20px;
    background: transparent;
}

/* Add hover area above dropdown */
.nav-item::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 10px;
    bottom: -10px;
    left: 0;
    background: transparent;
}
</style>
    <style>
       .rm-header {
            background-color: #f0f0f0;
        }
        .rm-top-bar {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .rm-locate {
            display: flex;
            align-items: center;
        }
        .rm-icon, .rm-txt {
            display: flex;
            align-items: center;
            color: white;
        }
        .rm-icon img, .rm-txt img {
            width: 29px;
            height: 29px;
            padding: 3px;
            margin: 0 5px;
        }
        .rm-txt a {
            color: #333;
            text-decoration: none;
            display: block;
            font-weight: 600;
            padding: 0 7px;
        }
        .seo-button a {
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
        }
        .seo-button i {
            margin-right: 5px;
        }
        .mobile-only {
            display: none;
        }
        .seo-button{
            margin:0;
        }
    </style>
    <style>
    @media screen and (max-width: 768px){
    .rm-top-bar{
        display:none;
    }
    }
    </style>
    <style>
    .rm-top-bar-2,
.top-b-left,
.seo-buttons,
.call-sec,
.call-icon-top {
  display: none;
}

/* Responsive styles for mobile */
@media screen and (max-width: 768px) {
  /* Show and style elements for mobile */
  .rm-top-bar-2 {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 10px;
  }
   ul.call-sec li:first-child img{
                width: 50px;
    height: 37px;
    position: relative;
    border-radius: 50%;
    line-height: 30px;
    text-align: center;
    margin-bottom: 21px;
    left: -20px;
    top: 4px! important;
    font-size: 27px;
        }
        ul.call-sec li a img{
                width: 36px;
    margin-bottom: 15px;
    border-radius: 50%;
    padding: 0 5px;
        }
        ul.call-sec{
            top:0;
        }
</style>
<style>
.sticky-header {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	z-index: 1000;
	transition: all 0.3s ease;
	background-color: #f8f9fa;
	box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Placeholder to prevent content from jumping */
.header-placeholder {
	display: none;
}

/* Sticky header for desktop */
@media (min-width: 769px) {
	.rm-header {
		position: sticky;
		top: 0;
		z-index: 1000;
	}

	.header-placeholder {
		display: block;
		height: 60px;
		/* Match the height of your top bar and navbar */
	}

	.navbar.sticky-header {
		top: 0;
		position: fixed;
		width: 100%;
		left: 0;
		z-index: 1000;
	}
}

/* Sticky header for mobile */
@media (max-width: 768px) {
	.navbar.sticky-header {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		z-index: 1000;
	}

	.header-placeholder {
		display: block;
		height: 60px;
		/* Adjust based on your mobile header height */
	}

	/* Adjust mobile menu when header is sticky */
	.navbar.sticky-header .nav-container {
		padding: 10px;
	}
}

/* Mobile Styles */
/* SEO Submenu Styles */
.seo-submenu {
	display: none;
	position: absolute;
	top: 0 !important;
	left: 100% !important;
	box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2) !important;
	min-width: 180px !important !important;
}

.seo-submenu .dropdown-item {
	padding-left: 20px !important;
}

.has-submenu:hover .seo-submenu {
	display: block !important;
}

@media screen and (max-width: 568px) {

	.nav-item:hover .dropdown-menu {
		display: none;
	}

	ul.dropdown-menu.active {
		display: block !important;
	}

	.dropdown-menu,
	.seo-submenu {
		position: relative;
		left: 0 !important;
		top: 0 !important;
		padding-left: 10px;
		background-color: #f9f9f9;
	}

	li.has-submenu.me {
		flex-direction: column;
	}

	.seo-submenu .dropdown-item {
		padding-left: 20px;
	}

	/* Hide dropdown in mobile until clicked */
	.dropdown-menu.active,
	.seo-submenu.active {
		display: block; 
	}
}
        </style>
</head>
<body class="body1">
   <header class="rm-header" style="height:auto">
      <div class="rm-top-bar">
      <div class="second_btn">
         <div class="rm-locate">
            <div class="rm-icon">
               India <img src="/assets/media/images/logo/flag.png" alt="India Flag Icon">
            </div>
            <div class="rm-txt">
               <a href="tel:+91-9560494030" style="margin-right:10px">+91-9560 494 030</a>
               <div class="seo-button">
                  <a href="#" title="SEO Resellers Programs India">
                  <i class="fas fa-hat-cowboy"></i> White Label SEO
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div class="rm-top-bar-2">
      <div class="top-b-left flag_width" style="display:none;padding-left: 20px!important;">
      <div class="seo-buttons" style="border:none !important">
         <span><a href="#" title="Our Latest Blog Posts" style="font-size: 15px;padding: 0 7px;font-weight: 600;"></a></span>
      </div>
      <nav class="navbars navbar-expand-lg navbar-light" id="sticky-header">
         <ul class="call-sec call-icon-top" style="display:none;margin-top:5px;margin-left:auto;margin-right:auto;">
            <li>
               <a href="#"><img class="icon" width="50" height="37" src="/assets/media/images/call_icon.png" loading="lazy" alt="call icon"></a>
            </li>
            <li style="margin-left:-22px">
               <a href="tel:+91-9560 494 030" onclick="ga('send', 'event', 'Phone Call Tracking', 'Click to Call', '+91-9560 494 030', 0);"><img src="https://www.acmeinfolabs.com/assets/media/images/ind.png" width="36" height="26" alt="india flag icon"> </a>
            </li>
            <li>
               <a href="https://api.whatsapp.com/send?phone=919560494030&text=Tell Me About  More Services" onclick="ga('send', 'event', 'Phone Call Tracking', 'Click to Call', '+91-9560 494 030', 0);"><img class="whattsp" src="https://www.acmeinfolabs.com/assets/media/images/whatsapp.png" alt="whattsp icon" width="35px" height="35px"> </a>
            </li>
         </ul>
      </nav>
   </header>
   <nav class="navbar">
      <div class="nav-container">
         <div class="she"> <a href="https://www.acmeinfolabs.com/" class="nav-logo" title="Digital Marketing Company">
            <img src="/assets/media/images/logo/logo.webp" class="run" style="margin-bottom:0;" width="254" alt="Digital Marketing Agency">
            </a>
            <button class="mobile-menu-btn">☰</button>
         </div>
         <ul class="nav-menu">
            <li class="nav-item">
               <a href="https://www.acmeinfolabs.com/" class="nav-link">HOME</a>
            </li>
            <li class="nav-item nav-new">
               <div class="nav-link"><span class="you">ABOUT</span> <i class="fa-solid fa-angle-down"></i></div>
               <ul class="dropdown-menu">
                  <li class="me"><img src="/assets/media/images/new/info.png" height="25px" width="25px" style="margin-right: -7px;margin-top: 10px;" alt="Who We Are"><a href="https://www.acmeinfolabs.com/about-acme-infolabs" class="dropdown-item">Who We Are</a></li>
                  <li class="me"><img src="/assets/media/images/new/work.png" height="25px" width="25px" style="margin-right: -7px;margin-top: 10px;" alt="Our Vision & Mission"><a href="https://www.acmeinfolabs.com/our-team" class="dropdown-item">Our Team</a></li>
                  <li class="me"><img src="/assets/media/images/new/opportunity.png" height="25px" width="25px" style="margin-right: -7px;margin-top: 10px;" alt="Our Vision & Mission"><a href="https://www.acmeinfolabs.com/our-mission-vision" class="dropdown-item">Our Vision & Mission</a></li>
                  <li class="me"><img src="/assets/media/images/new/office.png" height="25px" width="25px" style="margin-right: -7px;margin-top: 10px;" alt="Our Company"><a href="https://www.acmeinfolabs.com/seo-company-in-india" class="dropdown-item">Our Company</a></li>
                  <li class="me"><img src="/assets/media/images/new/solution.png" height="25px" width="25px" style="margin-right: -7px;margin-top: 10px;" alt="Our Mantra"><a href="https://www.acmeinfolabs.com/our-mantra" class="dropdown-item">Our Mantra</a></li>
                  <li class="me"><img src="/assets/media/images/new/request.png" height="25px" width="25px" style="margin-right: -7px;margin-top: 10px;" alt="Why Us"><a href="https://www.acmeinfolabs.com/why-us" class="dropdown-item">Why Us</a></li>
                  <li class="me"><img src="/assets/media/images/new/career-path.png" height="25px" width="25px" style="margin-right: -7px;margin-top: 10px;" alt="Career"><a href="https://www.acmeinfolabs.com/career" class="dropdown-item">Career</a></li>
               </ul>
            </li>
            <li class="nav-item nav-new" >
               <div class="nav-link"><span class="you">DIGITAL MARKETING</span><i class="fa-solid fa-angle-down"></i></div>
               <ul class="dropdown-menu">
                  <li class="has-submenu me">
                    <div style="display: flex ; align-items: center;">
					 <img src="/assets/media/images/new/seo-3s.png" height="25" width="25" style="margin-right: -7px;margin-top: 10px;"  alt="Local SEO">
                     <a href="/seo-services-delhi-india" class="dropdown-item">Search Engine Optimization</a>
					</div>
                     <ul class="seo-submenu">
                        <li class="me">
                           <img src="/assets/media/images/new/local.png" height="25" width="25" style="margin-right: -7px;margin-top: 10px;"  alt="Local SEO">
                           <a href="https://www.acmeinfolabs.com/local-seo-services" class="dropdown-item">Local SEO</a>
                        </li  >
                        <li class="me">
                           <img src="/assets/media/images/new/flag.png" height="25" width="25" style="margin-right: -7px;margin-top: 10px;"  alt="National SEO">
                           <a href="https://www.acmeinfolabs.com/national-seo-services" class="dropdown-item">National SEO</a>
                        </li>
                        <li class="me">
                           <img src="/assets/media/images/new/ecommerce.png" height="25" width="25"  style="margin-right: -7px;margin-top: 10px;"  alt="E-commerce SEO">
                           <a href="https://www.acmeinfolabs.com/ecommerce-seo-services" class="dropdown-item">E-commerce SEO</a>
                        </li>
                     </ul>
                  </li>
                  <li class="me"><img src="/assets/media/images/new/mouse.png" height="25px" width="25px" style="margin-right: -7px;margin-top: 10px;" alt="Pay Per Click"><a href="/pay-per-click" class="dropdown-item">Pay Per Click</a></li>
                  <li class="me"><img src="/assets/media/images/new/seo.png" height="25px" width="25px" style="margin-right: -7px;margin-top: 10px;" alt="Social Media Optimization"><a href="/social-media-optimization" class="dropdown-item">Social Media Optimization</a></li>
                  <li class="me"><img src="/assets/media/images/new/youtube.png" height="25px" width="25px" style="margin-right: -7px;margin-top: 10px;" alt="Youtube optimization"><a href="/you-tube-optimization" class="dropdown-item">Youtube optimization</a></li>
               </ul>
            </li>
            <li class="nav-item nav-new">
               <div class="nav-link"><span class="you">DEVELOPMENT</span><i class="fa-solid fa-angle-down"></i></div>
               <ul class="dropdown-menu">
                  <li class="me"><img src="/assets/media/images/new/app-settings.png" height="25px" width="25px" style="margin-right: -7px;margin-top: 10px;" alt="Mobile App Development"><a href="/mobile-app-development" class="dropdown-item">Mobile App Development</a></li>
                  <li class="me"><img src="/assets/media/images/new/ecommerce web.png" height="25px" width="25px" style="margin-right: -7px;margin-top: 10px;" alt="Ecommerce Website"><a href="/e-commerce-website-development" class="dropdown-item">Ecommerce Website</a></li>
                  <li class="me"><img src="/assets/media/images/new/graphic-designer.png" height="25px" width="25px" style="margin-right: -7px;margin-top: 10px;" alt="Website Designing"><a href="/website-design" class="dropdown-item">Website Designing</a></li>
                  <li class="me"><img src="/assets/media/images/new/online-data.png" height="25px" width="25px" style="margin-right: -7px;margin-top: 10px;" alt="Static Website Development"><a href="/static-website-development" class="dropdown-item">Static Website Development</a></li>
                  <li class="me"><img src="/assets/media/images/new/content.png" height="25px" width="25px" style="margin-right: -7px;margin-top: 10px;" alt="Content Management"><a href="/content-management-system" class="dropdown-item">Content Management</a></li>
                  <li class="me"><img src="/assets/media/images/new/app-development.png" height="25px" width="25px" style="margin-right: -7px;margin-top: 10px;" alt="Software Development"><a href="/software-development" class="dropdown-item">Software Development</a></li>
               </ul>
            </li>
            <li class="nav-item nav-new">
               <div class="nav-link"><span class="you">OUR WORK</span><i class="fa-solid fa-angle-down"></i></div>
               <ul class="dropdown-menu">
                  <li class="me"><img src="/assets/media/images/new/project-status.png" height="25px" width="25px" style="margin-right: -7px;margin-top: 10px;" alt="SEO Projects"><a href="https://www.acmeinfolabs.com/seo-projects" class="dropdown-item">SEO Projects</a></li>
                  <li class="me"><img src="/assets/media/images/new/case-study.png" height="25px" width="25px" style="margin-right: -7px;margin-top: 10px;" alt="Case Studies"><a href="https://www.acmeinfolabs.com/case-studies" class="dropdown-item">Case Studies</a></li>
                  <li class="me"><img src="/assets/media/images/new/blueprint.png" height="25px" width="25px" style="margin-right: -7px;margin-top: 10px;" alt="Designing Projects"><a href="https://www.acmeinfolabs.com/our-designing-projects" class="dropdown-item">Designing Projects</a></li>
               </ul>
            </li>
            <li class="nav-item">
               <a href="https://www.acmeinfolabs.com/blog/" class="nav-link">BLOG</a>
            </li>
            <li class="nav-item">
               <a href="/contact-us" class="nav-link">CONTACT</a>
            </li>
         </ul>
      </div>
   </nav>
    <script>
   document.querySelectorAll('.nav-new').forEach(function(navItem) {
    const navLinkDiv = navItem.querySelector('.nav-link');
    const dropdown = navItem.querySelector('.dropdown-menu');
    let isDropdownOpen = false;

    // Toggle dropdown when nav link div is clicked
    navLinkDiv.addEventListener('click', function toggleDropdown(e) {
        e.preventDefault();
        e.stopPropagation();

        // Close all other dropdowns
        document.querySelectorAll('.nav-new .dropdown-menu.active').forEach(function(otherDropdown) {
            if (otherDropdown !== dropdown) {
                otherDropdown.classList.remove('active');
            }
        });

        // Toggle the current dropdown
        dropdown.classList.toggle('active');
        isDropdownOpen = dropdown.classList.contains('active');

        // If the dropdown was open, close it on the next click
        if (isDropdownOpen) {
            navLinkDiv.addEventListener('click', function closeDropdown(e) {
                e.preventDefault();
                e.stopPropagation();
                dropdown.classList.remove('active');
                isDropdownOpen = false;
                navLinkDiv.removeEventListener('click', closeDropdown);
            }, { once: true });
        }
    });

    // Close dropdowns when clicking outside navigation
    document.addEventListener('click', function(e) {
        if (!navItem.contains(e.target)) {
            dropdown.classList.remove('active');
            isDropdownOpen = false;
        }
    });

    // Close dropdown when clicking a dropdown item
    dropdown.querySelectorAll('a').forEach(function(dropdownItem) {
        dropdownItem.addEventListener('click', function() {
            dropdown.classList.remove('active');
            isDropdownOpen = false;

            // Close mobile menu if active
            const navMenu = document.querySelector('.nav-menu');
            if (navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
            }
        });
    });
});

// Mobile menu toggle
const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
const navMenu = document.querySelector('.nav-menu');

mobileMenuBtn.addEventListener('click', () => {
    navMenu.classList.toggle('active');
});


</script>

    <!--------sticky header------->
     <script>
        document.addEventListener('DOMContentLoaded', function() {
            const header = document.querySelector('.rm-header');
            const navbar = document.querySelector('.navbar');
            const headerPlaceholder = document.querySelector('.header-placeholder');

            // Function to handle sticky header
            function handleStickyHeader() {
                const scrollPosition = window.scrollY;

                if (scrollPosition > 100) { // Adjust this value as needed
                    // Add sticky class to header and navbar
                    header.classList.add('sticky-header');
                    navbar.classList.add('sticky-header');
                    
                    // Show placeholder to prevent content jump
                    headerPlaceholder.style.display = 'block';
                } else {
                    // Remove sticky class when at top of page
                    header.classList.remove('sticky-header');
                    navbar.classList.remove('sticky-header');
                    
                    // Hide placeholder
                    headerPlaceholder.style.display = 'none';
                }
            }

            // Add scroll event listener
            window.addEventListener('scroll', handleStickyHeader);

            // Initial check in case page is loaded with scroll
            handleStickyHeader();

            // Mobile menu toggle adjustment for sticky header
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
            const navMenu = document.querySelector('.nav-menu');

            mobileMenuBtn.addEventListener('click', () => {
                navMenu.classList.toggle('active');
                
                // Ensure sticky header remains when menu is opened
                if (window.scrollY > 100) {
                    header.classList.add('sticky-header');
                    navbar.classList.add('sticky-header');
                }
            });
        });
    </script>
    <script src="//fw-cdn.com/1622193/2521952.js" chat="true"></script>