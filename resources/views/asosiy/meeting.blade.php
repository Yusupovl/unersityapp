<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="icon" href="/./assets/images/UM-University.png">
    <title>UIU University</title>

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
            <p>Mirzo Ulug'bek  UIU  Universiteti<em>Ohangaron Shaharda</em> Joylashgan. </p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
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
                      <a href="{{route('asosiyga')}}" class="logo">
                        <img style="width: 70px; height: 70px;" src="./assets/images/UM-University.png" alt="">
                        UIU 
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li><a href="{{route('asosiyga')}}">Bosh Sahifa</a></li>
                          <li><a href="{{route('meeting')}}"  class="active">Uchrashuvlar</a></li>
                          <li><a href="{{route('asosiyga')}}">Murojat Uchun</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Sahifalar</a>
                              <ul class="sub-menu">
                                  <li><a href="{{route('meeting')}}">Kelasi Uchrashuv</a></li>
                                  <li><a href="{{route('meeting_detailes')}}">Uchrashuv Tafsilot</a></li>
                              </ul>
                          </li>
                          <li><a href="{{route('asosiyga')}}">Kurslar</a></li> 
                          <li><a href="{{route('asosiyga')}}">Aloqa Uchun</a></li> 
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

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Mana bizning bo'lajak uchrashuvlarimiz</h6>
          <h2>Kelgusi uchrashuvlar</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="filters">
                <ul>
                  <li data-filter="*"  class="active">Barcha uchrashuvlar</li>
                  <li data-filter=".soon">Tez orada</li>
                  <li data-filter=".imp">Muhim</li>
                  <li data-filter=".att">Jozibali</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="row grid">
                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>$100</span>
                      </div>
                      <a href="meeting-details.html"><img src="assets/images/meeting-01.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Dec <span>12</span></h6>
                      </div>
                      <a href="meeting-details.html"><h4>Yangi o'qituvchilar yig'ilishi</h4></a>
                      <p>Lorem ipsum dolor sit amet <br> consectetur adipisicing.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>$100</span>
                      </div>
                      <a href="meeting-details.html"><img src="assets/images/meeting-02.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Feb <span>14</span></h6>
                      </div>
                      <a href="meeting-details.html"><h4>Onlayn o'qitish texnikasi</h4></a>
                      <p>Lorem ipsum dolor sit amet <br> consectetur adipisicing.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>$100</span>
                      </div>
                      <a href="meeting-details.html"><img src="assets/images/meeting-03.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>16</span></h6>
                      </div>
                      <a href="meeting-details.html"><h4>Tarmoqni o'qitish kontseptsiyasi</h4></a>
                      <p>Lorem ipsum dolor sit amet <br> consectetur adipisicing.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all att">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>$100</span>
                      </div>
                      <a href="meeting-details.html"><img src="assets/images/meeting-04.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Sep <span>18</span></h6>
                      </div>
                      <a href="meeting-details.html"><h4>Onlayn o'qitish vositalari</h4></a>
                      <p>Lorem ipsum dolor sit amet <br> consectetur adipisicing.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all att">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>$100</span>
                      </div>
                      <a href="meeting-details.html"><img src="assets/images/meeting-02.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>22</span></h6>
                      </div>
                      <a href="meeting-details.html"><h4>Yangi o'qitish texnikasi</h4></a>
                      <p>Lorem ipsum dolor sit amet <br> consectetur adipisicing.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>$100</span>
                      </div>
                      <a href="meeting-details.html"><img src="assets/images/meeting-03.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Jan <span>24</span></h6>
                      </div>
                      <a href="meeting-details.html"><h4>Texnologiya konferensiyasi</h4></a>
                      <p>Lorem ipsum dolor sit amet <br> consectetur adipisicing.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all imp att">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>$100</span>
                      </div>
                      <a href="meeting-details.html"><img src="assets/images/meeting-01.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>27</span></h6>
                      </div>
                      <a href="meeting-details.html"><h4>Onlayn o'qitish texnikasi</h4></a>
                      <p>Lorem ipsum dolor sit amet <br> consectetur adipisicing.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all soon imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>$100</span>
                      </div>
                      <a href="meeting-details.html"><img src="assets/images/meeting-02.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>28</span></h6>
                      </div>
                      <a href="meeting-details.html"><h4>Tezkor ma'ruza dizayni</h4></a>
                      <p>Lorem ipsum dolor sit amet <br> consectetur adipisicing.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all att soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>$100</span>
                      </div>
                      <a href="meeting-details.html"><img src="assets/images/meeting-03.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Oct <span>30</span></h6>
                      </div>
                      <a href="meeting-details.html"><h4>Onlayn ijtimoiy tarmoq</h4></a>
                      <p>Lorem ipsum dolor sit amet <br> consectetur adipisicing.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="pagination">
                <ul>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Copyright © 2022 UIU Meeting Co., Ltd. All Rights Reserved. 
          <br>Design: <a href="#" target="_parent" title="UIU">UIU</a></p>
    </div>
  </section>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
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
