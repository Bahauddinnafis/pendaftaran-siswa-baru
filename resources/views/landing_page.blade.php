<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Agency - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script
      src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
      crossorigin="anonymous"
    ></script>
    <!-- Google fonts-->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <!-- Core theme CSS (includes Bootstrap)-->

    {{-- <link rel="stylesheet" href="{{ asset('css/product-details.css') }}"> --}}

    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#page-top"
          ><img src="assets/img/logo-smk-angop.png" alt="..."
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
        Menu
        <i class="fas fa-bars ms-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#services">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Program</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#team">Alumni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register-form-user') }}">PPDB</a>
        </li>
    </ul>
  </div>
</div>
</nav>

<!-- Masthead-->

<header class="masthead">
    <div class="container">
      <div class="masthead-subheading text-uppercase">
        SMK terbaik dalam bidang perikanan
      </div>
      <div class="header">
        <img src="assets/img/masthead/view4.jpg" alt="" class="image1">
        <img src="assets/img/masthead/view.jpeg" alt="" class="image2">
        <img src="assets/img/masthead/view2.jpeg" alt="" class="image3">
        <img src="assets/img/masthead/wisuda4.jpg" alt="" class="image4">
      </div>
      <div class="masthead-heading">
        Pelopor SMK dengan mengedepankan komoditas utama NKRI tertjintah
      </div>
    </div>
  </header>
  <!-- Beranda-->
  <section class="page-section" id="services">
    <div class="container">
      <div class="intro text-center">
        <h3 class="section-heading text-uppercase">
          Selamat Datang di SMK Angop
        </h3>
        <h3 class="section-subheading text-muted">
          Sekolah Menengah Kejuruan yang terfokus dalam bidang perikanan
          dengan mengedepankan prestasi dan keagamaan
        </h3>
      </div>
      <div class="row text-center">
        <div class="col-md-6">
          <div class="beranda-left fade-in-element">
            <h3 class="text-uppercase">sambutan</h3>
            <h1>Kepala Sekolah</h1>
            <span>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Maiores odit vel fugiat ipsam reiciendis nam officiis suscipit
              voluptatem! Magnam, eos optio. Quisquam fuga blanditiis porro
              nulla doloremque adipisci voluptates ab?
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Maiores odit vel fugiat ipsam reiciendis nam officiis suscipit
              voluptatem! Magnam, eos optio. Quisquam fuga blanditiis porro
              nulla doloremque adipisci voluptates ab?

              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Maiores odit vel fugiat ipsam reiciendis nam officiis suscipit
              voluptatem! Magnam, eos optio. Quisquam fuga blanditiis porro
              nulla doloremque adipisci voluptates ab?

              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Maiores odit vel fugiat ipsam reiciendis nam officiis suscipit
              voluptatem! Magnam, eos optio. Quisquam fuga blanditiis porro
              nulla doloremque adipisci voluptates ab?
              </span>
            <p>-Firhan Ali Kodori S.Komedi-</p>
          </div>
        </div>
        <div class="col-md-6">
            <div class="beranda-right">
              <div><img src="assets\img\tetsu2.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section" id="portfolio">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Program Keahlian</h2>
          <h3 class="section-subheading text-muted">
            Lorem ipsum dolor sit amet consectetur.
          </h3>
        </div>
        <div class="portfolio-grid">
          <div class="portfolio-item left">

             <!-- Portfolio item 1 -->
             <a
             class="portfolio-link"
             data-bs-toggle="modal"
             href="#portfolioModal1"
           >
             <div class="portfolio-hover">
               <div class="portfolio-hover-content">
                 <i class="fas fa-plus fa-3x"></i>
               </div>
             </div>
             <img
               class="img-fluid"
               src="assets/img/portfolio/1.jpg"
               alt="..."
             />
           </a>
           <div class="portfolio-caption">
             <div class="portfolio-caption-heading">Teknik Pemancingan</div>
           </div>
         </div>
         <div class="portfolio-item middle">
           <!-- portfolio item 2 -->
           <a
             class="portfolio-link"
             data-bs-toggle="modal"
             href="#portfolioModal2"
           >
             <div class="portfolio-hover">
               <div class="portfolio-hover-content">
                 <i class="fas fa-plus fa-3x"></i>
               </div>
             </div>
             <img
             class="img-fluid"
             src="assets/img/mancing/mancing-mania.jpg"
             alt="..."
           />
         </a>
         <div class="portfolio-caption">
           <div class="portfolio-caption-heading">Manajemen Tambak</div>
         </div>
       </div>

       <div class="portfolio-item right">
         <!-- Portfolio item 3 -->
         <a
           class="portfolio-link"
           data-bs-toggle="modal"
           href="#portfolioModal3"
         >
           <div class="portfolio-hover">
             <div class="portfolio-hover-content">
               <i class="fas fa-plus fa-3x"></i>
             </div>
           </div>
           <img
             class="img-fluid"
             src="assets/img/portfolio/2.jpg"
             alt="..."
           />
         </a>
         <div class="portfolio-caption">
           <div class="portfolio-caption-heading">Manajemen Tambak</div>
         </div>
        </div>
    </div>
  </div>
</section>


<!-- About-->
<section class="page-section" id="about">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Kegiatan Kami</h2>
      <h3 class="section-subheading text-muted">
        Kekeluargaan merupakan segalanya
      </h3>
    </div>
    <ul class="timeline">
      <li>
        <div class="timeline-image">
          <img
            class="rounded-circle img-fluid"
            src="assets/img/about/1.jpg"
            alt="..."
          />
        </div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4>2018-2019</h4>
            <h4 class="subheading">Lahirnya Generasi Unggul</h4>
          </div>
          <div class="timeline-body">
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt
              ut voluptatum eius sapiente, totam reiciendis temporibus qui
              quibusdam, recusandae sit vero unde, sed, incidunt et ea quo
              dolore laudantium consectetur!
            </p>
          </div>
        </div>
      </li>
      <li class="timeline-inverted">
        <div class="timeline-image">
          <img
            class="rounded-circle img-fluid"
            src="assets/img/about/2.jpg"
            alt="..."
          />
        </div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4>March 2011</h4>
            <h4 class="subheading">An Agency is Born</h4>
          </div>
          <div class="timeline-body">
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt
              ut voluptatum eius sapiente, totam reiciendis temporibus qui
              quibusdam, recusandae sit vero unde, sed, incidunt et ea quo
              dolore laudantium consectetur!
            </p>
          </div>
        </div>
    </li>
    <li>
      <div class="timeline-image">
        <img
          class="rounded-circle img-fluid"
          src="assets/img/about/3.jpg"
          alt="..."
        />
      </div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4>December 2015</h4>
          <h4 class="subheading">Transition to Full Service</h4>
        </div>
        <div class="timeline-body">
          <p class="text-muted">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt
            ut voluptatum eius sapiente, totam reiciendis temporibus qui
            quibusdam, recusandae sit vero unde, sed, incidunt et ea quo
            dolore laudantium consectetur!
          </p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
        <div class="timeline-image">
          <img
            class="rounded-circle img-fluid"
            src="assets/img/about/4.jpg"
            alt="..."
          />
        </div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4>July 2020</h4>
            <h4 class="subheading">Phase Two Expansion</h4>
          </div>
          <div class="timeline-body">
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt
              ut voluptatum eius sapiente, totam reiciendis temporibus qui
              quibusdam, recusandae sit vero unde, sed, incidunt et ea quo
              dolore laudantium consectetur!
            </p>
          </div>
        </div>
      </li>
      <li class="timeline-inverted">
        <div class="timeline-image">
          <h4>
            Bergabunglah
            <br />
            Bersama
            <br />
            Kami
          </h4>
        </div>
    </li>
  </ul>
</div>
</section>
<!-- Team-->
<section class="page-section bg-light" id="team">
<div class="container">
  <div class="text-center">
    <h2 class="section-heading text-uppercase">Apa yang Mereka Katakan?</h2>
  </div>
  <div class="row">
    <div class="col-lg-4">
      <div class="team-member-container">
        <div class="team-member">
        <img
          class="mx-auto rounded-circle"
          src="assets/img/team/1.jpg"
          alt="..."
        />
        <h4>Parveen Anand</h4>
        <p class="text-muted">Lead Designer</p>
        <div class="review-content">
          <p>
            Donec accumsan auctor iaculis. Sed suscipit arcu
            ligula, at egestas magna molestie a. Proin ac ex
            maximus, ultrices justo eget, sodales orci. Aliquam
            egestas libero ac turpis pharetra, in vehicula lacus
            scelerisque
          </p>
        </div>
    </div>
</div>
</div>
<div class="col-lg-4">
<div class="team-member-container">
  <div class="team-member">
  <img
    class="mx-auto rounded-circle"
    src="assets/img/team/1.jpg"
    alt="..."
  />
  <h4>Parveen Anand</h4>
  <p class="text-muted">Lead Designer</p>
  <div class="review-content">
    <p>
      Donec accumsan auctor iaculis. Sed suscipit arcu
      ligula, at egestas magna molestie a. Proin ac ex
      maximus, ultrices justo eget, sodales orci. Aliquam
      egestas libero ac turpis pharetra, in vehicula lacus
      scelerisque
    </p>
  </div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="team-member-container">
  <div class="team-member">
    <img
    class="mx-auto rounded-circle"
    src="assets/img/team/1.jpg"
    alt="..."
  />
  <h4>Parveen Anand</h4>
  <p class="text-muted">Lead Designer</p>
  <div class="review-content">
    <p>
      Donec accumsan auctor iaculis. Sed suscipit arcu
      ligula, at egestas magna molestie a. Proin ac ex
      maximus, ultrices justo eget, sodales orci. Aliquam
      egestas libero ac turpis pharetra, in vehicula lacus
      scelerisque
    </p>
  </div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-8 mx-auto text-center">
<p class="large text-muted">
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
  eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam
  corporis ea, alias ut unde.
</p>
</div>
</div>
</div>
</section>

 {{-- Footer --}}
 <footer>
    <div class="footer-container">
      <div class="first-section">
        <img src="assets\img\logo-smk-angop.png" alt="">
      </div>
      <div class="second-section">
        <p><h5><b>SMK ANGOP</b></h5></p>
        <p>Selamat datang di website resmi SMK ANGOP Surabaya. Salah satu sekolah favorit di Surabaya yang berdiri sejak jaman Belanda dan telah melahirkan banyak tokoh nasional di berbagai bidang.</p>
      </div>
      <div class="third-section">
        <div class="social-icons">
          <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
          <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
          <a href="https://facebook.com"><i class="fab fa-facebook"></i></a>
          <a href="https://youtube.com"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="fourth-section">
        <h5><b>Informasi</b></h5>
        <table>
          <tr>
            <td><i class="far fa-paper-plane icon"></i></td>
            <td>Jalan Raya Medokan Sawah No. 1 Gunung Anyar, Surabaya 60272</td>
          </tr>
          <tr>
            <td><i class="fas fa-phone-alt icon"></i></td>
            <td>031-5345972</td>
          </tr>
          <tr>
            <td><i class="far fa-envelope icon"></i></td>
            <td>info@smk-angop-sby.sch.id</td>
          </tr>
        </table>
      </div>
    </div>
    </footer>
  <!-- Portfolio Modals-->
  <!-- Portfolio item 1 modal popup-->
  <div
    class="portfolio-modal modal fade"
    id="portfolioModal1"
    tabindex="-1"
    role="dialog"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal">
          <img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
<div class="col-lg-8">
                <div class="modal-body">
                  <!-- Project details-->
                  <h2 class="text-uppercase">Teknik Pemancingan</h2>
                  <p class="item-intro text-muted">
                    Lorem ipsum dolor sit amet consectetur.
                  </p>
                  <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="assets/img/portfolio/1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>First slide label</h5>
                          <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                      <img src="assets/img/portfolio/2.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="assets/img/portfolio/3.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <p>
                  Use this area to describe your project. Lorem ipsum dolor
                  sit amet, consectetur adipisicing elit. Est blanditiis
                  dolorem culpa incidunt minus dignissimos deserunt repellat
                  aperiam quasi sunt officia expedita beatae cupiditate,
                  maiores repudiandae, nostrum, reiciendis facere nemo!
                </p>
                <button
                  class="btn btn-primary btn-xl text-uppercase"
                  data-bs-dismiss="modal"
                  type="button"
                >
                  <i class="fas fa-xmark me-1"></i>
                  Close Project
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 <!-- Portfolio item 2 modal popup-->
 <div
 class="portfolio-modal modal fade"
 id="portfolioModal2"
 tabindex="-1"
 role="dialog"
 aria-hidden="true"
>
 <div class="modal-dialog">
   <div class="modal-content">
     <div class="close-modal" data-bs-dismiss="modal">
       <img src="assets/img/close-icon.svg" alt="Close modal" />
     </div>
     <div class="container">
       <div class="row justify-content-center">
         <div class="col-lg-8">
           <div class="modal-body">
             <!-- Project details-->
             <h2 class="text-uppercase">Project Name</h2>
             <p class="item-intro text-muted">
               Lorem ipsum dolor sit amet consectetur.
             </p>
             <div id="carouselExampleCaptions" class="carousel slide">
               <div class="carousel-indicators">
                 <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                 <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                 <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/img/portfolio/1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/portfolio/2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/portfolio/3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <p>
                Use this area to describe your project. Lorem ipsum dolor
                sit amet, consectetur adipisicing elit. Est blanditiis
                dolorem culpa incidunt minus dignissimos deserunt repellat
                aperiam quasi sunt officia expedita beatae cupiditate,
                maiores repudiandae, nostrum, reiciendis facere nemo!
              </p>
              <button
                class="btn btn-primary btn-xl text-uppercase"
                data-bs-dismiss="modal"
                type="button"
              >
              <i class="fas fa-xmark me-1"></i>
              Close Project
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Portfolio item 3 modal popup-->
<div
class="portfolio-modal modal fade"
id="portfolioModal3"
tabindex="-1"
role="dialog"
aria-hidden="true"
>
<div class="modal-dialog">
  <div class="modal-content">
    <div class="close-modal" data-bs-dismiss="modal">
      <img src="assets/img/close-icon.svg" alt="Close modal" />
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="modal-body">
            <!-- Project details-->
            <h2 class="text-uppercase">Project Name</h2>
            <p class="item-intro text-muted">
              Lorem ipsum dolor sit amet consectetur.
            </p>
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/img/portfolio/1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/portfolio/2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                  <img src="assets/img/portfolio/3.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <p>
              Use this area to describe your project. Lorem ipsum dolor
              sit amet, consectetur adipisicing elit. Est blanditiis
              dolorem culpa incidunt minus dignissimos deserunt repellat
              aperiam quasi sunt officia expedita beatae cupiditate,
              maiores repudiandae, nostrum, reiciendis facere nemo!
            </p>
            <button
            class="btn btn-primary btn-xl text-uppercase"
            data-bs-dismiss="modal"
            type="button"
          >
            <i class="fas fa-xmark me-1"></i>
            Close Project
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

<!-- Core theme JS-->
<script src="{!! asset('assets/js/scripts.js') !!}"></script>
<script src="{!! asset('assets/js/beranda.js') !!}"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
