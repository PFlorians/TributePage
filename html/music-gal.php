<!DOCTYPE HTML>
<html class="container-fluid" lang="en">
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
        <title>Music</title>
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
		   		<div id="carusMusic" class="carousel slide col-lg-12 col-md-12 col-sm-12 col-xs-12 fade-out" data-ride="carousel" data-pause="hover" data-keyboard="true" data-interval=10000>
					<!-- indikatory -->
					<ol class="carousel-indicators">
						<li data-target="#carusMusic" data-slide-to="0" class="active"></li>
						<li data-target="#carusMusic" data-slide-to="1" ></li>
						<li data-target="#carusMusic" data-slide-to="2" ></li>
						<li data-target="#carusMusic" data-slide-to="3" ></li>
					</ol>
					<!-- data items -->
					<div class="carousel-inner" role="listbox" id="imgsCar">
						<div class="item active" style="background-image: url(../img/scandroid.jpg);">
							<img src=<?php echo $util->getSelfRoot().$util::img.$util->getRelativeAddressingChar()."scandroid.jpg"?> alt="Scandroid"/>
						</div>
						<div class="item" style="background-image: url(../img/trevor.jpg);">
							<img src=<?php echo $util->getSelfRoot().$util::img.$util->getRelativeAddressingChar()."trevor.jpg"?> alt="Trevor something"/>
						</div>
						<div class="item" style="background-image: url(../img/dynatron.jpg);">
							<img src=<?php echo $util->getSelfRoot().$util::img.$util->getRelativeAddressingChar()."dynatron.jpg"?> alt="dynatron"/>
						</div>
						<div class="item" style="background-image: url(../img/fm84.jpg);">
							<img src=<?php echo $util->getSelfRoot().$util::img.$util->getRelativeAddressingChar()."fm84.jpg"?> alt="FM - 84"/>
						</div>
					</div>
					<!-- ovladace -->
					<a class="left carousel-control" href="#carusMusic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carusMusic" role="button" data-slide="next">
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
			<section>
				<h2 class="arcade-font centrovanie">About synthwave</h2>
				<p>
					Synthwave (also called outrun, retrowave and futuresynth) is a genre of electronic music influenced by 1980s film soundtracks and video games. Beginning in the mid 2000s, the genre developed from various niche communities on the Internet, reaching wider popularity in the early 2010s. In its music and cover artwork, synthwave engages in retrofuturism, emulating 1980s science fiction, action, and horror media, sometimes compared to cyberpunk. It expresses nostalgia for 1980s culture, attempting to capture the era's atmosphere and celebrate it
					<img class="col-lg-5 col-md-5 col-sm-8 col-xs-10" src="../img/nrw-logo.png" alt="nrw"/>
					Musically, synthwave is heavily inspired by many 1980s films, video games, and cartoons, as well as composers such as John Carpenter, Vangelis, and Tangerine Dream. The subgenre name "outrun" comes from the 1986 driving arcade game Out Run, which was known for its soundtrack that could be selected in-game. According to musician Perturbator (James Kent), the style is mainly instrumental, and often contains 1980s cliché elements in the sound such as electronic drums, gated reverb, analog synthesizer bass lines and leads, all to resemble tracks from that time period.
					One of the best known youtubers happens to be "new retro wave"
This aesthetic has been incorporated into retro themed movies and video games featuring synthwave artists. According to Bryan Young of Glitchslap, one of the most notable examples of this is Power Glove's soundtrack to the 2013 video game Far Cry 3: Blood Dragon.
Synthwave originates from the mid 2000s. French acts including David Grellier (College), Kavinsky, and Justice are recognized as the pioneers contributing to the early synthwave sound. These early artists began creating music inspired by famous 1980s score composers; music which was, at the time, largely associated with French house.
				</p>
				<p>
					<a href="http://www.retro-synthwave.com/" target="_blank">Retro Synthwave</a> is a website dedicated to the musical style called Synthwave (Retrowave or Outrun) and his particular visual world. You’ll find many explanations of these two big parts, but also about movies, series and video games inspired by the 80s. We present the pioneers of this area, between musicians and designers, but also if you are a young artist, we will propose the fact to present your works (music or design) on our website. This is intended to showcase the work of young prodigies for record companies but also for musicians who want to find someone who can be able to do some covers related to their music with a very specific style.
					<iframe class="col-lg-5 col-md-5 col-sm-8 col-xs-10" width="560" height="315" src="https://www.youtube.com/embed/YL_uyvISxpQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					 Also, there are a lot of tracks completely essential that you can listen directly, latest releases that you musn’t miss, some fresh mixtapes, some news by categories, awesome artworks but also some exclusive interviews.
					 Retro Synthwave regularly puts together themed mixtapes. After TIME MACHINE & CYBORG AFTER ALL, we are glad to present NEXUS SAVE THE QUEEN. Our new playlist features handpicked tracks and pays hommage to two iconic 80s movies – Blade Runner (1983) and Aliens (1986). The artists featuring GUNSHIP, The Midnight, HOME, Trevor Something, Jordan F, Le Matos, Electric Youth, Chvrches, Tangerine Dream, Vangelis and many others.
					After an album released in 2015 and a modeling clay video seen over 2 million times for the track « Tech Noir » (Terminator nightclub) with the voice of the legendary master of horror John Carpenter, finally here is the long-awaited return of the Synthpop pioneers GUNSHIP with Stella Le Page (vocals) and Genuine Human (video). Before the new LP, we have a hypnotic song, an 8-bit video with a lot of references and a contest to win a personalized arcade machine, what else?


NRW rec, the record label of the famous NewRetroWave, has recently released a second compilation named Magnatron 2.0. A huge musical phenomenon but also a visual event that we’ve decided to faithfully describe.

First of all, Magnatron 2.0 is the direct sequel of Magnatron, released on July 14th, 2015. It was the first release of NRW Records (NRW001) with a lot of talented artists such as ORAX , Dance with the Dead, Tokyo Rose, Daniel Deluxe… who have become today some pioneers of the Synthwave universe. But the project isn’t only musical, it’s also visual with a fantastic artistic direction. Which is something very rare these days, as many musicians totally abandon the graphic identity of their work. For the first compilation, the cover was managed by Sam Todhunter and Overglow (creator of the NewRetroWave logo) and an animated teaser was created by Hugo Moreno (see below).

				</p>
			</section>
			<hr/>
			<section>
				<h2 class="arcade-font centrovanie">Cyberpunk</h2>
				<p>
					<img class="col-lg-5 col-md-5 col-sm-8 col-xs-10" src="../img/virtuaglove.gif" alt="virtuaglove">
					Cyberpunk is a subgenre of science fiction in a futuristic setting that tends to focus on a "combination of lowlife and high tech" featuring advanced technological and scientific achievements, such as artificial intelligence and cybernetics, juxtaposed with a degree of breakdown or radical change in the social order.
Much of cyberpunk is rooted in the New Wave science fiction movement of the 1960s and 70s, when writers like Philip K. Dick, Roger Zelazny, J. G. Ballard, Philip Jose Farmer, and Harlan Ellison examined the impact of drug culture, technology, and the sexual revolution while avoiding the utopian tendencies of earlier science fiction. Released in 1984, William Gibson’s influential debut novel Neuromancer would help solidify cyberpunk as a genre, drawing influence from punk subculture and early hacker culture. Other influential cyberpunk writers included Bruce Sterling and Rudy Rucker.
Early films in the genre include Ridley Scott’s 1982 film Blade Runner, one of several of Philip K. Dick's works that have been adapted into films. The films Johnny Mnemonic and New Rose Hotel, both based upon short stories by William Gibson, flopped commercially and critically. More recent additions to this genre of filmmaking include the 2013 film Snowpiercer, the 2017 release of Blade Runner 2049, the sequel to the original 1982 film, and the 2018 Netflix TV series Altered Carbon.
Cyberpunk plots often center on conflict among artificial intelligences, hackers, and megacorporations, and tend to be set in a near-future Earth, rather than in the far-future settings or galactic vistas found in novels such as Isaac Asimov's Foundation or Frank Herbert's Dune. The settings are usually post-industrial dystopias but tend to feature extraordinary cultural ferment and the use of technology in ways never anticipated by its original inventors ("the street finds its own uses for things"). Much of the genre's atmosphere echoes film noir, and written works in the genre often use techniques from detective fiction.
				</p>
			</section>
			<hr/>
			<h2 class="arcade-font-prince centrovanie">Gallery of artists</h2>
			<div class="row">
				<div id="gallery" class="mriezka">
	    			<div class="grid-responsive-sizer"></div>
	    			<div class="grid-item">
	    				<img class="img-normal" src="../img/music-gal/evening-calm.png" alt="evening calm"/>
	    			</div>
	    			<div class="grid-item">
	    				<img class="img-normal" src="../img/music-gal/life.png" alt="life"/>
	    			</div>
	    			<div class="grid-item" >
	    				<img class="img-normal" src="../img/music-gal/pnk.gif" alt="cyberpunk"/>
	    			</div>
	    			<div class="grid-item">
	    				<img class="img-normal" src="../img/music-gal/neo-tokyo.jpg" alt="neo-tokyo"/>
	    			</div>
	    			<div class="grid-item" >
	    				<img class="img-normal" src="../img/music-gal/pillstreet.gif" alt="pillstreet"/>
	    			</div>
	    			<div class="grid-item" >
	    				<img class="img-normal" src="../img/music-gal/pixels.png" alt="pixels"/>
	    			</div>
	    			<div class="grid-item" >
	    				<img class="img-normal" src="../img/music-gal/service.jpg" alt="service"/>
	    			</div>
	    			<div class="grid-item" >
	    				<img class="img-normal" src="../img/music-gal/polygons.png" alt="polygons">
	    			</div>
	    			<div class="grid-item" >
	    				<img class="img-normal" src="../img/music-gal/termin8tr.gif" alt="terminator"/>
	    			</div>
	    			<div class="grid-item">
	    				<img class="img-normal" src="../img/music-gal/raven.png" alt="raven club"/>
	    			</div>
	    			<div class="grid-item">
	    				<img class="img-normal" src="../img/music-gal/store.gif" alt="store"/>
	    			</div>
	    			<div class="grid-item">
	    				<img class="img-normal" src="../img/music-gal/wild-west.png" alt="wild-west"/>
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
	    				<img class="img-gal" src="../img/music-gal/evening-calm.png" alt="evening calm"/>
	    			</div>
	    			<div class="slajd">
	    				<img class="img-gal" src="../img/music-gal/life.png" alt="life"/>
	    			</div>
	    			<div class="slajd" >
	    				<img class="img-gal" src="../img/music-gal/pnk.gif" alt="cyberpunk"/>
	    			</div>
	    			<div class="slajd">
	    				<img class="img-gal" src="../img/music-gal/neo-tokyo.jpg" alt="neo-tokyo"/>
	    			</div>
	    			<div class="slajd" >
	    				<img class="img-gal" src="../img/music-gal/pillstreet.gif" alt="pillstreet"/>
	    			</div>
	    			<div class="slajd" >
	    				<img class="img-gal" src="../img/music-gal/pixels.png" alt="pixels"/>
	    			</div>
	    			<div class="slajd" >
	    				<img class="img-gal" src="../img/music-gal/service.jpg" alt="service"/>
	    			</div>
	    			<div class="slajd" >
	    				<img class="img-gal" src="../img/music-gal/polygons.png" alt="polygons">
	    			</div>
	    			<div class="slajd" >
	    				<img class="img-gal" src="../img/music-gal/termin8tr.gif" alt="terminator"/>
	    			</div>
	    			<div class="slajd">
	    				<img class="img-gal" src="../img/music-gal/raven.png" alt="raven club"/>
	    			</div>
	    			<div class="slajd">
	    				<img class="img-gal" src="../img/music-gal/store.gif" alt="store"/>
	    			</div>
	    			<div class="slajd">
	    				<img class="img-gal" src="../img/music-gal/wild-west.png" alt="wild-west"/>
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
