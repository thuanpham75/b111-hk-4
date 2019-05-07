  <?php
  $url_host = 'http://'.$_SERVER['HTTP_HOST'];
  $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
  $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

  preg_match_all($pattern_uri, __DIR__, $matches);
  $url_path = $url_host . $matches[1][0];
  $url_path = str_replace('\\', '/', $url_path);
  ?>
  <div class="type-132">
    <div class="slide">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/slide1.jpg" alt="slide" class="img-responsive"></div>
            <div class="swiper-slide"><img src="images/slide2.jpg" alt="slide" class="img-responsive"></div>
            <div class="swiper-slide"><img src="images/slide3.jpg" alt="slide" class="img-responsive"></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<!--FOOTER-->
<footer>
    <div class="container intro">
        <div class="row">
            <!--FOOTER INTRODUCTION-->
            <div class="col-md-4">
                <div class="footer-info">
                    <h4>KHOA CÔNG NGHỆ THÔNG TIN<br>
                    Trường Cao Đẳng Công Nghệ Thủ Đức</h4>
                    <p> <i class="fa fa-map-marker" aria-hidden="true"></i> 53 Võ Văn Ngân, P.Linh Chiểu, Q.Thủ Đức, Tp.HCM</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> Điện thoại: (08) 22 158 642</p>
                    <p><i class="fa fa-fax" aria-hidden="true"></i> Fax: 08.38962474</p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> Email: cntt@mail.tdc.edu.vn</p>
                </div>
            </div>
            <!--/END FOOTER INTRODUCTION-->

            <!--FOOTER LINK-->
            <div class="col-md-4">
                <ul class="bottom-link">
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Trường Cao Đẳng Công Nghệ Thủ Đức</a></li>
                    <li>
                         <p><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook: <a href="https://www.facebook.com/tdc.fit/">facebook.com/tdc.fit</a></p>
                    <p> <i class="fa fa-youtube-play" aria-hidden="true"></i> Youtube: <a href="https://www.youtube.com/fit-tdc">youtube.com/fit-tdc</a></p>
                    </li>
                </ul>
               
            </div>
            <!--/END FOOTER LINK-->

            <!--FOOTER COPYRIGHT-->
            <div class="col-md-4 ">
                <ul class="bottom-link">
                    <li><a href="#">Liên hệ</a></li>
                    <li>2019 <a href="#">2019 Khoa Công nghệ thông tin | Cao đẳng Công nghệ Thủ Đức | FIT - TDC All Rights Reserved.</a></li>
                </ul>
            </div>
            <!--/END FOOTER COPYRIGHT-->
        </div>
    </div>
</footer>
<!--/END FOOTER-->

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

