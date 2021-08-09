<?php
    class Business{
        private $idBusiness;
        private $txtName;

        /**
         * Get the value of idBusiness
         */ 
        public function getIdBusiness()
        {
                return $this->idBusiness;
        }

        /**
         * Set the value of idBusiness
         *
         * @return  self
         */ 
        public function setIdBusiness($idBusiness)
        {
                $this->idBusiness = $idBusiness;

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