<?php
    class LocalRoteiro
    {
        //Atributos
        private $idLocalRoteiro;
        private $txtNome;
        private $txtDescription;
        private $txtLinkGps;
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

        /**
         * Get the value of txtLinkGps
         */ 
        public function getTxtLinkGps()
        {
            return $this->txtLinkGps;
        }

        /**
         * Set the value of txtLinkGps
         *
         * @return  self
         */ 
        public function setTxtLinkGps($txtLinkGps)
        {
            $this->txtLinkGps = $txtLinkGps;

            return $this;
        }

        /**
         * Recebe um array via $_POST e alimenta as
         * variaveis comos dados correspondentes
         */
        public function setDadosForm($post)
        {
            $this->setTxtNome       ($post["txtNome"]);
            $this->setTxtDescription($post["txtDescripton"]);
            $this->setTxtLinkGps    ($post["txtLinkGps"]);
        }//fim setDadosForm

        /**
         * Busca um cadastro no banco de dados e retorna um array com os dados
         */
        public function get()
        {
            $sql = new Sql();
            return($sql->select("SELECT * FROM tblLocalRoteiro WHERE idLocalRoteiro = :id",
                array(
                    ':id' => getIdLocalRoteiro()
                ))[0]//fim array,select
            );//fim return
        }//fm função get
    }//fim class
?>