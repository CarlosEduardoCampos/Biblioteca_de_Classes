<?php 
    class Categoria
    {
        private $idCategoria;
        private $txtNome;
        
        /**
         * Get the value of idCategoria
         */ 
        public function getIdCategoria()
        {
            return $this->idCategoria;
        }

        /**
         * Set the value of idCategoria
         *
         * @return  self
         */ 
        public function setIdCategoria($idCategoria)
        {
            $this->idCategoria = $idCategoria;

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
         * Recebe um array via $_POST e alimenta as
         * variaveis com os dados correspondentes
         */
        public function setDadosForm($post)
        {
            $this->setTxtNome($post['Nome']);
        }//fim funçãoset dados form

        /**
         * Busca um cadastro no banco de dados e retorna um array com os dados
         */
        public function get()
        {
            try{
                $sql = new Sql();
                return($sql->select("SELECT * FROM tblCategoria WHERE :id",
                [//array
                    ':id' => $this->getIdCategoria()
                ])[0]);
            }//fim try
            
            catch (Exception $e)
            {
                json_encode(Msg::arrayErros($e));
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
                return $sql->select("SELECT * FROM tblCategoria ORDER BY txtNome");
            }//fim try

            catch (Exception $e)
            {
                json_encode(Msg::arrayErros($e));
            }//fim catch
        }//fim função listAll

        /**
         * id == 0 || id < 0
         * Faz um INSERT no banco de dados.
         * 
         * id > 0
         * Faz um UPDATE no cadatro de id correspondente.
         */
        public function save()
        {
            try{
                $sql = new Sql();
                return($sql->select("CALL spSaveCategoria(:ATRIBUTO0, :ATRIBUTO1)",
                [//array
                    ':ATRIBUTO0' => $this->getIdCategoria(),
                    ':ATRIBUTO1' => $this->getTxtNome()
                ]));//fim array, select, return
            }//fim try
            
            catch (Exception $e) {
                json_encode(Msg::arrayErros($e));
            }//fim catch
        }//fim função save

        /**
         * Elimina um cadastro do banco de dados que e 
         * indetificado pelo id 
         */
        public function delete()
        {
            try{
                $sql = new Sql();
                return($sql->query("DELETE FROM tblCategoria WHERE idCategoria = :id",
                [
                    ':id' => $this->getIdCategoria()
                ]));
            }
            catch (Exception $e) {
                json_encode(Msg::arrayErros($e));
            }
        }
    }//fim class
?>