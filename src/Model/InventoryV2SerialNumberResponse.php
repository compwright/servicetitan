<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class InventoryV2SerialNumberResponse
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
     * Id of this serial number.
     *
     * @var int
     */
    protected $id;
    /**
     * Serial number value.
     *
     * @var string
     */
    protected $number;

    /**
     * Id of this serial number.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Id of this serial number.
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Serial number value.
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * Serial number value.
     */
    public function setNumber(string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;

        return $this;
    }
}
