<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Events/DiadocMessage-GetApi.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Events;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Events.BoxEvent
 */
class BoxEvent extends \Protobuf\AbstractMessage
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
     * EventId required string = 1
     *
     * @var string
     */
    protected $EventId = null;

    /**
     * Message optional message = 2
     *
     * @var \Antlena\SDK\Diadoc\Proto\Events\Message
     */
    protected $Message = null;

    /**
     * Patch optional message = 3
     *
     * @var \Antlena\SDK\Diadoc\Proto\Events\MessagePatch
     */
    protected $Patch = null;

    /**
     * Check if 'EventId' has a value
     *
     * @return bool
     */
    public function hasEventId()
    {
        return $this->EventId !== null;
    }

    /**
     * Get 'EventId' value
     *
     * @return string
     */
    public function getEventId()
    {
        return $this->EventId;
    }

    /**
     * Set 'EventId' value
     *
     * @param string $value
     */
    public function setEventId($value)
    {
        $this->EventId = $value;
    }

    /**
     * Check if 'Message' has a value
     *
     * @return bool
     */
    public function hasMessage()
    {
        return $this->Message !== null;
    }

    /**
     * Get 'Message' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Events\Message
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * Set 'Message' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Events\Message $value
     */
    public function setMessage(\Antlena\SDK\Diadoc\Proto\Events\Message $value = null)
    {
        $this->Message = $value;
    }

    /**
     * Check if 'Patch' has a value
     *
     * @return bool
     */
    public function hasPatch()
    {
        return $this->Patch !== null;
    }

    /**
     * Get 'Patch' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Events\MessagePatch
     */
    public function getPatch()
    {
        return $this->Patch;
    }

    /**
     * Set 'Patch' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Events\MessagePatch $value
     */
    public function setPatch(\Antlena\SDK\Diadoc\Proto\Events\MessagePatch $value = null)
    {
        $this->Patch = $value;
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
        if ( ! isset($values['EventId'])) {
            throw new \InvalidArgumentException('Field "EventId" (tag 1) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'Message' => null,
            'Patch' => null
        ], $values);

        $message->setEventId($values['EventId']);
        $message->setMessage($values['Message']);
        $message->setPatch($values['Patch']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'BoxEvent',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'EventId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Message',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Events.Message'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'Patch',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Events.MessagePatch'
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

        if ($this->EventId === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Events\\BoxEvent#EventId" (tag 1) is required but has no value.');
        }

        if ($this->EventId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->EventId);
        }

        if ($this->Message !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->Message->serializedSize($sizeContext));
            $this->Message->writeTo($context);
        }

        if ($this->Patch !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->Patch->serializedSize($sizeContext));
            $this->Patch->writeTo($context);
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

                $this->EventId = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Events\Message();

                $this->Message = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Events\MessagePatch();

                $this->Patch = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

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

        if ($this->EventId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->EventId);
        }

        if ($this->Message !== null) {
            $innerSize = $this->Message->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->Patch !== null) {
            $innerSize = $this->Patch->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
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
        $this->EventId = null;
        $this->Message = null;
        $this->Patch = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Events\BoxEvent) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->EventId = ($message->EventId !== null) ? $message->EventId : $this->EventId;
        $this->Message = ($message->Message !== null) ? $message->Message : $this->Message;
        $this->Patch = ($message->Patch !== null) ? $message->Patch : $this->Patch;
    }


}

