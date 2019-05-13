<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Docflow/DocflowApi.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Docflow;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Docflow.DocflowEvent
 */
class DocflowEvent extends \Protobuf\AbstractMessage
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
     * EventId optional string = 1
     *
     * @var string
     */
    protected $EventId = null;

    /**
     * Timestamp optional message = 2
     *
     * @var \Antlena\SDK\Diadoc\Proto\Timestamp
     */
    protected $Timestamp = null;

    /**
     * DocumentId optional message = 3
     *
     * @var \Antlena\SDK\Diadoc\Proto\DocumentId
     */
    protected $DocumentId = null;

    /**
     * IndexKey optional bytes = 4
     *
     * @var \Protobuf\Stream
     */
    protected $IndexKey = null;

    /**
     * Document optional message = 5
     *
     * @var \Antlena\SDK\Diadoc\Proto\Docflow\DocumentWithDocflow
     */
    protected $Document = null;

    /**
     * PreviousEventId optional string = 6
     *
     * @var string
     */
    protected $PreviousEventId = null;

    /**
     * PreviousDocumentState optional message = 7
     *
     * @var \Antlena\SDK\Diadoc\Proto\Docflow\DocumentWithDocflow
     */
    protected $PreviousDocumentState = null;

    /**
     * Check if 'EventId' has a value
     *
     * @return bool
     */
    public function hasEventId()
    {
        return $this->EventId !== null;
    }

    /**
     * Get 'EventId' value
     *
     * @return string
     */
    public function getEventId()
    {
        return $this->EventId;
    }

    /**
     * Set 'EventId' value
     *
     * @param string $value
     */
    public function setEventId($value = null)
    {
        $this->EventId = $value;
    }

    /**
     * Check if 'Timestamp' has a value
     *
     * @return bool
     */
    public function hasTimestamp()
    {
        return $this->Timestamp !== null;
    }

    /**
     * Get 'Timestamp' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Timestamp
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }

    /**
     * Set 'Timestamp' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Timestamp $value
     */
    public function setTimestamp(\Antlena\SDK\Diadoc\Proto\Timestamp $value = null)
    {
        $this->Timestamp = $value;
    }

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
    public function setDocumentId(\Antlena\SDK\Diadoc\Proto\DocumentId $value = null)
    {
        $this->DocumentId = $value;
    }

    /**
     * Check if 'IndexKey' has a value
     *
     * @return bool
     */
    public function hasIndexKey()
    {
        return $this->IndexKey !== null;
    }

    /**
     * Get 'IndexKey' value
     *
     * @return \Protobuf\Stream
     */
    public function getIndexKey()
    {
        return $this->IndexKey;
    }

    /**
     * Set 'IndexKey' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setIndexKey($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->IndexKey = $value;
    }

    /**
     * Check if 'Document' has a value
     *
     * @return bool
     */
    public function hasDocument()
    {
        return $this->Document !== null;
    }

    /**
     * Get 'Document' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Docflow\DocumentWithDocflow
     */
    public function getDocument()
    {
        return $this->Document;
    }

    /**
     * Set 'Document' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Docflow\DocumentWithDocflow $value
     */
    public function setDocument(\Antlena\SDK\Diadoc\Proto\Docflow\DocumentWithDocflow $value = null)
    {
        $this->Document = $value;
    }

    /**
     * Check if 'PreviousEventId' has a value
     *
     * @return bool
     */
    public function hasPreviousEventId()
    {
        return $this->PreviousEventId !== null;
    }

    /**
     * Get 'PreviousEventId' value
     *
     * @return string
     */
    public function getPreviousEventId()
    {
        return $this->PreviousEventId;
    }

    /**
     * Set 'PreviousEventId' value
     *
     * @param string $value
     */
    public function setPreviousEventId($value = null)
    {
        $this->PreviousEventId = $value;
    }

    /**
     * Check if 'PreviousDocumentState' has a value
     *
     * @return bool
     */
    public function hasPreviousDocumentState()
    {
        return $this->PreviousDocumentState !== null;
    }

    /**
     * Get 'PreviousDocumentState' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Docflow\DocumentWithDocflow
     */
    public function getPreviousDocumentState()
    {
        return $this->PreviousDocumentState;
    }

    /**
     * Set 'PreviousDocumentState' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Docflow\DocumentWithDocflow $value
     */
    public function setPreviousDocumentState(\Antlena\SDK\Diadoc\Proto\Docflow\DocumentWithDocflow $value = null)
    {
        $this->PreviousDocumentState = $value;
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
            'EventId' => null,
            'Timestamp' => null,
            'DocumentId' => null,
            'IndexKey' => null,
            'Document' => null,
            'PreviousEventId' => null,
            'PreviousDocumentState' => null
        ], $values);

        $message->setEventId($values['EventId']);
        $message->setTimestamp($values['Timestamp']);
        $message->setDocumentId($values['DocumentId']);
        $message->setIndexKey($values['IndexKey']);
        $message->setDocument($values['Document']);
        $message->setPreviousEventId($values['PreviousEventId']);
        $message->setPreviousDocumentState($values['PreviousDocumentState']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'DocflowEvent',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'EventId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Timestamp',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Timestamp'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'DocumentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.DocumentId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'IndexKey',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'Document',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Docflow.DocumentWithDocflow'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'PreviousEventId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'PreviousDocumentState',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Docflow.DocumentWithDocflow'
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

        if ($this->EventId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->EventId);
        }

        if ($this->Timestamp !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->Timestamp->serializedSize($sizeContext));
            $this->Timestamp->writeTo($context);
        }

        if ($this->DocumentId !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->DocumentId->serializedSize($sizeContext));
            $this->DocumentId->writeTo($context);
        }

        if ($this->IndexKey !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeByteStream($stream, $this->IndexKey);
        }

        if ($this->Document !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeVarint($stream, $this->Document->serializedSize($sizeContext));
            $this->Document->writeTo($context);
        }

        if ($this->PreviousEventId !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->PreviousEventId);
        }

        if ($this->PreviousDocumentState !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeVarint($stream, $this->PreviousDocumentState->serializedSize($sizeContext));
            $this->PreviousDocumentState->writeTo($context);
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

                $this->EventId = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Timestamp();

                $this->Timestamp = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\DocumentId();

                $this->DocumentId = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->IndexKey = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Docflow\DocumentWithDocflow();

                $this->Document = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->PreviousEventId = $reader->readString($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Docflow\DocumentWithDocflow();

                $this->PreviousDocumentState = $innerMessage;

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

        if ($this->EventId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->EventId);
        }

        if ($this->Timestamp !== null) {
            $innerSize = $this->Timestamp->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->DocumentId !== null) {
            $innerSize = $this->DocumentId->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->IndexKey !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->IndexKey);
        }

        if ($this->Document !== null) {
            $innerSize = $this->Document->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->PreviousEventId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->PreviousEventId);
        }

        if ($this->PreviousDocumentState !== null) {
            $innerSize = $this->PreviousDocumentState->serializedSize($context);

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
        $this->EventId = null;
        $this->Timestamp = null;
        $this->DocumentId = null;
        $this->IndexKey = null;
        $this->Document = null;
        $this->PreviousEventId = null;
        $this->PreviousDocumentState = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Docflow\DocflowEvent) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->EventId = ($message->EventId !== null) ? $message->EventId : $this->EventId;
        $this->Timestamp = ($message->Timestamp !== null) ? $message->Timestamp : $this->Timestamp;
        $this->DocumentId = ($message->DocumentId !== null) ? $message->DocumentId : $this->DocumentId;
        $this->IndexKey = ($message->IndexKey !== null) ? $message->IndexKey : $this->IndexKey;
        $this->Document = ($message->Document !== null) ? $message->Document : $this->Document;
        $this->PreviousEventId = ($message->PreviousEventId !== null) ? $message->PreviousEventId : $this->PreviousEventId;
        $this->PreviousDocumentState = ($message->PreviousDocumentState !== null) ? $message->PreviousDocumentState : $this->PreviousDocumentState;
    }


}

