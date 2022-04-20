<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class AccountingV2InventoryBillItemResponse
{
    /**
     * @var int
     */
    protected $order;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var string|null
     */
    protected $quantity;
    /**
     * @var string|null
     */
    protected $cost;
    /**
     * @var string|null
     */
    protected $inventoryLocation;
    /**
     * @var string|null
     */
    protected $serialNumber;
    /**
     * @var mixed|null
     */
    protected $generalLedgerAccount;
    /**
     * @var mixed|null
     */
    protected $costOfSaleAccount;
    /**
     * @var mixed|null
     */
    protected $assetAccount;

    public function getOrder(): int
    {
        return $this->order;
    }

    public function setOrder(int $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    public function setQuantity(?string $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getCost(): ?string
    {
        return $this->cost;
    }

    public function setCost(?string $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getInventoryLocation(): ?string
    {
        return $this->inventoryLocation;
    }

    public function setInventoryLocation(?string $inventoryLocation): self
    {
        $this->inventoryLocation = $inventoryLocation;

        return $this;
    }

    public function getSerialNumber(): ?string
    {
        return $this->serialNumber;
    }

    public function setSerialNumber(?string $serialNumber): self
    {
        $this->serialNumber = $serialNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGeneralLedgerAccount()
    {
        return $this->generalLedgerAccount;
    }

    /**
     * @param mixed $generalLedgerAccount
     */
    public function setGeneralLedgerAccount($generalLedgerAccount): self
    {
        $this->generalLedgerAccount = $generalLedgerAccount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostOfSaleAccount()
    {
        return $this->costOfSaleAccount;
    }

    /**
     * @param mixed $costOfSaleAccount
     */
    public function setCostOfSaleAccount($costOfSaleAccount): self
    {
        $this->costOfSaleAccount = $costOfSaleAccount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAssetAccount()
    {
        return $this->assetAccount;
    }

    /**
     * @param mixed $assetAccount
     */
    public function setAssetAccount($assetAccount): self
    {
        $this->assetAccount = $assetAccount;

        return $this;
    }
}
