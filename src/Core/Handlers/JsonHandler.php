<?php

namespace Qiwi\Core\Handlers;

/**
 * Class JsonErrorHandler
 * @package Qiwi\Core\Handlers
 */
class JsonHandler
{

    /**
     * @var string|null
     */
    private $errorMessage;

    /**
     * @param string $data
     * @return array|null
     */
    public function decode(string $data) : ?array
    {
        $result = json_decode($data, true);
        $this->check();

        if ($result === false) {
            $result = null;
        }

        return $result;
    }

    protected function check() : void
    {
        switch (json_last_error()) {
            case JSON_ERROR_NONE:
                $this->errorMessage = null;
                break;
            case JSON_ERROR_DEPTH:
                $this->errorMessage = ' - Maximum stack depth exceeded';
                break;
            case JSON_ERROR_STATE_MISMATCH:
                $this->errorMessage = ' - Underflow or the modes mismatch';
                break;
            case JSON_ERROR_CTRL_CHAR:
                $this->errorMessage = ' - Unexpected control character found';
                break;
            case JSON_ERROR_SYNTAX:
                $this->errorMessage = ' - Syntax error, malformed JSON';
                break;
            case JSON_ERROR_UTF8:
                $this->errorMessage = ' - Malformed UTF-8 characters, possibly incorrectly encoded';
                break;
            default:
                $this->errorMessage = ' - Unknown error';
                break;
        }
    }

    /**
     * @return null|string
     */
    public function getError() : ?string
    {
        return $this->errorMessage;
    }
}