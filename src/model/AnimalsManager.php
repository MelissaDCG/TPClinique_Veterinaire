<?php
    class AnimalsManager extends Manager
    {
        public function add(Animal $animal)
        {
            $db = $this->dbConnect();
            $query = $db->prepare
                (
                    "INSERT INTO animal(nom, dateNaissance, dateDeces, idPropietaire, photo)
                    VALUES (?,?,?,?,?)"
                );
            $query->bindValue(1,$animal->getNom());
            $query->bindValue(2,$animal->getDateNaissance());
            $query->bindValue(3,$animal->getDateDeces());
            $query->bindValue(4,$animal->getIdPropietaire());
            $query->bindValue(5,$animal->getPhoto());
            $query->execute();

            $animal->hydrate(['id'=> $db->lastInsertId()]);
        }

        public function getAnimal($id) 
        {
            if (is_int($id)) 
            {
                $query = $this->_db->prepare
                (
                    "SELECT id, nom, dateNaissance, dateDeces, idPropietaire, photo 
                    FROM animal
                    WHERE id = ?"
                );
                $query->bindValue(1,$id);
                $query->execute();
                $donnees = $query->fetch(PDO::FETCH_ASSOC);

                return new Animal($donnees); 
            }
        }

        public function getAnimals() 
        {
            $db = $this->dbConnect();
            $animals = [];
            $query = $db->query
                (
                    "SELECT id, nom, dateNaissace, dateDeces, idPropietaire, photo 
                    FROM animal"
                );

            
            while ($donnees = $query->fetch(PDO::FETCH_ASSOC))
            {
                $animals[]= new Animal($donnees);
            }

            return $animals; 
        }

        public function setAnimal(Animal $animal) 
        {
            $query = $this->_db->prepare
                (
                    "UPDATE animal  
                    SET nom = ?, dateNaissance = ?, dateDeces = ?, idPropietaire = ?, photo = ?
                    WHERE id = ?"
                );
            $query->bindValue(1,$animal->getNom());
            $query->bindValue(2,$animal->getDateNaissance());
            $query->bindValue(3,$animal->getDateDeces());
            $query->bindValue(4,$animal->getIdPropietaire());
            $query->bindValue(5,$animal->getPhoto());            
            $query->bindValue(6,$animal->getId());
            $query->execute();
        }
    }