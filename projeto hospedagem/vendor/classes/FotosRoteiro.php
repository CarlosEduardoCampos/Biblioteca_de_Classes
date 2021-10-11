<?php
    class FotosRoteiro
    {
        //Atributos
        private $idFotoRoteiro;
        private $txtNome;

        //objetos
        private $fkLocal;
        ##

        /**
         * Get the value of idFotoRoteiro
         */ 
        public function getIdFotoRoteiro()
        {
            return $this->idFotoRoteiro;
        }

        /**
         * Set the value of idFotoRoteiro
         *
         * @return  self
         */ 
        public function setIdFotoRoteiro($idFotoRoteiro)
        {
            $this->idFotoRoteiro = $idFotoRoteiro;

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
         * Get the value of fkLocal
         */ 
        public function getFkLocal()
        {
            return $this->fkLocal;
        }

        /**
         * Set the value of fkLocal
         *
         * @return  self
         */ 
        public function setFkLocal($fkLocal)
        {
            $this->fkLocal = $fkLocal;

            return $this;
        }

        /**
         * Recebe um arquivo eo salva
        */
        public function Upload($files)
        {
            $filename = $files["txtNome"]["name"];
            move_uploaded_file($files["txtNome"]["tmp_name"],"/res/fotos_roteiro/$filename");
        }//fim função upload

        /**
         * Busca um cadastro no banco de dados e retorna um array com os dados
         */
        public function get()
        {
            try{
                $sql = new Sql();
                return($sql->select("SELECT * FROM tblFotosRoteiro WHERE idFotosRoteiro = :id",
                    array(
                        ':id' => getIdFotoRoteiro()
                    ))[0]//fim array, select
                );//fim return
            }//fim try
            
            catch (Exeption $e)
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
                return $sql->select("SELECT * FROM tblFotosRoteiro");
            }//fim try

            catch (Exception $e)
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
                return($sql->select("CALL spSaveFotosRoteiro(:ATRIBUTO1, :ATRIBUTO2)", 
                    array(
                        ':ATRIBUTO1' => $this->getTxtNome(),
                        ':ATRIBUTO2' => $this->getFkLocal()
                    ))//fim select
                );//fim return
            }//fim try

            catch (Execption $e)
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
                return($sql->query("DELETE FROM tblFotosRoteiro WHERE idFotosRoteiro = :ID", 
                    array(
                        ':ID' => $this->getIdFotosRoteiro()
                    ))//fim array, query
                );//fim return
            }//fim do try

            catch(Exception $e)
            {
                return json_encode(Msg::arrayErros($e));
            }//fim do catch
        }//fim função delete
    }//fim classe
?>