<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class CrmV2LocationsCreateLocationRequest
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
     * Contacts for the location.
     *
     * @var list<CrmV2CustomersNewCustomerContact>|null
     */
    protected $contacts;
    /**
     * Location record’s custom fields.
     *
     * @var list<CrmV2CustomersCustomFieldUpdateModel>|null
     */
    protected $customFields;
    /**
     * ID of the location’s customer.
     *
     * @var int
     */
    protected $customerId;

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
     * Contacts for the location.
     *
     * @return list<CrmV2CustomersNewCustomerContact>|null
     */
    public function getContacts(): ?array
    {
        return $this->contacts;
    }

    /**
     * Contacts for the location.
     *
     * @param list<CrmV2CustomersNewCustomerContact>|null $contacts
     */
    public function setContacts(?array $contacts): self
    {
        $this->initialized['contacts'] = true;
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * Location record’s custom fields.
     *
     * @return list<CrmV2CustomersCustomFieldUpdateModel>|null
     */
    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    /**
     * Location record’s custom fields.
     *
     * @param list<CrmV2CustomersCustomFieldUpdateModel>|null $customFields
     */
    public function setCustomFields(?array $customFields): self
    {
        $this->initialized['customFields'] = true;
        $this->customFields = $customFields;

        return $this;
    }

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
}
