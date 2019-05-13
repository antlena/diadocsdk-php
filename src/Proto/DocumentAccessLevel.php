<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : OrganizationUserPermissions.proto
 */


namespace Antlena\SDK\Diadoc\Proto;

/**
 * Protobuf enum : Antlena.SDK.Diadoc.Proto.DocumentAccessLevel
 */
class DocumentAccessLevel extends \Protobuf\Enum
{

    /**
     * UnknownDocumentAccessLevel = -1
     */
    const UnknownDocumentAccessLevel_VALUE = -1;

    /**
     * DepartmentOnly = 0
     */
    const DepartmentOnly_VALUE = 0;

    /**
     * DepartmentAndSubdepartments = 1
     */
    const DepartmentAndSubdepartments_VALUE = 1;

    /**
     * AllDocuments = 2
     */
    const AllDocuments_VALUE = 2;

    /**
     * SelectedDepartments = 3
     */
    const SelectedDepartments_VALUE = 3;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\DocumentAccessLevel
     */
    protected static $UnknownDocumentAccessLevel = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\DocumentAccessLevel
     */
    protected static $DepartmentOnly = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\DocumentAccessLevel
     */
    protected static $DepartmentAndSubdepartments = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\DocumentAccessLevel
     */
    protected static $AllDocuments = null;

    /**
     * @var \Antlena\SDK\Diadoc\Proto\DocumentAccessLevel
     */
    protected static $SelectedDepartments = null;

    /**
     * @return \Antlena\SDK\Diadoc\Proto\DocumentAccessLevel
     */
    public static function UnknownDocumentAccessLevel()
    {
        if (self::$UnknownDocumentAccessLevel !== null) {
            return self::$UnknownDocumentAccessLevel;
        }

        return self::$UnknownDocumentAccessLevel = new self('UnknownDocumentAccessLevel', self::UnknownDocumentAccessLevel_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\DocumentAccessLevel
     */
    public static function DepartmentOnly()
    {
        if (self::$DepartmentOnly !== null) {
            return self::$DepartmentOnly;
        }

        return self::$DepartmentOnly = new self('DepartmentOnly', self::DepartmentOnly_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\DocumentAccessLevel
     */
    public static function DepartmentAndSubdepartments()
    {
        if (self::$DepartmentAndSubdepartments !== null) {
            return self::$DepartmentAndSubdepartments;
        }

        return self::$DepartmentAndSubdepartments = new self('DepartmentAndSubdepartments', self::DepartmentAndSubdepartments_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\DocumentAccessLevel
     */
    public static function AllDocuments()
    {
        if (self::$AllDocuments !== null) {
            return self::$AllDocuments;
        }

        return self::$AllDocuments = new self('AllDocuments', self::AllDocuments_VALUE);
    }

    /**
     * @return \Antlena\SDK\Diadoc\Proto\DocumentAccessLevel
     */
    public static function SelectedDepartments()
    {
        if (self::$SelectedDepartments !== null) {
            return self::$SelectedDepartments;
        }

        return self::$SelectedDepartments = new self('SelectedDepartments', self::SelectedDepartments_VALUE);
    }

    /**
     * @param int $value
     * @return \Antlena\SDK\Diadoc\Proto\DocumentAccessLevel
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case -1: return self::UnknownDocumentAccessLevel();
            case 0: return self::DepartmentOnly();
            case 1: return self::DepartmentAndSubdepartments();
            case 2: return self::AllDocuments();
            case 3: return self::SelectedDepartments();
            default: return null;
        }
    }


}
