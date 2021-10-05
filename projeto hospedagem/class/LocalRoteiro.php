<?php
    class LocalRoteiro
    {
        //Atributos
        private $idLocalRoteiro;
        private $txtNome;
        private $txtDescription;
        ##

        /**
         * Get the value of idLocalRoteiro
         */ 
        public function getIdLocalRoteiro()
        {
            return $this->idLocalRoteiro;
        }

        /**
         * Set the value of idLocalRoteiro
         *
         * @return  self
         */ 
        public function setIdLocalRoteiro($idLocalRoteiro)
        {
            $this->idLocalRoteiro = $idLocalRoteiro;

            return $this;
        }

        /**
         * Get the value of txtNome
         */ 
        public function getTxtNome()
        {
            return $this->txtNome;
        }

        /**
         * Set the value of txtNome
         *
         * @return  self
         */ 
        public function setTxtNome($txtNome)
        {
            $this->txtNome = $txtNome;

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
    }
?>