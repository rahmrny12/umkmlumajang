<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>UMKM LUMAJANG</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicon -->
	<link href="<?= base_url(); ?>assets/home/img2/favicon.ico" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap"
		rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="<?= base_url(); ?>assets/home/lib2/animate/animate.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/home/lib2/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/home/lib2/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
		rel="stylesheet" />

	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?= base_url(); ?>assets/home/css2/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="<?= base_url(); ?>assets/home/css2/style.css" rel="stylesheet">

	<style>
		.chat_box .chat_message_wrapper ul.chat_message>li+li {
			margin-top: 4px;
		}

		.popup-box-on {
			display: block !important;
		}

		a:focus {
			outline: none;
			outline-offset: 0px;
		}

		.popup-head-left.pull-left h1 {
			color: #fff;
			float: left;
			font-family: oswald;
			font-size: 18px;
			margin: 2px 0 0 5px;

		}

		.popup-head-left a small {
			display: table;
			font-size: 11px;
			color: #fff;
			line-height: 4px;
			opacity: 0.5;
			padding: 0 0 0 7px;
		}

		.chat-header-button {
			background: transparent none repeat scroll 0 0;
			border: 1px solid #fff;
			border-radius: 7px;
			font-size: 15px;
			height: 26px;
			opacity: 0.9;
			padding: 0;
			text-align: center;
			width: 26px;
		}

		.popup-head-right {
			margin: 9px 0 0;
		}

		.popup-head .btn-group {
			margin: -5px 3px 0 -1px;
		}

		.gurdeepoushan .dropdown-menu {
			padding: 6px;
		}

		.gurdeepoushan .dropdown-menu li a span {
			border: 1px solid;
			border-radius: 50px;
			display: list-item;
			font-size: 19px;
			height: 40px;
			line-height: 36px;
			margin: auto;
			text-align: center;
			width: 40px;
		}

		.gurdeepoushan .dropdown-menu li {
			float: left;
			text-align: center;
			width: 33%;
		}

		.gurdeepoushan .dropdown-menu li a {
			border-radius: 7px;
			font-family: oswald;
			padding: 3px;
			transition: all 0.3s ease-in-out 0s;
		}

		.gurdeepoushan .dropdown-menu li a:hover {
			background: #304445 none repeat scroll 0 0 !important;
			color: #fff;
		}

		.popup-head {
			background: #304445 none repeat scroll 0 0 !important;
			border-bottom: 3px solid #ccc;
			color: #fff;
			display: table;
			width: 100%;
			padding: 8px;
		}

		.popup-head .md-user-image {
			border: 2px solid #5a7172;
			border-radius: 12px;
			float: left;
			width: 44px;
		}

		.uk-input-group-addon .glyphicon.glyphicon-send {
			color: #ffffff;
			font-size: 21px;
			line-height: 36px;
			padding: 0 6px;
		}

		.chat_box_wrapper.chat_box_small.chat_box_active {

			height: 342px;
			overflow-y: scroll;
			width: 316px;
		}

		.chat_sidebar {
			z-index: 9999;
			background-attachment: fixed;
			background-clip: border-box;
			background-color: rgba(0, 0, 0, 0);
			background-image: url("https://z-1-scontent-cdg2-1.xx.fbcdn.net/hphotos-xpt1/v/t1.0-9/12670232_624826600991767_3547881030871377118_n.jpg?oh=b4541268dfcdc6c8b2758066dba9c0c7&oe=572DDCE7");
			background-origin: padding-box;
			background-position: center top;
			background-repeat: repeat;
			border: 1px solid #304445;
			bottom: 0;
			height: 460px;
			position: fixed;
			right: 70px;
			bottom: 85px;
			width: 318px;
			font-family: 'Open Sans', sans-serif;
		}

		.chat_box {
			padding: 16px;
		}

		.chat_box .chat_message_wrapper::after {
			clear: both;
		}

		.chat_box .chat_message_wrapper::after,
		.chat_box .chat_message_wrapper::before {
			content: " ";
			display: table;
		}

		.chat_box .chat_message_wrapper .chat_user_avatar {
			float: left;
		}

		.chat_box .chat_message_wrapper {
			margin-bottom: 32px;
		}

		.md-user-image {
			border-radius: 50%;
			width: 34px;
		}

		img {
			border: 0 none;
			box-sizing: border-box;
			height: auto;
			max-width: 100%;
			vertical-align: middle;
		}

		.chat_box .chat_message_wrapper ul.chat_message,
		.chat_box .chat_message_wrapper ul.chat_message>li {
			list-style: outside none none;
			padding: 0;
		}

		.chat_box .chat_message_wrapper ul.chat_message {
			float: left;
			margin: 0 0 0 20px;
			max-width: 77%;
		}

		.chat_box.chat_box_colors_a .chat_message_wrapper ul.chat_message>li:first-child::before {
			border-right-color: #616161;
		}

		.chat_box .chat_message_wrapper ul.chat_message>li:first-child::before {
			border-color: transparent #ededed transparent transparent;
			border-style: solid;
			border-width: 0 16px 16px 0;
			content: "";
			height: 0;
			left: -14px;
			position: absolute;
			top: 0;
			width: 0;
		}

		.chat_box.chat_box_colors_a .chat_message_wrapper ul.chat_message>li {
			background: #FCFBF6 none repeat scroll 0 0;
			color: #000000;
		}

		.open-btn {
			border: 2px solid #189d0e;
			border-radius: 32px;
			color: #189d0e !important;
			display: inline-block;
			margin: 10px 0 0;
			padding: 9px 16px;
			text-decoration: none !important;
			text-transform: uppercase;
		}

		.chat_box .chat_message_wrapper ul.chat_message>li {
			background: #ededed none repeat scroll 0 0;
			border-radius: 4px;
			clear: both;
			color: #212121;
			display: block;
			float: left;
			font-size: 13px;
			padding: 8px 16px;
			position: relative;
			word-break: break-all;
		}

		.chat_box .chat_message_wrapper ul.chat_message,
		.chat_box .chat_message_wrapper ul.chat_message>li {
			list-style: outside none none;
			padding: 0;
		}

		.chat_box .chat_message_wrapper ul.chat_message>li {
			margin: 0;
		}

		.chat_box .chat_message_wrapper ul.chat_message>li p {
			margin: 0;
		}

		.chat_box.chat_box_colors_a .chat_message_wrapper ul.chat_message>li .chat_message_time {
			color: rgba(185, 186, 180, 0.9);
		}

		.chat_box .chat_message_wrapper ul.chat_message>li .chat_message_time {
			color: #727272;
			display: block;
			font-size: 11px;
			padding-top: 2px;
			text-transform: uppercase;
		}

		.chat_box .chat_message_wrapper.chat_message_right .chat_user_avatar {
			float: right;
		}

		.chat_box .chat_message_wrapper.chat_message_right ul.chat_message {
			float: right;
			margin-left: 0 !important;
			margin-right: 24px !important;
		}

		.chat_box.chat_box_colors_a .chat_message_wrapper.chat_message_right ul.chat_message>li:first-child::before {
			border-left-color: #E8FFD4;
		}

		.chat_box.chat_box_colors_a .chat_message_wrapper ul.chat_message>li:first-child::before {
			border-right-color: #FCFBF6;
		}

		.chat_box .chat_message_wrapper.chat_message_right ul.chat_message>li:first-child::before {
			border-color: transparent transparent transparent #ededed;
			border-width: 0 0 29px 29px;
			left: auto;
			right: -14px;
		}

		.chat_box .chat_message_wrapper ul.chat_message>li:first-child::before {
			border-color: transparent #ededed transparent transparent;
			border-style: solid;
			border-width: 0 29px 29px 0;
			content: "";
			height: 0;
			left: -14px;
			position: absolute;
			top: 0;
			width: 0;
		}

		.chat_box.chat_box_colors_a .chat_message_wrapper.chat_message_right ul.chat_message>li {
			background: #E8FFD4 none repeat scroll 0 0;
		}

		.chat_box .chat_message_wrapper ul.chat_message>li {
			background: #ededed none repeat scroll 0 0;
			border-radius: 12px;
			clear: both;
			color: #212121;
			display: block;
			float: left;
			font-size: 13px;
			padding: 8px 16px;
			position: relative;
		}

		.gurdeep-chat-box {
			background: #fff none repeat scroll 0 0;
			border-radius: 5px;
			float: left;
			padding: 3px;
		}

		#submit_message {
			background: transparent none repeat scroll 0 0;
			border: medium none;
			padding: 4px;
		}

		.gurdeep-chat-box i {
			color: #333;
			font-size: 21px;
			line-height: 1px;
		}

		.chat_submit_box {
			bottom: 0;
			box-sizing: border-box;
			left: 0;
			overflow: hidden;
			padding: 10px;
			position: absolute;
			width: 100%;
		}

		.chatbox_btn {
			bottom: 0;
			box-sizing: border-box;
			left: 0;
			overflow: hidden;
			padding: 10px;
			position: absolute;
			width: 100%;
		}

		.uk-input-group {
			border-collapse: separate;
			display: table;
			position: relative;
		}
	</style>

</head>

<body>

	<!-- Navbar Start -->
	<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-4 wow fadeIn"
		data-wow-delay="0.1s">
		<a href="#home" class="navbar-brand ms-4 ms-lg-0">
			<h2 class="text-dark m-0"><img class="me-6">UMKMLUMAJANG</h2>
		</a>
		<button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="navbar-nav ms-auto p-4 p-lg-0">
				<a href="#home" class="nav-item nav-link ">Home</a>
				<a href="#pengumuman" class="nav-item nav-link">Pengumuman</a>
				<a href="#fasilitas" class="nav-item nav-link">Fasilitas</a>
				<a href="#lokasi" class="nav-item nav-link">Lokasi</a>
				<a href="#kontak" class="nav-item nav-link">Kontak Kami</a>
			</div>
		</div>
		<a href="<?= base_url(); ?>auth/login" class="btn btn-outline-info py-2 px-3">Login</a>
	</nav>
	<!-- Navbar End -->

	<!-- Carousel Start -->
	<div class="container-fluid p-0 pb-0 wow fadeIn">
		<div class="owl-carousel header-carousel position-relative">
			<div>
				<img class="img-fluid" src="<?= base_url(); ?>assets/home/img2/home1.jpg" alt="">
				<div class="owl-carousel-inner">
					<div class="container">
						<div class="row ">
							<div class="col-12 col-lg-8">
								<h1 class="display-1 text-white animated slideInDown">LUMAJANG TULEN</h1>
								<p class="fs-4 fw-medium text-white mb-1 pb-3">Portal Informasi Terpadu <br> Dinas
									Koperasi Usaha Kecil dan Menengah
									<br>Kabupaten Lumajang, Jawa Timur.
								</p>
								<a href="<?= base_url(); ?>auth/registration"
									class="btn btn-info py-2 px-5 animated slideInLeft"
									style="border-radius: 10px;">Ayo, Daftar Sekarang</a> &nbsp;
								<a href="<?= base_url(); ?>user/lapak" target="_blank"
									class="btn btn-light py-2 px-5 animated slideInLeft"
									style="border-radius: 10px;">Lapak UMKM</a> &nbsp;
								<a href="https://lumajangvirtualtour.my.id/" target="_blank"
									class="btn btn-warning py-2 px-5 animated slideInLeft"
									style="border-radius: 10px;">Virtual Tour</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<img class="img-fluid owl-carousel header-carousel position-relative"
			src="<?= base_url(); ?>assets/home/img2/home3.jpg" alt="">
	</div>
	<!-- Carousel End -->


	<!-- Service Start -->
	<section id="pengumuman">
    <div class="container-fluid py-5" style="background-color: aquamarine;">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-5 mb-4">Pengumuman</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex position-relative text-center h-100 ">
                        <div class="service-text p-5 bg-success">
                            <img class="img-fluid" src="<?= base_url(); ?>assets/suruci/img/berita2.png" alt="Icon" style="border-radius: 10px; height: 325px; width: 325px">
                            <p class="mb-4 text-white">Pelayanan Tera/ Tera Ulang (Bebas Retribusi)</p>
                            <a class="btn" target="_blank" href="https://diskopindag.lumajangkab.go.id/pengumuman/detail/aGo%3D"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <div class="service-text p-5 bg-success">
                            <img class="img-fluid" src="<?= base_url(); ?>assets/suruci/img/berita1.jpeg" alt="Icon" style="border-radius: 10px; height: 325px; width: 325px">
                            <p class="mb-4 text-white">Operasi Pasar dalam rangka menyambut Hari Jadi Kabupaten Lumajang ke 768</p>
                            <a class="btn" target="_blank" href="https://diskopindag.lumajangkab.go.id/pengumuman/detail/aGs%3D"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <div class="service-text p-5 bg-success">
                            <img class="img-fluid" src="<?= base_url(); ?>assets/suruci/img/berita3.jpeg" alt="Icon" style="border-radius: 10px; height: 325px; width: 325px">
                            <p class="mb-4 text-white">Operasi Pasar dalam rangka menyambut Hari Jadi Kabupaten Lumajang ke 768</p>
                            <a class="btn" target="_blank" href="https://diskopindag.lumajangkab.go.id/pengumuman/detail/bA%3D%3D"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- Service End -->
	<br>
	<br>
	<br>
	<section id="lokasi">
    	<div class="text-center mx-auto mb-3 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
    		<h1 class="display-5 mb-4">Lokasi Pusat Lumajang</h1>
    	</div>
    	<div class="d-flex justify-content-center">
    		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1911.2391238751159!2d113.22493169957556!3d-8.135474967590872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd667c815555555%3A0x5aec0923509a05f3!2sAlun%20-%20Alun%20Lumajang!5e0!3m2!1sid!2sid!4v1701303577330!5m2!1sid!2sid" class="col-md-11" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    	</div>
	</section>
	<br>
	<br>
	<br>
	<!-- Service Start -->
	<section id="fasilitas">
	<div class="container-fluid py-5" style="background-color: orange;">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-5 mb-4">Fasilitas dan Bantuan</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex position-relative text-center h-100 ">
                        <div class="service-text p-5 bg-primary">
                            <img class="img-fluid" src="<?= base_url(); ?>assets/home/img/haki.png" alt="Icon" style="border-radius: 10px; height: 325px; width: 325px">
                            <p class="mb-4 text-white">Rekomendasi HAKI 2023 <br> 1 November 2023 - 31 Desember 2023</p>
                            <a class="btn" target="_blank" href="#"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <div class="service-text p-5 bg-primary">
                            <img class="img-fluid" src="<?= base_url(); ?>assets/home/img/pendaftar.png" alt="Icon" style="border-radius: 10px; height: 325px; width: 325px">
                            <p class="mb-4 text-white">Operasi Pasar dalam rangka menyambut Hari Jadi Kabupaten Lumajang ke 768</p>
                            <a class="btn" target="_blank" href="#"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <div class="service-text p-5 bg-primary">
                            <img class="img-fluid" src="<?= base_url(); ?>assets/home/img/bio.png" alt="Icon" style="border-radius: 10px; height: 325px; width: 325px">
                            <p class="mb-4 text-white">Operasi Pasar dalam rangka menyambut Hari Jadi Kabupaten Lumajang ke 768</p>
                            <a class="btn" target="_blank" href="#"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
	<!-- Service End -->


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

	<div class="chat_sidebar" id="chat-sidebar">
		<div class="popup-head">
			<div class="popup-head-left pull-left d-flex justify-content-between align-items-center">
				<a Design and Developmenta title="Gurdeep Osahan (Web Designer)"
					target="_blank" href="https://web.facebook.com/iamgurdeeposahan">
					<img class="md-user-image" alt="Gurdeep Osahan (Web Designer)"
						title="Gurdeep Osahan (Web Designer)"
						src="https://bootdey.com/img/Content/avatar/avatar1.png"
						title="Gurdeep Osahan (Web Designer)" alt="Gurdeep Osahan (Web Designer)">
					<h1>Gurdeep Osahan</h1><small><br> <span class="glyphicon glyphicon-briefcase"
							aria-hidden="true">
				</a>
				<a href="#" onclick="chat()">
					<i class="bi bi-arrow-down-square-fill text-white fs-4"></i>
				</a>
			</div>
		</div>

		<div id="chat" class="chat_box_wrapper chat_box_small chat_box_active bg-primary"
			style="opacity: 1; display: block; transform: translateX(0px);">
			<div class="chat_box touchscroll chat_box_colors_a">
				<div class="chat_message_wrapper">
					<div class="chat_user_avatar">
						<a href="https://web.facebook.com/iamgurdeeposahan" target="_blank">
							<img alt="Gurdeep Osahan (Web Designer)" title="Gurdeep Osahan (Web Designer)"
								src="https://bootdey.com/img/Content/avatar/avatar1.png" class="md-user-image">
						</a>
					</div>
					<ul class="chat_message">
						<li>
							<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, eum? </p>
						</li>
						<li>
							<p> Lorem ipsum dolor sit amet.<span class="chat_message_time">13:38</span> </p>
						</li>
					</ul>
				</div>
				<div class="chat_message_wrapper chat_message_right">
					<div class="chat_user_avatar">
						<a href="https://web.facebook.com/iamgurdeeposahan" target="_blank">
							<img alt="Gurdeep Osahan (Web Designer)" title="Gurdeep Osahan (Web Designer)"
								src="https://bootdey.com/img/Content/avatar/avatar1.png" class="md-user-image">
						</a>
					</div>
					<ul class="chat_message">
						<li>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem delectus
								distinctio
								dolor earum est hic id impedit ipsum minima mollitia natus nulla perspiciatis
								quae
								quasi, quis recusandae, saepe, sunt totam.
								<span class="chat_message_time">13:34</span>
							</p>
						</li>
					</ul>
				</div>
				<div class="chat_message_wrapper">
					<div class="chat_user_avatar">
						<a href="https://web.facebook.com/iamgurdeeposahan" target="_blank">
							<img alt="Gurdeep Osahan (Web Designer)" title="Gurdeep Osahan (Web Designer)"
								src="https://bootdey.com/img/Content/avatar/avatar1.png" class="md-user-image">
						</a>
					</div>
					<ul class="chat_message">
						<li>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque ea mollitia
								pariatur
								porro quae sed sequi sint tenetur ut
								veritatis.https://www.facebook.com/iamgurdeeposahan
								<span class="chat_message_time">23 Jun 1:10am</span>
							</p>
						</li>
					</ul>
				</div>
				<div class="chat_message_wrapper chat_message_right">
					<div class="chat_user_avatar">
						<a href="https://web.facebook.com/iamgurdeeposahan" target="_blank">
							<img alt="Gurdeep Osahan (Web Designer)" title="Gurdeep Osahan (Web Designer)"
								src="https://bootdey.com/img/Content/avatar/avatar1.png" class="md-user-image">
						</a>
					</div>
					<ul class="chat_message">
						<li>
							<p> Lorem ipsum dolor sit amet, consectetur. </p>
						</li>
						<li>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								<span class="chat_message_time">Friday 13:34</span>
							</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="chat_submit_box bg-secondary">
			<div class="row px-4">
				<div class="col-md-10 gurdeep-chat-box">
					<span style="vertical-align: sub;" class="uk-input-group-addon">
						<a href="#"><i class="fa fa-smile-o"></i></a>
					</span>
					<input type="text" placeholder="Type a message" id="submit_message" name="submit_message"
						class="md-input">
				</div>

				<span class="col-md-2 uk-input-group-addon">
					<a href="#"><i class="glyphicon glyphicon-send">
							<i class="fa fa-paper-plane"></i>
						</i></a>
				</span>
			</div>
		</div>
	</div>
	<a href="javascript:void(0)" class="btn btn-lg btn-primary btn-lg-square chat-btn" onclick="chat()"><i class="bi bi-chat-dots"></i></a>

	<!-- Back to Top -->
	<!-- <div class="card col-4"> -->
	<!-- <div class="card-body"> -->
	<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
	<!-- </div> -->
	<!-- </div> -->


	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url(); ?>assets/home/lib2/wow/wow.min.js"></script>
	<script src="<?= base_url(); ?>assets/home/lib2/easing/easing.min.js"></script>
	<script src="<?= base_url(); ?>assets/home/lib2/waypoints/waypoints.min.js"></script>
	<script src="<?= base_url(); ?>assets/home/lib2/counterup/counterup.min.js"></script>
	<script src="<?= base_url(); ?>assets/home/lib2/owlcarousel/owl.carousel.min.js"></script>
	<script src="<?= base_url(); ?>assets/home/lib2/tempusdominus/js/moment.min.js"></script>
	<script src="<?= base_url(); ?>assets/home/lib2/tempusdominus/js/moment-timezone.min.js"></script>
	<script src="<?= base_url(); ?>assets/home/lib2/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

	<!-- Template Javascript -->
	<script src="<?= base_url(); ?>assets/home/js2/main.js"></script>

	<script>
		function chat() {
			var element = document.getElementById("chat-sidebar");
			element.classList.toggle("d-none");
		}
	</script>
</body>

</html>

