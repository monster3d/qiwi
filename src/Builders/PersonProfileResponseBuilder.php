<?php

namespace Qiwi\Builders;

use Qiwi\Responses\Response;

/**
 * Class PersonProfileResponseBuilder
 * @package Qiwi\Builders
 */
class PersonProfileResponseBuilder
{

    /**
     * @var Response
     */
    private $response;

    /**
     * PersonProfileResponseBuilder constructor.
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        $this->response = $response;
    }
}