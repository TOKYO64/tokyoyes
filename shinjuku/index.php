<?php ob_start();
require '/home/tokyo64/inc_tokyo/config_inc.php'; #provides configuration, pathing, error handling, db credentials
get_header();
$config->titleTag = 'Shinjuku | &#8211; An Experience in Tokyo';

?>
        <div class="container shinjuku">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Side bar &raquo; </button>
          </p>
          <div class="jumbotron shinjuku-base">
          <img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/shinjuku-lp.jpg">
            <h1>Shinjuku!</h1>
            <p>Shinjuku, with one of the busiest train stations in the world, has everything! You can literally get anything you want right in Shinjuku! World class hotels, restaurants, hang outs, great bargins on cameras, top notch department stores, conveniently located, you name it, Shinjuku has it! </p>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6 col-lg-4">
             <h2>Park Hyatt Tokyo</h2><p><img src="http://www.tokyo64.com/themes/tokyo64/images/park-hyatt.png" title="Park Hyatt Tokyo in Shinjuku, Japan – Hyatt 5 Star Luxury Hotel" alt="JR Shikoku Japan" class="img-rounded"/></p>
              <p>We stayed here for a night and it was an awesome experience! This is the same hotel where Bill Murray and Scarlett Johanson stayed shooting the movie "Lost in Translation". When we stayed there I was surprised to see that I was sitting in the exact same seat Bill Murray sat in while we were at the New York Bar and Grill high above Tokyo!</p>
              <p><a class="btn btn-shinjuku" href="http://tokyo.park.hyatt.com/en/hotel/home.html" role="button">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Isetan</h2><p><img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/isetan.png" class="img-rounded"></p>
              <p>Can't say enough about Iseatan department store. This one is down the street outside of the east exit at Shinjuku Station. You can shop for things you can't find in most places and the food in the basement is so good you'll find yourself eating there more times thant you can imagine. So check it out and enjoy the experience!</p>
              <p><a class="btn btn-shinjuku" href="http://www.isetan.co.jp.e.az.hp.transer.com/icm2/jsp/store/shinjuku/index.jsp;jsessionid=AC407A122ADBB5CBFE53E647DF1F8847" role="button">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>People Watching</h2><p><img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/shinjuku-people.jpg" class="img-rounded"></p>
              <p>If you just want to walk around and watch people, Shinjuku is one of those places you can do it with no problems. There are tons of places to walk and everywhere you go you'll see people around every corner! </p>
              <!--<p><a class="btn btn-shinjuku" href="#" role="button">View details &raquo;</a></p>-->
            </div><!--/span-->
          </div><!--/row-->
           <div class="row">
            <div class=" col-xs-12 col-sm-12">
            
              <h2>Location</h2>     
<iframe style="margin-bottom:10px; border:solid 2px #d5b755;" width="100%" height="375" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  class="img-rounded" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Shinjuku+Station,+Tokyo,+Japan&amp;aq=0&amp;oq=Shinjuku+Station,+Tokyo,+Japan&amp;sll=35.660992,139.701333&amp;sspn=0.011262,0.021136&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=35.690921,139.700258&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A&amp;output=embed"></iframe>
 <p><a class="btn btn-shinjuku" href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Shinjuku+Station,+Tokyo,+Japan&amp;aq=0&amp;oq=Shinjuku+Station,+Tokyo,+Japan&amp;sll=35.660992,139.701333&amp;sspn=0.011262,0.021136&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=35.690921,139.700258&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A"  role="button" target="_blank">View Larger Map &raquo;</a>
</p>


            </div><!--/span-->
            </div><!--/row-->
                
        </div><!--/span-->

       <?php echo $config->sidebar1;?>
      </div><!--/row-->

 <hr>
     <hr>
<div><h2><a href="#" target="_top" style="color:#fff;text-decoration: none;text-shadow:1px 1px 1px #0000FF">Back to Top</a></h2> </div>
<?php
      get_footer();
?>

    </div><!--/.container-->
