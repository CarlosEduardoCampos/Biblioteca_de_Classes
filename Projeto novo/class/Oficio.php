<?php
    class Oficio
    {
        //Atributos
        private $idOficio;
        private $txtNomeOficio;
        private $txtObjetoOficio;
        private $dtPostagem;   
        private $txtNomeArquivo;
        private $Vereador;
        
        //Objetos
        private $fkResponsavel;


        /**
         * Get the value of idOficio
         */ 
        public function getIdOficio()
        {
            return $this->idOficio;
        }

        /**
         * Set the value of idOficio
         *
         * @return  self
         */ 
        public function setIdOficio($idOficio)
        {
            $this->idOficio = $idOficio;

            return $this;
        }

        /**
         * Get the value of txtNomeOficio
         */ 
        public function getTxtNomeOficio()
        {
            return $this->txtNomeOficio;
        }

        /**
         * Set the value of txtNomeOficio
         *
         * @return  self
         */ 
        public function setTxtNomeOficio($txtNomeOficio)
        {
            $this->txtNomeOficio = $txtNomeOficio;

            return $this;
        }

        /**
         * Get the value of txtObjetoOficio
         */ 
        public function getTxtObjetoOficio()
        {
            return $this->txtObjetoOficio;
        }

        /**
         * Set the value of txtObjetoOficio
         *
         * @return  self
         */ 
        public function setTxtObjetoOficio($txtObjetoOficio)
        {
            $this->txtObjetoOficio = $txtObjetoOficio;

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
         * Get the value of Vereador
         */ 
        public function getVereador()
        {
            return $this->Vereador;
        }

        /**
         * Set the value of Vereador
         *
         * @return  self
         */ 
        public function setVereador($Vereador)
        {
            $this->Vereador = $Vereador;

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
                $this->setTxtNomeOficio   ($post['txtNomeOficio']);
                $this->setTxtObjetoOficio ($post['txtObjetoOficio']);
                $this->setDtPostagem      ($post['dtPostagem']);
                $this->setTxtNomeArquivo  ($post['txtNomeArquivo']);
                $this->setVereador        ($post['Vereador']);
                $this->setFkResponsavel   ($post['fkResponsavel']);
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
                return $sql->select("SELECT * FROM tblOficio;");
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
                echo "Save()";
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
                echo "UPDATE()";
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
                echo "DELETE()";
            }//fim do try

            catch(Exception $e)
            {
                return json_encode(Msg::arrayErros($e));
            }//fim do catch
        }//fim função delete()
    }//fim da classe
?>