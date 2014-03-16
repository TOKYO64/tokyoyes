<?php ob_start();
require '/home/tokyo64/inc_tokyo/config_inc.php'; #provides configuration, pathing, error handling, db credentials
get_header();
$config->titleTag = 'Akihabara | &#8211; An Experience in Tokyo';

?>
 <div class="container akiba">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Side bar &raquo;</button>
          </p>
          <div class="jumbotron akiba-base">
          <img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/akiba-lp.jpg">
        
            <h1>Akihabara </h1><p>is a place you need to check out whenever you are in Tokyo. There are all kinds of electronics shops with some great deals on anything with a wire or a chip! There are also some great restaurants and bars to hang out  in. So go have some fun and save a lot on electronic equipment and gadgets.</p>
          </div>
          <!--<div class="row">
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-akiba" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-akiba" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-akiba" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-akiba" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-akiba" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-akiba" href="#" role="button">View details &raquo;</a></p>
            </div><!--/span-->
          <!--</div>--><!--/row-->
          <div class="row">
          	 <div class=" col-xs-12 col-sm-12">
            
              <h2>Location</h2>     
        <iframe style="margin-bottom:10px; border:solid 2px #d5b755;" width="100%" height="375" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  class="img-rounded" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Akihabara+Station,+Tokyo,+Japan&amp;aq=1&amp;oq=Akiha&amp;sll=35.718155,139.77725&amp;sspn=0.011254,0.021136&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=35.698683,139.774219&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A&amp;output=embed"></iframe>
   <p><a class="btn btn-akiba"       href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Akihabara+Station,+Tokyo,+Japan&amp;aq=1&amp;oq=Akiha&amp;sll=35.718155,139.77725&amp;sspn=0.011254,0.021136&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=35.698683,139.774219&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A" role="button" target="_blank">View Larger Map &raquo;</a>
</p>
          	</div>
          </div>
            </div><!--/span-->

       <?php echo $config->sidebar1;?>
      </div><!--/row-->
 <hr>
      <hr>
<div><h2><a href="#" target="_top" style="color:#fff;text-decoration: none;text-shadow:1px 1px 1px #ff9900">Back to Top</a></h2> </div>
    



<?php 
get_footer();
?>
    </div><!--/.container-->
