<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Mszlu\Pb\User;

/**
 */
class UserServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * rpc 服务的函数名 （传入参数）返回（返回参数）
     * @param \Mszlu\Pb\User\UserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Search(\Mszlu\Pb\User\UserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Mszlu.Pb.user.UserService/Search',
        $argument,
        ['\Mszlu\Pb\User\UserResponse', 'decode'],
        $metadata, $options);
    }

}
