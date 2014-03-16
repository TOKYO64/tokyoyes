<?php ob_start();
require '/home/tokyo64/inc_tokyo/config_inc.php'; #provides configuration, pathing, error handling, db credentials
get_header();
$config->titleTag = 'Shibuya | &#8211; An Experience in Tokyo';

?>
      <div class="container shibuya">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Side bar &raquo;</button>
          </p>
          <div class="jumbotron shibuya-base">
          <img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/shibuya-lp.jpg">
            <h1>Shibuya!</h1>
           <p>is an ever popular spot where lots of  young adults and teenagers hang out. But that is changing as more and more types of people come to witness the daily display of the latest fashion, art and culture in what is one of the world's busiest hangouts. See for yourself, you'll keep coming back for more! </p>
          </div>
          <!--<div class="row">
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-shibuya" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-shibuya" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-shibuya" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-shibuya" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-shibuya" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-shibuya" href="#" role="button">View details &raquo;</a></p>
            </div>
          </div>-->
          <div class="row">
          	<div class=" col-xs-12 col-sm-12">
            
              <h2>Location</h2>     
          	<iframe style="margin-bottom:10px; border:solid 2px #d5b755;" width="100%" height="375" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  class="img-rounded" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Shibuya+Station,+Tokyo,+Japan&amp;aq=1&amp;oq=Shibuya&amp;sll=47.272986,-120.882277&amp;sspn=4.815824,10.821533&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=35.658517,139.701334&amp;spn=0.006295,0.006295&amp;iwloc=A&amp;output=embed"></iframe>
          	<p><a class="btn btn-shibuya" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Shibuya+Station,+Tokyo,+Japan&amp;aq=1&amp;oq=Shibuya&amp;sll=47.272986,-120.882277&amp;sspn=4.815824,10.821533&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=35.658517,139.701334&amp;spn=0.006295,0.006295&amp;iwloc=A&amp;output=embed"  role="button" target="_blank">View Larger Map &raquo;</a>
</p>


            </div><!--/span-->
            </div><!--/row-->
                  
        </div><!--/span-->

       <?php echo $config->sidebar1;?>
      </div><!--/row-->

 <hr>
      <hr>
<div><h2><a href="#" target="_top" style="color:#fff;text-decoration: none;text-shadow:1px 1px 1px #d5b755;">Back to Top</a></h2> </div>
 

    <?php
	get_footer();
	?>
    </div><!--/.container-->
