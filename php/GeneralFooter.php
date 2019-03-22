<?php
    /**
     *
     */
     spl_autoload_register(
         function($clName)
         {
             if(file_exists($clName . ".php"))
             {
                    require_once($clName .".php");
             }
             else
             {
                 throw new Exception("Error trying to load file: " . $clName . ".php", 1000);
             }
         }
     );
    class GeneralFooter implements FooterInterface
    {
        private $util;
        function __construct(Util $ut)
        {
            try
            {
                $this->util=$ut;
            } catch (Exception $e)
            {
                echo 'Error GeneralFooter is unable to load Util class ' . $e;
            }
            $this->generalFooter();
        }
        public function generalFooter()//generates general website footer
        {
            echo '
            <footer class="footer" id="footer">
                <hr/>
                <p class="centrovanie lemovanie">Created by
                    <a href="mailto:patrikflorians@gmail.com" class="remove-deco"> Patrik Florians </a>2018
                    </p>
                <p class="centrovanie lemovanie">Powered by <a class="remove-deco" href="getbootstrap.org">bootstrap</a></p>
            </footer>

            ';
        }
    }


?>
