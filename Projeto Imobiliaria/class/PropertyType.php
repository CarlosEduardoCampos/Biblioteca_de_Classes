<?php
    class PropertyType{
        private $idPropertyType;
        private $txtName;

        /**
         * Get the value of idPropertyType
         */ 
        public function getIdPropertyType()
        {
                return $this->idPropertyType;
        }

        /**
         * Set the value of idPropertyType
         *
         * @return  self
         */ 
        public function setIdPropertyType($idPropertyType)
        {
                $this->idPropertyType = $idPropertyType;

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
            return(array(
                    'mensagem' => $e->getMessage(),//mensagem de erro
                    'linha'    => $e->getLine(),   //linha do erro
                    'file'     => $e->getFile(),   //arquivo do erro
                    'code'     => $e->getCode()    //numero do erro
                )//fim array
            );
        }

        //Função de busca por meio do id da tabela
        public function getPropertyType()
        {
            try{
                $sql = new Sql();
                return ($sql->select("SELECT * FROM tblPropertyType WHERE idPropertyType = :ID;",
                        array(
                            ":ID" => $this->getIdPropertyType()
                        )//fim array
                    )//fim função select
                );//fim return
            }//fim try
            
            catch (Exception $e)
            {
                return json_encode(arrayErros($e));
            }//fim catch
        }//fim função getPropertyType()

        //Função devolve um array com todos os dados do banco de dados da tabela PropertyType
        static function listAllPropertyType()
        {
            try
            {
                $sql = new Sql();
                return $sql->select("SELECT * FROM tblPropertyType;");
            }//fim try
            
            catch (Exception $e)
            {
                return json_encode(arrayErros($e));
            }//fim catch
        }//fim função listAllPropertyType()

        //Faz insert no banco de dados
        public function saveCadPropertyType()
        {
            try {
                $sql = new Sql();
                return($sql->select("CALL spCadPropertyType(:ATRIBUTO1)",
                        array(
                            ":ATRIBUTO1" => getTxtName()
                        )//fim array
                    )//fim select
                );//fim retunr
            }//fim try
            
            catch (Exception $e) {
                return json_encode(arrayErros($e));
            }//fim catch
        }//fim função saveCadPropertyType();

        //Faz update no bancode dados
        public function saveUpdPropertyType()
        {
            try {
                $sql = new Sql();
                return($sql->select("CALL spUpdPropertyType(:ATRIBUTO0, :ATRIBUTO1)",
                        array(
                            ":ATRIBUTO0" => getIdPropertyType(),
                            ":ATRIBUTO1" => getTxtName()
                        )//fim array
                    )//fim select
                );//fim retunr
            }//fim try
            
            catch (Exception $e) {
                return json_encode(arrayErros($e));
            }//fim catch
        }//fim função saveUpdPropertyType();

    }
?>