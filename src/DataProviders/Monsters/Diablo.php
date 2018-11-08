<?php

namespace ChrGriffin\BlizzardFaker\DataProviders\Names;

use ChrGriffin\BlizzardFaker\DataProviders\DataProviderInterface;

class Diablo implements DataProviderInterface
{
    /**
     * Diablo 2 monster prefixes.
     *
     * @var array
     */
    protected static $monsterPrefixes = [
        'Gloom', 'Gray'
    ];

    /**
     * Diablo 2 monster suffixes.
     *
     * @var array
     */
    protected static $monsterSuffixes = [
        'Touch',
        'Spell',
        'Feast'
    ];

    /**
     * Diablo 2 monster appellations.
     *
     * @var array
     */
    protected static $monsterApellations = [
        'the Hammer',
        'the Axe',
        'the Flayer'
    ];

    /**
     * Provide configured names.
     *
     * @return array
     */
    public function provide() : array
    {

    }
}