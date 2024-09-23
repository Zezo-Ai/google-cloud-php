<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tuning_job.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Tuning Spec for Supervised Tuning for first party models.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.SupervisedTuningSpec</code>
 */
class SupervisedTuningSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Cloud Storage path to file containing training dataset for
     * tuning. The dataset must be formatted as a JSONL file.
     *
     * Generated from protobuf field <code>string training_dataset_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $training_dataset_uri = '';
    /**
     * Optional. Cloud Storage path to file containing validation dataset for
     * tuning. The dataset must be formatted as a JSONL file.
     *
     * Generated from protobuf field <code>string validation_dataset_uri = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validation_dataset_uri = '';
    /**
     * Optional. Hyperparameters for SFT.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SupervisedHyperParameters hyper_parameters = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $hyper_parameters = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $training_dataset_uri
     *           Required. Cloud Storage path to file containing training dataset for
     *           tuning. The dataset must be formatted as a JSONL file.
     *     @type string $validation_dataset_uri
     *           Optional. Cloud Storage path to file containing validation dataset for
     *           tuning. The dataset must be formatted as a JSONL file.
     *     @type \Google\Cloud\AIPlatform\V1\SupervisedHyperParameters $hyper_parameters
     *           Optional. Hyperparameters for SFT.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TuningJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Cloud Storage path to file containing training dataset for
     * tuning. The dataset must be formatted as a JSONL file.
     *
     * Generated from protobuf field <code>string training_dataset_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTrainingDatasetUri()
    {
        return $this->training_dataset_uri;
    }

    /**
     * Required. Cloud Storage path to file containing training dataset for
     * tuning. The dataset must be formatted as a JSONL file.
     *
     * Generated from protobuf field <code>string training_dataset_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTrainingDatasetUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->training_dataset_uri = $var;

        return $this;
    }

    /**
     * Optional. Cloud Storage path to file containing validation dataset for
     * tuning. The dataset must be formatted as a JSONL file.
     *
     * Generated from protobuf field <code>string validation_dataset_uri = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getValidationDatasetUri()
    {
        return $this->validation_dataset_uri;
    }

    /**
     * Optional. Cloud Storage path to file containing validation dataset for
     * tuning. The dataset must be formatted as a JSONL file.
     *
     * Generated from protobuf field <code>string validation_dataset_uri = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setValidationDatasetUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->validation_dataset_uri = $var;

        return $this;
    }

    /**
     * Optional. Hyperparameters for SFT.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SupervisedHyperParameters hyper_parameters = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\SupervisedHyperParameters|null
     */
    public function getHyperParameters()
    {
        return $this->hyper_parameters;
    }

    public function hasHyperParameters()
    {
        return isset($this->hyper_parameters);
    }

    public function clearHyperParameters()
    {
        unset($this->hyper_parameters);
    }

    /**
     * Optional. Hyperparameters for SFT.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SupervisedHyperParameters hyper_parameters = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\SupervisedHyperParameters $var
     * @return $this
     */
    public function setHyperParameters($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\SupervisedHyperParameters::class);
        $this->hyper_parameters = $var;

        return $this;
    }

}

