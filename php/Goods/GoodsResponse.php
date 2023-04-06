<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: pb/goods.proto

namespace Goods;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>goods.GoodsResponse</code>
 */
class GoodsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .goods.GoodsInfo list = 1;</code>
     */
    private $list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Goods\GoodsInfo[]|\Google\Protobuf\Internal\RepeatedField $list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Pb\Goods::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .goods.GoodsInfo list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Generated from protobuf field <code>repeated .goods.GoodsInfo list = 1;</code>
     * @param \Goods\GoodsInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Goods\GoodsInfo::class);
        $this->list = $arr;

        return $this;
    }

}
