<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : CertificateInfo.proto
 */


namespace Antlena\SDK\Diadoc\Proto;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.CertificateInfo
 */
class CertificateInfo extends \Protobuf\AbstractMessage
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
     * Thumbprint optional string = 1
     *
     * @var string
     */
    protected $Thumbprint = null;

    /**
     * ValidFrom optional sfixed64 = 2
     *
     * @var int
     */
    protected $ValidFrom = null;

    /**
     * ValidTo optional sfixed64 = 3
     *
     * @var int
     */
    protected $ValidTo = null;

    /**
     * OrganizationName optional string = 4
     *
     * @var string
     */
    protected $OrganizationName = null;

    /**
     * Inn optional string = 5
     *
     * @var string
     */
    protected $Inn = null;

    /**
     * Check if 'Thumbprint' has a value
     *
     * @return bool
     */
    public function hasThumbprint()
    {
        return $this->Thumbprint !== null;
    }

    /**
     * Get 'Thumbprint' value
     *
     * @return string
     */
    public function getThumbprint()
    {
        return $this->Thumbprint;
    }

    /**
     * Set 'Thumbprint' value
     *
     * @param string $value
     */
    public function setThumbprint($value = null)
    {
        $this->Thumbprint = $value;
    }

    /**
     * Check if 'ValidFrom' has a value
     *
     * @return bool
     */
    public function hasValidFrom()
    {
        return $this->ValidFrom !== null;
    }

    /**
     * Get 'ValidFrom' value
     *
     * @return int
     */
    public function getValidFrom()
    {
        return $this->ValidFrom;
    }

    /**
     * Set 'ValidFrom' value
     *
     * @param int $value
     */
    public function setValidFrom($value = null)
    {
        $this->ValidFrom = $value;
    }

    /**
     * Check if 'ValidTo' has a value
     *
     * @return bool
     */
    public function hasValidTo()
    {
        return $this->ValidTo !== null;
    }

    /**
     * Get 'ValidTo' value
     *
     * @return int
     */
    public function getValidTo()
    {
        return $this->ValidTo;
    }

    /**
     * Set 'ValidTo' value
     *
     * @param int $value
     */
    public function setValidTo($value = null)
    {
        $this->ValidTo = $value;
    }

    /**
     * Check if 'OrganizationName' has a value
     *
     * @return bool
     */
    public function hasOrganizationName()
    {
        return $this->OrganizationName !== null;
    }

    /**
     * Get 'OrganizationName' value
     *
     * @return string
     */
    public function getOrganizationName()
    {
        return $this->OrganizationName;
    }

    /**
     * Set 'OrganizationName' value
     *
     * @param string $value
     */
    public function setOrganizationName($value = null)
    {
        $this->OrganizationName = $value;
    }

    /**
     * Check if 'Inn' has a value
     *
     * @return bool
     */
    public function hasInn()
    {
        return $this->Inn !== null;
    }

    /**
     * Get 'Inn' value
     *
     * @return string
     */
    public function getInn()
    {
        return $this->Inn;
    }

    /**
     * Set 'Inn' value
     *
     * @param string $value
     */
    public function setInn($value = null)
    {
        $this->Inn = $value;
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
            'Thumbprint' => null,
            'ValidFrom' => null,
            'ValidTo' => null,
            'OrganizationName' => null,
            'Inn' => null
        ], $values);

        $message->setThumbprint($values['Thumbprint']);
        $message->setValidFrom($values['ValidFrom']);
        $message->setValidTo($values['ValidTo']);
        $message->setOrganizationName($values['OrganizationName']);
        $message->setInn($values['Inn']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CertificateInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Thumbprint',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'ValidFrom',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_SFIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'ValidTo',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_SFIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'OrganizationName',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'Inn',
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

        if ($this->Thumbprint !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->Thumbprint);
        }

        if ($this->ValidFrom !== null) {
            $writer->writeVarint($stream, 17);
            $writer->writeSFixed64($stream, $this->ValidFrom);
        }

        if ($this->ValidTo !== null) {
            $writer->writeVarint($stream, 25);
            $writer->writeSFixed64($stream, $this->ValidTo);
        }

        if ($this->OrganizationName !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->OrganizationName);
        }

        if ($this->Inn !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->Inn);
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

                $this->Thumbprint = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 16);

                $this->ValidFrom = $reader->readSFixed64($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 16);

                $this->ValidTo = $reader->readSFixed64($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->OrganizationName = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Inn = $reader->readString($stream);

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

        if ($this->Thumbprint !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Thumbprint);
        }

        if ($this->ValidFrom !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->ValidTo !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->OrganizationName !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->OrganizationName);
        }

        if ($this->Inn !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Inn);
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
        $this->Thumbprint = null;
        $this->ValidFrom = null;
        $this->ValidTo = null;
        $this->OrganizationName = null;
        $this->Inn = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\CertificateInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Thumbprint = ($message->Thumbprint !== null) ? $message->Thumbprint : $this->Thumbprint;
        $this->ValidFrom = ($message->ValidFrom !== null) ? $message->ValidFrom : $this->ValidFrom;
        $this->ValidTo = ($message->ValidTo !== null) ? $message->ValidTo : $this->ValidTo;
        $this->OrganizationName = ($message->OrganizationName !== null) ? $message->OrganizationName : $this->OrganizationName;
        $this->Inn = ($message->Inn !== null) ? $message->Inn : $this->Inn;
    }


}

