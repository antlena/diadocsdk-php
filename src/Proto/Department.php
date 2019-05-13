<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Organization.proto
 */


namespace Antlena\SDK\Diadoc\Proto;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Department
 */
class Department extends \Protobuf\AbstractMessage
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
     * DepartmentId required string = 1
     *
     * @var string
     */
    protected $DepartmentId = null;

    /**
     * ParentDepartmentId required string = 2
     *
     * @var string
     */
    protected $ParentDepartmentId = null;

    /**
     * Name required string = 3
     *
     * @var string
     */
    protected $Name = null;

    /**
     * Abbreviation optional string = 4
     *
     * @var string
     */
    protected $Abbreviation = null;

    /**
     * Kpp optional string = 5
     *
     * @var string
     */
    protected $Kpp = null;

    /**
     * Address optional message = 6
     *
     * @var \Antlena\SDK\Diadoc\Proto\Address
     */
    protected $Address = null;

    /**
     * IsDisabled optional bool = 7
     *
     * @var bool
     */
    protected $IsDisabled = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->IsDisabled = false;

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'DepartmentId' has a value
     *
     * @return bool
     */
    public function hasDepartmentId()
    {
        return $this->DepartmentId !== null;
    }

    /**
     * Get 'DepartmentId' value
     *
     * @return string
     */
    public function getDepartmentId()
    {
        return $this->DepartmentId;
    }

    /**
     * Set 'DepartmentId' value
     *
     * @param string $value
     */
    public function setDepartmentId($value)
    {
        $this->DepartmentId = $value;
    }

    /**
     * Check if 'ParentDepartmentId' has a value
     *
     * @return bool
     */
    public function hasParentDepartmentId()
    {
        return $this->ParentDepartmentId !== null;
    }

    /**
     * Get 'ParentDepartmentId' value
     *
     * @return string
     */
    public function getParentDepartmentId()
    {
        return $this->ParentDepartmentId;
    }

    /**
     * Set 'ParentDepartmentId' value
     *
     * @param string $value
     */
    public function setParentDepartmentId($value)
    {
        $this->ParentDepartmentId = $value;
    }

    /**
     * Check if 'Name' has a value
     *
     * @return bool
     */
    public function hasName()
    {
        return $this->Name !== null;
    }

    /**
     * Get 'Name' value
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Set 'Name' value
     *
     * @param string $value
     */
    public function setName($value)
    {
        $this->Name = $value;
    }

    /**
     * Check if 'Abbreviation' has a value
     *
     * @return bool
     */
    public function hasAbbreviation()
    {
        return $this->Abbreviation !== null;
    }

    /**
     * Get 'Abbreviation' value
     *
     * @return string
     */
    public function getAbbreviation()
    {
        return $this->Abbreviation;
    }

    /**
     * Set 'Abbreviation' value
     *
     * @param string $value
     */
    public function setAbbreviation($value = null)
    {
        $this->Abbreviation = $value;
    }

    /**
     * Check if 'Kpp' has a value
     *
     * @return bool
     */
    public function hasKpp()
    {
        return $this->Kpp !== null;
    }

    /**
     * Get 'Kpp' value
     *
     * @return string
     */
    public function getKpp()
    {
        return $this->Kpp;
    }

    /**
     * Set 'Kpp' value
     *
     * @param string $value
     */
    public function setKpp($value = null)
    {
        $this->Kpp = $value;
    }

    /**
     * Check if 'Address' has a value
     *
     * @return bool
     */
    public function hasAddress()
    {
        return $this->Address !== null;
    }

    /**
     * Get 'Address' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Address
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * Set 'Address' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Address $value
     */
    public function setAddress(\Antlena\SDK\Diadoc\Proto\Address $value = null)
    {
        $this->Address = $value;
    }

    /**
     * Check if 'IsDisabled' has a value
     *
     * @return bool
     */
    public function hasIsDisabled()
    {
        return $this->IsDisabled !== null;
    }

    /**
     * Get 'IsDisabled' value
     *
     * @return bool
     */
    public function getIsDisabled()
    {
        return $this->IsDisabled;
    }

    /**
     * Set 'IsDisabled' value
     *
     * @param bool $value
     */
    public function setIsDisabled($value = null)
    {
        $this->IsDisabled = $value;
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
        if ( ! isset($values['DepartmentId'])) {
            throw new \InvalidArgumentException('Field "DepartmentId" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['ParentDepartmentId'])) {
            throw new \InvalidArgumentException('Field "ParentDepartmentId" (tag 2) is required but has no value.');
        }

        if ( ! isset($values['Name'])) {
            throw new \InvalidArgumentException('Field "Name" (tag 3) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'Abbreviation' => null,
            'Kpp' => null,
            'Address' => null,
            'IsDisabled' => false
        ], $values);

        $message->setDepartmentId($values['DepartmentId']);
        $message->setParentDepartmentId($values['ParentDepartmentId']);
        $message->setName($values['Name']);
        $message->setAbbreviation($values['Abbreviation']);
        $message->setKpp($values['Kpp']);
        $message->setAddress($values['Address']);
        $message->setIsDisabled($values['IsDisabled']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Department',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'DepartmentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'ParentDepartmentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'Name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'Abbreviation',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'Kpp',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'Address',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Address'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'IsDisabled',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => false
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

        if ($this->DepartmentId === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Department#DepartmentId" (tag 1) is required but has no value.');
        }

        if ($this->ParentDepartmentId === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Department#ParentDepartmentId" (tag 2) is required but has no value.');
        }

        if ($this->Name === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Department#Name" (tag 3) is required but has no value.');
        }

        if ($this->DepartmentId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->DepartmentId);
        }

        if ($this->ParentDepartmentId !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->ParentDepartmentId);
        }

        if ($this->Name !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->Name);
        }

        if ($this->Abbreviation !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->Abbreviation);
        }

        if ($this->Kpp !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->Kpp);
        }

        if ($this->Address !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeVarint($stream, $this->Address->serializedSize($sizeContext));
            $this->Address->writeTo($context);
        }

        if ($this->IsDisabled !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeBool($stream, $this->IsDisabled);
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

                $this->DepartmentId = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ParentDepartmentId = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Name = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Abbreviation = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Kpp = $reader->readString($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Address();

                $this->Address = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->IsDisabled = $reader->readBool($stream);

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

        if ($this->DepartmentId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->DepartmentId);
        }

        if ($this->ParentDepartmentId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ParentDepartmentId);
        }

        if ($this->Name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Name);
        }

        if ($this->Abbreviation !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Abbreviation);
        }

        if ($this->Kpp !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Kpp);
        }

        if ($this->Address !== null) {
            $innerSize = $this->Address->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->IsDisabled !== null) {
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
        $this->DepartmentId = null;
        $this->ParentDepartmentId = null;
        $this->Name = null;
        $this->Abbreviation = null;
        $this->Kpp = null;
        $this->Address = null;
        $this->IsDisabled = false;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Department) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->DepartmentId = ($message->DepartmentId !== null) ? $message->DepartmentId : $this->DepartmentId;
        $this->ParentDepartmentId = ($message->ParentDepartmentId !== null) ? $message->ParentDepartmentId : $this->ParentDepartmentId;
        $this->Name = ($message->Name !== null) ? $message->Name : $this->Name;
        $this->Abbreviation = ($message->Abbreviation !== null) ? $message->Abbreviation : $this->Abbreviation;
        $this->Kpp = ($message->Kpp !== null) ? $message->Kpp : $this->Kpp;
        $this->Address = ($message->Address !== null) ? $message->Address : $this->Address;
        $this->IsDisabled = ($message->IsDisabled !== null) ? $message->IsDisabled : $this->IsDisabled;
    }


}
