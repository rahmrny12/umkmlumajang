<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pembayaran</title>
    <meta name="description" content="Morden Bootstrap HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link href="<?= base_url(); ?>assets/suruci/img/favicon.ico" rel="icon">-->

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/suruci/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/suruci/css/plugins/glightbox.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Plugin css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/suruci/css/vendor/bootstrap.min.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/suruci/css/style.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">

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

    <!-- Start checkout page area -->
    <div class="checkout__page--area">
        <div class="container">
            <br>
            <br>
            <div class="checkout__page--inner d-flex">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <header class="main_header checkout_mian--header mb-30">
                        <h2 class="main_logo--title">UMKMLUMAJANG</h2>
                    </header>
                    <main class="main__content_wrapper">
                        <br>
                        <div style="text-align: center; margin-bottom: 40px;">
                            <h3>Bukti Transaksi</h3>
                            <label>No. Transaksi:
                                <?= $pembayaran->no_transaksi ?>
                            </label>
                        </div>
                        <form action="#">
                            <table class="cart__table--inner">
                                <tbody class="cart__table--body">
                                    <?php foreach ($itemProduk as $produk): ?>
                                        <tr class="cart_table--body_items">
                                            <td class="cart_table--body_list col-lg-2">
                                                <div class="product__image two  d-flex align-items-center">
                                                    <div class="product__thumbnail border-radius-5">
                                                        <a href="product-details.html"><img class="border-radius-5"
                                                                src="<?= base_url('assets/sb-admin/img/') . $produk->foto_barang; ?>"
                                                                alt="cart-product"></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart_table--body_list">
                                                <span class="cart__price">
                                                    <table>
                                                        <tbody class="cart__table--body">
                                                            <tr class="cart_table--body_items">
                                                                <td class="cart_table--body_list">
                                                                    <div>
                                                                        <h1 class="product__description--name"><a
                                                                                href="produkdetail.php">Nama Barang
                                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                :
                                                                                <?= $produk->nama_barang ?>
                                                                            </a></h1>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="cart_table--body_items">
                                                                <td class="cart_table--body_list">
                                                                    <div>
                                                                        <h1 class="product__description--name"><a
                                                                                href="produkdetail.php">Harga Barang
                                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                :
                                                                                <?= $produk->harga ?>,-
                                                                            </a></h1>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <!-- <tr class="cart_table--body_items">
                                                            <td class="cart_table--body_list">
                                                                <h3 class="product__description--name"><a href="produkdetail.php">Jumlah Pembayaran&nbsp;&nbsp;: Rp. 1.000,-</a></h3>
                                                            </td>
                                                        </tr>
                                                        <tr class="cart_table--body_items">
                                                            <td class="cart_table--body_list">
                                                                <h3 class="product__description--name"><a href="produkdetail.php">Biaya total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Rp. 150.000,-</a></h3>
                                                            </td>
                                                        </tr> -->
                                                        </tbody>
                                                    </table>
                                                </span>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </form>
                    </main>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- End checkout page area -->

    <!-- Scroll top bar -->
    <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48"
                d="M112 244l144-144 144 144M256 120v292" />
        </svg></button>

    <!-- All Script JS Plugins here  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/suruci/js/vendor/popper.js" defer="defer"></script>
    <script src="<?= base_url(); ?>assets/suruci/js/vendor/bootstrap.min.js" defer="defer"></script>
    <script src="<?= base_url(); ?>assets/suruci/js/plugins/swiper-bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/suruci/js/plugins/glightbox.min.js"></script>

    <script>
        $('.action_buat_pesanan').on('click', () => {
            let inputValue = {
                noTelp: $('input[name=no_telp]').val(),
                nama: $('input[name=nama]').val(),
                alamat: $('input[name=alamat]').val(),
                kecamatan: $('input[name=kecamatan]').val(),
                kabupaten: $('input[name=kabupaten]').val(),
                bank: $('input[name="bank"]:checked').val(),
                id_barang: "<?= $produk->id ?>",
                harga: "<?= $produk->harga ?>"
            }

            $.ajax({
                type: 'POST',
                url: "<?= base_url('user/simpan_pembayaran') ?>",
                data: inputValue,
                success: function (res) {
                    alert('Transaksi Tersimpan');
                    document.location.href = "<?php echo base_url('user/bukti_transaksi/') ?>" + res.id_transaksi;
                }
            });
        })

        // $('input[name=bukti_pembayaran]').on('change', () => {
        //     const formData = new FormData();
        //     const fileInput = $('input[name=bukti_pembayaran]')[0].files[0];

        //     formData.append('bukti_pembayaran', fileInput);
        //     formData.append('no_transaksi', "<?= $pembayaran->no_transaksi ?>");

        //     $.ajax({
        //         url: '../../user/upload_bukti_pembayaran',
        //         type: 'POST',
        //         data: formData,
        //         processData: false,
        //         contentType: false,
        //         success: function (res) {
        //             $("#uploadedImage").removeClass('d-none');
        //             var reader = new FileReader();
        //             reader.onload = function (e) {
        //                 $('#uploadedImage').attr('src', e.target.result);
        //             };
        //             reader.readAsDataURL(fileInput);
        //             alert("Bukti pembayaran berhasil diupload.")
        //         },
        //         error: function (res) {
        //             $("#uploadedImage").addClass('d-none');
        //             alert("Bukti pembayaran gagal diupload.")
        //         },
        //     });
        // })
    </script>

    <!-- Customscript js -->
    <script src="<?= base_url(); ?>assets/suruci/js/script.js"></script>

    <script>

        // Ambil referensi elemen HTML yang diperlukan
        const paymentForm = document.getElementById('paymentForm');
        const paymentInput = document.getElementById('paymentAmount');
        const paymentChart = document.getElementById('paymentChart').getContext('2d');

        // Inisialisasi data awal chart
        let paymentData = {
            labels: [],
            datasets: [{
                label: 'Payment Amount',
                data: [],
                backgroundColor: 'blue'
            }]
        };

        // Inisialisasi chart
        let myChart = new Chart(paymentChart, {
            type: 'bar',
            data: paymentData,
            options: {
                // Konfigurasi chart di sini
            }
        });

        // Tambahkan event listener untuk form submit
        paymentForm.addEventListener('submit', function (event) {
            event.preventDefault(); // Mencegah form submit

            let paymentValue = parseFloat(paymentInput.value); // Ambil nilai pembayaran dari input

            // Tambahkan nilai pembayaran ke chart
            myChart.data.labels.push('Payment ' + (myChart.data.labels.length + 1));
            myChart.data.datasets[0].data.push(paymentValue);

            // Perbarui chart
            myChart.update();
        });
    </script>

</body>

</html>