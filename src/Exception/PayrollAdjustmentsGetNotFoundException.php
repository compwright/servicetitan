<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Exception;

class PayrollAdjustmentsGetNotFoundException extends NotFoundException
{
    /**
     * @var \CompWright\ServiceTitan\Model\ApiErrorResponse
     */
    private $apiErrorResponse;

    public function __construct(\CompWright\ServiceTitan\Model\ApiErrorResponse $apiErrorResponse)
    {
        parent::__construct('Payroll adjustment was not found');
        $this->apiErrorResponse = $apiErrorResponse;
    }

    public function getApiErrorResponse(): \CompWright\ServiceTitan\Model\ApiErrorResponse
    {
        return $this->apiErrorResponse;
    }
}
