<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class PricebookV2PricebookBulkCreateRequest
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
     * @var list<PricebookV2ServiceBulkCreateRequest>|null
     */
    protected $services;
    /**
     * @var list<PricebookV2EquipmentBulkCreateRequest>|null
     */
    protected $equipment;
    /**
     * @var list<PricebookV2MaterialBulkCreateRequest>|null
     */
    protected $materials;
    /**
     * @var list<PricebookV2DiscountAndFeesBulkCreateRequest>|null
     */
    protected $discountAndFees;

    /**
     * @return list<PricebookV2ServiceBulkCreateRequest>|null
     */
    public function getServices(): ?array
    {
        return $this->services;
    }

    /**
     * @param list<PricebookV2ServiceBulkCreateRequest>|null $services
     */
    public function setServices(?array $services): self
    {
        $this->initialized['services'] = true;
        $this->services = $services;

        return $this;
    }

    /**
     * @return list<PricebookV2EquipmentBulkCreateRequest>|null
     */
    public function getEquipment(): ?array
    {
        return $this->equipment;
    }

    /**
     * @param list<PricebookV2EquipmentBulkCreateRequest>|null $equipment
     */
    public function setEquipment(?array $equipment): self
    {
        $this->initialized['equipment'] = true;
        $this->equipment = $equipment;

        return $this;
    }

    /**
     * @return list<PricebookV2MaterialBulkCreateRequest>|null
     */
    public function getMaterials(): ?array
    {
        return $this->materials;
    }

    /**
     * @param list<PricebookV2MaterialBulkCreateRequest>|null $materials
     */
    public function setMaterials(?array $materials): self
    {
        $this->initialized['materials'] = true;
        $this->materials = $materials;

        return $this;
    }

    /**
     * @return list<PricebookV2DiscountAndFeesBulkCreateRequest>|null
     */
    public function getDiscountAndFees(): ?array
    {
        return $this->discountAndFees;
    }

    /**
     * @param list<PricebookV2DiscountAndFeesBulkCreateRequest>|null $discountAndFees
     */
    public function setDiscountAndFees(?array $discountAndFees): self
    {
        $this->initialized['discountAndFees'] = true;
        $this->discountAndFees = $discountAndFees;

        return $this;
    }
}
