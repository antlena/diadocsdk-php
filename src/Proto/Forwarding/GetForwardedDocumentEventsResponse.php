<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Forwarding/ForwardingApi.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Forwarding;

/**
 * Protobuf message :
 * Antlena.SDK.Diadoc.Proto.Forwarding.GetForwardedDocumentEventsResponse
 */
class GetForwardedDocumentEventsResponse extends \Protobuf\AbstractMessage
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
     * TotalCount optional int32 = 1
     *
     * @var int
     */
    protected $TotalCount = null;

    /**
     * Events repeated message = 2
     *
     * @var \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Forwarding\ForwardedDocumentEvent>
     */
    protected $Events = null;

    /**
     * Check if 'TotalCount' has a value
     *
     * @return bool
     */
    public function hasTotalCount()
    {
        return $this->TotalCount !== null;
    }

    /**
     * Get 'TotalCount' value
     *
     * @return int
     */
    public function getTotalCount()
    {
        return $this->TotalCount;
    }

    /**
     * Set 'TotalCount' value
     *
     * @param int $value
     */
    public function setTotalCount($value = null)
    {
        $this->TotalCount = $value;
    }

    /**
     * Check if 'Events' has a value
     *
     * @return bool
     */
    public function hasEventsList()
    {
        return $this->Events !== null;
    }

    /**
     * Get 'Events' value
     *
     * @return \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Forwarding\ForwardedDocumentEvent>
     */
    public function getEventsList()
    {
        return $this->Events;
    }

    /**
     * Set 'Events' value
     *
     * @param \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Forwarding\ForwardedDocumentEvent> $value
     */
    public function setEventsList(\Protobuf\Collection $value = null)
    {
        $this->Events = $value;
    }

    /**
     * Add a new element to 'Events'
     *
     * @param \Antlena\SDK\Diadoc\Proto\Forwarding\ForwardedDocumentEvent $value
     */
    public function addEvents(\Antlena\SDK\Diadoc\Proto\Forwarding\ForwardedDocumentEvent $value)
    {
        if ($this->Events === null) {
            $this->Events = new \Protobuf\MessageCollection();
        }

        $this->Events->add($value);
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
        $message = new self();
        $values  = array_merge([
            'TotalCount' => null,
            'Events' => []
        ], $values);

        $message->setTotalCount($values['TotalCount']);

        foreach ($values['Events'] as $item) {
            $message->addEvents($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'GetForwardedDocumentEventsResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'TotalCount',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Events',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Forwarding.ForwardedDocumentEvent'
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

        if ($this->TotalCount !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->TotalCount);
        }

        if ($this->Events !== null) {
            foreach ($this->Events as $val) {
                $writer->writeVarint($stream, 18);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
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
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->TotalCount = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Forwarding\ForwardedDocumentEvent();

                if ($this->Events === null) {
                    $this->Events = new \Protobuf\MessageCollection();
                }

                $this->Events->add($innerMessage);

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

        if ($this->TotalCount !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->TotalCount);
        }

        if ($this->Events !== null) {
            foreach ($this->Events as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
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
        $this->TotalCount = null;
        $this->Events = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Forwarding\GetForwardedDocumentEventsResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->TotalCount = ($message->TotalCount !== null) ? $message->TotalCount : $this->TotalCount;
        $this->Events = ($message->Events !== null) ? $message->Events : $this->Events;
    }


}
