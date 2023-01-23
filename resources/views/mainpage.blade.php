@extends('master.layout')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Welcome to the <span>National Musuem</span></h2>
          <p>There are events that occurs at the museum sometimes and everyone are invited to participate in the event. These events can expose to people about the culture or the ethics about Malaysia.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=Zp6RXUTcbZk" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/muzium-negara-2.jpg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
                <img src="assets/img/icon/Kraf Mahkota Arnab.jpg" height="230" width="230" alt="" class="image-fluid">
              {{-- <div class="icon"><i class="bi bi-easel"></i></div> --}}
              <h4 class="title"><a href="" class="stretched-link">Kraf Mahkota Arnab</a></h4>
              <div class="stretched-link">
                🎈𝗖𝗘𝗥𝗜𝗔@𝗠𝗨𝗭𝗜𝗨𝗠 𝗡𝗘𝗚𝗔𝗥𝗔!!!🎈
              .
              📅 𝟭𝟰 𝗝𝗔𝗡𝗨𝗔𝗥𝗜 𝟮𝟬𝟮𝟯 | 𝗦𝗔𝗕𝗧𝗨
              ⌚ 𝟭𝟭.𝟬𝟬 𝗣𝗔𝗚𝗜
              📍  𝗗𝗘𝗪𝗔𝗡 𝗧𝗘𝗡𝗚𝗔𝗛, 𝗠𝗨𝗭𝗜𝗨𝗠 𝗡𝗘𝗚𝗔𝗥𝗔
              🎨  𝗞𝗥𝗔𝗙 𝗠𝗔𝗛𝗞𝗢𝗧𝗔  𝗔𝗥𝗡𝗔𝗕
              .
              #𝐦𝐮𝐳𝐢𝐮𝐦𝐧𝐞𝐠𝐚𝐫𝐚
              #𝐣𝐨𝐦𝐬𝐢𝐧𝐠𝐠𝐚𝐡𝐦𝐮𝐳𝐢𝐮𝐦𝐧𝐞𝐠𝐚𝐫𝐚
              #𝐣𝐚𝐛𝐚𝐭𝐚𝐧𝐦𝐮𝐳𝐢𝐮𝐦𝐦𝐚𝐥𝐚𝐲𝐬𝐢𝐚
            </div>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
                <img src="assets/img/icon/Pameran Naga Extend_0.jpg" height="230" width="230" alt="" class="image-fluid">
              {{-- <div class="icon"><i class="bi bi-gem"></i></div> --}}
              <h4 class="title"><a href="" class="stretched-link">World of Dragon: Myth and Legend</a></h4>
              <div class="stretched-link">
                The exhibition under the initiative of the Malaysian Museum Department coincides with revealing to the public about the historical background and civilization of the nation in relation to a symbol or motive as a form of education.
                A total of 95 collections of JMM's various selected collections featuring material cultural objects (artifacts) in the shape or motive of dragons.
              </div>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
                <img src="assets/img/icon/Poster Pameran Chetti.jpg" height="230" width="230" alt="" class="image-fluid">
              {{-- <div class="icon"><i class="bi bi-geo-alt"></i></div> --}}
              <h4 class="title"><a href="" class="stretched-link">Pameran Chetti</a></h4>
              <div class="stretched-link">
                Chetti is the first and oldest Peranakan community in Malaysia.
                Their origins date back to the 15th century when traders from South India arrived in Malacca.
                The Chetti community communicates using a unique combination of Bahasa Malaysia, Tamil, and Chinese.
            </div>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
                <img src="assets/img/icon/Poster Pameran HMS 2022.jpeg" height="230" width="230" alt="Avatar" class="image-fluid">
              {{-- <div class="icon"><i class="bi bi-command"></i></div> --}}
              <h4 class="title"><a href="" class="stretched-link">100 YearsTrophy Exhibition of H.M.S Malaya</a></h4>
              <div class="myDIV"><div class="stretched-link">
                The trophy of H.M.S. Malaya is the most prestigious football and rugby tournament trophy ever organized in the history of national sports. It has been used for approximately 46 years in the world of football and 65 years for rugby before being replaced by the Malaysia Cup and the Agong Cup.
            </div>
            </div>
          </div>
          <!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  @endsection
