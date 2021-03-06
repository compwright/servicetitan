<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class InventoryV2UpdateVendorRequest
{
    /**
     * Name.
     *
     * @var string
     */
    protected $name;
    /**
     * Active.
     *
     * @var bool
     */
    protected $active;
    /**
     * Memo.
     *
     * @var string
     */
    protected $memo;
    /**
     * Contact First name.
     *
     * @var string
     */
    protected $firstName;
    /**
     * Contact Last Name.
     *
     * @var string
     */
    protected $lastName;
    /**
     * Contact Phone.
     *
     * @var string
     */
    protected $phone;
    /**
     * Contact Email.
     *
     * @var string
     */
    protected $email;
    /**
     * Contact Fax.
     *
     * @var string
     */
    protected $fax;
    /**
     * Replenishment Vendor.
     *
     * @var bool
     */
    protected $isTruckReplenishment;
    /**
     * Default PO Delivery Method.
     *
     * @var mixed
     */
    protected $deliveryOption;
    /**
     * Default Tax Rate.
     *
     * @var float
     */
    protected $taxRate;
    /**
     * Restrict PO Creation in Mobile.
     *
     * @var bool
     */
    protected $restrictedMobileCreation;
    /**
     * Vendor Quickbooks Item.
     *
     * @var string
     */
    protected $vendorQuickbooksItem;
    /**
     * Payment Term Id.
     *
     * @var int
     */
    protected $paymentTermId;
    /**
     * Remittance Vendor Id.
     *
     * @var int
     */
    protected $remittanceVendorId;
    /**
     * Address.
     *
     * @var mixed
     */
    protected $address;
    /**
     * Tags.
     *
     * @var InventoryV2TagRequest[]
     */
    protected $tags;
    /**
     * Email Recipients.
     *
     * @var InventoryV2UpdateVendorContactRequest[]
     */
    protected $vendorContacts;
    /**
     * Contains a list of external data items that should be attached to this vendor.
     *
     * @var mixed
     */
    protected $externalData;

    /**
     * Name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Active.
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * Active.
     */
    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Memo.
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * Memo.
     */
    public function setMemo(string $memo): self
    {
        $this->memo = $memo;

        return $this;
    }

    /**
     * Contact First name.
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Contact First name.
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Contact Last Name.
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Contact Last Name.
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Contact Phone.
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * Contact Phone.
     */
    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Contact Email.
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Contact Email.
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Contact Fax.
     */
    public function getFax(): string
    {
        return $this->fax;
    }

    /**
     * Contact Fax.
     */
    public function setFax(string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Replenishment Vendor.
     */
    public function getIsTruckReplenishment(): bool
    {
        return $this->isTruckReplenishment;
    }

    /**
     * Replenishment Vendor.
     */
    public function setIsTruckReplenishment(bool $isTruckReplenishment): self
    {
        $this->isTruckReplenishment = $isTruckReplenishment;

        return $this;
    }

    /**
     * Default PO Delivery Method.
     *
     * @return mixed
     */
    public function getDeliveryOption()
    {
        return $this->deliveryOption;
    }

    /**
     * Default PO Delivery Method.
     *
     * @param mixed $deliveryOption
     */
    public function setDeliveryOption($deliveryOption): self
    {
        $this->deliveryOption = $deliveryOption;

        return $this;
    }

    /**
     * Default Tax Rate.
     */
    public function getTaxRate(): float
    {
        return $this->taxRate;
    }

    /**
     * Default Tax Rate.
     */
    public function setTaxRate(float $taxRate): self
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * Restrict PO Creation in Mobile.
     */
    public function getRestrictedMobileCreation(): bool
    {
        return $this->restrictedMobileCreation;
    }

    /**
     * Restrict PO Creation in Mobile.
     */
    public function setRestrictedMobileCreation(bool $restrictedMobileCreation): self
    {
        $this->restrictedMobileCreation = $restrictedMobileCreation;

        return $this;
    }

    /**
     * Vendor Quickbooks Item.
     */
    public function getVendorQuickbooksItem(): string
    {
        return $this->vendorQuickbooksItem;
    }

    /**
     * Vendor Quickbooks Item.
     */
    public function setVendorQuickbooksItem(string $vendorQuickbooksItem): self
    {
        $this->vendorQuickbooksItem = $vendorQuickbooksItem;

        return $this;
    }

    /**
     * Payment Term Id.
     */
    public function getPaymentTermId(): int
    {
        return $this->paymentTermId;
    }

    /**
     * Payment Term Id.
     */
    public function setPaymentTermId(int $paymentTermId): self
    {
        $this->paymentTermId = $paymentTermId;

        return $this;
    }

    /**
     * Remittance Vendor Id.
     */
    public function getRemittanceVendorId(): int
    {
        return $this->remittanceVendorId;
    }

    /**
     * Remittance Vendor Id.
     */
    public function setRemittanceVendorId(int $remittanceVendorId): self
    {
        $this->remittanceVendorId = $remittanceVendorId;

        return $this;
    }

    /**
     * Address.
     *
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Address.
     *
     * @param mixed $address
     */
    public function setAddress($address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Tags.
     *
     * @return InventoryV2TagRequest[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * Tags.
     *
     * @param InventoryV2TagRequest[] $tags
     */
    public function setTags(array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Email Recipients.
     *
     * @return InventoryV2UpdateVendorContactRequest[]
     */
    public function getVendorContacts(): array
    {
        return $this->vendorContacts;
    }

    /**
     * Email Recipients.
     *
     * @param InventoryV2UpdateVendorContactRequest[] $vendorContacts
     */
    public function setVendorContacts(array $vendorContacts): self
    {
        $this->vendorContacts = $vendorContacts;

        return $this;
    }

    /**
     * Contains a list of external data items that should be attached to this vendor.
     *
     * @return mixed
     */
    public function getExternalData()
    {
        return $this->externalData;
    }

    /**
     * Contains a list of external data items that should be attached to this vendor.
     *
     * @param mixed $externalData
     */
    public function setExternalData($externalData): self
    {
        $this->externalData = $externalData;

        return $this;
    }
}
