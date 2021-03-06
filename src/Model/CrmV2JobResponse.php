<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class CrmV2JobResponse
{
    /**
     * ID of the job.
     *
     * @var int
     */
    protected $id;
    /**
     * Job number.
     *
     * @var string
     */
    protected $jobNumber;
    /**
     * ID of the job's customer.
     *
     * @var int
     */
    protected $customerId;
    /**
     * ID of the job's location.
     *
     * @var int
     */
    protected $locationId;
    /**
     * Status of the job.
     *
     * @var string
     */
    protected $jobStatus;
    /**
     * Date/time (in UTC) when the job was completed.
     *
     * @var \DateTime|null
     */
    protected $completedOn;
    /**
     * ID of the job's business unit.
     *
     * @var int
     */
    protected $businessUnitId;
    /**
     * ID of job type.
     *
     * @var int
     */
    protected $jobTypeId;
    /**
     * Priority of the job.
     *
     * @var string
     */
    protected $priority;
    /**
     * ID of the job's campaign.
     *
     * @var int
     */
    protected $campaignId;
    /**
     * Job summary.
     *
     * @var string|null
     */
    protected $summary;
    /**
     * Custom fields on the job.
     *
     * @var CustomFieldApiModel[]
     */
    protected $customFields;
    /**
     * Number of appointments on the job.
     *
     * @var int
     */
    protected $appointmentCount;
    /**
     * ID of the first appointment on the job.
     *
     * @var int
     */
    protected $firstAppointmentId;
    /**
     * ID of the last appointment on the job.
     *
     * @var int
     */
    protected $lastAppointmentId;
    /**
     * ID of the job for which this job is a recall.
     *
     * @var int|null
     */
    protected $recallForId;
    /**
     * ID of the job for which this job is a warranty.
     *
     * @var int|null
     */
    protected $warrantyId;
    /**
     * Object that contains:.
     *
     * @var mixed|null
     */
    protected $jobGeneratedLeadSource;
    /**
     * Whether the job is a no-charge job.
     *
     * @var bool
     */
    protected $noCharge;
    /**
     * Whether notifications will be sent to customers.
     *
     * @var bool
     */
    protected $notificationsEnabled;
    /**
     * Date/time (in UTC) when the job was created.
     *
     * @var \DateTime
     */
    protected $createdOn;
    /**
     * ID of the user who created the job.
     *
     * @var int
     */
    protected $createdById;
    /**
     * Date/time (in UTC) when job was last modified.
     *
     * @var \DateTime
     */
    protected $modifiedOn;
    /**
     * Tags on the job.
     *
     * @var int[]
     */
    protected $tagTypeIds;
    /**
     * ID of the Call that resulted in this job.
     *
     * @var int|null
     */
    protected $leadCallId;
    /**
     * ID of the Booking that resulted in this job.
     *
     * @var int|null
     */
    protected $bookingId;
    /**
     * ID of the Technician that sold this job.
     *
     * @var int|null
     */
    protected $soldById;
    /**
     * List of external data attached to this job,.
     *
     * @var CrmV2ExternalDataModel[]
     */
    protected $externalData;

    /**
     * ID of the job.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * ID of the job.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Job number.
     */
    public function getJobNumber(): string
    {
        return $this->jobNumber;
    }

    /**
     * Job number.
     */
    public function setJobNumber(string $jobNumber): self
    {
        $this->jobNumber = $jobNumber;

        return $this;
    }

    /**
     * ID of the job's customer.
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }

    /**
     * ID of the job's customer.
     */
    public function setCustomerId(int $customerId): self
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * ID of the job's location.
     */
    public function getLocationId(): int
    {
        return $this->locationId;
    }

    /**
     * ID of the job's location.
     */
    public function setLocationId(int $locationId): self
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * Status of the job.
     */
    public function getJobStatus(): string
    {
        return $this->jobStatus;
    }

    /**
     * Status of the job.
     */
    public function setJobStatus(string $jobStatus): self
    {
        $this->jobStatus = $jobStatus;

        return $this;
    }

    /**
     * Date/time (in UTC) when the job was completed.
     */
    public function getCompletedOn(): ?\DateTime
    {
        return $this->completedOn;
    }

    /**
     * Date/time (in UTC) when the job was completed.
     */
    public function setCompletedOn(?\DateTime $completedOn): self
    {
        $this->completedOn = $completedOn;

        return $this;
    }

    /**
     * ID of the job's business unit.
     */
    public function getBusinessUnitId(): int
    {
        return $this->businessUnitId;
    }

    /**
     * ID of the job's business unit.
     */
    public function setBusinessUnitId(int $businessUnitId): self
    {
        $this->businessUnitId = $businessUnitId;

        return $this;
    }

    /**
     * ID of job type.
     */
    public function getJobTypeId(): int
    {
        return $this->jobTypeId;
    }

    /**
     * ID of job type.
     */
    public function setJobTypeId(int $jobTypeId): self
    {
        $this->jobTypeId = $jobTypeId;

        return $this;
    }

    /**
     * Priority of the job.
     */
    public function getPriority(): string
    {
        return $this->priority;
    }

    /**
     * Priority of the job.
     */
    public function setPriority(string $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * ID of the job's campaign.
     */
    public function getCampaignId(): int
    {
        return $this->campaignId;
    }

    /**
     * ID of the job's campaign.
     */
    public function setCampaignId(int $campaignId): self
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * Job summary.
     */
    public function getSummary(): ?string
    {
        return $this->summary;
    }

    /**
     * Job summary.
     */
    public function setSummary(?string $summary): self
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Custom fields on the job.
     *
     * @return CustomFieldApiModel[]
     */
    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    /**
     * Custom fields on the job.
     *
     * @param CustomFieldApiModel[] $customFields
     */
    public function setCustomFields(array $customFields): self
    {
        $this->customFields = $customFields;

        return $this;
    }

    /**
     * Number of appointments on the job.
     */
    public function getAppointmentCount(): int
    {
        return $this->appointmentCount;
    }

    /**
     * Number of appointments on the job.
     */
    public function setAppointmentCount(int $appointmentCount): self
    {
        $this->appointmentCount = $appointmentCount;

        return $this;
    }

    /**
     * ID of the first appointment on the job.
     */
    public function getFirstAppointmentId(): int
    {
        return $this->firstAppointmentId;
    }

    /**
     * ID of the first appointment on the job.
     */
    public function setFirstAppointmentId(int $firstAppointmentId): self
    {
        $this->firstAppointmentId = $firstAppointmentId;

        return $this;
    }

    /**
     * ID of the last appointment on the job.
     */
    public function getLastAppointmentId(): int
    {
        return $this->lastAppointmentId;
    }

    /**
     * ID of the last appointment on the job.
     */
    public function setLastAppointmentId(int $lastAppointmentId): self
    {
        $this->lastAppointmentId = $lastAppointmentId;

        return $this;
    }

    /**
     * ID of the job for which this job is a recall.
     */
    public function getRecallForId(): ?int
    {
        return $this->recallForId;
    }

    /**
     * ID of the job for which this job is a recall.
     */
    public function setRecallForId(?int $recallForId): self
    {
        $this->recallForId = $recallForId;

        return $this;
    }

    /**
     * ID of the job for which this job is a warranty.
     */
    public function getWarrantyId(): ?int
    {
        return $this->warrantyId;
    }

    /**
     * ID of the job for which this job is a warranty.
     */
    public function setWarrantyId(?int $warrantyId): self
    {
        $this->warrantyId = $warrantyId;

        return $this;
    }

    /**
     * Object that contains:.
     *
     * @return mixed
     */
    public function getJobGeneratedLeadSource()
    {
        return $this->jobGeneratedLeadSource;
    }

    /**
     * Object that contains:.
     *
     * @param mixed $jobGeneratedLeadSource
     */
    public function setJobGeneratedLeadSource($jobGeneratedLeadSource): self
    {
        $this->jobGeneratedLeadSource = $jobGeneratedLeadSource;

        return $this;
    }

    /**
     * Whether the job is a no-charge job.
     */
    public function getNoCharge(): bool
    {
        return $this->noCharge;
    }

    /**
     * Whether the job is a no-charge job.
     */
    public function setNoCharge(bool $noCharge): self
    {
        $this->noCharge = $noCharge;

        return $this;
    }

    /**
     * Whether notifications will be sent to customers.
     */
    public function getNotificationsEnabled(): bool
    {
        return $this->notificationsEnabled;
    }

    /**
     * Whether notifications will be sent to customers.
     */
    public function setNotificationsEnabled(bool $notificationsEnabled): self
    {
        $this->notificationsEnabled = $notificationsEnabled;

        return $this;
    }

    /**
     * Date/time (in UTC) when the job was created.
     */
    public function getCreatedOn(): \DateTime
    {
        return $this->createdOn;
    }

    /**
     * Date/time (in UTC) when the job was created.
     */
    public function setCreatedOn(\DateTime $createdOn): self
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * ID of the user who created the job.
     */
    public function getCreatedById(): int
    {
        return $this->createdById;
    }

    /**
     * ID of the user who created the job.
     */
    public function setCreatedById(int $createdById): self
    {
        $this->createdById = $createdById;

        return $this;
    }

    /**
     * Date/time (in UTC) when job was last modified.
     */
    public function getModifiedOn(): \DateTime
    {
        return $this->modifiedOn;
    }

    /**
     * Date/time (in UTC) when job was last modified.
     */
    public function setModifiedOn(\DateTime $modifiedOn): self
    {
        $this->modifiedOn = $modifiedOn;

        return $this;
    }

    /**
     * Tags on the job.
     *
     * @return int[]
     */
    public function getTagTypeIds(): array
    {
        return $this->tagTypeIds;
    }

    /**
     * Tags on the job.
     *
     * @param int[] $tagTypeIds
     */
    public function setTagTypeIds(array $tagTypeIds): self
    {
        $this->tagTypeIds = $tagTypeIds;

        return $this;
    }

    /**
     * ID of the Call that resulted in this job.
     */
    public function getLeadCallId(): ?int
    {
        return $this->leadCallId;
    }

    /**
     * ID of the Call that resulted in this job.
     */
    public function setLeadCallId(?int $leadCallId): self
    {
        $this->leadCallId = $leadCallId;

        return $this;
    }

    /**
     * ID of the Booking that resulted in this job.
     */
    public function getBookingId(): ?int
    {
        return $this->bookingId;
    }

    /**
     * ID of the Booking that resulted in this job.
     */
    public function setBookingId(?int $bookingId): self
    {
        $this->bookingId = $bookingId;

        return $this;
    }

    /**
     * ID of the Technician that sold this job.
     */
    public function getSoldById(): ?int
    {
        return $this->soldById;
    }

    /**
     * ID of the Technician that sold this job.
     */
    public function setSoldById(?int $soldById): self
    {
        $this->soldById = $soldById;

        return $this;
    }

    /**
     * List of external data attached to this job,.
     *
     * @return CrmV2ExternalDataModel[]
     */
    public function getExternalData(): array
    {
        return $this->externalData;
    }

    /**
     * List of external data attached to this job,.
     *
     * @param CrmV2ExternalDataModel[] $externalData
     */
    public function setExternalData(array $externalData): self
    {
        $this->externalData = $externalData;

        return $this;
    }
}
