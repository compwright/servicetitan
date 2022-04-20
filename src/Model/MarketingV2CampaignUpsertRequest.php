<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class MarketingV2CampaignUpsertRequest
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $businessUnitId;
    /**
     * @var string|null
     */
    protected $dnis;
    /**
     * @var int
     */
    protected $categoryId;
    /**
     * @var bool
     */
    protected $active;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getBusinessUnitId(): int
    {
        return $this->businessUnitId;
    }

    public function setBusinessUnitId(int $businessUnitId): self
    {
        $this->businessUnitId = $businessUnitId;

        return $this;
    }

    public function getDnis(): ?string
    {
        return $this->dnis;
    }

    public function setDnis(?string $dnis): self
    {
        $this->dnis = $dnis;

        return $this;
    }

    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    public function setCategoryId(int $categoryId): self
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }
}
