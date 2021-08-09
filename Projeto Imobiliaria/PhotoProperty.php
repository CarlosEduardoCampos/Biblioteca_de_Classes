<?php
    class PhotoProperty extends Property{
        //Atributos
        private $idPhoto;
        private $txtName;

        /**
         * Get the value of idPhoto
         */ 
        public function getIdPhoto()
        {
                return $this->idPhoto;
        }

        /**
         * Set the value of idPhoto
         *
         * @return  self
         */ 
        public function setIdPhoto($idPhoto)
        {
                $this->idPhoto = $idPhoto;

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