  <?php
  $url_host = 'http://'.$_SERVER['HTTP_HOST'];
  $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
  $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

  preg_match_all($pattern_uri, __DIR__, $matches);
  $url_path = $url_host . $matches[1][0];
  $url_path = str_replace('\\', '/', $url_path);
  ?>
  <div class="type-156">
    <!--FOOTER-->           
    <div class="container">
        <div class="main-titles lined">
            <h2 class="title"><span class="light">Our</span> Brands</h2>                  
        </div>
        <div class="logo" style="text-align: center;">               
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item"><img src="images/1.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/2.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/3.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/4.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/5.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/4.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/3.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/2.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/1.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/3.jpg" alt="Owl Image"></div>
            </div>
        </div>                
    </div>
    <div class="slide">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/slide1.jpg" alt="slide" class="img-responsive"></div>
            <div class="swiper-slide"><img src="images/slide2.jpg" alt="slide" class="img-responsive"></div>
            <div class="swiper-slide"><img src="images/slide3.jpg" alt="slide" class="img-responsive"></div>
            <div class="swiper-slide"><img src="images/slide4.jpg" alt="slide" class="img-responsive"></div>
            <div class="swiper-slide"><img src="images/slide5.jpg" alt="slide" class="img-responsive"></div>
            <div class="swiper-slide"><img src="images/slide6.jpg" alt="slide" class="img-responsive"></div>
            <div class="swiper-slide"><img src="images/slide7.jpg" alt="slide" class="img-responsive"></div>
            <div class="swiper-slide"><img src="images/slide8.jpg" alt="slide" class="img-responsive"></div>
            <div class="swiper-slide"><img src="images/slide9.jpg" alt="slide" class="img-responsive"></div>
            <div class="swiper-slide"><img src="images/slide10.jpg" alt="slide" class="img-responsive"></div>
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
    $(document).ready(function () {
        $('#owl-demo').owlCarousel({
            loop: true,
            autoPlay: 3000,
            nav: true,
            navText: ['<', '>'],
            responsive: {
                0: {
                    items: 1
                },
                769: {
                    items: 3
                },
                992: {
                    items: 5
                }
            }
        })
    });

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