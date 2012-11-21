<?php require_once('header.php'); ?>
<?php require_once('widgets/notice-shopsmarter.php'); ?>

<div id="content" class="hub">
  <div class="row">
    <div class="twelve columns">

      <nav id="crumbs">
        <a href="#" class="home">Home</a> &rsaquo; 
        <a href="#">Moms</a> &rsaquo; 
        <a href="#" class="current-page">Diapers</a>
      </nav>

      <h2 class="single-header page-header">Diapers</h2>

      <?php require_once('widgets/featured-diapers.php'); ?>

      <div class="group">
        <ul class="pagination">
          <li class="arrow unavailable"><a href="">&laquo;</a></li>
          <li class="current"><a href="">1</a></li>
          <li><a href="">2</a></li>
          <li><a href="">3</a></li>
          <li><a href="">4</a></li>
          <li class="unavailable"><a href="">&hellip;</a></li>
          <li><a href="">12</a></li>
          <li><a href="">13</a></li>
          <li class="arrow"><a href="">&raquo;</a></li>
        </ul>
      </div>

    </div>
  </div>
</div>


<?php require_once('footer.php'); ?>