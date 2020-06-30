<?php
    abstract class Animal {
        protected $id;
        protected $nom;
        protected $dateNaissance;
        protected $dateDeces;
        protected $idPropietaire;
        protected $photo;

        // Méthode constructeur 
        public function __construct(array $donnees) 
        {
            $this->hydrate($donnees);
        }       
        
        public function hydrate($donnees) 
        {
            foreach ($donnees as $key => $value)
            {
                $method = 'set'. ucfirst($key);

                if (method_exists($this,$method))
                {
                    $this->$method($value);
                }
            }
        }

        //Les getters
        public function getId()
        {
            return $this->id;
        }

        public function getNom()
        {
            return $this->nom;
        }

        public function getDateNaissance()
        {
            return $this->dateNaissance;
        }

        public function getDateDeces()
        {
            return $this->dateDeces;
        }

        public function getIdPropietaire()
        {
            return $this->idPropietaire;
        }

        public function getPhoto()
        {
            return $this->photo;
        }

        //Les setters
        public function setId($id)
        {
           $this->id = $id;
        }

        public function setNom($nom)
        {
            $this->nom = $nom;
        }

        public function setDateNaissance($dateNaissance)
        {
            $this->dateNaissance = $dateNaissance;
        }

        public function setDateDeces($dateDeces)
        {
            $this->dateDeces = $dateDeces;
        }

        public function setIdPropietaire($idPropietaire)
        {
            $this->idPropietaire = $idPropietaire;
        }

        public function setPhoto($photo)
        {
            $this->photo = $photo;
        }
    }