<?php ob_start();
require '/home/tokyo64/inc_tokyo/config_inc.php'; #provides configuration, pathing, error handling, db credentials
get_header();
$config->titleTag = 'Roppongi | &#8211; An Experience in Tokyo';

?>
       <div class="container roppongi">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Side bar &raquo; </button>
          </p>
          <div class="jumbotron roppongi-base">
          <img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/rp-lp.jpg">
            <h1>Roppongi</h1> 
              <p>is the place to go and immerse yourself in the global community. There are lots of clubs, bars, places to eat and things to see. You can also do some shopping at some world class shopping centers along the way. It's a must see in Tokyo!</p>
          </div>
          <!--<div class="row">
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-roppongi" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-roppongi" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-roppongi" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-roppongi" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-roppongi" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-roppongi" href="#" role="button">View details &raquo;</a></p>
            </div>
          </div><!--/row-->
         <div class="row">
         	<div class=" col-xs-12 col-sm-12">
            
              <h2>Location</h2>     
        <iframe style="margin-bottom:10px; border:solid 2px #d5b755;" width="100%" height="375" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  class="img-rounded" src="https://maps.google.co.jp/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Roppongi+Station,+Tokyo&amp;aq=1&amp;oq=rO&amp;sll=35.663573,139.734979&amp;sspn=0.022524,0.042272&amp;brcurrent=3,0x60188b77b2ded3eb:0x3c74c0403015977b,0&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;t=m&amp;iwloc=A&amp;ll=35.662836,139.731443&amp;spn=0.006295,0.006295&amp;output=embed"></iframe>
         	 <p><a class="btn btn-roppongi" href="https://maps.google.co.jp/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Roppongi+Station,+Tokyo&amp;aq=1&amp;oq=rO&amp;sll=35.663573,139.734979&amp;sspn=0.022524,0.042272&amp;brcurrent=3,0x60188b77b2ded3eb:0x3c74c0403015977b,0&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;t=m&amp;iwloc=A&amp;ll=35.662836,139.731443&amp;spn=0.006295,0.006295" role="button" target="_blank">View Larger Map &raquo;</a>
         </div>
         </div><!--/row-->
         
       
            </div><!--/span-->

       <?php echo $config->sidebar1;?>
      </div><!--/row-->
 <hr>
     <hr>
<div><h2><a href="#" target="_top" style="color:#fff;text-decoration: none">Back to Top</a></h2> </div>
       <?php
	get_footer();
	?>
    </div><!--/.container-->
 

