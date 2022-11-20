@extends('frontend.app')

@section('title', 'About')
@section('content')

<section id="sub-hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-lg-1"
                data-aos="fade-up" data-aos-delay="200">
                <h2>TENTANG HIMADITI</h2>
                <p class="col-lg-10">HIMADITI merupakan organisasi kemahasiswaan yang beranggotakan seluruh mahasiswa aktif Diploma Teknik Informatika Universitas Amikom Yogyakarta. Secara kedudukan berada dibawah koordinasi Wakil Rektor III Bidang Kemahasiswaan.</p>
            </div>
            {{-- <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{ asset('img/logo.png') }}" class="img-fluid animated" alt="HIMADITI">
            </div> --}}
        </div>
    </div>
</section>
<main id="main">

    <!-- ======= Visi Misi ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Visi & Misi</h2>
            </div>
            <div class="row content">
                <div class="col-lg-6 ">
                    <h3 class="text-center mb-3">VISI</h3>
                    <p class="text-justify">
                        Membangun kerjasama antara mahasiswa D3 TI dengan pengelola Prodi D3 TI untuk menghasilkan
                        mahasiswa yang unggul
                        dalam
                        bidang Teknologi Informasi dan Komunikasi yang berbasis entrepreneurship.
                    </p>
                    <!-- <a href="#" class="btn-learn-more">Learn More</a> -->
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3 class="text-center mb-3">MISI</h3>
                    <p>
                        <!-- Untuk mencapai sebuah visi, HIMADITI memiliki misi-misi sebagai berikut : -->
                    </p>
                    <ul>
                        <li class="text-justify"><i class="ri-check-double-line"></i> Optimalisasi kerja dan fungsi
                            himpunan mahasiswa D3 TI</li>
                        <li class="text-justify"><i class="ri-check-double-line"></i> Membantu prodi memberikan
                            pelayanan terhadap mahasiswa D3 TI secara maksimal</li>
                        <li class="text-justify"><i class="ri-check-double-line"></i> Berperan aktif, memberikan
                            wadah, untuk menggali dan mengembangkan potensi mahasiswa D3 TI</li>
                        <li class="text-justify"><i class="ri-check-double-line"></i> Mendorong tumbuhnya
                            kreativitas mahasiswa untuk menghasilkan karya-karya dibidang Teknologi Informasi dan
                            Komunikasi</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Divisi ======= -->
    <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1 container-divisi">
                    <div class="content">
                        <h3><strong>DIVISI</strong></h3>
                        <p>
                            Pada struktur organisasi di HIMADITI memiliki 3 divisi, yang mana setiap divisi memiliki
                            peran dan tupoksi masing-masing
                        </p>
                    </div>
                    <div class="accordion-list">
                        <ul>
                            <li>
                                <a data-bs-toggle="collapse" class="collapse"
                                    data-bs-target="#accordion-list-1"><span>01</span> Divisi Litbangtek <i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-1" class="collapse show divisi text-justify"
                                    data-bs-parent=".accordion-list">
                                    <p>
                                        Divisi Litbangtek adalah divisi yang memiliki tugas untuk mengadakan suatu
                                        kegiatan baik internal atau eksternal Himaditi yang betujuan untuk
                                        meningkatkan wawasan, keakraban, skill dan lain-lain. Contoh kegiatan yang
                                        dilaksanakan oleh divisi litbangtek yaitu
                                    </p>
                                    <ul>
                                        <li>Belajar bareng menjelang UTS/UAS</li>
                                        <li>Seminar/pelatihan/workshop</li>
                                        <li>Firstmeet</li>
                                        <li>Makrab</li>
                                        <li>dll.</li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                    class="collapsed"><span>02</span> Divisi Kominfo <i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-2" class="collapse divisi text-justify"
                                    data-bs-parent=".accordion-list">
                                    <p>
                                        Divisi Kominfo bisa disebut juga tim kreatif di Himaditi. Divisi Kominfo
                                        memiliki beberapa peranan yaitu menjadi administrator, pengisi konten dan
                                        juga publikasi setiap kegiatan di setiap akun media sosial Himaditi. Selain
                                        itu Divisi Kominfo juga memiliki tugas untuk membuat rancangan PDL untuk
                                        mahasiswa D3 Teknik Informatika dan memasarkannya.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                    class="collapsed"><span>03</span> Divisi Aspirasi <i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-3" class="collapse divisi text-justify"
                                    data-bs-parent=".accordion-list">
                                    <p>
                                        Sesuai namanya, Divisi Aspirasi memiliki tugas dan tanggung jawab untuk
                                        menampung aspirasi dari mahasiswa D3 Teknik Informatika untuk disalurkan ke
                                        prodi. Divisi Aspirasi juga memiliki tanggung jawab untuk melaksanakan
                                        kegiatan untuk menunjang pengetahuan mahasiswa D3 Teknik Informatika terkait
                                        kegiatan perkuliahan, contoh dari kegiatan tersebut adalah
                                    </p>
                                    <ul>
                                        <li>Pendampingan KRS</li>
                                        <li>Bootcamp untuk pemilihan konsentrasi</li>
                                    </ul>
                                    <p>
                                        Titik fokus Divisi Aspirasi tidak hanya untuk mahasiswa D3 Teknik
                                        Informatika saja namun juga ke pengurus Himaditi, yaitu menampung aspirasi
                                        selama jalannya kepengurusan dan juga menjaga agar anggota Himaditi tetap
                                        utuh dan harmonis.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                    style='background-image: url("{{ asset('img/frontend/divisi.png') }}");' data-aos="zoom-in" data-aos-delay="150">
                    &nbsp;</div>
            </div>
        </div>
    </section>

    <!-- ======= Contact ======= -->
    <section id="contact" class="contact">
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
                {{-- <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <div class="locked-contact">
                        <div class="locked-text">
                            <i class="bi bi-lock"></i>
                            <p>Mohon maaf, fitur ini sementara belum bisa digunakan. Kamu bisa mengirim ke alamat
                                email <i>himaditi@amikom.ac.id</i>
                                untuk mengirim pesan email secara manual.</p>
                        </div>
                    </div>
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div> --}}
            </div>
        </div>
    </section>
</main>

<script>
    $('.nav-about').addClass('active');
</script>

@endsection
