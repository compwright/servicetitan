<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class JpmJobGeneratedLeadSource
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var int|null
     */
    protected $jobId;
    /**
     * @var int|null
     */
    protected $employeeId;

    public function getJobId(): ?int
    {
        return $this->jobId;
    }

    public function setJobId(?int $jobId): self
    {
        $this->initialized['jobId'] = true;
        $this->jobId = $jobId;

        return $this;
    }

    public function getEmployeeId(): ?int
    {
        return $this->employeeId;
    }

    public function setEmployeeId(?int $employeeId): self
    {
        $this->initialized['employeeId'] = true;
        $this->employeeId = $employeeId;

        return $this;
    }
}
