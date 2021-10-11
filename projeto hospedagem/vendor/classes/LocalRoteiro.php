<?php
    class LocalRoteiro
    {
        //Atributos
        private $idLocalRoteiro;
        private $txtNome;
        private $txtDescription;
        private $txtLinkGps;
        ##

        /**
         * Get the value of idLocalRoteiro
         */ 
        public function getIdLocalRoteiro()
        {
            return $this->idLocalRoteiro;
        }

        /**
         * Set the value of idLocalRoteiro
         *
         * @return  self
         */ 
        public function setIdLocalRoteiro($idLocalRoteiro)
        {
            $this->idLocalRoteiro = $idLocalRoteiro;

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
         * Get the value of txtDescription
         */ 
        public function getTxtDescription()
        {
            return $this->txtDescription;
        }

        /**
         * Set the value of txtDescription
         *
         * @return  self
         */ 
        public function setTxtDescription($txtDescription)
        {
            $this->txtDescription = $txtDescription;

            return $this;
        }

        /**
         * Get the value of txtLinkGps
         */ 
        public function getTxtLinkGps()
        {
            return $this->txtLinkGps;
        }

        /**
         * Set the value of txtLinkGps
         *
         * @return  self
         */ 
        public function setTxtLinkGps($txtLinkGps)
        {
            $this->txtLinkGps = $txtLinkGps;

            return $this;
        }

        /**
         * Recebe um array via $_POST e alimenta as
         * variaveis comos dados correspondentes
         */
        public function setDadosForm($post)
        {
            $this->setTxtNome       ($post["txtNome"]);
            $this->setTxtDescription($post["txtDescripton"]);
            $this->setTxtLinkGps    ($post["txtLinkGps"]);
        }//fim setDadosForm

        /**
         * Busca um cadastro no banco de dados e retorna um array com os dados
         */
        public function get()
        {
            $sql = new Sql();
            return($sql->select("SELECT * FROM tblLocalRoteiro WHERE idLocalRoteiro = :id",
                array(
                    ':id' => getIdLocalRoteiro()
                ))[0]//fim array,select
            );//fim return
        }//fm função get

        /**
         * Busca todos os dados de uma tabela no banco de dados
         * e retorna um array
         */
        public static function listAll()
        {
            try{
                $sql = new Sql();
                return $sql->select("SELECT * FROM tblLocalRoteiro");
            }//fim try
            
            catch (Excption $e)
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
                return($sql->select("CALL spSaveLocalRoteiro(:ATRIBUTO1, :ATRIBUTO2, :ATRIBUTO3)",
                    array(
                        ':ATRIBUTO1' => $this->getTxtNome(),
                        ':ATRIBUTO2' => $this->getTxtDescription(),
                        ':ATRIBUTO3' => $this->getTxtLinkGps()
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
                return($sql->select("CALL spUpdLocalRoteiro(:ATRIBUTO0, :ATRIBUTO1, :ATRIBUTO2, :ATRIBUTO3)",
                    array(
                        ':ATRIBUTO0' => $THIS->getIdLocalRoteiro(),
                        ':ATRIBUTO1' => $this->getTxtNome(),
                        ':ATRIBUTO2' => $this->getTxtDescription(),
                        ':ATRIBUTO3' => $this->getTxtLinkGps()
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
                return($sql->query("DELETE FROM tblLocalRoteiro WHERE idLocalRoteiro = :ID", 
                    array(
                        ':ID' => $this->getIdLocalRoteiro()
                    ))//fim array, query
                );//fim return
            }//fim do try

            catch(Exception $e)
            {
                return json_encode(Msg::arrayErros($e));
            }//fim do catch
        }//fim função delete
    }//fim class
?>