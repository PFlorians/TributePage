<!DOCTYPE HTML>
<html class="container-fluid" lang="en" >
    <head>
    	<!-- meta content -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       	<!--dependencies resolved here -->
       		<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
			<!-- isotope -->
			<script src="../js/isotope.pkgd.js"></script>
			<!-- images loaded -->
			<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
			<!-- custom JS files -->
			<script src="../js/scripts.js"></script>
			<script src="../js/gallery.js"></script>
			<script src="../js/Spark.js"></script>
			<script src="../js/SparkGal.js"></script>
			<script src="../js/Validation.js"></script>
			<script src="../js/inner_mechanics.js"></script>
			<script src="../js/mechanics.js"></script>
			<script src="../js/utilitary.js"></script>
			<script src="../js/CarouselClass.js"></script>
	       	<script src="../js/modal.js"></script>
			<!-- vlastny skompilovany bootstrap -->
			<link rel="stylesheet" href="../css/bootstrap3.3.7_v2/css/bootstrap.min.css"/>
			<!-- vlastny JS zo skompilovaneho bootstrapu -->
			<script src="../css/bootstrap3.3.7_v2/js/bootstrap.min.js"></script>

			<!-- custom css -->
	       	<link rel="stylesheet" href="../css/frickles.css"/>
	       	<link rel="stylesheet" href="../css/heavy.css"/>
			<link rel="stylesheet" href="../css/modal.css"/>
			<link rel="stylesheet" href="../css/gallery.css"/>
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
        <title>Games</title>
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
	    	<h3 class="arcade-font-prince centrovanie">Retro Games</h3>
	    	<div class="row">
	    		<!-- SW carus -->
	    		<!-- carousel -->
		   		<div id="carusGames" class="carousel slide col-lg-12 col-md-12 col-sm-12 col-xs-12 fade-out" data-ride="carousel" data-pause="hover" data-keyboard="true" data-interval=10000>
					<!-- indikatory -->
					<ol class="carousel-indicators">
						<li data-target="#carusGames" data-slide-to="0" class="active"></li>
						<li data-target="#carusGames" data-slide-to="1" ></li>
						<li data-target="#carusGames" data-slide-to="2" ></li>
						<li data-target="#carusGames" data-slide-to="3" ></li>
					</ol>
					<!-- data items -->
					<div class="carousel-inner" role="listbox" id="imgsCar">
						<div class="item active" style="background-image: url(../img/ptimce0.PNG);">
							<img src=<?php echo $util->getSelfRoot().$util::img.$util->getRelativeAddressingChar()."ptimce0.PNG"?> alt="Prince of persia"/>
							<div class="carousel-caption">
								<h3 class="hilight">Prince of persia - </h3>
								<p class="hilight">Well known DOS game</p>
							</div>
						</div>
						<div class="item" style="background-image: url(../img/zork.PNG);">
							<img src=<?php echo $util->getSelfRoot().$util::img.$util->getRelativeAddressingChar()."zork.PNG"?> alt="zork"/>
							<div class="carousel-caption">
								<h3 class="hilight">Zork 1981 - </h3>
								<p class="hilight"> One of the first games</p>
							</div>
						</div>
						<div class="item" style="background-image: url(../img/chess.PNG);">
							<img src=<?php echo $util->getSelfRoot().$util::img.$util->getRelativeAddressingChar()."chess.PNG"?> alt="battle chess"/>
							<div class="carousel-caption">
								<h3 class="hilight">Battle Chess - </h3>
								<p class="hilight">Classic chess game</p>
							</div>
						</div>
						<div class="item" style="background-image: url(../img/startrek.PNG);">
							<img src=<?php echo $util->getSelfRoot().$util::img.$util->getRelativeAddressingChar()."startrek.PNG"?> alt="Star trek"/>
							<div class="carousel-caption">
								<h3 class="hilight">Star trek - </h3>
								<p class="hilight">Based on popular tv show</p>
							</div>
						</div>
					</div>
					<!-- ovladace -->
					<a class="left carousel-control" href="#carusGames" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carusGames" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
		   		</div>
	    	</div>
	    	<!-- reg. formular -->
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
			<hr/>
			<h2 class="arcade-font-prince centrovanie">Gallery</h2>
			<div class="row">
				<div id="gallery" class="mriezka">
	    			<div class="grid-responsive-sizer"></div>
	    			<div class="grid-item">
	    				<img class="img-normal" src="../img/games-gal/hotline1.PNG" alt="hotline1"/>
	    			</div>
	    			<div class="grid-item">
	    				<img class="img-normal" src="../img/games-gal/hotline2.PNG" alt="hotline2"/>
	    			</div>
	    			<div class="grid-item">
	    				<img class="img-normal" src="../img/games-gal/hotline3.jpg" alt="hotline3"/>
	    			</div>
	    			<div class="grid-item" >
	    				<img class="img-normal" src="../img/games-gal/kung-fury-logo.jpg" alt="kung-fury"/>
	    			</div>
	    			<div class="grid-item" >
	    				<img class="img-normal" src="../img/games-gal/magnatron1.jpg" alt="magnatron1">
	    			</div>
	    			<div class="grid-item">
	    				<img class="img-normal" src="../img/games-gal/magnatron2.jpg" alt="magnatron2"/>
	    			</div>
	    			<div class="grid-item">
	    				<img class="img-normal" src="../img/games-gal/retro-futur-05.jpg" alt="retrofutur"/>
	    			</div>
	    			<div class="grid-item">
	    				<img class="img-normal" src="../img/games-gal/miami-touh-03.jpg" alt="miami-touch"/>
	    			</div>
	    		</div>
	    	</div>
	    	<!-- modalna cast galerie -->
	    	<div id="modalGallery" class="modal">
	    		<span class="galClsBtn" id="clsModalGal" onclick="closeModalGal('modalGallery')">&times;</span>
	    		<!-- teraz ide kvazi kontajner na obrazky v rezime modal -->
	    		<div id="galleryContent" class="gallery-modal-container">
	    			<!-- vsetko defaultne neviditelne, dom upravi current IMG -->
	    			<div class="slajd">
	    				<img class="img-gal" src="../img/games-gal/hotline1.PNG" alt="hotline1"/>
	    			</div>
	    			<div class="slajd">
	    				<img class="img-gal" src="../img/games-gal/hotline2.PNG" alt="hotline2"/>
	    			</div>
	    			<div class="slajd">
	    				<img class="img-gal" src="../img/games-gal/hotline3.jpg" alt="hotline3"/>
	    			</div>
	    			<div class="slajd">
	    				<img class="img-gal" src="../img/games-gal/kung-fury-logo.jpg" alt="kung-fury"/>
	    			</div>
	    			<div class="slajd">
	    				<img class="img-gal" src="../img/games-gal/magnatron1.jpg" alt="magnatron1"/>
	    			</div>
	    			<div class="slajd">
	    				<img class="img-gal" src="../img/games-gal/magnatron2.jpg" alt="magnatron2"/>
	    			</div>
	    			<div class="slajd">
	    				<img class="img-gal" src="../img/games-gal/retro-futur-05.jpg" alt="retrofutur"/>
	    			</div>
	    			<div class="slajd">
	    				<img class="img-gal" src="../img/games-gal/miami-touh-03.jpg" alt="miami-touch"/>
	    			</div>
	    			<a class="prv" onclick="prv()">&#10094;</a>
    				<a class="nxt" onclick="nxt()">&#10095;</a>
	    		</div>
	    	</div>
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
