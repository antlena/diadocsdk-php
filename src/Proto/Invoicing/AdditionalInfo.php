<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Invoicing/InvoiceInfo.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Invoicing;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Invoicing.AdditionalInfo
 */
class AdditionalInfo extends \Protobuf\AbstractMessage
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
     * Value required string = 2
     *
     * @var string
     */
    protected $Value = null;

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
     * Check if 'Value' has a value
     *
     * @return bool
     */
    public function hasValue()
    {
        return $this->Value !== null;
    }

    /**
     * Get 'Value' value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Set 'Value' value
     *
     * @param string $value
     */
    public function setValue($value)
    {
        $this->Value = $value;
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

        if ( ! isset($values['Value'])) {
            throw new \InvalidArgumentException('Field "Value" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
        ], $values);

        $message->setId($values['Id']);
        $message->setValue($values['Value']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'AdditionalInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Value',
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
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Invoicing\\AdditionalInfo#Id" (tag 1) is required but has no value.');
        }

        if ($this->Value === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Invoicing\\AdditionalInfo#Value" (tag 2) is required but has no value.');
        }

        if ($this->Id !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->Id);
        }

        if ($this->Value !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->Value);
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

                $this->Value = $reader->readString($stream);

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

        if ($this->Value !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Value);
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
        $this->Value = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Invoicing\AdditionalInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Id = ($message->Id !== null) ? $message->Id : $this->Id;
        $this->Value = ($message->Value !== null) ? $message->Value : $this->Value;
    }


}
