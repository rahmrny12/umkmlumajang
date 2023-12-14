<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?= $title; ?></title>
  <meta name="description" content="Morden Bootstrap HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/suruci/img/favicon.ico">
    
  <!-- ======= All CSS Plugins here ======== -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/suruci/css/plugins/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/suruci/css/plugins/glightbox.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Plugin css -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/suruci/css/vendor/bootstrap.min.css">

  <!-- Custom Style CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/suruci/css/style.css">

</head>

<body>

    <!-- Start preloader -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                    
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    
                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>
                    
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    
                    <span data-text-preloader="G" class="letters-loading">
                        G
                    </span>
                </div>
            </div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
    <!-- End preloader -->

    <!-- Start header area -->
    <header class="header__section">
        <div class="main__header header__sticky">
            <div class="container-fluid">
                <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                    <div class="offcanvas__header--menu__open ">
                        <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg" viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352"/></svg>
                            <span class="visually-hidden">Menu Open</span>
                        </a>
                    </div>
                    <div class="main__logo">
                        <a class="main__logo--link" href="index.html"><img class="main__logo--img" src="<?= base_url(); ?>assets/suruci/img/logo/nav-log.png" alt="logo-img"></a>
                    </div>
                    <div class="header__account header__sticky--none">
                        <ul class="d-flex">
                            <li class="header__account--items">
                                <a class="header__account--btn" href="my-account.html">
                                    <svg xmlns="http://www.w3.org/2000/svg"  width="26.51" height="23.443" viewBox="0 0 512 512"><path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg> 
                                    <span class="header__account--btn__text">My Account</span>
                                </a>
                            </li>
                            <li class="header__account--items d-none d-lg-block">
                                <a class="header__account--btn" href="wishlist.html">
                                    <svg  xmlns="http://www.w3.org/2000/svg" width="28.51" height="23.443" viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                                    <span class="header__account--btn__text"> Wish List</span>
                                    <span class="items__count wishlist">02</span> 
                                </a>
                            </li>
                            <li class="header__account--items">
                                <a class="header__account--btn minicart__open--btn" href="javascript:void(0)" data-offcanvas>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443" viewBox="0 0 14.706 13.534">
                                        <g  transform="translate(0 0)">
                                        <g >
                                            <path  data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"/>
                                            <path  data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"/>
                                            <path  data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"/>
                                        </g>
                                        </g>
                                    </svg>
                                    <span class="header__account--btn__text"> My cart</span>
                                    <span class="items__count">02</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__menu d-none header__sticky--block d-lg-block">
                        <nav class="header__menu--navigation">
                            <ul class="d-flex">
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link" href="index.html">Home 
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="index.html" class="header__sub--menu__link">Home One</a></li>
                                        <li class="header__sub--menu__items"><a href="index-2.html" class="header__sub--menu__link">Home Two</a></li>
                                        <li class="header__sub--menu__items"><a href="index-3.html" class="header__sub--menu__link">Home Three</a></li>
                                    </ul>
                                </li>
                                <li class="header__menu--items mega__menu--items style2">
                                    <a class="header__menu--link" href="shop.html">Shop 
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                        </svg>
                                    </a>
                                    <ul class="header__mega--menu d-flex">
                                        <li class="header__mega--menu__li">
                                            <span class="header__mega--subtitle">Column One</span>
                                            <ul class="header__mega--sub__menu">
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="shop.html">Shop Left Sidebar</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="shop-grid.html">Shop Grid</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="shop-grid-list.html">Shop Grid List</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="shop-list.html">Shop List</a></li>
                                            </ul>
                                        </li>
                                        <li class="header__mega--menu__li">
                                            <span class="header__mega--subtitle">Column Two</span>
                                            <ul class="header__mega--sub__menu">
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="product-details.html">Product Details</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="product-video.html">Video Product</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="product-details.html">Variable Product</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="product-left-sidebar.html">Product Left Sidebar</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="product-gallery.html">Product Gallery</a></li>
                                            </ul>
                                        </li>
                                        <li class="header__mega--menu__li">
                                            <span class="header__mega--subtitle">Column Three</span>
                                            <ul class="header__mega--sub__menu">
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="my-account.html">My Account</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="my-account-2.html">My Account 2</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="404.html">404 Page</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="login.html">Login Page</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="faq.html">Faq Page</a></li>
                                            </ul>
                                        </li>
                                        <li class="header__mega--menu__li">
                                            <span class="header__mega--subtitle">Column Four</span>
                                            <ul class="header__mega--sub__menu">
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="compare.html">Compare Pages</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="checkout.html">Checkout page</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="checkout-2.html">Checkout Style 2</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="checkout-3.html">Checkout Style 3</a></li>
                                                <li class="header__mega--sub__menu_li"><a class="header__mega--sub__menu--title" href="checkout-4.html">Checkout Style 4</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link" href="about.html">About US </a>  
                                </li>
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link" href="blog.html">Blog 
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="blog.html" class="header__sub--menu__link">Blog Grid</a></li>
                                        <li class="header__sub--menu__items"><a href="blog-details.html" class="header__sub--menu__link">Blog Details</a></li>
                                        <li class="header__sub--menu__items"><a href="blog-left-sidebar.html" class="header__sub--menu__link">Blog Left Sidebar</a></li>
                                        <li class="header__sub--menu__items"><a href="blog-right-sidebar.html" class="header__sub--menu__link">Blog Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="header__menu--items style2 d-none d-xl-block">
                                    <a class="header__menu--link" href="shop.html">Categories </a>  
                                </li>
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link" href="#">Pages 
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41">
                                            <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="about.html" class="header__sub--menu__link">About Us</a></li>
                                        <li class="header__sub--menu__items"><a href="contact.html" class="header__sub--menu__link">Contact Us</a></li>
                                        <li class="header__sub--menu__items"><a href="cart.html" class="header__sub--menu__link">Cart Page</a></li>
                                        <li class="header__sub--menu__items"><a href="portfolio.html" class="header__sub--menu__link">Portfolio Page</a></li>
                                        <li class="header__sub--menu__items"><a href="wishlist.html" class="header__sub--menu__link">Wishlist Page</a></li>
                                        <li class="header__sub--menu__items"><a href="login.html" class="header__sub--menu__link">Login Page</a></li>
                                        <li class="header__sub--menu__items"><a href="404.html" class="header__sub--menu__link">Error Page</a></li>
                                    </ul>
                                </li>
                                <li class="header__menu--items style2">
                                    <a class="header__menu--link" href="contact.html">Contact </a>  
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header__account header__account2 header__sticky--block">
                        <ul class="d-flex">
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start offCanvas minicart -->
        <div class="offCanvas__minicart">
            <div class="minicart__header ">
                <div class="minicart__header--top d-flex justify-content-between align-items-center">
                    <h2 class="minicart__title h3"> Shopping Cart</h2>
                    <button class="minicart__close--btn" aria-label="minicart close button" data-offcanvas> 
                        <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"/></svg>
                    </button>
                </div>
                <p class="minicart__header--desc">Clothing and fashion products are limited</p>
            </div>
            <div class="minicart__product">
                <div class="minicart__product--items d-flex">
                    <div class="minicart__thumb">
                        <a href="product-details.html"><img src="<?= base_url(); ?>assets/suruci/img/product/product1.png" alt="prduct-img"></a>
                    </div>
                    <div class="minicart__text">
                        <h3 class="minicart__subtitle h4"><a href="product-details.html">Oversize Cotton Dress</a></h3>
                        <span class="color__variant"><b>Color:</b> Beige</span>
                        <div class="minicart__price">
                            <span class="current__price">$125.00</span>
                            <span class="old__price">$140.00</span>
                        </div>
                        <div class="minicart__text--footer d-flex align-items-center">
                            <div class="quantity__box minicart__quantity">
                                <button type="button"  class="quantity__value decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                <label>
                                    <input type="number" class="quantity__number" value="1" data-counter />
                                </label>
                                <button type="button" class="quantity__value increase"  value="Increase Value">+</button>
                            </div>
                            <button class="minicart__product--remove">Remove</button>
                        </div>
                    </div>
                </div>
                <div class="minicart__product--items d-flex">
                    <div class="minicart__thumb">
                        <a href="product-details.html"><img src="<?= base_url(); ?>assets/suruci/img/product/product2.png" alt="prduct-img"></a>
                    </div>
                    <div class="minicart__text">
                        <h3 class="minicart__subtitle h4"><a href="product-details.html">Boxy Denim Jacket</a></h3>
                        <span class="color__variant"><b>Color:</b> Green</span>
                        <div class="minicart__price">
                            <span class="current__price">$115.00</span>
                            <span class="old__price">$130.00</span>
                        </div>
                        <div class="minicart__text--footer d-flex align-items-center">
                            <div class="quantity__box minicart__quantity">
                                <button type="button" class="quantity__value decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                <label>
                                    <input type="number" class="quantity__number" value="1" data-counter />
                                </label>
                                <button type="button" class="quantity__value increase" aria-label="quantity value" value="Increase Value">+</button>
                            </div>
                            <button class="minicart__product--remove">Remove</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="minicart__amount">
                <div class="minicart__amount_list d-flex justify-content-between">
                    <span>Sub Total:</span>
                    <span><b>$240.00</b></span>
                </div>
                <div class="minicart__amount_list d-flex justify-content-between">
                    <span>Total:</span>
                    <span><b>$240.00</b></span>
                </div>
            </div>
            <div class="minicart__conditions text-center">
                <input class="minicart__conditions--input" id="accept" type="checkbox">
                <label class="minicart__conditions--label" for="accept">I agree with the <a class="minicart__conditions--link" href="privacy-policy.html">Privacy and Policy</a></label>
            </div>
            <div class="minicart__button d-flex justify-content-center">
                <a class="primary__btn minicart__button--link" href="cart.html">View cart</a>
                <a class="primary__btn minicart__button--link" href="checkout.html">Checkout</a>
            </div>
        </div>
        <!-- End offCanvas minicart -->

    </header>

    <main class="main__content_wrapper">