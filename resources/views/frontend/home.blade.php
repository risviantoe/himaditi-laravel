@extends('frontend.app')

@section('title', 'Home')
@section('content')
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-7 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <!-- <h1>HIMADITI</h1> -->
          <h2>Himpunan Mahasiswa D3 Teknik Informatika Universitas Amikom Yogyakarta</h2>
          <!-- <p class="col-lg-10">HIMADITI merupakan organisasi kemahasiswaan yang beranggotakan seluruh mahasiswa aktif Diploma Teknik Informatika Universitas Amikom Yogyakarta. Secara kedudukan berada dibawah koordinasi Wakil Rektor III Bidang Kemahasiswaan.</p> -->
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#aspirasi" class="btn-get-started scrollto"><i class="bi bi-pen"></i><span> Tulis Aspirasimu</span></a>
            <a href="#info" class="btn-watch-video scrollto"><i class="bi bi-info-circle"></i><span> Info Terkini</span></a>
            <!-- <a href="#info" class="glightbox btn-watch-video"><i class="bi bi-info-circle"></i><span> Info Himaditi</span></a> -->
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ asset('img/frontend/logo.png') }}" class="img-fluid animated" alt="HIMADITI">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Info Section ======= -->
    <section id="info" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Info Terkini</h2>
        </div>

        <div class="row" style="justify-content: center;">

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Open Recruitment</h3>
              <center>
                <img src="{{ asset('img/frontend/info/oprec.jpg') }}" class="info-img" alt="">
                <p>Hallo kawan kawan mahasiswa D3 Teknik Informatika Universitas Amikom Yogyakarta!! Sudah siap bergabung di kepengurusan HIMADITI 2021/2022? Jadikan kesempatan ini untuk menyalurkan minat, bakat serta menambah pengalaman berorganisasi! Yuk simak info selengkapnya.</p>
                <a href="/oprec" class="buy-btn">Selengkapnya</a>
              </center>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Info Section -->

    <!-- ======= Berita Section ======= -->
    <section id="berita" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Berita</h2>
        </div>

        <div class="row" style="justify-content: center;">
          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <img src="{{ asset('img/frontend/berita/bootcamp.jpg') }}" class="col-12 berita-img" alt="">
              <h4><a href="">Bootcamp, pengenalan konsentrasi D3 Teknik Informatika</a></h4>
              <p>08 Sep 2021</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <img src="{{ asset('img/frontend/berita/bootcamp.jpg') }}" class="col-12 berita-img" alt="">
              <h4><a href="">Bootcamp, pengenalan konsentrasi D3 Teknik Informatika</a></h4>
              <p>08 Sep 2021</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <img src="{{ asset('img/frontend/berita/bootcamp.jpg') }}" class="col-12 berita-img" alt="">
              <h4><a href="">Bootcamp, pengenalan konsentrasi D3 Teknik Informatika</a></h4>
              <p>08 Sep 2021</p>
            </div>
          </div>

          <a href="" class="btn-more">Lihat berita lainnya <i class="bi bi-arrow-right-circle"></i></a>
        </div>

      </div>
    </section><!-- End Services Section -->

    <section id="aspirasi" class="aspirasi">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Form aspirasi</h2>
          <p>Sebelum mengisi form aspirasi, kamu diwajibkan untuk membaca ketentuan dan aturan dengan klik link berikut! <a href="#ketentuan" data-toggle="modal">Ketentuan</a></p>
        </div>



        <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch justify-content-center">
          {{-- <div class="locked-contact">
            <div class="locked-text">
              <i class="bi bi-lock"></i>
              <p>Mohon maaf, fitur ini sementara belum bisa digunakan. Kamu bisa mengirim ke alamat email <i>himaditi@amikom.ac.id</i>
                untuk mengirim pesan email secara manual.</p>
            </div>
          </div> --}}
          <form id="aspirasi" method="post" role="form" class="php-email-form">
            @csrf
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Nama <span class="text-danger">*</span></label>
                <input type="text" name="nama" class="form-control form-aspirasi @error('nama') is-invalid @enderror" id="name" placeholder="ex: Yusuf Ardhi" required>
              </div>
              <div class="form-group col-md-6">
                <label for="class">Kelas <span class="text-danger">*</span></label>
                <input type="text" class="form-control form-aspirasi" name="kelas" id="class" placeholder="ex: 19 D3TI 01 / Web Development" required>
              </div>
            </div>
            <div class="form-group">
              <label for="subject">Jenis Aspirasi <span class="text-danger">*</span></label>
              <input type="text" class="form-control form-aspirasi" name="jenis_aspirasi" id="subject" placeholder="ex: Aspirasi akademik" required>
            </div>
            <div class="form-group">
              <label for="message">Tuliskan Aspirasimu <span class="text-danger">*</span></label>
              <textarea id="message" class="form-control form-aspirasi" name="pesan" rows="10" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Aspirasi kamu berhasil dikirim. Terimakasih!</div>
            </div>

            <div class="text-center"><button type="submit">Kirim</button></div>
          </form>
        </div>

      </div>
    </section>

    <!-- The Modal -->
    <div class="modal ketentuan" id="ketentuan">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Peraturan & Ketentuan</h4>
            <button type="button" class="btn btn-default close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="row">

              <div class="col-lg-5 col-md-12 mb-3 aspirasi-carousel">
                <center>
                <div id="demo" class="col-12 carousel slide" data-ride="carousel">

                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                  </ul>

                  <!-- The slideshow -->
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{ asset('img/aspirasi/1.jpg') }}">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('img/aspirasi/2.jpg') }}">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('img/aspirasi/3.jpg') }}">
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
                </div>
                </center>
              </div>
              <div class="col-lg-7 col-md-12 aspirasi-info">
                <p>Aspirasi seperti apa yang diharapkan? Tentunya Aspirasi di lingkup Program Studi D3 Teknik Informatika meliputi :
                </p>
                <ul>
                  <li>Aspirasi mengenai akademik</li>
                  <li>Aspirasi mengenai pengajar (dosen/asisten)</li>
                  <li>Aspirasi mengenai fasilitas pembelajaran</li>
                </ul>
                <p>Atau bisa juga aspirasi mengenai non-akademik seperti fasilitas & maupun hal lain yang berkaitan dengan Universitas AMIKOM Yogyakarta.</p>
                <br><b>NB: Gunakan bahasa yang baik dan benar sehingga aspirasimu layak untuk disampaikan.</b>
                <img class="col-7 justify-content-center mt-5" src="{{ asset('img/aspirasi/banner2.png') }}" alt="aspirasi">

              </div>
            </div>
          </div>

          <!-- Modal footer -->
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div> -->

        </div>
      </div>
    </div>


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row">

          <div class="col-lg-12 d-flex align-items-stretch justify-content-center">
            <div class="info row">
              <div class="col-lg-7 contact-info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Jalan Ring Road Utara, Condong Catur, Sleman, Yogyakarta 55283</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>himaditi@amikom.ac.id</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+62 812 1535 9073 (Novira)</p>
                </div>
              </div>
              <div class="col-lg-5 contact-map">
                <iframe src="https://maps.google.com/maps?q=amikom%20yo&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@endsection
