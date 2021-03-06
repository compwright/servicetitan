<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class DispatchV2NonJobAppointmentUpdateRequest
{
    /**
     * @var int
     */
    protected $technicianId;
    /**
     * @var \DateTime
     */
    protected $start;
    /**
     * @var string
     */
    protected $duration;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $timesheetCodeId;
    /**
     * @var string|null
     */
    protected $summary;
    /**
     * @var bool|null
     */
    protected $clearDispatchBoard;
    /**
     * @var bool|null
     */
    protected $clearTechnicianView;
    /**
     * @var bool|null
     */
    protected $removeTechnicianFromCapacityPlanning;

    public function getTechnicianId(): int
    {
        return $this->technicianId;
    }

    public function setTechnicianId(int $technicianId): self
    {
        $this->technicianId = $technicianId;

        return $this;
    }

    public function getStart(): \DateTime
    {
        return $this->start;
    }

    public function setStart(\DateTime $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getDuration(): string
    {
        return $this->duration;
    }

    public function setDuration(string $duration): self
    {
        $this->duration = $duration;

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

    public function getTimesheetCodeId(): int
    {
        return $this->timesheetCodeId;
    }

    public function setTimesheetCodeId(int $timesheetCodeId): self
    {
        $this->timesheetCodeId = $timesheetCodeId;

        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): self
    {
        $this->summary = $summary;

        return $this;
    }

    public function getClearDispatchBoard(): ?bool
    {
        return $this->clearDispatchBoard;
    }

    public function setClearDispatchBoard(?bool $clearDispatchBoard): self
    {
        $this->clearDispatchBoard = $clearDispatchBoard;

        return $this;
    }

    public function getClearTechnicianView(): ?bool
    {
        return $this->clearTechnicianView;
    }

    public function setClearTechnicianView(?bool $clearTechnicianView): self
    {
        $this->clearTechnicianView = $clearTechnicianView;

        return $this;
    }

    public function getRemoveTechnicianFromCapacityPlanning(): ?bool
    {
        return $this->removeTechnicianFromCapacityPlanning;
    }

    public function setRemoveTechnicianFromCapacityPlanning(?bool $removeTechnicianFromCapacityPlanning): self
    {
        $this->removeTechnicianFromCapacityPlanning = $removeTechnicianFromCapacityPlanning;

        return $this;
    }
}
