<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Docflow/InvoiceDocflow.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Docflow;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Docflow.InvoiceConfirmationDocflow
 */
class InvoiceConfirmationDocflow extends \Protobuf\AbstractMessage
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
     * IsFinished optional bool = 1
     *
     * @var bool
     */
    protected $IsFinished = null;

    /**
     * ConfirmationAttachment optional message = 2
     *
     * @var \Antlena\SDK\Diadoc\Proto\Docflow\SignedAttachment
     */
    protected $ConfirmationAttachment = null;

    /**
     * ReceiptDocflow optional message = 3
     *
     * @var \Antlena\SDK\Diadoc\Proto\Docflow\ReceiptDocflow
     */
    protected $ReceiptDocflow = null;

    /**
     * Check if 'IsFinished' has a value
     *
     * @return bool
     */
    public function hasIsFinished()
    {
        return $this->IsFinished !== null;
    }

    /**
     * Get 'IsFinished' value
     *
     * @return bool
     */
    public function getIsFinished()
    {
        return $this->IsFinished;
    }

    /**
     * Set 'IsFinished' value
     *
     * @param bool $value
     */
    public function setIsFinished($value = null)
    {
        $this->IsFinished = $value;
    }

    /**
     * Check if 'ConfirmationAttachment' has a value
     *
     * @return bool
     */
    public function hasConfirmationAttachment()
    {
        return $this->ConfirmationAttachment !== null;
    }

    /**
     * Get 'ConfirmationAttachment' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Docflow\SignedAttachment
     */
    public function getConfirmationAttachment()
    {
        return $this->ConfirmationAttachment;
    }

    /**
     * Set 'ConfirmationAttachment' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Docflow\SignedAttachment $value
     */
    public function setConfirmationAttachment(\Antlena\SDK\Diadoc\Proto\Docflow\SignedAttachment $value = null)
    {
        $this->ConfirmationAttachment = $value;
    }

    /**
     * Check if 'ReceiptDocflow' has a value
     *
     * @return bool
     */
    public function hasReceiptDocflow()
    {
        return $this->ReceiptDocflow !== null;
    }

    /**
     * Get 'ReceiptDocflow' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Docflow\ReceiptDocflow
     */
    public function getReceiptDocflow()
    {
        return $this->ReceiptDocflow;
    }

    /**
     * Set 'ReceiptDocflow' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Docflow\ReceiptDocflow $value
     */
    public function setReceiptDocflow(\Antlena\SDK\Diadoc\Proto\Docflow\ReceiptDocflow $value = null)
    {
        $this->ReceiptDocflow = $value;
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
            'IsFinished' => null,
            'ConfirmationAttachment' => null,
            'ReceiptDocflow' => null
        ], $values);

        $message->setIsFinished($values['IsFinished']);
        $message->setConfirmationAttachment($values['ConfirmationAttachment']);
        $message->setReceiptDocflow($values['ReceiptDocflow']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'InvoiceConfirmationDocflow',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'IsFinished',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'ConfirmationAttachment',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Docflow.SignedAttachment'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'ReceiptDocflow',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Docflow.ReceiptDocflow'
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

        if ($this->IsFinished !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeBool($stream, $this->IsFinished);
        }

        if ($this->ConfirmationAttachment !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->ConfirmationAttachment->serializedSize($sizeContext));
            $this->ConfirmationAttachment->writeTo($context);
        }

        if ($this->ReceiptDocflow !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->ReceiptDocflow->serializedSize($sizeContext));
            $this->ReceiptDocflow->writeTo($context);
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
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->IsFinished = $reader->readBool($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Docflow\SignedAttachment();

                $this->ConfirmationAttachment = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Docflow\ReceiptDocflow();

                $this->ReceiptDocflow = $innerMessage;

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

        if ($this->IsFinished !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->ConfirmationAttachment !== null) {
            $innerSize = $this->ConfirmationAttachment->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->ReceiptDocflow !== null) {
            $innerSize = $this->ReceiptDocflow->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
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
        $this->IsFinished = null;
        $this->ConfirmationAttachment = null;
        $this->ReceiptDocflow = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Docflow\InvoiceConfirmationDocflow) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->IsFinished = ($message->IsFinished !== null) ? $message->IsFinished : $this->IsFinished;
        $this->ConfirmationAttachment = ($message->ConfirmationAttachment !== null) ? $message->ConfirmationAttachment : $this->ConfirmationAttachment;
        $this->ReceiptDocflow = ($message->ReceiptDocflow !== null) ? $message->ReceiptDocflow : $this->ReceiptDocflow;
    }


}

