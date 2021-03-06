<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Counteragent.proto
 */


namespace Antlena\SDK\Diadoc\Proto;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Counteragent
 */
class Counteragent extends \Protobuf\AbstractMessage
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
     * IndexKey optional string = 1
     *
     * @var string
     */
    protected $IndexKey = null;

    /**
     * Organization required message = 2
     *
     * @var \Antlena\SDK\Diadoc\Proto\Organization
     */
    protected $Organization = null;

    /**
     * CurrentStatus optional enum = 3
     *
     * @var \Antlena\SDK\Diadoc\Proto\CounteragentStatus
     */
    protected $CurrentStatus = null;

    /**
     * LastEventTimestampTicks required sfixed64 = 4
     *
     * @var int
     */
    protected $LastEventTimestampTicks = null;

    /**
     * MessageFromCounteragent optional string = 6
     *
     * @var string
     */
    protected $MessageFromCounteragent = null;

    /**
     * MessageToCounteragent optional string = 7
     *
     * @var string
     */
    protected $MessageToCounteragent = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->CurrentStatus = \Antlena\SDK\Diadoc\Proto\CounteragentStatus::UnknownCounteragentStatus();

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'IndexKey' has a value
     *
     * @return bool
     */
    public function hasIndexKey()
    {
        return $this->IndexKey !== null;
    }

    /**
     * Get 'IndexKey' value
     *
     * @return string
     */
    public function getIndexKey()
    {
        return $this->IndexKey;
    }

    /**
     * Set 'IndexKey' value
     *
     * @param string $value
     */
    public function setIndexKey($value = null)
    {
        $this->IndexKey = $value;
    }

    /**
     * Check if 'Organization' has a value
     *
     * @return bool
     */
    public function hasOrganization()
    {
        return $this->Organization !== null;
    }

    /**
     * Get 'Organization' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Organization
     */
    public function getOrganization()
    {
        return $this->Organization;
    }

    /**
     * Set 'Organization' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Organization $value
     */
    public function setOrganization(\Antlena\SDK\Diadoc\Proto\Organization $value)
    {
        $this->Organization = $value;
    }

    /**
     * Check if 'CurrentStatus' has a value
     *
     * @return bool
     */
    public function hasCurrentStatus()
    {
        return $this->CurrentStatus !== null;
    }

    /**
     * Get 'CurrentStatus' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\CounteragentStatus
     */
    public function getCurrentStatus()
    {
        return $this->CurrentStatus;
    }

    /**
     * Set 'CurrentStatus' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\CounteragentStatus $value
     */
    public function setCurrentStatus(\Antlena\SDK\Diadoc\Proto\CounteragentStatus $value = null)
    {
        $this->CurrentStatus = $value;
    }

    /**
     * Check if 'LastEventTimestampTicks' has a value
     *
     * @return bool
     */
    public function hasLastEventTimestampTicks()
    {
        return $this->LastEventTimestampTicks !== null;
    }

    /**
     * Get 'LastEventTimestampTicks' value
     *
     * @return int
     */
    public function getLastEventTimestampTicks()
    {
        return $this->LastEventTimestampTicks;
    }

    /**
     * Set 'LastEventTimestampTicks' value
     *
     * @param int $value
     */
    public function setLastEventTimestampTicks($value)
    {
        $this->LastEventTimestampTicks = $value;
    }

    /**
     * Check if 'MessageFromCounteragent' has a value
     *
     * @return bool
     */
    public function hasMessageFromCounteragent()
    {
        return $this->MessageFromCounteragent !== null;
    }

    /**
     * Get 'MessageFromCounteragent' value
     *
     * @return string
     */
    public function getMessageFromCounteragent()
    {
        return $this->MessageFromCounteragent;
    }

    /**
     * Set 'MessageFromCounteragent' value
     *
     * @param string $value
     */
    public function setMessageFromCounteragent($value = null)
    {
        $this->MessageFromCounteragent = $value;
    }

    /**
     * Check if 'MessageToCounteragent' has a value
     *
     * @return bool
     */
    public function hasMessageToCounteragent()
    {
        return $this->MessageToCounteragent !== null;
    }

    /**
     * Get 'MessageToCounteragent' value
     *
     * @return string
     */
    public function getMessageToCounteragent()
    {
        return $this->MessageToCounteragent;
    }

    /**
     * Set 'MessageToCounteragent' value
     *
     * @param string $value
     */
    public function setMessageToCounteragent($value = null)
    {
        $this->MessageToCounteragent = $value;
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
        if ( ! isset($values['Organization'])) {
            throw new \InvalidArgumentException('Field "Organization" (tag 2) is required but has no value.');
        }

        if ( ! isset($values['LastEventTimestampTicks'])) {
            throw new \InvalidArgumentException('Field "LastEventTimestampTicks" (tag 4) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'IndexKey' => null,
            'CurrentStatus' => \Antlena\SDK\Diadoc\Proto\CounteragentStatus::UnknownCounteragentStatus(),
            'MessageFromCounteragent' => null,
            'MessageToCounteragent' => null
        ], $values);

        $message->setIndexKey($values['IndexKey']);
        $message->setOrganization($values['Organization']);
        $message->setCurrentStatus($values['CurrentStatus']);
        $message->setLastEventTimestampTicks($values['LastEventTimestampTicks']);
        $message->setMessageFromCounteragent($values['MessageFromCounteragent']);
        $message->setMessageToCounteragent($values['MessageToCounteragent']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Counteragent',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'IndexKey',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Organization',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Organization'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'CurrentStatus',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.CounteragentStatus',
                    'default_value' => \Antlena\SDK\Diadoc\Proto\CounteragentStatus::UnknownCounteragentStatus()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'LastEventTimestampTicks',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_SFIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'MessageFromCounteragent',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'MessageToCounteragent',
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

        if ($this->Organization === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Counteragent#Organization" (tag 2) is required but has no value.');
        }

        if ($this->LastEventTimestampTicks === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Counteragent#LastEventTimestampTicks" (tag 4) is required but has no value.');
        }

        if ($this->IndexKey !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->IndexKey);
        }

        if ($this->Organization !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->Organization->serializedSize($sizeContext));
            $this->Organization->writeTo($context);
        }

        if ($this->CurrentStatus !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->CurrentStatus->value());
        }

        if ($this->LastEventTimestampTicks !== null) {
            $writer->writeVarint($stream, 33);
            $writer->writeSFixed64($stream, $this->LastEventTimestampTicks);
        }

        if ($this->MessageFromCounteragent !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->MessageFromCounteragent);
        }

        if ($this->MessageToCounteragent !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeString($stream, $this->MessageToCounteragent);
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

                $this->IndexKey = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Organization();

                $this->Organization = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->CurrentStatus = \Antlena\SDK\Diadoc\Proto\CounteragentStatus::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 16);

                $this->LastEventTimestampTicks = $reader->readSFixed64($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->MessageFromCounteragent = $reader->readString($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->MessageToCounteragent = $reader->readString($stream);

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

        if ($this->IndexKey !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->IndexKey);
        }

        if ($this->Organization !== null) {
            $innerSize = $this->Organization->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->CurrentStatus !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->CurrentStatus->value());
        }

        if ($this->LastEventTimestampTicks !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->MessageFromCounteragent !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->MessageFromCounteragent);
        }

        if ($this->MessageToCounteragent !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->MessageToCounteragent);
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
        $this->IndexKey = null;
        $this->Organization = null;
        $this->CurrentStatus = \Antlena\SDK\Diadoc\Proto\CounteragentStatus::UnknownCounteragentStatus();
        $this->LastEventTimestampTicks = null;
        $this->MessageFromCounteragent = null;
        $this->MessageToCounteragent = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Counteragent) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->IndexKey = ($message->IndexKey !== null) ? $message->IndexKey : $this->IndexKey;
        $this->Organization = ($message->Organization !== null) ? $message->Organization : $this->Organization;
        $this->CurrentStatus = ($message->CurrentStatus !== null) ? $message->CurrentStatus : $this->CurrentStatus;
        $this->LastEventTimestampTicks = ($message->LastEventTimestampTicks !== null) ? $message->LastEventTimestampTicks : $this->LastEventTimestampTicks;
        $this->MessageFromCounteragent = ($message->MessageFromCounteragent !== null) ? $message->MessageFromCounteragent : $this->MessageFromCounteragent;
        $this->MessageToCounteragent = ($message->MessageToCounteragent !== null) ? $message->MessageToCounteragent : $this->MessageToCounteragent;
    }


}

