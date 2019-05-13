<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Events/DiadocMessage-PostApi.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Events;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Events.EncryptedXmlBasicDocumentMetadata
 */
class EncryptedXmlBasicDocumentMetadata extends \Protobuf\AbstractMessage
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
     * FormationDate required string = 1
     *
     * @var string
     */
    protected $FormationDate = null;

    /**
     * FormationTime required string = 2
     *
     * @var string
     */
    protected $FormationTime = null;

    /**
     * DocumentName optional string = 3
     *
     * @var string
     */
    protected $DocumentName = null;

    /**
     * Check if 'FormationDate' has a value
     *
     * @return bool
     */
    public function hasFormationDate()
    {
        return $this->FormationDate !== null;
    }

    /**
     * Get 'FormationDate' value
     *
     * @return string
     */
    public function getFormationDate()
    {
        return $this->FormationDate;
    }

    /**
     * Set 'FormationDate' value
     *
     * @param string $value
     */
    public function setFormationDate($value)
    {
        $this->FormationDate = $value;
    }

    /**
     * Check if 'FormationTime' has a value
     *
     * @return bool
     */
    public function hasFormationTime()
    {
        return $this->FormationTime !== null;
    }

    /**
     * Get 'FormationTime' value
     *
     * @return string
     */
    public function getFormationTime()
    {
        return $this->FormationTime;
    }

    /**
     * Set 'FormationTime' value
     *
     * @param string $value
     */
    public function setFormationTime($value)
    {
        $this->FormationTime = $value;
    }

    /**
     * Check if 'DocumentName' has a value
     *
     * @return bool
     */
    public function hasDocumentName()
    {
        return $this->DocumentName !== null;
    }

    /**
     * Get 'DocumentName' value
     *
     * @return string
     */
    public function getDocumentName()
    {
        return $this->DocumentName;
    }

    /**
     * Set 'DocumentName' value
     *
     * @param string $value
     */
    public function setDocumentName($value = null)
    {
        $this->DocumentName = $value;
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
        if ( ! isset($values['FormationDate'])) {
            throw new \InvalidArgumentException('Field "FormationDate" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['FormationTime'])) {
            throw new \InvalidArgumentException('Field "FormationTime" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'DocumentName' => null
        ], $values);

        $message->setFormationDate($values['FormationDate']);
        $message->setFormationTime($values['FormationTime']);
        $message->setDocumentName($values['DocumentName']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'EncryptedXmlBasicDocumentMetadata',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'FormationDate',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'FormationTime',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'DocumentName',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
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

        if ($this->FormationDate === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Events\\EncryptedXmlBasicDocumentMetadata#FormationDate" (tag 1) is required but has no value.');
        }

        if ($this->FormationTime === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Events\\EncryptedXmlBasicDocumentMetadata#FormationTime" (tag 2) is required but has no value.');
        }

        if ($this->FormationDate !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->FormationDate);
        }

        if ($this->FormationTime !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->FormationTime);
        }

        if ($this->DocumentName !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->DocumentName);
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

                $this->FormationDate = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->FormationTime = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->DocumentName = $reader->readString($stream);

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

        if ($this->FormationDate !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->FormationDate);
        }

        if ($this->FormationTime !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->FormationTime);
        }

        if ($this->DocumentName !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->DocumentName);
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
        $this->FormationDate = null;
        $this->FormationTime = null;
        $this->DocumentName = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Events\EncryptedXmlBasicDocumentMetadata) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->FormationDate = ($message->FormationDate !== null) ? $message->FormationDate : $this->FormationDate;
        $this->FormationTime = ($message->FormationTime !== null) ? $message->FormationTime : $this->FormationTime;
        $this->DocumentName = ($message->DocumentName !== null) ? $message->DocumentName : $this->DocumentName;
    }


}
