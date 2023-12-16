<!doctype html>
<html lang="zxx">

<head>
    <meta http-equiv="cache-control" content="no-cache, must-revalidate">
	<meta charset="utf-8">
	<title><?= $title; ?></title>
	<meta name="description" content="Morden Bootstrap HTML5 Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/home/lapak/suruchi/assets/img/favicon.ico"> -->

	<!-- ======= All CSS Plugins here ======== -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/home/lapak/suruchi/assets/css/plugins/swiper-bundle.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/home/lapak/suruchi/assets/css/plugins/glightbox.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<!-- Plugin css -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/home/lapak/suruchi/assets/css/vendor/bootstrap.min.css">

	<!-- Custom Style CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/home/lapak/suruchi/assets/css/style.css">

	<style>
		/* .product__media--preview  */
	</style>

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
						<h1 class="main__logo--title"><a class="main__logo--link" href="#"><h2 class="text-dark m-0"><img class="me-6">UMKMLUMAJANG</h2></a></h1>
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
								<a class="wishlist__cart--btn primary__btn" href="<?= base_url(); ?>auth/login">Login</a>
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

	
		<!-- Start banner section -->
		<!-- <section class="banner__section section--padding pt-0">
			<div class="container-fluid">
				<div class="row row-cols-1">
					<div class="col">
						<div class="banner__section--inner position__relative">
							<a class="banner__items--thumbnail display-block" href="shop.html"><img class="banner__items--thumbnail__img banner__img--height__md display-block" src="<?= base_url(); ?>assets/home/lapak/suruchi/assets/img/banner/a.jpg" alt="banner-img">
							</a>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- End banner section -->

		<!-- Start product section -->
		<section class="product__section section--padding pt-5" id="umkm">
			<div class="container-fluid">
				<div class="section__heading mb-35">
					<!--<h2 class="section__heading">Produk Yang Paling Diminati</h2>-->
				</div>
				<div class="tab_content">
					<!-- // SEARCHING -->
					<!-- <div class="col-md-6">
						<input type="text" name="keyword-produk" id="keyword-produk" class="form-control mb-5 p-3" placeholder="Cari Produk">
					</div> -->
					<div id="featured" class="tab_pane active show">
						<!-- // SEARCHING (id) -->
						<div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30" id="products-container">
							<?php foreach ($items as $dk): ?>
									<div class="col mb-30">
										<div class="product__items ">
											<div class="product__items--thumbnail">
														<a class="product__items--link" data-open="modal1"
															data-id-barang="<?= $dk['id']; ?>"
															data-nama-barang="<?= $dk['nama_barang']; ?>"
															data-harga="<?= $dk['harga']; ?>"
															data-foto-barang="<?= $dk['foto_barang']; ?>"
														data-galeri-1="<?= isset($dk['galeri'][0]['foto']) ? htmlspecialchars($dk['galeri'][0]['foto']) : ''; ?>"
															data-galeri-2="<?= isset($dk['galeri'][1]['foto']) ? htmlspecialchars($dk['galeri'][1]['foto']) : ''; ?>"
												 href="javascript:void(0)">
													<img style="height: 300px; object-fit: cover;" class="product__items--img product__primary--img" src="<?= base_url('assets/sb-admin/img/') . $dk['foto_barang']; ?>" alt="product-img">
													<img style="height: 300px; object-fit: cover;" class="product__items--img product__secondary--img" src="<?= base_url('assets/sb-admin/img/') . $dk['foto_barang']; ?>" alt="product-img">
												</a>
												<div class="product__badge">
													<span class="product__badge--items sale">Sale</span>
												</div>
											</div>
											<div class="product__items--content">
												<span class="product__items--content__subtitle"><?= $dk['nama_barang']; ?></span>
												<div class="product__items--price">
													<?= !empty($dk['harga']) ? '<span>' . $dk['harga'] . '</span>' : '-' ?>
												</div>
												<ul class="product__items--action d-flex">
													<li class="product__items--action__list">
														<a class="product__items--action__btn add__to--cart" href="<?= base_url(); ?>user/list_produk">
															<svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
																<g transform="translate(0 0)">
																	<g>
																		<path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
																		<path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
																		<path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
																	</g>
																</g>
															</svg>
														</a>
													</li>

													<?php
													if (isset($dk['galeri'][0]['foto'])) {
														// Offset 0 exists in the $dk['galeri'] array
														// var_dump($dk['galeri'][0]['foto']);
													} else {
														// Offset 0 does not exist in the $dk['galeri'] array
														// echo "Offset 0 does not exist.";
													}
													?>
													<li class="product__items--action__list">
														<a class="product__items--action__btn" target="_blank" data-open="modal1" href="<?= $dk['alamat'];?>">
															<svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" height="1em" width="25.51" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
																<path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
															</svg>
														</a>
													</li>
													<li class="product__items--action__list">
														<a target="_blank?timestamp=<?php echo time(); ?>" class="product__items--action__btn" data-open="modal1" href="https://wa.me/<?= $dk['wa']; ?>">
															<svg xmlns="http://www.w3.org/2000/svg" height="1em" width="25.51" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
																<path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
															</svg>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
			</div>
		</section>
		<!-- End product section -->
	</main>

	<!-- Start footer section -->
<footer class="footer_section" style="background-color: black;">
	<div class="container-fluid">
		<div class="main__footer d-flex justify-content-between">
			<div class="footer_widget--menuwrapper d-flex footer_widget--width">
			</div>
			<div class="footer_widget footer_widget--width">
				<img class="img" src="<?= base_url(); ?>assets/home/img2/h.png" alt="">
			</div>
			<div class="footer_widget--menuwrapper d-flex footer_widget--width">
				<div class="footer__widget">
					<h2 class="footer__widget--title text-ofwhite h2">Kontak
						<button class="footer__widget--button" aria-label="footer widget button">
							<svg class="footer_widget--title_arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
								<path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
							</svg>
						</button>
					</h2>
					<ul class="footer_widget--menu footer_widget--inner">
						<li class="footer__widget--desc text-ofwhite mb-20">Jln. Letkol S. Wardoyo No. 43-45 Lumajang.</li>
						<li class="footer__widget--desc text-ofwhite mb-20">Telp.0334-881606</li>
						<li class="footer__widget--desc text-ofwhite mb-20">diskopindag@lumajangkab.go.id</li>
					</ul>
				</div>
			</div>
			<div class="footer_widget--menuwrapper d-flex footer_widget--width">
				<div class="footer__widget">
					<h2 class="footer__widget--title text-ofwhite h2">Jam Pelayanan
						<button class="footer__widget--button" aria-label="footer widget button">
							<svg class="footer_widget--title_arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
								<path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
							</svg>
						</button>
					</h2>
					<ul class="footer_widget--menu footer_widget--inner">
						<li class="footer__widget--desc text-ofwhite mb-20">Senin : 08.00 – 14.00</li>
						<li class="footer__widget--desc text-ofwhite mb-20">Selasa : 08.00 – 14.00</li>
						<li class="footer__widget--desc text-ofwhite mb-20">Rabu : 08.00 – 14.00</li>
						<li class="footer__widget--desc text-ofwhite mb-20">Kamis : 08.00 – 14.00</li>
						<li class="footer__widget--desc text-ofwhite mb-20">Jumat : 08.00 – 10.00</li>
					</ul>
				</div>
			</div>
			<div class="footer_widget--menuwrapper d-flex footer_widget--width">
			</div>
		</div>
		<div class="footer__bottom d-flex justify-content-between align-items-center">
			<p class="copyright_content text-ofwhite m-0">Copyright © 2023 <a class="copyright_content--link" href="index.html"></a> . Powered By Dinas Komunikasi dan Informatika Kabupaten Lumajang</p>
		</div>
	</div>
</footer>
	<!-- End footer section -->

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
							<div class="product__media--preview swiper">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="product__media--preview__items">
											<!--<a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href=""><img class="product__media--preview__items--img" alt="product-media-img"></a>-->
											<img class="foto_barang product__media--preview__items--img" src="<?= base_url();?>assets/suruci/img/product/big-product5.jpg" alt="product-media-img">
											<div class="product__media--view__icon">
												<a class="product__media--view__icon--link glightbox" href="" data-gallery="product-media-preview">
													<svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512">
														<path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path>
														<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path>
													</svg>
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
											<img class="galeri_1 product__media--nav__items--img" src="<?= base_url(); ?>assets/home/lapak/suruchi/assets/img/product/small-product7.png" alt="product-nav-img">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="product__media--nav__items">
											<img class="galeri_2 product__media--nav__items--img" src="<?= base_url(); ?>assets/home/lapak/suruchi/assets/img/product/small-product7.png" alt="product-nav-img">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="product__media--nav__items">
											<img class="galeri_3 product__media--nav__items--img" src="<?= base_url(); ?>assets/home/lapak/suruchi/assets/img/product/small-product7.png" alt="product-nav-img">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="product__media--nav__items">
											<img class="galeri_4 product__media--nav__items--img" src="<?= base_url(); ?>assets/home/lapak/suruchi/assets/img/product/small-product7.png" alt="product-nav-img">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="product__media--nav__items">
											<img class="galeri_5 product__media--nav__items--img" src="<?= base_url(); ?>assets/home/lapak/suruchi/assets/img/product/small-product7.png" alt="product-nav-img">
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
								<h2 class="product__details--info__title mb-15"></h2>
								<div class="product__details--info__price mb-10"></div>
								<p class="product__details--info__desc mb-15"></p>
								<div class="product__variant">
									<div class="quickview__variant--list quantity d-flex align-items-center mb-15">
										<a class="primary__btn quickview__cart--btn" href="#">Checkout</a>
									</div>
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
	<button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
			<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292" />
		</svg></button>

	<!-- All Script JS Plugins here  -->
	<script src="<?= base_url(); ?>assets/home/lapak/suruchi/assets/js/vendor/popper.js" defer="defer"></script>
	<script src="<?= base_url(); ?>assets/home/lapak/suruchi/assets/js/vendor/bootstrap.min.js" defer="defer"></script>
	<script src="<?= base_url(); ?>assets/sb-admin/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url(); ?>assets/home/lapak/suruchi/assets/js/plugins/swiper-bundle.min.js"></script>
	<script src="<?= base_url(); ?>assets/home/lapak/suruchi/assets/js/plugins/glightbox.min.js"></script>

	<!-- Customscript js -->
	<script src="<?= base_url(); ?>assets/home/lapak/suruchi/assets/js/script.js"></script>
	<script>
		$('.product__items--link').on('click', function(event) {
			const id_barang = $(this).data('id-barang');
			const nama_barang = $(this).data('nama-barang');
			const harga = $(this).data('harga');
			const foto_barang = $(this).data('foto-barang');
			const galeri_1 = $(this).data('galeri-1');
			const galeri_2 = $(this).data('galeri-2');
			$(".product__details--info__title").text(nama_barang);
			$(".product__details--info__desc").text(harga);
			$(".quickview__cart--btn").attr('href', "<?= base_url('user/pembayaran/') ?>" + id_barang);
			$(".product__media--preview__items--img").attr('src', '<?= base_url('assets/sb-admin/img/') ?>' + foto_barang);
			$(".galeri_1").attr('src', galeri_1 !== '' ? '<?= base_url('assets/sb-admin/img/') ?>' + galeri_1 : '<?= base_url('assets/home/lapak/suruchi/assets/img/product/small-product7.png') ?>');
			$(".galeri_2").attr('src', galeri_2 !== '' ? '<?= base_url('assets/sb-admin/img/') ?>' + galeri_2 : '<?= base_url('assets/home/lapak/suruchi/assets/img/product/small-product7.png') ?>');
		})

		$('.product__media--nav__items').on('click', 'img', function() {
			const imgSrc = $(this).attr('src');
			$('.product__media--preview__items--img').attr('src', imgSrc);
		});

		
	</script>

</body>

</html>
