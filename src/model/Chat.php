<?php   
    class Chat extends Animal
    {
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
        public function getIdRace()
        {
            return $this->_idRace;
        }

        //Les setters
        public function setIdRace($idRace)
        {
            $this->_idRace = $idRace;
        }
    }