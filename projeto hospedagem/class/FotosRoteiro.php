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

        /**
         * Recebe um arquivo eo salva
        */
        public function Upload($files)
        {
            $filename = $files["txtNomeArquivo"]["name"];
            move_uploaded_file($files["txtNomeArquivo"]["tmp_name"],"fotos_roteiro/$filename");
        }//fim função upload

        /**
         * Busca um cadastro no banco de dados e retorna um array com os dados
         */
        public function get()
        {
            try{
                $sql = new Sql();
                return($sql->select("SELECT * FROM tblFotosRoteiro WHERE idFotosRoteiro = :id",
                    array(
                        ':id' => getIdFotoRoteiro()
                    ))[0]//fim array, select
                );//fim return
            }//fim try
            
            catch (Exeption $e)
            {
                return json_encode(Msg::arrayErros($e));
            }//fim catch
        }//fim função get
    }//fim classe
?>