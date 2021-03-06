<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Docflow/DocflowApi.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Docflow;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Docflow.SearchDocflowsRequest
 */
class SearchDocflowsRequest extends \Protobuf\AbstractMessage
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
     * QueryString required string = 1
     *
     * @var string
     */
    protected $QueryString = null;

    /**
     * Count optional int32 = 2
     *
     * @var int
     */
    protected $Count = null;

    /**
     * FirstIndex optional int32 = 3
     *
     * @var int
     */
    protected $FirstIndex = null;

    /**
     * Scope optional enum = 4
     *
     * @var \Antlena\SDK\Diadoc\Proto\Docflow\SearchScope
     */
    protected $Scope = null;

    /**
     * InjectEntityContent optional bool = 5
     *
     * @var bool
     */
    protected $InjectEntityContent = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->Count = '100';
        $this->Scope = \Antlena\SDK\Diadoc\Proto\Docflow\SearchScope::SearchScopeAny();
        $this->InjectEntityContent = false;

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'QueryString' has a value
     *
     * @return bool
     */
    public function hasQueryString()
    {
        return $this->QueryString !== null;
    }

    /**
     * Get 'QueryString' value
     *
     * @return string
     */
    public function getQueryString()
    {
        return $this->QueryString;
    }

    /**
     * Set 'QueryString' value
     *
     * @param string $value
     */
    public function setQueryString($value)
    {
        $this->QueryString = $value;
    }

    /**
     * Check if 'Count' has a value
     *
     * @return bool
     */
    public function hasCount()
    {
        return $this->Count !== null;
    }

    /**
     * Get 'Count' value
     *
     * @return int
     */
    public function getCount()
    {
        return $this->Count;
    }

    /**
     * Set 'Count' value
     *
     * @param int $value
     */
    public function setCount($value = null)
    {
        $this->Count = $value;
    }

    /**
     * Check if 'FirstIndex' has a value
     *
     * @return bool
     */
    public function hasFirstIndex()
    {
        return $this->FirstIndex !== null;
    }

    /**
     * Get 'FirstIndex' value
     *
     * @return int
     */
    public function getFirstIndex()
    {
        return $this->FirstIndex;
    }

    /**
     * Set 'FirstIndex' value
     *
     * @param int $value
     */
    public function setFirstIndex($value = null)
    {
        $this->FirstIndex = $value;
    }

    /**
     * Check if 'Scope' has a value
     *
     * @return bool
     */
    public function hasScope()
    {
        return $this->Scope !== null;
    }

    /**
     * Get 'Scope' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Docflow\SearchScope
     */
    public function getScope()
    {
        return $this->Scope;
    }

    /**
     * Set 'Scope' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Docflow\SearchScope $value
     */
    public function setScope(\Antlena\SDK\Diadoc\Proto\Docflow\SearchScope $value = null)
    {
        $this->Scope = $value;
    }

    /**
     * Check if 'InjectEntityContent' has a value
     *
     * @return bool
     */
    public function hasInjectEntityContent()
    {
        return $this->InjectEntityContent !== null;
    }

    /**
     * Get 'InjectEntityContent' value
     *
     * @return bool
     */
    public function getInjectEntityContent()
    {
        return $this->InjectEntityContent;
    }

    /**
     * Set 'InjectEntityContent' value
     *
     * @param bool $value
     */
    public function setInjectEntityContent($value = null)
    {
        $this->InjectEntityContent = $value;
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
        if ( ! isset($values['QueryString'])) {
            throw new \InvalidArgumentException('Field "QueryString" (tag 1) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'Count' => '100',
            'FirstIndex' => null,
            'Scope' => \Antlena\SDK\Diadoc\Proto\Docflow\SearchScope::SearchScopeAny(),
            'InjectEntityContent' => false
        ], $values);

        $message->setQueryString($values['QueryString']);
        $message->setCount($values['Count']);
        $message->setFirstIndex($values['FirstIndex']);
        $message->setScope($values['Scope']);
        $message->setInjectEntityContent($values['InjectEntityContent']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'SearchDocflowsRequest',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'QueryString',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Count',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '100'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'FirstIndex',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'Scope',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Docflow.SearchScope',
                    'default_value' => \Antlena\SDK\Diadoc\Proto\Docflow\SearchScope::SearchScopeAny()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'InjectEntityContent',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => false
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

        if ($this->QueryString === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Docflow\\SearchDocflowsRequest#QueryString" (tag 1) is required but has no value.');
        }

        if ($this->QueryString !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->QueryString);
        }

        if ($this->Count !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->Count);
        }

        if ($this->FirstIndex !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->FirstIndex);
        }

        if ($this->Scope !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->Scope->value());
        }

        if ($this->InjectEntityContent !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeBool($stream, $this->InjectEntityContent);
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

                $this->QueryString = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->Count = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->FirstIndex = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->Scope = \Antlena\SDK\Diadoc\Proto\Docflow\SearchScope::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->InjectEntityContent = $reader->readBool($stream);

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

        if ($this->QueryString !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->QueryString);
        }

        if ($this->Count !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->Count);
        }

        if ($this->FirstIndex !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->FirstIndex);
        }

        if ($this->Scope !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->Scope->value());
        }

        if ($this->InjectEntityContent !== null) {
            $size += 1;
            $size += 1;
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
        $this->QueryString = null;
        $this->Count = '100';
        $this->FirstIndex = null;
        $this->Scope = \Antlena\SDK\Diadoc\Proto\Docflow\SearchScope::SearchScopeAny();
        $this->InjectEntityContent = false;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Docflow\SearchDocflowsRequest) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->QueryString = ($message->QueryString !== null) ? $message->QueryString : $this->QueryString;
        $this->Count = ($message->Count !== null) ? $message->Count : $this->Count;
        $this->FirstIndex = ($message->FirstIndex !== null) ? $message->FirstIndex : $this->FirstIndex;
        $this->Scope = ($message->Scope !== null) ? $message->Scope : $this->Scope;
        $this->InjectEntityContent = ($message->InjectEntityContent !== null) ? $message->InjectEntityContent : $this->InjectEntityContent;
    }


}

