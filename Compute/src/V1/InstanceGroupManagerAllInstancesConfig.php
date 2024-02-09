<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstanceGroupManagerAllInstancesConfig</code>
 */
class InstanceGroupManagerAllInstancesConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Properties to set on all instances in the group. You can add or modify properties using the instanceGroupManagers.patch or regionInstanceGroupManagers.patch. After setting allInstancesConfig on the group, you must update the group's instances to apply the configuration. To apply the configuration, set the group's updatePolicy.type field to use proactive updates or use the applyUpdatesToInstances method.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InstancePropertiesPatch properties = 147688755;</code>
     */
    private $properties = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\InstancePropertiesPatch $properties
     *           Properties to set on all instances in the group. You can add or modify properties using the instanceGroupManagers.patch or regionInstanceGroupManagers.patch. After setting allInstancesConfig on the group, you must update the group's instances to apply the configuration. To apply the configuration, set the group's updatePolicy.type field to use proactive updates or use the applyUpdatesToInstances method.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Properties to set on all instances in the group. You can add or modify properties using the instanceGroupManagers.patch or regionInstanceGroupManagers.patch. After setting allInstancesConfig on the group, you must update the group's instances to apply the configuration. To apply the configuration, set the group's updatePolicy.type field to use proactive updates or use the applyUpdatesToInstances method.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InstancePropertiesPatch properties = 147688755;</code>
     * @return \Google\Cloud\Compute\V1\InstancePropertiesPatch|null
     */
    public function getProperties()
    {
        return $this->properties;
    }

    public function hasProperties()
    {
        return isset($this->properties);
    }

    public function clearProperties()
    {
        unset($this->properties);
    }

    /**
     * Properties to set on all instances in the group. You can add or modify properties using the instanceGroupManagers.patch or regionInstanceGroupManagers.patch. After setting allInstancesConfig on the group, you must update the group's instances to apply the configuration. To apply the configuration, set the group's updatePolicy.type field to use proactive updates or use the applyUpdatesToInstances method.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InstancePropertiesPatch properties = 147688755;</code>
     * @param \Google\Cloud\Compute\V1\InstancePropertiesPatch $var
     * @return $this
     */
    public function setProperties($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\InstancePropertiesPatch::class);
        $this->properties = $var;

        return $this;
    }

}

