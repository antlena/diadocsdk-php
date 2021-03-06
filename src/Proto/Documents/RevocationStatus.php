<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Documents/Document.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Documents;

/**
 * Protobuf enum : Antlena.SDK.Diadoc.Proto.Documents.RevocationStatus
 */
class RevocationStatus extends \Protobuf\Enum
{

    /**
     * UnknownRevocationStatus = 0
     */
    const UnknownRevocationStatus_VALUE = 0;

    /**
     * RevocationStatusNone = 1
     */
    const RevocationStatusNone_VALUE = 1;

    /**
     * RevocationIsRequestedByMe = 2
     */
    const RevocationIsRequestedByMe_VALUE = 2;

    /**
     * RequestsMyRevocation = 3
     */
    const RequestsMyRevocation_VALUE = 3;

    /**
     * RevocationAccepted = 4
     */
    const RevocationAccepted_VALUE = 4;

    /**
     * RevocationRejected = 5
     */
    const RevocationRejected_VALUE = 5;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\RevocationStatus
     */
    protected static $UnknownRevocationStatus = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\RevocationStatus
     */
    protected static $RevocationStatusNone = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\RevocationStatus
     */
    protected static $RevocationIsRequestedByMe = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\RevocationStatus
     */
    protected static $RequestsMyRevocation = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\RevocationStatus
     */
    protected static $RevocationAccepted = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\RevocationStatus
     */
    protected static $RevocationRejected = null;

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\RevocationStatus
     */
    public static function UnknownRevocationStatus()
    {
        if (self::$UnknownRevocationStatus !== null) {
            return self::$UnknownRevocationStatus;
        }

        return self::$UnknownRevocationStatus = new self('UnknownRevocationStatus', self::UnknownRevocationStatus_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\RevocationStatus
     */
    public static function RevocationStatusNone()
    {
        if (self::$RevocationStatusNone !== null) {
            return self::$RevocationStatusNone;
        }

        return self::$RevocationStatusNone = new self('RevocationStatusNone', self::RevocationStatusNone_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\RevocationStatus
     */
    public static function RevocationIsRequestedByMe()
    {
        if (self::$RevocationIsRequestedByMe !== null) {
            return self::$RevocationIsRequestedByMe;
        }

        return self::$RevocationIsRequestedByMe = new self('RevocationIsRequestedByMe', self::RevocationIsRequestedByMe_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\RevocationStatus
     */
    public static function RequestsMyRevocation()
    {
        if (self::$RequestsMyRevocation !== null) {
            return self::$RequestsMyRevocation;
        }

        return self::$RequestsMyRevocation = new self('RequestsMyRevocation', self::RequestsMyRevocation_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\RevocationStatus
     */
    public static function RevocationAccepted()
    {
        if (self::$RevocationAccepted !== null) {
            return self::$RevocationAccepted;
        }

        return self::$RevocationAccepted = new self('RevocationAccepted', self::RevocationAccepted_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\RevocationStatus
     */
    public static function RevocationRejected()
    {
        if (self::$RevocationRejected !== null) {
            return self::$RevocationRejected;
        }

        return self::$RevocationRejected = new self('RevocationRejected', self::RevocationRejected_VALUE);
    }

    /**
     * @param int $value
     * @return \Antlena\SDK\Diadoc\Proto\Documents\RevocationStatus
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UnknownRevocationStatus();
            case 1: return self::RevocationStatusNone();
            case 2: return self::RevocationIsRequestedByMe();
            case 3: return self::RequestsMyRevocation();
            case 4: return self::RevocationAccepted();
            case 5: return self::RevocationRejected();
            default: return null;
        }
    }


}

