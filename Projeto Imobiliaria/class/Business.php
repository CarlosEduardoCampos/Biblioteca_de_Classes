<?php
    class Business{
        private $idBusiness;
        private $txtName;

        /**
         * Get the value of idBusiness
         */ 
        public function getIdBusiness()
        {
                return $this->idBusiness;
        }

        /**
         * Set the value of idBusiness
         *
         * @return  self
         */ 
        public function setIdBusiness($idBusiness)
        {
                $this->idBusiness = $idBusiness;

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

        //Função devolve um array com todos os dados do banco de dados da tabela Anuncio
        static function listAllBusiness()
        {
            try
            {
                $sql = new Sql();
                return $sql->select("SELECT * FROM tblBusiness;");
            }//fim try
            
            catch (Exception $e)
            {
                return json_encode(arrayErros($e));
            }//fim catch
        }//fim função listAllBusiness()

        //Faz insert no banco de dados
        public function saveCadBusiness(){
            try {
                    $sql = new Sql();
                    return($sql->select("CALL spCadBusiness(:ATRIBUTO1)",
                            array(
                                ":ATRIBUTO1" => getTxtName()
                            )//fim array
                        )//fim do select
                    );//fim return
            }// fim do try

            catch (Exception $e) {
                return json_encode(arrayErros($e));
            }
        }//fim função saveCadBusiness()

        //Faz update no bancode dados
        public function saveUpdBusiness(){
            try {
                    $sql = new Sql();
                    return($sql->select("CALL spUpdBusiness(:ATRIBUTO0,:ATRIBUTO1)",
                            array(
                                ":ATRIBUTO0" => getIdBusiness(),
                                ":ATRIBUTO1" => getTxtName()
                            )//fim array
                        )//fim do select
                    );//fim return
            }// fim do try

            catch (Exception $e) {
                return json_encode(arrayErros($e));
            }//fim catch
        }//fim função saveUpdBusiness()
    }
?>