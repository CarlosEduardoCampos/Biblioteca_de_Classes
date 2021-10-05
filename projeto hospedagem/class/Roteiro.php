<?php 
    class Roteiro
    {
        //Atributos
        private $idRoteiro;
        private $txtNome;
        private $txtDescricao;
        # intPasseio
        # 1 -> 4x4
        # 2 -> Lancha
        private $intPasseio;
        private $intDuracao;
        private $numValorPessoa;
        ##
        /**
         * Get the value of idRoteiro
         */ 
        public function getIdRoteiro()
        {
            return $this->idRoteiro;
        }

        /**
         * Set the value of idRoteiro
         *
         * @return  self
         */ 
        public function setIdRoteiro($idRoteiro)
        {
            $this->idRoteiro = $idRoteiro;

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
         * Get the value of intPasseio
         */ 
        public function getIntPasseio()
        {
            return $this->intPasseio;
        }

        /**
         * Set the value of intPasseio
         *
         * @return  self
         */ 
        public function setIntPasseio($intPasseio)
        {
            $this->intPasseio = $intPasseio;

            return $this;
        }

        /**
         * Get the value of intDuracao
         */ 
        public function getIntDuracao()
        {
            return $this->intDuracao;
        }

        /**
         * Set the value of intDuracao
         *
         * @return  self
         */ 
        public function setIntDuracao($intDuracao)
        {
            $this->intDuracao = $intDuracao;

            return $this;
        }

        /**
         * Get the value of numValorPessoa
         */ 
        public function getNumValorPessoa()
        {
            return $this->numValorPessoa;
        }

        /**
         * Set the value of numValorPessoa
         *
         * @return  self
         */ 
        public function setNumValorPessoa($numValorPessoa)
        {
            $this->numValorPessoa = $numValorPessoa;

            return $this;
        }

        /**
         * Recebe um array via $_POST e alimenta as
         * variaveis comos dados correspondentes
         */
        public function setDadosForm($post)
        {
            $this->setTxtNome          ($post["txtNome"]);
            $this->setTxtDescricao     ($post["txtDescricao"]);
            $this->setIntPasseio       ($post["intPasseio"]);
            $this->setIntDuracao       ($post["intDuracao"]);
            $this->setNumValoresPessoa ($post["numValoresPessoa"]);
        }//fim função setDadosForm

        /**
         * Busca um cadastro no banco de dados e retorna um array com os dados
         */
        public function get()
        {
            try{
                $sql = new Sql();
                return($sql->select("SELECT * FROM tblRoteiro WHERE idRoteiro = :id",
                        array(
                            ':id' => getIdRoteiro()
                        )//fim array
                    )[0]//fim select
                );//fim return
            }//fim try
            
            catch (Exeption $e)
            {
               return json_encode(Msg::arrayErros($e));
            }//fim catch
        }//fim função get
    }//fim classe
?>