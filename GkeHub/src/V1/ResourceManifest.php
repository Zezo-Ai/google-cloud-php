<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1/membership.proto

namespace Google\Cloud\GkeHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ResourceManifest represents a single Kubernetes resource to be applied to
 * the cluster.
 *
 * Generated from protobuf message <code>google.cloud.gkehub.v1.ResourceManifest</code>
 */
class ResourceManifest extends \Google\Protobuf\Internal\Message
{
    /**
     * YAML manifest of the resource.
     *
     * Generated from protobuf field <code>string manifest = 1;</code>
     */
    protected $manifest = '';
    /**
     * Whether the resource provided in the manifest is `cluster_scoped`.
     * If unset, the manifest is assumed to be namespace scoped.
     * This field is used for REST mapping when applying the resource in a
     * cluster.
     *
     * Generated from protobuf field <code>bool cluster_scoped = 2;</code>
     */
    protected $cluster_scoped = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $manifest
     *           YAML manifest of the resource.
     *     @type bool $cluster_scoped
     *           Whether the resource provided in the manifest is `cluster_scoped`.
     *           If unset, the manifest is assumed to be namespace scoped.
     *           This field is used for REST mapping when applying the resource in a
     *           cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1\Membership::initOnce();
        parent::__construct($data);
    }

    /**
     * YAML manifest of the resource.
     *
     * Generated from protobuf field <code>string manifest = 1;</code>
     * @return string
     */
    public function getManifest()
    {
        return $this->manifest;
    }

    /**
     * YAML manifest of the resource.
     *
     * Generated from protobuf field <code>string manifest = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setManifest($var)
    {
        GPBUtil::checkString($var, True);
        $this->manifest = $var;

        return $this;
    }

    /**
     * Whether the resource provided in the manifest is `cluster_scoped`.
     * If unset, the manifest is assumed to be namespace scoped.
     * This field is used for REST mapping when applying the resource in a
     * cluster.
     *
     * Generated from protobuf field <code>bool cluster_scoped = 2;</code>
     * @return bool
     */
    public function getClusterScoped()
    {
        return $this->cluster_scoped;
    }

    /**
     * Whether the resource provided in the manifest is `cluster_scoped`.
     * If unset, the manifest is assumed to be namespace scoped.
     * This field is used for REST mapping when applying the resource in a
     * cluster.
     *
     * Generated from protobuf field <code>bool cluster_scoped = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setClusterScoped($var)
    {
        GPBUtil::checkBool($var);
        $this->cluster_scoped = $var;

        return $this;
    }

}

