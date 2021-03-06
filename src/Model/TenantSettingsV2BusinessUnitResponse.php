<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class TenantSettingsV2BusinessUnitResponse
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var bool
     */
    protected $active;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $officialName;
    /**
     * @var string|null
     */
    protected $email;
    /**
     * @var string|null
     */
    protected $currency;
    /**
     * @var string|null
     */
    protected $phoneNumber;
    /**
     * @var string|null
     */
    protected $invoiceHeader;
    /**
     * @var string|null
     */
    protected $invoiceMessage;
    /**
     * @var float|null
     */
    protected $defaultTaxRate;
    /**
     * @var string|null
     */
    protected $authorizationParagraph;
    /**
     * @var string|null
     */
    protected $acknowledgementParagraph;
    /**
     * @var mixed|null
     */
    protected $address;
    /**
     * @var string|null
     */
    protected $materialSku;
    /**
     * @var string|null
     */
    protected $quickbooksClass;
    /**
     * @var string|null
     */
    protected $accountCode;
    /**
     * @var string|null
     */
    protected $franchiseId;
    /**
     * @var string|null
     */
    protected $conceptCode;
    /**
     * @var string|null
     */
    protected $corporateContractNumber;
    /**
     * @var mixed|null
     */
    protected $tenant;
    /**
     * @var \DateTime
     */
    protected $createdOn;
    /**
     * @var \DateTime
     */
    protected $modifiedOn;
    /**
     * Optional model that contains a list of external data items.
     *
     * @var TenantSettingsV2ExternalDataModel[]
     */
    protected $externalData;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getOfficialName(): ?string
    {
        return $this->officialName;
    }

    public function setOfficialName(?string $officialName): self
    {
        $this->officialName = $officialName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getInvoiceHeader(): ?string
    {
        return $this->invoiceHeader;
    }

    public function setInvoiceHeader(?string $invoiceHeader): self
    {
        $this->invoiceHeader = $invoiceHeader;

        return $this;
    }

    public function getInvoiceMessage(): ?string
    {
        return $this->invoiceMessage;
    }

    public function setInvoiceMessage(?string $invoiceMessage): self
    {
        $this->invoiceMessage = $invoiceMessage;

        return $this;
    }

    public function getDefaultTaxRate(): ?float
    {
        return $this->defaultTaxRate;
    }

    public function setDefaultTaxRate(?float $defaultTaxRate): self
    {
        $this->defaultTaxRate = $defaultTaxRate;

        return $this;
    }

    public function getAuthorizationParagraph(): ?string
    {
        return $this->authorizationParagraph;
    }

    public function setAuthorizationParagraph(?string $authorizationParagraph): self
    {
        $this->authorizationParagraph = $authorizationParagraph;

        return $this;
    }

    public function getAcknowledgementParagraph(): ?string
    {
        return $this->acknowledgementParagraph;
    }

    public function setAcknowledgementParagraph(?string $acknowledgementParagraph): self
    {
        $this->acknowledgementParagraph = $acknowledgementParagraph;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getMaterialSku(): ?string
    {
        return $this->materialSku;
    }

    public function setMaterialSku(?string $materialSku): self
    {
        $this->materialSku = $materialSku;

        return $this;
    }

    public function getQuickbooksClass(): ?string
    {
        return $this->quickbooksClass;
    }

    public function setQuickbooksClass(?string $quickbooksClass): self
    {
        $this->quickbooksClass = $quickbooksClass;

        return $this;
    }

    public function getAccountCode(): ?string
    {
        return $this->accountCode;
    }

    public function setAccountCode(?string $accountCode): self
    {
        $this->accountCode = $accountCode;

        return $this;
    }

    public function getFranchiseId(): ?string
    {
        return $this->franchiseId;
    }

    public function setFranchiseId(?string $franchiseId): self
    {
        $this->franchiseId = $franchiseId;

        return $this;
    }

    public function getConceptCode(): ?string
    {
        return $this->conceptCode;
    }

    public function setConceptCode(?string $conceptCode): self
    {
        $this->conceptCode = $conceptCode;

        return $this;
    }

    public function getCorporateContractNumber(): ?string
    {
        return $this->corporateContractNumber;
    }

    public function setCorporateContractNumber(?string $corporateContractNumber): self
    {
        $this->corporateContractNumber = $corporateContractNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTenant()
    {
        return $this->tenant;
    }

    /**
     * @param mixed $tenant
     */
    public function setTenant($tenant): self
    {
        $this->tenant = $tenant;

        return $this;
    }

    public function getCreatedOn(): \DateTime
    {
        return $this->createdOn;
    }

    public function setCreatedOn(\DateTime $createdOn): self
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    public function getModifiedOn(): \DateTime
    {
        return $this->modifiedOn;
    }

    public function setModifiedOn(\DateTime $modifiedOn): self
    {
        $this->modifiedOn = $modifiedOn;

        return $this;
    }

    /**
     * Optional model that contains a list of external data items.
     *
     * @return TenantSettingsV2ExternalDataModel[]
     */
    public function getExternalData(): array
    {
        return $this->externalData;
    }

    /**
     * Optional model that contains a list of external data items.
     *
     * @param TenantSettingsV2ExternalDataModel[] $externalData
     */
    public function setExternalData(array $externalData): self
    {
        $this->externalData = $externalData;

        return $this;
    }
}
