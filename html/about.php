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

			<!-- follow device width, initial zoom level -->
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
        <title>About</title>

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
	    	<h3 class="arcade-font-prince centrovanie">About Retro Soft</h3>
	    	<div class="row">
	    		<!-- intro caroud -->
	    		<!-- carousel -->
		   		<div id="carusIntro" class="carousel slide col-lg-12 col-md-12 col-sm-12 col-xs-12 fade-out" data-ride="carousel" data-pause="hover" data-keyboard="true" data-interval=10000>
					<!-- indikatory -->
					<ol class="carousel-indicators">
						<li data-target="#carusIntro" data-slide-to="0" class="active"></li>
						<li data-target="#carusIntro" data-slide-to="1" ></li>
						<li data-target="#carusIntro" data-slide-to="2" ></li>
						<li data-target="#carusIntro" data-slide-to="3" ></li>
					</ol>
					<!-- data items -->
					<div class="carousel-inner" role="listbox" id="imgsCar">
						<div class="item active" style="background-image: url(../img/motu1.png);">
							<img src=<?php echo $util->getSelfRoot().$util::img.$util->getRelativeAddressingChar()."motu1.png";?> alt="Masters of the universe"/>
							<div class="carousel-caption">
								<h3 class="hilight">Masters of the universe - </h3>
								<p class="hilight">Classic 80's TV show</p>
							</div>
						</div>
						<div class="item" style="background-image: url(../img/scandroid.jpg);">
							<img src=<?php echo $util->getSelfRoot().$util::img.$util->getRelativeAddressingChar()."scandroid.jpg";?> alt="scandroid"/>
							<div class="carousel-caption">
								<h3 class="hilight">Scandroid - </h3>
								<p class="hilight">Popular Retrowave artist</p>
							</div>
						</div>
						<div class="item" style="background-image: url(../img/vrcade.jpg);">
							<img src=<?php echo $util->getSelfRoot().$util::img.$util->getRelativeAddressingChar()."vrcade.jpg";?> alt="vrcade"/>
							<div class="carousel-caption">
								<h3 class="hilight">Virtual arcade - </h3>
								<p class="hilight">An example of retro game design</p>
							</div>
						</div>
						<div class="item" style="background-image: url(../img/msdos.png);">
							<img src=<?php echo $util->getSelfRoot().$util::img.$util->getRelativeAddressingChar()."msdos.png";?> alt="msdos6"/>
							<div class="carousel-caption">
								<h3 class="hilight">MS-DOS 6.61 - </h3>
								<p class="hilight">Classic Operating system</p>
							</div>
						</div>
					</div>
					<!-- ovladace -->
					<a class="left carousel-control" href="#carusIntro" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carusIntro" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
		   		</div>
	    	</div>
	    	<hr/>
	    	<section>
	    		<h4 class="beon-neon left-padding">Idea of this website</h4>
	    		<p>
	    			This website serves basically as a tribute to all the hardware, software
	    			and culture from the last two decades of 20th century. It is dedicated
	    			as a revival of the old times since the new retro synthwave influenced
	    			culture of internet has developed. Thus the author of this web page saw fitting
	    			to contribute his little part to this culture, since he himself also
	    			identifies with it. All of those neon colors in combination with
	    			cyberpunk influences create an interesting and yet somehow balanced
	    			combination of styles, ever so slightly hinting the current world.
	    			A sense of nostalgia, previously unknown is felt whenever thinking of
	    			my home city and its diverse streets, abandoned factories, and decaying
	    			remnants of former industrial areas, which is reinforced by the memories
	    			of distant past. These fragments of imagination serving as a mirror into the
	    			past form an indistinct, shattered look into the future which seems to
	    			so closely correlate with the aforementioned cultural basis.
	    		</p>

	    	</section>
	    	<!-- register form-->
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
