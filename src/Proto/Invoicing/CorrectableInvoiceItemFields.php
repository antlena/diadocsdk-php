<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Invoicing/InvoiceInfo.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Invoicing;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Invoicing.CorrectableInvoiceItemFields
 */
class CorrectableInvoiceItemFields extends \Protobuf\AbstractMessage
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
     * Unit optional string = 1
     *
     * @var string
     */
    protected $Unit = null;

    /**
     * Quantity optional string = 2
     *
     * @var string
     */
    protected $Quantity = null;

    /**
     * Price optional string = 3
     *
     * @var string
     */
    protected $Price = null;

    /**
     * Excise optional string = 4
     *
     * @var string
     */
    protected $Excise = null;

    /**
     * TaxRate required enum = 5
     *
     * @var \Antlena\SDK\Diadoc\Proto\Invoicing\TaxRate
     */
    protected $TaxRate = null;

    /**
     * SubtotalWithVatExcluded optional string = 6
     *
     * @var string
     */
    protected $SubtotalWithVatExcluded = null;

    /**
     * Vat optional string = 7
     *
     * @var string
     */
    protected $Vat = null;

    /**
     * Subtotal required string = 8
     *
     * @var string
     */
    protected $Subtotal = null;

    /**
     * Check if 'Unit' has a value
     *
     * @return bool
     */
    public function hasUnit()
    {
        return $this->Unit !== null;
    }

    /**
     * Get 'Unit' value
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->Unit;
    }

    /**
     * Set 'Unit' value
     *
     * @param string $value
     */
    public function setUnit($value = null)
    {
        $this->Unit = $value;
    }

    /**
     * Check if 'Quantity' has a value
     *
     * @return bool
     */
    public function hasQuantity()
    {
        return $this->Quantity !== null;
    }

    /**
     * Get 'Quantity' value
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * Set 'Quantity' value
     *
     * @param string $value
     */
    public function setQuantity($value = null)
    {
        $this->Quantity = $value;
    }

    /**
     * Check if 'Price' has a value
     *
     * @return bool
     */
    public function hasPrice()
    {
        return $this->Price !== null;
    }

    /**
     * Get 'Price' value
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * Set 'Price' value
     *
     * @param string $value
     */
    public function setPrice($value = null)
    {
        $this->Price = $value;
    }

    /**
     * Check if 'Excise' has a value
     *
     * @return bool
     */
    public function hasExcise()
    {
        return $this->Excise !== null;
    }

    /**
     * Get 'Excise' value
     *
     * @return string
     */
    public function getExcise()
    {
        return $this->Excise;
    }

    /**
     * Set 'Excise' value
     *
     * @param string $value
     */
    public function setExcise($value = null)
    {
        $this->Excise = $value;
    }

    /**
     * Check if 'TaxRate' has a value
     *
     * @return bool
     */
    public function hasTaxRate()
    {
        return $this->TaxRate !== null;
    }

    /**
     * Get 'TaxRate' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Invoicing\TaxRate
     */
    public function getTaxRate()
    {
        return $this->TaxRate;
    }

    /**
     * Set 'TaxRate' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Invoicing\TaxRate $value
     */
    public function setTaxRate(\Antlena\SDK\Diadoc\Proto\Invoicing\TaxRate $value)
    {
        $this->TaxRate = $value;
    }

    /**
     * Check if 'SubtotalWithVatExcluded' has a value
     *
     * @return bool
     */
    public function hasSubtotalWithVatExcluded()
    {
        return $this->SubtotalWithVatExcluded !== null;
    }

    /**
     * Get 'SubtotalWithVatExcluded' value
     *
     * @return string
     */
    public function getSubtotalWithVatExcluded()
    {
        return $this->SubtotalWithVatExcluded;
    }

    /**
     * Set 'SubtotalWithVatExcluded' value
     *
     * @param string $value
     */
    public function setSubtotalWithVatExcluded($value = null)
    {
        $this->SubtotalWithVatExcluded = $value;
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
     * Check if 'Subtotal' has a value
     *
     * @return bool
     */
    public function hasSubtotal()
    {
        return $this->Subtotal !== null;
    }

    /**
     * Get 'Subtotal' value
     *
     * @return string
     */
    public function getSubtotal()
    {
        return $this->Subtotal;
    }

    /**
     * Set 'Subtotal' value
     *
     * @param string $value
     */
    public function setSubtotal($value)
    {
        $this->Subtotal = $value;
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
        if ( ! isset($values['TaxRate'])) {
            throw new \InvalidArgumentException('Field "TaxRate" (tag 5) is required but has no value.');
        }

        if ( ! isset($values['Subtotal'])) {
            throw new \InvalidArgumentException('Field "Subtotal" (tag 8) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'Unit' => null,
            'Quantity' => null,
            'Price' => null,
            'Excise' => null,
            'SubtotalWithVatExcluded' => null,
            'Vat' => null,
        ], $values);

        $message->setUnit($values['Unit']);
        $message->setQuantity($values['Quantity']);
        $message->setPrice($values['Price']);
        $message->setExcise($values['Excise']);
        $message->setTaxRate($values['TaxRate']);
        $message->setSubtotalWithVatExcluded($values['SubtotalWithVatExcluded']);
        $message->setVat($values['Vat']);
        $message->setSubtotal($values['Subtotal']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CorrectableInvoiceItemFields',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Unit',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Quantity',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'Price',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'Excise',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'TaxRate',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Invoicing.TaxRate'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'SubtotalWithVatExcluded',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'Vat',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'Subtotal',
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

        if ($this->TaxRate === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Invoicing\\CorrectableInvoiceItemFields#TaxRate" (tag 5) is required but has no value.');
        }

        if ($this->Subtotal === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Invoicing\\CorrectableInvoiceItemFields#Subtotal" (tag 8) is required but has no value.');
        }

        if ($this->Unit !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->Unit);
        }

        if ($this->Quantity !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->Quantity);
        }

        if ($this->Price !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->Price);
        }

        if ($this->Excise !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->Excise);
        }

        if ($this->TaxRate !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->TaxRate->value());
        }

        if ($this->SubtotalWithVatExcluded !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->SubtotalWithVatExcluded);
        }

        if ($this->Vat !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeString($stream, $this->Vat);
        }

        if ($this->Subtotal !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeString($stream, $this->Subtotal);
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

                $this->Unit = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Quantity = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Price = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Excise = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->TaxRate = \Antlena\SDK\Diadoc\Proto\Invoicing\TaxRate::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->SubtotalWithVatExcluded = $reader->readString($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Vat = $reader->readString($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Subtotal = $reader->readString($stream);

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

        if ($this->Unit !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Unit);
        }

        if ($this->Quantity !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Quantity);
        }

        if ($this->Price !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Price);
        }

        if ($this->Excise !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Excise);
        }

        if ($this->TaxRate !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->TaxRate->value());
        }

        if ($this->SubtotalWithVatExcluded !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->SubtotalWithVatExcluded);
        }

        if ($this->Vat !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Vat);
        }

        if ($this->Subtotal !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Subtotal);
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
        $this->Unit = null;
        $this->Quantity = null;
        $this->Price = null;
        $this->Excise = null;
        $this->TaxRate = null;
        $this->SubtotalWithVatExcluded = null;
        $this->Vat = null;
        $this->Subtotal = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Invoicing\CorrectableInvoiceItemFields) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Unit = ($message->Unit !== null) ? $message->Unit : $this->Unit;
        $this->Quantity = ($message->Quantity !== null) ? $message->Quantity : $this->Quantity;
        $this->Price = ($message->Price !== null) ? $message->Price : $this->Price;
        $this->Excise = ($message->Excise !== null) ? $message->Excise : $this->Excise;
        $this->TaxRate = ($message->TaxRate !== null) ? $message->TaxRate : $this->TaxRate;
        $this->SubtotalWithVatExcluded = ($message->SubtotalWithVatExcluded !== null) ? $message->SubtotalWithVatExcluded : $this->SubtotalWithVatExcluded;
        $this->Vat = ($message->Vat !== null) ? $message->Vat : $this->Vat;
        $this->Subtotal = ($message->Subtotal !== null) ? $message->Subtotal : $this->Subtotal;
    }


}

