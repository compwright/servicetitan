<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class CrmV2BookingResponse
{
    /**
     * ID of the booking.
     *
     * @var int
     */
    protected $id;
    /**
     * Source of the booking.
     *
     * @var string
     */
    protected $source;
    /**
     * when the booking was created.
     *
     * @var \DateTime
     */
    protected $createdOn;
    /**
     * Name of the booking's customer.
     *
     * @var string
     */
    protected $name;
    /**
     * Address of the booking.
     *
     * @var mixed|null
     */
    protected $address;
    /**
     * Type of customer (Residential/Commercial).
     *
     * @var mixed|null
     */
    protected $customerType;
    /**
     * Booking's start date time, in UTC.
     *
     * @var \DateTime
     */
    protected $start;
    /**
     * Booking summary.
     *
     * @var string|null
     */
    protected $summary;
    /**
     * ID of the booking's campaign.
     *
     * @var int|null
     */
    protected $campaignId;
    /**
     * ID of the booking's business unit.
     *
     * @var int|null
     */
    protected $businessUnitId;
    /**
     * Returns true if first time client.
     *
     * @var bool|null
     */
    protected $isFirstTimeClient;
    /**
     * Uploaded images.
     *
     * @var string[]|null
     */
    protected $uploadedImages;
    /**
     * Returns true if customer should receive email when booking is created.
     *
     * @var bool|null
     */
    protected $isSendConfirmationEmail;
    /**
     * Booking status.
     *
     * @var mixed
     */
    protected $status;
    /**
     * ID of the reason booking was dismissed.
     *
     * @var int|null
     */
    protected $dismissingReasonId;
    /**
     * ID of the job booked from the booking.
     *
     * @var int|null
     */
    protected $jobId;
    /**
     * External ID of booking.
     *
     * @var string
     */
    protected $externalId;
    /**
     * Booking priority.
     *
     * @var mixed|null
     */
    protected $priority;
    /**
     * ID of the booking's job type.
     *
     * @var int|null
     */
    protected $jobTypeId;
    /**
     * Booking provider id.
     *
     * @var int
     */
    protected $bookingProviderId;
    /**
     * When the booking was modified.
     *
     * @var \DateTime
     */
    protected $modifiedOn;

    /**
     * ID of the booking.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * ID of the booking.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Source of the booking.
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * Source of the booking.
     */
    public function setSource(string $source): self
    {
        $this->source = $source;

        return $this;
    }

    /**
     * when the booking was created.
     */
    public function getCreatedOn(): \DateTime
    {
        return $this->createdOn;
    }

    /**
     * when the booking was created.
     */
    public function setCreatedOn(\DateTime $createdOn): self
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * Name of the booking's customer.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name of the booking's customer.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Address of the booking.
     *
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Address of the booking.
     *
     * @param mixed $address
     */
    public function setAddress($address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Type of customer (Residential/Commercial).
     *
     * @return mixed
     */
    public function getCustomerType()
    {
        return $this->customerType;
    }

    /**
     * Type of customer (Residential/Commercial).
     *
     * @param mixed $customerType
     */
    public function setCustomerType($customerType): self
    {
        $this->customerType = $customerType;

        return $this;
    }

    /**
     * Booking's start date time, in UTC.
     */
    public function getStart(): \DateTime
    {
        return $this->start;
    }

    /**
     * Booking's start date time, in UTC.
     */
    public function setStart(\DateTime $start): self
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Booking summary.
     */
    public function getSummary(): ?string
    {
        return $this->summary;
    }

    /**
     * Booking summary.
     */
    public function setSummary(?string $summary): self
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * ID of the booking's campaign.
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }

    /**
     * ID of the booking's campaign.
     */
    public function setCampaignId(?int $campaignId): self
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * ID of the booking's business unit.
     */
    public function getBusinessUnitId(): ?int
    {
        return $this->businessUnitId;
    }

    /**
     * ID of the booking's business unit.
     */
    public function setBusinessUnitId(?int $businessUnitId): self
    {
        $this->businessUnitId = $businessUnitId;

        return $this;
    }

    /**
     * Returns true if first time client.
     */
    public function getIsFirstTimeClient(): ?bool
    {
        return $this->isFirstTimeClient;
    }

    /**
     * Returns true if first time client.
     */
    public function setIsFirstTimeClient(?bool $isFirstTimeClient): self
    {
        $this->isFirstTimeClient = $isFirstTimeClient;

        return $this;
    }

    /**
     * Uploaded images.
     *
     * @return string[]|null
     */
    public function getUploadedImages(): ?array
    {
        return $this->uploadedImages;
    }

    /**
     * Uploaded images.
     *
     * @param string[]|null $uploadedImages
     */
    public function setUploadedImages(?array $uploadedImages): self
    {
        $this->uploadedImages = $uploadedImages;

        return $this;
    }

    /**
     * Returns true if customer should receive email when booking is created.
     */
    public function getIsSendConfirmationEmail(): ?bool
    {
        return $this->isSendConfirmationEmail;
    }

    /**
     * Returns true if customer should receive email when booking is created.
     */
    public function setIsSendConfirmationEmail(?bool $isSendConfirmationEmail): self
    {
        $this->isSendConfirmationEmail = $isSendConfirmationEmail;

        return $this;
    }

    /**
     * Booking status.
     *
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Booking status.
     *
     * @param mixed $status
     */
    public function setStatus($status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * ID of the reason booking was dismissed.
     */
    public function getDismissingReasonId(): ?int
    {
        return $this->dismissingReasonId;
    }

    /**
     * ID of the reason booking was dismissed.
     */
    public function setDismissingReasonId(?int $dismissingReasonId): self
    {
        $this->dismissingReasonId = $dismissingReasonId;

        return $this;
    }

    /**
     * ID of the job booked from the booking.
     */
    public function getJobId(): ?int
    {
        return $this->jobId;
    }

    /**
     * ID of the job booked from the booking.
     */
    public function setJobId(?int $jobId): self
    {
        $this->jobId = $jobId;

        return $this;
    }

    /**
     * External ID of booking.
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

    /**
     * External ID of booking.
     */
    public function setExternalId(string $externalId): self
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * Booking priority.
     *
     * @return mixed
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Booking priority.
     *
     * @param mixed $priority
     */
    public function setPriority($priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * ID of the booking's job type.
     */
    public function getJobTypeId(): ?int
    {
        return $this->jobTypeId;
    }

    /**
     * ID of the booking's job type.
     */
    public function setJobTypeId(?int $jobTypeId): self
    {
        $this->jobTypeId = $jobTypeId;

        return $this;
    }

    /**
     * Booking provider id.
     */
    public function getBookingProviderId(): int
    {
        return $this->bookingProviderId;
    }

    /**
     * Booking provider id.
     */
    public function setBookingProviderId(int $bookingProviderId): self
    {
        $this->bookingProviderId = $bookingProviderId;

        return $this;
    }

    /**
     * When the booking was modified.
     */
    public function getModifiedOn(): \DateTime
    {
        return $this->modifiedOn;
    }

    /**
     * When the booking was modified.
     */
    public function setModifiedOn(\DateTime $modifiedOn): self
    {
        $this->modifiedOn = $modifiedOn;

        return $this;
    }
}
