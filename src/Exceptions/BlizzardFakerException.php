<?php

namespace ChrGriffin\BlizzardFaker\Exceptions;

use Exception, Throwable;

abstract class BlizzardFakerException extends Exception
{
    /**
     * BlizzardFakerException constructor.
     *
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * Build a string of additional combinators.
     *
     * @param $with
     * @return string
     */
    public function buildStringOfWiths($with)
    {
        $string = '';

        $w = 0;
        foreach($with as $type => $value) {
            $string .= ($w > 0 ? ' and ' : '')
                . ' with '
                . str_replace('_',' ', ucwords($type))
                . ' `'
                . str_replace('_',' ', ucwords($value))
                . '`';

            $w++;
        }

        return $string;
    }
}