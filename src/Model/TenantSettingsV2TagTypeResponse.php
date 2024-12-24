<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class TenantSettingsV2TagTypeResponse
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
     * ID of the tag type.
     *
     * @var int
     */
    protected $id;
    /**
     * Name of the tag type.
     *
     * @var string
     */
    protected $name;
    /**
     * Whether the tag type is active.
     *
     * @var bool
     */
    protected $active;

    /**
     * ID of the tag type.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * ID of the tag type.
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Name of the tag type.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name of the tag type.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Whether the tag type is active.
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * Whether the tag type is active.
     */
    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;

        return $this;
    }
}
