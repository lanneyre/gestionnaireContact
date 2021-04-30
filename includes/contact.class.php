<?php
    class Contact
    {
        private $id;
        private $nom;
        private $prenom;
        private $mail;
        private $tel;
        private $adresse;
        private $cp;
        private $ville;

        public static function build($nom, $prenom, $mail=null, $tel=null, $adresse=null, $cp=null, $ville=null, $id=null){
            $obj = new static;
            $obj->id = $id;
            $obj->nom = $nom;
            $obj->prenom = $prenom;
            $obj->mail = $mail;
            $obj->tel = $tel;
            $obj->adresse = $adresse;
            $obj->cp = $cp;
            $obj->ville = $ville;
            return $obj;
        }

        public function __get($key){
            return $this->$key;
        }
        public function __set($key, $value){
            $this->$key = $value;
        }

        public static function afficherTous(){
            $conn = self::connexion();

            $sql = "SELECT * FROM `contact`";
            $req = $conn->query($sql);
            $req->setFetchMode(PDO::FETCH_CLASS, 'Contact');
            return $req->fetchAll();
        }

        public static function connexion(){
            try{
                return new PDO("mysql:host=localhost;dbname=gestioncontact", "root", "");
            } catch(PDOException $e){
                return $e->getMessage();
            } 
        }

        public function creer(){
            $conn = self::connexion();

            $sql = "INSERT INTO `contact` (nom, prenom, mail, tel, adresse, cp, ville) VALUES (:nom, :prenom, :mail, :tel, :adresse, :cp, :ville);";
            $req = $conn->prepare($sql);
            $req->bindValue(":nom", $this->nom);
            $req->bindValue(":prenom", $this->prenom);
            $req->bindValue(":mail", $this->mail);
            $req->bindValue(":tel", $this->tel);
            $req->bindValue(":adresse", $this->adresse);
            $req->bindValue(":cp", $this->cp);
            $req->bindValue(":ville", $this->ville);
            return $req->execute();

            // $sql = "INSERT INTO `contact` (nom, prenom, mail, tel, adresse, cp, ville) VALUES (?, ?, ?, ?, ?, ?, ?);";
            // $req = $conn->prepare($sql);
            // return $req->execute([$this->nom, $this->prenom, $this->mail, $this->tel, $this->adresse, $this->cp, $this->ville]);
        }
    }
    