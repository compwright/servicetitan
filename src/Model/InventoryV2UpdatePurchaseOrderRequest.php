<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class InventoryV2UpdatePurchaseOrderRequest
{
    /**
     * Id of the vendor for this PO.
     *
     * @var int
     */
    protected $vendorId;
    /**
     * Id of the purchase order type for this PO.
     *
     * @var int
     */
    protected $typeId;
    /**
     * Id of the business unit for this PO.
     *
     * @var int
     */
    protected $businessUnitId;
    /**
     * Id of the inventory location for this PO.
     *
     * @var int
     */
    protected $inventoryLocationId;
    /**
     * Id of the job for this PO, if not specified non-job PO will be created.
     *
     * @var int
     */
    protected $jobId;
    /**
     * Id of the technician for this PO.
     *
     * @var int
     */
    protected $technicianId;
    /**
     * Id of the project for this PO.
     *
     * @var int
     */
    protected $projectId;
    /**
     * Address where PO will be shipped.
     *
     * @var mixed
     */
    protected $shipTo;
    /**
     * Vendor invoice number.
     *
     * @var string
     */
    protected $vendorInvoiceNumber;
    /**
     * Indicates whether this PO will impact technician's payroll.
     *
     * @var bool
     */
    protected $impactsTechnicianPayroll;
    /**
     * Summary/memo for this PO.
     *
     * @var string
     */
    protected $memo;
    /**
     * PO date.
     *
     * @var \DateTime
     */
    protected $date;
    /**
     * PO Required On date.
     *
     * @var \DateTime
     */
    protected $requiredOn;
    /**
     * Tax.
     *
     * @var float
     */
    protected $tax;
    /**
     * Shipping cost.
     *
     * @var float
     */
    protected $shipping;
    /**
     * List of new/updated PO items. Every active PO item that is not on this list will be marked as inactive.
     *
     * @var InventoryV2UpdatePurchaseOrderItemRequest[]
     */
    protected $items;

    /**
     * Id of the vendor for this PO.
     */
    public function getVendorId(): int
    {
        return $this->vendorId;
    }

    /**
     * Id of the vendor for this PO.
     */
    public function setVendorId(int $vendorId): self
    {
        $this->vendorId = $vendorId;

        return $this;
    }

    /**
     * Id of the purchase order type for this PO.
     */
    public function getTypeId(): int
    {
        return $this->typeId;
    }

    /**
     * Id of the purchase order type for this PO.
     */
    public function setTypeId(int $typeId): self
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * Id of the business unit for this PO.
     */
    public function getBusinessUnitId(): int
    {
        return $this->businessUnitId;
    }

    /**
     * Id of the business unit for this PO.
     */
    public function setBusinessUnitId(int $businessUnitId): self
    {
        $this->businessUnitId = $businessUnitId;

        return $this;
    }

    /**
     * Id of the inventory location for this PO.
     */
    public function getInventoryLocationId(): int
    {
        return $this->inventoryLocationId;
    }

    /**
     * Id of the inventory location for this PO.
     */
    public function setInventoryLocationId(int $inventoryLocationId): self
    {
        $this->inventoryLocationId = $inventoryLocationId;

        return $this;
    }

    /**
     * Id of the job for this PO, if not specified non-job PO will be created.
     */
    public function getJobId(): int
    {
        return $this->jobId;
    }

    /**
     * Id of the job for this PO, if not specified non-job PO will be created.
     */
    public function setJobId(int $jobId): self
    {
        $this->jobId = $jobId;

        return $this;
    }

    /**
     * Id of the technician for this PO.
     */
    public function getTechnicianId(): int
    {
        return $this->technicianId;
    }

    /**
     * Id of the technician for this PO.
     */
    public function setTechnicianId(int $technicianId): self
    {
        $this->technicianId = $technicianId;

        return $this;
    }

    /**
     * Id of the project for this PO.
     */
    public function getProjectId(): int
    {
        return $this->projectId;
    }

    /**
     * Id of the project for this PO.
     */
    public function setProjectId(int $projectId): self
    {
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * Address where PO will be shipped.
     *
     * @return mixed
     */
    public function getShipTo()
    {
        return $this->shipTo;
    }

    /**
     * Address where PO will be shipped.
     *
     * @param mixed $shipTo
     */
    public function setShipTo($shipTo): self
    {
        $this->shipTo = $shipTo;

        return $this;
    }

    /**
     * Vendor invoice number.
     */
    public function getVendorInvoiceNumber(): string
    {
        return $this->vendorInvoiceNumber;
    }

    /**
     * Vendor invoice number.
     */
    public function setVendorInvoiceNumber(string $vendorInvoiceNumber): self
    {
        $this->vendorInvoiceNumber = $vendorInvoiceNumber;

        return $this;
    }

    /**
     * Indicates whether this PO will impact technician's payroll.
     */
    public function getImpactsTechnicianPayroll(): bool
    {
        return $this->impactsTechnicianPayroll;
    }

    /**
     * Indicates whether this PO will impact technician's payroll.
     */
    public function setImpactsTechnicianPayroll(bool $impactsTechnicianPayroll): self
    {
        $this->impactsTechnicianPayroll = $impactsTechnicianPayroll;

        return $this;
    }

    /**
     * Summary/memo for this PO.
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * Summary/memo for this PO.
     */
    public function setMemo(string $memo): self
    {
        $this->memo = $memo;

        return $this;
    }

    /**
     * PO date.
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * PO date.
     */
    public function setDate(\DateTime $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * PO Required On date.
     */
    public function getRequiredOn(): \DateTime
    {
        return $this->requiredOn;
    }

    /**
     * PO Required On date.
     */
    public function setRequiredOn(\DateTime $requiredOn): self
    {
        $this->requiredOn = $requiredOn;

        return $this;
    }

    /**
     * Tax.
     */
    public function getTax(): float
    {
        return $this->tax;
    }

    /**
     * Tax.
     */
    public function setTax(float $tax): self
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * Shipping cost.
     */
    public function getShipping(): float
    {
        return $this->shipping;
    }

    /**
     * Shipping cost.
     */
    public function setShipping(float $shipping): self
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * List of new/updated PO items. Every active PO item that is not on this list will be marked as inactive.
     *
     * @return InventoryV2UpdatePurchaseOrderItemRequest[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * List of new/updated PO items. Every active PO item that is not on this list will be marked as inactive.
     *
     * @param InventoryV2UpdatePurchaseOrderItemRequest[] $items
     */
    public function setItems(array $items): self
    {
        $this->items = $items;

        return $this;
    }
}
