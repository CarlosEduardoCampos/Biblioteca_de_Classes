<?php
    class FotosRoteiro
    {
        //Atributos
        private $idFotoRoteiro;
        private $txtNome;

        //objetos
        private $fkLocal;
        ##

        /**
         * Get the value of idFotoRoteiro
         */ 
        public function getIdFotoRoteiro()
        {
            return $this->idFotoRoteiro;
        }

        /**
         * Set the value of idFotoRoteiro
         *
         * @return  self
         */ 
        public function setIdFotoRoteiro($idFotoRoteiro)
        {
            $this->idFotoRoteiro = $idFotoRoteiro;

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
         * Get the value of fkLocal
         */ 
        public function getFkLocal()
        {
            return $this->fkLocal;
        }

        /**
         * Set the value of fkLocal
         *
         * @return  self
         */ 
        public function setFkLocal($fkLocal)
        {
            $this->fkLocal = $fkLocal;

            return $this;
        }
    }
?>