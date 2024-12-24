<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class MembershipsV2MembershipTypeResponse
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
     * Membership type name.
     *
     * @var string
     */
    protected $name;
    /**
     * Whether membership type is active.
     *
     * @var bool
     */
    protected $active;
    /**
     * Membership discount mode.
     */
    protected $discountMode;
    /**
     * Membership location target.
     */
    protected $locationTarget;
    /**
     * Membership revenue recognition mode.
     */
    protected $revenueRecognitionMode;
    /**
     * Whether invoice templates should be auto-calculated.
     *
     * @var bool
     */
    protected $autoCalculateInvoiceTemplates;
    /**
     * Whether membership pricing table should be used.
     *
     * @var bool
     */
    protected $useMembershipPricingTable;
    /**
     * Whether membership savings should be displayed.
     *
     * @var bool
     */
    protected $showMembershipSavings;
    /**
     * Membership type ID.
     *
     * @var int
     */
    protected $id;
    /**
     * When membership type was created.
     *
     * @var \DateTime
     */
    protected $createdOn;
    /**
     * ID of the user that created this membership type.
     *
     * @var int|null
     */
    protected $createdById;
    /**
     * When membership type was modified.
     *
     * @var \DateTime
     */
    protected $modifiedOn;
    /**
     * Internal import ID label.
     *
     * @var string|null
     */
    protected $importId;
    /**
     * Billing template ID.
     *
     * @var int|null
     */
    protected $billingTemplateId;

    /**
     * Membership type name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Membership type name.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Whether membership type is active.
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * Whether membership type is active.
     */
    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;

        return $this;
    }

    /**
     * Membership discount mode.
     */
    public function getDiscountMode()
    {
        return $this->discountMode;
    }

    /**
     * Membership discount mode.
     */
    public function setDiscountMode($discountMode): self
    {
        $this->initialized['discountMode'] = true;
        $this->discountMode = $discountMode;

        return $this;
    }

    /**
     * Membership location target.
     */
    public function getLocationTarget()
    {
        return $this->locationTarget;
    }

    /**
     * Membership location target.
     */
    public function setLocationTarget($locationTarget): self
    {
        $this->initialized['locationTarget'] = true;
        $this->locationTarget = $locationTarget;

        return $this;
    }

    /**
     * Membership revenue recognition mode.
     */
    public function getRevenueRecognitionMode()
    {
        return $this->revenueRecognitionMode;
    }

    /**
     * Membership revenue recognition mode.
     */
    public function setRevenueRecognitionMode($revenueRecognitionMode): self
    {
        $this->initialized['revenueRecognitionMode'] = true;
        $this->revenueRecognitionMode = $revenueRecognitionMode;

        return $this;
    }

    /**
     * Whether invoice templates should be auto-calculated.
     */
    public function getAutoCalculateInvoiceTemplates(): bool
    {
        return $this->autoCalculateInvoiceTemplates;
    }

    /**
     * Whether invoice templates should be auto-calculated.
     */
    public function setAutoCalculateInvoiceTemplates(bool $autoCalculateInvoiceTemplates): self
    {
        $this->initialized['autoCalculateInvoiceTemplates'] = true;
        $this->autoCalculateInvoiceTemplates = $autoCalculateInvoiceTemplates;

        return $this;
    }

    /**
     * Whether membership pricing table should be used.
     */
    public function getUseMembershipPricingTable(): bool
    {
        return $this->useMembershipPricingTable;
    }

    /**
     * Whether membership pricing table should be used.
     */
    public function setUseMembershipPricingTable(bool $useMembershipPricingTable): self
    {
        $this->initialized['useMembershipPricingTable'] = true;
        $this->useMembershipPricingTable = $useMembershipPricingTable;

        return $this;
    }

    /**
     * Whether membership savings should be displayed.
     */
    public function getShowMembershipSavings(): bool
    {
        return $this->showMembershipSavings;
    }

    /**
     * Whether membership savings should be displayed.
     */
    public function setShowMembershipSavings(bool $showMembershipSavings): self
    {
        $this->initialized['showMembershipSavings'] = true;
        $this->showMembershipSavings = $showMembershipSavings;

        return $this;
    }

    /**
     * Membership type ID.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Membership type ID.
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * When membership type was created.
     */
    public function getCreatedOn(): \DateTime
    {
        return $this->createdOn;
    }

    /**
     * When membership type was created.
     */
    public function setCreatedOn(\DateTime $createdOn): self
    {
        $this->initialized['createdOn'] = true;
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * ID of the user that created this membership type.
     */
    public function getCreatedById(): ?int
    {
        return $this->createdById;
    }

    /**
     * ID of the user that created this membership type.
     */
    public function setCreatedById(?int $createdById): self
    {
        $this->initialized['createdById'] = true;
        $this->createdById = $createdById;

        return $this;
    }

    /**
     * When membership type was modified.
     */
    public function getModifiedOn(): \DateTime
    {
        return $this->modifiedOn;
    }

    /**
     * When membership type was modified.
     */
    public function setModifiedOn(\DateTime $modifiedOn): self
    {
        $this->initialized['modifiedOn'] = true;
        $this->modifiedOn = $modifiedOn;

        return $this;
    }

    /**
     * Internal import ID label.
     */
    public function getImportId(): ?string
    {
        return $this->importId;
    }

    /**
     * Internal import ID label.
     */
    public function setImportId(?string $importId): self
    {
        $this->initialized['importId'] = true;
        $this->importId = $importId;

        return $this;
    }

    /**
     * Billing template ID.
     */
    public function getBillingTemplateId(): ?int
    {
        return $this->billingTemplateId;
    }

    /**
     * Billing template ID.
     */
    public function setBillingTemplateId(?int $billingTemplateId): self
    {
        $this->initialized['billingTemplateId'] = true;
        $this->billingTemplateId = $billingTemplateId;

        return $this;
    }
}
