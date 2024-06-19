<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1alpha/metastore.proto

namespace Google\Cloud\Metastore\V1alpha\MetadataExport;

use UnexpectedValueException;

/**
 * The current state of the metadata export.
 *
 * Protobuf type <code>google.cloud.metastore.v1alpha.MetadataExport.State</code>
 */
class State
{
    /**
     * The state of the metadata export is unknown.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The metadata export is running.
     *
     * Generated from protobuf enum <code>RUNNING = 1;</code>
     */
    const RUNNING = 1;
    /**
     * The metadata export completed successfully.
     *
     * Generated from protobuf enum <code>SUCCEEDED = 2;</code>
     */
    const SUCCEEDED = 2;
    /**
     * The metadata export failed.
     *
     * Generated from protobuf enum <code>FAILED = 3;</code>
     */
    const FAILED = 3;
    /**
     * The metadata export is cancelled.
     *
     * Generated from protobuf enum <code>CANCELLED = 4;</code>
     */
    const CANCELLED = 4;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::RUNNING => 'RUNNING',
        self::SUCCEEDED => 'SUCCEEDED',
        self::FAILED => 'FAILED',
        self::CANCELLED => 'CANCELLED',
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


