<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Invoicing/UniversalTransferDocumentInfo.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Invoicing;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Invoicing.ExtendedInvoiceCorrectionItem
 */
class ExtendedInvoiceCorrectionItem extends \Protobuf\AbstractMessage
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
     * Product required string = 1
     *
     * @var string
     */
    protected $Product = null;

    /**
     * OriginalValues required message = 2
     *
     * @var \Antlena\SDK\Diadoc\Proto\Invoicing\CorrectableInvoiceItemFields
     */
    protected $OriginalValues = null;

    /**
     * CorrectedValues required message = 3
     *
     * @var \Antlena\SDK\Diadoc\Proto\Invoicing\CorrectableInvoiceItemFields
     */
    protected $CorrectedValues = null;

    /**
     * AmountsInc optional message = 4
     *
     * @var \Antlena\SDK\Diadoc\Proto\Invoicing\InvoiceItemAmountsDiff
     */
    protected $AmountsInc = null;

    /**
     * AmountsDec optional message = 5
     *
     * @var \Antlena\SDK\Diadoc\Proto\Invoicing\InvoiceItemAmountsDiff
     */
    protected $AmountsDec = null;

    /**
     * ItemAccountDebit optional string = 6
     *
     * @var string
     */
    protected $ItemAccountDebit = null;

    /**
     * ItemAccountCredit optional string = 7
     *
     * @var string
     */
    protected $ItemAccountCredit = null;

    /**
     * AdditionalInfo repeated message = 8
     *
     * @var \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Invoicing\AdditionalInfo>
     */
    protected $AdditionalInfo = null;

    /**
     * Check if 'Product' has a value
     *
     * @return bool
     */
    public function hasProduct()
    {
        return $this->Product !== null;
    }

    /**
     * Get 'Product' value
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->Product;
    }

    /**
     * Set 'Product' value
     *
     * @param string $value
     */
    public function setProduct($value)
    {
        $this->Product = $value;
    }

    /**
     * Check if 'OriginalValues' has a value
     *
     * @return bool
     */
    public function hasOriginalValues()
    {
        return $this->OriginalValues !== null;
    }

    /**
     * Get 'OriginalValues' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Invoicing\CorrectableInvoiceItemFields
     */
    public function getOriginalValues()
    {
        return $this->OriginalValues;
    }

    /**
     * Set 'OriginalValues' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Invoicing\CorrectableInvoiceItemFields $value
     */
    public function setOriginalValues(\Antlena\SDK\Diadoc\Proto\Invoicing\CorrectableInvoiceItemFields $value)
    {
        $this->OriginalValues = $value;
    }

    /**
     * Check if 'CorrectedValues' has a value
     *
     * @return bool
     */
    public function hasCorrectedValues()
    {
        return $this->CorrectedValues !== null;
    }

    /**
     * Get 'CorrectedValues' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Invoicing\CorrectableInvoiceItemFields
     */
    public function getCorrectedValues()
    {
        return $this->CorrectedValues;
    }

    /**
     * Set 'CorrectedValues' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Invoicing\CorrectableInvoiceItemFields $value
     */
    public function setCorrectedValues(\Antlena\SDK\Diadoc\Proto\Invoicing\CorrectableInvoiceItemFields $value)
    {
        $this->CorrectedValues = $value;
    }

    /**
     * Check if 'AmountsInc' has a value
     *
     * @return bool
     */
    public function hasAmountsInc()
    {
        return $this->AmountsInc !== null;
    }

    /**
     * Get 'AmountsInc' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Invoicing\InvoiceItemAmountsDiff
     */
    public function getAmountsInc()
    {
        return $this->AmountsInc;
    }

    /**
     * Set 'AmountsInc' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Invoicing\InvoiceItemAmountsDiff $value
     */
    public function setAmountsInc(\Antlena\SDK\Diadoc\Proto\Invoicing\InvoiceItemAmountsDiff $value = null)
    {
        $this->AmountsInc = $value;
    }

    /**
     * Check if 'AmountsDec' has a value
     *
     * @return bool
     */
    public function hasAmountsDec()
    {
        return $this->AmountsDec !== null;
    }

    /**
     * Get 'AmountsDec' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Invoicing\InvoiceItemAmountsDiff
     */
    public function getAmountsDec()
    {
        return $this->AmountsDec;
    }

    /**
     * Set 'AmountsDec' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Invoicing\InvoiceItemAmountsDiff $value
     */
    public function setAmountsDec(\Antlena\SDK\Diadoc\Proto\Invoicing\InvoiceItemAmountsDiff $value = null)
    {
        $this->AmountsDec = $value;
    }

    /**
     * Check if 'ItemAccountDebit' has a value
     *
     * @return bool
     */
    public function hasItemAccountDebit()
    {
        return $this->ItemAccountDebit !== null;
    }

    /**
     * Get 'ItemAccountDebit' value
     *
     * @return string
     */
    public function getItemAccountDebit()
    {
        return $this->ItemAccountDebit;
    }

    /**
     * Set 'ItemAccountDebit' value
     *
     * @param string $value
     */
    public function setItemAccountDebit($value = null)
    {
        $this->ItemAccountDebit = $value;
    }

    /**
     * Check if 'ItemAccountCredit' has a value
     *
     * @return bool
     */
    public function hasItemAccountCredit()
    {
        return $this->ItemAccountCredit !== null;
    }

    /**
     * Get 'ItemAccountCredit' value
     *
     * @return string
     */
    public function getItemAccountCredit()
    {
        return $this->ItemAccountCredit;
    }

    /**
     * Set 'ItemAccountCredit' value
     *
     * @param string $value
     */
    public function setItemAccountCredit($value = null)
    {
        $this->ItemAccountCredit = $value;
    }

    /**
     * Check if 'AdditionalInfo' has a value
     *
     * @return bool
     */
    public function hasAdditionalInfoList()
    {
        return $this->AdditionalInfo !== null;
    }

    /**
     * Get 'AdditionalInfo' value
     *
     * @return \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Invoicing\AdditionalInfo>
     */
    public function getAdditionalInfoList()
    {
        return $this->AdditionalInfo;
    }

    /**
     * Set 'AdditionalInfo' value
     *
     * @param \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Invoicing\AdditionalInfo> $value
     */
    public function setAdditionalInfoList(\Protobuf\Collection $value = null)
    {
        $this->AdditionalInfo = $value;
    }

    /**
     * Add a new element to 'AdditionalInfo'
     *
     * @param \Antlena\SDK\Diadoc\Proto\Invoicing\AdditionalInfo $value
     */
    public function addAdditionalInfo(\Antlena\SDK\Diadoc\Proto\Invoicing\AdditionalInfo $value)
    {
        if ($this->AdditionalInfo === null) {
            $this->AdditionalInfo = new \Protobuf\MessageCollection();
        }

        $this->AdditionalInfo->add($value);
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
        if ( ! isset($values['Product'])) {
            throw new \InvalidArgumentException('Field "Product" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['OriginalValues'])) {
            throw new \InvalidArgumentException('Field "OriginalValues" (tag 2) is required but has no value.');
        }

        if ( ! isset($values['CorrectedValues'])) {
            throw new \InvalidArgumentException('Field "CorrectedValues" (tag 3) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'AmountsInc' => null,
            'AmountsDec' => null,
            'ItemAccountDebit' => null,
            'ItemAccountCredit' => null,
            'AdditionalInfo' => []
        ], $values);

        $message->setProduct($values['Product']);
        $message->setOriginalValues($values['OriginalValues']);
        $message->setCorrectedValues($values['CorrectedValues']);
        $message->setAmountsInc($values['AmountsInc']);
        $message->setAmountsDec($values['AmountsDec']);
        $message->setItemAccountDebit($values['ItemAccountDebit']);
        $message->setItemAccountCredit($values['ItemAccountCredit']);

        foreach ($values['AdditionalInfo'] as $item) {
            $message->addAdditionalInfo($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'ExtendedInvoiceCorrectionItem',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Product',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'OriginalValues',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Invoicing.CorrectableInvoiceItemFields'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'CorrectedValues',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Invoicing.CorrectableInvoiceItemFields'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'AmountsInc',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Invoicing.InvoiceItemAmountsDiff'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'AmountsDec',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Invoicing.InvoiceItemAmountsDiff'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'ItemAccountDebit',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'ItemAccountCredit',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'AdditionalInfo',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Invoicing.AdditionalInfo'
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

        if ($this->Product === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Invoicing\\ExtendedInvoiceCorrectionItem#Product" (tag 1) is required but has no value.');
        }

        if ($this->OriginalValues === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Invoicing\\ExtendedInvoiceCorrectionItem#OriginalValues" (tag 2) is required but has no value.');
        }

        if ($this->CorrectedValues === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Invoicing\\ExtendedInvoiceCorrectionItem#CorrectedValues" (tag 3) is required but has no value.');
        }

        if ($this->Product !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->Product);
        }

        if ($this->OriginalValues !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->OriginalValues->serializedSize($sizeContext));
            $this->OriginalValues->writeTo($context);
        }

        if ($this->CorrectedValues !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->CorrectedValues->serializedSize($sizeContext));
            $this->CorrectedValues->writeTo($context);
        }

        if ($this->AmountsInc !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeVarint($stream, $this->AmountsInc->serializedSize($sizeContext));
            $this->AmountsInc->writeTo($context);
        }

        if ($this->AmountsDec !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeVarint($stream, $this->AmountsDec->serializedSize($sizeContext));
            $this->AmountsDec->writeTo($context);
        }

        if ($this->ItemAccountDebit !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->ItemAccountDebit);
        }

        if ($this->ItemAccountCredit !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeString($stream, $this->ItemAccountCredit);
        }

        if ($this->AdditionalInfo !== null) {
            foreach ($this->AdditionalInfo as $val) {
                $writer->writeVarint($stream, 66);
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

                $this->Product = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Invoicing\CorrectableInvoiceItemFields();

                $this->OriginalValues = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Invoicing\CorrectableInvoiceItemFields();

                $this->CorrectedValues = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Invoicing\InvoiceItemAmountsDiff();

                $this->AmountsInc = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Invoicing\InvoiceItemAmountsDiff();

                $this->AmountsDec = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ItemAccountDebit = $reader->readString($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ItemAccountCredit = $reader->readString($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Invoicing\AdditionalInfo();

                if ($this->AdditionalInfo === null) {
                    $this->AdditionalInfo = new \Protobuf\MessageCollection();
                }

                $this->AdditionalInfo->add($innerMessage);

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

        if ($this->Product !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Product);
        }

        if ($this->OriginalValues !== null) {
            $innerSize = $this->OriginalValues->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->CorrectedValues !== null) {
            $innerSize = $this->CorrectedValues->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->AmountsInc !== null) {
            $innerSize = $this->AmountsInc->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->AmountsDec !== null) {
            $innerSize = $this->AmountsDec->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->ItemAccountDebit !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ItemAccountDebit);
        }

        if ($this->ItemAccountCredit !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ItemAccountCredit);
        }

        if ($this->AdditionalInfo !== null) {
            foreach ($this->AdditionalInfo as $val) {
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
        $this->Product = null;
        $this->OriginalValues = null;
        $this->CorrectedValues = null;
        $this->AmountsInc = null;
        $this->AmountsDec = null;
        $this->ItemAccountDebit = null;
        $this->ItemAccountCredit = null;
        $this->AdditionalInfo = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Invoicing\ExtendedInvoiceCorrectionItem) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Product = ($message->Product !== null) ? $message->Product : $this->Product;
        $this->OriginalValues = ($message->OriginalValues !== null) ? $message->OriginalValues : $this->OriginalValues;
        $this->CorrectedValues = ($message->CorrectedValues !== null) ? $message->CorrectedValues : $this->CorrectedValues;
        $this->AmountsInc = ($message->AmountsInc !== null) ? $message->AmountsInc : $this->AmountsInc;
        $this->AmountsDec = ($message->AmountsDec !== null) ? $message->AmountsDec : $this->AmountsDec;
        $this->ItemAccountDebit = ($message->ItemAccountDebit !== null) ? $message->ItemAccountDebit : $this->ItemAccountDebit;
        $this->ItemAccountCredit = ($message->ItemAccountCredit !== null) ? $message->ItemAccountCredit : $this->ItemAccountCredit;
        $this->AdditionalInfo = ($message->AdditionalInfo !== null) ? $message->AdditionalInfo : $this->AdditionalInfo;
    }


}
