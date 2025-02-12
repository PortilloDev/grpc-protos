<?php 

namespace IvanPortillo\User;

interface UserServiceInterface {
    public function GetUser(GetUserRequest $request, \Grpc\ServerContext $context): GetUserResponse;
}