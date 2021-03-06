<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class InventoryV2InventoryAdjustmentResponse
{
    /**
     * Inventory adjustment Id.
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
     * Reference number.
     *
     * @var string
     */
    protected $referenceNumber;
    /**
     * Inventory Adjustment Type.
     *
     * @var string
     */
    protected $type;
    /**
     * Id of Inventory Location for this adjustment.
     *
     * @var int
     */
    protected $inventoryLocationId;
    /**
     * Business Unit Id.
     *
     * @var int|null
     */
    protected $businessUnitId;
    /**
     * Employee who created this adjustment.
     *
     * @var int|null
     */
    protected $createdById;
    /**
     * memo/summary field.
     *
     * @var string
     */
    protected $memo;
    /**
     * Adjustment date.
     *
     * @var \DateTime
     */
    protected $date;
    /**
     * system created date.
     *
     * @var \DateTime
     */
    protected $createdOn;
    /**
     * last time adjustment was modified date.
     *
     * @var \DateTime
     */
    protected $modifiedOn;
    /**
     * Batch Id.
     *
     * @var int|null
     */
    protected $batchId;
    /**
     * Sync status.
     *
     * @var mixed
     */
    protected $syncStatus;
    /**
     * Collection of adjustment items.
     *
     * @var InventoryV2InventoryAdjustmentItemResponse[]
     */
    protected $items;
    /**
     * Collection of custom fields.
     *
     * @var InventoryV2CustomFieldResponse[]
     */
    protected $customFields;

    /**
     * Inventory adjustment Id.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Inventory adjustment Id.
     */
    public function setId(int $id): self
    {
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
        $this->number = $number;

        return $this;
    }

    /**
     * Reference number.
     */
    public function getReferenceNumber(): string
    {
        return $this->referenceNumber;
    }

    /**
     * Reference number.
     */
    public function setReferenceNumber(string $referenceNumber): self
    {
        $this->referenceNumber = $referenceNumber;

        return $this;
    }

    /**
     * Inventory Adjustment Type.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Inventory Adjustment Type.
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Id of Inventory Location for this adjustment.
     */
    public function getInventoryLocationId(): int
    {
        return $this->inventoryLocationId;
    }

    /**
     * Id of Inventory Location for this adjustment.
     */
    public function setInventoryLocationId(int $inventoryLocationId): self
    {
        $this->inventoryLocationId = $inventoryLocationId;

        return $this;
    }

    /**
     * Business Unit Id.
     */
    public function getBusinessUnitId(): ?int
    {
        return $this->businessUnitId;
    }

    /**
     * Business Unit Id.
     */
    public function setBusinessUnitId(?int $businessUnitId): self
    {
        $this->businessUnitId = $businessUnitId;

        return $this;
    }

    /**
     * Employee who created this adjustment.
     */
    public function getCreatedById(): ?int
    {
        return $this->createdById;
    }

    /**
     * Employee who created this adjustment.
     */
    public function setCreatedById(?int $createdById): self
    {
        $this->createdById = $createdById;

        return $this;
    }

    /**
     * memo/summary field.
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * memo/summary field.
     */
    public function setMemo(string $memo): self
    {
        $this->memo = $memo;

        return $this;
    }

    /**
     * Adjustment date.
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * Adjustment date.
     */
    public function setDate(\DateTime $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * system created date.
     */
    public function getCreatedOn(): \DateTime
    {
        return $this->createdOn;
    }

    /**
     * system created date.
     */
    public function setCreatedOn(\DateTime $createdOn): self
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * last time adjustment was modified date.
     */
    public function getModifiedOn(): \DateTime
    {
        return $this->modifiedOn;
    }

    /**
     * last time adjustment was modified date.
     */
    public function setModifiedOn(\DateTime $modifiedOn): self
    {
        $this->modifiedOn = $modifiedOn;

        return $this;
    }

    /**
     * Batch Id.
     */
    public function getBatchId(): ?int
    {
        return $this->batchId;
    }

    /**
     * Batch Id.
     */
    public function setBatchId(?int $batchId): self
    {
        $this->batchId = $batchId;

        return $this;
    }

    /**
     * Sync status.
     *
     * @return mixed
     */
    public function getSyncStatus()
    {
        return $this->syncStatus;
    }

    /**
     * Sync status.
     *
     * @param mixed $syncStatus
     */
    public function setSyncStatus($syncStatus): self
    {
        $this->syncStatus = $syncStatus;

        return $this;
    }

    /**
     * Collection of adjustment items.
     *
     * @return InventoryV2InventoryAdjustmentItemResponse[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * Collection of adjustment items.
     *
     * @param InventoryV2InventoryAdjustmentItemResponse[] $items
     */
    public function setItems(array $items): self
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Collection of custom fields.
     *
     * @return InventoryV2CustomFieldResponse[]
     */
    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    /**
     * Collection of custom fields.
     *
     * @param InventoryV2CustomFieldResponse[] $customFields
     */
    public function setCustomFields(array $customFields): self
    {
        $this->customFields = $customFields;

        return $this;
    }
}
