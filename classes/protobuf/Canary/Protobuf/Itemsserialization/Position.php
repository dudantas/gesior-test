<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: itens.proto

namespace Canary\Protobuf\Itemsserialization;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Canary.protobuf.itemsserialization.Position</code>
 */
class Position extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional uint32 x = 1;</code>
     */
    protected $x = null;
    /**
     * Generated from protobuf field <code>optional uint32 y = 2;</code>
     */
    protected $y = null;
    /**
     * Generated from protobuf field <code>optional uint32 z = 3;</code>
     */
    protected $z = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $x
     *     @type int $y
     *     @type int $z
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Itens::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional uint32 x = 1;</code>
     * @return int
     */
    public function getX()
    {
        return isset($this->x) ? $this->x : 0;
    }

    public function hasX()
    {
        return isset($this->x);
    }

    public function clearX()
    {
        unset($this->x);
    }

    /**
     * Generated from protobuf field <code>optional uint32 x = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setX($var)
    {
        GPBUtil::checkUint32($var);
        $this->x = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 y = 2;</code>
     * @return int
     */
    public function getY()
    {
        return isset($this->y) ? $this->y : 0;
    }

    public function hasY()
    {
        return isset($this->y);
    }

    public function clearY()
    {
        unset($this->y);
    }

    /**
     * Generated from protobuf field <code>optional uint32 y = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setY($var)
    {
        GPBUtil::checkUint32($var);
        $this->y = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 z = 3;</code>
     * @return int
     */
    public function getZ()
    {
        return isset($this->z) ? $this->z : 0;
    }

    public function hasZ()
    {
        return isset($this->z);
    }

    public function clearZ()
    {
        unset($this->z);
    }

    /**
     * Generated from protobuf field <code>optional uint32 z = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setZ($var)
    {
        GPBUtil::checkUint32($var);
        $this->z = $var;

        return $this;
    }

}

