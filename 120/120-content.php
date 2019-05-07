 <?php
 $url_host = 'http://'.$_SERVER['HTTP_HOST'];
 $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
 $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

 preg_match_all($pattern_uri, __DIR__, $matches);
 $url_path = $url_host . $matches[1][0];
 $url_path = str_replace('\\', '/', $url_path);
 ?>
 
 <div class="type-120">
  <div class="wrapper">
    <nav class="top-menu">
      <div class="nav-inner">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="mobnav-btn"></div>
              <ul data-breakpoint="800" id="menu-main-menu" class="sf-menu"><li id="menu-item-332" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-332"><a href="#">Home</a>
                <ul class="sub-menu">
                  <li id="menu-item-301" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-299 current_page_item menu-item-301"><a href="#">With Revolution</a></li>
                  <li id="menu-item-288" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-288"><a href="#">With Search Bar</a></li>
                  <li id="menu-item-289" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-289"><a href="#">With Subscription</a></li>
                  <li id="menu-item-537" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-537"><a href="#">With Video</a></li>
                </ul>
              </li>
              <li id="menu-item-253" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-253"><a href="#">About us</a></li>
              <li id="menu-item-255" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-255"><a href="#">Course</a>
                <ul class="sub-menu">
                  <li id="menu-item-247" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-247"><a href="#">Courses Grid</a></li>
                  <li id="menu-item-246" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-246"><a href="#">Courses List</a></li>
                  <li id="menu-item-416" class="menu-item menu-item-type-post_type menu-item-object-course menu-item-416"><a href="#">Course Details v1</a></li>
                  <li id="menu-item-415" class="menu-item menu-item-type-post_type menu-item-object-course menu-item-415"><a href="#">Course Details v2</a></li>
                </ul>
              </li>
              <li id="menu-item-256" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-256 menu-item-mega"><a href="#">Pages (Megamenu)</a><div class="mega-menu-container container" style="width:100%">
                <div class="mega-menu-columns">
                  <div id="menu-item-448" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-448 mega-sub-menu col-md-4"><a>Communicate</a>
                    <ul class="sub-menu">
                      <li id="menu-item-248" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-248"><a href="#">Teacher</a></li>
                      <li id="menu-item-291" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-291"><a href="#">Teacher profile</a></li>
                      <li id="menu-item-554" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-554"><a href="#">Login / Register</a></li>
                      <li id="menu-item-609" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-609"><a href="#">Events</a></li>
                    </ul>
                  </div>  <div id="menu-item-449" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-449 mega-sub-menu col-md-4"><a>Other Pages</a>
                    <ul class="sub-menu">
                      <li id="menu-item-251" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-251"><a href="#">Prices and Plans</a></li>
                      <li id="menu-item-252" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-252"><a href="#">Gallery Page</a></li>
                      <li id="menu-item-250" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-250"><a href="#">Shortcodes</a></li>
                      <li id="menu-item-455" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-455"><a href="#">Contact</a></li>
                    </ul>
                  </div>  <div id="menu-item-450" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-450 mega-sub-menu col-md-4"><a>Submenu with icons</a>
                    <ul class="sub-menu">
                      <li id="menu-item-451" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-451"><a href="#">Downloads<i class="fa fa-download"></i></a></li>
                      <li id="menu-item-452" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-452"><a href="#">Video files<i class="fa fa-video-camera"></i></a></li>
                      <li id="menu-item-453" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-453"><a href="#">Audio files<i class="fa fa-microphone"></i></a></li>
                      <li id="menu-item-454" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-454"><a href="#">Members<i class="fa fa-user"></i></a></li>
                    </ul>
                  </div></div>
                </div><li id="menu-item-74" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-74"><a href="#">Blog</a></li>
                <li id="menu-item-73" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-73"><a href="#">Contact</a></li>
              </ul>                        
              <div class="col-md-3 pull-right hidden-sm hidden-xs">
                <input type="text" name="q" class="input-search" placeholder="Search...">
                <div id="sb-search" class="sb-search">

                  <a href = "#"> <span class="fa fa-search"></span></a>

                </div>
              </div>
            </div>
          </div><!-- End row -->
        </div><!-- End container -->
      </div>
    </nav>         
    <!-- content close -->
  </div>
  <div class="slide">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="image/slide1.jpg" alt="slide" class="img-responsive"></div>
        <div class="swiper-slide"><img src="image/slide2.jpg" alt="slide" class="img-responsive"></div>
        <div class="swiper-slide"><img src="image/slide3.jpg" alt="slide" class="img-responsive"></div>
        <div class="swiper-slide"><img src="image/slide4.jpg" alt="slide" class="img-responsive"></div>
        <div class="swiper-slide"><img src="image/slide5.jpg" alt="slide" class="img-responsive"></div>
        <div class="swiper-slide"><img src="image/slide6.jpg" alt="slide" class="img-responsive"></div>
        <div class="swiper-slide"><img src="image/slide7.jpg" alt="slide" class="img-responsive"></div>
        <div class="swiper-slide"><img src="image/slide8.jpg" alt="slide" class="img-responsive"></div>
        <div class="swiper-slide"><img src="image/slide9.jpg" alt="slide" class="img-responsive"></div>
        <div class="swiper-slide"><img src="image/slide10.jpg" alt="slide" class="img-responsive"></div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>


</div>
<script>
  var swiper = new Swiper('.swiper-container', {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>
<script src="js/superfish.js" ></script>
<script src="js/custom.js" ></script>
<script src="js/swiper.min.js" ></script>