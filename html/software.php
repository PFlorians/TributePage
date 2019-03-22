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
        <title>Software</title>
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
	    	<h3 class="arcade-font-prince centrovanie">Software of the old days</h3>
	    	<div class="row">
	    		<!-- SW carus -->
	    		<!-- carousel -->
		   		<div id="carusSW" class="carousel slide col-lg-12 col-md-12 col-sm-12 col-xs-12 fade-out" data-ride="carousel" data-pause="hover" data-keyboard="true" data-interval=10000>
					<!-- indikatory -->
					<ol class="carousel-indicators">
						<li data-target="#carusSW" data-slide-to="0" class="active"></li>
						<li data-target="#carusSW" data-slide-to="1" ></li>
						<li data-target="#carusSW" data-slide-to="2" ></li>
						<li data-target="#carusSW" data-slide-to="3" ></li>
					</ol>
					<!-- data items -->
					<div class="carousel-inner" role="listbox" id="imgsCar">
						<div class="item active" style="background-image: url(../img/nc.png);">
							<img src=<?php echo $util->getSelfRoot().$util::img.$util->getRelativeAddressingChar()."nc.png";?> alt="Norton Commander"/>
							<div class="carousel-caption">
								<h3 class="hilight">Norton Commander - </h3>
								<p class="hilight">Highly popular file manager</p>
							</div>
						</div>
						<div class="item" style="background-image: url(../img/win3.png);">
							<img src=<?php echo $util->getSelfRoot().$util::img.$util->getRelativeAddressingChar()."win3.png"?> alt="win 3.1"/>
							<div class="carousel-caption">
								<h3 class="hilight">Windows 3.1 - </h3>
								<p class="hilight">An OS built upon MS-DOS</p>
							</div>
						</div>
						<div class="item" style="background-image: url(../img/paradox.png);">
							<img src=<?php echo $util->getSelfRoot().$util::img.$util->getRelativeAddressingChar()."paradox.png"?> alt="paradox"/>
							<div class="carousel-caption">
								<h3 class="hilight">Paradox 4.0 - </h3>
								<p class="hilight">An old relational Database</p>
							</div>
						</div>
						<div class="item" style="background-image: url(../img/DeskMate.png);">
							<img src=<?php echo $util->getSelfRoot().$util::img.$util->getRelativeAddressingChar()."DeskMate.png"?> alt="desk mate"/>
							<div class="carousel-caption">
								<h3 class="hilight">Desk Mate- </h3>
								<p class="hilight">MS-DOS planner/organizer</p>
							</div>
						</div>
					</div>
					<!-- ovladace -->
					<a class="left carousel-control" href="#carusSW" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carusSW" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
		   		</div>
	    	</div>
	    	<hr/>
	    	<section>
	    		<h2 class="arcade-font centrovanie">Abandonware</h2>
	    		<p>
	    			Definitions of "abandoned" vary, but in general it is like any item that is abandoned – it is ignored by the owner, and as such product support and possibly copyright enforcement are also "abandoned". It can refer to a product that is no longer available for legal purchase, over the age where the product creator feels an obligation to continue to support it, or where operating systems or hardware platforms have evolved to such a degree that the creator feels continued support cannot be financially justified. In such cases, copyright and support issues are often ignored. Software might also be considered abandoned when it can be used only with obsolete technologies, such as pre-Macintosh Apple computers. A difference between abandonware and a discontinued product is that the manufacturer has not officially 'discontinued' the software, but only ended their official efforts at technical support.

Abandonware may be computer software or physical devices which are usually computerised in some fashion, such as personal computer games, productivity applications, utility software, or mobile phones.
	    		</p>
	    	</section>
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
