<?php

namespace ChrGriffin\BlizzardFaker\DataProviders;

class NamesProvider implements DataProviderInterface
{
    /**
     * Class traits.
     */
    use Traits\ConfiguresNames;

    /**
     * Internal DataProviders.
     *
     * @var array
     */
    protected $providers = [
        'diablo' => Names\Diablo::class,
        'starcraft' => Names\Starcraft::class
    ];

    /**
     * The currently configured franchise.
     *
     * @var null|string
     */
    private $franchise;

    /**
     * Set the franchise.
     *
     * @param null|string $franchise
     * @return $this
     */
    public function fromFranchise(?string $franchise)
    {
        if(
            !in_array($franchise, array_keys($this->providers))
            && $franchise !== null
        ) {
            throw new \InvalidArgumentException();
        }

        $this->franchise = $franchise;

        return $this;
    }

    /**
     * Provide configured names.
     *
     * @return array
     */
    public function provide() : array
    {
        if($this->franchise !== null) {
            return $this->getDataFromProvider($this->providers[$this->franchise]);
        }
        else {
            $names = [];
            foreach($this->providers as $providerClass) {
                $names[] = $this->getDataFromProvider($providerClass);
            }

            return array_unique(array_merge(...$names));
        }
    }

    /**
     * Retrieve data from a configured sub-DataProvider.
     *
     * @param string $providerClass
     * @return array
     */
    public function getDataFromProvider(string $providerClass) : array
    {
        return (new $providerClass())
            ->setGender($this->gender)
            ->setNameType($this->nameType)
            ->provide();
    }
}