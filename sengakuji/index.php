<?php ob_start();
require '/home/tokyo64/inc_tokyo/config_inc.php'; #provides configuration, pathing, error handling, db credentials
get_header();
$config->titleTag = 'Sengakuji | &#8211; An Experience in Tokyo';

?>
<div class="container sengakuji">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Side bar &raquo; </button>
          </p>
          <div class="jumbotron sengakuji-base" >
          <img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/sengakuji-lp.jpg">
            <h1 >Sengakuji</h1>
  <p>is the final resting place of the famous 47 Ronin, a leaderless group of men that became hired warriors for those that needed their services. Sengakukji is a neat area for just browsing around and is very conveniently located. </p>
          </div>
         <!-- <div class="row">
            <div class="col-6 col-sm-6 col-lg-4 span4 ">
              
              <h2>Getting Around</h2>  <p><img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/getting-around.jpg"  class="img-rounded"></p></p>
              <p>Tokyo is very easy to get around and has the best public transportation in the world! You can ride the safe, clean subways, busses bullet trains, monorails and elevated trains and take them anywhere you need to go.</p>
              <p><a class="btn btn-sengakuji" href="getting-around.html" role="button" >View details &raquo;</a></p>
            </div>
            
            <div class="col-6 col-sm-6 col-lg-4 span4">     

              <h2>Akihabara</h2><p><img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/akiba.jpg"  class="img-rounded"></p></p> 
              <p>Akihabara is a place you need to check out whenever you are in Tokyo. There are all kinds of electronics shops with some great deals on anything with a wire or a chip! There are also some great restaurants and bars to hang out  in. So go have some fun and save a lot on electronic equipment and gadgets. </p>
              <p><a class="btn btn-sengakuji" href="akiba.html" role="button">View details &raquo;</a></p>
            </div>
         <div class="col-6 col-sm-6 col-lg-4 span4">     

              <h2>Asakusa</h2>
               <p><img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/asakusa.jpg" class="img-rounded"></p> 
              <p>Asakusa is one of the most popular places to go in Tokyo and is almost always crowded during the day. There is the Sensoji Temple, surrounded by small souvernir shops and wonderful eateries. There are also nice walking places around the temple too. Asakusa is one of those places you have to see to complete your trip to Tokyo.</p>
              <p><a class="btn btn-sengakuji" href="asakusa.html" role="button">View details &raquo;</a></p>
              </div>
            
             </div>
          
          <div class="row">
          	<div class="col-6 col-sm-6 col-lg-4 span4">
            	 <h2>Eat Tokyo</h2><p><img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/eat-tokyo.jpg" class="img-rounded"></p>
              <p>The food in Tokyo is simply delicious! Tokyo has more world class restaurants than any place on earth. They have French restaurants that have been rated better than French restaurants in Paris! You can eat on any budget and the food will be good, clean and safe to eat! So go ahead and spoil your appetite!</p>
              <p><a class="btn btn-sengakuji" href="eat-tokyo.html" role="button">View details &raquo;</a></p>       
            </div>
          	
          	<div class="col-6 col-sm-6 col-lg-4 span4">
            	 <h2>Roppongi</h2><p><img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/rp.jpg" class="img-rounded"></p>
              <p>Roppongi is the place to go and immerse yourself in the global community. There are lots of clubs, bars, places to eat and things to see. You can also do some shopping at some world class shopping centers along the way. It's a must see in Tokyo!</p>
              <p><a class="btn btn-sengakuji" href="roppongi.html" role="button">View details &raquo;</a></p>       
            </div>
          	<div class="col-6 col-sm-6 col-lg-4 span4">     

              <h2>Shibuya</h2>
               <img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/shibuya.jpg" class="img-rounded"></p>
              <p>Shibuya is an ever popular spot where lots of  young adults and teenagers hang out. But that is changing as more and more types of people come to witness the daily display of the latest fashion, art and culture in what is one of the world's busiest hangouts. See for yourself, you'll keep coming back for more! </p>
              <p><a class="btn btn-sengakuji" href="shibuya.html" role="button">View details &raquo;</a></p>
              </div>
             
              </div>
          <div class="row">
          	 <div class="col-6 col-sm-6 col-lg-4 span4">     

              <h2>Shinjuku</h2>
               <img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/shinjuku.jpg" class="img-rounded"></p>
              <p>Shinjuku, with one of the busiest train stations in the world, has everything! You can literally get anything you want right in Shinjuku! World class hotels, restaurants, hang outs, great bargins on cameras, top notch department stores, conveniently located, you name it, Shinjuku has it! </p>
              <p><a class="btn btn-sengakuji" href="shinjuku.html" role="button"> View details &raquo;</a></p>
              </div>
            <div class="col-6 col-sm-6 col-lg-4 span4">
              <h2>Tokyo Station</h2><p><img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/station.jpg"  class="img-rounded"></p>
              <p>Tokyo Station is a very busy place with lots and lots to see and do. You can check out the refurbished Tokyo Station with it's brick facade and lovely towers. You can also check out the underground shopping and Marunouchi district where fine eateries and good times abound!</p>
              <p><a class="btn btn-sengakuji" href="station.html" role="button">View details &raquo;</a></p>
            </div>
              <div class="col-6 col-sm-6 col-lg-4 span4">     

              <h2>Tokyo Skytree</h2>
               <p><img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/skytree.jpg" class="img-rounded"></p>
              <p>High above the megalopolis! You can see as far as the wind from this giant structure! It's 634 meters tall but looks taller than that when you come up on it! And there isn't just the obervation deck. You can shop at Soramachi shopping center at the base of the Skytree. Asakusa is close and you have all they have to offer in Sumidaku.</p>
              <p><a class="btn btn-sengakuji" href="skytree.html" role="button">View details &raquo;</a></p>
              </div>
               </div>
          <div class="row">
          	<div class="col-6 col-sm-6 col-lg-4 span4">
             <h2>Ueno</h2><p><img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/ueno.jpg"  class="img-rounded"></p>
              <p>Ueno has lots to do. Everything is centered around Ueno Station, a major hub in Tokyo. There is a lot to do. Click below for more. </p>
              <p><a class="btn btn-sengakuji" href="ueno.html" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-6 col-sm-6 col-lg-4 span4">
             <h2>Sengakukji</h2><p><img src="http://www.tokyoyestokyo.com/themes/yes-tokyo/images/ueno.jpg"  class="img-rounded"></p>
              <p>Sengakuji is the final resting place of the famous 47 Ronin, a leaderless group of men that became hired warriors for those that needed their services. Sengakukji is a neat area for just browsing around and is very conveniently located. </p>
              <p><a class="btn btn-sengakuji" href="ueno.html" role="button">View details &raquo;</a></p>
            </div>
          	 
          
          	
          </div><!--/row-->
          <div class="row">
            <div class=" col-xs-12 col-sm-12">
            
              <h2>Location</h2>     
<iframe style="margin-bottom:10px; border:solid 2px #d5b755;" width="100%" height="375" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  class="img-rounded" src="https://maps.google.co.jp/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=%E6%9D%B1%E4%BA%AC%E9%83%BD%E6%B8%AF%E5%8C%BA%E9%AB%98%E8%BC%AA2-11-1&amp;aq=&amp;sll=34.728949,138.455511&amp;sspn=58.204321,70.3125&amp;brcurrent=3,0x60188a5355c88565:0x594b073ecb58ee8d,0&amp;ie=UTF8&amp;hq=&amp;hnear=%E6%9D%B1%E4%BA%AC%E9%83%BD%E6%B8%AF%E5%8C%BA%E9%AB%98%E8%BC%AA%EF%BC%92%E4%B8%81%E7%9B%AE%EF%BC%91%EF%BC%91%E2%88%92%EF%BC%91&amp;t=m&amp;ll=35.637767,139.736309&amp;spn=0.034878,0.073214&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
         
         
<p><a class="btn btn-sengakuji" href="https://maps.google.co.jp/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=%E6%9D%B1%E4%BA%AC%E9%83%BD%E6%B8%AF%E5%8C%BA%E9%AB%98%E8%BC%AA2-11-1&amp;aq=&amp;sll=34.728949,138.455511&amp;sspn=60.062774,135.263672&amp;brcurrent=3,0x60188bab4e554c03:0xd1f3947f19085e72,0,0x60188a54b2e06bbb:0xdca35c2aa569f492&amp;ie=UTF8&amp;hq=&amp;hnear=%E6%9D%B1%E4%BA%AC%E9%83%BD%E6%B8%AF%E5%8C%BA%E9%AB%98%E8%BC%AA%EF%BC%92%E4%B8%81%E7%9B%AE%EF%BC%91%EF%BC%91%E2%88%92%EF%BC%91&amp;t=m&amp;z=14&amp;iwloc=A"  role="button" target="_blank">View Larger Map &raquo;</a>
</p>

            </div><!--/span-->
            </div><!--/row-->
            
        </div><!--/span-->

       <?php echo $config->sidebar1;?>
      </div><!--/row-->


 <hr>
      <hr>
<div><h2><a href="#" target="_top" style="color:#fff;text-decoration: none;text-shadow:1px 1px 1px #775043;">Back to Top</a></h2> </div>
 



<?php
get_footer();
?>
    </div><!--/.container-->
