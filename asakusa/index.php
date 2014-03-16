<?php ob_start();
require '/home/tokyo64/inc_tokyo/config_inc.php'; #provides configuration, pathing, error handling, db credentials
get_header();
$config->titleTag = 'Asakusa | &#8211; An Experience in Tokyo';

?>
       <div class="container asakusa">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Side bar &raquo; </button>
          </p>
          <div class="jumbotron asakusa-base">
          <img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/asakusa-lp.jpg">
        
            <h1>Asakusa</h1><p>is one of the most popular places to go in Tokyo and is almost always crowded during the day. There is the Sensoji Temple, surrounded by the many souvernir shops and wonderful eateries of Nakamisedori and Tenbouindori. There are also nice walking places around the temple too. Asakusa is one of those places you have to see to complete your trip to Tokyo.</p>
          </div>
          
          
          <div class="row">
            <div class=" col-xs-12 col-sm-6">
            
              <h2>Kaminarimon</h2><p><figure><img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/kaminarimon.jpg" class="img-rounded"><figcaption>The big lantern!</figcaption></figure></p>
             
              
              
              <p><a class="btn btn-asakusa" href="#" role="button">More info &raquo;</a></p>
            </div><!--/span-->
             <div class=" col-xs-12 col-sm-6">
            
              <h2>Nakamisedori</h2><p><figure><img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/nakamisedori.jpg" class="img-rounded"><figcaption>The big lantern!</figcaption></figure></p>
             
              
              
              <p><a class="btn btn-asakusa" href="#" role="button">More info &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
          <div class="row">
            <div class=" col-xs-12 col-sm-6">
            
              <h2>Sensouji</h2><p><figure><img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/sensouji.jpg" class="img-rounded"><figcaption>The big lantern!</figcaption></figure></p>
             
              
              
              <p><a class="btn btn-asakusa" href="#" role="button">More info &raquo;</a></p>
            </div><!--/span-->
             <div class=" col-xs-12 col-sm-6">
            
              <h2>Tenbouindori</h2><p><figure><img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/tenbouin.jpg" class="img-rounded"><figcaption>The big lantern!</figcaption></figure></p>
            
              
              
              <p><a class="btn btn-asakusa" href="#" role="button">More info &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
            <div class="row">
            <div class=" col-xs-12 col-sm-6">
            
              <h2>Skytree site</h2><p><figure><img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/skytreeview.jpg" class="img-rounded"><figcaption>The big lantern!</figcaption></figure></p>
             
              
              
              <p><a class="btn btn-asakusa" href="#" role="button">More info &raquo;</a></p>
            </div><!--/span-->
             <div class=" col-xs-12 col-sm-6">
            
              <h2>Skytree from Sensouji</h2><p><figure><img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/sensouji2.jpg" class="img-rounded"><figcaption>The big lantern!</figcaption></figure></p>
              
              
              
              <p><a class="btn btn-asakusa" href="#" role="button">More info &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
          <div class="row">
            <div class=" col-xs-12 col-sm-12">
            
              <h2>Location</h2>     
<iframe style="margin-bottom:10px; border:solid 2px #d5b755;" width="100%" height="375" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  class="img-rounded" src="https://maps.google.co.jp/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Asakusa+Shrine,+Taito,+Tokyo&amp;aq=2&amp;oq=asakusa&amp;sll=35.710437,139.794309&amp;sspn=0.011255,0.021136&amp;brcurrent=3,0x60188ec2047f5333:0x7c84fd3881c74067,0&amp;ie=UTF8&amp;hq=Asakusa+Shrine,&amp;hnear=Taito,+Tokyo&amp;t=m&amp;ll=35.715006,139.797408&amp;spn=0.006295,0.038307&amp;output=embed"></iframe>
 <p><a class="btn btn-asakusa" href="https://maps.google.co.jp/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Asakusa+Shrine,+Taito,+Tokyo&amp;aq=2&amp;oq=asakusa&amp;sll=35.710437,139.794309&amp;sspn=0.011255,0.021136&amp;brcurrent=3,0x60188ec2047f5333:0x7c84fd3881c74067,0&amp;ie=UTF8&amp;hq=Asakusa+Shrine,&amp;hnear=Taito,+Tokyo&amp;t=m&amp;ll=35.715006,139.797408&amp;spn=0.006295,0.038307" role="button" target="_blank">View Larger Map &raquo;</a>
</p>


            </div><!--/span-->
            </div><!--/row-->
     </div><!--/span-->

       <?php echo $config->sidebar1;?>
      </div><!--/row-->
 <hr>
       <hr>
<div><h2><a href="#" target="_top" style="color:#fff;text-decoration: none;text-shadow:1px 1px 1px #B80000;">Back to Top</a></h2> </div>
        <?php
	get_footer();
	?>

    </div><!--/.container-->

  
