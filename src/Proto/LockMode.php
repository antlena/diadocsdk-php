<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : LockMode.proto
 */


namespace Antlena\SDK\Diadoc\Proto;

/**
 * Protobuf enum : Antlena.SDK.Diadoc.Proto.LockMode
 */
class LockMode extends \Protobuf\Enum
{

    /**
     * Unknown = 0
     */
    const Unknown_VALUE = 0;

    /**
     * None = 1
     */
    const None_VALUE = 1;

    /**
     * Send = 2
     */
    const Send_VALUE = 2;

    /**
     * Full = 3
     */
    const Full_VALUE = 3;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\LockMode
     */
    protected static $Unknown = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\LockMode
     */
    protected static $None = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\LockMode
     */
    protected static $Send = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\LockMode
     */
    protected static $Full = null;

    /**
     * @return \Antlena\SDK\Diadoc\Proto\LockMode
     */
    public static function Unknown()
    {
        if (self::$Unknown !== null) {
            return self::$Unknown;
        }

        return self::$Unknown = new self('Unknown', self::Unknown_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\LockMode
     */
    public static function None()
    {
        if (self::$None !== null) {
            return self::$None;
        }

        return self::$None = new self('None', self::None_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\LockMode
     */
    public static function Send()
    {
        if (self::$Send !== null) {
            return self::$Send;
        }

        return self::$Send = new self('Send', self::Send_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\LockMode
     */
    public static function Full()
    {
        if (self::$Full !== null) {
            return self::$Full;
        }

        return self::$Full = new self('Full', self::Full_VALUE);
    }

    /**
     * @param int $value
     * @return \Antlena\SDK\Diadoc\Proto\LockMode
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::Unknown();
            case 1: return self::None();
            case 2: return self::Send();
            case 3: return self::Full();
            default: return null;
        }
    }


}
