<!-- Start footer section -->
<footer class="footer_section" style="background-color: black;">
	<div class="container-fluid">
		<div class="main__footer d-flex justify-content-between">
			<div class="footer_widget--menuwrapper d-flex footer_widget--width">
			</div>
			<div class="footer_widget footer_widget--width">
				<img class="img" src="<?= base_url();?>assets/home/img2/h.png" alt="">
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

<!-- Scroll top bar -->
<button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292" />
        </svg></button>

    <!-- All Script JS Plugins here  -->
    <script src="<?= base_url(); ?>assets/home/lapak/suruchi/assets/js/vendor/popper.js" defer="defer"></script>
    <script src="<?= base_url(); ?>assets/home/lapak/suruchi/assets/js/vendor/bootstrap.min.js" defer="defer"></script>
    <script src="<?= base_url(); ?>assets/sb-admin/vendor/jquery/jquery.slim.js"></script>
    <script src="<?= base_url(); ?>assets/home/lapak/suruchi/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/home/lapak/suruchi/assets/js/plugins/glightbox.min.js"></script>

    <!-- Customscript js -->
    <script src="<?= base_url(); ?>assets/home/lapak/suruchi/assets/js/script.js"></script>
    <script>
        $('.product__items--action__btn').on('click', function(event) {
            var nama_barang = $(this).data('nama-barang');
            var foto_barang = $(this).data('foto-barang');
            var harga = $(this).data('harga');
            var galeri_1 = $(this).data('galeri-1');
            var galeri_2 = $(this).data('galeri-2');
            $(".nama_barang").text(nama_barang);
            $(".foto_barang").text(foto_barang);
            $(".harga").text('Rp. ' + harga);
            $(".foto_barang").attr('src', '<?= base_url('') ?>' + foto_barang);
            $(".galeri_1").attr('src', '<?= base_url('assets/sb-admin/img/') ?>' + galeri_1);
            $(".galeri_2").attr('src', '<?= base_url('assets/sb-admin/img/') ?>' + galeri_2);
        })

        $('.product__media--nav__items').on('click', 'img', function() {
            var imgSrc = $(this).attr('src'); // Get the clicked image source
            $('.product__media--preview__items--img').attr('src', imgSrc); // Set the main image source
        });

        function search() {
            // var nama_barang = 
            // Mendapatkan nilai dari input
            var searchText = document.getElementById('searchInput').value.toLowerCase();
            
            // Mendapatkan daftar elemen yang akan dicari
            var list = document.getElementById('resultList');
            var items = list.getElementsByTagName('nama_barang');

            // Loop melalui setiap elemen dan sembunyikan yang tidak cocok dengan kata kunci
            for (var i = 0; i < items.length; i++) {
                var itemName = items[i].innerText.toLowerCase();
                if (itemName.indexOf(searchText) > -1) {
                    items[i].style.display = '';
                } else {
                    items[i].style.display = 'none';
                }
            }
        }

        // function hapusData(element) {
        //     var confirmation = confirm("Anda yakin ingin menghapus item ini?");

        //     if(confirmation) {
        //         var tr = element.parentNode;
        //         var td = tr.parentNode;
        //         td.removeChild(tr);
        //     }
        // }

    </script>

</body>

</html>