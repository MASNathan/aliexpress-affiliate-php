<?php

namespace MASNathan\AliExpress\Exceptions;

class ErrorCodeException extends \Exception
{
    protected $errorCodes = [
        '20010000' => 'Call succeeds',
        '20020000' => 'System Error',
        '20030000' => 'Unauthorized transfer request',
        '20030010' => 'Required parameters',
        '20030020' => 'Invalid protocol format',
        '20030030' => 'API version input parameter error',
        '20030040' => 'API name space input parameter error',
        '20030050' => 'API name input parameter error',
        '20030060' => 'Fields input parameter error',
        '20030070' => 'Keyword input parameter error',
        '20030080' => 'Category ID input parameter error',
        '20030090' => 'Tracking ID input parameter error',
        '20030100' => 'Commission rate input parameter error',
        '20030110' => 'Original Price input parameter error',
        '20030120' => 'Discount input parameter error',
        '20030130' => 'Volume input parameter error',
        '20030140' => 'Page number input parameter error',
        '20030150' => 'Page size input parameter error',
        '20030160' => 'Sort input parameter error',
        '20030170' => 'Credit Score input parameter error',
    ];

    public function __construct($code, \Exception $previous = null)
    {
        if (!isset($this->errorCodes[$code])) {
            parent::__construct('Unknown error code', $code, $previous);

            return;
        }

        parent::__construct($this->errorCodes[$code], $code, $previous);
    }
}
