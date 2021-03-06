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
	        <script src="../js/main.js"></script>
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
        <title>Commodore Amiga</title>
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
	    		<h3 class="arcade-font-prince centrovanie">Amiga OS</h3>
	    		<div class="row">
	    			<!-- amiga carousel -->
	    			<!-- carousel -->
		    		<div id="carusAmiga" class="carousel slide col-lg-12 col-md-12 col-sm-12 col-xs-12" data-ride="carousel" data-pause="hover" data-keyboard="true" data-interval=10000>
						<!-- indikatory -->
						<ol class="carousel-indicators">
							<li data-target="#carusAmiga" data-slide-to="0" class="active"></li>
							<li data-target="#carusAmiga" data-slide-to="1" ></li>
							<li data-target="#carusAmiga" data-slide-to="2" ></li>
						</ol>
						<!-- data items -->
						<div class="carousel-inner" role="listbox" id="imgsCar">
							<div class="item active" style="background-image: url(../img/amiga0.png);">
								<img src=<?php echo $util->getSelfRoot().$util::img.$util->getRelativeAddressingChar()."amiga0.png"?> alt="amiga0"/>
							</div>
							<div class="item" style="background-image: url(../img/Icaros.png);">
								<img src=<?php echo $util->getSelfRoot().$util::img.$util->getRelativeAddressingChar()."Icaros.png"?> alt="icaros"/>
							</div>
							<div class="item" style="background-image: url(../img/amiga1.png);">
								<img src=<?php echo $util->getSelfRoot().$util::img.$util->getRelativeAddressingChar()."amiga1.png"?> alt="amiga-look"/>
							</div>
						</div>
						<!-- ovladace -->
						<a class="left carousel-control" href="#carusAmiga" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carusAmiga" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
		    		</div>
	    		</div>
	    		<section> <!--text -->
	    			<h4 class="beon-neon left-padding">History</h4>
	    			<p>
	    				AmigaOS 4.0's inception dates back to 2002 when an agreement was reached to port AmigaOS to the PowerPC platform.
Building on the sources of AmigaOS 3.x, Hyperion released the first alpha of AmigaOS 4.0 in 2004 to beta testers. The first full public release reached users in 2006.
Hyperion Entertainment are planning many more revisions and updates to AmigaOS. The authentic Amiga experience continues.
The history in the 80's and 90's was according to official amiga <a class="remove-deco" href="http://www.amigaos.net/content/10/history-amigaos" target="_blank"> website</a> as follows
						</p>
						<ul class="vlavo">
							<li class="localHeader">
								<p>October 1985 - </p>
								<p>Amiga Workbench 1.0 released for the first time</p>
							</li>
							<li class="localHeader">
								<p>December 1985 - </p>
								<p>Amiga Workbench 1.1 released</p>
							</li>
							<li class="localHeader">
								<p>1986, 1987 - </p>
								<p>Amiga Workbench 1.2 released</p>
							</li>
							<li class="localHeader">
								<p>1988 - </p>
								<p>Amiga Workbench 1.3 released</p>
							</li>
							<li class="localHeader">
								<p>1989 - </p>
								<p>Amiga Workbench 1.3.2 released</p>
							</li>
							<li class="localHeader">
								<p>1990 - </p>
								<p>Amiga Workbench 1.3.3, 1.3.4 and 2.0 released</p>
							</li>
							<li class="localHeader">
								<p>1991 - </p>
								<p>Amiga Workbench 2.04 released</p>
							</li>
							<li class="localHeader">
								<p>1992 - </p>
								<p>Amiga Workbench 2.05, 2.1 and 3.0 released</p>
							</li>
							<li class="localHeader">
								<p>1994 - </p>
								<p>Workbench 3.1 released. </p>
								<p>This is the last AmigaOS released by Commodore</p>
							</li>
							<li class="localHeader">
								<p>18 October 1999 - </p>
								<p>Workbench 3.5 released by Haage and Partner</p>
							</li>
							<li class="localHeader">
								<p>4 December 2000 - </p>
								<p>Workbench 3.9 released by Haage and Partner</p>
							</li>
						</ul>
	    			<p>
	    			Those were of course the old versions of the system, which sometimes were quite unstable as can be seen on the graphic image below
	    			(credits to <a class="remove-deco" href="https://www.youtube.com/channel/UCGeKUubfoxVRZA33RdZp-dw" target="_blank">Gilbert Gauthier</a>).
	    			The native Amiga windowing system is called Intuition, which handles input from the keyboard and mouse and rendering of screens, windows and widgets.
Prior to AmigaOS 2.0, there was no standardized look and feel, application developers had to write their own non-standard widgets. Commodore added the GadTools library and BOOPSI in AmigaOS 2.0, both of which provided standardized widgets. Commodore also published the Amiga User Interface Style Guide, which explained how applications should be laid out for consistency. Stefan Stuntz created a popular third-party widget library, based on BOOPSI, called Magic User Interface, or MUI. MorphOS uses MUI as its official toolkit, while AROS uses an MUI clone called Zune. AmigaOS 3.5 added another widget set, ReAction, also based on BOOPSI.
					Intuition is the native windowing system and user interface (UI) engine of AmigaOS. It was developed almost entirely by RJ Mical. Intuition should not be confused with Workbench, the AmigaOS spatial file manager, which relies on Intuition for handling windows and input events.
					<img class="col-lg-5 col-md-5 col-sm-8 col-xs-10 vlavo" src="../img/guru1.gif" alt="guruCrash"/>
Intuition is the internal widget and graphics system. It is not implemented primarily as an application-managed graphics library (as most systems, following Xerox's design, have done), but rather as a separate task that maintains the state of all the standard UI elements independently from the application. This makes it responsive because UI gadgets are live even when the application is busy. The Intuition task is driven by user events through the mouse, keyboard, and other input devices. It also arbitrates collisions of the mouse pointer and icons and control of "animated icons". Like most GUIs of the day, Amiga's Intuition followed Xerox's lead anteceding solutions, but pragmatically, a command line interface was also included and it extended the functionality of the platform. Later releases added more improvements, like support for high-color Workbench screens and 3D aspect. Replacement desktop file managers were also made available, such as Directory Opus Magellan and Scalos interface.
Initial releases used blue, orange, white and black palettes. This was intentional – in a time before cheap high-quality video monitors, Commodore tested output on the worst televisions they could find, with the goal of obtaining the best possible contrast under these worst-case conditions.
	    			</p>
	    		</section>
	    		<hr/>
	    		<section>
	    			<h4 class="beon-neon left-padding">Graphics</h4>
	    			<p>
	    				Until the release of version 3, AmigaOS only natively supported the native Amiga graphics chipset, via graphics.library, which provides an API for geometric primitives, raster graphic operations and handling of sprites. As this API could be bypassed, some developers chose to avoid OS functionality for rendering and directly program the underlying hardware for gains in efficiency.
Third-party graphics cards were initially supported via proprietary unofficial solutions. A later solution where AmigaOS could directly support any graphics system, was termed retargetable graphics (RTG). With AmigaOS 3.5, some RTG systems were bundled with the OS, allowing the use of common hardware cards other than the native Amiga chipsets. The main RTG systems are CyberGraphX, Picasso 96 and EGS. Some vector graphic libraries, like Cairo and Anti-Grain Geometry, are also available. Modern systems can use cross-platform SDL (simple DirectMedia Layer) engine for games and other multimedia programs.
The Amiga did not have any inbuilt 3D graphics capability, and so had no standard 3D graphics API. Later, graphics card manufacturers and third-party developers provided their own standards, which included MiniGL, Warp3D, StormMesa (agl.library) and CyberGL.
The Amiga was launched at a time when there was little support for 3D graphics libraries to enhance desktop GUIs and computer rendering capabilities. However, the Amiga became one of the first widespread 3D development platforms. VideoScape 3D was one of the earliest 3D rendering and animation systems, and Silver/TurboSilver was one of the first ray-tracing 3D programs. Then Amiga boasted many influential applications in 3D software, such as Imagine, maxon's Cinema 4D, Realsoft 3D, VistaPro, Aladdin 4D and NewTek's Lightwave (used to render movies and television shows like Babylon 5).
Likewise, while the Amiga is well known for its ability to easily genlock with video, it has no built-in video capture interface. The Amiga supported a vast number of third-party interfaces for video capture from American and European manufacturers. There were internal and external hardware solutions, called frame-grabbers, for capturing individual or sequences of video frames, including: Newtronic Videon, Newtek DigiView, Graffiti external 24-bit framebuffer, the Digilab, the Videocruncher, Firecracker 24, Vidi Amiga 12, Vidi Amiga 24-bit and 24RT (Real Time), Newtek Video Toaster, GVP Impact Vision IV24, MacroSystem VLab Motion and VLab PAR, DPS PAR (Personal Animation Recorder), VHI (Video Hardware Interface) by IOSPIRIT GmbH, DVE-10, etc. Some solutions were hardware plug-ins for Amiga graphics cards like the Merlin XCalibur module, or the DV module built for the Amiga clone Draco from the German firm Macrosystem. Modern PCI bus TV expansion cards and their capture interfaces are supported through tv.library by Elbox Computer and tvcard.library by Guido Mersmann.
Following modern trends in evolution of graphical interfaces, AmigaOS 4.1 uses the 3D hardware-accelerated Porter-Duff image composition engine.
	    			</p>
	    			<p>More technical information at: <a href="https://en.wikipedia.org/wiki/AmigaOS" target="_blank">wikipedia</a> and <a class="remove-deco" href="http://wiki.amigaos.net/wiki/GUI_Programming" target="_blank">amiga os dev wiki</a></p>
	    		</section>
	    		<hr/>
	    		<section>
	    			<h4 class="beon-neon left-padding">Kernel</h4>
	    			<p>
					Exec is the kernel of AmigaOS. It is a 13 KB multitasking microkernel which enabled pre-emptive multitasking in as little as 256 KB of memory (as supplied with the first Amiga 1000s). Exec provided functions for multitasking, memory management, and handling of interrupts and dynamic shared libraries
					Unlike newer modern operating systems, the exec kernel does not run "privileged". Contemporary operating systems for the 68000 such as Atari TOS and SunOS used trap instructions to invoke kernel functions. This made the kernel functions run in the 68000's supervisor mode, while user software ran in the unprivileged user mode. By contrast, exec function calls are made with the library jump table, and the kernel code normally executes in user mode. Whenever supervisor mode is needed, either by the kernel or user programs, the library functions Supervisor() or SuperState() are used.
One limit of the Exec kernel was that an uncooperative program could disable multitasking for a long time, or indefinitely, by invoking Exec's calls Forbid() or Disable(), with no later invocation of corresponding Permit() or Enable(), causing the environment to run as one task. Multitasking could also be disabled by programs which, by software bug or intent, modify Exec's data structures or the code stored in random-access memory (RAM), possibly due to lack of memory management unit (MMU) support.
Even with such limits, Exec satisfies the definition of preemptive scheduling algorithm, using a preemptive scheduling routine and basing its interrupt intervals on a clock.
Linux kernel developer Linus Torvalds once described the Amiga design as cooperative, even though it uses a preemptive scheduling policy. The reason for that, he argued, was because the lack of [memory] protection between tasks, meant a task could hinder the system from operating preemptively. As tasks would need to choose not to stop the preemptive mechanism this would reduce to a kind of inverted cooperative system. This kind of conflation between protection and scheduler policy is nonstandard.
					A running task is currently using the CPU. It will remain the current task until one of three things occur:
					<ol class="vlavo">
							<li>
								<p>A higher priority task becomes ready, </p>
								<p>so the OS preempts the current task and </p>
								<p>switches to the higher priority task.</p>
							</li>
							<li>
								<p>The currently running task needs to wait for an event,</p>
								<p>so it goes to sleep and Exec switches</p>
								<p>to the highest priority task in Exec's ready list.</p>
							</li>
							<li>
								<p>The currently running task has had control of the CPU </p>
								<p>for at least a preset time period called a quantum</p>
								<p>and there is another task of equal priority ready to run.</p>
								<p>In this case, Exec will preempt the current task</p>
								<p>for the ready one with the same priority.This is known as </p>
								<p>time-slicing. When there is a group of tasks of equal</p>
								<p>priority on the top of the ready list, Exec will cycle</p>
								<p>through them, letting each one use the CPU </p>
								<p>for a quantum (a slice of time).</p>
							</li>
					</ol>
					<p>
					The terms "task" and "process" are often used interchangeably to represent the generic concept of task. On the Amiga, this terminology can be a little confusing because of the names of the data structures that are associated with Exec tasks. Each task has a structure associated with it called a Task structure (defined in &lt; exec/tasks.h&gt;). Most application tasks use a superset of the Task structure called a Process structure (defined in &lt;dos/dosextens.h&gt;). These terms are confusing to Amiga programmers because there is an important distinction between the Exec task with only a Task structure and an Exec task with a Process structure.
The Process structure builds on the Task structure and contains some extra fields which allow the DOS library to associate an AmigaDOS environment to the task. Some elements of a DOS environment include a current input and output stream and a current working directory. These elements are important to applications that need to do standard input and output using functions like printf().
Exec only pays attention to the Task structure portion of the Process structure, so, as far as Exec is concerned, there is no difference between a task with a Task structure and a task with a Process structure. Exec considers both of them to be tasks.
An application doesn't normally worry about which structure their task uses. Instead, the system that launches the application takes care of it. Both Workbench and the Shell (CLI) attach a Process structure to the application tasks that they launch.
					To find out more visit: <a href="http://wiki.amigaos.net/wiki/Kernel" target="_blank">amiga doc</a>
	    			</p>
	    		</section>
	    		<!-- register form -->
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
