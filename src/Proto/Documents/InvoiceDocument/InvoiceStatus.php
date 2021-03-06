<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Documents/InvoiceDocument.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument;

/**
 * Protobuf enum : Antlena.SDK.Diadoc.Proto.Documents.InvoiceDocument.InvoiceStatus
 */
class InvoiceStatus extends \Protobuf\Enum
{

    /**
     * UnknownInvoiceStatus = 0
     */
    const UnknownInvoiceStatus_VALUE = 0;

    /**
     * OutboundWaitingForInvoiceReceipt = 1
     */
    const OutboundWaitingForInvoiceReceipt_VALUE = 1;

    /**
     * OutboundNotFinished = 2
     */
    const OutboundNotFinished_VALUE = 2;

    /**
     * OutboundFinished = 3
     */
    const OutboundFinished_VALUE = 3;

    /**
     * OutboundWaitingForSenderSignature = 6
     */
    const OutboundWaitingForSenderSignature_VALUE = 6;

    /**
     * OutboundInvalidSenderSignature = 7
     */
    const OutboundInvalidSenderSignature_VALUE = 7;

    /**
     * InboundNotFinished = 4
     */
    const InboundNotFinished_VALUE = 4;

    /**
     * InboundFinished = 5
     */
    const InboundFinished_VALUE = 5;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus
     */
    protected static $UnknownInvoiceStatus = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus
     */
    protected static $OutboundWaitingForInvoiceReceipt = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus
     */
    protected static $OutboundNotFinished = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus
     */
    protected static $OutboundFinished = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus
     */
    protected static $OutboundWaitingForSenderSignature = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus
     */
    protected static $OutboundInvalidSenderSignature = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus
     */
    protected static $InboundNotFinished = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus
     */
    protected static $InboundFinished = null;

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus
     */
    public static function UnknownInvoiceStatus()
    {
        if (self::$UnknownInvoiceStatus !== null) {
            return self::$UnknownInvoiceStatus;
        }

        return self::$UnknownInvoiceStatus = new self('UnknownInvoiceStatus', self::UnknownInvoiceStatus_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus
     */
    public static function OutboundWaitingForInvoiceReceipt()
    {
        if (self::$OutboundWaitingForInvoiceReceipt !== null) {
            return self::$OutboundWaitingForInvoiceReceipt;
        }

        return self::$OutboundWaitingForInvoiceReceipt = new self('OutboundWaitingForInvoiceReceipt', self::OutboundWaitingForInvoiceReceipt_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus
     */
    public static function OutboundNotFinished()
    {
        if (self::$OutboundNotFinished !== null) {
            return self::$OutboundNotFinished;
        }

        return self::$OutboundNotFinished = new self('OutboundNotFinished', self::OutboundNotFinished_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus
     */
    public static function OutboundFinished()
    {
        if (self::$OutboundFinished !== null) {
            return self::$OutboundFinished;
        }

        return self::$OutboundFinished = new self('OutboundFinished', self::OutboundFinished_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus
     */
    public static function OutboundWaitingForSenderSignature()
    {
        if (self::$OutboundWaitingForSenderSignature !== null) {
            return self::$OutboundWaitingForSenderSignature;
        }

        return self::$OutboundWaitingForSenderSignature = new self('OutboundWaitingForSenderSignature', self::OutboundWaitingForSenderSignature_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus
     */
    public static function OutboundInvalidSenderSignature()
    {
        if (self::$OutboundInvalidSenderSignature !== null) {
            return self::$OutboundInvalidSenderSignature;
        }

        return self::$OutboundInvalidSenderSignature = new self('OutboundInvalidSenderSignature', self::OutboundInvalidSenderSignature_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus
     */
    public static function InboundNotFinished()
    {
        if (self::$InboundNotFinished !== null) {
            return self::$InboundNotFinished;
        }

        return self::$InboundNotFinished = new self('InboundNotFinished', self::InboundNotFinished_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus
     */
    public static function InboundFinished()
    {
        if (self::$InboundFinished !== null) {
            return self::$InboundFinished;
        }

        return self::$InboundFinished = new self('InboundFinished', self::InboundFinished_VALUE);
    }

    /**
     * @param int $value
     * @return \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UnknownInvoiceStatus();
            case 1: return self::OutboundWaitingForInvoiceReceipt();
            case 2: return self::OutboundNotFinished();
            case 3: return self::OutboundFinished();
            case 6: return self::OutboundWaitingForSenderSignature();
            case 7: return self::OutboundInvalidSenderSignature();
            case 4: return self::InboundNotFinished();
            case 5: return self::InboundFinished();
            default: return null;
        }
    }


}

