<?php 
    class City{
        //Atributos
        private $idCity;
        private $txtCity;
        private $txtState;

        /**
         * Get the value of idCity
         */ 
        public function getIdCity()
        {
			return $this->idCity;
        }

        /**
         * Set the value of idCity
         *
         * @return  self
         */ 
        public function setIdCity($idCity)
        {
			$this->idCity = $idCity;

			return $this;
        }

        /**
         * Get the value of txtCity
         */ 
        public function getTxtCity()
        {
			return $this->txtCity;
        }

        /**
         * Set the value of txtCity
         *
         * @return  self
         */ 
        public function setTxtCity($txtCity)
        {
			$this->txtCity = $txtCity;

			return $this;
        }

        /**
         * Get the value of txtState
         */ 
        public function getTxtState()
        {
			return $this->txtState;
        }

        /**
         * Set the value of txtState
         *
         * @return  self
         */ 
        public function setTxtState($txtState)
        {
			$this->txtState = $txtState;

			return $this;
        }

        //Cria array para tratamento de erros
        public function arrayErros($e)
        {
			return(array(
					'mensagem' => $e->getMessage(),//mensagem de erro
					'linha'    => $e->getLine(),   //linha do erro
					'file'     => $e->getFile(),   //arquivo do erro
					'code'     => $e->getCode()    //numero do erro
					)//fim array
			);
        }

		public function saveCDCity()
		{
			try {
				$sql = new Sql();
				return($sql->select("CALL spCadCity(:ATRIBUTO1, :ATRIBUTO2)", 
						array(
							":ATRIBUTO1" => getTxtCity(),
							":ATRIBUTO2" => getTxtState() 
						)//fim array
					)//fim select
				);//fim return
			}//fim do try

			catch (Exception $e) {
				return json_encode(arrayErros($e));
			}//fim do catch
		}//fim da função saveCadCity()

		public function saveUpdCity()
		{
			try {
				$sql = new Sql();
				return($sql->select("CALL spUpdCity(:RTIBUTO0, :ATRIBUTO1, :ATRIBUTO2)", 
						array(
							":ATRIBUTO0" => getIdCity(),
							":ATRIBUTO1" => getTxtCity(),
							":ATRIBUTO2" => getTxtState() 
						)//fim array
					)//fim select
				);//fim return
			}//fim do try

			catch (Exception $e) {
				return json_encode(arrayErros($e));
			}//fim do catch
		}//fim da função saveCity()

    }//fim da class
?>