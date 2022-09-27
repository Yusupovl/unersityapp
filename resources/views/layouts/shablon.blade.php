<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="UIU">
    <meta name="author" content="UIU">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="icon" href="/./assets/images/UM-University.png">
    <title>MUU University</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->

    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/uiu__university.css">
    <link rel="stylesheet" href="/assets/css/owl.css">
    <link rel="stylesheet" href="/assets/css/lightbox.css">

  </head>
<body>

  <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p>Mirzo Ulug'bek Universiteti<em>Ohangaron Shaharda</em> Joylashgan. @yield('d') </p>
          </div>
        </div>      
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <a type="button" class="btn btn-danger ms-3" href="{{route('login')}}">Login</a>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      
                      <a href="#" class="logo">
                        <img style="width: 70px; height: 70px;" src="./assets/images/UM-University.png" alt="">
                          MUU
                          <!-- UNIVERSITY -->
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Bosh Sahifa</a></li>
                          <li><a href="meetings.html">Uchrashuvlar</a></li>
                          <li class="scroll-to-section"><a href="#apply">Murojat Uchun</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Sahifalar</a>
                              <ul class="sub-menu">
                                  <li><a href="{{route('meeting')}}">Kelasi Uchrashuv</a></li>
                                  <li><a href="{{route('meeting_detailes')}}">Uchrashuv tafsilot</a></li>
                              </ul>
                          </li>
                          <li class="scroll-to-section"><a href="#courses">Kurslar</a></li> 
                          <li class="scroll-to-section"><a href="#contact">Aloqa Uchun</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <h6>Salom Talabalar</h6>
              <h2>MUU Xush Kelibsiz</h2>
              <p style="font-size: 15px;">Assalomu Alleykum Mirzo Ulug‘bek nomidagi inovatsiyalar unversiteti nodavlat oliy ta'lim muassasasi  xujjatlar qabul qilishni boshlaydi   <br> UIU-Universitetga <a rel="nofollow" href="#" target="_blank">Kerakli xujjatlar</a></p>
              <div class="main-button-red">
                  <div class="scroll-to-section"><a href="{{route('forma')}}">Hoziroq Bizga Qo'shiling!</a></div>
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
          
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-01.png" alt="">
              </div>
              <div class="down-content">
                <h4>Eng Yaxshi Talim</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis earum officiis necessitatibus enim?</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Eng Yaxshi O'qtuvchilar</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis earum officiis necessitatibus enim?</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-03.png" alt="">
              </div>
              <div class="down-content">
                <h4>Eng Yaxshi Talabalar</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis earum officiis necessitatibus enim?</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Onlayn Uchrashuv</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis earum officiis necessitatibus enim?</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-03.png" alt="">
              </div>
              <div class="down-content">
                <h4>Eng yaxshi tarmoq</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis earum officiis necessitatibus enim?</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Kelgusi Uchrashuvlar</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="categories">
            <h4>Uchrashuv toifalari</h4>
            <ul>
              <li><a href="#">Lorem ipsum dolor sit.</a></li>
              <li><a href="#">Lorem ipsum dolor sit.</a></li>
              <li><a href="#">Lorem ipsum dolor sit.</a></li>
              <li><a href="#">Lorem ipsum dolor sit.</a></li>
              <li><a href="#">Lorem ipsum dolor sit.</a></li>
            </ul>
            <div class="main-button-red">
              <a href="meetings.html">kelgusi  barcha uchrashuvlar</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>$100</span>
                  </div>
                  <a href="meeting-details.html"><img src="assets/images/meeting-01.jpg" alt="New Lecturer Meeting"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Sep <span>20</span></h6>
                  </div>
                  <a href="meeting-details.html"><h4>Yangi O'qituvchilar Yig'ilishi</h4></a>
                  <p>Lorem ipsum dolor, sit amet <br>consectetur adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>$100</span>
                  </div>
                  <a href="meeting-details.html"><img src="assets/images/meeting-02.jpg" alt="Online Teaching"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Dec <span>24</span></h6>
                  </div>
                  <a href="meeting-details.html"><h4>Onlayn O'qitish Texnikasi</h4></a>
                  <p>Lorem ipsum dolor, sit amet <br>consectetur adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>$100</span>
                  </div>
                  <a href="meeting-details.html"><img src="assets/images/meeting-03.jpg" alt="Higher Education"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>nov <span>26</span></h6>
                  </div>
                  <a href="meeting-details.html"><h4>Oliy Ta'lim Konferensiyasi</h4></a>
                  <p>Lorem ipsum dolor, sit amet <br>consectetur adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>$100</span>
                  </div>
                  <a href="meeting-details.html"><img src="assets/images/meeting-04.jpg" alt="Student Training"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>oct <span>30</span></h6>
                  </div>
                  <a href="meeting-details.html"><h4>Talabalar Trening Uchrashuvi</h4></a>
                  <p>Lorem ipsum dolor, sit amet <br>consectetur adipisicing.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="apply-now" id="apply">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h3 style="width: 500px;">bakalavr darajasi uchun murojat</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi soluta debitis iure nemo? Beatae itaque impedit architecto, reiciendis iure officiis in inventore at aut recusandae?</p>
                <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">Bizga Qo'shiling!</a></div>
              </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h3 style="width: 500px;">bakalavr darajasi uchun murojat</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi soluta debitis iure nemo? Beatae itaque impedit architecto, reiciendis iure officiis in inventore at aut recusandae?</p>
                <div class="main-button-yellow">
                  <div class="scroll-to-section"><a href="#contact">Bizga Qo'shiling!</a></div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="accordions is-first-expanded">
            <article class="accordion">
              <h2 style="margin-left: 114px;">FAKULTETLAR</h2>
                <div class="accordion-head">
                    <span>Boshlang'ich Talim</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>“Boshlang‘ich ta’lim” fakulteti ilmiy salohiyatga ega bo‘lgan, o‘z ustida tinimsiz mehnat qiladigan jamoa. <br> <br> “Boshlang‘ich ta’lim” hamda Jismoniy madaniyat” ta’lim yo‘nalishlari.  Ularga 100 dan ziyod ilmiy salohiyatli, jonkuyar ustozlar murabbiylik qilishadi.</p>
                    </div>
                </div>
            </article>
            <article class="accordion">
                <div class="accordion-head">
                    <span>Maktabgacha Talim</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>So‘nggi yillarda respublikamizda maktabgacha ta’limning samarali  tizimini rivojlantirish,   maktabgacha ta’lim sohasida malakali kadrlar tayyorlash borasida amalga oshirilayotgan keng  qamrovli islohotlarga javoban, Toshkent davlat pedagogika universiteti rektorining 
                          <br><br>
                          “Universitetning o‘zgartirish va qo‘shimchalar kiritilgan tarkibiy tuzilmasini amaliyotga joriy etish to‘g‘risida”gi  buyrug‘iga asosan 2021-2022 o‘quv yilida “Maktabgacha ta’lim” fakulteti  mustaqil fakultet sifatida qayta tashkil etildi.
                        </p>
                    </div>
                </div>
            </article>
            <article class="accordion">
                <div class="accordion-head">
                    <span>Pedagogika va Psixologiya</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Fakultetda talabalar uchun “Yoshlar kutubxonasi” tashkil etilgan bo‘lib, u yerda 100ga yaqin   mahalliy va xorijiy psixologik-pedagogik kitoblar jamlangan.

                          Shu bilan birgalikda fakultetning elektron kutubxonasi ham bo’lib  u yerda pedagogika va psixologiyaga oid barcha darsliklar jamlangan.
                          
                          Pedagogika va psixologiya fakulteti professor-o‘qituvchilari tomonidan <br><br> “Yosh mutaxassis” to‘garagi, Mirzo-Ulug'bek izdoshlari” hamda “Zakovat” intellektual klublari faoliyat olib bormoqda.
                        </p>
                    </div>
                </div>
            </article>
            <article class="accordion last-accordion">
                <div class="accordion-head">
                    <span>Iqtisodiyot </span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Iqtisodiyot  Fakultetda “Iqtisodiyot va turizm” kafedrasi mavjud bo‘lib, unda 10 dan ortiq sohaning yetuk professor-o‘qituvchilar faoliyat olib borishmoqda. Fakultet bakalavriat yo‘nalishida kunduzgi, kechki va sirtqi ta’lim shakli mavjud bo‘lib, ularda 370 dan ortiq talabalar tahsil olmoqda. Shundan 65 tasi kunduzgi, 54 tasi kechki va 262 tasi sirtqi bo‘lim talabari.<br><br>Fakultetda 10 dan ortiq fanlar uchun ma’ruza matnlari, o‘quv va ishchi dasturlar, amaliyot mashg‘ulotlari, kurs loyiha ishlari, barcha turdagi amaliyotlar, malakaviy bitiruv ishlari va magistrlik dissertatsiyalari uchun uslubiy ko‘rsatmalar ishlab chiqilgan.
                        </p>
                    </div>
                </div>
            </article>
            <article class="accordion last-accordion">
              <div class="accordion-head">
                  <span>Jismoniy Tarbiya va Sport</span>
                  <span class="icon">
                      <i class="icon fa fa-chevron-right"></i>
                  </span>
              </div>
              <div class="accordion-body">
                  <div class="content">
                      <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint voluptates incidunt accusantium dolores voluptatem vero tempora doloremque perspiciatis exercitationem temporibus fugiat <br><br>
                        Delectus reprehenderit rem, eaque earum velit quam ipsa consequatur? A cumque ducimus minima voluptas id aspernatur quis animi, recusandae alias saepe tempora, voluptatem culpa?
                      </p>
                  </div>
              </div>
          </article>
        </div>
        </div>
      </div>
    </div>
  </section>

  {{-- <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Mashxur Kurslarimiz</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-courses-item owl-carousel">
            <div class="item">
              <img src="assets/images/course-01.jpg" alt="Course One">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit, amet consectetur adipisicing.</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$500</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-02.jpg" alt="Course Two">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$500</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-03.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit, amet consectetur adipisicing.</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$500</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-04.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$500</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-01.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit, amet consectetur adipisicing.</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$500</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-02.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$500</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-03.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit, amet consectetur adipisicing.</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$500</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-04.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$500</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-01.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit, amet consectetur adipisicing.</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$500</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-02.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$500</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-03.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit, amet consectetur adipisicing.</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$500</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-04.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$500</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  <section class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <h2>UIU Universitetimiz haqida bir necha faktlar</h2>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content percentage">
                    <div class="count-digit">94</div>
                    <div class="count-title">Muvaffaqiyatli talabalar</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">126</div>
                    <div class="count-title">Hozirgi o'qituvchilar</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content new-students">
                    <div class="count-digit">2345</div>
                    <div class="count-title">Yangi talabalar</div>
                  </div>
                </div> 
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">32</div>
                    <div class="count-title">Mukofotlar</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-lg-6 align-self-center">
          <div class="video">
            <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img src="assets/images/play-icon.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">

               
                <form id="contact" action="{{route('guest.store')}}" method="POST" enctype="multipart/form-data">
    
                    @csrf
                    <div class="row">
                      <div class="col-lg-12">
                        <h2>KELING,  MUROJATLANAMIZ</h2>
                      </div>
                
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div> 
                        @endif
                
                      <div class="col-lg-6">
                
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="">Ism</label>
                              <input name="ism" type="text"  placeholder="ISMINGIZ... " required="" value="{{old('ism')}}">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                                <label for="">Familya</label>
                            <input name="familya" type="text" id="email" value="{{old('familya')}}" placeholder="FAMILYANGIZ..." required="">
                          </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                                <label for="">Sharif</label>
                              <input name="sharif" type="text" id="subject" value="{{old('sharif')}}" placeholder="SHARIFINGIZ..." required="">
                            </fieldset>
                          </div>
                
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="">Tug'ilgan sana</label>
                                    <input type="date" value="{{old('sana')}}" name="sana">
                                </fieldset>
                            </div>
                
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="">Shaxsiy Telefon raqam</label>
                                  <input name="tel_raqam" type="text" id="subject" value="{{old('tel_raqam')}}" placeholder="+998901234567  " required="">
                                </fieldset>
                            </div>
                
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="">Qo'shimcha Telefon raqam</label>
                                  <input name="qosh_tel_raqam" value="{{old('qosh_tel_raqam')}}" type="text" id="subject" placeholder="+998901234567  " required="">
                                </fieldset>
                
                
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="">Maktab(kollej,litsey) tamomlagan sanasi</label>
                                    <input type="date" name="tamomlagan_sanasi" value="{{old('tamomlagan_sanasi')}}">
                                </fieldset>
                            </div>
                
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="">Diplom yoki atestat raqami</label>
                                    <input type="text" name="diplom_raqami" value="{{old('diplom_rqami')}}">
                                </fieldset>
                            </div>
                
                
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="">Fakultetlar</label>
                                    <select class="form-select" name="fakultet" value="{{old('fakultet')}}" id="inputGroupSelect01">
                                        <option value="Maktabgacha talim">Maktabgacha ta'lim</option>
                                        <option value="Pedagogika va Psixologiya">Pedagogika va Psixologiya</option>
                                        <option value="Iqtisodiyot">Iqtisodiyot</option>
                                        <option value="Jismoniy tarbiya va sport">Jismoniy tarbiya va sport</option>
                                        <option value="Boshlang'ich ta'lim">Boshlang'ich ta'lim</option>
                                      </select>
                                </fieldset>
                            </div>
                
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="">Ta'lim shakli</label>
                                    <select class="form-select" value="{{old('talim_shakli')}}" name="talim_shakli" id="inputGroupSelect01">
                                        <option value="Kunduzgi">Kunduzgi</option>
                                        <option value="Kechgi">Kechgi</option>
                                        <option value="Sirtqi">Sirtqi</option>
                                      </select>
                                </fieldset>
                            </div>
                
                            
                
                      </div>
                
                
                    <div class="col-lg-6">
                
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="">Mamlakat</label>
                                <select class="form-select" value="{{old('mamlakat')}}" name="mamlakat" id="inputGroupSelect01">
                                    <option value="O'zbekiston">O'zbekiston</option>
                                  </select>
                            </fieldset>
                        </div>
                
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="">Viloyat</label>
                                <select class="form-select" value="{{old('viloyat')}}" name="viloyat" id="inputGroupSelect01">
                                    <option value="Andijon">Andijon viloyati</option>
                                    <option value="Namangan">Namangan viloyati</option>
                                    <option value="Farg">Farg'ona viloyati</option>
                                    <option value="Toshkent viloyati">Toshkent viloyati</option>
                                    <option value="Toshkent shahri">Toshkent shahri</option>
                                    <option value="Sirdaryo">Sirdaryo viloyati</option>
                                    <option value="Jizzax">Jizzax viloyati</option>
                                    <option value="Samarqand">Samarqand viloyati</option>
                                    <option value="Qashqadaryo">Qashqadaryo viloyati</option>
                                    <option value="Surxondaryo">Surxondaryo voloyati</option>
                                    <option value="Navoiy">Navoiy viloyati</option>
                                    <option value="Buxoro">Buxoro viloyati</option>
                                    <option value="Xorazm">Xorazm viloyati</option>
                                    <option value="Qoraqalpoqiston">Qoraqalpoqiston Respublikasi</option>
                                  </select>
                            </fieldset>
                        </div>
                
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="">Manzilingiz</label>
                              <input name="manzil" type="text" id="subject" value="{{old('manzil')}}" placeholder="MANZILINGIZ...  " required="">
                            </fieldset>
                        </div>
                
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="">Fuqaroligi</label>
                              <input name="fuqaroligi" type="text" id="subject" value="{{old('fuqaroligi')}}" placeholder="Fuqaroligi...  " required="">
                            </fieldset>
                        </div>
                
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="">Millati</label>
                                <select class="form-select" value="{{old('millati')}}" name="millati" id="inputGroupSelect01">
                                    <option value="ozbek">o'zbek</option>
                                    <option value="rus">rus</option>
                                    <option value="tojik">tojik</option>
                                    <option value="qozoq">qozoq</option>
                                    <option value="qirgiz">qirg'iz</option>
                                  </select>
                            </fieldset>
                        </div>
                
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="">Pasport seriya raqami</label>
                                <input type="text" value="{{old('pasport_raqami')}}" name="pasport_raqami">
                            </fieldset>
                        </div>
                
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="pasport_rasm" class="form-label">Pasport rasmini yuklang</label>
                                <input class="form-control" value="{{old('pasport_rasm')}}" type="file" name="pasport_rasm" >
                            </fieldset>
                        </div>
                
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="">Qayerni tamomlagansiz</label>
                                <select class="form-select" name="tamomlagani" value="{{old('tamomlagani')}}" id="inputGroupSelect01">
                                    <option value="maktab">maktab</option>
                                    <option value="litsey">litsey</option>
                                    <option value="kollej">kollej</option>
                                  </select>
                            </fieldset>
                        </div>
                
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="">Maktab(kollej,Litsey) nomi</label>
                                <input type="text" name="tamomlagan_nomi" value="{{old('tamomlagan_nomi')}}">
                            </fieldset>
                        </div>
                
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="">Maktab(kollej,litsey)  manzili</label>
                              <input name="tamomlagan_manzil" value="{{old('tamomlagan_manzil')}}" type="text" id="subject" placeholder="MANZILI...  " required="">
                            </fieldset>
                        </div>
                
                       
                    </div>
                
                
                          {{-- <div class="col-lg-12">
                        <fieldset>
                          <textarea name="message" type="text" class="form-control" id="message" placeholder="SZINING XABARINGIZ..." required=""></textarea>
                        </fieldset>
                      </div>--}}
                      
                
                    </div>
                    <div class="col-lg-12">
                        <fieldset>
                          <input type="submit" id="form-submit" value="Saqlash">
                        </fieldset>
                      </div> 
                </form>


           
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Telefon Raqam</h6>
                <span>010-020-0340</span>
              </li>
              <li>
                <h6>Email Pochta</h6>
                <span>universitet@gmail.com</span>
              </li>
              <li>
                <h6>Ko'cha Manzili</h6>
                <span>Amir Temur</span>
              </li>
              <li>
                <h6>Website Linki</h6>
                <span>www.uiu.com</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Copyright © 2022 UIU Meeting Co., Ltd. All Rights Reserved. 
          <br>Design: <a href="#" target="_parent" title="Universiteti">UIU</a></p>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/assets/js/isotope.min.js"></script>
    <script src="/assets/js/owl-carousel.js"></script>
    <script src="/assets/js/lightbox.js"></script>
    <script src="/assets/js/tabs.js"></script>
    <script src="/assets/js/video.js"></script>
    <script src="/assets/js/slick-slider.js"></script>
    <script src="/assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</body>
</html>