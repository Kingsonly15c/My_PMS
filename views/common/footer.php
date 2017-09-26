<!--Page Footer-->
      <footer id="footer" class="page-footer footer-preset-6">
        <div class="footer-body bgc-gray-darker">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-sm-4 col-xs-12">
                <div class="footer-widget-about">
                  <h4>ABOUT US</h4>
                  <p>We are a creative company that specializes in strategy &amp; design. We like to create things with like - minded people who are serious about their passions. </p>
                  <ul class="social circle">
                    <li><a href="#"><i class="icon icon-facebook-1"></i></a></li>
                    <li><a href="#"><i class="icon icon-twitter-1"></i></a></li>
                    <li><a href="#"><i class="icon icon-flickr"></i></a></li>
                    <li><a href="#"><i class="icon icon-linkedin-1"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-sm-4 col-xs-12">
                <div class="footer-widget-tag">
                  <h4>ITEM TAGS</h4>
                  <div class="__content"><a href="#">awesome</a><a href="#">beautiful</a><a href="#">mass</a><a href="#">ios</a><a href="#">themeforest</a><a href="#">osthemes</a><a href="#">flat design</a><a href="#">multi - purposes</a></div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-4 col-xs-12">
                <div class="footer-widget-info">
                  <h4>INFORMATION</h4>
                  <div class="__content font-heading fz-6-ss">
                    <div><span><a href="#">HISTORY OF BROOKLYN</a></span><span><a href="#">PENANG STREET FOOD</a></span><span><a href="#">THE MIST OF MADAGASCAR</a></span><span><a href="#">J.R.R. TOLKIEN</a></span><span><a href="#">MOROCCO ROAD TRIP</a></span><span><a href="#">THE NOISE - ELIXIR</a></span></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-xs-12">
                <div class="footer-widget-newsletter">
                  <h4>NEWS LETTER</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <form>
                    <div class="__inputs">
                      <input type="text" name="name" placeholder="Name"/>
                      <input type="email" name="email" placeholder="hello@domain.com"/>
                    </div>
                    <div class="__button"><a href="#" class="btn btn-primary fullwidth">SEND MESSAGE</a></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-foot-3 bgc-gray-darkest">
          <div class="container">
            <div class="row">
              <div class="__content-left">
                <p class="font-heading fz-6-s">MEGATRON &copy; 2015 OSTHEMES - ENVATO PTY LTD</p>
              </div>
              <div class="__content-right">
                <nav class="footer-nav">
                  <ul class="font-heading">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">FEATURES</a></li>
                    <li><a href="#">PORTFOLIO</a></li>
                    <li><a href="#">BLOG</a></li>
                    <li><a href="#">SHOP</a></li>
                    <li><a href="#">SHORTCODE</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!--End Page Footer-->
    </div>
    <!--End Page content-->
              <script type="text/javascript">
    //Mailing Form
    $('#submit').click(function() {

      $.post("index/join_mailing_list", $("#mailing-form").serialize(), function(response) {
        $('#success').html(response);
      });
      return false;

    });
              
    $('#submit2').click(function() {
window.alert("works");
      $.post("contact/sendmsg", $("#contactform").serialize(), function(response) {
        $('#success2').html(response);
      });
      return false;

    });
             
  </script>
    <!--Javascript Library-->
    <button id="back-to-top-btn"><i class="icon-up-open-big"></i></button>
    <script src="public/vendors/jquery/dist/jquery.min.js"></script>
    <script src="public/assets/js/jquery-2.1.4.min.js"></script>
    <script src="public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="public/vendors/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="public/vendors/waypoints/lib/shortcuts/sticky.min.js"></script>
    <script src="public/vendors/smoothscroll/SmoothScroll.js"></script>
    <script src="public/vendors/wow/dist/wow.min.js"></script>
    <script src="public/vendors/parallax.js/parallax.js"></script>
    <script type="text/javascript" src="public/vendors/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="public/vendors/jquery-modal/jquery.modal.min.js"></script>
    <script type="text/javascript" src="public/assets/js/main.js"></script>
    <!-- Google analytics-->
    <script type="text/javascript">(function(b,o,i,l,e,r){b.GoogleAsnalyticsObject=l;b[l]||(b[l]=function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;e=o.createElement(i);r=o.getElementsByTagName(i)[0];e.src='//www.google-analytics.com/analytics.js';r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));ga('create','UA-57387972-3');ga('send','pageview');</script>
    <!--End Javascript Library-->
  </body>
</html>