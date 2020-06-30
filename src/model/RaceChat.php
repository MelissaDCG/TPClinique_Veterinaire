<?php
    class RaceChat {
        private $_id;
        private $_nom;

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
            return $this->_id;
        }

        public function getNom()
        {
            return $this->_nom;
        }

        //Les setters
        public function setId($id)
        {
           $this->_id = $id;
        }

        public function setNom($nom)
        {
            $this->_nom = $nom;
        }

    }