<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : GetOrganizationsByInnList.proto
 */


namespace Antlena\SDK\Diadoc\Proto;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.OrganizationWithCounteragentStatus
 */
class OrganizationWithCounteragentStatus extends \Protobuf\AbstractMessage
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
     * Organization required message = 1
     *
     * @var \Antlena\SDK\Diadoc\Proto\Organization
     */
    protected $Organization = null;

    /**
     * CounteragentStatus optional enum = 2
     *
     * @var \Antlena\SDK\Diadoc\Proto\CounteragentStatus
     */
    protected $CounteragentStatus = null;

    /**
     * LastEventTimestampTicks optional sfixed64 = 3
     *
     * @var int
     */
    protected $LastEventTimestampTicks = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->CounteragentStatus = \Antlena\SDK\Diadoc\Proto\CounteragentStatus::UnknownCounteragentStatus();

        parent::__construct($stream, $configuration);
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
     * Check if 'CounteragentStatus' has a value
     *
     * @return bool
     */
    public function hasCounteragentStatus()
    {
        return $this->CounteragentStatus !== null;
    }

    /**
     * Get 'CounteragentStatus' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\CounteragentStatus
     */
    public function getCounteragentStatus()
    {
        return $this->CounteragentStatus;
    }

    /**
     * Set 'CounteragentStatus' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\CounteragentStatus $value
     */
    public function setCounteragentStatus(\Antlena\SDK\Diadoc\Proto\CounteragentStatus $value = null)
    {
        $this->CounteragentStatus = $value;
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
    public function setLastEventTimestampTicks($value = null)
    {
        $this->LastEventTimestampTicks = $value;
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
            throw new \InvalidArgumentException('Field "Organization" (tag 1) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'CounteragentStatus' => \Antlena\SDK\Diadoc\Proto\CounteragentStatus::UnknownCounteragentStatus(),
            'LastEventTimestampTicks' => null
        ], $values);

        $message->setOrganization($values['Organization']);
        $message->setCounteragentStatus($values['CounteragentStatus']);
        $message->setLastEventTimestampTicks($values['LastEventTimestampTicks']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'OrganizationWithCounteragentStatus',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Organization',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Organization'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'CounteragentStatus',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.CounteragentStatus',
                    'default_value' => \Antlena\SDK\Diadoc\Proto\CounteragentStatus::UnknownCounteragentStatus()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'LastEventTimestampTicks',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_SFIXED64(),
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
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\OrganizationWithCounteragentStatus#Organization" (tag 1) is required but has no value.');
        }

        if ($this->Organization !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeVarint($stream, $this->Organization->serializedSize($sizeContext));
            $this->Organization->writeTo($context);
        }

        if ($this->CounteragentStatus !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->CounteragentStatus->value());
        }

        if ($this->LastEventTimestampTicks !== null) {
            $writer->writeVarint($stream, 25);
            $writer->writeSFixed64($stream, $this->LastEventTimestampTicks);
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
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Organization();

                $this->Organization = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->CounteragentStatus = \Antlena\SDK\Diadoc\Proto\CounteragentStatus::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 16);

                $this->LastEventTimestampTicks = $reader->readSFixed64($stream);

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

        if ($this->Organization !== null) {
            $innerSize = $this->Organization->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->CounteragentStatus !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->CounteragentStatus->value());
        }

        if ($this->LastEventTimestampTicks !== null) {
            $size += 1;
            $size += 8;
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
        $this->Organization = null;
        $this->CounteragentStatus = \Antlena\SDK\Diadoc\Proto\CounteragentStatus::UnknownCounteragentStatus();
        $this->LastEventTimestampTicks = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\OrganizationWithCounteragentStatus) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Organization = ($message->Organization !== null) ? $message->Organization : $this->Organization;
        $this->CounteragentStatus = ($message->CounteragentStatus !== null) ? $message->CounteragentStatus : $this->CounteragentStatus;
        $this->LastEventTimestampTicks = ($message->LastEventTimestampTicks !== null) ? $message->LastEventTimestampTicks : $this->LastEventTimestampTicks;
    }


}

