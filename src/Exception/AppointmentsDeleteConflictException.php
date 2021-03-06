<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Exception;

class AppointmentsDeleteConflictException extends ConflictException
{
    /**
     * @var \CompWright\ServiceTitan\Model\ApiErrorResponse
     */
    private $apiErrorResponse;

    public function __construct(\CompWright\ServiceTitan\Model\ApiErrorResponse $apiErrorResponse)
    {
        parent::__construct('Appointment is in the state that doesn\'t allow deletion');
        $this->apiErrorResponse = $apiErrorResponse;
    }

    public function getApiErrorResponse(): \CompWright\ServiceTitan\Model\ApiErrorResponse
    {
        return $this->apiErrorResponse;
    }
}
