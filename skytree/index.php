<?php ob_start();
require '/home/tokyo64/inc_tokyo/config_inc.php'; #provides configuration, pathing, error handling, db credentials
get_header();
$config->titleTag = 'Tokyo Skytree | &#8211; An Experience in Tokyo';

?>

    
    <div class="container skytree">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Side bar &raquo; </button>
          </p>
          <div class="jumbotron skytree-base">
          <img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/skytree-lp.jpg">
            <h1>Tokyo Skytree!</h1>
            <p>High above the megalopolis! You can see as far as the wind from this giant structure! It's 634 meters tall but looks taller than that when you come up on it! And there isn't just the obervation deck. You can shop at Soramachi shopping center at the base of the Skytree. Asakusa is close and you have all they have to offer in Sumidaku.</p>
          </div>
          <!--<div class="row">
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-skytree" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-skytree" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-skytree" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-skytree" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-skytree" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-skytree" href="#" role="button">View details &raquo;</a></p>
            </div>
          </div><!--/row-->
           <div class="row">
            <div class=" col-xs-12 col-sm-12">
            
              <h2>Location</h2>     
<iframe style="margin-bottom:10px; border:solid 2px #d5b755;" width="100%" height="375" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  class="img-rounded" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Tokyo+Skytree,+Sumida,+Tokyo,+Japan&amp;aq=1&amp;oq=Tokyo+Sky&amp;sll=35.694859,139.70026&amp;sspn=0.011258,0.021136&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;t=m&amp;iwloc=A&amp;ll=35.710063,139.8107&amp;spn=0.006295,0.006295&amp;output=embed"></iframe>
 <p><a class="btn btn-skytree" href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Tokyo+Skytree,+Sumida,+Tokyo,+Japan&amp;aq=1&amp;oq=Tokyo+Sky&amp;sll=35.694859,139.70026&amp;sspn=0.011258,0.021136&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;t=m&amp;iwloc=A&amp;ll=35.710063,139.8107&amp;spn=0.006295,0.006295"  role="button" target="_blank">View Larger Map &raquo;</a>
</p>


            </div><!--/span-->
            </div><!--/row-->
                  
        </div><!--/span-->

       <?php echo $config->sidebar1;?>
      </div><!--/row-->

      <hr>
<div><h2><a href="skytree.html" target="_top" style="color:#fff;text-decoration: none;text-shadow:1px 1px 1px #99cccc">Back to Top</a></h2> </div>
   <?php
   get_footer();
   ?>
    </div><!--/.container-->
