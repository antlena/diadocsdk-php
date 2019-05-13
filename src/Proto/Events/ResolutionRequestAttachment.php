<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Events/DiadocMessage-PostApi.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Events;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Events.ResolutionRequestAttachment
 */
class ResolutionRequestAttachment extends \Protobuf\AbstractMessage
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
     * InitialDocumentId required string = 1
     *
     * @var string
     */
    protected $InitialDocumentId = null;

    /**
     * Type required enum = 2
     *
     * @var \Antlena\SDK\Diadoc\Proto\Events\ResolutionRequestType
     */
    protected $Type = null;

    /**
     * TargetUserId optional string = 3
     *
     * @var string
     */
    protected $TargetUserId = null;

    /**
     * TargetDepartmentId optional string = 4
     *
     * @var string
     */
    protected $TargetDepartmentId = null;

    /**
     * Comment optional string = 5
     *
     * @var string
     */
    protected $Comment = null;

    /**
     * Labels repeated string = 6
     *
     * @var \Protobuf\Collection
     */
    protected $Labels = null;

    /**
     * Check if 'InitialDocumentId' has a value
     *
     * @return bool
     */
    public function hasInitialDocumentId()
    {
        return $this->InitialDocumentId !== null;
    }

    /**
     * Get 'InitialDocumentId' value
     *
     * @return string
     */
    public function getInitialDocumentId()
    {
        return $this->InitialDocumentId;
    }

    /**
     * Set 'InitialDocumentId' value
     *
     * @param string $value
     */
    public function setInitialDocumentId($value)
    {
        $this->InitialDocumentId = $value;
    }

    /**
     * Check if 'Type' has a value
     *
     * @return bool
     */
    public function hasType()
    {
        return $this->Type !== null;
    }

    /**
     * Get 'Type' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Events\ResolutionRequestType
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Set 'Type' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Events\ResolutionRequestType $value
     */
    public function setType(\Antlena\SDK\Diadoc\Proto\Events\ResolutionRequestType $value)
    {
        $this->Type = $value;
    }

    /**
     * Check if 'TargetUserId' has a value
     *
     * @return bool
     */
    public function hasTargetUserId()
    {
        return $this->TargetUserId !== null;
    }

    /**
     * Get 'TargetUserId' value
     *
     * @return string
     */
    public function getTargetUserId()
    {
        return $this->TargetUserId;
    }

    /**
     * Set 'TargetUserId' value
     *
     * @param string $value
     */
    public function setTargetUserId($value = null)
    {
        $this->TargetUserId = $value;
    }

    /**
     * Check if 'TargetDepartmentId' has a value
     *
     * @return bool
     */
    public function hasTargetDepartmentId()
    {
        return $this->TargetDepartmentId !== null;
    }

    /**
     * Get 'TargetDepartmentId' value
     *
     * @return string
     */
    public function getTargetDepartmentId()
    {
        return $this->TargetDepartmentId;
    }

    /**
     * Set 'TargetDepartmentId' value
     *
     * @param string $value
     */
    public function setTargetDepartmentId($value = null)
    {
        $this->TargetDepartmentId = $value;
    }

    /**
     * Check if 'Comment' has a value
     *
     * @return bool
     */
    public function hasComment()
    {
        return $this->Comment !== null;
    }

    /**
     * Get 'Comment' value
     *
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * Set 'Comment' value
     *
     * @param string $value
     */
    public function setComment($value = null)
    {
        $this->Comment = $value;
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
        if ( ! isset($values['InitialDocumentId'])) {
            throw new \InvalidArgumentException('Field "InitialDocumentId" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['Type'])) {
            throw new \InvalidArgumentException('Field "Type" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'TargetUserId' => null,
            'TargetDepartmentId' => null,
            'Comment' => null,
            'Labels' => []
        ], $values);

        $message->setInitialDocumentId($values['InitialDocumentId']);
        $message->setType($values['Type']);
        $message->setTargetUserId($values['TargetUserId']);
        $message->setTargetDepartmentId($values['TargetDepartmentId']);
        $message->setComment($values['Comment']);

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
            'name'      => 'ResolutionRequestAttachment',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'InitialDocumentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Events.ResolutionRequestType'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'TargetUserId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'TargetDepartmentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'Comment',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
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

        if ($this->InitialDocumentId === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Events\\ResolutionRequestAttachment#InitialDocumentId" (tag 1) is required but has no value.');
        }

        if ($this->Type === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Events\\ResolutionRequestAttachment#Type" (tag 2) is required but has no value.');
        }

        if ($this->InitialDocumentId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->InitialDocumentId);
        }

        if ($this->Type !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->Type->value());
        }

        if ($this->TargetUserId !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->TargetUserId);
        }

        if ($this->TargetDepartmentId !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->TargetDepartmentId);
        }

        if ($this->Comment !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->Comment);
        }

        if ($this->Labels !== null) {
            foreach ($this->Labels as $val) {
                $writer->writeVarint($stream, 50);
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

                $this->InitialDocumentId = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->Type = \Antlena\SDK\Diadoc\Proto\Events\ResolutionRequestType::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->TargetUserId = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->TargetDepartmentId = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Comment = $reader->readString($stream);

                continue;
            }

            if ($tag === 6) {
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

        if ($this->InitialDocumentId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->InitialDocumentId);
        }

        if ($this->Type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->Type->value());
        }

        if ($this->TargetUserId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->TargetUserId);
        }

        if ($this->TargetDepartmentId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->TargetDepartmentId);
        }

        if ($this->Comment !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Comment);
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
        $this->InitialDocumentId = null;
        $this->Type = null;
        $this->TargetUserId = null;
        $this->TargetDepartmentId = null;
        $this->Comment = null;
        $this->Labels = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Events\ResolutionRequestAttachment) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->InitialDocumentId = ($message->InitialDocumentId !== null) ? $message->InitialDocumentId : $this->InitialDocumentId;
        $this->Type = ($message->Type !== null) ? $message->Type : $this->Type;
        $this->TargetUserId = ($message->TargetUserId !== null) ? $message->TargetUserId : $this->TargetUserId;
        $this->TargetDepartmentId = ($message->TargetDepartmentId !== null) ? $message->TargetDepartmentId : $this->TargetDepartmentId;
        $this->Comment = ($message->Comment !== null) ? $message->Comment : $this->Comment;
        $this->Labels = ($message->Labels !== null) ? $message->Labels : $this->Labels;
    }


}

