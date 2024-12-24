<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class AccountingV2RoyaltyResponse
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
     * @var string|null
     */
    protected $status;
    /**
     * @var \DateTime|null
     */
    protected $date;
    /**
     * @var \DateTime|null
     */
    protected $sentOn;
    /**
     * @var string|null
     */
    protected $memo;

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(?\DateTime $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    public function getSentOn(): ?\DateTime
    {
        return $this->sentOn;
    }

    public function setSentOn(?\DateTime $sentOn): self
    {
        $this->initialized['sentOn'] = true;
        $this->sentOn = $sentOn;

        return $this;
    }

    public function getMemo(): ?string
    {
        return $this->memo;
    }

    public function setMemo(?string $memo): self
    {
        $this->initialized['memo'] = true;
        $this->memo = $memo;

        return $this;
    }
}
