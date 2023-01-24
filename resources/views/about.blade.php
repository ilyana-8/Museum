@extends('master.layout')
@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('');">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>About Us</h2>
          <!-- <p>This gallery exposes the early history of the nationalist movement championed by national figures from various races and of differing political backgrounds, beginning from the British intervention until independence was achieved in 1957. This gallery also highlights the achievements enjoyed by the country after its independence until the formation of Malaysia in 1963 and today’s events.</p> -->
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="/">Home</a></li>
        <li>National Museum Gallery</li>
      </ol>
    </div>
  </nav>
</div><!-- End Breadcrumbs -->
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>The National Museum of Malaysia</h2>
          <img src="assets/img/muzium negara3.jpg">
          <p>The idea of ​​establishing the National Museum was initiated by His Highness Tunku Abdul Rahman Putra Al-Haj, 
            the First Prime Minister of Malaysia. He thought that Malaya (at that time) needed a museum with a national identity 
            to translate the diverse aspects of the country's culture, heritage and nature. 
            Therefore, the building site of the Selangor Museum (1906-1945) which was destroyed due to an Allied Air Force bomb attack 
            on March 10, 1945 was chosen as the location for the construction of the National Museum. 
            The development work of the National Museum began in 1959 and was fully completed in August 1963. 
            The design of the National Museum building was translated by the appointed architect Mr. Ho Kok Hoe based on the architectural characteristics
            of the palaces of the Malay Kings. Uniquely at that time, the National Museum was the only government building with traditional Malay architecture. 
            The uniqueness of the National Museum is not only visible in its architecture, but also displayed on the surface of its front wall 
            which is decorated with two murals made of Italian glass mosaic. These murals which display the history and handicrafts of Malaysia 
            have been produced by Mr. Laitong Cheong who is one of Malaysia's famous painters. </p>
        </div>

        <div class="section-header">
          <h2>National Heritage Act 2005 plaque</h2>
          <img src="assets/img/akta warisan kebangsaan.png">
          <p>His Majesty the Yang di-Pertuan Agong Ketiti, Tuanku Syed Putra ibni Al-Marhum Syed Hassan Jamalullail 
            completed the opening ceremony of the National Museum on August 31, 1963. On August 11, 2015, 
            the National Museum received recognition as a national heritage building under the Act National Heritage 2005. </p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">Objectives of Museum Galleries</li>
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
                  <h4><a title="More Details">Carrying out museum activities such as researching, collecting, recording and publishing all national historical heritage treasures</a></h4>
                  <!-- <p>Pre History</p> -->
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-galleryB">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/b2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/b2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a title="More Details">Making it one of the country's tourism products.</h4>
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
                <a data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/c7.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="/galleryC" title="More Details">Exhibiting and making use of national historical heritage artifacts for the purpose of community education towards identity building and nation development</a></h4>
                  <!-- <p>Colonial Era</p> -->
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <!-- <div class="col-xl-4 col-md-6 portfolio-item filter-galleryD"> 
              <div class="portfolio-wrap">
              <a href="assets/img/portfolio/d.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/d.png" class="img-fluid" alt=""></a> 
                <div class="portfolio-info">
                  <h4><a href="/galleryD" title="More Details">Gallery D: Malaysia Today</a></h4> -->
                  <!-- <p>Malaysia Today</p> -->
                <!-- </div>
              </div> 
             </div> -->
             <!-- End Portfolio Item -->

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