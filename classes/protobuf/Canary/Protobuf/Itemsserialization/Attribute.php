<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: itens.proto

namespace Canary\Protobuf\Itemsserialization;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Canary.protobuf.itemsserialization.Attribute</code>
 */
class Attribute extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional uint32 id = 1;</code>
     */
    protected $id = null;
    /**
     * Generated from protobuf field <code>optional .Canary.protobuf.itemsserialization.ATTRIBUTE_TYPE type = 2;</code>
     */
    protected $type = null;
    /**
     * Generated from protobuf field <code>optional bytes extended = 3;</code>
     */
    protected $extended = null;
    /**
     * Generated from protobuf field <code>optional bytes data = 4;</code>
     */
    protected $data = null;
    /**
     * Generated from protobuf field <code>optional .Canary.protobuf.itemsserialization.Position position = 5;</code>
     */
    protected $position = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type int $type
     *     @type string $extended
     *     @type string $data
     *     @type \Canary\Protobuf\Itemsserialization\Position $position
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Itens::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional uint32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Generated from protobuf field <code>optional uint32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Canary.protobuf.itemsserialization.ATTRIBUTE_TYPE type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : 0;
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * Generated from protobuf field <code>optional .Canary.protobuf.itemsserialization.ATTRIBUTE_TYPE type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Canary\Protobuf\Itemsserialization\ATTRIBUTE_TYPE::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bytes extended = 3;</code>
     * @return string
     */
    public function getExtended()
    {
        return isset($this->extended) ? $this->extended : '';
    }

    public function hasExtended()
    {
        return isset($this->extended);
    }

    public function clearExtended()
    {
        unset($this->extended);
    }

    /**
     * Generated from protobuf field <code>optional bytes extended = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setExtended($var)
    {
        GPBUtil::checkString($var, False);
        $this->extended = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bytes data = 4;</code>
     * @return string
     */
    public function getData()
    {
        return isset($this->data) ? $this->data : '';
    }

    public function hasData()
    {
        return isset($this->data);
    }

    public function clearData()
    {
        unset($this->data);
    }

    /**
     * Generated from protobuf field <code>optional bytes data = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Canary.protobuf.itemsserialization.Position position = 5;</code>
     * @return \Canary\Protobuf\Itemsserialization\Position|null
     */
    public function getPosition()
    {
        return $this->position;
    }

    public function hasPosition()
    {
        return isset($this->position);
    }

    public function clearPosition()
    {
        unset($this->position);
    }

    /**
     * Generated from protobuf field <code>optional .Canary.protobuf.itemsserialization.Position position = 5;</code>
     * @param \Canary\Protobuf\Itemsserialization\Position $var
     * @return $this
     */
    public function setPosition($var)
    {
        GPBUtil::checkMessage($var, \Canary\Protobuf\Itemsserialization\Position::class);
        $this->position = $var;

        return $this;
    }

}

