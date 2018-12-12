<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=CHAT;charset=utf8', 'jeremydata', 'b302937ba5');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}