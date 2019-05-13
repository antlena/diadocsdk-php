<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Invoicing/AcceptanceCertificateInfo.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Invoicing;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Invoicing.WorkDescription
 */
class WorkDescription extends \Protobuf\AbstractMessage
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
     * StartingDate optional string = 1
     *
     * @var string
     */
    protected $StartingDate = null;

    /**
     * CompletionDate optional string = 2
     *
     * @var string
     */
    protected $CompletionDate = null;

    /**
     * TotalWithVatExcluded optional string = 3
     *
     * @var string
     */
    protected $TotalWithVatExcluded = null;

    /**
     * Vat optional string = 4
     *
     * @var string
     */
    protected $Vat = null;

    /**
     * Total required string = 5
     *
     * @var string
     */
    protected $Total = null;

    /**
     * Items repeated message = 6
     *
     * @var \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Invoicing\WorkItem>
     */
    protected $Items = null;

    /**
     * Check if 'StartingDate' has a value
     *
     * @return bool
     */
    public function hasStartingDate()
    {
        return $this->StartingDate !== null;
    }

    /**
     * Get 'StartingDate' value
     *
     * @return string
     */
    public function getStartingDate()
    {
        return $this->StartingDate;
    }

    /**
     * Set 'StartingDate' value
     *
     * @param string $value
     */
    public function setStartingDate($value = null)
    {
        $this->StartingDate = $value;
    }

    /**
     * Check if 'CompletionDate' has a value
     *
     * @return bool
     */
    public function hasCompletionDate()
    {
        return $this->CompletionDate !== null;
    }

    /**
     * Get 'CompletionDate' value
     *
     * @return string
     */
    public function getCompletionDate()
    {
        return $this->CompletionDate;
    }

    /**
     * Set 'CompletionDate' value
     *
     * @param string $value
     */
    public function setCompletionDate($value = null)
    {
        $this->CompletionDate = $value;
    }

    /**
     * Check if 'TotalWithVatExcluded' has a value
     *
     * @return bool
     */
    public function hasTotalWithVatExcluded()
    {
        return $this->TotalWithVatExcluded !== null;
    }

    /**
     * Get 'TotalWithVatExcluded' value
     *
     * @return string
     */
    public function getTotalWithVatExcluded()
    {
        return $this->TotalWithVatExcluded;
    }

    /**
     * Set 'TotalWithVatExcluded' value
     *
     * @param string $value
     */
    public function setTotalWithVatExcluded($value = null)
    {
        $this->TotalWithVatExcluded = $value;
    }

    /**
     * Check if 'Vat' has a value
     *
     * @return bool
     */
    public function hasVat()
    {
        return $this->Vat !== null;
    }

    /**
     * Get 'Vat' value
     *
     * @return string
     */
    public function getVat()
    {
        return $this->Vat;
    }

    /**
     * Set 'Vat' value
     *
     * @param string $value
     */
    public function setVat($value = null)
    {
        $this->Vat = $value;
    }

    /**
     * Check if 'Total' has a value
     *
     * @return bool
     */
    public function hasTotal()
    {
        return $this->Total !== null;
    }

    /**
     * Get 'Total' value
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->Total;
    }

    /**
     * Set 'Total' value
     *
     * @param string $value
     */
    public function setTotal($value)
    {
        $this->Total = $value;
    }

    /**
     * Check if 'Items' has a value
     *
     * @return bool
     */
    public function hasItemsList()
    {
        return $this->Items !== null;
    }

    /**
     * Get 'Items' value
     *
     * @return \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Invoicing\WorkItem>
     */
    public function getItemsList()
    {
        return $this->Items;
    }

    /**
     * Set 'Items' value
     *
     * @param \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Invoicing\WorkItem> $value
     */
    public function setItemsList(\Protobuf\Collection $value = null)
    {
        $this->Items = $value;
    }

    /**
     * Add a new element to 'Items'
     *
     * @param \Antlena\SDK\Diadoc\Proto\Invoicing\WorkItem $value
     */
    public function addItems(\Antlena\SDK\Diadoc\Proto\Invoicing\WorkItem $value)
    {
        if ($this->Items === null) {
            $this->Items = new \Protobuf\MessageCollection();
        }

        $this->Items->add($value);
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
        if ( ! isset($values['Total'])) {
            throw new \InvalidArgumentException('Field "Total" (tag 5) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'StartingDate' => null,
            'CompletionDate' => null,
            'TotalWithVatExcluded' => null,
            'Vat' => null,
            'Items' => []
        ], $values);

        $message->setStartingDate($values['StartingDate']);
        $message->setCompletionDate($values['CompletionDate']);
        $message->setTotalWithVatExcluded($values['TotalWithVatExcluded']);
        $message->setVat($values['Vat']);
        $message->setTotal($values['Total']);

        foreach ($values['Items'] as $item) {
            $message->addItems($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'WorkDescription',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'StartingDate',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'CompletionDate',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'TotalWithVatExcluded',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'Vat',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'Total',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'Items',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Invoicing.WorkItem'
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

        if ($this->Total === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Invoicing\\WorkDescription#Total" (tag 5) is required but has no value.');
        }

        if ($this->StartingDate !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->StartingDate);
        }

        if ($this->CompletionDate !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->CompletionDate);
        }

        if ($this->TotalWithVatExcluded !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->TotalWithVatExcluded);
        }

        if ($this->Vat !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->Vat);
        }

        if ($this->Total !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->Total);
        }

        if ($this->Items !== null) {
            foreach ($this->Items as $val) {
                $writer->writeVarint($stream, 50);
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
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->StartingDate = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->CompletionDate = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->TotalWithVatExcluded = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Vat = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Total = $reader->readString($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Invoicing\WorkItem();

                if ($this->Items === null) {
                    $this->Items = new \Protobuf\MessageCollection();
                }

                $this->Items->add($innerMessage);

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

        if ($this->StartingDate !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->StartingDate);
        }

        if ($this->CompletionDate !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->CompletionDate);
        }

        if ($this->TotalWithVatExcluded !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->TotalWithVatExcluded);
        }

        if ($this->Vat !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Vat);
        }

        if ($this->Total !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Total);
        }

        if ($this->Items !== null) {
            foreach ($this->Items as $val) {
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
        $this->StartingDate = null;
        $this->CompletionDate = null;
        $this->TotalWithVatExcluded = null;
        $this->Vat = null;
        $this->Total = null;
        $this->Items = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Invoicing\WorkDescription) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->StartingDate = ($message->StartingDate !== null) ? $message->StartingDate : $this->StartingDate;
        $this->CompletionDate = ($message->CompletionDate !== null) ? $message->CompletionDate : $this->CompletionDate;
        $this->TotalWithVatExcluded = ($message->TotalWithVatExcluded !== null) ? $message->TotalWithVatExcluded : $this->TotalWithVatExcluded;
        $this->Vat = ($message->Vat !== null) ? $message->Vat : $this->Vat;
        $this->Total = ($message->Total !== null) ? $message->Total : $this->Total;
        $this->Items = ($message->Items !== null) ? $message->Items : $this->Items;
    }


}
