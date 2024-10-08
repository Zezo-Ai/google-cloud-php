<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Encryption settings for the cluster.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.EncryptionConfig</code>
 */
class EncryptionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The Cloud KMS key resource name to use for persistent disk
     * encryption for all instances in the cluster. See [Use CMEK with cluster
     * data]
     * (https://cloud.google.com//dataproc/docs/concepts/configuring-clusters/customer-managed-encryption#use_cmek_with_cluster_data)
     * for more information.
     *
     * Generated from protobuf field <code>string gce_pd_kms_key_name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $gce_pd_kms_key_name = '';
    /**
     * Optional. The Cloud KMS key resource name to use for cluster persistent
     * disk and job argument encryption. See [Use CMEK with cluster data]
     * (https://cloud.google.com//dataproc/docs/concepts/configuring-clusters/customer-managed-encryption#use_cmek_with_cluster_data)
     * for more information.
     * When this key resource name is provided, the following job arguments of
     * the following job types submitted to the cluster are encrypted using CMEK:
     * * [FlinkJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/FlinkJob)
     * * [HadoopJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/HadoopJob)
     * * [SparkJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/SparkJob)
     * * [SparkRJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/SparkRJob)
     * * [PySparkJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/PySparkJob)
     * * [SparkSqlJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/SparkSqlJob)
     *   scriptVariables and queryList.queries
     * * [HiveJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/HiveJob)
     *   scriptVariables and queryList.queries
     * * [PigJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/PigJob)
     *   scriptVariables and queryList.queries
     * * [PrestoJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/PrestoJob)
     *   scriptVariables and queryList.queries
     *
     * Generated from protobuf field <code>string kms_key = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $kms_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gce_pd_kms_key_name
     *           Optional. The Cloud KMS key resource name to use for persistent disk
     *           encryption for all instances in the cluster. See [Use CMEK with cluster
     *           data]
     *           (https://cloud.google.com//dataproc/docs/concepts/configuring-clusters/customer-managed-encryption#use_cmek_with_cluster_data)
     *           for more information.
     *     @type string $kms_key
     *           Optional. The Cloud KMS key resource name to use for cluster persistent
     *           disk and job argument encryption. See [Use CMEK with cluster data]
     *           (https://cloud.google.com//dataproc/docs/concepts/configuring-clusters/customer-managed-encryption#use_cmek_with_cluster_data)
     *           for more information.
     *           When this key resource name is provided, the following job arguments of
     *           the following job types submitted to the cluster are encrypted using CMEK:
     *           * [FlinkJob
     *           args](https://cloud.google.com/dataproc/docs/reference/rest/v1/FlinkJob)
     *           * [HadoopJob
     *           args](https://cloud.google.com/dataproc/docs/reference/rest/v1/HadoopJob)
     *           * [SparkJob
     *           args](https://cloud.google.com/dataproc/docs/reference/rest/v1/SparkJob)
     *           * [SparkRJob
     *           args](https://cloud.google.com/dataproc/docs/reference/rest/v1/SparkRJob)
     *           * [PySparkJob
     *           args](https://cloud.google.com/dataproc/docs/reference/rest/v1/PySparkJob)
     *           * [SparkSqlJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/SparkSqlJob)
     *             scriptVariables and queryList.queries
     *           * [HiveJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/HiveJob)
     *             scriptVariables and queryList.queries
     *           * [PigJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/PigJob)
     *             scriptVariables and queryList.queries
     *           * [PrestoJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/PrestoJob)
     *             scriptVariables and queryList.queries
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The Cloud KMS key resource name to use for persistent disk
     * encryption for all instances in the cluster. See [Use CMEK with cluster
     * data]
     * (https://cloud.google.com//dataproc/docs/concepts/configuring-clusters/customer-managed-encryption#use_cmek_with_cluster_data)
     * for more information.
     *
     * Generated from protobuf field <code>string gce_pd_kms_key_name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getGcePdKmsKeyName()
    {
        return $this->gce_pd_kms_key_name;
    }

    /**
     * Optional. The Cloud KMS key resource name to use for persistent disk
     * encryption for all instances in the cluster. See [Use CMEK with cluster
     * data]
     * (https://cloud.google.com//dataproc/docs/concepts/configuring-clusters/customer-managed-encryption#use_cmek_with_cluster_data)
     * for more information.
     *
     * Generated from protobuf field <code>string gce_pd_kms_key_name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setGcePdKmsKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->gce_pd_kms_key_name = $var;

        return $this;
    }

    /**
     * Optional. The Cloud KMS key resource name to use for cluster persistent
     * disk and job argument encryption. See [Use CMEK with cluster data]
     * (https://cloud.google.com//dataproc/docs/concepts/configuring-clusters/customer-managed-encryption#use_cmek_with_cluster_data)
     * for more information.
     * When this key resource name is provided, the following job arguments of
     * the following job types submitted to the cluster are encrypted using CMEK:
     * * [FlinkJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/FlinkJob)
     * * [HadoopJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/HadoopJob)
     * * [SparkJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/SparkJob)
     * * [SparkRJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/SparkRJob)
     * * [PySparkJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/PySparkJob)
     * * [SparkSqlJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/SparkSqlJob)
     *   scriptVariables and queryList.queries
     * * [HiveJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/HiveJob)
     *   scriptVariables and queryList.queries
     * * [PigJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/PigJob)
     *   scriptVariables and queryList.queries
     * * [PrestoJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/PrestoJob)
     *   scriptVariables and queryList.queries
     *
     * Generated from protobuf field <code>string kms_key = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getKmsKey()
    {
        return $this->kms_key;
    }

    /**
     * Optional. The Cloud KMS key resource name to use for cluster persistent
     * disk and job argument encryption. See [Use CMEK with cluster data]
     * (https://cloud.google.com//dataproc/docs/concepts/configuring-clusters/customer-managed-encryption#use_cmek_with_cluster_data)
     * for more information.
     * When this key resource name is provided, the following job arguments of
     * the following job types submitted to the cluster are encrypted using CMEK:
     * * [FlinkJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/FlinkJob)
     * * [HadoopJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/HadoopJob)
     * * [SparkJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/SparkJob)
     * * [SparkRJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/SparkRJob)
     * * [PySparkJob
     * args](https://cloud.google.com/dataproc/docs/reference/rest/v1/PySparkJob)
     * * [SparkSqlJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/SparkSqlJob)
     *   scriptVariables and queryList.queries
     * * [HiveJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/HiveJob)
     *   scriptVariables and queryList.queries
     * * [PigJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/PigJob)
     *   scriptVariables and queryList.queries
     * * [PrestoJob](https://cloud.google.com/dataproc/docs/reference/rest/v1/PrestoJob)
     *   scriptVariables and queryList.queries
     *
     * Generated from protobuf field <code>string kms_key = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key = $var;

        return $this;
    }

}

