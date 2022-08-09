<?php
    class conta
    {
        private $Nome;
        private $Usuario;
        private $Email;

        function ImprimeUsuario()
        {
            echo 'Usuario:'.$this->Usuario. "\n";
        }


                  /**
           * Get the value of nome
           */ 
          public function getNome()
          {
                    return $this->Nome;
          }

          /**
           * Set the value of nome
           *
           * @return  self
           */ 
          public function setNome($nome)
          {
                    $this->Nome = $nome;

                    return $this;
          }

                    /**
           * Get the value of nome
           */ 
          public function getUsuario()
          {
                    return $this->Usuario;
          }

          /**
           * Set the value of nome
           *
           * @return  self
           */ 
          public function setUsuario($usuario)
          {
                    $this->Usuario = $usuario;

                    return $this;
          }

                    /**
           * Get the value of nome
           */ 
          public function getEmail()
          {
                    return $this->Email;
          }

          /**
           * Set the value of nome
           *
           * @return  self
           */ 
          public function setEmail($email)
          {
                    $this->Email = $email;

                    return $this;
          }
    }
?>