
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
                echo "dirname: ".$util->getSelfDir();
                echo "<br>";
                echo "selfRoot: " .$util->getSelfRoot();
                echo "<br>";
                echo "script name: ".$util->getSelfScriptName();
            } catch (Exception $e) {
                echo 'Initial HTML error: ' .$e;
            }

             ?>
       	<!-- rest of head section -->
        <title>Retro Soft</title>
    </head>
    <body id="telo">

    </body>
</html>
