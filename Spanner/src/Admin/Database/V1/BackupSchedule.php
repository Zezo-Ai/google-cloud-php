<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/backup_schedule.proto

namespace Google\Cloud\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BackupSchedule expresses the automated backup creation specification for a
 * Spanner database.
 * Next ID: 10
 *
 * Generated from protobuf message <code>google.spanner.admin.database.v1.BackupSchedule</code>
 */
class BackupSchedule extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. Output only for the
     * [CreateBackupSchedule][DatabaseAdmin.CreateBackupSchededule] operation.
     * Required for the
     * [UpdateBackupSchedule][google.spanner.admin.database.v1.DatabaseAdmin.UpdateBackupSchedule]
     * operation. A globally unique identifier for the backup schedule which
     * cannot be changed. Values are of the form
     * `projects/<project>/instances/<instance>/databases/<database>/backupSchedules/[a-z][a-z0-9_\-]*[a-z0-9]`
     * The final segment of the name must be between 2 and 60 characters in
     * length.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    private $name = '';
    /**
     * Optional. The schedule specification based on which the backup creations
     * are triggered.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.BackupScheduleSpec spec = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $spec = null;
    /**
     * Optional. The retention duration of a backup that must be at least 6 hours
     * and at most 366 days. The backup is eligible to be automatically deleted
     * once the retention period has elapsed.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration retention_duration = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $retention_duration = null;
    /**
     * Optional. The encryption configuration that will be used to encrypt the
     * backup. If this field is not specified, the backup will use the same
     * encryption configuration as the database.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.CreateBackupEncryptionConfig encryption_config = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $encryption_config = null;
    /**
     * Output only. The timestamp at which the schedule was last updated.
     * If the schedule has never been updated, this field contains the timestamp
     * when the schedule was first created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    protected $backup_type_spec;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. Output only for the
     *           [CreateBackupSchedule][DatabaseAdmin.CreateBackupSchededule] operation.
     *           Required for the
     *           [UpdateBackupSchedule][google.spanner.admin.database.v1.DatabaseAdmin.UpdateBackupSchedule]
     *           operation. A globally unique identifier for the backup schedule which
     *           cannot be changed. Values are of the form
     *           `projects/<project>/instances/<instance>/databases/<database>/backupSchedules/[a-z][a-z0-9_\-]*[a-z0-9]`
     *           The final segment of the name must be between 2 and 60 characters in
     *           length.
     *     @type \Google\Cloud\Spanner\Admin\Database\V1\BackupScheduleSpec $spec
     *           Optional. The schedule specification based on which the backup creations
     *           are triggered.
     *     @type \Google\Protobuf\Duration $retention_duration
     *           Optional. The retention duration of a backup that must be at least 6 hours
     *           and at most 366 days. The backup is eligible to be automatically deleted
     *           once the retention period has elapsed.
     *     @type \Google\Cloud\Spanner\Admin\Database\V1\CreateBackupEncryptionConfig $encryption_config
     *           Optional. The encryption configuration that will be used to encrypt the
     *           backup. If this field is not specified, the backup will use the same
     *           encryption configuration as the database.
     *     @type \Google\Cloud\Spanner\Admin\Database\V1\FullBackupSpec $full_backup_spec
     *           The schedule creates only full backups.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The timestamp at which the schedule was last updated.
     *           If the schedule has never been updated, this field contains the timestamp
     *           when the schedule was first created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\BackupSchedule::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. Output only for the
     * [CreateBackupSchedule][DatabaseAdmin.CreateBackupSchededule] operation.
     * Required for the
     * [UpdateBackupSchedule][google.spanner.admin.database.v1.DatabaseAdmin.UpdateBackupSchedule]
     * operation. A globally unique identifier for the backup schedule which
     * cannot be changed. Values are of the form
     * `projects/<project>/instances/<instance>/databases/<database>/backupSchedules/[a-z][a-z0-9_\-]*[a-z0-9]`
     * The final segment of the name must be between 2 and 60 characters in
     * length.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. Output only for the
     * [CreateBackupSchedule][DatabaseAdmin.CreateBackupSchededule] operation.
     * Required for the
     * [UpdateBackupSchedule][google.spanner.admin.database.v1.DatabaseAdmin.UpdateBackupSchedule]
     * operation. A globally unique identifier for the backup schedule which
     * cannot be changed. Values are of the form
     * `projects/<project>/instances/<instance>/databases/<database>/backupSchedules/[a-z][a-z0-9_\-]*[a-z0-9]`
     * The final segment of the name must be between 2 and 60 characters in
     * length.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. The schedule specification based on which the backup creations
     * are triggered.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.BackupScheduleSpec spec = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Spanner\Admin\Database\V1\BackupScheduleSpec|null
     */
    public function getSpec()
    {
        return $this->spec;
    }

    public function hasSpec()
    {
        return isset($this->spec);
    }

    public function clearSpec()
    {
        unset($this->spec);
    }

    /**
     * Optional. The schedule specification based on which the backup creations
     * are triggered.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.BackupScheduleSpec spec = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Spanner\Admin\Database\V1\BackupScheduleSpec $var
     * @return $this
     */
    public function setSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\Admin\Database\V1\BackupScheduleSpec::class);
        $this->spec = $var;

        return $this;
    }

    /**
     * Optional. The retention duration of a backup that must be at least 6 hours
     * and at most 366 days. The backup is eligible to be automatically deleted
     * once the retention period has elapsed.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration retention_duration = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getRetentionDuration()
    {
        return $this->retention_duration;
    }

    public function hasRetentionDuration()
    {
        return isset($this->retention_duration);
    }

    public function clearRetentionDuration()
    {
        unset($this->retention_duration);
    }

    /**
     * Optional. The retention duration of a backup that must be at least 6 hours
     * and at most 366 days. The backup is eligible to be automatically deleted
     * once the retention period has elapsed.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration retention_duration = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setRetentionDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->retention_duration = $var;

        return $this;
    }

    /**
     * Optional. The encryption configuration that will be used to encrypt the
     * backup. If this field is not specified, the backup will use the same
     * encryption configuration as the database.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.CreateBackupEncryptionConfig encryption_config = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Spanner\Admin\Database\V1\CreateBackupEncryptionConfig|null
     */
    public function getEncryptionConfig()
    {
        return $this->encryption_config;
    }

    public function hasEncryptionConfig()
    {
        return isset($this->encryption_config);
    }

    public function clearEncryptionConfig()
    {
        unset($this->encryption_config);
    }

    /**
     * Optional. The encryption configuration that will be used to encrypt the
     * backup. If this field is not specified, the backup will use the same
     * encryption configuration as the database.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.CreateBackupEncryptionConfig encryption_config = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Spanner\Admin\Database\V1\CreateBackupEncryptionConfig $var
     * @return $this
     */
    public function setEncryptionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\Admin\Database\V1\CreateBackupEncryptionConfig::class);
        $this->encryption_config = $var;

        return $this;
    }

    /**
     * The schedule creates only full backups.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.FullBackupSpec full_backup_spec = 7;</code>
     * @return \Google\Cloud\Spanner\Admin\Database\V1\FullBackupSpec|null
     */
    public function getFullBackupSpec()
    {
        return $this->readOneof(7);
    }

    public function hasFullBackupSpec()
    {
        return $this->hasOneof(7);
    }

    /**
     * The schedule creates only full backups.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.FullBackupSpec full_backup_spec = 7;</code>
     * @param \Google\Cloud\Spanner\Admin\Database\V1\FullBackupSpec $var
     * @return $this
     */
    public function setFullBackupSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\Admin\Database\V1\FullBackupSpec::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Output only. The timestamp at which the schedule was last updated.
     * If the schedule has never been updated, this field contains the timestamp
     * when the schedule was first created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The timestamp at which the schedule was last updated.
     * If the schedule has never been updated, this field contains the timestamp
     * when the schedule was first created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getBackupTypeSpec()
    {
        return $this->whichOneof("backup_type_spec");
    }

}

