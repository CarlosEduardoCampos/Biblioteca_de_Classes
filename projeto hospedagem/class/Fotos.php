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
            move_uploaded_file($files["txtNomeArquivo"]["tmp_name"],"fotos_quartos/$filename");
        }//fim função upload
    }//fim class
?>