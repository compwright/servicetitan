<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Exception;

class LocationsCreateContactBadRequestException extends BadRequestException
{
    /**
     * @var \CompWright\ServiceTitan\Model\ApiErrorResponse
     */
    private $apiErrorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\CompWright\ServiceTitan\Model\ApiErrorResponse $apiErrorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('The request cannot be processed, check validation errors or request format');
        $this->apiErrorResponse = $apiErrorResponse;
        $this->response = $response;
    }

    public function getApiErrorResponse(): \CompWright\ServiceTitan\Model\ApiErrorResponse
    {
        return $this->apiErrorResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
