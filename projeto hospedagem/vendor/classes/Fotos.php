<?php 
    class Fotos
    {
        //Atributos
        private $txtNomeFoto;

        //Objeto
        private $fkQuarto;

        /**
         * Get the value of txtNomeFoto
         */ 
        public function getTxtNomeFoto()
        {
            return $this->txtNomeFoto;
        }

        /**
         * Set the value of txtNomeFoto
         *
         * @return  self
         */ 
        public function setTxtNomeFoto($txtNomeFoto)
        {
            $this->txtNomeFoto = $txtNomeFoto;

            return $this;
        }

        /**
         * Get the value of fkQuarto
         */ 
        public function getFkQuarto()
        {
            return $this->fkQuarto;
        }

        /**
         * Set the value of fkQuarto
         *
         * @return  self
         */ 
        public function setFkQuarto($fkQuarto)
        {
            $this->fkQuarto = $fkQuarto;

            return $this;
        }

        /**
         * Recebe um arquivo eo salva
        */
        public function Upload($files)
        {
            $filename = $files["txtNomeArquivo"]["name"];
            move_uploaded_file($files["txtNomeArquivo"]["tmp_name"],"/res/fotos_quartos/$filename");
        }//fim função upload

        /**
         * Busca todos os dados de uma tabela no banco de dados
         * e retorna um array
         */
        public static function listAll()
        {
            try{
                $sql = new Sql();
                return $sql->select("SELECT * FROM tblFotos");
            }//fim try

            catch (Exception $e)
            {
                json_encode(Msg::arrayErros($e));
            }//fim catch
        }//fim função litAll

        /**
         * Faz um INSERT no banco de dados
         */
        public function Save()
        {
            try{
                $sql = new Sql();
                return($sql->select("CALL spSaveFotos(:ATRIBUTO1, :ATRIBUTO2)", 
                    array(
                        ':ATRIBUTO1' => $this->getTxtNome(),
                        ':ATRIBUTO2' => $this->getFkLocal()
                    ))//fim array, select
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
                return($sql->query("DELETE FROM tblFotos WHERE idFotos = :ID", 
                    array(
                        ':ID' => $this->getIdFotos()
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