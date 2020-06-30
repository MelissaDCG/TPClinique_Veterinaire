<?php
    class Chien extends Animal
    {
        // private $_idAnimal;
        private $_taille;
        private $_poids;
        private $_idRace;

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
        public function getTaille()
        {
            return $this->_taille;
        }

        public function getPoids()
        {
            return $this->_poids;
        }

        public function getIdRace()
        {
            return $this->_idRace;
        }

        //Les setters
        public function setTaille($taille)
        {
            $this->_taille = $taille;
        }

        public function setPoids($poids)
        {
            $this->_poids = $poids;
        }

        public function setIdRace($idRace)
        {
            $this->_idRace = $idRace;
        }
    }