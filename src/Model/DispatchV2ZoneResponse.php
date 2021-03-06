<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class DispatchV2ZoneResponse
{
    /**
     * Unique id of the zone record.
     *
     * @var int
     */
    protected $id;
    /**
     * Whether the zone is enabled.
     *
     * @var bool
     */
    protected $active;
    /**
     * Descriptive identifier.
     *
     * @var string|null
     */
    protected $name;
    /**
     * A list of assigned zip codes to the zone.
     *
     * @var string[]|null
     */
    protected $zips;
    /**
     * A list of assigned cities to the zone.
     *
     * @var string[]|null
     */
    protected $cities;
    /**
     * A list of assigned territory numbers to the zone.
     *
     * @var string[]|null
     */
    protected $territoryNumbers;
    /**
     * A list of assigned LOCN numbers to the zone.
     *
     * @var string[]|null
     */
    protected $locnNumbers;
    /**
     * User ID who created the zone.
     *
     * @var int
     */
    protected $createdBy;
    /**
     * Date/time (in UTC) the zone was created.
     *
     * @var \DateTime
     */
    protected $createdOn;
    /**
     * Date/time (in UTC) the zone was last modified.
     *
     * @var \DateTime
     */
    protected $modifiedOn;
    /**
     * Whether the service days option is enabled.
     *
     * @var bool
     */
    protected $serviceDaysEnabled;
    /**
     * A list of assigned service days.
     *
     * @var string[]|null
     */
    protected $serviceDays;
    /**
     * A list of assigned business units.
     *
     * @var int[]|null
     */
    protected $businessUnits;

    /**
     * Unique id of the zone record.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Unique id of the zone record.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Whether the zone is enabled.
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * Whether the zone is enabled.
     */
    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Descriptive identifier.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Descriptive identifier.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * A list of assigned zip codes to the zone.
     *
     * @return string[]|null
     */
    public function getZips(): ?array
    {
        return $this->zips;
    }

    /**
     * A list of assigned zip codes to the zone.
     *
     * @param string[]|null $zips
     */
    public function setZips(?array $zips): self
    {
        $this->zips = $zips;

        return $this;
    }

    /**
     * A list of assigned cities to the zone.
     *
     * @return string[]|null
     */
    public function getCities(): ?array
    {
        return $this->cities;
    }

    /**
     * A list of assigned cities to the zone.
     *
     * @param string[]|null $cities
     */
    public function setCities(?array $cities): self
    {
        $this->cities = $cities;

        return $this;
    }

    /**
     * A list of assigned territory numbers to the zone.
     *
     * @return string[]|null
     */
    public function getTerritoryNumbers(): ?array
    {
        return $this->territoryNumbers;
    }

    /**
     * A list of assigned territory numbers to the zone.
     *
     * @param string[]|null $territoryNumbers
     */
    public function setTerritoryNumbers(?array $territoryNumbers): self
    {
        $this->territoryNumbers = $territoryNumbers;

        return $this;
    }

    /**
     * A list of assigned LOCN numbers to the zone.
     *
     * @return string[]|null
     */
    public function getLocnNumbers(): ?array
    {
        return $this->locnNumbers;
    }

    /**
     * A list of assigned LOCN numbers to the zone.
     *
     * @param string[]|null $locnNumbers
     */
    public function setLocnNumbers(?array $locnNumbers): self
    {
        $this->locnNumbers = $locnNumbers;

        return $this;
    }

    /**
     * User ID who created the zone.
     */
    public function getCreatedBy(): int
    {
        return $this->createdBy;
    }

    /**
     * User ID who created the zone.
     */
    public function setCreatedBy(int $createdBy): self
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Date/time (in UTC) the zone was created.
     */
    public function getCreatedOn(): \DateTime
    {
        return $this->createdOn;
    }

    /**
     * Date/time (in UTC) the zone was created.
     */
    public function setCreatedOn(\DateTime $createdOn): self
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * Date/time (in UTC) the zone was last modified.
     */
    public function getModifiedOn(): \DateTime
    {
        return $this->modifiedOn;
    }

    /**
     * Date/time (in UTC) the zone was last modified.
     */
    public function setModifiedOn(\DateTime $modifiedOn): self
    {
        $this->modifiedOn = $modifiedOn;

        return $this;
    }

    /**
     * Whether the service days option is enabled.
     */
    public function getServiceDaysEnabled(): bool
    {
        return $this->serviceDaysEnabled;
    }

    /**
     * Whether the service days option is enabled.
     */
    public function setServiceDaysEnabled(bool $serviceDaysEnabled): self
    {
        $this->serviceDaysEnabled = $serviceDaysEnabled;

        return $this;
    }

    /**
     * A list of assigned service days.
     *
     * @return string[]|null
     */
    public function getServiceDays(): ?array
    {
        return $this->serviceDays;
    }

    /**
     * A list of assigned service days.
     *
     * @param string[]|null $serviceDays
     */
    public function setServiceDays(?array $serviceDays): self
    {
        $this->serviceDays = $serviceDays;

        return $this;
    }

    /**
     * A list of assigned business units.
     *
     * @return int[]|null
     */
    public function getBusinessUnits(): ?array
    {
        return $this->businessUnits;
    }

    /**
     * A list of assigned business units.
     *
     * @param int[]|null $businessUnits
     */
    public function setBusinessUnits(?array $businessUnits): self
    {
        $this->businessUnits = $businessUnits;

        return $this;
    }
}
