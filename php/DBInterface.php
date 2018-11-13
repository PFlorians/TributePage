<?php

/**
 *
 */
interface DBInterface
{
    function mysqlConnect($usr, $mail, $pw, $gender);
    function checkExists($usr, $mail);
    function login($usr, $pw);
}
 ?>
