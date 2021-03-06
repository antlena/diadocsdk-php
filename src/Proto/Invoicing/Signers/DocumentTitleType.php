<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Invoicing/ExtendedSigner.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Invoicing\Signers;

/**
 * Protobuf enum : Antlena.SDK.Diadoc.Proto.Invoicing.Signers.DocumentTitleType
 */
class DocumentTitleType extends \Protobuf\Enum
{

    /**
     * UtdSeller = 0
     */
    const UtdSeller_VALUE = 0;

    /**
     * UtdBuyer = 1
     */
    const UtdBuyer_VALUE = 1;

    /**
     * UcdSeller = 2
     */
    const UcdSeller_VALUE = 2;

    /**
     * UcdBuyer = 3
     */
    const UcdBuyer_VALUE = 3;

    /**
     * TovTorg551Seller = 4
     */
    const TovTorg551Seller_VALUE = 4;

    /**
     * TovTorg551Buyer = 5
     */
    const TovTorg551Buyer_VALUE = 5;

    /**
     * AccCert552Seller = 6
     */
    const AccCert552Seller_VALUE = 6;

    /**
     * AccCert552Buyer = 7
     */
    const AccCert552Buyer_VALUE = 7;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Invoicing\Signers\DocumentTitleType
     */
    protected static $UtdSeller = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Invoicing\Signers\DocumentTitleType
     */
    protected static $UtdBuyer = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Invoicing\Signers\DocumentTitleType
     */
    protected static $UcdSeller = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Invoicing\Signers\DocumentTitleType
     */
    protected static $UcdBuyer = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Invoicing\Signers\DocumentTitleType
     */
    protected static $TovTorg551Seller = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Invoicing\Signers\DocumentTitleType
     */
    protected static $TovTorg551Buyer = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Invoicing\Signers\DocumentTitleType
     */
    protected static $AccCert552Seller = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\Invoicing\Signers\DocumentTitleType
     */
    protected static $AccCert552Buyer = null;

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Invoicing\Signers\DocumentTitleType
     */
    public static function UtdSeller()
    {
        if (self::$UtdSeller !== null) {
            return self::$UtdSeller;
        }

        return self::$UtdSeller = new self('UtdSeller', self::UtdSeller_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Invoicing\Signers\DocumentTitleType
     */
    public static function UtdBuyer()
    {
        if (self::$UtdBuyer !== null) {
            return self::$UtdBuyer;
        }

        return self::$UtdBuyer = new self('UtdBuyer', self::UtdBuyer_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Invoicing\Signers\DocumentTitleType
     */
    public static function UcdSeller()
    {
        if (self::$UcdSeller !== null) {
            return self::$UcdSeller;
        }

        return self::$UcdSeller = new self('UcdSeller', self::UcdSeller_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Invoicing\Signers\DocumentTitleType
     */
    public static function UcdBuyer()
    {
        if (self::$UcdBuyer !== null) {
            return self::$UcdBuyer;
        }

        return self::$UcdBuyer = new self('UcdBuyer', self::UcdBuyer_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Invoicing\Signers\DocumentTitleType
     */
    public static function TovTorg551Seller()
    {
        if (self::$TovTorg551Seller !== null) {
            return self::$TovTorg551Seller;
        }

        return self::$TovTorg551Seller = new self('TovTorg551Seller', self::TovTorg551Seller_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Invoicing\Signers\DocumentTitleType
     */
    public static function TovTorg551Buyer()
    {
        if (self::$TovTorg551Buyer !== null) {
            return self::$TovTorg551Buyer;
        }

        return self::$TovTorg551Buyer = new self('TovTorg551Buyer', self::TovTorg551Buyer_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Invoicing\Signers\DocumentTitleType
     */
    public static function AccCert552Seller()
    {
        if (self::$AccCert552Seller !== null) {
            return self::$AccCert552Seller;
        }

        return self::$AccCert552Seller = new self('AccCert552Seller', self::AccCert552Seller_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\Invoicing\Signers\DocumentTitleType
     */
    public static function AccCert552Buyer()
    {
        if (self::$AccCert552Buyer !== null) {
            return self::$AccCert552Buyer;
        }

        return self::$AccCert552Buyer = new self('AccCert552Buyer', self::AccCert552Buyer_VALUE);
    }

    /**
     * @param int $value
     * @return \Antlena\SDK\Diadoc\Proto\Invoicing\Signers\DocumentTitleType
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UtdSeller();
            case 1: return self::UtdBuyer();
            case 2: return self::UcdSeller();
            case 3: return self::UcdBuyer();
            case 4: return self::TovTorg551Seller();
            case 5: return self::TovTorg551Buyer();
            case 6: return self::AccCert552Seller();
            case 7: return self::AccCert552Buyer();
            default: return null;
        }
    }


}

