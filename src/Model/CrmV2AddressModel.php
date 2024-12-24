<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class CrmV2AddressModel
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
     * Booking address street.
     *
     * @var string
     */
    protected $street;
    /**
     * Booking address unit.
     *
     * @var string|null
     */
    protected $unit;
    /**
     * Booking address city.
     *
     * @var string
     */
    protected $city;
    /**
     * Booking address state.
     *
     * @var string
     */
    protected $state;
    /**
     * Booking address zip code.
     *
     * @var string
     */
    protected $zip;
    /**
     * Booking address country.
     *
     * @var string
     */
    protected $country;

    /**
     * Booking address street.
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * Booking address street.
     */
    public function setStreet(string $street): self
    {
        $this->initialized['street'] = true;
        $this->street = $street;

        return $this;
    }

    /**
     * Booking address unit.
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
     * Booking address unit.
     */
    public function setUnit(?string $unit): self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;

        return $this;
    }

    /**
     * Booking address city.
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Booking address city.
     */
    public function setCity(string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;

        return $this;
    }

    /**
     * Booking address state.
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * Booking address state.
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }

    /**
     * Booking address zip code.
     */
    public function getZip(): string
    {
        return $this->zip;
    }

    /**
     * Booking address zip code.
     */
    public function setZip(string $zip): self
    {
        $this->initialized['zip'] = true;
        $this->zip = $zip;

        return $this;
    }

    /**
     * Booking address country.
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * Booking address country.
     */
    public function setCountry(string $country): self
    {
        $this->initialized['country'] = true;
        $this->country = $country;

        return $this;
    }
}
