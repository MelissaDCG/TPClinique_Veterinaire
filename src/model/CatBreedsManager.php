<?php
    class CatBreedsManager extends Manager
    {
        public function add(RaceChat $raceChat)
        {
            $db = $this->dbConnect();
            $query = $db->prepare
                (
                    "INSERT INTO race_chat(nom)
                    VALUES (?)"
                );
            $query->bindValue(1,$raceChat->getNom());;
            $affectedLines = $query->execute();

            $raceChat->hydrate(['id'=> $db->lastInsertId()]);
        }

        public function getRaceChat($id) 
        {
            if (is_int($id)) 
            {
                $db = $this->dbConnect();
                $query = $db->prepare
                (
                    "SELECT id, nom 
                    FROM race_chat
                    WHERE id = ?"
                );
                $query->bindValue(1,$id);
                $query->execute();
                $donnees = $query->fetch(PDO::FETCH_ASSOC);

                return new RaceChat($donnees); 
            }
        }

        public function getRacesChats() 
        {
            $db = $this->dbConnect();
            $racesChats = [];
            $query = $db->query
                (
                    "SELECT id, nom 
                    FROM race_chat
                    ORDER BY nom"
                );

            
            while ($donnees = $query->fetch(PDO::FETCH_ASSOC))
            {
                $racesChats[]= new Propietaire($donnees);
            }

            return $racesChats; 
        }

        public function setRaceChat(RaceChat $raceChat) 
        {
            $db = $this->dbConnect();
            $query = $db->prepare
                (
                    "UPDATE race_chat  
                    SET nom = ?
                    WHERE id = ?"
                );
            $query->bindValue(1,$raceChat->getNom());
            $query->bindValue(2,$raceChat->getId());
            $query->execute();
        }
    }