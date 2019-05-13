<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Invoicing/InvoiceInfo.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Invoicing;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Invoicing.InvoiceItemAmountsDiff
 */
class InvoiceItemAmountsDiff extends \Protobuf\AbstractMessage
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
     * Excise optional string = 1
     *
     * @var string
     */
    protected $Excise = null;

    /**
     * SubtotalWithVatExcluded optional string = 2
     *
     * @var string
     */
    protected $SubtotalWithVatExcluded = null;

    /**
     * Vat optional string = 3
     *
     * @var string
     */
    protected $Vat = null;

    /**
     * Subtotal optional string = 4
     *
     * @var string
     */
    protected $Subtotal = null;

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
    public function setSubtotal($value = null)
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
        $message = new self();
        $values  = array_merge([
            'Excise' => null,
            'SubtotalWithVatExcluded' => null,
            'Vat' => null,
            'Subtotal' => null
        ], $values);

        $message->setExcise($values['Excise']);
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
            'name'      => 'InvoiceItemAmountsDiff',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Excise',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'SubtotalWithVatExcluded',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'Vat',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'Subtotal',
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

        if ($this->Excise !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->Excise);
        }

        if ($this->SubtotalWithVatExcluded !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->SubtotalWithVatExcluded);
        }

        if ($this->Vat !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->Vat);
        }

        if ($this->Subtotal !== null) {
            $writer->writeVarint($stream, 34);
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

                $this->Excise = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->SubtotalWithVatExcluded = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Vat = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
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

        if ($this->Excise !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Excise);
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
        $this->Excise = null;
        $this->SubtotalWithVatExcluded = null;
        $this->Vat = null;
        $this->Subtotal = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Invoicing\InvoiceItemAmountsDiff) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Excise = ($message->Excise !== null) ? $message->Excise : $this->Excise;
        $this->SubtotalWithVatExcluded = ($message->SubtotalWithVatExcluded !== null) ? $message->SubtotalWithVatExcluded : $this->SubtotalWithVatExcluded;
        $this->Vat = ($message->Vat !== null) ? $message->Vat : $this->Vat;
        $this->Subtotal = ($message->Subtotal !== null) ? $message->Subtotal : $this->Subtotal;
    }


}

