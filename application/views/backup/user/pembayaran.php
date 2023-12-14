<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pembayaran</title>
    <meta name="description" content="Morden Bootstrap HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url();?>assets/suruci/img/favicon.ico" rel="icon">

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="<?= base_url();?>assets/suruci/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/suruci/css/plugins/glightbox.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Plugin css -->
    <link rel="stylesheet" href="<?= base_url();?>assets/suruci/css/vendor/bootstrap.min.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="<?= base_url();?>assets/suruci/css/style.css">

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
                        <h2 class="main_logo--title"><a class="" href="lapak.php"><img class="" src="<?= base_url();?>assets/suruci/img/logo/nav-log.png" alt=""></a></h2>
                    </header>
                    <main class="main__content_wrapper">
                        <br>
                        <form action="#">
                            <table class="cart__table--inner">
                                <tbody class="cart__table--body">
                                    <tr class="cart_table--body_items">
                                        <td class="cart_table--body_list col-lg-7">
                                            <div class="product__image two  d-flex align-items-center">
                                                <div class="product__thumbnail border-radius-5">
                                                    <a href="product-details.html"><img class="border-radius-5" src="<?= base_url();?>assets/suruci/img/tumpak_sewu.png" alt="cart-product"></a>
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
                                                                    <h1 class="product__description--name"><a href="produkdetail.php">Harga Barang &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp. 149.000,-</a></h1>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="cart_table--body_items">
                                                            <td class="cart_table--body_list">
                                                                <h3 class="product__description--name"><a href="produkdetail.php">Jumlah Pembayaran&nbsp;&nbsp;: Rp. 1.000,-</a></h3>
                                                            </td>
                                                        </tr>
                                                        <tr class="cart_table--body_items">
                                                            <td class="cart_table--body_list">
                                                                <h3 class="product__description--name"><a href="produkdetail.php">Biaya total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Rp. 150.000,-</a></h3>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <div class="checkout_content--step section_contact--information">
                                <div class="section_header checkout_section--header d-flex align-items-center justify-content-between mb-25">
                                    <h3 class="section__header--title">Informasi Kontak</h3>
                                </div>
                                <div class="customer__information">
                                    <div class="checkout__email--phone mb-12">
                                        <label>
                                            <input class="checkout__input--field border-radius-5" placeholder="masukkan nomor telefon" type="text">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout_content--step section_shipping--address">
                                <div class="section__header mb-25">
                                    <h3 class="section__header--title">Alamat Pengiriman</h3>
                                </div>
                                <div class="section_shipping--address_content">
                                    <div class="row">
                                        <div class="col-lg-12 mb-12">
                                            <div class="checkout__input--list ">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Nama" type="text">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Alamat" type="text">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Kecamatan" type="text">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Kabupaten" type="text">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div>
                                        <div class="section__header mb-25">
                                            <h3 class="section__header--title">Metode Pembayaran</h3>
                                        </div>
                                        <div class="cart_table checkout_product--table">
                                            <table class="cart__table--inner">
                                                <tbody class="cart__table--body">
                                                    <tr class="cart_table--body_items">
                                                        <td class="cart_table--body_list">
                                                            <div class="checkout__checkbox mb-25">
                                                                <div class="shipping__radio--input">
                                                                    <input class="shipping_radio--input_field" id="radiobox" name="checkmethod" type="radio">
                                                                </div>
                                                                <label class="shipping__radio--label" for="radiobox">
                                                                    <span class="shipping_radio--label_primary"><img src="<?= base_url();?>assets/suruci/img/bri.png" alt="" style="height: 30px;"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="cart_table--body_items">
                                                        <td class="cart_table--body_list">
                                                            <div class="checkout__checkbox mb-25">
                                                                <div class="shipping__radio--input">
                                                                    <input class="shipping_radio--input_field" id="radiobox" name="checkmethod" type="radio">
                                                                </div>
                                                                <label class="shipping__radio--label" for="radiobox">
                                                                    <span class="shipping_radio--label_primary"><img src="<?= base_url();?>assets/suruci/img/bni.png" alt="" style="height: 30px;"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="cart_table--body_items">
                                                        <td class="cart_table--body_list">
                                                            <div class="shipping__radio--input">
                                                                <input class="shipping_radio--input_field" id="radiobox" name="checkmethod" type="radio">
                                                            </div>
                                                            <label class="shipping__radio--label" for="radiobox">
                                                                <span class="shipping_radio--label_primary"><img src="<?= base_url();?>assets/suruci/img/mandiri.png" alt="" style="height: 60px;"></span>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr class="cart_table--body_items">
                                                        <td class="cart_table--body_list">
                                                            <div class="shipping__radio--input">
                                                                <input class="shipping_radio--input_field" id="radiobox" name="checkmethod" type="radio">
                                                            </div>
                                                            <label class="shipping__radio--label" for="radiobox">
                                                                <span class="shipping_radio--label_primary"><img src="<?= base_url();?>assets/suruci/img/bca.png" alt="" style="height: 60px;"></span>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <form action="" id="paymentAmount">
                                        <div class="col-lg-12 mb-12">
                                        <div class="col-12 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" id="paymentAmount" placeholder="Masukkan Nominal..." type="text">
                                                </label>
                                            </div>
                                        </div>
                                        </div>
                                        </form>
                                        <div class="col-lg-12 mb-12">
                                        <div class="col-12 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                <canvas id="paymentChart" width="400" height="200"></canvas>
                                                </label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <form action="user/pembayaran_berhasil" method="post"></form>
                                        <div class="section__header mb-30">
                                            <h3 class="section__header--title">Total Bayar</h3>
                                        </div>
                                        <div class="checkout_content--step_footer d-flex align-items-center col-lg-12">
                                            <div class="col-lg-6">
                                                <label for="">
                                                    <h3 style="color: orangered;">Rp. 150.000,-</h3>
                                                </label>
                                            </div>
                                            <div class="col-lg-6">
                                                <button class="continue_shipping--btn primary_btn border-radius-5" type="submit">Buat Pesanan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292" />
        </svg></button>

    <!-- All Script JS Plugins here  -->
    <script src="<?= base_url();?>assets/suruci/js/vendor/popper.js" defer="defer"></script>
    <script src="<?= base_url();?>assets/suruci/js/vendor/bootstrap.min.js" defer="defer"></script>
    <script src="<?= base_url();?>assets/suruci/js/plugins/swiper-bundle.min.js"></script>
    <script src="<?= base_url();?>assets/suruci/js/plugins/glightbox.min.js"></script>

    <!-- Customscript js -->
    <script src="<?= base_url();?>assets/suruci/js/script.js"></script>

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
paymentForm.addEventListener('submit', function(event) {
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