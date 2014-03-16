<?php ob_start();
require '/home/tokyo64/inc_tokyo/config_inc.php'; #provides configuration, pathing, error handling, db credentials
get_header();
?>

    <div class="container home">

     <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Side bar &raquo; </button>
          </p>
          <div class="jumbotron" >
          <img src="<?php echo THEME_PATH;?>images/hara2.jpg">
            <h1 >Tokyo Yes Tokyo!</h1>
  <p >This is a brand new experience in Tokyo that is just getting started.  Tokyo is an urban paradise. Tokyo is city rhythm. Tokyo is alive and  Tokyo is love! So enjoy an experience in Tokyo. Please click on the buttons below for an area you are interested in.</p>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6 col-lg-4">
              
              <h2>Getting Around</h2>  <p><img src="<?php echo THEME_PATH;?>images/getting-around.jpg"  class="img-rounded"></p></p>
              <p>Tokyo is very easy to get around and has the best public transportation in the world! You can ride the safe, clean subways, busses bullet trains, monorails and elevated trains and take them anywhere you need to go.</p>
              <p><a class="btn btn-default" href="/around" role="button" >For more info &raquo;</a></p>
            </div><!--/span-->
            
            <div class="col-6 col-sm-6 col-lg-4 span4">     

              <h2>Akihabara</h2><p><img src="<?php echo THEME_PATH;?>images/akiba.jpg"  class="img-rounded"></p></p> 
              <p>Akihabara is a place you need to check out whenever you are in Tokyo. There are all kinds of electronics shops with some great deals on anything with a wire or a chip! There are also some great restaurants and bars to hang out  in. So go have some fun and save a lot on electronic equipment and gadgets. </p>
              <p><a class="btn btn-default" href="/akiba" role="button">For more info &raquo;</a></p>
            </div><!--/span-->
         <div class="col-6 col-sm-6 col-lg-4 span4">     

              <h2>Asakusa</h2>
               <p><img src="<?php echo THEME_PATH;?>images/asakusa.jpg" class="img-rounded"></p> 
              <p>Asakusa is one of the most popular places to go in Tokyo and is almost always crowded during the day. There is the Sensoji Temple, surrounded by small souvernir shops and wonderful eateries. There are also nice walking places around the temple too. Asakusa is one of those places you have to see to complete your trip to Tokyo.</p>
              <p><a class="btn btn-default" href="/asakusa" role="button">For more info &raquo;</a></p>
              </div><!--/span-->
            
             </div><!--row-->
          
          <div class="row">
          	<div class="col-6 col-sm-6 col-lg-4 span4">
            	 <h2>Eat Tokyo</h2><p><img src="<?php echo THEME_PATH;?>images/eat-tokyo.jpg" class="img-rounded"></p>
              <p>The food in Tokyo is simply delicious! Tokyo has more world class restaurants than any place on earth. They have French restaurants that have been rated better than French restaurants in Paris! You can eat on any budget and the food will be good, clean and safe to eat! So go ahead and spoil your appetite!</p>
              <p><a class="btn btn-default" href="/eat-tokyo" role="button">For more info &raquo;</a></p>       
            </div><!--/span-->
          	
          	<div class="col-6 col-sm-6 col-lg-4 span4">
            	 <h2>Roppongi</h2><p><img src="<?php echo THEME_PATH;?>images/rp.jpg" class="img-rounded"></p>
              <p>Roppongi is the place to go and immerse yourself in the global community. There are lots of clubs, bars, places to eat and things to see. You can also do some shopping at some world class shopping centers along the way. It's a must see in Tokyo!</p>
              <p><a class="btn btn-default" href="/roppongi" role="button">For more info &raquo;</a></p>       
            </div><!--/span-->
          	<div class="col-6 col-sm-6 col-lg-4">     

              <h2>Shibuya</h2>
               <img src="<?php echo THEME_PATH;?>images/shibuya.jpg" class="img-rounded"></p>
              <p>Shibuya is an ever popular spot where lots of  young adults and teenagers hang out. But that is changing as more and more types of people come to witness the daily display of the latest fashion, art and culture in what is one of the world's busiest hangouts. See for yourself, you'll keep coming back for more! </p>
              <p><a class="btn btn-default" href="/shibuya" role="button">For more info &raquo;</a></p>
              </div><!--/span-->
             
              </div><!--/row-->
          <div class="row">
          	 <div class="col-6 col-sm-6 col-lg-4 span4">     

              <h2>Shinjuku</h2>
               <img src="<?php echo THEME_PATH;?>images/shinjuku.jpg" class="img-rounded"></p>
              <p>Shinjuku, with one of the busiest train stations in the world, has everything! You can literally get anything you want right in Shinjuku! World class hotels, restaurants, hang outs, great bargins on cameras, top notch department stores, conveniently located, you name it, Shinjuku has it! </p>
              <p><a class="btn btn-default" href="/shinjuku" role="button"> For more info &raquo;</a></p>
              </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4 span4">
              <h2>Tokyo Station</h2><p><img src="<?php echo THEME_PATH;?>images/station.jpg"  class="img-rounded"></p>
              <p>Tokyo Station is a very busy place with lots and lots to see and do. You can check out the refurbished Tokyo Station with it's brick facade and lovely towers. You can also check out the underground shopping and Marunouchi district where fine eateries and good times abound!</p>
              <p><a class="btn btn-default" href="/station" role="button">For more info &raquo;</a></p>
            </div><!--/span-->
                      
              <div class="col-6 col-sm-6 col-lg-4 span4">     

              <h2>Tokyo Skytree</h2>
               <p><img src="<?php echo THEME_PATH;?>images/skytree.jpg" class="img-rounded"></p>
              <p>High above the megalopolis! You can see as far as the wind from this giant structure! It's 634 meters tall but looks taller than that when you come up on it! And there isn't just the obervation deck. You can shop at Soramachi shopping center at the base of the Skytree. Asakusa is close and you have all they have to offer in Sumidaku.</p>
              <p><a class="btn btn-default" href="/skytree" role="button">For more info &raquo;</a></p>
              </div><!--/span-->
               </div><!--/row-->
          <div class="row">
          	<div class="col-6 col-sm-6 col-lg-4 span4">
             <h2>Ueno</h2><p><img src="<?php echo THEME_PATH;?>images/ueno.jpg"  class="img-rounded"></p>
              <p>Ueno has lots to do. Everything is centered around Ueno Station, a major hub in Tokyo.  Home to some of Tokyo's finest cultural sites, including the Tokyo National Museum, the National Museum of Western Art, and the National Museum of Nature and Science, as well as a major public concert hall. Many Buddhist temples are in the area, including the Bentendo temple dedicated to goddess Benzaiten, on an island in Shinobazu Pond. There is a lot to do. Click below for more. </p>
              <p><a class="btn btn-default" href="/ueno" role="button">For more info &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4 span4">
             <h2>Sengakukji</h2><p><img src="<?php echo THEME_PATH;?>images/sengakuji.jpg"  class="img-rounded"></p>
              <p>Sengakuji is the final resting place of the famous 47 Ronin, a leaderless group of men that became hired warriors for those that needed their services. Sengakukji is a neat area for just browsing around and is very conveniently located. </p>
              <p><a class="btn btn-default" href="/sengakuji" role="button">For more info &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4 span4">
             <h2>Facts Tokyo</h2><p><img src="<?php echo THEME_PATH;?>images/facts.jpg"  class="img-rounded"></p>
              <p>Tokyo will host the 2020 Olympics! Tokyo hosted their first olympics in 1964. On October 1, 1964, the Shinkansen or bullet train left Tokyo and Osaka stations simultaneously and launched the world's first high speed rail line! Click below for more facts on Tokyo </p>
              <p><a class="btn btn-default" href="/facts" role="button">For more info &raquo;</a></p>
            </div><!--/span-->    	
          </div><!--/row-->
          
          
        </div><!--/span-->

       <?php echo $config->sidebar1;?>
    
      </div><!--/row-->
    
 <hr>
      <hr>
<div><h2><a href="#" target="_top" style="color:#fff;text-decoration: none;text-shadow:1px 1px 1px #8c0502">Back to Top</a></h2> </div>
 <?php
   get_footer();
?>
  

    </div><!--/.container-->

