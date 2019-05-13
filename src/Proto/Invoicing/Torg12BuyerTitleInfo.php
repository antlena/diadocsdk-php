<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Invoicing/Torg12Info.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Invoicing;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Invoicing.Torg12BuyerTitleInfo
 */
class Torg12BuyerTitleInfo extends \Protobuf\AbstractMessage
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
     * ShipmentReceiptDate required string = 1
     *
     * @var string
     */
    protected $ShipmentReceiptDate = null;

    /**
     * Attorney optional message = 2
     *
     * @var \Antlena\SDK\Diadoc\Proto\Invoicing\Attorney
     */
    protected $Attorney = null;

    /**
     * AcceptedBy optional message = 3
     *
     * @var \Antlena\SDK\Diadoc\Proto\Invoicing\Official
     */
    protected $AcceptedBy = null;

    /**
     * ReceivedBy optional message = 4
     *
     * @var \Antlena\SDK\Diadoc\Proto\Invoicing\Official
     */
    protected $ReceivedBy = null;

    /**
     * Signer required message = 5
     *
     * @var \Antlena\SDK\Diadoc\Proto\Invoicing\Signer
     */
    protected $Signer = null;

    /**
     * AdditionalInfo optional string = 6
     *
     * @var string
     */
    protected $AdditionalInfo = null;

    /**
     * Check if 'ShipmentReceiptDate' has a value
     *
     * @return bool
     */
    public function hasShipmentReceiptDate()
    {
        return $this->ShipmentReceiptDate !== null;
    }

    /**
     * Get 'ShipmentReceiptDate' value
     *
     * @return string
     */
    public function getShipmentReceiptDate()
    {
        return $this->ShipmentReceiptDate;
    }

    /**
     * Set 'ShipmentReceiptDate' value
     *
     * @param string $value
     */
    public function setShipmentReceiptDate($value)
    {
        $this->ShipmentReceiptDate = $value;
    }

    /**
     * Check if 'Attorney' has a value
     *
     * @return bool
     */
    public function hasAttorney()
    {
        return $this->Attorney !== null;
    }

    /**
     * Get 'Attorney' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Invoicing\Attorney
     */
    public function getAttorney()
    {
        return $this->Attorney;
    }

    /**
     * Set 'Attorney' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Invoicing\Attorney $value
     */
    public function setAttorney(\Antlena\SDK\Diadoc\Proto\Invoicing\Attorney $value = null)
    {
        $this->Attorney = $value;
    }

    /**
     * Check if 'AcceptedBy' has a value
     *
     * @return bool
     */
    public function hasAcceptedBy()
    {
        return $this->AcceptedBy !== null;
    }

    /**
     * Get 'AcceptedBy' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Invoicing\Official
     */
    public function getAcceptedBy()
    {
        return $this->AcceptedBy;
    }

    /**
     * Set 'AcceptedBy' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Invoicing\Official $value
     */
    public function setAcceptedBy(\Antlena\SDK\Diadoc\Proto\Invoicing\Official $value = null)
    {
        $this->AcceptedBy = $value;
    }

    /**
     * Check if 'ReceivedBy' has a value
     *
     * @return bool
     */
    public function hasReceivedBy()
    {
        return $this->ReceivedBy !== null;
    }

    /**
     * Get 'ReceivedBy' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Invoicing\Official
     */
    public function getReceivedBy()
    {
        return $this->ReceivedBy;
    }

    /**
     * Set 'ReceivedBy' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Invoicing\Official $value
     */
    public function setReceivedBy(\Antlena\SDK\Diadoc\Proto\Invoicing\Official $value = null)
    {
        $this->ReceivedBy = $value;
    }

    /**
     * Check if 'Signer' has a value
     *
     * @return bool
     */
    public function hasSigner()
    {
        return $this->Signer !== null;
    }

    /**
     * Get 'Signer' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Invoicing\Signer
     */
    public function getSigner()
    {
        return $this->Signer;
    }

    /**
     * Set 'Signer' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Invoicing\Signer $value
     */
    public function setSigner(\Antlena\SDK\Diadoc\Proto\Invoicing\Signer $value)
    {
        $this->Signer = $value;
    }

    /**
     * Check if 'AdditionalInfo' has a value
     *
     * @return bool
     */
    public function hasAdditionalInfo()
    {
        return $this->AdditionalInfo !== null;
    }

    /**
     * Get 'AdditionalInfo' value
     *
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->AdditionalInfo;
    }

    /**
     * Set 'AdditionalInfo' value
     *
     * @param string $value
     */
    public function setAdditionalInfo($value = null)
    {
        $this->AdditionalInfo = $value;
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
        if ( ! isset($values['ShipmentReceiptDate'])) {
            throw new \InvalidArgumentException('Field "ShipmentReceiptDate" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['Signer'])) {
            throw new \InvalidArgumentException('Field "Signer" (tag 5) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'Attorney' => null,
            'AcceptedBy' => null,
            'ReceivedBy' => null,
            'AdditionalInfo' => null
        ], $values);

        $message->setShipmentReceiptDate($values['ShipmentReceiptDate']);
        $message->setAttorney($values['Attorney']);
        $message->setAcceptedBy($values['AcceptedBy']);
        $message->setReceivedBy($values['ReceivedBy']);
        $message->setSigner($values['Signer']);
        $message->setAdditionalInfo($values['AdditionalInfo']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Torg12BuyerTitleInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'ShipmentReceiptDate',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Attorney',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Invoicing.Attorney'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'AcceptedBy',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Invoicing.Official'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'ReceivedBy',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Invoicing.Official'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'Signer',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Invoicing.Signer'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'AdditionalInfo',
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

        if ($this->ShipmentReceiptDate === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Invoicing\\Torg12BuyerTitleInfo#ShipmentReceiptDate" (tag 1) is required but has no value.');
        }

        if ($this->Signer === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Invoicing\\Torg12BuyerTitleInfo#Signer" (tag 5) is required but has no value.');
        }

        if ($this->ShipmentReceiptDate !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->ShipmentReceiptDate);
        }

        if ($this->Attorney !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->Attorney->serializedSize($sizeContext));
            $this->Attorney->writeTo($context);
        }

        if ($this->AcceptedBy !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->AcceptedBy->serializedSize($sizeContext));
            $this->AcceptedBy->writeTo($context);
        }

        if ($this->ReceivedBy !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeVarint($stream, $this->ReceivedBy->serializedSize($sizeContext));
            $this->ReceivedBy->writeTo($context);
        }

        if ($this->Signer !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeVarint($stream, $this->Signer->serializedSize($sizeContext));
            $this->Signer->writeTo($context);
        }

        if ($this->AdditionalInfo !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->AdditionalInfo);
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

                $this->ShipmentReceiptDate = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Invoicing\Attorney();

                $this->Attorney = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Invoicing\Official();

                $this->AcceptedBy = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Invoicing\Official();

                $this->ReceivedBy = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Invoicing\Signer();

                $this->Signer = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->AdditionalInfo = $reader->readString($stream);

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

        if ($this->ShipmentReceiptDate !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ShipmentReceiptDate);
        }

        if ($this->Attorney !== null) {
            $innerSize = $this->Attorney->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->AcceptedBy !== null) {
            $innerSize = $this->AcceptedBy->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->ReceivedBy !== null) {
            $innerSize = $this->ReceivedBy->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->Signer !== null) {
            $innerSize = $this->Signer->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->AdditionalInfo !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->AdditionalInfo);
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
        $this->ShipmentReceiptDate = null;
        $this->Attorney = null;
        $this->AcceptedBy = null;
        $this->ReceivedBy = null;
        $this->Signer = null;
        $this->AdditionalInfo = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Invoicing\Torg12BuyerTitleInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->ShipmentReceiptDate = ($message->ShipmentReceiptDate !== null) ? $message->ShipmentReceiptDate : $this->ShipmentReceiptDate;
        $this->Attorney = ($message->Attorney !== null) ? $message->Attorney : $this->Attorney;
        $this->AcceptedBy = ($message->AcceptedBy !== null) ? $message->AcceptedBy : $this->AcceptedBy;
        $this->ReceivedBy = ($message->ReceivedBy !== null) ? $message->ReceivedBy : $this->ReceivedBy;
        $this->Signer = ($message->Signer !== null) ? $message->Signer : $this->Signer;
        $this->AdditionalInfo = ($message->AdditionalInfo !== null) ? $message->AdditionalInfo : $this->AdditionalInfo;
    }


}

