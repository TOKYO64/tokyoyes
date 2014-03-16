<?php ob_start();
require '/home/tokyo64/inc_tokyo/config_inc.php'; #provides configuration, pathing, error handling, db credentials
get_header();
$config->titleTag = 'Tokyo Station | &#8211; An Experience in Tokyo';

?>
 <div class="container station">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Side bar &raquo; </button>
          </p>
          <div class="jumbotron station-base">
          <img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/station-lp.jpg">
           <h1>Tokyo Station </h1> <p>is a very busy place with lots and lots to see and do. You can check out the refurbished Tokyo Station with it's brick facade and lovely towers. You can also check out the underground shopping and Marunouchi district where fine eateries and good times abound!</p>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Kitte</h2><p><img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/kiite.jpg" alt="Kitte Shopping Center" class="img-rounded"></p>
              <p>Kitte Shopping Center is right next to Tokyo Station. It is just about brand new and they already have some great stores, drinking places, restaurants and exibits there. </p>
              <p><a class="btn btn-station" href="http://jptower-kitte.jp/" target="_blank" role="button">View details &raquo;</a></p>
            </div><!--/span-->
            <!--<div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-station" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-station" href="#" role="button">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
          <!--<div class="row">
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-station" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-station" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-station" href="#" role="button">View details &raquo;</a></p>
            </div>
  
        
          </div><!--/row-->
           <div class="row">
            <div class=" col-xs-12 col-sm-12">
            
              <h2>Location</h2>     
<iframe style="margin-bottom:10px; border:solid 2px #d5b755;" width="100%" height="375" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  class="img-rounded" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Tokyo+Station,+Tokyo,+Japan&amp;aq=0&amp;oq=Tokyo&amp;sll=35.710063,139.8107&amp;sspn=0.011255,0.021136&amp;ie=UTF8&amp;hq=&amp;hnear=Tokyo+Station,+Tokyo,+Japan&amp;t=m&amp;z=14&amp;ll=35.681382,139.766084&amp;output=embed"></iframe>
 <p><a class="btn btn-station" href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Tokyo+Station,+Tokyo,+Japan&amp;aq=0&amp;oq=Tokyo&amp;sll=35.710063,139.8107&amp;sspn=0.011255,0.021136&amp;ie=UTF8&amp;hq=&amp;hnear=Tokyo+Station,+Tokyo,+Japan&amp;t=m&amp;z=14&amp;ll=35.681382,139.766084" role="button" target="_blank">View Larger Map &raquo;</a>
</p>


            </div><!--/span-->
            </div><!--/row-->
              
        </div><!--/span-->

       <?php echo $config->sidebar1;?>
      </div><!--/row-->


  <hr>
      <hr>
<div><h2><a href="ueno.html" target="_top" style="color:#fff;text-decoration: none;text-shadow:1px 1px 1px #83351f">Back to Top</a></h2> </div>
   



    <?php
	get_footer();
	?>
    </div><!--/.container-->
