<?php 
namespace IvanPortillo\User;


class User
{
    public function __construct(
        private string $id,
        private string $name,
        private string $email,
        private ?string $password,
    )
    {}
    
   

        /**
         * Get the value of id
         */ 
        public function getId(): string
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id): self
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of name
         */ 
        public function getName(): string
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name): self
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail(): string
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email): self
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword(): string|null
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password): self
        {
                $this->password = $password;

                return $this;
        }
}