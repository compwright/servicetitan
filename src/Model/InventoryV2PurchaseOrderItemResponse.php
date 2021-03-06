<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class InventoryV2PurchaseOrderItemResponse
{
    /**
     * Item Id.
     *
     * @var int
     */
    protected $id;
    /**
     * SKU Id of this item.
     *
     * @var int
     */
    protected $skuId;
    /**
     * Item name.
     *
     * @var string
     */
    protected $skuName;
    /**
     * Item code.
     *
     * @var string
     */
    protected $skuCode;
    /**
     * Item type(material or equipment).
     *
     * @var string
     */
    protected $skuType;
    /**
     * Item description.
     *
     * @var string
     */
    protected $description;
    /**
     * Vendor part number for this item.
     *
     * @var string
     */
    protected $vendorPartNumber;
    /**
     * Item quantity.
     *
     * @var float
     */
    protected $quantity;
    /**
     * Quantity received for this item, PO must have at least one receipt for this to be not 0.
     *
     * @var float
     */
    protected $quantityReceived;
    /**
     * Item cost.
     *
     * @var float
     */
    protected $cost;
    /**
     * Item total cost.
     *
     * @var float
     */
    protected $total;
    /**
     * List of serial numbers.
     *
     * @var InventoryV2SerialNumberResponse[]
     */
    protected $serialNumbers;
    /**
     * Item status.
     *
     * @var string
     */
    protected $status;
    /**
     * Indicates whether item price is charged to customer.
     *
     * @var bool
     */
    protected $chargeable;

    /**
     * Item Id.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Item Id.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * SKU Id of this item.
     */
    public function getSkuId(): int
    {
        return $this->skuId;
    }

    /**
     * SKU Id of this item.
     */
    public function setSkuId(int $skuId): self
    {
        $this->skuId = $skuId;

        return $this;
    }

    /**
     * Item name.
     */
    public function getSkuName(): string
    {
        return $this->skuName;
    }

    /**
     * Item name.
     */
    public function setSkuName(string $skuName): self
    {
        $this->skuName = $skuName;

        return $this;
    }

    /**
     * Item code.
     */
    public function getSkuCode(): string
    {
        return $this->skuCode;
    }

    /**
     * Item code.
     */
    public function setSkuCode(string $skuCode): self
    {
        $this->skuCode = $skuCode;

        return $this;
    }

    /**
     * Item type(material or equipment).
     */
    public function getSkuType(): string
    {
        return $this->skuType;
    }

    /**
     * Item type(material or equipment).
     */
    public function setSkuType(string $skuType): self
    {
        $this->skuType = $skuType;

        return $this;
    }

    /**
     * Item description.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Item description.
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Vendor part number for this item.
     */
    public function getVendorPartNumber(): string
    {
        return $this->vendorPartNumber;
    }

    /**
     * Vendor part number for this item.
     */
    public function setVendorPartNumber(string $vendorPartNumber): self
    {
        $this->vendorPartNumber = $vendorPartNumber;

        return $this;
    }

    /**
     * Item quantity.
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * Item quantity.
     */
    public function setQuantity(float $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Quantity received for this item, PO must have at least one receipt for this to be not 0.
     */
    public function getQuantityReceived(): float
    {
        return $this->quantityReceived;
    }

    /**
     * Quantity received for this item, PO must have at least one receipt for this to be not 0.
     */
    public function setQuantityReceived(float $quantityReceived): self
    {
        $this->quantityReceived = $quantityReceived;

        return $this;
    }

    /**
     * Item cost.
     */
    public function getCost(): float
    {
        return $this->cost;
    }

    /**
     * Item cost.
     */
    public function setCost(float $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Item total cost.
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * Item total cost.
     */
    public function setTotal(float $total): self
    {
        $this->total = $total;

        return $this;
    }

    /**
     * List of serial numbers.
     *
     * @return InventoryV2SerialNumberResponse[]
     */
    public function getSerialNumbers(): array
    {
        return $this->serialNumbers;
    }

    /**
     * List of serial numbers.
     *
     * @param InventoryV2SerialNumberResponse[] $serialNumbers
     */
    public function setSerialNumbers(array $serialNumbers): self
    {
        $this->serialNumbers = $serialNumbers;

        return $this;
    }

    /**
     * Item status.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Item status.
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Indicates whether item price is charged to customer.
     */
    public function getChargeable(): bool
    {
        return $this->chargeable;
    }

    /**
     * Indicates whether item price is charged to customer.
     */
    public function setChargeable(bool $chargeable): self
    {
        $this->chargeable = $chargeable;

        return $this;
    }
}
