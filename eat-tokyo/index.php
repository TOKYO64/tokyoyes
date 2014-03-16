<?php ob_start();
require '/home/tokyo64/inc_tokyo/config_inc.php'; #provides configuration, pathing, error handling, db credentials
get_header();
$config->titleTag = 'Eat Tokyo | &#8211; An Experience in Tokyo';

?>
 <div class="container eat">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Side bar &raquo; </button>
          </p>
          <div class="jumbotron eat-base">
          <img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/eat-tokyo-lp.jpg">
            <h1>Eat Tokyo!</h1>
            <p>The food in Tokyo is simply delicious! Tokyo has more world class restaurants than any place on earth. They have French restaurants that have been rated better than French restaurants in Paris! You can eat on any budget and the food will be good, clean and safe to eat! So go ahead and spoil your appetite!</p>
          </div>
          <!--<div class="row">
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-eat" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-eat" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-eat" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-eat" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-eat" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-eat" href="#" role="button">View details &raquo;</a></p>
            </div><!--/span-->
          <!--</div><!--/row-->
            </div><!--/span-->

       <?php echo $config->sidebar1;?>
      </div><!--/row-->
 <hr>
            <hr>
<div><h2><a href="#" target="_top" style="color:#fff;text-decoration: none;text-shadow:1px 1px 1px #D2691E;">Back to Top</a></h2> </div>
  <?php get_footer();
  ?>

    </div><!--/.container-->
