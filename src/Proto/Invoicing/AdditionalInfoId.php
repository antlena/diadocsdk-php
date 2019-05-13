<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Invoicing/UniversalTransferDocumentInfo.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Invoicing;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Invoicing.AdditionalInfoId
 */
class AdditionalInfoId extends \Protobuf\AbstractMessage
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
     * InfoFileId optional string = 1
     *
     * @var string
     */
    protected $InfoFileId = null;

    /**
     * AdditionalInfo repeated message = 2
     *
     * @var \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Invoicing\AdditionalInfo>
     */
    protected $AdditionalInfo = null;

    /**
     * Check if 'InfoFileId' has a value
     *
     * @return bool
     */
    public function hasInfoFileId()
    {
        return $this->InfoFileId !== null;
    }

    /**
     * Get 'InfoFileId' value
     *
     * @return string
     */
    public function getInfoFileId()
    {
        return $this->InfoFileId;
    }

    /**
     * Set 'InfoFileId' value
     *
     * @param string $value
     */
    public function setInfoFileId($value = null)
    {
        $this->InfoFileId = $value;
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
        $message = new self();
        $values  = array_merge([
            'InfoFileId' => null,
            'AdditionalInfo' => []
        ], $values);

        $message->setInfoFileId($values['InfoFileId']);

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
            'name'      => 'AdditionalInfoId',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'InfoFileId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
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

        if ($this->InfoFileId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->InfoFileId);
        }

        if ($this->AdditionalInfo !== null) {
            foreach ($this->AdditionalInfo as $val) {
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
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->InfoFileId = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
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

        if ($this->InfoFileId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->InfoFileId);
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
        $this->InfoFileId = null;
        $this->AdditionalInfo = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Invoicing\AdditionalInfoId) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->InfoFileId = ($message->InfoFileId !== null) ? $message->InfoFileId : $this->InfoFileId;
        $this->AdditionalInfo = ($message->AdditionalInfo !== null) ? $message->AdditionalInfo : $this->AdditionalInfo;
    }


}

