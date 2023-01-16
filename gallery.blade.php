@extends('master.layout')
@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Gallery</h2>
          <p>This museum houses four exhibition galleries featuring Malaysia's history and rich cultural diversity.</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">National Museum Galleries</li>
              <!-- <li data-filter=".filter-galleryA">Gallery A</li>
              <li data-filter=".filter-galleryB">Gallery B</li>
              <li data-filter=".filter-galleryC">Gallery C</li>
              <li data-filter=".filter-galleryD">Gallery D</li> -->
            </ul><!-- End Portfolio Filters -->
          </div>

          <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-galleryA">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/a.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/a.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="/galleryA" title="More Details">Gallery A: Pre History</a></h4>
                  <!-- <p>Pre History</p> -->
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-galleryB">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/b2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/b2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="/galleryB" title="More Details">Gallery B: Malay Kingdoms</h4>
                  <!-- <p>Malay Kingdoms</p> -->
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <!-- <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/branding-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div>End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-galleryC">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/c7.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/c7.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="/galleryC" title="More Details">Gallery C: Colonial Era</a></h4>
                  <!-- <p>Colonial Era</p> -->
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-galleryD"> 
              <div class="portfolio-wrap">
              <a href="assets/img/portfolio/d.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/d.png" class="img-fluid" alt=""></a> 
                <div class="portfolio-info">
                  <h4><a href="/galleryD" title="More Details">Gallery D: Malaysia Today</a></h4>
                  <!-- <p>Malaysia Today</p> -->
                </div>
              </div> 
             </div><!-- End Portfolio Item -->

              <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/img/portfolio/inz.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/portfolio/inz.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/portfolio/inz.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->
                
                
                

            <!-- <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/product-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div>End Portfolio Item -->

            <!-- <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/branding-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div>End Portfolio Item -->

            <!-- <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/books-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div>End Portfolio Item -->

            <!-- <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">App 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div>End Portfolio Item -->

            <!-- <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/product-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div>End Portfolio Item -->

            <!-- <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/branding-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div>End Portfolio Item -->

            <!-- <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/books-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div>End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        <!-- </div> -->

      </div>
    </section><!-- End Portfolio Section -->

    @endsection  