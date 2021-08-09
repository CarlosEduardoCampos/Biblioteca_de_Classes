<?php
    class PropertyType{
        private $idPropertyType;
        private $txtName;

        /**
         * Get the value of idPropertyType
         */ 
        public function getIdPropertyType()
        {
                return $this->idPropertyType;
        }

        /**
         * Set the value of idPropertyType
         *
         * @return  self
         */ 
        public function setIdPropertyType($idPropertyType)
        {
                $this->idPropertyType = $idPropertyType;

                return $this;
        }

        /**
         * Get the value of txtName
         */ 
        public function getTxtName()
        {
                return $this->txtName;
        }

        /**
         * Set the value of txtName
         *
         * @return  self
         */ 
        public function setTxtName($txtName)
        {
                $this->txtName = $txtName;

                return $this;
        }
    }
?>