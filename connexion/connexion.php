<?php

    class Database {
            private static $connexion = null;
            public static function connect() { 
                try {
                    $connexion = new PDO("mysql:host=localhost;dbname=portfolio_patricia", "root", "root");
                }
                catch(PDOException $error) {
                    die('Erreur de connexion à la Base de Donnée du Portfolio Patricia' .$error->getMessage());  
                }
                return $connexion;
            }
        }
