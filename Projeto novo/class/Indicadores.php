<?php
    class Indicadores
    {
        //Atributos
        private $idIndicadores;
        private $txtNomeIndicacao;
        private $txtDescricao;
        private $dtDataPostagem;
        private $txtNomeArquivo;

        //Objetos
        private $fkResponsavel;

        /**
         * Get the value of idIndicadores
         */ 
        public function getIdIndicadores()
        {
            return $this->idIndicadores;
        }

        /**
         * Set the value of idIndicadores
         *
         * @return  self
         */ 
        public function setIdIndicadores($idIndicadores)
        {
            $this->idIndicadores = $idIndicadores;

            return $this;
        }

        /**
         * Get the value of txtNomeIndicacao
         */ 
        public function getTxtNomeIndicacao()
        {
            return $this->txtNomeIndicacao;
        }

        /**
         * Set the value of txtNomeIndicacao
         *
         * @return  self
         */ 
        public function setTxtNomeIndicacao($txtNomeIndicacao)
        {
            $this->txtNomeIndicacao = $txtNomeIndicacao;

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
         * Get the value of dtDataPostagem
         */ 
        public function getDtDataPostagem()
        {
            return $this->dtDataPostagem;
        }

        /**
         * Set the value of dtDataPostagem
         *
         * @return  self
         */ 
        public function setDtDataPostagem($dtDataPostagem)
        {
            $this->dtDataPostagem = $dtDataPostagem;

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
                $this->setTxtNomeIndicacao ($post['txtNomeIndicacao']);
                $this->setTxtDescricao     ($post['txtDescricao']);
                $this->setDtDataPostagem   ($post['dtDataPostagem']);
                $this->setTxtNomeArquivo   ($post['txtNomeArquivo']);
                $this->setFkResponsavel    ($post['fkResponsavel']);
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
                return $sql->select("SELECT * FROM tblIndicadores;");
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
                return($sql->select("CALL spSaveIndicadores(:ATRIBUTO1, :ATRIBUTO2, :ATRIBUTO3, :ATRIBUTO4, :ATRIBUTO5)",
                        array(
                            ":ATRIBUTO1" => $this->getTxtNomeIndicacao(),
                            ":ATRIBUTO2" => $this->getTxtDescricao(),
                            ":ATRIBUTO3" => $this->getDtDataPostagem(),
                            ":ATRIBUTO4" => $this->getTxtNomeArquivo(),
                            ":ATRIBUTO5" => $this->getFkResponsavel()
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
                return($sql->select("CALL spUpdIndicadores(:ATRIBUTO0, :ATRIBUTO1, :ATRIBUTO2, :ATRIBUTO3, :ATRIBUTO4, :ATRIBUTO5)",
                        array(
                            ":ATRIBUTO0" => $this->getIdIndicadores(),
                            ":ATRIBUTO1" => $this->getTxtNomeIndicacao(),
                            ":ATRIBUTO2" => $this->getTxtDescricao(),
                            ":ATRIBUTO3" => $this->getDtDataPostagem(),
                            ":ATRIBUTO4" => $this->getTxtNomeArquivo(),
                            ":ATRIBUTO5" => $this->getFkResponsavel()
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
                return($sql->query("DELETE FROM tblIndicadores WHERE idIndicadores = :ID", 
                        array(
                            ':ID' => $this->getIdIndicadores()
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