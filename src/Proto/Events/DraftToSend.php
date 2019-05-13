<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Events/DiadocMessage-PostApi.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Events;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Events.DraftToSend
 */
class DraftToSend extends \Protobuf\AbstractMessage
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
     * BoxId required string = 1
     *
     * @var string
     */
    protected $BoxId = null;

    /**
     * DraftId required string = 2
     *
     * @var string
     */
    protected $DraftId = null;

    /**
     * ToBoxId optional string = 3
     *
     * @var string
     */
    protected $ToBoxId = null;

    /**
     * ToDepartmentId optional string = 4
     *
     * @var string
     */
    protected $ToDepartmentId = null;

    /**
     * DocumentSignatures repeated message = 5
     *
     * @var \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Events\DocumentSenderSignature>
     */
    protected $DocumentSignatures = null;

    /**
     * ProxyBoxId optional string = 6
     *
     * @var string
     */
    protected $ProxyBoxId = null;

    /**
     * ProxyDepartmentId optional string = 7
     *
     * @var string
     */
    protected $ProxyDepartmentId = null;

    /**
     * Check if 'BoxId' has a value
     *
     * @return bool
     */
    public function hasBoxId()
    {
        return $this->BoxId !== null;
    }

    /**
     * Get 'BoxId' value
     *
     * @return string
     */
    public function getBoxId()
    {
        return $this->BoxId;
    }

    /**
     * Set 'BoxId' value
     *
     * @param string $value
     */
    public function setBoxId($value)
    {
        $this->BoxId = $value;
    }

    /**
     * Check if 'DraftId' has a value
     *
     * @return bool
     */
    public function hasDraftId()
    {
        return $this->DraftId !== null;
    }

    /**
     * Get 'DraftId' value
     *
     * @return string
     */
    public function getDraftId()
    {
        return $this->DraftId;
    }

    /**
     * Set 'DraftId' value
     *
     * @param string $value
     */
    public function setDraftId($value)
    {
        $this->DraftId = $value;
    }

    /**
     * Check if 'ToBoxId' has a value
     *
     * @return bool
     */
    public function hasToBoxId()
    {
        return $this->ToBoxId !== null;
    }

    /**
     * Get 'ToBoxId' value
     *
     * @return string
     */
    public function getToBoxId()
    {
        return $this->ToBoxId;
    }

    /**
     * Set 'ToBoxId' value
     *
     * @param string $value
     */
    public function setToBoxId($value = null)
    {
        $this->ToBoxId = $value;
    }

    /**
     * Check if 'ToDepartmentId' has a value
     *
     * @return bool
     */
    public function hasToDepartmentId()
    {
        return $this->ToDepartmentId !== null;
    }

    /**
     * Get 'ToDepartmentId' value
     *
     * @return string
     */
    public function getToDepartmentId()
    {
        return $this->ToDepartmentId;
    }

    /**
     * Set 'ToDepartmentId' value
     *
     * @param string $value
     */
    public function setToDepartmentId($value = null)
    {
        $this->ToDepartmentId = $value;
    }

    /**
     * Check if 'DocumentSignatures' has a value
     *
     * @return bool
     */
    public function hasDocumentSignaturesList()
    {
        return $this->DocumentSignatures !== null;
    }

    /**
     * Get 'DocumentSignatures' value
     *
     * @return \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Events\DocumentSenderSignature>
     */
    public function getDocumentSignaturesList()
    {
        return $this->DocumentSignatures;
    }

    /**
     * Set 'DocumentSignatures' value
     *
     * @param \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Events\DocumentSenderSignature> $value
     */
    public function setDocumentSignaturesList(\Protobuf\Collection $value = null)
    {
        $this->DocumentSignatures = $value;
    }

    /**
     * Add a new element to 'DocumentSignatures'
     *
     * @param \Antlena\SDK\Diadoc\Proto\Events\DocumentSenderSignature $value
     */
    public function addDocumentSignatures(\Antlena\SDK\Diadoc\Proto\Events\DocumentSenderSignature $value)
    {
        if ($this->DocumentSignatures === null) {
            $this->DocumentSignatures = new \Protobuf\MessageCollection();
        }

        $this->DocumentSignatures->add($value);
    }

    /**
     * Check if 'ProxyBoxId' has a value
     *
     * @return bool
     */
    public function hasProxyBoxId()
    {
        return $this->ProxyBoxId !== null;
    }

    /**
     * Get 'ProxyBoxId' value
     *
     * @return string
     */
    public function getProxyBoxId()
    {
        return $this->ProxyBoxId;
    }

    /**
     * Set 'ProxyBoxId' value
     *
     * @param string $value
     */
    public function setProxyBoxId($value = null)
    {
        $this->ProxyBoxId = $value;
    }

    /**
     * Check if 'ProxyDepartmentId' has a value
     *
     * @return bool
     */
    public function hasProxyDepartmentId()
    {
        return $this->ProxyDepartmentId !== null;
    }

    /**
     * Get 'ProxyDepartmentId' value
     *
     * @return string
     */
    public function getProxyDepartmentId()
    {
        return $this->ProxyDepartmentId;
    }

    /**
     * Set 'ProxyDepartmentId' value
     *
     * @param string $value
     */
    public function setProxyDepartmentId($value = null)
    {
        $this->ProxyDepartmentId = $value;
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
        if ( ! isset($values['BoxId'])) {
            throw new \InvalidArgumentException('Field "BoxId" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['DraftId'])) {
            throw new \InvalidArgumentException('Field "DraftId" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'ToBoxId' => null,
            'ToDepartmentId' => null,
            'DocumentSignatures' => [],
            'ProxyBoxId' => null,
            'ProxyDepartmentId' => null
        ], $values);

        $message->setBoxId($values['BoxId']);
        $message->setDraftId($values['DraftId']);
        $message->setToBoxId($values['ToBoxId']);
        $message->setToDepartmentId($values['ToDepartmentId']);
        $message->setProxyBoxId($values['ProxyBoxId']);
        $message->setProxyDepartmentId($values['ProxyDepartmentId']);

        foreach ($values['DocumentSignatures'] as $item) {
            $message->addDocumentSignatures($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'DraftToSend',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'BoxId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'DraftId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'ToBoxId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'ToDepartmentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'DocumentSignatures',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Events.DocumentSenderSignature'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'ProxyBoxId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'ProxyDepartmentId',
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

        if ($this->BoxId === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Events\\DraftToSend#BoxId" (tag 1) is required but has no value.');
        }

        if ($this->DraftId === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Events\\DraftToSend#DraftId" (tag 2) is required but has no value.');
        }

        if ($this->BoxId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->BoxId);
        }

        if ($this->DraftId !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->DraftId);
        }

        if ($this->ToBoxId !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->ToBoxId);
        }

        if ($this->ToDepartmentId !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->ToDepartmentId);
        }

        if ($this->DocumentSignatures !== null) {
            foreach ($this->DocumentSignatures as $val) {
                $writer->writeVarint($stream, 42);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->ProxyBoxId !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->ProxyBoxId);
        }

        if ($this->ProxyDepartmentId !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeString($stream, $this->ProxyDepartmentId);
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

                $this->BoxId = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->DraftId = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ToBoxId = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ToDepartmentId = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Events\DocumentSenderSignature();

                if ($this->DocumentSignatures === null) {
                    $this->DocumentSignatures = new \Protobuf\MessageCollection();
                }

                $this->DocumentSignatures->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ProxyBoxId = $reader->readString($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ProxyDepartmentId = $reader->readString($stream);

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

        if ($this->BoxId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->BoxId);
        }

        if ($this->DraftId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->DraftId);
        }

        if ($this->ToBoxId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ToBoxId);
        }

        if ($this->ToDepartmentId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ToDepartmentId);
        }

        if ($this->DocumentSignatures !== null) {
            foreach ($this->DocumentSignatures as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->ProxyBoxId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ProxyBoxId);
        }

        if ($this->ProxyDepartmentId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ProxyDepartmentId);
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
        $this->BoxId = null;
        $this->DraftId = null;
        $this->ToBoxId = null;
        $this->ToDepartmentId = null;
        $this->DocumentSignatures = null;
        $this->ProxyBoxId = null;
        $this->ProxyDepartmentId = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Events\DraftToSend) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->BoxId = ($message->BoxId !== null) ? $message->BoxId : $this->BoxId;
        $this->DraftId = ($message->DraftId !== null) ? $message->DraftId : $this->DraftId;
        $this->ToBoxId = ($message->ToBoxId !== null) ? $message->ToBoxId : $this->ToBoxId;
        $this->ToDepartmentId = ($message->ToDepartmentId !== null) ? $message->ToDepartmentId : $this->ToDepartmentId;
        $this->DocumentSignatures = ($message->DocumentSignatures !== null) ? $message->DocumentSignatures : $this->DocumentSignatures;
        $this->ProxyBoxId = ($message->ProxyBoxId !== null) ? $message->ProxyBoxId : $this->ProxyBoxId;
        $this->ProxyDepartmentId = ($message->ProxyDepartmentId !== null) ? $message->ProxyDepartmentId : $this->ProxyDepartmentId;
    }


}
