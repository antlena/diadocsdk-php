<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Events/DiadocMessage-PostApi.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Events;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Events.DocumentToPatch
 */
class DocumentToPatch extends \Protobuf\AbstractMessage
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
     * DocumentId required message = 1
     *
     * @var \Antlena\SDK\Diadoc\Proto\DocumentId
     */
    protected $DocumentId = null;

    /**
     * Signer optional message = 2
     *
     * @var \Antlena\SDK\Diadoc\Proto\Invoicing\Signer
     */
    protected $Signer = null;

    /**
     * ExtendedSigner repeated message = 3
     *
     * @var \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Invoicing\Signers\ExtendedSigner>
     */
    protected $ExtendedSigner = null;

    /**
     * Check if 'DocumentId' has a value
     *
     * @return bool
     */
    public function hasDocumentId()
    {
        return $this->DocumentId !== null;
    }

    /**
     * Get 'DocumentId' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\DocumentId
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }

    /**
     * Set 'DocumentId' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\DocumentId $value
     */
    public function setDocumentId(\Antlena\SDK\Diadoc\Proto\DocumentId $value)
    {
        $this->DocumentId = $value;
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
    public function setSigner(\Antlena\SDK\Diadoc\Proto\Invoicing\Signer $value = null)
    {
        $this->Signer = $value;
    }

    /**
     * Check if 'ExtendedSigner' has a value
     *
     * @return bool
     */
    public function hasExtendedSignerList()
    {
        return $this->ExtendedSigner !== null;
    }

    /**
     * Get 'ExtendedSigner' value
     *
     * @return \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Invoicing\Signers\ExtendedSigner>
     */
    public function getExtendedSignerList()
    {
        return $this->ExtendedSigner;
    }

    /**
     * Set 'ExtendedSigner' value
     *
     * @param \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Invoicing\Signers\ExtendedSigner> $value
     */
    public function setExtendedSignerList(\Protobuf\Collection $value = null)
    {
        $this->ExtendedSigner = $value;
    }

    /**
     * Add a new element to 'ExtendedSigner'
     *
     * @param \Antlena\SDK\Diadoc\Proto\Invoicing\Signers\ExtendedSigner $value
     */
    public function addExtendedSigner(\Antlena\SDK\Diadoc\Proto\Invoicing\Signers\ExtendedSigner $value)
    {
        if ($this->ExtendedSigner === null) {
            $this->ExtendedSigner = new \Protobuf\MessageCollection();
        }

        $this->ExtendedSigner->add($value);
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
        if ( ! isset($values['DocumentId'])) {
            throw new \InvalidArgumentException('Field "DocumentId" (tag 1) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'Signer' => null,
            'ExtendedSigner' => []
        ], $values);

        $message->setDocumentId($values['DocumentId']);
        $message->setSigner($values['Signer']);

        foreach ($values['ExtendedSigner'] as $item) {
            $message->addExtendedSigner($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'DocumentToPatch',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'DocumentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.DocumentId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Signer',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Invoicing.Signer'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'ExtendedSigner',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Invoicing.Signers.ExtendedSigner'
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

        if ($this->DocumentId === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Events\\DocumentToPatch#DocumentId" (tag 1) is required but has no value.');
        }

        if ($this->DocumentId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeVarint($stream, $this->DocumentId->serializedSize($sizeContext));
            $this->DocumentId->writeTo($context);
        }

        if ($this->Signer !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->Signer->serializedSize($sizeContext));
            $this->Signer->writeTo($context);
        }

        if ($this->ExtendedSigner !== null) {
            foreach ($this->ExtendedSigner as $val) {
                $writer->writeVarint($stream, 26);
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
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\DocumentId();

                $this->DocumentId = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Invoicing\Signer();

                $this->Signer = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Invoicing\Signers\ExtendedSigner();

                if ($this->ExtendedSigner === null) {
                    $this->ExtendedSigner = new \Protobuf\MessageCollection();
                }

                $this->ExtendedSigner->add($innerMessage);

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

        if ($this->DocumentId !== null) {
            $innerSize = $this->DocumentId->serializedSize($context);

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

        if ($this->ExtendedSigner !== null) {
            foreach ($this->ExtendedSigner as $val) {
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
        $this->DocumentId = null;
        $this->Signer = null;
        $this->ExtendedSigner = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Events\DocumentToPatch) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->DocumentId = ($message->DocumentId !== null) ? $message->DocumentId : $this->DocumentId;
        $this->Signer = ($message->Signer !== null) ? $message->Signer : $this->Signer;
        $this->ExtendedSigner = ($message->ExtendedSigner !== null) ? $message->ExtendedSigner : $this->ExtendedSigner;
    }


}

