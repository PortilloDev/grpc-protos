<?php 
namespace IvanPortillo\User;

class GetUserResponse extends \Google\Protobuf\Internal\Message {
    private $id;
    private $name;
    private $email;
    
    public function getId() { return $this->id; }
    public function setId($id) { $this->id = $id; }
    public function getName() { return $this->name; }
    public function setName($name) { $this->name = $name; }
    public function getEmail() { return $this->email; }
    public function setEmail($email) { $this->email = $email; }
}