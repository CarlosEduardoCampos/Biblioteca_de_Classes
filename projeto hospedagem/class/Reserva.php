<?php 
    class Reserva
    {
        //Atributos
        private $idReserva;
        private $dtCheck_in;
        private $dtCheck_out;
        private $numValorTotal;
        ##
        //Objetos
        private $fkQuarto;

        /**
         * Get the value of idReserva
         */ 
        public function getIdReserva()
        {
            return $this->idReserva;
        }

        /**
         * Set the value of idReserva
         *
         * @return  self
         */ 
        public function setIdReserva($idReserva)
        {
            $this->idReserva = $idReserva;

            return $this;
        }

        /**
         * Get the value of dtCheck_in
         */ 
        public function getDtCheck_in()
        {
            return $this->dtCheck_in;
        }

        /**
         * Set the value of dtCheck_in
         *
         * @return  self
         */ 
        public function setDtCheck_in($dtCheck_in)
        {
            $this->dtCheck_in = $dtCheck_in;

            return $this;
        }

        /**
         * Get the value of dtCheck_out
         */ 
        public function getDtCheck_out()
        {
            return $this->dtCheck_out;
        }

        /**
         * Set the value of dtCheck_out
         *
         * @return  self
         */ 
        public function setDtCheck_out($dtCheck_out)
        {
            $this->dtCheck_out = $dtCheck_out;

            return $this;
        }

        /**
         * Get the value of numValorTotal
         */ 
        public function getNumValorTotal()
        {
            return $this->numValorTotal;
        }

        /**
         * Set the value of numValorTotal
         *
         * @return  self
         */ 
        public function setNumValorTotal($numValorTotal)
        {
            $this->numValorTotal = $numValorTotal;

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
         * Recebe um array via $_POST e alimenta as
         * variaveis comos dados correspondentes
         */
        public function setDadosForm($post)
        {
            $this->setDtCheck_in ($post["dtCheck_in"]);
            $this->setDtCheck_out($post["dtCheck_out"]);
            $this->setNumValorTotal($post["numValorTotal"]);
        }//fim setDadosForm

        /**
         * Busca um cadastro no banco de dados e retorna um array com os dados
         */
        public function get()
        {
            try{
                $sql = new Sql();
                return($sql->select("SELECT * FROM tblReserva WHERE idReserva = :id",
                        array(
                            ":id" => $this->getIdQuarto()
                        )//fim array
                    )[0]//fim select
                );//fim return
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
                return $sql->select("SELECT * FROM tblReserva");
            }//fim try

            catch (Exception $e)
            {
                return json_encode(Msg::arrayErros($e));
            }//fim catch
        }//fim função listAll

        /**
         * Faz um INSERT no banco de dados
         */
        public function Save()
        {
            try{
                $sql = new Sql();
                return($sql->select("CALL spSaveReserva(:ATRIBUTO1, :ATRIBUTO2, :ATRIBUTO3)",
                    array(
                        ':ATRIBUTO1' => $this->getDtCheck_in(),
                        ':ATRIBUTO2' => $this->getDtCheck_out(),
                        ':ATRIBUTO3' => $this->getNumValorTotal()
                    ))//fim array, select
                );//fim return
            }//fim try

            catch (Execption $e)
            {
                return json_encode(Msg::arrayErros($e))
            }//fim catch
        }//fim função Save

        /**
         * Modifica os dados de um cadastro que e indetificado pelo id 
         * usando um UPDATE
         */
        public function Update()
        {
            try{
                $sql = new Sql();
                return($sql->select("CALL spUpdReserva(:ATRIBUTO0, :ATRIBUTO1, :ATRIBUTO2, :ATRIBUTO3)",
                    array(
                        ':ATRIBUTO0' => $this->getIdReserva(),
                        ':ATRIBUTO1' => $this->getDtCheck_in(),
                        ':ATRIBUTO2' => $this->getDtCheck_out(),
                        ':ATRIBUTO3' => $this->getNumValorTotal()
                    ))//fim array, select
                );//fim return
            }//fim try

            catch (Execption $e)
            {
                return json_encode(Msg::arrayErros($e))
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
                return($sql->query("DELETE FROM tblReserva WHERE idReserva = :ID", 
                    array(
                        ':ID' => $this->getIdReserva()
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