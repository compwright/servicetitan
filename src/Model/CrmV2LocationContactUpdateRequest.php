<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class CrmV2LocationContactUpdateRequest
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
     * Type of contact.
     */
    protected $type;
    /**
     * Value of contact.
     *
     * @var string
     */
    protected $value;
    /**
     * Memo of contact.
     *
     * @var string
     */
    protected $memo;

    /**
     * Type of contact.
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of contact.
     */
    public function setType($type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Value of contact.
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Value of contact.
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    /**
     * Memo of contact.
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * Memo of contact.
     */
    public function setMemo(string $memo): self
    {
        $this->initialized['memo'] = true;
        $this->memo = $memo;

        return $this;
    }
}
