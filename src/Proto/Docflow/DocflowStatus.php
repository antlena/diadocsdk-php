<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Docflow/Docflow.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Docflow;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Docflow.DocflowStatus
 */
class DocflowStatus extends \Protobuf\AbstractMessage
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
     * PrimaryStatus optional message = 1
     *
     * @var \Antlena\SDK\Diadoc\Proto\Docflow\DocflowStatusModel
     */
    protected $PrimaryStatus = null;

    /**
     * SecondaryStatus optional message = 2
     *
     * @var \Antlena\SDK\Diadoc\Proto\Docflow\DocflowStatusModel
     */
    protected $SecondaryStatus = null;

    /**
     * Check if 'PrimaryStatus' has a value
     *
     * @return bool
     */
    public function hasPrimaryStatus()
    {
        return $this->PrimaryStatus !== null;
    }

    /**
     * Get 'PrimaryStatus' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Docflow\DocflowStatusModel
     */
    public function getPrimaryStatus()
    {
        return $this->PrimaryStatus;
    }

    /**
     * Set 'PrimaryStatus' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Docflow\DocflowStatusModel $value
     */
    public function setPrimaryStatus(\Antlena\SDK\Diadoc\Proto\Docflow\DocflowStatusModel $value = null)
    {
        $this->PrimaryStatus = $value;
    }

    /**
     * Check if 'SecondaryStatus' has a value
     *
     * @return bool
     */
    public function hasSecondaryStatus()
    {
        return $this->SecondaryStatus !== null;
    }

    /**
     * Get 'SecondaryStatus' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Docflow\DocflowStatusModel
     */
    public function getSecondaryStatus()
    {
        return $this->SecondaryStatus;
    }

    /**
     * Set 'SecondaryStatus' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Docflow\DocflowStatusModel $value
     */
    public function setSecondaryStatus(\Antlena\SDK\Diadoc\Proto\Docflow\DocflowStatusModel $value = null)
    {
        $this->SecondaryStatus = $value;
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
            'PrimaryStatus' => null,
            'SecondaryStatus' => null
        ], $values);

        $message->setPrimaryStatus($values['PrimaryStatus']);
        $message->setSecondaryStatus($values['SecondaryStatus']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'DocflowStatus',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'PrimaryStatus',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Docflow.DocflowStatusModel'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'SecondaryStatus',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Docflow.DocflowStatusModel'
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

        if ($this->PrimaryStatus !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeVarint($stream, $this->PrimaryStatus->serializedSize($sizeContext));
            $this->PrimaryStatus->writeTo($context);
        }

        if ($this->SecondaryStatus !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->SecondaryStatus->serializedSize($sizeContext));
            $this->SecondaryStatus->writeTo($context);
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
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Docflow\DocflowStatusModel();

                $this->PrimaryStatus = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Docflow\DocflowStatusModel();

                $this->SecondaryStatus = $innerMessage;

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

        if ($this->PrimaryStatus !== null) {
            $innerSize = $this->PrimaryStatus->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->SecondaryStatus !== null) {
            $innerSize = $this->SecondaryStatus->serializedSize($context);

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
        $this->PrimaryStatus = null;
        $this->SecondaryStatus = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Docflow\DocflowStatus) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->PrimaryStatus = ($message->PrimaryStatus !== null) ? $message->PrimaryStatus : $this->PrimaryStatus;
        $this->SecondaryStatus = ($message->SecondaryStatus !== null) ? $message->SecondaryStatus : $this->SecondaryStatus;
    }


}
