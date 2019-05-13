<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Events/DiadocMessage-PostApi.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Events;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Events.PrepareDocumentsToSignResponse
 */
class PrepareDocumentsToSignResponse extends \Protobuf\AbstractMessage
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
     * DocumentPatchedContents repeated message = 1
     *
     * @var \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Events\DocumentPatchedContent>
     */
    protected $DocumentPatchedContents = null;

    /**
     * Check if 'DocumentPatchedContents' has a value
     *
     * @return bool
     */
    public function hasDocumentPatchedContentsList()
    {
        return $this->DocumentPatchedContents !== null;
    }

    /**
     * Get 'DocumentPatchedContents' value
     *
     * @return \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Events\DocumentPatchedContent>
     */
    public function getDocumentPatchedContentsList()
    {
        return $this->DocumentPatchedContents;
    }

    /**
     * Set 'DocumentPatchedContents' value
     *
     * @param \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Events\DocumentPatchedContent> $value
     */
    public function setDocumentPatchedContentsList(\Protobuf\Collection $value = null)
    {
        $this->DocumentPatchedContents = $value;
    }

    /**
     * Add a new element to 'DocumentPatchedContents'
     *
     * @param \Antlena\SDK\Diadoc\Proto\Events\DocumentPatchedContent $value
     */
    public function addDocumentPatchedContents(\Antlena\SDK\Diadoc\Proto\Events\DocumentPatchedContent $value)
    {
        if ($this->DocumentPatchedContents === null) {
            $this->DocumentPatchedContents = new \Protobuf\MessageCollection();
        }

        $this->DocumentPatchedContents->add($value);
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
            'DocumentPatchedContents' => []
        ], $values);

        foreach ($values['DocumentPatchedContents'] as $item) {
            $message->addDocumentPatchedContents($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'PrepareDocumentsToSignResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'DocumentPatchedContents',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Events.DocumentPatchedContent'
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

        if ($this->DocumentPatchedContents !== null) {
            foreach ($this->DocumentPatchedContents as $val) {
                $writer->writeVarint($stream, 10);
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
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Events\DocumentPatchedContent();

                if ($this->DocumentPatchedContents === null) {
                    $this->DocumentPatchedContents = new \Protobuf\MessageCollection();
                }

                $this->DocumentPatchedContents->add($innerMessage);

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

        if ($this->DocumentPatchedContents !== null) {
            foreach ($this->DocumentPatchedContents as $val) {
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
        $this->DocumentPatchedContents = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Events\PrepareDocumentsToSignResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->DocumentPatchedContents = ($message->DocumentPatchedContents !== null) ? $message->DocumentPatchedContents : $this->DocumentPatchedContents;
    }


}
