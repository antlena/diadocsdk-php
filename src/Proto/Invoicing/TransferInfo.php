<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Invoicing/UniversalTransferDocumentInfo.proto
 */


namespace Antlena\SDK\Diadoc\Proto\Invoicing;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.Invoicing.TransferInfo
 */
class TransferInfo extends \Protobuf\AbstractMessage
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
     * OperationInfo required string = 1
     *
     * @var string
     */
    protected $OperationInfo = null;

    /**
     * OperationType optional string = 2
     *
     * @var string
     */
    protected $OperationType = null;

    /**
     * TransferDate optional string = 3
     *
     * @var string
     */
    protected $TransferDate = null;

    /**
     * TransferBase repeated message = 4
     *
     * @var \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Invoicing\TransferBase>
     */
    protected $TransferBase = null;

    /**
     * TransferTextInfo optional string = 5
     *
     * @var string
     */
    protected $TransferTextInfo = null;

    /**
     * Waybill repeated message = 6
     *
     * @var \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Invoicing\Waybill>
     */
    protected $Waybill = null;

    /**
     * Carrier optional message = 7
     *
     * @var \Antlena\SDK\Diadoc\Proto\Invoicing\Organizations\ExtendedOrganizationInfo
     */
    protected $Carrier = null;

    /**
     * Employee optional message = 8
     *
     * @var \Antlena\SDK\Diadoc\Proto\Invoicing\Employee
     */
    protected $Employee = null;

    /**
     * OtherIssuer optional message = 9
     *
     * @var \Antlena\SDK\Diadoc\Proto\Invoicing\OtherIssuer
     */
    protected $OtherIssuer = null;

    /**
     * CreatedThingTransferDate optional string = 10
     *
     * @var string
     */
    protected $CreatedThingTransferDate = null;

    /**
     * CreatedThingInfo optional string = 11
     *
     * @var string
     */
    protected $CreatedThingInfo = null;

    /**
     * AdditionalInfoId optional message = 12
     *
     * @var \Antlena\SDK\Diadoc\Proto\Invoicing\AdditionalInfoId
     */
    protected $AdditionalInfoId = null;

    /**
     * Check if 'OperationInfo' has a value
     *
     * @return bool
     */
    public function hasOperationInfo()
    {
        return $this->OperationInfo !== null;
    }

    /**
     * Get 'OperationInfo' value
     *
     * @return string
     */
    public function getOperationInfo()
    {
        return $this->OperationInfo;
    }

    /**
     * Set 'OperationInfo' value
     *
     * @param string $value
     */
    public function setOperationInfo($value)
    {
        $this->OperationInfo = $value;
    }

    /**
     * Check if 'OperationType' has a value
     *
     * @return bool
     */
    public function hasOperationType()
    {
        return $this->OperationType !== null;
    }

    /**
     * Get 'OperationType' value
     *
     * @return string
     */
    public function getOperationType()
    {
        return $this->OperationType;
    }

    /**
     * Set 'OperationType' value
     *
     * @param string $value
     */
    public function setOperationType($value = null)
    {
        $this->OperationType = $value;
    }

    /**
     * Check if 'TransferDate' has a value
     *
     * @return bool
     */
    public function hasTransferDate()
    {
        return $this->TransferDate !== null;
    }

    /**
     * Get 'TransferDate' value
     *
     * @return string
     */
    public function getTransferDate()
    {
        return $this->TransferDate;
    }

    /**
     * Set 'TransferDate' value
     *
     * @param string $value
     */
    public function setTransferDate($value = null)
    {
        $this->TransferDate = $value;
    }

    /**
     * Check if 'TransferBase' has a value
     *
     * @return bool
     */
    public function hasTransferBaseList()
    {
        return $this->TransferBase !== null;
    }

    /**
     * Get 'TransferBase' value
     *
     * @return \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Invoicing\TransferBase>
     */
    public function getTransferBaseList()
    {
        return $this->TransferBase;
    }

    /**
     * Set 'TransferBase' value
     *
     * @param \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Invoicing\TransferBase> $value
     */
    public function setTransferBaseList(\Protobuf\Collection $value = null)
    {
        $this->TransferBase = $value;
    }

    /**
     * Add a new element to 'TransferBase'
     *
     * @param \Antlena\SDK\Diadoc\Proto\Invoicing\TransferBase $value
     */
    public function addTransferBase(\Antlena\SDK\Diadoc\Proto\Invoicing\TransferBase $value)
    {
        if ($this->TransferBase === null) {
            $this->TransferBase = new \Protobuf\MessageCollection();
        }

        $this->TransferBase->add($value);
    }

    /**
     * Check if 'TransferTextInfo' has a value
     *
     * @return bool
     */
    public function hasTransferTextInfo()
    {
        return $this->TransferTextInfo !== null;
    }

    /**
     * Get 'TransferTextInfo' value
     *
     * @return string
     */
    public function getTransferTextInfo()
    {
        return $this->TransferTextInfo;
    }

    /**
     * Set 'TransferTextInfo' value
     *
     * @param string $value
     */
    public function setTransferTextInfo($value = null)
    {
        $this->TransferTextInfo = $value;
    }

    /**
     * Check if 'Waybill' has a value
     *
     * @return bool
     */
    public function hasWaybillList()
    {
        return $this->Waybill !== null;
    }

    /**
     * Get 'Waybill' value
     *
     * @return \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Invoicing\Waybill>
     */
    public function getWaybillList()
    {
        return $this->Waybill;
    }

    /**
     * Set 'Waybill' value
     *
     * @param \Protobuf\Collection<\Antlena\SDK\Diadoc\Proto\Invoicing\Waybill> $value
     */
    public function setWaybillList(\Protobuf\Collection $value = null)
    {
        $this->Waybill = $value;
    }

    /**
     * Add a new element to 'Waybill'
     *
     * @param \Antlena\SDK\Diadoc\Proto\Invoicing\Waybill $value
     */
    public function addWaybill(\Antlena\SDK\Diadoc\Proto\Invoicing\Waybill $value)
    {
        if ($this->Waybill === null) {
            $this->Waybill = new \Protobuf\MessageCollection();
        }

        $this->Waybill->add($value);
    }

    /**
     * Check if 'Carrier' has a value
     *
     * @return bool
     */
    public function hasCarrier()
    {
        return $this->Carrier !== null;
    }

    /**
     * Get 'Carrier' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Invoicing\Organizations\ExtendedOrganizationInfo
     */
    public function getCarrier()
    {
        return $this->Carrier;
    }

    /**
     * Set 'Carrier' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Invoicing\Organizations\ExtendedOrganizationInfo $value
     */
    public function setCarrier(\Antlena\SDK\Diadoc\Proto\Invoicing\Organizations\ExtendedOrganizationInfo $value = null)
    {
        $this->Carrier = $value;
    }

    /**
     * Check if 'Employee' has a value
     *
     * @return bool
     */
    public function hasEmployee()
    {
        return $this->Employee !== null;
    }

    /**
     * Get 'Employee' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Invoicing\Employee
     */
    public function getEmployee()
    {
        return $this->Employee;
    }

    /**
     * Set 'Employee' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Invoicing\Employee $value
     */
    public function setEmployee(\Antlena\SDK\Diadoc\Proto\Invoicing\Employee $value = null)
    {
        $this->Employee = $value;
    }

    /**
     * Check if 'OtherIssuer' has a value
     *
     * @return bool
     */
    public function hasOtherIssuer()
    {
        return $this->OtherIssuer !== null;
    }

    /**
     * Get 'OtherIssuer' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Invoicing\OtherIssuer
     */
    public function getOtherIssuer()
    {
        return $this->OtherIssuer;
    }

    /**
     * Set 'OtherIssuer' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Invoicing\OtherIssuer $value
     */
    public function setOtherIssuer(\Antlena\SDK\Diadoc\Proto\Invoicing\OtherIssuer $value = null)
    {
        $this->OtherIssuer = $value;
    }

    /**
     * Check if 'CreatedThingTransferDate' has a value
     *
     * @return bool
     */
    public function hasCreatedThingTransferDate()
    {
        return $this->CreatedThingTransferDate !== null;
    }

    /**
     * Get 'CreatedThingTransferDate' value
     *
     * @return string
     */
    public function getCreatedThingTransferDate()
    {
        return $this->CreatedThingTransferDate;
    }

    /**
     * Set 'CreatedThingTransferDate' value
     *
     * @param string $value
     */
    public function setCreatedThingTransferDate($value = null)
    {
        $this->CreatedThingTransferDate = $value;
    }

    /**
     * Check if 'CreatedThingInfo' has a value
     *
     * @return bool
     */
    public function hasCreatedThingInfo()
    {
        return $this->CreatedThingInfo !== null;
    }

    /**
     * Get 'CreatedThingInfo' value
     *
     * @return string
     */
    public function getCreatedThingInfo()
    {
        return $this->CreatedThingInfo;
    }

    /**
     * Set 'CreatedThingInfo' value
     *
     * @param string $value
     */
    public function setCreatedThingInfo($value = null)
    {
        $this->CreatedThingInfo = $value;
    }

    /**
     * Check if 'AdditionalInfoId' has a value
     *
     * @return bool
     */
    public function hasAdditionalInfoId()
    {
        return $this->AdditionalInfoId !== null;
    }

    /**
     * Get 'AdditionalInfoId' value
     *
     * @return \Antlena\SDK\Diadoc\Proto\Invoicing\AdditionalInfoId
     */
    public function getAdditionalInfoId()
    {
        return $this->AdditionalInfoId;
    }

    /**
     * Set 'AdditionalInfoId' value
     *
     * @param \Antlena\SDK\Diadoc\Proto\Invoicing\AdditionalInfoId $value
     */
    public function setAdditionalInfoId(\Antlena\SDK\Diadoc\Proto\Invoicing\AdditionalInfoId $value = null)
    {
        $this->AdditionalInfoId = $value;
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
        if ( ! isset($values['OperationInfo'])) {
            throw new \InvalidArgumentException('Field "OperationInfo" (tag 1) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'OperationType' => null,
            'TransferDate' => null,
            'TransferBase' => [],
            'TransferTextInfo' => null,
            'Waybill' => [],
            'Carrier' => null,
            'Employee' => null,
            'OtherIssuer' => null,
            'CreatedThingTransferDate' => null,
            'CreatedThingInfo' => null,
            'AdditionalInfoId' => null
        ], $values);

        $message->setOperationInfo($values['OperationInfo']);
        $message->setOperationType($values['OperationType']);
        $message->setTransferDate($values['TransferDate']);
        $message->setTransferTextInfo($values['TransferTextInfo']);
        $message->setCarrier($values['Carrier']);
        $message->setEmployee($values['Employee']);
        $message->setOtherIssuer($values['OtherIssuer']);
        $message->setCreatedThingTransferDate($values['CreatedThingTransferDate']);
        $message->setCreatedThingInfo($values['CreatedThingInfo']);
        $message->setAdditionalInfoId($values['AdditionalInfoId']);

        foreach ($values['TransferBase'] as $item) {
            $message->addTransferBase($item);
        }

        foreach ($values['Waybill'] as $item) {
            $message->addWaybill($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'TransferInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'OperationInfo',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'OperationType',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'TransferDate',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'TransferBase',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Invoicing.TransferBase'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'TransferTextInfo',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'Waybill',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Invoicing.Waybill'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'Carrier',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Invoicing.Organizations.ExtendedOrganizationInfo'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'Employee',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Invoicing.Employee'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'OtherIssuer',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Invoicing.OtherIssuer'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'CreatedThingTransferDate',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'CreatedThingInfo',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 12,
                    'name' => 'AdditionalInfoId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.Antlena.SDK.Diadoc.Proto.Invoicing.AdditionalInfoId'
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

        if ($this->OperationInfo === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\Invoicing\\TransferInfo#OperationInfo" (tag 1) is required but has no value.');
        }

        if ($this->OperationInfo !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->OperationInfo);
        }

        if ($this->OperationType !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->OperationType);
        }

        if ($this->TransferDate !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->TransferDate);
        }

        if ($this->TransferBase !== null) {
            foreach ($this->TransferBase as $val) {
                $writer->writeVarint($stream, 34);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->TransferTextInfo !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->TransferTextInfo);
        }

        if ($this->Waybill !== null) {
            foreach ($this->Waybill as $val) {
                $writer->writeVarint($stream, 50);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->Carrier !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeVarint($stream, $this->Carrier->serializedSize($sizeContext));
            $this->Carrier->writeTo($context);
        }

        if ($this->Employee !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeVarint($stream, $this->Employee->serializedSize($sizeContext));
            $this->Employee->writeTo($context);
        }

        if ($this->OtherIssuer !== null) {
            $writer->writeVarint($stream, 74);
            $writer->writeVarint($stream, $this->OtherIssuer->serializedSize($sizeContext));
            $this->OtherIssuer->writeTo($context);
        }

        if ($this->CreatedThingTransferDate !== null) {
            $writer->writeVarint($stream, 82);
            $writer->writeString($stream, $this->CreatedThingTransferDate);
        }

        if ($this->CreatedThingInfo !== null) {
            $writer->writeVarint($stream, 90);
            $writer->writeString($stream, $this->CreatedThingInfo);
        }

        if ($this->AdditionalInfoId !== null) {
            $writer->writeVarint($stream, 98);
            $writer->writeVarint($stream, $this->AdditionalInfoId->serializedSize($sizeContext));
            $this->AdditionalInfoId->writeTo($context);
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

                $this->OperationInfo = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->OperationType = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->TransferDate = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Invoicing\TransferBase();

                if ($this->TransferBase === null) {
                    $this->TransferBase = new \Protobuf\MessageCollection();
                }

                $this->TransferBase->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->TransferTextInfo = $reader->readString($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Invoicing\Waybill();

                if ($this->Waybill === null) {
                    $this->Waybill = new \Protobuf\MessageCollection();
                }

                $this->Waybill->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Invoicing\Organizations\ExtendedOrganizationInfo();

                $this->Carrier = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Invoicing\Employee();

                $this->Employee = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Invoicing\OtherIssuer();

                $this->OtherIssuer = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->CreatedThingTransferDate = $reader->readString($stream);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->CreatedThingInfo = $reader->readString($stream);

                continue;
            }

            if ($tag === 12) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \Antlena\SDK\Diadoc\Proto\Invoicing\AdditionalInfoId();

                $this->AdditionalInfoId = $innerMessage;

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

        if ($this->OperationInfo !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->OperationInfo);
        }

        if ($this->OperationType !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->OperationType);
        }

        if ($this->TransferDate !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->TransferDate);
        }

        if ($this->TransferBase !== null) {
            foreach ($this->TransferBase as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->TransferTextInfo !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->TransferTextInfo);
        }

        if ($this->Waybill !== null) {
            foreach ($this->Waybill as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->Carrier !== null) {
            $innerSize = $this->Carrier->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->Employee !== null) {
            $innerSize = $this->Employee->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->OtherIssuer !== null) {
            $innerSize = $this->OtherIssuer->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->CreatedThingTransferDate !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->CreatedThingTransferDate);
        }

        if ($this->CreatedThingInfo !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->CreatedThingInfo);
        }

        if ($this->AdditionalInfoId !== null) {
            $innerSize = $this->AdditionalInfoId->serializedSize($context);

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
        $this->OperationInfo = null;
        $this->OperationType = null;
        $this->TransferDate = null;
        $this->TransferBase = null;
        $this->TransferTextInfo = null;
        $this->Waybill = null;
        $this->Carrier = null;
        $this->Employee = null;
        $this->OtherIssuer = null;
        $this->CreatedThingTransferDate = null;
        $this->CreatedThingInfo = null;
        $this->AdditionalInfoId = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\Invoicing\TransferInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->OperationInfo = ($message->OperationInfo !== null) ? $message->OperationInfo : $this->OperationInfo;
        $this->OperationType = ($message->OperationType !== null) ? $message->OperationType : $this->OperationType;
        $this->TransferDate = ($message->TransferDate !== null) ? $message->TransferDate : $this->TransferDate;
        $this->TransferBase = ($message->TransferBase !== null) ? $message->TransferBase : $this->TransferBase;
        $this->TransferTextInfo = ($message->TransferTextInfo !== null) ? $message->TransferTextInfo : $this->TransferTextInfo;
        $this->Waybill = ($message->Waybill !== null) ? $message->Waybill : $this->Waybill;
        $this->Carrier = ($message->Carrier !== null) ? $message->Carrier : $this->Carrier;
        $this->Employee = ($message->Employee !== null) ? $message->Employee : $this->Employee;
        $this->OtherIssuer = ($message->OtherIssuer !== null) ? $message->OtherIssuer : $this->OtherIssuer;
        $this->CreatedThingTransferDate = ($message->CreatedThingTransferDate !== null) ? $message->CreatedThingTransferDate : $this->CreatedThingTransferDate;
        $this->CreatedThingInfo = ($message->CreatedThingInfo !== null) ? $message->CreatedThingInfo : $this->CreatedThingInfo;
        $this->AdditionalInfoId = ($message->AdditionalInfoId !== null) ? $message->AdditionalInfoId : $this->AdditionalInfoId;
    }


}

