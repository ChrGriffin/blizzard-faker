<?php

namespace ChrGriffin\BlizzardFaker\Exceptions;

use Throwable;

class InvalidRaceException extends BlizzardFakerException
{
    /**
     * InvalidRaceException constructor.
     *
     * @param string $race
     * @param array $with
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(
        string $race,
        array $with = [],
        int $code = 0,
        Throwable $previous = null
    ) {
        $message = 'The race `'
            . str_replace('_',' ', ucwords($race))
            . '` is not valid ';

        $message = trim($message . $this->buildStringOfWiths($with)) . '.';

        parent::__construct($message, $code, $previous);
    }
}