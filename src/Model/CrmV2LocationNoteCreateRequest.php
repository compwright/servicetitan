<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class CrmV2LocationNoteCreateRequest
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
     * Text content of location note.
     *
     * @var string
     */
    protected $text;
    /**
     * Whether to pin location note to the top.
     *
     * @var bool|null
     */
    protected $pinToTop;
    /**
     * Whether to add the same note to the location's customer.
     *
     * @var bool|null
     */
    protected $addToCustomer;

    /**
     * Text content of location note.
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Text content of location note.
     */
    public function setText(string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;

        return $this;
    }

    /**
     * Whether to pin location note to the top.
     */
    public function getPinToTop(): ?bool
    {
        return $this->pinToTop;
    }

    /**
     * Whether to pin location note to the top.
     */
    public function setPinToTop(?bool $pinToTop): self
    {
        $this->initialized['pinToTop'] = true;
        $this->pinToTop = $pinToTop;

        return $this;
    }

    /**
     * Whether to add the same note to the location's customer.
     */
    public function getAddToCustomer(): ?bool
    {
        return $this->addToCustomer;
    }

    /**
     * Whether to add the same note to the location's customer.
     */
    public function setAddToCustomer(?bool $addToCustomer): self
    {
        $this->initialized['addToCustomer'] = true;
        $this->addToCustomer = $addToCustomer;

        return $this;
    }
}
