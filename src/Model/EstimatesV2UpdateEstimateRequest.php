<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class EstimatesV2UpdateEstimateRequest
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
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $summary;
    /**
     * @var float|null
     */
    protected $tax;
    /**
     * @var list<EstimatesV2EstimateItemCreateUpdateRequest>|null
     */
    protected $items;
    /**
     * @var list<EstimatesV2ExternalLinkInModel>|null
     */
    protected $externalLinks;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): self
    {
        $this->initialized['summary'] = true;
        $this->summary = $summary;

        return $this;
    }

    public function getTax(): ?float
    {
        return $this->tax;
    }

    public function setTax(?float $tax): self
    {
        $this->initialized['tax'] = true;
        $this->tax = $tax;

        return $this;
    }

    /**
     * @return list<EstimatesV2EstimateItemCreateUpdateRequest>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param list<EstimatesV2EstimateItemCreateUpdateRequest>|null $items
     */
    public function setItems(?array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;

        return $this;
    }

    /**
     * @return list<EstimatesV2ExternalLinkInModel>|null
     */
    public function getExternalLinks(): ?array
    {
        return $this->externalLinks;
    }

    /**
     * @param list<EstimatesV2ExternalLinkInModel>|null $externalLinks
     */
    public function setExternalLinks(?array $externalLinks): self
    {
        $this->initialized['externalLinks'] = true;
        $this->externalLinks = $externalLinks;

        return $this;
    }
}
