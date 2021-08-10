<?php
    class PhotoPropertyroperty extends Property{
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

        //Cria array para tratamento de erros
        public function arrayErros($e)
        {
            return(
                array(
                    'mensagem' => $e->getMessage(),//mensagem de erro
                    'linha'    => $e->getLine(),   //linha do erro
                    'file'     => $e->getFile(),   //arquivo do erro
                    'code'     => $e->getCode()    //numero do erro
                )//fim array
            );
        }

        //Função de busca por meio do id da tabela
        public function getPhotoProperty()
        {
            try{
                $sql = new Sql();
                return ($sql->select("SELECT * FROM tblPhotoProperty WHERE idPhoto = :ID;",
                        array(
                            ":ID" => $this->getIdPhoto()
                        )//fim array
                    )//fim função select
                );//fim return
            }//fim try
            
            catch (Exception $e)
            {
                return json_encode(arrayErros($e));
            }//fim catch
        }//fim função getPhotoProperty()

        //Cria array para tratamento de erros
        /*public function arrayErros($e)
        {
            return(array(
                    'mensagem' => $e->getMessage(),//mensagem de erro
                    'linha'    => $e->getLine(),   //linha do erro
                    'file'     => $e->getFile(),   //arquivo do erro
                    'code'     => $e->getCode()    //numero do erro
                )//fim array
            );
        }*/

        //Função devolve um array com todos os dados do banco de dados da tabela PhotoPropertyroperty
        static function listAllPhotoPropertyroperty()
        {
            try
            {
                $sql = new Sql();
                return $sql->select("SELECT * FROM tblPhotoPropertyroperty;");
            }//fim try
            
            catch (Exception $e)
            {
                return json_encode(arrayErros($e));
            }//fim catch
        }//fim função listAllPhotoPropertyroperty()

        //Faz insert no banco de dados
        public function saveCadPhotoPropertyroperty(){
            try {
                $sql = new Sql();
                return($sql->select("CALL spCadPhotoPropertyroperty(:ATRIBUTO1)", 
                        array(
                            ":ATRIBUTO1" => getTxtName()
                        )//fim array
                    )//fim select
                );//fim return
            }//fim try
            
            catch (Exception $e) {
                return json_encode(arrayErros($e));
            }//fim catch
        }//fim função saveCadPhotoPropertyroperty()

        //Faz update no bancode dados
        public function saveUpdPhotoPropertyroperty(){
            try {
                $sql = new Sql();
                return($sql->select("CALL spUpdPhotoPropertyroperty(:ATRIBUTO0,:ATRIBUTO1)", 
                        array(
                            ":ATRIBUTO0" => getIdPhoto(),
                            ":ATRIBUTO1" => getTxtName()
                        )//fim array
                    )//fim select
                );//fim return
            }//fim try
            
            catch (Exception $e) {
                return json_encode(arrayErros($e));
            }//fim catch
        }//fim função saveUpdPhotoPropertyroperty()
    }
?>