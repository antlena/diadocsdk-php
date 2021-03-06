<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Address.proto
 */


namespace Antlena\SDK\Diadoc\Proto;

/**
 * Protobuf message : Antlena.SDK.Diadoc.Proto.RussianAddress
 */
class RussianAddress extends \Protobuf\AbstractMessage
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
     * ZipCode optional string = 1
     *
     * @var string
     */
    protected $ZipCode = null;

    /**
     * Region required string = 2
     *
     * @var string
     */
    protected $Region = null;

    /**
     * Territory optional string = 3
     *
     * @var string
     */
    protected $Territory = null;

    /**
     * City optional string = 4
     *
     * @var string
     */
    protected $City = null;

    /**
     * Locality optional string = 5
     *
     * @var string
     */
    protected $Locality = null;

    /**
     * Street optional string = 6
     *
     * @var string
     */
    protected $Street = null;

    /**
     * Building optional string = 7
     *
     * @var string
     */
    protected $Building = null;

    /**
     * Block optional string = 8
     *
     * @var string
     */
    protected $Block = null;

    /**
     * Apartment optional string = 9
     *
     * @var string
     */
    protected $Apartment = null;

    /**
     * Check if 'ZipCode' has a value
     *
     * @return bool
     */
    public function hasZipCode()
    {
        return $this->ZipCode !== null;
    }

    /**
     * Get 'ZipCode' value
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }

    /**
     * Set 'ZipCode' value
     *
     * @param string $value
     */
    public function setZipCode($value = null)
    {
        $this->ZipCode = $value;
    }

    /**
     * Check if 'Region' has a value
     *
     * @return bool
     */
    public function hasRegion()
    {
        return $this->Region !== null;
    }

    /**
     * Get 'Region' value
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->Region;
    }

    /**
     * Set 'Region' value
     *
     * @param string $value
     */
    public function setRegion($value)
    {
        $this->Region = $value;
    }

    /**
     * Check if 'Territory' has a value
     *
     * @return bool
     */
    public function hasTerritory()
    {
        return $this->Territory !== null;
    }

    /**
     * Get 'Territory' value
     *
     * @return string
     */
    public function getTerritory()
    {
        return $this->Territory;
    }

    /**
     * Set 'Territory' value
     *
     * @param string $value
     */
    public function setTerritory($value = null)
    {
        $this->Territory = $value;
    }

    /**
     * Check if 'City' has a value
     *
     * @return bool
     */
    public function hasCity()
    {
        return $this->City !== null;
    }

    /**
     * Get 'City' value
     *
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * Set 'City' value
     *
     * @param string $value
     */
    public function setCity($value = null)
    {
        $this->City = $value;
    }

    /**
     * Check if 'Locality' has a value
     *
     * @return bool
     */
    public function hasLocality()
    {
        return $this->Locality !== null;
    }

    /**
     * Get 'Locality' value
     *
     * @return string
     */
    public function getLocality()
    {
        return $this->Locality;
    }

    /**
     * Set 'Locality' value
     *
     * @param string $value
     */
    public function setLocality($value = null)
    {
        $this->Locality = $value;
    }

    /**
     * Check if 'Street' has a value
     *
     * @return bool
     */
    public function hasStreet()
    {
        return $this->Street !== null;
    }

    /**
     * Get 'Street' value
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * Set 'Street' value
     *
     * @param string $value
     */
    public function setStreet($value = null)
    {
        $this->Street = $value;
    }

    /**
     * Check if 'Building' has a value
     *
     * @return bool
     */
    public function hasBuilding()
    {
        return $this->Building !== null;
    }

    /**
     * Get 'Building' value
     *
     * @return string
     */
    public function getBuilding()
    {
        return $this->Building;
    }

    /**
     * Set 'Building' value
     *
     * @param string $value
     */
    public function setBuilding($value = null)
    {
        $this->Building = $value;
    }

    /**
     * Check if 'Block' has a value
     *
     * @return bool
     */
    public function hasBlock()
    {
        return $this->Block !== null;
    }

    /**
     * Get 'Block' value
     *
     * @return string
     */
    public function getBlock()
    {
        return $this->Block;
    }

    /**
     * Set 'Block' value
     *
     * @param string $value
     */
    public function setBlock($value = null)
    {
        $this->Block = $value;
    }

    /**
     * Check if 'Apartment' has a value
     *
     * @return bool
     */
    public function hasApartment()
    {
        return $this->Apartment !== null;
    }

    /**
     * Get 'Apartment' value
     *
     * @return string
     */
    public function getApartment()
    {
        return $this->Apartment;
    }

    /**
     * Set 'Apartment' value
     *
     * @param string $value
     */
    public function setApartment($value = null)
    {
        $this->Apartment = $value;
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
        if ( ! isset($values['Region'])) {
            throw new \InvalidArgumentException('Field "Region" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'ZipCode' => null,
            'Territory' => null,
            'City' => null,
            'Locality' => null,
            'Street' => null,
            'Building' => null,
            'Block' => null,
            'Apartment' => null
        ], $values);

        $message->setZipCode($values['ZipCode']);
        $message->setRegion($values['Region']);
        $message->setTerritory($values['Territory']);
        $message->setCity($values['City']);
        $message->setLocality($values['Locality']);
        $message->setStreet($values['Street']);
        $message->setBuilding($values['Building']);
        $message->setBlock($values['Block']);
        $message->setApartment($values['Apartment']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'RussianAddress',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'ZipCode',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Region',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'Territory',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'City',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'Locality',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'Street',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'Building',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'Block',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'Apartment',
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

        if ($this->Region === null) {
            throw new \UnexpectedValueException('Field "\\Antlena\\SDK\\Diadoc\\Proto\\RussianAddress#Region" (tag 2) is required but has no value.');
        }

        if ($this->ZipCode !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->ZipCode);
        }

        if ($this->Region !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->Region);
        }

        if ($this->Territory !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->Territory);
        }

        if ($this->City !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->City);
        }

        if ($this->Locality !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->Locality);
        }

        if ($this->Street !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->Street);
        }

        if ($this->Building !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeString($stream, $this->Building);
        }

        if ($this->Block !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeString($stream, $this->Block);
        }

        if ($this->Apartment !== null) {
            $writer->writeVarint($stream, 74);
            $writer->writeString($stream, $this->Apartment);
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

                $this->ZipCode = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Region = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Territory = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->City = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Locality = $reader->readString($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Street = $reader->readString($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Building = $reader->readString($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Block = $reader->readString($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Apartment = $reader->readString($stream);

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

        if ($this->ZipCode !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ZipCode);
        }

        if ($this->Region !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Region);
        }

        if ($this->Territory !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Territory);
        }

        if ($this->City !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->City);
        }

        if ($this->Locality !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Locality);
        }

        if ($this->Street !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Street);
        }

        if ($this->Building !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Building);
        }

        if ($this->Block !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Block);
        }

        if ($this->Apartment !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Apartment);
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
        $this->ZipCode = null;
        $this->Region = null;
        $this->Territory = null;
        $this->City = null;
        $this->Locality = null;
        $this->Street = null;
        $this->Building = null;
        $this->Block = null;
        $this->Apartment = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \Antlena\SDK\Diadoc\Proto\RussianAddress) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->ZipCode = ($message->ZipCode !== null) ? $message->ZipCode : $this->ZipCode;
        $this->Region = ($message->Region !== null) ? $message->Region : $this->Region;
        $this->Territory = ($message->Territory !== null) ? $message->Territory : $this->Territory;
        $this->City = ($message->City !== null) ? $message->City : $this->City;
        $this->Locality = ($message->Locality !== null) ? $message->Locality : $this->Locality;
        $this->Street = ($message->Street !== null) ? $message->Street : $this->Street;
        $this->Building = ($message->Building !== null) ? $message->Building : $this->Building;
        $this->Block = ($message->Block !== null) ? $message->Block : $this->Block;
        $this->Apartment = ($message->Apartment !== null) ? $message->Apartment : $this->Apartment;
    }


}

