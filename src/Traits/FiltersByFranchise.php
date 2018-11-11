<?php

namespace ChrGriffin\BlizzardFaker\Traits;

use ChrGriffin\BlizzardFaker\Exceptions\InvalidFranchiseException;

trait FiltersByFranchise
{
    /**
     * The configured franchise to get data from.
     *
     * @var array
     */
    protected $franchises = [];

    /**
     * Return valid franchises to get data from.
     *
     * @return array
     */
    protected function getValidFranchises()
    {
        return $this->validFranchises ?? [];
    }

    /**
     * Add Diablo to our configured franchises.
     *
     * @return $this
     * @throws \Exception
     */
    public function diablo()
    {
        return $this->addFranchise('diablo');
    }

    /**
     * Add Hearthstone to our configured franchises.
     *
     * @return $this
     * @throws \Exception
     */
    public function hearthstone()
    {
        return $this->addFranchise('hearthstone');
    }

    /**
     * Add Heroes of the Storm to our configured franchises.
     *
     * @return $this
     * @throws \Exception
     */
    public function heroesOfTheStorm()
    {
        return $this->addFranchise('heroes_of_the_storm');
    }

    /**
     * Add Starcraft to our configured franchises.
     *
     * @return $this
     * @throws \Exception
     */
    public function starcraft()
    {
        return $this->addFranchise('starcraft');
    }

    /**
     * Add Overwatch to our configured franchises.
     *
     * @return $this
     * @throws \Exception
     */
    public function overwatch()
    {
        return $this->addFranchise('overwatch');
    }

    /**
     * Add Warcraft to our configured franchises.
     *
     * @return $this
     * @throws \Exception
     */
    public function warcraft()
    {
        return $this->addFranchise('warcraft');
    }

    /**
     * Add the given franchise to our configured franchises.
     *
     * @param string $franchise
     * @return $this
     * @throws \Exception
     */
    public function addFranchise(string $franchise)
    {
        if(!in_array($franchise, $this->getValidFranchises())) {
            throw new InvalidFranchiseException($franchise, ['provider' => self::class]);
        }

        $this->franchises[] = $franchise;
        return $this;
    }
}