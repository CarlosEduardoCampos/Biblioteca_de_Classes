<?php
    class Reference{
        private $idReference;
        private $boolUsed;

        /**
         * Get the value of idReference
         */ 
        public function getIdReference()
        {
            return $this->idReference;
        }

        /**
         * Set the value of idReference
         *
         * @return  self
         */ 
        public function setIdReference($idReference)
        {
            $this->idReference = $idReference;

            return $this;
        }

        /**
         * Get the value of boolUsed
         */ 
        public function getBoolUsed()
        {
            return $this->boolUsed;
        }

        /**
         * Set the value of boolUsed
         *
         * @return  self
         */ 
        public function setBoolUsed($boolUsed)
        {
            $this->boolUsed = $boolUsed;

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

        //Função devolve um array com todos os dados do banco de dados da tabela Reference
        static function listAllReference()
        {
            try
            {
                $sql = new Sql();
                return $sql->select("SELECT * FROM tblReference;");
            }//fim try
            
            catch (Exception $e)
            {
                return json_encode(arrayErros($e));
            }//fim catch
        }//fim função listAllReference()

        //Faz insert no banco de dados
        public function saveCadReference()
        {
            try {
                $sql = new Sql();
                return($sql->select("CALL spCadReference(:ATRIBUTO1)",
                        array(
                            ":ATRIBUTO1" => getBoolUsed()         
                        )//fim array
                    )//fim select
                );//fim return
            }//fim try

            catch (Exception $e) {
                return json_encode(arrayErros($e));
            }//fim catch
        }//fim função saveCadReference()

        //Faz update no bancode dados
        public function saveUpdReference()
        {
            try {
                $sql = new Sql();
                return($sql->select("CALL spUpdReference(:ATRIBUTO0, :ATRIBUTO1)",
                        array(
                            ":ATRIBUTO0" => getIdReference(),
                            ":ATRIBUTO1" => getBoolUsed()               
                        )//fim array
                    )//fim select
                );//fim return
            }//fim try

            catch (Exception $e) {
                return json_encode(arrayErros($e));
            }//fim catch
        }//fim função saveUpdReference()
    }//fim class
?>