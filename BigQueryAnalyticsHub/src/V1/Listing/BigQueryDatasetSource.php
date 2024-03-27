<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/analyticshub/v1/analyticshub.proto

namespace Google\Cloud\BigQuery\AnalyticsHub\V1\Listing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A reference to a shared dataset. It is an existing BigQuery dataset with a
 * collection of objects such as tables and views that you want to share
 * with subscribers.
 * When subscriber's subscribe to a listing, Analytics Hub creates a linked
 * dataset in
 * the subscriber's project. A Linked dataset is an opaque, read-only BigQuery
 * dataset that serves as a _symbolic link_ to a shared dataset.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.analyticshub.v1.Listing.BigQueryDatasetSource</code>
 */
class BigQueryDatasetSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the dataset source for this listing.
     * e.g. `projects/myproject/datasets/123`
     *
     * Generated from protobuf field <code>string dataset = 1 [(.google.api.resource_reference) = {</code>
     */
    private $dataset = '';
    /**
     * Optional. Resources in this dataset that are selectively shared.
     * If this field is empty, then the entire dataset (all resources) are
     * shared. This field is only valid for data clean room exchanges.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.analyticshub.v1.Listing.BigQueryDatasetSource.SelectedResource selected_resources = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $selected_resources;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dataset
     *           Resource name of the dataset source for this listing.
     *           e.g. `projects/myproject/datasets/123`
     *     @type array<\Google\Cloud\BigQuery\AnalyticsHub\V1\Listing\BigQueryDatasetSource\SelectedResource>|\Google\Protobuf\Internal\RepeatedField $selected_resources
     *           Optional. Resources in this dataset that are selectively shared.
     *           If this field is empty, then the entire dataset (all resources) are
     *           shared. This field is only valid for data clean room exchanges.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Analyticshub\V1\Analyticshub::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the dataset source for this listing.
     * e.g. `projects/myproject/datasets/123`
     *
     * Generated from protobuf field <code>string dataset = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDataset()
    {
        return $this->dataset;
    }

    /**
     * Resource name of the dataset source for this listing.
     * e.g. `projects/myproject/datasets/123`
     *
     * Generated from protobuf field <code>string dataset = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDataset($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset = $var;

        return $this;
    }

    /**
     * Optional. Resources in this dataset that are selectively shared.
     * If this field is empty, then the entire dataset (all resources) are
     * shared. This field is only valid for data clean room exchanges.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.analyticshub.v1.Listing.BigQueryDatasetSource.SelectedResource selected_resources = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSelectedResources()
    {
        return $this->selected_resources;
    }

    /**
     * Optional. Resources in this dataset that are selectively shared.
     * If this field is empty, then the entire dataset (all resources) are
     * shared. This field is only valid for data clean room exchanges.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.analyticshub.v1.Listing.BigQueryDatasetSource.SelectedResource selected_resources = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\BigQuery\AnalyticsHub\V1\Listing\BigQueryDatasetSource\SelectedResource>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSelectedResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BigQuery\AnalyticsHub\V1\Listing\BigQueryDatasetSource\SelectedResource::class);
        $this->selected_resources = $arr;

        return $this;
    }

}


