<?php

namespace ChrGriffin\BlizzardFaker\Exceptions;

use Throwable;

class NoResultsException extends BlizzardFakerException
{
    /**
     * InvalidRaceException constructor.
     *
     * @param string $type
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(
        string $type,
        int $code = 0,
        Throwable $previous = null
    ) {
        parent::__construct(
            'Could not find '
                . $type
                . '. This is likely due to an overly specific query',
            $code,
            $previous
        );
    }
}