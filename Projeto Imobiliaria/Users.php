<?php 
    class Users{
        private $idUsers;
        private $txtName;
        private $txtLogin;
        private $txPassword;

        /**
         * Get the value of idUsers
         */ 
        public function getIdUsers()
        {
                return $this->idUsers;
        }

        /**
         * Set the value of idUsers
         *
         * @return  self
         */ 
        public function setIdUsers($idUsers)
        {
                $this->idUsers = $idUsers;

                return $this;
        }

        /**
         * Get the value of txtName
         */ 
        public function getTxtName()
        {
                return $this->txtName;
        }

        /**
         * Set the value of txtName
         *
         * @return  self
         */ 
        public function setTxtName($txtName)
        {
                $this->txtName = $txtName;

                return $this;
        }

        /**
         * Get the value of txtLogin
         */ 
        public function getTxtLogin()
        {
                return $this->txtLogin;
        }

        /**
         * Set the value of txtLogin
         *
         * @return  self
         */ 
        public function setTxtLogin($txtLogin)
        {
                $this->txtLogin = $txtLogin;

                return $this;
        }

        /**
         * Get the value of txPassword
         */ 
        public function getTxPassword()
        {
                return $this->txPassword;
        }

        /**
         * Set the value of txPassword
         *
         * @return  self
         */ 
        public function setTxPassword($txPassword)
        {
                $this->txPassword = $txPassword;

                return $this;
        }
    }

?>