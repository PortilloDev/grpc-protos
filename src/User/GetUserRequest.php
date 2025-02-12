<?php 
namespace IvanPortillo\User;


class GetUserRequest extends \Google\Protobuf\Internal\Message {
    private $id;
    
    public function getId() {
        return $this->id;
    }
    
    public function setId($id) {
        $this->id = $id;
    }
}