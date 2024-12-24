<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class InventoryV2ExternalDataUpdateRequest
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
     * Items that are created with a specific guid, could be fetched/updated/removed
     * only when the same application guid is provided.
     *
     * @var string
     */
    protected $applicationGuid;
    /**
     * External data list. This list must include all of the external data for the job.
     * If job A has custom data with keys X and Y and this field only contains an item
     * with a key X, then custom data with a key Y on job A will be removed.
     *
     * @var list<InventoryV2ExternalDataModel>
     */
    protected $externalData;

    /**
     * Items that are created with a specific guid, could be fetched/updated/removed
     * only when the same application guid is provided.
     */
    public function getApplicationGuid(): string
    {
        return $this->applicationGuid;
    }

    /**
     * Items that are created with a specific guid, could be fetched/updated/removed
     * only when the same application guid is provided.
     */
    public function setApplicationGuid(string $applicationGuid): self
    {
        $this->initialized['applicationGuid'] = true;
        $this->applicationGuid = $applicationGuid;

        return $this;
    }

    /**
     * External data list. This list must include all of the external data for the job.
     * If job A has custom data with keys X and Y and this field only contains an item
     * with a key X, then custom data with a key Y on job A will be removed.
     *
     * @return list<InventoryV2ExternalDataModel>
     */
    public function getExternalData(): array
    {
        return $this->externalData;
    }

    /**
     * External data list. This list must include all of the external data for the job.
     * If job A has custom data with keys X and Y and this field only contains an item
     * with a key X, then custom data with a key Y on job A will be removed.
     *
     * @param list<InventoryV2ExternalDataModel> $externalData
     */
    public function setExternalData(array $externalData): self
    {
        $this->initialized['externalData'] = true;
        $this->externalData = $externalData;

        return $this;
    }
}
