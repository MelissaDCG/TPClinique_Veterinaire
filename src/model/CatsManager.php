<?php
    class CatsManager extends Manager
    {
        public function add(Chat $chat)
        {
            $db = $this->dbConnect();
            $query = $db->prepare
                (
                    "INSERT INTO chat(idAnimal,idRace)
                    VALUES (?,?)"
                );
            $query->bindValue(1,$chat->getId());
            $query->bindValue(2,$chat->getIdRace());
            $query->execute();
        }

        public function getChat($idAnimal) 
        {
            if (is_int($idAnimal)) 
            {
                $db = $this->dbConnect();
                $query = $db->prepare
                (
                    "SELECT idAnimal, idRace 
                    FROM chat
                    WHERE idAnimal = ?"
                );
                $query->bindValue(1,$idAnimal);
                $query->execute();
                $donnees = $query->fetch(PDO::FETCH_ASSOC);

                return new Chat($donnees);
            }
        }

        public function getCats() 
        {
            $db = $this->dbConnect();
            $cats = [];
            $query = $db->query
                (
                    "SELECT a.id , a.nom, a.dateNaissance, a.dateDeces, a.photo, a.idPropietaire, c.idRace
                    FROM animal a 
                    INNER JOIN chat c 
                        ON a.id = c.idAnimal
                    ORDER BY a.nom"
                );

            
            while ($donnees = $query->fetch(PDO::FETCH_ASSOC))
            {
                $cats[]= new Chat($donnees);
            }

            return $cats; 
        }

        public function setChat(Chat $chat) 
        {
            $db = $this->dbConnect();
            $query = $db->prepare
                (
                    "UPDATE chat  
                    SET idRace = ?
                    WHERE idAnimal = ?"
                );
            $query->bindValue(1,$chat->getIdRace());
            $query->bindValue(2,$chat->getId());
            $query->execute();
        }
    }