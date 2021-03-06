<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class EquipmentSystemsV2InstalledEquipmentUpdateRequest
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var \DateTime|null
     */
    protected $installedOn;
    /**
     * @var string
     */
    protected $serialNumber;
    /**
     * @var string
     */
    protected $memo;
    /**
     * @var string
     */
    protected $manufacturer;
    /**
     * @var string
     */
    protected $model;
    /**
     * @var float|null
     */
    protected $cost;
    /**
     * @var \DateTime|null
     */
    protected $manufacturerWarrantyStart;
    /**
     * @var \DateTime|null
     */
    protected $manufacturerWarrantyEnd;
    /**
     * @var \DateTime|null
     */
    protected $serviceProviderWarrantyStart;
    /**
     * @var \DateTime|null
     */
    protected $serviceProviderWarrantyEnd;
    /**
     * @var EquipmentSystemsV2CustomFieldRequestModel[]
     */
    protected $customFields;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getInstalledOn(): ?\DateTime
    {
        return $this->installedOn;
    }

    public function setInstalledOn(?\DateTime $installedOn): self
    {
        $this->installedOn = $installedOn;

        return $this;
    }

    public function getSerialNumber(): string
    {
        return $this->serialNumber;
    }

    public function setSerialNumber(string $serialNumber): self
    {
        $this->serialNumber = $serialNumber;

        return $this;
    }

    public function getMemo(): string
    {
        return $this->memo;
    }

    public function setMemo(string $memo): self
    {
        $this->memo = $memo;

        return $this;
    }

    public function getManufacturer(): string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(string $manufacturer): self
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getCost(): ?float
    {
        return $this->cost;
    }

    public function setCost(?float $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getManufacturerWarrantyStart(): ?\DateTime
    {
        return $this->manufacturerWarrantyStart;
    }

    public function setManufacturerWarrantyStart(?\DateTime $manufacturerWarrantyStart): self
    {
        $this->manufacturerWarrantyStart = $manufacturerWarrantyStart;

        return $this;
    }

    public function getManufacturerWarrantyEnd(): ?\DateTime
    {
        return $this->manufacturerWarrantyEnd;
    }

    public function setManufacturerWarrantyEnd(?\DateTime $manufacturerWarrantyEnd): self
    {
        $this->manufacturerWarrantyEnd = $manufacturerWarrantyEnd;

        return $this;
    }

    public function getServiceProviderWarrantyStart(): ?\DateTime
    {
        return $this->serviceProviderWarrantyStart;
    }

    public function setServiceProviderWarrantyStart(?\DateTime $serviceProviderWarrantyStart): self
    {
        $this->serviceProviderWarrantyStart = $serviceProviderWarrantyStart;

        return $this;
    }

    public function getServiceProviderWarrantyEnd(): ?\DateTime
    {
        return $this->serviceProviderWarrantyEnd;
    }

    public function setServiceProviderWarrantyEnd(?\DateTime $serviceProviderWarrantyEnd): self
    {
        $this->serviceProviderWarrantyEnd = $serviceProviderWarrantyEnd;

        return $this;
    }

    /**
     * @return EquipmentSystemsV2CustomFieldRequestModel[]
     */
    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    /**
     * @param EquipmentSystemsV2CustomFieldRequestModel[] $customFields
     */
    public function setCustomFields(array $customFields): self
    {
        $this->customFields = $customFields;

        return $this;
    }
}
