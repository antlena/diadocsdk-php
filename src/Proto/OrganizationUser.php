<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : OrganizationUser.proto
 */


namespace Antlena\SDK\Diadoc\Proto;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.OrganizationUser
 */
class OrganizationUser extends \Protobuf\AbstractMessage
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
     * Id required string = 1
     *
     * @var string
     */
    protected $Id = null;

    /**
     * Name required string = 2
     *
     * @var string
     */
    protected $Name = null;

    /**
     * Permissions required message = 3
     *
     * @var \Antlena\SDK\Diadoc\Proto\OrganizationUserPermissions
     */
    protected $Permissions = null;

    /**
     * Position required string = 4
     *
     * @var string
     */
    protected $Position = null;

    /**
     * Check if 'Id' has a value
     *
     * @return bool
     */
    public function hasId()
    {
        return $this->Id !== null;
    }

    /**
     * Get 'Id' value
     *
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set 'Id' value
     *
     * @param string $value
     */
    public function setId($value)
    {
        $this->Id = $value;
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
     * Check if 'Permissions' has a value
     *
     * @return bool
     */
    public function hasPermissions()
    {
        return $this->Permissions !== null;
    }

    /**
     * Get 'Permissions' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\OrganizationUserPermissions
     */
    public function getPermissions()
    {
        return $this->Permissions;
    }

    /**
     * Set 'Permissions' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\OrganizationUserPermissions $value
     */
    public function setPermissions(\Antlena\SDK\Diadoc\Proto\OrganizationUserPermissions $value)
    {
        $this->Permissions = $value;
    }

    /**
     * Check if 'Position' has a value
     *
     * @return bool
     */
    public function hasPosition()
    {
        return $this->Position !== null;
    }

    /**
     * Get 'Position' value
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->Position;
    }

    /**
     * Set 'Position' value
     *
     * @param string $value
     */
    public function setPosition($value)
    {
        $this->Position = $value;
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
        if ( ! isset($values['Id'])) {
            throw new \InvalidArgumentException('Field "Id" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['Name'])) {
            throw new \InvalidArgumentException('Field "Name" (tag 2) is required but has no value.');
        }

        if ( ! isset($values['Permissions'])) {
            throw new \InvalidArgumentException('Field "Permissions" (tag 3) is required but has no value.');
        }

        if ( ! isset($values['Position'])) {
            throw new \InvalidArgumentException('Field "Position" (tag 4) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
        ], $values);

        $message->setId($values['Id']);
        $message->setName($values['Name']);
        $message->setPermissions($values['Permissions']);
        $message->setPosition($values['Position']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'OrganizationUser',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'Permissions',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.OrganizationUserPermissions'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'Position',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
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

        if ($this->Id === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\OrganizationUser#Id" (tag 1) is required but has no value.');
        }

        if ($this->Name === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\OrganizationUser#Name" (tag 2) is required but has no value.');
        }

        if ($this->Permissions === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\OrganizationUser#Permissions" (tag 3) is required but has no value.');
        }

        if ($this->Position === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\OrganizationUser#Position" (tag 4) is required but has no value.');
        }

        if ($this->Id !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->Id);
        }

        if ($this->Name !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->Name);
        }

        if ($this->Permissions !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->Permissions->serializedSize($sizeContext));
            $this->Permissions->writeTo($context);
        }

        if ($this->Position !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->Position);
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

                $this->Id = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Name = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\OrganizationUserPermissions();

                $this->Permissions = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Position = $reader->readString($stream);

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

        if ($this->Id !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Id);
        }

        if ($this->Name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Name);
        }

        if ($this->Permissions !== null) {
            $innerSize = $this->Permissions->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->Position !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Position);
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
        $this->Id = null;
        $this->Name = null;
        $this->Permissions = null;
        $this->Position = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\OrganizationUser) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Id = ($message->Id !== null) ? $message->Id : $this->Id;
        $this->Name = ($message->Name !== null) ? $message->Name : $this->Name;
        $this->Permissions = ($message->Permissions !== null) ? $message->Permissions : $this->Permissions;
        $this->Position = ($message->Position !== null) ? $message->Position : $this->Position;
    }


}

