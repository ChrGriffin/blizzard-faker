<?php

namespace ChrGriffin\BlizzardFaker\Exceptions;

use Throwable;

class InvalidFranchiseException extends BlizzardFakerException
{
    /**
     * BlizzardFakerException constructor.
     *
     * @param string $franchise
     * @param array $with
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(
        string $franchise,
        array $with = [],
        int $code = 0,
        Throwable $previous = null
    ) {
        $message = 'The franchise `'
            . str_replace('_',' ', ucwords($franchise))
            . '` is not valid ';

        $message = trim($message . $this->buildStringOfWiths($with)) . '.';

        parent::__construct($message, $code, $previous);
    }
}