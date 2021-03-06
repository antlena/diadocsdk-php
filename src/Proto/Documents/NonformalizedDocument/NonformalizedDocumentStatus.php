<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Documents/NonformalizedDocument.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument;

/**
 * Protobuf enum :
 * Antlena.SDK.Diadoc.Proto.Documents.NonformalizedDocument.NonformalizedDocumentStatus
 */
class NonformalizedDocumentStatus extends \Protobuf\Enum
{

    /**
     * UnknownNonformalizedDocumentStatus = 0
     */
    const UnknownNonformalizedDocumentStatus_VALUE = 0;

    /**
     * OutboundNoRecipientSignatureRequest = 1
     */
    const OutboundNoRecipientSignatureRequest_VALUE = 1;

    /**
     * OutboundWaitingForRecipientSignature = 2
     */
    const OutboundWaitingForRecipientSignature_VALUE = 2;

    /**
     * OutboundWithRecipientSignature = 3
     */
    const OutboundWithRecipientSignature_VALUE = 3;

    /**
     * OutboundRecipientSignatureRequestRejected = 4
     */
    const OutboundRecipientSignatureRequestRejected_VALUE = 4;

    /**
     * OutboundWaitingForSenderSignature = 13
     */
    const OutboundWaitingForSenderSignature_VALUE = 13;

    /**
     * OutboundInvalidSenderSignature = 14
     */
    const OutboundInvalidSenderSignature_VALUE = 14;

    /**
     * InboundNoRecipientSignatureRequest = 5
     */
    const InboundNoRecipientSignatureRequest_VALUE = 5;

    /**
     * InboundWaitingForRecipientSignature = 6
     */
    const InboundWaitingForRecipientSignature_VALUE = 6;

    /**
     * InboundWithRecipientSignature = 7
     */
    const InboundWithRecipientSignature_VALUE = 7;

    /**
     * InboundRecipientSignatureRequestRejected = 8
     */
    const InboundRecipientSignatureRequestRejected_VALUE = 8;

    /**
     * InboundInvalidRecipientSignature = 15
     */
    const InboundInvalidRecipientSignature_VALUE = 15;

    /**
     * InternalNoRecipientSignatureRequest = 9
     */
    const InternalNoRecipientSignatureRequest_VALUE = 9;

    /**
     * InternalWaitingForRecipientSignature = 10
     */
    const InternalWaitingForRecipientSignature_VALUE = 10;

    /**
     * InternalWithRecipientSignature = 11
     */
    const InternalWithRecipientSignature_VALUE = 11;

    /**
     * InternalRecipientSignatureRequestRejected = 12
     */
    const InternalRecipientSignatureRequestRejected_VALUE = 12;

    /**
     * InternalWaitingForSenderSignature = 16
     */
    const InternalWaitingForSenderSignature_VALUE = 16;

    /**
     * InternalInvalidSenderSignature = 17
     */
    const InternalInvalidSenderSignature_VALUE = 17;

    /**
     * InternalInvalidRecipientSignature = 18
     */
    const InternalInvalidRecipientSignature_VALUE = 18;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    protected static $UnknownNonformalizedDocumentStatus = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    protected static $OutboundNoRecipientSignatureRequest = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    protected static $OutboundWaitingForRecipientSignature = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    protected static $OutboundWithRecipientSignature = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    protected static $OutboundRecipientSignatureRequestRejected = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    protected static $OutboundWaitingForSenderSignature = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    protected static $OutboundInvalidSenderSignature = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    protected static $InboundNoRecipientSignatureRequest = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    protected static $InboundWaitingForRecipientSignature = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    protected static $InboundWithRecipientSignature = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    protected static $InboundRecipientSignatureRequestRejected = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    protected static $InboundInvalidRecipientSignature = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    protected static $InternalNoRecipientSignatureRequest = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    protected static $InternalWaitingForRecipientSignature = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    protected static $InternalWithRecipientSignature = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    protected static $InternalRecipientSignatureRequestRejected = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    protected static $InternalWaitingForSenderSignature = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    protected static $InternalInvalidSenderSignature = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    protected static $InternalInvalidRecipientSignature = null;

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    public static function UnknownNonformalizedDocumentStatus()
    {
        if (self::$UnknownNonformalizedDocumentStatus !== null) {
            return self::$UnknownNonformalizedDocumentStatus;
        }

        return self::$UnknownNonformalizedDocumentStatus = new self('UnknownNonformalizedDocumentStatus', self::UnknownNonformalizedDocumentStatus_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    public static function OutboundNoRecipientSignatureRequest()
    {
        if (self::$OutboundNoRecipientSignatureRequest !== null) {
            return self::$OutboundNoRecipientSignatureRequest;
        }

        return self::$OutboundNoRecipientSignatureRequest = new self('OutboundNoRecipientSignatureRequest', self::OutboundNoRecipientSignatureRequest_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    public static function OutboundWaitingForRecipientSignature()
    {
        if (self::$OutboundWaitingForRecipientSignature !== null) {
            return self::$OutboundWaitingForRecipientSignature;
        }

        return self::$OutboundWaitingForRecipientSignature = new self('OutboundWaitingForRecipientSignature', self::OutboundWaitingForRecipientSignature_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    public static function OutboundWithRecipientSignature()
    {
        if (self::$OutboundWithRecipientSignature !== null) {
            return self::$OutboundWithRecipientSignature;
        }

        return self::$OutboundWithRecipientSignature = new self('OutboundWithRecipientSignature', self::OutboundWithRecipientSignature_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    public static function OutboundRecipientSignatureRequestRejected()
    {
        if (self::$OutboundRecipientSignatureRequestRejected !== null) {
            return self::$OutboundRecipientSignatureRequestRejected;
        }

        return self::$OutboundRecipientSignatureRequestRejected = new self('OutboundRecipientSignatureRequestRejected', self::OutboundRecipientSignatureRequestRejected_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    public static function OutboundWaitingForSenderSignature()
    {
        if (self::$OutboundWaitingForSenderSignature !== null) {
            return self::$OutboundWaitingForSenderSignature;
        }

        return self::$OutboundWaitingForSenderSignature = new self('OutboundWaitingForSenderSignature', self::OutboundWaitingForSenderSignature_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    public static function OutboundInvalidSenderSignature()
    {
        if (self::$OutboundInvalidSenderSignature !== null) {
            return self::$OutboundInvalidSenderSignature;
        }

        return self::$OutboundInvalidSenderSignature = new self('OutboundInvalidSenderSignature', self::OutboundInvalidSenderSignature_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    public static function InboundNoRecipientSignatureRequest()
    {
        if (self::$InboundNoRecipientSignatureRequest !== null) {
            return self::$InboundNoRecipientSignatureRequest;
        }

        return self::$InboundNoRecipientSignatureRequest = new self('InboundNoRecipientSignatureRequest', self::InboundNoRecipientSignatureRequest_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    public static function InboundWaitingForRecipientSignature()
    {
        if (self::$InboundWaitingForRecipientSignature !== null) {
            return self::$InboundWaitingForRecipientSignature;
        }

        return self::$InboundWaitingForRecipientSignature = new self('InboundWaitingForRecipientSignature', self::InboundWaitingForRecipientSignature_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    public static function InboundWithRecipientSignature()
    {
        if (self::$InboundWithRecipientSignature !== null) {
            return self::$InboundWithRecipientSignature;
        }

        return self::$InboundWithRecipientSignature = new self('InboundWithRecipientSignature', self::InboundWithRecipientSignature_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    public static function InboundRecipientSignatureRequestRejected()
    {
        if (self::$InboundRecipientSignatureRequestRejected !== null) {
            return self::$InboundRecipientSignatureRequestRejected;
        }

        return self::$InboundRecipientSignatureRequestRejected = new self('InboundRecipientSignatureRequestRejected', self::InboundRecipientSignatureRequestRejected_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    public static function InboundInvalidRecipientSignature()
    {
        if (self::$InboundInvalidRecipientSignature !== null) {
            return self::$InboundInvalidRecipientSignature;
        }

        return self::$InboundInvalidRecipientSignature = new self('InboundInvalidRecipientSignature', self::InboundInvalidRecipientSignature_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    public static function InternalNoRecipientSignatureRequest()
    {
        if (self::$InternalNoRecipientSignatureRequest !== null) {
            return self::$InternalNoRecipientSignatureRequest;
        }

        return self::$InternalNoRecipientSignatureRequest = new self('InternalNoRecipientSignatureRequest', self::InternalNoRecipientSignatureRequest_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    public static function InternalWaitingForRecipientSignature()
    {
        if (self::$InternalWaitingForRecipientSignature !== null) {
            return self::$InternalWaitingForRecipientSignature;
        }

        return self::$InternalWaitingForRecipientSignature = new self('InternalWaitingForRecipientSignature', self::InternalWaitingForRecipientSignature_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    public static function InternalWithRecipientSignature()
    {
        if (self::$InternalWithRecipientSignature !== null) {
            return self::$InternalWithRecipientSignature;
        }

        return self::$InternalWithRecipientSignature = new self('InternalWithRecipientSignature', self::InternalWithRecipientSignature_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    public static function InternalRecipientSignatureRequestRejected()
    {
        if (self::$InternalRecipientSignatureRequestRejected !== null) {
            return self::$InternalRecipientSignatureRequestRejected;
        }

        return self::$InternalRecipientSignatureRequestRejected = new self('InternalRecipientSignatureRequestRejected', self::InternalRecipientSignatureRequestRejected_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    public static function InternalWaitingForSenderSignature()
    {
        if (self::$InternalWaitingForSenderSignature !== null) {
            return self::$InternalWaitingForSenderSignature;
        }

        return self::$InternalWaitingForSenderSignature = new self('InternalWaitingForSenderSignature', self::InternalWaitingForSenderSignature_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    public static function InternalInvalidSenderSignature()
    {
        if (self::$InternalInvalidSenderSignature !== null) {
            return self::$InternalInvalidSenderSignature;
        }

        return self::$InternalInvalidSenderSignature = new self('InternalInvalidSenderSignature', self::InternalInvalidSenderSignature_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    public static function InternalInvalidRecipientSignature()
    {
        if (self::$InternalInvalidRecipientSignature !== null) {
            return self::$InternalInvalidRecipientSignature;
        }

        return self::$InternalInvalidRecipientSignature = new self('InternalInvalidRecipientSignature', self::InternalInvalidRecipientSignature_VALUE);
    }

    /**
     * @param int $value
     * @return \Antlena\SDK\Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UnknownNonformalizedDocumentStatus();
            case 1: return self::OutboundNoRecipientSignatureRequest();
            case 2: return self::OutboundWaitingForRecipientSignature();
            case 3: return self::OutboundWithRecipientSignature();
            case 4: return self::OutboundRecipientSignatureRequestRejected();
            case 13: return self::OutboundWaitingForSenderSignature();
            case 14: return self::OutboundInvalidSenderSignature();
            case 5: return self::InboundNoRecipientSignatureRequest();
            case 6: return self::InboundWaitingForRecipientSignature();
            case 7: return self::InboundWithRecipientSignature();
            case 8: return self::InboundRecipientSignatureRequestRejected();
            case 15: return self::InboundInvalidRecipientSignature();
            case 9: return self::InternalNoRecipientSignatureRequest();
            case 10: return self::InternalWaitingForRecipientSignature();
            case 11: return self::InternalWithRecipientSignature();
            case 12: return self::InternalRecipientSignatureRequestRejected();
            case 16: return self::InternalWaitingForSenderSignature();
            case 17: return self::InternalInvalidSenderSignature();
            case 18: return self::InternalInvalidRecipientSignature();
            default: return null;
        }
    }


}

