<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class MembershipsV2LocationRecurringServiceResponse
{
    /**
     * Recurring service ID.
     *
     * @var int
     */
    protected $id;
    /**
     * Recurring service name.
     *
     * @var string
     */
    protected $name;
    /**
     * Whether recurring service is active.
     *
     * @var bool
     */
    protected $active;
    /**
     * When recurring service was created.
     *
     * @var \DateTime
     */
    protected $createdOn;
    /**
     * ID of the user that created this recurring service.
     *
     * @var int|null
     */
    protected $createdById;
    /**
     * When recurring service was modified.
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
     * Customer membership ID.
     *
     * @var int|null
     */
    protected $membershipId;
    /**
     * Location ID.
     *
     * @var int
     */
    protected $locationId;
    /**
     * Recurring Service Type ID.
     *
     * @var int
     */
    protected $recurringServiceTypeId;
    /**
     * The recurrence duration type.
     *
     * @var mixed
     */
    protected $durationType;
    /**
     * The duration length for the given duration type.
     *
     * @var int
     */
    protected $durationLength;
    /**
     * Beginning date of recurring service.
     *
     * @var \DateTime|null
     */
    protected $from;
    /**
     * End date of recurring service.
     *
     * @var \DateTime|null
     */
    protected $to;
    /**
     * Memo.
     *
     * @var string|null
     */
    protected $memo;
    /**
     * Invoice template ID.
     *
     * @var int|null
     */
    protected $invoiceTemplateId;
    /**
     * Invoice template ID for the 2nd year and following (for ongoing memberships).
     *
     * @var int|null
     */
    protected $invoiceTemplateForFollowingYearsId;
    /**
     * Whether first visit is complete.
     *
     * @var bool
     */
    protected $firstVisitComplete;
    /**
     * ID of the invoice item that is the sale task of this membership.
     *
     * @var int|null
     */
    protected $activatedFromId;
    /**
     * Recurring service allocation.
     *
     * @var float
     */
    protected $allocation;
    /**
     * Business unit ID.
     *
     * @var int|null
     */
    protected $businessUnitId;
    /**
     * Job type ID.
     *
     * @var int|null
     */
    protected $jobTypeId;
    /**
     * Campaign ID.
     *
     * @var int|null
     */
    protected $campaignId;
    /**
     * Recurring service priority.
     *
     * @var mixed
     */
    protected $priority;
    /**
     * Job summary.
     *
     * @var string|null
     */
    protected $jobSummary;
    /**
     * The recurrence type (e.g. Daily, Weekly, Monthly, etc.).
     *
     * @var mixed
     */
    protected $recurrenceType;
    /**
     * The recurrence interval for the given recurrence type.
     *
     * @var int
     */
    protected $recurrenceInterval;
    /**
     * A list of months when the recurring service occurs, if it is a seasonal recurrence type.
     *
     * @var string[]
     */
    protected $recurrenceMonths;
    /**
     * A list specifying which days of the week this recurring service recurs when.
     *
     * @var string[]
     */
    protected $recurrenceDaysOfWeek;
    /**
     * Enum value corresponding to which week of the month this recurring service recurs when.
     *
     * @var mixed
     */
    protected $recurrenceWeek;
    /**
     * Enum value corresponding to which day of the week this recurring service recurs when.
     *
     * @var mixed|null
     */
    protected $recurrenceDayOfNthWeek;
    /**
     * A list of days of the month on which this recurring service recurs when.
     *
     * @var int[]
     */
    protected $recurrenceDaysOfMonth;
    /**
     * Job start time.
     *
     * @var string|null
     */
    protected $jobStartTime;
    /**
     * Estimated payroll cost.
     *
     * @var float|null
     */
    protected $estimatedPayrollCost;

    /**
     * Recurring service ID.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Recurring service ID.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Recurring service name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Recurring service name.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Whether recurring service is active.
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * Whether recurring service is active.
     */
    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    /**
     * When recurring service was created.
     */
    public function getCreatedOn(): \DateTime
    {
        return $this->createdOn;
    }

    /**
     * When recurring service was created.
     */
    public function setCreatedOn(\DateTime $createdOn): self
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * ID of the user that created this recurring service.
     */
    public function getCreatedById(): ?int
    {
        return $this->createdById;
    }

    /**
     * ID of the user that created this recurring service.
     */
    public function setCreatedById(?int $createdById): self
    {
        $this->createdById = $createdById;

        return $this;
    }

    /**
     * When recurring service was modified.
     */
    public function getModifiedOn(): \DateTime
    {
        return $this->modifiedOn;
    }

    /**
     * When recurring service was modified.
     */
    public function setModifiedOn(\DateTime $modifiedOn): self
    {
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
        $this->importId = $importId;

        return $this;
    }

    /**
     * Customer membership ID.
     */
    public function getMembershipId(): ?int
    {
        return $this->membershipId;
    }

    /**
     * Customer membership ID.
     */
    public function setMembershipId(?int $membershipId): self
    {
        $this->membershipId = $membershipId;

        return $this;
    }

    /**
     * Location ID.
     */
    public function getLocationId(): int
    {
        return $this->locationId;
    }

    /**
     * Location ID.
     */
    public function setLocationId(int $locationId): self
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * Recurring Service Type ID.
     */
    public function getRecurringServiceTypeId(): int
    {
        return $this->recurringServiceTypeId;
    }

    /**
     * Recurring Service Type ID.
     */
    public function setRecurringServiceTypeId(int $recurringServiceTypeId): self
    {
        $this->recurringServiceTypeId = $recurringServiceTypeId;

        return $this;
    }

    /**
     * The recurrence duration type.
     *
     * @return mixed
     */
    public function getDurationType()
    {
        return $this->durationType;
    }

    /**
     * The recurrence duration type.
     *
     * @param mixed $durationType
     */
    public function setDurationType($durationType): self
    {
        $this->durationType = $durationType;

        return $this;
    }

    /**
     * The duration length for the given duration type.
     */
    public function getDurationLength(): int
    {
        return $this->durationLength;
    }

    /**
     * The duration length for the given duration type.
     */
    public function setDurationLength(int $durationLength): self
    {
        $this->durationLength = $durationLength;

        return $this;
    }

    /**
     * Beginning date of recurring service.
     */
    public function getFrom(): ?\DateTime
    {
        return $this->from;
    }

    /**
     * Beginning date of recurring service.
     */
    public function setFrom(?\DateTime $from): self
    {
        $this->from = $from;

        return $this;
    }

    /**
     * End date of recurring service.
     */
    public function getTo(): ?\DateTime
    {
        return $this->to;
    }

    /**
     * End date of recurring service.
     */
    public function setTo(?\DateTime $to): self
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Memo.
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Memo.
     */
    public function setMemo(?string $memo): self
    {
        $this->memo = $memo;

        return $this;
    }

    /**
     * Invoice template ID.
     */
    public function getInvoiceTemplateId(): ?int
    {
        return $this->invoiceTemplateId;
    }

    /**
     * Invoice template ID.
     */
    public function setInvoiceTemplateId(?int $invoiceTemplateId): self
    {
        $this->invoiceTemplateId = $invoiceTemplateId;

        return $this;
    }

    /**
     * Invoice template ID for the 2nd year and following (for ongoing memberships).
     */
    public function getInvoiceTemplateForFollowingYearsId(): ?int
    {
        return $this->invoiceTemplateForFollowingYearsId;
    }

    /**
     * Invoice template ID for the 2nd year and following (for ongoing memberships).
     */
    public function setInvoiceTemplateForFollowingYearsId(?int $invoiceTemplateForFollowingYearsId): self
    {
        $this->invoiceTemplateForFollowingYearsId = $invoiceTemplateForFollowingYearsId;

        return $this;
    }

    /**
     * Whether first visit is complete.
     */
    public function getFirstVisitComplete(): bool
    {
        return $this->firstVisitComplete;
    }

    /**
     * Whether first visit is complete.
     */
    public function setFirstVisitComplete(bool $firstVisitComplete): self
    {
        $this->firstVisitComplete = $firstVisitComplete;

        return $this;
    }

    /**
     * ID of the invoice item that is the sale task of this membership.
     */
    public function getActivatedFromId(): ?int
    {
        return $this->activatedFromId;
    }

    /**
     * ID of the invoice item that is the sale task of this membership.
     */
    public function setActivatedFromId(?int $activatedFromId): self
    {
        $this->activatedFromId = $activatedFromId;

        return $this;
    }

    /**
     * Recurring service allocation.
     */
    public function getAllocation(): float
    {
        return $this->allocation;
    }

    /**
     * Recurring service allocation.
     */
    public function setAllocation(float $allocation): self
    {
        $this->allocation = $allocation;

        return $this;
    }

    /**
     * Business unit ID.
     */
    public function getBusinessUnitId(): ?int
    {
        return $this->businessUnitId;
    }

    /**
     * Business unit ID.
     */
    public function setBusinessUnitId(?int $businessUnitId): self
    {
        $this->businessUnitId = $businessUnitId;

        return $this;
    }

    /**
     * Job type ID.
     */
    public function getJobTypeId(): ?int
    {
        return $this->jobTypeId;
    }

    /**
     * Job type ID.
     */
    public function setJobTypeId(?int $jobTypeId): self
    {
        $this->jobTypeId = $jobTypeId;

        return $this;
    }

    /**
     * Campaign ID.
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }

    /**
     * Campaign ID.
     */
    public function setCampaignId(?int $campaignId): self
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * Recurring service priority.
     *
     * @return mixed
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Recurring service priority.
     *
     * @param mixed $priority
     */
    public function setPriority($priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Job summary.
     */
    public function getJobSummary(): ?string
    {
        return $this->jobSummary;
    }

    /**
     * Job summary.
     */
    public function setJobSummary(?string $jobSummary): self
    {
        $this->jobSummary = $jobSummary;

        return $this;
    }

    /**
     * The recurrence type (e.g. Daily, Weekly, Monthly, etc.).
     *
     * @return mixed
     */
    public function getRecurrenceType()
    {
        return $this->recurrenceType;
    }

    /**
     * The recurrence type (e.g. Daily, Weekly, Monthly, etc.).
     *
     * @param mixed $recurrenceType
     */
    public function setRecurrenceType($recurrenceType): self
    {
        $this->recurrenceType = $recurrenceType;

        return $this;
    }

    /**
     * The recurrence interval for the given recurrence type.
    Can be 0 when RecurrenceType is Seasonal.
     */
    public function getRecurrenceInterval(): int
    {
        return $this->recurrenceInterval;
    }

    /**
     * The recurrence interval for the given recurrence type.
    Can be 0 when RecurrenceType is Seasonal.
     */
    public function setRecurrenceInterval(int $recurrenceInterval): self
    {
        $this->recurrenceInterval = $recurrenceInterval;

        return $this;
    }

    /**
     * A list of months when the recurring service occurs, if it is a seasonal recurrence type.
     *
     * @return string[]
     */
    public function getRecurrenceMonths(): array
    {
        return $this->recurrenceMonths;
    }

    /**
     * A list of months when the recurring service occurs, if it is a seasonal recurrence type.
     *
     * @param string[] $recurrenceMonths
     */
    public function setRecurrenceMonths(array $recurrenceMonths): self
    {
        $this->recurrenceMonths = $recurrenceMonths;

        return $this;
    }

    /**
     * A list specifying which days of the week this recurring service recurs when.
     *
     * @return string[]
     */
    public function getRecurrenceDaysOfWeek(): array
    {
        return $this->recurrenceDaysOfWeek;
    }

    /**
     * A list specifying which days of the week this recurring service recurs when.
     *
     * @param string[] $recurrenceDaysOfWeek
     */
    public function setRecurrenceDaysOfWeek(array $recurrenceDaysOfWeek): self
    {
        $this->recurrenceDaysOfWeek = $recurrenceDaysOfWeek;

        return $this;
    }

    /**
     * Enum value corresponding to which week of the month this recurring service recurs when.
     *
     * @return mixed
     */
    public function getRecurrenceWeek()
    {
        return $this->recurrenceWeek;
    }

    /**
     * Enum value corresponding to which week of the month this recurring service recurs when.
     *
     * @param mixed $recurrenceWeek
     */
    public function setRecurrenceWeek($recurrenceWeek): self
    {
        $this->recurrenceWeek = $recurrenceWeek;

        return $this;
    }

    /**
     * Enum value corresponding to which day of the week this recurring service recurs when.
     *
     * @return mixed
     */
    public function getRecurrenceDayOfNthWeek()
    {
        return $this->recurrenceDayOfNthWeek;
    }

    /**
     * Enum value corresponding to which day of the week this recurring service recurs when.
     *
     * @param mixed $recurrenceDayOfNthWeek
     */
    public function setRecurrenceDayOfNthWeek($recurrenceDayOfNthWeek): self
    {
        $this->recurrenceDayOfNthWeek = $recurrenceDayOfNthWeek;

        return $this;
    }

    /**
     * A list of days of the month on which this recurring service recurs when.
     *
     * @return int[]
     */
    public function getRecurrenceDaysOfMonth(): array
    {
        return $this->recurrenceDaysOfMonth;
    }

    /**
     * A list of days of the month on which this recurring service recurs when.
     *
     * @param int[] $recurrenceDaysOfMonth
     */
    public function setRecurrenceDaysOfMonth(array $recurrenceDaysOfMonth): self
    {
        $this->recurrenceDaysOfMonth = $recurrenceDaysOfMonth;

        return $this;
    }

    /**
     * Job start time.
     */
    public function getJobStartTime(): ?string
    {
        return $this->jobStartTime;
    }

    /**
     * Job start time.
     */
    public function setJobStartTime(?string $jobStartTime): self
    {
        $this->jobStartTime = $jobStartTime;

        return $this;
    }

    /**
     * Estimated payroll cost.
     */
    public function getEstimatedPayrollCost(): ?float
    {
        return $this->estimatedPayrollCost;
    }

    /**
     * Estimated payroll cost.
     */
    public function setEstimatedPayrollCost(?float $estimatedPayrollCost): self
    {
        $this->estimatedPayrollCost = $estimatedPayrollCost;

        return $this;
    }
}
