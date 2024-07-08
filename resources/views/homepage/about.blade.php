@extends('layouts.template')
@section('content')
<section id="hero" class="hero d-flex align-items-center">

  <div class="container" data-aos="fade-up">
    <div class="row gx-0">

      <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <img src="{{ asset('landingpage/assets/img/aboutt.png')}}" class="img-fluid" alt="">
      </div>

      <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">


        <div class="content">
          <h1 data-aos="fade-up">HealCare -Solusi Bebas Rokok</h1>
          <h3 data-aos="fade-up" data-aos-delay="400">Kami adalah perusahaan yang memiliki misi mulia untuk mengurangi jumlah perokok di Indonesia. Perusahaan ini memiliki berbagai program dan layanan yang menarik dan efektif untuk membantu perokok untuk berhenti merokok.</h3>

        </div>
      </div>

    </div>
  </div>

</section><!-- End About Section -->

<section id="values" class="values">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h1 class="fw-bold ">KEUNTUNGAN BERHENTI MEROKOK</h1>

    </header>

    <div class="row">

      <div class="col-lg-3" data-aos="fade-up" data-aos-delay="200">
        <div class="card border-info box">
          <img src="{{ asset('landingpage/assets/img/aboutt.png')}}" class="img-fluid" alt="">
          <h3>Meningkatkan kesehatan jantung</h3>

        </div>
      </div>

      <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
        <div class="card border-info  box">
          <img src="{{ asset('landingpage/assets/img/aboutt.png')}}" class="img-fluid" alt="">
          <h3>Meningkatkan kesehatan paru-paru</h3>

        </div>
      </div>

      <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
        <div class="card border-info  box">
          <img src="{{ asset('landingpage/assets/img/aboutt.png')}}" class="img-fluid" alt="">
          <h3>Meningkatkan Energi</h3>

        </div>
      </div>
      <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
        <div class="card border-info  box">
          <img src="{{ asset('landingpage/assets/img/aboutt.png')}}" class="img-fluid" alt="">
          <h3>Meningkatkan Kesuburan</h3>

        </div>
      </div>

    </div>

  </div>

</section>

@endsection