@extends('layouts.template')
@section('content')
<!-- ======= About Section ======= -->
<section id="about" class="about">

  <div class="container" data-aos="fade-up">
    <div class="row gx-0">

      <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h3 class="fw-bold">Kamu Perokok?</h3>
          <h2 class="fw-bold">Cek Kesehatanmu Sekarang!</h2>
          <p>
            Rokok adalah salah satu penyebab kematian dan penyakit terbesar di dunia. Menurut Organisasi Kesehatan Dunia (WHO), rokok menyebabkan lebih dari 7 juta kematian per tahun, atau sekitar 1 dari 8 kematian secara global.
          </p>
          <div class="text-center text-lg-start">
            <a href="{{ URL::to('login') }}" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Mulai Diagnosa</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{ asset('landingpage/assets/img/lawan-penyakit.png')}}" class="img-fluid" alt="">
      </div>

    </div>
  </div>

</section><!-- End About Section -->

@endsection