<?php

namespace ChrGriffin\BlizzardFaker\Traits;

use ChrGriffin\BlizzardFaker\Exceptions\InvalidRaceException;

trait FiltersByRace
{
    /**
     * The configured race to get data from.
     *
     * @var array
     */
    protected $races = [];

    /**
     * Return valid races to get data from.
     *
     * @return array
     */
    protected function getValidRaces()
    {
        return $this->validRaces ?? [];
    }

    /**
     * Add Demon to our configured races.
     *
     * @return $this
     * @throws \Exception
     */
    public function demon()
    {
        return $this->addRace('demon');
    }

    /**
     * Add Angel to our configured races.
     *
     * @return $this
     * @throws \Exception
     */
    public function angel()
    {
        return $this->addRace('angel');
    }

    /**
     * Add Nephalem to our configured races.
     *
     * @return $this
     * @throws \Exception
     */
    public function nephalem()
    {
        return $this->addRace('nephalem');
    }

    /**
     * Add Xel'Naga to our configured races.
     *
     * @return $this
     * @throws \Exception
     */
    public function xelNaga()
    {
        return $this->addRace('xel\'naga');
    }

    /**
     * Add Terran to our configured races.
     *
     * @return $this
     * @throws \Exception
     */
    public function terran()
    {
        return $this->addRace('terran');
    }

    /**
     * Add Protoss to our configured races.
     *
     * @return $this
     * @throws \Exception
     */
    public function protoss()
    {
        return $this->addRace('protoss');
    }

    /**
     * Add Zerg to our configured races.
     *
     * @return $this
     * @throws \Exception
     */
    public function zerg()
    {
        return $this->addRace('zerg');
    }

    /**
     * Add Primal Zerg to our configured races.
     *
     * @return $this
     * @throws \Exception
     */
    public function primalZerg()
    {
        return $this->addRace('primal_zerg');
    }

    /**
     * Add Human to our configured races.
     *
     * @return $this
     * @throws \Exception
     */
    public function human()
    {
        return $this->addRace('human');
    }

    /**
     * Add Dwarf to our configured races.
     *
     * @return $this
     * @throws \Exception
     */
    public function dwarf()
    {
        return $this->addRace('dwarf');
    }

    /**
     * Add Night Elf to our configured races.
     *
     * @return $this
     * @throws \Exception
     */
    public function nightElf()
    {
        return $this->addRace('night_elf');
    }

    /**
     * Add Gnome to our configured races.
     *
     * @return $this
     * @throws \Exception
     */
    public function gnome()
    {
        return $this->addRace('gnome');
    }

    /**
     * Add Draenei to our configured races.
     *
     * @return $this
     * @throws \Exception
     */
    public function draenei()
    {
        return $this->addRace('draenei');
    }

    /**
     * Add Worgen to our configured races.
     *
     * @return $this
     * @throws \Exception
     */
    public function worgen()
    {
        return $this->addRace('worgen');
    }

    /**
     * Add Orc to our configured races.
     *
     * @return $this
     * @throws \Exception
     */
    public function orc()
    {
        return $this->addRace('orc');
    }

    /**
     * Add Forsaken to our configured races.
     *
     * @return $this
     * @throws \Exception
     */
    public function forsaken()
    {
        return $this->addRace('forsaken');
    }

    /**
     * Add Undead to our configured races.
     *
     * @return $this
     * @throws \Exception
     */
    public function undead()
    {
        return $this->addRace('undead');
    }

    /**
     * Add Tauren to our configured races.
     *
     * @return $this
     * @throws \Exception
     */
    public function tauren()
    {
        return $this->addRace('tauren');
    }

    /**
     * Add Troll to our configured races.
     *
     * @return $this
     * @throws \Exception
     */
    public function troll()
    {
        return $this->addRace('troll');
    }

    /**
     * Add Blood Elf to our configured races.
     *
     * @return $this
     * @throws \Exception
     */
    public function bloodElf()
    {
        return $this->addRace('blood_elf');
    }

    /**
     * Add High Elf to our configured races.
     *
     * @return $this
     * @throws \Exception
     */
    public function highElf()
    {
        return $this->addRace('high_elf');
    }

    /**
     * Add Goblin to our configured races.
     *
     * @return $this
     * @throws \Exception
     */
    public function goblin()
    {
        return $this->addRace('goblin');
    }

    /**
     * Add Pandaren to our configured races.
     *
     * @return $this
     * @throws \Exception
     */
    public function pandaren()
    {
        return $this->addRace('pandaren');
    }

    /**
     * Add Murloc to our configured races.
     *
     * @return FiltersByRace
     * @throws \Exception
     */
    public function murloc()
    {
        return $this->addRace('murloc');
    }

    /**
     * Add Elemental to our configured races.
     *
     * @return FiltersByRace
     * @throws \Exception
     */
    public function elemental()
    {
        return $this->addRace('elemental');
    }

    /**
     * Add Dragon to our configured races.
     *
     * @return FiltersByRace
     * @throws \Exception
     */
    public function dragon()
    {
        return $this->addRace('dragon');
    }

    /**
     * Add Ogre to our configured races.
     *
     * @return FiltersByRace
     * @throws \Exception
     */
    public function ogre()
    {
        return $this->addRace('ogre');
    }

    /**
     * Add the given franchise to our configured franchises.
     *
     * @param string $race
     * @return $this
     * @throws \Exception
     */
    public function addRace(string $race)
    {
        if(!array_key_exists($race, $this->getValidRaces())) {
            throw new InvalidRaceException($race, ['provider' => self::class]);
        }

        if(property_exists($this, 'franchises')) {
            if($this->franchises) {
                foreach($this->franchises as $franchise) {
                    if(!in_array($franchise, $this->getValidRaces()[$race]['franchises'])) {
                        throw new InvalidRaceException($race, ['franchise' => $franchise]);
                    }
                }
            }
        }

        $this->races[] = $race;
        return $this;
    }
}