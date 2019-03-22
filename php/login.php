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
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $user=testData($_POST["uname"]);
        $pw=testData($_POST["pwd"]);
        $con=new DBconnect("root", "", "tribute_page");
        $res=$con->login($user, $pw);
        $ut=new Util();
        if(isset($_SESSION["username"]))
        {
            //strata sessny
            //https://stackoverflow.com/questions/11526643/session-lost-window-location-href
            echo '<script type="text/javascript">
                    console.log("user logged in - vars: '.$_SESSION["username"].'");
                    window.onbeforeunload=function(){
                      localStorage.setItem("session", JSON.stringify({username: "'.$_SESSION["username"].'", password: "'.$_SESSION["password"].'" }));
                    };
                    window.location.href = "http\://'.$_SERVER['SERVER_NAME'].$ut->getRelativeAddressingChar().$ut->getPageRoot().'";
                    </script>';
        }
        else //simply redirect to main
        {
            echo '<script type="text/javascript">
                    console.log("login failed res: '.$res.' con: '. $con.'");
                    window.location.href = "http\://'.$_SERVER['SERVER_NAME'].$ut->getRelativeAddressingChar().$ut->getPageRoot().'";
                    </script>';
        }
    }
    function testData($data)//security cascade
    {
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

 ?>
