<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Events/ResolutionRequestInfo.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Events;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Events.ResolutionRequestInfo
 */
class ResolutionRequestInfo extends \Protobuf\AbstractMessage
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
     * RequestType optional enum = 1
     *
     * @var \Antlena\SDK\Diadoc\Proto\Events\ResolutionRequestType
     */
    protected $RequestType = null;

    /**
     * Author required string = 2
     *
     * @var string
     */
    protected $Author = null;

    /**
     * Target optional message = 3
     *
     * @var \Antlena\SDK\Diadoc\Proto\ResolutionTarget
     */
    protected $Target = null;

    /**
     * ResolvedWith optional string = 4
     *
     * @var string
     */
    protected $ResolvedWith = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->RequestType = \Antlena\SDK\Diadoc\Proto\Events\ResolutionRequestType::UnknownResolutionRequestType();

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'RequestType' has a value
     *
     * @return bool
     */
    public function hasRequestType()
    {
        return $this->RequestType !== null;
    }

    /**
     * Get 'RequestType' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Events\ResolutionRequestType
     */
    public function getRequestType()
    {
        return $this->RequestType;
    }

    /**
     * Set 'RequestType' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Events\ResolutionRequestType $value
     */
    public function setRequestType(\Antlena\SDK\Diadoc\Proto\Events\ResolutionRequestType $value = null)
    {
        $this->RequestType = $value;
    }

    /**
     * Check if 'Author' has a value
     *
     * @return bool
     */
    public function hasAuthor()
    {
        return $this->Author !== null;
    }

    /**
     * Get 'Author' value
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->Author;
    }

    /**
     * Set 'Author' value
     *
     * @param string $value
     */
    public function setAuthor($value)
    {
        $this->Author = $value;
    }

    /**
     * Check if 'Target' has a value
     *
     * @return bool
     */
    public function hasTarget()
    {
        return $this->Target !== null;
    }

    /**
     * Get 'Target' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\ResolutionTarget
     */
    public function getTarget()
    {
        return $this->Target;
    }

    /**
     * Set 'Target' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\ResolutionTarget $value
     */
    public function setTarget(\Antlena\SDK\Diadoc\Proto\ResolutionTarget $value = null)
    {
        $this->Target = $value;
    }

    /**
     * Check if 'ResolvedWith' has a value
     *
     * @return bool
     */
    public function hasResolvedWith()
    {
        return $this->ResolvedWith !== null;
    }

    /**
     * Get 'ResolvedWith' value
     *
     * @return string
     */
    public function getResolvedWith()
    {
        return $this->ResolvedWith;
    }

    /**
     * Set 'ResolvedWith' value
     *
     * @param string $value
     */
    public function setResolvedWith($value = null)
    {
        $this->ResolvedWith = $value;
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
        if ( ! isset($values['Author'])) {
            throw new \InvalidArgumentException('Field "Author" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'RequestType' => \Antlena\SDK\Diadoc\Proto\Events\ResolutionRequestType::UnknownResolutionRequestType(),
            'Target' => null,
            'ResolvedWith' => null
        ], $values);

        $message->setRequestType($values['RequestType']);
        $message->setAuthor($values['Author']);
        $message->setTarget($values['Target']);
        $message->setResolvedWith($values['ResolvedWith']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'ResolutionRequestInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'RequestType',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Events.ResolutionRequestType',
                    'default_value' => \Antlena\SDK\Diadoc\Proto\Events\ResolutionRequestType::UnknownResolutionRequestType()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Author',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'Target',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.ResolutionTarget'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'ResolvedWith',
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

        if ($this->Author === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Events\\ResolutionRequestInfo#Author" (tag 2) is required but has no value.');
        }

        if ($this->RequestType !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->RequestType->value());
        }

        if ($this->Author !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->Author);
        }

        if ($this->Target !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->Target->serializedSize($sizeContext));
            $this->Target->writeTo($context);
        }

        if ($this->ResolvedWith !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->ResolvedWith);
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

                $this->RequestType = \Antlena\SDK\Diadoc\Proto\Events\ResolutionRequestType::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Author = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\ResolutionTarget();

                $this->Target = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ResolvedWith = $reader->readString($stream);

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

        if ($this->RequestType !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->RequestType->value());
        }

        if ($this->Author !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Author);
        }

        if ($this->Target !== null) {
            $innerSize = $this->Target->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->ResolvedWith !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ResolvedWith);
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
        $this->RequestType = \Antlena\SDK\Diadoc\Proto\Events\ResolutionRequestType::UnknownResolutionRequestType();
        $this->Author = null;
        $this->Target = null;
        $this->ResolvedWith = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Events\ResolutionRequestInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->RequestType = ($message->RequestType !== null) ? $message->RequestType : $this->RequestType;
        $this->Author = ($message->Author !== null) ? $message->Author : $this->Author;
        $this->Target = ($message->Target !== null) ? $message->Target : $this->Target;
        $this->ResolvedWith = ($message->ResolvedWith !== null) ? $message->ResolvedWith : $this->ResolvedWith;
    }


}

