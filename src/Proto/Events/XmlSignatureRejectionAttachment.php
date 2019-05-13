<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Events/DiadocMessage-PostApi.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Events;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Events.XmlSignatureRejectionAttachment
 */
class XmlSignatureRejectionAttachment extends \Protobuf\AbstractMessage
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
     * ParentEntityId required string = 1
     *
     * @var string
     */
    protected $ParentEntityId = null;

    /**
     * SignedContent required message = 2
     *
     * @var \Antlena\SDK\Diadoc\Proto\Events\SignedContent
     */
    protected $SignedContent = null;

    /**
     * Labels repeated string = 3
     *
     * @var \Protobuf\Collection
     */
    protected $Labels = null;

    /**
     * Check if 'ParentEntityId' has a value
     *
     * @return bool
     */
    public function hasParentEntityId()
    {
        return $this->ParentEntityId !== null;
    }

    /**
     * Get 'ParentEntityId' value
     *
     * @return string
     */
    public function getParentEntityId()
    {
        return $this->ParentEntityId;
    }

    /**
     * Set 'ParentEntityId' value
     *
     * @param string $value
     */
    public function setParentEntityId($value)
    {
        $this->ParentEntityId = $value;
    }

    /**
     * Check if 'SignedContent' has a value
     *
     * @return bool
     */
    public function hasSignedContent()
    {
        return $this->SignedContent !== null;
    }

    /**
     * Get 'SignedContent' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Events\SignedContent
     */
    public function getSignedContent()
    {
        return $this->SignedContent;
    }

    /**
     * Set 'SignedContent' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Events\SignedContent $value
     */
    public function setSignedContent(\Antlena\SDK\Diadoc\Proto\Events\SignedContent $value)
    {
        $this->SignedContent = $value;
    }

    /**
     * Check if 'Labels' has a value
     *
     * @return bool
     */
    public function hasLabelsList()
    {
        return $this->Labels !== null;
    }

    /**
     * Get 'Labels' value
     *
     * @return \Protobuf\Collection
     */
    public function getLabelsList()
    {
        return $this->Labels;
    }

    /**
     * Set 'Labels' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setLabelsList(\Protobuf\Collection $value = null)
    {
        $this->Labels = $value;
    }

    /**
     * Add a new element to 'Labels'
     *
     * @param string $value
     */
    public function addLabels($value)
    {
        if ($this->Labels === null) {
            $this->Labels = new \Protobuf\ScalarCollection();
        }

        $this->Labels->add($value);
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
        if ( ! isset($values['ParentEntityId'])) {
            throw new \InvalidArgumentException('Field "ParentEntityId" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['SignedContent'])) {
            throw new \InvalidArgumentException('Field "SignedContent" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'Labels' => []
        ], $values);

        $message->setParentEntityId($values['ParentEntityId']);
        $message->setSignedContent($values['SignedContent']);

        foreach ($values['Labels'] as $item) {
            $message->addLabels($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'XmlSignatureRejectionAttachment',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'ParentEntityId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'SignedContent',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Events.SignedContent'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'Labels',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
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

        if ($this->ParentEntityId === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Events\\XmlSignatureRejectionAttachment#ParentEntityId" (tag 1) is required but has no value.');
        }

        if ($this->SignedContent === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Events\\XmlSignatureRejectionAttachment#SignedContent" (tag 2) is required but has no value.');
        }

        if ($this->ParentEntityId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->ParentEntityId);
        }

        if ($this->SignedContent !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->SignedContent->serializedSize($sizeContext));
            $this->SignedContent->writeTo($context);
        }

        if ($this->Labels !== null) {
            foreach ($this->Labels as $val) {
                $writer->writeVarint($stream, 26);
                $writer->writeString($stream, $val);
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

                $this->ParentEntityId = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Events\SignedContent();

                $this->SignedContent = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                if ($this->Labels === null) {
                    $this->Labels = new \Protobuf\ScalarCollection();
                }

                $this->Labels->add($reader->readString($stream));

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

        if ($this->ParentEntityId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ParentEntityId);
        }

        if ($this->SignedContent !== null) {
            $innerSize = $this->SignedContent->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->Labels !== null) {
            foreach ($this->Labels as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
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
        $this->ParentEntityId = null;
        $this->SignedContent = null;
        $this->Labels = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Events\XmlSignatureRejectionAttachment) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->ParentEntityId = ($message->ParentEntityId !== null) ? $message->ParentEntityId : $this->ParentEntityId;
        $this->SignedContent = ($message->SignedContent !== null) ? $message->SignedContent : $this->SignedContent;
        $this->Labels = ($message->Labels !== null) ? $message->Labels : $this->Labels;
    }


}

