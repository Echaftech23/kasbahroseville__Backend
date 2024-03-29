<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico" />
    <!-- Style files  -->
    <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}" />
    <link rel="stylesheet" href="{{ mix('resources/css/style.css') }}" />

</head>
  <body>
    <!-- Preloader -->
    <div
      id="preloader"
      class="w-full h-full fixed top-0 left-0 bg-preload flex items-center justify-center overflow-hidden"
    >
      <div class="loader text-white relative"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area relative w-full bg-preload">
      <!-- Search Form -->
      <div class="search-form flex relative items-center w-full h-0 bg-preload">
        <div class="container mx-auto">
          <form action="" method="get">
            <input
              type="search"
              class="w-full bg-transparent text-white"
              name="search-form-input"
              id="searchFormInput"
              placeholder="Type your keyword ..."
            />
            <button type="submit">
              <i
                class="icon_search bg-transparent cursor-pointer text-white text-right"
              ></i>
            </button>
          </form>
        </div>
      </div>

      <!-- Top Header Area Start -->
      <div class="top-header-area relative w-full">
        <div class="container">
          <div class="flex justify-between">
            <div>
              <div class="top-header-content flex items-center">
                <a href="#"
                  ><i class="icon_phone"></i>
                  <span>(+212) 069-890-9638</span></a
                >
                <a href="#"
                  ><i class="icon_mail"></i>
                  <span>Kasbah.roseville@gmail.com</span></a
                >
              </div>
            </div>

            <div>
              <div class="top-header-content flex items-center">
                <!-- Top Social Area -->
                <div class="top-social-area ml-auto">
                  <a href="#"
                    ><i class="fa fa-facebook" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-twitter" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-tripadvisor" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-instagram" aria-hidden="true"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top Header Area End -->

      <!-- Main Header Start -->
      <div class="main-header-area">
        <div class="classy-nav-container breakpoint-off p-0 bg-transparent">
          <div class="container">
            <!-- Classy Menu -->
            <nav class="classy-navbar justify-between p-0" id="kasbahNav">
              <!-- Logo -->
              <a class="nav-brand" href="index.html">
                <img src="img/core-img/logo.png" width="100px" alt="" />
              </a>

              <!-- Navbar Toggler -->
              <div class="classy-navbar-toggler">
                <span class="navbarToggler">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
              </div>

              <!-- Menu -->
              <div class="classy-menu">
                <!-- Menu Close Button -->
                <div class="classycloseIcon">
                  <div class="cross-wrap">
                    <span class="top"></span><span class="bottom"></span>
                  </div>
                </div>
                <!-- Nav Start -->
                <div class="classynav">
                  <ul id="nav">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="rooms.html">Rooms</a></li>
                    <li><a href="blog.html">Facilities</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="blog.html">Blogs</a></li>
                    <li><a href="contact.html">Contact</a></li>
                  </ul>

                  <!-- Search -->
                  <div class="search-btn ml-4">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </div>

                  <!-- Book Now -->
                  <div class="book-now-btn lg:ml-5">
                    <a href="#"
                      >Book Now
                      <i class="fa fa-long-arrow-right" aria-hidden="true"></i
                    ></a>
                  </div>
                </div>
                <!-- Nav End -->
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <div
      class="breadcrumb-area bg-img bg-overlay jarallax"
      style="background-image: url(img/bg-img/16.jpg)"
    >
      <div class="container mx-auto h-full">
        <div class="flex flex-wrap h-full items-end">
          <div class="w-full">
            <div
              class="breadcrumb-content flex items-center justify-between pb-12"
            >
              <h2 class="room-title">Kahina Room</h2>
              <h2 class="room-price">$120 <span>/ Per Night</span></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Rooms Area Start -->
    <div class="kasbah-rooms-area section-padding-100-0">
      <div class="container mx-auto">
        <div class="flex flex-wrap">
          <div class="w-full lg:w-8/12">
            <!-- Single Room Details Area -->
            <div class="single-room-details-area mb-50">
              <!-- Room Thumbnail Slides -->
              <div class="room-thumbnail-slides mb-50">
                <div
                  id="room-thumbnail--slide"
                  class="carousel slide"
                  data-ride="carousel"
                >
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img
                        src="img/core-img/1686053792_DSC_6717v1.jpg"
                        class="block w-full h-full"
                        alt=""
                      />
                    </div>
                    <div class="carousel-item">
                      <img
                        src="img/cover/IMG_2549.jpeg"
                        class="block w-full h-full"
                        alt=""
                      />
                    </div>
                    <div class="carousel-item">
                      <img
                        src="img/core-img/1686053792_IMG_6950v1.jpg"
                        class="block w-full h-full"
                        alt=""
                      />
                    </div>
                    <div class="carousel-item">
                      <img
                        src="img/cover/IMG_2548.jpeg"
                        class="block w-full h-full"
                        alt=""
                      />
                    </div>
                    <div class="carousel-item">
                      <img
                        src="img/cover/IMG_9916.jpg"
                        class="block w-full h-full"
                        alt=""
                      />
                    </div>
                  </div>

                  <ol class="carousel-indicators">
                    <li
                      data-target="#room-thumbnail--slide"
                      data-slide-to="0"
                      class="active"
                    >
                      <img
                        src="img/core-img/1686053792_DSC_6717v1.jpg"
                        class="block w-full h-full"
                        alt=""
                      />
                    </li>
                    <li data-target="#room-thumbnail--slide" data-slide-to="1">
                      <img
                        src="img/cover/IMG_2549.jpeg"
                        class="block w-full h-full"
                        alt=""
                      />
                    </li>
                    <li data-target="#room-thumbnail--slide" data-slide-to="2">
                      <img
                        src="img/core-img/1686053792_IMG_6950v1.jpg"
                        class="block w-full h-full"
                        alt=""
                      />
                    </li>
                    <li data-target="#room-thumbnail--slide" data-slide-to="3">
                      <img
                        src="img/cover/IMG_2548.jpeg"
                        class="block w-full h-full"
                        alt=""
                      />
                    </li>
                    <li data-target="#room-thumbnail--slide" data-slide-to="4">
                      <img
                        src="img/cover/IMG_9916.jpg"
                        class="block w-full h-full"
                        alt=""
                      />
                    </li>
                  </ol>
                </div>
              </div>

              <!-- Room Features -->
              <div class="room-features-area flex flex-wrap mb-50">
                <h6>Size: <span>350-425sqf</span></h6>
                <h6>Capacity: <span>Max persion 5</span></h6>
                <h6>Bed: <span>King beds</span></h6>
                <h6>Services: <span>Wifi, television ...</span></h6>
              </div>

              <p>
                If you live in New York City or travel to and from New York City
                a lot, you know all about the traffic there. Getting places is
                often next to impossible, even with the gazillion yellow cabs.
                If you’re like me you often look with envy at those shiny
                limousines with their unformed drivers and wish you could sit in
                one. Well, you can. New York limo service is more affordable
                than you think, whether it’s for Newark airport transportation,
                LaGuardia airport transportation, or to drive wherever you wish
                to go.
              </p>

              <ul>
                <li>
                  <i class="fa fa-check"></i> Mauris molestie lectus in irdiet
                  auctor.
                </li>
                <li>
                  <i class="fa fa-check"></i> Dictum purus at blandit molestie.
                </li>
                <li>
                  <i class="fa fa-check"></i> Neque non fermentum suscipit.
                </li>
                <li>
                  <i class="fa fa-check"></i> Donec id dui ac massa malesuada.
                </li>
                <li>
                  <i class="fa fa-check"></i> In sit amet sapien quis orci
                  maximus.
                </li>
                <li>
                  <i class="fa fa-check"></i> Vestibulum rutrum diam vel eros
                  tristique.
                </li>
              </ul>

              <p>
                Every time I hail a cab in New York City or wait for one at the
                airports, I hope I’ll be lucky enough to get one that’s halfway
                decent and that the driver actually speaks English. I have spent
                many anxious moments wondering if I ever get to my destination.
                Or whether I’d get ripped off. Even if all goes well, I can’t
                say I can remember many rides in New York cabs that were very
                pleasant. And given how much they cost by now, going with a limo
                makes ever more sense.
              </p>
            </div>

            <!-- Room Service -->
            <div class="room-service mb-50">
              <h4>Room Services</h4>

              <ul>
                <li>
                  <img src="img/core-img/icon1.png" alt="" /> Air Conditioning
                </li>
                <li><img src="img/core-img/icon2.png" alt="" /> Free drinks</li>
                <li>
                  <img src="img/core-img/icon3.png" alt="" /> Restaurant quality
                </li>
                <li><img src="img/core-img/icon4.png" alt="" /> Cable TV</li>
                <li>
                  <img src="img/core-img/icon5.png" alt="" /> Unlimited Wifi
                </li>
                <li>
                  <img src="img/core-img/icon6.png" alt="" /> Service 24/24
                </li>
              </ul>
            </div>

            <!-- Room Review -->
            <div class="room-review-area mb-100">
              <h4>Room Review</h4>

              <!-- Single Review Area -->
              <div class="single-room-review-area flex items-center">
                <div class="reviwer-thumbnail">
                  <img src="img/bg-img/53.jpg" alt="" />
                </div>
                <div class="reviwer-content">
                  <div
                    class="reviwer-title-rating flex items-center justify-between"
                  >
                    <div class="reviwer-title">
                      <span>27 Aug 2019</span>
                      <h6>Brandon Kelley</h6>
                    </div>
                    <div class="reviwer-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <p>
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                    amet, consectetur, adipisci velit, sed quia non numquam eius
                    modi tempora.
                  </p>
                </div>
              </div>

              <!-- Single Review Area -->
              <div class="single-room-review-area flex items-center">
                <div class="reviwer-thumbnail">
                  <img src="img/bg-img/54.jpg" alt="" />
                </div>
                <div class="reviwer-content">
                  <div
                    class="reviwer-title-rating flex items-center justify-between"
                  >
                    <div class="reviwer-title">
                      <span>27 Aug 2019</span>
                      <h6>Sounron Masha</h6>
                    </div>
                    <div class="reviwer-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <p>
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                    amet, consectetur, adipisci velit, sed quia non numquam eius
                    modi tempora.
                  </p>
                </div>
              </div>

              <!-- Single Review Area -->
              <div class="single-room-review-area flex items-center">
                <div class="reviwer-thumbnail">
                  <img src="img/bg-img/55.jpg" alt="" />
                </div>
                <div class="reviwer-content">
                  <div
                    class="reviwer-title-rating flex items-center justify-between"
                  >
                    <div class="reviwer-title">
                      <span>27 Aug 2019</span>
                      <h6>Amada Lyly</h6>
                    </div>
                    <div class="reviwer-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <p>
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                    amet, consectetur, adipisci velit, sed quia non numquam eius
                    modi tempora.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="w-full lg:pl- lg:w-4/12">
            <!-- Hotel Reservation Area -->
            <div class="hotel-reservation--area mb-100">
              <form action="#" method="post">
                <div class="form-group mb-30">
                  <label for="checkInDate">Date</label>
                  <div class="input-daterange" id="datepicker">
                    <div class="row no-gutters">
                      <div class="col-6">
                        <input
                          type="text"
                          class="input-small form-control"
                          name="checkInDate"
                          id="checkInDate"
                          placeholder="Check In"
                        />
                      </div>
                      <div class="col-6">
                        <input
                          type="text"
                          class="input-small form-control"
                          name="checkOutDate"
                          placeholder="Check Out"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-30">
                  <label for="guests">Guests</label>
                  <div class="row">
                    <div class="col-6">
                      <select name="adults" id="guests" class="form-control">
                        <option value="adults">Adults</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                      </select>
                    </div>
                    <div class="col-6">
                      <select
                        name="children"
                        id="children"
                        class="form-control"
                      >
                        <option value="children">Children</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-50">
                  <div class="slider-range">
                    <div class="range-price">Max Price: $0 - $300</div>
                    <div
                      data-min="0"
                      data-max="300"
                      data-unit="$"
                      class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                      data-value-min="0"
                      data-value-max="300"
                      data-label-result="Max Price: "
                    >
                      <div
                        class="ui-slider-range ui-widget-header ui-corner-all"
                      ></div>
                      <span
                        class="ui-slider-handle ui-state-default ui-corner-all"
                        tabindex="0"
                      ></span>
                      <span
                        class="ui-slider-handle ui-state-default ui-corner-all"
                        tabindex="0"
                      ></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn roberto-btn w-100">
                    Check Available
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Rooms Area End -->

    <!-- Call To Action Area Start -->
    <section class="kasbah-cta-area">
      <div class="container mx-auto">
        <div
          class="cta-content bg-img bg-overlay jarallax"
          style="background-image: url(img/bg-img/1.jpg)"
        >
          <div class="flex flex-wrap items-center">
            <div class="w-full md:w-7/12">
              <div class="cta-text mb-50">
                <h2>Contact us now!</h2>
                <h6>
                  Contact (+212) 068-480-0039 to book directly or for advice
                </h6>
              </div>
            </div>
            <div class="w-full md:w-5/12 text-right">
              <a href="#" class="btn hero-btn mb-50">Contact Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Call To Action Area End -->

    <!-- Partner Area Start -->
    <div class="partner-area">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full">
            <div
              class="partner-logo-content flex items-center justify-between wow fadeInUp"
              data-wow-delay="300ms"
            >
              <!-- Single Partner Logo -->
              <a href="#" class="partner-logo"
                ><img src="img/core-img/p1.png" alt="partner logo"
              /></a>
              <!-- Single Partner Logo -->
              <a href="#" class="partner-logo"
                ><img src="img/core-img/p2.png" alt="partner logo"
              /></a>
              <!-- Single Partner Logo -->
              <a href="#" class="partner-logo"
                ><img src="img/core-img/p3.png" alt="partner logo"
              /></a>
              <!-- Single Partner Logo -->
              <a href="#" class="partner-logo"
                ><img src="img/core-img/p4.png" alt="partner logo"
              /></a>
              <!-- Single Partner Logo -->
              <a href="#" class="partner-logo"
                ><img src="img/core-img/p5.png" alt="partner logo"
              /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Partner Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
      <!-- Main Footer Area -->
      <div class="main-footer-area">
        <div class="container mx-auto">
          <div class="flex flex-wrap items-start justify-between">
            <!-- Single Footer Widget Area -->
            <div class="w-full sm:w-1/2 lg:w-1/4">
              <div class="single-footer-widget mb-80">
                <!-- Footer Logo -->
                <a href="#" class="footer-logo">
                  <img src="img/core-img/logo.png" width="120px" alt="logo" />
                </a>

                <h4>+212 069-890-9638</h4>
                <span>kasbah.roseville@gmail.com</span>
                <span>
                  Zaouiet Sidi Abdelmalek, Ait Sedrate Sahl El Gharbia
                </span>
              </div>
            </div>

            <!-- Single Footer Widget Area -->
            <div class="w-full sm:w-1/2 lg:w-1/4">
              <div class="single-footer-widget mb-80">
                <!-- Widget Title -->
                <h5 class="widget-title">Our Blog</h5>

                <!-- Single Blog Area -->
                <div class="latest-blog-area">
                  <a href="#" class="post-title">Freelance Design Tricks How</a>
                  <span class="post-date"
                    ><i class="fa fa-clock-o" aria-hidden="true"></i> Jan 02,
                    2019</span
                  >
                </div>

                <!-- Single Blog Area -->
                <div class="latest-blog-area">
                  <a href="#" class="post-title">
                    Free Advertising For Your Online
                  </a>
                  <span class="post-date">
                    <i class="fa fa-clock-o" aria-hidden="true"></i> Jan 02,
                    2019
                  </span>
                </div>
              </div>
            </div>

            <!-- Single Footer Widget Area -->
            <div class="w-full sm:w-1/3 lg:w-1/6">
              <div class="single-footer-widget mb-80">
                <!-- Widget Title -->
                <h5 class="widget-title">Links</h5>

                <!-- Footer Nav -->
                <ul class="footer-nav">
                  <li>
                    <a href="#"
                      ><i class="fa fa-caret-right" aria-hidden="true"></i>
                      About Us</a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-caret-right" aria-hidden="true"></i> Our
                      Room</a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-caret-right" aria-hidden="true"></i>
                      Career</a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-caret-right" aria-hidden="true"></i>
                      FAQs</a
                    >
                  </li>
                </ul>
              </div>
            </div>

            <!-- Single Footer Widget Area -->
            <div class="w-full sm:w-2/3 lg:w-1/3">
              <div class="single-footer-widget mb-80">
                <!-- Widget Title -->
                <h5 class="widget-title">Subscribe Newsletter</h5>
                <span>
                  Subscribe our newsletter gor get notification about new
                  updates.
                </span>

                <!-- Newsletter Form -->
                <form action="" class="nl-form">
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Enter your email..."
                  />
                  <button type="submit">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Copywrite Area -->
      <div class="container mx-auto">
        <div class="copywrite-content">
          <div class="flex items-center">
            <div class="w-full md:w-2/3">
              <!-- Copywrite Text -->
              <div class="copywrite-text">
                <p>
                  Copyright &copy;
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  All rights reserved
                </p>
              </div>
            </div>
            <div class="w-full md:w-1/3">
              <!-- Social Info -->
              <div class="social-info">
                <a href="#"
                  ><i class="fa fa-facebook" aria-hidden="true"></i
                ></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"
                  ><i class="fa fa-instagram" aria-hidden="true"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>
  </body>
</html>
