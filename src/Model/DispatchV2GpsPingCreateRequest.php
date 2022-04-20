<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class DispatchV2GpsPingCreateRequest
{
    /**
     * Gets or sets the ID of the object for which location information is provided.
     *
     * @var string
     */
    protected $unitId;
    /**
     * Gets or sets the name of the object for which location information is provided.
     *
     * @var string
     */
    protected $unitName;
    /**
     * Gets or sets the time of the recording.
     *
     * @var \DateTime
     */
    protected $eventTime;
    /**
     * Gets or sets the latitude coordinate of the unit's location at the time of recording.
     *
     * @var float|null
     */
    protected $latitude;
    /**
     * Gets or sets the longitude coordinate of the unit's location at the time of recording.
     *
     * @var float|null
     */
    protected $longitude;
    /**
     * Gets or sets the speed of the vehicle at the time of recording.
     *
     * @var float|null
     */
    protected $speed;
    /**
     * Gets the location's street address.
     *
     * @var string
     */
    protected $street;
    /**
     * Gets the location's city.
     *
     * @var string
     */
    protected $city;
    /**
     * Gets the location's region.
     *
     * @var string
     */
    protected $region;
    /**
     * Gets the location's postal code.
     *
     * @var string
     */
    protected $postalCode;
    /**
     * Gets or sets the response message received from the GPS provider about the unit at the time of recording.
     *
     * @var string
     */
    protected $message;
    /**
     * Unique External ID for data point.
     *
     * @var string
     */
    protected $externalId;
    /**
     * Indicate if gps ping unit is a new one.
     *
     * @var bool
     */
    protected $isNew;
    /**
     * Gets the status message.
     *
     * @var string
     */
    protected $statusMessage;

    /**
     * Gets or sets the ID of the object for which location information is provided.
     */
    public function getUnitId(): string
    {
        return $this->unitId;
    }

    /**
     * Gets or sets the ID of the object for which location information is provided.
     */
    public function setUnitId(string $unitId): self
    {
        $this->unitId = $unitId;

        return $this;
    }

    /**
     * Gets or sets the name of the object for which location information is provided.
     */
    public function getUnitName(): string
    {
        return $this->unitName;
    }

    /**
     * Gets or sets the name of the object for which location information is provided.
     */
    public function setUnitName(string $unitName): self
    {
        $this->unitName = $unitName;

        return $this;
    }

    /**
     * Gets or sets the time of the recording.
     */
    public function getEventTime(): \DateTime
    {
        return $this->eventTime;
    }

    /**
     * Gets or sets the time of the recording.
     */
    public function setEventTime(\DateTime $eventTime): self
    {
        $this->eventTime = $eventTime;

        return $this;
    }

    /**
     * Gets or sets the latitude coordinate of the unit's location at the time of recording.
     */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    /**
     * Gets or sets the latitude coordinate of the unit's location at the time of recording.
     */
    public function setLatitude(?float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Gets or sets the longitude coordinate of the unit's location at the time of recording.
     */
    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    /**
     * Gets or sets the longitude coordinate of the unit's location at the time of recording.
     */
    public function setLongitude(?float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Gets or sets the speed of the vehicle at the time of recording.
     */
    public function getSpeed(): ?float
    {
        return $this->speed;
    }

    /**
     * Gets or sets the speed of the vehicle at the time of recording.
     */
    public function setSpeed(?float $speed): self
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Gets the location's street address.
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * Gets the location's street address.
     */
    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Gets the location's city.
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Gets the location's city.
     */
    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Gets the location's region.
     */
    public function getRegion(): string
    {
        return $this->region;
    }

    /**
     * Gets the location's region.
     */
    public function setRegion(string $region): self
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Gets the location's postal code.
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * Gets the location's postal code.
     */
    public function setPostalCode(string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Gets or sets the response message received from the GPS provider about the unit at the time of recording.
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Gets or sets the response message received from the GPS provider about the unit at the time of recording.
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Unique External ID for data point.
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

    /**
     * Unique External ID for data point.
     */
    public function setExternalId(string $externalId): self
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * Indicate if gps ping unit is a new one.
     */
    public function getIsNew(): bool
    {
        return $this->isNew;
    }

    /**
     * Indicate if gps ping unit is a new one.
     */
    public function setIsNew(bool $isNew): self
    {
        $this->isNew = $isNew;

        return $this;
    }

    /**
     * Gets the status message.
     */
    public function getStatusMessage(): string
    {
        return $this->statusMessage;
    }

    /**
     * Gets the status message.
     */
    public function setStatusMessage(string $statusMessage): self
    {
        $this->statusMessage = $statusMessage;

        return $this;
    }
}
