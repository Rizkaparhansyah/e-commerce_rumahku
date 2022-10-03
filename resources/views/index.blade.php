<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />

    <!--=============== BOXICONS ===============-->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css " />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" class="js-color-style" href="assets/css/colors/color-1.css" />

    <title>uyuyyy | HOME</title>
  </head>
  <body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
      <nav class="nav container">
        <a href="#" class="nav__logo"> Rumahku <i class="bx bxs-home-alt-2"></i> </a>

        <div class="nav__menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="#home" class="nav__link active-link">
                <i class="bx bx-home-alt-2"></i>
                <span>Home</span>
              </a>
            </li>

            <li class="nav__item">
              <a href="#popular" class="nav__link">
                <i class="bx bx-building-house"></i>
                <span>Residences</span>
              </a>
            </li>

            <li class="nav__item">
              <a href="#value" class="nav__link">
                <i class="bx bx-award"></i>
                <span>Value</span>
              </a>
            </li>

            <li class="nav__item">
              <a href="#contact" class="nav__link">
                <i class="bx bx-phone"></i>
                <span>Contact</span>
              </a>
            </li>
          </ul>
        </div>

        <!-- Theme change button -->
        <i class="bx bx-moon change-theme" id="theme-button"></i>

        <!-- <div class="nav__button">
          <a href="" class="button"> Login </a>
        </div> -->
      </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
      <!--==================== HOME ====================-->
      <section class="home section" id="home">
        <div class="home__container container grid">
          <div class="home__data">
            <h1 class="home__title">
              Discover <br />
              Most Suitable <br />
              Property
            </h1>
            <p class="home__description">Find a variety of properties that suit you very easily, forget all difficulties in finding a residence for you</p>
          </div>
          <div class="home__images">
            <div class="home__orbe"></div>
            
            <div class="home__img">
              <img src="assets/img/home.jpg" alt="" />
            </div>
          </div>
        </div>
      </section>

      <!-- ==================== SERVICES ==================== -->
      <section class="services section">
        <div class="container">
          <span class="section__subtitle">Our Services</span>
          <h2 class="section__title">Our Main Focus <span>.</span></h2>

          <div class="services__container">
            <div class="services__card">
              <img src="assets/img/s-1.png" alt="" class="services__img">

              <div class="services__data">
                <h3 class="services__title">Buy a Home</h3>
                <p class="services__description">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <a href="#" class="services__link">
                  <button class="button contact__card-button">Learn More</button> 
                </a>
              </div>
            </div>

            <div class="services__card">
              <img src="assets/img/s-2.png" alt="" class="services__img">

              <div class="services__data">
                <h3 class="services__title">Rent a Home</h3>
                <p class="services__description">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <a href="#s" class="services__link">
                  <button class="button contact__card-button">Learn More</button> 
                </a>
              </div>
            </div>

            <div class="services__card">

              <img src="assets/img/s-3.png" alt="" class="services__img">

              <div class="services__data">
                <h3 class="services__title">Sell a Home</h3>
                <p class="services__description">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                  <a href="#" class="services__link">
                    <button class="button contact__card-button">Learn More</button> 
                  </a>
              </div>
            </div>
          </div>


      </section>

      <!--==================== POPULAR ====================-->
      <section class="popular section" id="popular">
        <div class="container">
          <span class="section__subtitle">Best Choise</span>
          <h2 class="section__title">Popular Residences <span>.</span></h2>

          <div class="pupolar__container swiper">
            <div class="swiper-wrapper">
              
           @foreach ($properti as $p)
               
           <article class="popular__card swiper-slide">
             <img {{$path = Storage::url($p->poto); }} src="{{ url($path) }}" class="popular__img" alt="">
             <div class="popular__data">
               <h2 class="popular__price"><span>$</span>{{$p->harga}}</h2>
               <h3 class="popular__title">{{$p->nama_properti}}</h3>
               <p class="popular__description">{{$p->lokasi}}</p>
              </div>
            </article>
            @endforeach
          </div>

            <div class="swiper-button-next">
              <i class="bx bx-chevron-right"></i>
            </div>
            <div class="swiper-button-prev">
              <i class="bx bx-chevron-left"></i>
            </div>
          </div>
        </div>
      </section>

      <!--==================== FEATURED ====================-->

      <section class="featured" id="featured">
        <div class="container">
          <span class="section__subtitle">Best Choise</span>
          <h2 class="section__title">Featured Properties <span>.</span></h2>

        <div class="box-container">
@foreach ($properti as $p)

<div class="box">
  <div class="image-container">
    
    <img {{ $path = Storage::url($p->poto)}} src="{{$path}}" alt="">
    <div class="info">
      <h3>Post {{$p->created_at}}</h3>
      <h3>for {{$p->tipe}}</h3>
    </div>
    <div class="loc">
                    <a href="#"><i class='bx bxs-map'></i><span>{{$p->lokasi}}</span></a>
                  </div>
                  <div class="icons">
                    <a href="#"><i class='bx bxs-videos'></i><span>1</span></a>
                        <a href="#"><i class='bx bxs-photo-album'></i><span>4</span></a>
                      </div>
                    </div>
                    <div class="content">
                      <div class="price">
                        <h2 class="popular__price"><span>$</span>{{$p->harga}}/{{$p->waktu}}</h2>
                        <a href="#" ><i class='bx bx-heart' ></i></a>
                        <a href="#" ><i class='bx bx-chat'></i></a>
                        <a href="https://api.whatsapp.com/send?phone={{$p->no_wa}}" ><i class='bx bxl-whatsapp' ></i></a>
                    </div>
                    <div class="location">
                        <h3 class="popular__title">{{$p->nama_properti}}</h3>
                        <p class="popular__description"> {{$p->deskripsi}}</p>
                    </div>
                    <div class="details">
                      <h3> <i class='bx bx-expand'></i></i> {{$p->luas_properti}} sqft</h3>
                        <h3> <i class='bx bxs-bed'></i> {{$p->kamar_tidur}} bed</h3>
                        <h3> <i class='bx bxs-bath' ></i> {{$p->kamar_mandi}} baths </h3>
                      </div>
                      <div class="buttons">
                        <a href="#" class="button contact__card-button">Request info</a>
                        <a href="#" class="button contact__card-button">View details</a>
                      </div>
                    </div>
                  </div>
                  @endforeach 
          </div>
        </div>
        
      </section>

      <!--==================== VALUE ====================-->
      <section class="value section" id="value">
        <div class="value__container container grid">
          <div class="value__images">
            <div class="value__orbe"></div>

            <div class="value__img">
              <img src="assets/img/value.jpg" alt="" />
            </div>
          </div>

          <div class="value__content">
            <div class="value__data">
              <span class="section__subtitle">Our Value</span>
              <h2 class="section__title">Value We Give To You <span>.</span></h2>
              <p class="value__description">We always ready to help by providing the best service for you. We believe a good place to live can make your life better.</p>
            </div>

            <div class="value__accordion">
              <div class="value__accordion-item">
                <header class="accordion-header">
                  <i class="bx bxs-shield-x value__accordion-icon"></i>
                  <h3 class="accordion-title">Best interest rates on the market</h3>
                  <div class="accordion-arrow">
                    <i class="bx bxs-down-arrow"></i>
                  </div>
                </header>

                <div class="accordion-content">
                  <p class="accordion-description">Price we provides is the best for you, we guarantee no price changes on your property due to various unexpected costs that my come.</p>
                </div>
              </div>

              <div class="value__accordion-item">
                <header class="accordion-header">
                  <i class="bx bxs-x-square value__accordion-icon"></i>
                  <h3 class="accordion-title">Prevent unstable prices</h3>
                  <div class="accordion-arrow">
                    <i class="bx bxs-down-arrow"></i>
                  </div>
                </header>

                <div class="accordion-content">
                  <p class="accordion-description">Price we provides is the best for you, we guarantee no price changes on your property due to various unexpected costs that my come.</p>
                </div>
              </div>

              <div class="value__accordion-item">
                <header class="accordion-header">
                  <i class="bx bxs-bar-chart-square value__accordion-icon"></i>
                  <h3 class="accordion-title">Best prices on the market</h3>
                  <div class="accordion-arrow">
                    <i class="bx bxs-down-arrow"></i>
                  </div>
                </header>

                <div class="accordion-content">
                  <p class="accordion-description">Price we provides is the best for you, we guarantee no price changes on your property due to various unexpected costs that my come.</p>
                </div>
              </div>

              <div class="value__accordion-item">
                <header class="accordion-header">
                  <i class="bx bxs-check-square value__accordion-icon"></i>
                  <h3 class="accordion-title">Security of your data</h3>
                  <div class="accordion-arrow">
                    <i class="bx bxs-down-arrow"></i>
                  </div>
                </header>

                <div class="accordion-content">
                  <p class="accordion-description">Price we provides is the best for you, we guarantee no price changes on your property due to various unexpected costs that my come.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--==================== CONTACT ====================-->
      <section class="contact section" id="contact">
        <div class="contact__container container grid">
          <div class="contact__images">
            <div class="contact__orbe"></div>

            <div class="contact__img">
              <img src="assets/img/contact.png" alt="" />
            </div>
          </div>

          <div class="contact__content">
            <div class="contact__data">
              <span class="section__subtitle">Contact Us</span>
              <h2 class="section__title">Easy to Contact us <span>.</span></h2>
              <p class="contact__description">Is there a problem finding your dream home? Need a guide in buying first home? or Need a consultation on residential issues? just contact us.</p>
            </div>

            <div class="contact__card">
              <div class="contact__card-box">
                <div class="contact__card-info">
                  <i class="bx bxs-phone-call"></i>
                  <div>
                    <h3 class="contact__card-title">Call</h3>
                    <p class="contact__card-description">0822.321.165.19</p>
                  </div>
                </div>

                <button class="button contact__card-button">Call Now</button>
              </div>

              <div class="contact__card-box">
                <div class="contact__card-info">
                  <i class="bx bxs-message-rounded-dots"></i>
                  <div>
                    <h3 class="contact__card-title">Chat</h3>
                    <p class="contact__card-description">0822.321.165.19</p>
                  </div>
                </div>

                <button class="button contact__card-button">Chat Now</button>
              </div>

              <div class="contact__card-box">
                <div class="contact__card-info">
                  <i class="bx bxs-video"></i>
                  <div>
                    <h3 class="contact__card-title">Video Call</h3>
                    <p class="contact__card-description">0822.321.165.19</p>
                  </div>
                </div>

                <button class="button contact__card-button">Video Call Now</button>
              </div>

              <div class="contact__card-box">
                <div class="contact__card-info">
                  <i class="bx bxs-envelope"></i>
                  <div>
                    <h3 class="contact__card-title">Message</h3>
                    <p class="contact__card-description">0822.321.165.19</p>
                  </div>
                </div>

                <button class="button contact__card-button">Message Now</button>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!--==================== TEAM ====================-->
      <section class="profile section" id="profile">
        <div class="container">
          <span class="section__subtitle">Best Team</span>
          <h2 class="section__title">TEAM <span>.</span></h2>
          <div class="profile__container">
@foreach ($tim as $t)
          <div class="profile-card">
            <div class="img">
                <img {{ $link = Storage::url($t->foto)}} src="{{url($link)}}">
            </div>
            <div class="caption">
                <h3 class="profile__title">{{$t->nama}}</h3>
                <p class="profile__description">{{$t->profesi}}</p>
                <div class="social-links">
                  <a href="{{$t->facebook}}" target="_blank" rel="noopener noreferrer"><i class='bx bxl-facebook-square'></i></a>
                  <a href="{{$t->instagram}}" target="_blank" rel="noopener noreferrer"><i class='bx bxl-instagram-alt'></i></a>
                  <a href="{{$t->github}}" target="_blank" rel="noopener noreferrer"><i class='bx bxl-github'></i></a>
                </div>
            </div>
          </div>
@endforeach
        </div>
      
      </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
      <div class="footer__container container grid">
        <div>
          <a href="#" class="footer__logo"> RumakKu <i class="bx bxs-home-alt-2"></i> </a>
          <p class="footer__description">
            Our vision is to make all peopel <br />
            the best place to live for them.
          </p>
        </div>

        <div class="footer__content">
          <div>
            <h3 class="footer__title">About</h3>
            <ul class="footer__links">
              <li>
                <a href="#" class="footer__link">About Us</a>
              </li>
              <li>
                <a href="#" class="footer__link">Features</a>
              </li>
              <li>
                <a href="#" class="footer__link">News & blog</a>
              </li>
            </ul>
          </div>

          <div>
            <h3 class="footer__title">Company</h3>
            <ul class="footer__links">
              <li>
                <a href="#" class="footer__link">How We Work</a>
              </li>
              <li>
                <a href="#" class="footer__link">Capital</a>
              </li>
              <li>
                <a href="#" class="footer__link">Security</a>
              </li>
            </ul>
          </div>

          <div>
            <h3 class="footer__title">Support</h3>
            <ul class="footer__links">
              <li>
                <a href="#" class="footer__link">FAQs</a>
              </li>
              <li>
                <a href="#" class="footer__link">Support Center</a>
              </li>
              <li>
                <a href="#" class="footer__link">Contact Us</a>
              </li>
            </ul>
          </div>

          <div>
            <h3 class="footer__title">Follow Us</h3>
            <ul class="footer__sosial">
              <li>
                <a href="#" class="footer__sosial-link">
                  <i class="bx bxl-facebook-circle"></i>
                </a>
              </li>
              <li>
                <a href="#" class="footer__sosial-link">
                  <i class="bx bxl-instagram-alt"></i>
                </a>
              </li>
              <li>
                <a href="#" class="footer__sosial-link">
                  <i class="bx bxl-pinterest"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="footer__info container">
        <span class="footer__copy"> &#169; uyuyyy. All Rigths reserved </span>

        <div class="footer__privacy">
          <a href="#">Terms & Agreements</a>
          <a href="#">Privacy Policy</a>
        </div>
      </div>
    </footer>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="bx bx-chevrons-up"></i>
    </a>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
