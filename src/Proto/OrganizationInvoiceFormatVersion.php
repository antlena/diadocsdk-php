<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Organization.proto
 */


namespace Antlena\SDK\Diadoc\Proto;

/**
 * Protobuf enum : Antlena.SDK.Diadoc.Proto.OrganizationInvoiceFormatVersion
 */
class OrganizationInvoiceFormatVersion extends \Protobuf\Enum
{

    /**
     * v5_01 = 1
     */
    const v5_01_VALUE = 1;

    /**
     * v5_02 = 2
     */
    const v5_02_VALUE = 2;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\OrganizationInvoiceFormatVersion
     */
    protected static $v5_01 = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\OrganizationInvoiceFormatVersion
     */
    protected static $v5_02 = null;

    /**
     * @return \Antlena\SDK\Diadoc\Proto\OrganizationInvoiceFormatVersion
     */
    public static function v5_01()
    {
        if (self::$v5_01 !== null) {
            return self::$v5_01;
        }

        return self::$v5_01 = new self('v5_01', self::v5_01_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\OrganizationInvoiceFormatVersion
     */
    public static function v5_02()
    {
        if (self::$v5_02 !== null) {
            return self::$v5_02;
        }

        return self::$v5_02 = new self('v5_02', self::v5_02_VALUE);
    }

    /**
     * @param int $value
     * @return \Antlena\SDK\Diadoc\Proto\OrganizationInvoiceFormatVersion
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 1: return self::v5_01();
            case 2: return self::v5_02();
            default: return null;
        }
    }


}
