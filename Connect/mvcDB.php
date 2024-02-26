<?php
// DONE : prepare the database connection
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=mvc;charset=utf8', 'root','');
        } catch (Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
?>