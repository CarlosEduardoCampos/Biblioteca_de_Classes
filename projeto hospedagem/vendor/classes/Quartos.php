<?php 
    class Quartos
    {
        //Atributos
        private $idQuarto;
        private $txtNomeQuarto;
        private $txtDescricao;
        private $intCamasSolteiro;
        private $intCamasCasal;
        private $boolTv;
        private $boolAr;
        private $boolFrigobar;
        private $boolSuite;
        private $boolCafe;
        private $intPessoas;

        /**
         * Get the value of idQuarto
         */ 
        public function getIdQuarto()
        {
            return $this->idQuarto;
        }

        /**
         * Set the value of idQuarto
         *
         * @return  self
         */ 
        public function setIdQuarto($idQuarto)
        {
            $this->idQuarto = $idQuarto;

            return $this;
        }

        /**
         * Get the value of txtNomeQuarto
         */ 
        public function getTxtNomeQuarto()
        {
            return $this->txtNomeQuarto;
        }

        /**
         * Set the value of txtNomeQuarto
         *
         * @return  self
         */ 
        public function setTxtNomeQuarto($txtNomeQuarto)
        {
            $this->txtNomeQuarto = $txtNomeQuarto;

            return $this;
        }

        /**
         * Get the value of txtDescricao
         */ 
        public function getTxtDescricao()
        {
            return $this->txtDescricao;
        }

        /**
         * Set the value of txtDescricao
         *
         * @return  self
         */ 
        public function setTxtDescricao($txtDescricao)
        {
            $this->txtDescricao = $txtDescricao;

            return $this;
        }

        /**
         * Get the value of intCamasSolteiro
         */ 
        public function getIntCamasSolteiro()
        {
            return $this->intCamasSolteiro;
        }

        /**
         * Set the value of intCamasSolteiro
         *
         * @return  self
         */ 
        public function setIntCamasSolteiro($intCamasSolteiro)
        {
            $this->intCamasSolteiro = $intCamasSolteiro;

            return $this;
        }

        /**
         * Get the value of intCamasCasal
         */ 
        public function getIntCamasCasal()
        {
            return $this->intCamasCasal;
        }

        /**
         * Set the value of intCamasCasal
         *
         * @return  self
         */ 
        public function setIntCamasCasal($intCamasCasal)
        {
            $this->intCamasCasal = $intCamasCasal;

            return $this;
        }

        /**
         * Get the value of boolTv
         */ 
        public function getBoolTv()
        {
            return $this->boolTv;
        }

        /**
         * Set the value of boolTv
         *
         * @return  self
         */ 
        public function setBoolTv($boolTv)
        {
            $this->boolTv = $boolTv;

            return $this;
        }

        /**
         * Get the value of boolAr
         */ 
        public function getBoolAr()
        {
            return $this->boolAr;
        }

        /**
         * Set the value of boolAr
         *
         * @return  self
         */ 
        public function setBoolAr($boolAr)
        {
            $this->boolAr = $boolAr;

            return $this;
        }

        /**
         * Get the value of boolFrigobar
         */ 
        public function getBoolFrigobar()
        {
            return $this->boolFrigobar;
        }

        /**
         * Set the value of boolFrigobar
         *
         * @return  self
         */ 
        public function setBoolFrigobar($boolFrigobar)
        {
            $this->boolFrigobar = $boolFrigobar;

            return $this;
        }

        /**
         * Get the value of boolSuite
         */ 
        public function getBoolSuite()
        {
            return $this->boolSuite;
        }

        /**
         * Set the value of boolSuite
         *
         * @return  self
         */ 
        public function setBoolSuite($boolSuite)
        {
            $this->boolSuite = $boolSuite;

            return $this;
        }

        /**
         * Get the value of boolCafe
         */ 
        public function getBoolCafe()
        {
            return $this->boolCafe;
        }

        /**
         * Set the value of boolCafe
         *
         * @return  self
         */ 
        public function setBoolCafe($boolCafe)
        {
            $this->boolCafe = $boolCafe;

            return $this;
        }

        /**
         * Get the value of intPessoas
         */ 
        public function getIntPessoas()
        {
            return $this->intPessoas;
        }

        /**
         * Set the value of intPessoas
         *
         * @return  self
         */ 
        public function setIntPessoas($intPessoas)
        {
            $this->intPessoas = $intPessoas;

            return $this;
        }

        /**
         * Recebe um array via $_POST e alimenta as
         * variaveis comos dados correspondentes
         */
        public function setDadosForm($post)
        {
            try{
                $this->setTxtNomeQuarto    ($post['txtNomeQuarto']);
                $this->setTxtDescricao     ($post['txtDescricao']);
                $this->setIntCamasSolteiro ($post['intCamasSolteiro']);
                $this->setIntCamasCasal    ($post['intCamasCasal']);
                $this->setBoolTv           ($post['boolTv']);
                $this->setBoolAr           ($post['boolAr']);
                $this->setBoolFrigobar     ($post['boolFrigobar']);
                $this->setBoolSuite        ($post['boolSuite']);
                $this->setBoolCafe         ($post['boolCafe']);
                $this->setIntPessoas       ($post['IntPessoas']);
            }//fim do try

            catch(Exception $e)
            {
                return json_encode(Msg::arrayErros($e));
            }//fim do catch
        }//fim função setDadosForm

        /**
         * Busca um cadastro no banco de dados e retorna um array com os dados
         */
        public function get()
        {
            try{
                $sql = new Sql();
                return ($sql->select("SELECT * FROM tblQuartos WHERE idQuarto = :ID;",
                        array(
                            ":ID" => $this->getIdQuarto()
                        )//fim array
                    )[0]//fim função select
                );//fim return
            }//fim do try

            catch(Exception $e)
            {
                return json_encode(Msg::arrayErros($e));
            }//fim do catch
        }//fim função

        /**
         * Busca todos os dados de uma tabela no banco de dados
         * e retorna um array
         */
        public static function listAll()
        {
            try{
                $sql = new Sql();
                return $sql->select("SELECT * FROM tblQuartos;");
            }//fim do try

            catch(Exception $e)
            {
                return json_encode(Msg::arrayErros($e));
            }//fim do catch
        }//fim função listAll

        /**
         * Faz um INSERT no banco de dados
         */
        public function Save()
        {
            try{
                $sql = new Sql();
                return($sql->select("CALL spSaveQuartos(:ATRIBUTO1, :ATRIBUTO2, :ATRIBUTO3, :ATRIBUTO4, :ATRIBUTO5, :ATRIBUTO6, :ATRIBUTO7, :ATRIBUTO8, :ATRIBUTO9, :ATRIBUTO10)",
                        array(
                            ":ATRIBUTO1"  => $this->getTxtNomeQuarto(),
                            ":ATRIBUTO2"  => $this->getTxtDescricao(),
                            ":ATRIBUTO3"  => $this->getIntCamasSolteiro(),
                            ":ATRIBUTO4"  => $this->getIntCamasCasal(),
                            ":ATRIBUTO5"  => $this->getBoolTv(),
                            ":ATRIBUTO6"  => $this->getBoolAr(),
                            ":ATRIBUTO7"  => $this->getBoolFrigobar(),
                            ":ATRIBUTO8"  => $this->getBoolSuite(),
                            ":ATRIBUTO9"  => $this->getBoolCafe(),
                            ":ATRIBUTO10" => $this->getIntPessoas()
                        )//fim array
                    )//fim função select
                );//fim return
            }//fim do try

            catch(Exception $e)
            {
                return json_encode(Msg::arrayErros($e));
            }//fim do catch
        }//fim função Save

        /**
         * Modifica os dados de um cadastro que e indetificado pelo id 
         * usando um UPDATE
         */
        public function Update()
        {
            try{
                $sql = new Sql();
                return($sql->select("CALL spUpdQuartos(:ATRIBUTO0, :ATRIBUTO1, :ATRIBUTO2, :ATRIBUTO3, :ATRIBUTO4, :ATRIBUTO5, :ATRIBUTO6, :ATRIBUTO7, :ATRIBUTO8, :ATRIBUTO9, :ATRIBUTO10)",
                        array(
                            ":ATRIBUTO1"  => $this->getTxtNomeQuarto(),
                            ":ATRIBUTO2"  => $this->getTxtDescricao(),
                            ":ATRIBUTO3"  => $this->getIntCamasSolteiro(),
                            ":ATRIBUTO4"  => $this->getIntCamasCasal(),
                            ":ATRIBUTO5"  => $this->getBoolTv(),
                            ":ATRIBUTO6"  => $this->getBoolAr(),
                            ":ATRIBUTO7"  => $this->getBoolFrigobar(),
                            ":ATRIBUTO8"  => $this->getBoolSuite(),
                            ":ATRIBUTO9"  => $this->getBoolCafe(),
                            ":ATRIBUTO10" => $this->getIntPessoas()
                        )//fim array
                    )//fim função select
                );//fim return
            }//fim do try

            catch(Exception $e)
            {
            return json_encode(Msg::arrayErros($e));
            }//fim do catch
        }//fim funçõa Update

        /**
         * Elimina um cadastro do banco de dados que e 
         * indetificado pelo id 
         */
        public function delete()
        {
            try{
                $sql = new Sql();
                return($sql->query("DELETE FROM tblQuartos WHERE idQuarto = :ID", 
                        array(
                            ':ID' => $this->getIdQuarto()
                        )//fim array
                    )//fim query
                );//fim return
            }//fim do try

            catch(Exception $e)
            {
                return json_encode(Msg::arrayErros($e));
            }//fim do catch
        }//fim função delete
    }//fim classe
?>