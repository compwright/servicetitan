<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class MarketingAdsV2CreateWebBookingAttributionRequest
{
    /**
     * The id of the booking entity in ServiceTitan.
     *
     * @var int
     */
    protected $bookingId;
    /**
     * The web session that the booking should be attributed to.
     *
     * @var mixed
     */
    protected $webSessionData;

    /**
     * The id of the booking entity in ServiceTitan.
     */
    public function getBookingId(): int
    {
        return $this->bookingId;
    }

    /**
     * The id of the booking entity in ServiceTitan.
     */
    public function setBookingId(int $bookingId): self
    {
        $this->bookingId = $bookingId;

        return $this;
    }

    /**
     * The web session that the booking should be attributed to.
     *
     * @return mixed
     */
    public function getWebSessionData()
    {
        return $this->webSessionData;
    }

    /**
     * The web session that the booking should be attributed to.
     *
     * @param mixed $webSessionData
     */
    public function setWebSessionData($webSessionData): self
    {
        $this->webSessionData = $webSessionData;

        return $this;
    }
}
