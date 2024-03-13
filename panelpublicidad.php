<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  include("head.php");
  include("conexion.php");
  ?>

  <title>Publicidad | DinamicLandings</title>
</head>

<body>

  <?php
  if ($acceso != 0) {  // * El usuario ha iniciado sesión, permite el acceso a la página protegida
    // <!-- Header  -->
    $nav = 3;
    include("navbar.php");
  ?>
    <!-- Header End -->

    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content">

            <!-- ***** Nuevas Plantillas Start ***** -->
            <div class="row">
              <div class="col-lg-8">
                <div class="featured-games header-text">
                  <div class="heading-section">
                    <h4><em>Nuevas</em> Plantillas</h4>
                  </div>
                  <div class="owl-features owl-carousel">
                    <div class="item">
                      <div class="thumb">
                        <img src="assets/img/flyer/imagenesflyer/publi2.png" alt="">
                        <div class="hover-effect">
                          <h6>Crear</h6>
                        </div>
                      </div>
                      <h4>Hamburguesas<br><span>Alimentos</span></h4>
                      <!-- <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul> -->
                    </div>
                    <div class="item">
                      <div class="thumb">
                        <img src="assets/img/flyer/imagenesflyer/publi20.png" alt="">
                        <div class="hover-effect">
                          <h6>Crear</h6>
                        </div>
                      </div>
                      <h4>Ensaladas<br><span>Alimentos</span></h4>
                      <!-- <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul> -->
                    </div>
                    <div class="item">
                      <div class="thumb">
                        <img src="assets/img/flyer/imagenesflyer/publi74.png" alt="">
                        <div class="hover-effect">
                          <h6>Crear</h6>
                        </div>
                      </div>
                      <h4>Tacos<br><span>Alimentos</span></h4>
                      <!-- <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul> -->
                    </div>
                    <div class="item">
                      <div class="thumb">
                        <img src="assets/img/flyer/imagenesflyer/publi80.png" alt="">
                        <div class="hover-effect">
                          <h6>Crear</h6>
                        </div>
                      </div>
                      <h4>Fiestas<br><span>Fiestas y Eventos</span></h4>
                      <!-- <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul> -->
                    </div>
                    <div class="item">
                      <div class="thumb">
                        <img src="assets/img/flyer/imagenesflyer/publi90.png" alt="">
                        <div class="hover-effect">
                          <h6>Crear</h6>
                        </div>
                      </div>
                      <h4>Cumpleaños<br><span>Fiestas y Eventos</span></h4>
                      <!-- <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul> -->
                    </div>
                    <div class="item">
                      <div class="thumb">
                        <img src="assets/img/flyer/imagenesflyer/publi132.png" alt="">
                        <div class="hover-effect">
                          <h6>Crear</h6>
                        </div>
                      </div>
                      <h4>Computadoras<br><span>Tecnología</span></h4>
                      <!-- <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul> -->
                    </div>
                  </div>
                  <br><br>
                  <div class="owl-features owl-carousel">
                    <div class="item">
                      <div class="thumb">
                        <img src="assets/img/flyer/imagenesflyer/publi80.png" alt="">
                        <div class="hover-effect">
                          <h6>Crear</h6>
                        </div>
                      </div>
                      <h4>Fiestas<br><span>Fiestas y Eventos</span></h4>
                      <!-- <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul> -->
                    </div>
                    <div class="item">
                      <div class="thumb">
                        <img src="assets/img/flyer/imagenesflyer/publi90.png" alt="">
                        <div class="hover-effect">
                          <h6>Crear</h6>
                        </div>
                      </div>
                      <h4>Cumpleaños<br><span>Fiestas y Eventos</span></h4>
                      <!-- <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul> -->
                    </div>
                    <div class="item">
                      <div class="thumb">
                        <img src="assets/img/flyer/imagenesflyer/publi132.png" alt="">
                        <div class="hover-effect">
                          <h6>Crear</h6>
                        </div>
                      </div>
                      <h4>Computadoras<br><span>Tecnología</span></h4>
                      <!-- <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul> -->
                    </div>
                    <div class="item">
                      <div class="thumb">
                        <img src="assets/img/flyer/imagenesflyer/publi2.png" alt="">
                        <div class="hover-effect">
                          <h6>Crear</h6>
                        </div>
                      </div>
                      <h4>Hamburguesas<br><span>Alimentos</span></h4>
                      <!-- <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul> -->
                    </div>
                    <div class="item">
                      <div class="thumb">
                        <img src="assets/img/flyer/imagenesflyer/publi20.png" alt="">
                        <div class="hover-effect">
                          <h6>Crear</h6>
                        </div>
                      </div>
                      <h4>Ensaladas<br><span>Alimentos</span></h4>
                      <!-- <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul> -->
                    </div>
                    <div class="item">
                      <div class="thumb">
                        <img src="assets/img/flyer/imagenesflyer/publi74.png" alt="">
                        <div class="hover-effect">
                          <h6>Crear</h6>
                        </div>
                      </div>
                      <h4>Tacos<br><span>Alimentos</span></h4>
                      <!-- <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>
                      <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="top-streamers">
                  <div class="heading-section">
                    <h4><em>Top</em> Plantillas</h4>
                  </div>
                  <ul>
                    <li>
                      <span>#1</span>
                      <img src="assets/img/flyer/imagenesflyer/publi2.png" alt="" class="rounded-3" style="max-width: 46px; margin-right: 15px;">
                      <h6>Hamburguesas</h6>
                      <div class="main-button">
                        <a href="#">Crear</a>
                      </div>
                    </li>
                    <li>
                      <span>#2</span>
                      <img src="assets/img/flyer/imagenesflyer/publi20.png" alt="" class="rounded-3" style="max-width: 46px; margin-right: 15px;">
                      <h6>Ensaladas</h6>
                      <div class="main-button">
                        <a href="#">Crear</a>
                      </div>
                    </li>
                    <li>
                      <span>#3</span>
                      <img src="assets/img/flyer/imagenesflyer/publi74.png" alt="" class="rounded-3" style="max-width: 46px; margin-right: 15px;">
                      <h6>Tacos</h6>
                      <div class="main-button">
                        <a href="#">Crear</a>
                      </div>
                    </li>
                    <li>
                      <span>#4</span>
                      <img src="assets/img/flyer/imagenesflyer/publi80.png" alt="" class="rounded-3" style="max-width: 46px; margin-right: 15px;">
                      <h6>Fiestas</h6>
                      <div class="main-button">
                        <a href="#">Crear</a>
                      </div>
                    </li>
                    <li>
                      <span>#5</span>
                      <img src="assets/img/flyer/imagenesflyer/publi90.png" alt="" class="rounded-3" style="max-width: 46px; margin-right: 15px;">
                      <h6>Cumpleaños</h6>
                      <div class="main-button">
                        <a href="#">Crear</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- ***** Nuevas Plantillas End ***** -->

            <!-- ***** Live Stream Start ***** -->
            <!-- <div class="live-stream">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Most Popular</em> Live Stream</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/stream-05.jpg" alt="">
                    <div class="hover-effect">
                      <div class="content">
                        <div class="live">
                          <a href="#">Live</a>
                        </div>
                        <ul>
                          <li><a href="#"><i class="fa fa-eye"></i> 1.2K</a></li>
                          <li><a href="#"><i class="fa fa-gamepad"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <div class="avatar">
                      <img src="assets/images/avatar-01.jpg" alt="" style="max-width: 46px; border-radius: 50%; float: left;">
                    </div>
                    <span><i class="fa fa-check"></i> Kengan Omeg</span>
                    <h4>Just Talking With Fans</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/stream-06.jpg" alt="">
                    <div class="hover-effect">
                      <div class="content">
                        <div class="live">
                          <a href="#">Live</a>
                        </div>
                        <ul>
                          <li><a href="#"><i class="fa fa-eye"></i> 1.2K</a></li>
                          <li><a href="#"><i class="fa fa-gamepad"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <div class="avatar">
                      <img src="assets/images/avatar-02.jpg" alt="" style="max-width: 46px; border-radius: 50%; float: left;">
                    </div>
                    <span><i class="fa fa-check"></i> LahutaMalc</span>
                    <h4>CS-GO 36 Hours Live Stream</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/stream-07.jpg" alt="">
                    <div class="hover-effect">
                      <div class="content">
                        <div class="live">
                          <a href="#">Live</a>
                        </div>
                        <ul>
                          <li><a href="#"><i class="fa fa-eye"></i> 1.2K</a></li>
                          <li><a href="#"><i class="fa fa-gamepad"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <div class="avatar">
                      <img src="assets/images/avatar-03.jpg" alt="" style="max-width: 46px; border-radius: 50%; float: left;">
                    </div>
                    <span><i class="fa fa-check"></i> Areluwa</span>
                    <h4>Maybe Nathej Allnight Chillin'</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/stream-08.jpg" alt="">
                    <div class="hover-effect">
                      <div class="content">
                        <div class="live">
                          <a href="#">Live</a>
                        </div>
                        <ul>
                          <li><a href="#"><i class="fa fa-eye"></i> 1.2K</a></li>
                          <li><a href="#"><i class="fa fa-gamepad"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <div class="avatar">
                      <img src="assets/images/avatar-04.jpg" alt="" style="max-width: 46px; border-radius: 50%; float: left;">
                    </div>
                    <span><i class="fa fa-check"></i> NewGangTeam</span>
                    <h4>Live Streaming Till Morning</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/stream-07.jpg" alt="">
                    <div class="hover-effect">
                      <div class="content">
                        <div class="live">
                          <a href="#">Live</a>
                        </div>
                        <ul>
                          <li><a href="#"><i class="fa fa-eye"></i> 1.2K</a></li>
                          <li><a href="#"><i class="fa fa-gamepad"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <div class="avatar">
                      <img src="assets/images/avatar-01.jpg" alt="" style="max-width: 46px; border-radius: 50%; float: left;">
                    </div>
                    <span><i class="fa fa-check"></i> Kengan Omeg</span>
                    <h4>Just Talking With Fans</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/stream-08.jpg" alt="">
                    <div class="hover-effect">
                      <div class="content">
                        <div class="live">
                          <a href="#">Live</a>
                        </div>
                        <ul>
                          <li><a href="#"><i class="fa fa-eye"></i> 1.2K</a></li>
                          <li><a href="#"><i class="fa fa-gamepad"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <div class="avatar">
                      <img src="assets/images/avatar-02.jpg" alt="" style="max-width: 46px; border-radius: 50%; float: left;">
                    </div>
                    <span><i class="fa fa-check"></i> LahutaMalc</span>
                    <h4>CS-GO 36 Hours Live Stream</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/stream-05.jpg" alt="">
                    <div class="hover-effect">
                      <div class="content">
                        <div class="live">
                          <a href="#">Live</a>
                        </div>
                        <ul>
                          <li><a href="#"><i class="fa fa-eye"></i> 1.2K</a></li>
                          <li><a href="#"><i class="fa fa-gamepad"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <div class="avatar">
                      <img src="assets/images/avatar-03.jpg" alt="" style="max-width: 46px; border-radius: 50%; float: left;">
                    </div>
                    <span><i class="fa fa-check"></i> Areluwa</span>
                    <h4>Maybe Nathej Allnight Chillin'</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/stream-06.jpg" alt="">
                    <div class="hover-effect">
                      <div class="content">
                        <div class="live">
                          <a href="#">Live</a>
                        </div>
                        <ul>
                          <li><a href="#"><i class="fa fa-eye"></i> 1.2K</a></li>
                          <li><a href="#"><i class="fa fa-gamepad"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <div class="avatar">
                      <img src="assets/images/avatar-04.jpg" alt="" style="max-width: 46px; border-radius: 50%; float: left;">
                    </div>
                    <span><i class="fa fa-check"></i> NewGangTeam</span>
                    <h4>Live Streaming Till Morning</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="streams.html">Load More Streams</a>
                </div>
              </div>
            </div>
          </div> -->
            <!-- ***** Live Stream End ***** -->

          </div>
        </div>
      </div>
    </div>

  <?php
  } else {
    header("Location: login.php");
  }

  include("footer.php"); ?>
</body>

</html>