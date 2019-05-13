<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Documents/Document.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Documents;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Documents.AmendmentRequestMetadata
 */
class AmendmentRequestMetadata extends \Protobuf\AbstractMessage
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
     * AmendmentFlags required int32 = 1
     *
     * @var int
     */
    protected $AmendmentFlags = null;

    /**
     * ReceiptStatus required enum = 2
     *
     * @var \Antlena\SDK\Diadoc\Proto\Documents\GeneralReceiptStatus
     */
    protected $ReceiptStatus = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->ReceiptStatus = \Antlena\SDK\Diadoc\Proto\Documents\GeneralReceiptStatus::GeneralReceiptStatusUnknown();

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'AmendmentFlags' has a value
     *
     * @return bool
     */
    public function hasAmendmentFlags()
    {
        return $this->AmendmentFlags !== null;
    }

    /**
     * Get 'AmendmentFlags' value
     *
     * @return int
     */
    public function getAmendmentFlags()
    {
        return $this->AmendmentFlags;
    }

    /**
     * Set 'AmendmentFlags' value
     *
     * @param int $value
     */
    public function setAmendmentFlags($value)
    {
        $this->AmendmentFlags = $value;
    }

    /**
     * Check if 'ReceiptStatus' has a value
     *
     * @return bool
     */
    public function hasReceiptStatus()
    {
        return $this->ReceiptStatus !== null;
    }

    /**
     * Get 'ReceiptStatus' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Documents\GeneralReceiptStatus
     */
    public function getReceiptStatus()
    {
        return $this->ReceiptStatus;
    }

    /**
     * Set 'ReceiptStatus' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Documents\GeneralReceiptStatus $value
     */
    public function setReceiptStatus(\Antlena\SDK\Diadoc\Proto\Documents\GeneralReceiptStatus $value)
    {
        $this->ReceiptStatus = $value;
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
        if ( ! isset($values['AmendmentFlags'])) {
            throw new \InvalidArgumentException('Field "AmendmentFlags" (tag 1) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
        ], $values);

        $message->setAmendmentFlags($values['AmendmentFlags']);
        $message->setReceiptStatus($values['ReceiptStatus']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'AmendmentRequestMetadata',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'AmendmentFlags',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'ReceiptStatus',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Documents.GeneralReceiptStatus',
                    'default_value' => \Antlena\SDK\Diadoc\Proto\Documents\GeneralReceiptStatus::GeneralReceiptStatusUnknown()
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

        if ($this->AmendmentFlags === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Documents\\AmendmentRequestMetadata#AmendmentFlags" (tag 1) is required but has no value.');
        }

        if ($this->ReceiptStatus === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Documents\\AmendmentRequestMetadata#ReceiptStatus" (tag 2) is required but has no value.');
        }

        if ($this->AmendmentFlags !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->AmendmentFlags);
        }

        if ($this->ReceiptStatus !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->ReceiptStatus->value());
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

                $this->AmendmentFlags = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->ReceiptStatus = \Antlena\SDK\Diadoc\Proto\Documents\GeneralReceiptStatus::valueOf($reader->readVarint($stream));

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

        if ($this->AmendmentFlags !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->AmendmentFlags);
        }

        if ($this->ReceiptStatus !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->ReceiptStatus->value());
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
        $this->AmendmentFlags = null;
        $this->ReceiptStatus = \Antlena\SDK\Diadoc\Proto\Documents\GeneralReceiptStatus::GeneralReceiptStatusUnknown();
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Documents\AmendmentRequestMetadata) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->AmendmentFlags = ($message->AmendmentFlags !== null) ? $message->AmendmentFlags : $this->AmendmentFlags;
        $this->ReceiptStatus = ($message->ReceiptStatus !== null) ? $message->ReceiptStatus : $this->ReceiptStatus;
    }


}
