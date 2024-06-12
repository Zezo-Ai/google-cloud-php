<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1\Manifest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `DASH` manifest configuration.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1.Manifest.DashConfig</code>
 */
class DashConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The segment reference scheme for a `DASH` manifest. The default is
     * `SEGMENT_LIST`.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.Manifest.DashConfig.SegmentReferenceScheme segment_reference_scheme = 1;</code>
     */
    protected $segment_reference_scheme = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $segment_reference_scheme
     *           The segment reference scheme for a `DASH` manifest. The default is
     *           `SEGMENT_LIST`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The segment reference scheme for a `DASH` manifest. The default is
     * `SEGMENT_LIST`.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.Manifest.DashConfig.SegmentReferenceScheme segment_reference_scheme = 1;</code>
     * @return int
     */
    public function getSegmentReferenceScheme()
    {
        return $this->segment_reference_scheme;
    }

    /**
     * The segment reference scheme for a `DASH` manifest. The default is
     * `SEGMENT_LIST`.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.Manifest.DashConfig.SegmentReferenceScheme segment_reference_scheme = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSegmentReferenceScheme($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Video\Transcoder\V1\Manifest\DashConfig\SegmentReferenceScheme::class);
        $this->segment_reference_scheme = $var;

        return $this;
    }

}


