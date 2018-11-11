<?php

namespace ChrGriffin\BlizzardFaker\DataPRoviders\Traits;

trait GetsDataFromProviders
{
    /**
     * Retrieve data from a random sub-DataProvider.
     *
     * @param array $providers
     * @return array
     */
    public function getDataFromRandomProvider(array $providers)
    {
        $data = [];
        while(empty($data) && !empty($providers)) {

            $randomIndex = $this->weightedRandom(array_map(function ($provider) use ($providers) {
                return $provider['weight'] ?? 100 / count($providers);
            }, $providers));

            $data = array_unique($this->getDataFromProvider(
                $providers[$randomIndex]['class']
            ));

            unset($providers[$randomIndex]);
        }

        return $data;
    }

    /**
     * Retrieve data from a sub-DataProvider.
     *
     * @param string $providerClass
     * @return array
     */
    public function getDataFromProvider(string $providerClass) : array
    {
        $provider = new $providerClass;

        foreach($this->filters as $filterName => $filterValue) {
            $provider->setFilter($filterName, $filterValue);
        }

        return $provider->provide();
    }
}