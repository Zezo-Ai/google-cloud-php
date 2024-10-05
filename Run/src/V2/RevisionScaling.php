<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/vendor_settings.proto

namespace Google\Cloud\Run\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings for revision-level scaling settings.
 *
 * Generated from protobuf message <code>google.cloud.run.v2.RevisionScaling</code>
 */
class RevisionScaling extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Minimum number of serving instances that this resource should
     * have.
     *
     * Generated from protobuf field <code>int32 min_instance_count = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $min_instance_count = 0;
    /**
     * Optional. Maximum number of serving instances that this resource should
     * have. When unspecified, the field is set to the server default value of
     * 100. For more information see
     * https://cloud.google.com/run/docs/configuring/max-instances
     *
     * Generated from protobuf field <code>int32 max_instance_count = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $max_instance_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $min_instance_count
     *           Optional. Minimum number of serving instances that this resource should
     *           have.
     *     @type int $max_instance_count
     *           Optional. Maximum number of serving instances that this resource should
     *           have. When unspecified, the field is set to the server default value of
     *           100. For more information see
     *           https://cloud.google.com/run/docs/configuring/max-instances
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\VendorSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Minimum number of serving instances that this resource should
     * have.
     *
     * Generated from protobuf field <code>int32 min_instance_count = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getMinInstanceCount()
    {
        return $this->min_instance_count;
    }

    /**
     * Optional. Minimum number of serving instances that this resource should
     * have.
     *
     * Generated from protobuf field <code>int32 min_instance_count = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setMinInstanceCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_instance_count = $var;

        return $this;
    }

    /**
     * Optional. Maximum number of serving instances that this resource should
     * have. When unspecified, the field is set to the server default value of
     * 100. For more information see
     * https://cloud.google.com/run/docs/configuring/max-instances
     *
     * Generated from protobuf field <code>int32 max_instance_count = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getMaxInstanceCount()
    {
        return $this->max_instance_count;
    }

    /**
     * Optional. Maximum number of serving instances that this resource should
     * have. When unspecified, the field is set to the server default value of
     * 100. For more information see
     * https://cloud.google.com/run/docs/configuring/max-instances
     *
     * Generated from protobuf field <code>int32 max_instance_count = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setMaxInstanceCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_instance_count = $var;

        return $this;
    }

}

