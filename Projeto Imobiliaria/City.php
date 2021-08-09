<?php 
    class City{
        //Atributos
        private $idCity;
        private $txtCity;
        private $txtState;

        /**
         * Get the value of idCity
         */ 
        public function getIdCity()
        {
                return $this->idCity;
        }

        /**
         * Set the value of idCity
         *
         * @return  self
         */ 
        public function setIdCity($idCity)
        {
                $this->idCity = $idCity;

                return $this;
        }

        /**
         * Get the value of txtCity
         */ 
        public function getTxtCity()
        {
                return $this->txtCity;
        }

        /**
         * Set the value of txtCity
         *
         * @return  self
         */ 
        public function setTxtCity($txtCity)
        {
                $this->txtCity = $txtCity;

                return $this;
        }

        /**
         * Get the value of txtState
         */ 
        public function getTxtState()
        {
                return $this->txtState;
        }

        /**
         * Set the value of txtState
         *
         * @return  self
         */ 
        public function setTxtState($txtState)
        {
                $this->txtState = $txtState;

                return $this;
        }
        
    }
?>