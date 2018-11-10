<!DOCTYPE HTML>
<html class="container-fluid" lang="en">
    <head>
    	<!-- meta content -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       	<!--dependencies resolved here -->
       		<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

			<!-- custom JS files -->
			<script src="../js/Spark.js"></script>
			<script src="../js/SparkArticle.js"></script>
			<script src="../js/Validation.js"></script>
			<script src="../js/inner_mechanics.js"></script>
			<script src="../js/mechanics.js"></script>
			<script src="../js/utilitary.js"></script>
			<script src="../js/CarouselClass.js"></script>
	        <script src="../js/scripts.js"></script>
	        <script src="../js/modal.js"></script>
	       	<!-- vlastny skompilovany bootstrap -->
			<link rel="stylesheet" href="../css/bootstrap3.3.7_v2/css/bootstrap.min.css"/>
			<!-- vlastny JS zo skompilovaneho bootstrapu -->
			<script src="../css/bootstrap3.3.7_v2/js/bootstrap.min.js"></script>

			<!-- custom css -->
	       	<link rel="stylesheet" href="../css/frickles.css"/>
	       	<link rel="stylesheet" href="../css/heavy.css"/>
			<link rel="stylesheet" href="../css/modal.css"/>
		<!-- configuration and misc references -->

			<!-- follow device width, initial zoom level let be default -->
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- fonts defined here-->
	 		<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/hi" type="text/css"/>
	 		<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/press-start-2p" type="text/css"/>
	        <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/beon" type="text/css"/>
	        <?php
                spl_autoload_register(//terror itself
                        function($clName)
                        {
                            //echo 'Autoload HTML: ' . $clName.PHP_EOL;
                            if(strtoupper(substr(PHP_OS, 0, 3)) === "WIN")
                            {//cesty su v tvare '\'
                                $path="\\";
                            }
                            else
                            { //something else, lets hope its UNIX based
                                //opacne lomitko
                                $path="/";
                            }//php is constant everywhere
                            if(file_exists(dirname(__DIR__).$path."php".$path. $clName . ".php"))
                            {
                            //    echo 'Exists '.PHP_EOL;
                                   require_once(dirname(__DIR__).$path."php".$path. $clName .".php");
                            }
                            else
                            {
                                throw new Exception("Error trying to load file(html): " . $clName . ".php", 1000);
                            }
                        }
                    );
                    try {
                        $util=new Util();//this must be global & accessible for every object using dependency injection
                    } catch (Exception $e) {
                        echo 'Initial HTML error: ' .$e;
                    }
             ?>
       	<!-- rest of head section -->
        <title>Prince of Persia</title>
    </head>
	<body id="telo">
		<?php
            try
            {
                new GeneralHeader($util);
            }
            catch (Exception $e)
            {
                echo 'Error loading header - prince: ' . $e;
            }
         ?>
	    	<article class="container-fluid">
	    		<h3 class="arcade-font-prince centrovanie">Prince of Persia</h3>
	    		<div class="row">
	    			<!-- prince carousel -->
		    		<div id="carusPrince" class="carousel slide col-lg-12 col-md-12 col-sm-12 col-xs-12" data-ride="carousel" data-pause="hover" data-keyboard="true" data-interval=10000>
						<!-- indikatory -->
						<ol class="carousel-indicators">
							<li data-target="#carusPrince" data-slide-to="0" class="active"></li>
							<li data-target="#carusPrince" data-slide-to="1" ></li>
							<li data-target="#carusPrince" data-slide-to="2" ></li>
							<li data-target="#carusPrince" data-slide-to="3" ></li>
						</ol>
						<!-- data items -->
						<div class="carousel-inner" role="listbox" id="imgsCar">
							<div class="item active" style="background-image: url(../img/ptimce0.PNG);">
								<img src=<?php echo $util->getSelfRoot().$util::img.$util->getRelativeAddressingChar()."ptimce0.PNG";?> alt="prince0"/>
							</div>
							<div class="item" style="background-image: url(../img/prince.PNG);">
								<img src=<?php echo $util->getSelfRoot().$util::img.$util->getRelativeAddressingChar()."prince.PNG"?> alt="prince"/>
							</div>
							<div class="item" style="background-image: url(../img/prince1.PNG);">
								<img  src=<?php echo $util->getSelfRoot().$util::img.$util->getRelativeAddressingChar()."prince1.PNG"?> alt="prince1"/>
							</div>
							<div class="item" style="background-image: url(../img/prince2.png);">
								<img  src=<?php echo $util->getSelfRoot().$util::img.$util->getRelativeAddressingChar()."prince2.PNG"?> alt="prince2"/>
							</div>
						</div>
						<!-- ovladace -->
						<a class="left carousel-control" href="#carusPrince" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carusPrince" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
		    		</div>
	    		</div>
	    		<section> <!--text -->
	    			<h4 class="beon-neon left-padding">Plot</h4>
	    			<p>
	    				The game is set in ancient Persia. While the sultan is fighting a war in a foreign land,
		    			 his vizier Jaffar, a wizard, seizes power. Jaffar's only obstacle to the throne is the Sultan's daughter
		    			 (although the game never specifically mentions how). Jaffar locks her in a tower and orders her, under threat
		    			 of execution, to become his wife. The game's nameless protagonist, whom the Princess loves, is thrown into the
		    			 palace dungeons. The player must lead the protagonist out of the dungeons and to the palace tower, defeating
		    			 Jaffar and freeing the Princess in under 60 minutes. In addition to guards, various traps and dungeons, the
		    			 protagonist is further hindered by his own doppelgänger, an apparition of his own self that is conjured out
		    			 of a magic mirror.
	    			</p>
	    		</section>
	    		<hr/>
	    		<section>
	    			<h4 class="beon-neon left-padding">Gameplay</h4>
	    			<p>
	    				The main objective of the player is to lead the nameless protagonist out of dungeons and into a tower
	    				before time runs out. This cannot be done without bypassing traps and fighting hostile swordsmen.
	    				The game consists of twelve levels (though some console versions have more). However, a game session may
	    				be saved and resumed at a later time only after level 3.
						The player has a health indicator that consists of a series of small red triangles. The player starts
						with three. Each time the protagonist is damaged (cut by sword, fallen from two floors of heights or hit
						by a falling rock), the player loses one of these indicators. There are small jars of red potion scattered
						throughout the game that restore one health indicator. There are also large jars of red potion that increase
						 the maximum number of health indicators by one. If the player's health is reduced to zero, the protagonist
						 dies. Subsequently, the game is restarted from the beginning of the stage in which the protagonist died
						 but the timer will not reset to that point, effectively constituting a time penalty. There is no counter for the number of lives; but if time runs out, the princess will die and the game will be over.
There are three types of traps that the player must bypass: Spike traps, deep pits (three or more levels deep) and guillotines. Getting caught or falling into each results in the instant death of the protagonist. In addition, there are gates that can be raised for a short period of time by having the protagonist stand on the activation trigger. The player must pass through the gates while they are open, avoiding locking triggers. Sometimes, there are various traps between an unlock trigger and a gate.
Hostile swordsmen (Jaffar and his guards) are yet another obstacle. The player obtains a sword in the first stage, which they can use to fight these adversaries. The protagonist's sword maneuvers are as follows: advance, back off, slash, parry, or a combined parry-then-slash attack. Enemy swordsmen also have a health indicator similar to that of the protagonist. Killing them involves slashing them until their health indicator is depleted or by pushing them into traps while fighting.
A unique trap encountered in stage four, which serves as a plot device, is a magic mirror, whose appearance is followed by an ominous leitmotif. The protagonist is forced to jump through this mirror upon which his doppelganger emerges from the other side. This apparition later hinders the protagonist by stealing a potion and throwing him into a dungeon. The protagonist cannot kill this apparition as they share lives; any damage inflicted upon one also hurts the other. Therefore, the protagonist must merge with his doppelganger.
Once they have merged, the player can run across an invisible bridge to a new area, where they battle Jaffar (once the final checkpoint is reached, the player will no longer get a game over screen even if time runs out, except if the player dies after the timeout). Once Jaffar is defeated, his spell is broken and the Princess can be saved. In addition, the in-game timer is stopped at the moment of Jaffar's death, and the time remaining will appear on the high scores.
	    			</p>
	    			<p>More technical information at: <a href="https://en.wikipedia.org/wiki/Prince_of_Persia_(1989_video_game)" target="_blank">wikipedia</a></p>
	    		</section>
	    		<hr/>
	    		<section>
	    			<h4 class="beon-neon left-padding">Modern Prince of Persia</h4>
	    			<p>
Of the many versions of Prince of Persia now being sold, the closest to the 1989 game is Ubisoft's Prince of Persia Classic - a side-scrolling direct remake of the original with updated graphics - and its sequel, The Shadow and the Flame.
For purists who'd like to play the original DOS, Apple, or C-64 games just as you remember them... well, they're out there, but I can't tell you where.
In 2008, First Second Books published a Prince of Persia graphic novel - not a novelization, but an original story written by Iranian poet A.B. Sina, with its roots in the Persian myths and legends that inspired the games. It sparked my next collaboration with the phenomenally talented husband-and-wife illustrator team LeUyen Pham & Alexandre Puvilland, Templar.
					To read more visit: <a href="http://www.jordanmechner.com/projects/prince-of-persia/" target="_blank">jordanmechner.com</a>
	    			</p>
	    		</section>
	    		<!-- Register form -->
                <?php
                    try
                    {
                        new regfor($util);
                    }
                    catch (Exception $e)
                    {
                        echo 'Error - register form excpetion: ' . $e;
                    }
                ?>

			<!-- end frm -->
	    	</article>
            <?php
                try
                {
                    new GeneralFooter($util);
                }
                catch(Exception $e)
                {
                    echo "error excpetion caught - footer " . $e;
                }
             ?>
		<noscript>
	    		<p class="centrovanie"> Please <a href="www.enable-javascript.com">enable Javascript</a>, this site will not work without it</p>
	    </noscript>
	</body>
</html>
