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

            $randomIndex = array_rand($providers);
            $data = array_unique($this->getDataFromProvider(
                $providers[$randomIndex]
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