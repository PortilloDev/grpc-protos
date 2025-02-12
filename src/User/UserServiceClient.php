<?php 
namespace IvanPortillo\User;

use IvanPortillo\User\GetUserRequest;


class UserServiceClient extends \Grpc\BaseStub 
{
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }
    
    public function GetUser(GetUserRequest $argument, $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.UserService/GetUser',
            $argument,
            ['\User\GetUserResponse', 'decode'],
            $metadata, $options);
    }
}