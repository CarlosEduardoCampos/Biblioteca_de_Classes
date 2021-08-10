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

        //Função devolve um array com todos os dados do banco de dados da tabela PhotoProperty
        static function listAllPhotoProperty()
        {
            try
            {
                $sql = new Sql();
                return $sql->select("SELECT * FROM tblPhotoProperty;");
            }//fim try
            
            catch (Exception $e)
            {
                return json_encode(arrayErros($e));
            }//fim catch
        }//fim função listAllPhotoProperty()

        //Faz insert no banco de dados
        public function saveCadPhotoProperty(){
            try {
                $sql = new Sql();
                return($sql->select("CALL spCadPhotoProperty(:ATRIBUTO1)", 
                        array(
                            ":ATRIBUTO1" => getTxtName()
                        )//fim array
                    )//fim select
                );//fim return
            }//fim try
            
            catch (Exception $e) {
                return json_encode(arrayErros($e));
            }//fim catch
        }//fim função saveCadPhotoProperty()

        //Faz update no bancode dados
        public function saveUpdPhotoProperty(){
            try {
                $sql = new Sql();
                return($sql->select("CALL spUpdPhotoProperty(:ATRIBUTO0,:ATRIBUTO1)", 
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
        }//fim função saveUpdPhotoProperty()
    }
?>