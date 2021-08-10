<?php
    require_once("buscaClass.php");

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
        static function listAllAnuncio()
        {
            try
            {
                $sql = new Sql();
                return $sql->select("SELECT * FROM tblAnuncio;");
            }//fim try
            
            catch (Exception $e)
            {
                return json_encode(arrayErros($e));
            }//fim catch
        }//fim função listAllAnuncio()

        //Faz insert no banco de dados
        public function saveCadAnuncio()
        {
            try{
                $sql = new Sql();
                return($sql->select("CALL spCadAnuncio(:ATTRIBUTO1, :ATRIBUTO2, :ATRIBUTO3, :ATRIBUTO4)",
                        array(
                            ":ATRIBUTO1" => $this->getTxtProprietario(),
                            ":ATRIBUTO2" => $this->getTxtPhone(),
                            ":ATRIBUTO3" => $this->getTxtNomeAnuncio(),
                            ":ATRIBUTO4" => $this->getTxtDescription()
                        )//fim do array
                    )//fim do select
                );//fim do return
            }//fim do try

            catch (Exception $e){
                return json_encode(arrayErros($e));
            }//fim do catch
        }//fim função saveCadAnucino()

        //Faz update no bancode dados
        public function saveUpdAnuncio()
        {
            try{
                $sql = new Sql();
                return($sql->select("CALL spUpdAnuncio(:ATRIBUTO0, :ATTRIBUTO1, :ATRIBUTO2, :ATRIBUTO3, :ATRIBUTO4)",
                        array(
                            ":ATRIBUTO0" => $this->getIdAnuncio(),
                            ":ATRIBUTO1" => $this->getTxtProprietario(),
                            ":ATRIBUTO2" => $this->getTxtPhone(),
                            ":ATRIBUTO3" => $this->getTxtNomeAnuncio(),
                            ":ATRIBUTO4" => $this->getTxtDescription()
                        )//fim do array
                    )//fim do select
                );//fim do return
            }//fim do try

            catch (Exception $e){
                return json_encode(arrayErros($e));
            }//fim do catch
        }//fim da função saveUpdAnuncio()
    }//fim da class
?>