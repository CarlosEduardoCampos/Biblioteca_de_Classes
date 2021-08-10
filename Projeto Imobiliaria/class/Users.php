<?php 
    class Users{
        private $idUsers;
        private $txtName;
        private $txtLogin;
        private $txPassword;

        /**
         * Get the value of idUsers
         */ 
        public function getIdUsers()
        {
            return $this->idUsers;
        }

        /**
         * Set the value of idUsers
         *
         * @return  self
         */ 
        public function setIdUsers($idUsers)
        {
            $this->idUsers = $idUsers;

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
         * Get the value of txtLogin
         */ 
        public function getTxtLogin()
        {
            return $this->txtLogin;
        }

        /**
         * Set the value of txtLogin
         *
         * @return  self
         */ 
        public function setTxtLogin($txtLogin)
        {
            $this->txtLogin = $txtLogin;

            return $this;
        }

        /**
         * Get the value of txPassword
         */ 
        public function getTxPassword()
        {
             return $this->txPassword;
        }

        /**
         * Set the value of txPassword
         *
         * @return  self
         */ 
        public function setTxPassword($txPassword)
        {
            $this->txPassword = $txPassword;

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

         //Faz insert no banco de dados
        public function saveCadUsers()
        {
            try {
                $sql = new Sql();
                return($sql->select("Call spCadUsers(:ATRIBUTO1, :ATRIBUTO2, :ATRIBUTO3)",
                        array(
                            ":ATRIBUTO1" => getTxtName(),
                            ":ATRIBUTO2" => getTxtLogin(),
                            ":ATRIBUTO3" => getTxPassword()
                        )//fim array
                    )//fim select
                )//fim return
            }//fim try
            catch (Exception $e) {
                return json_encode(arrayErros($e));
            }//fim catch
        }//fim função saveCadUsers()

        //Faz update no bancode dados
        public function saveUpdUsers()
        {
            try {
                $sql = new Sql();
                return($sql->select("Call spUpdUsers(:ATRIBUTO0, :ATRIBUTO1, :ATRIBUTO2, :ATRIBUTO3)",
                        array(
                            ":ATRIBUTO0" => getIdUsers(),
                            ":ATRIBUTO1" => getTxtName(),
                            ":ATRIBUTO2" => getTxtLogin(),
                            ":ATRIBUTO3" => getTxPassword()
                        )//fim array
                    )//fim select
                )//fim return
            }//fim try
            catch (Exception $e) {
                return json_encode(arrayErros($e));
            }//fim catch
        }//fim função saveUpdUsers()
    }//fim class

?>