		</div>
    <!-- /wrapper -->

    <!-- footer -->
    <footer class="purple-background" role="contentinfo">
      <div class="row end-center w100 white-background mtop-215">
        <div class="triangle-purple triangle-purple-offset"></div>
        <div class="triangle-purple"></div>
      </div>
      <div class="wrapper p25 zi1 column center-center">
        <div class="row space-between-start w100">
          <div class="column w25 mw200 mtop12">
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logos/white.svg" alt="LeaseXpert" />
            </a>
            <p class="white">
              17039 Kenton Drive #200
              Cornelius, NC 28031
            </p>
            <p><a class="white" href="tel:800-866-5555">800-866-5555</a></p>
            <div class="row space-between-center">
              <a href="">
                <i class="fab fa-twitter-square fa-2x white"></i>
              </a>
              <a href="">
                <i class="fab fa-facebook-square fa-2x white"></i>
              </a>
              <a href="">
                <i class="fab fa-linkedin fa-2x white"></i>
              </a>
              <a href="">
                <i class="fab fa-instagram-square fa-2x white"></i>
              </a>
            </div>
          </div>
          <div class="column w25 mw200">
            <a href="">
              <h4 class="white">Learning Center <i class="far fa-angle-right"></i></h4>
            </a>
            <a href="">
              <p class="btn-label white mtopbot5 tdu">Standards</p>
            </a>
            <a href="">
              <p class="btn-label white mtopbot5 tdu">Industries</p>
            </a>
            <a href="">
              <p class="btn-label white mtopbot5 tdu">News</p>
            </a>
            <a href="">
              <p class="btn-label white mtopbot5 tdu">Accounting</p>
            </a>
            <a href="">
              <p class="btn-label white mtopbot5 tdu">Tools</p>
            </a>
            <a href="">
              <p class="btn-label white mtopbot5 tdu">Search</p>
            </a>
          </div>
          <div class="column w25 mw200">
            <a href="">
              <h4 class="white">Contact Us<i class="far fa-angle-right"></i></h4>
            </a>
            <a href="">
              <h4 class="white">Newsletter <i class="far fa-angle-right"></i></h4>
            </a>
          </div>
          <div class="row w25 mw275">
            <h4 class="white">Sign In <i class="far fa-angle-right"></i></h4>
            <div class="row center-center">
              <a class="primary-btn-short ml25 m0-mob" href="">Get Started<i class="far fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <p class="paragraph-light  white">Copyright © 2020 AMTdirect. All Rights Reserved</p>
          <!-- <p class="paragraph-light">Copyright © 2020 <?php bloginfo('name'); ?>. All Rights Reserved</p> -->
          <a href="">
            <p class="tdu white">Terms of Use</p>
          </a>
          <p class="white">&amp;</p>
          <a href="">
            <p class="tdu white">Privacy Policy</p>
          </a>
        </div>
      </div>
      <img class="footer-watermark" src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-watermark.svg" alt="LeaseXpert watermark" />
    </footer>
    <!-- /footer -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
