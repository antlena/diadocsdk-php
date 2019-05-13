<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : OrganizationUserPermissions.proto
 */


namespace Antlena\SDK\Diadoc\Proto;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.OrganizationUserPermissions
 */
class OrganizationUserPermissions extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * UserDepartmentId required string = 1
     *
     * @var string
     */
    protected $UserDepartmentId = null;

    /**
     * IsAdministrator required bool = 2
     *
     * @var bool
     */
    protected $IsAdministrator = null;

    /**
     * DocumentAccessLevel optional enum = 3
     *
     * @var \Antlena\SDK\Diadoc\Proto\DocumentAccessLevel
     */
    protected $DocumentAccessLevel = null;

    /**
     * CanSignDocuments required bool = 4
     *
     * @var bool
     */
    protected $CanSignDocuments = null;

    /**
     * CanAddResolutions required bool = 7
     *
     * @var bool
     */
    protected $CanAddResolutions = null;

    /**
     * CanRequestResolutions required bool = 8
     *
     * @var bool
     */
    protected $CanRequestResolutions = null;

    /**
     * SelectedDepartmentIds repeated string = 9
     *
     * @var \Protobuf\Collection
     */
    protected $SelectedDepartmentIds = null;

    /**
     * JobTitle optional string = 10
     *
     * @var string
     */
    protected $JobTitle = null;

    /**
     * CanCreateDocuments required bool = 11
     *
     * @var bool
     */
    protected $CanCreateDocuments = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->DocumentAccessLevel = \Antlena\SDK\Diadoc\Proto\DocumentAccessLevel::UnknownDocumentAccessLevel();

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'UserDepartmentId' has a value
     *
     * @return bool
     */
    public function hasUserDepartmentId()
    {
        return $this->UserDepartmentId !== null;
    }

    /**
     * Get 'UserDepartmentId' value
     *
     * @return string
     */
    public function getUserDepartmentId()
    {
        return $this->UserDepartmentId;
    }

    /**
     * Set 'UserDepartmentId' value
     *
     * @param string $value
     */
    public function setUserDepartmentId($value)
    {
        $this->UserDepartmentId = $value;
    }

    /**
     * Check if 'IsAdministrator' has a value
     *
     * @return bool
     */
    public function hasIsAdministrator()
    {
        return $this->IsAdministrator !== null;
    }

    /**
     * Get 'IsAdministrator' value
     *
     * @return bool
     */
    public function getIsAdministrator()
    {
        return $this->IsAdministrator;
    }

    /**
     * Set 'IsAdministrator' value
     *
     * @param bool $value
     */
    public function setIsAdministrator($value)
    {
        $this->IsAdministrator = $value;
    }

    /**
     * Check if 'DocumentAccessLevel' has a value
     *
     * @return bool
     */
    public function hasDocumentAccessLevel()
    {
        return $this->DocumentAccessLevel !== null;
    }

    /**
     * Get 'DocumentAccessLevel' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\DocumentAccessLevel
     */
    public function getDocumentAccessLevel()
    {
        return $this->DocumentAccessLevel;
    }

    /**
     * Set 'DocumentAccessLevel' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\DocumentAccessLevel $value
     */
    public function setDocumentAccessLevel(\Antlena\SDK\Diadoc\Proto\DocumentAccessLevel $value = null)
    {
        $this->DocumentAccessLevel = $value;
    }

    /**
     * Check if 'CanSignDocuments' has a value
     *
     * @return bool
     */
    public function hasCanSignDocuments()
    {
        return $this->CanSignDocuments !== null;
    }

    /**
     * Get 'CanSignDocuments' value
     *
     * @return bool
     */
    public function getCanSignDocuments()
    {
        return $this->CanSignDocuments;
    }

    /**
     * Set 'CanSignDocuments' value
     *
     * @param bool $value
     */
    public function setCanSignDocuments($value)
    {
        $this->CanSignDocuments = $value;
    }

    /**
     * Check if 'CanAddResolutions' has a value
     *
     * @return bool
     */
    public function hasCanAddResolutions()
    {
        return $this->CanAddResolutions !== null;
    }

    /**
     * Get 'CanAddResolutions' value
     *
     * @return bool
     */
    public function getCanAddResolutions()
    {
        return $this->CanAddResolutions;
    }

    /**
     * Set 'CanAddResolutions' value
     *
     * @param bool $value
     */
    public function setCanAddResolutions($value)
    {
        $this->CanAddResolutions = $value;
    }

    /**
     * Check if 'CanRequestResolutions' has a value
     *
     * @return bool
     */
    public function hasCanRequestResolutions()
    {
        return $this->CanRequestResolutions !== null;
    }

    /**
     * Get 'CanRequestResolutions' value
     *
     * @return bool
     */
    public function getCanRequestResolutions()
    {
        return $this->CanRequestResolutions;
    }

    /**
     * Set 'CanRequestResolutions' value
     *
     * @param bool $value
     */
    public function setCanRequestResolutions($value)
    {
        $this->CanRequestResolutions = $value;
    }

    /**
     * Check if 'SelectedDepartmentIds' has a value
     *
     * @return bool
     */
    public function hasSelectedDepartmentIdsList()
    {
        return $this->SelectedDepartmentIds !== null;
    }

    /**
     * Get 'SelectedDepartmentIds' value
     *
     * @return \Protobuf\Collection
     */
    public function getSelectedDepartmentIdsList()
    {
        return $this->SelectedDepartmentIds;
    }

    /**
     * Set 'SelectedDepartmentIds' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setSelectedDepartmentIdsList(\Protobuf\Collection $value = null)
    {
        $this->SelectedDepartmentIds = $value;
    }

    /**
     * Add a new element to 'SelectedDepartmentIds'
     *
     * @param string $value
     */
    public function addSelectedDepartmentIds($value)
    {
        if ($this->SelectedDepartmentIds === null) {
            $this->SelectedDepartmentIds = new \Protobuf\ScalarCollection();
        }

        $this->SelectedDepartmentIds->add($value);
    }

    /**
     * Check if 'JobTitle' has a value
     *
     * @return bool
     */
    public function hasJobTitle()
    {
        return $this->JobTitle !== null;
    }

    /**
     * Get 'JobTitle' value
     *
     * @return string
     */
    public function getJobTitle()
    {
        return $this->JobTitle;
    }

    /**
     * Set 'JobTitle' value
     *
     * @param string $value
     */
    public function setJobTitle($value = null)
    {
        $this->JobTitle = $value;
    }

    /**
     * Check if 'CanCreateDocuments' has a value
     *
     * @return bool
     */
    public function hasCanCreateDocuments()
    {
        return $this->CanCreateDocuments !== null;
    }

    /**
     * Get 'CanCreateDocuments' value
     *
     * @return bool
     */
    public function getCanCreateDocuments()
    {
        return $this->CanCreateDocuments;
    }

    /**
     * Set 'CanCreateDocuments' value
     *
     * @param bool $value
     */
    public function setCanCreateDocuments($value)
    {
        $this->CanCreateDocuments = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        if ( ! isset($values['UserDepartmentId'])) {
            throw new \InvalidArgumentException('Field "UserDepartmentId" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['IsAdministrator'])) {
            throw new \InvalidArgumentException('Field "IsAdministrator" (tag 2) is required but has no value.');
        }

        if ( ! isset($values['CanSignDocuments'])) {
            throw new \InvalidArgumentException('Field "CanSignDocuments" (tag 4) is required but has no value.');
        }

        if ( ! isset($values['CanAddResolutions'])) {
            throw new \InvalidArgumentException('Field "CanAddResolutions" (tag 7) is required but has no value.');
        }

        if ( ! isset($values['CanRequestResolutions'])) {
            throw new \InvalidArgumentException('Field "CanRequestResolutions" (tag 8) is required but has no value.');
        }

        if ( ! isset($values['CanCreateDocuments'])) {
            throw new \InvalidArgumentException('Field "CanCreateDocuments" (tag 11) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'DocumentAccessLevel' => \Antlena\SDK\Diadoc\Proto\DocumentAccessLevel::UnknownDocumentAccessLevel(),
            'SelectedDepartmentIds' => [],
            'JobTitle' => null,
        ], $values);

        $message->setUserDepartmentId($values['UserDepartmentId']);
        $message->setIsAdministrator($values['IsAdministrator']);
        $message->setDocumentAccessLevel($values['DocumentAccessLevel']);
        $message->setCanSignDocuments($values['CanSignDocuments']);
        $message->setCanAddResolutions($values['CanAddResolutions']);
        $message->setCanRequestResolutions($values['CanRequestResolutions']);
        $message->setJobTitle($values['JobTitle']);
        $message->setCanCreateDocuments($values['CanCreateDocuments']);

        foreach ($values['SelectedDepartmentIds'] as $item) {
            $message->addSelectedDepartmentIds($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'OrganizationUserPermissions',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'UserDepartmentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'IsAdministrator',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'DocumentAccessLevel',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.DocumentAccessLevel',
                    'default_value' => \Antlena\SDK\Diadoc\Proto\DocumentAccessLevel::UnknownDocumentAccessLevel()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'CanSignDocuments',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'CanAddResolutions',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'CanRequestResolutions',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'SelectedDepartmentIds',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'JobTitle',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'CanCreateDocuments',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->UserDepartmentId === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\OrganizationUserPermissions#UserDepartmentId" (tag 1) is required but has no value.');
        }

        if ($this->IsAdministrator === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\OrganizationUserPermissions#IsAdministrator" (tag 2) is required but has no value.');
        }

        if ($this->CanSignDocuments === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\OrganizationUserPermissions#CanSignDocuments" (tag 4) is required but has no value.');
        }

        if ($this->CanAddResolutions === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\OrganizationUserPermissions#CanAddResolutions" (tag 7) is required but has no value.');
        }

        if ($this->CanRequestResolutions === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\OrganizationUserPermissions#CanRequestResolutions" (tag 8) is required but has no value.');
        }

        if ($this->CanCreateDocuments === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\OrganizationUserPermissions#CanCreateDocuments" (tag 11) is required but has no value.');
        }

        if ($this->UserDepartmentId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->UserDepartmentId);
        }

        if ($this->IsAdministrator !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeBool($stream, $this->IsAdministrator);
        }

        if ($this->DocumentAccessLevel !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->DocumentAccessLevel->value());
        }

        if ($this->CanSignDocuments !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeBool($stream, $this->CanSignDocuments);
        }

        if ($this->CanAddResolutions !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeBool($stream, $this->CanAddResolutions);
        }

        if ($this->CanRequestResolutions !== null) {
            $writer->writeVarint($stream, 64);
            $writer->writeBool($stream, $this->CanRequestResolutions);
        }

        if ($this->SelectedDepartmentIds !== null) {
            foreach ($this->SelectedDepartmentIds as $val) {
                $writer->writeVarint($stream, 74);
                $writer->writeString($stream, $val);
            }
        }

        if ($this->JobTitle !== null) {
            $writer->writeVarint($stream, 82);
            $writer->writeString($stream, $this->JobTitle);
        }

        if ($this->CanCreateDocuments !== null) {
            $writer->writeVarint($stream, 88);
            $writer->writeBool($stream, $this->CanCreateDocuments);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->UserDepartmentId = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->IsAdministrator = $reader->readBool($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->DocumentAccessLevel = \Antlena\SDK\Diadoc\Proto\DocumentAccessLevel::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->CanSignDocuments = $reader->readBool($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->CanAddResolutions = $reader->readBool($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->CanRequestResolutions = $reader->readBool($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                if ($this->SelectedDepartmentIds === null) {
                    $this->SelectedDepartmentIds = new \Protobuf\ScalarCollection();
                }

                $this->SelectedDepartmentIds->add($reader->readString($stream));

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->JobTitle = $reader->readString($stream);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->CanCreateDocuments = $reader->readBool($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->UserDepartmentId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->UserDepartmentId);
        }

        if ($this->IsAdministrator !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->DocumentAccessLevel !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->DocumentAccessLevel->value());
        }

        if ($this->CanSignDocuments !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->CanAddResolutions !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->CanRequestResolutions !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->SelectedDepartmentIds !== null) {
            foreach ($this->SelectedDepartmentIds as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
            }
        }

        if ($this->JobTitle !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->JobTitle);
        }

        if ($this->CanCreateDocuments !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->UserDepartmentId = null;
        $this->IsAdministrator = null;
        $this->DocumentAccessLevel = \Antlena\SDK\Diadoc\Proto\DocumentAccessLevel::UnknownDocumentAccessLevel();
        $this->CanSignDocuments = null;
        $this->CanAddResolutions = null;
        $this->CanRequestResolutions = null;
        $this->SelectedDepartmentIds = null;
        $this->JobTitle = null;
        $this->CanCreateDocuments = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\OrganizationUserPermissions) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->UserDepartmentId = ($message->UserDepartmentId !== null) ? $message->UserDepartmentId : $this->UserDepartmentId;
        $this->IsAdministrator = ($message->IsAdministrator !== null) ? $message->IsAdministrator : $this->IsAdministrator;
        $this->DocumentAccessLevel = ($message->DocumentAccessLevel !== null) ? $message->DocumentAccessLevel : $this->DocumentAccessLevel;
        $this->CanSignDocuments = ($message->CanSignDocuments !== null) ? $message->CanSignDocuments : $this->CanSignDocuments;
        $this->CanAddResolutions = ($message->CanAddResolutions !== null) ? $message->CanAddResolutions : $this->CanAddResolutions;
        $this->CanRequestResolutions = ($message->CanRequestResolutions !== null) ? $message->CanRequestResolutions : $this->CanRequestResolutions;
        $this->SelectedDepartmentIds = ($message->SelectedDepartmentIds !== null) ? $message->SelectedDepartmentIds : $this->SelectedDepartmentIds;
        $this->JobTitle = ($message->JobTitle !== null) ? $message->JobTitle : $this->JobTitle;
        $this->CanCreateDocuments = ($message->CanCreateDocuments !== null) ? $message->CanCreateDocuments : $this->CanCreateDocuments;
    }


}

