<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Save22 | Launchpad 2.0 - Flipbook</title>

  <link rel="stylesheet" href="../css/normalize.css" />
  <link rel="stylesheet" href="../css/app.css" />
  <link rel="stylesheet" href="../css/styles.css" />
  <link rel="stylesheet" href="../css/magazine.css" />
  
  <script src="../js/vendor/custom.modernizr.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
  <script src="../js/jquery.caroufredsel.min.js"></script>
  <script type="text/javascript" src="../js/turn.min.js"></script>
  <script type="text/javascript" src="../js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="../js/hash.js"></script>
  <script src="../js/scripts.js"></script>
  <style type="text/css">
  body{
    background:#fdfdfd;
  }
  #flipbook{
    width:1152px;
    height:752px;
  }
  #flipbook .turn-page{
    background-color:#ccc;
    background-size:100% 100%;
  }
  </style>
</head>

<body>

  <header id="main-header" class="row" style="max-width: none;">
    <nav class="top-bar">
      <ul class="title-area">
        <!-- Title Area -->
        <li class="name">
          <h1><a href="#">Save22.com.ph</a></h1>
        </li>
        <li class="toggle-topbar"><a href="#previous-page" class="back-link"><span>Back</span></a></li>
      </ul>

      <section class="top-bar-section">
        <ul class="left">
          <li class="divider"></li>
          <li><a href="#">Catalog Name</a></li>
          <li class="divider"></li>
        </ul>
      </section>
    </nav>

    <section class="mobile-search mobile-only hide">
      <form>
        <div class="row collapse">
          <div class="small-8 columns">
            <input type="search" placeholder="Search for promos, items, prices, or stores">
          </div>
          <div class="small-4 columns">
            <a href="#" class="button">Search</a>
          </div>
        </div>
      </form>
    </section>

    <section class="browse-catalogs hide">
      <?php include('../elements/carousel-promos-flipbook.php'); ?>
    </section>
  </header>


  <div class="row" style="max-width: none;">
    <div class="small-12 large-9 columns flipbook-container">

      <div class="magazine-viewport">
        <div class="magazine-container">
              <div class="magazine row" style="max-width: none;">
                <div class="large-6 small-12 columns page-wrapper">
                  <img src="pages/01.jpg" alt="">
                </div>
                <div class="large-6 small-12 columns page-wrapper">
                  <img src="pages/02.jpg" alt="">
                </div>
                <div class="large-6 small-12 columns page-wrapper">
                  <img src="pages/03.jpg" alt="">
                </div>
                <div class="large-6 small-12 columns page-wrapper">
                  <img src="pages/04.jpg" alt="">
                </div>
				<!-- Next button -->
				<div ignore="1" class="next-button"></div>
				<!-- Previous button -->
				<div ignore="1" class="previous-button"></div>
              </div>
        </div><!-- container -->

        <div class="row">
          <div class="page-numbers">
            <span class="current-page">Page 1-2</span> of 9
            <a href="#" ignore="1" class="left prev-button2">Previous</a>
            <a href="#" ignore="1" class="right next-button2">Next</a>
          </div>
        </div>

      </div><!-- viewport -->
      <!-- 
      <a href="#" ignore="1" id="flipbook-prev" class="previous-button page-button">Prev <span></span></a>
      <a href="#" ignore="1" id="flipbook-next" class="next-button page-button">Next <span></span></a>
      -->
    </div>

    <div class="small-12 large-3 columns">
      <section class="sidebar flipbook info">
        <div class="store-link flipbook">
          <a href="#store-page"><img src="../img/retailer-logo4.jpg" alt="Retailer Name"></a>
        </div>
        <div class="expiry">
          <p>
            Valid until <strong>April 12, 2013</strong>
          </p>
        </div>
      </section>

      <section class="sidebar flipbook pages">

        <h3 class="sidebar-header">pages</h3>
        
        <p>
          <img src="pages/01.jpg" style="height: 100px;">
        </p>
      </section>

      <section class="sidebar flipbook list-links panel-links">
        <a href="#" class="pull-down">
          <h3 class="sidebar-header">In this catalog <span class="arrow-down right arrow"></span></h3>
        </a>
        <div class="pull-content hide">
          <ul class="quick-categories">
            <li><a href="#">Smartphones</a></li>
            <li><a href="#">Feature phones</a></li>
            <li><a href="#">Samsung</a></li>
            <li><a href="#">Apple</a></li>
            <li><a href="#">Smartphones</a></li>
            <li><a href="#">Feature phones</a></li>
            <li><a href="#">Samsung</a></li>
            <li><a href="#">Apple</a></li>
          </ul>
        </div>

      </section>

      <section class="sidebar flipbook related-catalogs">
        <a href="#" class="pull-down">
          <h3 class="sidebar-header">Related Catalogs <span class="arrow-down right arrow"></span></h3>
        </a>
        <div class="pull-content">
          <?php include('../elements/carousel-promos-flipbook.php'); ?>
        </div>
      </section>
    </div>
  </div>
</body>
<script type="text/javascript">
    $(document).ready(function() {
    	var turner = $('.magazine').turn({
			// Magazine width
			width: 720,
			// Magazine height
			height: 400,
			// Elevation will move the peeling corner this number of pixels by default
			elevation: 50,
			// Enables gradients
			gradients: true,
			// Auto center this flipbook
			autoCenter: true,
			// The number of pages
			pages: 12,
			// events
			when: {
				turned: function(event, page, view){
					setCurrentPage(page)
				}
			}
		});
		$('.prev-button2').click(function() {
			turner.turn('previous');
		});
		$('.next-button2').click(function() {
			turner.turn('next');
		});
    });
    
    function setCurrentPage(currentPage){
    	$('.current-page').html(currentPage);
    }
</script>
</html>
