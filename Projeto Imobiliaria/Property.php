<?php 
    class Property extends PropertyType{
        //Atributos
        private $idProperty;
        private $txtNameProperty;
        private $txtDescription;
        private $boolStatus;
        private $numPrice;

        //Objetos
        //private $fkRef = new Reference;
        //private $fkTipoNegocio = new Business;
        //private $fkCidade = new City;
        //private $fkProprietario = new Owner;

        /**
         * Get the value of idProperty
         */ 
        public function getIdProperty()
        {
            return $this->idProperty;
        }

        /**
         * Set the value of idProperty
         *
         * @return  self
         */ 
        public function setIdProperty($idProperty)
        {
            $this->idProperty = $idProperty;

            return $this;
        }

        /**
         * Get the value of txtNameProperty
         */ 
        public function getTxtNameProperty()
        {
            return $this->txtNameProperty;
        }

        /**
         * Set the value of txtNameProperty
         *
         * @return  self
         */ 
        public function setTxtNameProperty($txtNameProperty)
        {
            $this->txtNameProperty = $txtNameProperty;

            return $this;
        }

        /**
         * Get the value of txtDescription
         */ 
        public function getTxtDescription()
        {
            return $this->txtDescription;
        }

        /**
         * Set the value of txtDescription
         *
         * @return  self
         */ 
        public function setTxtDescription($txtDescription)
        {
            $this->txtDescription = $txtDescription;

            return $this;
        }

        /**
         * Get the value of boolStatus
         */ 
        public function getBoolStatus()
        {
            return $this->boolStatus;
        }

        /**
         * Set the value of boolStatus
         *
         * @return  self
         */ 
        public function setBoolStatus($boolStatus)
        {
            $this->boolStatus = $boolStatus;

            return $this;
        }

        /**
         * Get the value of numPrice
         */ 
        public function getNumPrice()
        {
            return $this->numPrice;
        }

        /**
         * Set the value of numPrice
         *
         * @return  self
         */ 
        public function setNumPrice($numPrice)
        {
            $this->numPrice = $numPrice;

            return $this;
        }
    }
?>