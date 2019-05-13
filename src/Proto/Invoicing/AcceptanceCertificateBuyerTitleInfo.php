<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Invoicing/AcceptanceCertificateInfo.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Invoicing;

/**
 * Protobuf message :
 * Antlena.SDK.Diadoc.Proto.Invoicing.AcceptanceCertificateBuyerTitleInfo
 */
class AcceptanceCertificateBuyerTitleInfo extends \Protobuf\AbstractMessage
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
     * Complaints optional string = 1
     *
     * @var string
     */
    protected $Complaints = null;

    /**
     * Signature required message = 2
     *
     * @var \Antlena\SDK\Diadoc\Proto\Invoicing\AcceptanceCertificateSignatureInfo
     */
    protected $Signature = null;

    /**
     * Signer required message = 3
     *
     * @var \Antlena\SDK\Diadoc\Proto\Invoicing\Signer
     */
    protected $Signer = null;

    /**
     * AdditionalInfo optional string = 4
     *
     * @var string
     */
    protected $AdditionalInfo = null;

    /**
     * Check if 'Complaints' has a value
     *
     * @return bool
     */
    public function hasComplaints()
    {
        return $this->Complaints !== null;
    }

    /**
     * Get 'Complaints' value
     *
     * @return string
     */
    public function getComplaints()
    {
        return $this->Complaints;
    }

    /**
     * Set 'Complaints' value
     *
     * @param string $value
     */
    public function setComplaints($value = null)
    {
        $this->Complaints = $value;
    }

    /**
     * Check if 'Signature' has a value
     *
     * @return bool
     */
    public function hasSignature()
    {
        return $this->Signature !== null;
    }

    /**
     * Get 'Signature' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Invoicing\AcceptanceCertificateSignatureInfo
     */
    public function getSignature()
    {
        return $this->Signature;
    }

    /**
     * Set 'Signature' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Invoicing\AcceptanceCertificateSignatureInfo $value
     */
    public function setSignature(\Antlena\SDK\Diadoc\Proto\Invoicing\AcceptanceCertificateSignatureInfo $value)
    {
        $this->Signature = $value;
    }

    /**
     * Check if 'Signer' has a value
     *
     * @return bool
     */
    public function hasSigner()
    {
        return $this->Signer !== null;
    }

    /**
     * Get 'Signer' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Invoicing\Signer
     */
    public function getSigner()
    {
        return $this->Signer;
    }

    /**
     * Set 'Signer' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Invoicing\Signer $value
     */
    public function setSigner(\Antlena\SDK\Diadoc\Proto\Invoicing\Signer $value)
    {
        $this->Signer = $value;
    }

    /**
     * Check if 'AdditionalInfo' has a value
     *
     * @return bool
     */
    public function hasAdditionalInfo()
    {
        return $this->AdditionalInfo !== null;
    }

    /**
     * Get 'AdditionalInfo' value
     *
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->AdditionalInfo;
    }

    /**
     * Set 'AdditionalInfo' value
     *
     * @param string $value
     */
    public function setAdditionalInfo($value = null)
    {
        $this->AdditionalInfo = $value;
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
        if ( ! isset($values['Signature'])) {
            throw new \InvalidArgumentException('Field "Signature" (tag 2) is required but has no value.');
        }

        if ( ! isset($values['Signer'])) {
            throw new \InvalidArgumentException('Field "Signer" (tag 3) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'Complaints' => null,
            'AdditionalInfo' => null
        ], $values);

        $message->setComplaints($values['Complaints']);
        $message->setSignature($values['Signature']);
        $message->setSigner($values['Signer']);
        $message->setAdditionalInfo($values['AdditionalInfo']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'AcceptanceCertificateBuyerTitleInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Complaints',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Signature',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Invoicing.AcceptanceCertificateSignatureInfo'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'Signer',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Invoicing.Signer'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'AdditionalInfo',
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

        if ($this->Signature === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Invoicing\\AcceptanceCertificateBuyerTitleInfo#Signature" (tag 2) is required but has no value.');
        }

        if ($this->Signer === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Invoicing\\AcceptanceCertificateBuyerTitleInfo#Signer" (tag 3) is required but has no value.');
        }

        if ($this->Complaints !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->Complaints);
        }

        if ($this->Signature !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->Signature->serializedSize($sizeContext));
            $this->Signature->writeTo($context);
        }

        if ($this->Signer !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->Signer->serializedSize($sizeContext));
            $this->Signer->writeTo($context);
        }

        if ($this->AdditionalInfo !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->AdditionalInfo);
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

                $this->Complaints = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Invoicing\AcceptanceCertificateSignatureInfo();

                $this->Signature = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Invoicing\Signer();

                $this->Signer = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->AdditionalInfo = $reader->readString($stream);

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

        if ($this->Complaints !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Complaints);
        }

        if ($this->Signature !== null) {
            $innerSize = $this->Signature->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->Signer !== null) {
            $innerSize = $this->Signer->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->AdditionalInfo !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->AdditionalInfo);
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
        $this->Complaints = null;
        $this->Signature = null;
        $this->Signer = null;
        $this->AdditionalInfo = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Invoicing\AcceptanceCertificateBuyerTitleInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Complaints = ($message->Complaints !== null) ? $message->Complaints : $this->Complaints;
        $this->Signature = ($message->Signature !== null) ? $message->Signature : $this->Signature;
        $this->Signer = ($message->Signer !== null) ? $message->Signer : $this->Signer;
        $this->AdditionalInfo = ($message->AdditionalInfo !== null) ? $message->AdditionalInfo : $this->AdditionalInfo;
    }


}

