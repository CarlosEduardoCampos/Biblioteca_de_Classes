<?php 
    class PescasReparo
    {
        //Atributos 
        private $idReparo;
        private $nomePeca;
        private $valorPeca;
        private $origem;

        //objeto
        private $fkSmartphone;

        /**
         * Recebe um array via $_POST e alimenta as
         * variaveis com os dados correspondentes
         */
        public function setDadosForm($post)
        {
            $this->setNomePeca     ($post['Nome']);
            $this->setValorPeca    ($post['Valor']);
            $this->setOrigem       ($post['Origem']);
            $this->setFkSmartphone ($post['Smartphone']);
        }

        /**
         * Busca um cadastro no banco de dados e retorna um array com os dados
         */
        public function get()
        {
            $sql = new Sql();
            try{
                return($sql->select("SELECT * FROM tblPescasReparo WHERE idReparo = :id",
                [
                    ':id'=> $this->getIdReparo()
                ])[0]);
            }
            catch (Error $e)
            {
                return json_encode(Msg::arrayErros($e));
            }
        }

        /**
         * Busca todos os dados de uma tabela no banco de dados
         * e retorna um array
         */
        public static function listAll()
        {
            $sql = new Sql();
            try{
                return($sql->select("SELECT * FROM tblPescasReparo"));
            }
            catch (Error $e)
            {
                return json_encode(Msg::arrayErros($e));
            }
        }

        /**
         * id == 0 || id < 0
         * Faz um INSERT no banco de dados.
         * 
         * id > 0
         * Faz um UPDATE no cadatro de id correspondente.
         */
        public function save()
        {
            $sql = new Sql();
            try{
                return($sql->select("CALL sp_SavePescasReparo(:ATRIBUTO00, :ATRIBUTO01, :ATRIBUTO02, :ATRIBUTO03, :ATRIBUTO04)",
                [
                    ':ATRIBUTO00' => $this->getIdReparo(),
                    ':ATRIBUTO01' => $this->getNomePeca(),
                    ':ATRIBUTO02' => $this->getValorPeca(),
                    ':ATRIBUTO03' => $this->getFkSmartphone(),
                    ':ATRIBUTO04' => $this->getOrigem()
                ]));
            }
            catch (Error $e)
            {
                return json_encode(Msg::arrayErros($e));
            }
        }

        /**
         * Elimina um cadastro do banco de dados que e 
         * indetificado pelo id 
         */
        public function delete()
        {
            $sql = new Sql();
            try{
                return($sql->query("DELETE FROM tblPescasReparo WHERE idReparo = :id",
                [
                    ':id' => $this->getIdReparo()
                ]));
            }
            catch (Error $e)
            {
                return json_encode(Msg::arrayErros($e));
            }
        }

        /**
         * Get the value of idReparo
         */ 
        public function getIdReparo()
        {
            return $this->idReparo;
        }

        /**
         * Set the value of idReparo
         *
         * @return  self
         */ 
        public function setIdReparo($idReparo)
        {
            $this->idReparo = $idReparo;

            return $this;
        }

        /**
         * Get the value of nomePeca
         */ 
        public function getNomePeca()
        {
            return $this->nomePeca;
        }

        /**
         * Set the value of nomePeca
         *
         * @return  self
         */ 
        public function setNomePeca($nomePeca)
        {
            $this->nomePeca = $nomePeca;

            return $this;
        }

        /**
         * Get the value of valorPeca
         */ 
        public function getValorPeca()
        {
            return $this->valorPeca;
        }

        /**
         * Set the value of valorPeca
         *
         * @return  self
         */ 
        public function setValorPeca($valorPeca)
        {
            $this->valorPeca = $valorPeca;

            return $this;
        }

        /**
         * Get the value of origem
         */ 
        public function getOrigem()
        {
            return $this->origem;
        }

        /**
         * Set the value of origem
         *
         * @return  self
         */ 
        public function setOrigem($origem)
        {
            $this->origem = $origem;

            return $this;
        }

        /**
         * Get the value of fkSmartphone
         */ 
        public function getFkSmartphone()
        {
            return $this->fkSmartphone;
        }

        /**
         * Set the value of fkSmartphone
         *
         * @return  self
         */ 
        public function setFkSmartphone($fkSmartphone)
        {
            $this->fkSmartphone = $fkSmartphone;

            return $this;
        }
    }
    
?>