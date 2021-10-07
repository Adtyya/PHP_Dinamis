<!doctype html>
<?php 

$carousel = array (
  (object) array(
    "judul" => "BRIN Ungkap Wilayah Jakarta yang Tenggelam 2050: Kota-Sunter",
    "konten" => "Jakarta, CNN Indonesia -- Profesor Riset bidang Meteorologi pada Organisasi Riset Penerbangan dan Antariksa BRIN mengungkapkan sejumlah wilayah di Jakarta yang akan tenggelam pada 2050.
    Hingga 2050, wilayah daratan yang berkurang akibat air laut masuk Jakarta terjadi di Tanjung Priok, Sunter, Kemayoran, Ancol, Kota, Pluit, Penjaringan, Kapuk, serta Tol Bandara."
    , "gambar" => "b1.jpg"
  ),
  (object) array(
    "judul" => "Alat Pengukur Suhu Tubuh Kreasi Anak SMK di Bekasi",
    "konten" => "Pelajar SMK Telekomunikasi Telesandi membuat alat pengukur suhu tubuh bernama tels meter yang dilengkapi kamera pendeteksi masker dan cairan pembersih tangan dan dijual Rp 1,5 juta - Rp 2 juta.
    ", "gambar" => "b2.jpg"
  ),
  (object) array(
    "judul" => "Bersih-bersih Tumpahan Minyak di Pantai California",
    "konten" => "Kebocoran pipa menyebabkan tumpahan minyak di lepas pantai California."
    , "gambar" => "b3.jpeg" 
  ),
  (object) array(
    "judul" => "Australia Tidak Menerima Wisatawan Asing Hingga 2022",
    "konten" => "Pekan lalu, ia menguraikan rencana untuk mengizinkan warga negara yang divaksinasi dan penduduknya tetap untuk terbang ke luar negeri mulai November untuk pertama kalinya sejak larangan perjalanan yang sangat keras mulai berlaku pada Maret tahun lalu.

    Tetapi Morrison pada Selasa (5/10) mengatakan bahwa setelah warga Australia, prioritas berikutnya adalah pekerja migran terampil dan pelajar internasional yang memasuki Australia sebelum turis."
    , "gambar" => "b4.jpg"
  ),
  (object) array(
    "judul" => "Klasemen Liga Inggris: MU Dilewati Manchester City, Liverpool Kejar Chelsea",
    "konten" => "Sukses ini diraih setelah skuat asuhan Thomas Tuchel menumbangkan Southampton dalam laga pekan ketujuh Liga Inggris di Stadion Stamford Bridge, Sabtu lalu, 2 Oktober 2021.

    Kepastian Chelsea tetap berada di urutan teratas klasemen karena Liverpool dan Manchester City bermain seri. Pada laga sebelumnya di Stadion Anfield, Minggu pekan lalu, kedua tim bermain imbang 2-2.
    
    Dengan tambahan satu poin Liverpool harus puas di peringkat kedua klasemen sementara. Mereka kini sudah mengoleksi 15 poin,
    
    Sedangkan, posisi Manchester City mengalami perubahan. Skuat asuhan Pep Guardiola kini ada di tempat ketiga dengan torehan 14 poin."
    , "gambar" => "b5.jpg"
  ),
  (object) array(
    "judul" => "Rusia Catat Kematian Kasus Covid Tertinggi",
    "konten" => "Petugas medis mendorong seorang wanita di kursi roda di sebuah rumah sakit untuk pasien Covid-19 di Kommunarka di luar Moskow, Selasa (5/10/2021). Rusia mencatatkan rekor kematian harian tertinggi akibat Covid-19, pada 5 Oktober dengan mencatatkan 895 kematian dalam 24 jam. "
    , "gambar" => "b6.jpg"
    )
  );
?>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class='navbar-brand' href="#">
                <img src="logo.png" alt="">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
              </div>
        </div>
    </nav>
    <div class="jarak"></div>
    <div class="container">
        <div class="container-fluid">
            <div class="row">
              <div class="col col-6"><div class="col py-md-5"><div class="d-flex justify-content-center"><img src="logo.png" alt="" class="logo"></div></div></div>
              <div class="col col-6"><div class="col py-md-5">
                  <h3>About Us</h3>
                  <p>Percobaan perulangan menggunakan PHP untuk membuat sebuah website yang dinamis.</p>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div id="blog" class="py-5">
        <div class="container">
            <div class="row">
            <?php 
              foreach ($carousel as $data) {?>
                <div class="col col-6">
                    <div class="card mb-3">
                       <a href="#"><div class="d-flex justify-content-center"><img src=<?=$data->gambar?> alt=""></div></a>
                        <div class="card-body">
                            <h5 class="card-tittle"><?=$data->judul?></h5>
                            <p class="card-text"><?=$data->konten?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="accordion" class="py-5">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Fitur
                  </button>
                </h5>
              </div>
          
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Fitur
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Fitur
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
    
    </div>
    <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur placeat cumque quo provident ab architecto. Autem earum nobis repellendus, maxime voluptatum animi officia placeat? Distinctio nihil ullam ducimus optio inventore.
          </p>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i>Pandeglang, Banten</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            BulanBintang@gmail.com
          </p>

        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">PESERTA JONG KODING</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->







    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>