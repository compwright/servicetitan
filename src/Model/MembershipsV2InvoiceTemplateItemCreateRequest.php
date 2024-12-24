<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class MembershipsV2InvoiceTemplateItemCreateRequest
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
     * Linked SKU ID.
     *
     * @var int
     */
    protected $skuId;
    /**
     * Quantity.
     *
     * @var float
     */
    protected $quantity;
    /**
     * Unit price.
     *
     * @var float
     */
    protected $unitPrice;
    /**
     * Whether invoice item is add-on.
     *
     * @var bool
     */
    protected $isAddOn;
    /**
     * The invoice item ID that created this invoice template item via ModifyMembershipWorkflowAction.
     *
     * @var int|null
     */
    protected $workflowActionItemId;
    /**
     * Item description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Materials cost.
     *
     * @var float|null
     */
    protected $cost;
    /**
     * Sold/billable hours.
     *
     * @var float|null
     */
    protected $hours;

    /**
     * Linked SKU ID.
     */
    public function getSkuId(): int
    {
        return $this->skuId;
    }

    /**
     * Linked SKU ID.
     */
    public function setSkuId(int $skuId): self
    {
        $this->initialized['skuId'] = true;
        $this->skuId = $skuId;

        return $this;
    }

    /**
     * Quantity.
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * Quantity.
     */
    public function setQuantity(float $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Unit price.
     */
    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }

    /**
     * Unit price.
     */
    public function setUnitPrice(float $unitPrice): self
    {
        $this->initialized['unitPrice'] = true;
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * Whether invoice item is add-on.
     */
    public function getIsAddOn(): bool
    {
        return $this->isAddOn;
    }

    /**
     * Whether invoice item is add-on.
     */
    public function setIsAddOn(bool $isAddOn): self
    {
        $this->initialized['isAddOn'] = true;
        $this->isAddOn = $isAddOn;

        return $this;
    }

    /**
     * The invoice item ID that created this invoice template item via ModifyMembershipWorkflowAction.
     */
    public function getWorkflowActionItemId(): ?int
    {
        return $this->workflowActionItemId;
    }

    /**
     * The invoice item ID that created this invoice template item via ModifyMembershipWorkflowAction.
     */
    public function setWorkflowActionItemId(?int $workflowActionItemId): self
    {
        $this->initialized['workflowActionItemId'] = true;
        $this->workflowActionItemId = $workflowActionItemId;

        return $this;
    }

    /**
     * Item description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Item description.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Materials cost.
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }

    /**
     * Materials cost.
     */
    public function setCost(?float $cost): self
    {
        $this->initialized['cost'] = true;
        $this->cost = $cost;

        return $this;
    }

    /**
     * Sold/billable hours.
     */
    public function getHours(): ?float
    {
        return $this->hours;
    }

    /**
     * Sold/billable hours.
     */
    public function setHours(?float $hours): self
    {
        $this->initialized['hours'] = true;
        $this->hours = $hours;

        return $this;
    }
}
