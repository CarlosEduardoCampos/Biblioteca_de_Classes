<?php 
    class Passeio4x4
    {
        //Atributos
        private $idPasseio4x4;
        private $txtNome;
        private $txtDescricao;
        private $intLotacao;
        ##
        /**
         * Get the value of idPasseio4x4
         */ 
        public function getIdPasseio4x4()
        {
            return $this->idPasseio4x4;
        }

        /**
         * Set the value of idPasseio4x4
         *
         * @return  self
         */ 
        public function setIdPasseio4x4($idPasseio4x4)
        {
            $this->idPasseio4x4 = $idPasseio4x4;

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
         * Get the value of intLotacao
         */ 
        public function getIntLotacao()
        {
            return $this->intLotacao;
        }

        /**
         * Set the value of intLotacao
         *
         * @return  self
         */ 
        public function setIntLotacao($intLotacao)
        {
            $this->intLotacao = $intLotacao;

            return $this;
        }

        /**
         * Recebe um array via $_POST e alimenta as
         * variaveis comos dados correspondentes
         */
        public function setDadosForm($post)
        {
            $this->setTxtNome     ($post["txtNome"]);
            $this->setTxtDescricao($post["txtDescricao"]);
            $this->setIntLotacao  ($post["intLotacao"]);
        }//fim setDadosForm

        /**
         * Busca um cadastro no banco de dados e retorna um array com os dados
         */
        public function get()
        {
            try{
                $sql = new Sql();
                return ($sql->select("SELECT * FROM tblPasseio4x4 WHERE idPasseio4x4 = :id",
                        array(
                            ':id' => getIdPasseio4x4()
                        )//fim array
                    )[0]//fim select
                );//fim return
            }

            catch (Exception $e)
            {
                return json_encode(Msg::arrayErros($e));
            }//fim catch
        }//fim função get

        /**
         * Busca todos os dados de uma tabela no banco de dados
         * e retorna um array
         */
        public static function listAll()
        {
            try{
                $sql = new Sql();
                return $sql->select("SELECT * FROM tblPasseio4x4");
            }//fim try
            
            catch (Execption $e)
            {
                json_encode(Msg::arrayErros($e));
            }//fim catch
        }//fim função listAll

        /**
         * Faz um INSERT no banco de dados
         */
        public function Save()
        {
            try{
                $sql = new Sql();
                return($sql->select("CALL spSavePasseio4x4(:ATRIBUTO1, :ATRIBUTO2, ATRIBUTO3)",
                    array(
                        ':ATRIBUTO1' => $this->getTxtNome(),
                        ':ATRIBUTO2' => $this->getTxtDescricao(),
                        ':ATRIBUTO3' => $this->getIntLotacao()
                    ))//fim array, select
                );//fim return
            }//fim try

            catch (Execption $e)
            {
                json_encode(Msg::arrayErros($e));
            }//fim catch 
        }//fim função save

        /**
         * Modifica os dados de um cadastro que e indetificado pelo id 
         * usando um UPDATE
         */
        public function Update()
        {
            try{
                $sql = new Sql();
                return($sql->select("CALL spSavePasseio4x4(:ATRIBUTO1, :ATRIBUTO2, ATRIBUTO3)",
                    array(
                        ':ATRIBUTO1' => $this->getTxtNome(),
                        ':ATRIBUTO2' => $this->getTxtDescricao(),
                        ':ATRIBUTO3' => $this->getIntLotacao()
                    ))//fim array, select
                );//fim return
            }//fim try

            catch (Execption $e)
            {
                json_encode(Msg::arrayErros($e));
            }//fim catch 
        }//fim função update

        /**
         * Elimina um cadastro do banco de dados que e 
         * indetificado pelo id 
         */
        public function delete()
        {
            try{
                $sql = new Sql();
                return($sql->query("DELETE FROM tblPasseio4x4 WHERE idPasseio4x4 = :ID", 
                    array(
                        ':ID' => $this->getIdPasseio4x4()
                    ))//fim array, query
                );//fim return
            }//fim do try

            catch(Exception $e)
            {
                return json_encode(Msg::arrayErros($e));
            }//fim do catch
        }//fim função delete
    }//fim classe
?>