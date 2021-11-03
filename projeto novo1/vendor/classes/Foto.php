<?php
    class Foto
    {
        //atributos
        private $idFoto;
        private $txtFoto;

        //objeto
        private $fkLoja;

        /**
         * Get the value of idFoto
         */ 
        public function getIdFoto()
        {
            return $this->idFoto;
        }

        /**
         * Set the value of idFoto
         *
         * @return  self
         */ 
        public function setIdFoto($idFoto)
        {
            $this->idFoto = $idFoto;

            return $this;
        }

        /**
         * Get the value of txtFoto
         */ 
        public function getTxtFoto()
        {
            return $this->txtFoto;
        }

        /**
         * Set the value of txtFoto
         *
         * @return  self
         */ 
        public function setTxtFoto($txtFoto)
        {
            $this->txtFoto = $txtFoto;

            return $this;
        }

        /**
         * Get the value of fkLoja
         */ 
        public function getFkLoja()
        {
            return $this->fkLoja;
        }

        /**
         * Set the value of fkLoja
         *
         * @return  self
         */ 
        public function setFkLoja($fkLoja)
        {
            $this->fkLoja = $fkLoja;

            return $this;
        }

        /**
         * Recebe um arquivo eo salva
        */
        public function Upload($files)
        {
            $filename = $files["txtFoto"]["name"];
            move_uploaded_file($files["txtFoto"]["tmp_name"],"res/documentos/loja/$filename");
        }

        /**
         * Recebe um array via $_POST e alimenta as
         * variaveis comos dados correspondentes
         */
        public function setDadosForm($post)
        {
            $this->setTxtFoto ($post['txtFoto']);
        }

        /**
         * Busca um cadastro no banco de dados e retorna um array com os dados
         */
        public function get()
        {
            try{
                $sql = new Sql();
                return($sql->select("SELECT * FROM tblFoto WHERE idFoto = :id",
                [//array
                    ':id' => $this->getIdFoto()
                ]));
            }
            
            catch (Exception $e)
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
            try{
                $sql = new Sql();
                return($sql->select("SELECT * FROM tblFoto INNER JOIN tblLoja ON tblFoto.fkLoja = tblLoja.idLoja"));
            }
            
            catch (Exception $e)
            {
                return json_encode(Msg::arrayErros($e));
            }
        }

        /**
         * Faz um INSERT no banco de dados
         */
        public function save()
        {
            try{
                $sql = new Sql();
                return($sql->select("CALL spSaveFoto(:ATRIBUTO0, :ATRIBUTO1, :ATRIBUTO2)",
                [//array
                    ':ATRIBUTO0' => $this->getIdFoto(),
                    ':ATRIBUTO1' => $this->getFkLoja(),
                    ':ATRIBUTO2' => $this->getTxtFoto()
                ]));
            }
            
            catch (Exception $e)
            {
                return json_encode(Msg::arrayErros($e));
            }
        }

        public function updateFotos()
        {
            try{
                $sql = new Sql();
                return($sql->select("UPDATE tblFoto set fkLoja = :ATRIBUTO1, txtFoto = :ATRIBUTO2 where idFoto =:ATRIBUTO0",
                        array(
                            ":ATRIBUTO0" => $this->getIdFoto(),
                            ":ATRIBUTO1" => $this->getFkLoja(),
                            ":ATRIBUTO2" => $this->getTxtFoto()
                        )//fim array
                    )//fim função select
                );//fim return
            }//fim do try

            catch(Exception $e)
            {
                return json_encode(Msg::arrayErros($e));
            }//fim do catch
        }//fim funçõa Update
    }
?>