<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Address.proto
 */


namespace Antlena\SDK\Diadoc\Proto;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Address
 */
class Address extends \Protobuf\AbstractMessage
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
     * RussianAddress optional message = 1
     *
     * @var \Antlena\SDK\Diadoc\Proto\RussianAddress
     */
    protected $RussianAddress = null;

    /**
     * ForeignAddress optional message = 2
     *
     * @var \Antlena\SDK\Diadoc\Proto\ForeignAddress
     */
    protected $ForeignAddress = null;

    /**
     * AddressCode optional string = 3
     *
     * @var string
     */
    protected $AddressCode = null;

    /**
     * Check if 'RussianAddress' has a value
     *
     * @return bool
     */
    public function hasRussianAddress()
    {
        return $this->RussianAddress !== null;
    }

    /**
     * Get 'RussianAddress' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\RussianAddress
     */
    public function getRussianAddress()
    {
        return $this->RussianAddress;
    }

    /**
     * Set 'RussianAddress' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\RussianAddress $value
     */
    public function setRussianAddress(\Antlena\SDK\Diadoc\Proto\RussianAddress $value = null)
    {
        $this->RussianAddress = $value;
    }

    /**
     * Check if 'ForeignAddress' has a value
     *
     * @return bool
     */
    public function hasForeignAddress()
    {
        return $this->ForeignAddress !== null;
    }

    /**
     * Get 'ForeignAddress' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\ForeignAddress
     */
    public function getForeignAddress()
    {
        return $this->ForeignAddress;
    }

    /**
     * Set 'ForeignAddress' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\ForeignAddress $value
     */
    public function setForeignAddress(\Antlena\SDK\Diadoc\Proto\ForeignAddress $value = null)
    {
        $this->ForeignAddress = $value;
    }

    /**
     * Check if 'AddressCode' has a value
     *
     * @return bool
     */
    public function hasAddressCode()
    {
        return $this->AddressCode !== null;
    }

    /**
     * Get 'AddressCode' value
     *
     * @return string
     */
    public function getAddressCode()
    {
        return $this->AddressCode;
    }

    /**
     * Set 'AddressCode' value
     *
     * @param string $value
     */
    public function setAddressCode($value = null)
    {
        $this->AddressCode = $value;
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
            'RussianAddress' => null,
            'ForeignAddress' => null,
            'AddressCode' => null
        ], $values);

        $message->setRussianAddress($values['RussianAddress']);
        $message->setForeignAddress($values['ForeignAddress']);
        $message->setAddressCode($values['AddressCode']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Address',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'RussianAddress',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.RussianAddress'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'ForeignAddress',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.ForeignAddress'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'AddressCode',
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

        if ($this->RussianAddress !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeVarint($stream, $this->RussianAddress->serializedSize($sizeContext));
            $this->RussianAddress->writeTo($context);
        }

        if ($this->ForeignAddress !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->ForeignAddress->serializedSize($sizeContext));
            $this->ForeignAddress->writeTo($context);
        }

        if ($this->AddressCode !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->AddressCode);
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
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\RussianAddress();

                $this->RussianAddress = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\ForeignAddress();

                $this->ForeignAddress = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->AddressCode = $reader->readString($stream);

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

        if ($this->RussianAddress !== null) {
            $innerSize = $this->RussianAddress->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->ForeignAddress !== null) {
            $innerSize = $this->ForeignAddress->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->AddressCode !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->AddressCode);
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
        $this->RussianAddress = null;
        $this->ForeignAddress = null;
        $this->AddressCode = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Address) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->RussianAddress = ($message->RussianAddress !== null) ? $message->RussianAddress : $this->RussianAddress;
        $this->ForeignAddress = ($message->ForeignAddress !== null) ? $message->ForeignAddress : $this->ForeignAddress;
        $this->AddressCode = ($message->AddressCode !== null) ? $message->AddressCode : $this->AddressCode;
    }


}
