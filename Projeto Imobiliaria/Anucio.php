<?php 
    class Anuncio{
        //Atributos
        private $idAnuncio;
        private $txtProprietario;
        private $txtPhone;
        private $txtNomeAnuncio;
        private $txtDescription;

        //Objetos
        //private $fkCidade = new City();
        //private $fkBusiness = new Business();
        //private $fkTipoImovel = new PropertyType();

        /**
         * Get the value of idAnuncio
         */ 
        public function getIdAnuncio()
        {
            return $this->idAnuncio;
        }

        /**
         * Set the value of idAnuncio
         *
         * @return  self
         */ 
        public function setIdAnuncio($idAnuncio)
        {
            $this->idAnuncio = $idAnuncio;

            return $this;
        }

        /**
         * Get the value of txtProprietario
         */ 
        public function getTxtProprietario()
        {
            return $this->txtProprietario;
        }

        /**
         * Set the value of txtProprietario
         *
         * @return  self
         */ 
        public function setTxtProprietario($txtProprietario)
        {
            $this->txtProprietario = $txtProprietario;

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
         * Get the value of txtNomeAnuncio
         */ 
        public function getTxtNomeAnuncio()
        {
            return $this->txtNomeAnuncio;
        }

        /**
         * Set the value of txtNomeAnuncio
         *
         * @return  self
         */ 
        public function setTxtNomeAnuncio($txtNomeAnuncio)
        {
            $this->txtNomeAnuncio = $txtNomeAnuncio;

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