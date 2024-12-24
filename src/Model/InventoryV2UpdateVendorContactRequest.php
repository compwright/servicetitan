<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class InventoryV2UpdateVendorContactRequest
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
     * Id of Vendor Contact to update.
     *
     * @var int|null
     */
    protected $id;
    /**
     * Name.
     *
     * @var string
     */
    protected $name;
    /**
     * Email.
     *
     * @var string
     */
    protected $email;

    /**
     * Id of Vendor Contact to update.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Id of Vendor Contact to update.
     */
    public function setId(?int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Email.
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Email.
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }
}
