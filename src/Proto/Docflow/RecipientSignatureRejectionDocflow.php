<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Docflow/RecipientSignatureRejectionDocflow.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Docflow;

/**
 * Protobuf message :
 * Antlena.SDK.Diadoc.Proto.Docflow.RecipientSignatureRejectionDocflow
 */
class RecipientSignatureRejectionDocflow extends \Protobuf\AbstractMessage
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
     * RecipientSignatureRejectionAttachment optional message = 2
     *
     * @var \Antlena\SDK\Diadoc\Proto\Docflow\SignedAttachment
     */
    protected $RecipientSignatureRejectionAttachment = null;

    /**
     * DeliveryTimestamp optional message = 3
     *
     * @var \Antlena\SDK\Diadoc\Proto\Timestamp
     */
    protected $DeliveryTimestamp = null;

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
     * Check if 'RecipientSignatureRejectionAttachment' has a value
     *
     * @return bool
     */
    public function hasRecipientSignatureRejectionAttachment()
    {
        return $this->RecipientSignatureRejectionAttachment !== null;
    }

    /**
     * Get 'RecipientSignatureRejectionAttachment' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Docflow\SignedAttachment
     */
    public function getRecipientSignatureRejectionAttachment()
    {
        return $this->RecipientSignatureRejectionAttachment;
    }

    /**
     * Set 'RecipientSignatureRejectionAttachment' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Docflow\SignedAttachment $value
     */
    public function setRecipientSignatureRejectionAttachment(\Antlena\SDK\Diadoc\Proto\Docflow\SignedAttachment $value = null)
    {
        $this->RecipientSignatureRejectionAttachment = $value;
    }

    /**
     * Check if 'DeliveryTimestamp' has a value
     *
     * @return bool
     */
    public function hasDeliveryTimestamp()
    {
        return $this->DeliveryTimestamp !== null;
    }

    /**
     * Get 'DeliveryTimestamp' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Timestamp
     */
    public function getDeliveryTimestamp()
    {
        return $this->DeliveryTimestamp;
    }

    /**
     * Set 'DeliveryTimestamp' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Timestamp $value
     */
    public function setDeliveryTimestamp(\Antlena\SDK\Diadoc\Proto\Timestamp $value = null)
    {
        $this->DeliveryTimestamp = $value;
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
            'RecipientSignatureRejectionAttachment' => null,
            'DeliveryTimestamp' => null
        ], $values);

        $message->setIsFinished($values['IsFinished']);
        $message->setRecipientSignatureRejectionAttachment($values['RecipientSignatureRejectionAttachment']);
        $message->setDeliveryTimestamp($values['DeliveryTimestamp']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'RecipientSignatureRejectionDocflow',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'IsFinished',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'RecipientSignatureRejectionAttachment',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Docflow.SignedAttachment'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'DeliveryTimestamp',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Timestamp'
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

        if ($this->RecipientSignatureRejectionAttachment !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->RecipientSignatureRejectionAttachment->serializedSize($sizeContext));
            $this->RecipientSignatureRejectionAttachment->writeTo($context);
        }

        if ($this->DeliveryTimestamp !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->DeliveryTimestamp->serializedSize($sizeContext));
            $this->DeliveryTimestamp->writeTo($context);
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

                $this->RecipientSignatureRejectionAttachment = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Timestamp();

                $this->DeliveryTimestamp = $innerMessage;

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

        if ($this->RecipientSignatureRejectionAttachment !== null) {
            $innerSize = $this->RecipientSignatureRejectionAttachment->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->DeliveryTimestamp !== null) {
            $innerSize = $this->DeliveryTimestamp->serializedSize($context);

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
        $this->RecipientSignatureRejectionAttachment = null;
        $this->DeliveryTimestamp = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Docflow\RecipientSignatureRejectionDocflow) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->IsFinished = ($message->IsFinished !== null) ? $message->IsFinished : $this->IsFinished;
        $this->RecipientSignatureRejectionAttachment = ($message->RecipientSignatureRejectionAttachment !== null) ? $message->RecipientSignatureRejectionAttachment : $this->RecipientSignatureRejectionAttachment;
        $this->DeliveryTimestamp = ($message->DeliveryTimestamp !== null) ? $message->DeliveryTimestamp : $this->DeliveryTimestamp;
    }


}

