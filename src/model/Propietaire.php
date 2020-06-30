<?php 
    class Propietaire 
    {
        private $_id;
        private $_nom;
        private $_prenom;
        private $_rue;
        private $_codePostal;
        private $_ville;
        private $_telephone;
        private $_telephoneMobile;

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

        public function getPrenom()
        {
            return $this->_prenom;
        }

        public function getRue()
        {
            return $this->_rue;
        }

        public function getCodePostal()
        {
            return $this->_codePostal;
        }

        public function getVille()
        {
            return $this->_ville;
        }

        public function getTelephone()
        {
            return $this->_telephone;
        }

        public function getTelephoneMobile()
        {
            return $this->_telephoneMobile;
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

        public function setPrenom($prenom)
        {
            $this->_prenom = $prenom;
        }

        public function setRue($rue)
        {
            $this->_rue = $rue;
        }

        public function setCodePostal($codePostal)
        {
            $this->_codePostal = $codePostal;
        }

        public function setVille($ville)
        {
            $this->_ville = $ville;
        }

        public function setTelephone($telephone)
        {
            $this->_telephone = $telephone;
        }

        public function setTelephoneMobile($telephoneMobile)
        {
            $this->_telephoneMobile = $telephoneMobile;
        }

        public function setIdPropietaire($telephoneMobile)
        {
            $this->_telephoneMobile = $telephoneMobile;
        }
    }