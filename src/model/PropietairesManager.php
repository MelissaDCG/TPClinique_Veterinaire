<?php
    class PropietairesManager extends Manager
    {
        public function add(Propietaire $propietaire)
        {
            $db = $this->dbConnect();
            $query = $db->prepare
                (
                    "INSERT INTO propietaire(nom,prenom,rue,codePostal,ville,telephone,telephoneMobile)
                    VALUES (?,?,?,?,?,?,?)"
                );
            $query->bindValue(1,$propietaire->getNom());
            $query->bindValue(2,$propietaire->getPrenom());
            $query->bindValue(3,$propietaire->getRue());
            $query->bindValue(4,$propietaire->getCodePostal());
            $query->bindValue(5,$propietaire->getVille());
            $query->bindValue(6,$propietaire->getTelephone());
            $query->bindValue(7,$propietaire->getTelephoneMobile());
            $query->execute();

            $propietaire->hydrate(['id'=> $db->lastInsertId()]);
        }

        public function getPropietaire($id) 
        {
            $db = $this->dbConnect();
            if (is_int($id)) 
            {
                $query = $db->prepare
                (
                    "SELECT id, nom, prenom,rue,codePostal,ville,telephone,telephoneMobile 
                    FROM propietaire
                    WHERE id = ?"
                );
                $query->bindValue(1,$id);
                $query->execute();
                $donnees = $query->fetch(PDO::FETCH_ASSOC);

                return new Propietaire($donnees); 
            }
        }

        public function getPropietaires() 
        {
            $db = $this->dbConnect();
            $propietaires = [];
            $query = $db->query
                (
                    "SELECT id, nom, prenom,rue,codePostal,ville,telephone,telephoneMobile 
                    FROM propietaire"
                );

            
            while ($donnees = $query->fetch(PDO::FETCH_ASSOC))
            {
                $propietaires[]= new Propietaire($donnees);
            }

            return $propietaires; 
        }

        public function setPropietaire(Propietaire $propietaire) 
        {
            $db = $this->dbConnect();
            $query = $db->prepare
                (
                    "UPDATE propietaire 
                    SET nom = ?, prenom = ?, rue = ?, codePostal = ?,
                        ville = ?, telephone  = ?; telephoneMobie = ?
                    WHERE id = ?"
                );
            $query->bindValue(1,$propietaire->getNom());
            $query->bindValue(2,$propietaire->getPrenom());
            $query->bindValue(3,$propietaire->getRue());
            $query->bindValue(4,$propietaire->getCodePostal());
            $query->bindValue(5,$propietaire->getVille());
            $query->bindValue(5,$propietaire->getTelephone());
            $query->bindValue(5,$propietaire->getTelephoneMobile());
            $query->bindValue(5,$propietaire->getId());
            $query->execute();
        }
    }