<?php
    echo 'OS: ' . PHP_OS;
    echo '<br/>';
    echo 'DIR: '.__DIR__;
    echo "<br/>";
    echo 'File: '.__FILE__;
    echo '<br/>';
    echo 'dirname: '.dirname(__DIR__);
    echo "<br/>";
    echo 'self: '.$_SERVER['PHP_SELF'];
    echo "<br>";
    echo 'server name: '.$_SERVER['SERVER_NAME'];
    echo "<br>";
    echo 'host: '. $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo 'referrer '.$_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo 'user-agent: '.$_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo 'script name: '.$_SERVER['SCRIPT_NAME'];
    echo "<br/>";
    echo "document root: " .$_SERVER['DOCUMENT_ROOT'];
 ?>
