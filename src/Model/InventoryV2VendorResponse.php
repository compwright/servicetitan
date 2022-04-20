<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class InventoryV2VendorResponse
{
    /**
     * Vendor Id.
     *
     * @var int
     */
    protected $id;
    /**
     * Vendor name.
     *
     * @var string
     */
    protected $name;
    /**
     * Active/Inactive status.
     *
     * @var bool
     */
    protected $active;
    /**
     * Indicates if vendor can be used for replenishment.
     *
     * @var bool
     */
    protected $isTruckReplenishment;
    /**
     * Indicates if vendor can be used for purchasing on mobile.
     *
     * @var bool
     */
    protected $isMobileCreationRestricted;
    /**
     * Vendor memo.
     *
     * @var string
     */
    protected $memo;
    /**
     * Default delivery option.
     *
     * @var string
     */
    protected $deliveryOption;
    /**
     * Default tax rate for this vendor.
     *
     * @var float
     */
    protected $defaultTaxRate;
    /**
     * Vendor contact information.
     *
     * @var mixed
     */
    protected $contactInfo;
    /**
     * Vendor address.
     *
     * @var mixed
     */
    protected $address;
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
     * List of external data attached to this vendor,.
     *
     * @var InventoryV2ExternalDataModel[]
     */
    protected $externalData;

    /**
     * Vendor Id.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Vendor Id.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Vendor name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Vendor name.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Active/Inactive status.
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * Active/Inactive status.
     */
    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Indicates if vendor can be used for replenishment.
     */
    public function getIsTruckReplenishment(): bool
    {
        return $this->isTruckReplenishment;
    }

    /**
     * Indicates if vendor can be used for replenishment.
     */
    public function setIsTruckReplenishment(bool $isTruckReplenishment): self
    {
        $this->isTruckReplenishment = $isTruckReplenishment;

        return $this;
    }

    /**
     * Indicates if vendor can be used for purchasing on mobile.
     */
    public function getIsMobileCreationRestricted(): bool
    {
        return $this->isMobileCreationRestricted;
    }

    /**
     * Indicates if vendor can be used for purchasing on mobile.
     */
    public function setIsMobileCreationRestricted(bool $isMobileCreationRestricted): self
    {
        $this->isMobileCreationRestricted = $isMobileCreationRestricted;

        return $this;
    }

    /**
     * Vendor memo.
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * Vendor memo.
     */
    public function setMemo(string $memo): self
    {
        $this->memo = $memo;

        return $this;
    }

    /**
     * Default delivery option.
     */
    public function getDeliveryOption(): string
    {
        return $this->deliveryOption;
    }

    /**
     * Default delivery option.
     */
    public function setDeliveryOption(string $deliveryOption): self
    {
        $this->deliveryOption = $deliveryOption;

        return $this;
    }

    /**
     * Default tax rate for this vendor.
     */
    public function getDefaultTaxRate(): float
    {
        return $this->defaultTaxRate;
    }

    /**
     * Default tax rate for this vendor.
     */
    public function setDefaultTaxRate(float $defaultTaxRate): self
    {
        $this->defaultTaxRate = $defaultTaxRate;

        return $this;
    }

    /**
     * Vendor contact information.
     *
     * @return mixed
     */
    public function getContactInfo()
    {
        return $this->contactInfo;
    }

    /**
     * Vendor contact information.
     *
     * @param mixed $contactInfo
     */
    public function setContactInfo($contactInfo): self
    {
        $this->contactInfo = $contactInfo;

        return $this;
    }

    /**
     * Vendor address.
     *
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Vendor address.
     *
     * @param mixed $address
     */
    public function setAddress($address): self
    {
        $this->address = $address;

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
     * List of external data attached to this vendor,.
     *
     * @return InventoryV2ExternalDataModel[]
     */
    public function getExternalData(): array
    {
        return $this->externalData;
    }

    /**
     * List of external data attached to this vendor,.
     *
     * @param InventoryV2ExternalDataModel[] $externalData
     */
    public function setExternalData(array $externalData): self
    {
        $this->externalData = $externalData;

        return $this;
    }
}
