<?php
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
    class DBconnect implements DBInterface
    {
        private $servername;
        private $userDb;
        private $pwdDb;
        private $dbName;
        function __construct($unameDb, $pwDb, $nameDb)
        {
            $this->servername=$_SERVER['SERVER_NAME'];
            $this->userDb=$unameDb;
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
    }

 ?>
