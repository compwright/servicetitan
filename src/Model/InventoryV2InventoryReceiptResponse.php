<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class InventoryV2InventoryReceiptResponse
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
     * Receipt Id.
     *
     * @var int
     */
    protected $id;
    /**
     * Is active.
     *
     * @var bool
     */
    protected $active;
    /**
     * Number.
     *
     * @var string
     */
    protected $number;
    /**
     * Vendor invoice number.
     *
     * @var string
     */
    protected $vendorInvoiceNumber;
    /**
     * User who created this receipt.
     *
     * @var int|null
     */
    protected $createdById;
    /**
     * Memo/summary field.
     *
     * @var string
     */
    protected $memo;
    /**
     * Id of purchase order.
     *
     * @var int
     */
    protected $purchaseOrderId;
    /**
     * Id of bill.
     *
     * @var int|null
     */
    protected $billId;
    /**
     * Id of job.
     *
     * @var int|null
     */
    protected $jobId;
    /**
     * Id of business unit.
     *
     * @var int|null
     */
    protected $businessUnitId;
    /**
     * Id of vendor.
     *
     * @var int
     */
    protected $vendorId;
    /**
     * Id of technician.
     *
     * @var int|null
     */
    protected $technicianId;
    /**
     * Id of inventory location.
     *
     * @var int
     */
    protected $inventoryLocationId;
    /**
     * Ship to address.
     *
     * @var mixed|null
     */
    protected $shipTo;
    /**
     * Ship to description.
     *
     * @var string
     */
    protected $shipToDescription;
    /**
     * Receipt total, including tax and shipping.
     *
     * @var float
     */
    protected $receiptAmount;
    /**
     * Receipt tax.
     *
     * @var float
     */
    protected $taxAmount;
    /**
     * Receipt shipping cost.
     *
     * @var float
     */
    protected $shippingAmount;
    /**
     * Date received.
     *
     * @var \DateTime|null
     */
    protected $receivedOn;
    /**
     * System created date.
     *
     * @var \DateTime
     */
    protected $createdOn;
    /**
     * last time receipt was modified.
     *
     * @var \DateTime
     */
    protected $modifiedOn;
    /**
     * Id of batch.
     *
     * @var int|null
     */
    protected $batchId;
    /**
     * Sync status.
     */
    protected $syncStatus;
    /**
     * Collection of receipt items.
     *
     * @var list<InventoryV2InventoryReceiptItemResponse>
     */
    protected $items;
    /**
     * Collection of custom fields.
     *
     * @var list<InventoryV2CustomFieldResponse>
     */
    protected $customFields;

    /**
     * Receipt Id.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Receipt Id.
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Is active.
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * Is active.
     */
    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;

        return $this;
    }

    /**
     * Number.
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * Number.
     */
    public function setNumber(string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;

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
        $this->initialized['vendorInvoiceNumber'] = true;
        $this->vendorInvoiceNumber = $vendorInvoiceNumber;

        return $this;
    }

    /**
     * User who created this receipt.
     */
    public function getCreatedById(): ?int
    {
        return $this->createdById;
    }

    /**
     * User who created this receipt.
     */
    public function setCreatedById(?int $createdById): self
    {
        $this->initialized['createdById'] = true;
        $this->createdById = $createdById;

        return $this;
    }

    /**
     * Memo/summary field.
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * Memo/summary field.
     */
    public function setMemo(string $memo): self
    {
        $this->initialized['memo'] = true;
        $this->memo = $memo;

        return $this;
    }

    /**
     * Id of purchase order.
     */
    public function getPurchaseOrderId(): int
    {
        return $this->purchaseOrderId;
    }

    /**
     * Id of purchase order.
     */
    public function setPurchaseOrderId(int $purchaseOrderId): self
    {
        $this->initialized['purchaseOrderId'] = true;
        $this->purchaseOrderId = $purchaseOrderId;

        return $this;
    }

    /**
     * Id of bill.
     */
    public function getBillId(): ?int
    {
        return $this->billId;
    }

    /**
     * Id of bill.
     */
    public function setBillId(?int $billId): self
    {
        $this->initialized['billId'] = true;
        $this->billId = $billId;

        return $this;
    }

    /**
     * Id of job.
     */
    public function getJobId(): ?int
    {
        return $this->jobId;
    }

    /**
     * Id of job.
     */
    public function setJobId(?int $jobId): self
    {
        $this->initialized['jobId'] = true;
        $this->jobId = $jobId;

        return $this;
    }

    /**
     * Id of business unit.
     */
    public function getBusinessUnitId(): ?int
    {
        return $this->businessUnitId;
    }

    /**
     * Id of business unit.
     */
    public function setBusinessUnitId(?int $businessUnitId): self
    {
        $this->initialized['businessUnitId'] = true;
        $this->businessUnitId = $businessUnitId;

        return $this;
    }

    /**
     * Id of vendor.
     */
    public function getVendorId(): int
    {
        return $this->vendorId;
    }

    /**
     * Id of vendor.
     */
    public function setVendorId(int $vendorId): self
    {
        $this->initialized['vendorId'] = true;
        $this->vendorId = $vendorId;

        return $this;
    }

    /**
     * Id of technician.
     */
    public function getTechnicianId(): ?int
    {
        return $this->technicianId;
    }

    /**
     * Id of technician.
     */
    public function setTechnicianId(?int $technicianId): self
    {
        $this->initialized['technicianId'] = true;
        $this->technicianId = $technicianId;

        return $this;
    }

    /**
     * Id of inventory location.
     */
    public function getInventoryLocationId(): int
    {
        return $this->inventoryLocationId;
    }

    /**
     * Id of inventory location.
     */
    public function setInventoryLocationId(int $inventoryLocationId): self
    {
        $this->initialized['inventoryLocationId'] = true;
        $this->inventoryLocationId = $inventoryLocationId;

        return $this;
    }

    /**
     * Ship to address.
     */
    public function getShipTo()
    {
        return $this->shipTo;
    }

    /**
     * Ship to address.
     */
    public function setShipTo($shipTo): self
    {
        $this->initialized['shipTo'] = true;
        $this->shipTo = $shipTo;

        return $this;
    }

    /**
     * Ship to description.
     */
    public function getShipToDescription(): string
    {
        return $this->shipToDescription;
    }

    /**
     * Ship to description.
     */
    public function setShipToDescription(string $shipToDescription): self
    {
        $this->initialized['shipToDescription'] = true;
        $this->shipToDescription = $shipToDescription;

        return $this;
    }

    /**
     * Receipt total, including tax and shipping.
     */
    public function getReceiptAmount(): float
    {
        return $this->receiptAmount;
    }

    /**
     * Receipt total, including tax and shipping.
     */
    public function setReceiptAmount(float $receiptAmount): self
    {
        $this->initialized['receiptAmount'] = true;
        $this->receiptAmount = $receiptAmount;

        return $this;
    }

    /**
     * Receipt tax.
     */
    public function getTaxAmount(): float
    {
        return $this->taxAmount;
    }

    /**
     * Receipt tax.
     */
    public function setTaxAmount(float $taxAmount): self
    {
        $this->initialized['taxAmount'] = true;
        $this->taxAmount = $taxAmount;

        return $this;
    }

    /**
     * Receipt shipping cost.
     */
    public function getShippingAmount(): float
    {
        return $this->shippingAmount;
    }

    /**
     * Receipt shipping cost.
     */
    public function setShippingAmount(float $shippingAmount): self
    {
        $this->initialized['shippingAmount'] = true;
        $this->shippingAmount = $shippingAmount;

        return $this;
    }

    /**
     * Date received.
     */
    public function getReceivedOn(): ?\DateTime
    {
        return $this->receivedOn;
    }

    /**
     * Date received.
     */
    public function setReceivedOn(?\DateTime $receivedOn): self
    {
        $this->initialized['receivedOn'] = true;
        $this->receivedOn = $receivedOn;

        return $this;
    }

    /**
     * System created date.
     */
    public function getCreatedOn(): \DateTime
    {
        return $this->createdOn;
    }

    /**
     * System created date.
     */
    public function setCreatedOn(\DateTime $createdOn): self
    {
        $this->initialized['createdOn'] = true;
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * last time receipt was modified.
     */
    public function getModifiedOn(): \DateTime
    {
        return $this->modifiedOn;
    }

    /**
     * last time receipt was modified.
     */
    public function setModifiedOn(\DateTime $modifiedOn): self
    {
        $this->initialized['modifiedOn'] = true;
        $this->modifiedOn = $modifiedOn;

        return $this;
    }

    /**
     * Id of batch.
     */
    public function getBatchId(): ?int
    {
        return $this->batchId;
    }

    /**
     * Id of batch.
     */
    public function setBatchId(?int $batchId): self
    {
        $this->initialized['batchId'] = true;
        $this->batchId = $batchId;

        return $this;
    }

    /**
     * Sync status.
     */
    public function getSyncStatus()
    {
        return $this->syncStatus;
    }

    /**
     * Sync status.
     */
    public function setSyncStatus($syncStatus): self
    {
        $this->initialized['syncStatus'] = true;
        $this->syncStatus = $syncStatus;

        return $this;
    }

    /**
     * Collection of receipt items.
     *
     * @return list<InventoryV2InventoryReceiptItemResponse>
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * Collection of receipt items.
     *
     * @param list<InventoryV2InventoryReceiptItemResponse> $items
     */
    public function setItems(array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;

        return $this;
    }

    /**
     * Collection of custom fields.
     *
     * @return list<InventoryV2CustomFieldResponse>
     */
    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    /**
     * Collection of custom fields.
     *
     * @param list<InventoryV2CustomFieldResponse> $customFields
     */
    public function setCustomFields(array $customFields): self
    {
        $this->initialized['customFields'] = true;
        $this->customFields = $customFields;

        return $this;
    }
}
