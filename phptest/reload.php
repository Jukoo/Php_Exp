<?php 
session_start();
require('connexion/Dbcon.php');
$ql = $bdd->query('SELECT * FROM tchat ORDER BY ID DESC LIMIT 5') or die(print_r($bdd->errorInfo()));
while ($msg = $ql->fetch()) {
    ?>
    <strong><?= $msg['pseudo'];?></strong><br>
    <mark> <?= $msg['message'];?></mark><small><?=$msg['post'];?></small><br>
     <?php
    }

 ?>

