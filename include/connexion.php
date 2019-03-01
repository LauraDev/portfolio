<?php
// fichier include/connexion.php

//Connection
$dbh = new PDO( 'mysql:host=db342184-sitecv.sql-pro.online.net;dbname=db342184_sitecv;charset=utf8',
                'db103333',
                'Loles3434$');
// debug
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

?>
