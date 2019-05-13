<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Documents/Document.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Documents;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Documents.Origin
 */
class Origin extends \Protobuf\AbstractMessage
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
     * MessageType required enum = 1
     *
     * @var \Antlena\SDK\Diadoc\Proto\Documents\MessageType
     */
    protected $MessageType = null;

    /**
     * MessageId required string = 2
     *
     * @var string
     */
    protected $MessageId = null;

    /**
     * Check if 'MessageType' has a value
     *
     * @return bool
     */
    public function hasMessageType()
    {
        return $this->MessageType !== null;
    }

    /**
     * Get 'MessageType' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Documents\MessageType
     */
    public function getMessageType()
    {
        return $this->MessageType;
    }

    /**
     * Set 'MessageType' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Documents\MessageType $value
     */
    public function setMessageType(\Antlena\SDK\Diadoc\Proto\Documents\MessageType $value)
    {
        $this->MessageType = $value;
    }

    /**
     * Check if 'MessageId' has a value
     *
     * @return bool
     */
    public function hasMessageId()
    {
        return $this->MessageId !== null;
    }

    /**
     * Get 'MessageId' value
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->MessageId;
    }

    /**
     * Set 'MessageId' value
     *
     * @param string $value
     */
    public function setMessageId($value)
    {
        $this->MessageId = $value;
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
        if ( ! isset($values['MessageType'])) {
            throw new \InvalidArgumentException('Field "MessageType" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['MessageId'])) {
            throw new \InvalidArgumentException('Field "MessageId" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
        ], $values);

        $message->setMessageType($values['MessageType']);
        $message->setMessageId($values['MessageId']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Origin',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'MessageType',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Documents.MessageType'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'MessageId',
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

        if ($this->MessageType === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Documents\\Origin#MessageType" (tag 1) is required but has no value.');
        }

        if ($this->MessageId === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Documents\\Origin#MessageId" (tag 2) is required but has no value.');
        }

        if ($this->MessageType !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->MessageType->value());
        }

        if ($this->MessageId !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->MessageId);
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
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->MessageType = \Antlena\SDK\Diadoc\Proto\Documents\MessageType::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->MessageId = $reader->readString($stream);

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

        if ($this->MessageType !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->MessageType->value());
        }

        if ($this->MessageId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->MessageId);
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
        $this->MessageType = null;
        $this->MessageId = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Documents\Origin) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->MessageType = ($message->MessageType !== null) ? $message->MessageType : $this->MessageType;
        $this->MessageId = ($message->MessageId !== null) ? $message->MessageId : $this->MessageId;
    }


}
