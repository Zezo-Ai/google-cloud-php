<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/attack_path.proto

namespace Google\Cloud\SecurityCenter\V2\AttackPath\AttackPathNode;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A finding that is associated with this node in the attack path.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.AttackPath.AttackPathNode.PathNodeAssociatedFinding</code>
 */
class PathNodeAssociatedFinding extends \Google\Protobuf\Internal\Message
{
    /**
     * Canonical name of the associated findings. Example:
     * `organizations/123/sources/456/findings/789`
     *
     * Generated from protobuf field <code>string canonical_finding = 1;</code>
     */
    private $canonical_finding = '';
    /**
     * The additional taxonomy group within findings from a given source.
     *
     * Generated from protobuf field <code>string finding_category = 2;</code>
     */
    private $finding_category = '';
    /**
     * Full resource name of the finding.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $canonical_finding
     *           Canonical name of the associated findings. Example:
     *           `organizations/123/sources/456/findings/789`
     *     @type string $finding_category
     *           The additional taxonomy group within findings from a given source.
     *     @type string $name
     *           Full resource name of the finding.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\AttackPath::initOnce();
        parent::__construct($data);
    }

    /**
     * Canonical name of the associated findings. Example:
     * `organizations/123/sources/456/findings/789`
     *
     * Generated from protobuf field <code>string canonical_finding = 1;</code>
     * @return string
     */
    public function getCanonicalFinding()
    {
        return $this->canonical_finding;
    }

    /**
     * Canonical name of the associated findings. Example:
     * `organizations/123/sources/456/findings/789`
     *
     * Generated from protobuf field <code>string canonical_finding = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCanonicalFinding($var)
    {
        GPBUtil::checkString($var, True);
        $this->canonical_finding = $var;

        return $this;
    }

    /**
     * The additional taxonomy group within findings from a given source.
     *
     * Generated from protobuf field <code>string finding_category = 2;</code>
     * @return string
     */
    public function getFindingCategory()
    {
        return $this->finding_category;
    }

    /**
     * The additional taxonomy group within findings from a given source.
     *
     * Generated from protobuf field <code>string finding_category = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFindingCategory($var)
    {
        GPBUtil::checkString($var, True);
        $this->finding_category = $var;

        return $this;
    }

    /**
     * Full resource name of the finding.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Full resource name of the finding.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PathNodeAssociatedFinding::class, \Google\Cloud\SecurityCenter\V2\AttackPath_AttackPathNode_PathNodeAssociatedFinding::class);

