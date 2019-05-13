<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Events/DiadocMessage-PostApi.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Events;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Events.SignatureVerification
 */
class SignatureVerification extends \Protobuf\AbstractMessage
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
     * IsValid required bool = 2
     *
     * @var bool
     */
    protected $IsValid = null;

    /**
     * ErrorMessage optional string = 3
     *
     * @var string
     */
    protected $ErrorMessage = null;

    /**
     * Labels repeated string = 4
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
     * Check if 'IsValid' has a value
     *
     * @return bool
     */
    public function hasIsValid()
    {
        return $this->IsValid !== null;
    }

    /**
     * Get 'IsValid' value
     *
     * @return bool
     */
    public function getIsValid()
    {
        return $this->IsValid;
    }

    /**
     * Set 'IsValid' value
     *
     * @param bool $value
     */
    public function setIsValid($value)
    {
        $this->IsValid = $value;
    }

    /**
     * Check if 'ErrorMessage' has a value
     *
     * @return bool
     */
    public function hasErrorMessage()
    {
        return $this->ErrorMessage !== null;
    }

    /**
     * Get 'ErrorMessage' value
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->ErrorMessage;
    }

    /**
     * Set 'ErrorMessage' value
     *
     * @param string $value
     */
    public function setErrorMessage($value = null)
    {
        $this->ErrorMessage = $value;
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

        if ( ! isset($values['IsValid'])) {
            throw new \InvalidArgumentException('Field "IsValid" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'ErrorMessage' => null,
            'Labels' => []
        ], $values);

        $message->setInitialDocumentId($values['InitialDocumentId']);
        $message->setIsValid($values['IsValid']);
        $message->setErrorMessage($values['ErrorMessage']);

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
            'name'      => 'SignatureVerification',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'InitialDocumentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'IsValid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'ErrorMessage',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
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
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Events\\SignatureVerification#InitialDocumentId" (tag 1) is required but has no value.');
        }

        if ($this->IsValid === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Events\\SignatureVerification#IsValid" (tag 2) is required but has no value.');
        }

        if ($this->InitialDocumentId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->InitialDocumentId);
        }

        if ($this->IsValid !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeBool($stream, $this->IsValid);
        }

        if ($this->ErrorMessage !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->ErrorMessage);
        }

        if ($this->Labels !== null) {
            foreach ($this->Labels as $val) {
                $writer->writeVarint($stream, 34);
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
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->IsValid = $reader->readBool($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ErrorMessage = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
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

        if ($this->IsValid !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->ErrorMessage !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ErrorMessage);
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
        $this->IsValid = null;
        $this->ErrorMessage = null;
        $this->Labels = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Events\SignatureVerification) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->InitialDocumentId = ($message->InitialDocumentId !== null) ? $message->InitialDocumentId : $this->InitialDocumentId;
        $this->IsValid = ($message->IsValid !== null) ? $message->IsValid : $this->IsValid;
        $this->ErrorMessage = ($message->ErrorMessage !== null) ? $message->ErrorMessage : $this->ErrorMessage;
        $this->Labels = ($message->Labels !== null) ? $message->Labels : $this->Labels;
    }


}
