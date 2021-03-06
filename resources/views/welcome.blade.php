<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>CIH</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="{{URL::asset('asset/css/bootstrap.min.css')}}" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}" type="text/css" media="screen">

  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/slicknav.css')}}" media="screen">

  <!-- CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/responsive.css')}}" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/animate.css')}}" media="screen">

  

  <!--JS  -->
  <script type="text/javascript" src="{{URL::asset('js/jquery-2.1.4.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/jquery.migrate.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/modernizrr.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('asset/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/jquery.fitvids.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/nivo-lightbox.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/jquery.isotope.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/jquery.appear.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/count-to.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/jquery.textillate.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/jquery.lettering.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/jquery.easypiechart.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/jquery.nicescroll.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/jquery.parallax.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/jquery.slicknav.js')}}"></script>
 
</head>

<body>

  <!-- Body Container -->
  <div id="container">
    <!-- Start Header Section -->
    <div class="hidden-header"></div>
    <header class="clearfix">

      <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <!-- Start Contact Info -->
              <ul class="contact-details">
                <li><a href="#"><i class="fa fa-map-marker"></i> 36, Dunării Cahul 3909 Republica Moldova</a>
                </li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> cipc@cipc.info.md</a>
                </li>
                <li><a href="#"><i class="fa fa-phone"></i> 0299-4-15-30</a>
                </li>
              </ul>
              <!-- End Contact Info -->
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-6">
              <!-- Start Social Links -->
              <ul class="social-list">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a class="dribbble itl-tooltip" data-placement="bottom" title="Dribble" href="#"><i class="fa fa-dribbble"></i></a>
                </li>
                <li>
                  <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a class="flickr itl-tooltip" data-placement="bottom" title="Flickr" href="#"><i class="fa fa-flickr"></i></a>
                </li>
                <li>
                  <a class="tumblr itl-tooltip" data-placement="bottom" title="Tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                </li>
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a class="vimeo itl-tooltip" data-placement="bottom" title="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                </li>
                <li>
                  <a class="skype itl-tooltip" data-placement="bottom" title="Skype" href="#"><i class="fa fa-skype"></i></a>
                </li>
              </ul>
              <!-- End Social Links -->
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .top-bar -->
      <!-- End Top Bar -->


      <!-- Start  Logo & Naviagtion  -->
      <div class="navbar navbar-default navbar-top">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="{{route('home')}}">
              <img alt="" src="{{URL::asset('images/margo.png')}}">
            </a>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Stat Search -->
            <div class="search-side">
              <a class="show-search"><i class="fa fa-search"></i></a>
              <div class="search-form">
                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                  <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                </form>
              </div>
            </div>
            <!-- End Search -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a class="active" href="{{route('home')}}">Acasă</a>
              </li>
              <li>
                <a href="{{URL("/about")}}">Despre</a>
              </li>
              <li>
                <a href="/specialities">Specialități</a>
                <ul class="dropdown">
                  <li><a href="{{URL("/specialities")}}">Informatica</a>
                  </li>
                  <li><a href="{{URL("/specialities")}}">Contabilitate</a>
                  </li>
                  <li><a href="{{URL("/specialities")}}">Asistență socială</a>
                  </li>
                  <li><a href="{{URL("/specialities")}}">Arte</a>

                </ul>
              </li>
              <li>
                <a href="portfolio-3.html">Admitere</a>
              </li>
              <li>
                <a target="_blank" href="http://cipc.info.md/orar/index.html">Orar</a>
              </li>
              <li>
                <a href="{{route('events')}}">Evenimente</a>
              </li>
              <li><a href="{{URL("/contact")}}">Contact</a>
              </li>
            </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
        <a class="active" href="{{route('home')}}">Acasă</a>
          </li>
          <li>
                <a href="{{URL("/about")}}">Despre</a>
              </li>
              <li>
                <a href="/specialities">Specialități</a>
                <ul class="dropdown">
                  <li><a href="{{URL("/specialities")}}">Informatica</a>
                  </li>
                  <li><a href="{{URL("/specialities")}}">Contabilitate</a>
                  </li>
                  <li><a href="{{URL("/specialities")}}">Asistență socială</a>
                  </li>
                  <li><a href="{{URL("/specialities")}}">Arte</a>

                </ul>
              </li>
              <li>
                <a href="portfolio-3.html">Admitere</a>
              </li>
              <li>
                <a target="_blank" href="http://cipc.info.md/orar/index.html">Orar</a>
              </li>
              <li>
                <a href="{{route('events')}}">Evenimente</a>
              </li>
              <li><a href="{{URL("/contact")}}">Contact</a>
              </li>
            </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
    <!-- End Header Section -->
    
    @yield('content')
   
    <!-- Start Footer -->
    <footer>
      <div class="container">
        <div class="row footer-widgets">

          <!-- Start Subscribe & Social Links Widget -->
          <div class="col-md-3">
            <div class="footer-widget mail-subscribe-widget">
              <h4>Get in touch<span class="head-line"></span></h4>
              <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
              <form class="subscribe">
                <input type="text" placeholder="mail@example.com">
                <input type="submit" class="btn-system" value="Send">
              </form>
            </div>
            <div class="footer-widget social-widget">
              <h4>Follow Us<span class="head-line"></span></h4>
              <ul class="social-icons">
                <li>
                  <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                </li>
                <li>
                  <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                </li>
                <li>
                  <a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                </li>
                <li>
                  <a class="instgram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a class="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                </li>
                <li>
                  <a class="skype" href="#"><i class="fa fa-skype"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Subscribe & Social Links Widget -->


          <!-- Start Twitter Widget -->
          <div class="col-md-3">
            <div class="footer-widget twitter-widget">
              <h4>Twitter Feed<span class="head-line"></span></h4>
              <ul>
                <li>
                  <p><a href="#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.</p>
                  <span>28 February 2014</span>
                </li>
                <li>
                  <p><a href="#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.An Fusce eleifend aliquet nis application.</p>
                  <span>26 February 2014</span>
                </li>
                <li>
                  <p><a href="#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.</p>
                  <span>28 February 2014</span>
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Twitter Widget -->


          <!-- Start Flickr Widget -->
          <div class="col-md-3">
            <div class="footer-widget flickr-widget">
              <h4>Flicker Feed<span class="head-line"></span></h4>
              <ul class="flickr-list">
                <li>
                  <a href="images/flickr-01.jpg" class="lightbox">
                    <img alt="" src="images/flickr-01.jpg">
                  </a>
                </li>
                <li>
                  <a href="images/flickr-02.jpg" class="lightbox">
                    <img alt="" src="images/flickr-02.jpg">
                  </a>
                </li>
                <li>
                  <a href="images/flickr-03.jpg" class="lightbox">
                    <img alt="" src="images/flickr-03.jpg">
                  </a>
                </li>
                <li>
                  <a href="images/flickr-04.jpg" class="lightbox">
                    <img alt="" src="images/flickr-04.jpg">
                  </a>
                </li>
                <li>
                  <a href="images/flickr-05.jpg" class="lightbox">
                    <img alt="" src="images/flickr-05.jpg">
                  </a>
                </li>
                <li>
                  <a href="images/flickr-06.jpg" class="lightbox">
                    <img alt="" src="images/flickr-06.jpg">
                  </a>
                </li>
                <li>
                  <a href="images/flickr-07.jpg" class="lightbox">
                    <img alt="" src="images/flickr-07.jpg">
                  </a>
                </li>
                <li>
                  <a href="images/flickr-08.jpg" class="lightbox">
                    <img alt="" src="images/flickr-08.jpg">
                  </a>
                </li>
                <li>
                  <a href="images/flickr-09.jpg" class="lightbox">
                    <img alt="" src="images/flickr-09.jpg">
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Flickr Widget -->


          <!-- Start Contact Widget -->
          <div class="col-md-3">
            <div class="footer-widget contact-widget">
              <h4><img src="images/footer-margo.png" class="img-responsive" alt="Footer Logo" /></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              <ul>
                <li><span>Phone Number:</span> +01 234 567 890</li>
                <li><span>Email:</span> company@company.com</li>
                <li><span>Website:</span> www.yourdomain.com</li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Contact Widget -->


        </div>
        <!-- row -->

        <!-- Start Copyright -->
        <div class="copyright-section">
          <div class="row">
            <div class="col-md-6">
              <p>&copy; 2014 Margo - All Rights Reserved <a href="http://graygrids.com">GrayGrids</a> </p>
            </div>
            <div class="col-md-6">
              <ul class="footer-nav">
                <li><a href="#">Sitemap</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End Copyright -->

      </div>
    </footer>
    <!-- End Footer -->

  </div>
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>