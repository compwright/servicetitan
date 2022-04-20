<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Exception;

class InstalledEquipmentGetBadRequestException extends BadRequestException
{
    /**
     * @var \CompWright\ServiceTitan\Model\ApiErrorResponse
     */
    private $apiErrorResponse;

    public function __construct(\CompWright\ServiceTitan\Model\ApiErrorResponse $apiErrorResponse)
    {
        parent::__construct('The request cannot be processed, check validation errors or request format');
        $this->apiErrorResponse = $apiErrorResponse;
    }

    public function getApiErrorResponse(): \CompWright\ServiceTitan\Model\ApiErrorResponse
    {
        return $this->apiErrorResponse;
    }
}
