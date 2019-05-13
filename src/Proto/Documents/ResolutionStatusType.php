<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Documents/Document.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Documents;

/**
 * Protobuf enum : Antlena.SDK.Diadoc.Proto.Documents.ResolutionStatusType
 */
class ResolutionStatusType extends \Protobuf\Enum
{

    /**
     * UnknownResolutionStatus = -1
     */
    const UnknownResolutionStatus_VALUE = -1;

    /**
     * None = 0
     */
    const None_VALUE = 0;

    /**
     * Approved = 1
     */
    const Approved_VALUE = 1;

    /**
     * Disapproved = 2
     */
    const Disapproved_VALUE = 2;

    /**
     * ApprovementRequested = 3
     */
    const ApprovementRequested_VALUE = 3;

    /**
     * SignatureRequested = 4
     */
    const SignatureRequested_VALUE = 4;

    /**
     * SignatureDenied = 5
     */
    const SignatureDenied_VALUE = 5;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\ResolutionStatusType
     */
    protected static $UnknownResolutionStatus = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\ResolutionStatusType
     */
    protected static $None = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\ResolutionStatusType
     */
    protected static $Approved = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\ResolutionStatusType
     */
    protected static $Disapproved = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\ResolutionStatusType
     */
    protected static $ApprovementRequested = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\ResolutionStatusType
     */
    protected static $SignatureRequested = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\ResolutionStatusType
     */
    protected static $SignatureDenied = null;

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\ResolutionStatusType
     */
    public static function UnknownResolutionStatus()
    {
        if (self::$UnknownResolutionStatus !== null) {
            return self::$UnknownResolutionStatus;
        }

        return self::$UnknownResolutionStatus = new self('UnknownResolutionStatus', self::UnknownResolutionStatus_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\ResolutionStatusType
     */
    public static function None()
    {
        if (self::$None !== null) {
            return self::$None;
        }

        return self::$None = new self('None', self::None_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\ResolutionStatusType
     */
    public static function Approved()
    {
        if (self::$Approved !== null) {
            return self::$Approved;
        }

        return self::$Approved = new self('Approved', self::Approved_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\ResolutionStatusType
     */
    public static function Disapproved()
    {
        if (self::$Disapproved !== null) {
            return self::$Disapproved;
        }

        return self::$Disapproved = new self('Disapproved', self::Disapproved_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\ResolutionStatusType
     */
    public static function ApprovementRequested()
    {
        if (self::$ApprovementRequested !== null) {
            return self::$ApprovementRequested;
        }

        return self::$ApprovementRequested = new self('ApprovementRequested', self::ApprovementRequested_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\ResolutionStatusType
     */
    public static function SignatureRequested()
    {
        if (self::$SignatureRequested !== null) {
            return self::$SignatureRequested;
        }

        return self::$SignatureRequested = new self('SignatureRequested', self::SignatureRequested_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\ResolutionStatusType
     */
    public static function SignatureDenied()
    {
        if (self::$SignatureDenied !== null) {
            return self::$SignatureDenied;
        }

        return self::$SignatureDenied = new self('SignatureDenied', self::SignatureDenied_VALUE);
    }

    /**
     * @param int $value
     * @return \Antlena\SDK\Diadoc\Proto\Documents\ResolutionStatusType
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case -1: return self::UnknownResolutionStatus();
            case 0: return self::None();
            case 1: return self::Approved();
            case 2: return self::Disapproved();
            case 3: return self::ApprovementRequested();
            case 4: return self::SignatureRequested();
            case 5: return self::SignatureDenied();
            default: return null;
        }
    }


}
