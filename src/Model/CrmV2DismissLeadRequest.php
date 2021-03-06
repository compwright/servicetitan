<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class CrmV2DismissLeadRequest
{
    /**
     * Select a Call Reason to associate to a Booking that’s being dismissed for reporting purposes.
     *
     * @var int
     */
    protected $dismissingReasonId;

    /**
     * Select a Call Reason to associate to a Booking that’s being dismissed for reporting purposes.
     */
    public function getDismissingReasonId(): int
    {
        return $this->dismissingReasonId;
    }

    /**
     * Select a Call Reason to associate to a Booking that’s being dismissed for reporting purposes.
     */
    public function setDismissingReasonId(int $dismissingReasonId): self
    {
        $this->dismissingReasonId = $dismissingReasonId;

        return $this;
    }
}
