@extends('layouts.template')
@section('content')


<!-- ======= Header ======= -->


<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h2 data-aos="fade-up">HealCare -Solusi Bebas Rokok</h2>
        <h3 data-aos="fade-up" data-aos-delay="400">Berhenti merokok adalah salah satu keputusan terbaik yang dapat anda buat untuk kesehatan anda. Ada banyak sumber daya yang tersedia untuk membantu anda berhenti merokok, termasuk konseling, obat-obatan, dan dukungan kelompok.</h3>
        <div data-aos="fade-up" data-aos-delay="600">
          <div class="text-center text-lg-start">
            <a href="{{ URL::to('diagnosa')}}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Cek Kesehehatan Sekarang!</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{ asset('landingpage/assets/img/penyakit.png')}}" class="img-fluid" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->


<main id="main">



  <!-- ======= Values Section ======= -->
  <section id="features" class="features mb-2">

    <div class="container" data-aos="fade-up">

      <header class="row feature-icons">
        <h3>About HealCare</h3>

      </header>

      <div class="row">
        <div class="lc-block col-lg-6 mx-auto content">

          <p class="lead text-center">Healcare didirikan pada tahun 2023 oleh seseorang yang peduli dengan kesehatan masyarakat. Perusahaan ini berkomitmen untuk mengurangi jumlah perokok di Indonesia dengan gaya yang asik dan menyenangkan. Healcare menyediakan layanan konsultasi dengan ahli untuk membantu perokok untuk berhenti merokok. Layanan ini diberikan oleh para ahli yang berpengalaman dalam bidang kesehatan dan berhenti merokok. Tujuan dari konsultasi kesehatan ini adalah untuk mendapatkan informasi dan perawatan yang tepat untuk masalah kesehatan. Profesional kesehatan dapat memberikan informasi tentang diagnosis, perawatan, dan pencegahan penyakit. Mereka juga dapat memberikan dukungan emosional dan motivasi untuk menjalani perawatan.</p>


        </div>
      </div>
    </div>

    </div>



  </section><!-- End Values Section -->

  <!-- ======= Counts Section ======= -->


  <!-- ======= Features Section ======= -->
  <section id="features" class="daftar-penyakit features">

    <div class="container" data-aos="fade-up">



      <!-- Feature Icons -->
      <div class="row feature-icons" data-aos="fade-up">
        <h3 class="mb-2">Daftar Penyakit Akibat Merokok</h3>

        <div class="row">

          <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
            <img src="{{ asset('landingpage/assets/img/penyakit2.png')}}" class="img-fluid p-4" alt="">
          </div>

          <div class="col-xl-8 d-flex content">
            <div class="row align-self-center gy-4">

              <div class="col-md-6 icon-box" data-aos="fade-up">
                <i class="bi bi-virus2"></i>
                <div>
                  <h4>Kanker Mulut</h4>
                  <p>Kanker mulut adalah jenis kanker yang dimulai di mulut. Mulut terdiri dari bibir, pipi, lidah, gusi, amandel, dan langit-langit mulut. Kanker mulut paling sering disebabkan oleh merokok.</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-virus2"></i>
                <div>
                  <h4>Kanker Tenggorokan </h4>
                  <p>Kanker tenggorokan adalah jenis kanker yang dimulai di tenggorokan. Tenggorokan adalah tabung yang menghubungkan mulut ke kerongkongan. Kanker tenggorokan paling sering disebabkan oleh merokok.</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-virus2"></i>
                <div>
                  <h4>Kanker Paru-paru</h4>
                  <p>Kanker paru-paru adalah jenis kanker yang dimulai di paru-paru. Paru-paru adalah dua organ berbentuk kerucut di dada yang bertanggung jawab untuk menyerap oksigen dari udara dan melepaskan karbon dioksida dari tubuh.
                  </p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-virus2"></i>
                <div>
                  <h4>Kanker Payudara</h4>
                  <p>Kanker payudara adalah kanker yang paling sering terjadi pada wanita, dengan sekitar 1 dari 8 wanita akan didiagnosis terkena kanker payudara pada saat mereka berusia 80 tahun.</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-virus2"></i>
                <div>
                  <h4>Kanker Kandung Kemih</h4>
                  <p>Kanker kandung kemih adalah jenis kanker yang paling umum kelima pada pria dan jenis kanker yang paling umum ke-11 pada wanita.</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-virus2"></i>
                <div>
                  <h4>Stroke</h4>
                  <p>Stroke adalah kondisi medis serius yang terjadi ketika aliran darah ke bagian otak tiba-tiba terputus. </p>
                </div>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-virus2"></i>
                <div>
                  <h4>Bronkitis</h4>
                  <p>Bronkitis adalah peradangan pada bronkus, saluran udara yang membawa udara dari tenggorokan ke paru-paru.</p>
                </div>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-virus2"></i>
                <div>
                  <h4>Impotensi</h4>
                  <p>Impotensi adalah ketidakmampuan untuk mencapai atau mempertahankan ereksi yang cukup untuk melakukan hubungan seksual. </p>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div><!-- End Feature Icons -->

    </div>

  </section><!-- End Features Section -->







  <section id="values" class="features values mb-5">

    <div class="container mb-5" data-aos="fade-up">

      <header class=" row feature-icons section-header">
        <h1 class="fw-bold ">KEUNTUNGAN BERHENTI MEROKOK</h1>

      </header>

      <div class="row">

        <div class="col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="card border-info box">
            <img src="{{ asset('landingpage/assets/img/kesehatan/jantung.png')}}" class="img-fluid" alt="">
            <h3>Meningkatkan kesehatan jantung</h3>

          </div>
        </div>

        <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
          <div class="card border-info  box">
            <img src="{{ asset('landingpage/assets/img/kesehatan/paru.png')}}" class="img-fluid" alt="">
            <h3>Meningkatkan kesehatan paru-paru</h3>

          </div>
        </div>

        <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
          <div class="card border-info  box">
            <img src="{{ asset('landingpage/assets/img/kesehatan/energi.png')}}" class="img-fluid" alt="">
            <h3>Meningkatkan Energi</h3>

          </div>
        </div>
        <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
          <div class="card border-info  box">
            <img src="{{ asset('landingpage/assets/img/kesehatan/subur.png')}}" class="img-fluid" alt="">
            <h3>Meningkatkan Kesuburan</h3>

          </div>
        </div>

      </div>

    </div>

  </section>










</main><!-- End #main -->



<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>


@endsection