<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Documents/InvoiceDocument.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument;

/**
 * Protobuf message :
 * Antlena.SDK.Diadoc.Proto.Documents.InvoiceDocument.InvoiceMetadata
 */
class InvoiceMetadata extends \Protobuf\AbstractMessage
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
     * InvoiceStatus optional enum = 1
     *
     * @var \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus
     */
    protected $InvoiceStatus = null;

    /**
     * Total required string = 2
     *
     * @var string
     */
    protected $Total = null;

    /**
     * Vat required string = 3
     *
     * @var string
     */
    protected $Vat = null;

    /**
     * Currency required int32 = 4
     *
     * @var int
     */
    protected $Currency = null;

    /**
     * ConfirmationDateTimeTicks required sfixed64 = 5
     *
     * @var int
     */
    protected $ConfirmationDateTimeTicks = null;

    /**
     * InvoiceAmendmentFlags required int32 = 6
     *
     * @var int
     */
    protected $InvoiceAmendmentFlags = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->InvoiceStatus = \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus::UnknownInvoiceStatus();

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'InvoiceStatus' has a value
     *
     * @return bool
     */
    public function hasInvoiceStatus()
    {
        return $this->InvoiceStatus !== null;
    }

    /**
     * Get 'InvoiceStatus' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus
     */
    public function getInvoiceStatus()
    {
        return $this->InvoiceStatus;
    }

    /**
     * Set 'InvoiceStatus' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus $value
     */
    public function setInvoiceStatus(\Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus $value = null)
    {
        $this->InvoiceStatus = $value;
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
    public function setVat($value)
    {
        $this->Vat = $value;
    }

    /**
     * Check if 'Currency' has a value
     *
     * @return bool
     */
    public function hasCurrency()
    {
        return $this->Currency !== null;
    }

    /**
     * Get 'Currency' value
     *
     * @return int
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Set 'Currency' value
     *
     * @param int $value
     */
    public function setCurrency($value)
    {
        $this->Currency = $value;
    }

    /**
     * Check if 'ConfirmationDateTimeTicks' has a value
     *
     * @return bool
     */
    public function hasConfirmationDateTimeTicks()
    {
        return $this->ConfirmationDateTimeTicks !== null;
    }

    /**
     * Get 'ConfirmationDateTimeTicks' value
     *
     * @return int
     */
    public function getConfirmationDateTimeTicks()
    {
        return $this->ConfirmationDateTimeTicks;
    }

    /**
     * Set 'ConfirmationDateTimeTicks' value
     *
     * @param int $value
     */
    public function setConfirmationDateTimeTicks($value)
    {
        $this->ConfirmationDateTimeTicks = $value;
    }

    /**
     * Check if 'InvoiceAmendmentFlags' has a value
     *
     * @return bool
     */
    public function hasInvoiceAmendmentFlags()
    {
        return $this->InvoiceAmendmentFlags !== null;
    }

    /**
     * Get 'InvoiceAmendmentFlags' value
     *
     * @return int
     */
    public function getInvoiceAmendmentFlags()
    {
        return $this->InvoiceAmendmentFlags;
    }

    /**
     * Set 'InvoiceAmendmentFlags' value
     *
     * @param int $value
     */
    public function setInvoiceAmendmentFlags($value)
    {
        $this->InvoiceAmendmentFlags = $value;
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
            throw new \InvalidArgumentException('Field "Total" (tag 2) is required but has no value.');
        }

        if ( ! isset($values['Vat'])) {
            throw new \InvalidArgumentException('Field "Vat" (tag 3) is required but has no value.');
        }

        if ( ! isset($values['Currency'])) {
            throw new \InvalidArgumentException('Field "Currency" (tag 4) is required but has no value.');
        }

        if ( ! isset($values['ConfirmationDateTimeTicks'])) {
            throw new \InvalidArgumentException('Field "ConfirmationDateTimeTicks" (tag 5) is required but has no value.');
        }

        if ( ! isset($values['InvoiceAmendmentFlags'])) {
            throw new \InvalidArgumentException('Field "InvoiceAmendmentFlags" (tag 6) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'InvoiceStatus' => \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus::UnknownInvoiceStatus(),
        ], $values);

        $message->setInvoiceStatus($values['InvoiceStatus']);
        $message->setTotal($values['Total']);
        $message->setVat($values['Vat']);
        $message->setCurrency($values['Currency']);
        $message->setConfirmationDateTimeTicks($values['ConfirmationDateTimeTicks']);
        $message->setInvoiceAmendmentFlags($values['InvoiceAmendmentFlags']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'InvoiceMetadata',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'InvoiceStatus',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Documents.InvoiceDocument.InvoiceStatus',
                    'default_value' => \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus::UnknownInvoiceStatus()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Total',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'Vat',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'Currency',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'ConfirmationDateTimeTicks',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_SFIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'InvoiceAmendmentFlags',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
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

        if ($this->Total === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Documents\\InvoiceDocument\\InvoiceMetadata#Total" (tag 2) is required but has no value.');
        }

        if ($this->Vat === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Documents\\InvoiceDocument\\InvoiceMetadata#Vat" (tag 3) is required but has no value.');
        }

        if ($this->Currency === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Documents\\InvoiceDocument\\InvoiceMetadata#Currency" (tag 4) is required but has no value.');
        }

        if ($this->ConfirmationDateTimeTicks === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Documents\\InvoiceDocument\\InvoiceMetadata#ConfirmationDateTimeTicks" (tag 5) is required but has no value.');
        }

        if ($this->InvoiceAmendmentFlags === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Documents\\InvoiceDocument\\InvoiceMetadata#InvoiceAmendmentFlags" (tag 6) is required but has no value.');
        }

        if ($this->InvoiceStatus !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->InvoiceStatus->value());
        }

        if ($this->Total !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->Total);
        }

        if ($this->Vat !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->Vat);
        }

        if ($this->Currency !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->Currency);
        }

        if ($this->ConfirmationDateTimeTicks !== null) {
            $writer->writeVarint($stream, 41);
            $writer->writeSFixed64($stream, $this->ConfirmationDateTimeTicks);
        }

        if ($this->InvoiceAmendmentFlags !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->InvoiceAmendmentFlags);
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

                $this->InvoiceStatus = \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Total = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Vat = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->Currency = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 16);

                $this->ConfirmationDateTimeTicks = $reader->readSFixed64($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->InvoiceAmendmentFlags = $reader->readVarint($stream);

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

        if ($this->InvoiceStatus !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->InvoiceStatus->value());
        }

        if ($this->Total !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Total);
        }

        if ($this->Vat !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Vat);
        }

        if ($this->Currency !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->Currency);
        }

        if ($this->ConfirmationDateTimeTicks !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->InvoiceAmendmentFlags !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->InvoiceAmendmentFlags);
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
        $this->InvoiceStatus = \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceStatus::UnknownInvoiceStatus();
        $this->Total = null;
        $this->Vat = null;
        $this->Currency = null;
        $this->ConfirmationDateTimeTicks = null;
        $this->InvoiceAmendmentFlags = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Documents\InvoiceDocument\InvoiceMetadata) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->InvoiceStatus = ($message->InvoiceStatus !== null) ? $message->InvoiceStatus : $this->InvoiceStatus;
        $this->Total = ($message->Total !== null) ? $message->Total : $this->Total;
        $this->Vat = ($message->Vat !== null) ? $message->Vat : $this->Vat;
        $this->Currency = ($message->Currency !== null) ? $message->Currency : $this->Currency;
        $this->ConfirmationDateTimeTicks = ($message->ConfirmationDateTimeTicks !== null) ? $message->ConfirmationDateTimeTicks : $this->ConfirmationDateTimeTicks;
        $this->InvoiceAmendmentFlags = ($message->InvoiceAmendmentFlags !== null) ? $message->InvoiceAmendmentFlags : $this->InvoiceAmendmentFlags;
    }


}

