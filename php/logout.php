<?php
    spl_autoload_register(
        function($clName)
        {
            //echo '####regfor autload: ' .$clName .PHP_EOL;
            if(file_exists($clName . ".php"))
            {
            //    echo 'Existuje: ' .PHP_EOL;
                   require_once($clName .".php");
            }
            else
            {
                throw new Exception("Error trying to load file(register form): " . $clName . ".php", 1000);
            }
        }
    );
    header("Content-type: application/json; charset=UTF-8");
    if(isset($_POST["data"]))
    {
        $recvData=json_decode($_POST["data"], false);
        session_unset();//unset and destroy current session
        session_destroy();
    }

 ?>
