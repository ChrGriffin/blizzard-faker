<?php

namespace ChrGriffin\BlizzardFaker\DataProviders;

interface DataProviderInterface
{
    /**
     * Provide configured array of data.
     *
     * @return array
     */
    public function provide() : array;
}