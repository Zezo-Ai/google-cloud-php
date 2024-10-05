<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/vendor_settings.proto

namespace Google\Cloud\Run\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Scaling settings applied at the service level rather than
 * at the revision level.
 *
 * Generated from protobuf message <code>google.cloud.run.v2.ServiceScaling</code>
 */
class ServiceScaling extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. total min instances for the service. This number of instances is
     * divided among all revisions with specified traffic based on the percent
     * of traffic they are receiving.
     *
     * Generated from protobuf field <code>int32 min_instance_count = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $min_instance_count = 0;
    /**
     * Optional. The scaling mode for the service.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.ServiceScaling.ScalingMode scaling_mode = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $scaling_mode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $min_instance_count
     *           Optional. total min instances for the service. This number of instances is
     *           divided among all revisions with specified traffic based on the percent
     *           of traffic they are receiving.
     *     @type int $scaling_mode
     *           Optional. The scaling mode for the service.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\VendorSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. total min instances for the service. This number of instances is
     * divided among all revisions with specified traffic based on the percent
     * of traffic they are receiving.
     *
     * Generated from protobuf field <code>int32 min_instance_count = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getMinInstanceCount()
    {
        return $this->min_instance_count;
    }

    /**
     * Optional. total min instances for the service. This number of instances is
     * divided among all revisions with specified traffic based on the percent
     * of traffic they are receiving.
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
     * Optional. The scaling mode for the service.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.ServiceScaling.ScalingMode scaling_mode = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getScalingMode()
    {
        return $this->scaling_mode;
    }

    /**
     * Optional. The scaling mode for the service.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.ServiceScaling.ScalingMode scaling_mode = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setScalingMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Run\V2\ServiceScaling\ScalingMode::class);
        $this->scaling_mode = $var;

        return $this;
    }

}

