<?php
    class Reference{
        private $idReference;
        private $boolUsed;

        /**
         * Get the value of idReference
         */ 
        public function getIdReference()
        {
                return $this->idReference;
        }

        /**
         * Set the value of idReference
         *
         * @return  self
         */ 
        public function setIdReference($idReference)
        {
                $this->idReference = $idReference;

                return $this;
        }

        /**
         * Get the value of boolUsed
         */ 
        public function getBoolUsed()
        {
                return $this->boolUsed;
        }

        /**
         * Set the value of boolUsed
         *
         * @return  self
         */ 
        public function setBoolUsed($boolUsed)
        {
                $this->boolUsed = $boolUsed;

                return $this;
        }
    }

?>