<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : TimeBasedFilter.proto
 */


namespace Antlena\SDK\Diadoc\Proto;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.TimeBasedFilter
 */
class TimeBasedFilter extends \Protobuf\AbstractMessage
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
     * FromTimestamp optional message = 1
     *
     * @var \Antlena\SDK\Diadoc\Proto\Timestamp
     */
    protected $FromTimestamp = null;

    /**
     * ToTimestamp optional message = 2
     *
     * @var \Antlena\SDK\Diadoc\Proto\Timestamp
     */
    protected $ToTimestamp = null;

    /**
     * SortDirection optional enum = 3
     *
     * @var \Antlena\SDK\Diadoc\Proto\SortDirection
     */
    protected $SortDirection = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->SortDirection = \Antlena\SDK\Diadoc\Proto\SortDirection::Ascending();

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'FromTimestamp' has a value
     *
     * @return bool
     */
    public function hasFromTimestamp()
    {
        return $this->FromTimestamp !== null;
    }

    /**
     * Get 'FromTimestamp' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Timestamp
     */
    public function getFromTimestamp()
    {
        return $this->FromTimestamp;
    }

    /**
     * Set 'FromTimestamp' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Timestamp $value
     */
    public function setFromTimestamp(\Antlena\SDK\Diadoc\Proto\Timestamp $value = null)
    {
        $this->FromTimestamp = $value;
    }

    /**
     * Check if 'ToTimestamp' has a value
     *
     * @return bool
     */
    public function hasToTimestamp()
    {
        return $this->ToTimestamp !== null;
    }

    /**
     * Get 'ToTimestamp' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Timestamp
     */
    public function getToTimestamp()
    {
        return $this->ToTimestamp;
    }

    /**
     * Set 'ToTimestamp' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Timestamp $value
     */
    public function setToTimestamp(\Antlena\SDK\Diadoc\Proto\Timestamp $value = null)
    {
        $this->ToTimestamp = $value;
    }

    /**
     * Check if 'SortDirection' has a value
     *
     * @return bool
     */
    public function hasSortDirection()
    {
        return $this->SortDirection !== null;
    }

    /**
     * Get 'SortDirection' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\SortDirection
     */
    public function getSortDirection()
    {
        return $this->SortDirection;
    }

    /**
     * Set 'SortDirection' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\SortDirection $value
     */
    public function setSortDirection(\Antlena\SDK\Diadoc\Proto\SortDirection $value = null)
    {
        $this->SortDirection = $value;
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
            'FromTimestamp' => null,
            'ToTimestamp' => null,
            'SortDirection' => \Antlena\SDK\Diadoc\Proto\SortDirection::Ascending()
        ], $values);

        $message->setFromTimestamp($values['FromTimestamp']);
        $message->setToTimestamp($values['ToTimestamp']);
        $message->setSortDirection($values['SortDirection']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'TimeBasedFilter',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'FromTimestamp',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Timestamp'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'ToTimestamp',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Timestamp'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'SortDirection',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.SortDirection',
                    'default_value' => \Antlena\SDK\Diadoc\Proto\SortDirection::Ascending()
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

        if ($this->FromTimestamp !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeVarint($stream, $this->FromTimestamp->serializedSize($sizeContext));
            $this->FromTimestamp->writeTo($context);
        }

        if ($this->ToTimestamp !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->ToTimestamp->serializedSize($sizeContext));
            $this->ToTimestamp->writeTo($context);
        }

        if ($this->SortDirection !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->SortDirection->value());
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
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Timestamp();

                $this->FromTimestamp = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Timestamp();

                $this->ToTimestamp = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->SortDirection = \Antlena\SDK\Diadoc\Proto\SortDirection::valueOf($reader->readVarint($stream));

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

        if ($this->FromTimestamp !== null) {
            $innerSize = $this->FromTimestamp->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->ToTimestamp !== null) {
            $innerSize = $this->ToTimestamp->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->SortDirection !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->SortDirection->value());
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
        $this->FromTimestamp = null;
        $this->ToTimestamp = null;
        $this->SortDirection = \Antlena\SDK\Diadoc\Proto\SortDirection::Ascending();
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\TimeBasedFilter) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->FromTimestamp = ($message->FromTimestamp !== null) ? $message->FromTimestamp : $this->FromTimestamp;
        $this->ToTimestamp = ($message->ToTimestamp !== null) ? $message->ToTimestamp : $this->ToTimestamp;
        $this->SortDirection = ($message->SortDirection !== null) ? $message->SortDirection : $this->SortDirection;
    }


}

