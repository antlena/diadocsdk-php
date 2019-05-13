<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Documents/Document.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Documents;

/**
 * Protobuf enum : Antlena.SDK.Diadoc.Proto.Documents.GeneralReceiptStatus
 */
class GeneralReceiptStatus extends \Protobuf\Enum
{

    /**
     * GeneralReceiptStatusUnknown = 0
     */
    const GeneralReceiptStatusUnknown_VALUE = 0;

    /**
     * GeneralReceiptStatusNotAcceptable = 1
     */
    const GeneralReceiptStatusNotAcceptable_VALUE = 1;

    /**
     * HaveToCreateReceipt = 2
     */
    const HaveToCreateReceipt_VALUE = 2;

    /**
     * WaitingForReceipt = 3
     */
    const WaitingForReceipt_VALUE = 3;

    /**
     * Finished = 4
     */
    const Finished_VALUE = 4;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\GeneralReceiptStatus
     */
    protected static $GeneralReceiptStatusUnknown = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\GeneralReceiptStatus
     */
    protected static $GeneralReceiptStatusNotAcceptable = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\GeneralReceiptStatus
     */
    protected static $HaveToCreateReceipt = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\GeneralReceiptStatus
     */
    protected static $WaitingForReceipt = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\GeneralReceiptStatus
     */
    protected static $Finished = null;

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\GeneralReceiptStatus
     */
    public static function GeneralReceiptStatusUnknown()
    {
        if (self::$GeneralReceiptStatusUnknown !== null) {
            return self::$GeneralReceiptStatusUnknown;
        }

        return self::$GeneralReceiptStatusUnknown = new self('GeneralReceiptStatusUnknown', self::GeneralReceiptStatusUnknown_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\GeneralReceiptStatus
     */
    public static function GeneralReceiptStatusNotAcceptable()
    {
        if (self::$GeneralReceiptStatusNotAcceptable !== null) {
            return self::$GeneralReceiptStatusNotAcceptable;
        }

        return self::$GeneralReceiptStatusNotAcceptable = new self('GeneralReceiptStatusNotAcceptable', self::GeneralReceiptStatusNotAcceptable_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\GeneralReceiptStatus
     */
    public static function HaveToCreateReceipt()
    {
        if (self::$HaveToCreateReceipt !== null) {
            return self::$HaveToCreateReceipt;
        }

        return self::$HaveToCreateReceipt = new self('HaveToCreateReceipt', self::HaveToCreateReceipt_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\GeneralReceiptStatus
     */
    public static function WaitingForReceipt()
    {
        if (self::$WaitingForReceipt !== null) {
            return self::$WaitingForReceipt;
        }

        return self::$WaitingForReceipt = new self('WaitingForReceipt', self::WaitingForReceipt_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\GeneralReceiptStatus
     */
    public static function Finished()
    {
        if (self::$Finished !== null) {
            return self::$Finished;
        }

        return self::$Finished = new self('Finished', self::Finished_VALUE);
    }

    /**
     * @param int $value
     * @return \Antlena\SDK\Diadoc\Proto\Documents\GeneralReceiptStatus
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::GeneralReceiptStatusUnknown();
            case 1: return self::GeneralReceiptStatusNotAcceptable();
            case 2: return self::HaveToCreateReceipt();
            case 3: return self::WaitingForReceipt();
            case 4: return self::Finished();
            default: return null;
        }
    }


}

