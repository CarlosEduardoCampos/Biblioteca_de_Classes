<?php 
    interface ClassInterface
    {
        /**
         * Recebe um array via $_POST e alimenta as
         * variaveis com os dados correspondentes
         */
        public function setDadosForm($post);

        /**
         * Busca um cadastro no banco de dados e retorna um array com os dados
         */
        public function get();

        /**
         * Busca todos os dados de uma tabela no banco de dados
         * e retorna um array
         */
        public static function listAll();

        /**
         * id == 0 || id < 0
         * Faz um INSERT no banco de dados.
         * 
         * id > 0
         * Faz um UPDATE no cadatro de id correspondente.
         */
        public function save();

        /**
         * Elimina um cadastro do banco de dados que e 
         * indetificado pelo id 
         */
        public function delete();
    }//fim interface
?>