<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class MarketingV2CampaignResponse
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
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var \DateTime
     */
    protected $modifiedOn;
    /**
     * @var bool
     */
    protected $active;
    /**
     * @var mixed|null
     */
    protected $category;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getModifiedOn(): \DateTime
    {
        return $this->modifiedOn;
    }

    public function setModifiedOn(\DateTime $modifiedOn): self
    {
        $this->initialized['modifiedOn'] = true;
        $this->modifiedOn = $modifiedOn;

        return $this;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;

        return $this;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;

        return $this;
    }
}
