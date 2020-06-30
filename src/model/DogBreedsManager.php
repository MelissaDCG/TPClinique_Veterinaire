<?php
    class DogBreedsManager extends Manager
    {
        public function add(RaceChien $raceChien)
        {
            $db = $this->dbConnect();
            $query = $db->prepare
                (
                    "INSERT INTO race_chien(nom)
                    VALUES (?)"
                );
            $query->bindValue(1,$raceChien->getNom());;
            $affectedLines = $query->execute();

            $raceChien->hydrate(['id'=> $db->lastInsertId()]);

            return($affectedLines);
        }

        public function getRaceChien($id) 
        {
            $db = $this->dbConnect();
            if (is_int($id)) 
            {
                $query = $db->prepare
                (
                    "SELECT id, nom 
                    FROM race_chien
                    WHERE id = ?"
                );
                $query->bindValue(1,$id);
                $query->execute();
                $donnees = $query->fetch(PDO::FETCH_ASSOC);

                return new RaceChien($donnees); 
            }
        }

        public function getRacesChiens() 
        {
            $db = $this->dbConnect();
            $racesChiens = [];
            $query = $db->query
                (
                    "SELECT id, nom 
                    FROM race_chien
                    ORDER BY nom"
                );

            
            while ($donnees = $query->fetch(PDO::FETCH_ASSOC))
            {
                $racesChiens[]= new RaceChien($donnees);
            }

            return $racesChiens; 
        }

        public function setRaceChien(RaceChien $raceChien) 
        {
            $db = $this->dbConnect();
            $query = $db->prepare
                (
                    "UPDATE race_chien  
                    SET nom = ?
                    WHERE id = ?"
                );
            $query->bindValue(1,$raceChien->getNom());
            $query->bindValue(2,$raceChien->getId());
            $query->execute();
        }
    }