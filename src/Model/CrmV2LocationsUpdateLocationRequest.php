<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class CrmV2LocationsUpdateLocationRequest
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
     * ID of the location’s customer.
     *
     * @var int
     */
    protected $customerId;
    /**
     * Name of the location.
     *
     * @var string
     */
    protected $name;
    /**
     * Address of the location record.
     */
    protected $address;
    /**
     * If false, the record has been deactivated.
     *
     * @var bool
     */
    protected $active;
    /**
     * ID of the location tax zone.
     *
     * @var int
     */
    protected $taxZoneId;
    /**
     * List of custom fields and their values. This list must describe the full list of custom fields on the location.
     * If location A has values for custom fields X and Y and this field only contains a model for custom field X, then
     * the value for custom field Y on location A will be removed.
     *
     * @var list<CrmV2CustomersCustomFieldUpdateModel>
     */
    protected $customFields;

    /**
     * ID of the location’s customer.
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }

    /**
     * ID of the location’s customer.
     */
    public function setCustomerId(int $customerId): self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Name of the location.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name of the location.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Address of the location record.
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Address of the location record.
     */
    public function setAddress($address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }

    /**
     * If false, the record has been deactivated.
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * If false, the record has been deactivated.
     */
    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;

        return $this;
    }

    /**
     * ID of the location tax zone.
     */
    public function getTaxZoneId(): int
    {
        return $this->taxZoneId;
    }

    /**
     * ID of the location tax zone.
     */
    public function setTaxZoneId(int $taxZoneId): self
    {
        $this->initialized['taxZoneId'] = true;
        $this->taxZoneId = $taxZoneId;

        return $this;
    }

    /**
     * List of custom fields and their values. This list must describe the full list of custom fields on the location.
     * If location A has values for custom fields X and Y and this field only contains a model for custom field X, then
     * the value for custom field Y on location A will be removed.
     *
     * @return list<CrmV2CustomersCustomFieldUpdateModel>
     */
    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    /**
     * List of custom fields and their values. This list must describe the full list of custom fields on the location.
     * If location A has values for custom fields X and Y and this field only contains a model for custom field X, then
     * the value for custom field Y on location A will be removed.
     *
     * @param list<CrmV2CustomersCustomFieldUpdateModel> $customFields
     */
    public function setCustomFields(array $customFields): self
    {
        $this->initialized['customFields'] = true;
        $this->customFields = $customFields;

        return $this;
    }
}
