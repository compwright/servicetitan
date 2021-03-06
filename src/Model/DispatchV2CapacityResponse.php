<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class DispatchV2CapacityResponse
{
    /**
     * When the request was processed.
     *
     * @var \DateTime
     */
    protected $timeStamp;
    /**
     * Availability calculations by time frame.
     *
     * @var DispatchV2CapacityResponseAvailability[]
     */
    protected $availabilities;

    /**
     * When the request was processed.
     */
    public function getTimeStamp(): \DateTime
    {
        return $this->timeStamp;
    }

    /**
     * When the request was processed.
     */
    public function setTimeStamp(\DateTime $timeStamp): self
    {
        $this->timeStamp = $timeStamp;

        return $this;
    }

    /**
     * Availability calculations by time frame.
     *
     * @return DispatchV2CapacityResponseAvailability[]
     */
    public function getAvailabilities(): array
    {
        return $this->availabilities;
    }

    /**
     * Availability calculations by time frame.
     *
     * @param DispatchV2CapacityResponseAvailability[] $availabilities
     */
    public function setAvailabilities(array $availabilities): self
    {
        $this->availabilities = $availabilities;

        return $this;
    }
}
