<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class InventoryV2CustomFieldOperationRequest
{
    /**
     * Id of inventory transaction where custom fields will be updated.
     *
     * @var int
     */
    protected $objectId;
    /**
     * Collection of custom fields to be updated.
     *
     * @var InventoryV2CustomFieldRequest[]
     */
    protected $customFields;

    /**
     * Id of inventory transaction where custom fields will be updated.
     */
    public function getObjectId(): int
    {
        return $this->objectId;
    }

    /**
     * Id of inventory transaction where custom fields will be updated.
     */
    public function setObjectId(int $objectId): self
    {
        $this->objectId = $objectId;

        return $this;
    }

    /**
     * Collection of custom fields to be updated.
     *
     * @return InventoryV2CustomFieldRequest[]
     */
    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    /**
     * Collection of custom fields to be updated.
     *
     * @param InventoryV2CustomFieldRequest[] $customFields
     */
    public function setCustomFields(array $customFields): self
    {
        $this->customFields = $customFields;

        return $this;
    }
}
