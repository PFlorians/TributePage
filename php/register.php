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
        $user=testData($_POST["usrName"]);
        $mail=testData($_POST["usrMail"]);
        $pw=testData($_POST["usrPasswd"]);
        $gender=testData($_POST["gender"]);
        $con=new DBconnect("root", "", "tribute_page");
        $res=$con->mysqlConnect($user, $mail, password_hash($pw, PASSWORD_DEFAULT), $gender);
        $ut=new Util();
        if($res==false)//tzn user uz existuje
        {
            echo '<script>alert("user already exists");</script>';
            echo '<script type="text/javascript">
                    window.location.href = "http\://'.$_SERVER['SERVER_NAME'].$ut->getRelativeAddressingChar().$ut->getPageRoot().'";
                    </script>';
        }
        else //simply redirect to main
        {
            echo '<script>alert("user registered successfully");</script>';
            echo '<script type="text/javascript">
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
