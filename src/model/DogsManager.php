<?php
    class DogsManager extends Manager
    {
        public function add(Chien $chien)
        {
            $db = $this->dbConnect();
           
            $query = $db->prepare
                (
                    "INSERT INTO chien(idAnimal,taille,poids,idRace)
                    VALUES (?,?,?,?)"
                );
            $query->bindValue(1,$chien->getId());
            $query->bindValue(2,$chien->getTaille());
            $query->bindValue(3,$chien->getPoids());
            $query->bindValue(4,$chien->getIdRace());
            $query->execute();
        }

        public function getChien($idAnimal) 
        {
            $db = $this->dbConnect();
            if (is_int($idAnimal)) 
            {
                $query = $db->prepare
                (
                    "SELECT idAnimal, taille, poids, idRace 
                    FROM chien
                    WHERE idAnimal = ?"
                );
                $query->bindValue(1,$idAnimal);
                $query->execute();
                $donnees = $query->fetch(PDO::FETCH_ASSOC);

                return new Chien($donnees); 
            }
        }

        public function getDogs() 
        {
            $db = $this->dbConnect();
            $dogs = [];
            $query = $db->query
                (
                    "SELECT a.id , a.nom, a.dateNaissance, a.dateDeces, a.photo, c.taille, c.poids, a.idPropietaire, c.idRace
                    FROM animal a 
                    INNER JOIN chien c 
                        ON a.id = c.idAnimal
                    ORDER BY a.nom"
                );

            
            while ($donnees = $query->fetch(PDO::FETCH_ASSOC))
            {
                $dogs[]= new Chien($donnees);
            }

            return $dogs; 
        }

        public function setChien(Chien $chien) 
        {
            $db = $this->dbConnect();
            $query = $db->prepare
                (
                    "UPDATE chien  
                    SET taille = ?, poids = ?, idRace = ?
                    WHERE idAnimal = ?"
                );
            $query->bindValue(1,$chien->getTaille());
            $query->bindValue(2,$chien->getPoids());
            $query->bindValue(3,$chien->getIdRace());
            $query->bindValue(4,$chien->getId());
            $query->execute();
        }
    }