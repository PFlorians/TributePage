<!DOCTYPE HTML>
<html class="container-fluid" lang="en">
    <head>
    	<!-- meta content -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       	<!--dependencies resolved here -->
       		<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

			<!-- vue -->
			<script src="js/vue.js"></script>
			<!-- axios -->
			<script src="https://github.com/axios/axios/tree/master/dist/axios.js"></script>
			<!-- custom JS files -->
			<script src="js/Spark.js"></script>
			<script src="js/inner_mechanics.js"></script>
			<script src="js/validation.js"></script>
			<script src="js/mechanics.js"></script>
			<script src="js/utilitary.js"></script>
			<script src="js/CarouselClass.js"></script>
	        <script src="js/scripts.js"></script>
	       	<script src="js/modal.js"></script>
			<!--<script src="js/inner_mechanics.js"></script>-->

			<!-- vlastny skompilovany bootstrap -->
			<link rel="stylesheet" href="css/bootstrap3.3.7_v2/css/bootstrap.min.css"/>

			<!-- vlastny JS zo skompilovaneho bootstrapu -->
			<script src="css/bootstrap3.3.7_v2/js/bootstrap.min.js"></script>

			<!-- custom css -->
	       	<link rel="stylesheet" href="css/frickles.css"/>
	       	<link rel="stylesheet" href="css/heavy.css"/>
			<link rel="stylesheet" href="css/modal.css"/>
		<!-- configuration and misc references -->

			<!-- follow device width initial zoom level -->
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- fonts defined here-->
	 		<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/hi" type="text/css"/>
	 		<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/press-start-2p" type="text/css"/>
	        <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/beon" type="text/css"/>
            <!-- dynamic content initiator -->
            <?php //attempt autoload check
            spl_autoload_register(
                function($clName)
                {
                    //echo 'Autoload HTML: ' . $clName.PHP_EOL;
                    if(file_exists("php/" . $clName . ".php"))
                    {
                    //    echo 'Exists '.PHP_EOL;
                           require_once("php/" . $clName .".php");
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
        <title>Retro Soft</title>
    </head>
    <body id="telo">
        <!-- init header here -->
    	<?php
            try //this is a must
            {
                new GeneralHeader($util);
            }
            catch (Exception $e)
            {
                echo 'Chyba: '.$e;//possibly not able to load resource
            }
         ?>
	    	<!--<main> -->
	    	<div class="row"><!-- carousel -->
	    		<div id="carus" class="carousel slide col-lg-8 col-md-8 col-sm-8 col-xs-12" data-ride="carousel" data-pause="hover" data-keyboard="true" data-interval=10000>
					<!-- indikatory -->
					<ol class="carousel-indicators">
						<li data-target="#carus" data-slide-to="0" class="active"></li>
						<li data-target="#carus" data-slide-to="1" ></li>
						<li data-target="#carus" data-slide-to="2" ></li>
						<li data-target="#carus" data-slide-to="3" ></li>
					</ol>
					<!-- data items -->
					<div class="carousel-inner" role="listbox" id="imgsCar">
						<div class="item active" style="background-image: url(img/ptimce0.PNG);">
							<img src=<?php echo $util::img.$util->getRelativeAddressingChar()."ptimce0.PNG";?> alt="prince0"/>
						</div>
						<div class="item" style="background-image: url(img/amiga0.png);">
							<img src=<?php echo $util::img.$util->getRelativeAddressingChar()."amiga0.png";?> alt="amiga"/>
						</div>
						<div class="item" style="background-image: url(img/turbod.PNG);">
							<img  src=<?php echo $util::img.$util->getRelativeAddressingChar()."turbod.PNG";?> alt="prince2"/>
						</div>
						<div class="item" style="background-image: url(img/win3.png);">
							<img  src=<?php echo $util::img.$util->getRelativeAddressingChar()."win3.png";?> alt="prince3"/>
						</div>
					</div>
					<!-- ovladace -->
					<a class="left carousel-control" href="#carus" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carus" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
	    		</div>
	    		<!-- auto generovana tabulka -->
	    		<div id="briefInfo" class="table-responsive col-sm-4 col-xs-2">
	    			<table id="contentInfo" class="table table-bordered table-striped">
	    				<!-- <thead>
	    					<th class="info">
	    						Parameter
	    					</th>
	    					<th>
	    						Brief Description
	    					</th>
	    				</thead>-->
	    				<tbody id="infoBody">

	    				</tbody>
	    			</table>
	    		</div>
	    	</div>
	    	<h2 class="arcade-font centrovanie">Articles</h2>
	    	<article>
	    		<h3 class="left-padding remove-deco"><a class="beon" href=<?php echo $util::html.$util->getRelativeAddressingChar()."prince.php";?>>Prince of Persia</a></h3>
	    		<div class="row">
	    			<a href=<?php echo $util::html.$util->getRelativeAddressingChar()."prince.php";?>>
	    				<img class="col-lg-5 col-md-5 col-sm-8 col-xs-10" src=<?php echo $util::img.$util->getRelativeAddressingChar()."ptimce0.PNG";?> alt="prince"/>
	    			</a>
	    			<p class="lemovanie">
		    			 Prince of Persia is a fantasy platform game, originally developed by Jordan Mechner and released in 1989
		    			 for the Apple II, that represented a great leap forward in the quality of animation seen in video games.
		    			 After the original release on the Apple II, Prince of Persia was ported to a wide range of platforms.
		    			 The game managed to surprise and captivate the player despite being at first glance, repetitive. This was
		    			 achieved by interspersing intelligent puzzles and deadly traps all along the path the player-controlled Prince
		    			 had to take to complete the game—all this packaged in fluid, lifelike motion. Prince of Persia influenced a
		    			 sub-genre known as the cinematic platformer, which imitated the sprawling non-scrolling levels, fluid animation,
		    			 and control style. The game is set in ancient Persia. While the sultan is fighting a war in a foreign land,
		    			 his vizier Jaffar, a wizard, seizes power. Jaffar's only obstacle to the throne is the Sultan's daughter
		    			 (although the game never specifically mentions how). Jaffar locks her in a tower and orders her, under threat
		    			 of execution, to become his wife. The game's nameless protagonist, whom the Princess loves, is thrown into the
		    			 palace dungeons. The player must lead the protagonist out of the dungeons and to the palace tower, defeating
		    			 Jaffar and freeing the Princess in under 60 minutes. In addition to guards, various traps and dungeons, the
		    			 protagonist is further hindered by his own doppelgänger, an apparition of his own self that is conjured out
		    			 of a magic mirror.
	    			</p>
	    		</div>
	        </article>
	        <hr/>
	        <article>
	    		<h3 class="left-padding remove-deco"><a class="beon" href=<?php echo $util::html.$util->getRelativeAddressingChar()."amiga.php";?>>Amiga OS</a></h3>
	    		<div class="row">
	    			<a href=<?php echo $util::html.$util->getRelativeAddressingChar()."amiga.php";?>>
	    				<img class="col-lg-5 col-md-5 col-sm-8 col-xs-10" src=<?php echo $util::img.$util->getRelativeAddressingChar()."amiga0.png";?> alt="amiga_os"/>
	    			</a>
	    			<p class="lemovanie">
		    			AmigaOS is a family of proprietary native operating systems of the Amiga and AmigaOne personal computers.
		    			It was developed first by Commodore International and introduced with the launch of the first Amiga, the
		    			Amiga 1000, in 1985. Early versions of AmigaOS required the Motorola 68000 series of 16-bit and 32-bit
		    			microprocessors. Later versions were developed by Haage and Partner (AmigaOS 3.5 and 3.9) and then Hyperion
		    			Entertainment (AmigaOS 4.0-4.1). A PowerPC microprocessor is required for the most recent release, AmigaOS 4.
						AmigaOS is a single-user operating system based on a preemptive multitasking kernel, called Exec. It
						includes an abstraction of the Amiga's hardware, a disk operating system called AmigaDOS, a windowing
						system API called Intuition and a desktop file manager called Workbench.
	    			</p>
	    		</div>
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
	    		 Please enable JS this site will not work without it
	    	</noscript>
    </body>
</html>
