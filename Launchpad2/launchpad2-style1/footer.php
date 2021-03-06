  <div id="seo-pages-links" class="footer-links-list">
    <div class="row main-row">
      <div class="small-12 columns">
        <ul class="inline-list">
          <!-- HOMEPAGE ONLY --><li class="seo-towns"><a href="seo-list-townscities.php">Towns and Cities</a></li>
          <li class="seo-shops"><a href="seo-establishments-in-geo2.php">Shops in Pasig City</a></li>
        </ul>
      </div>
    </div>
  </div>

  <footer id="main-footer">  
    <div class="row main-row">
      <div class="large-3 small-12 columns">
        <h3>Know More</h3>
        <ul>
          <li><a href="http://shopper.save22.com/about/">About Us</a></li>
          <li><a href="http://business.save22.com/retailers/">Retailers</a></li>
          <li><a href="http://business.save22.com/publishers/">Publishers</a></li>
          <li><a href="http://shopper.save22.com/media-coverage/">Media Coverage</a></li>
        </ul>
      </div> 
      <div class="large-3 small-12 columns">
        <h3>Get in Touch</h3>
        <ul>
          <li><a href="#">Contact Us</a></li>
          <li><a href="http://shopper.save22.com/press-kit/">Press Kit</a></li>
        </ul>
      </div> 
      <div class="large-3 small-12 columns">
        <h3>Social Networks</h3>
        <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">LinkedIn</a></li>
            <li><a href="#">Google+</a></li>
        </ul>
      </div> 
      <div class="large-3 small-12 columns">
      </div>
    </div>
  </footer>
  <div class="row main-row footer-links">
    <div class="small-12 columns">
      <ul class="inline-list">
        <li><a href="http://save22.com.sg">Singapore</a></li>
        <li><a href="http://save22.com.ph">Philippines</a></li>
        <!-- no link yet? 
        <li><a href="#">Privacy Policy</a></li> -->
        <li><span>Copyright &copy; <a href="http://save22.com">Save22</a></span></li>
      </ul>
    </div>
  </div>

  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation/foundation.js"></script>
  <script src="js/foundation/foundation.alerts.js"></script>
  <script src="js/foundation/foundation.cookie.js"></script>
  <script src="js/foundation/foundation.dropdown.js"></script>
  <script src="js/foundation/foundation.forms.js"></script>
  <script src="js/foundation/foundation.placeholder.js"></script>
  <script src="js/foundation/foundation.reveal.js"></script>
  <script src="js/foundation/foundation.section.js"></script>
  <!-- 
  <script src="js/foundation/foundation.tooltips.js"></script>
  <script src="js/foundation/foundation.joyride.js"></script>
  <script src="js/foundation/foundation.orbit.js"></script>
  <script src="js/foundation/foundation.clearing.js"></script>
  <script src="js/foundation/foundation.magellan.js"></script>
  <script src="js/foundation/foundation.topbar.js"></script>
  <script src="js/stickyMojo.js"></script>
  -->

  <script>
    if (!Modernizr.svg) {
      var imgs = document.getElementsByTagName('img');
      var endsWithDotSvg = /.*\.svg$/
      var i = 0;
      var l = imgs.length;
      for(; i != l; ++i) {
          if(imgs[i].src.match(endsWithDotSvg)) {
              imgs[i].src = imgs[i].src.slice(0, -3) + 'png';
          }
      }
  }

  </script>
  <script src="js/jquery.caroufredsel.min.js"></script>
  <script src="js/jquery.actual.min.js"></script>
  <script src="js/scripts.js"></script>

  <!--
  <script type="text/javascript" src="js/gmap3.min.js"></script>
  <script>

  var pos = [44.797916, -93.278046];
  $("#map").gmap3({ 
    marker:{
      latLng: pos
    },
    overlay:{
      latLng: pos,
      options:{
        content:  '<div style="color:#000000; border:1px solid #333; ' +
                  'background-color: #fff; width:100px; box-shadow: 0 2px 2px rgba(0,0,0,0.35);' +
                  'height: auto; text-align:center"><img src="img/retailer-logo1.png" style="width: 100%; height: auto;"></div>',
        offset:{
          y:-32,
          x:12
        }
      }
    }
  });
  </script>
  -->

    
</body>
</html>
