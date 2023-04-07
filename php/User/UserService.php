<?php

namespace User;

class UserService
{
    public function Search(
        UserRequest $request,
        \Grpc\ServerContext $context
    ): ?UserResponse {
        echo "load grpc UserService", PHP_EOL;
        $id = $request->getId();
        var_dump($id);
        $response = new UserResponse();
        $response->setUsername("Hello xiaoming");
        $response->setArea(["1002", "1003"]);
        $response->setId(200);
        return $response;
    }
    public final function getMethodDescriptors(): array
    {
        return [
            '/user.UserService/Search' => new \Grpc\MethodDescriptor(
                $this,
                'Search',
                '\Pb\UserRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];

    }
}