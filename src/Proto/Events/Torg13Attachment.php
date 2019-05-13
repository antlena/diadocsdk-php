<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Events/DiadocMessage-PostApi.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Events;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Events.Torg13Attachment
 */
class Torg13Attachment extends \Protobuf\AbstractMessage
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
     * SignedContent required message = 1
     *
     * @var \Antlena\SDK\Diadoc\Proto\Events\SignedContent
     */
    protected $SignedContent = null;

    /**
     * FileName required string = 2
     *
     * @var string
     */
    protected $FileName = null;

    /**
     * Comment optional string = 3
     *
     * @var string
     */
    protected $Comment = null;

    /**
     * InitialDocumentIds repeated message = 4
     *
     * @var \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\DocumentId>
     */
    protected $InitialDocumentIds = null;

    /**
     * SubordinateDocumentIds repeated message = 5
     *
     * @var \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\DocumentId>
     */
    protected $SubordinateDocumentIds = null;

    /**
     * DocumentDate required string = 6
     *
     * @var string
     */
    protected $DocumentDate = null;

    /**
     * DocumentNumber required string = 7
     *
     * @var string
     */
    protected $DocumentNumber = null;

    /**
     * Total required string = 8
     *
     * @var string
     */
    protected $Total = null;

    /**
     * CustomDocumentId optional string = 9
     *
     * @var string
     */
    protected $CustomDocumentId = null;

    /**
     * Grounds optional string = 11
     *
     * @var string
     */
    protected $Grounds = null;

    /**
     * NeedReceipt optional bool = 12
     *
     * @var bool
     */
    protected $NeedReceipt = null;

    /**
     * CustomData repeated message = 13
     *
     * @var \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\CustomDataItem>
     */
    protected $CustomData = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->NeedReceipt = false;

        parent::__construct($stream, $configuration);
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
     * Check if 'FileName' has a value
     *
     * @return bool
     */
    public function hasFileName()
    {
        return $this->FileName !== null;
    }

    /**
     * Get 'FileName' value
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * Set 'FileName' value
     *
     * @param string $value
     */
    public function setFileName($value)
    {
        $this->FileName = $value;
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
     * Check if 'InitialDocumentIds' has a value
     *
     * @return bool
     */
    public function hasInitialDocumentIdsList()
    {
        return $this->InitialDocumentIds !== null;
    }

    /**
     * Get 'InitialDocumentIds' value
     *
     * @return \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\DocumentId>
     */
    public function getInitialDocumentIdsList()
    {
        return $this->InitialDocumentIds;
    }

    /**
     * Set 'InitialDocumentIds' value
     *
     * @param \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\DocumentId> $value
     */
    public function setInitialDocumentIdsList(\Protobuf\Collection $value = null)
    {
        $this->InitialDocumentIds = $value;
    }

    /**
     * Add a new element to 'InitialDocumentIds'
     *
     * @param \Antlena\SDK\Diadoc\Proto\DocumentId $value
     */
    public function addInitialDocumentIds(\Antlena\SDK\Diadoc\Proto\DocumentId $value)
    {
        if ($this->InitialDocumentIds === null) {
            $this->InitialDocumentIds = new \Protobuf\MessageCollection();
        }

        $this->InitialDocumentIds->add($value);
    }

    /**
     * Check if 'SubordinateDocumentIds' has a value
     *
     * @return bool
     */
    public function hasSubordinateDocumentIdsList()
    {
        return $this->SubordinateDocumentIds !== null;
    }

    /**
     * Get 'SubordinateDocumentIds' value
     *
     * @return \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\DocumentId>
     */
    public function getSubordinateDocumentIdsList()
    {
        return $this->SubordinateDocumentIds;
    }

    /**
     * Set 'SubordinateDocumentIds' value
     *
     * @param \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\DocumentId> $value
     */
    public function setSubordinateDocumentIdsList(\Protobuf\Collection $value = null)
    {
        $this->SubordinateDocumentIds = $value;
    }

    /**
     * Add a new element to 'SubordinateDocumentIds'
     *
     * @param \Antlena\SDK\Diadoc\Proto\DocumentId $value
     */
    public function addSubordinateDocumentIds(\Antlena\SDK\Diadoc\Proto\DocumentId $value)
    {
        if ($this->SubordinateDocumentIds === null) {
            $this->SubordinateDocumentIds = new \Protobuf\MessageCollection();
        }

        $this->SubordinateDocumentIds->add($value);
    }

    /**
     * Check if 'DocumentDate' has a value
     *
     * @return bool
     */
    public function hasDocumentDate()
    {
        return $this->DocumentDate !== null;
    }

    /**
     * Get 'DocumentDate' value
     *
     * @return string
     */
    public function getDocumentDate()
    {
        return $this->DocumentDate;
    }

    /**
     * Set 'DocumentDate' value
     *
     * @param string $value
     */
    public function setDocumentDate($value)
    {
        $this->DocumentDate = $value;
    }

    /**
     * Check if 'DocumentNumber' has a value
     *
     * @return bool
     */
    public function hasDocumentNumber()
    {
        return $this->DocumentNumber !== null;
    }

    /**
     * Get 'DocumentNumber' value
     *
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }

    /**
     * Set 'DocumentNumber' value
     *
     * @param string $value
     */
    public function setDocumentNumber($value)
    {
        $this->DocumentNumber = $value;
    }

    /**
     * Check if 'Total' has a value
     *
     * @return bool
     */
    public function hasTotal()
    {
        return $this->Total !== null;
    }

    /**
     * Get 'Total' value
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->Total;
    }

    /**
     * Set 'Total' value
     *
     * @param string $value
     */
    public function setTotal($value)
    {
        $this->Total = $value;
    }

    /**
     * Check if 'CustomDocumentId' has a value
     *
     * @return bool
     */
    public function hasCustomDocumentId()
    {
        return $this->CustomDocumentId !== null;
    }

    /**
     * Get 'CustomDocumentId' value
     *
     * @return string
     */
    public function getCustomDocumentId()
    {
        return $this->CustomDocumentId;
    }

    /**
     * Set 'CustomDocumentId' value
     *
     * @param string $value
     */
    public function setCustomDocumentId($value = null)
    {
        $this->CustomDocumentId = $value;
    }

    /**
     * Check if 'Grounds' has a value
     *
     * @return bool
     */
    public function hasGrounds()
    {
        return $this->Grounds !== null;
    }

    /**
     * Get 'Grounds' value
     *
     * @return string
     */
    public function getGrounds()
    {
        return $this->Grounds;
    }

    /**
     * Set 'Grounds' value
     *
     * @param string $value
     */
    public function setGrounds($value = null)
    {
        $this->Grounds = $value;
    }

    /**
     * Check if 'NeedReceipt' has a value
     *
     * @return bool
     */
    public function hasNeedReceipt()
    {
        return $this->NeedReceipt !== null;
    }

    /**
     * Get 'NeedReceipt' value
     *
     * @return bool
     */
    public function getNeedReceipt()
    {
        return $this->NeedReceipt;
    }

    /**
     * Set 'NeedReceipt' value
     *
     * @param bool $value
     */
    public function setNeedReceipt($value = null)
    {
        $this->NeedReceipt = $value;
    }

    /**
     * Check if 'CustomData' has a value
     *
     * @return bool
     */
    public function hasCustomDataList()
    {
        return $this->CustomData !== null;
    }

    /**
     * Get 'CustomData' value
     *
     * @return \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\CustomDataItem>
     */
    public function getCustomDataList()
    {
        return $this->CustomData;
    }

    /**
     * Set 'CustomData' value
     *
     * @param \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\CustomDataItem> $value
     */
    public function setCustomDataList(\Protobuf\Collection $value = null)
    {
        $this->CustomData = $value;
    }

    /**
     * Add a new element to 'CustomData'
     *
     * @param \Antlena\SDK\Diadoc\Proto\CustomDataItem $value
     */
    public function addCustomData(\Antlena\SDK\Diadoc\Proto\CustomDataItem $value)
    {
        if ($this->CustomData === null) {
            $this->CustomData = new \Protobuf\MessageCollection();
        }

        $this->CustomData->add($value);
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
        if ( ! isset($values['SignedContent'])) {
            throw new \InvalidArgumentException('Field "SignedContent" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['FileName'])) {
            throw new \InvalidArgumentException('Field "FileName" (tag 2) is required but has no value.');
        }

        if ( ! isset($values['DocumentDate'])) {
            throw new \InvalidArgumentException('Field "DocumentDate" (tag 6) is required but has no value.');
        }

        if ( ! isset($values['DocumentNumber'])) {
            throw new \InvalidArgumentException('Field "DocumentNumber" (tag 7) is required but has no value.');
        }

        if ( ! isset($values['Total'])) {
            throw new \InvalidArgumentException('Field "Total" (tag 8) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'Comment' => null,
            'InitialDocumentIds' => [],
            'SubordinateDocumentIds' => [],
            'CustomDocumentId' => null,
            'Grounds' => null,
            'NeedReceipt' => false,
            'CustomData' => []
        ], $values);

        $message->setSignedContent($values['SignedContent']);
        $message->setFileName($values['FileName']);
        $message->setComment($values['Comment']);
        $message->setDocumentDate($values['DocumentDate']);
        $message->setDocumentNumber($values['DocumentNumber']);
        $message->setTotal($values['Total']);
        $message->setCustomDocumentId($values['CustomDocumentId']);
        $message->setGrounds($values['Grounds']);
        $message->setNeedReceipt($values['NeedReceipt']);

        foreach ($values['InitialDocumentIds'] as $item) {
            $message->addInitialDocumentIds($item);
        }

        foreach ($values['SubordinateDocumentIds'] as $item) {
            $message->addSubordinateDocumentIds($item);
        }

        foreach ($values['CustomData'] as $item) {
            $message->addCustomData($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Torg13Attachment',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'SignedContent',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Events.SignedContent'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'FileName',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'Comment',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'InitialDocumentIds',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.DocumentId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'SubordinateDocumentIds',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.DocumentId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'DocumentDate',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'DocumentNumber',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'Total',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'CustomDocumentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'Grounds',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 12,
                    'name' => 'NeedReceipt',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => false
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 13,
                    'name' => 'CustomData',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.CustomDataItem'
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

        if ($this->SignedContent === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Events\\Torg13Attachment#SignedContent" (tag 1) is required but has no value.');
        }

        if ($this->FileName === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Events\\Torg13Attachment#FileName" (tag 2) is required but has no value.');
        }

        if ($this->DocumentDate === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Events\\Torg13Attachment#DocumentDate" (tag 6) is required but has no value.');
        }

        if ($this->DocumentNumber === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Events\\Torg13Attachment#DocumentNumber" (tag 7) is required but has no value.');
        }

        if ($this->Total === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Events\\Torg13Attachment#Total" (tag 8) is required but has no value.');
        }

        if ($this->SignedContent !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeVarint($stream, $this->SignedContent->serializedSize($sizeContext));
            $this->SignedContent->writeTo($context);
        }

        if ($this->FileName !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->FileName);
        }

        if ($this->Comment !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->Comment);
        }

        if ($this->InitialDocumentIds !== null) {
            foreach ($this->InitialDocumentIds as $val) {
                $writer->writeVarint($stream, 34);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->SubordinateDocumentIds !== null) {
            foreach ($this->SubordinateDocumentIds as $val) {
                $writer->writeVarint($stream, 42);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->DocumentDate !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->DocumentDate);
        }

        if ($this->DocumentNumber !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeString($stream, $this->DocumentNumber);
        }

        if ($this->Total !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeString($stream, $this->Total);
        }

        if ($this->CustomDocumentId !== null) {
            $writer->writeVarint($stream, 74);
            $writer->writeString($stream, $this->CustomDocumentId);
        }

        if ($this->Grounds !== null) {
            $writer->writeVarint($stream, 90);
            $writer->writeString($stream, $this->Grounds);
        }

        if ($this->NeedReceipt !== null) {
            $writer->writeVarint($stream, 96);
            $writer->writeBool($stream, $this->NeedReceipt);
        }

        if ($this->CustomData !== null) {
            foreach ($this->CustomData as $val) {
                $writer->writeVarint($stream, 106);
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
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Events\SignedContent();

                $this->SignedContent = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->FileName = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Comment = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\DocumentId();

                if ($this->InitialDocumentIds === null) {
                    $this->InitialDocumentIds = new \Protobuf\MessageCollection();
                }

                $this->InitialDocumentIds->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\DocumentId();

                if ($this->SubordinateDocumentIds === null) {
                    $this->SubordinateDocumentIds = new \Protobuf\MessageCollection();
                }

                $this->SubordinateDocumentIds->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->DocumentDate = $reader->readString($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->DocumentNumber = $reader->readString($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Total = $reader->readString($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->CustomDocumentId = $reader->readString($stream);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Grounds = $reader->readString($stream);

                continue;
            }

            if ($tag === 12) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->NeedReceipt = $reader->readBool($stream);

                continue;
            }

            if ($tag === 13) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\CustomDataItem();

                if ($this->CustomData === null) {
                    $this->CustomData = new \Protobuf\MessageCollection();
                }

                $this->CustomData->add($innerMessage);

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

        if ($this->SignedContent !== null) {
            $innerSize = $this->SignedContent->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->FileName !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->FileName);
        }

        if ($this->Comment !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Comment);
        }

        if ($this->InitialDocumentIds !== null) {
            foreach ($this->InitialDocumentIds as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->SubordinateDocumentIds !== null) {
            foreach ($this->SubordinateDocumentIds as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->DocumentDate !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->DocumentDate);
        }

        if ($this->DocumentNumber !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->DocumentNumber);
        }

        if ($this->Total !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Total);
        }

        if ($this->CustomDocumentId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->CustomDocumentId);
        }

        if ($this->Grounds !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Grounds);
        }

        if ($this->NeedReceipt !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->CustomData !== null) {
            foreach ($this->CustomData as $val) {
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
        $this->SignedContent = null;
        $this->FileName = null;
        $this->Comment = null;
        $this->InitialDocumentIds = null;
        $this->SubordinateDocumentIds = null;
        $this->DocumentDate = null;
        $this->DocumentNumber = null;
        $this->Total = null;
        $this->CustomDocumentId = null;
        $this->Grounds = null;
        $this->NeedReceipt = false;
        $this->CustomData = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Events\Torg13Attachment) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->SignedContent = ($message->SignedContent !== null) ? $message->SignedContent : $this->SignedContent;
        $this->FileName = ($message->FileName !== null) ? $message->FileName : $this->FileName;
        $this->Comment = ($message->Comment !== null) ? $message->Comment : $this->Comment;
        $this->InitialDocumentIds = ($message->InitialDocumentIds !== null) ? $message->InitialDocumentIds : $this->InitialDocumentIds;
        $this->SubordinateDocumentIds = ($message->SubordinateDocumentIds !== null) ? $message->SubordinateDocumentIds : $this->SubordinateDocumentIds;
        $this->DocumentDate = ($message->DocumentDate !== null) ? $message->DocumentDate : $this->DocumentDate;
        $this->DocumentNumber = ($message->DocumentNumber !== null) ? $message->DocumentNumber : $this->DocumentNumber;
        $this->Total = ($message->Total !== null) ? $message->Total : $this->Total;
        $this->CustomDocumentId = ($message->CustomDocumentId !== null) ? $message->CustomDocumentId : $this->CustomDocumentId;
        $this->Grounds = ($message->Grounds !== null) ? $message->Grounds : $this->Grounds;
        $this->NeedReceipt = ($message->NeedReceipt !== null) ? $message->NeedReceipt : $this->NeedReceipt;
        $this->CustomData = ($message->CustomData !== null) ? $message->CustomData : $this->CustomData;
    }


}

