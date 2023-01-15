<?php


namespace Main\Core\Exceptions;

use Exception;

class DomainExtendException extends Exception
{
    public static function abstractClassNotExtended(): self
    {
        return new self('The domain must extend the abstract class \Main\Core\Contracts\DomainInterface');
    }
}
