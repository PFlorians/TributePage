<?php

/**
 *
 */
interface DBInterface;
{
    function mysqlConnect($usr, $mail, $pw, $gender);
    function checkExists($usr, $mail);
    function fetchData($usr, $pw);
    function verifyPw($pw);
}
 ?>
