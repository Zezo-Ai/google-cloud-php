<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4\SqlExternalSyncSettingError;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.sql.v1beta4.SqlExternalSyncSettingError.SqlExternalSyncSettingErrorType</code>
 */
class SqlExternalSyncSettingErrorType
{
    /**
     * Generated from protobuf enum <code>SQL_EXTERNAL_SYNC_SETTING_ERROR_TYPE_UNSPECIFIED = 0;</code>
     */
    const SQL_EXTERNAL_SYNC_SETTING_ERROR_TYPE_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>CONNECTION_FAILURE = 1;</code>
     */
    const CONNECTION_FAILURE = 1;
    /**
     * Generated from protobuf enum <code>BINLOG_NOT_ENABLED = 2;</code>
     */
    const BINLOG_NOT_ENABLED = 2;
    /**
     * Generated from protobuf enum <code>INCOMPATIBLE_DATABASE_VERSION = 3;</code>
     */
    const INCOMPATIBLE_DATABASE_VERSION = 3;
    /**
     * Generated from protobuf enum <code>REPLICA_ALREADY_SETUP = 4;</code>
     */
    const REPLICA_ALREADY_SETUP = 4;
    /**
     * The replication user is missing privileges that are required.
     *
     * Generated from protobuf enum <code>INSUFFICIENT_PRIVILEGE = 5;</code>
     */
    const INSUFFICIENT_PRIVILEGE = 5;
    /**
     * Unsupported migration type.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_MIGRATION_TYPE = 6;</code>
     */
    const UNSUPPORTED_MIGRATION_TYPE = 6;
    /**
     * No pglogical extension installed on databases, applicable for postgres.
     *
     * Generated from protobuf enum <code>NO_PGLOGICAL_INSTALLED = 7;</code>
     */
    const NO_PGLOGICAL_INSTALLED = 7;
    /**
     * pglogical node already exists on databases, applicable for postgres.
     *
     * Generated from protobuf enum <code>PGLOGICAL_NODE_ALREADY_EXISTS = 8;</code>
     */
    const PGLOGICAL_NODE_ALREADY_EXISTS = 8;
    /**
     * The value of parameter wal_level is not set to logical.
     *
     * Generated from protobuf enum <code>INVALID_WAL_LEVEL = 9;</code>
     */
    const INVALID_WAL_LEVEL = 9;
    /**
     * The value of parameter shared_preload_libraries does not include
     * pglogical.
     *
     * Generated from protobuf enum <code>INVALID_SHARED_PRELOAD_LIBRARY = 10;</code>
     */
    const INVALID_SHARED_PRELOAD_LIBRARY = 10;
    /**
     * The value of parameter max_replication_slots is not sufficient.
     *
     * Generated from protobuf enum <code>INSUFFICIENT_MAX_REPLICATION_SLOTS = 11;</code>
     */
    const INSUFFICIENT_MAX_REPLICATION_SLOTS = 11;
    /**
     * The value of parameter max_wal_senders is not sufficient.
     *
     * Generated from protobuf enum <code>INSUFFICIENT_MAX_WAL_SENDERS = 12;</code>
     */
    const INSUFFICIENT_MAX_WAL_SENDERS = 12;
    /**
     * The value of parameter max_worker_processes is not sufficient.
     *
     * Generated from protobuf enum <code>INSUFFICIENT_MAX_WORKER_PROCESSES = 13;</code>
     */
    const INSUFFICIENT_MAX_WORKER_PROCESSES = 13;
    /**
     * Extensions installed are either not supported or having unsupported
     * versions
     *
     * Generated from protobuf enum <code>UNSUPPORTED_EXTENSIONS = 14;</code>
     */
    const UNSUPPORTED_EXTENSIONS = 14;
    /**
     * The value of parameter rds.logical_replication is not set to 1.
     *
     * Generated from protobuf enum <code>INVALID_RDS_LOGICAL_REPLICATION = 15;</code>
     */
    const INVALID_RDS_LOGICAL_REPLICATION = 15;
    /**
     * The primary instance logging setup doesn't allow EM sync.
     *
     * Generated from protobuf enum <code>INVALID_LOGGING_SETUP = 16;</code>
     */
    const INVALID_LOGGING_SETUP = 16;
    /**
     * The primary instance database parameter setup doesn't allow EM sync.
     *
     * Generated from protobuf enum <code>INVALID_DB_PARAM = 17;</code>
     */
    const INVALID_DB_PARAM = 17;
    /**
     * The gtid_mode is not supported, applicable for MySQL.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_GTID_MODE = 18;</code>
     */
    const UNSUPPORTED_GTID_MODE = 18;
    /**
     * SQL Server Agent is not running.
     *
     * Generated from protobuf enum <code>SQLSERVER_AGENT_NOT_RUNNING = 19;</code>
     */
    const SQLSERVER_AGENT_NOT_RUNNING = 19;
    /**
     * The table definition is not support due to missing primary key or replica
     * identity, applicable for postgres.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_TABLE_DEFINITION = 20;</code>
     */
    const UNSUPPORTED_TABLE_DEFINITION = 20;
    /**
     * The customer has a definer that will break EM setup.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_DEFINER = 21;</code>
     */
    const UNSUPPORTED_DEFINER = 21;
    /**
     * SQL Server &#64;&#64;SERVERNAME does not match actual host name.
     *
     * Generated from protobuf enum <code>SQLSERVER_SERVERNAME_MISMATCH = 22;</code>
     */
    const SQLSERVER_SERVERNAME_MISMATCH = 22;
    /**
     * The primary instance has been setup and will fail the setup.
     *
     * Generated from protobuf enum <code>PRIMARY_ALREADY_SETUP = 23;</code>
     */
    const PRIMARY_ALREADY_SETUP = 23;
    /**
     * The primary instance has unsupported binary log format.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_BINLOG_FORMAT = 24;</code>
     */
    const UNSUPPORTED_BINLOG_FORMAT = 24;
    /**
     * The primary instance's binary log retention setting.
     *
     * Generated from protobuf enum <code>BINLOG_RETENTION_SETTING = 25;</code>
     */
    const BINLOG_RETENTION_SETTING = 25;
    /**
     * The primary instance has tables with unsupported storage engine.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_STORAGE_ENGINE = 26;</code>
     */
    const UNSUPPORTED_STORAGE_ENGINE = 26;
    /**
     * Source has tables with limited support
     * eg: PostgreSQL tables without primary keys.
     *
     * Generated from protobuf enum <code>LIMITED_SUPPORT_TABLES = 27;</code>
     */
    const LIMITED_SUPPORT_TABLES = 27;
    /**
     * The replica instance contains existing data.
     *
     * Generated from protobuf enum <code>EXISTING_DATA_IN_REPLICA = 28;</code>
     */
    const EXISTING_DATA_IN_REPLICA = 28;
    /**
     * The replication user is missing privileges that are optional.
     *
     * Generated from protobuf enum <code>MISSING_OPTIONAL_PRIVILEGES = 29;</code>
     */
    const MISSING_OPTIONAL_PRIVILEGES = 29;
    /**
     * Additional BACKUP_ADMIN privilege is granted to the replication user
     * which may lock source MySQL 8 instance for DDLs during initial sync.
     *
     * Generated from protobuf enum <code>RISKY_BACKUP_ADMIN_PRIVILEGE = 30;</code>
     */
    const RISKY_BACKUP_ADMIN_PRIVILEGE = 30;
    /**
     * The Cloud Storage bucket is missing necessary permissions.
     *
     * Generated from protobuf enum <code>INSUFFICIENT_GCS_PERMISSIONS = 31;</code>
     */
    const INSUFFICIENT_GCS_PERMISSIONS = 31;
    /**
     * The Cloud Storage bucket has an error in the file or contains invalid
     * file information.
     *
     * Generated from protobuf enum <code>INVALID_FILE_INFO = 32;</code>
     */
    const INVALID_FILE_INFO = 32;
    /**
     * The source instance has unsupported database settings for migration.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_DATABASE_SETTINGS = 33;</code>
     */
    const UNSUPPORTED_DATABASE_SETTINGS = 33;
    /**
     * The replication user is missing parallel import specific privileges.
     * (e.g. LOCK TABLES) for MySQL.
     *
     * Generated from protobuf enum <code>MYSQL_PARALLEL_IMPORT_INSUFFICIENT_PRIVILEGE = 34;</code>
     */
    const MYSQL_PARALLEL_IMPORT_INSUFFICIENT_PRIVILEGE = 34;

    private static $valueToName = [
        self::SQL_EXTERNAL_SYNC_SETTING_ERROR_TYPE_UNSPECIFIED => 'SQL_EXTERNAL_SYNC_SETTING_ERROR_TYPE_UNSPECIFIED',
        self::CONNECTION_FAILURE => 'CONNECTION_FAILURE',
        self::BINLOG_NOT_ENABLED => 'BINLOG_NOT_ENABLED',
        self::INCOMPATIBLE_DATABASE_VERSION => 'INCOMPATIBLE_DATABASE_VERSION',
        self::REPLICA_ALREADY_SETUP => 'REPLICA_ALREADY_SETUP',
        self::INSUFFICIENT_PRIVILEGE => 'INSUFFICIENT_PRIVILEGE',
        self::UNSUPPORTED_MIGRATION_TYPE => 'UNSUPPORTED_MIGRATION_TYPE',
        self::NO_PGLOGICAL_INSTALLED => 'NO_PGLOGICAL_INSTALLED',
        self::PGLOGICAL_NODE_ALREADY_EXISTS => 'PGLOGICAL_NODE_ALREADY_EXISTS',
        self::INVALID_WAL_LEVEL => 'INVALID_WAL_LEVEL',
        self::INVALID_SHARED_PRELOAD_LIBRARY => 'INVALID_SHARED_PRELOAD_LIBRARY',
        self::INSUFFICIENT_MAX_REPLICATION_SLOTS => 'INSUFFICIENT_MAX_REPLICATION_SLOTS',
        self::INSUFFICIENT_MAX_WAL_SENDERS => 'INSUFFICIENT_MAX_WAL_SENDERS',
        self::INSUFFICIENT_MAX_WORKER_PROCESSES => 'INSUFFICIENT_MAX_WORKER_PROCESSES',
        self::UNSUPPORTED_EXTENSIONS => 'UNSUPPORTED_EXTENSIONS',
        self::INVALID_RDS_LOGICAL_REPLICATION => 'INVALID_RDS_LOGICAL_REPLICATION',
        self::INVALID_LOGGING_SETUP => 'INVALID_LOGGING_SETUP',
        self::INVALID_DB_PARAM => 'INVALID_DB_PARAM',
        self::UNSUPPORTED_GTID_MODE => 'UNSUPPORTED_GTID_MODE',
        self::SQLSERVER_AGENT_NOT_RUNNING => 'SQLSERVER_AGENT_NOT_RUNNING',
        self::UNSUPPORTED_TABLE_DEFINITION => 'UNSUPPORTED_TABLE_DEFINITION',
        self::UNSUPPORTED_DEFINER => 'UNSUPPORTED_DEFINER',
        self::SQLSERVER_SERVERNAME_MISMATCH => 'SQLSERVER_SERVERNAME_MISMATCH',
        self::PRIMARY_ALREADY_SETUP => 'PRIMARY_ALREADY_SETUP',
        self::UNSUPPORTED_BINLOG_FORMAT => 'UNSUPPORTED_BINLOG_FORMAT',
        self::BINLOG_RETENTION_SETTING => 'BINLOG_RETENTION_SETTING',
        self::UNSUPPORTED_STORAGE_ENGINE => 'UNSUPPORTED_STORAGE_ENGINE',
        self::LIMITED_SUPPORT_TABLES => 'LIMITED_SUPPORT_TABLES',
        self::EXISTING_DATA_IN_REPLICA => 'EXISTING_DATA_IN_REPLICA',
        self::MISSING_OPTIONAL_PRIVILEGES => 'MISSING_OPTIONAL_PRIVILEGES',
        self::RISKY_BACKUP_ADMIN_PRIVILEGE => 'RISKY_BACKUP_ADMIN_PRIVILEGE',
        self::INSUFFICIENT_GCS_PERMISSIONS => 'INSUFFICIENT_GCS_PERMISSIONS',
        self::INVALID_FILE_INFO => 'INVALID_FILE_INFO',
        self::UNSUPPORTED_DATABASE_SETTINGS => 'UNSUPPORTED_DATABASE_SETTINGS',
        self::MYSQL_PARALLEL_IMPORT_INSUFFICIENT_PRIVILEGE => 'MYSQL_PARALLEL_IMPORT_INSUFFICIENT_PRIVILEGE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


