<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Events/DiadocMessage-PostApi.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Events;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Events.RoamingNotificationToPost
 */
class RoamingNotificationToPost extends \Protobuf\AbstractMessage
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
     * EventId required string = 2
     *
     * @var string
     */
    protected $EventId = null;

    /**
     * Success required bool = 3
     *
     * @var bool
     */
    protected $Success = null;

    /**
     * Description optional string = 4
     *
     * @var string
     */
    protected $Description = null;

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
    public function setEventId($value)
    {
        $this->EventId = $value;
    }

    /**
     * Check if 'Success' has a value
     *
     * @return bool
     */
    public function hasSuccess()
    {
        return $this->Success !== null;
    }

    /**
     * Get 'Success' value
     *
     * @return bool
     */
    public function getSuccess()
    {
        return $this->Success;
    }

    /**
     * Set 'Success' value
     *
     * @param bool $value
     */
    public function setSuccess($value)
    {
        $this->Success = $value;
    }

    /**
     * Check if 'Description' has a value
     *
     * @return bool
     */
    public function hasDescription()
    {
        return $this->Description !== null;
    }

    /**
     * Get 'Description' value
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Set 'Description' value
     *
     * @param string $value
     */
    public function setDescription($value = null)
    {
        $this->Description = $value;
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

        if ( ! isset($values['EventId'])) {
            throw new \InvalidArgumentException('Field "EventId" (tag 2) is required but has no value.');
        }

        if ( ! isset($values['Success'])) {
            throw new \InvalidArgumentException('Field "Success" (tag 3) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'Description' => null
        ], $values);

        $message->setBoxId($values['BoxId']);
        $message->setEventId($values['EventId']);
        $message->setSuccess($values['Success']);
        $message->setDescription($values['Description']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'RoamingNotificationToPost',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'BoxId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'EventId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'Success',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'Description',
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
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Events\\RoamingNotificationToPost#BoxId" (tag 1) is required but has no value.');
        }

        if ($this->EventId === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Events\\RoamingNotificationToPost#EventId" (tag 2) is required but has no value.');
        }

        if ($this->Success === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Events\\RoamingNotificationToPost#Success" (tag 3) is required but has no value.');
        }

        if ($this->BoxId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->BoxId);
        }

        if ($this->EventId !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->EventId);
        }

        if ($this->Success !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeBool($stream, $this->Success);
        }

        if ($this->Description !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->Description);
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

                $this->EventId = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->Success = $reader->readBool($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Description = $reader->readString($stream);

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

        if ($this->EventId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->EventId);
        }

        if ($this->Success !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->Description !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Description);
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
        $this->EventId = null;
        $this->Success = null;
        $this->Description = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Events\RoamingNotificationToPost) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->BoxId = ($message->BoxId !== null) ? $message->BoxId : $this->BoxId;
        $this->EventId = ($message->EventId !== null) ? $message->EventId : $this->EventId;
        $this->Success = ($message->Success !== null) ? $message->Success : $this->Success;
        $this->Description = ($message->Description !== null) ? $message->Description : $this->Description;
    }


}

