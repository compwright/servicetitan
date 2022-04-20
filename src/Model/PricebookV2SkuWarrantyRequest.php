<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class PricebookV2SkuWarrantyRequest
{
    /**
     * Warranty duration.
     *
     * @var int
     */
    protected $duration;
    /**
     * Description of the warranty included in this SKU.
     *
     * @var string|null
     */
    protected $description;

    /**
     * Warranty duration.
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Warranty duration.
     */
    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Description of the warranty included in this SKU.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Description of the warranty included in this SKU.
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
