<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootsrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- ===== SWIPER CSS ===== -->
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

  <!-- ===== BOX ICONS ===== -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <!-- ===== CSS ===== -->
  <link rel="stylesheet" href="assets/css/styles.css">

  <title>Portfolio Personal Complete</title>
</head>

<body>
  <!--===== SCROLL TOP =====-->


  <!--===== HEADER =====-->
  <header class="l-header" id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="nav container">
        <a class="navbar-brand ms-3" href="#">Hamzah Diza</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
            <li class="nav-item nav__item">
              <a class="nav-link nav__link active" href="#home">Home</a>
            </li>
            <li class="nav-item nav__item">
              <a class="nav-link nav__link active" href="#about">About</a>
            </li>
            <li class="nav-item nav__item">
              <a class="nav-link nav__link active" href="#services">Services</a>
            </li>
            <li class="nav-item nav__item">
              <a class="nav-link nav__link active" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item nav__item">
              <a class="nav-link nav__link active" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class="l-main">
    <!--===== HOME =====-->

    <section class="home" id="home">
      <div class="home__container bd-container bd-grid">
        <div class="home__data">
          <span class="home__greeting">Hello, My name is</span>
          <h1 class="home__name">Hamzah Diza S</h1>
          <span class="home__profession">Web Developer</span>
          <a download="" href="assets/pdf/Clay-Doe-Cv.pdf" class="button button-light">Download CV</a>
        </div>

        <div class="home__social">
          <a href="#" class="home__social-icon"><i class="bx bxl-facebook-square"></i></a>
          <a href="#" class="home__social-icon"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="home__social-icon"><i class="bx bxl-twitter"></i></a>
        </div>

        <div class="home__img">
          <img src="assets/img/home.jpg" alt="">
        </div>
      </div>
    </section>
    <!--===== ABOUT =====-->
    <section class="about section bd-container" id="about">
      <span class="section-subtitle">My history</span>
      <h2 class="section-title">About me</h2>

      <div class="about__container bd-grid">
        <div class="about__data bd-grid">
          <p class="about__description"><span>Hello, I am <br></span> Freelance frontend developer. I am passionate about creating and developing web interfaces. With years of experience in web design and development</p>

          <div>
            <span class="about__number">05</span>
            <span class="about__achievement">Years off Experience</span>
          </div>

          <div>
            <span class="about__number">29+</span>
            <span class="about__achievement">Project completes</span>
          </div>

          <div>
            <span class="about__number">07</span>
            <span class="about__achievement">Best work awards</span>
          </div>
        </div>

        <img src="assets/img/about.jpg" alt="" class="about__img">
      </div>
    </section>

    <!--===== QUALIFICATION =====-->
    <div class="qualification section bd-container">
      <span class="section-subtitle">Experience and education</span>
      <h2 class="section-title">Qualification</h2>

      <div class="qualification__container bd-grid">
        <div class="qualification__content">
          <h2 class="qualification__title">
            <i class="bx bx-briefcase-alt qualification__title-icon"></i>
            Work Experience
          </h2>

          <div class="bd-grid">
            <div class="qualification__data">
              <h3 class="qualification__area">Junior Front End Developer</h3>

              <div class="qualification__box">
                <span class="qualification__work">
                  <i class="bx bx-briefcase-alt qualification__icon"></i>
                  Adobe - New York
                </span>

                <span class="qualification__work">
                  <i class="bx bx-calendar-alt qualification__icon"></i>
                  jan 2019 - Aug 2019
                </span>
              </div>
            </div>

            <div class="qualification__data">
              <h3 class="qualification__area">UI / UX Designer</h3>

              <div class="qualification__box">
                <span class="qualification__work">
                  <i class="bx bx-briefcase-alt qualification__icon"></i>
                  Figma -Lima
                </span>

                <span class="qualification__work">
                  <i class="bx bx-calendar-alt qualification__icon"></i>
                  Oct 2019 - Dec 2019
                </span>
              </div>
            </div>

            <div class="qualification__data">
              <h3 class="qualification__area">Web Designer</h3>

              <div class="qualification__box">
                <span class="qualification__work">
                  <i class="bx bx-briefcase-alt qualification__icon"></i>
                  Apple Inc - New York
                </span>

                <span class="qualification__work">
                  <i class="bx bx-calendar-alt qualification__icon"></i>
                  Jan 2020 - May 2019
                </span>
              </div>
            </div>

          </div>

        </div>
      </div>

      <div class="qualification__container bd-grid mt-4">
        <div class="qualification__content">
          <h2 class="qualification__title">
            <i class="bx bx-book-bookmark qualification__title-icon"></i>
            Education
          </h2>

          <div class="bd-grid">
            <div class="qualification__data">
              <h3 class="qualification__area">Computer technician</h3>

              <div class="qualification__box">
                <span class="qualification__work">
                  <i class="bx bx-book-alt qualification__icon"></i>
                  Lima - Computer institute
                </span>

                <span class="qualification__work">
                  <i class="bx bx-calendar-alt qualification__icon"></i>
                  Apr 2015 - Dec 2018
                </span>
              </div>
            </div>

            <div class="qualification__data">
              <h3 class="qualification__area">Master in web developer</h3>

              <div class="qualification__box">
                <span class="qualification__work">
                  <i class="bx bx-book-alt qualification__icon"></i>
                  Madrid - Design institute
                </span>

                <span class="qualification__work">
                  <i class="bx bx-calendar-alt qualification__icon"></i>
                  Jan 2019 - Aug 2019
                </span>
              </div>
            </div>

          </div>

        </div>
      </div>

    </div>

    <!--===== SERVICES =====-->
    <section class="services section bd-container" id="services">
      <span class="section-subtitle">What i offer</span>
      <h2 class="section-title">Services</h2>

      <div class="services__container bd-grid">
        <div class="services__data">
          <i class="bx bx-palette services__icon"></i>
          <h3 class="services__title">UI/UX Design</h3>
          <p class="services__description">Freelance frontend developer, I am passionate creating and developing web interfaces. With years of experience in web design and development.</p>
          <a href="#" class="button">Know more</a>
        </div>

        <div class="services__data">
          <i class="bx bx-laptop services__icon"></i>
          <h3 class="services__title">Web development</h3>
          <p class="services__description">Freelance frontend developer, I am passionate creating and developing web interfaces. With years of experience in web design and development.</p>
          <a href="#" class="button">Know more</a>
        </div>

        <div class="services__data">
          <i class="bx bx-pen services__icon"></i>
          <h3 class="services__title">Graphic Design</h3>
          <p class="services__description">Freelance frontend developer, I am passionate creating and developing web interfaces. With years of experience in web design and development.</p>
          <a href="#" class="button">Know more</a>
        </div>
      </div>
    </section>

    <!--===== PROJECT IN MIND =====-->
    <section class="project section bd-container">
      <div class="project__container bd-grid">
        <div class="project__data">
          <i class="bx bx-chat project__icon"></i>

          <div>
            <h2 class="project__title">Project in mind</h2>
            <p class="project__description">Hire me to carry out the following projects.</p>
          </div>

          <div>
            <a href="#" class="button button-white">Hire me</a>
          </div>
        </div>
      </div>
    </section>

    <!--===== PORTFOLIO =====-->
    <section class="portfolio section bd-container" id="portfolio">
      <span class="section-subtitle">My recent works</span>
      <h2 class="section-title">Portfolio</h2>

      <div class="portfolio__nav">
        <span class="portfolio__item active-portfolio" data-filter="all">All</span>
        <span class="portfolio__item" data-filter=".web">Web</span>
        <span class="portfolio__item" data-filter=".ux">UI/UX</span>
        <span class="portfolio__item" data-filter=".app">App</span>
      </div>

      <div class="portfolio__container bd-grid">

        <div class="portfolio__content mix web">
          <a href="#"><img src="assets/img/work1.jpg" alt="" class="portfolio__img"></a>
          <div class="portfolio__data">
            <span class="portfolio__subtitle">Web development</span>
            <a href="#">
              <h2 class="portfolio__title">New portfolio of work done for a client.</h2>
            </a>
            <a href="#" class="button button-link">View Details</a>
          </div>
        </div>

        <div class="portfolio__content mix web">
          <a href="#"><img src="assets/img/work2.jpg" alt="" class="portfolio__img"></a>
          <div class="portfolio__data">
            <span class="portfolio__subtitle">Web development</span>
            <a href="#">
              <h2 class="portfolio__title">New portfolio of work done for a client.</h2>
            </a>
            <a href="#" class="button button-link">View Details</a>
          </div>
        </div>

        <div class="portfolio__content mix ux">
          <a href="#"><img src="assets/img/work3.jpg" alt="" class="portfolio__img"></a>
          <div class="portfolio__data">
            <span class="portfolio__subtitle">UX Disign</span>
            <a href="#">
              <h2 class="portfolio__title">New portfolio of work done for a client.</h2>
            </a>
            <a href="#" class="button button-link">View Details</a>
          </div>
        </div>

        <div class="portfolio__content mix ux">
          <a href="#"><img src="assets/img/work4.jpg" alt="" class="portfolio__img"></a>
          <div class="portfolio__data">
            <span class="portfolio__subtitle">UX Disign</span>
            <a href="#">
              <h2 class="portfolio__title">New portfolio of work done for a client.</h2>
            </a>
            <a href="#" class="button button-link">View Details</a>
          </div>
        </div>

        <div class="portfolio__content mix app">
          <a href="#"><img src="assets/img/work5.jpg" alt="" class="portfolio__img"></a>
          <div class="portfolio__data">
            <span class="portfolio__subtitle">Mobile app</span>
            <a href="#">
              <h2 class="portfolio__title">New portfolio of work done for a client.</h2>
            </a>
            <a href="#" class="button button-link">View Details</a>
          </div>
        </div>

        <div class="portfolio__content mix app">
          <a href="#"><img src="assets/img/work6.jpg" alt="" class="portfolio__img"></a>
          <div class="portfolio__data">
            <span class="portfolio__subtitle">Mobile app</span>
            <a href="#">
              <h2 class="portfolio__title">New portfolio of work done for a client.</h2>
            </a>
            <a href="#" class="button button-link">View Details</a>
          </div>
        </div>

      </div>
    </section>

    <!--===== TESTIMONIAL =====-->
    <section class="portfolio section bd-container">
      <span class="section-subtitle">My client saying</span>
      <h2 class="section-title">Testimonial</h2>

      <div class="testimonial__container swiper-container">
        <div class="swiper-wrapper">
          <div class="testimonial__content swiper-slide">
            <img src="assets/img/testimonial1.jpg" alt="" class="testimonial__img">
            <h3 class="testimonial__title">Obito</h3>
            <span class="testimonial__client">Client</span>
            <p class="testimonial__description">This company does very good service, offers the best deals and does a good job. I recommend it.</p>
          </div>

          <div class="testimonial__content swiper-slide">
            <img src="assets/img/testimonial2.jpg" alt="" class="testimonial__img">
            <h3 class="testimonial__title">Sara</h3>
            <span class="testimonial__client">Client</span>
            <p class="testimonial__description">This company does very good service, offers the best deals and does a good job. I recommend it.</p>
          </div>

          <div class="testimonial__content swiper-slide">
            <img src="assets/img/testimonial3.jpg" alt="" class="testimonial__img">
            <h3 class="testimonial__title">Clay</h3>
            <span class="testimonial__client">Client</span>
            <p class="testimonial__description">This company does very good service, offers the best deals and does a good job. I recommend it.</p>
          </div>
        </div>

        <div class="swiper-pagination"></div>
      </div>
    </section>

    <!--===== CONTACTME =====-->
    <section class="contact section bd-container" id="contact">
      <span class="section-subtitle">For Projects</span>
      <h2 class="section-title">Contact Me</h2>

      <div class="contact__container bd-grid">

        <div class="contact__content bd-grid">
          <div class="contact__box">
            <i class="bx bx-home contact__icon"></i>
            <h3 class="contact__title">Location</h3>
            <span class="contact__description">#123 Lima - Peru</span>
          </div>

          <div class="contact__box">
            <i class="bx bx-phone contact__icon"></i>
            <h3 class="contact__title">Phone</h3>
            <span class="contact__description">999-888-777</span>
          </div>

          <div class="contact__box">
            <i class="bx bx-envelope contact__icon"></i>
            <h3 class="contact__title">Gmail</h3>
            <span class="contact__description">hamzah@gmail.com</span>
          </div>

          <div class="contact__box">
            <i class="bx bx-chat contact__icon"></i>
            <h3 class="contact__title">Chat</h3>
            <div>
              <a href="#" class="contact__social"><i class="bx bxl-whatsapp-square"></i></a>
              <a href="#" class="contact__social"><i class="bx bxl-telegram"></i></a>
              <a href="#" class="contact__social"><i class="bx bxl-messenger"></i></a>
            </div>
          </div>


          <form action="" class="contact__form">
            <div class="contact__inputs">
              <input type="text" placeholder="Name" class="contact__input">
              <input type="email" placeholder="Email" class="contact__input">
            </div>

            <div class="contact__inputs">
              <input type="text" placeholder="Project" class="contact__input">
              <input type="number" placeholder="Number" class="contact__input">
            </div>

            <textarea name="" id="" cols="0" rows="7" placeholder="Message" class="contact__input"></textarea>

            <input type="submit" value="Send Message" class="button contact__button">
          </form>

        </div>
      </div>
    </section>

  </main>

  <!--===== FOOTER =====-->
  <footer class="footer">
    <div class="footer__container bd-container">
      <h1 class="footer__title">Hamzah Diza</h1>
      <p class="footer__description">I am Hamzah Diza and this is my personal website, consult me here</p>

      <div class="footer__social">
        <a href="#" class="footer__link bx bxl-linkedin"></a>
        <a href="#" class="footer__link bx bxl-github"></a>
        <a href="#" class="footer__link bx bxl-dribble"></a>
      </div>
      <p class="footer__copy">&#169; 2021 Badicode. All right reversed</p>
    </div>
  </footer>

  <!-- ===== MIXITUP FILTER ===== -->
  <script src="assets/js/mixitup.min.js"></script>

  <!-- ===== SWIPER JS ===== -->
  <script src="assets/js/swiper-bundle.min.js"></script>

  <!-- ===== GSAP ===== -->
  <script src="assets/js/gsap.min.js"></script>

  <!--===== MAIN JS =====-->
  <script src="assets/js/main.js"></script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>