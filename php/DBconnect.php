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
            $this->pwdDb=$pwDb;
            $this->dbName=$nameDb;
        }
        public function mysqlConnect($usr, $mail, $pw, $gender)//vklada usera pri registracii
        {
            $con=new mysqli($this->servername, $this->userDb, $this->pwdDb, $this->dbName);
            if($con->connect_error)
            {
                echo 'connection to db failed';
            }
            else
            {
                if($this->checkExists($usr, $mail)==0)
                {
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
                    $con->close();
                    return true;
                }
                else
                {
                    $con->close();
                    return false;
                }
            }
        }
        public function checkExists($usr, $mail)//kontroluje ci dany user uz existuje
        {
            $con=new mysqli($this->servername, $this->userDb, $this->pwdDb, $this->dbName);
            if($con->connect_error)
            {
                die("Pripojenie v CheckExists zlyhalo: " .$con->connect_error);
            }
            $sql='select username, email from usr where username like "'.$usr.'" and email like "'.$mail.'";';
            $res=$con->query($sql);
            if($res->num_rows > 0)
            {
                return 1;//existuje
            }
            else
            {
                return 0;//neexistuje
            }
        }
        public function login($usr, $pw)
        {
            $con=new mysqli($this->servername, $this->userDb, $this->pwdDb, $this->dbName);
            if($con->connect_error)
            {
                die("pripojenie login zlyhalo: " . $con->connect_error);
            }
            //zakazdym generuje iny hash, takze to treba checkovat inak
            $sql='select username, passwd from usr where username = "'.$usr.'" ;';
            $res=$con->query($sql);
            if($res->num_rows == 1)//pretoze uname musi byt iba jedno
            {
                $row=$res->fetch_assoc();
                if(password_verify($pw, $row["passwd"]))//cmp hash against pwd
                {
                    session_start();//on success start session
                    $_SESSION['username']=$row["username"];
                    $_SESSION['password']=$row["passwd"];
                //    echo '<script>console.log("user logged in login funcition - vars: '.$_SESSION["username"].'");</script>';
                    return true;
                }
                else
                {
                //    echo '<script>console.log("chyba overovania password_verify vratil false");';
                    return false;
                }
            }
            else
            {
                echo '<script>alert("nieco je dosrate: '.$res->num_rows.'");</script>';
                return false;
            }
        }
        private function verifyPw($pw)
        {

        }
    }

 ?>
