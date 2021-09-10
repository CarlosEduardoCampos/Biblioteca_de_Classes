<?php 
    class ProjetosLei
    {
        //Atributos
        private $idProjeto;
        private $txtNome;
        private $txtDescricao;
        private $dtPostagem;
        private $intStatus;
        private $txtNomeArquivo;

        //Objetos
        private $fkResponsavel;

        /**
         * Get the value of idProjeto
         */ 
        public function getIdProjeto()
        {
            return $this->idProjeto;
        }

        /**
         * Set the value of idProjeto
         *
         * @return  self
         */ 
        public function setIdProjeto($idProjeto)
        {
            $this->idProjeto = $idProjeto;

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
         * Get the value of intStatus
         */ 
        public function getIntStatus()
        {
            return $this->intStatus;
        }

        /**
         * Set the value of intStatus
         *
         * @return  self
         */ 
        public function setIntStatus($intStatus)
        {
            $this->intStatus = $intStatus;

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
                $this->setTxtNome        ($post['txtNome']);
                $this->setTxtDescricao   ($post['txtDescricao']);
                $this->setDtPostagem     ($post['dtPostagem']);
                $this->setIntStatus      ($post['intStatus']);
                $this->setTxtNomeArquivo ($post['txtNomeArquivo']);
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
                return $sql->select("SELECT * FROM tblProjetosLei;");
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
                return($sql->select("CALL spSaveProjetoLei(:ATRIBUTO1, :ATRIBUTO2, :ATRIBUTO3, :ATRIBUTO4, :ATRIBUTO5, :ATRIBUTO6)",
                        array(
                            ":ATRIBUTO1" => $this->getTxtNome();
                            ":ATRIBUTO2" => $this->getTxtDescricao();
                            ":ATRIBUTO3" => $this->getDtPostagem();
                            ":ATRIBUTO4" => $this=>getIntStatus();
                            ":ATRIBUTO5" => $this->getTxtNomeArquivo();
                            ":ATRIBUTO6" => $this->getFkResponsavel();
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
                return($sql->select("CALL spUpdProjetoLei(:ATRIBUTO0, :ATRIBUTO1, :ATRIBUTO2, :ATRIBUTO3, :ATRIBUTO4, :ATRIBUTO5, :ATRIBUTO6)",
                        array(
                            ":ATRIBUTO0" => $this->getIdProjeto();
                            ":ATRIBUTO1" => $this->getTxtNome();
                            ":ATRIBUTO2" => $this->getTxtDescricao();
                            ":ATRIBUTO3" => $this->getDtPostagem();
                            ":ATRIBUTO4" => $this=>getIntStatus();
                            ":ATRIBUTO5" => $this->getTxtNomeArquivo();
                            ":ATRIBUTO6" => $this->getFkResponsavel();
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
                return($sql->query("DELETE FROM tblProjetosLei WHERE idProjetosLei = :ID", 
                        array(
                            ':ID' => $this->getIdProjetosLei()
                        )//fim array
                    )//fim query
                );//fim return
            }//fim do try

            catch(Exception $e)
            {
                return json_encode(Msg::arrayErros($e));
            }//fim do catch
        }//fim função delete()
    }
?>