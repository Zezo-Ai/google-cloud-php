<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apihub/v1/apihub_service.proto

namespace Google\Cloud\ApiHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The [ListSpecs][google.cloud.apihub.v1.ApiHub.ListSpecs] method's response.
 *
 * Generated from protobuf message <code>google.cloud.apihub.v1.ListSpecsResponse</code>
 */
class ListSpecsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The specs corresponding to an API.
     *
     * Generated from protobuf field <code>repeated .google.cloud.apihub.v1.Spec specs = 1;</code>
     */
    private $specs;
    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\ApiHub\V1\Spec>|\Google\Protobuf\Internal\RepeatedField $specs
     *           The specs corresponding to an API.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apihub\V1\ApihubService::initOnce();
        parent::__construct($data);
    }

    /**
     * The specs corresponding to an API.
     *
     * Generated from protobuf field <code>repeated .google.cloud.apihub.v1.Spec specs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpecs()
    {
        return $this->specs;
    }

    /**
     * The specs corresponding to an API.
     *
     * Generated from protobuf field <code>repeated .google.cloud.apihub.v1.Spec specs = 1;</code>
     * @param array<\Google\Cloud\ApiHub\V1\Spec>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpecs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ApiHub\V1\Spec::class);
        $this->specs = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

