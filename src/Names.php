<?php

namespace ChrGriffin\BlizzardFaker;

use Faker\{
    Provider\Base,
    Generator
};
use ChrGriffin\BlizzardFaker\DataProviders\{
    DataProviderInterface,
    NamesProvider
};

class Names extends Base
{
    /**
     * Data provider.
     *
     * @var DataProviderInterface
     */
    protected $dataProvider;

    /**
     * Names constructor.
     *
     * @param Generator $generator
     * @return void
     */
    public function __construct(Generator $generator)
    {
        parent::__construct($generator);
        $this->dataProvider = new NamesProvider;
    }

    /**
     * Generate a random first name.
     *
     * @param null|string $gender
     * @param null|string $franchise
     * @return string
     */
    public function firstName(?string $gender = null, ?string $franchise = null) : string
    {
        return $this->name(
            $gender,
            $franchise,
            'first'
        );
    }

    /**
     * Generate a random last name.
     *
     * @param null|string $gender
     * @param null|string $franchise
     * @return string
     */
    public function lastName(?string $gender = null, ?string $franchise = null) : string
    {
        return $this->name(
            $gender,
            $franchise,
            'last'
        );
    }

    /**
     * Generate a random full name.
     *
     * @param null|string $gender
     * @param null|string $franchise
     * @return string
     */
    public function fullName(?string $gender = null, ?string $franchise = null) : string
    {
        return $this->name(
            $gender,
            $franchise,
            'full'
        );
    }

    /**
     * Generate a random name.
     *
     * @param null|string $gender
     * @param null|string $franchise
     * @param string $nameType
     * @return string
     */
    public function name(
        ?string $gender = null,
        ?string $franchise = null,
        string $nameType = 'full'
    ) : string {

        if($gender) {
            $this->dataProvider->addFilter('gender', $gender);
        }

        if($franchise) {
            $this->dataProvider->addFilter('franchise', $franchise);
        }

        if($nameType) {
            $this->dataProvider->addFilter('name_type', $nameType);
        }

        $names = $this->dataProvider->provide();

        return self::randomElement($names);
    }
}