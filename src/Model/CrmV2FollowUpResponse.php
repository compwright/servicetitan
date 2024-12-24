<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class CrmV2FollowUpResponse
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
     * ID of the lead the follow-up is for.
     *
     * @var int
     */
    protected $leadId;
    /**
     * Follow-up date.
     *
     * @var \DateTime
     */
    protected $followUpDate;
    /**
     * Text of follow-up note.
     *
     * @var string|null
     */
    protected $text;
    /**
     * Whether to pin follow-up note to the top.
     *
     * @var bool
     */
    protected $pinToTop;

    /**
     * ID of the lead the follow-up is for.
     */
    public function getLeadId(): int
    {
        return $this->leadId;
    }

    /**
     * ID of the lead the follow-up is for.
     */
    public function setLeadId(int $leadId): self
    {
        $this->initialized['leadId'] = true;
        $this->leadId = $leadId;

        return $this;
    }

    /**
     * Follow-up date.
     */
    public function getFollowUpDate(): \DateTime
    {
        return $this->followUpDate;
    }

    /**
     * Follow-up date.
     */
    public function setFollowUpDate(\DateTime $followUpDate): self
    {
        $this->initialized['followUpDate'] = true;
        $this->followUpDate = $followUpDate;

        return $this;
    }

    /**
     * Text of follow-up note.
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Text of follow-up note.
     */
    public function setText(?string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;

        return $this;
    }

    /**
     * Whether to pin follow-up note to the top.
     */
    public function getPinToTop(): bool
    {
        return $this->pinToTop;
    }

    /**
     * Whether to pin follow-up note to the top.
     */
    public function setPinToTop(bool $pinToTop): self
    {
        $this->initialized['pinToTop'] = true;
        $this->pinToTop = $pinToTop;

        return $this;
    }
}
