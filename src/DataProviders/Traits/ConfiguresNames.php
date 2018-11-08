<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\Traits;

trait ConfiguresNames
{
    /**
     * Which gender names to return. If null, both.
     *
     * @var null|string
     */
    protected $gender;

    /**
     * Set the gender property.
     *
     * @param null|string $gender Can be male, female, or `null`.
     * @return $this
     */
    public function setGender(?string $gender)
    {
        if(!in_array($gender, [
            null,
            'male',
            'female'
        ])) {
            throw new \InvalidArgumentException('Invalid gender.');
        }

        $this->gender = $gender;
        return $this;
    }

    /**
     * Which name type to return.
     *
     * @var string
     */
    protected $nameType;

    /**
     * Set the nameType property.
     *
     * @param string $nameType Can be first, last, or full.
     * @return $this
     */
    public function setNameType(string $nameType)
    {
        if(!in_array($nameType, [
            'first',
            'last',
            'full'
        ])) {
            throw new \InvalidArgumentException('Invalid name type.');
        }

        $this->nameType = $nameType;
        return $this;
    }
}