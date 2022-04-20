<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class InventoryV2UpdateAddressRequest
{
    /**
     * Description of the shipping address, like customer address or technician's truck for example.
     *
     * @var string
     */
    protected $description;
    /**
     * Actual shipping address.
     *
     * @var mixed
     */
    protected $address;

    /**
     * Description of the shipping address, like customer address or technician's truck for example.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Description of the shipping address, like customer address or technician's truck for example.
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Actual shipping address.
     *
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Actual shipping address.
     *
     * @param mixed $address
     */
    public function setAddress($address): self
    {
        $this->address = $address;

        return $this;
    }
}
