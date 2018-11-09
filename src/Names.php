<?php

namespace ChrGriffin\BlizzardFaker;

use Faker\{
    Provider\Base,
    Generator
};

class Names extends Base
{
    /**
     * Class traits.
     */
    use Traits\FiltersByFranchise;

    /**
     * Data provider.
     *
     * @var DataProviders\DataProviderInterface
     */
    protected $dataProvider;

    /**
     * Franchises that can provide names.
     *
     * @var array
     */
    protected $validFranchises = [
        'diablo', 'starcraft', 'hearthstone'
    ];

    /**
     * Names constructor.
     *
     * @param Generator $generator
     * @return void
     */
    public function __construct(Generator $generator)
    {
        parent::__construct($generator);
        $this->dataProvider = new DataProviders\NamesProvider;
    }

    /**
     * Generate a random first name.
     *
     * @param null|string $gender
     * @param null|string $franchise
     * @return string
     * @throws \Exception
     */
    public function firstName(?string $gender = null, ?string $franchise = null) : string
    {
        if($franchise) {
            $this->addFranchise($franchise);
        }

        return $this->name(
            $gender,
            'first'
        );
    }

    /**
     * Generate a random last name.
     *
     * @param null|string $gender
     * @param null|string $franchise
     * @return string
     * @throws \Exception
     */
    public function lastName(?string $gender = null, ?string $franchise = null) : string
    {
        if($franchise) {
            $this->addFranchise($franchise);
        }

        return $this->name(
            $gender,
            'last'
        );
    }

    /**
     * Generate a random full name.
     *
     * @param null|string $gender
     * @param null|string $franchise
     * @return string
     * @throws \Exception
     */
    public function fullName(?string $gender = null, ?string $franchise = null) : string
    {
        if($franchise) {
            $this->addFranchise($franchise);
        }

        return $this->name(
            $gender,
            'full'
        );
    }

    /**
     * Generate a random name.
     *
     * @param null|string $gender
     * @param string $nameType
     * @param array $franchises
     * @return string
     */
    public function name(
        ?string $gender = null,
        string $nameType = 'full',
        array $franchises = []
    ) : string {

        $franchises = !empty($franchises)
            ? $franchises
            : $this->franchises;

        if($gender) {
            $this->dataProvider->addFilter('gender', $gender);
        }

        if($franchises) {
            $this->dataProvider->setFilter('franchise', $franchises);
        }

        if($nameType) {
            $this->dataProvider->addFilter('name_type', $nameType);
        }

        $names = $this->dataProvider->provide();

        return self::randomElement($names);
    }
}