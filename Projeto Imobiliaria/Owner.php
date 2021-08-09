<?php
    class Owner{
        private $idOwner;
        private $txtName;
        private $txtPhone;
        private $txtAddress;

        /**
         * Get the value of idOwner
         */ 
        public function getIdOwner()
        {
                return $this->idOwner;
        }

        /**
         * Set the value of idOwner
         *
         * @return  self
         */ 
        public function setIdOwner($idOwner)
        {
                $this->idOwner = $idOwner;

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

        /**
         * Get the value of txtPhone
         */ 
        public function getTxtPhone()
        {
                return $this->txtPhone;
        }

        /**
         * Set the value of txtPhone
         *
         * @return  self
         */ 
        public function setTxtPhone($txtPhone)
        {
                $this->txtPhone = $txtPhone;

                return $this;
        }

        /**
         * Get the value of txtAddress
         */ 
        public function getTxtAddress()
        {
                return $this->txtAddress;
        }

        /**
         * Set the value of txtAddress
         *
         * @return  self
         */ 
        public function setTxtAddress($txtAddress)
        {
                $this->txtAddress = $txtAddress;

                return $this;
        }
    }
   
?>