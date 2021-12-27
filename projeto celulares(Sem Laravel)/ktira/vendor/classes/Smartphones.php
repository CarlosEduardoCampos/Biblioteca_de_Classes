<?php 
    class Smartphones
    {
        //Atributos
        private $idCelular;
        private $marca;
        private $modelo;
        private $cor;
        private $memoria;
        private $email;
        private $valorReparo;
        private $valorCusto;
        private $origem;
        private $codigoOrigem;
        private $problema;
        private $despesaVenda;
        private $dataVenda;
        private $valorAcessorios;
        private $valorVenda;
        private $intStatus;
        /**
         * Recebe um array via $_POST e alimenta as
         * variaveis com os dados correspondentes
         */
        public function setDadosForm($post)
        {
            $this->setMarca           ($post['Marca']);
            $this->setModelo          ($post['Modelo']);
            $this->setCor             ($post['Cor']);
            $this->setMemoria         ($post['Memoria']);
            $this->setEmail           ($post['Email']);
            $this->setValorReparo     ($post['Reparo']);
            $this->setValorCusto      ($post['Custo']);
            $this->setOrigem          ($post['Origem']);
            $this->setCodigoOrigem    ($post['CodigoOrigem']);
            $this->setProblema        ($post['Problema']);
            $this->setDespesaVenda    ($post['Despesa']);
            $this->setDataVenda       ($post['DataVenda']);
            $this->setValorAcessorios ($post['Acessorios']);
            $this->setValorVenda      ($post['Venda']);
            $this->setIntStatus       (1);
        }

        /**
         * Busca um cadastro no banco de dados e retorna um array com os dados
         */
        public function get()
        {
            $sql = new Sql();
            try{
                return($sql->select("SELECT * FROM tblSmartphones WHERE idCelular = :id",
                [
                    ':id'=>$this->getIdCelular()
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
                return($sql->select("SELECT * FROM tblSmartphones"));
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
                return($sql->select("Call sp_SaveSmartphone(:ATRIBUTO00, :ATRIBUTO01, :ATRIBUTO02, :ATRIBUTO03, :ATRIBUTO04, :ATRIBUTO05, :ATRIBUTO06, :ATRIBUTO07, :ATRIBUTO08, :ATRIBUTO09, :ATRIBUTO10, :ATRIBUTO11, :ATRIBUTO12, :ATRIBUTO13, :ATRIBUTO14, :ATRIBUTO15)",
                [
                    ':ATRIBUTO00' => $this->getIdCelular(),
                    ':ATRIBUTO01' => $this->getMarca(),
                    ':ATRIBUTO02' => $this->getModelo(),
                    ':ATRIBUTO03' => $this->getCor(),
                    ':ATRIBUTO04' => $this->getMemoria(),
                    ':ATRIBUTO05' => $this->getEmail(),
                    ':ATRIBUTO06' => $this->getValorReparo(),
                    ':ATRIBUTO07' => $this->getValorCusto(),
                    ':ATRIBUTO08' => $this->getOrigem(),
                    ':ATRIBUTO09' => $this->getCodigoOrigem(),
                    ':ATRIBUTO10' => $this->getProblema(),
                    ':ATRIBUTO11' => $this->getDespesaVenda(),
                    ':ATRIBUTO12' => $this->getDataVenda(),
                    ':ATRIBUTO13' => $this->getValorAcessorios(),
                    ':ATRIBUTO14' => $this->getValorVenda(),
                    ':ATRIBUTO15' => $this->getIntStatus()
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
                return($sql->select("DELETE tblSmartphones WHERE idCelular = :id",
                [
                    ':id'=>$this->getIdCelular()
                ]));
            }
            catch (Error $e)
            {
                return json_encode(Msg::arrayErros($e));
            }
        }

        /**
         * Get the value of idCelular
         */ 
        public function getIdCelular()
        {
            return $this->idCelular;
        }

        /**
         * Set the value of idCelular
         *
         * @return  self
         */ 
        public function setIdCelular($idCelular)
        {
            $this->idCelular = $idCelular;

            return $this;
        }

        /**
         * Get the value of marca
         */ 
        public function getMarca()
        {
            return $this->marca;
        }

        /**
         * Set the value of marca
         *
         * @return  self
         */ 
        public function setMarca($marca)
        {
            $this->marca = $marca;

            return $this;
        }

        /**
         * Get the value of modelo
         */ 
        public function getModelo()
        {
            return $this->modelo;
        }

        /**
         * Set the value of modelo
         *
         * @return  self
         */ 
        public function setModelo($modelo)
        {
            $this->modelo = $modelo;

            return $this;
        }

        /**
         * Get the value of cor
         */ 
        public function getCor()
        {
            return $this->cor;
        }

        /**
         * Set the value of cor
         *
         * @return  self
         */ 
        public function setCor($cor)
        {
            $this->cor = $cor;

            return $this;
        }

        /**
         * Get the value of memoria
         */ 
        public function getMemoria()
        {
            return $this->memoria;
        }

        /**
         * Set the value of memoria
         *
         * @return  self
         */ 
        public function setMemoria($memoria)
        {
            $this->memoria = $memoria;

            return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
            return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
            $this->email = $email;

            return $this;
        }

        /**
         * Get the value of valorReparo
         */ 
        public function getValorReparo()
        {
            return $this->valorReparo;
        }

        /**
         * Set the value of valorReparo
         *
         * @return  self
         */ 
        public function setValorReparo($valorReparo)
        {
            $this->valorReparo = $valorReparo;

            return $this;
        }

        /**
         * Get the value of valorCusto
         */ 
        public function getValorCusto()
        {
            return $this->valorCusto;
        }

        /**
         * Set the value of valorCusto
         *
         * @return  self
         */ 
        public function setValorCusto($valorCusto)
        {
            $this->valorCusto = $valorCusto;

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
         * Get the value of codigoOrigem
         */ 
        public function getCodigoOrigem()
        {
            return $this->codigoOrigem;
        }

        /**
         * Set the value of codigoOrigem
         *
         * @return  self
         */ 
        public function setCodigoOrigem($codigoOrigem)
        {
            $this->codigoOrigem = $codigoOrigem;

            return $this;
        }

        /**
         * Get the value of problema
         */ 
        public function getProblema()
        {
            return $this->problema;
        }

        /**
         * Set the value of problema
         *
         * @return  self
         */ 
        public function setProblema($problema)
        {
            $this->problema = $problema;

            return $this;
        }

        /**
         * Get the value of despesaVenda
         */ 
        public function getDespesaVenda()
        {
            return $this->despesaVenda;
        }

        /**
         * Set the value of despesaVenda
         *
         * @return  self
         */ 
        public function setDespesaVenda($despesaVenda)
        {
            $this->despesaVenda = $despesaVenda;

            return $this;
        }

        /**
         * Get the value of dataVenda
         */ 
        public function getDataVenda()
        {
            return $this->dataVenda;
        }

        /**
         * Set the value of dataVenda
         *
         * @return  self
         */ 
        public function setDataVenda($dataVenda)
        {
            $this->dataVenda = $dataVenda;

            return $this;
        }

        /**
         * Get the value of valorAcessorios
         */ 
        public function getValorAcessorios()
        {
            return $this->valorAcessorios;
        }

        /**
         * Set the value of valorAcessorios
         *
         * @return  self
         */ 
        public function setValorAcessorios($valorAcessorios)
        {
            $this->valorAcessorios = $valorAcessorios;

            return $this;
        }

        /**
         * Get the value of valorVenda
         */ 
        public function getValorVenda()
        {
            return $this->valorVenda;
        }

        /**
         * Set the value of valorVenda
         *
         * @return  self
         */ 
        public function setValorVenda($valorVenda)
        {
            $this->valorVenda = $valorVenda;

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
    }
    
?>