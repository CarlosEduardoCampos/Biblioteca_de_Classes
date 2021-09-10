<?php 
    class Mocao
    {
        //Atributos
        private $idMocao;
        private $txtNomeMocao;
        private $dtPostagem;
        private $txtNomeArquivo;

        //Objetos
        private $fkResponsavel;
        
        /**
         * Get the value of idMocao
         */ 
        public function getIdMocao()
        {
            return $this->idMocao;
        }

        /**
         * Set the value of idMocao
         *
         * @return  self
         */ 
        public function setIdMocao($idMocao)
        {
            $this->idMocao = $idMocao;

            return $this;
        }

        /**
         * Get the value of txtNomeMocao
         */ 
        public function getTxtNomeMocao()
        {
            return $this->txtNomeMocao;
        }

        /**
         * Set the value of txtNomeMocao
         *
         * @return  self
         */ 
        public function setTxtNomeMocao($txtNomeMocao)
        {
            $this->txtNomeMocao = $txtNomeMocao;

            return $this;
        }

        /**
         * Get the value of dtPostagem
         */ 
        public function getDtPostagem()
        {
            return $this->dtPostagem;
        }

        /**
         * Set the value of dtPostagem
         *
         * @return  self
         */ 
        public function setDtPostagem($dtPostagem)
        {
            $this->dtPostagem = $dtPostagem;

            return $this;
        }

        /**
         * Get the value of txtNomeArquivo
         */ 
        public function getTxtNomeArquivo()
        {
            return $this->txtNomeArquivo;
        }

        /**
         * Set the value of txtNomeArquivo
         *
         * @return  self
         */ 
        public function setTxtNomeArquivo($txtNomeArquivo)
        {
            $this->txtNomeArquivo = $txtNomeArquivo;

            return $this;
        }

        /**
         * Get the value of fkResponsavel
         */ 
        public function getFkResponsavel()
        {
            return $this->fkResponsavel;
        }

        /**
         * Set the value of fkResponsavel
         *
         * @return  self
         */ 
        public function setFkResponsavel($fkResponsavel)
        {
            $this->fkResponsavel = $fkResponsavel;

            return $this;
        }

        /**
         * Recebe um array via $_POST e alimenta as
         * variaveis comos dados correspondentes
         */
        public function setDadosForm($post)
        {
            try{
                $this->setTxtNomeMocao   ($post['txtNomeMocao']);
                $this->setDtPostagem     ($post['dtPostagem']);
                $this->setTxtNomeArquivo ($post['txtNomeArquivo']);
                $this->setFkResponsavel  ($post['fkResponsavel']);
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
                echo "GET()";
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
        public function static listAll()
        {
            try{
                $sql = new Sql();
                return $sql->select("SELECT * FROM tblMocao;");
            }//fim do try

            catch(Exception $e)
            {
                return json_encode(Msg::arrayErros($e));
            }//fim do catch
        }//fim função listAll()

        /**
         * Faz um INSERT no banco de dados
         */
        public function Save()
        {
            try{
                $sql = new Sql();
                return($sql->select("CALL spSaveMocao(:ATRIBUTO1, :ATRIBUTO2, :ATRIBUTO3, :ATRIBUTO4)",
                        array(
                            ":ATRIBUTO1" => $this->getTxtNomeMocao();
                            ":ATRIBUTO2" => $this->getDtPostagem();
                            ":ATRIBUTO3" => $this->getTxtNomeArquivo();
                            ":ATRIBUTO4" => $this->getFkResponsavel();
                        )//fim array
                    )//fim função select
                );//fim return
            }//fim do try

            catch(Exception $e)
            {
                return json_encode(Msg::arrayErros($e));
            }//fim do catch
        }//fim função Save()

        /**
         * Modifica os dados de um cadastro que e indetificado pelo id 
         * usando um UPDATE
         */
        public function Update()
        {
            try{
                $sql = new Sql();
                return($sql->select("CALL spUpdMocao(:ATRIBUTO0,:ATRIBUTO1, :ATRIBUTO2, :ATRIBUTO3, :ATRIBUTO4, :ATRIBUTO5)",
                        array(
                            ":ATRIBUTO0" => $this->getIdMocao();
                            ":ATRIBUTO1" => $this->getTxtNomeMocao();
                            ":ATRIBUTO2" => $this->getDtPostagem();
                            ":ATRIBUTO3" => $this->getTxtNomeArquivo();
                            ":ATRIBUTO4" => $this->getFkResponsavel();
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
                return($sql->query("DELETE FROM tblMocao WHERE idMocao = :ID", 
                        array(
                            ':ID' => $this->getIdMocao()
                        )//fim array
                    )//fim query
                );//fim return
            }//fim do try

            catch(Exception $e)
            {
                return json_encode(Msg::arrayErros($e));
            }//fim do catch
        }//fim função delete()
    }//fim da classe
?>