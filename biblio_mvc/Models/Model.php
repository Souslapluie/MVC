<?php

    class Model 
    {   // Début de la Classe

        private $bd ;
        
        private static $instance = null ;

        /*
         * Constructeur créant l'objet PDO et l'affectant à $bd
         */
        private function __construct() {  // Fonction qui sert à faire le lien avec la BDD

            $dsn = "mysql:host=localhost;dbname=gestion_librairie"  ;   // Coordonnées de la BDD
            $login = "root" ;   // Identifiant d'accès à la BDD
            $mdp = "" ; // Mot de passe d'accès à la BDD
            $this->bd = new PDO($dsn, $login, $mdp) ;
            $this->bd->query("SET NAMES 'utf8'") ;
            $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;

        }




        public function get_all_livres() {

            $r = $this->bd->prepare("SELECT * FROM livre" ) ;
            $r->execute() ;

            return $r->fetchAll(PDO::FETCH_OBJ) ;

        }



        public function get_all_fournisseur() {

            $r = $this->bd->prepare("SELECT * FROM fournisseur" ) ;
            $r->execute() ;

            return $r->fetchAll(PDO::FETCH_OBJ) ;

        }


        
        

         public function get_all_commander() {

            $r = $this->bd->prepare("SELECT * FROM livre,fournisseur,commander where livre.ISBN=commander.ISBN and commander.Code_fournisseur=fournisseur.Code_fournisseur order by Date_achat" ) ;
            $r->execute() ;

            return $r->fetchAll(PDO::FETCH_OBJ) ;

        }





        // get_model()

        public static function get_model() {    // Fonction qui sert à créer une instance de Model pour l'appeler dans chaque Controller (équivalent de $connex)
            if (is_null(self::$instance))
            {
                self::$instance = new Model() ;
            }
            return self::$instance ;
        }


    }   // Fin de la Classe