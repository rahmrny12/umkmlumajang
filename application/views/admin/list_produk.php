<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Keranjang</title>
  <meta name="description" content="Morden Bootstrap HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/suruci/img/favicon.ico">-->
    
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
							<svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg" viewBox="0 0 512 512">
								<path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352" />
							</svg>
							<span class="visually-hidden">Menu Open</span>
						</a>
					</div>
					<div class="main__logo">
						<h1 class="main__logo--title"><a class="main__logo--link" href="<?= base_url(); ?>user/lapak"><h2 class="text-dark m-0"><img class="me-6">UMKMLUMAJANG</h2></a></h1>
					</div>


					<div class="header__account header__sticky--none">
						<ul class="d-flex">
							<li class="header__account--items">
								<a class="header__account--btn minicart__open--btn" href="javascript:void(0)" data-offcanvas>
									<svg xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443" viewBox="0 0 14.706 13.534">
										<g transform="translate(0 0)">
											<g>
												<path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor" />
												<path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor" />
												<path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor" />
											</g>
										</g>
									</svg>
								</a>
							</li>
							<li class="header__account--items">
								<a class="primary__btn" href="<?= base_url(); ?>auth/login">Login</a>
							</li>
						</ul>
					</div>
					<div class="header__menu d-none header__sticky--block d-lg-block">
						<nav class="header__menu--navigation">
							<ul class="d-flex">
								<li class="header__menu--items style2">
									<a class="header__menu--link" href="#hero">Beranda
									</a>
								</li>
								<li class="header__menu--items style2 d-none d-xl-block">
									<a class="header__menu--link" href="#umkm">Umkm</a>
								</li>
								<li class="header__menu--items style2 d-none d-xl-block">
									<a class="header__menu--link" href="#produk">Produk</a>
								</li>
							</ul>
						</nav>
					</div>
					<div class="header__account header__account2 header__sticky--block">
						<ul class="d-flex">
							<li class="header__account--items header__account2--items  header__account--search__items d-none d-lg-block">
								<a class="header__account--btn search__open--btn" href="javascript:void(0)" data-offcanvas>
									<svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443" viewBox="0 0 512 512">
										<path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
										<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
									</svg>
									<span class="visually-hidden">Search</span>
								</a>
							</li>
							<li class="header__account--items header__account2--items">
								<a class="header__account--btn minicart__open--btn" href="<?= base_url(); ?>user/list_produk" data-offcanvas>
									<svg xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443" viewBox="0 0 14.706 13.534">
										<g transform="translate(0 0)">
											<g>
												<path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor" />
												<path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor" />
												<path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor" />
											</g>
										</g>
									</svg>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Start Offcanvas stikcy toolbar -->
		<div class="offcanvas__stikcy--toolbar">
			<ul class="d-flex justify-content-between">
				<li class="offcanvas__stikcy--toolbar__list">
					<a class="offcanvas__stikcy--toolbar__btn" href="index.html">
						<span class="offcanvas__stikcy--toolbar__icon">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" width="21.51" height="21.443" viewBox="0 0 22 17">
								<path fill="currentColor" d="M20.9141 7.93359c.1406.11719.2109.26953.2109.45703 0 .14063-.0469.25782-.1406.35157l-.3516.42187c-.1172.14063-.2578.21094-.4219.21094-.1406 0-.2578-.04688-.3515-.14062l-.9844-.77344V15c0 .3047-.1172.5625-.3516.7734-.2109.2344-.4687.3516-.7734.3516h-4.5c-.3047 0-.5742-.1172-.8086-.3516-.2109-.2109-.3164-.4687-.3164-.7734v-3.6562h-2.25V15c0 .3047-.11719.5625-.35156.7734-.21094.2344-.46875.3516-.77344.3516h-4.5c-.30469 0-.57422-.1172-.80859-.3516-.21094-.2109-.31641-.4687-.31641-.7734V8.46094l-.94922.77344c-.11719.09374-.24609.14062-.38672.14062-.16406 0-.30468-.07031-.42187-.21094l-.35157-.42187C.921875 8.625.875 8.50781.875 8.39062c0-.1875.070312-.33984.21094-.45703L9.73438.832031C10.1094.527344 10.5312.375 11 .375s.8906.152344 1.2656.457031l8.6485 7.101559zm-3.7266 6.50391V7.05469L11 1.99219l-6.1875 5.0625v7.38281h3.375v-3.6563c0-.3046.10547-.5624.31641-.7734.23437-.23436.5039-.35155.80859-.35155h3.375c.3047 0 .5625.11719.7734.35155.2344.211.3516.4688.3516.7734v3.6563h3.375z"></path>
							</svg>
						</span>
						<span class="offcanvas__stikcy--toolbar__label">Home</span>
					</a>
				</li>
				<li class="offcanvas__stikcy--toolbar__list">
					<a class="offcanvas__stikcy--toolbar__btn" href="shop.html">
						<span class="offcanvas__stikcy--toolbar__icon">
							<svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18.51" height="17.443" viewBox="0 0 448 512">
								<path d="M416 32H32A32 32 0 0 0 0 64v384a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32V64a32 32 0 0 0-32-32zm-16 48v152H248V80zm-200 0v152H48V80zM48 432V280h152v152zm200 0V280h152v152z"></path>
							</svg>
						</span>
						<span class="offcanvas__stikcy--toolbar__label">Shop</span>
					</a>
				</li>
				<li class="offcanvas__stikcy--toolbar__list ">
					<a class="offcanvas__stikcy--toolbar__btn search__open--btn" href="javascript:void(0)" data-offcanvas>
						<span class="offcanvas__stikcy--toolbar__icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
								<path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
								<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
							</svg>
						</span>
						<span class="offcanvas__stikcy--toolbar__label">Search</span>
					</a>
				</li>
				<li class="offcanvas__stikcy--toolbar__list">
					<a class="offcanvas__stikcy--toolbar__btn minicart__open--btn" href="javascript:void(0)" data-offcanvas>
						<span class="offcanvas__stikcy--toolbar__icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="18.51" height="15.443" viewBox="0 0 18.51 15.443">
								<path d="M79.963,138.379l-13.358,0-.56-1.927a.871.871,0,0,0-.6-.592l-1.961-.529a.91.91,0,0,0-.226-.03.864.864,0,0,0-.226,1.7l1.491.4,3.026,10.919a1.277,1.277,0,1,0,1.844,1.144.358.358,0,0,0,0-.049h6.163c0,.017,0,.034,0,.049a1.277,1.277,0,1,0,1.434-1.267c-1.531-.247-7.783-.55-7.783-.55l-.205-.8h7.8a.9.9,0,0,0,.863-.651l1.688-5.943h.62a.936.936,0,1,0,0-1.872Zm-9.934,6.474H68.568c-.04,0-.1.008-.125-.085-.034-.118-.082-.283-.082-.283l-1.146-4.037a.061.061,0,0,1,.011-.057.064.064,0,0,1,.053-.025h1.777a.064.064,0,0,1,.063.051l.969,4.34,0,.013a.058.058,0,0,1,0,.019A.063.063,0,0,1,70.03,144.853Zm3.731-4.41-.789,4.359a.066.066,0,0,1-.063.051h-1.1a.064.064,0,0,1-.063-.051l-.789-4.357a.064.064,0,0,1,.013-.055.07.07,0,0,1,.051-.025H73.7a.06.06,0,0,1,.051.025A.064.064,0,0,1,73.76,140.443Zm3.737,0L76.26,144.8a.068.068,0,0,1-.063.049H74.684a.063.063,0,0,1-.051-.025.064.064,0,0,1-.013-.055l.973-4.357a.066.066,0,0,1,.063-.051h1.777a.071.071,0,0,1,.053.025A.076.076,0,0,1,77.5,140.448Z" transform="translate(-62.393 -135.3)" fill="currentColor" />
							</svg>
						</span>
						<span class="offcanvas__stikcy--toolbar__label">Cart</span>
						<span class="items__count">3</span>
					</a>
				</li>
				<li class="offcanvas__stikcy--toolbar__list">
					<a class="offcanvas__stikcy--toolbar__btn" href="wishlist.html">
						<span class="offcanvas__stikcy--toolbar__icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="18.541" height="15.557" viewBox="0 0 18.541 15.557">
								<path d="M71.775,135.51a5.153,5.153,0,0,1,1.267-1.524,4.986,4.986,0,0,1,6.584.358,4.728,4.728,0,0,1,1.174,4.914,10.458,10.458,0,0,1-2.132,3.808,22.591,22.591,0,0,1-5.4,4.558c-.445.282-.9.549-1.356.812a.306.306,0,0,1-.254.013,25.491,25.491,0,0,1-6.279-4.8,11.648,11.648,0,0,1-2.52-4.009,4.957,4.957,0,0,1,.028-3.787,4.629,4.629,0,0,1,3.744-2.863,4.782,4.782,0,0,1,5.086,2.447c.013.019.025.034.057.076Z" transform="translate(-62.498 -132.915)" fill="currentColor" />
							</svg>
						</span>
						<span class="offcanvas__stikcy--toolbar__label">Wishlist</span>
						<span class="items__count">3</span>
					</a>
				</li>
			</ul>
		</div>
		<!-- End Offcanvas stikcy toolbar -->

		<!-- Start serch box area -->
		<div class="predictive__search--box ">
			<div class="predictive__search--box__inner">
				<h2 class="predictive__search--title">Search Products</h2>
				<form class="predictive__search--form" action="<?= base_url('user/lapak'); ?>">
					<label>
						<input class="predictive__search--input" name="keyword" placeholder="Search Here" type="text">
					</label>
					<button class="predictive__search--button" aria-label="search button" type="submit"><svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="30.51" height="25.443" viewBox="0 0 512 512">
							<path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
							<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
						</svg> </button>
				</form>
			</div>
			<button class="predictive__search--close__btn" aria-label="search close button" data-offcanvas>
				<svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51" height="30.443" viewBox="0 0 512 512">
					<path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368" />
				</svg>
			</button>
		</div>
		<!-- End serch box area -->

	</header>
	<!-- End header area -->

    <main class="main__content_wrapper">

        <!-- cart section start -->
        <section class="cart__section section--padding">
            <div class="container">
                <div class="cart__section--inner">
                    <form action="#"> 
                        <h2 class="cart__title mb-40">Keranjang</h2>
                        <div class="cart__table">
                            <table class="cart__table--inner">
                                <thead class="cart__table--header">
                                    <tr class="cart__table--header__items">
                                        <th class="cart__table--header__list">Nama Produk</th>
                                        <th class="cart__table--header__list">Harga</th>
                                    </tr>
                                </thead>
                                <tbody class="cart__table--body">
                                    <?php if (count($keranjang) > 0) : ?>
                                        <?php foreach ($keranjang as $data) : ?>
                                            <tr class="cart__table--body__items">
                                            <td class="cart__table--body__list">
                                                <div class="cart__product d-flex align-items-center">
                                                    <a href="<?= base_url(); ?>user/remove_from_cart?id_barang=<?= $data['id_barang'] ?>" class="cart__remove--btn" aria-label="search button" type="button">
                                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="16px" height="16px"><path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z"/></svg>
                                                    </a>
                                                    <div class="cart__thumbnail">
                                                        <a href="#"><img class="border-radius-5" src="<?= base_url('assets/sb-admin/img/') . $data['foto_barang']; ?>" 	alt="cart-product"></a>
                                                    </div>
                                                    <div class="cart__content">
                                                        <h4 class="cart__content--title"><a href="#" data-id-barang="<?= $data['id']; ?>" ><?= $data['nama_barang'] ?></a></h4>
                                                        <!--<span class="cart__content--variant">COLOR: Blue</span>-->
                                                        <!--<span class="cart__content--variant">WEIGHT: 2 Kg</span>-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <span class="cart__price"><?= $data['harga']; ?></span>
                                            </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr class="cart__table--body__items">
                                            <td colspan="2">
                                                <h5 class="my-5 text-center">Keranjang Kosong</h5>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <tr>
                                        <td colspan="2" class="cart__table--body__list text-right">
                                            <a class="quickview__cart--btn primary__btn" href="<?= base_url('user/pembayaran') ?>">Checkout</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table> 
                        </div> 
                    </form> 
                </div>
            </div>     
        </section>
        <!-- cart section end -->

    </main>

    <!-- Footer Start -->
	<section id="kontak">
	<div class="container-fluid bg-dark text-body footer mt-5 pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
		<div class="container py-5">
			<div class="row g-5">
				<div class="col-lg-2 col-md-6">
				</div>
				<div class="col-lg-3 col-md-6">
					<img class="img" src="<?= base_url(); ?>assets/home/img2/h.png" alt="">
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 class="text-light mb-4">Kontak</h3>
					<p class="text-light">Jln. Letkol S. Wardoyo No. 43-45 Lumajang.</p>
					<p class="text-light">Telp.0334-881606</p>
					<p class="text-light">diskopindag@lumajangkab.go.id</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 class="text-light mb-4">Jam Pelayanan</h3>
					<p class="text-light">Senin : 08.00 – 14.00 <br>
						Selasa : 08.00 – 14.00 <br>
						Rabu : 08.00 – 14.00 <br>
						Kamis : 08.00 – 14.00 <br>
						Jumat : 08.00 – 10.00</p>
				</div>
			</div>
		</div>
		<div class="container-fluid copyright">
			<div class="container">
				<div class="row">
					<div class="text-center text-md-start">
						&copy; <a href="#">Powered By Dinas Komunikasi dan Informatika Kabupaten Lumajang</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<!-- Footer End -->

    <!-- Quickview Wrapper -->
    <div class="modal" id="modal1" data-animation="slideInUp">
        <div class="modal-dialog quickview__main--wrapper">
            <header class="modal-header quickview__header">
                <button class="close-modal quickview__close--btn" aria-label="close modal" data-close>✕ </button>
            </header>
            <div class="quickview__inner">
                <div class="row row-cols-lg-2 row-cols-md-2">
                    <div class="col">
                        <div class="quickview__product--media product__details--media">
                            <div class="product__media--preview  swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="<?= base_url(); ?>assets/suruci/img/product/big-product1.jpg"><img class="product__media--preview__items--img" src="<?= base_url(); ?>assets/suruci/img/product/big-product1.jpg" alt="product-media-img"></a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox" href="<?= base_url(); ?>assets/suruci/img/product/big-product1.jpg" data-gallery="product-media-preview">
                                                    <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="<?= base_url(); ?>assets/suruci/img/product/big-product2.jpg"><img class="product__media--preview__items--img" src="<?= base_url(); ?>assets/suruci/img/product/big-product2.jpg" alt="product-media-img"></a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox" href="<?= base_url(); ?>assets/suruci/img/product/big-product2.jpg" data-gallery="product-media-preview">
                                                    <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="<?= base_url(); ?>assets/suruci/img/product/big-product3.jpg"><img class="product__media--preview__items--img" src="<?= base_url(); ?>assets/suruci/img/product/big-product3.jpg" alt="product-media-img"></a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox" href="<?= base_url(); ?>assets/suruci/img/product/big-product3.jpg" data-gallery="product-media-preview">
                                                    <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="<?= base_url(); ?>assets/suruci/img/product/big-product4.jpg"><img class="product__media--preview__items--img" src="<?= base_url(); ?>assets/suruci/img/product/big-product4.jpg" alt="product-media-img"></a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox" href="<?= base_url(); ?>assets/suruci/img/product/big-product4.jpg" data-gallery="product-media-preview">
                                                    <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="<?= base_url(); ?>assets/suruci/img/product/big-product5.jpg"><img class="product__media--preview__items--img" src="<?= base_url(); ?>assets/suruci/img/product/big-product5.jpg" alt="product-media-img"></a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox" href="<?= base_url(); ?>assets/suruci/img/product/big-product5.jpg" data-gallery="product-media-preview">
                                                    <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="<?= base_url(); ?>assets/suruci/img/product/big-product6.jpg"><img class="product__media--preview__items--img" src="<?= base_url(); ?>assets/suruci/img/product/big-product6.jpg" alt="product-media-img"></a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox" href="<?= base_url(); ?>assets/suruci/img/product/big-product6.jpg" data-gallery="product-media-preview">
                                                    <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__media--nav swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img" src="<?= base_url(); ?>assets/suruci/img/product/small-product7.png" alt="product-nav-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img" src="<?= base_url(); ?>assets/suruci/img/product/small-product8.png" alt="product-nav-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img" src="<?= base_url(); ?>assets/suruci/img/product/small-product9.png" alt="product-nav-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img" src="<?= base_url(); ?>assets/suruci/img/product/small-product10.png" alt="product-nav-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img" src="<?= base_url(); ?>assets/suruci/img/product/small-product11.png" alt="product-nav-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img" src="<?= base_url(); ?>assets/suruci/img/product/small-product12.png" alt="product-nav-img">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper__nav--btn swiper-button-next"></div>
                                <div class="swiper__nav--btn swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="quickview__info">
                            <form action="#">
                                <h2 class="product__details--info__title mb-15">Oversize Cotton Dress</h2>
                                <div class="product__details--info__price mb-10">
                                    <span class="current__price">$58.00</span>
                                    <span class="old__price">$68.00</span>
                                </div>
                                <div class="quickview__info--ratting d-flex align-items-center mb-10">
                                    <ul class="rating d-flex justify-content-center">
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>

                                    </ul>
                                    <span class="quickview__info--review__text">(5 reviews)</span>
                                </div>
                                <p class="product__details--info__desc mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit is. Deserunt totam dolores ea numquam labore! Illum magnam totam tenetur fuga quo dolor.</p>
                                <div class="product__variant">
                                    <div class="product__variant--list mb-10">
                                        <fieldset class="variant__input--fieldset">
                                            <legend class="product__variant--title mb-8">Color :</legend>
                                            <input id="color-red1" name="color" type="radio" checked>
                                            <label class="variant__color--value red" for="color-red1" title="Red"><img class="variant__color--value__img" src="<?= base_url(); ?>assets/suruci/img/product/product1.png" alt="variant-color-img"></label>
                                            <input id="color-red2" name="color" type="radio">
                                            <label class="variant__color--value red" for="color-red2" title="Black"><img class="variant__color--value__img" src="<?= base_url(); ?>assets/suruci/img/product/product2.png" alt="variant-color-img"></label>
                                            <input id="color-red3" name="color" type="radio">
                                            <label class="variant__color--value red" for="color-red3" title="Pink"><img class="variant__color--value__img" src="<?= base_url(); ?>assets/suruci/img/product/product3.png" alt="variant-color-img"></label>
                                            <input id="color-red4" name="color" type="radio">
                                            <label class="variant__color--value red" for="color-red4" title="Orange"><img class="variant__color--value__img" src="<?= base_url(); ?>assets/suruci/img/product/product4.png" alt="variant-color-img"></label>
                                        </fieldset>
                                    </div>
                                    <div class="product__variant--list mb-15">
                                        <fieldset class="variant__input--fieldset weight">
                                            <legend class="product__variant--title mb-8">Weight :</legend>
                                            <input id="weight1" name="weight" type="radio" checked>
                                            <label class="variant__size--value red" for="weight1">5 kg</label>
                                            <input id="weight2" name="weight" type="radio">
                                            <label class="variant__size--value red" for="weight2">3 kg</label>
                                            <input id="weight3" name="weight" type="radio">
                                            <label class="variant__size--value red" for="weight3">2 kg</label>
                                        </fieldset>
                                    </div>
                                    <div class="quickview__variant--list quantity d-flex align-items-center mb-15">
                                        <div class="quantity__box">
                                            <button type="button" class="quantity__value quickview__value--quantity decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                            <label>
                                                <input type="number" class="quantity__number quickview__value--number" value="1" data-counter/>
                                            </label>
                                            <button type="button" class="quantity__value quickview__value--quantity increase" aria-label="quantity value" value="Increase Value">+</button>
                                        </div>
                                        <button class="primary__btn quickview__cart--btn" type="submit">Checkout</button>  
                                    </div>
                                    <div class="quickview__variant--list variant__wishlist mb-15">
                                        <a class="variant__wishlist--icon" href="wishlist.html" title="Add to wishlist">
                                            <svg class="quickview__variant--wishlist__svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                            Add to Wishlist
                                        </a>
                                    </div>
                                </div>
                                <div class="quickview__social d-flex align-items-center">
                                    <label class="quickview__social--title">Social Share:</label>
                                    <ul class="quickview__social--wrapper mt-0 d-flex">
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank" href="https://www.facebook.com">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524" viewBox="0 0 7.667 16.524">
                                                    <path  data-name="Path 237" d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z" transform="translate(-960.13 -345.407)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank" href="https://twitter.com">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384" viewBox="0 0 16.489 13.384">
                                                    <path  data-name="Path 303" d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z" transform="translate(-951.23 -1140.849)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank" href="https://www.instagram.com">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.497" height="16.492" viewBox="0 0 19.497 19.492">
                                                    <path  data-name="Icon awesome-instagram" d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z" transform="translate(0.004 -1.492)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Instagram</span> 
                                            </a>
                                        </li>
                                        <li class="quickview__social--list">
                                            <a class="quickview__social--icon" target="_blank" href="https://www.youtube.com">
                                                <svg  xmlns="http://www.w3.org/2000/svg" width="16.49" height="11.582" viewBox="0 0 16.49 11.582">
                                                    <path  data-name="Path 321" d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z" transform="translate(-951.269 -1359.8)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quickview Wrapper End -->

    <!-- Scroll top bar -->
    <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button>

    
  <!-- All Script JS Plugins here  -->
  <script src="<?= base_url(); ?>assets/suruci/js/vendor/popper.js" defer="defer"></script>
  <script src="<?= base_url(); ?>assets/suruci/js/vendor/bootstrap.min.js" defer="defer"></script>
  <script src="<?= base_url(); ?>assets/suruci/js/plugins/swiper-bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets/suruci/js/plugins/glightbox.min.js"></script>

  <!-- Customscript js -->
  <script src="<?= base_url(); ?>assets/suruci/js/script.js"></script>
  <script>
      $('.quickview__cart--btn').on('click', function(event) {
          const id_barang = $(this).data('id-barang');
          $(".quickview__cart--btn").attr('href', "<?= base_url('user/pembayaran/') ?>" + id_barang);
      })
  </script>
  
</body>
</html>
