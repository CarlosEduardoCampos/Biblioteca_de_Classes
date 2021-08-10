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

        //Função devolve um array com todos os dados do banco de dados da tabela Owner
        static function listAllOwner()
        {
            try
            {
                $sql = new Sql();
                return $sql->select("SELECT * FROM tblOwner;");
            }//fim try
            
            catch (Exception $e)
            {
                return json_encode(arrayErros($e));
            }//fim catch
        }//fim função listAllOwner()

        //Faz insert no banco de dados
        public function saveCadOwner()
        {
            try {
                $sql = new Sql();
                return($sql->select("CALL spCadOwner(:ATRIBUTO1, :ATRIBUTO2, :ATRIBUTO3)",
                        array(
                            ":ATRIBUTO1" => getTxtAddress(),
                            ":ATRIBUTO2" => getTxtName(),
                            ":ATRIBUTO3" => getTxtPhone()
                        )//fim array
                    )//fim select
                );//fim retunr
            }//fim try
            
            catch (Exception $e) {
                return json_encode(arrayErros($e));
            }//fim catch
        }//fim função saveCadOwner();

        //Faz update no bancode dados
        public function saveUpdOwner()
        {
            try {
                $sql = new Sql();
                return($sql->select("CALL spUpdOwner(:ATRIBUTO0,:ATRIBUTO1, :ATRIBUTO2, :ATRIBUTO3)",
                        array(
                            ":ATRIBUTO0" => getIdOwner(),
                            ":ATRIBUTO1" => getTxtAddress(),
                            ":ATRIBUTO2" => getTxtName(),
                            ":ATRIBUTO3" => getTxtPhone()
                        )//fim array
                    )//fim select
                );//fim retunr
            }//fim try
            
            catch (Exception $e) {
                return json_encode(arrayErros($e));
            }
        }
    }
?>