<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class InventoryV2CustomFieldUpdateRequest
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
     * Collection of custom field update operations.
     *
     * @var list<InventoryV2CustomFieldOperationRequest>
     */
    protected $operations;

    /**
     * Collection of custom field update operations.
     *
     * @return list<InventoryV2CustomFieldOperationRequest>
     */
    public function getOperations(): array
    {
        return $this->operations;
    }

    /**
     * Collection of custom field update operations.
     *
     * @param list<InventoryV2CustomFieldOperationRequest> $operations
     */
    public function setOperations(array $operations): self
    {
        $this->initialized['operations'] = true;
        $this->operations = $operations;

        return $this;
    }
}
