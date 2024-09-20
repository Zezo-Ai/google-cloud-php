<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A pattern to match against one or more resources. At least one pattern must
 * be specified. Regular expressions use RE2
 * [syntax](https://github.com/google/re2/wiki/Syntax); a guide can be found
 * under the google/re2 repository on GitHub.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.OtherCloudResourceRegex</code>
 */
class OtherCloudResourceRegex extends \Google\Protobuf\Internal\Message
{
    protected $resource_regex;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\AmazonS3BucketRegex $amazon_s3_bucket_regex
     *           Regex for Amazon S3 buckets.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Regex for Amazon S3 buckets.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.AmazonS3BucketRegex amazon_s3_bucket_regex = 1;</code>
     * @return \Google\Cloud\Dlp\V2\AmazonS3BucketRegex|null
     */
    public function getAmazonS3BucketRegex()
    {
        return $this->readOneof(1);
    }

    public function hasAmazonS3BucketRegex()
    {
        return $this->hasOneof(1);
    }

    /**
     * Regex for Amazon S3 buckets.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.AmazonS3BucketRegex amazon_s3_bucket_regex = 1;</code>
     * @param \Google\Cloud\Dlp\V2\AmazonS3BucketRegex $var
     * @return $this
     */
    public function setAmazonS3BucketRegex($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\AmazonS3BucketRegex::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getResourceRegex()
    {
        return $this->whichOneof("resource_regex");
    }

}

