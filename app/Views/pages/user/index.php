<?= $this->extend('templates/layout/userlayout'); ?>

<?= $this->section('content') ?>
<div class="hg-100  position-relative">
    <div id="carouselExampleControls" class="carousel slide myslide" data-bs-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <img src="assets/slide/1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/slide/2.jpg" class="d-block  w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/slide/3.jpg" class="d-block  w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<section class="" id="kepsek">
    <div class="container">
        <h3 class="title text-center p-4">Sambutan Kepala Sekolah</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="w-50 mx-auto">
                    <img data-aos="fade-left" data-aos-duration="1000" class="w-100" src="assets/img/maulanasyaikh.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <p  data-aos="fade-right" data-aos-duration="1000">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ad quasi, necessitatibus iste ipsam praesentium amet voluptas dolor impedit commodi. Nisi earum labore, molestias quo dolor debitis delectus eos nobis.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis assumenda animi quae odit illo optio, mollitia provident autem ea est dolor cupiditate asperiores, consequuntur inventore! Dolores laborum sed recusandae fugit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ratione ducimus aut quisquam reiciendis corrupti quam eaque delectus. Quia porro aut iure esse quaerat cupiditate aspernatur voluptatibus consequatur iste voluptas!
                </p>
                <button class="btn btn-primary btn-lg shadow">Lihat Selengkapnya <i class="bi bi-arrow-right"></i> </button>
            </div>
        </div>

    </div>
</section>


<section class="bg-secondary text-light min-hg-80">
    <div class="container">

        <h3 class="title text-center p-4">Profil Sekolah</h3>
        <div class="row">
            <div class="col-md-4 ps-5 position-relative" data-aos="zoom-out" data-aos-duration="2000">
                <div class="img-tentang-box ms-5 position-absolute img-1">
                    <img class="w-100 border-3 border border-light " src="assets/santri/1.jpg" alt="">
                </div>
                <div class=" img-tentang-box position-absolute img-2">
                    <img class="w-100 border-3 border border-light " src="assets/santri/2.jpg" alt="">
                </div>
                <div class=" img-tentang-box position-absolute img-3">
                    <img class="w-100 border-3 border border-light " src="assets/santri/3.jpeg" alt="">
                </div>
            </div>
            <div class="col-md-8 ps-5">
               <div class="row">
                   <div class="col-md-6" data-aos="flip-down" duration="2000">
                       <div>
                            <strong>Nama Sekolah :</strong><br>SDIT Said Alamain NW Sembalun Bumbung
                       </div>
                       <br>
                       <div>
                            <strong>Alamat Sekolah :</strong>
                            <br>Sembalun Bumbung Kec. Sembalun
                       </div>
                       <br>
                        <div>
                            <strong>Fasilitas :</strong>
                            <ul>
                                <li>Ruang Belajar Yang Nyaman</li>
                                <li>Kelas Komputer</li>
                                <li>Halaman Bermain Yang Luas</li>
                                <li>Lokasi strategis</li>
                            </ul>
                        </div>
                   </div>
                   <div class="col-md-6">

                        <div class="timeline">
                           <div class="timelinebox right" data-aos="flip-down" data-aos-duration="2000">
                                <div class="content py-2 px-3">
                                    <h4 >Extra Kurikuler</h4>
                                    <ul>
                                        <li>Pramuka</li>
                                        <li>Palang Merah</li>
                                        <li>Pencak Silat</li>
                                    </ul>
                                </div>
                           </div>
                           <div class="timelinebox right" data-aos="flip-down" data-aos-duration="3000">
                                <div class="content mt-3 py-2 px-3">
                                    <h4 >Program Sore</h4>
                                    <ul>
                                        <li>Tahfiz Qur'an</li>
                                        <li>English Habit</li>
                                        <li>Kreatifitas Siswa</li>
                                    </ul>
                                </div>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
</section>


<section class="" id="berita">
    <div class="container ">
        <h3 class="title text-center p-4">Info Sekolah</h3>

        <div class="row justify-content-center"  data-aos="flip-down" data-aos-duration="3000">
            <div class="col-md-3">
                <div class="info-box p-3">
                    <div class="img-box w-100">
                        <img class="w-100" src="assets/img/mosque.png" alt="">
                    </div>
                    <hr>
                    <h6 class="info-title">
                        Informasi Penting
                    </h6>
                    <button class="btn text-dark rounded-pill form-control ">
                       Selengkapnya <i class="bi bi-arrow-right-circle-fill"></i> 
                    </button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info-box p-3">
                    <div class="img-box w-100">
                        <img class="w-100" src="assets/img/mosque.png" alt="">
                    </div>
                    <hr>
                    <h6 class="info-title">
                        Informasi Penting
                    </h6>
                    <button class="btn text-dark rounded-pill form-control ">
                        Selengkapnya  <i class="bi bi-arrow-right-circle-fill"></i>
                    </button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info-box p-3">
                    <div class="img-box w-100">
                        <img class="w-100" src="assets/img/mosque.png" alt="">
                    </div>
                    <hr>
                    <h6 class="info-title">
                        Informasi Penting
                    </h6>
                    <button class="btn text-dark rounded-pill form-control ">
                        Selengkapnya  <i class="bi bi-arrow-right-circle-fill"></i>
                    </button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info-box p-3">
                    <div class="img-box w-100">
                        <img class="w-100" src="assets/img/mosque.png" alt="">
                    </div>
                    <hr>
                    <h6 class="info-title">
                        Informasi Penting
                    </h6>
                    <button class="btn text-dark rounded-pill form-control ">
                        Selengkapnya  <i class="bi bi-arrow-right-circle-fill"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

 <!-- ======= Portfolio Section ======= -->
 <section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->



<script>
(function() {

'use strict';

// define variables
var items = document.querySelectorAll(".timeline li");

// check if an element is in viewport
// http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
function isElementInViewport(el) {
  var rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

function callbackFunc() {
  for (var i = 0; i < items.length; i++) {
    if (isElementInViewport(items[i])) {
      items[i].classList.add("in-view");
    }
  }
}

// listen for events
window.addEventListener("load", callbackFunc);
window.addEventListener("resize", callbackFunc);
window.addEventListener("scroll", callbackFunc);

})();
</script>
<?= $this->endSection() ?>