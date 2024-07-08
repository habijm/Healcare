@extends('layouts.template')
@section('content')


<!-- ======= Header ======= -->


<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h2 data-aos="fade-up">HealCare -Solusi Bebas Rokok</h2>
        <h3 data-aos="fade-up" data-aos-delay="400">Berhenti merokok adalah salah satu keputusan terbaik yang dapat Anda buat untuk kesehatan Anda. Ada banyak sumber daya yang tersedia untuk membantu Anda berhenti merokok, termasuk konseling, obat-obatan, dan dukungan kelompok.</h3>
        <div data-aos="fade-up" data-aos-delay="600">
          <div class="text-center text-lg-start">
            <a href="{{ URL::to('diagnosa')}}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Get Started</span>
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
  <section id="features" class="features">

    <div class="container mb-4" data-aos="fade-up">

      <header class="section-header">
        <p>About HealCare</p>
      </header>

      <div class="row">
        <div class="lc-block col-lg-6 mx-auto mb-4 content">
          <div editable="rich">
            <p class="lead ">Healcare didirikan pada tahun 2023 oleh seseorang yang peduli dengan kesehatan masyarakat. Perusahaan ini berkomitmen untuk mengurangi jumlah perokok di Indonesia dengan gaya yang asik dan menyenangkan. Healcare menyediakan layanan konsultasi dengan ahli untuk membantu perokok untuk berhenti merokok. Layanan ini diberikan oleh para ahli yang berpengalaman dalam bidang kesehatan dan berhenti merokok.</p>

          </div>
        </div>
        </a>
      </div>
    </div>

    </div>



  </section><!-- End Values Section -->

  <!-- ======= Counts Section ======= -->


  <!-- ======= Features Section ======= -->
  <section id="features" class="features">

    <div class="container" data-aos="fade-up">



      <!-- Feature Icons -->
      <div class="row feature-icons" data-aos="fade-up">
        <h3>Daftar Penyakit Akibat Merokok</h3>

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







  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Testimoni</h2>
        <p>Apa yang mereka katakan tentang kita</p>
      </header>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              </p>
              <div class="profile mt-auto">
                <img src="{{ asset('landingpage/assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              </p>
              <div class="profile mt-auto">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              </p>
              <div class="profile mt-auto">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              </p>
              <div class="profile mt-auto">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              </p>
              <div class="profile mt-auto">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- End Testimonials Section -->








  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </header>

      <div class="row gy-4">

        <div class="col-lg-6">

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>A108 Adam Street,<br>New York, NY 535022</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>info@example.com<br>contact@example.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-clock"></i>
                <h3>Open Hours</h3>
                <p>Monday - Friday<br>9:00AM - 05:00PM</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" class="php-email-form">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>

        </div>

      </div>

    </div>

  </section><!-- End Contact Section -->

</main><!-- End #main -->



<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>


@endsection