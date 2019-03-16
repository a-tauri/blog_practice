<?php
    function getDb(){
        $dsn='mysql:dbname=samples;host=localhost;charset=utf8';
        $user = 'root';
        $pass = '';
        
        $db = new PDO($dsn,$user,$pass);
        return $db;
    }

    /*@param $san $_POST[]*/
    /*サニタイズ処理の外部化*/
    function f($san){
        return htmlspecialchars($san,ENT_QUOTES,'utf-8');
    }