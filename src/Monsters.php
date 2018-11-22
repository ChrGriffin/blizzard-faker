<?php

namespace ChrGriffin\BlizzardFaker;

use Faker\{
    Provider\Base,
    Generator
};

class Monsters extends Base
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
        'diablo'
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
        $this->dataProvider = new DataProviders\MonstersProvider;
    }

    /**
     * Return the Monsters provider.
     *
     * @return $this
     */
    public function blizzardMonsters()
    {
        return $this;
    }

    /**
     * Generate a random name.
     *
     * @param array $franchises
     * @return string
     * @throws \Exception
     */
    public function monster(array $franchises = []) : string
    {
        $franchises = !empty($franchises)
            ? $franchises
            : $this->franchises;

        if($franchises) {
            $this->dataProvider->setFilter('franchise', $franchises);
        }

        $names = $this->dataProvider->provide();

        return self::randomElement($names);
    }
}
