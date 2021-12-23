<?php 
    class Loja
    {
        //Atributos
        private $idLoja;
        private $txtNome;
        private $txtDescricao;
        private $txtEndereco;
        private $txtBairro;
        private $txtNumero;
        private $txtCidade;
        private $txtEstado;
        
        /**
         * Get the value of idLoja
         */ 
        public function getIdLoja()
        {
            return $this->idLoja;
        }

        /**
         * Set the value of idLoja
         *
         * @return  self
         */ 
        public function setIdLoja($idLoja)
        {
            $this->idLoja = $idLoja;

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
         * Get the value of txtEndereco
         */ 
        public function getTxtEndereco()
        {
            return $this->txtEndereco;
        }

        /**
         * Set the value of txtEndereco
         *
         * @return  self
         */ 
        public function setTxtEndereco($txtEndereco)
        {
            $this->txtEndereco = $txtEndereco;

            return $this;
        }

        /**
         * Get the value of txtBairro
         */ 
        public function getTxtBairro()
        {
            return $this->txtBairro;
        }

        /**
         * Set the value of txtBairro
         *
         * @return  self
         */ 
        public function setTxtBairro($txtBairro)
        {
            $this->txtBairro = $txtBairro;

            return $this;
        }

        /**
         * Get the value of txtNumero
         */ 
        public function getTxtNumero()
        {
            return $this->txtNumero;
        }

        /**
         * Set the value of txtNumero
         *
         * @return  self
         */ 
        public function setTxtNumero($txtNumero)
        {
            $this->txtNumero = $txtNumero;

            return $this;
        }

        /**
         * Get the value of txtCidade
         */ 
        public function getTxtCidade()
        {
            return $this->txtCidade;
        }

        /**
         * Set the value of txtCidade
         *
         * @return  self
         */ 
        public function setTxtCidade($txtCidade)
        {
            $this->txtCidade = $txtCidade;

            return $this;
        }

        /**
         * Get the value of txtEstado
         */ 
        public function getTxtEstado()
        {
            return $this->txtEstado;
        }

        /**
         * Set the value of txtEstado
         *
         * @return  self
         */ 
        public function setTxtEstado($txtEstado)
        {
            $this->txtEstado = $txtEstado;

            return $this;
        }

         /**
         * Recebe um array via $_POST e alimenta as
         * variaveis com os dados correspondentes
         */
        public function setDadosForm($post)
        {
            $this->setTxtNome      ($post['Nome']);
            $this->setTxtDescricao ($post['Descricao']);
            $this->setTxtEndereco  ($post['Endereco']);
            $this->setTxtBairro    ($post['Bairro']);
            $this->setTxtNumero    ($post['Numero']);
            $this->setTxtCidade    ($post['Cidade']);
            $this->setTxtEstado    ($post['Estado']);
        }//fim função setDadosForm

        /**
         * Busca um cadastro no banco de dados e retorna um array com os dados
         */
        public function get()
        {
            try{
                $sql = new Sql();
                return($sql->select("SELECT * FROM tblLoja WHERE :id",
                [//array
                    ':id' => $this->getIdLoja()
                ])[0]);//fim array, select, return
            }//fim try

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
                return $sql->select("SELECT * FROM tblLoja ORDER BY txtNome");
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
                return($sql->select("CALL spSaveLoja(:ATRIBUTO0, :ATRIBUTO1, :ATRIBUTO2, :ATRIBUTO3, :ATRIBUTO4, :ATRIBUTO5, :ATRIBUTO6)",
                [//array
                    ':ATRIBUTO0' => $this->getTxtNome(),
                    ':ATRIBUTO1' => $this->getTxtDescricao(),
                    ':ATRIBUTO2' => $this->getTxtEndereco(),
                    ':ATRIBUTO3' => $this->getTxtBairro(),
                    ':ATRIBUTO4' => $this->getTxtNumero(),
                    ':ATRIBUTO5' => $this->getTxtCidade(),
                    ':ATRIBUTO6' => $this->getTxtEstado()
                ]));//fim array, select, return
            }//fim try

            catch (Exception $e)
            {
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
                return($sql->query("DELETE FROM tblLoja WHERE idLoja = :id",
                [//array
                    ':id' => $this->getIdLoja()
                ]));//fim array, query, return
            }//fim try
            
            catch (Exception $e)
            {
                json_encode(Msg::arrayErros($e));
            }
        }//fim funcao delete
    }//fim classe
?>