<?php
    spl_autoload_register(
        function($clName)
        {
            echo '####regfor autload: ' .$clName .PHP_EOL;
            if(file_exists($clName . ".php"))
            {
                echo 'Existuje: ' .PHP_EOL;
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
        echo "entered data: " . $user." mail: " . $mail ." pw: ".password_hash($pw, PASSWORD_DEFAULT)." gender: ".$gender;
        mysqlConnect($user, $mail, password_hash($pw, PASSWORD_DEFAULT), $gender);
    }
    function testData($data)//security cascade
    {
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    function mysqlConnect($usr, $mail, $pw, $gender)
    {
        $servername = $_SERVER['SERVER_NAME'];
        $user="root";
        $pwd="";
        $dbName="tribute_page";
        $con=new mysqli($servername, $user, $pwd, $dbName);
        if($con->connect_error)
        {
            echo 'connection to db failed';
        }
        else {
            $sql='insert into usr (username, passwd, email, gender) values
            ("'.$usr.'","'.$pw.'","'.$mail.'","'.$gender.'");';
            if($con->query($sql)==TRUE)
            {
                echo 'Record inserted';
            }
            else
            {
                echo '<br/>';
                echo 'Error: '.$sql . "<br/>".$con->error;
            }
        }
        $con->close();
    }
    function checkExists($usr, $mail)
    {
        $servername = $_SERVER['SERVER_NAME'];
        $user="root";
        $pwd="";
        $dbName="tribute_page";
        $con=new mysqli($servername, $user, $pwd, $dbName);
    }
 ?>
