<?php 
    class Reservas
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
    }//fim classe
?>