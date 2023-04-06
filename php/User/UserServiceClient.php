<?php
// GENERATED CODE -- DO NOT EDIT!

namespace User;

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
     * @param \User\UserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Search(\User\UserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.UserService/Search',
        $argument,
        ['\User\UserResponse', 'decode'],
        $metadata, $options);
    }

}
