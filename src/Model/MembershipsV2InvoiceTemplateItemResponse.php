<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class MembershipsV2InvoiceTemplateItemResponse
{
    /**
     * Invoice template item ID.
     *
     * @var int
     */
    protected $id;
    /**
     * Linked SKU ID.
     *
     * @var int
     */
    protected $skuId;
    /**
     * The type of linked SKU.
     *
     * @var mixed
     */
    protected $skuType;
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
     * Import ID.
     *
     * @var string|null
     */
    protected $importId;
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
     * Invoice template item ID.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Invoice template item ID.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

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
        $this->skuId = $skuId;

        return $this;
    }

    /**
     * The type of linked SKU.
     *
     * @return mixed
     */
    public function getSkuType()
    {
        return $this->skuType;
    }

    /**
     * The type of linked SKU.
     *
     * @param mixed $skuType
     */
    public function setSkuType($skuType): self
    {
        $this->skuType = $skuType;

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
        $this->isAddOn = $isAddOn;

        return $this;
    }

    /**
     * Import ID.
     */
    public function getImportId(): ?string
    {
        return $this->importId;
    }

    /**
     * Import ID.
     */
    public function setImportId(?string $importId): self
    {
        $this->importId = $importId;

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
        $this->hours = $hours;

        return $this;
    }
}
